<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Baseball extends MY_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Seoul");
        $this->load->model('/baseball/baseball_model');
    }

//  메인탭4
    function league_info(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        if($this->input->get('scroll_top')!=null) $scroll_top=$this->input->get('scroll_top'); else $scroll_top=0;
        if($this->input->get('home_away')==null || $this->input->get('home_away')=='all') $home_away='all'; else $home_away=$this->input->get('home_away');
        if($this->input->get('duration')==null || $this->input->get('duration')=='all') $duration='all'; else $duration=$this->input->get('duration');
        if($this->input->get('sort')==null || $this->input->get('sort')=='win_rate') $sort='win_rate'; else $sort=$this->input->get('sort');

//      RankBoard
        $total=$this->getRankBoard('all', $duration, $home_away, 0 ,0);
//      득/실/마진
        if($this->input->get('game')==null) $plus_minus=$this->baseball_model->getTotalScore('all', 'all');
        else $plus_minus=$this->baseball_model->getTotalScore($this->input->get('game'), 'all');
//      합치기
        foreach($total as $item):
            $item->plus=$plus_minus[$item->team];
            $item->minus=$plus_minus[$item->team.'_lose'];
            $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
        endforeach;
//      정렬
        $sort_word=($sort=='game_car')?SORT_ASC : SORT_DESC;
        foreach($total as $item) $sortAux[]=$item->$sort;
        array_multisort($sortAux, $sort_word, $total);
        for($i=0; $i<10; $i++) $total[$i]->rank=$i+1;

        $handicap=1.5;
        $over_under_reference_value=$this->baseball_model->get_over_under();
        $offense=$this->baseball_model->get_order_by('kbo_team_offense_2017', 'avg', 'DESC');
        $defence=$this->baseball_model->get_order_by('kbo_team_defence_2017', 'era', 'ASC');
        $schedule=$this->baseball_model->getScheduleAfter3Days();
        $league_statistics=$this->baseball_model->getLeagueStatistics($over_under_reference_value, $handicap);

        $this->load->view("/baseball/league_info", array('total'=>$total,'offense'=>$offense,'defence'=>$defence,'schedule'=>$schedule,'handicap'=>$handicap,'league_statistics'=>$league_statistics,'scroll_top'=>$scroll_top,
                                                         'duration'=>$duration,'home_away'=>$home_away,'sort'=>$sort,'over_under_reference_value'=>$over_under_reference_value));
        $this->load->view("/footer");
    }

    function result($select_year, $select_month){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $result=$this->baseball_model->getByMonth($select_month, 'all');
        $this->load->view("/baseball/result", array('result'=>$result, 'select_year'=>$select_year, 'select_month'=>$select_month));

        $this->load->view("/footer");
    }

    function player_record_hitter(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(3)!=null) ? $this->uri->segment(3) : 0;
        $this->load->helper('cookie');
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
        $batter_sort=($this->input->get('batter_sort')!=null) ? $this->input->get('batter_sort') : '';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';

        if($this->uri->segment(3)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'batter_sort','value'=>$batter_sort,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
            $batter_sort=$this->input->cookie('batter_sort');
        endif;
        if($team!='') $batter=$this->baseball_model->sortingByTeam('kbo_record_hitter', $team);
        else if($batter_sort!='') $batter=$this->baseball_model->getBySortPagination('kbo_record_hitter', $batter_sort, $per_page, $offset);
        else{
            if($this->input->cookie('batter_sort') == null) $batter=$this->baseball_model->getPagination('kbo_record_hitter', $per_page, $offset);
            else $batter=$this->baseball_model->getBySortPagination('kbo_record_hitter', $batter_sort, $per_page, $offset);
        }

        $this->load->library('pagination');
        $config['base_url']='/baseball/player_record_hitter';
        $config['total_rows']=$this->baseball_model->getNumRows('kbo_record_hitter', 0);
        $config['per_page']=$per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open']='<a class="on" href="" >';
        $config['cur_tag_close']='</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $this->pagination->initialize($config);

        $batter5=$this->baseball_model->getBatter5();

        $this->load->view("/baseball/player_record_hitter", array('batter'=>$batter,'batter5'=>$batter5,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'batter_sort'=>$batter_sort));
        $this->load->view("/footer");
    }

    function player_record_pitcher(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(3)!=null) ? $this->uri->segment(3) : 0;
        $mouseTop=($this->input->get('scroll_top')!=null)? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null)? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null)? $this->input->get('bold_num') : 0;
        $pitcher_sort=($this->input->get('pitcher_sort')!=null)? $this->input->get('pitcher_sort') : 'era';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';

        $this->load->helper('cookie');
        if($this->uri->segment(3)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>$pitcher_sort,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            $mouseTop=($this->input->cookie('mouse_top')!=null)? $this->input->cookie('mouse_top') : 0;
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
            $pitcher_sort=$this->input->cookie('pitcher_sort');
        endif;

        if($this->input->get('team')!=null) $pitcher=$this->baseball_model->sortingByTeam('kbo_record_pitcher', $team);
        else if($pitcher_sort!='') {$pitcher=$this->baseball_model->getBySortPagination('kbo_record_pitcher', $pitcher_sort, $per_page, $offset); echo BR.'dfsfdsf';}
        else{
            if($this->input->cookie('pitcher_sort') == null) $pitcher=$this->baseball_model->getPagination('kbo_record_pitcher', $per_page, $offset);
            else $pitcher=$this->baseball_model->getBySortPagination('kbo_record_pitcher', 'era', $per_page, $offset);
        }

        $this->load->library('pagination');
        $config['base_url']='/baseball/player_record_pitcher';
        $config['per_page']=$per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open']='<a class="on" href="" >';
        $config['cur_tag_close']='</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $config['total_rows']=$this->baseball_model->get_num_rows_by_sort($pitcher_sort);
        $this->pagination->initialize($config);

        $pitcher5=$this->baseball_model->getPitcher5();

        $this->load->view("/baseball/player_record_pitcher", array('pitcher'=>$pitcher,'pitcher5'=>$pitcher5,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'pitcher_sort'=>$pitcher_sort));
        $this->load->view("/footer");
    }

    function score(){
        $this->load->view("/head_up");
        $this->load->view("/head");
        $this->load->view("/baseball/score");
        $this->load->view("/footer");
    }

//  추가 상세 페이지
    function match_information($schedule_no, $scroll_top){
        $this->load->view("/head_up");
        $this->load->view("/head");

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

        $over_under_reference_value=$this->baseball_model->get_over_under();
        $team_total=$this->get_away_home_recent_game($result->away, $result->home, $over_under_reference_value);
        $away_result=$this->get_recent_10_game_result($result->away);
        $home_result=$this->get_recent_10_game_result($result->home);
        $handicap_result=$this->getRankBoard('all', 'all', 'all', 1.5, 0);
        $plus_away_rank=$this->get_rank_plus_minus($result->away);
        $plus_home_rank=$this->get_rank_plus_minus($result->home);

//      마이닝 - 전광판
        $date=substr($result->date, 0,5);
        $exp=explode('.', $date);
        $score_board=$this->get_mining_score_board(CURRENT_YEAR.'-'.$exp[0].'-'.$exp[1], $result->away, $result->home);

//      2017시즌 상대전적 결과
        $relative_match_result=$this->baseball_model->get_relative_match_result($result->away, $result->home, $over_under_reference_value);

//      LINE_UP
        $MINING=$this->get_mining_db();

        $exp=explode('(', $result->date);
        $exp1=explode('.', $exp[0]);
        $mining_data=$MINING->get_where('schedule', array('game_time'=>CURRENT_YEAR.'-'.$exp1[0].'-'.$exp1[1], 'away_name'=>$result->away))->row();
        $MINING->select('teams.team_name, players.name, line_up.position, line_up.subi, players.back_num, players.player_id');
        $MINING->join('players', 'line_up.player_id = players.player_id');
        $MINING->join('teams', 'teams.no = line_up.team');
        $line_up=$MINING->get_where('line_up', array('schedule_no'=>$mining_data->no))->result();
        $this->db->get_where('kbo_daily_batter', array(''));

        $away_batter_line_up=array();
        $home_batter_line_up=array();
        $away_pitchers=array();
        $home_pitchers=array();
        $away=($result->away=='kt')? 'KT' : $result->away;
        $home=($result->home=='kt')? 'KT' : $result->home;

        foreach($line_up as $item):
            if($item->team_name==$away): array_push($away_batter_line_up, $item);
            elseif($item->team_name==$home): array_push($home_batter_line_up, $item); endif;
        endforeach;
        if($line_up!=null):
            foreach($away_batter_line_up as $item) $sortAux[]=$item->position;
            array_multisort($sortAux, SORT_ASC, $away_batter_line_up);
            $away_pitcher_line_up=array_pop($away_batter_line_up);

            foreach($home_batter_line_up as $item) $sortAux2[]=$item->position;
            array_multisort($sortAux2, SORT_ASC, $home_batter_line_up);
            $home_pitcher_line_up=array_pop($home_batter_line_up);

            $away_pitchers=array('players'=>array('starter'=>$score_board['away_starter'], 'last_pitcher'=>$away_pitcher_line_up->name), 'starter_back_num'=>$score_board['away_starter_back_num'], 'last_pitcher_back_num'=>$away_pitcher_line_up->back_num, 'starter_id'=>$score_board['away_starter_id']);
            $home_pitchers=array('players'=>array('starter'=>$score_board['home_starter'], 'last_pitcher'=>$home_pitcher_line_up->name), 'starter_back_num'=>$score_board['home_starter_back_num'], 'last_pitcher_back_num'=>$home_pitcher_line_up->back_num, 'starter_id'=>$score_board['home_starter_id']);
        endif;
        $players=array('away_batter'=>$away_batter_line_up,'home_batter'=>$home_batter_line_up,'away_pitcher'=>$away_pitchers,'home_pitcher'=>$home_pitchers);

        $this->load->view("/baseball/match", array('schedule_no'=>$schedule_no,'data'=>$result,'comment_list'=>$comment_list,'scroll_top'=>$scroll_top,'team_total'=>$team_total,'over_under_reference_value'=>$over_under_reference_value,
            'relative_match_result'=>$relative_match_result,'plus_away_rank'=>$plus_away_rank,'away_result'=>$away_result,'home_result'=>$home_result,'handicap_result'=>$handicap_result,
            'plus_home_rank'=>$plus_home_rank,'another_games'=>$another_games,'score_board'=>$score_board,'players'=>$players));
        $this->load->view("/footer");
    }

    function team_info(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $handicap=1.5;
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $home_away=($this->input->get('home_away')!=null)? $this->input->get('home_away') : 'all';
        $first_statistics=$this->baseball_model->get_record_by_team($team);
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all');
        $plus_minus_rank=$this->get_rank_plus_minus($team);
        $over_under_reference_value=$this->baseball_model->get_over_under();
        $over_under=$this->baseball_model->get_all_game_over_under($team, $over_under_reference_value, $handicap);
        $offense=$this->baseball_model->get('kbo_team_offense_2017');
        $defence=$this->baseball_model->get('kbo_team_defence_2017');

        $first_statistics['get_score']=$plus_minus[$team];
        $first_statistics['lose_score']=$plus_minus[$team.'_lose'];
        $first_statistics['get_score_rank']=$plus_minus_rank[$team];
        $first_statistics['lose_score_rank']=$plus_minus_rank[$team.'_lose'];
        $first_statistics['get_score_avg']=$plus_minus_rank[$team.'_plus'];
        $first_statistics['lose_score_avg']=$plus_minus_rank[$team.'_lose_plus'];
        $first_statistics['over']=$over_under['over'];
        $first_statistics['g']=$over_under['g'];
        $first_statistics['handicap_win']=$over_under['handicap_win'];
        $first_statistics['win_lose']=array_reverse($over_under['win_lose']);
        $first_statistics['over_under']=array_reverse($over_under['over_under']);

//      팀 상세 기록
        $team_detail_record['offense']['avg']=$this->get_rank($offense, $team, 'avg', 'DESC');
        $team_detail_record['offense']['r']=$this->get_rank($offense, $team, 'r', 'DESC');
        $team_detail_record['offense']['h']=$this->get_rank($offense, $team, 'h', 'DESC');
        $team_detail_record['offense']['hr']=$this->get_rank($offense, $team, 'hr', 'DESC');
        $team_detail_record['offense']['slg']=$this->get_rank($offense, $team, 'slg', 'DESC');
        $team_detail_record['offense']['obp']=$this->get_rank($offense, $team, 'obp', 'DESC');
        $team_detail_record['offense']['risp']=$this->get_rank($offense, $team, 'risp', 'DESC');
        $team_detail_record['offense']['bb']=$this->get_rank($offense, $team, 'bb', 'DESC');
        $team_detail_record['offense']['so']=$this->get_rank($offense, $team, 'so', 'DESC');
        $team_detail_record['offense']['gdp']=$this->get_rank($offense, $team, 'gdp', 'DESC');

        $team_detail_record['defence']['era']=$this->get_rank($defence, $team, 'era', 'ASC');
        $team_detail_record['defence']['r']=$this->get_rank($defence, $team, 'r', 'DESC');
        $team_detail_record['defence']['h']=$this->get_rank($defence, $team, 'h', 'DESC');
        $team_detail_record['defence']['avg']=$this->get_rank($defence, $team, 'avg', 'DESC');
        $team_detail_record['defence']['hr']=$this->get_rank($defence, $team, 'hr', 'DESC');
        $team_detail_record['defence']['qs']=$this->get_rank($defence, $team, 'qs', 'DESC');
        $team_detail_record['defence']['bb']=$this->get_rank($defence, $team, 'bb', 'DESC');
        $team_detail_record['defence']['so']=$this->get_rank($defence, $team, 'so', 'DESC');
        $team_detail_record['defence']['er']=$this->get_rank($defence, $team, 'er', 'DESC');
        $team_detail_record['defence']['whip']=$this->get_rank($defence, $team, 'whip', 'ASC');

        foreach($offense as $item) if($item->team==$team) $team_detail_record['offense_data']=$item;
        foreach($defence as $item) if($item->team==$team) $team_detail_record['defence_data']=$item;

        $rank_board=$this->getRankBoard('all', 'all', $home_away, 0 ,0);
        $plus_minus=$this->baseball_model->getTotalScore('all', $home_away);

//      기록분석
        $offense_title_str_arr=array('avg'=>'타율','r'=>'득점','h'=>'안타','hr'=>'홈런','slg'=>'장타율','obp'=>'출루율','risp'=>'득점권타율','bb'=>'볼넷','so'=>'삼진','gdp'=>'병살타');
        $defence_title_str_arr=array('era'=>'방어율','r'=>'실점','h'=>'피안타','avg'=>'피안타율','hr'=>'피홈런','qs'=>'QS','bb'=>'볼넷','so'=>'삼진','er'=>'실책','whip'=>'whip');
        $rank_to_str=array(1=>'매우 강함', 2=>'매우 강함', 3=>'강함', 4=>'강함', 5=>'보통', 6=>'보통', 7=>'약함', 8=>'약함', 9=>'매우 약함', 10=>'매우 약함');
        $rank_to_str_reverse=array(1=>'매우 약함', 2=>'매우 약함', 3=>'약함', 4=>'약함', 5=>'보통', 6=>'보통', 7=>'강함', 8=>'강함', 9=>'매우 강함', 10=>'매우 강함');
        $num_to_num=array(1=>1, 2=>1, 3=>2, 4=>2, 5=>'', 6=>'', 7=>4, 8=>4, 9=>3, 10=>3);
        $num_to_num_reverse=array(1=>3, 2=>3, 3=>4, 4=>4, 5=>'', 6=>'', 7=>2, 8=>2, 9=>1, 10=>1);

        $offense_anal=array('strong'=>array(), 'normal'=>array(), 'weak'=>array());
        foreach($team_detail_record['offense'] as $key=>$item):
            $row=array();
            $row['rank']=$item;
            $row['title']=$offense_title_str_arr[$key];
            $row['value']=$team_detail_record['offense_data']->$key;
            $row['strong_num']=($key=='so' || $key=='gdp')? $num_to_num_reverse[$item] : $num_to_num[$item];
            $row['str']=($key=='so' || $key=='gdp')? $rank_to_str_reverse[$item] : $rank_to_str[$item];

            if($row['strong_num']==1) array_push($offense_anal['strong'], $row);
            elseif($row['strong_num']==2) array_push($offense_anal['strong'], $row);
            elseif($row['strong_num']==3) array_push($offense_anal['weak'], $row);
            elseif($row['strong_num']==4) array_push($offense_anal['weak'], $row);
            else array_push($offense_anal['normal'], $row);
        endforeach;

        $max_size=sizeof($offense_anal['strong']);
        if(sizeof($offense_anal['strong']) < sizeof($offense_anal['normal'])) $max_size=sizeof($offense_anal['normal']);
        if($max_size < sizeof($offense_anal['weak'])) $max_size=sizeof($offense_anal['weak']);
        $offense_anal['max_size']=$max_size;
        sort($offense_anal['strong']); sort($offense_anal['normal']); sort($offense_anal['weak']);

        $defence_anal=array('strong'=>array(), 'normal'=>array(), 'weak'=>array());
        foreach($team_detail_record['defence'] as $key=>$item):
            $row=array();
            $row['rank']=$item;
            $row['title']=$defence_title_str_arr[$key];
            $row['value']=$team_detail_record['defence_data']->$key;
            $row['strong_num']=($key=='r' || $key=='h' || $key=='avg' || $key=='hr' || $key=='bb' || $key=='er')? $num_to_num_reverse[$item] : $num_to_num[$item];
            $row['str']=($key=='r' || $key=='h' || $key=='avg' || $key=='hr' || $key=='bb' || $key=='er')? $rank_to_str_reverse[$item] : $rank_to_str[$item];

            if($row['strong_num']==1) array_push($defence_anal['strong'], $row);
            elseif($row['strong_num']==2) array_push($defence_anal['strong'], $row);
            elseif($row['strong_num']==3) array_push($defence_anal['weak'], $row);
            elseif($row['strong_num']==4) array_push($defence_anal['weak'], $row);
            else array_push($defence_anal['normal'], $row);
        endforeach;

        $max_size=sizeof($defence_anal['strong']);
        if(sizeof($defence_anal['strong']) < sizeof($defence_anal['normal'])) $max_size=sizeof($defence_anal['normal']);
        if($max_size < sizeof($defence_anal['weak'])) $max_size=sizeof($defence_anal['weak']);
        $defence_anal['max_size']=$max_size;
        sort($defence_anal['strong']); sort($defence_anal['normal']); sort($defence_anal['weak']);

        $this->load->view("/baseball/team_detail/team_info", array('team'=>$team,'first_statistics'=>$first_statistics,'over_under_reference_value'=>$over_under_reference_value,'handicap'=>$handicap,'home_away'=>$home_away,
                                                                   'rank_board'=>$rank_board,'plus_minus'=>$plus_minus,'team_detail_record'=>$team_detail_record,'offense_anal'=>$offense_anal,'defence_anal'=>$defence_anal));
        $this->load->view("/footer");
    }

    function schedule($select_year, $select_month){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $handicap=1.5;
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $first_statistics=$this->baseball_model->get_record_by_team($team);
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all');
        $plus_minus_rank=$this->get_rank_plus_minus($team);
        $over_under_reference_value=$this->baseball_model->get_over_under();
        $over_under=$this->baseball_model->get_all_game_over_under($team, $over_under_reference_value, $handicap);
        $result=$this->baseball_model->getByMonth($select_month, $team);

        $first_statistics['get_score']=$plus_minus[$team];
        $first_statistics['lose_score']=$plus_minus[$team.'_lose'];
        $first_statistics['get_score_rank']=$plus_minus_rank[$team];
        $first_statistics['lose_score_rank']=$plus_minus_rank[$team.'_lose'];
        $first_statistics['get_score_avg']=$plus_minus_rank[$team.'_plus'];
        $first_statistics['lose_score_avg']=$plus_minus_rank[$team.'_lose_plus'];
        $first_statistics['over']=$over_under['over'];
        $first_statistics['g']=$over_under['g'];
        $first_statistics['handicap_win']=$over_under['handicap_win'];
        $first_statistics['win_lose']=array_reverse($over_under['win_lose']);
        $first_statistics['over_under']=array_reverse($over_under['over_under']);

        $this->load->view("/baseball/team_detail/schedule", array('team'=>$team,'first_statistics'=>$first_statistics,'over_under_reference_value'=>$over_under_reference_value,
                                                                  'handicap'=>$handicap,'result'=>$result,'select_year'=>$select_year,'select_month'=>$select_month));
        $this->load->view("/footer");
    }

    function player(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $this->load->helper('cookie');
        $this->load->library('pagination');
        $per_page=20;
        $offset=0;
        $config['base_url']='http://'.SERVER_HOST.'/baseball/player_record';
        $config['total_rows']=$this->baseball_model->getNumRows('kbo_record_hitter', 0);
        $config['per_page']=$per_page;
        $config['prev_link']=FALSE;
        $config['next_link']=FALSE;
        $config['first_link']=FALSE;
        $config['last_link']=FALSE;

//      SORTING
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
        $pitcher_sort=($this->input->get('pitcher_sort')!=null) ? $this->input->get('pitcher_sort') : '';
        $batter_sort=($this->input->get('batter_sort')!=null) ? $this->input->get('batter_sort') : '';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';

//      COOKIE : codeigniter 자체 paginate의 한계로 cookie 활용
        if($this->uri->segment(3)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>$pitcher_sort,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'batter_sort','value'=>$batter_sort,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
            $pitcher_sort=$this->input->cookie('pitcher_sort');
            $batter_sort=$this->input->cookie('batter_sort');
        endif;

        $teams=array('SK'=>1,'KT'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10,'kt'=>2);
        $batter=$this->baseball_model->sortingByTeam('kbo_record_hitter', $team);
        $MINING=$this->get_mining_db();
        foreach($batter as $item):
            $MINING->select('player_id');
            $player_id=$MINING->get_where('players', array('team_no'=>$teams[$item->team],'name'=>$item->name))->row();
            $item->player_id=$player_id->player_id;
        endforeach;
        $pitcher=$this->baseball_model->sortingByTeam('kbo_record_pitcher', $team);
        foreach($pitcher as $item):
            $MINING->select('player_id');
            $player_id=$MINING->get_where('players', array('team_no'=>$teams[$item->team], 'name'=>$item->name))->row();
            $item->player_id=$player_id->player_id;
        endforeach;
        $runner=$this->baseball_model->sortingByTeam('kbo_runnerbasic_2017', $team);
        foreach($runner as $item):
            $MINING->select('player_id');
            $player_id=$MINING->get_where('players', array('team_no'=>$teams[$item->team], 'name'=>$item->name))->row();
            $item->player_id=$player_id->player_id;
        endforeach;

//      부분별 선수 순위 1위 타자/투수
        $batter_result=array();
        if(isset($batter)):
            foreach($batter as $item) $sortAux2[]=$item->avg;
            array_multisort($sortAux2, SORT_DESC, $batter);
            $batter_result['avg']=$batter[0];
            foreach($batter as $item) $sortAux3[]=$item->hr;
            array_multisort($sortAux3, SORT_DESC, $batter);
            $batter_result['hr']=$batter[0];
            foreach($batter as $item) $sortAux4[]=$item->rbi;
            array_multisort($sortAux4, SORT_DESC, $batter);
            $batter_result['rbi']=$batter[0];
            foreach($batter as $item) $sortAux5[]=$item->h;
            array_multisort($sortAux5, SORT_DESC, $batter);
            $batter_result['h']=$batter[0];
            foreach($runner as $item) $sortAux11[]=$item->sb;
            array_multisort($sortAux11, SORT_DESC, $runner);
            $batter_result['sb']=$runner[0];
        endif;
        $pitcher_result=array();
        if(isset($pitcher)):
            foreach($pitcher as $item) $sortAux6[]=$item->era;
            array_multisort($sortAux6, SORT_DESC, $pitcher);
            $pitcher_result['era']=$pitcher[0];
            foreach($pitcher as $item) $sortAux7[]=$item->w;
            array_multisort($sortAux7, SORT_DESC, $pitcher);
            $pitcher_result['w']=$pitcher[0];
            foreach($pitcher as $item) $sortAux8[]=$item->sv;
            array_multisort($sortAux8, SORT_DESC, $pitcher);
            $pitcher_result['sv']=$pitcher[0];
            foreach($pitcher as $item) $sortAux9[]=$item->wpct;
            array_multisort($sortAux9, SORT_DESC, $pitcher);
            $pitcher_result['wpct']=$pitcher[0];
            foreach($pitcher as $item) $sortAux10[]=$item->hld;
            array_multisort($sortAux10, SORT_DESC, $pitcher);
            $pitcher_result['hld']=$pitcher[0];
        endif;

//      SORT
        if($pitcher_sort!=''):
            foreach($pitcher as $item) $sortAux[]=$item->$pitcher_sort;
            array_multisort($sortAux, SORT_DESC, $pitcher);
        elseif($batter_sort!=''):
            foreach($batter as $item) $sortAux1[]=$item->$batter_sort;
            array_multisort($sortAux1, SORT_DESC, $batter);
        endif;

        $this->load->view("/baseball/team_detail/player", array('team'=>$team,'batter'=>$batter,'pitcher'=>$pitcher,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'pitcher_sort'=>$pitcher_sort,
                                                                'batter_sort'=>$batter_sort,'pitcher_result'=>$pitcher_result,'batter_result'=>$batter_result));
        $this->load->view("/footer");
    }

    function player_detail($pitcher_or_batter, $player_id){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';

//      시즌 성적
        $this->load->library('curl');

        $flag=($pitcher_or_batter=='pitcher')? 'PitcherDetail' : 'HitterDetail';
        $data2=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/'.$flag.'/Basic.aspx?playerId='.$player_id);
        $exp10=explode('<tbody>', $data2);
        $data01=explode('</tbody>', $exp10[1]);
        $data02=explode('</tbody>', $exp10[2]);

//      player_basic
        $player_basic=array();
        $exp9=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblName">', $data2);
        $basic_name=explode('</span>',$exp9[1]);
        $player_basic['name']=$basic_name[0];
        $exp8=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblBackNo">', $data2);
        $basic_back_num=explode('</span>',$exp8[1]);
        $player_basic['back_num']=$basic_back_num[0];
        $exp8=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblPosition">', $data2);
        $basic_position=explode('</span>',$exp8[1]);
        $player_basic['position']=$basic_position[0];
        $exp8=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblBirthday">', $data2);
        $basic_birth=explode('</span>',$exp8[1]);
        $player_basic['birth']=$basic_birth[0];
        $exp8=explode('<span id="cphContents_cphContents_cphContents_playerProfile_lblHeightWeight">', $data2);
        $basic_hw=explode('</span>',$exp8[1]);
        $player_basic['hw']=$basic_hw[0];
        $player_data=($pitcher_or_batter=='pitcher')? $this->baseball_model->sortingByTeam('kbo_record_pitcher', $team) : $this->baseball_model->sortingByTeam('kbo_record_hitter', $team);
        $player_basic['w']=0;
        $player_basic['w_rank']=0;
        $player_basic['era']=0;
        $player_basic['so']=0;
        $player_basic['avg']=0;
        $player_basic['avg_rank']=0;
        $player_basic['hr']=0;
        $player_basic['rbi']=0;
        foreach($player_data as $item):
            if($item->name==$player_basic['name']):
                if($pitcher_or_batter=='pitcher'):
                    $player_basic['w']=$item->w;
                    $player_basic['w_rank']=$item->rank;
                    $player_basic['era']=$item->era;
                    $player_basic['so']=$item->so;
                elseif($pitcher_or_batter=='batter'):
                    $player_basic['avg']=$item->avg;
                    $player_basic['avg_rank']=$item->rank;
                    $player_basic['hr']=$item->hr;
                    $player_basic['rbi']=$item->rbi;
                endif;
            endif;
        endforeach;

//      1: 최근 10경기 성적, 2:상대팀별 성적, 3: 구장별, 4: 월별, 5: 요일별, 6: 홈방문별, 7: 주야간
        $exp0=explode('<tbody>', $data2);
        $exp1=explode('</tbody>', $exp0[3]);
        $data=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/'.$flag.'/Game.aspx?playerId='.$player_id);
        $exp=explode('<tbody>', $data);
        $exp2=explode('</tbody>', $exp[1]);
        $exp3=explode('</tbody>', $exp[2]);
        $exp4=explode('</tbody>', $exp[3]);
        $exp5=explode('</tbody>', $exp[4]);
        $exp6=explode('</tbody>', $exp[5]);
        $exp7=explode('</tbody>', $exp[6]);

        $this->load->view("/baseball/team_detail/player_info", array('team'=>$team,'player_id'=>$player_id,'data1'=>$exp1[0],'data2'=>$exp2[0],'data3'=>$exp3[0],'data4'=>$exp4[0],'data5'=>$exp5[0],'data6'=>$exp6[0],
                                                                            'data7'=>$exp7[0],'player_basic'=>$player_basic,'data01'=>$data01[0],'data02'=>$data02[0],'pitcher_or_batter'=>$pitcher_or_batter));
        $this->load->view("/footer");
    }

    function situation(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $team_introduce=$this->baseball_model->get_team_introduce($team);

        $MINING=$this->get_mining_db();
        $MINING->select('no');
        $team_no=$MINING->get_where('teams', array('team_name'=>$team))->row();
        $players=$MINING->get_where('players', array('team_no'=>$team_no->no, 'delete_yn'=>'N'))->result();

        $this->load->view("/baseball/team_detail/situation", array('team'=>$team,'team_introduce'=>$team_introduce,'players'=>$players));

        $this->load->view("/footer");
    }

    function team(){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $team_introduce=$this->baseball_model->get_team_introduce($team);
        $this->load->view("/baseball/team_detail/team", array('team'=>$team,'team_introduce'=>$team_introduce));

        $this->load->view("/footer");
    }

    /* ---------------------------------------------------------- COMMON ---------------------------------------------------------- */

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

    function get_team_full_name($team_short_name){
        $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','삼성'=>'삼성 라이온즈');

        return $full_name_team[$team_short_name];
    }

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

    function add_ajax(){
        $this->baseball_model->add($this->input->post('no'), $this->input->post('flag'));
    }

    function insert_comment_ajax(){
        $arr=array('schedule_no'=>$this->input->post('schedule_no'),'ip'=>$this->input->ip_address(),'content'=>$this->input->post('content'));
        $this->baseball_model->insert_comment($arr);
    }

    function getRankBoard($inning, $duration, $home_away, $handicap, $over_under){
        $finalCut=array();
        $result=$this->baseball_model->get_result($inning);
        if($handicap==99) $handicap=0;

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
                $ou_count_away=0;
                $ou_count_home=0;
                $recent_detail=array();

                foreach($result as $item):
                    if($team==$item->home):
                        $count++;
                        if($item->home_score-$handicap > $item->away_score) $win++;
                        else if($item->home_score-$handicap < $item->away_score) $lose++;
                        else $tie++;

                        if($over_under!=0 && $item->home_score+$item->away_score > $over_under) $ou_count_home++;
                    endif;
                    if($team==$item->away):
                        $count++;
                        if($item->home_score < $item->away_score-$handicap) $win++;
                        else if($item->home_score > $item->away_score-$handicap) $lose++;
                        else $tie++;

                        if($over_under!=0 && $item->away_score+$item->home_score > $over_under) $ou_count_away++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score-$handicap > $item->away_score) $recent='승;'.$recent;
                        else if($item->home_score-$handicap < $item->away_score) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score < $item->away_score-$handicap) $recent='승;'.$recent;
                        else if($item->home_score > $item->away_score-$handicap) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$team]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent,'ou_away'=>$ou_count_away,'ou_home'=>$ou_count_home,'recent_detail'=>$recent_detail);
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
                $ou_count_away=0;
                $ou_count_home=0;
                $recent_detail=array();

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

                        if($over_under!=0 && $item->home_score+$item->away_score > $over_under) $ou_count_home++;
                    endif;
                    if($team==$item->away && $count<$duration):
                        $count++;
                        if($item->home_score < $item->away_score-$handicap) $win++;
                        else if($item->home_score > $item->away_score-$handicap) $lose++;
                        else $tie++;

                        if($over_under!=0 && $item->away_score+$item->home_score > $over_under) $ou_count_away++;
                    endif;

                    if($item->home==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score-$handicap > $item->away_score) $recent='승;'.$recent;
                        else if($item->home_score-$handicap < $item->away_score) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                    elseif($item->away==$team && $this_count<10):
                        $this_count++;
                        if($item->home_score < $item->away_score-$handicap) $recent='승;'.$recent;
                        else if($item->home_score > $item->away_score-$handicap) $recent='패;'.$recent;
                        else $recent='무;'.$recent;
                        array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$team]=array('g'=>$duration,'win_rate'=>$win/($duration-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent,'ou_away'=>$ou_count_away,'ou_home'=>$ou_count_home,'recent_detail'=>$recent_detail);
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
                $ou_count_away=0;
                $ou_count_home=0;
                $recent_detail=array();

                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home):
                            $count++;
                            if($items->home_score-$handicap > $items->away_score) $win++;
                            else if($items->home_score-$handicap < $items->away_score) $lose++;
                            else $tie++;

                            if($over_under!=0 && $items->home_score+$items->away_score > $over_under) $ou_count_home++;
                        endif;
                        if($items->home==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score-$handicap > $items->away_score) $recent='승;'.$recent;
                            else if($items->home_score-$handicap < $items->away_score) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                            array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        endif;
                    else:
                        if($item==$items->away):
                            $count++;
                            if($items->home_score < $items->away_score-$handicap) $win++;
                            else if($items->home_score > $items->away_score-$handicap) $lose++;
                            else $tie++;

                            if($over_under!=0 && $items->away_score+$items->home_score > $over_under) $ou_count_away++;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score < $items->away_score-$handicap) $recent='승;'.$recent;
                            else if($items->home_score > $items->away_score-$handicap) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                            array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        endif;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent,'ou_away'=>$ou_count_away,'ou_home'=>$ou_count_home,'recent_detail'=>$recent_detail);
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
                $ou_count_away=0;
                $ou_count_home=0;
                $recent_detail=array();

                foreach($result as $items):
                    if($home_away=='home'):
                        if($item==$items->home && $count<$duration):
                            $count++;
                            if($items->home_score-$handicap > $items->away_score) $win++;
                            else if($items->home_score-$handicap < $items->away_score) $lose++;
                            else $tie++;

                            if($over_under!=0 && $items->home_score+$items->away_score > $over_under) $ou_count_home++;
                        endif;
                        if($this_count<$count):
                            if($items->home==$item && $this_count<10):
                                $this_count++;
                                if($items->home_score-$handicap > $items->away_score) $recent='승;'.$recent;
                                else if($items->home_score-$handicap < $items->away_score) $recent='패;'.$recent;
                                else $recent='무;'.$recent;
                                array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                            endif;
                        endif;
                    else:
                        if($item==$items->away && $count<$duration):
                            $count++;
                            if($items->home_score < $items->away_score-$handicap) $win++;
                            else if($items->home_score > $items->away_score-$handicap) $lose++;
                            else $tie++;

                            if($over_under!=0 && $items->away_score+$items->home_score > $over_under) $ou_count_away++;
                        endif;
                        if($items->away==$item && $this_count<10):
                            $this_count++;
                            if($items->home_score < $items->away_score-$handicap) $recent='승;'.$recent;
                            else if($items->home_score > $items->away_score-$handicap) $recent='패;'.$recent;
                            else $recent='무;'.$recent;
                            array_push($recent_detail, array('no'=>$item->no,'away'=>$item->away,'away_score'=>$item->away_score,'home'=>$item->home,'home_score'=>$item->home_score));
                        endif;
                    endif;
                endforeach;
                $recent=substr($recent, 0, -1);

                $resultSet[$item]=array('g'=>$count,'win_rate'=>$win/($count-$tie),'win'=>$win,'lose'=>$lose,'tie'=>$tie,'recent_game'=>$recent,'ou_away'=>$ou_count_away,'ou_home'=>$ou_count_home,'recent_detail'=>$recent_detail);
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
    function get_away_home_recent_game($away, $home, $over_under_reference_value){
        $result_set=array();
        $foreach_str=array($away, $home);
        $team_total=$this->baseball_model->getTeamTotal();
        $offense=$this->baseball_model->get('kbo_team_offense_2017');
        $defence=$this->baseball_model->get('kbo_team_defence_2017');
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all');

        foreach($foreach_str as $teams):
            $result=array();
            foreach ($team_total as $item):
                if($item->team==$teams):
                    $result['rank']=$item->rank;
                    $result['team']=$this->get_team_full_name($item->team);
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
            $result['over_under_reference_value']=$over_under_reference_value;
            $result['ou']=$this->baseball_model->get_recent_ten_game_over_under($teams, $over_under_reference_value);

            array_push($result_set, $result);
        endforeach;

        return $result_set;
    }

    function get_rank_plus_minus($team){
        $plus_minus=$this->baseball_model->getTotalScore('all', 'all');
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

//  마이닝 DB 로드
    function get_mining_db(){
        $db['hostname']='192.168.0.123';
        $db['username']='root';
        $db['password']='odds8313#';
        $db['database']='baseball_mining';
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

        $MINING->select('line_up.player_id, players.name, teams.team_name');
        $MINING->join('players', 'players.player_id=line_up.player_id');
        $MINING->join('teams', 'teams.no=line_up.team');
        $pitchers=$MINING->get_where('line_up', array('schedule_no'=>$schedule->no, 'line_up.position'=>'투', 'players.delete_yn'=>'N'))->result();
        $away_pitcher='';
        $home_pitcher='';
        if($away_name=='kt') $away_name=strtoupper($away_name); else if($home_name=='kt') $home_name=strtoupper($home_name);
        if($pitchers!=null):
            foreach($pitchers as $item):
                if($item->team_name==$away_name) $away_pitcher=$item->name;
                elseif($item->team_name==$home_name) $home_pitcher=$item->name;
            endforeach;
        endif;

        $teams=array('SK'=>1,'KT'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10,'kt'=>2);
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

        $MINING->select('back_num, player_id');
        $away_starter=$MINING->get_where('players', array('name'=>$schedule->away_starter,'team_no'=>$teams[$away_name]))->row();
        $MINING->select('back_num, player_id');
        $home_starter=$MINING->get_where('players', array('name'=>$schedule->home_starter,'team_no'=>$teams[$home_name]))->row();

        if(isset($away_starter)):
            $result['away_starter_back_num']=$away_starter->back_num;
            $result['away_starter_id']=$away_starter->player_id;
        endif;
        if(isset($home_starter)):
            $result['home_starter_back_num']=$home_starter->back_num;
            $result['home_starter_id']=$home_starter->player_id;
        endif;

        return $result;
    }

//  마이닝 - 이닝별 점수
    function get_half_first_inning_score_from_mining($team, $inning, $over_under, $home_away){
        $num=$this->db->get_where('kbo_score_temp', array('insert_dt'=>date('Y-m-d'),'team'=>$team,'inning'=>$inning,'home_away'=>$home_away))->num_rows();
        if($num==0):
            $MINING=$this->get_mining_db();

            $MINING->select('schedule.*, game_score.score');
            $MINING->join('game_score', 'schedule.no=game_score.schedule_no');
            $schedule=$MINING->get_where('schedule', array('away_starter!='=>null))->result();

            $score=0;
            $lost_score=0;
            $over_count=0;
            foreach($schedule as $item):
                $my_score=0;
                $your_score=0;
                if($item->away_name==$team && strlen($item->score)>33 && ($home_away=='away' || $home_away=='all')):
                    $exp=explode(';', $item->score);
                    for($i=0; $i<$inning*2; $i++):
                        if($i%2==0) $my_score+=$exp[$i];
                        else $your_score+=$exp[$i];
                    endfor;

                    if($my_score-$over_under > $your_score) $over_count++;
                    $score+=$my_score;
                    $lost_score+=$your_score;
                elseif($item->home_name==$team && strlen($item->score)>33 && ($home_away=='home' || $home_away=='all')):
                    $exp=explode(';', $item->score);
                    for($i=0; $i<$inning*2; $i++):
                        if($i%2==1) $my_score+=$exp[$i];
                        else $your_score+=$exp[$i];
                    endfor;

                    if($my_score-$over_under > $your_score) $over_count++;
                    $score+=$my_score;
                    $lost_score+=$your_score;
                endif;
            endforeach;

            $result['score']=$score;
            $result['lost_score']=$lost_score;
            $result['over']=$over_count;
            $this->db->set('team', $team);
            $this->db->set('inning', $inning);
            $this->db->set('home_away', $home_away);
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert('kbo_score_temp', $result);
        endif;

        return $this->db->get_where('kbo_score_temp', array('insert_dt'=>date('Y-m-d'),'team'=>$team,'inning'=>$inning,'home_away'=>$home_away))->row();
    }

//  마이닝 - 경기당/이닝별 안타
    function get_h_from_mining($team, $home_away, $duration, $all_or_not_all){
        $num=$this->db->get_where('kbo_h_temp', array('insert_dt'=>date('Y-m-d'),'team'=>$team, 'inning'=>$duration, 'all_or_not_all'=>$all_or_not_all))->num_rows();
        if($num==0):
            $MINING=$this->get_mining_db();
            $full_h_away=0;
            $half_h_away=0;
            $first_h_away=0;
            $full_h_home=0;
            $half_h_home=0;
            $first_h_home=0;
            $full_lost_h_away=0;
            $half_lost_h_away=0;
            $first_lost_h_away=0;
            $full_lost_h_home=0;
            $half_lost_h_home=0;
            $first_lost_h_home=0;
            $away_count=0;
            $home_count=0;
            $limit=($duration=='all')? '' : ' LIMIT '.$duration;

            if($home_away!='all'):
                $result_away=$MINING->query('SELECT * FROM schedule WHERE away_name="'.$team.'" AND full_inning_h_away IS NOT NULL ORDER BY no DESC'.$limit)->result();
                foreach($result_away as $entry):
                    if($away_count < $duration || $duration==0):
                        $full_h_away+=$entry->full_inning_h_away;
                        $half_h_away+=$entry->half_inning_h_away;
                        $first_h_away+=$entry->first_inning_h_away;
                        $full_lost_h_away+=$entry->full_inning_h_home;
                        $half_lost_h_away+=$entry->half_inning_h_home;
                        $first_lost_h_away+=$entry->first_inning_h_home;
                        $away_count++;
                    endif;
                endforeach;
                $result_home=$MINING->query('SELECT * FROM schedule WHERE home_name="'.$team.'" AND full_inning_h_home IS NOT NULL ORDER BY no DESC'.$limit)->result();
                foreach($result_home as $entries):
                    if($home_count < $duration || $duration==0):
                        $full_h_home+=$entries->full_inning_h_home;
                        $half_h_home+=$entries->half_inning_h_home;
                        $first_h_home+=$entries->first_inning_h_home;
                        $full_lost_h_home+=$entries->full_inning_h_away;
                        $half_lost_h_home+=$entries->half_inning_h_away;
                        $first_lost_h_home+=$entries->first_inning_h_away;
                        $home_count++;
                    endif;
                endforeach;
            else:
                $count=0;
                $result_all=$MINING->query('SELECT * FROM schedule WHERE (home_name="'.$team.'" OR away_name="'.$team.'") AND full_inning_h_home IS NOT NULL ORDER BY no DESC '.$limit)->result();

                foreach($result_all as $item):
                    if($item->away_name==$team):
                        if($count < $duration || $duration==0):
                            $full_h_away+=$item->full_inning_h_away;
                            $half_h_away+=$item->half_inning_h_away;
                            $first_h_away+=$item->first_inning_h_away;
                            $full_lost_h_away+=$item->full_inning_h_home;
                            $half_lost_h_away+=$item->half_inning_h_home;
                            $first_lost_h_away+=$item->first_inning_h_home;
                            $count++;
                        endif;
                    elseif($item->home_name==$team):
                        if($count < $duration || $duration==0):
                            $full_h_home+=$item->full_inning_h_home;
                            $half_h_home+=$item->half_inning_h_home;
                            $first_h_home+=$item->first_inning_h_home;
                            $full_lost_h_home+=$item->full_inning_h_away;
                            $half_lost_h_home+=$item->half_inning_h_away;
                            $first_lost_h_home+=$item->first_inning_h_away;
                            $count++;
                        endif;
                    endif;
                endforeach;
            endif;

            $result=array('team'=>$team,'inning'=>$duration,'all_or_not_all'=>$all_or_not_all,'full_inning_h_away'=>$full_h_away,'half_inning_h_away'=>$half_h_away,'first_inning_h_away'=>$first_h_away,'full_inning_h_home'=>$full_h_home,
                          'half_inning_h_home'=>$half_h_home,'first_inning_h_home'=>$first_h_home, 'full_inning_lost_h_away'=>$full_lost_h_away,'half_inning_lost_h_away'=>$half_lost_h_away,
                          'first_inning_lost_h_away'=>$first_lost_h_away,'full_inning_lost_h_home'=>$full_lost_h_home,'half_inning_lost_h_home'=>$half_lost_h_home,'first_inning_lost_h_home'=>$first_lost_h_home);
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert('kbo_h_temp', $result);
        endif;

        return $this->db->get_where('kbo_h_temp', array('insert_dt'=>date('Y-m-d'),'team'=>$team, 'inning'=>$duration, 'all_or_not_all'=>$all_or_not_all))->row();
    }

//  마이닝 - 홈런 예쓰/노
    function get_hr_yn($team, $tab_selector){
        $MINING=$this->get_mining_db();

        $result=array();
        if($tab_selector==4):
            $MINING->select('full_inning_hr_away');
            $MINING->where('away_name', $team);
            $MINING->where('full_inning_hr_away!=', 0);
            $MINING->where('full_inning_hr_home!=', 0);
            $num_rows_away=$MINING->get('schedule')->num_rows();
            $MINING->select('full_inning_hr_home');
            $MINING->where('home_name', $team);
            $MINING->where('full_inning_hr_home!=', 0);
            $MINING->where('full_inning_hr_away!=', 0);
            $num_rows_home=$MINING->get('schedule')->num_rows();

            $result['hr_away']=$num_rows_away;
            $result['hr_home']=$num_rows_home;
        elseif($tab_selector==5):
            $MINING->select('full_inning_hr_away, half_inning_hr_away, first_inning_hr_away');
            $MINING->where('away_name', $team);
            $MINING->where('full_inning_hr_away!=', 0);
            $result_away=$MINING->get('schedule')->result();
            $MINING->select('full_inning_hr_home, half_inning_hr_home, first_inning_hr_home');
            $MINING->where('home_name', $team);
            $MINING->where('full_inning_hr_home!=', 0);
            $result_home=$MINING->get('schedule')->result();

            $result=array($result_away, $result_home);
        endif;

        return $result;
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

    function crawlingDailyBatterPitcher($player_id, $pitcher_or_batter){
        $this->load->library('curl');

        $url_word=($pitcher_or_batter=='pitcher')? 'PitcherDetail': 'HitterDetail';
        $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/'.$url_word.'/Daily.aspx?playerId='.$player_id);
        $column_list=($pitcher_or_batter=='pitcher')? array('date','opponent','position','result','era1','tbf','ip','h','hr','bb','hbp','so','r','er','era2')
                                                    : array('date','opponent','avg1','ab','r','h','second_b','third_b','hr','rbi','sb','cs','bb','hbp','so','gdp','avg2');

        $piece_1=explode('</tbody>', $source);
        if(sizeof($piece_1)>2):
            foreach($piece_1 as $item):
                $pieces_6=explode('<tbody>', $item);
                unset($pieces_6[0]);
                foreach($pieces_6 as $items):
                    $pieces_2=explode("<tr>", $items);
                    for($z=1; $z<count($pieces_2); $z++){
                        $dataArray=array();
                        $pieces_3=explode("</tr>", $pieces_2[$z]);
                        $pieces_4=explode("</td>", $pieces_3[0]);
                        for($v=0; $v<count($pieces_4)-1; $v++){
                            $pieces_5=explode(">", $pieces_4[$v]);
                            array_push($dataArray, $pieces_5[1]);
                        }
                        $dataSet=array_combine($column_list, $dataArray);

                        $num=$this->db->get_where('kbo_daily_'.$pitcher_or_batter, array('player_id'=>$player_id, 'date'=>$dataSet['date']))->num_rows();
                        if($num==0):
                            $this->db->set('player_id', $player_id);
                            $this->db->set('insert_dt', 'NOW()', false);
                            $this->db->insert('kbo_daily_'.$pitcher_or_batter, $dataSet);
                        endif;
                    }
                endforeach;
            endforeach;
        endif;
    }

/* ---------------------------------------------------------- CRAWLING ---------------------------------------------------------- */

    function crawlingResult(){
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
        /*$source=$this->curl->simple_get('/application/views/baseball/sources/result_half_first.php');

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
        endforeach;*/
    }

    function crawlingTeamRecord(){
        $this->load->library('curl');

        /* 팀 종합기록 */
        $total=$this->getRankBoard('all', 'all', 'all', 0, 0);
        foreach($total as $item):
            unset($item->ou_home);
            unset($item->ou_away);
        endforeach;
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

    function crawlingRecordHitter(){
        $insert_count=0;
        $count=$this->db->get_where('kbo_record_hitter', array('crawling_date'=>date('Y-m-d')))->num_rows();

        if($count==0):
            $this->load->library('curl');
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
                        if($pieces_3[0]!="<td colspan='16'>데이터가 존재하지 않습니다.</td>" && $pieces_3[0]!="<td colspan='13'>데이터가 존재하지 않습니다.</td>"):
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

                if($pieces_3[0]!="<td colspan='16'>데이터가 존재하지 않습니다.</td>" && $pieces_3[0]!="<td colspan='13'>데이터가 존재하지 않습니다.</td>"):
                    $req_arr=$this->baseball_model->getRequired('bat');
                    foreach($req_arr as $key=>$item):
                        if($result_set2['team']==$key) $req=$item;
                    endforeach;
                    $req=($req < $result_set2['pa'])? 'Y':'N';
                    $result_set=$result_set2+array('req_yn'=>$req);

                    $result_message=$this->baseball_model->insertPlayerRecordByCrawling('kbo_record_hitter', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') insert completed.<br>'; $insert_count++; endif;
                endif;
            endforeach;
        else: echo "already today's crawling seems to be done."; endif;

        if($insert_count!=0) echo 'total inserted data count : '.$insert_count;
    }

    function crawlingRecordPitcher(){
        $insert_count=0;
        $count=$this->db->get_where('kbo_record_pitcher', array('crawling_date'=>date('Y-m-d')))->num_rows();

        if($count==0):
            $this->load->library('curl');
            $column_list1=array('team','era','g','cg','sho','w','l','sv','hld','wpct','tbf','np','ip','h','second_b','third_b','hr');
            $column_list2=array('sac','sf','bb','ibb','so','wp','bk','r','er','bsv','whip','avg','qs');

            $players_id=$this->baseball_model->get_players();
            foreach($players_id as $items):
                $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherDetail/Basic.aspx?playerId='.$items->player_id);

                $piece_1=explode('</tbody>', $source);
                $result_set1=array();
                $result_set2=array();
                foreach($piece_1 as $key=>$item):
                    if($key<2):
                        $pieces_6=explode('<tbody>', $item);
                        $pieces_2=explode("<tr>", $pieces_6[1]);
                        $pieces_3=explode("</tr>", $pieces_2[1]);
                        if($pieces_3[0]!="<td colspan='17'>데이터가 존재하지 않습니다.</td>" && $pieces_3[0]!="<td colspan='13'>데이터가 존재하지 않습니다.</td>"):
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

                if($pieces_3[0]!="<td colspan='17'>데이터가 존재하지 않습니다.</td>" && $pieces_3[0]!="<td colspan='13'>데이터가 존재하지 않습니다.</td>"):
                    $req_arr=$this->baseball_model->getRequired('pit');
                    foreach($req_arr as $key=>$item):
                        if($result_set2['team']==$key) $req=$item;
                    endforeach;
                    $req=($req < $result_set2['ip'])? 'Y':'N';
                    $result_set=$result_set2+array('req_yn'=>$req);

                    $result_message=$this->baseball_model->insertPlayerRecordByCrawling('kbo_record_pitcher', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') insert completed.<br>'; $insert_count++; endif;
                endif;
            endforeach;
        else: echo "already today's crawling seems to be done."; endif;

        if($insert_count!=0) echo 'total inserted data count : '.$insert_count;
    }

}
