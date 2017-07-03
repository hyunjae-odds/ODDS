<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/* INSERT */
	function insertUpdateBefore($table, $data, $where){
	    $beforeData=$this->db->get_where($table, $where)->row();

        $this->db->set('insert_dt', 'NOW()', false);
	    if(sizeof($beforeData)==0): $this->db->insert($table, $data);
	    else:
            $this->db->where('no', $beforeData->no);
            $this->db->update($table, $data);
        endif;
    }

	function insertDeleteBefore($table, $data){
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

            $this->db->update('KBO_result', $item);
        endforeach;
	}

	function insertWithRecentGame($data){
	    $this->db->order_by('date', 'DESC');
	    $this->db->distinct();
        $result_row=$this->db->get_where('KBO_result', array('away_score!='=>'', 'home_score!='=>''))->row();
        $month=substr($result_row->date,0,2);
        $day=substr($result_row->date,3,2);
        $date_=CURRENT_YEAR.'-'.$month.'-'.$day;

        $num_rows=$this->db->get_where('KBO_team_total', array('date'=>$date_))->num_rows();

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
            $this->db->set('date', $date_);
            if($num_rows>0):
                $this->db->where('date', $date_);
                $this->db->where('team', $entry->team);

                $this->db->update('KBO_team_total', $entry);
            elseif($num_rows==0):
                $this->db->insert('KBO_team_total', $entry);
            endif;
		endforeach;
	}

    function insertNoDelete($table, $data, $flag){
	    if($flag) $count=$this->db->get_where($table, array('insert_dt'=>date('Y-m-d')))->num_rows();
	    else $count=99;

        foreach($data as $entry):
            if($count==0):
                $this->db->set('insert_dt', 'NOW()', false);
                $this->db->insert($table, $entry);
            elseif($count==99):
                $count_99=$this->db->get_where($table, array('team'=>$entry['team'],'name'=>$entry['name'],'insert_dt'=>date('Y-m-d')))->num_rows();
                if($count_99==0):
                    $this->db->set('insert_dt', 'NOW()', false);
                    $this->db->insert($table, $entry);
                else:
                    $this->db->where('rank', 99);
                    $this->db->where('name', $entry['name']);
                    $this->db->where('team', $entry['team']);
                    $this->db->where('insert_dt', date('Y-m-d'));
                    $this->db->update($table, $entry);
                endif;
            else:
                $this->db->where('rank', $entry['rank']);
                $this->db->where('team', $entry['team']);
                $this->db->where('name', $entry['name']);
                $this->db->where('insert_dt', date('Y-m-d'));
                $this->db->update($table, $entry);
            endif;
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
        $this->db->insert('KBO_comment', $data);
    }

    function insertPlayerRecordByCrawling($table, $result_set){
        $this->db->set('insert_dt', 'NOW()', false);

        return $this->db->insert($table, $result_set);
    }

    function updatePlayerRecordByCrawling($table, $result_set){
        $this->db->set('insert_dt', 'NOW()', false);
        $this->db->where('player_id', $result_set['player_id']);
        $this->db->where('crawling_date', date('Y-m-d'));

        return $this->db->update($table, $result_set);
    }

	/* GET */
	function get($table){
		return $this->db->get($table)->result();
	}

	function get_where($table, $where){
	    return $this->db->get_where($table, $where)->result();
    }

	function get_order_by($table, $order_by, $asc_or_desc){
        $this->db->order_by($order_by, $asc_or_desc);

        return $this->db->get($table)->result();
    }

    function get_order_by_limit($table, $order_by, $asc_desc){
        $last_date=$this->getLastDay($table, 'crawling_date');

        $this->db->select('KBO_players.name, KBO_players.player_id, team,'.$order_by);
        $this->db->where('crawling_date', $last_date);
        if($order_by!='hld' && $order_by!='sv') $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        $this->db->order_by($order_by, $asc_desc);

        return $this->db->get($table, 5)->result();
    }

    function getRequired($bat_or_pit){
        $last_date=$this->getLastDay('KBO_team_total', 'date');
        $teams=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $result=array();

        foreach($teams as $item):
            $this->db->select('g');
            $g=$this->db->get_where('KBO_team_total', array('team'=>$item, 'date'=>$last_date))->row();
            $value=($bat_or_pit=='bat')? floor($g->g*3.1) : $g->g;

            $result[$item]=$value;
        endforeach;

        return $result;
    }

    function getLastDay($table, $field){
        $this->db->select($field);
        $this->db->order_by($field, 'DESC');
        $this->db->distinct();
        $last_date=$this->db->get($table)->row();

        return $last_date->$field;
    }

	function getByMonth($league, $this_month, $team){
        $table=($league=='KBO')? 'KBO_result' : 'MLB_result';
        $date=($league=='KBO')? $this_month: '2017-'.$this_month;
	    if($team=='all'):
            $this->db->like('date', $date, 'after');
            $this->db->order_by('date', 'ASC');
            $result=$this->db->get($table)->result();
        else:
            $result=$this->db->query('SELECT * FROM KBO_result WHERE (away="'.$team.'" OR home="'.$team.'") AND date LIKE "'.$date.'%" ORDER BY date ASC')->result();
        endif;

		return $result;
	}

//	팀별 최근 10경기 승패
    function getByScore(){
        $month=$this->get_result('KBO_result');

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

	function getByOverUnder($over_under_reference_value, $flag){
        $month=$this->get_result('KBO_result');

        $result_set=array();
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        foreach($team_array as $team):
            $result=array();
            $count=0;
            $over_count=0;
            $g=0;
            $over_count_all_game=0;
            $team_recent_ten_game='';
            foreach($month as $item):
                if($flag):
                    if($item->home==$team || $item->away==$team):
                        $g++;
                        if($item->home_score+$item->away_score > $over_under_reference_value): $over_count_all_game++; endif;
                    endif;
                else:
                    if(($item->home==$team || $item->away==$team) && $count<10):
                        if($item->home_score+$item->away_score > $over_under_reference_value): $team_recent_ten_game='o;'.$team_recent_ten_game; $over_count++; $count++;
                        else: $team_recent_ten_game='u;'.$team_recent_ten_game; $count++; endif;
                    endif;
                endif;
            endforeach;
//          마지막 콤마 제거
            $result['team']=$team;
            if($flag):
                $result['g']=$g;
                $result['over_under_all_game']=$over_count_all_game;
                $result['over_under_rate']=number_format($over_count_all_game/$g*100,1);
            else:
                $result['count']=$over_count;
                $result['over_under']=substr($team_recent_ten_game, 0, -1);
            endif;

            array_push($result_set, $result);
        endforeach;
        if($flag):
            foreach($result_set as $item) $sortAux[]=$item['over_under_rate'];
            array_multisort($sortAux, SORT_DESC, $result_set);
        else:
            foreach($result_set as $item) $sortAux[]=$item['count'];
            array_multisort($sortAux, SORT_DESC, $result_set);
        endif;

        return $result_set;
	}

	function getByTeam($team, $this_month){
		$this->db->select('rank, date, team, win_rate');
		$this->db->like('date', '2017-'.$this_month, 'after');
		$this->db->order_by('date', 'ASC');

		return $this->db->get_where('KBO_team_total', array('team'=>$team))->result();
	}

	function getBySort($table, $sort){
        $last_date=$this->getLastDay($table, 'crawling_date');

        $this->db->select($table.'.*, KBO_players.name');
        $this->db->where('crawling_date', $last_date);
        $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        if($table=='KBO_team_offense_2017' && $sort=='avg'): $this->db->order_by($sort, 'DESC');
        elseif($sort=='era' || $sort=='whip' || $sort=='avg'): $this->db->order_by($sort, 'ASC');
        else: $this->db->order_by($sort, 'DESC'); endif;
	    return $this->db->get($table)->result();
    }

	function getCountDistinctByMonth($this_month){
		$this->db->select('date');
		$this->db->like('date', '2017-'.$this_month, 'after');
		$this->db->distinct();

		return $this->db->get('KBO_team_total')->num_rows();
	}

	function get_schedule($select_month){
		$this->db->select('date');
		$this->db->like('date', '-'.$select_month.'-', 'both');
		$this->db->order_by('date', 'ASC');
		$this->db->distinct();

		return $this->db->get('KBO_team_total')->result();
	}

	function getNumRows($table, $schedule_no){
        if($table=='KBO_record_hitter'): $lastDate=$this->getLastDay($table, 'crawling_date'); $this->db->where('crawling_date', $lastDate); $this->db->where('req_yn', 'Y');
        else: $this->db->where('schedule_no', $schedule_no); endif;

	    return $this->db->get($table)->num_rows();
    }

    function get_num_rows_by_team($table, $team, $sort){
        $lastDate=$this->getLastDay($table, 'crawling_date');

        $this->db->where('crawling_date', $lastDate);
        $this->db->where('team', $team);
	    return $this->db->get($table)->num_rows();
    }

    function getPagination($table, $limit, $offset){
        $last_date=$this->getLastDay($table, 'crawling_date');

    	$this->db->select($table.'.*, KBO_players.name');
     	$this->db->where('crawling_date', $last_date);
        $this->db->where('req_yn', 'Y');
        $this->db->where('KBO_players.delete_yn', 'N');
     	$this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        if($table=='KBO_record_hitter') $this->db->order_by('avg', 'DESC'); else $this->db->order_by('era', 'ASC');

        return $this->db->get($table, $limit, $offset)->result();
    }

    function get_num_rows_by_sort($sort){
        $lastDate=$this->getLastDay('KBO_record_pitcher', 'crawling_date');
        if($sort =='era' || $sort =='avg' || $sort =='wpct' || $sort =='whip') $this->db->where('crawling_date', $lastDate); $this->db->where('req_yn', 'Y');

        return $this->db->get('KBO_record_pitcher')->num_rows();
    }

    function getBySortPagination($table, $sort, $limit, $offset){
        $last_date=$this->getLastDay($table, 'crawling_date');

        $this->db->select($table.'.*, KBO_players.name');
        $this->db->where('crawling_date', $last_date);
        $this->db->where('KBO_players.delete_yn', 'N');
        if($sort=='era' || $sort=='wpct' || $sort=='whip' || $sort=='avg') $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
    	if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');

        return $this->db->get($table, $limit, $offset)->result();
    }

    function getBatter5(){
        $resultSet=array();

        $resultSet['avg']=$this->get_order_by_limit('KBO_record_hitter','avg', 'DESC');
        $resultSet['hr']=$this->get_order_by_limit('KBO_record_hitter', 'hr', 'DESC');
        $resultSet['rbi']=$this->get_order_by_limit('KBO_record_hitter', 'rbi', 'DESC');
        $resultSet['h']=$this->get_order_by_limit('KBO_record_hitter', 'h', 'DESC');
        $resultSet['sb']=$this->get_order_by_limit('KBO_record_hitter', 'sb', 'DESC');
        $resultSet['ops']=$this->get_order_by_limit('KBO_record_hitter', 'ops', 'DESC');

        return $resultSet;
    }

    function getPitcher5(){
        $resultSet=array();

        $resultSet['era']=$this->get_order_by_limit('KBO_record_pitcher', 'era', 'ASC');
        $resultSet['w']=$this->get_order_by_limit('KBO_record_pitcher', 'w', 'DESC');
        $resultSet['sv']=$this->get_order_by_limit('KBO_record_pitcher', 'sv', 'DESC');
        $resultSet['wpct']=$this->get_order_by_limit('KBO_record_pitcher', 'wpct', 'DESC');
        $resultSet['hld']=$this->get_order_by_limit('KBO_record_pitcher', 'hld', 'DESC');
        $resultSet['so']=$this->get_order_by_limit('KBO_record_pitcher', 'so', 'DESC');

        return $resultSet;
    }

    function sortingByTeam($table, $team){
        $last_date=$this->getLastDay($table, 'crawling_date');

        $this->db->select($table.'.*, KBO_players.name');
        $this->db->where('crawling_date', $last_date);
        $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        $this->db->order_by('no');

        return $this->db->get_where($table, array('team'=>$team))->result();
    }

    function sort_by_team_order_by($table, $team, $sort, $per_page, $offset){
        $last_date=$this->getLastDay($table, 'crawling_date');

        $this->db->select($table.'.*, KBO_players.name');
        $this->db->where('crawling_date', $last_date);
        $this->db->where('KBO_players.delete_yn', 'N');
        $this->db->where('team', $team);
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');

        return $this->db->get($table, $per_page, $offset)->result();
    }

    function getScheduleAfter3Days($league){
    	$today=($league=='KBO')? date('m.d') : date('Y-m-d');
    	$date_form=($league=='KBO')? 'm.d' : 'Y-m-d';
    	$table=($league=='KBO')? 'KBO_result' : 'MLB_result';

        $this->db->select('date');
        $this->db->like('date', $today, 'after');
        $this->db->distinct();
        $count=$this->db->get($table)->result();

        $this->db->select('date');
        $this->db->like('date', $today, 'after');
        $this->db->or_like('date', date($date_form, strtotime("$today +1 day")), 'after');
        $this->db->or_like('date', date($date_form, strtotime("$today +2 day")), 'after');
        $this->db->distinct();
        $count_is_it_3=$this->db->get($table)->result();

        $resultSet=array();
        if($count!=null):
            $this->db->select('date');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +2 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date($date_form, strtotime("$today +3 day")), 'after');
            $this->db->distinct();
            $this->db->order_by('date', 'ASC');
            $resultSet['date']=$this->db->get($table)->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', $today, 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +2 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date($date_form, strtotime("$today +3 day")), 'after');
            if($league!='KBO') $this->db->order_by('time', 'ASC');
            $resultSet['schedule']=$this->db->get($table)->result();
        else:
            $resultSet=array();
            $this->db->select('date');
            $this->db->like('date', date($date_form, strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +3 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date($date_form, strtotime("$today +4 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get($table)->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', date($date_form, strtotime("$today +1 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +2 day")), 'after');
            $this->db->or_like('date', date($date_form, strtotime("$today +3 day")), 'after');
            if($count_is_it_3<3) $this->db->or_like('date', date($date_form, strtotime("$today +4 day")), 'after');
            if($league!='KBO') $this->db->order_by('time', 'ASC');
            $resultSet['schedule']=$this->db->get($table)->result();
        endif;

    	return $resultSet;
    }

    /* 득, 실, 마진 */
    function getTotalScore($league, $duration, $home_away){
        if($league=='KBO') $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        else if($league=='MLBAE') $team_array=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays');
        else if($league=='MLBAC') $team_array=array('Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox');
        else if($league=='MLBAW') $team_array=array('Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLBNE') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies');
        else if($league=='MLBNC') $team_array=array('Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds');
        else if($league=='MLBNW') $team_array=array('Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');

        $total=($league=='KBO')? $this->baseball_model->get_result('KBO_result') : $this->baseball_model->get_result('MLB_result');

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
    	$team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $total=$this->get_result('KBO_result');

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

    /* 리그 정보 - 리그 요약 */
    function getLeagueStatistics($league, $over_under_reference_value, $handicap){
        $total=($league=='KBO')? $this->baseball_model->get_result('KBO_result') : $this->baseball_model->get_result('MLB_result');
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
        $mlb_teams=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics','Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        if($league=='KBO') $teams=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        else if($league=='MLB_A') $teams=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLB_N') $teams=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        $away_win_handicap=0;
        $home_win_handicap=0;
        $over=0;
        $over_minus_one=0;
        $over_plus_one=0;
        foreach($teams as $key=>$team):
            foreach($total as $item):
                if($key==0):
                    if($item->away_score+$item->home_score > $over_under_reference_value) $over++;
                    if($item->away_score+$item->home_score > $over_under_reference_value-1) $over_minus_one++;
                    if($item->away_score+$item->home_score > $over_under_reference_value+1) $over_plus_one++;
                endif;
            endforeach;
        endforeach;

        if($league!='KBO'):
            foreach($mlb_teams as $key=>$team):
                foreach($total as $item):
                    if($item->away==$team): if($item->away_score-$handicap > $item->home_score): $away_win_handicap++; endif;
                    elseif($item->home==$team): if($item->home_score-$handicap > $item->away_score): $home_win_handicap++; endif; endif;
                endforeach;
            endforeach;
        endif;

        $resultSet['handicap_away_win']=$away_win_handicap;
        $resultSet['handicap_home_win']=$home_win_handicap;
        $resultSet['over']=$over;
        $resultSet['over_minus_one']=$over_minus_one;
        $resultSet['over_plus_one']=$over_plus_one;
        $resultSet['g']=count($total);

    	return $resultSet;
    }

    function getLeagueStatistics2($over_under_reference_value){
        $total=$this->get_result('KBO_result');
        $result=array();

        $g=0;
        $away_score=0;
        $home_score=0;
        $away_win=0;
        $home_win=0;
        $tie=0;
        $tie_game_count=0;
        $handicap_away_win=0;
        $handicap_home_win=0;
        $over=0;
        $over_plus1=0;
        $over_minus1=0;

        foreach($total as $item):
            $away_score+=$item->away_score;
            $home_score+=$item->home_score;
            if($item->away_score < $item->home_score): $home_win++;
            elseif($item->away_score > $item->home_score): $away_win++;
            else: $tie++; $tie_game_count++; endif;
            if($item->away_score < $item->home_score-1.5): $handicap_home_win++;
            elseif($item->away_score-1.5 > $item->home_score): $handicap_away_win++; endif;
            $g++;

//          O/U 통계
            if($item->away_score+$item->home_score > $over_under_reference_value) $over++;
            if($item->away_score+$item->home_score > $over_under_reference_value+1) $over_plus1++;
            if($item->away_score+$item->home_score > $over_under_reference_value-1) $over_minus1++;
        endforeach;

        $result['g']=$g;
        $result['away_score']=$away_score;
        $result['home_score']=$home_score;
        $result['away_win']=$away_win;
        $result['home_win']=$home_win;
        $result['tie']=$tie;
        $result['handicap_away_win']=$handicap_away_win;
        $result['handicap_home_win']=$handicap_home_win;
        $result['over']=$over;
        $result['over_plus1']=$over_plus1;
        $result['over_minus1']=$over_minus1;

        return $result;
    }

//  오버언더 기준값
    function get_over_under($league){
        $total=($league=='KBO')? $this->baseball_model->get_result('KBO_result') : $this->baseball_model->get_result('MLB_result');
        $values=0;
        foreach($total as $item) $values+=$item->away_score+$item->home_score;

        return floor(number_format($values/count($total),1)).'.5';
    }

    function get_recent_ten_game_over_under($team_name, $over_under_reference_value){
        $count=0;
        $game_count=0;
        $result=$this->get_result('KBO_result');

        foreach($result as $item):
            if($item->away==$team_name || $item->home==$team_name):
                if($game_count<10):
                    $game_count++;
                    if($item->away_score+$item->home_score > $over_under_reference_value):
                        $count++;
                    endif;
                endif;
            endif;
        endforeach;

        return $count;
    }

    function get_all_game_over_under($team, $over_under_reference_value, $handicap){
        $result=$this->get_result('KBO_result');
        $result_set=array('over'=>0, 'g'=>0, 'handicap_win'=>0, 'win_lose'=>array(), 'game_no'=>array(), 'over_under'=>array());
        $win_lose_cnt=0;
        $over_under_cnt=0;

        foreach($result as $item):
            if($item->away==$team || $item->home==$team):
                $result_set['g']++;
                if($item->away_score+$item->home_score > $over_under_reference_value) $result_set['over']++;

                if($item->away_score+$item->home_score > $over_under_reference_value && $over_under_cnt<10): array_push($result_set['over_under'], 'plus'); $over_under_cnt++;
                elseif($item->away_score+$item->home_score < $over_under_reference_value && $over_under_cnt<10): array_push($result_set['over_under'], 'minus'); $over_under_cnt++; endif;
            endif;

            if($item->away==$team):
                if($item->away_score > $item->home_score && $win_lose_cnt<10):
                    $win_lose_cnt++;
                    array_push($result_set['win_lose'], 'win');
                elseif($item->away_score < $item->home_score && $win_lose_cnt<10):
                    $win_lose_cnt++;
                    array_push($result_set['win_lose'], 'lose');
                endif;

                if($item->away_score-$handicap > $item->home_score): $result_set['handicap_win']++; endif;
            elseif($item->home==$team):
                if($item->home_score > $item->away_score && $win_lose_cnt<10):
                    $win_lose_cnt++;
                    array_push($result_set['win_lose'], 'win');
                elseif($item->home_score < $item->away_score && $win_lose_cnt<10):
                    $win_lose_cnt++;
                    array_push($result_set['win_lose'], 'lose');
                endif;

                if($item->home_score-$handicap > $item->away_score): $result_set['handicap_win']++; endif;
            endif;
        endforeach;

        return $result_set;
    }

    function get_result($table){
        $this->db->where('away_score!=', '');
        $this->db->where('home_score!=', '');
        if($table=='MLB_result') $this->db->where('date <=', date('Y-m-d'));
        $this->db->order_by('date', 'DESC');

        return $this->db->get($table)->result();
    }

    function get_total_game_num($flag){
        if($flag=='all'): return $this->db->get_where('KBO_result', array('away_score !='=>''))->num_rows();
        else:
            $this->db->where('away', $flag);
            $this->db->or_where('home', $flag);
            return $this->db->get('KBO_result')->num_rows();
        endif;
    }

    function get_result_one($schedule_no){
        return $this->db->get_where('KBO_result', array('no'=>$schedule_no))->row();
    }

    function getHomeAwayWinRank($handicap){
        $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $KBO_game_result=$this->get_result('KBO_result');

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
            foreach($KBO_game_result as $entry):
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

    function get_relative_match_result($away, $home, $over_under_reference_value){
        $total_game_count=0;
        $game_count=0;
        $away_win_count=0;
        $away_lose_count=0;
        $away_win_lose_arr=array();
        $home_win_lose_arr=array();
        $away_game_no_arr=array();
        $over_under=0;
        $over_under_arr=array();
        $result=$this->get_result('KBO_result');
        $data_set=array();
        $result_set=array();

        foreach($result as $item):
            if($game_count<10):
                if(($item->away==$away && $item->home==$home) || ($item->away==$home && $item->home==$away)):
                    $game_count++;
                    array_push($data_set, $item);
                endif;
            endif;

//          승률/오버언더/승패
            if($item->away==$away && $item->home==$home):
                $total_game_count++;
                if($item->away_score > $item->home_score):
                    $away_win_count++;
                    array_push($away_win_lose_arr,'win');
                    array_push($home_win_lose_arr,'lose');
                    array_push($away_game_no_arr, $item->no);
                elseif($item->away_score < $item->home_score):
                    $away_lose_count++;
                    array_push($away_win_lose_arr,'lose');
                    array_push($home_win_lose_arr,'win');
                    array_push($away_game_no_arr, $item->no);
                endif;

                if($item->away_score+$item->home_score > $over_under_reference_value):
                    $over_under++;
                    array_push($over_under_arr,'plus');
                else: array_push($over_under_arr,'minus'); endif;
            elseif($item->away==$home && $item->home==$away):
                $total_game_count++;
                if($item->away_score < $item->home_score):
                    $away_win_count++;
                    array_push($away_win_lose_arr,'win');
                    array_push($home_win_lose_arr,'lose');
                    array_push($away_game_no_arr, $item->no);
                elseif($item->away_score > $item->home_score):
                    $away_lose_count++;
                    array_push($away_win_lose_arr,'lose');
                    array_push($home_win_lose_arr,'win');
                    array_push($away_game_no_arr, $item->no);
                endif;

                if($item->away_score+$item->home_score > $over_under_reference_value):
                    $over_under++;
                    array_push($over_under_arr,'plus');
                else: array_push($over_under_arr,'minus'); endif;
            endif;
        endforeach;
        $result_set['data']=$data_set;
        $result_set['g']=$total_game_count;
        $result_set['away_win']=$away_win_count;
        $result_set['away_lose']=$away_lose_count;
        $result_set['away_win_rate']=number_format($away_win_count/$total_game_count*100);
        $result_set['away_win_lose_str']=array_reverse($away_win_lose_arr);
        $result_set['home_win_lose_str']=array_reverse($home_win_lose_arr);
        $result_set['away_game_no']=$away_game_no_arr;
        $result_set['ou_count']=$over_under;
        $result_set['ou_str']=array_reverse($over_under_arr);

        return $result_set;
    }

//  연승 확인
    function getRecentWinLose5($flag, $handicap){
        $result=array();
        $data=$this->get_result('KBO_result');
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
        $row=($flag=='home' || $flag=='away') ? $this->db->get_where('KBO_result', array('no'=>$no))->row() : $this->db->get_where('KBO_comment', array('no'=>$no))->row();

        $this->db->where('no', $no);
        if($flag=='home') $this->db->update('KBO_result', array('home_cheer'=>$row->home_cheer+1));
        else if($flag=='away') $this->db->update('KBO_result', array('away_cheer'=>$row->away_cheer+1));
        else if($flag=='good') $this->db->update('KBO_comment', array('good'=>$row->good+1));
        else if($flag=='bad') $this->db->update('KBO_comment', array('bad'=>$row->bad+1));
    }

    function getCheer($schedule_no, $limit, $offset){
        $this->db->order_by('insert_dt', 'DESC');

        return $this->db->get_where('KBO_comment', array('schedule_no'=>$schedule_no), $limit, $offset)->result();
    }

    function getRankByDateAndTeam($date, $team){
        $result=$this->db->get_where('KBO_team_total', array('date'=>$date, 'team'=>$team))->result();
        $rank=($result!=null) ? $result[0]->rank : $this->getRankByDateAndTeam(date('Y-m-d', strtotime("$date -1 day")), $team);

        return $rank;
    }

    function getTeamTotal(){
        $this->db->select('date');
        $this->db->order_by('date', 'DESC');
        $this->db->distinct();
        $result=$this->db->get_where('KBO_team_total')->row();

        return $this->db->get_where('KBO_team_total', array('date'=>$result->date))->result();
    }

    function get_team_introduce($team){
        return $this->db->get_where('KBO_team_introduce', array('team'=>$team))->row();
    }

    function get_record_by_team($team){
        $this->db->select('date');
        $this->db->order_by('date', 'DESC');
        $this->db->distinct();
        $lastDate=$this->db->get('KBO_team_total')->row();

        $this->db->select('h, hr');
        $another_teams_offense=$this->db->get_where('KBO_team_offense', array('team!='=>$team))->result();
        $this->db->select('so');
        $another_teams_defence=$this->db->get_where('KBO_team_defence', array('team!='=>$team))->result();

        $team_total=$this->db->get_where('KBO_team_total', array('team'=>$team, 'date'=>$lastDate->date))->row();
        $team_offense=$this->db->get_where('KBO_team_offense', array('team'=>$team))->row();
        $team_defence=$this->db->get_where('KBO_team_defence', array('team'=>$team))->row();

        $h_rank=1;
        $hr_rank=1;
        $so_rank=1;
        foreach($another_teams_offense as $item) if($item->h > $team_offense->h) $h_rank++;
        foreach($another_teams_offense as $item) if($item->hr > $team_offense->hr) $hr_rank++;
        foreach($another_teams_defence as $item) if($item->so > $team_defence->so) $so_rank++;

        $result=array('win_rate'=>number_format($team_total->win_rate,3),'win_rate_rank'=>$team_total->rank,'defence'=>$team_defence->era,'defence_rank'=>$team_defence->rank,'offense'=>number_format($team_offense->avg,3),'offense_rank'=>$team_offense->rank,
                      'h'=>$team_offense->h,'h_rank'=>$h_rank,'hr'=>$team_offense->hr,'hr_rank'=>$hr_rank,'so'=>$team_defence->so,'so_rank'=>$so_rank,'w'=>$team_total->win,'l'=>$team_total->lose,'tie'=>$team_total->tie);

        return $result;
    }

    function get_players(){
        $this->db->select('player_id');
        return $this->db->get_where('KBO_players', array('delete_yn'=>'N', 'year'=>date('Y')))->result();
    }

    function get_top_player_in_team($team, $pitcher_or_hitter, $sort){
        $last_date=$this->getLastDay('KBO_record_'.$pitcher_or_hitter, 'crawling_date');

        $asc_or_desc=($sort=='era')?'ASC' : 'DESC';
        $this->db->select($sort.', player_id');
        $this->db->order_by($sort, $asc_or_desc);
        if($sort=='avg' || $sort=='era' || $sort=='wpct') $this->db->where('req_yn', 'Y');
        $data=$this->db->get_where('KBO_record_'.$pitcher_or_hitter, array('crawling_date'=>$last_date))->result();

        $this->db->select('KBO_record_'.$pitcher_or_hitter.'.*, KBO_players.name');
        if($sort=='avg' || $sort=='era' || $sort=='wpct') $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id=KBO_record_'.$pitcher_or_hitter.'.player_id');
        $this->db->order_by($sort, $asc_or_desc);
        $result=$this->db->get_where('KBO_record_'.$pitcher_or_hitter, array('team'=>$team, 'crawling_date'=>$last_date, 'KBO_players.delete_yn'=>'N'))->row();

        $rank=1;
        $this_players_value=0;
        foreach($data as $item) if($item->player_id==$result->player_id) $this_players_value=$item->$sort;
        if($sort=='era'): foreach($data as $items) if($this_players_value > $items->$sort): $rank++; endif;
        else: foreach($data as $items) if($this_players_value < $items->$sort): $rank++; endif; endif;
        $result->rank=$rank;

        return $result;
    }

}