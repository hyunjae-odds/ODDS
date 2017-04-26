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
					$this->db->set('recent_game', $recent_game[$entries]);
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
//	팀별 최근 10경기 승패
    function getByScore(){
        $this->db->where('away_score!=', '');
        $this->db->where('home_score!=', '');
        $this->db->order_by('no', 'DESC');
        $month=$this->db->get('kbo_result_2017')->result();

        $result=array();
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        foreach($team_array as $team):
            $count=0;
            $team_recent_ten_game='';
            foreach($month as $item):
                if(strip_tags($item->home)==$team && $count<10):
                    if(strip_tags($item->home_score) > strip_tags($item->away_score)): $team_recent_ten_game='승;'.$team_recent_ten_game; $count++;
                    elseif(strip_tags($item->home_score) < strip_tags($item->away_score)): $team_recent_ten_game='패;'.$team_recent_ten_game; $count++;
                    else: $team_recent_ten_game='무;'.$team_recent_ten_game; $count++;
                    endif;
                elseif(strip_tags($item->away)==$team && $count<10):
                    if(strip_tags($item->home_score) < strip_tags($item->away_score)): $team_recent_ten_game='승;'.$team_recent_ten_game; $count++;
                    elseif(strip_tags($item->home_score) > strip_tags($item->away_score)): $team_recent_ten_game='패;'.$team_recent_ten_game; $count++;
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
    	$today=date('m').'.'.date('d');

    	$this->db->like('date', $today.'(', 'after');
    	$today_schedule=$this->db->get('kbo_result_2017')->row();
    	if(!isset($today_schedule->no)):
            $today=date('m').'.'.(date('d')+1);
            $this->db->like('date', $today.'(', 'after');
            $today_schedule=$this->db->get('kbo_result_2017')->row();
        endif;
    	
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
    function getTotalScore($duration){
    	$team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $total=$this->get_result();

    	$result=array();
    	foreach($team_array as $item):
            if($duration=='all') $duration=count($total);
            $count=0;
            foreach($total as $items):
                if($item==strip_tags($items->home) && $count<$duration):
                    if(!isset($result[$item])):
                        $result[$item]=strip_tags($items->home_score);
                        $result[$item.'_lose']=strip_tags($items->away_score);
                    else:
                        $result[$item]+=strip_tags($items->home_score);
                        $result[$item.'_lose']+=strip_tags($items->away_score);
                    endif;
                    $count++;
                endif;
                if($item==strip_tags($items->away) && $count<$duration):
                    if(!isset($result[$item])):
                        $result[$item]=strip_tags($items->away_score);
                        $result[$item.'_lose']=strip_tags($items->home_score);
                    else:
                        $result[$item]+=strip_tags($items->away_score);
                        $result[$item.'_lose']+=strip_tags($items->home_score);
                    endif;
                    $count++;
                endif;
            endforeach;
    	endforeach;

    	return $result;
    }
    
    /* 리그 요약 - 통계 */
    function getLeagueStatistics(){
        $total=$this->get_result();
    	$resultSet=array();
    	
    	/* 리그 승률통계 */
    	$home_win=0;
    	$away_win=0;
    	$draw=0;
    	foreach($total as $entry):
    		$exp1=explode('"', $entry->away_score);
    		$exp2=explode('"', $entry->home_score);
    		if($exp1[1]=='win') $away_win++;
    		if($exp2[1]=='win') $home_win++;
    		else if($exp1[1]=='same') $draw++;
    	endforeach;
    	$resultSet['away_win']=$away_win;
    	$resultSet['home_win']=$home_win;
    	$resultSet['draw']=$draw;

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

    function get_result(){
        $this->db->where('away_score!=', '');
        $this->db->where('home_score!=', '');
        $this->db->order_by('no', 'DESC');

        return $this->db->get('kbo_result_2017')->result();
    }

    function getHomeAwayWinRank(){
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $kbo_game_result=$this->get_result();
        $kbo_team_total=$this->getLimit('kbo_team_total_2017');

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
                if($item==strip_tags($entry->home)):
                    $exp2=explode('"', $entry->home_score);
                    if($exp2[1]=='win'): $home_win++; endif;
                    if($exp2[1]=='lose'): $home_lose++; endif;
                    if($exp2[1]=='same'): $home_draw++; endif;
                elseif($item==strip_tags($entry->away)):
                    $exp1=explode('"', $entry->away_score);
                    if($exp1[1]=='win'): $away_win++; endif;
                    if($exp1[1]=='lose'): $away_lose++; endif;
                    if($exp1[1]=='same'): $away_draw++; endif;
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
    function getRecentWinLose5($flag){
        $result=array();
        $total=$this->getLimit('kbo_team_total_2017');
        foreach($total as $key=>$item):
            $team=array();
            $win_count=0;
            $lose_count=0;
            $recent_game=$item->recent_game;
            $exp1=explode(';', $recent_game);
            $recent=($exp1[9]!='패')? $exp1[9] : '';
            $recent_lose=($exp1[9]!='승')? $exp1[9] : '';
            for($i=1; $i<10; $i++):
                if($exp1[9]!='패'):
                    $win_count++;
                    if($exp1[9-$i]=='패') break;
                    $recent=$exp1[9-$i].';'.$recent;
                endif;
                if($exp1[9]!='승'):
                    $lose_count++;
                    if($exp1[9-$i]=='승') break;
                    $recent_lose=$exp1[9-$i].';'.$recent_lose;
                endif;
            endfor;

            $team['team']=$item->team;
            $team['recent']=$recent;
            $team['recent_lose']=$recent_lose;
            $team['win']=$win_count;
            $team['lose']=$lose_count;
            array_push($result, $team);
        endforeach;

        if($flag=='win'):
            foreach($result as $item) $sortAux[]=$item['win'];
            array_multisort($sortAux, SORT_DESC, $result);
            array_splice($result,5);

            return $result;
        else:
            foreach($result as $item) $sortAux[]=$item['lose'];
            array_multisort($sortAux, SORT_DESC, $result);
            array_splice($result,5);

            return $result;
        endif;
    }

    function getTotalHomeAway(){
        $total=$this->get_result();

    }
}