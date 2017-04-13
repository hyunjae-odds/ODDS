<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/* INSERT */
	function insert($table, $data){
		$num_rows=$this->db->get($table)->num_rows();
		if($num_rows>0): $this->db->delete($table, array('*')); endif;

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->insert($table, $entry);
		endforeach;
	}
	function insertByMonth($table, $this_month, $array){
		$this->db->like('date', $this_month, 'after');
		$num_rows=$this->db->get($table)->num_rows();
		if($num_rows>0):
			$this->db->like('date', $this_month, 'after');
			$this->db->delete($table);
		endif;

		foreach($array as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->insert($table, $entry);
		endforeach;
	}
	function insertWithRecentGame($table, $data, $recent_game, $date){
		$num_rows=$this->db->get_where($table, array('date'=>$date))->num_rows();
		if($num_rows>0) $this->db->delete($table, array('date'=>$date));

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->set('date', $date);

			$team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
			foreach($team_array as $entries):
				if($entry['team']==$entries):
					$this->db->set('recent_game', $recent_game['<span>'.$entries.'</span>']);
				endif;
			endforeach;

			$this->db->insert($table, $entry);
		endforeach;
	}
    function insertNoDelete($table, $data){
        foreach($data as $entry):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert($table, $entry);
        endforeach;
    }

	/* GET */
	function get($table){
		return $this->db->get($table)->result();
	}
	function getLimit($table){
        $this->db->order_by('date', 'DESC');
        $this->db->order_by('win_rate', 'DESC');
        $this->db->order_by('rank', 'ASC');

		return $this->db->get($table, 10)->result();
	}
	function getByMonth($table, $this_month){
		$this->db->like('date', $this_month, 'after');
		$this->db->order_by('no', 'ASC');

		return $this->db->get($table)->result();
	}
	function getByScore($table){
		$this->db->where('away_score!=', '');
		$this->db->where('home_score!=', '');
		$this->db->order_by('no', 'ASC');

		return $this->db->get($table, 50)->result();
	}
	function getLastPlayDayOfThisMonth(){
		$this->db->select('date');
		$this->db->order_by('date', 'DESC');
		$last_date=$this->db->get('kbo_team_total_2017')->row();
		$exp=explode('-', $last_date->date);

		return $exp[2];
	}
	function getByTeam($team, $this_month){
		$this->db->select('rank, date, team');
		$this->db->like('date', '2017-'.$this_month, 'after');
		$this->db->order_by('date', 'ASC');

		return $this->db->get_where('kbo_team_total_2017', array('team'=>$team))->result();
	}
	function getCountDistinctByMonth($this_month){
		$this->db->select('date');
		$this->db->like('date', '2017-'.$this_month, 'after');
		$this->db->distinct();

		return $this->db->get('kbo_team_total_2017')->num_rows();
	}
	function get_schedule($select_month){
		$this->db->select('date');
		$this->db->like('date', '-'.$select_month.'-', 'both');
		$this->db->order_by('date', 'ASC');
		$this->db->distinct();

		return $this->db->get('kbo_team_total_2017')->result();
	}
	function getNumRows($table){
		$this->db->select('insert_dt');
		$this->db->order_by('insert_dt', 'DESC');
		$this->db->distinct();
		$lastDate=$this->db->get($table, 1)->row();
		
		$this->db->where('insert_dt', $lastDate->insert_dt);
	    return $this->db->get($table)->num_rows();
    }
    function getPagination($table, $limit, $offset){
    	$this->db->select('insert_dt');
    	$this->db->order_by('insert_dt', 'DESC');
    	$this->db->distinct();
    	$lastDate=$this->db->get($table, 1)->row();
    	
     	$this->db->where('insert_dt', $lastDate->insert_dt);
        return $this->db->get($table, $limit, $offset)->result();
    }
    function getBatter5(){
        $resultSet=array();

        $resultSet['avg']=$this->get_orderby('kbo_batterbasic_2017', 5, 'avg', 'DESC');
        $resultSet['hr']=$this->get_orderby('kbo_batterbasic_2017', 5, 'hr', 'DESC');
        $resultSet['rbi']=$this->get_orderby('kbo_batterbasic_2017', 5, 'rbi', 'DESC');
        $resultSet['h']=$this->get_orderby('kbo_batterbasic_2017', 5, 'h', 'DESC');
        $resultSet['ops']=$this->get_orderby('kbo_batterbasic_2017', 5, 'ops', 'DESC');

        return $resultSet;
    }
    function getPitcher5(){
        $resultSet=array();

        $resultSet['era']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'era', 'ASC');
        $resultSet['w']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'w', 'DESC');
        $resultSet['sv']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'sv', 'DESC');
        $resultSet['wpct']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'wpct', 'DESC');
        $resultSet['hld']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'hld', 'DESC');
        $resultSet['so']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'so', 'DESC');

        return $resultSet;
    }
    function get_orderby($table, $limit, $order_by, $asc_desc){
        $this->db->select('name, team, '.$order_by);
        $this->db->order_by('insert_dt', 'DESC');
        $this->db->order_by($order_by, $asc_desc);

        return $this->db->get($table, $limit)->result();
    }
    function sortingByTeam($table, $team){
        $this->db->order_by('rank');

        return $this->db->get_where($table, array('team'=>$team))->result();
    }
    function getScheduleAfter3Days(){
    	$today=date('m').'.'.date('d');
    	
    	$this->db->like('date', $today.'(', 'after');
    	$today_schedule=$this->db->get('kbo_result_2017')->row();
    	
    	$this->db->order_by('date', 'ASC');
    	$this->db->like('date', date('m').'.', 'after');
    	$month=$this->db->get('kbo_result_2017')->result();
    	
    	/* 3일 후의 경기 no추출 */
    	$key_num=0;
    	foreach($month as $key=>$item): if(strpos($item->date, $today)!==false): $key_num=$key; endif; endforeach;
    	$after3days=$month[$key_num+3]->no;
    	
    	$resultSet=array();
    	$this->db->select('no, date, time, home, away');
    	$this->db->where('no >=', $today_schedule->no);
    	$this->db->where('no <', $after3days);
    	$resultSet['schedule']=$this->db->get('kbo_result_2017')->result();
    	
    	$this->db->select('no, date');
    	$this->db->like('date', date('m').'.', 'after');
    	$this->db->where('no >=', $today_schedule->no);
    	$this->db->where('no <', $after3days);
    	$resultSet['date']=$this->db->get('kbo_result_2017')->result();
    	
    	return $resultSet;
    }
    
    /* 득, 실, 마진 */
    function getTotalScore(){
    	$team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
    	
    	$this->db->order_by('no', 'ASC');
    	$this->db->where('away_score!=', '');
    	$this->db->where('home_score!=', '');
    	$total=$this->db->get('kbo_result_2017')->result();
    	
    	$result=array();
    	foreach($team_array as $item):
    		foreach($total as $items):
    			if($item==strip_tags($items->home)):
		    		if(!isset($result[$item])): 
    					$result[$item]=strip_tags($items->home_score);
    					$result[$item.'_lose']=strip_tags($items->away_score);
		    		else: 
		    			$result[$item]+=strip_tags($items->home_score); 
		    			$result[$item.'_lose']+=strip_tags($items->away_score);
		    		endif;
    			endif;
    			if($item==strip_tags($items->away)):
	    			if(!isset($result[$item])): 
    					$result[$item]=strip_tags($items->away_score);
    					$result[$item.'_lose']=strip_tags($items->home_score);
	    			else: 
	    				$result[$item]+=strip_tags($items->away_score); 
	    				$result[$item.'_lose']+=strip_tags($items->home_score);
	    			endif;
	    		endif;
    		endforeach;
    	endforeach;
    	
    	return $result;
    }
    
    /* 리그 요약 - 통계 */
    function getLeagueStatistics(){
    	$this->db->where('away_score!=', '');
    	$this->db->where('home_score!=', '');
    	$total=$this->db->get('kbo_result_2017')->result();
    	$resultSet=array();
    	
    	/* 리그 승률통계 */
    	$home_win=0;
    	$away_win=0;
    	foreach($total as $entry):
    		$exp1=explode('"', $entry->away_score);
    		$exp2=explode('"', $entry->home_score);
    		if($exp1[1]=='win') $away_win+=1;
    		if($exp2[1]=='win') $home_win+=1;
    	endforeach;
    	$resultSet['away_win']=$away_win;
    	$resultSet['home_win']=$home_win;
    	
    	/* 리그 득점통계 */
    	$away_total_score=0;
    	$home_total_score=0;
    	foreach($total as $entry):
	    	$away_total_score+=strip_tags($entry->away_score);
	    	$home_total_score+=strip_tags($entry->home_score);
    	endforeach;
    	$resultSet['away_total_score']=$away_total_score;
    	$resultSet['home_total_score']=$home_total_score;
    	
    	/* 핸디캡 승률 통계 */
    	$handicap_home_win=0;
    	$handicap_away_win=0;
    	foreach($total as $entry):
    		if(strip_tags($entry->away_score) < strip_tags($entry->home_score)+1.5) $handicap_home_win+=1;
    		if(strip_tags($entry->away_score) > strip_tags($entry->home_score)+1.5) $handicap_away_win+=1;
    	endforeach;
    	$resultSet['handicap_home_win']=$handicap_home_win;
    	$resultSet['handicap_away_win']=$handicap_away_win;
    	
    	return $resultSet;
    }
}