<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Baseball extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('/baseball/baseball_model');
    }

//	리그정보
    function league_info(){
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $this->delete_cookies();
        if($this->input->get('scroll_top')!=null) $scroll_top=$this->input->get('scroll_top'); else $scroll_top=0;
        if($this->input->get('home_away')==null || $this->input->get('home_away')=='all') $home_away='all'; else $home_away=$this->input->get('home_away');
        if($this->input->get('duration')==null || $this->input->get('duration')=='all') $duration='all'; else $duration=$this->input->get('duration');

        $total=$this->getRankBoard('all', $duration, $home_away, 0);
        $offense=$this->baseball_model->get('kbo_team_offense_2017');
        $defence=$this->baseball_model->get('kbo_team_defence_2017');
        $schedule=$this->baseball_model->getScheduleAfter3Days();
        $league_statistics=$this->baseball_model->getLeagueStatistics();

//      득/실/마진/게임차
        if($this->input->get('game')==null): $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');
        else: $plus_minus=$this->baseball_model->getTotalScore('all', $this->input->get('game'), 'all'); endif;

        $this->load->view("/baseball/league_info", array('total'=>$total,'offense'=>$offense,'defence'=>$defence,'schedule'=>$schedule,'plus_minus'=>$plus_minus,
                          'league_statistics'=>$league_statistics,'scroll_top'=>$scroll_top,'duration'=>$duration,'home_away'=>$home_away));
        $this->load->view("/baseball/footer");
    }

//  경기결과
    function result($select_year, $select_month){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $result=$this->baseball_model->getByMonth($select_month);
        $this->load->view("/baseball/result", array('result'=>$result, 'select_year'=>$select_year, 'select_month'=>$select_month));

        $this->load->view("/baseball/footer");
    }

//  리그통계
    function stats(){
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $this->delete_cookies();
        $inning=($this->input->get('inning')==null || $this->input->get('inning')=='all')? $inning='all' : $inning=$this->input->get('inning');
        $home_away=($this->input->get('home_away')==null || $this->input->get('home_away')=='all')? 'all' : $this->input->get('home_away');
        $duration=($this->input->get('duration')==null || $this->input->get('duration')=='all')? 'all' : $this->input->get('duration');
        $handicap=($this->input->get('handicap')==null || $this->input->get('handicap')==0)? 0 : $this->input->get('handicap');

//      RANK BOARD
        $total=$this->getRankBoard($inning, $duration, $home_away, $handicap);
        $plus_minus=$this->baseball_model->getTotalScore($inning, $duration, $home_away);
        $offense=$this->baseball_model->get('kbo_team_offense_2017');

//      KBO 리그요약
        $league_statistics=$this->baseball_model->getLeagueStatistics();

//      홈승률/원정승률 상위 5팀
        $home_win=$this->baseball_model->getHomeAwayWinRank($handicap);
        $away_win=$this->baseball_model->getHomeAwayWinRank($handicap);
        foreach($home_win as $item) $sortAux[]=$item['win_rate'];
        array_multisort($sortAux, SORT_DESC, $home_win);
        foreach($away_win as $item) $sortAux2[]=$item['win_rate'];
        array_multisort($sortAux2, SORT_DESC, $away_win);

//      득점마진 상/하위 5팀
        $result=array();
        $team_array=KBO_TEAMS;
        $plus_minus2=$this->baseball_model->getTotalScore($inning, 'all', $home_away);
        foreach($team_array as $item):
            $margin=$plus_minus2[$item]-$plus_minus2[$item.'_lose'];
            $rank=0;
            foreach($team_array as $entry):
                if($item!=$entry):
                    $margin_target=$plus_minus2[$entry]-$plus_minus2[$entry.'_lose'];
                    if($margin>$margin_target) $rank++;
                endif;
            endforeach;
            $result[$item]=$rank;
        endforeach;
        arsort($result);

//      최근 연승/패 상위 5팀
        $recent_win=$this->baseball_model->getRecentWinLose5('win', $handicap);
        $recent_lose=$this->baseball_model->getRecentWinLose5('lose', $handicap);

        $this->load->view("/baseball/stats",array('total'=>$total,'offense'=>$offense,'plus_minus'=>$plus_minus,'duration'=>$duration,'league_statistics'=>$league_statistics,'handicap'=>$handicap,
                          'rank_plus_minus'=>$result,'home_win'=>$home_win,'away_win'=>$away_win,'recent_win'=>$recent_win,'recent_lose'=>$recent_lose,'home_away'=>$home_away,'inning'=>$inning));
        $this->load->view("/baseball/footer");
    }

//  팀 기록
    function team_record($select_year, $select_month, $offense_sort, $defence_sort){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

//		소팅으로 페이지 새로고쳤을때 이전 스크롤위치로 이동
        if($this->input->get('scroll_top')!=null): $mouseTop=$this->input->get('scroll_top'); else: $mouseTop=0; endif;
        if($this->input->get('focus')!=null): $focus=$this->input->get('focus'); else: $focus=0; endif;
        if($this->input->get('bold_num')!=null): $boldNum=$this->input->get('bold_num'); else: $boldNum=0; endif;
//		sorting
        if($offense_sort!='all'):
            $offense=$this->baseball_model->getBySort('kbo_team_offense_2017', $offense_sort);
            $defence=$this->baseball_model->get('kbo_team_defence_2017');
        elseif($defence_sort!='all'):
            $offense=$this->baseball_model->get('kbo_team_offense_2017');
            $defence=$this->baseball_model->getBySort('kbo_team_defence_2017', $defence_sort);
        elseif($offense_sort=='all' && $defence_sort=='all'):
            $offense=$this->baseball_model->get('kbo_team_offense_2017');
            $defence=$this->baseball_model->get('kbo_team_defence_2017');
        endif;

        $total=$this->getRankBoard('all', 'all', 0, 0);
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');

        $team_array=KBO_TEAMS;
        $team=array();

        if($this->baseball_model->getCountDistinctByMonth($select_month)==0): $team=0;
        else:
            foreach($team_array as $entries):
                $values=$this->baseball_model->getByTeam($entries, $select_month);
                foreach($values as $key=>$value):
                    if($key==0) $team[$entries]=$value->rank;
                    else $team[$entries].=';'.$value->rank;
                endforeach;
            endforeach;
        endif;
        $schedule=$this->baseball_model->get_schedule($select_month);

        $this->load->view("/baseball/team_record", array('select_year'=>$select_year,'select_month'=>$select_month,'offense'=>$offense,'defence'=>$defence,'focus'=>$focus,'bold_num'=>$boldNum,'total'=>$total,'rank_month'=>$team,'schedule'=>$schedule,'plus_minus'=>$plus_minus, 'mouseTop'=>$mouseTop));
        $this->load->view("/baseball/footer");
    }

    function player_record(){
        $this->load->helper('cookie');
        $this->load->library('pagination');

        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

    //	PAGINATION
        $per_page=20;
        $config['base_url']='http://'.SERVER_HOST.'/baseball/player_record/';
        $config['total_rows']=$this->baseball_model->getNumRows('kbo_batterbasic_2017');
        $config['per_page']=$per_page;
        $config['prev_link']=FALSE;
        $config['next_link']=FALSE;
        $config['first_link']=FALSE;
        $config['last_link']=FALSE;

    //  SORTING
        if($this->input->get('scroll_top')!=null): $mouseTop=$this->input->get('scroll_top'); else: $mouseTop=0; endif;
        if($this->input->get('focus')!=null): $focus=$this->input->get('focus'); else: $focus=0; endif;
        if($this->input->get('bold_num')!=null): $boldNum=$this->input->get('bold_num'); else: $boldNum=0; endif;

        if($this->input->get('pitcher_sort')!=null):
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            $batter=$this->baseball_model->getPagination('kbo_batterbasic_2017', $per_page, $offset);
            $pitcher=$this->baseball_model->getBySort('kbo_pitcherbasic_2017', $this->input->get('pitcher_sort'));
        elseif($this->input->get('batter_sort')!=null):
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            $batter=$this->baseball_model->getBySortPagination('kbo_batterbasic_2017', $this->input->get('batter_sort'), $per_page, $offset);
            $pitcher=$this->baseball_model->getPagination('kbo_pitcherbasic_2017', $per_page, 0);
        elseif($this->input->get('team')!=null):
            $team=$this->input->get('team');
            $batter=$this->baseball_model->sortingByTeam('kbo_batterbasic_2017', $team);
            $pitcher=$this->baseball_model->sortingByTeam('kbo_pitcherbasic_2017', $team);
        else:
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            if($this->input->cookie('batter_sort')!=null) $batter=$this->baseball_model->getBySortPagination('kbo_batterbasic_2017', $this->input->cookie('batter_sort'), $per_page, $offset);
            else $batter=$this->baseball_model->getPagination('kbo_batterbasic_2017', $per_page, $offset);
            $pitcher=$this->baseball_model->getPagination('kbo_pitcherbasic_2017', $per_page, 0);
        endif;

        $batter5=$this->baseball_model->getBatter5();
        $pitcher5=$this->baseball_model->getPitcher5();
        $runner5=$this->baseball_model->getRunner5('kbo_runnerbasic_2017');

        if($this->uri->segment(3)==null && $boldNum!=0 && $focus!=0):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>'','expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'batter_sort','value'=>'','expire'=>'86500','domain'=>SERVER_HOST));
            if($this->input->get('batter_sort')!=null): $this->input->set_cookie(array('name'=>'batter_sort','value'=>$this->input->get('batter_sort'),'expire'=>'86500','domain'=>SERVER_HOST)); endif;
            if($this->input->get('pitcher_sort')!=null): $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>$this->input->get('pitcher_sort'),'expire'=>'86500','domain'=>SERVER_HOST)); endif;
        else:
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
        endif;

        $this->load->view("/baseball/player_record", array('batter'=>$batter,'pitcher'=>$pitcher,'batter5'=>$batter5,'pitcher5'=>$pitcher5,'runner5'=>$runner5,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum));
        $this->load->view("/baseball/footer");
    }

    function match_information(){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $this->load->view("/baseball/match", array('schedule_no'=>$this->input->get('schedule_no')));

        $this->load->view("/baseball/footer");
    }

    function score(){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");
        $this->load->view("/baseball/score");
        $this->load->view("/baseball/footer");
    }

    function getRankBoard($inning, $duration, $home_away, $handicap){
        $finalCut=array();
        $result=$this->baseball_model->get_result($inning);

        $team_array=KBO_TEAMS;
//      경기 선택 시
        if($home_away=='all' && $duration=='all'):
            $resultSet=array();
            foreach($team_array as $team):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent='';
                $this_count=0;
                foreach($result as $item):
                    if($team==$item->home):
                        $count++;
                        if($item->home_score-$handicap > $item->away_score) $win++;
                        else if($item->home_score-$handicap < $item->away_score) $lose++;
                        else $tie++;
                    endif;
                    if($team==$item->away):
                        $count++;
                        if($item->home_score < $item->away_score-$handicap) $win++;
                        else if($item->home_score > $item->away_score-$handicap) $lose++;
                        else $tie++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score-$handicap > $item->away_score) $recent='승;'.$recent;
                        else if($item->home_score-$handicap < $item->away_score) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score < $item->away_score-$handicap) $recent='승;'.$recent;
                        else if($item->home_score > $item->away_score-$handicap) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$team]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent);
            endforeach;
        elseif($home_away=='all' && $duration!='all'):
            $resultSet=array();
            foreach($team_array as $team):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent='';
                $this_count=0;

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
                        if($item->home_score-$handicap > $item->away_score) $win++;
                        else if($item->home_score-$handicap < $item->away_score) $lose++;
                        else $tie++;
                    endif;
                    if($team==$item->away && $count<$duration):
                        $count++;
                        if($item->home_score < $item->away_score-$handicap) $win++;
                        else if($item->home_score > $item->away_score-$handicap) $lose++;
                        else $tie++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score-$handicap > $item->away_score) $recent='승;'.$recent;
                        else if($item->home_score-$handicap < $item->away_score) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score < $item->away_score-$handicap) $recent='승;'.$recent;
                        else if($item->home_score > $item->away_score-$handicap) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$team]=array('g'=>$duration,'win_rate'=>$win/($duration-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent);
            endforeach;
        elseif($home_away!='all' && $duration=='all'):
            $resultSet=array();
            foreach($team_array as $item):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent='';
                $this_count=0;
                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home):
                            $count++;
                            if($items->home_score-$handicap > $items->away_score) $win++;
                            else if($items->home_score-$handicap < $items->away_score) $lose++;
                            else $tie++;
                        endif;
                        if($items->home==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score-$handicap > $items->away_score) $recent='승;'.$recent;
                            else if($items->home_score-$handicap < $items->away_score) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                        endif;
                    else:
                        if($item==$items->away):
                            $count++;
                            if($items->home_score < $items->away_score-$handicap) $win++;
                            else if($items->home_score > $items->away_score-$handicap) $lose++;
                            else $tie++;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score < $items->away_score-$handicap) $recent='승;'.$recent;
                            else if($items->home_score > $items->away_score-$handicap) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                        endif;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent);
            endforeach;
        else:
            $resultSet=array();
            foreach($team_array as $item):
                $count=0;
                $win=0;
                $lose=0;
                $tie=0;
                $recent='';
                $this_count=0;
                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home && $count<$duration):
                            $count++;
                            if($items->home_score-$handicap > $items->away_score) $win++;
                            else if($items->home_score-$handicap < $items->away_score) $lose++;
                            else $tie++;
                        endif;
                        if($this_count<$count):
                            if($items->home==$item && $this_count<10):
                                $this_count++;
                                if($items->home_score-$handicap > $items->away_score) $recent='승;'.$recent;
                                else if($items->home_score-$handicap < $items->away_score) $recent='패;'.$recent;
                                else $recent='무;'.$recent;
                            endif;
                        endif;
                    else:
                        if($item==$items->away && $count<$duration):
                            $count++;
                            if($items->home_score < $items->away_score-$handicap): $win++;
                            elseif($items->home_score > $items->away_score-$handicap): $lose++;
                            else: $tie++;
                            endif;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score < $items->away_score-$handicap) $recent='승;'.$recent;
                            else if($items->home_score > $items->away_score-$handicap) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                        endif;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent);
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
        $top_ranks_win=0;
        foreach($team_array as $team): if($rankSet[$team]['rank']==1) $top_ranks_win=$resultSet[$team]['win']; endforeach;
        foreach($team_array as $item): $game_car[$item]=array('game_car'=>$top_ranks_win-$resultSet[$item]['win']-($resultSet[$item]['tie']/2)); endforeach;

//      배열 합치기
        foreach($team_array as $item): array_push($finalCut, (object)($resultSet[$item]+$rankSet[$item]+$game_car[$item])); endforeach;

//      순위 순으로 정렬
        foreach($finalCut as $item) $sortAux[]=$item->rank;
        array_multisort($sortAux, SORT_ASC, $finalCut);

        return $finalCut;
    }

    function delete_cookies(){
        $this->load->helper('cookie');
        $this->input->set_cookie(array('name'=>'mouse_top','value'=>'0','expire'=>'86500','domain'=>SERVER_HOST));
        delete_cookie('focus', SERVER_HOST, '/');
        delete_cookie('bold_num', SERVER_HOST, '/');
        delete_cookie('pitcher_sort', SERVER_HOST, '/');
        delete_cookie('batter_sort', SERVER_HOST, '/');
    }

    /* ---------------------------------------------------------- crawling ---------------------------------------------------------- */

    function crawling_result(){
        $month_array=array('03','04','05','06','07','08','09');
        $result=array();
        foreach($month_array as $month):
            $source=json_decode($this->curl->simple_get('http://www.koreabaseball.com/ws/Schedule.asmx/GetScheduleList?leId=1&srIdList=0%2C9&seasonId=2017&gameMonth='.$month.'&teamId='));
            $date='';
            foreach($source->rows as $item):
                $len=0;
                $resultSet=array();
                foreach($item->row as $keys=>$items):
                    if($keys==0):
                        $len=strlen($items->Text);
                        if($len==10):
                            $date=$items->Text;
                            $resultSet['date']=$items->Text;
                        else:
                            $resultSet['date']=$date;
                            $resultSet['time']=strip_tags($items->Text);
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
                array_push($result, $resultSet);
            endforeach;
        endforeach;

        $this->baseball_model->insertByMonth($result);

//      HALF
        $source=$this->curl->simple_get('/application/views/baseball/sources/result_half.php');

        $expl1=explode('class="date-txt">', $source);
        $expl2=explode('</span>', $expl1[1]);
        $date=substr($expl2[0],5);

        $arr=array(6, 2);
        $expl0=explode('<p class="place">', $source);
        foreach($arr as $item):
            $rows=array();
            for($i=1; $i<count($expl0); $i++):
                $game=array();

                $expl3=explode('</span>', $expl0[$i]);
                $expl4=explode('<span>', $expl3[0]);
                $time=$expl4[1];

                $expl5=explode('<th scope="row">', $expl0[$i]);
                $expl8=explode('<td>', $expl5[1]);
                $expl6=explode('</th>', $expl8[0]);
                $away=$expl6[0];
                $away_score=0;
                for($h=1; $h<$item; $h++):
                    $expl9=explode('</td>', $expl8[$h]);
                    if($expl9[0]!='-'): $away_score+=$expl9[0]; endif;
                endfor;

                $expl7=explode('<td>', $expl5[2]);
                $expl9=explode('</th>', $expl7[0]);
                $home=$expl9[0];
                $home_score=0;
                for($j=1; $j<$item; $j++):
                    $expl10=explode('</td>', $expl7[$j]);
                    if($expl10[0]!='-'): $home_score+=$expl10[0]; endif;
                endfor;

                $game['date']=$date;
                $game['time']=$time;
                $game['home']=$home;
                $game['home_score']=$home_score;
                $game['away']=$away;
                $game['away_score']=$away_score;

                array_push($rows, $game);
            endfor;
            $table=($item==6)?'kbo_result_half_2017':'kbo_result_first_2017';

            var_dump($rows);
            $this->baseball_model->insert_result($table, $rows);
        endforeach;
    }

    function insertTeamRecord(){
        /* 팀 종합기록 */
        $column_total=array('rank','team','win','lose','tie','win_rate','game_car','recent_game','win_count','home','away');
//		$source=$this->curl->simple_get('/application/views/baseball/sources/crawling_target.php'); //과거내역 크롤링
        $source=$this->curl->simple_get('http://www.koreabaseball.com/TeamRank/TeamRank.aspx'); //현재내역 크롤링
        $team_total=$this->crawlingWithColumnList($source, $column_total);
        $resultSet=array();
        $afterUnset=array();
        foreach($team_total as $entry): array_push($resultSet, $entry); endforeach;
        foreach ($resultSet as $key=>$item): unset($item['win_count']); unset($item['home']); unset($item['away']); $afterUnset[$key]=$item; endforeach;

        $exp=explode('<span id="cphContents_cphContents_cphContents_lblSearchDateTitle">', $source);
        $expp=explode('</span>',$exp[1]);
        $exppp=explode('(',$expp[0]);

        $this->baseball_model->insertWithRecentGame('kbo_team_total_2017', $afterUnset, $this->baseball_model->getByScore(), $exppp[0]);

        /* KBO 공격력 순위 */
        $columns_batter1=array('rank','team','avg','g','pa','ab','r','h','second_b','third_b','hr','tb','rbi','sac','sf');
        $offense1=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Hitter/Basic1.aspx'), $columns_batter1);
        $columns_batter2=array('rank','team','avg','bb','ibb','hbp','so','gdp','slg','obp','ops','mh','risp','phba');
        $offense2=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Hitter/Basic2.aspx'), $columns_batter2);
        $columns_running=array('rank','team','g','sba','sb','cs','sbp','oob','pko');
        $source=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Runner/Basic.aspx'), $columns_running);

        $resultSet_offense=array();
        foreach($offense1 as $key=>$entry):
            foreach($source as $entries):
                if($entry['team']==$entries['team']): array_push($resultSet_offense, $entry+$offense2[$key]+$entries); endif;
            endforeach;
        endforeach;

        $this->baseball_model->insert('kbo_team_offense_2017', $resultSet_offense);

        /* KBO 수비력 순위 */
        $columns_pitcher1=array('rank','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $offense1=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Pitcher/Basic1.aspx'), $columns_pitcher1);
        $columns_pitcher2=array('rank','team','era','cg','sho','qs','bsv','tbf','np','avg','second_b','third_b','sac','sf','ibb','wp','bk');
        $offense2=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Pitcher/Basic2.aspx'), $columns_pitcher2);

        $resultSet_defence=array();
        foreach($offense1 as $key=>$entry):
            foreach($offense2 as $entries):
                if($entry['team']==$entries['team']): array_push($resultSet_defence, $entry+$entries); endif;
            endforeach;
        endforeach;

        $this->baseball_model->insert('kbo_team_defence_2017', $resultSet_defence);
    }

    function crawlingWithColumnList($source, $column_list){
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

    function crawlingBatterRecord(){
//	    1페이지
        $column_total=array('rank','name','team','avg','g','pa','ab','r','h','second_b','third_b','hr','tb','rbi','sac','sf');
        $source1=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/HitterBasic/Basic1.aspx');
        $source3=$this->curl->simple_get('/application/views/baseball/sources/hitterbasic_target1.php');
        $resultSet1=$this->crawlingWithColumnList($source1, $column_total);
        $resultSet3=$this->crawlingWithColumnList($source3, $column_total);

        $exp1=explode('</a></td>', $source1);
        $arr=array();
        foreach($exp1 as $key=>$item): $exp2=explode('">', $item); $arr[$key]=array_pop($exp2); endforeach;
        array_pop($arr);

//      2페이지
        $column2_total=array('rank','name','team','avg','bb','ibb','hbp','so','gdp','slg','obp','ops','mh','risp','phba');
        $source2=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/HitterBasic/Basic2.aspx');
        $source4=$this->curl->simple_get('/application/views/baseball/sources/hitterbasic_target2.php');
        $resultSet2=$this->crawlingWithColumnList($source2, $column2_total);
        $resultSet4=$this->crawlingWithColumnList($source4, $column2_total);

        $exp3=explode('</a></td>', $source3);
        $arr2=array();
        foreach($exp3 as $key=>$item): $exp4=explode('">', $item); $arr2[$key]=array_pop($exp4); endforeach;
        array_pop($arr2);

//      이름 붙이기
        $merged=array();
        foreach($resultSet1 as $key=>$item): $merged[$key]=array_merge($item, $resultSet2[$key]); endforeach;
        for($i=0; $i<30; $i++): $merged[$i]['name']=$arr[$i]; endfor;
        $merged2=array();
        foreach($resultSet3 as $key=>$item): $merged2[$key]=array_merge($item, $resultSet4[$key]); endforeach;
        for($i=0; $i<count($arr2); $i++): $merged2[$i]['name']=$arr2[$i]; endfor;

        $resultSet=array_merge($merged, $merged2);

        $this->baseball_model->insertNoDelete('kbo_batterbasic_2017', $resultSet);
    }

    function crawlingPitcherRecord(){
        $column3_total=array('rank','name','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $source5=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherBasic/Basic1.aspx');
        $resultSet5=$this->crawlingWithColumnList($source5, $column3_total);
        $column4_total=array('rank','name','team','era','cg','sho','qs','bsv','tbf','np','avg','second_b','third_b','sac','sf','ibb','wp','bk');
        $source6=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherBasic/Basic2.aspx');
        $resultSet6=$this->crawlingWithColumnList($source6, $column4_total);

        $exp5=explode('</a></td>', $source5);
        $arr3=array();
        foreach($exp5 as $key=>$item): $exp6=explode('">', $item); $arr3[$key]=array_pop($exp6); endforeach;
        array_pop($arr3);
        $exp6=explode('</a></td>', $source6);
        $arr4=array();
        foreach($exp6 as $key=>$item): $exp6=explode('">', $item); $arr4[$key]=array_pop($exp6); endforeach;
        array_pop($arr4);

        for($i=0; $i<count($arr3); $i++): $resultSet5[$i]['name']=$arr3[$i]; endfor;
        for($i=0; $i<count($arr4); $i++): $resultSet6[$i]['name']=$arr4[$i]; endfor;
        $merged3=array();
        foreach($resultSet5 as $key=>$item):
            $merged3[$key]=array_merge($item, $resultSet6[$key]);
        endforeach;

        $this->baseball_model->insertNoDelete('kbo_pitcherbasic_2017', $merged3);

//      HLD
        $column5_total=array('rank','name','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $source7=$this->curl->simple_get('/application/views/baseball/sources/pitcherbasic_hld.php');
        $resultSet7=$this->crawlingWithColumnList($source7, $column5_total);

        $exp7=explode('</a></td>', $source7);
        $arr5=array();
        foreach($exp7 as $key=>$item): $exp8=explode('">', $item); $arr5[$key]=array_pop($exp8); endforeach;
        array_pop($arr5);
        for($i=0; $i<count($arr5); $i++): $resultSet7[$i]['name']=$arr5[$i]; $resultSet7[$i]['rank']=99; endfor;

        $this->baseball_model->insertNoDelete('kbo_pitcherbasic_2017', $resultSet7);

//      SV
        $column6_total=array('rank','name','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $source8=$this->curl->simple_get('/application/views/baseball/sources/pitcherbasic_sv.php');
        $resultSet8=$this->crawlingWithColumnList($source8, $column6_total);

        $exp9=explode('</a></td>', $source8);
        $arr6=array();
        foreach($exp9 as $key=>$item): $exp10=explode('">', $item); $arr6[$key]=array_pop($exp10); endforeach;
        array_pop($arr6);
        for($i=0; $i<count($arr6); $i++): $resultSet8[$i]['name']=$arr6[$i]; $resultSet8[$i]['rank']=99; endfor;

        $this->baseball_model->insertNoDelete('kbo_pitcherbasic_2017', $resultSet8);
    }

    function crawlingRunnerRecord(){
        $column_total=array('rank','name','team','g','sba','sb','cs','sbp','oob','pko');
        $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/Runner/Basic.aspx');
        $resultSet=$this->crawlingWithColumnList($source, $column_total);

        $exp5=explode('</a></td>', $source);
        $arr3=array();
        foreach($exp5 as $key=>$item): $exp6=explode('">', $item); $arr3[$key]=array_pop($exp6); endforeach;
        array_pop($arr3);

        for($i=0; $i<count($arr3); $i++): $resultSet[$i]['name']=$arr3[$i]; endfor;

        $this->baseball_model->insertNoDelete('kbo_runnerbasic_2017', $resultSet);
    }
}
