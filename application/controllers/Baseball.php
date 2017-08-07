<?php defined('BASEPATH') OR exit('No direct script access allowed');
use JonnyW\PhantomJs\Client;
class Baseball extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('/baseball/baseball_model');
    }

//  메인탭4
    function league($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $scroll_top=($this->input->get('scroll_top')!=null)? $this->input->get('scroll_top') : 0;
        $home_away=($this->input->get('home_away')==null || $this->input->get('home_away')=='all')? 'all' : $this->input->get('home_away');
        $top_selector=($this->input->get('selector')==null || $this->input->get('selector')=='')? 'win_lose' : $this->input->get('selector');
        $board_selector=($this->input->get('board_selector')==null)? 'win_lose' : $this->input->get('board_selector');
        $handicap=($this->input->get('handicap')!=null || $board_selector=='handicap')? $this->input->get('handicap') : 0;
        $mlb_selector=($this->input->get('mlb_selector')==null || $this->input->get('mlb_selector')=='')? 'MLB_N' : $this->input->get('mlb_selector');
        $this_league=($league=='KBO')? $league : $mlb_selector;
        $view=($league=='KBO')? 'league' : 'league_MLB';

        $over_under_reference=$this->baseball_model->get_over_under_by_team($league);
        $over_under=($board_selector=='ou')? $over_under_reference : 0;
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

            foreach($total as $item) $sortAux[]=$item->$word;
            array_multisort($sortAux, $asc_or_desc, $total);

            foreach($total as $key=>$item) $item->rank=$key+1;
        endif;

        $this->load->view('/baseball/'.$view, array('total'=>$total,'schedule'=>$schedule,'handicap'=>$handicap,'league_statistics'=>$league_statistics,'over_under_reference_value'=>$over_under_reference_value,'offense'=>$offense,'defence'=>$defence,'top_selector'=>$top_selector,'scroll_top'=>$scroll_top,'home_away'=>$home_away,'over_under_reference'=>$over_under_reference,'mlb_selector'=>$mlb_selector,'total_selector'=>$total_selector,'board_selector'=>$board_selector));
        $this->load->view("/footer");
    }

    function result($league, $team, $month){
        $this->load->view("/head_up");
        $this->load->view("/head");

        if($month>9) $month==9;
        $view=($league=='KBO')? 'result' : 'result_MLB';

        $result=$this->baseball_model->get_by_day($league, urldecode($team), $month);
        $over_under_reference=$this->baseball_model->get_over_under_by_team($league);
        $over_under_reference_value=$this->baseball_model->get_over_under($league);
        $team_month=$this->baseball_model->get_team_month(urldecode($team), $month);
        $league_result=$this->baseball_model->get_league_result();

        $this->load->view("/baseball/".$view, array('league'=>$league,'result'=>$result,'over_under_reference_value'=>$over_under_reference_value,'team_month'=>$team_month,'team'=>urldecode($team),'month'=>$month,'over_under_reference'=>$over_under_reference,'league_result'=>$league_result));
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
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows($league, $table, 0) : $this->baseball_model->get_num_rows_by_team($table, $team);
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
        else{
            if($this->input->cookie('pitcher_sort') == null) $pitcher=$this->baseball_model->get_pagination($table, $per_page, $offset);
            else $pitcher=$this->baseball_model->get_by_sort_pagination($league, $table, 'era', $per_page, $offset);
        }

        $this->load->library('pagination');
        $config['base_url'] = '/baseball/player_record_pitcher/'.$league;
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows_by_sort($table, $pitcher_sort) : $this->baseball_model->get_num_rows_by_team($table, $team);
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

//  그 외 페이지
    function team_info($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $handicap=1.5;
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $home_away=($this->input->get('home_away')!=null)? $this->input->get('home_away') : 'all';
        $this_lg=($league=='MLB_A')? 'AL' : 'NL';

        $first_statistics=$this->baseball_model->get_record_by_team($league, $team);
        $plus_minus=$this->baseball_model->get_total_score($league, 'all', 'all');
        $plus_minus_rank=$this->get_rank_plus_minus($league, $team);
        $over_under_reference_value=$this->baseball_model->get_over_under($league);
        $over_under=$this->baseball_model->get_all_game_over_under($league, $team, $over_under_reference_value, $handicap);
        $offense=($league=='KBO')? $this->baseball_model->get('KBO_team_offense') : $this->baseball_model->get_where('MLB_team_offense', array('lg'=>$this_lg));
        $defence=($league=='KBO')? $this->baseball_model->get('KBO_team_defence') : $this->baseball_model->get_where('MLB_team_defence', array('lg'=>$this_lg));

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
        if($league=='KBO') $team_detail_record['offense']['risp']=$this->get_rank($offense, $team, 'risp', 'DESC');
        else $team_detail_record['offense']['ops']=$this->get_rank($offense, $team, 'ops', 'DESC');
        $team_detail_record['offense']['bb']=$this->get_rank($offense, $team, 'bb', 'DESC');
        $team_detail_record['offense']['so']=$this->get_rank($offense, $team, 'so', 'DESC');
        $team_detail_record['offense']['gdp']=$this->get_rank($offense, $team, 'gdp', 'DESC');

        $team_detail_record['defence']['era']=$this->get_rank($defence, $team, 'era', 'ASC');
        $team_detail_record['defence']['r']=$this->get_rank($defence, $team, 'r', 'DESC');
        $team_detail_record['defence']['h']=$this->get_rank($defence, $team, 'h', 'DESC');
        $team_detail_record['defence']['avg']=$this->get_rank($defence, $team, 'avg', 'DESC');
        $team_detail_record['defence']['hr']=$this->get_rank($defence, $team, 'hr', 'DESC');
        if($league=='KBO') $team_detail_record['defence']['qs']=$this->get_rank($defence, $team, 'qs', 'DESC');
        else $team_detail_record['defence']['ip']=$this->get_rank($defence, $team, 'ip', 'DESC');
        $team_detail_record['defence']['bb']=$this->get_rank($defence, $team, 'bb', 'DESC');
        $team_detail_record['defence']['so']=$this->get_rank($defence, $team, 'so', 'DESC');
        $team_detail_record['defence']['er']=$this->get_rank($defence, $team, 'er', 'DESC');
        $team_detail_record['defence']['whip']=$this->get_rank($defence, $team, 'whip', 'ASC');

        foreach($offense as $item) if($item->team==$team) $team_detail_record['offense_data']=$item;
        foreach($defence as $item) if($item->team==$team) $team_detail_record['defence_data']=$item;

        $rank_board=$this->getRankBoard($league, 'all', 'all', $home_away, 0 ,0);
        $plus_minus=$this->baseball_model->get_total_score($league, 'all', $home_away);

//      기록분석
        $offense_title_str_arr=array('avg'=>'타율','r'=>'득점','h'=>'안타','hr'=>'홈런','slg'=>'장타율','obp'=>'출루율','risp'=>'득점권타율','ops'=>'OPS','bb'=>'볼넷','so'=>'삼진','gdp'=>'병살타');
        $defence_title_str_arr=array('era'=>'방어율','r'=>'실점','h'=>'피안타','avg'=>'피안타율','hr'=>'피홈런','qs'=>'QS','ip'=>'이닝','bb'=>'볼넷','so'=>'삼진','er'=>'실책','whip'=>'whip');
        $rank_to_str=($league=='KBO')? array(1=>'매우 강함', 2=>'매우 강함', 3=>'강함', 4=>'강함', 5=>'보통', 6=>'보통', 7=>'약함', 8=>'약함', 9=>'매우 약함', 10=>'매우 약함') : array(1=>'매우 강함',2=>'매우 강함',3=>'매우 강함',4=>'강함',5=>'강함',6=>'강함',7=>'보통',8=>'보통',9=>'보통',10=>'약함',11=>'약함',12=>'약함',13=>'매우 약함',14=>'매우 약함',15=>'매우 약함') ;
        $rank_to_str_reverse=($league=='KBO')? array(1=>'매우 약함', 2=>'매우 약함', 3=>'약함', 4=>'약함', 5=>'보통', 6=>'보통', 7=>'강함', 8=>'강함', 9=>'매우 강함', 10=>'매우 강함') : array(1=>'매우 약함',2=>'매우 약함',3=>'매우 약함',4=>'약함',5=>'약함',6=>'약함',7=>'보통',8=>'보통',9=>'보통',10=>'강함',11=>'강함',12=>'강함',13=>'매우 강함',14=>'매우 강함',15=>'매우 강함');
        $num_to_num=($league=='KBO')? array(1=>1,2=>1,3=>2,4=>2,5=>'',6=>'',7=>4,8=>4,9=>3,10=>3) : array(1=>1,2=>1,3=>1,4=>2,5=>2,6=>2,7=>'',8=>'',9=>'',10=>4,11=>4,12=>4,13=>3,14=>3,15=>3);
        $num_to_num_reverse=($league=='KBO')? array(1=>3,2=>3,3=>4,4=>4,5=>'',6=>'',7=>2,8=>2,9=>1,10=>1) : array(1=>3,2=>3,3=>3,4=>4,5=>4,6=>4,7=>'',8=>'',9=>'',10=>2,11=>2,12=>2,13=>1,14=>1,15=>1);

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

        $this->load->view("/baseball/detail/team_info", array('team'=>$team,'first_statistics'=>$first_statistics,'over_under_reference_value'=>$over_under_reference_value,'handicap'=>$handicap,'home_away'=>$home_away,'league'=>$league,
                                                              'rank_board'=>$rank_board,'plus_minus'=>$plus_minus,'team_detail_record'=>$team_detail_record,'offense_anal'=>$offense_anal,'defence_anal'=>$defence_anal));
        $this->load->view("/footer");
    }

    function schedule($league, $select_year, $select_month){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $handicap=1.5;
        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';

        $first_statistics=$this->baseball_model->get_record_by_team($league, $team);
        $plus_minus=$this->baseball_model->get_total_score($league, 'all', 'all');
        $plus_minus_rank=$this->get_rank_plus_minus($league, $team);
        $over_under_reference_value=$this->baseball_model->get_over_under($league);
        $over_under=$this->baseball_model->get_all_game_over_under($league, $team, $over_under_reference_value, $handicap);
        $result=$this->baseball_model->get_by_month($league, $select_month, $team);

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

        $this->load->view("/baseball/detail/schedule", array('team'=>$team,'first_statistics'=>$first_statistics,'over_under_reference_value'=>$over_under_reference_value,'league'=>$league,'handicap'=>$handicap,'result'=>$result,'select_year'=>$select_year,'select_month'=>$select_month));
        $this->load->view("/footer");
    }

    function player_hitter($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(4)!=null) ? $this->uri->segment(4) : 0;
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
        $batter_sort=($this->input->get('batter_sort')!=null) ? $this->input->get('batter_sort') : '';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : $this->input->cookie('team');

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
        $table=($league=='KBO')? 'KBO_record_hitter' : 'MLB_record_hitter';
        $batter=$this->baseball_model->sort_by_team_order_by($table, $team, $batter_sort, $per_page, $offset);

        $batter_result=array();
        if(isset($batter)):
            $batter_result['avg']=$this->baseball_model->get_top_player_in_team($league, $team, 'hitter', 'avg');
            $batter_result['hr']=$this->baseball_model->get_top_player_in_team($league, $team, 'hitter', 'hr');
            $batter_result['rbi']=$this->baseball_model->get_top_player_in_team($league, $team, 'hitter', 'rbi');
            $batter_result['h']=$this->baseball_model->get_top_player_in_team($league, $team, 'hitter', 'h');
            $batter_result['sb']=$this->baseball_model->get_top_player_in_team($league, $team, 'hitter', 'sb');
        endif;

        $this->load->library('pagination');
        $config['base_url'] = '/baseball/player_hitter/KBO';
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows($league, 'KBO_record_hitter', 0) : $this->baseball_model->get_num_rows_by_team('KBO_record_hitter', $team);
        $config['per_page']=$per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $this->pagination->initialize($config);

        $this->load->view("/baseball/detail/player_hitter", array('team'=>$team,'batter'=>$batter,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'batter_sort'=>$batter_sort,'batter_result'=>$batter_result,'league'=>$league));
        $this->load->view("/footer");
    }

    function player_pitcher($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $per_page=20;
        $offset=($this->uri->segment(4)!=null) ? $this->uri->segment(4) : 0;
        $mouseTop=($this->input->get('scroll_top')!=null) ? $this->input->get('scroll_top') : 0;
        $focus=($this->input->get('focus')!=null) ? $this->input->get('focus') : 0;
        $boldNum=($this->input->get('bold_num')!=null) ? $this->input->get('bold_num') : 0;
        $pitcher_sort=($this->input->get('pitcher_sort')!=null) ? $this->input->get('pitcher_sort') : '';
        $team=($this->input->get('team')!=null)? $this->input->get('team') : $this->input->cookie('team');
        $table=($league=='KBO')? 'KBO_record_pitcher': 'MLB_record_pitcher';

        $this->load->helper('cookie');
        if($this->uri->segment(4)==null):
            $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'pitcher_sort','value'=>$pitcher_sort,'expire'=>'86500','domain'=>SERVER_HOST));
            $this->input->set_cookie(array('name'=>'team','value'=>$team,'expire'=>'86500','domain'=>SERVER_HOST));
        else:
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
            $pitcher_sort=$this->input->cookie('pitcher_sort');
            $team=$this->input->cookie('team');
        endif;

        if($pitcher_sort==''): $pitcher_sort='era'; $boldNum=1; endif;
        $table=($league=='KBO')? 'KBO_record_pitcher' : 'MLB_record_pitcher';
        $pitcher=$this->baseball_model->sort_by_team_order_by($table, $team, $pitcher_sort, $per_page, $offset);

        $pitcher_result=array();
        if(isset($pitcher)):
            $pitcher_result['era']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'era');
            $pitcher_result['w']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'w');
            $pitcher_result['sv']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'sv');
            if($league=='KBO') $pitcher_result['wpct']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'wpct');
            else $pitcher_result['ip']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'ip');
            $pitcher_result['hld']=$this->baseball_model->get_top_player_in_team($league, $team, 'pitcher', 'hld');
        endif;

        $this->load->library('pagination');
        $config['base_url'] = '/baseball/player_pitcher/KBO';
        $config['total_rows'] = ($team=='')? $this->baseball_model->get_num_rows_by_sort($table, $pitcher_sort) : $this->baseball_model->get_num_rows_by_team('KBO_record_pitcher', $team);
        $config['per_page'] = $per_page;
        $config['num_links'] = 3;
        $config['cur_tag_open'] = '<a class="on" href="" >';
        $config['cur_tag_close'] = '</a>';
        $config['prev_link'] = FALSE;
        $config['next_link'] = FALSE;
        $config['first_link'] = '<<';
        $config['last_link'] = '>>';
        $this->pagination->initialize($config);

        $this->load->view("/baseball/detail/player_pitcher", array('team'=>$team,'pitcher'=>$pitcher,'mouseTop'=>$mouseTop,'focus'=>$focus,'bold_num'=>$boldNum,'offset'=>$offset,'pitcher_sort'=>$pitcher_sort,'pitcher_result'=>$pitcher_result,'league'=>$league));
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
        $player_data=($pitcher_or_batter=='pitcher')? $this->baseball_model->sorting_by_team('KBO_record_pitcher', $team) : $this->baseball_model->sorting_by_team('KBO_record_hitter', $team);
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

        $this->load->view("/baseball/detail/player_info", array('team'=>$team,'player_id'=>$player_id,'data1'=>$exp1[0],'data2'=>$exp2[0],'data3'=>$exp3[0],'data4'=>$exp4[0],'data5'=>$exp5[0],'data6'=>$exp6[0],
                                                                     'data7'=>$exp7[0],'player_basic'=>$player_basic,'data01'=>$data01[0],'data02'=>$data02[0],'pitcher_or_batter'=>$pitcher_or_batter));
        $this->load->view("/footer");
    }

    function situation($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $team_introduce=$this->baseball_model->get_team_introduce($team);

        if($league=='KBO'):
            $MINING=$this->get_mining_db();
            $MINING->select('no');
            $team_no=$MINING->get_where('teams', array('team_name'=>$team))->row();
            $players=$MINING->get_where('players', array('team_no'=>$team_no->no, 'delete_yn'=>'N'))->result();
        else:
            $players=$this->baseball_model->get_where('MLB_players_detail', array('team'=>$team));
        endif;

        $this->load->view("/baseball/detail/situation", array('team'=>$team,'team_introduce'=>$team_introduce,'players'=>$players,'league'=>$league));

        $this->load->view("/footer");
    }

    function team($league){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $team=($this->input->get('team')!=null)? $this->input->get('team') : '';
        $team_introduce=$this->baseball_model->get_team_introduce($team);
        $this->load->view("/baseball/detail/team", array('team'=>$team,'team_introduce'=>$team_introduce,'league'=>$league));

        $this->load->view("/footer");
    }

    function match($league, $schedule_no, $scroll_top){
        $this->load->view("/head_up");
        $this->load->view("/head");

        $schedule=$this->baseball_model->get_where_row('KBO_result', array('no'=>$schedule_no));
        $total=$this->baseball_model->get_team_total($league);
        $over_under_by_team=$this->baseball_model->get_over_under_by_team('KBO');
        $over_under_reference_value=floor(($over_under_by_team[$schedule->away]+$over_under_by_team[$schedule->home])/2).'.5';
//      팀간 비교
        foreach($total as $item):
            if($schedule->away==$item->team):
                $schedule->away_rank=$item->rank;
                $away_exp=explode(';', $item->recent_game);
                $recent_win=0;
                $recent_lose=0;
                foreach($away_exp as $key=>$items):
                    if($items=='승'): $recent_win++; $away_exp[$key]='win';
                    elseif($items=='패'): $recent_lose++; $away_exp[$key]='lose';
                    else: $away_exp[$key]='dra';
                    endif;
                endforeach;
                $schedule->away_recent=$away_exp;
                $schedule->away_recent_win_lose=$recent_win.'/'.$recent_lose;
                $schedule->away_win=$item->win;
                $schedule->away_tie=$item->tie;
                $schedule->away_lose=$item->lose;
                $schedule->away_win_rate=number_format($item->win_rate,3);
//              O/U
                $result=$this->baseball_model->get_all_game_over_under($league, $schedule->away, $over_under_reference_value, 0);
                $schedule->away_over=$result['over'];
                $schedule->away_under=$result['g']-$result['over'];
//              홈경기/원정경기
                $away_game=$this->baseball_model->get_away_home_win($schedule->away);
                $away_recent_ten_game=$this->get_recent_10_game_result($schedule->away);
                $schedule->away_awaygame_win=$away_game['away_win'];
                $schedule->away_awaygame_lose=$away_game['away_lose'];
                $schedule->away_homegame_win=$away_game['home_win'];
                $schedule->away_homegame_lose=$away_game['home_lose'];
                $schedule->away_recent_ten_game=$away_recent_ten_game;
//              득점/실점/타율/홈런
                $away_offense=$this->baseball_model->get_where_row('KBO_team_offense', array('team'=>$schedule->away));
                $away_defence=$this->baseball_model->get_where_row('KBO_team_defence', array('team'=>$schedule->away));
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
                    if($items=='승'): $recent_win++; $home_exp[$key]='win';
                    elseif($items=='패'): $recent_lose++;  $home_exp[$key]='lose';
                    else: $home_exp[$key]='dra';
                    endif;
                endforeach;
                $schedule->home_recent=$home_exp;
                $schedule->home_recent_win_lose=$recent_win.'/'.$recent_lose;
                $schedule->home_win=$item->win;
                $schedule->home_tie=$item->tie;
                $schedule->home_lose=$item->lose;
                $schedule->home_win_rate=number_format($item->win_rate,3);
//              O/U
                $result=$this->baseball_model->get_all_game_over_under($league, $schedule->home, $over_under_reference_value, 0);
                $schedule->home_over=$result['over'];
                $schedule->home_under=$result['g']-$result['over'];
//              홈경기/원정경기
                $home_game=$this->baseball_model->get_away_home_win($schedule->home);
                $home_recent_ten_game=$this->get_recent_10_game_result($schedule->home);
                $schedule->home_awaygame_win=$home_game['away_win'];
                $schedule->home_awaygame_lose=$home_game['away_lose'];
                $schedule->home_homegame_win=$home_game['home_win'];
                $schedule->home_homegame_lose=$home_game['home_lose'];
                $schedule->home_recent_ten_game=$home_recent_ten_game;
//              득점/실점/타율/홈런
                $home_offense=$this->baseball_model->get_where('KBO_team_offense', array('team'=>$schedule->home));
                $home_defence=$this->baseball_model->get_where('KBO_team_defence', array('team'=>$schedule->home));
                $schedule->home_plus=$home_offense[0]->r;
                $schedule->home_minus=$home_defence[0]->r;
                $schedule->home_avg=$home_offense[0]->avg;
                $schedule->home_hr=$home_offense[0]->hr;
                $schedule->home_g=$home_offense[0]->g;
            endif;
        endforeach;

//      시즌 상대전적
        $over_under=array();
        $relative_match_result=$this->baseball_model->get_relative_match_result($schedule->away, $schedule->home, $over_under_reference_value);
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
            $h2h=$this->baseball_model->get_where_row('KBO_h2h', array('schedule_no'=>$item->no));
            if(!isset($h2h)) $this->crawlingKBORelationHRAVG($item->no, $item->away, $item->home, str_replace('-', '', $item->date));
            array_push($h2h_arr, $this->baseball_model->get_where_row('KBO_h2h', array('schedule_no'=>$item->no)));
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
        $h2h_result['away_win_lose']=$this->get_h2h_win_lose_dra($schedule->away, $schedule->home);

//      팀간비교->순위->홈경기/원정경기
        $result=$this->baseball_model->get_where('KBO_result', array('away_score!='=>''));
        $teams=array('SK','삼성','NC','두산','넥센','LG','한화','롯데','KIA','kt');
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
            if($item['team']==$schedule->away):
                $away_home_rank=$item['home_rank'];
                $away_away_rank=$item['away_rank'];
            elseif($item['team']==$schedule->home):
                $home_home_rank=$item['home_rank'];
                $home_away_rank=$item['away_rank'];
            endif;
        endforeach;
//      팀간비교->순위->득점/실점/타율/홈런
        $offense=$this->baseball_model->get('KBO_team_offense');
        $defence=$this->baseball_model->get('KBO_team_defence');
        $rank['away_plus']=$this->get_h2h_rank($offense, $schedule->away,'r');
        $rank['home_plus']=$this->get_h2h_rank($offense, $schedule->home,'r');
        $rank['away_minus']=$this->get_h2h_rank($defence, $schedule->away,'r');
        $rank['home_minus']=$this->get_h2h_rank($defence, $schedule->home,'r');
        $rank['away_avg']=$this->get_h2h_rank($offense, $schedule->away,'avg');
        $rank['home_avg']=$this->get_h2h_rank($offense, $schedule->home,'avg');
        $rank['away_hr']=$this->get_h2h_rank($offense, $schedule->away,'hr');
        $rank['home_hr']=$this->get_h2h_rank($offense, $schedule->home,'hr');
        $rank['away_homegame_win']=$away_home_rank;
        $rank['away_awaygame_win']=$away_away_rank;
        $rank['home_homegame_win']=$home_home_rank;
        $rank['home_awaygame_win']=$home_away_rank;

//      홈/원정팀 최근 10경기 결과
        $result_reversed=array_reverse($result);
        $away_count=0;
        $recent_ten_game=array('away_recent_ten_game'=>array(), 'home_recent_ten_game'=>array());
        foreach($result_reversed as $item):
            if($away_count<10):
                if($item->away==$schedule->away): array_push($recent_ten_game['away_recent_ten_game'], $item); $away_count++;
                elseif($item->home==$schedule->away): array_push($recent_ten_game['away_recent_ten_game'], $item); $away_count++; endif;
            endif;
        endforeach;
        $home_count=0;
        foreach($result_reversed as $item):
            if($home_count<10):
                if($item->away==$schedule->home): array_push($recent_ten_game['home_recent_ten_game'], $item); $home_count++;
                elseif($item->home==$schedule->home): array_push($recent_ten_game['home_recent_ten_game'], $item); $home_count++; endif;
            endif;
        endforeach;

//      pagination
        $this->load->library('pagination');
        $per_page=5;
        $total_count=$this->baseball_model->get_num_rows($league, 'KBO_comment', $schedule->no);
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

        $this->load->view("/baseball/detail/match", array('league'=>$league,'schedule'=>$schedule,'scroll_top'=>$scroll_top,'over_under'=>$over_under,'h2h'=>$h2h_result,'rank'=>$rank,'h2h_last_six_game'=>$h2h_last_six_game,'recent_ten_game'=>$recent_ten_game,'comment_list'=>$comment_list,'over_under_reference_value'=>$over_under_reference_value));
        $this->load->view("/footer");
    }

    function bet(){
        $this->load->view("/head_up");
        $this->load->view("/head");
        $this->load->view("/baseball/detail/dividend");
        $this->load->view("/footer");
    }

    /* --------------------------------------------------- COMMON --------------------------------------------------- */

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

    function get_team_full_name($team_short_name){
        $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');

        return $full_name_team[$team_short_name];
    }

    function get_score_result_ajax(){
        $data=$this->baseball_model->get_result('KBO_result', 'all');
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

    function get_match_result_ajax(){
        $data=$this->baseball_model->get_result('KBO_result', 'all');
        $result=array();
        foreach($data as $item):
            if($item->away == $this->input->post('away') && $item->home == $this->input->post('home')) array_push($result, $item);
            elseif($item->home == $this->input->post('away') && $item->away == $this->input->post('home')) array_push($result, $item);
        endforeach;

        $result_str='';
        foreach($result as $item):
            $result_str.='<tr class="match_contents"><td class="">KBO</td><td class="center c8">'.$item->date.'</td><td>'.$item->away.' vs '.$item->home.'</td><td><b class="score">'.$item->away_score.':'
            .$item->home_score.'</b></td><td class="red">1.24</td><td>4.29</td><td>2.13</td><td class="data"><span class="match_ajax"><span class="b_BTN2"><a href="/baseball/match_information/'.$item->no.'/0">경기결과</a></span>'
            .'<span class="r_BTN"><a href="">전문가 의견</a></span><span class="g_BTN"><a href="">블로그</a></span><span class="y_BTN"><a href="">배당률</a></span></span></td></tr>';
        endforeach;

        echo $result_str;
    }

    function match_include(){
        $this->load->view('/baseball/match_2_3');
    }

    function add_ajax(){
        $this->baseball_model->add($this->input->post('no'), $this->input->post('flag'));
    }

    function insert_comment_ajax(){
        $arr=array('schedule_no'=>$this->input->post('schedule_no'),'ip'=>$this->input->ip_address(),'content'=>$this->input->post('content'));
        $this->baseball_model->insert('KBO_comment', $arr);
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

    function get_recent_10_game_result($away_home){
        $result_set=array();
        $data=$this->baseball_model->get_result('KBO_result', 'all');

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

    function get_h2h_win_lose_dra($away, $home){
        $result=$this->baseball_model->get_query('SELECT * FROM KBO_result WHERE away_score!="" AND ((away="'.$away.'" AND home="'.$home.'") OR (away="'.$home.'" AND home="'.$away.'")) ORDER BY date DESC LIMIT 6');

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

    function crawlingKBORelationHRAVG($schedule_no, $away, $home, $date){
        $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS');
        $away=$team_initial[$away];
        $home=$team_initial[$home];
        $result=array();

        $client=Client::getInstance();
        $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');
        $url='http://www.koreabaseball.com/Schedule/GameCenter/Main.aspx?gameDate='.$date.'&gameId='.$date.$away.$home.'0& section=REVIEW';

        $request=$client->getMessageFactory()->createRequest($url, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $data=$client->send($request, $response);

        $exp=explode('</td></tr></tfoot></table></div>', $data->content);
        $exp1=explode('<td>', $exp[0]);
        $away_avg=$exp1[sizeof($exp1)-1];

        $exp2=explode('<td>', $exp[1]);
        $home_avg=$exp2[sizeof($exp2)-1];

        $result['schedule_no']=$schedule_no;
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
    }

    function get_total($league, $duration, $home_away, $handicap, $over_under){
        if($league=='MLB_A'):
            $total_west=$this->getRankBoard('MLBAW', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAW', $duration, 'all');
            foreach($total_west as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_central=$this->getRankBoard('MLBAC', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAC', $duration, 'all');
            foreach($total_central as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_east=$this->getRankBoard('MLBAE', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBAE', $duration, 'all');
            foreach($total_east as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total=array($total_east, $total_west, $total_central);
        elseif($league=='MLB_N'):
            $total_west=$this->getRankBoard('MLBNW', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNW', $duration, 'all');
            foreach($total_west as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_central=$this->getRankBoard('MLBNC', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNC', $duration, 'all');
            foreach($total_central as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total_east=$this->getRankBoard('MLBNE', 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score('MLBNE', $duration, 'all');
            foreach($total_east as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;

            $total=array($total_east, $total_west, $total_central);
        else:
            $total=$this->getRankBoard($league, 'all', $duration, $home_away, $handicap, $over_under);
            $plus_minus=$this->baseball_model->get_total_score($league, $duration, 'all');
            foreach($total as $item):
                $item->plus=$plus_minus[$item->team];
                $item->minus=$plus_minus[$item->team.'_lose'];
                $item->margin=$plus_minus[$item->team]-$plus_minus[$item->team.'_lose'];
            endforeach;
        endif;

        return $total;
    }

/* ---------------------------------------------------- CRAWLING ---------------------------------------------------- */

//  KBO
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
                array_push($result, $resultSet);
            endforeach;
        endforeach;

        $this->baseball_model->insert_by_month($result);
    }

    function crawlingTeamRecord(){
        $this->load->library('curl');

        /* 팀 종합기록 */
        $total=$this->getRankBoard('KBO', 'all', 'all', 'all', 0, 0);
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

    function crawlingRecordHitter(){
        $insert_count=0;
        $update_count=0;

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
                $req_arr=$this->baseball_model->get_required('bat');
                foreach($req_arr as $key=>$item):
                    if($result_set2['team']==$key) $req=$item;
                endforeach;
                $req=($req < $result_set2['pa'])? 'Y':'N';
                $result_set=$result_set2+array('req_yn'=>$req);

                $cnt=$this->baseball_model->get_where('KBO_record_hitter', array('crawling_date'=>date('Y-m-d'), 'player_id'=>$items->player_id));
                if(sizeof($cnt)==0):
                    $result_message=$this->baseball_model->insert_player_record_by_crawling('KBO_record_hitter', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') insert completed.<br>'; $insert_count++; endif;
                else:
                    $result_message=$this->baseball_model->update_player_record_by_crawling('KBO_record_hitter', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') update completed.<br>'; $update_count++; endif;
                endif;
            endif;
        endforeach;

        if($insert_count!=0) echo 'total inserted data count : '.$insert_count.'<br>';
        if($update_count!=0) echo 'total updated data count : '.$update_count;
    }

    function crawlingRecordPitcher(){
        $insert_count=0;
        $update_count=0;

        $this->load->library('curl');
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
                $req_arr=$this->baseball_model->get_required('pit');
                foreach($req_arr as $key=>$item):
                    if($result_set2['team']==$key) $req=$item;
                endforeach;
                if(strlen($result_set2['ip'])>3):
                    $exp=explode(' ', $result_set2['ip']);
                    $req=($req < $exp[0])? 'Y':'N';
                else:
                    $req=($req < $result_set2['ip'])? 'Y':'N';
                endif;
                $result_set=$result_set2+array('req_yn'=>$req);

                $cnt=$this->baseball_model->get_where('KBO_record_pitcher', array('crawling_date'=>date('Y-m-d'), 'player_id'=>$items->player_id));
                if(sizeof($cnt)==0):
                    $result_message=$this->baseball_model->insert_player_record_by_crawling('KBO_record_pitcher', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') insert completed.<br>'; $insert_count++; endif;
                else:
                    $result_message=$this->baseball_model->update_player_record_by_crawling('KBO_record_pitcher', $result_set);
                    if($result_message==1): echo 'player_id('.$items->player_id.') update completed.<br>'; $update_count++; endif;
                endif;
            endif;
        endforeach;

        if($insert_count!=0) echo 'total inserted data count : '.$insert_count.'<br>';
        if($update_count!=0) echo 'total updated data count : '.$update_count;
    }

    function crawlingKBOMonth(){
        $client=Client::getInstance();
        $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');

        for($i=3; $i<10; $i++):
            $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/main?rows=20&order=TPCT&orderType=DESC&teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$i.'&split02_2='.$i, 'GET');
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
                            $arr['month']=$i;

                            array_push($result, $arr);
                        endif;
                    endforeach;

                    $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/standard?teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$i.'&split02_2='.$i, 'GET');
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
        endfor;
    }

    function crawlingKBOStartPitcher(){
        $team=array('SK'=>1,'kt'=>2,'KT'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10);

        $client=Client::getInstance();
        $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');

        $result=$this->baseball_model->get_result_date_distinct('KBO_result');

        foreach($result as $item):
            $result_set['date']=$item->date;
            $url='http://www.koreabaseball.com/Schedule/GameCenter/Main.aspx?gameDate='.$item->date;

            $request=$client->getMessageFactory()->createRequest($url, 'GET');
            $response=$client->getMessageFactory()->createResponse();
            $client->send($request, $response);

            $exp=explode('away_nm="', $response->getContent());
            var_dump($exp);
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
        endforeach;
    }

//  MLB
    function crawlingOptaResult(){
        $this->load->library('curl');
        date_default_timezone_set('Asia/Seoul');

        for($i=1; $i<7; $i++):
            $opta_data=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/match/d10jn0i4i5a81s7l0k6qz2i38?tmcl=5m0znw5wpznp7iizf135jz9bd&_pgSz=500&_fmt=json&_pgNm='.$i));
            foreach($opta_data as $item):
                foreach($item as $items):
                    if($items->matchInfo->stage->name!='Pre Season'):
                        $match_info_id=$items->matchInfo->id;
                        $opta_data_score=json_decode($this->curl->simple_get('http://api.performfeeds.com/baseballdata/matchstats/d10jn0i4i5a81s7l0k6qz2i38/'.$match_info_id.'?&_fmt=json'));

                        $time=(isset($items->matchInfo->time))? $items->matchInfo->time : '00:00:00';
                        $date=date("Y-m-d H:i:s", strtotime($items->matchInfo->date.' '.$time));
                        $home_score=($opta_data_score==null)? '' : $opta_data_score->matchStats->liveData->matchDetails->scores->total->home;
                        $away_score=($opta_data_score==null)? '' : $opta_data_score->matchStats->liveData->matchDetails->scores->total->away;

                        $result=array();
                        $exp=explode(' ', $date);
                        $result['date']=$exp[0];
                        $result['time']=$exp[1];
                        $result['home']=$items->matchInfo->contestant[0]->name;
                        $result['home_score']=$home_score;
                        $result['away']=$items->matchInfo->contestant[1]->name;
                        $result['away_score']=$away_score;
                        $result['stadium']=$items->matchInfo->venue->name;
                        $where=array('date'=>$result['date'], 'away'=>$result['away'], 'home'=>$result['home']);

                        $this->baseball_model->insert_update_before('MLB_result', $result, $where);
                    endif;
                endforeach;
            endforeach;
        endfor;
    }

    function crawlingOptaTeamRecord(){
        $this->load->library('curl');
        date_default_timezone_set('Asia/Seoul');
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
                $where=array('date'=>$result['date'], 'team'=>$result['team']);

                foreach($conferences as $item) if($result['team']==$item->contestantName) $result['conference_rank']=$item->rank;

                $this->baseball_model->insert_update_before('MLB_team_total', $result, $where);
            endfor;
        endfor;
    }

    function crawlingOptaTeam(){
        $this->load->library('curl');
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

    function crawlingOptaPlayersDetail(){
        $this->load->library('curl');

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

    function crawlingMLBPlayers($limit, $offset){
//      total : 1271
        $players=$this->baseball_model->get_limit('MLB_players', $limit, $offset);

        $client=Client::getInstance();
        $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');

        foreach($players as $player):
            $request=$client->getMessageFactory()->createRequest('http://m.mlb.com/player/'.$player->player_id, 'GET');
            $response=$client->getMessageFactory()->createResponse();
            $client->send($request, $response);

            $result=array();
            $result2=array();
            $exp=explode('<td class="col-0 row-0 td--highlighted" data-col="0" data-row="0">', $response->getContent());

            if(sizeof($exp)==3):
                $exp1=explode('</tbody>', $exp[1]);
                $exp2=explode('</tr>', $exp1[0]);
                for($i=0; $i<sizeof($exp2)-1; $i++):
                    $arr=array();
                    $column_set1=array('year','team','lg','g','ab','r','h','tb','second_b','third_b','hr','rbi','bb','ibb','so','sb','cs','avg','obp','slg','ops','goao');
                    $exp3=explode('</span>', $exp2[$i]);
                    foreach($exp3 as $item):
                        $exp4=explode('<span>', $item);
                        if(isset($exp4[1])) array_push($arr, $exp4[1]);
                    endforeach;
                    if(sizeof($column_set1)==sizeof($arr)) array_push($result, array_combine($column_set1, $arr));
                endfor;
                $exp5=explode('</tbody>', $exp[2]);
                $exp6=explode('</tr>', $exp5[0]);
                for($j=0; $j<sizeof($exp6)-1; $j++):
                    $arr2=array();
                    $column_set2=array('pa','xbh','hbp','sac','sf','babip','gdp','gidpo');
                    $exp7=explode('</span>', $exp6[$j]);
                    foreach($exp7 as $key=>$items):
                        if($key==3 || $key==5 || $key==6 || $key==7 || $key==8 || $key==9 || $key==10 || $key==11):
                            $exp8=explode('<span>', $items);
                            if(isset($exp8[1])) array_push($arr2, $exp8[1]);
                        endif;
                    endforeach;
                    if(sizeof($column_set2)==sizeof($arr2)) array_push($result2, array_combine($column_set2, $arr2));
                endfor;

//          규정타석
                $team=$this->baseball_model->get_where('MLB_teams', array('name_short'=>$result[sizeof($result)-1]['team']));
                echo $result[sizeof($result)-1]['team'];
                if($team[0]->name=='Los Angeles Angels of Anaheim') $team[0]->name='Los Angeles Angels';
                $team_offense=$this->baseball_model->get_where('MLB_team_offense', array('team'=>$team[0]->name));
                foreach($result as $key=>$item):
                    if($item['year']=='2017'):
                        if($item['ab'] >= number_format($team_offense[0]->g*3.1, 1)) $result[$key]['req_yn']='Y';
                        else $result[$key]['req_yn']='N';
                    endif;
                endforeach;

                foreach($result as $key=>$entry) $this->baseball_model->insert_update_before('MLB_record_hitter', $entry+$result2[$key]+array('player_id'=>$player->player_id,'crawling_date'=>date('Y-m-d')), array('year'=>$entry['year'],'player_id'=>$player->player_id));
                echo $players[0]->player_id.' is updated.<br>';
            elseif(sizeof($exp)==4):
                $exp1=explode('</tbody>', $exp[1]);
                $exp2=explode('</tr>', $exp1[0]);
                for($i=0; $i<sizeof($exp2)-1; $i++):
                    $arr=array();
                    $column_set1=array('year','team','lg','w','l','era','g','gs','cg','sho','sv','ip','h','r','er','hr','bb','ibb','so','avg','whip','goao');
                    $exp3=explode('</span>', $exp2[$i]);
                    foreach($exp3 as $key=>$item):
                        if($key!=11 && $key!=17):
                            $exp4=explode('<span>', $item);
                            if(isset($exp4[1])) array_push($arr, $exp4[1]);
                        endif;
                    endforeach;
                    if(sizeof($column_set1)==sizeof($arr)) array_push($result, array_combine($column_set1, $arr));
                endfor;
                $exp5=explode('</tbody>', $exp[2]);
                $exp6=explode('</tr>', $exp5[0]);
                for($j=0; $j<sizeof($exp6)-1; $j++):
                    $arr2=array();
                    $column_set2=array('qs','gf','hld','second_b','third_b','gidp','gidpo','wp','bk','sb','cs','pk','np','sp','pip','ppa');
                    $exp7=explode('</span>', $exp6[$j]);
                    foreach($exp7 as $key=>$items):
                        if($key!=0 && $key!=1 && $key!=2):
                            $exp8=explode('<span>', $items);
                            if(isset($exp8[1])) array_push($arr2, $exp8[1]);
                        endif;
                    endforeach;
                    if(sizeof($column_set2)==sizeof($arr2)) array_push($result2, array_combine($column_set2, $arr2));
                endfor;

//          규정이닝
                $name_short=(isset($result[sizeof($result)-1]['team']))? $result[sizeof($result)-1]['team'] : $result[0]['team'];
                $team=$this->baseball_model->get_where('MLB_teams', array('name_short'=>$result[sizeof($result)-1]['team']));
                if($team!=null):
                    if($team[0]->name=='Los Angeles Angels of Anaheim') $team[0]->name='Los Angeles Angels';
                    $team_offense=$this->baseball_model->get_where('MLB_team_defence', array('team'=>$team[0]->name));
                    foreach($result as $key=>$item):
                        if($item['year']=='2017'):
                            if($item['ip'] >= $team_offense[0]->g) $result[$key]['req_yn']='Y';
                            else $result[$key]['req_yn']='N';
                        endif;
                    endforeach;

                    foreach($result as $key=>$entry) $this->baseball_model->insert_update_before('MLB_record_pitcher', $entry+$result2[$key]+array('player_id'=>$player->player_id,'crawling_date'=>date('Y-m-d')), array('year'=>$entry['year'],'player_id'=>$player->player_id));
                    echo $player->player_id.' is updated.<br>';
                else: echo $player->player_id.' is passed2.<br>'; endif;
            endif;
        endforeach;
    }

    function crawlingOptaTeamDetail(){
        $client=Client::getInstance();
        $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');

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
}
