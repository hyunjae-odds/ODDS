<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	/* INSERT */
    function insert($data){
        $this->db->set('insert_dt', 'NOW()', false);
        $this->db->insert('KBO_comment', $data);
    }

	function insert_update_before($table, $data, $where){
	    $beforeData=$this->db->get_where($table, $where)->row();

        $this->db->set('insert_dt', 'NOW()', false);
	    if(sizeof($beforeData)==0): $this->db->insert($table, $data);
	    else:
            $this->db->where('no', $beforeData->no);
            $this->db->update($table, $data);
        endif;
    }

	function insert_delete_before($table, $data){
		$num_rows=$this->db->get($table)->num_rows();
		if($num_rows>0): $this->db->empty_table($table); endif;

		foreach($data as $entry):
			$this->db->set('insert_dt', 'NOW()', false);
			$this->db->insert($table, $entry);
		endforeach;
	}

	function insert_by_month($result_arr){
        foreach($result_arr as $item):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->where('date', $item['date']);
            $this->db->where('home', $item['home']);
            $this->db->where('home_score', '');

            $this->db->update('KBO_result', $item);
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

    function insert_player_record_by_crawling($table, $result_set){
        $this->db->set('insert_dt', 'NOW()', false);

        return $this->db->insert($table, $result_set);
    }

    function update_player_record_by_crawling($table, $result_set){
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

    function get_where_row($table, $where){
        return $this->db->get_where($table, $where)->row();
    }

    function get_limit($table, $limit, $offset){
        return $this->db->get($table, $limit, $offset)->result();
    }

    function get_order_by_limit($league, $table, $order_by, $asc_desc){
        $last_date=$this->get_last_day($table, 'crawling_date');

        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $this->db->select('KBO_players.name, KBO_players.player_id, team,'.$order_by);
            $this->db->where('crawling_date', $last_date);
            if($order_by!='hld' && $order_by!='sv') $this->db->where('req_yn', 'Y');
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            $this->db->order_by($order_by, $asc_desc);
        else:
            $this->db->select('MLB_players.name, MLB_players.player_id, '.$table.'.team,'.$order_by);
            $this->db->where('crawling_date', $last_date);
            if($league=='MLB_A') $this->db->where('lg', 'AL'); else $this->db->where('lg', 'NL');
            if($order_by!='hld' && $order_by!='sv') $this->db->where('req_yn', 'Y');
            $this->db->join('MLB_players', 'MLB_players.player_id='.$table.'.player_id');
            $this->db->order_by($order_by, $asc_desc);
        endif;
        echo $table;

        return $this->db->get($table, 5)->result();
    }

    function get_required($bat_or_pit){
        $last_date=$this->get_last_day('KBO_team_total', 'date');
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

    function get_last_day($table, $field){
        $this->db->select($field);
        $this->db->order_by($field, 'DESC');
        $this->db->distinct();
        $last_date=$this->db->get($table)->row();

        return $last_date->$field;
    }

	function get_by_month($league, $this_month, $team){
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

    function get_by_week($team, $month){
        $result_arr=array();
        $arr=$this->get_weeks_of_month($month);

	    if($team=='all'):
            foreach($arr as $item):
                if($item!=null):
                    $max=sizeof($item)-1;
                    $result=$this->db->query('SELECT * FROM KBO_result WHERE date>="2017-'.$month.'-'.$item[0].'" AND date<="2017-'.$month.'-'.$item[$max].'" AND away_score!="" AND home_score!=""')->result();
                    if($result!=null) array_push($result_arr, $result);
                endif;
            endforeach;
        else:
            foreach($arr as $item):
                if($item!=null):
                    $max=sizeof($item)-1;
                    $result=$this->db->query('SELECT * FROM KBO_result WHERE date>="2017-'.$month.'-'.$item[0].'" AND date<="2017-'.$month.'-'.$item[$max].'" AND (away="'.$team.'" OR home="'.$team.'") AND away_score!="" AND home_score!=""')->result();
                    if($result!=null) array_push($result_arr, $result);
                endif;
            endforeach;
        endif;

        return $result_arr;
    }

//	팀별 최근 10경기 승패
	function get_num_rows($league, $table, $schedule_no){
        if($table=='KBO_record_hitter'):
            $lastDate=$this->get_last_day($table, 'crawling_date');
            $this->db->where('crawling_date', $lastDate);
            $this->db->where('req_yn', 'Y');
        elseif($table='MLB_record_hitter'):
            if($league=='MLB_A') $this->db->where('lg', 'AL'); else $this->db->where('lg', 'NL');
            $this->db->where('req_yn', 'Y');
            $this->db->where('year', '2017');
        else: $this->db->where('schedule_no', $schedule_no); endif;

	    return $this->db->get($table)->num_rows();
    }

    function get_num_rows_by_team($table, $team){
        $lastDate=$this->get_last_day($table, 'crawling_date');

        $this->db->where('crawling_date', $lastDate);
        $this->db->where('team', $team);
	    return $this->db->get($table)->num_rows();
    }

    function get_pagination($table, $limit, $offset){
        $last_date=$this->get_last_day($table, 'crawling_date');

    	$this->db->select($table.'.*, KBO_players.name');
     	$this->db->where('crawling_date', $last_date);
        $this->db->where('req_yn', 'Y');
        $this->db->where('KBO_players.delete_yn', 'N');
     	$this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        if($table=='KBO_record_hitter') $this->db->order_by('avg', 'DESC'); else $this->db->order_by('era', 'ASC');

        return $this->db->get($table, $limit, $offset)->result();
    }

    function get_num_rows_by_sort($table, $sort){
        $lastDate=$this->get_last_day($table, 'crawling_date');
        if($sort =='era' || $sort =='avg' || $sort =='wpct' || $sort =='whip') $this->db->where('crawling_date', $lastDate); $this->db->where('req_yn', 'Y');

        return $this->db->get($table)->num_rows();
    }

    function get_by_sort_pagination($table, $sort, $limit, $offset){
        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $last_date=$this->get_last_day($table, 'crawling_date');

            $this->db->select($table.'.*, KBO_players.name');
            $this->db->where('crawling_date', $last_date);
            $this->db->where('KBO_players.delete_yn', 'N');
            if($sort=='era' || $sort=='wpct' || $sort=='whip' || $sort=='avg') $this->db->where('req_yn', 'Y');
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        elseif($table=='MLB_record_hitter' || $table=='MLB_record_pitcher'):
            $this->db->select($table.'.*, MLB_players.name');
            $this->db->where($table.'.year', '2017');
            $this->db->where('req_yn', 'Y');
            $this->db->join('MLB_players', 'MLB_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        endif;

        return $this->db->get($table, $limit, $offset)->result();
    }

    function get_batter5($league){
        $resultSet=array();
        if($league=='KBO'):
            $resultSet['avg']=$this->get_order_by_limit($league, 'KBO_record_hitter','avg', 'DESC');
            $resultSet['hr']=$this->get_order_by_limit($league, 'KBO_record_hitter', 'hr', 'DESC');
            $resultSet['rbi']=$this->get_order_by_limit($league, 'KBO_record_hitter', 'rbi', 'DESC');
            $resultSet['h']=$this->get_order_by_limit($league, 'KBO_record_hitter', 'h', 'DESC');
            $resultSet['sb']=$this->get_order_by_limit($league, 'KBO_record_hitter', 'sb', 'DESC');
            $resultSet['ops']=$this->get_order_by_limit($league, 'KBO_record_hitter', 'ops', 'DESC');
        else:
            $resultSet['avg']=$this->get_order_by_limit($league, 'MLB_record_hitter','avg', 'DESC');
            $resultSet['hr']=$this->get_order_by_limit($league, 'MLB_record_hitter', 'hr', 'DESC');
            $resultSet['rbi']=$this->get_order_by_limit($league, 'MLB_record_hitter', 'rbi', 'DESC');
            $resultSet['h']=$this->get_order_by_limit($league, 'MLB_record_hitter', 'h', 'DESC');
            $resultSet['sb']=$this->get_order_by_limit($league, 'MLB_record_hitter', 'sb', 'DESC');
            $resultSet['ops']=$this->get_order_by_limit($league, 'MLB_record_hitter', 'ops', 'DESC');
        endif;

        return $resultSet;
    }

    function get_pitcher5($league){
        $resultSet=array();
        if($league=='KBO'):
            $resultSet['era']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'era', 'ASC');
            $resultSet['w']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'w', 'DESC');
            $resultSet['sv']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'sv', 'DESC');
            $resultSet['wpct']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'wpct', 'DESC');
            $resultSet['hld']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'hld', 'DESC');
            $resultSet['so']=$this->get_order_by_limit($league, 'KBO_record_pitcher', 'so', 'DESC');
        else:
            $resultSet['era']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'era', 'ASC');
            $resultSet['w']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'w', 'DESC');
            $resultSet['sv']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'sv', 'DESC');
            $resultSet['ip']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'ip', 'DESC');
            $resultSet['hld']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'hld', 'DESC');
            $resultSet['so']=$this->get_order_by_limit($league, 'MLB_record_pitcher', 'so', 'DESC');
        endif;

        return $resultSet;
    }

    function sorting_by_team($table, $team){
        $last_date=$this->get_last_day($table, 'crawling_date');

        $this->db->select($table.'.*, KBO_players.name');
        $this->db->where('crawling_date', $last_date);
        $this->db->where('req_yn', 'Y');
        $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
        $this->db->order_by('no');

        return $this->db->get_where($table, array('team'=>$team))->result();
    }

    function sort_by_team_order_by($table, $team, $sort, $per_page, $offset){
        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $last_date=$this->get_last_day($table, 'crawling_date');

            $this->db->select($table.'.*, KBO_players.name');
            $this->db->where('crawling_date', $last_date);
            $this->db->where('KBO_players.delete_yn', 'N');
            $this->db->where('team', $team);
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        elseif($table=='MLB_record_hitter' || $table=='MLB_record_pitcher'):
            $this->db->select($table.'.*, MLB_players.name');
            $this->db->where($table.'.year', '2017');
            $this->db->join('MLB_players', 'MLB_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        endif;

        return $this->db->get($table, $per_page, $offset)->result();
    }

    function get_schedule_after_1days($league){
    	$today=date('Y-m-d');
    	$date_form='Y-m-d';
    	$table=($league=='KBO')? 'KBO_result' : 'MLB_result';

        $this->db->select('date');
        $this->db->like('date', $today, 'after');
        $this->db->distinct();
        $count=$this->db->get($table)->result();

        $resultSet=array();
        if($count!=null):
            $this->db->select('date');
            $this->db->like('date', $today, 'after');
            $this->db->distinct();
            $this->db->order_by('date', 'ASC');
            $resultSet['date']=$this->db->get($table)->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', $today, 'after');
            if($league!='KBO') $this->db->order_by('time', 'ASC');
            $resultSet['schedule']=$this->db->get($table)->result();
        else:
            $resultSet=array();
            $this->db->select('date');
            $this->db->like('date', date($date_form, strtotime("$today +1 day")), 'after');
            $this->db->distinct();
            $resultSet['date']=$this->db->get($table)->result();

            $this->db->select('no, date, time, home, away');
            $this->db->like('date', date($date_form, strtotime("$today +1 day")), 'after');
            if($league!='KBO') $this->db->order_by('time', 'ASC');
            $resultSet['schedule']=$this->db->get($table)->result();
        endif;

    	return $resultSet;
    }

    function get_total_score($league, $duration, $home_away){
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

    function get_league_statistics($league, $over_under_reference, $handicap){
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
                    if($item->away_score+$item->home_score > $over_under_reference[$team]) $over++;
                    if($item->away_score+$item->home_score > $over_under_reference[$team]-1) $over_minus_one++;
                    if($item->away_score+$item->home_score > $over_under_reference[$team]+1) $over_plus_one++;
                endif;

                if($item->away==$team): if($item->away_score-$handicap > $item->home_score): $away_win_handicap++; endif;
                elseif($item->home==$team): if($item->home_score-$handicap > $item->away_score): $home_win_handicap++; endif; endif;
            endforeach;
        endforeach;

        if($league!='KBO'):
            foreach($mlb_teams as $team):
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

    function get_over_under($league){
        $total=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');
        $values=0;
        foreach($total as $item) $values+=$item->away_score+$item->home_score;

        return floor(number_format($values/count($total),1)).'.5';
    }

    function get_over_under_by_team($league){
        $result=array();
        $kbo_teams=array('SK','kt','삼성','NC','두산','넥센','LG','한화','롯데','KIA');
        $mlb_teams=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics','Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        $teams=($league=='KBO')?$kbo_teams : $mlb_teams;

        foreach($teams as $team):
            $total=($league=='KBO')? $this->get_result_by_team('KBO_result', $team) : $this->get_result_by_team('MLB_result', $team);
            $values=0;
            $over_per=0;
            $under_per=0;
            $g=0;
            foreach($total as $item) $values+=$item->away_score+$item->home_score;
            $result[$team]=floor(number_format($values/count($total),1)).'.5';

            foreach($total as $item):
                $g++;
                $sum=$item->away_score+$item->home_score;
                if($sum > $result[$team]) $over_per++; else $under_per++;
            endforeach;

            $result[$team.'_over']=number_format($over_per/$g*100);
            $result[$team.'_under']=100-$result[$team.'_over'];
        endforeach;

        return $result;
    }

    function get_over_under_by_month($team){
        $value=$this->db->query('SELECT DISTINCT month FROM KBO_team_month ORDER BY month DESC LIMIT 1')->row();
        $max_month=$value->month+1;

        $result_arr=array();
        for($i=3; $i<$max_month; $i++):
            $over_under_reference_value=$this->get_over_under('KBO');
            $over_under_reference=$this->get_over_under_by_team('KBO');
            $result2=($team=='all') ? $this->db->query('SELECT * FROM KBO_result WHERE away_score!="" AND home_score!="" AND date LIKE "2017-0'.$i.'%"')->result()
                                    : $this->db->query('SELECT * FROM KBO_result WHERE (away="'.$team.'" OR home="'.$team.'") AND away_score!="" AND home_score!="" AND date LIKE "2017-0'.$i.'%"')->result();

            $result['month']=$i;
            $result['over']=0;
            $result['under']=0;
            foreach($result2 as $item):
                if($team=='all'):
                    if($item->away_score+$item->home_score > $over_under_reference_value) $result['over']++;
                    else $result['under']++;
                else:
                    if($item->away_score+$item->home_score > $over_under_reference[$team]) $result['over']++;
                    else $result['under']++;
                endif;
            endforeach;
            array_push($result_arr, $result);
        endfor;

        return $result_arr;
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

    function get_recent_ten_game_over_under_to_str($league, $over_under_reference){
        $result=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');
        $kbo_teams=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        $mlb_teams=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics','Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        $teams=($league=='KBO')?$kbo_teams : $mlb_teams;

        $result_set=array();
        foreach($teams as $team):
            $over=0;
            $under=0;
            $game_count=0;
            $arr=array();
            $result_array=array();
            foreach($result as $item):
                if($item->away==$team || $item->home==$team):
                    if($game_count<10):
                        $game_count++;
                        if($item->away_score+$item->home_score > $over_under_reference[$team]):
                            $over++;
                            array_push($arr, 'plus');
                        else:
                            $under++;
                            array_push($arr, 'minus');
                        endif;
                    endif;
                endif;
            endforeach;
            if($team=='KT') $team='kt';
            $result_array['team']=$team;
            $result_array['over']=$over;
            $result_array['under']=$under;
            $result_array['str']=$arr;
            array_push($result_set, $result_array);
        endforeach;

        foreach($result_set as $item) $sortAux[]=$item['over'];
        array_multisort($sortAux, SORT_DESC, $result_set);

        return $result_set;
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

    function get_result_by_team($table, $team){
        return $this->db->query('select * from '.$table.' where away_score!="" AND home_score!="" AND (away="'.$team.'" OR home="'.$team.'") order by date DESC')->result();
    }

    function get_result_one($schedule_no){
        return $this->db->get_where('KBO_result', array('no'=>$schedule_no))->row();
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

    function add($no, $flag){
        $row=($flag=='home' || $flag=='away') ? $this->db->get_where('KBO_result', array('no'=>$no))->row() : $this->db->get_where('KBO_comment', array('no'=>$no))->row();

        $this->db->where('no', $no);
        if($flag=='home') $this->db->update('KBO_result', array('home_cheer'=>$row->home_cheer+1));
        else if($flag=='away') $this->db->update('KBO_result', array('away_cheer'=>$row->away_cheer+1));
        else if($flag=='good') $this->db->update('KBO_comment', array('good'=>$row->good+1));
        else if($flag=='bad') $this->db->update('KBO_comment', array('bad'=>$row->bad+1));
    }

    function get_cheer($schedule_no, $limit, $offset){
        $this->db->order_by('insert_dt', 'DESC');

        return $this->db->get_where('KBO_comment', array('schedule_no'=>$schedule_no), $limit, $offset)->result();
    }

    function get_rank_by_date_team($date, $team){
        $result=$this->db->get_where('KBO_team_total', array('date'=>$date, 'team'=>$team))->result();
        $rank=($result!=null) ? $result[0]->rank : $this->get_rank_by_date_team(date('Y-m-d', strtotime("$date -1 day")), $team);

        return $rank;
    }

    function get_team_total(){
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
        $last_date=$this->get_last_day('KBO_record_'.$pitcher_or_hitter, 'crawling_date');

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

    function get_weeks_of_month($month){
        $result_arr=array();
        $arr=array();
	    $first_day=date('w', strtotime(date('Y').'-'.$month.'-01'));
	    if($first_day==0) $first_day=6; else $first_day--;

	    $month_arr=array('01'=>31,'02'=>28,'03'=>31,'04'=>30,'05'=>31,'06'=>30,'07'=>31,'08'=>31,'09'=>30,'10'=>31,'11'=>30,'12'=>31);
	    for($i=1; $i<$month_arr[$month]+1; $i++):
            if(strlen($i)==1) $i='0'.$i;
	        array_push($arr, $i);
	        $first_day++;
            if($first_day==7):
                array_push($result_arr, $arr);
                $arr=array();
                $first_day=0;
            endif;
            if($i==$month_arr[$month]) array_push($result_arr, $arr);
        endfor;

        return $result_arr;
    }

    function get_team_month($team){
        $result_set=array();
        $value=$this->db->query('SELECT DISTINCT month FROM KBO_team_month ORDER BY month DESC LIMIT 1')->row();
        $max_month=$value->month+1;

        if($team=='all'):
            $result=$this->db->get('KBO_team_month')->result();

            for($i=3; $i<$max_month; $i++):
                $result_arr=array('month'=>$i, 'g'=>0, 'r'=>0, 'hr'=>0, 'h'=>0, 'avg'=>0);
                foreach($result as $item):
                    if($item->month==$i):
                        $result_arr['g']+=$item->g/2;
                        $result_arr['r']+=$item->r;
                        $result_arr['hr']+=$item->hr;
                        $result_arr['h']+=$item->h;
                        $result_arr['avg']+=$item->avg;
                    endif;
                endforeach;
                array_push($result_set, (object)$result_arr);
            endfor;
            $result_over_under=$this->get_over_under_by_month($team);

            foreach($result_set as $key=>$item):
                foreach($result_over_under as $items):
                    if($item->month==$items['month']):
                        $result_set[$key]->over=$items['over'];
                        $result_set[$key]->under=$items['under'];
                    endif;
                endforeach;
            endforeach;
        else:
            $result_set=$this->db->get_where('KBO_team_month', array('team'=>urldecode($team)))->result();
            $result_over_under=$this->get_over_under_by_month($team);

            foreach($result_set as $key=>$item):
                foreach($result_over_under as $items):
                    if($item->month==$items['month']):
                        $result_set[$key]->over=$items['over'];
                        $result_set[$key]->under=$items['under'];
                    endif;
                endforeach;
            endforeach;
        endif;

        return $result_set;
    }

    function get_league_result(){
        $this->db->select_sum('g');
        $this->db->select_avg('r');
        $this->db->select_avg('hr');
        $this->db->select_avg('h');
        $this->db->select_avg('avg');
        $result=$this->db->get('KBO_team_month')->row();

        $over_under_reference_value=$this->baseball_model->get_over_under('KBO');
        $result_arr=$this->db->get_where('KBO_result', array('away_score!='=>'', 'away!='=>'드림'))->result();

        $result->over=0;
        $result->under=0;
        foreach($result_arr as $item):
            if($item->away_score+$item->home_score > $over_under_reference_value) $result->over++;
            else $result->under++;
        endforeach;

        return $result;
    }

//  홈경기승패/원정경기승패
    function get_away_home_win($team){
        $result=$this->get_result('KBO_result');
        $result_arr['away_win']=0;
        $result_arr['away_lose']=0;
        $result_arr['home_win']=0;
        $result_arr['home_lose']=0;
        foreach($result as $item):
            if($item->away==$team):
                if($item->away_score > $item->home_score): $result_arr['away_win']++;
                elseif($item->away_score < $item->home_score): $result_arr['away_lose']++; endif;
            elseif($item->home==$team):
                if($item->away_score < $item->home_score): $result_arr['home_win']++;
                elseif($item->away_score > $item->home_score): $result_arr['home_lose']++; endif;
            endif;
        endforeach;

        return $result_arr;
    }
}