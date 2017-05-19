<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Baseball extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('/baseball/baseball_model');
    }

    function league_info(){
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        if($this->input->get('scroll_top')!=null) $scroll_top=$this->input->get('scroll_top'); else $scroll_top=0;
        if($this->input->get('home_away')==null || $this->input->get('home_away')=='all') $home_away='all'; else $home_away=$this->input->get('home_away');
        if($this->input->get('duration')==null || $this->input->get('duration')=='all') $duration='all'; else $duration=$this->input->get('duration');

        $total=$this->getRankBoard('all', $duration, $home_away, 0);
        $offense=$this->baseball_model->get_order_by('kbo_team_offense_2017', 'avg', 'DESC');
        $defence=$this->baseball_model->get_order_by('kbo_team_defence_2017', 'era', 'ASC');
        $schedule=$this->baseball_model->getScheduleAfter3Days();
        $league_statistics=$this->baseball_model->getLeagueStatistics();

//      득/실/마진/게임차
        if($this->input->get('game')==null): $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');
        else: $plus_minus=$this->baseball_model->getTotalScore('all', $this->input->get('game'), 'all'); endif;

        $this->load->view("/baseball/league_info", array('total'=>$total,'offense'=>$offense,'defence'=>$defence,'schedule'=>$schedule,'plus_minus'=>$plus_minus,
                          'league_statistics'=>$league_statistics,'scroll_top'=>$scroll_top,'duration'=>$duration,'home_away'=>$home_away));
        $this->load->view("/baseball/footer");
    }

    function result($select_year, $select_month){
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $result=$this->baseball_model->getByMonth($select_month);
        $this->load->view("/baseball/result", array('result'=>$result, 'select_year'=>$select_year, 'select_month'=>$select_month));

        $this->load->view("/baseball/footer");
    }

    function stats_win_rate(){
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        $inning=($this->input->get('inning')==null || $this->input->get('inning')=='all')? $inning='all' : $inning=$this->input->get('inning');
        $duration=($this->input->get('duration')==null || $this->input->get('duration')=='all')? 'all' : $this->input->get('duration');
        $handicap=($this->input->get('handicap')==null || $this->input->get('handicap')==0)? 0 : $this->input->get('handicap');
        $team=($this->input->get('team')==null || $this->input->get('team')=='off')? 'off' : 'on';

//      RANK BOARD
        $result_set=array();
        $total=$this->getRankBoard($inning, $duration, 'all', $handicap);
        $total_away=$this->getRankBoard($inning, $duration, 'away', $handicap);
        $total_home=$this->getRankBoard($inning, $duration, 'home', $handicap);
        $plus_minus=$this->baseball_model->getTotalScore($inning, $duration, 'all');
        $plus_minus_away=$this->baseball_model->getTotalScore($inning, $duration, 'away');
        $plus_minus_home=$this->baseball_model->getTotalScore($inning, $duration, 'home');
        $teams=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        foreach($teams as $item):
            $result=array();
            foreach($total as $items):
                if($items->team==$item):
                    $result['rank']=$items->rank;
                    $result['team']=$items->team;
                    $result['total_g']=$items->g;
                    $result['total_win_rate']=number_format($items->win_rate,3);
                    if($handicap!=0):
                        $total2=$this->getRankBoard($inning, $duration, 'all', 0);
                        foreach($total2 as $item_total2): if($item_total2->team==$item) $result['total_win_rate']=number_format($items->win/$item_total2->win*100).'%'; endforeach;
                    endif;
                    $result['total_win']=$items->win;
                    $result['total_tie']=$items->tie;
                    $result['total_lose']=$items->lose;
                endif;
            endforeach;
            $result['plus']=$plus_minus[$item];
            $result['minus']=$plus_minus[$item.'_lose'];
            foreach($total_away as $items_away):
                if($items_away->team==$item):
                    $result['away_g']=$items_away->g;
                    $result['away_win_rate']=number_format($items_away->win_rate,3);
                    if($handicap!=0):
                        foreach($total2 as $item_total2): if($item_total2->team==$item) $result['away_win_rate']=number_format($items_away->win/$item_total2->win*100).'%'; endforeach;
                    endif;
                    $result['away_win']=$items_away->win;
                    $result['away_tie']=$items_away->tie;
                    $result['away_lose']=$items_away->lose;
                endif;
            endforeach;
            $result['plus_away']=$plus_minus_away[$item];
            $result['minus_away']=$plus_minus_away[$item.'_lose'];
            foreach($total_home as $items_home):
                if($items_home->team==$item):
                    $result['home_g']=$items_home->g;
                    $result['home_win_rate']=number_format($items_home->win_rate,3);
                    if($handicap!=0):
                        foreach($total2 as $item_total2): if($item_total2->team==$item) $result['home_win_rate']=number_format($items_home->win/$item_total2->win*100).'%'; endforeach;
                    endif;
                    $result['home_win']=$items_home->win;
                    $result['home_tie']=$items_home->tie;
                    $result['home_lose']=$items_home->lose;
                endif;
            endforeach;
            $result['plus_home']=$plus_minus_home[$item];
            $result['minus_home']=$plus_minus_home[$item.'_lose'];

            array_push($result_set, $result);
        endforeach;
        if($handicap!=0):
            foreach($result_set as $item) $sortAux3[]=$item['total_win_rate'];
            array_multisort($sortAux3, SORT_DESC, $result_set);
            for($i=0; $i<10; $i++) $result_set[$i]['rank']=$i+1;
        elseif($team=='on'):
            foreach($result_set as $item) $sortAux4[]=$item['plus'];
            array_multisort($sortAux4, SORT_DESC, $result_set);
            for($i=0; $i<10; $i++) $result_set[$i]['rank']=$i+1;
        else:
            foreach($result_set as $item) $sortAux5[]=$item['rank'];
            array_multisort($sortAux5, SORT_ASC, $result_set);
        endif;

//      KBO 리그요약
        $league_statistics=$this->baseball_model->getLeagueStatistics2();

//      홈승률/원정승률 상위 5팀
        $home_away_win_5=$this->baseball_model->getHomeAwayWinRank($handicap);

//      리그득점 상위 5팀, 득점마진 상위 5팀
        $get_score_5=$this->baseball_model->getTotalScore2('get_score');
        $score_margin_5=$this->baseball_model->getTotalScore2('score_margin');

//      승패 최근 10경기 상/하위 5팀
        $total=$this->getRankBoard('all', 10, 'all', 0);
        foreach($total as $item) $sortAux[]=$item->win;
        array_multisort($sortAux, SORT_DESC, $total);
        $total_under_5=array_splice($total,5);
        foreach($total_under_5 as $item) $sortAux2[]=$item->win;
        array_multisort($sortAux2, SORT_ASC, $total_under_5);

        $this->load->view("/baseball/stats_win_rate", array('handicap'=>$handicap,'home_away_win_5'=>$home_away_win_5,'get_score_5'=>$get_score_5,'score_margin_5'=>$score_margin_5,'team'=>$team,
                                                   'rank_board'=>$result_set,'recent_10_game_over_5'=>$total,'recent_10_game_under_5'=>$total_under_5,'league_statistics'=>$league_statistics,
                                                   'inning'=>$inning,'duration'=>$duration,'handicap'=>$handicap));
        $this->load->view("/baseball/footer");
    }

    function team_record($select_year, $select_month, $offense_sort, $defence_sort){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

//		소팅으로 페이지 새로고쳤을때 이전 스크롤위치로 이동
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
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

        $total=$this->getRankBoard('all', 'all', 'all', 0);
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');

        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
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

        $this->load->view("/baseball/team_record", array('select_year'=>$select_year,'select_month'=>$select_month,'offense'=>$offense,'defence'=>$defence,'focus'=>$focus,'bold_num'=>$boldNum,
                          'total'=>$total,'rank_month'=>$team,'schedule'=>$schedule,'plus_minus'=>$plus_minus, 'mouseTop'=>$mouseTop));
        $this->load->view("/baseball/footer");
    }

    function player_record(){
        $this->load->helper('cookie');
        $this->load->library('pagination');
        $per_page=20;
        $config['base_url']='http://'.SERVER_HOST.'/baseball/player_record';
        $config['total_rows']=$this->baseball_model->getNumRows('kbo_batterbasic_2017', 0);
        $config['per_page']=$per_page;
        $config['prev_link']=FALSE;
        $config['next_link']=FALSE;
        $config['first_link']=FALSE;
        $config['last_link']=FALSE;

        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

        //  SORTING
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;

        if($this->input->get('pitcher_sort')!=null):
            $this->pagination->initialize($config);
            $offset=($this->uri->segment(3)!=null) ? $this->uri->segment(3) : 0;
            $batter=$this->baseball_model->getPagination('kbo_batterbasic_2017', $per_page, $offset);
            $pitcher=$this->baseball_model->getBySort('kbo_pitcherbasic_2017', $this->input->get('pitcher_sort'));
        elseif($this->input->get('batter_sort')!=null):
            $this->pagination->initialize($config);
            $offset=($this->uri->segment(3)!=null) ? $this->uri->segment(3) : 0;
            $batter=$this->baseball_model->getBySortPagination('kbo_batterbasic_2017', $this->input->get('batter_sort'), $per_page, $offset);
            $pitcher=$this->baseball_model->getPagination('kbo_pitcherbasic_2017', $per_page, 0);
        elseif($this->input->get('team')!=null):
            $team=$this->input->get('team');
            $batter=$this->baseball_model->sortingByTeam('kbo_batterbasic_2017', $team);
            $pitcher=$this->baseball_model->sortingByTeam('kbo_pitcherbasic_2017', $team);
        else:
            $this->pagination->initialize($config);
            $offset=($this->uri->segment(3)!=null) ? $this->uri->segment(3) : 0;
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

    function match_information($schedule_no, $scroll_top){
        $this->delete_cookies();

        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");

//      pagination
        $this->load->library('pagination');
        $per_page=5;
        $total_count=$this->baseball_model->getNumRows('kbo_comment', $schedule_no);
        $config['base_url']='http://'.SERVER_HOST.'/baseball/match_information/'.$schedule_no.'/'.$scroll_top;
        $config['total_rows']=$total_count;
        $config['per_page']=$per_page;
        $config['prev_link']=FALSE;
        $config['next_link']=FALSE;
        $config['first_link']=FALSE;
        $config['last_link']=FALSE;
        $config['uri_segment']=5;
        $this->pagination->initialize($config);
        $offset=($this->uri->segment(5)!=null) ? $this->uri->segment(5) : 0;
        $comment_list=$this->baseball_model->getCheer($schedule_no, $per_page, $offset);
        foreach ($comment_list as $item):
            $exp_ip=explode('.', $item->ip);
            $marked_ip=$exp_ip[0].'.'.$exp_ip[1].'.'.preg_replace("/[0-9]/", "*", $exp_ip[2]).'.'.preg_replace("/[0-9]/", "*", $exp_ip[3]);
            $item->ip=$marked_ip;
        endforeach;

        $result=$this->baseball_model->get_result_one($schedule_no);
        $another_games=$this->baseball_model->get_where('kbo_result_2017', array('date'=>$result->date, 'away!='=>$result->away));
        $month=substr($result->date,0,2);
        $day=substr($result->date,3,2);
        $date_=CURRENT_YEAR.'-'.$month.'-'.$day;
        $result->away_rank=$this->baseball_model->getRankByDateAndTeam($date_, $result->away);
        $result->home_rank=$this->baseball_model->getRankByDateAndTeam($date_, $result->home);

//      최근 경기 성적
        $team_total=$this->get_away_home_recent_game($result->away, $result->home);

        $away_result=$this->get_recent_10_game_result($result->away);
        $home_result=$this->get_recent_10_game_result($result->home);
        $handicap_result=$this->getRankBoard('all', 'all', 'all', 1.5);
        $plus_away_rank=$this->get_rank_plus_minus($result->away);
        $plus_home_rank=$this->get_rank_plus_minus($result->home);

//      마이닝 - 전광판
        $date=substr($result->date, 0,5);
        $exp=explode('.', $date);
        $score_board=$this->get_mining_score_board(CURRENT_YEAR.'-'.$exp[0].'-'.$exp[1], $result->away, $result->home);

        $this->load->view("/baseball/match", array('schedule_no'=>$schedule_no,'data'=>$result,'comment_list'=>$comment_list,'scroll_top'=>$scroll_top,'team_total'=>$team_total,
                                                   'plus_away_rank'=>$plus_away_rank,'away_result'=>$away_result,'home_result'=>$home_result,'handicap_result'=>$handicap_result,
                                                   'plus_home_rank'=>$plus_home_rank,'another_games'=>$another_games,'score_board'=>$score_board));
        $this->load->view("/baseball/footer");
    }

    function score(){
        $this->delete_cookies();
        $this->load->view("/baseball/head_up");
        $this->load->view("/baseball/head");
        $this->load->view("/baseball/score");
        $this->load->view("/baseball/footer");
    }

    /* ---------------------------------------------------------- COMMON ---------------------------------------------------------- */
//  score - 상대전적 ajax
    function get_score_result_ajax(){
        $data=$this->baseball_model->get_result('all');
        $result=array();
        foreach($data as $item):
            if($item->away==$this->input->post('away') && $item->home==$this->input->post('home')):
                array_push($result, $item);
            elseif($item->home==$this->input->post('away') && $item->away==$this->input->post('home')):
                array_push($result, $item);
            endif;
        endforeach;

        $away=$this->input->post('away');
        $away_g=0;
        $away_win=0;
        $away_tie=0;
        $away_lose=0;
        $away_get_score=0;
        $away_lose_score=0;
        $home=$this->input->post('home');
        $home_g=0;
        $home_win=0;
        $home_tie=0;
        $home_lose=0;
        $home_get_score=0;
        $home_lose_score=0;
        foreach($result as $item):
            if($item->away==$this->input->post('away')):
                $away_g++;
                if($item->away_score > $item->home_score): $away_win++;
                elseif($item->away_score < $item->home_score): $away_lose++;
                else: $away_tie++; endif;
                $away_get_score+=$item->away_score;
                $away_lose_score+=$item->home_score;
            elseif($item->home==$this->input->post('away')):
                $away_g++;
                if($item->home_score > $item->away_score): $away_win++;
                elseif($item->home_score < $item->away_score): $away_lose++;
                else: $away_tie++; endif;
                $away_get_score+=$item->home_score;
                $away_lose_score+=$item->away_score;
            endif;
            if($item->away==$this->input->post('home')):
                $home_g++;
                if($item->away_score > $item->home_score): $home_win++;
                elseif($item->away_score < $item->home_score): $home_lose++;
                else: $home_tie++; endif;
                $home_get_score+=$item->away_score;
                $home_lose_score+=$item->home_score;
            elseif($item->home==$this->input->post('home')):
                $home_g++;
                if($item->home_score > $item->away_score): $home_win++;
                elseif($item->home_score < $item->away_score): $home_lose++;
                else: $home_tie++; endif;
                $home_get_score+=$item->home_score;
                $home_lose_score+=$item->away_score;
            endif;
        endforeach;

        $string='<tr class="result_contents"><td class="left_t">'.$away.'</td><td class="center">'.$away_g.'</td><td>'.$away_win.'</td><td>'.$away_tie.'</td><td>'.$away_lose.'</td><td>'.$away_get_score.'</td>'.
                '<td>'.$away_lose_score.'</td><td>'.number_format($away_get_score/$away_g,2).'</td><td>'.number_format($away_lose_score/$away_g,2).'</td></tr>'.
                '<tr class="result_contents"><td class="left_t">'.$home.'</td><td class="center">'.$home_g.'</td><td>'.$home_win.'</td><td>'.$home_tie.'</td><td>'.$home_lose.'</td><td>'.$home_get_score.'</td>'.
                '<td>'.$home_lose_score.'</td><td>'.number_format($home_get_score/$home_g,2).'</td><td>'.number_format($home_lose_score/$home_g,2).'</td></tr>';

        echo $string;
    }

//  score - 매치결과 ajax
    function get_match_result_ajax(){
        $data=$this->baseball_model->get_result('all');
        $result=array();
        foreach($data as $item):
            if ($item->away == $this->input->post('away') && $item->home == $this->input->post('home')):
                array_push($result, $item);
            elseif ($item->home == $this->input->post('away') && $item->away == $this->input->post('home')):
                array_push($result, $item);
            endif;
        endforeach;

        $result_str='';
        foreach($result as $item):
            $result_str.='<tr class="match_contents"><td class="">KBO</td><td class="center c8">'.$item->date.'</td><td>'.$item->away.' vs '.$item->home.'</td><td><b class="score">'.$item->away_score.':'
            .$item->home_score.'</b></td><td class="red">1.24</td><td>4.29</td><td>2.13</td><td class="data"><span class="match_ajax"><span class="b_BTN2"><a href="">경기기록</a></span>'
            .'<span class="r_BTN"><a href="">전문가 의견</a></span><span class="g_BTN"><a href="">블로그</a></span><span class="y_BTN"><a href="">배당률</a></span></span></td></tr>';
        endforeach;

        echo $result_str;
    }

    function match_include(){
        $this->load->view('/baseball/match_2_3');
    }

    function get_team_initial($team_name){
        if($team_name=='KIA') $initial='HT';
        else if($team_name=='kt') $initial='KT';
        else if($team_name=='삼성') $initial='SS';
        else if($team_name=='넥센') $initial='WO';
        else if($team_name=='두산') $initial='OB';
        else if($team_name=='롯데') $initial='LT';
        else if($team_name=='한화') $initial='HH';
        else $initial=$team_name;

        return $initial;
    }
//  응원하기 good, bad

    function add_ajax(){
        $this->baseball_model->add($this->input->post('no'), $this->input->post('flag'));
    }

    function insert_comment_ajax(){
        $arr=array('schedule_no'=>$this->input->post('schedule_no'),'ip'=>$this->input->ip_address(),'content'=>$this->input->post('content'));
        $this->baseball_model->insert_comment($arr);
    }

    function getRankBoard($inning, $duration, $home_away, $handicap){
        $finalCut=array();
        $result=$this->baseball_model->get_result($inning);

        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
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

//  매치 - 최근 경기 성적
    function get_away_home_recent_game($away, $home){
        $result_set=array();
        $foreach_str=array($away, $home);
        $team_total=$this->baseball_model->getTeamTotal();
        $offense=$this->baseball_model->get('kbo_team_offense_2017');
        $defence=$this->baseball_model->get('kbo_team_defence_2017');
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');

        foreach($foreach_str as $teams):
            $result=array();
            foreach ($team_total as $item):
                if($item->team==$teams):
                    $result['rank']=$item->rank;
                    $result['team']=$item->team;
                    $result['g']=$item->g;
                    $result['win']=$item->win;
                    $result['lose']=$item->lose;
                    $result['tie']=$item->tie;
                    $result['win_rate']=$item->win_rate;
                    $result['recent']=$item->recent_game;
                endif;
            endforeach;
            $result['plus']=$plus_minus[$teams];
            $result['minus']=$plus_minus[$teams.'_lose'];
            foreach ($offense as $item):
                if($item->team==$teams):
                    $result['h']=$item->h;
                    $result['hr']=$item->hr;
                    $result['avg']=$item->avg;
                endif;
            endforeach;
            foreach ($defence as $item):
                if($item->team==$teams):
                    $result['era']=$item->era;
                endif;
            endforeach;

            $rank_avg=10;
            $rank_era=1;
            $rank_h=10;
            $rank_hr=10;
            foreach($offense as $item): if($result['avg'] > $item->avg) $rank_avg--; endforeach;
            foreach($defence as $item): if($result['era'] > $item->era) $rank_era++; endforeach;
            foreach($offense as $item): if($result['h'] > $item->h) $rank_h--; endforeach;
            foreach($offense as $item): if($result['hr'] > $item->hr) $rank_hr--; endforeach;
            $result['rank_avg']=$rank_avg;
            $result['rank_era']=$rank_era;
            $result['rank_h']=$rank_h;
            $result['rank_hr']=$rank_hr;

            array_push($result_set, $result);
        endforeach;

        return $result_set;
    }

    function get_rank_plus_minus($team){
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all', 'all');
        $team_total=$this->baseball_model->getTeamTotal();
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $result=array();
        foreach($team_total as $item): if($item->team==$team) $team_g=$item->g; endforeach;

        $rank=10;
        $lose_rank=10;
        foreach($team_array as $item):
            if($plus_minus[$team]/$team_g > $plus_minus[$item]/$team_g) $rank--;
            if($plus_minus[$team.'_lose']/$team_g > $plus_minus[$item.'_lose']/$team_g) $lose_rank--;
        endforeach;
        $result[$team.'_plus']=number_format($plus_minus[$team]/$team_g, 2);
        $result[$team.'_lose_plus']=number_format($plus_minus[$team.'_lose']/$team_g, 2);
        $result[$team]=$rank;
        $result[$team.'_lose']=$lose_rank;

        return $result;
    }

//  매치 - 홈/원정 최근 경기 결과
    function get_recent_10_game_result($away_home){
        $result_set=array();
        $data=$this->baseball_model->get_result('all');

        $count=0;
        foreach($data as $item):
            $result=array();
            if($count < 10):
                if($item->away==$away_home):
                    if($item->away_score > $item->home_score) $result['win_lose']='승';
                    elseif($item->away_score < $item->home_score) $result['win_lose']='패';
                    else $result['win_lose']='무';
                elseif($item->home==$away_home):
                    if($item->away_score > $item->home_score) $result['win_lose']='패';
                    elseif($item->away_score < $item->home_score) $result['win_lose']='승';
                    else $result['win_lose']='무';
                endif;

                if($item->away==$away_home || $item->home==$away_home):
                    $result['no']=$item->no;
                    $result['date']=$item->date;
                    $result['away']=$item->away;
                    $result['home']=$item->home;
                    $result['score']=$item->away_score.':'.$item->home_score;
                    $count++;
                    array_push($result_set, $result);
                endif;
            endif;
        endforeach;

        return $result_set;
    }

    function delete_cookies(){
        $this->load->helper('cookie');
        $this->input->set_cookie(array('name'=>'mouse_top','value'=>'0','expire'=>'86500','domain'=>SERVER_HOST));
        delete_cookie('focus', SERVER_HOST, '/');
        delete_cookie('bold_num', SERVER_HOST, '/');
        delete_cookie('pitcher_sort', SERVER_HOST, '/');
        delete_cookie('batter_sort', SERVER_HOST, '/');
    }

    function get_mining_db(){
        $db['hostname']='110.10.130.47';
        $db['username']='odds';
        $db['password']='odds8313$';
        $db['database']='mining';
        $db['dbdriver']='mysqli';
        $db['dbprefix']='';
        $db['pconnect']=FALSE;
        $db['db_debug']=TRUE;
        $db['cache_on']=FALSE;
        $db['cachedir']='/application/cache';
        $db['char_set']='utf8';
        $db['dbcollat']='utf8_general_ci';
        $db['swap_pre']='';
        $db['encrypt']=FALSE;
        $db['compress']=FALSE;
        $db['stricton']=FALSE;
        $db['failover']=array();
        $db['save_queries']=TRUE;

        return $this->load->database($db, TRUE);
    }

//  마이닝 - 전광판
    function get_mining_score_board($date, $away_name, $home_name){
        $MINING=$this->get_mining_db();
        $MINING->select('no, away_starter, home_starter');
        $MINING->like('game_time', $date, 'after');
        $schedule=$MINING->get_where('schedule', array('away_name'=>$away_name, 'home_name'=>$home_name))->row();

        $MINING->select('score');
        $score=$MINING->get_where('game_score', array('schedule_no'=>$schedule->no))->result();
        $MINING->select('rheb, inning');
        $rheb=$MINING->get_where('game_data', array('schedule_no'=>$schedule->no))->result();
        $MINING->select('message');
        $MINING->order_by('no', 'DESC');
        $message=$MINING->get_where('game_message', array('schedule_no'=>$schedule->no))->row();

        $MINING->select('line_up.player_id, players.name,teams.team_name');
        $MINING->join('players', 'players.player_id=line_up.player_id');
        $MINING->join('teams', 'teams.no=line_up.team');
        $pitchers=$MINING->get_where('line_up', array('schedule_no'=>$schedule->no, 'line_up.position'=>'투', 'players.delete_yn'=>'N'))->result();
        $away_pitcher='';
        $home_pitcher='';
        if($away_name=='kt') $away_name=strtoupper($away_name); else if($home_name=='kt') $home_name=strtoupper($home_name);
        if($pitchers!=null):
            foreach($pitchers as $item):
                if($item->team_name==$away_name) $away_pitcher=$item->name;
                else if($item->team_name==$home_name) $home_pitcher=$item->name;
            endforeach;
        endif;

        $result=array();
        $away_score_board=array();
        $home_score_board=array();
        $score_arr=($score==null)?';;;;;;;;;;;;;;;;;;;;;;;':$score[0]->score;
        $rheb_arr=($rheb==null)?';;;;;;;':$rheb[0]->rheb;
        $inning_arr=($rheb==null)?'0;0':$rheb[0]->inning;
        $message=($message==null)?'':$message->message;
        $score_exploded=explode(';', $score_arr);
        $rheb_exploded=explode(';', $rheb_arr);
        foreach($score_exploded as $key=>$item):
            if($key%2==0) array_push($away_score_board, $item);
            else array_push($home_score_board, $item);
        endforeach;
        foreach($rheb_exploded as $key=>$item):
            if($key<4) array_push($away_score_board, $item);
            else array_push($home_score_board, $item);
        endforeach;
        $result['away_score_board']=$away_score_board;
        $result['home_score_board']=$home_score_board;
        $result['inning']=$inning_arr;
        $result['message']=$message;
        $result['away_starter']=$schedule->away_starter;
        $result['home_starter']=$schedule->home_starter;
        $result['away_pitcher']=$away_pitcher;
        $result['home_pitcher']=$home_pitcher;

        return $result;
    }

    /* ---------------------------------------------------------- CRAWLING ---------------------------------------------------------- */

    function crawling_result(){
        $this->load->library('curl');

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

            $this->baseball_model->insert_result($table, $rows);
        endforeach;
    }

    function insertTeamRecord(){
        $this->load->library('curl');

        /* 팀 종합기록 */
        $total=$this->getRankBoard('all', 'all', 'all', 0);
        $this->baseball_model->insertWithRecentGame($total);

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
        $columns_defence=array('rank','team','g','e','pko','po','a','dp','fpct','pb','sb','cs','csp');
        $source=$this->crawlingWithColumnList($this->curl->simple_get('http://www.koreabaseball.com/Record/Team/Defense/Basic.aspx'), $columns_defence);

        $resultSet_defence=array();
        foreach($offense1 as $key=>$entry):
            foreach($source as $entries):
                if($entry['team']==$entries['team']): array_push($resultSet_defence, $entry+$offense2[$key]+$entries); endif;
            endforeach;
        endforeach;

        $this->baseball_model->insert('kbo_team_defence_2017', $resultSet_defence);
    }

    function crawlingBatterRecord(){
        $this->load->library('curl');

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
        $this->load->library('curl');

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
        var_dump($merged3);
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
        $this->load->library('curl');

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

    function crawlingWithColumnList($source, $column_list){
        $this->load->library('curl');

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
