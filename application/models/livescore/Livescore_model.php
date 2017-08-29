<?php
class Livescore_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

    function get_from_mining($table){
        $MINING=$this->get_mining_db();
        return $MINING->get($table)->result();
    }

    function get_select_from_mining($table, $select){
        $MINING=$this->get_mining_db();

        $MINING->select_from_mining($select);
        return $MINING->get($table)->result();
    }

    function get_query_from_mining($query){
        $MINING=$this->get_mining_db();
        return $MINING->query($query)->result();
    }

    function get_where_from_mining($table, $where){
        $MINING=$this->get_mining_db();
        return $MINING->get_where($table, $where)->result();
    }

    function get_mlb_result_with_status($table, $schedule_no){
        $this->db->select('MLB_result.*, MLB_score_board.status');
        $this->db->join('MLB_score_board', 'MLB_score_board.schedule_no = MLB_result.no');
        $result=$this->db->get_where($table, array('MLB_result.no'=>$schedule_no))->row();
        $schedule=$this->db->get_where('MLB_result', array('no'=>$schedule_no))->row();

        if(!isset($result)):
            $result=(object)array('no'=>$schedule_no,'league'=>'MLB','game_time'=>$schedule->date,'away_name'=>$schedule->away,'home_name'=>$schedule->home,'away_starter'=>$schedule->away_pitcher_kor,'home_starter'=>$schedule->home_pitcher_kor);
        else:
            $result->league='MLB';
            $result->game_time=$result->date.' '.$result->time;
            $result->away_name=$result->away;
            $result->home_name=$result->home;
            $result->away_starter=$result->away_pitcher_kor;
            $result->home_starter=$result->home_pitcher_kor;
        endif;

        return $result;
    }

    function get_where_row_from_mining($table, $where){
        $MINING=$this->get_mining_db();
        $result=$MINING->get_where($table, $where)->row();
        $result->league='KBO';

        return $result;
    }

    function get_schedule_by_date($date, $status){
        $result=array();

        $MINING=$this->get_mining_db();
        $MINING->where('status!=', 'rain');
        $MINING->like('game_time', $date, 'after');
        if($status!='all') $MINING->where('status', $status);
        $kbo_result=$MINING->get('schedule')->result();
        for($i=0; $i<sizeof($kbo_result); $i++): $kbo_result[$i]->league='KBO'; array_push($result, $kbo_result[$i]); endfor;

        if($status!='all') $this->db->select('MLB_result.*, MLB_score_board.status');
        if($status!='all') $this->db->join('MLB_score_board', 'MLB_score_board.schedule_no = MLB_result.no');
        if($status!='all') $this->db->where('status', $status);
        $mlb_result=$this->db->get_where('MLB_result', array('date'=>$date))->result();

        foreach($mlb_result as $item):
            $result_sub=array();
            $result_sub['league']='MLB';
            $result_sub['no']=$item->no;
            $result_sub['game_time']=$item->date.' '.$item->time;
            $result_sub['away_no']='';
            $result_sub['away_name']=$item->away;
            $result_sub['away_starter']=$item->away_pitcher_kor;
            $result_sub['home_no']='';
            $result_sub['home_name']=$item->home;
            $result_sub['home_starter']=$item->home_pitcher_kor;
            if($status=='check') $result_sub['status']=$item->status;

            array_push($result, (object)$result_sub);
        endforeach;

        if(sizeof($result)!=0):
            foreach($result as $item) $sortAux[]=$item->game_time;
            array_multisort($sortAux, SORT_ASC, $result);
        endif;

        return $result;
    }

    function get_mining_db(){
        $db['hostname']='210.179.67.38';
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

    function get_kbo_score_board($date, $away_name, $home_name){
        $MINING=$this->get_mining_db();
        $MINING->like('game_time', $date, 'after');
        $schedule=$MINING->get_where('schedule', array('away_name'=>$away_name, 'home_name'=>$home_name))->row();

        $result=array();
        $MINING->select('score');
        $score=$MINING->get_where('game_score', array('schedule_no'=>$schedule->no))->result();
        $MINING->select('rheb, inning');
        $rheb=$MINING->get_where('game_data', array('schedule_no'=>$schedule->no))->result();

        $away_score_board=array();
        $home_score_board=array();
        $score_arr=($score==null)?';;;;;;;;;;;;;;;;;;;;;;;':$score[0]->score;
        $rheb_arr=($rheb==null)?';;;;;;;':$rheb[0]->rheb;
        $inning_arr=($rheb==null)?'0;0':$rheb[0]->inning;
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
        $result['no']=$schedule->no;
        $result['status']=$schedule->status;
        $result['away_score_board']=$away_score_board;
        $result['home_score_board']=$home_score_board;
        $result['inning']=$inning_arr;
        $result['away_starter']=$schedule->away_starter;
        $result['home_starter']=$schedule->home_starter;

        if($result['status']=='live'):
            $KBO_teams=array('SK'=>1,'KT'=>2,'kt'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10);
            $end_inning=explode(';', $inning_arr);
            $last_pitcher_player_id=($end_inning[1]=='0')? $MINING->get_where('line_up', array('schedule_no'=>$schedule->no,'team'=>$KBO_teams[$home_name],'position'=>'투'))->row() : $MINING->get_where('line_up', array('schedule_no'=>$schedule->no,'team'=>$KBO_teams[$away_name],'position'=>'투'))->row();
            if(isset($last_pitcher_player_id)) $result['last_pitcher']=$MINING->get_where('players', array('player_id'=>$last_pitcher_player_id->player_id))->row()->name;
            else $result['last_pitcher']='';

            $game_data=$MINING->get_where('game_data', array('schedule_no'=>$schedule->no))->row();
            if(isset($game_data)):
                $exp_ball=explode(';', $game_data->ball);
                $result['b']=$exp_ball[0];
                $result['s']=$exp_ball[1];
                $result['o']=$exp_ball[2];
                $exp_runner=explode(';', $game_data->runner);
                $result['f']=($exp_runner[0]==0)? 'x':'o';
                $result['d']=($exp_runner[1]==0)? 'x':'o';
                $result['t']=($exp_runner[2]==0)? 'x':'o';
                $exp_pitch=explode(';', $game_data->pitch);
                $batter=($game_data->batter==1)? 9 : $game_data->batter-1;
                if($end_inning[1]=='0'):
                    $result['p']=$exp_pitch[1];
                    $MINING->select('player_id');
                    $line_up=$MINING->get_where('line_up', array('schedule_no'=>$schedule->no,'team'=>$KBO_teams[$away_name],'position'=>$batter))->row();
                    $result['last_hitter']=$MINING->get_where('players', array('player_id'=>$line_up->player_id))->row()->name;
                else:
                    $result['p']=$exp_pitch[0];
                    $MINING->select('player_id');
                    $line_up=$MINING->get_where('line_up', array('schedule_no'=>$schedule->no,'team'=>$KBO_teams[$home_name],'position'=>$batter))->row();
                    $result['last_hitter']=$MINING->get_where('players', array('player_id'=>$line_up->player_id))->row()->name;
                endif;
            endif;
        else:
            $result['b']='0';
            $result['s']='0';
            $result['o']='0';
            $result['f']='x';
            $result['d']='x';
            $result['t']='x';
            $result['p']='';
            $result['last_hitter']='';
            $result['last_pitcher']='';
        endif;

        return $result;
    }

    function get_mlb_score_board($schedule_no){
        $schedule=$this->db->get_where('MLB_result', array('no'=>$schedule_no))->row();
        $result=$this->db->get_where('MLB_score_board', array('schedule_no'=>$schedule_no))->row();

        if(isset($result)):
            $exp_away=explode(';', $result->away_score_board);
            $result->away_score_board=$exp_away;
            $exp_home=explode(';', $result->home_score_board);
            $result->home_score_board=$exp_home;

            $result->away_starter=$schedule->away_pitcher_kor;
            $result->home_starter=$schedule->home_pitcher_kor;
        else:
            $result=array('no'=>'','schedule_no'=>'','id'=>'','inning'=>'','game_time'=>'','away_score_board'=>array('','','','','','','','','','','','','','',''),'home_score_board'=>array('','','','','','','','','','','','','','',''),'b'=>'0','s'=>'0','o'=>'0','f'=>'x','d'=>'x','t'=>'x','p'=>'','last_pitcher'=>'','last_hitter'=>'','status'=>'yet');
        endif;

        return (array)$result;
    }
}