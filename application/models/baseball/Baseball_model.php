<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/* INSERT */
	function insert($table, $data){
		$num_rows=$this->db->get($table)->num_rows();
		if($num_rows>0): $this->db->empty_table($table); endif;

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->insert($table, $entry);
		endforeach;
	}

	function insertByMonth($result_arr){
        foreach($result_arr as $item):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->where('date', $item['date']);
            $this->db->where('home', $item['home']);
            $this->db->where('home_score', '');

            $this->db->update('kbo_result_2017', $item);
        endforeach;
	}

	function insertWithRecentGame($data){
	    $this->db->order_by('date', 'DESC');
	    $this->db->distinct();
        $result_row=$this->db->get_where('kbo_result_2017', array('away_score!='=>'', 'home_score!='=>''))->row();
        $month=substr($result_row->date,0,2);
        $day=substr($result_row->date,3,2);
        $date_=CURRENT_YEAR.'-'.$month.'-'.$day;

        $num_rows=$this->db->get_where('kbo_team_total_2017', array('date'=>$date_))->num_rows();

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
            $this->db->set('date', $date_);
            if($num_rows>0):
                $this->db->where('date', $date_);
                $this->db->where('team', $entry->team);

                $this->db->update('kbo_team_total_2017', $entry);
            elseif($num_rows==0):
                $this->db->insert('kbo_team_total_2017', $entry);
            endif;
		endforeach;
	}

    function insertNoDelete($table, $data){
        foreach($data as $key=>$entry):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->insert($table, $entry);
        endforeach;
    }

    function insert_result($table, $data){
        foreach($data as $item):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->where('date', $item['date']);
            $this->db->where('home', $item['home']);
            $this->db->where('home_score', '');

            $this->db->update($table, $item);
        endforeach;
    }

    function insert_comment($data){
        $this->db->set('insert_dt', 'NOW()', false);
        $this->db->insert('kbo_comment', $data);
    }

	/* GET */
	function get($table){
		return $this->db->get($table)->result();
	}

	function get_order_by($table, $order_by, $asc_or_desc){
        $this->db->order_by($order_by, $asc_or_desc);

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

	function getNumRows($table, $schedule_no){
        if($table=='kbo_batterbasic_2017'):
            $this->db->select('insert_dt');
            $this->db->order_by('insert_dt', 'DESC');
            $this->db->distinct();
            $lastDate=$this->db->get($table, 1)->row();

            $this->db->where('insert_dt', $lastDate->insert_dt);
        else: $this->db->where('schedule_no', $schedule_no); endif;

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
        $lastDate=$this->db->get($table)->row();

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

        $this->db->select('date');
        $this->db->like('date', $today, 'after');
        $this->db->or_like('date', date('m.d', strtotime("$today +1 day")), 'after');
        $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
        $this->db->distinct();
        $count_is_it_3=$this->db->get('kbo_result_2017')->result();

        $resultSet=array();
        if($count!=null):
            $this->db->select('date');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get('kbo_result_2017')->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            $resultSet['schedule']=$this->db->get('kbo_result_2017')->result();
        else:
            $resultSet=array();
            $this->db->select('date');
            $this->db->like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date('m.d', strtotime("$today +4 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get('kbo_result_2017')->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', date('m.d', strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date('m.d', strtotime("$today +3 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date('m.d', strtotime("$today +4 day")), 'after');
            $resultSet['schedule']=$this->db->get('kbo_result_2017')->result();
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
    function getTotalScore2($flag){
    	$team_array=KBO_TEAMS;
        $total=$this->get_result('all');

    	$result_set=array();
    	foreach($team_array as $item):
            $count=0;
            $result=array();
            $result['team']=$item;
            foreach($total as $items):
                if($item==$items->home):
                    if(!isset($result['get_score'])):
                        $result['get_score']=$items->home_score;
                        $result['lose_score']=$items->away_score;
                    else:
                        $result['get_score']+=$items->home_score;
                        $result['lose_score']+=$items->away_score;
                    endif;
                    $count++;
                elseif($item==$items->away):
                    if(!isset($result['get_score'])):
                        $result['get_score']=$items->away_score;
                        $result['lose_score']=$items->home_score;
                    else:
                        $result['get_score']+=$items->away_score;
                        $result['lose_score']+=$items->home_score;
                    endif;
                    $count++;
                endif;
            endforeach;
            $result['get_score_by_game']=number_format($result['get_score']/$count,2);
            $result['score_margin']=$result['get_score']-$result['lose_score'];
            $result['g']=$count;
            array_push($result_set, $result);
    	endforeach;

    	if($flag=='get_score'):
            foreach($result_set as $item) $sortAux[]=$item['get_score'];
            array_multisort($sortAux, SORT_DESC, $result_set);
        else:
            foreach($result_set as $item) $sortAux[]=$item['score_margin'];
            array_multisort($sortAux, SORT_DESC, $result_set);
        endif;
        array_splice($result_set,5);

        return $result_set;
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

    function get_where($table, $where){
        return $this->db->get_where($table, $where)->result();
    }

    function get_result_one($schedule_no){
        return $this->db->get_where('kbo_result_2017', array('no'=>$schedule_no))->row();
    }

    function getHomeAwayWinRank($handicap){
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $kbo_game_result=$this->get_result('all');

        $result_home=array();
        $result_away=array();
        foreach($team_array as $item):
            $home=array();
            $away=array();
            $home_win=0;
            $home_lose=0;
            $home_tie=0;
            $home_g=0;
            $away_win=0;
            $away_lose=0;
            $away_tie=0;
            $away_g=0;
            foreach($kbo_game_result as $entry):
                if($item==$entry->home):
                    if($entry->home_score-$handicap > $entry->away_score): $home_win++; endif;
                    if($entry->home_score-$handicap < $entry->away_score): $home_lose++; endif;
                    if($entry->home_score-$handicap == $entry->away_score): $home_tie++; endif;
                    $home_g++;
                elseif($item==$entry->away):
                    if($entry->home_score < $entry->away_score-$handicap): $away_win++; endif;
                    if($entry->home_score > $entry->away_score-$handicap): $away_lose++; endif;
                    if($entry->home_score == $entry->away_score-$handicap): $away_tie++; endif;
                    $away_g++;
                endif;
            endforeach;
            $home['win']=$home_win; $home['tie']=$home_tie; $home['lose']=$home_lose; $home['win_rate']=number_format($home_win/$home_g,3);
            $away['win']=$away_win; $away['tie']=$away_tie; $away['lose']=$away_lose; $away['win_rate']=number_format($away_win/$away_g,3);

            $result_home[$item]=$home;
            $result_away[$item]=$away;
        endforeach;

        foreach($result_home as $item) $sortAux[]=$item['win_rate'];
        array_multisort($sortAux, SORT_DESC, $result_home);
        foreach($result_away as $item) $sortAux2[]=$item['win_rate'];
        array_multisort($sortAux2, SORT_DESC, $result_away);
        array_splice($result_home,5);
        array_splice($result_away,5);

        $result_set=array('home_win_5'=>$result_home, 'away_win_5'=>$result_away);

        return $result_set;
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

    function add($no, $flag){
        $row=($flag=='home' || $flag=='away') ? $this->db->get_where('kbo_result_2017', array('no'=>$no))->row() : $this->db->get_where('kbo_comment', array('no'=>$no))->row();

        $this->db->where('no', $no);
        if($flag=='home') $this->db->update('kbo_result_2017', array('home_cheer'=>$row->home_cheer+1));
        else if($flag=='away') $this->db->update('kbo_result_2017', array('away_cheer'=>$row->away_cheer+1));
        else if($flag=='good') $this->db->update('kbo_comment', array('good'=>$row->good+1));
        else if($flag=='bad') $this->db->update('kbo_comment', array('bad'=>$row->bad+1));
    }

    function getCheer($schedule_no, $limit, $offset){
        $this->db->order_by('insert_dt', 'DESC');

        return $this->db->get_where('kbo_comment', array('schedule_no'=>$schedule_no), $limit, $offset)->result();
    }

    function getRankByDateAndTeam($date, $team){
        $result=$this->db->get_where('kbo_team_total_2017', array('date'=>$date, 'team'=>$team))->result();
        $rank=($result!=null) ? $result[0]->rank : $this->getRankByDateAndTeam(date('Y-m-d', strtotime("$date -1 day")), $team);

        return $rank;
    }

    function getTeamTotal(){
        $this->db->select('date');
        $this->db->order_by('date', 'DESC');
        $this->db->distinct();
        $result=$this->db->get_where('kbo_team_total_2017')->row();

        return $this->db->get_where('kbo_team_total_2017', array('date'=>$result->date))->result();
    }
}