<?php defined('BASEPATH') OR exit('No direct script access allowed');

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use JonnyW\PhantomJs\Client;

class Crawling extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('/baseball/baseball_model');
        date_default_timezone_set('Asia/Seoul');
    }

//  KBO
    function result($month){
            $source=json_decode($this->curl->simple_get('http://www.koreabaseball.com/ws/Schedule.asmx/GetScheduleList?leId=1&srIdList=0%2C9&seasonId=2017&gameMonth='.$month.'&teamId='));

            $date='';
            foreach($source->rows as $item):
                $len=0;
                $resultSet=array();
                foreach($item->row as $keys=>$items):
                    if($keys==0):
                        $len=strlen($items->Text);
                        if($len==10):
                            $date1=explode('(', $items->Text);
                            $date2=explode('.', $date1[0]);
                            $date=date('Y').'-'.$date2[0].'-'.$date2[1];
                            $resultSet['date']=$date;
                            $resultSet['stadium']=$item->row[7]->Text;
                        else:
                            $resultSet['date']=$date;
                            $resultSet['time']=strip_tags($items->Text);
                            $resultSet['stadium']=$item->row[6]->Text;
                        endif;
                    elseif($keys==1):
                        if($len==10):
                            $resultSet['time']=strip_tags($items->Text);
                        else:
                            $exp=explode('<span>vs</span>', $items->Text);
                            $exp1=explode('<em>', $exp[0]);
                            $away=$exp1[0];
                            $away_score=$exp1[1];
                            $exp2=explode('</em>', $exp[1]);
                            $home=$exp2[1];
                            $home_score=$exp2[0];

                            $resultSet['home']=strip_tags($home);
                            $resultSet['home_score']=strip_tags($home_score);
                            $resultSet['away']=strip_tags($away);
                            $resultSet['away_score']=strip_tags($away_score);
                        endif;
                    elseif($keys==2):
                        if($len==10):
                            $exp=explode('<span>vs</span>', $items->Text);
                            $exp1=explode('<em>', $exp[0]);
                            $away=$exp1[0];
                            $away_score=$exp1[1];
                            $exp2=explode('</em>', $exp[1]);
                            $home=$exp2[1];
                            $home_score=$exp2[0];

                            $resultSet['home']=strip_tags($home);
                            $resultSet['home_score']=strip_tags($home_score);
                            $resultSet['away']=strip_tags($away);
                            $resultSet['away_score']=strip_tags($away_score);
                        endif;
                    endif;
                endforeach;

                $this->baseball_model->insert_update_before('KBO_result', $resultSet, array('date'=>$resultSet['date'],'time'=>$resultSet['time'],'away'=>$resultSet['away'],'home'=>$resultSet['home']));
            endforeach;
    }

    function teamRecord(){
        /* 팀 종합기록 */
        $total=$this->getRankBoard('KBO', 'all', 'all', 'all', 0, 0);
        foreach($total as $key=>$item):
            unset($item->over); unset($item->over); unset($item->recent_win);  unset($item->recent_lose); unset($item->recent_ou); unset($item->recent_over);
            $str='';
            foreach($item->recent_game as $keys=>$items):
                if($items=='win') $str.='win';
                elseif($items=='lose') $str.='lose';
                else $str.='dra';
                if($keys!=9) $str.=';';
            endforeach;
            $total[$key]->recent_game=$str;
        endforeach;

        foreach($total as $key=>$item):
            unset($item->ou_home);
            unset($item->ou_away);
            $total[$key]->date=date('Y-m-d');
            $this->baseball_model->insert_update_before('KBO_team_total', $item, array('date'=>date('Y-m-d'),'team'=>$item->team));
        endforeach;

        /* KBO 공격력 순위 */
        $columns_batter1=array('rank','team','avg','g','pa','ab','r','h','second_b','third_b','hr','tb','rbi','sac','sf');
        $offense1=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Hitter/Basic1.aspx'), $columns_batter1);
        $columns_batter2=array('rank','team','avg','bb','ibb','hbp','so','gdp','slg','obp','ops','mh','risp','phba');
        $offense2=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Hitter/Basic2.aspx'), $columns_batter2);
        $columns_running=array('rank','team','g','sba','sb','cs','sbp','oob','pko');
        $source=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Runner/Basic.aspx'), $columns_running);

        foreach($offense1 as $key=>$entry):
            foreach($source as $entries):
                if($entry['team']==$entries['team']) $this->baseball_model->insert_update_before('KBO_team_offense', $entry+$offense2[$key]+$entries, array('team'=>$entry['team']));
            endforeach;
        endforeach;

        /* KBO 수비력 순위 */
        $columns_pitcher1=array('rank','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $defence1=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Pitcher/Basic1.aspx'), $columns_pitcher1);
        $columns_pitcher2=array('rank','team','era','cg','sho','qs','bsv','tbf','np','avg','second_b','third_b','sac','sf','ibb','wp','bk');
        $defence2=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Pitcher/Basic2.aspx'), $columns_pitcher2);
        $columns_defence=array('rank','team','g','e','pko','po','a','dp','fpct','pb','sb','cs','csp');
        $source=$this->get_array_combine($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Defense/Basic.aspx'), $columns_defence);

        foreach($defence1 as $key=>$entry):
            foreach($source as $entries):
                if($entry['team']==$entries['team']) $this->baseball_model->insert_update_before('KBO_team_defence', $entry+$defence2[$key]+$entries, array('team'=>$entry['team']));
            endforeach;
        endforeach;
    }

    function playerRecord(){
//      hitter
        $column_list1=array('team','avg','g','pa','ab','r','h','second_b','third_b','hr','tb','rbi','sb','cs','sac','sf');
        $column_list2=array('bb','ibb','hbp','so','gdp','slg','obp','e','sbp','mh','ops','risp','phba');

        $players_id=$this->baseball_model->get_players();
        foreach($players_id as $items):
            $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/HitterDetail/Basic.aspx?playerId='.$items->player_id);

            $piece_1=explode('</tbody>', $source);
            $result_set1=array();
            $result_set2=array();
            foreach($piece_1 as $key=>$item):
                if($key<2):
                    $pieces_6=explode('<tbody>', $item);
                    $pieces_2=explode("<tr>", $pieces_6[1]);
                    $pieces_3=explode("</tr>", $pieces_2[1]);

                    if($pieces_3[0]!="<td colspan='16'>기록이 없습니다.</td>" && $pieces_3[0]!="<td colspan='13'>기록이 없습니다.</td>"):
                        $pieces_4=explode("</td>", $pieces_3[0]);
                        $result=array();
                        foreach($pieces_4 as $item):
                            $pieces_5=explode('<td>', $item);
                            if(sizeof($pieces_5)==2) array_push($result, $pieces_5[1]);
                        endforeach;

                        if($key==0): $dataSet1=array_combine($column_list1, $result); $result_set1=$dataSet1; endif;
                        if($key==1): $dataSet2=array_combine($column_list2, $result); $result_set2=array('crawling_date'=>date('Y-m-d'), 'player_id'=>$items->player_id)+$result_set1+$dataSet2; endif;
                    endif;
                endif;
            endforeach;
            if($pieces_3[0]!="<td colspan='16'>기록이 없습니다.</td>" && $pieces_3[0]!="<td colspan='13'>기록이 없습니다.</td>"):
                $req_arr=$this->baseball_model->get_required('bat');
                foreach($req_arr as $key=>$item):
                    if($result_set2['team']==$key) $req=$item;
                endforeach;
                $req=($req < $result_set2['pa'])? 'Y':'N';
                $result_set=$result_set2+array('req_yn'=>$req);

                $this->baseball_model->insert_update_before('KBO_record_hitter', $result_set, array('player_id'=>$items->player_id));
            endif;
        endforeach;

//      pitcher
        $column_list1=array('team','era','g','cg','sho','w','l','sv','hld','wpct','tbf','np','ip','h','second_b','third_b','hr');
        $column_list2=array('sac','sf','bb','ibb','so','wp','bk','r','er','bsv','whip','avg','qs');
        $players=$this->baseball_model->get_players();
        foreach($players as $key=>$items):
            $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherDetail/Basic.aspx?playerId='.$items->player_id);
            $piece_1=explode('</tbody>', $source);
            $result_set1=array();
            $result_set2=array();
            foreach($piece_1 as $key=>$item):
                if($key<2):
                    $pieces_6=explode('<tbody>', $item);
                    $pieces_2=explode("<tr>", $pieces_6[1]);
                    $pieces_3=explode("</tr>", $pieces_2[1]);
                    if($pieces_3[0]!="<td colspan='17'>기록이 없습니다.</td>" && $pieces_3[0]!="<td colspan='13'>기록이 없습니다.</td>"):
                        $pieces_4=explode("</td>", $pieces_3[0]);
                        $result=array();
                        foreach($pieces_4 as $item):
                            $pieces_5=explode('<td>', $item);
                            if(sizeof($pieces_5)==2) array_push($result, $pieces_5[1]);
                        endforeach;

                        if($key==0): $dataSet1=array_combine($column_list1, $result); $result_set1=$dataSet1; endif;
                        if($key==1): $dataSet2=array_combine($column_list2, $result); $result_set2=array('crawling_date'=>date('Y-m-d'),'player_id'=>$items->player_id)+$result_set1+$dataSet2; endif;
                    endif;
                endif;
            endforeach;
            if($pieces_3[0]!="<td colspan='17'>기록이 없습니다.</td>" && $pieces_3[0]!="<td colspan='13'>기록이 없습니다.</td>"):
                $req_arr=$this->baseball_model->get_required('pit');
                foreach($req_arr as $key=>$item):
                    if($result_set2['team']==$key) $req=$item;
                endforeach;
                if(strlen($result_set2['ip'])>3):
                    $exp=explode(' ', $result_set2['ip']);
                    $req=($req < $exp[0])? 'Y':'N';
                else:
                    $exp2=explode('/', $result_set2['ip']);
                    if(sizeof($exp2)>1): $req='N';
                    else: $req=($req < $result_set2['ip'])? 'Y':'N'; endif;
                endif;
                $result_set=$result_set2+array('req_yn'=>$req);

                $this->baseball_model->insert_update_before('KBO_record_pitcher', $result_set, array('player_id'=>$items->player_id));
            endif;
        endforeach;
    }

    function kboMonth($month){
        $client=Client::getInstance();
        $client->getEngine()->setPath($_SERVER['DOCUMENT_ROOT'] . '/public/lib/js/phantomjs');

        $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/main?rows=20&order=TPCT&orderType=DESC&teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$month.'&split02_2='.$month, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $data=$client->send($request, $response);

        $exp=explode('<tbody>', $data->content);
        if(sizeof($exp)==3):
            $exp2=explode('</tr>', $exp[1]);

            $result=array();
            if(sizeof($exp2)==13):
                foreach($exp2 as $key=>$item):
                    if($key!=0 && $key!=11 && $key!=12):
                        $arr=array();
                        $exp3=explode('</td>', $item);
                        $arr['team']=preg_replace("/\s+/", "", strip_tags($exp3[1]));
                        $arr['g']=preg_replace("/\s+/", "", strip_tags($exp3[2]));
                        $arr['r']=preg_replace("/\s+/", "", strip_tags($exp3[9]));
                        $arr['hr']=preg_replace("/\s+/", "", strip_tags($exp3[10]));
                        $arr['avg']=preg_replace("/\s+/", "", strip_tags($exp3[15]));
                        $arr['month']=$month;

                        array_push($result, $arr);
                    endif;
                endforeach;

                $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/standard?teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$month.'&split02_2='.$month, 'GET');
                $response=$client->getMessageFactory()->createResponse();
                $data2=$client->send($request, $response);

                $exp=explode('<tbody>', $data2->content);
                $exp2=explode('</tr>', $exp[1]);
                $result2=array();
                foreach($exp2 as $key=>$item):
                    if($key!=0 && $key!=11 && $key!=12):
                        $arr2=array();
                        $exp3=explode('</td>', $item);
                        $arr2['team']=preg_replace("/\s+/", "", strip_tags($exp3[1]));
                        $arr2['h']=preg_replace("/\s+/", "", strip_tags($exp3[5]));

                        array_push($result2, $arr2);
                    endif;
                endforeach;
                foreach($result as $key=>$item) foreach($result2 as $items) if($item['team']==$items['team']) $result[$key]['h']=$items['h'];

                foreach($result as $item) if($item['team']!='') $this->baseball_model->insert_update_before('KBO_team_month', $item, array('month'=>$item['month'], 'team'=>$item['team']));
            endif;
        endif;

//      볼넷, 삼진
        $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/pitcher/standard?teamId=&pitcher_type=&year_from=2017&year_to=2017&split01=month&split02_1='.$month.'&split02_2='.$month, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $data3=$client->send($request, $response);

        $exp3=explode('<tbody>', $data3->content);
        $exp4=explode('</tbody>', $exp3[1]);
        $data=array();
        foreach($exp4 as $key=>$item):
            if($key%2==0):
                array_push($data, $item);
            endif;
        endforeach;

        $result_set1=array();
        foreach($data as $item):
            $exp5=explode('</tr>', $item);
            foreach($exp5 as $key=>$items):
                if($key!=0 && $key!=count($exp5)-1):
                    $result=array();
                    $exp6=explode('</td>', $items);

                    $result['month']=$month;
                    $result['team']=preg_replace("/\s+/", "", strip_tags($exp6[1]));
                    $result['bb']=preg_replace("/\s+/", "", strip_tags($exp6[17]));
                    $result['so']=preg_replace("/\s+/", "", strip_tags($exp6[18]));

                    array_push($result_set1, $result);
                endif;
            endforeach;
        endforeach;

        $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/pitcher/advanced?teamId=&pitcher_type=&year_from=2017&year_to=2017&split01=month&split02_1='.$month.'&split02_2='.$month, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $data4=$client->send($request, $response);

        $exp3=explode('<tbody>', $data4->content);
        $exp4=explode('</tbody>', $exp3[1]);
        $data=array();
        foreach($exp4 as $key=>$item):
            if($key%2==0):
                array_push($data, $item);
            endif;
        endforeach;

        $result_set2=array();
        foreach($data as $item):
            $exp5=explode('</tr>', $item);
            foreach($exp5 as $key=>$items):
                if($key!=0 && $key!=count($exp5)-1):
                    $result=array();
                    $exp6=explode('</td>', $items);

                    $result['month']=$month;
                    $result['team']=preg_replace("/\s+/", "", strip_tags($exp6[1]));
                    $result['whip']=preg_replace("/\s+/", "", strip_tags($exp6[14]));

                    array_push($result_set2, $result);
                endif;
            endforeach;
        endforeach;

        foreach($result_set2 as $item):
            foreach($result_set1 as $items):
                if($item['team']==$items['team'] && $items['bb']!='' && $items['team']!='전체') $this->baseball_model->insert_update_before('KBO_team_month', array('month'=>$items['month'],'team'=>$items['team'],'bb'=>$items['bb'],'so'=>$items['so'],'whip'=>$item['whip']), array('month'=>$items['month'],'team'=>$items['team']));
            endforeach;
        endforeach;
    }

    function kboStartPitcher($date){
        $team=array('SK'=>1,'kt'=>2,'KT'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10);

        $client=Client::getInstance();
        $client->getEngine()->setPath($_SERVER['DOCUMENT_ROOT'] . '/public/lib/js/phantomjs');

        $request=$client->getMessageFactory()->createRequest('http://www.koreabaseball.com/Schedule/GameCenter/Main.aspx?gameDate='.$date, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $client->send($request, $response);

        $exp=explode('away_nm="', $response->getContent());

        for($i=1; $i<6; $i++):
            $exp1=explode('"', $exp[$i]);
            $result_set['away']=$exp1[0];
            $result_set['home']=$exp1[2];
            $away_pitcher=$this->baseball_model->get_player_name_by_id($exp1[4]);
            $home_pitcher=$this->baseball_model->get_player_name_by_id($exp1[6]);

            if(!isset($away_pitcher)):
                $url='http://www.koreabaseball.com/Record/Player/PitcherDetail/Basic.aspx?playerId='.$exp1[4];
                $request=$client->getMessageFactory()->createRequest($url, 'GET');
                $response=$client->getMessageFactory()->createResponse();
                $client->send($request, $response);

                $exp2=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblName">', $response->getContent());
                $exp3=explode('</span>', $exp2[1]);
                $result_set['away_pitcher']=$exp3[0];

                $this->baseball_model->insert_update_before('KBO_players', array('year'=>date('Y'),'team_no'=>$team[$result_set['away']],'player_id'=>$exp1[4],'name'=>$exp3[0],'delete_yn'=>'N'), array('team_no'=>$team[$result_set['away']],'name'=>$exp3[0]));
            else:
                $result_set['away_pitcher']=$away_pitcher->name;
            endif;

            if(!isset($home_pitcher)):
                $url='http://www.koreabaseball.com/Record/Player/PitcherDetail/Basic.aspx?playerId='.$exp1[6];
                $request=$client->getMessageFactory()->createRequest($url, 'GET');
                $response=$client->getMessageFactory()->createResponse();
                $client->send($request, $response);

                $exp2=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblName">', $response->getContent());
                $exp3=explode('</span>', $exp2[1]);
                $result_set['home_pitcher']=$exp3[0];

                $this->baseball_model->insert_update_before('KBO_players', array('year'=>date('Y'),'team_no'=>$team[$result_set['home']],'player_id'=>$exp1[4],'name'=>$exp3[0],'delete_yn'=>'N'), array('team_no'=>$team[$result_set['home']],'name'=>$exp3[0]));
            else:
                $result_set['home_pitcher']=$home_pitcher->name;
            endif;

            $this->baseball_model->insert_update_before('KBO_result', $result_set, array('date'=>$result_set['date'], 'away'=>$result_set['away']=$exp1[0]));
        endfor;
    }

    function kboPitcherVsTeam(){
        $players=$this->baseball_model->get_players();

        foreach($players as $player):
            $data=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherDetail/Game.aspx?playerId='.$player->player_id);
            $column_list=array('team','g','era','w','l','sv','hld','wpct','tbf','ip','h','hr','bb','hbp','so','r','er','avg');
            $exp1=explode('<tbody>', $data);
            $exp2=explode('</tr>', $exp1[1]);
            if(sizeof($exp2) > 3):
                $exp2=array_splice($exp2, 0, sizeof($exp2)-1);
                foreach($exp2 as $item):
                    $result=array();
                    $exp3=explode('</td>', $item);
                    if(sizeof($exp3) > 1):
                        foreach($column_list as $key=>$items):
                            if($key!=9): $result[$items]=preg_replace("/\s+/", "", strip_tags($exp3[$key]));
                            else:
                                $exp4=explode(' ', strip_tags($exp3[$key]));
                                if(sizeof($exp4)==2):
                                    $result[$items]=preg_replace("/\s+/", "", $exp4[0]).' '.$exp4[1];
                                elseif(sizeof($exp4)==1):
                                    $result[$items]=preg_replace("/\s+/", "", $exp4[0]);
                                endif;
                            endif;
                        endforeach;

                        $this->baseball_model->insert_update_before('KBO_pitcher_vs_team', $result+array('player_id'=>$player->player_id), array('player_id'=>$player->player_id, 'team'=>$result['team']));
                    endif;
                endforeach;
            endif;
        endforeach;
    }

    function kboRelationHrAvg(){
        $schedule=$this->baseball_model->get_where('KBO_result', array('date<='=>date('Y-m-d')));

        foreach($schedule as $item):
            $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS');
            $away=$team_initial[$item->away];
            $home=$team_initial[$item->home];
            $date=str_replace('-', '', $item->date);

            $result=array();
            $client=Client::getInstance();
            $client->getEngine()->setPath($_SERVER['DOCUMENT_ROOT'] . '/public/lib/js/phantomjs');
            $url='http://www.koreabaseball.com/Schedule/GameCenter/Main.aspx?gameDate='.$date.'&gameId='.$date.$away.$home.'0& section=REVIEW';

            $request=$client->getMessageFactory()->createRequest($url, 'GET');
            $response=$client->getMessageFactory()->createResponse();
            $data=$client->send($request, $response);

            $exp=explode('</td></tr></tfoot></table></div>', $data->content);
            $exp1=explode('<td>', $exp[0]);
            $away_avg=$exp1[sizeof($exp1)-1];

            $exp2=explode('<td>', $exp[1]);
            $home_avg=$exp2[sizeof($exp2)-1];

            $result['schedule_no']=$item->no;
            $result['away_avg']=$away_avg;
            $result['home_avg']=$home_avg;

            $exp3=explode('<td colspan="6">TOTAL</td>', $data->content);
            $exp4=explode('</tr></tfoot>', $exp3[1]);
            $exp5=explode('</td>', $exp4[0]);
            $result['away_hr']=strip_tags($exp5[5]);
            $exp6=explode('</tr></tfoot>', $exp3[2]);
            $exp7=explode('</td>', $exp6[0]);
            $result['home_hr']=strip_tags($exp7[5]);

            $this->baseball_model->insert_update_before('KBO_h2h', $result, array('schedule_no'=>$result['schedule_no']));
        endforeach;
    }

    function cronDaily(){
        $this->result(date('m'));
        $this->teamRecord();
        $this->playerRecord();
        $this->kboMonth(date('n'));
        $this->kboStartPitcher(date('Y-m-d'));
        $this->kboPitcherVsTeam();
        $this->kboRelationHrAvg();
    }

//  MLB
    function optaResult(){
        $mlb_teams=array('Los Angeles Angels of Anaheim'=>1,'Houston Astros'=>2,'Oakland Athletics'=>3,'Toronto Blue Jays'=>4,'Atlanta Braves'=>5,'Milwaukee Brewers'=>6,'St. Louis Cardinals'=>7,'Chicago Cubs'=>8,'Arizona Diamondbacks'=>9,'Los Angeles Dodgers'=>10,'San Francisco Giants'=>11,'Cleveland Indians'=>12,'Miami Marlins'=>13,'Seattle Mariners'=>14,'New York Mets'=>15,'Washington Nationals'=>16,'Baltimore Orioles'=>17,'San Diego Padres'=>18,'Philadelphia Phillies'=>19,'Pittsburgh Pirates'=>20,'Texas Rangers'=>21,'Tampa Bay Rays'=>22,'Boston Red Sox'=>23,'Cincinnati Reds'=>24,'Colorado Rockies'=>25,'Kansas City Royals'=>26,'Detroit Tigers'=>27,'Minnesota Twins'=>28,'Chicago White Sox'=>29,'New York Yankees'=>30,'American League'=>31,'National League'=>32);

//      오늘 날짜까지 크롤링 : 2331
        for($i=1; $i<5; $i++):
            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&live=yes&status=played&_pgSz=1000&_fmt=json&_pgNm='.$i));
            if(isset($opta_data)):
                foreach($opta_data->match as $items):
                    $result=array();
                    if(date('Y-m-d', strtotime($items->matchInfo->date)) <= date('Y-m-d')):
                        if($items->matchInfo->stage->name=='Regular Season'):
                            $opta_data_score=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/matchstats/d10jn0i4i5a81s7l0k6qz2i38/'.$items->matchInfo->id.'?&_fmt=json'));

                            $result['id']=$items->matchInfo->id;
                            $date=date('Y-m-d H:i:s', strtotime($items->matchInfo->date.' '.$items->matchInfo->time));
                            $result['date']=date('Y-m-d', strtotime($date));
                            $result['time']=date('H:i', strtotime($date));
                            $result['home']=$items->matchInfo->contestant[0]->name;
                            $result['home_score']=($opta_data_score==null)? '' : $opta_data_score->matchStats->liveData->matchDetails->scores->total->home;
                            $result['away']=$items->matchInfo->contestant[1]->name;
                            $result['away_score']=($opta_data_score==null)? '' : $opta_data_score->matchStats->liveData->matchDetails->scores->total->away;
                            $result['stadium']=$items->matchInfo->venue->name;

                            $away_eng=(isset($items->liveData->matchDetails->playStatus->probableAwayPitcher))? $items->liveData->matchDetails->playStatus->probableAwayPitcher : '';
                            $away_kor=$this->baseball_model->get_where_row('MLB_players', array('name'=>$away_eng, 'team_no'=>$mlb_teams[$result['away']]));
                            $away_pitcher_kor=($away_kor==null)? $away_eng : $away_kor->name_kor;
                            $result['away_pitcher']=$away_eng;
                            $result['away_pitcher_kor']=$away_pitcher_kor;
                            $home_eng=(isset($items->liveData->matchDetails->playStatus->probableHomePitcher))? $items->liveData->matchDetails->playStatus->probableHomePitcher : '';
                            $home_kor=$this->baseball_model->get_where_row('MLB_players', array('name'=>$home_eng, 'team_no'=>$mlb_teams[$result['home']]));
                            $home_pitcher_kor=($home_kor==null)? $home_eng : $home_kor->name_kor;
                            $result['home_pitcher']=$home_eng;
                            $result['home_pitcher_kor']=$home_pitcher_kor;

                            $this->baseball_model->insert_update_before('MLB_result', $result, array('id'=>$result['id']));
                        endif;
                    endif;
                endforeach;
            endif;
        endfor;

//      전체 크롤링 : 2982
//        for($i=1; $i<4; $i++):
//            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&_pgSz=1000&_fmt=json&_pgNm='.$i));
//
//            foreach($opta_data->match as $items):
//                $result['id']=$items->matchInfo->id;
//                if($items->matchInfo->id=='93v3ltt612tis5en3zszjce09') $time='08:10'; elseif(isset($items->matchInfo->time)) $time=$items->matchInfo->time; else $time='00:00';
//                $date=date('Y-m-d H:i:s', strtotime($items->matchInfo->date.' '.$time));
//                $result['date']=date('Y-m-d', strtotime($date));
//                $result['time']=date('H:i', strtotime($date));
//                $result['home']=$items->matchInfo->contestant[0]->name;
//                $result['home_score']='';
//                $result['away']=$items->matchInfo->contestant[1]->name;
//                $result['away_score']='';
//                $result['stadium']=$items->matchInfo->venue->name;
//
//                $away_eng=(isset($items->liveData->matchDetails->playStatus->probableAwayPitcher))? $items->liveData->matchDetails->playStatus->probableAwayPitcher : '';
//                $away_kor=$this->baseball_model->get_where_row('MLB_players', array('name'=>$away_eng, 'team_no'=>$mlb_teams[$result['away']]));
//                $away_pitcher_kor=($away_kor==null)? $away_eng : $away_kor->name_kor;
//                $result['away_pitcher']=$away_eng;
//                $result['away_pitcher_kor']=$away_pitcher_kor;
//                $home_eng=(isset($items->liveData->matchDetails->playStatus->probableHomePitcher))? $items->liveData->matchDetails->playStatus->probableHomePitcher : '';
//                $home_kor=$this->baseball_model->get_where_row('MLB_players', array('name'=>$home_eng, 'team_no'=>$mlb_teams[$result['home']]));
//                $home_pitcher_kor=($home_kor==null)? $home_eng : $home_kor->name_kor;
//                $result['home_pitcher']=$home_eng;
//                $result['home_pitcher_kor']=$home_pitcher_kor;
//
//                $this->baseball_model->insert_update_before('MLB_result', $result, array('id'=>$result['id']));
//            endforeach;
//        endfor;
    }

    function optaTeamRecord(){
        $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/standings/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&_fmt=json'));

        $conferences=array();
        foreach($opta_data->teamStandings->conferences->conference[0]->ranking as $item) array_push($conferences, $item);
        foreach($opta_data->teamStandings->conferences->conference[1]->ranking as $item) array_push($conferences, $item);

        for($i=0; $i<6; $i++):
            $result=array();
            $result['date']=date('Y-m-d');
            $result['conference']=$opta_data->teamStandings->divisions->division[$i]->conference;
            $exp=explode(' - ', $opta_data->teamStandings->divisions->division[$i]->title);
            $result['division']=$exp[1];
            for($j=0; $j<5; $j++):
                $result['division_rank']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->rank;
                $result['team']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->contestantName;
                $result['g']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->matchesPlayed;
                $result['win']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->matchesWon;
                $result['lose']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->matchesLost;
                $result['win_rate']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->winPercentage;
                $result['games_back']=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->gamesBack;

                $contestantId=$opta_data->teamStandings->divisions->division[$i]->ranking[$j]->contestantId;
                $tenDayBefore=date('Y-m-d', strtotime(date('Y-m-d')."-10 day"));
                $today=date('Y-m-d', strtotime(date('Y-m-d')."-1 day"));
                $opta_data2=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?mt.mDt=['.$tenDayBefore.'T00:00:00ZTO'.$today.'T23:59:59Z]&ctst='.$contestantId.'&_fmt=json'));
                $win_or_lose='';
                foreach($opta_data2->match as $item):
                    $opta_data3=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/matchstats/d10jn0i4i5a81s7l0k6qz2i38/'.$item->matchInfo->id.'?_fmt=json'));
                    if($opta_data3->matchStats->matchInfo->contestant[0]->id==$contestantId) $home_or_away=$opta_data3->matchStats->matchInfo->contestant[0]->position;
                    else $home_or_away=$opta_data3->matchStats->matchInfo->contestant[1]->position;
                    $home=$opta_data3->matchStats->liveData->matchDetails->scores->total->home;
                    $away=$opta_data3->matchStats->liveData->matchDetails->scores->total->away;
                    if($home_or_away=='home') $win_or_lose=($home > $away)? $win_or_lose.';win' : $win_or_lose.';lose';
                    else $win_or_lose=($home > $away)? $win_or_lose.';lose' : $win_or_lose.';win';
                endforeach;
                $result['recent_game']=substr($win_or_lose, 1);
                $where=array('team'=>$result['team']);

                foreach($conferences as $item) if($result['team']==$item->contestantName) $result['conference_rank']=$item->rank;

                $league=$opta_data->teamStandings->league->ranking;
                foreach($league as $item) if($result['team']==$item->contestantName) $result['rank']=$item->rank;

                $this->baseball_model->insert_update_before('MLB_team_total', $result, $where);
            endfor;
        endfor;
    }

    function optaTeam(){
        $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&_pgSz=150&_fmt=json&_pgNm=1'));

        foreach($opta_data as $item):
            foreach($item as $items):
                $id=$items->matchInfo->contestants->contestant[0]->id;
                $name=$items->matchInfo->contestants->contestant[0]->name;
                $stadium=$items->matchInfo->venue->name;
                $result_set=array('id'=>$id, 'name'=>$name, 'stadium'=>$stadium);

                $this->baseball_model->insert_update_before('MLB_teams', $result_set, array('id'=>$id));
            endforeach;
        endforeach;
    }

    function optaPlayersDetail(){
        $teams=$this->baseball_model->get('MLB_teams');
        foreach($teams as $team):
            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/squads/d10jn0i4i5a81s7l0k6qz2i38?ctst='.$team->id.'&detailed=yes&_fmt=json'));
            $players=$opta_data->teamSquads->squads->squad[0]->person;
            foreach($players as $player):
                $result=array();
                $result['year']=date('Y');
                $result['team']=(isset($team->name))? $team->name : '';
                $result['id']=(isset($player->id))? $player->id : '';
                $result['type']=(isset($player->type))? $player->type : '';
                $result['first_name']=(isset($player->firstName))? $player->firstName : '';
                $result['last_name']=(isset($player->lastName))? $player->lastName : '';
                $result['match_name']=(isset($player->matchName))? $player->matchName : '';
                $result['position']=(isset($player->position))? $player->position : '';
                $result['nationality']=(isset($player->nationality))? $player->nationality : '';
                $result['date_of_birth']=(isset($player->dateOfBirth))? $player->dateOfBirth : '';
                $result['place_of_birth']=(isset($player->placeOfBirth))? $player->placeOfBirth : '';
                $result['country_of_birth']=(isset($player->countryOfBirth))? $player->countryOfBirth : '';
                $result['height']=(isset($player->height))? $player->height : '';
                $result['weight']=(isset($player->weight))? $player->weight : '';
                $result['college']=(isset($player->college))? $player->college : '';
                $result['experience']=(isset($player->experience))? $player->experience : '';

                $this->baseball_model->insert_update_before('MLB_players_detail', $result, array('id'=>$result['id']));
            endforeach;
        endforeach;
    }

    function mlbPlayers(){
        $players=$this->baseball_model->get('MLB_players');
        foreach($players as $keys=>$player):
            $opta_data=json_decode($this->curl->simple_get("http://m.mlb.com/lookup/json/named.sport_hitting_composed.bam?game_type='R'&league_list_id='mlb_hist'&sort_by='season_asc'&player_id=".$player->player_id."&sport_hitting_composed.season=2017"));
            if(isset($opta_data->sport_hitting_composed->sport_hitting_agg->queryResults->row)):
                foreach($opta_data->sport_hitting_composed->sport_hitting_agg->queryResults->row as $key=>$item):
                    if(gettype($item)!='string'):
                        $result=array('crawling_date'=>date('Y-m-d'),
                            'player_id'=>$item->player_id,
                            'year'=>$item->season,
                            'team'=>$opta_data->sport_hitting_composed->sport_hitting_tm->queryResults->row[$key]->team_full,
                            'lg'=>$opta_data->sport_hitting_composed->sport_hitting_tm->queryResults->row[$key]->league,
                            'g'=>$item->g,
                            'ab'=>$item->ab,
                            'r'=>$item->r,
                            'h'=>$item->h,
                            'tb'=>$item->tb,
                            'second_b'=>$item->d,
                            'third_b'=>$item->t,
                            'hr'=>$item->hr,
                            'rbi'=>$item->rbi,
                            'bb'=>$item->bb,
                            'ibb'=>$item->ibb,
                            'so'=>$item->so,
                            'sb'=>$item->sb,
                            'cs'=>$item->cs,
                            'avg'=>$item->avg,
                            'obp'=>$item->obp,
                            'slg'=>$item->slg,
                            'ops'=>$item->ops,
                            'goao'=>$item->go_ao,
                            'pa'=>$item->tpa,
                            'xbh'=>$item->xbh,
                            'hbp'=>$item->hbp,
                            'sac'=>$item->sac,
                            'sf'=>$item->sf,
                            'babip'=>$item->babip,
                            'gdp'=>$item->gidp,
                            'gidpo'=>$item->gidp_opp);
                        if($result['year']=='2017'):
                            $team_offense=$this->baseball_model->get_where_row('MLB_team_offense', array('team'=>$result['team']));
                            $result['req_yn']=($result['ab'] >= number_format($team_offense->g*3.1, 1))? 'Y' : 'N';
                        endif;
                        $this->baseball_model->insert_update_before('MLB_record_hitter', $result, array('player_id'=>$result['player_id'],'year'=>$result['year']));
                    endif;
                endforeach;
            endif;

            $opta_data=json_decode($this->curl->simple_get("http://mlb.mlb.com/lookup/json/named.sport_pitching_composed.bam?game_type='R'&league_list_id='mlb_hist'&sort_by='season_asc'&player_id=".$player->player_id."&sport_pitching_composed.season=2017"));
            if(isset($opta_data->sport_pitching_composed->sport_pitching_agg->queryResults->row)):
                foreach($opta_data->sport_pitching_composed->sport_pitching_agg->queryResults->row as $key=>$item):
                    if(gettype($item)!='string'):
                        $result=array('crawling_date'=>date('Y-m-d'),
                            'player_id'=>$item->player_id,
                            'year'=>$item->season,
                            'team'=>$opta_data->sport_pitching_composed->sport_pitching_tm->queryResults->row[$key]->team_full,
                            'lg'=>$opta_data->sport_pitching_composed->sport_pitching_tm->queryResults->row[$key]->league,
                            'w'=>$item->w,
                            'l'=>$item->l,
                            'era'=>$item->era,
                            'wpct'=>$item->wpct,
                            'g'=>$item->g,
                            'gs'=>$item->gs,
                            'cg'=>$item->cg,
                            'sho'=>$item->sho,
                            'sv'=>$item->sv,
                            'ip'=>$item->ip,
                            'h'=>$item->h,
                            'r'=>$item->r,
                            'er'=>$item->er,
                            'hr'=>$item->hr,
                            'bb'=>$item->bb,
                            'ibb'=>$item->ibb,
                            'so'=>$item->so,
                            'avg'=>$item->avg,
                            'whip'=>$item->whip,
                            'goao'=>$item->go_ao,
                            'qs'=>$item->qs,
                            'gf'=>$item->gf,
                            'hld'=>$item->hld,
                            'second_b'=>$item->db,
                            'third_b'=>$item->tr,
                            'gidp'=>$item->gidp,
                            'gidpo'=>$item->gidp_opp,
                            'wp'=>$item->wp,
                            'bk'=>$item->bk,
                            'sb'=>$item->sb,
                            'cs'=>$item->cs,
                            'pk'=>$item->pk,
                            'np'=>$item->np,
                            'sp'=>$item->spct,
                            'pip'=>$item->pip,
                            'ppa'=>$item->ppa);
                        if($result['year']=='2017'):
                            $team_defence=$this->baseball_model->get_where_row('MLB_team_defence', array('team'=>$result['team']));
                            $result['req_yn']=($result['ip'] >= number_format($team_defence->g, 1))? 'Y' : 'N';
                        endif;

                        $this->baseball_model->insert_update_before('MLB_record_pitcher', $result, array('player_id'=>$result['player_id'],'year'=>$result['year']));
                    endif;
                endforeach;
            endif;
        endforeach;
    }

    function optaTeamDetail(){
        $client=Client::getInstance();
        $client->getEngine()->setPath($_SERVER['DOCUMENT_ROOT'] . '/public/lib/js/phantomjs');

        $request=$client->getMessageFactory()->createRequest('http://boston.redsox.mlb.com/stats/sortable.jsp#elem=%5Bobject+Object%5D&tab_level=child&click_text=Sortable+Team+hitting&game_type=R&season=2017&season_type=ANY&league_code=MLB&sectionType=st&statType=hitting&page=1&ts=1500535197398', 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $client->send($request, $response);

        $exp=explode('<tbody tabindex="-1">', $response->getContent());
        $exp1=explode('</tbody>', $exp[1]);
        $exp2=explode('</tr>', $exp1[0]);
        array_pop($exp2);

        foreach($exp2 as $item):
            $exp3=explode('</td>', $item);
            $arr=array(
                'rank'=>strip_tags($exp3[0]),
                'team'=>strip_tags($exp3[1]),
                'lg'=>strip_tags($exp3[3]),
                'g'=>strip_tags($exp3[4]),
                'ab'=>strip_tags($exp3[5]),
                'r'=>strip_tags($exp3[6]),
                'h'=>strip_tags($exp3[7]),
                'second_b'=>strip_tags($exp3[8]),
                'third_b'=>strip_tags($exp3[9]),
                'hr'=>strip_tags($exp3[10]),
                'rbi'=>strip_tags($exp3[11]),
                'bb'=>strip_tags($exp3[12]),
                'so'=>strip_tags($exp3[13]),
                'sb'=>strip_tags($exp3[14]),
                'cs'=>strip_tags($exp3[15]),
                'avg'=>strip_tags($exp3[16]),
                'obp'=>strip_tags($exp3[17]),
                'slg'=>strip_tags($exp3[18]),
                'ops'=>strip_tags($exp3[19]),
                'ibb'=>strip_tags($exp3[20]),
                'hbp'=>strip_tags($exp3[21]),
                'sac'=>strip_tags($exp3[22]),
                'sf'=>strip_tags($exp3[23]),
                'tb'=>strip_tags($exp3[24]),
                'xbh'=>strip_tags($exp3[25]),
                'gdp'=>strip_tags($exp3[26]),
                'go'=>strip_tags($exp3[27]),
                'ao'=>strip_tags($exp3[28]),
                'go_ao'=>strip_tags($exp3[29]),
                'np'=>strip_tags($exp3[30]),
                'pa'=>strip_tags($exp3[31])
            );
            $this->baseball_model->insert_update_before('MLB_team_offense', $arr, array('team'=>$arr['team']));
        endforeach;

        $request=$client->getMessageFactory()->createRequest('http://boston.redsox.mlb.com/stats/sortable.jsp#elem=%5Bobject+Object%5D&tab_level=child&click_text=Sortable+Team+pitching&game_type=R&season=2017&season_type=ANY&league_code=MLB&sectionType=st&statType=pitching&page=1&ts=1500540346868', 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $client->send($request, $response);

        $exp=explode('<tbody tabindex="-1">', $response->getContent());
        $exp1=explode('</tbody>', $exp[1]);
        $exp2=explode('</tr>', $exp1[0]);
        array_pop($exp2);

        foreach($exp2 as $item):
            $exp3=explode('</td>', $item);
            array_pop($exp3);
            $arr=array(
                'rank'=>strip_tags($exp3[0]),
                'team'=>strip_tags($exp3[1]),
                'lg'=>strip_tags($exp3[3]),
                'w'=>strip_tags($exp3[4]),
                'l'=>strip_tags($exp3[5]),
                'era'=>strip_tags($exp3[6]),
                'g'=>strip_tags($exp3[7]),
                'gs'=>strip_tags($exp3[8]),
                'sv'=>strip_tags($exp3[9]),
                'svo'=>strip_tags($exp3[10]),
                'ip'=>strip_tags($exp3[11]),
                'h'=>strip_tags($exp3[12]),
                'r'=>strip_tags($exp3[13]),
                'er'=>strip_tags($exp3[14]),
                'hr'=>strip_tags($exp3[15]),
                'bb'=>strip_tags($exp3[16]),
                'so'=>strip_tags($exp3[17]),
                'avg'=>strip_tags($exp3[18]),
                'whip'=>strip_tags($exp3[19]),
                'cg'=>strip_tags($exp3[20]),
                'sho'=>strip_tags($exp3[21]),
                'hb'=>strip_tags($exp3[22]),
                'ibb'=>strip_tags($exp3[23]),
                'gf'=>strip_tags($exp3[24]),
                'hld'=>strip_tags($exp3[25]),
                'gidp'=>strip_tags($exp3[26]),
                'go'=>strip_tags($exp3[27]),
                'ao'=>strip_tags($exp3[28]),
                'wp'=>strip_tags($exp3[29]),
                'bk'=>strip_tags($exp3[30]),
                'sb'=>strip_tags($exp3[31]),
                'cs'=>strip_tags($exp3[32]),
                'pk'=>strip_tags($exp3[33]),
                'tbf'=>strip_tags($exp3[34]),
                'np'=>strip_tags($exp3[35]),
                'wpct'=>strip_tags($exp3[36]),
                'go_ao'=>strip_tags($exp3[37]),
                'obp'=>strip_tags($exp3[38]),
                'slg'=>strip_tags($exp3[39]),
                'ops'=>strip_tags($exp3[40])
            );

            $this->baseball_model->insert_update_before('MLB_team_defence', $arr, array('team'=>$arr['team']));
        endforeach;
    }

    function mlbStartPitcher(){
        for($i=0; $i<3; $i++):
            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&_fmt=json&live=yes&status=played&_pgSz=1000&_pgNm='.$i));
            if(isset($opta_data)):
                foreach($opta_data->match as $item):
                    if($item->matchInfo->stage->name=='Regular Season'):
                        $away=$item->matchInfo->contestant[1]->name;
                        $home=$item->matchInfo->contestant[0]->name;
                        $date=date('Y-m-d', strtotime($item->matchInfo->date));
                        $result['away_pitcher']=(isset($item->liveData->matchDetails->playStatus->probableAwayPitcher))? $item->liveData->matchDetails->playStatus->probableAwayPitcher : '';
                        $result['home_pitcher']=(isset($item->liveData->matchDetails->playStatus->probableHomePitcher))? $item->liveData->matchDetails->playStatus->probableHomePitcher : '';
                        if($result['home_pitcher']=='' || $result['away_pitcher']=='') var_dump($item->liveData);

                        if($result['away_pitcher']!='' && $result['away_pitcher']!='') $this->baseball_model->insert_update_before('MLB_result', $result, array('away'=>$away,'home'=>$home,'date'=>$date));
                    endif;
                endforeach;
            endif;
        endfor;
    }

    function mlbPlayersKorNameAndPosition(){
        $client=Client::getInstance();
        $client->getEngine()->setPath($_SERVER['DOCUMENT_ROOT'] . '/public/lib/js/phantomjs');

        $team_array=array(108,119,121,147,116,146,142,158,111,110,135,137,138,136,112,145,113,120,118,115,114,139,140,141,134,143,117,144,109,133);
        foreach($team_array as $item):
            $request=$client->getMessageFactory()->createRequest("http://mlb.mbcsportsplus.com/players/?mode=psearch&player_name=&team_id=".$item, 'GET');
            $response=$client->getMessageFactory()->createResponse();
            $client->send($request, $response);

            $exp1=explode('<tbody>', $response->getContent());
            $exp2=explode('player_id=', $exp1[1]);
            foreach($exp2 as $key=>$item):
                if($key!=0):
                    $exp3=explode('"', $item);
                    $result['player_id']=$exp3[0];
                    $exp4=explode('</td>', $exp3[1]);
                    $exp5=explode('(', preg_replace("/\s+/", "", strip_tags($exp4[2])));
                    $result['position']=$exp5[0];
                    $exp6=explode('</strong> (', $exp4[0]);
                    $exp9=explode('(', preg_replace("/\s+/", "", strip_tags($exp4[1])));
                    echo $exp9[0].'<br>';
                    $team_name=$this->baseball_model->get_where_row('MLB_teams', array('name_short'=>$exp9[0]));
                    $result['team']=$team_name->no;
                    $exp7=explode('>', strip_tags($exp6[0]));
                    $result['name_kor']=$exp7[1];
                    $exp8=explode(')', $exp6[1]);
                    $result['name']=$exp8[0];
                    $result['year']=date('Y');
                    $result['delete_yn']='N';

                    $this->baseball_model->insert_update_before('MLB_players', $result, array('player_id'=>$result['player_id']));
                endif;
            endforeach;
        endforeach;
    }

    function mlbTeamMonth(){
        for($i=4; $i<=date('n'); $i++):
            $batter_data=json_decode($this->curl->simple_get('http://mlb.mlb.com/lookup/json/named.team_hitting_season_leader_sit.bam?season=2017&sort_order=%27desc%27&sort_column=%27avg%27&game_type=%27R%27&sport_code=%27mlb%27&sit_code=%27'.$i.'%27&recSP=1&recPP=50'));

            $result=array();
            foreach($batter_data->team_hitting_season_leader_sit->queryResults->row as $item) array_push($result, array('month'=>$i,'team'=>$item->team_full,'g'=>$item->g,'avg'=>$item->avg,'r'=>$item->r,'h'=>$item->h,'hr'=>$item->hr,'bb'=>$item->bb,'so'=>$item->so));
            $pitcher_data=json_decode($this->curl->simple_get("http://mlb.mlb.com/lookup/json/named.team_pitching_season_leader_sit.bam?season=2017&sort_order='asc'&sort_column='era'&game_type='R'&sport_code='mlb'&sit_code='".$i."'&recSP=1&recPP=50"));
            foreach($pitcher_data->team_pitching_season_leader_sit->queryResults->row as $item) foreach($result as $key=>$items) if($item->team_full==$items['team']) $result[$key]['whip']=$item->whip;

            foreach($result as $item) $this->baseball_model->insert_update_before('MLB_team_month', $item, array('month'=>$item['month'],'team'=>$item['team']));
        endfor;
    }

    function mlbRelationHrAvg(){
        $schedule=$this->baseball_model->get_where('MLB_result', array('date<'=>date('Y-m-d')));

        foreach($schedule as $item):
            $result['schedule_no']=$item->no;
            $result['home_hr']=0;
            $result['away_hr']=0;
            $source=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/matchstats/d10jn0i4i5a81s7l0k6qz2i38/'.$item->id.'?_fmt=json'));
            $home_id=$source->matchStats->matchInfo->contestant[0]->id;//ew3xpq3ghlcr4im6tlfvocoeb

            foreach($source->matchStats->liveData->score as $item):
                if($item->type=='HR'):
                    if($item->contestantId==$home_id) $result['home_hr']++;
                    else $result['away_hr']++;
                endif;
            endforeach;

            $home_ab=0;
            $home_h=0;
            $away_ab=0;
            $away_h=0;
            foreach($source->matchStats->liveData->lineUp[0]->player as $item):
                foreach($item->stat as $items):
                    if($items->type=='atBat') $home_ab+=$items->name;
                    elseif($items->type=='totalHits') $home_h+=$items->name;
                endforeach;
            endforeach;
            foreach($source->matchStats->liveData->lineUp[1]->player as $item):
                foreach($item->stat as $items):
                    if($items->type=='atBat') $away_ab+=$items->name;
                    elseif($items->type=='totalHits') $away_h+=$items->name;
                endforeach;
            endforeach;
            $result['home_avg']=number_format($home_h/$home_ab,3);
            $result['away_avg']=number_format($away_h/$away_ab,3);

            $this->baseball_model->insert_update_before('MLB_h2h', $result, array('schedule_no'=>$result['schedule_no']));
        endforeach;
    }

    function mlbPitcherVsTeam(){
        $players=$this->baseball_model->get_select('MLB_players', 'player_id');

        foreach($players as $item):
            $data=json_decode($this->curl->simple_get("http://m.mlb.com/lookup/json/named.sport_pitching_game_log_composed.bam?game_type='R'&league_list_id='mlb_hist'&player_id=".$item->player_id."&season=2017"));
            if(isset($data->sport_pitching_game_log_composed->sport_pitching_game_log->queryResults->row)):
                foreach($data->sport_pitching_game_log_composed->sport_pitching_game_log->queryResults->row as $items):
                    if(gettype($items)=='object'):
                        $result=array('player_id'=>$items->player_id,'game_date'=>date('Y-m-d', strtotime($items->game_date)),'team'=>$items->team,'opponent'=>$items->opponent,'opponent_id'=>$items->opponent_id,'w'=>$items->w,'l'=>$items->l,'era'=>$items->era,'ip'=>$items->ip,'so'=>$items->so,'er'=>$items->er,'hr'=>$items->hr,'h'=>$items->h,'avg'=>$items->avg,'bb'=>$items->bb,'whip'=>$items->whip);
                        $this->baseball_model->insert_update_before('MLB_pitcher_vs_team_by_day', $result, array('player_id'=>$result['player_id'], 'game_date'=>$result['game_date']));
                    endif;
                endforeach;
            endif;
        endforeach;
    }

    function mlbScoreBoard(){
        $schedule=$this->baseball_model->get_where('MLB_result', array('away_score!='=>''));

        foreach($schedule as $items):
            $this->load->library('curl');
            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/matchstats/d10jn0i4i5a81s7l0k6qz2i38/'.$items->id.'?_fmt=json'));

            $away_score_board=array();
            $home_score_board=array();
            $away_rhe=array('away_r'=>0, 'away_h'=>0, 'away_e'=>0);
            $home_rhe=array('home_r'=>0, 'home_h'=>0, 'home_e'=>0);
            $inning=0;
            foreach($opta_data->matchStats->liveData->matchDetails->scores as $key=>$item):
                $home=($item->home==null)? '':$item->home;
                if($key=='total'):
                    $away_rhe['away_r']=$item->away;
                    $home_rhe['home_r']=$home;
                elseif($key=='totalHits'):
                    $away_rhe['away_h']=$item->away;
                    $home_rhe['home_h']=$home;
                elseif($key=='totalErrors'):
                    $away_rhe['away_e']=$item->away;
                    $home_rhe['home_e']=$home;
                else:
                    $inning++;
                    array_push($away_score_board, $item->away);
                    array_push($home_score_board, $item->home);
                endif;
            endforeach;
            for($i=sizeof($away_score_board); $i<13; $i++):
                $away_score_board[$i]='';
                $home_score_board[$i]='';
            endfor;
            $away_str='';
            $home_str='';
            foreach($away_score_board as $key=>$item) $away_str.=($key==0)? $item:';'.$item;
            foreach($away_rhe as $key=>$item) $away_str.=($key=='away_r')? $item:';'.$item;
            foreach($home_score_board as $key=>$item) $home_str.=($key==0)? $item:';'.$item;
            foreach($home_rhe as $key=>$item) $home_str.=($key=='home_r')? $item:';'.$item;

            $result['schedule_no']=$items->no;
            $result['id']=$items->id;
            $result['status']='set';
            $result['inning']=$inning.';0';
            $result['last_pitcher']='';
            $result['away_score_board']=$away_str;
            $result['home_score_board']=$home_str;
            $result['b']='0';
            $result['s']='0';
            $result['o']='0';
            $result['f']='x';
            $result['d']='x';
            $result['t']='x';
            $result['p']='';
            $result['last_hitter']='';

            $this->baseball_model->insert_update_before('MLB_score_board', $result, array('schedule_no'=>$result['schedule_no']));
        endforeach;
    }

//  COMMON
    function getRankBoard($league, $inning, $duration, $home_away, $handicap, $over_under){
        $finalCut=array();
        $result=($league=='KBO')? $this->baseball_model->get_result('KBO_result') : $this->baseball_model->get_result('MLB_result');

        if($league=='MLBAE') $team_array=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays');
        else if($league=='MLBAC') $team_array=array('Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox');
        else if($league=='MLBAW') $team_array=array('Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLBNE') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies');
        else if($league=='MLBNC') $team_array=array('Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds');
        else if($league=='MLBNW') $team_array=array('Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        else if($league=='MLB_A') $team_array=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLB_N') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        else if($league=='MLB') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants','Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');

//      경기 선택 시
        if($home_away=='all' && $duration=='all'):
            $resultSet=array();
            foreach($team_array as $team):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent=array();
                $this_count=0;
                $over=0;
                $recent_detail=array();
                $recent_win=0;
                $recent_lose=0;
                $recent_ou=array();
                $recent_over=0;
                foreach($result as $item):
                    if($team==$item->home):
                        $count++;
                        if($item->home_score+$handicap > $item->away_score): $win++;
                        elseif($item->home_score+$handicap < $item->away_score): $lose++;
                        else: $tie++; endif;

                        if($over_under!=0) if($item->away_score+$item->home_score > $over_under[$team]) $over++;
                    endif;
                    if($team==$item->away):
                        $count++;
                        if($item->home_score < $item->away_score+$handicap) $win++;
                        else if($item->home_score > $item->away_score+$handicap) $lose++;
                        else $tie++;

                        if($over_under!=0) if($item->away_score+$item->home_score > $over_under[$team]) $over++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score+$handicap > $item->away_score): array_push($recent, 'win'); $recent_win++; $recent_over++;
                        elseif($item->home_score+$handicap < $item->away_score): array_push($recent, 'lose'); $recent_lose++;
                        else: array_push($recent, 'dra'); endif;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        if($over_under!=0):
                            if($item->away_score+$item->home_score > $over_under[$team]): array_push($recent_ou, 'plus');
                            elseif($item->away_score+$item->home_score < $over_under[$team]): array_push($recent_ou, 'minus'); endif;
                        endif;
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score+$handicap < $item->away_score): array_push($recent, 'win'); $recent_win++;
                        elseif($item->home_score+$handicap > $item->away_score): array_push($recent, 'lose'); $recent_lose++;
                        else: array_push($recent, 'dra'); endif;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        if($over_under!=0):
                            if($item->away_score+$item->home_score > $over_under[$team]): array_push($recent_ou, 'plus'); $recent_over++;
                            elseif($item->away_score+$item->home_score < $over_under[$team]): array_push($recent_ou, 'minus'); endif;
                        endif;
                    endif;
                endforeach;
                $recent_reversed=array_reverse($recent);

                $resultSet[$team]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent_reversed,'over'=>$over,'recent_detail'=>$recent_detail,'recent_win'=>$recent_win,'recent_lose'=>$recent_lose,'recent_ou'=>$recent_ou,'recent_over'=>$recent_over);
            endforeach;
        elseif($home_away=='all' && $duration!='all'):
            $resultSet=array();
            foreach($team_array as $team):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent=array();
                $this_count=0;
                $over=0;
                $recent_detail=array();
                $recent_win=0;
                $recent_lose=0;
                $recent_ou=array();
                $recent_over=0;

//              선택 기간($duration)이 총게임수(count($num_rows_array)) 보다 크면 총게임수로 $duration 변수 값을 변경
                $num_rows_array=array();
                foreach($result as $entry):
                    if($team==$entry->home || $team==$entry->away):
                        array_push($num_rows_array, $team);
                    endif;
                endforeach;
                if($duration > count($num_rows_array)) $duration=count($num_rows_array);

                foreach($result as $item):
                    if($team==$item->home && $count<$duration):
                        $count++;
                        if($item->home_score+$handicap > $item->away_score) $win++;
                        else if($item->home_score+$handicap < $item->away_score) $lose++;
                        else $tie++;
                        if($over_under!=0) if($item->away_score+$item->home_score > $over_under[$team]) $over++;
                    endif;
                    if($team==$item->away && $count<$duration):
                        $count++;
                        if($item->home_score < $item->away_score+$handicap) $win++;
                        else if($item->home_score > $item->away_score+$handicap) $lose++;
                        else $tie++;
                        if($over_under!=0) if($item->away_score+$item->home_score > $over_under[$team]) $over++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score+$handicap > $item->away_score): array_push($recent, 'win'); $recent_win++;
                        elseif($item->home_score+$handicap < $item->away_score): array_push($recent, 'lose'); $recent_lose++;
                        else: array_push($recent, 'dra'); endif;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        if($over_under!=0):
                            if($item->away_score+$item->home_score > $over_under[$team]): array_push($recent_ou, 'plus'); $recent_over++;
                            elseif($item->away_score+$item->home_score < $over_under[$team]): array_push($recent_ou, 'minus'); endif;
                        endif;
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score+$handicap < $item->away_score): array_push($recent, 'win'); $recent_win++;
                        elseif($item->home_score+$handicap > $item->away_score): array_push($recent, 'lose'); $recent_lose++;
                        else: array_push($recent, 'dra'); endif;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        if($over_under!=0):
                            if($item->away_score+$item->home_score > $over_under[$team]): array_push($recent_ou, 'plus'); $recent_over++;
                            elseif($item->away_score+$item->home_score < $over_under[$team]): array_push($recent_ou, 'minus'); endif;
                        endif;
                    endif;
                endforeach;
                $recent_reversed=array_reverse($recent);

                $resultSet[$team]=array('g'=>$duration,'win_rate'=>$win/($duration-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent_reversed,'over'=>$over,'recent_detail'=>$recent_detail,'recent_win'=>$recent_win,'recent_lose'=>$recent_lose,'recent_ou'=>$recent_ou,'recent_over'=>$recent_over);
            endforeach;
        elseif($home_away!='all' && $duration=='all'):
            $resultSet=array();
            foreach($team_array as $item):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent=array();
                $over=0;
                $recent_detail=array();
                $recent_win=0;
                $recent_lose=0;
                $this_count=0;
                $recent_ou=array();
                $recent_over=0;

                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home):
                            $count++;
                            if($items->home_score+$handicap > $items->away_score) $win++;
                            else if($items->home_score+$handicap < $items->away_score) $lose++;
                            else $tie++;
                            if($over_under!=0) if($items->away_score+$items->home_score > $over_under[$item]) $over++;
                        endif;
                        if($items->home==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score+$handicap > $items->away_score): array_push($recent, 'win'); $recent_win++;
                            elseif($items->home_score+$handicap < $items->away_score): array_push($recent, 'lose'); $recent_lose++;
                            else: array_push($recent, 'dra'); endif;
                            array_push($recent_detail, array('no'=>$items->no,'away'=>$items->away,'away_score'=>$items->away_score,'home'=>$items->home,'home_score'=>$items->home_score));
                            if($over_under!=0):
                                if($items->away_score+$items->home_score > $over_under[$item]): array_push($recent_ou, 'plus'); $recent_over++;
                                elseif($items->away_score+$items->home_score < $over_under[$item]): array_push($recent_ou, 'minus'); endif;
                            endif;
                        endif;
                    else:
                        if($item==$items->away):
                            $count++;
                            if($items->home_score < $items->away_score+$handicap) $win++;
                            else if($items->home_score > $items->away_score+$handicap) $lose++;
                            else $tie++;
                            if($over_under!=0) if($items->away_score+$items->home_score > $over_under[$item]) $over++;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score+$handicap < $items->away_score): array_push($recent, 'win'); $recent_win++;
                            elseif($items->home_score+$handicap > $items->away_score): array_push($recent, 'lose'); $recent_lose++;
                            else: array_push($recent, 'dra'); endif;
                            array_push($recent_detail, array('no'=>$items->no,'away'=>$items->away,'away_score'=>$items->away_score,'home'=>$items->home,'home_score'=>$items->home_score));
                            if($over_under!=0):
                                if($items->away_score+$items->home_score > $over_under[$item]): array_push($recent_ou, 'plus'); $recent_over++;
                                elseif($items->away_score+$items->home_score < $over_under[$item]): array_push($recent_ou, 'minus'); endif;
                            endif;
                        endif;
                    endif;
                endforeach;
                $recent_reversed=array_reverse($recent);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent_reversed,'over'=>$over,'recent_detail'=>$recent_detail,'recent_win'=>$recent_win,'recent_lose'=>$recent_lose,'recent_ou'=>$recent_ou,'recent_over'=>$recent_over);
            endforeach;
        else:
            $resultSet=array();
            foreach($team_array as $item):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent=array();
                $this_count=0;
                $over=0;
                $recent_detail=array();
                $recent_win=0;
                $recent_lose=0;
                $recent_ou=array();
                $recent_over=0;

                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home && $count<$duration):
                            $count++;
                            if($items->home_score+$handicap > $items->away_score) $win++;
                            else if($items->home_score+$handicap < $items->away_score) $lose++;
                            else $tie++;
                            if($over_under!=0) if($items->away_score+$items->home_score > $over_under[$item]) $over++;
                        endif;
                        if($this_count<$count):
                            if($items->home==$item && $this_count<10):
                                $this_count++;
                                if($items->home_score+$handicap > $items->away_score): array_push($recent, 'win'); $recent_win++;
                                elseif($items->home_score+$handicap < $items->away_score): array_push($recent, 'lose'); $recent_lose++;
                                else: array_push($recent, 'dra'); endif;
                                array_push($recent_detail, array('no'=>$items->no,'away'=>$items->away,'away_score'=>$items->away_score,'home'=>$items->home,'home_score'=>$items->home_score));
                                if($over_under!=0):
                                    if($items->away_score+$items->home_score > $over_under[$item]): array_push($recent_ou, 'plus'); $recent_over++;
                                    elseif($items->away_score+$items->home_score < $over_under[$item]): array_push($recent_ou, 'minus'); endif;
                                endif;
                            endif;
                        endif;
                    else:
                        if($item==$items->away && $count<$duration):
                            $count++;
                            if($items->home_score < $items->away_score+$handicap) $win++;
                            else if($items->home_score > $items->away_score+$handicap) $lose++;
                            else $tie++;
                            if($over_under!=0) if($items->away_score+$items->home_score > $over_under[$item]) $over++;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score+$handicap < $items->away_score): array_push($recent, 'win'); $recent_win++;
                            elseif($items->home_score+$handicap > $items->away_score): array_push($recent, 'lose'); $recent_lose++;
                            else: array_push($recent, 'dra'); endif;
                            array_push($recent_detail, array('no'=>$items->no,'away'=>$items->away,'away_score'=>$items->away_score,'home'=>$items->home,'home_score'=>$items->home_score));
                            if($over_under!=0):
                                if($items->away_score+$items->home_score > $over_under[$item]): array_push($recent_ou, 'plus'); $recent_over++;
                                elseif($items->away_score+$items->home_score < $over_under[$item]): array_push($recent_ou, 'minus'); endif;
                            endif;
                        endif;
                    endif;
                    if($over_under!=0) if($item->away_score+$item->home_score > $over_under[$item]) $over++;
                endforeach;
                $recent_reversed=array_reverse($recent);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent_reversed,'over'=>$over,'recent_detail'=>$recent_detail,'recent_win'=>$recent_win,'recent_lose'=>$recent_lose,'recent_ou'=>$recent_ou,'recent_over'=>$recent_over);
            endforeach;
        endif;

//      순위
        $rankSet=array();
        foreach($team_array as $item):
            $rank=1;
            foreach($team_array as $team):
                if($item!=$team):
                    if($resultSet[$item]['win_rate'] < $resultSet[$team]['win_rate']) $rank++;
                endif;
            endforeach;
//          최근 10경기(확인)
            $rankSet[$item]=array('rank'=>$rank, 'team'=>$item);
        endforeach;
//      게임차
        $game_car=array();
        foreach($team_array as $team): if($rankSet[$team]['rank']==1): $top_ranks_win=$resultSet[$team]['win']; $top_ranks_lose=$resultSet[$team]['lose']; endif; endforeach;
        foreach($team_array as $item): $game_car[$item]=array('game_car'=>(($top_ranks_win-$resultSet[$item]['win'])+($resultSet[$item]['lose']-$top_ranks_lose))/2); endforeach;

//      배열 합치기
        foreach($team_array as $item): array_push($finalCut, (object)($resultSet[$item]+$rankSet[$item]+$game_car[$item])); endforeach;

//      순위 순으로 정렬
        foreach($finalCut as $item) $sortAux[]=$item->rank;
        array_multisort($sortAux, SORT_ASC, $finalCut);

        return $finalCut;
    }

    function get_array_combine($source, $column_list){
        $piece_1=explode('</tbody>', $source);
        $pieces_6=explode('<tbody>', $piece_1[0]);
        $pieces_2=explode("<tr>", $pieces_6[1]);
        $resultSet=array();
        if($pieces_2[0]!=' '){
            for($z=1; $z<count($pieces_2); $z++){
                $dataArray=array();
                $pieces_3=explode("</tr>", $pieces_2[$z]);
                $pieces_4=explode("</td>", $pieces_3[0]);
                for($v=0; $v<count($pieces_4)-1; $v++){
                    $pieces_5=explode(">", $pieces_4[$v]);
                    array_push($dataArray, $pieces_5[1]);
                }
                $dataSet=array_combine($column_list, $dataArray);
                array_push($resultSet, $dataSet);
            }
        }

        return $resultSet;
    }
}