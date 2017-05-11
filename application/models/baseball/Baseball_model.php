<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/* INSERT */
	function insert($table, $data){
		$num_rows=$this->db->get($table)->num_rows();
		if($num_rows>0): $this->db->empty_table($table); endif;

		foreach($data as $entry):
            echo $table;
            var_dump($data);
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->insert($table, $entry);
		endforeach;
	}

	function insertByMonth($result_arr){
        $this->db->empty_table('kbo_result_2017');

        foreach($result_arr as $item):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert('kbo_result_2017', $item);
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
					$this->db->set('recent_game', $recent_game[$entries]);
				endif;
			endforeach;

			$this->db->insert($table, $entry);
		endforeach;
	}

    function insertNoDelete($table, $data){
        foreach($data as $key=>$entry):
            var_dump($entry);
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert($table, $entry);
        endforeach;
    }

    function insert_result($table, $data){
        foreach($data as $datum):
            $pastGame=$this->db->get_where($table, array('date'=>$datum['date'],'home'=>$datum['home'],'away'=>$datum['away']))->row();
            $this->db->delete($table, array('no'=>$pastGame->no));

            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert($table, $datum);
        endforeach;
    }

	/* GET */
	function get($table){
		return $this->db->get($table)->result();
	}

	function getByMonth($this_month){
		$this->db->like('date', $this_month, 'after');
		$this->db->order_by('date', 'ASC');
		$result=$this->db->get('kbo_result_2017')->result();

		return $result;
	}

//	팀별 최근 10경기 승패
    function getByScore(){
        $month=$this->get_result('all');

        $result=array();
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        foreach($team_array as $team):
            $count=0;
            $team_recent_ten_game='';
            foreach($month as $item):
                if($item->home==$team && $count<10):
                    if($item->home_score > $item->away_score): $team_recent_ten_game='승;'.$team_recent_ten_game; $count++;
                    elseif($item->home_score < $item->away_score): $team_recent_ten_game='패;'.$team_recent_ten_game; $count++;
                    else: $team_recent_ten_game='무;'.$team_recent_ten_game; $count++;
                    endif;
                elseif($item->away==$team && $count<10):
                    if($item->home_score < $item->away): $team_recent_ten_game='승;'.$team_recent_ten_game; $count++;
                    elseif($item->home_score > $item->away): $team_recent_ten_game='패;'.$team_recent_ten_game; $count++;
                    else: $team_recent_ten_game='무;'.$team_recent_ten_game; $count++;
                    endif;
                endif;
            endforeach;
//          마지막 콤마 제거
            $result[$team]=substr($team_recent_ten_game, 0, -1);
        endforeach;

        return $result;
	}

	function getByTeam($team, $this_month){
		$this->db->select('rank, date, team');
		$this->db->like('date', '2017-'.$this_month, 'after');
		$this->db->order_by('date', 'ASC');

		return $this->db->get_where('kbo_team_total_2017', array('team'=>$team))->result();
	}

	function getBySort($table, $sort){
        $this->db->select('insert_dt');
    	$this->db->order_by('insert_dt', 'DESC');
    	$this->db->distinct();
    	$lastDate=$this->db->get($table, 1)->row();

     	$this->db->where('insert_dt', $lastDate->insert_dt);
        if($sort=='era') $this->db->order_by($sort, 'ASC');
        else if($sort=='whip') $this->db->order_by($sort, 'ASC');
        else if($sort=='avg') $this->db->order_by($sort, 'ASC');
        else $this->db->order_by($sort, 'DESC');
	    return $this->db->get($table)->result();
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

    	$this->db->order_by('rank', 'ASC');
     	$this->db->where('insert_dt', $lastDate->insert_dt);
        return $this->db->get($table, $limit, $offset)->result();
    }

    function getBySortPagination($table, $sort, $limit, $offset){
    	$this->db->select('insert_dt');
    	$this->db->order_by('insert_dt', 'DESC');
    	$this->db->distinct();
    	$lastDate=$this->db->get($table, 1)->row();

    	$this->db->order_by($sort, 'DESC');
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

        return $this->set_player_id($resultSet, array('avg', 'hr', 'rbi', 'h', 'ops'));
    }

    function getPitcher5(){
        $resultSet=array();

        $resultSet['era']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'era', 'ASC');
        $resultSet['w']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'w', 'DESC');
        $resultSet['sv']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'sv', 'DESC');
        $resultSet['wpct']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'wpct', 'DESC');
        $resultSet['hld']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'hld', 'DESC');
        $resultSet['so']=$this->get_orderby('kbo_pitcherbasic_2017', 5, 'so', 'DESC');

        return $this->set_player_id($resultSet, array('era', 'w', 'sv', 'wpct', 'hld', 'so'));
    }

    function getRunner5($table){
        $this->db->where('insert_dt', $this->getLastDay($table));
        $this->db->order_by('rank', 'ASC');

        $resultSet=$this->db->get($table, 5)->result();

        foreach($resultSet as $item):
            $this->db->select('player_id');
            $value=$this->db->get_where('kbo_players_2017', array('name'=>$item->name))->row();
            $item->player_id=$value->player_id;
        endforeach;

        return $resultSet;
    }

//  사진 출력을 위한 player_id 추가
    function set_player_id($resultSet, $str_array){
        foreach($str_array as $entry):
            foreach($resultSet[$entry] as $item):
                $this->db->select('player_id');
                $value=$this->db->get_where('kbo_players_2017', array('name'=>$item->name))->row();
                $item->player_id=$value->player_id;
            endforeach;
        endforeach;

        return $resultSet;
    }

    function get_orderby($table, $limit, $order_by, $asc_desc){
        $this->db->select('name, team, '.$order_by);
        $this->db->where('insert_dt', $this->getLastDay($table));
        $this->db->order_by($order_by, $asc_desc);

        return $this->db->get($table, $limit)->result();
    }

    function getLastDay($table){
        $this->db->select('insert_dt');
        $this->db->order_by('insert_dt', 'DESC');
        $this->db->distinct();
        $lastDate=$this->db->get($table, 1)->row();

        return $lastDate->insert_dt;
    }

    function sortingByTeam($table, $team){
        $this->db->select('insert_dt');
        $this->db->order_by('insert_dt', 'DESC');
        $this->db->distinct();
        $lastDate=$this->db->get($table, 1)->row();

        $this->db->order_by('rank');
        $this->db->where('insert_dt', $lastDate->insert_dt);

        return $this->db->get_where($table, array('team'=>$team))->result();
    }

    function getScheduleAfter3Days(){
    	$today=date('m.d');

    	$this->db->select('date');
        $this->db->like('date', $today, 'after');
        $this->db->distinct();
        $count=$this->db->get('kbo_result_2017')->result();

        if($count!=null):
            $resultSet=array();
            $this->db->select('no, date, time, home, away');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $resultSet['schedule']=$this->db->get('kbo_result_2017')->result();

            $this->db->select('date');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get('kbo_result_2017')->result();
        else:
            $resultSet=array();
            $this->db->select('no, date, time, home, away');
            $this->db->like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            $resultSet['schedule']=$this->db->get('kbo_result_2017')->result();

            $this->db->select('date');
            $this->db->like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get('kbo_result_2017')->result();
        endif;

    	return $resultSet;
    }
    
    /* 득, 실, 마진 */
    function getTotalScore($inning, $duration, $home_away){
    	$team_array=KBO_TEAMS;
        $total=$this->get_result($inning);

    	$result=array();
    	foreach($team_array as $item):
            if($duration=='all') $duration=count($total);
            $count=0;

            foreach($total as $items):
                if($home_away=='all' || $home_away=='home'):
                    if($item==$items->home && $count<$duration):
                        if(!isset($result[$item])):
                            $result[$item]=$items->home_score;
                            $result[$item.'_lose']=$items->away_score;
                        else:
                            $result[$item]+=$items->home_score;
                            $result[$item.'_lose']+=$items->away_score;
                        endif;
                        $count++;
                    endif;
                endif;
                if($home_away=='all' || $home_away=='away'):
                    if($item==$items->away && $count<$duration):
                        if(!isset($result[$item])):
                            $result[$item]=$items->away_score;
                            $result[$item.'_lose']=$items->home_score;
                        else:
                            $result[$item]+=$items->away_score;
                            $result[$item.'_lose']+=$items->home_score;
                        endif;
                        $count++;
                    endif;
                endif;
            endforeach;
    	endforeach;

    	return $result;
    }
    
    /* 리그 요약 - 통계 */
    function getLeagueStatistics(){
        $total=$this->get_result('all');
    	$resultSet=array();

    	/* 리그 승률통계 */
    	$home_win=0;
    	$away_win=0;
    	$draw=0;
    	foreach($total as $entry):
    		if($entry->home_score < $entry->away_score) $away_win++;
    		else if($entry->home_score > $entry->away_score) $home_win++;
    		else if($entry->home_score == $entry->away_score) $draw++;
    	endforeach;
    	$resultSet['away_win']=$away_win;
    	$resultSet['home_win']=$home_win;
    	$resultSet['draw']=$draw;

    	/* 리그 득점통계 */
    	$away_total_score=0;
    	$home_total_score=0;
    	foreach($total as $entry):
	    	$away_total_score+=$entry->away_score;
	    	$home_total_score+=$entry->home_score;
    	endforeach;
    	$resultSet['away_total_score']=$away_total_score;
    	$resultSet['home_total_score']=$home_total_score;
    	
    	/* 핸디캡 승률 통계 */
    	$handicap_home_win=0;
    	$handicap_away_win=0;
    	foreach($total as $entry):
    		if($entry->away_score < $entry->home_score+1.5) $handicap_home_win++;
    		if($entry->away_score > $entry->home_score+1.5) $handicap_away_win++;
    	endforeach;
    	$resultSet['handicap_home_win']=$handicap_home_win;
    	$resultSet['handicap_away_win']=$handicap_away_win;
    	
    	return $resultSet;
    }

    function get_result($inning){
        $this->db->where('away_score!=', '');
        $this->db->where('home_score!=', '');
        $this->db->order_by('date', 'DESC');

        $table='kbo_result_2017';
        if($inning=='half') $table='kbo_result_half_2017';
        elseif($inning=='first') $table='kbo_result_first_2017';

        return $this->db->get($table)->result();
    }

    function getHomeAwayWinRank($handicap){
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $kbo_game_result=$this->get_result('all');

        $this->db->order_by('date', 'DESC');
        $this->db->order_by('win_rate', 'DESC');
        $this->db->order_by('rank', 'ASC');
        $kbo_team_total=$this->db->get('kbo_team_total_2017', 10)->result();

        $result=array();
        foreach($team_array as $item):
            $team=array();
            $home_win=0;
            $home_lose=0;
            $home_draw=0;
            $away_win=0;
            $away_lose=0;
            $away_draw=0;
            foreach($kbo_game_result as $entry):
                if($item==$entry->home):
                    if($entry->home_score-$handicap > $entry->away_score): $home_win++; endif;
                    if($entry->home_score-$handicap < $entry->away_score): $home_lose++; endif;
                    if($entry->home_score-$handicap == $entry->away_score): $home_draw++; endif;
                elseif($item==$entry->away):
                    if($entry->home_score < $entry->away_score-$handicap): $away_win++; endif;
                    if($entry->home_score > $entry->away_score-$handicap): $away_lose++; endif;
                    if($entry->home_score == $entry->away_score-$handicap): $away_draw++; endif;
                endif;
            endforeach;
            $team['home']=$home_win.'승 '.$home_draw.'무 '.$home_lose.'패';
            $team['away']=$away_win.'승 '.$away_draw.'무 '.$away_lose.'패';
            foreach($kbo_team_total as $items): if($items->team==$item): $team['win_rate']=$items->win_rate; endif;endforeach;

            $result[$item]=$team;
        endforeach;

        return array_splice($result,5);
    }

//  연승 확인
    function getRecentWinLose5($flag, $handicap){
        $result=array();
        $data=$this->get_result('all');
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        foreach($team_array as $key=>$item):
            $count=0;
            $win_count=0;
            $lose_count=0;
            $recent_game='';
            $team=array();
            foreach($data as $items):
                if($flag=='win'):
                    if($item==$items->home && $count<10):
                        if($items->home_score-$handicap > $items->away_score):
                            $count++;
                            $win_count++;
                            $recent_game='승;'.$recent_game;
                        elseif($items->home_score-$handicap==$items->away_score):
                            $count++;
                            $recent_game='무;'.$recent_game;
                        else: break;
                        endif;
                    elseif($item==$items->away && $count<10):
                        if($items->away_score-$handicap > $items->home_score):
                            $count++;
                            $win_count++;
                            $recent_game='승;'.$recent_game;
                        elseif($items->home_score==$items->away_score-$handicap):
                            $count++;
                            $recent_game='무;'.$recent_game;
                        else: break;
                        endif;
                    endif;
                elseif($flag=='lose'):
                    if($item==$items->home && $count<10):
                        if($items->home_score-$handicap < $items->away_score):
                            $count++;
                            $lose_count++;
                            $recent_game='패;'.$recent_game;
                        elseif($items->home_score-$handicap==$items->away_score):
                            $count++;
                            $recent_game='무;'.$recent_game;
                        else: break;
                        endif;
                    elseif($item==$items->away && $count<10):
                        if($items->away_score-$handicap < $items->home_score):
                            $count++;
                            $lose_count++;
                            $recent_game='패;'.$recent_game;
                        elseif($items->home_score==$items->away_score-$handicap):
                            $count++;
                            $recent_game='무;'.$recent_game;
                        else: break;
                        endif;
                    endif;
                endif;
            endforeach;
            $team['team']=$item;
            $team[$flag]=($flag=='win') ? $win_count : $lose_count;
            $team['recent']=($recent_game!=null) ? substr($recent_game, 0, -1) : $recent_game;
            $result[$key]=$team;
        endforeach;

//      순위정렬
        foreach($result as $item) $sortAux[]=$item[$flag];
        array_multisort($sortAux, SORT_DESC, $result);
        array_splice($result,5);

        foreach($result as $item) $sortAux2[]=$item[$flag];
        array_multisort($sortAux2, SORT_DESC, $result);
        array_splice($result,5);

        return $result;
    }
}