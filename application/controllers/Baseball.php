<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Baseball extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('/baseball/baseball_model');
    }

    function league($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $scroll_top=($this->input->get('scroll_top')!=null)? $this->input->get('scroll_top') : 0;
        $home_away=($this->input->get('home_away')==null || $this->input->get('home_away')=='all')? 'all' : $this->input->get('home_away');
        $top_selector=($this->input->get('top_selector')==null || $this->input->get('top_selector')=='')? 'win_lose' : $this->input->get('top_selector');
        $board_selector=($this->input->get('board_selector')==null)? 'win_lose' : $this->input->get('board_selector');
        $handicap=($this->input->get('handicap')!=null || $board_selector=='handicap')? $this->input->get('handicap') : 0;
        $mlb_selector=($this->input->get('mlb_selector')==null || $this->input->get('mlb_selector')=='')? 'MLB_N' : $this->input->get('mlb_selector');
        $this_league=($league=='KBO')? $league : $mlb_selector;
        $view=($league=='KBO')? 'league' : 'league_MLB';

        $over_under_reference=$this->baseball_model->get_over_under_by_team($league);
        $over_under=($board_selector=='over_under')? $over_under_reference : 0;
        $over_under_reference_value=$this->baseball_model->get_over_under($league);
        $total=$this->get_total($league, 'all', $home_away, $handicap, $over_under);
        $schedule=$this->baseball_model->get_schedule_after_1days($league);
        $league_statistics=$this->baseball_model->get_league_statistics($this_league, $over_under_reference_value, $handicap);
        if($league!='KBO') $total_selector=($mlb_selector=='MLB_A')? $this->get_total('MLB_A', 'all', $home_away, $handicap, $over_under) : $this->get_total('MLB_N', 'all', $home_away, $handicap, $over_under); else $total_selector='';

//      공격력/수비력
        if($mlb_selector=='MLB_N') $lg='NL'; elseif($mlb_selector=='MLB_A') $lg='AL';
        $offense=($league=='KBO')? $this->baseball_model->get('KBO_team_offense') : $this->baseball_model->get_where('MLB_team_offense', array('lg'=>$lg));
        foreach($offense as $item) $sortAux4[]=$item->avg;
        array_multisort($sortAux4, SORT_DESC, $offense);
        $defence=($league=='KBO')? $this->baseball_model->get('KBO_team_defence') : $this->baseball_model->get_where('MLB_team_defence', array('lg'=>$lg));
        foreach($defence as $item) $sortAux5[]=$item->era;
        array_multisort($sortAux5, SORT_ASC, $defence);

//      SORT
        if($this->input->get('sort')!=null):
            $word=($this->input->get('sort')=='under')? 'over' : $this->input->get('sort');
            $asc_or_desc=($this->input->get('sort')=='under')? SORT_ASC : SORT_DESC;

            if($league=='KBO'):
                foreach($total as $item) $sortAux[]=$item->$word;
                array_multisort($sortAux, $asc_or_desc, $total);
                foreach($total as $key=>$item) $item->rank=$key+1;
            else:
                foreach($total as $key=>$items):
                    $sortAux=array();
                    foreach($total[$key] as $item) $sortAux[]=$item->$word;
                    array_multisort($sortAux, $asc_or_desc, $total[$key]);
                    foreach($total[$key] as $keys=>$item) $item->rank=$keys+1;
                endforeach;
            endif;
        endif;

        $this->load->view('/baseball/'.$view, array('league'=>$league,'total'=>$total,'schedule'=>$schedule,'handicap'=>$handicap,'league_statistics'=>$league_statistics,'over_under_reference_value'=>$over_under_reference_value,'offense'=>$offense,'defence'=>$defence,'top_selector'=>$top_selector,'scroll_top'=>$scroll_top,'home_away'=>$home_away,'over_under_reference'=>$over_under_reference,'mlb_selector'=>$mlb_selector,'total_selector'=>$total_selector,'board_selector'=>$board_selector));
        $this->load->view("/footer");
    }

    function result($league, $team, $month){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $scroll_top=($this->input->get('scroll_top')!=null)? $this->input->get('scroll_top') : 0;
        $select=($this->input->get('select')==null)? 1 : $this->input->get('select');
        $result=$this->baseball_model->get_by_day($league, urldecode($team), $month);
        $over_under_reference=$this->baseball_model->get_over_under_by_team($league);
        $over_under_reference_value=$this->baseball_model->get_over_under($league);
        $team_month=$this->baseball_model->get_team_month($league, urldecode($team));
        $league_result=$this->baseball_model->get_league_result($league, urldecode($team));
        $view=($league=='KBO')? 'result' : 'result_MLB';

        $this->load->view("/baseball/".$view, array('league'=>$league,'result'=>$result,'over_under_reference_value'=>$over_under_reference_value,'team_month'=>$team_month,'team'=>urldecode($team),'month'=>$month,'over_under_reference'=>$over_under_reference,'league_result'=>$league_result,'select'=>$select,'scroll_top'=>$scroll_top));
        $this->load->view("/footer");
    }

    function player_record_hitter($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(4)!=null) ? $this->uri->segment(4) : 0;
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
        $batter_sort=($this->input->get('batter_sort')!=null) ? $this->input->get('batter_sort') : '';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $table=($league=='KBO')? 'KBO_record_hitter': 'MLB_record_hitter';

        $this->load->helper('cookie');
        if($this->uri->segment(4)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'batter_sort','value'=>$batter_sort,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'team','value'=>$team,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
            $batter_sort=$this->input->cookie('batter_sort');
            $team=$this->input->cookie('team');
        endif;

        if($batter_sort==''): $batter_sort='avg'; $boldNum=1; endif;
        if($team!='') $batter=$this->baseball_model->sort_by_team_order_by($table, $team, $batter_sort, $per_page, $offset);
        else $batter=$this->baseball_model->get_by_sort_pagination($league, $table, $batter_sort, $per_page, $offset);

        $this->load->library('pagination');
        $config['base_url'] = '/baseball/player_record_hitter/'.$league;
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows($league, $table, 0) : $this->baseball_model->get_num_rows_by_team($league, $table, $team);
        $config['per_page']=$per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $this->pagination->initialize($config);

        $batter5=$this->baseball_model->get_batter5($league);

        $this->load->view("/baseball/player_record_hitter",array('league'=>$league,'batter'=>$batter,'batter5'=>$batter5,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'batter_sort'=>$batter_sort,'team'=>$team));
        $this->load->view("/footer");
    }

    function player_record_pitcher($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(4)!=null) ? $this->uri->segment(4) : 0;
        $mouseTop=($this->input->get('scroll_top')!=null)? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null)? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null)? $this->input->get('bold_num') : 0;
        $pitcher_sort=($this->input->get('pitcher_sort')!=null)? $this->input->get('pitcher_sort') : 'era';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $table=($league=='KBO')? 'KBO_record_pitcher': 'MLB_record_pitcher';

        $this->load->helper('cookie');
        if($this->uri->segment(4)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>$pitcher_sort,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'team','value'=>$team,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            if($this->input->cookie('mouse_top')!=null) $mouseTop=$this->input->cookie('mouse_top');
            if($this->input->cookie('focus')!=null) $focus=$this->input->cookie('focus');
            if($this->input->cookie('bold_num')!=null) $boldNum=$this->input->cookie('bold_num');
            if($this->input->cookie('pitcher_sort')!=null) $pitcher_sort=$this->input->cookie('pitcher_sort');
            if($this->input->cookie('team')!=null) $team=$this->input->cookie('team');
        endif;

        if($team!=null) $pitcher=$this->baseball_model->sort_by_team_order_by($table, $team, $pitcher_sort, $per_page, $offset);
        else if($pitcher_sort!='') $pitcher=$this->baseball_model->get_by_sort_pagination($league, $table, $pitcher_sort, $per_page, $offset);
        else $pitcher=$this->baseball_model->get_by_sort_pagination($league, $table, 'era', $per_page, $offset);

        $this->load->library('pagination');
        $config['base_url'] = '/baseball/player_record_pitcher/'.$league;
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows_by_sort($table, $pitcher_sort) : $this->baseball_model->get_num_rows_by_team($league, $table, $team);
        $config['per_page'] = $per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $this->pagination->initialize($config);

        $pitcher5=$this->baseball_model->get_pitcher5($league);

        $this->load->view("/baseball/player_record_pitcher",array('league'=>$league,'pitcher'=>$pitcher,'pitcher5'=>$pitcher5,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'pitcher_sort'=>$pitcher_sort,'team'=>$team));
        $this->load->view("/footer");
    }

    function score($league){
        $this->load->view("/head_up");
        $this->load->view("/head");
        $this->load->view("/baseball/score", array('league'=>$league));
        $this->load->view("/footer");
    }

    function match_team($league, $schedule_no, $scroll_top){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $h2h_selector=($this->input->get('h2h_selector')==null)? 'win_lose' : $this->input->get('h2h_selector');
        $home_selector=($this->input->get('home_selector')==null)? 'win_lose' : $this->input->get('home_selector');
        $away_selector=($this->input->get('away_selector')==null)? 'win_lose' : $this->input->get('away_selector');
        $home_duration=($this->input->get('home_duration')==null)? 10 : $this->input->get('home_duration');
        $away_duration=($this->input->get('away_duration')==null)? 10 : $this->input->get('away_duration');
        $table=($league=='KBO')? 'KBO_result' : 'MLB_result';

        $schedule=$this->baseball_model->get_where_row($table, array('no'=>$schedule_no));
        $total=$this->baseball_model->get_team_total($league);
        $over_under_by_team=$this->baseball_model->get_over_under_by_team($league);
        $over_under_reference_value=floor(($over_under_by_team[$schedule->away]+$over_under_by_team[$schedule->home])/2).'.5';
        $schedule=$this->get_h2h_schedule($league, $schedule, $total, $over_under_reference_value);

//      시즌 상대전적
        $over_under=array();
        $relative_match_result=$this->baseball_model->get_relative_match_result($league, $schedule->away, $schedule->home, $over_under_reference_value);
        $over_under['over']=0;
        $over_under['under']=0;
        $over_under['away_r_avg']=0;
        $over_under['home_r_avg']=0;
        $h2h_arr=array();
        $h2h_result=array('away_avg'=>0,'home_avg'=>0,'away_hr'=>0,'home_hr'=>0,'away_win_lose'=>array(),'away_win'=>0,'home_win'=>0);
        $count=0;
        $h2h_last_six_game=array();

        foreach($relative_match_result['data'] as $item):
            if($item->away_score+$item->home_score > $over_under_reference_value) $over_under['over']++;
            else $over_under['under']++;

            if($schedule->away==$item->away): $over_under['away_r_avg']+=$item->away_score;
            elseif($schedule->away==$item->home): $over_under['away_r_avg']+=$item->home_score;
            endif;

            if($schedule->home==$item->away): $over_under['home_r_avg']+=$item->away_score;
            elseif($schedule->home==$item->home): $over_under['home_r_avg']+=$item->home_score;
            endif;
//          타율/홈런
            array_push($h2h_arr, $this->baseball_model->get_where_row($league.'_h2h', array('schedule_no'=>$item->no)));
//          최근6경기
            if($count<6):
                if($item->away==$schedule->away):
                    if($item->away_score > $item->home_score): array_push($h2h_result['away_win_lose'], 'win'); $h2h_result['away_win']++;
                    elseif($item->away_score < $item->home_score): array_push($h2h_result['away_win_lose'], 'lose'); $h2h_result['home_win']++;
                    elseif($item->away_score==$item->home_score): array_push($h2h_result['away_win_lose'], 'dra'); endif;
                    array_push($h2h_last_six_game, $item);
                elseif($item->home==$schedule->away):
                    if($item->away_score < $item->home_score): array_push($h2h_result['away_win_lose'], 'win'); $h2h_result['away_win']++;
                    elseif($item->away_score > $item->home_score): array_push($h2h_result['away_win_lose'], 'lose'); $h2h_result['home_win']++;
                    elseif($item->away_score==$item->home_score): array_push($h2h_result['away_win_lose'], 'dra'); endif;
                    array_push($h2h_last_six_game, $item);
                endif;
                $count++;
            endif;
        endforeach;
        $over_under['over_per']=number_format($over_under['over']/sizeof($relative_match_result['data'])*100);
        $over_under['under_per']=number_format($over_under['under']/sizeof($relative_match_result['data'])*100);
        $over_under['away_r']=$over_under['away_r_avg'];
        $over_under['home_r']=$over_under['home_r_avg'];
        $over_under['away_r_per']=number_format($over_under['away_r_avg']/sizeof($relative_match_result['data']), 1);
        $over_under['home_r_per']=number_format($over_under['home_r_avg']/sizeof($relative_match_result['data']), 1);

        foreach($h2h_arr as $key=>$item):
            $h2h_result['away_avg']+=$item->away_avg;
            $h2h_result['home_avg']+=$item->home_avg;
            $h2h_result['away_hr']+=$item->away_hr;
            $h2h_result['home_hr']+=$item->home_hr;
            if($key==sizeof($h2h_arr)-1):
                $h2h_result['away_avg']=number_format($h2h_result['away_avg']/sizeof($h2h_arr), 3);
                $h2h_result['home_avg']=number_format($h2h_result['home_avg']/sizeof($h2h_arr), 3);
            endif;
        endforeach;
        $h2h_result['away_recent']=array_reverse($h2h_result['away_win_lose']);
        $h2h_result['away_win_lose']=$this->get_h2h_win_lose_dra($league, $schedule->away, $schedule->home);

//      팀간비교->순위->홈경기/원정경기
        $result=$this->baseball_model->get_where($table, array('away_score!='=>''));
        $rank=$this->get_match_rank($league, $result, $schedule->away, $schedule->home);

//      홈/원정팀 최근 10경기 결과
        $result_reversed=array_reverse($result);
        $away_count=0;
        $recent_ten_game=array('away_recent_ten_game'=>array(), 'home_recent_ten_game'=>array());
        foreach($result_reversed as $item):
            if($away_count<$away_duration):
                if($item->away==$schedule->away): array_push($recent_ten_game['away_recent_ten_game'], $item); $away_count++;
                elseif($item->home==$schedule->away): array_push($recent_ten_game['away_recent_ten_game'], $item); $away_count++; endif;
            endif;
        endforeach;
        $home_count=0;
        foreach($result_reversed as $item):
            if($home_count<$home_duration):
                if($item->away==$schedule->home): array_push($recent_ten_game['home_recent_ten_game'], $item); $home_count++;
                elseif($item->home==$schedule->home): array_push($recent_ten_game['home_recent_ten_game'], $item); $home_count++; endif;
            endif;
        endforeach;

//      comment & paginate
        $this->load->library('pagination');
        $per_page=5;
        $total_count=$this->baseball_model->get_num_rows($league, 'comment', $schedule->no);
        $config['base_url']='/baseball/match/'.$league.'/'.$schedule->no.'/'.$scroll_top;
        $config['total_rows']=$total_count;
        $config['per_page']=$per_page;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = '<';
        $config['next_link'] = '>';
        $config['uri_segment']=6;
        $this->pagination->initialize($config);
        $offset=($this->uri->segment(6)!=null) ? $this->uri->segment(6) : 0;
        $comment_list=$this->baseball_model->get_cheer($schedule->no, $per_page, $offset);
        foreach ($comment_list as $item):
            $exp_ip=explode('.', $item->ip);
            $marked_ip=$exp_ip[0].'.'.$exp_ip[1].'.'.preg_replace("/[0-9]/", "*", $exp_ip[2]).'.'.preg_replace("/[0-9]/", "*", $exp_ip[3]);
            $item->ip=$marked_ip;
        endforeach;

        $over_under_reference=$this->baseball_model->get_over_under_by_team($league);
        $total=$this->get_total($league, 'all', 'all', 0, $over_under_reference);
        foreach($total as $item) $sortAux[]=$item->over;
        array_multisort($sortAux, SORT_DESC, $total);
        foreach($total as $key=>$item) $item->rank=$key+1;
        foreach($total as $item):
            if($item->team==$schedule->away) $schedule->away_over_rank=$item->rank;
            elseif($item->team==$schedule->home) $schedule->home_over_rank=$item->rank;
        endforeach;

        $same_date_another_game=$this->baseball_model->get_where('KBO_result', array('date'=>$schedule->date)); $same_date_another_game_arr=array();
        foreach($same_date_another_game as $item) if($item->no != $schedule->no) array_push($same_date_another_game_arr, $item);

        $this->load->view("/baseball/match_team", array('league'=>$league,'schedule'=>$schedule,'scroll_top'=>$scroll_top,'over_under'=>$over_under,'h2h'=>$h2h_result,'rank'=>$rank,'h2h_last_six_game'=>$h2h_last_six_game,'recent_ten_game'=>$recent_ten_game,'comment_list'=>$comment_list,'over_under_reference_value'=>$over_under_reference_value,'h2h_selector'=>$h2h_selector,'home_selector'=>$home_selector,'away_selector'=>$away_selector,'home_duration'=>$home_duration,'away_duration'=>$away_duration,'same_date_another_game_arr'=>$same_date_another_game_arr));
        $this->load->view("/footer");
    }

    function match_pitcher($league, $schedule_no, $scroll_top){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $away_selector=($this->input->get('away_selector')==null)? 'win_lose' : $this->input->get('away_selector');
        $home_selector=($this->input->get('home_selector')==null)? 'win_lose' : $this->input->get('home_selector');
        $away_recent_selector=($this->input->get('away_recent_selector')==null)? 'win_lose' : $this->input->get('away_recent_selector');
        $home_recent_selector=($this->input->get('home_recent_selector')==null)? 'win_lose' : $this->input->get('home_recent_selector');
        $away_duration=($this->input->get('away_duration')==null)? 10 : $this->input->get('away_duration');
        $home_duration=($this->input->get('home_duration')==null)? 10 : $this->input->get('home_duration');

//      경기 정보
        $schedule=$this->baseball_model->get_where_row($league.'_result', array('no'=>$schedule_no));
        $total=$this->baseball_model->get_team_total($league);
        $over_under_by_team=$this->baseball_model->get_over_under_by_team($league);
        $over_under_reference_value=floor(($over_under_by_team[$schedule->away]+$over_under_by_team[$schedule->home])/2).'.5';
        $schedule=$this->get_h2h_schedule($league, $schedule, $total, $over_under_reference_value);

//      선발비교
        $last_date=$this->baseball_model->get_last_crawling_date($league.'_record_pitcher', 'crawling_date');
        $away_pitcher_id=$this->baseball_model->get_player($league, $schedule->away, $schedule->away_pitcher);
        $pitchers['away']=$this->baseball_model->get_where_row($league.'_record_pitcher', array('player_id'=>$away_pitcher_id->player_id, 'crawling_date'=>$last_date));
        $home_pitcher_id=$this->baseball_model->get_player($league, $schedule->home, $schedule->home_pitcher);
        $pitchers['home']=$this->baseball_model->get_where_row($league.'_record_pitcher', array('player_id'=>$home_pitcher_id->player_id, 'crawling_date'=>$last_date));
        $rank=$this->baseball_model->get_pitcher_rank($league, $away_pitcher_id->player_id, $home_pitcher_id->player_id);

        $away_pitcher_with_home_team=$this->baseball_model->get_query('SELECT * FROM '.$league.'_result WHERE away_score!="" AND away!="드림" AND ((away_pitcher="'.$schedule->away_pitcher.'" AND home="'.$schedule->home.'") OR (home_pitcher="'.$schedule->away_pitcher.'" AND away="'.$schedule->home.'")) ORDER BY date DESC');
        $home_pitcher_with_home_team=$this->baseball_model->get_query('SELECT * FROM '.$league.'_result WHERE away_score!="" AND away!="드림" AND ((away_pitcher="'.$schedule->home_pitcher.'" AND home="'.$schedule->away.'") OR (home_pitcher="'.$schedule->home_pitcher.'" AND away="'.$schedule->away.'")) ORDER BY date DESC');
        $away_pitcher_recent=$this->baseball_model->get_query('SELECT * FROM '.$league.'_result WHERE away_score!="" AND away!="드림" AND (away_pitcher="'.$schedule->away_pitcher.'" OR home_pitcher="'.$schedule->away_pitcher.'") ORDER BY date DESC LIMIT '.$away_duration);
        $home_pitcher_recent=$this->baseball_model->get_query('SELECT * FROM '.$league.'_result WHERE away_score!="" AND away!="드림" AND (away_pitcher="'.$schedule->home_pitcher.'" OR home_pitcher="'.$schedule->home_pitcher.'") ORDER BY date DESC LIMIT '.$home_duration);

        $away_pitcher_vs_teams=($league=='KBO')? $this->baseball_model->get_where_row('KBO_pitcher_vs_team', array('player_id'=>$away_pitcher_id->player_id, 'team'=>$schedule->home)) : $this->baseball_model->get_mlb_pitcher_vs_team($away_pitcher_id->player_id, $schedule->home);
        $home_pitcher_vs_teams=($league=='KBO')? $this->baseball_model->get_where_row('KBO_pitcher_vs_team', array('player_id'=>$home_pitcher_id->player_id, 'team'=>$schedule->away)) : $this->baseball_model->get_mlb_pitcher_vs_team($home_pitcher_id->player_id, $schedule->away);

//      comment & paginate
        $this->load->library('pagination');
        $per_page=5;
        $total_count=$this->baseball_model->get_num_rows($league, 'comment', $schedule->no);
        $config['base_url']='/baseball/match/'.$league.'/'.$schedule->no.'/'.$scroll_top;
        $config['total_rows']=$total_count;
        $config['per_page']=$per_page;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = '<';
        $config['next_link'] = '>';
        $config['uri_segment']=6;
        $this->pagination->initialize($config);
        $offset=($this->uri->segment(6)!=null) ? $this->uri->segment(6) : 0;
        $comment_list=$this->baseball_model->get_cheer($schedule->no, $per_page, $offset);
        foreach ($comment_list as $item):
            $exp_ip=explode('.', $item->ip);
            $marked_ip=$exp_ip[0].'.'.$exp_ip[1].'.'.preg_replace("/[0-9]/", "*", $exp_ip[2]).'.'.preg_replace("/[0-9]/", "*", $exp_ip[3]);
            $item->ip=$marked_ip;
        endforeach;

        $same_date_another_game=$this->baseball_model->get_where($league.'_result', array('date'=>$schedule->date)); $same_date_another_game_arr=array();
        foreach($same_date_another_game as $item) if($item->no != $schedule->no) array_push($same_date_another_game_arr, $item);

        $this->load->view("/baseball/match_pitcher", array('league'=>$league,'schedule'=>$schedule,'scroll_top'=>$scroll_top,'comment_list'=>$comment_list,'away_pitcher_with_home_team'=>$away_pitcher_with_home_team,'home_pitcher_with_home_team'=>$home_pitcher_with_home_team,'away_pitcher_recent'=>$away_pitcher_recent,'home_pitcher_recent'=>$home_pitcher_recent,'away_selector'=>$away_selector,'home_selector'=>$home_selector,'away_recent_selector'=>$away_recent_selector,'home_recent_selector'=>$home_recent_selector,'away_duration'=>$away_duration,'home_duration'=>$home_duration,'pitchers'=>$pitchers,'rank'=>$rank,'away_pitcher_vs_teams'=>$away_pitcher_vs_teams,'home_pitcher_vs_teams'=>$home_pitcher_vs_teams,'same_date_another_game_arr'=>$same_date_another_game_arr));
        $this->load->view("/footer");
    }

    function bet(){
        $this->load->view("/head_up");
        $this->load->view("/head");
        $this->load->view("/baseball/dividend");
        $this->load->view("/footer");
    }

    /* --------------------------------------------------- COMMON FUNC --------------------------------------------------- */

    function get_rank($data, $team, $subject, $asc_or_desc){
        $rank=1;
        $value=0;

        foreach($data as $item) if($item->team==$team) $value=$item->$subject;
        foreach($data as $item):
            if($asc_or_desc=='ASC'):
                if($item->$subject < $value): $rank++; endif;
            elseif($asc_or_desc=='DESC'):
                if($item->$subject > $value): $rank++; endif;
            endif;
        endforeach;

        return $rank;
    }

    function get_score_result_ajax(){
        $league=$this->input->post('league');
        $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');
        $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토','American League'=>'아메리칸 리그','National League'=>'네셔날 리그');
        $data=($league=='KBO')? $this->baseball_model->get_result('KBO_result', 'all') : $this->baseball_model->get_result('MLB_result', 'all');

        $result=array();
        foreach($data as $item):
            if($item->away==$this->input->post('away') && $item->home==$this->input->post('home')) array_push($result, $item);
            elseif($item->home==$this->input->post('away') && $item->away==$this->input->post('home')) array_push($result, $item);
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

        $away=($league=='KBO')? $full_name_team[$away] : $MLB_team_kor[$away];
        $home=($league=='KBO')? $full_name_team[$home] : $MLB_team_kor[$home];
        $away_score_by_game=($away_g==0)? 0 : number_format($away_get_score/$away_g,2);
        $home_score_by_game=($away_g==0)? 0 : number_format($home_get_score/$home_g,2);
        $away_lose_score_by_game=($away_g==0)? 0 : number_format($away_lose_score/$away_g,2);
        $home_lose_score_by_game=($away_g==0)? 0 : number_format($home_lose_score/$home_g,2);

        $string='<tr class="result_contents"><td class="left_t">'.$away.'</td><td class="center">'.$away_g.'</td><td>'.$away_win.'</td><td>'.$away_tie.'</td><td>'.$away_lose.'</td><td>'.$away_get_score.'</td>'.
                '<td>'.$away_lose_score.'</td><td>'.$away_score_by_game.'</td><td>'.$away_lose_score_by_game.'</td></tr>'.
                '<tr class="result_contents"><td class="left_t">'.$home.'</td><td class="center">'.$home_g.'</td><td>'.$home_win.'</td><td>'.$home_tie.'</td><td>'.$home_lose.'</td><td>'.$home_get_score.'</td>'.
                '<td>'.$home_lose_score.'</td><td>'.$home_score_by_game.'</td><td>'.$home_lose_score_by_game.'</td></tr>';

        echo $string;
    }

    function get_match_result_ajax(){
        $league=$this->input->post('league');
        $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');
        $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토','American League'=>'아메리칸 리그','National League'=>'네셔날 리그');
        $data=($league=='KBO')? $this->baseball_model->get_result('KBO_result', 'all') : $this->baseball_model->get_result('MLB_result', 'all');

        $result=array();
        foreach($data as $item):
            if($item->away == $this->input->post('away') && $item->home == $this->input->post('home')) array_push($result, $item);
            elseif($item->home == $this->input->post('away') && $item->away == $this->input->post('home')) array_push($result, $item);
        endforeach;

        $result_str='';
        foreach($result as $item):
            $this_league=($league=='KBO')? 'KBO' : 'MLB';
            $away=($league=='KBO')? $full_name_team[$item->away] : $MLB_team_kor[$item->away];
            $home=($league=='KBO')? $full_name_team[$item->home] : $MLB_team_kor[$item->home];

            $result_str.='<tr class="match_contents"><td class="">'.$this_league.'</td><td class="center c8">'.$item->date.'</td><td>'.$away.' vs '.$home.'</td><td><b class="score">'.$item->away_score.':'
            .$item->home_score.'</b></td><td class="red">1.24</td><td>4.29</td><td>2.13</td><td class="data"><span class="match_ajax"><span class="b_BTN2"><a href="/baseball/match_team/'.$this_league.'/'.$item->no.'/0">경기결과</a></span>'
            .'<span class="r_BTN"><a href="">전문가 의견</a></span><span class="g_BTN"><a href="">블로그</a></span><span class="y_BTN"><a href="">배당률</a></span></span></td></tr>';
        endforeach;

        echo $result_str;
    }

    function add_ajax(){
        $this->baseball_model->add($this->input->post('league'), $this->input->post('no'), $this->input->post('flag'));
    }

    function insert_comment_ajax(){
        $this->baseball_model->insert('comment', array('sport'=>$this->input->post('league'),'schedule_no'=>$this->input->post('schedule_no'),'ip'=>$this->input->ip_address(),'content'=>$this->input->post('content')));
    }

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

    function get_rank_plus_minus($league, $team){
        $plus_minus=$this->baseball_model->get_total_score($league, 'all', 'all');
        $team_total=$this->baseball_model->get_team_total($league);
        if($league=='KBO') $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        else if($league=='MLB_A') $team_array=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLB_N') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');

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

    function get_recent_10_game_result($league, $away_home){
        $result_set=array();
        $data=$this->baseball_model->get_query('SELECT * FROM '.$league.'_result WHERE (away="'.$away_home.'" OR home="'.$away_home.'") AND (away_score!="" AND home_score!="")  ORDER BY date DESC LIMIT 10');

        $count=0;
        foreach($data as $item):
            $result=array();
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
                $result['score']=($item->away==$away_home)? $item->away_score.':'.$item->home_score : $item->home_score.':'.$item->away_score;
                $count++;
                array_push($result_set, $result);
            endif;
        endforeach;

        return $result_set;
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

    function get_h2h_rank($data, $team, $flag){
        $rank=1;
        $value=0;
        foreach($data as $item): if($item->team==$team) $value=$item->$flag; endforeach;
        foreach($data as $items): if($value < $items->$flag) $rank++; endforeach;

        return $rank;
    }

    function get_h2h_win_lose_dra($league, $away, $home){
        $table=($league=='KBO')? 'KBO_result' : 'MLB_result';
        $result=$this->baseball_model->get_query('SELECT * FROM '.$table.' WHERE away_score!="" AND ((away="'.$away.'" AND home="'.$home.'") OR (away="'.$home.'" AND home="'.$away.'")) ORDER BY date DESC');

        $result_set['away_win']=0;
        $result_set['away_lose']=0;
        $result_set['dra']=0;
        $result_set['data']=$result;
        foreach($result as $item):
            if($item->away==$away):
                if($item->away_score > $item->home_score): $result_set['away_win']++;
                elseif($item->away_score < $item->home_score): $result_set['away_lose']++; endif;
            elseif($item->home==$away):
                if($item->away_score < $item->home_score): $result_set['away_win']++;
                elseif($item->away_score > $item->home_score): $result_set['away_lose']++; endif;
            endif;
            if($item->away_score == $item->home_score): $result_set['dra']++; endif;
        endforeach;

        return $result_set;
    }

    function get_total($league, $duration, $home_away, $handicap, $over_under){
        if($league=='MLB_A'):
            $total_west=$this->getRankBoard('MLBAW', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAW', $duration, $home_away);
            foreach($total_west as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_central=$this->getRankBoard('MLBAC', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAC', $duration, $home_away);
            foreach($total_central as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_east=$this->getRankBoard('MLBAE', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAE', $duration, $home_away);
            foreach($total_east as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total=array($total_east, $total_west, $total_central);
        elseif($league=='MLB_N'):
            $total_west=$this->getRankBoard('MLBNW', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNW', $duration, $home_away);
            foreach($total_west as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_central=$this->getRankBoard('MLBNC', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNC', $duration, $home_away);
            foreach($total_central as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_east=$this->getRankBoard('MLBNE', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNE', $duration, $home_away);
            foreach($total_east as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total=array($total_east, $total_west, $total_central);
        else:
            $total=$this->getRankBoard($league, 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score($league, $duration, $home_away);
            foreach($total as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;
        endif;

        return $total;
    }

    function get_match_rank($league, $result, $away, $home){
        $teams=($league=='KBO')? array('SK','삼성','NC','두산','넥센','LG','한화','롯데','KIA','kt') : array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants','Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        $result_arr=array();

        foreach($teams as $team):
            $team_arr=array('team'=>$team, 'home_win'=>0, 'away_win'=>0);
            foreach($result as $item):
                if($team==$item->home):
                    if($item->home_score > $item->away_score): $team_arr['home_win']++; endif;
                elseif($team==$item->away):
                    if($item->home_score < $item->away_score): $team_arr['away_win']++; endif;
                endif;
            endforeach;
            array_push($result_arr, $team_arr);
        endforeach;
        foreach($result_arr as $key=>$item):
            $rank_home=1;
            $rank_away=1;
            foreach($result_arr as $items) if($item['home_win'] < $items['home_win']) $rank_home++;
            foreach($result_arr as $items) if($item['away_win'] < $items['away_win']) $rank_away++;
            $result_arr[$key]['home_rank']=$rank_home;
            $result_arr[$key]['away_rank']=$rank_away;
        endforeach;
        $away_home_rank=0;
        $away_away_rank=0;
        $home_home_rank=0;
        $home_away_rank=0;
        foreach($result_arr as $item):
            if($item['team']==$away):
                $away_home_rank=$item['home_rank'];
                $away_away_rank=$item['away_rank'];
            elseif($item['team']==$home):
                $home_home_rank=$item['home_rank'];
                $home_away_rank=$item['away_rank'];
            endif;
        endforeach;
//      팀간비교->순위->득점/실점/타율/홈런
        $offense=$this->baseball_model->get($league.'_team_offense');
        $defence=$this->baseball_model->get($league.'_team_defence');
        $rank['away_plus']=$this->get_h2h_rank($offense, $away,'r');
        $rank['home_plus']=$this->get_h2h_rank($offense, $home,'r');
        $rank['away_minus']=$this->get_h2h_rank($defence, $away,'r');
        $rank['home_minus']=$this->get_h2h_rank($defence, $home,'r');
        $rank['away_avg']=$this->get_h2h_rank($offense, $away,'avg');
        $rank['home_avg']=$this->get_h2h_rank($offense, $home,'avg');
        $rank['away_hr']=$this->get_h2h_rank($offense, $away,'hr');
        $rank['home_hr']=$this->get_h2h_rank($offense, $home,'hr');
        $rank['away_homegame_win']=$away_home_rank;
        $rank['away_awaygame_win']=$away_away_rank;
        $rank['home_homegame_win']=$home_home_rank;
        $rank['home_awaygame_win']=$home_away_rank;

        return $rank;
    }

    function get_h2h_schedule($league, $schedule, $total, $over_under_reference_value){
        $this_league=($league=='KBO')? 'KBO':'MLB';
        foreach($total as $item):
            if($schedule->away==$item->team):
                $schedule->away_rank=$item->rank;
                $away_exp=explode(';', $item->recent_game);
                $recent_win=0;
                $recent_lose=0;
                foreach($away_exp as $key=>$items):
                    if($items=='win'): $recent_win++; $away_exp[$key]='win';
                    elseif($items=='lose'): $recent_lose++; $away_exp[$key]='lose';
                    else: $away_exp[$key]='dra';
                    endif;
                endforeach;
                $schedule->away_recent=$away_exp;
                $schedule->away_recent_win_lose=$recent_win.'/'.$recent_lose;
                $schedule->away_win=$item->win;
                $schedule->away_tie=($league=='KBO')? $item->tie:0;
                $schedule->away_lose=$item->lose;
                $schedule->away_win_rate=number_format($item->win_rate,3);
//              O/U
                $result=$this->baseball_model->get_all_game_over_under($league, $schedule->away, $over_under_reference_value, 0);
                $schedule->away_over=$result['over'];
                $schedule->away_under=$result['g']-$result['over'];
//              홈경기/원정경기
                $away_game=$this->baseball_model->get_away_home_win($league, $schedule->away);
                $away_recent_ten_game=$this->get_recent_10_game_result($league, $schedule->away);
                $schedule->away_awaygame_win=$away_game['away_win'];
                $schedule->away_awaygame_lose=$away_game['away_lose'];
                $schedule->away_homegame_win=$away_game['home_win'];
                $schedule->away_homegame_lose=$away_game['home_lose'];
                $schedule->away_recent_ten_game=$away_recent_ten_game;
//              득점/실점/타율/홈런
                $away_offense=$this->baseball_model->get_where_row($this_league.'_team_offense', array('team'=>$schedule->away));
                $away_defence=$this->baseball_model->get_where_row($this_league.'_team_defence', array('team'=>$schedule->away));
                $schedule->away_plus=$away_offense->r;
                $schedule->away_minus=$away_defence->r;
                $schedule->away_avg=$away_offense->avg;
                $schedule->away_hr=$away_offense->hr;
                $schedule->away_g=$away_offense->g;
            elseif($schedule->home==$item->team):
                $schedule->home_rank=$item->rank;
                $home_exp=explode(';', $item->recent_game);
                $recent_win=0;
                $recent_lose=0;
                foreach($home_exp as $key=>$items):
                    if($items=='win'): $recent_win++; $home_exp[$key]='win';
                    elseif($items=='lose'): $recent_lose++;  $home_exp[$key]='lose';
                    else: $home_exp[$key]='dra';
                    endif;
                endforeach;
                $schedule->home_recent=$home_exp;
                $schedule->home_recent_win_lose=$recent_win.'/'.$recent_lose;
                $schedule->home_win=$item->win;
                $schedule->home_tie=($league=='KBO')? $item->tie:0;
                $schedule->home_lose=$item->lose;
                $schedule->home_win_rate=number_format($item->win_rate,3);
//              O/U
                $result=$this->baseball_model->get_all_game_over_under($league, $schedule->home, $over_under_reference_value, 0);
                $schedule->home_over=$result['over'];
                $schedule->home_under=$result['g']-$result['over'];
//              홈경기/원정경기
                $home_game=$this->baseball_model->get_away_home_win($league, $schedule->home);
                $home_recent_ten_game=$this->get_recent_10_game_result($league, $schedule->home);
                $schedule->home_awaygame_win=$home_game['away_win'];
                $schedule->home_awaygame_lose=$home_game['away_lose'];
                $schedule->home_homegame_win=$home_game['home_win'];
                $schedule->home_homegame_lose=$home_game['home_lose'];
                $schedule->home_recent_ten_game=$home_recent_ten_game;
//              득점/실점/타율/홈런
                $home_offense=$this->baseball_model->get_where_row($this_league.'_team_offense', array('team'=>$schedule->home));
                $home_defence=$this->baseball_model->get_where_row($this_league.'_team_defence', array('team'=>$schedule->home));
                $schedule->home_plus=$home_offense->r;
                $schedule->home_minus=$home_defence->r;
                $schedule->home_avg=$home_offense->avg;
                $schedule->home_hr=$home_offense->hr;
                $schedule->home_g=$home_offense->g;
            endif;
        endforeach;

        return $schedule;
    }
}
