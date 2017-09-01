<?php class Baseball_model extends CI_Model{
	function __construct(){
		parent::__construct();
        date_default_timezone_set('Asia/Seoul');
	}

	/* INSERT */
    function insert($table, $data){
        $this->db->set('insert_dt', 'NOW()', false);
        $this->db->insert($table, $data);
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

    function insert_result($table, $data){
        foreach($data as $item):
            $this->db->set('insert_dt', 'NOW()', false);
            $this->db->where('date', $item['date']);
            $this->db->where('home', $item['home']);
            $this->db->where('home_score', '');

            $this->db->update($table, $item);
        endforeach;
    }

	/* GET */
	function get($table){
		return $this->db->get($table)->result();
	}

	function get_select($table, $select){
	    $this->db->select($select);
        return $this->db->get($table)->result();
    }

	function get_query($query){
	    return $this->db->query($query)->result();
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
        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $this->db->select('KBO_players.name, KBO_players.player_id, team,'.$order_by);
            if($order_by!=='hld' && $order_by!='sv') $this->db->where('req_yn', 'Y');
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            $this->db->order_by($order_by, $asc_desc);
        else:
            $this->db->select('MLB_players.name, MLB_players.name_kor, MLB_players.player_id, '.$table.'.team,'.$order_by);
            if($league=='MLB_N') $this->db->where('lg', 'NL'); else $this->db->where('lg', 'AL');
            if($order_by!='hld' && $order_by!='sv') $this->db->where('req_yn', 'Y');
            $this->db->join('MLB_players', 'MLB_players.player_id='.$table.'.player_id');
            $this->db->order_by($order_by, $asc_desc);
        endif;

        $limit=($league=='KBO')? 5 : 3;
        return $this->db->get($table, $limit)->result();
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
        $date='2017-'.$this_month;
	    if($team=='all'):
            $this->db->like('date', $date, 'after');
            $this->db->order_by('date', 'ASC');
            $result=$this->db->get($table)->result();
        else:
            $result=$this->db->query('SELECT * FROM '.$table.' WHERE (away="'.$team.'" OR home="'.$team.'") AND date LIKE "'.$date.'%" ORDER BY date ASC')->result();
        endif;

		return $result;
	}

    function get_by_day($league, $team, $month){
        $table=($league=='KBO')? 'KBO_result' : 'MLB_result';

        $this->db->select('date');
        $this->db->distinct();
        $this->db->like('date', '2017-'.$month, 'after');
        $this->db->order_by('date', 'desc');
        if($league!='KBO'): $this->db->where('away_score!=', 0); $this->db->where('home_score!=', 0); endif;
        $result['day']=$this->db->get_where($table, array('away_score!='=>''))->result();

        $where=($league=='KBO')? 'away_score!=""' : '(away_score!=0 AND home_score!=0)';
        if($league=='KBO'):
            $query=($team!='all')? 'SELECT * FROM KBO_result WHERE '.$where.' AND (away="'.$team.'" OR home="'.$team.'") AND date LIKE "2017-'.$month.'%" ORDER BY date DESC'
                                 : 'SELECT * FROM KBO_result WHERE '.$where.' AND date LIKE "2017-'.$month.'%" ORDER BY date DESC';
        else:
            $query=($team!='all')? 'SELECT result.*, away.name_kor AS away_pitcher, home.name_kor AS home_pitcher FROM MLB_result AS result LEFT JOIN MLB_players AS away ON (away.name=result.away_pitcher) LEFT JOIN MLB_players AS home ON (home.name=result.home_pitcher) WHERE '.$where.' AND (away="'.$team.'" OR home="'.$team.'") AND date LIKE "2017-'.$month.'%" ORDER BY date DESC'
                                 : 'SELECT result.*, away.name_kor AS away_pitcher, home.name_kor AS home_pitcher FROM MLB_result AS result LEFT JOIN MLB_players AS away ON (away.name=result.away_pitcher) LEFT JOIN MLB_players AS home ON (home.name=result.home_pitcher) WHERE '.$where.' AND date LIKE "2017-'.$month.'%" ORDER BY date DESC';
        endif;
        $result['result']=$this->db->query($query)->result();

        foreach($result['result'] as $key=>$item):
            $result['result'][$key]->away_pitcher=(isset($this->get_pitcher_name_kor($item->away_pitcher)->name_kor))? $this->get_pitcher_name_kor($item->away_pitcher)->name_kor : $item->away_pitcher;
            $result['result'][$key]->home_pitcher=(isset($this->get_pitcher_name_kor($item->home_pitcher)->name_kor))? $this->get_pitcher_name_kor($item->home_pitcher)->name_kor : $item->home_pitcher;
        endforeach;

        return $result;
    }

    function get_pitcher_name_kor($name){
        $this->db->select('name_kor');
        return $this->db->get_where('MLB_players', array('name'=>$name))->row();
    }

	function get_num_rows($league, $table, $schedule_no){
        if($table=='KBO_record_hitter'):
            $lastDate=$this->get_last_day($table, 'crawling_date');
            $this->db->where('crawling_date', $lastDate);
            $this->db->where('req_yn', 'Y');
        elseif($table=='MLB_record_hitter'):
            if($league=='MLB_A') $this->db->where('lg', 'AL'); else $this->db->where('lg', 'NL');
            $this->db->where('req_yn', 'Y');
            $this->db->where('year', '2017');
        else: $this->db->where('schedule_no', $schedule_no); endif;

	    return $this->db->get($table)->num_rows();
    }

    function get_num_rows_by_team($league, $table, $team){
	    if($league=='KBO'):
            $lastDate=$this->get_last_day($table, 'crawling_date');
            $this->db->where('crawling_date', $lastDate);
        else:
            if($league=='MLB_N') $this->db->where('lg', 'NL');
            else $this->db->where('lg', 'AL');
            $this->db->where('year', date('Y'));
        endif;
        $this->db->where('team', $team);
	    return $this->db->get($table)->num_rows();
    }

    function get_num_rows_by_sort($table, $sort){
        if($table=='KBO_record_pitcher' || $table=='KBO_record_hitter'):
            if($sort =='era' || $sort =='avg' || $sort =='wpct' || $sort =='whip'):
                $lastDate=$this->get_last_day($table, 'crawling_date');
                $this->db->where('crawling_date', $lastDate);
                $this->db->where('req_yn', 'Y');
            endif;
        else:
            if($table=='MLB_N') $this->db->where('lg', 'AL');
            else $this->db->where('lg', 'NL');
            if($sort =='era' || $sort =='avg' || $sort =='wpct' || $sort =='whip') $this->db->where('req_yn', 'Y');
        endif;

        return $this->db->get($table)->num_rows();
    }

    function get_by_sort_pagination($league, $table, $sort, $limit, $offset){
        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $this->db->select($table.'.*, KBO_players.name');
            $this->db->where('KBO_players.delete_yn', 'N');
            if($sort=='era' || $sort=='wpct' || $sort=='whip' || $sort=='avg') $this->db->where('req_yn', 'Y');
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        elseif($table=='MLB_record_hitter' || $table=='MLB_record_pitcher'):
            $this->db->select($table.'.*, MLB_players.name, MLB_players.name_kor');
            if($league=='MLB_A') $this->db->where('lg', 'AL'); else $this->db->where('lg', 'NL');
            $this->db->where($table.'.year', '2017');
//            $this->db->where('req_yn', 'Y');
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
        $last_date=$this->get_last_day($table, 'crawling_date');
        if($table=='KBO_record_hitter' || $table=='KBO_record_pitcher'):
            $this->db->select($table.'.*, KBO_players.name');
            $this->db->where('crawling_date', $last_date);
            $this->db->where('KBO_players.delete_yn', 'N');
            $this->db->where('team', $team);
            $this->db->join('KBO_players', 'KBO_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
        elseif($table=='MLB_record_hitter' || $table=='MLB_record_pitcher'):
            $this->db->select($table.'.*, MLB_players.name, MLB_players.name_kor');
            $this->db->where('crawling_date', $last_date);
            $this->db->where($table.'.year', '2017');
            $this->db->where($table.'.team', $team);
            $this->db->join('MLB_players', 'MLB_players.player_id='.$table.'.player_id');
            if($sort=='era' || $sort=='whip') $this->db->order_by($sort, 'ASC'); else $this->db->order_by($sort, 'DESC');
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
        else if($league=='MLB_A') $team_array=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLB_N') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        else if($league=='MLB') $team_array=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants','Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');

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
        if($league=='KBO') $teams=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
        else if($league=='MLB_A') $teams=array('Boston Red Sox','New York Yankees','Tampa Bay Rays','Baltimore Orioles','Toronto Blue Jays','Cleveland Indians','Minnesota Twins','Kansas City Royals','Detroit Tigers','Chicago White Sox','Houston Astros','Los Angeles Angels of Anaheim','Texas Rangers','Seattle Mariners','Oakland Athletics');
        else if($league=='MLB_N') $teams=array('Washington Nationals','Atlanta Braves','New York Mets','Miami Marlins','Philadelphia Phillies','Milwaukee Brewers','Chicago Cubs','St. Louis Cardinals','Pittsburgh Pirates','Cincinnati Reds','Los Angeles Dodgers','Arizona Diamondbacks','Colorado Rockies','San Diego Padres','San Francisco Giants');
        $total=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');

    	$resultSet=array();
    	$g=0;
        $home_win=0;
        $away_win=0;
        $draw=0;
    	$away_total_score=0;
    	$home_total_score=0;
        $over=0;
        $away_win_handicap=0;
        $home_win_handicap=0;

        if($league!='KBO'):
            foreach($total as $entry):
                $flag='';
                foreach($teams as $team): if($entry->away==$team): $flag='away'; elseif($entry->home==$team): $flag='home'; endif; endforeach;

                foreach($teams as $team):
                    if($flag=='away'): if($entry->home==$team): $flag='both'; endif;
                    elseif($flag=='home'): if($entry->away==$team): $flag='both'; endif;
                    endif;
                endforeach;

                if($flag=='both'):
//                  리그 승률통계
                    if($entry->home_score < $entry->away_score): $away_win++; $g++;
                    elseif($entry->home_score == $entry->away_score): $draw++; $g++;
                    elseif($entry->home_score > $entry->away_score): $home_win++; $g++; endif;
//                  홈/원정 득점
                    $away_total_score+=$entry->away_score;
                    $home_total_score+=$entry->home_score;
//                  OU
                    if($entry->away_score+$entry->home_score > $over_under_reference): $over++; endif;
//                  핸디캡
                    if($entry->away_score-$handicap > $entry->home_score): $away_win_handicap++;
                    elseif($entry->home_score-$handicap > $entry->away_score): $home_win_handicap++; endif;
                elseif($flag=='away'):
//                  리그 승률통계
                    if($entry->home_score < $entry->away_score): $away_win++; $g++;
                    elseif($entry->home_score == $entry->away_score): $draw++; $g++; endif;
//                  홈/원정 득점
                    $away_total_score+=$entry->away_score;
//                  OU
                    if($entry->away_score+$entry->home_score > $over_under_reference): $over++; endif;
//                  핸디캡
                    if($entry->away_score-$handicap > $entry->home_score): $away_win_handicap++; endif;
                elseif($flag=='home'):
//                  리그 승률통계
                    if($entry->home_score > $entry->away_score): $home_win++; $g++;
                    elseif($entry->home_score == $entry->away_score): $draw++; $g++; endif;
//                  홈/원정 득점
                    $home_total_score+=$entry->home_score;
//                  OU
                    if($entry->away_score+$entry->home_score > $over_under_reference): $over++; endif;
//                  핸디캡
                    if($entry->home_score-$handicap > $entry->away_score): $home_win_handicap++; endif;
                endif;
            endforeach;
        else:
            foreach($total as $entry):
                $g++;
//              리그 승률통계
                if($entry->home_score < $entry->away_score) $away_win++;
                else if($entry->home_score > $entry->away_score) $home_win++;
                else if($entry->home_score == $entry->away_score) $draw++;
//              홈/원정 득점
                $away_total_score+=$entry->away_score;
                $home_total_score+=$entry->home_score;
//              OU
                if($entry->away_score+$entry->home_score > $over_under_reference) $over++;
//              핸디캡
                if($entry->away_score-$handicap > $entry->home_score) $away_win_handicap++;
                if($entry->home_score-$handicap > $entry->away_score) $home_win_handicap++;
            endforeach;
        endif;
        $resultSet['g']=$g;
        $resultSet['away_win']=$away_win;
        $resultSet['home_win']=$home_win;
        $resultSet['draw']=$draw;
    	$resultSet['away_total_score']=$away_total_score;
    	$resultSet['home_total_score']=$home_total_score;
        $resultSet['over']=$over;
        $resultSet['handicap_away_win']=$away_win_handicap;
        $resultSet['handicap_home_win']=$home_win_handicap;
        $resultSet['away_win']=$away_win;
        $resultSet['home_win']=$home_win;
        $resultSet['draw']=$draw;

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
            $result[$team]=floor($values/count($total)).'.5';

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

    function get_all_game_over_under($league, $team, $over_under_reference_value, $handicap){
        $result=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');
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
        return ($table=='KBO_result')? $this->db->query('SELECT * FROM KBO_result WHERE away_score!="" AND home_score!="" AND away!="드림" ORDER BY date DESC')->result()
                                     : $this->db->query('SELECT * FROM MLB_result WHERE away_score!="" AND home_score!="" AND away!="드림" AND (away_score!=0 OR home_Score!=0) AND date>='.date('Y-m-d').' ORDER BY date DESC')->result();
    }

    function get_result_by_team($table, $team){
        return ($table=='KBO_result')? $this->db->query('SELECT * FROM KBO_result WHERE away_score!="" AND home_score!="" AND away!="드림" AND (away="'.$team.'" OR home="'.$team.'") ORDER BY date DESC')->result()
                                     : $this->db->query('SELECT * FROM MLB_result WHERE away_score!="" AND home_score!="" AND away!="드림" AND (away_score!=0 OR home_Score!=0) AND (away="'.$team.'" OR home="'.$team.'") AND date>='.date('Y-m-d').' ORDER BY date DESC')->result();
    }

    function get_result_one($schedule_no){
        return $this->db->get_where('KBO_result', array('no'=>$schedule_no, 'away!='=>'드림'))->row();
    }

    function get_result_date_distinct($league){
        $this->db->select('date');
        $this->db->distinct();
        return $this->db->get_where($league, array('away_score!='=>'','date<='=>date('Y-m-d'),'away!='=>'드림'))->result();
    }

    function get_relative_match_result($league, $away, $home, $over_under_reference_value){
        $total_game_count=0;
        $away_win_count=0;
        $away_lose_count=0;
        $away_win_lose_arr=array();
        $home_win_lose_arr=array();
        $away_game_no_arr=array();
        $over_under=0;
        $over_under_arr=array();
        $result=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');
        $data_set=array();
        $result_set=array();

        foreach($result as $item):
//          승률/오버언더/승패
            if($item->away==$away && $item->home==$home):
                array_push($data_set, $item);
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
                array_push($data_set, $item);
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

    function add($league, $no, $flag){
        $table=($league=='KBO')? 'KBO_result' : 'MLB_result';
        $row=($flag=='home' || $flag=='away') ? $this->db->get_where($table, array('no'=>$no))->row() : $this->db->get_where('comment', array('no'=>$no))->row();

        $this->db->where('no', $no);
        if($flag=='home') $this->db->update($table, array('home_cheer'=>$row->home_cheer+1));
        else if($flag=='away') $this->db->update($table, array('away_cheer'=>$row->away_cheer+1));
        else if($flag=='good') $this->db->update('comment', array('good'=>$row->good+1));
        else if($flag=='bad') $this->db->update('comment', array('bad'=>$row->bad+1));
    }

    function get_cheer($schedule_no, $limit, $offset){
        $this->db->order_by('insert_dt', 'DESC');

        return $this->db->get_where('comment', array('schedule_no'=>$schedule_no), $limit, $offset)->result();
    }

    function get_rank_by_date_team($date, $team){
        $result=$this->db->get_where('KBO_team_total', array('date'=>$date, 'team'=>$team))->result();
        $rank=($result!=null) ? $result[0]->rank : $this->get_rank_by_date_team(date('Y-m-d', strtotime("$date -1 day")), $team);

        return $rank;
    }

    function get_team_total($league){
        $this_league=($league=='KBO')? 'KBO' : 'MLB';

        $this->db->select('date');
        $this->db->order_by('date', 'DESC');
        $this->db->distinct();
        $result=$this->db->get_where($this_league.'_team_total')->row();

        return $this->db->get_where($this_league.'_team_total', array('date'=>$result->date))->result();
    }

    function get_team_introduce($team){
        return $this->db->get_where('KBO_team_introduce', array('team'=>$team))->row();
    }

    function get_record_by_team($league, $team){
        $this_league=($league=='KBO')? 'KBO' : 'MLB';

        $this->db->select('date');
        $this->db->order_by('date', 'DESC');
        $this->db->distinct();
        $lastDate=$this->db->get($this_league.'_team_total')->row();

        $this->db->select('h, hr');
        if($league=='MLB_A') $this->db->where('lg', 'AL'); elseif($league=='MLB_N') $this->db->where('lg', 'NL');
        $another_teams_offense=$this->db->get_where($this_league.'_team_offense', array('team!='=>$team))->result();
        $this->db->select('so');
        if($league=='MLB_A') $this->db->where('lg', 'AL'); elseif($league=='MLB_N') $this->db->where('lg', 'NL');
        $another_teams_defence=$this->db->get_where($this_league.'_team_defence', array('team!='=>$team))->result();

        $team_total=$this->db->get_where($this_league.'_team_total', array('team'=>$team, 'date'=>$lastDate->date))->row();
        if($league!='KBO') $team_total->tie=0;
        $team_offense=$this->db->get_where($this_league.'_team_offense', array('team'=>$team))->row();
        $team_defence=$this->db->get_where($this_league.'_team_defence', array('team'=>$team))->row();

        $h_rank=1;
        $hr_rank=1;
        $so_rank=1;
        foreach($another_teams_offense as $item) if($item->h > $team_offense->h) $h_rank++;
        foreach($another_teams_offense as $item) if($item->hr > $team_offense->hr) $hr_rank++;
        foreach($another_teams_defence as $item) if($item->so > $team_defence->so) $so_rank++;
        $win_rate_rank=($league=='KBO')?$team_total->rank : $team_total->conference_rank;

        $result=array('win_rate'=>number_format($team_total->win_rate,3),'win_rate_rank'=>$win_rate_rank,'defence'=>$team_defence->era,'defence_rank'=>$team_defence->rank,'offense'=>number_format($team_offense->avg,3),'offense_rank'=>$team_offense->rank,
                      'h'=>$team_offense->h,'h_rank'=>$h_rank,'hr'=>$team_offense->hr,'hr_rank'=>$hr_rank,'so'=>$team_defence->so,'so_rank'=>$so_rank,'w'=>$team_total->win,'l'=>$team_total->lose,'tie'=>$team_total->tie);

        return $result;
    }

    function get_players(){
        $this->db->select('player_id');
        return $this->db->get_where('KBO_players', array('delete_yn'=>'N', 'year'=>date('Y')))->result();
    }

    function get_player($league, $team, $name){
        $team_arr=($league=='KBO')? array('SK'=>1,'kt'=>2,'KT'=>2,'삼성'=>3,'NC'=>4,'두산'=>5,'넥센'=>6,'LG'=>7,'한화'=>8,'롯데'=>9,'KIA'=>10) : array('Los Angeles Angels of Anaheim'=>1,'Houston Astros'=>2,'Oakland Athletics'=>3,'Toronto Blue Jays'=>4,'Atlanta Braves'=>5,'Milwaukee Brewers'=>6,'St. Louis Cardinals'=>7,'Chicago Cubs'=>8,'Arizona Diamondbacks'=>9,'Los Angeles Dodgers'=>10,'San Francisco Giants'=>11,'Cleveland Indians'=>12,'Miami Marlins'=>13,'Seattle Mariners'=>14,'New York Mets'=>15,'Washington Nationals'=>16,'Baltimore Orioles'=>17,'San Diego Padres'=>18,'Philadelphia Phillies'=>19,'Pittsburgh Pirates'=>20,'Texas Rangers'=>21,'Tampa Bay Rays'=>22,'Boston Red Sox'=>23,'Cincinnati Reds'=>24,'Colorado Rockies'=>25,'Kansas City Royals'=>26,'Detroit Tigers'=>27,'Minnesota Twins'=>28,'Chicago White Sox'=>29,'New York Yankees'=>30);
        $this->db->select('player_id');
        return $this->db->get_where($league.'_players', array('team_no'=>$team_arr[$team], 'name'=>$name))->row();
    }

    function get_top_player_in_team($league, $team, $pitcher_or_hitter, $sort){
        if($league=='KBO'): $this_league=$league;
        else:
            $this_league='MLB';
            $abb_MLB_team=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels of Anaheim'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');
            $team=$abb_MLB_team[$team];
        endif;

        $last_date=$this->get_last_day($this_league.'_record_'.$pitcher_or_hitter, 'crawling_date');

        $asc_or_desc=($sort=='era')?'ASC' : 'DESC';
        $this->db->select($sort.', player_id');
        $this->db->order_by($sort, $asc_or_desc);
//        if($sort=='avg' || $sort=='era' || $sort=='wpct') $this->db->where('req_yn', 'Y');
        $data=$this->db->get_where($this_league.'_record_'.$pitcher_or_hitter, array('crawling_date'=>$last_date))->result();

        $this->db->select($this_league.'_record_'.$pitcher_or_hitter.'.*, '.$this_league.'_players.name');
//        if($sort=='avg' || $sort=='era' || $sort=='wpct') $this->db->where('req_yn', 'Y');
        $this->db->join($this_league.'_players', $this_league.'_players.player_id='.$this_league.'_record_'.$pitcher_or_hitter.'.player_id');
        $this->db->order_by($sort, $asc_or_desc);
        $result=$this->db->get_where($this_league.'_record_'.$pitcher_or_hitter, array($this_league.'_record_'.$pitcher_or_hitter.'.team'=>$team, 'crawling_date'=>$last_date, $this_league.'_players.delete_yn'=>'N'))->row();

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

    function get_team_month($league, $team){
        $result_set=array();
        $table=($league=='KBO')? 'KBO_team_month' : 'MLB_team_month';
        $max_month=$this->db->query('SELECT DISTINCT month FROM '.$table.' ORDER BY month DESC LIMIT 1')->row();
        $min_month=$this->db->query('SELECT DISTINCT month FROM '.$table.' ORDER BY month ASC LIMIT 1')->row();

        if($team=='all'):
            $result=$this->db->get($table)->result();

            for($i=$max_month->month; $i>=$min_month->month; $i--):
                $result_arr=array('month'=>$i, 'g'=>0, 'r'=>0, 'hr'=>0, 'h'=>0, 'avg'=>0, 'bb'=>0, 'so'=>0, 'whip'=>0);
                foreach($result as $item):
                    if($item->month==$i):
                        $result_arr['g']+=$item->g/2;
                        $result_arr['r']+=$item->r;
                        $result_arr['hr']+=$item->hr;
                        $result_arr['h']+=$item->h;
                        $result_arr['avg']+=$item->avg;
                        $result_arr['bb']+=$item->bb;
                        $result_arr['so']+=$item->so;
                        $result_arr['whip']+=($league=='KBO')? $item->whip/10 : $item->whip/30;
                    endif;
                endforeach;
                array_push($result_set, (object)$result_arr);
            endfor;
        else:
            $this->db->order_by('month', 'DESC');
            $result_set=$this->db->get_where($table, array('team'=>urldecode($team)))->result();
        endif;

        return $result_set;
    }

    function get_league_result($league, $team){
        if($team=='all'):
            $this->db->select_sum('g');
            $this->db->select_sum('r');
            $this->db->select_sum('hr');
            $this->db->select_sum('h');
            $this->db->select_avg('avg');
            $this->db->select_sum('bb');
            $this->db->select_sum('so');
            $this->db->select_avg('whip');
            $result=$this->db->get($league.'_team_month')->row();
        else:
            $this->db->select_sum('g');
            $this->db->select_sum('r');
            $this->db->select_sum('hr');
            $this->db->select_sum('h');
            $this->db->select_avg('avg');
            $this->db->select_sum('bb');
            $this->db->select_sum('so');
            $this->db->select_avg('whip');
            $this->db->where('team', $team);
            $result=$this->db->get($league.'_team_month')->row();
        endif;

        return $result;
    }

    function get_away_home_win($league, $team){
        $result=($league=='KBO')? $this->get_result('KBO_result') : $this->get_result('MLB_result');
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

    function get_player_name_by_id($player_id){
        $this->db->select('name');
        return $this->db->get_where('KBO_players', array('player_id'=>$player_id))->row();
    }

    function get_last_crawling_date($table, $column){
        $this->db->select($column);
        $this->db->order_by($column, 'desc');
        return $this->db->get($table)->row()->$column;
    }

    function get_pitcher_rank($league, $away_id, $home_id){
        $task_array=array('w','wpct','qs','so','hr','avg','whip');
        if($league!='KBO') $this->db->where('year', 2017);
        $record=$this->db->get($league.'_record_pitcher')->result();

        foreach($record as $item):
                if($item->player_id==$away_id): $away=array('w'=>$item->w,'wpct'=>$item->wpct,'qs'=>$item->qs,'so'=>$item->so,'hr'=>$item->hr,'avg'=>$item->avg,'whip'=>$item->whip,'req'=>$item->req_yn); endif;
                if($item->player_id==$home_id): $home=array('w'=>$item->w,'wpct'=>$item->wpct,'qs'=>$item->qs,'so'=>$item->so,'hr'=>$item->hr,'avg'=>$item->avg,'whip'=>$item->whip,'req'=>$item->req_yn); endif;
        endforeach;

        $result=array();
        foreach($task_array as $item):
            $this->db->select('player_id, req_yn, '.$item);
            if($league!='KBO') $this->db->where('year', 2017);
            if($item=='avg' || $item=='whip') $this->db->where('req_yn', 'Y');
            $this->db->order_by($item, 'desc');
            $data=$this->db->get($league.'_record_pitcher')->result();

            $away_rank=1; $home_rank=1;
            if($item=='whip'):
                if($away['req']=='Y' || $home['req']=='Y'):
                    foreach($data as $items):
                        if($items->req_yn=='Y') if($items->$item < $away[$item]) $away_rank++;
                        if($items->req_yn=='Y') if($items->$item < $home[$item]) $home_rank++;
                    endforeach;
                endif;
                if($away['req']=='N'): $away_rank=''; endif;
                if($home['req']=='N'): $home_rank=''; endif;
            elseif($item=='avg'):
                if($away['req']=='Y' || $home['req']=='Y'):
                    foreach($data as $items):
                        if($items->req_yn=='Y') if($items->$item > $away[$item]) $away_rank++;
                        if($items->req_yn=='Y') if($items->$item > $home[$item]) $home_rank++;
                    endforeach;
                endif;
                if($away['req']=='N'): $away_rank=''; endif;
                if($home['req']=='N'): $home_rank=''; endif;
            elseif($item=='wpct'):
                foreach($data as $items):
                    if($items->req_yn=='Y') if($items->$item > $away[$item]) $away_rank++;
                    if($items->req_yn=='Y') if($items->$item > $home[$item]) $home_rank++;
                endforeach;
            else:
                foreach($data as $items):
                    if($items->$item > $away[$item]): $away_rank++; endif;
                    if($items->$item > $home[$item]): $home_rank++; endif;
                endforeach;
            endif;

            $result['g']=count($data);
            $result['away_'.$item]=$away_rank;
            $result['home_'.$item]=$home_rank;
        endforeach;

        return $result;
    }

    function get_mlb_pitcher_vs_team($player_id, $opponent){
        $this->db->select('team_no');
        $opponent_id=$this->db->get_where('MLB_teams', array('name'=>$opponent))->row()->team_no;

        $result=$this->db->query('SELECT * FROM MLB_pitcher_vs_team_by_day WHERE player_id='.$player_id.' AND opponent_id='.$opponent_id)->row();

        if(sizeof($result)==1):
            $result->g=sizeof($result);
            return $result;
//        else:

        endif;
    }

    function insert_update($table, $data, $where){
        $beforeData=$this->db->get_where($table, $where)->row();

        $this->db->set('insert_dt', 'NOW()', false);
        if(sizeof($beforeData)==0): $this->db->insert($table, $data);
        else:
            $this->db->where('id', $beforeData->id);
            $this->db->update($table, $data);
        endif;
    }
}