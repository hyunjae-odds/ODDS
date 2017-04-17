<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Baseball extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('curl');
		$this->load->model('/baseball/baseball_model');
	}

//	리그정보
	function league_info(){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");
		
		$total=$this->baseball_model->getLimit('kbo_team_total_2017');
		$offense=$this->baseball_model->get('kbo_team_offense_2017');
		$defence=$this->baseball_model->get('kbo_team_defence_2017');
		$schedule=$this->baseball_model->getScheduleAfter3Days();
		$plus_minus=$this->baseball_model->getTotalScore();
		$league_statistics=$this->baseball_model->getLeagueStatistics();
		
		$this->load->view("/baseball/league_info", array('total'=>$total, 'offense'=>$offense, 'defence'=>$defence,'schedule'=>$schedule,'plus_minus'=>$plus_minus,
														 'league_statistics'=>$league_statistics));
		$this->load->view("/baseball/footer");
	}

	/* 경기결과 */
	function result($select_year, $select_month){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");
		$this->load->view("/baseball/result", array('result'=>$this->baseball_model->getByMonth('kbo_result_'.$select_year, $select_month), 'select_year'=>$select_year, 'select_month'=>$select_month));
		$this->load->view("/baseball/footer");
	}

	function stats(){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");

        $total=$this->baseball_model->getLimit('kbo_team_total_2017');
        $offense=$this->baseball_model->get('kbo_team_offense_2017');
        $plus_minus=$this->baseball_model->getTotalScore();

		$this->load->view("/baseball/stats", array('total'=>$total, 'offense'=>$offense, 'plus_minus'=>$plus_minus));
		$this->load->view("/baseball/footer");
	}

	/* 팀 기록 */
	function team_record($select_year, $select_month, $offense_sort, $defence_sort){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");

//		소팅으로 페이지 새로고쳤을때 이전 스크롤위치로 이동
        if($this->input->get('scroll_top')!=null): $mouseTop=$this->input->get('scroll_top'); else: $mouseTop=0; endif;
        if($this->input->get('focus')!=null): $focus=$this->input->get('focus'); else: $focus=0; endif;
        if($this->input->get('bold_num')!=null): $boldNum=$this->input->get('bold_num'); else: $boldNum=0; endif;
//		sorting
        if($offense_sort!='all'):
            $offense=$this->baseball_model->getBySort('kbo_team_offense_2017', $offense_sort);
            $defence=$this->baseball_model->get('kbo_team_defence_2017');
        elseif($defence_sort!='all'):
            $offense=$this->baseball_model->get('kbo_team_offense_2017');
            $defence=$this->baseball_model->getBySort('kbo_team_defence_2017', $defence_sort);
        elseif($offense_sort=='all' && $defence_sort=='all'):
            $offense=$this->baseball_model->get('kbo_team_offense_2017');
            $defence=$this->baseball_model->get('kbo_team_defence_2017');
        endif;

        $total=$this->baseball_model->getLimit('kbo_team_total_2017');
        $plus_minus=$this->baseball_model->getTotalScore();

		$team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
		$team=array();

		if($this->baseball_model->getCountDistinctByMonth($select_month)==0): $team=0;
		else:
			foreach($team_array as $entries):
				$values=$this->baseball_model->getByTeam($entries, $select_month);
				foreach($values as $key=>$value):
					if($key==0) $team[$entries]=$value->rank;
					else $team[$entries].=';'.$value->rank;
				endforeach;
			endforeach;
		endif;
		$schedule=$this->baseball_model->get_schedule($select_month);

		$this->load->view("/baseball/team_record", array('select_year'=>$select_year,'select_month'=>$select_month,'offense'=>$offense,'defence'=>$defence,'focus'=>$focus,'bold_num'=>$boldNum,
														 'total'=>$total,'rank_month'=>$team,'schedule'=>$schedule,'plus_minus'=>$plus_minus, 'mouseTop'=>$mouseTop));
		$this->load->view("/baseball/footer");
	}

	function player_record(){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");

//		PAGINATION
		$per_page=20;
        $this->load->library('pagination');
        $config['base_url']='http://'.SERVER_HOST.'/baseball/player_record/';
        $config['total_rows']=$this->baseball_model->getNumRows('kbo_batterbasic_2017');
        $config['per_page']=$per_page;
        $config['prev_link']=FALSE;
        $config['next_link']=FALSE;
        $config['first_link']=FALSE;
        $config['last_link']=FALSE;

//      SORTING
        if($this->input->get('scroll_top')!=null): $mouseTop=$this->input->get('scroll_top'); else: $mouseTop=0; endif;
        if($this->input->get('focus')!=null): $focus=$this->input->get('focus'); else: $focus=0; endif;
        if($this->input->get('bold_num')!=null): $boldNum=$this->input->get('bold_num'); else: $boldNum=0; endif;

        if($this->input->get('pitcher_sort')!=null):
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            $batter=$this->baseball_model->getPagination('kbo_batterbasic_2017', $per_page, $offset);
            $pitcher=$this->baseball_model->getBySort('kbo_pitcherbasic_2017', $this->input->get('pitcher_sort'));
        elseif($this->input->get('batter_sort')!=null):
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            $batter=$this->baseball_model->getBySortPagination('kbo_batterbasic_2017', $this->input->get('batter_sort'), $per_page, $offset);
            $pitcher=$this->baseball_model->getPagination('kbo_pitcherbasic_2017', $per_page, 0);
        elseif($this->input->get('team')!=null):
            $team=$this->input->get('team');
            $batter=$this->baseball_model->sortingByTeam('kbo_batterbasic_2017', $team);
            $pitcher=$this->baseball_model->sortingByTeam('kbo_pitcherbasic_2017', $team);
        else:
            $this->pagination->initialize($config);
            if($this->uri->segment(3)!=null) $offset=$this->uri->segment(3); else $offset=0;
            $batter=$this->baseball_model->getPagination('kbo_batterbasic_2017', $per_page, $offset);
            $pitcher=$this->baseball_model->getPagination('kbo_pitcherbasic_2017', $per_page, 0);
        endif;

        $batter5=$this->baseball_model->getBatter5();
        $pitcher5=$this->baseball_model->getPitcher5();
        $runner5=$this->baseball_model->getRunner5('kbo_runnerbasic_2017');

        $this->load->helper('cookie');
        $this->input->set_cookie(array('name'=>'mouse_top','value'=>$mouseTop,'expire'=>'86500','domain'=>'odds.dev'));
        $this->input->set_cookie(array('name'=>'focus','value'=>$focus,'expire'=>'86500','domain'=>'odds.dev'));
        $this->input->set_cookie(array('name'=>'bold_num','value'=>$boldNum,'expire'=>'86500','domain'=>'odds.dev'));

        if($this->uri->segment(3)!=null):
            $mouseTop=$this->input->cookie('mouse_top');
            $focus=$this->input->cookie('focus');
            $boldNum=$this->input->cookie('bold_num');
        endif;

        $this->load->view("/baseball/player_record", array('batter'=>$batter, 'pitcher'=>$pitcher,'batter5'=>$batter5,'pitcher5'=>$pitcher5,
                          'runner5'=>$runner5,'mouseTop'=>$mouseTop, 'focus'=>$focus, 'bold_num'=>$boldNum));
		$this->load->view("/baseball/footer");
	}

	function score(){
		$this->load->view("/baseball/head_up");
		$this->load->view("/baseball/head");
		$this->load->view("/baseball/score");
		$this->load->view("/baseball/footer");
	}

	/* ---------------------------------------------------------- crawling ---------------------------------------------------------- */

	/* 경기결과 */
	function crawling_result(){
		$month_array=array('03','04','05','06','07','08','09');

		foreach($month_array as $month):
		$source=$this->curl->simple_get('http://www.koreabaseball.com/ws/Schedule.asmx/GetScheduleList?leId=1&srIdList=0%2C9&seasonId=2017&gameMonth='.$month.'&teamId=');
			$source=json_decode($source);
			$column=array('date', 'time', 'away', 'away_score', 'home', 'home_score', 'win_rate', 'draw_rate', 'lose_rate');

			$resultSet=array();
			foreach($source->rows as $entry):
				$array=array();
				foreach($entry->row as $key=>$entries):
					if($key==0 && $entries->Class=='day'):
						array_push($array, $entries->Text);
					elseif($key==0 && $entries->Class=='time'):
						array_push($array, $month);
						array_push($array, $entries->Text);
					endif;

					if($key==1 && $entries->Class=='time'):
						array_push($array, $entries->Text);
					elseif($key==1 && $entries->Class=='play'):
						$exp=explode('<span>vs</span>', $entries->Text);
						$exp1=explode('<em>', $exp[0]);
						$away=$exp1[0];
						$away_score=$exp1[1];
						$exp2=explode('</em>', $exp[1]);
						$home=$exp2[1];
						$home_score=$exp2[0];

						array_push($array, $away);
						array_push($array, $away_score);
						array_push($array, $home);
						array_push($array, $home_score);
						if(count($array)<10) array_push($array, '');
						if(count($array)<10) array_push($array, '');
						if(count($array)<10) array_push($array, '');
					endif;

					if($key==2 && $entries->Class=='play'):
						$exp=explode('<span>vs</span>', $entries->Text);
						$exp1=explode('<em>', $exp[0]);
						$away=$exp1[0];
						$away_score=$exp1[1];
						$exp2=explode('</em>', $exp[1]);
						$home=$exp2[1];
						$home_score=$exp2[0];

						array_push($array, $away);
						array_push($array, $away_score);
						array_push($array, $home);
						array_push($array, $home_score);

						if(count($array)<10) array_push($array, '');
						if(count($array)<10) array_push($array, '');
						if(count($array)<10) array_push($array, '');
					endif;
				endforeach;
				$arraySet=array_combine($column, $array);
				array_push($resultSet, $arraySet);
			endforeach;

			$this->baseball_model->insertByMonth('kbo_result_2017', $month, $resultSet);
		endforeach;
	}

	/* 팀 기록 */
	function insertTeamRecord(){
		/* 팀 종합기록 */
		$column_total=array('rank','team','win','lose','tie','win_rate','game_car','recent_game','win_count','home','away');
//		$source=$this->curl->simple_get('/application/views/baseball/crawling_target.php'); //과거내역 크롤링
        $source=$this->curl->simple_get('http://www.koreabaseball.com/TeamRank/TeamRank.aspx'); //현재내역 크롤링
		$team_total=$this->crawlingWithColumnList($source, $column_total);
		$resultSet=array();
		foreach($team_total as $entry):
			$result=array_splice($entry, 7);
			array_push($resultSet, $entry);
		endforeach;

		$exp=explode('<span id="cphContents_cphContents_cphContents_lblSearchDateTitle">', $source);
		$expp=explode('</span>',$exp[1]);
		$exppp=explode('(',$expp[0]);

		$this->baseball_model->insertWithRecentGame('kbo_team_total_2017', $resultSet, $this->baseball_model->getByScore(), $exppp[0]);

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

	function crawlingPlayerRecordBatter(){
//	    1페이지
        $column_total=array('rank','name','team','avg','g','pa','ab','r','h','second_b','third_b','hr','tb','rbi','sac','sf');
        $source1=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/HitterBasic/Basic1.aspx');
        $source3=$this->curl->simple_get('/application/views/baseball/hitterbasic_target1.php');
        $resultSet1=$this->crawlingWithColumnList($source1, $column_total);
        $resultSet3=$this->crawlingWithColumnList($source3, $column_total);

        $exp1=explode('</a></td>', $source1);
        $arr=array();
        foreach($exp1 as $key=>$item): $exp2=explode('">', $item); $arr[$key]=array_pop($exp2); endforeach;
        array_pop($arr);

//      2페이지
        $column2_total=array('rank','name','team','avg','bb','ibb','hbp','so','gdp','slg','obp','ops','mh','risp','phba');
        $source2=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/HitterBasic/Basic2.aspx');
        $source4=$this->curl->simple_get('/application/views/baseball/hitterbasic_target2.php');
        $resultSet2=$this->crawlingWithColumnList($source2, $column2_total);
        $resultSet4=$this->crawlingWithColumnList($source4, $column2_total);

        $exp3=explode('</a></td>', $source3);
        $arr2=array();
        foreach($exp3 as $key=>$item): $exp4=explode('">', $item); $arr2[$key]=array_pop($exp4); endforeach;
        array_pop($arr2);

//      이름 붙이기
        $merged=array();
        foreach($resultSet1 as $key=>$item): $merged[$key]=array_merge($item, $resultSet2[$key]); endforeach;
        for($i=0; $i<30; $i++): $merged[$i]['name']=$arr[$i]; endfor;
        $merged2=array();
        foreach($resultSet3 as $key=>$item): $merged2[$key]=array_merge($item, $resultSet4[$key]); endforeach;
        for($i=0; $i<30; $i++): $merged2[$i]['name']=$arr2[$i]; endfor;

        $resultSet=array_merge($merged, $merged2);
        $this->baseball_model->insertNoDelete('kbo_batterbasic_2017', $resultSet);
    }
    function crawlingPlayerRecordPitcher(){
        $column3_total=array('rank','name','team','era','g','w','l','sv','hld','wpct','ip','h','hr','bb','hbp','so','r','er','whip');
        $source5=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherBasic/Basic1.aspx');
        $resultSet5=$this->crawlingWithColumnList($source5, $column3_total);
        $column4_total=array('rank','name','team','era','cg','sho','qs','bsv','tbf','np','avg','second_b','third_b','sac','sf','ibb','wp','bk');
        $source6=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/PitcherBasic/Basic2.aspx');
        $resultSet6=$this->crawlingWithColumnList($source6, $column4_total);

        $exp5=explode('</a></td>', $source5);
        $arr3=array();
        foreach($exp5 as $key=>$item): $exp6=explode('">', $item); $arr3[$key]=array_pop($exp6); endforeach;
        array_pop($arr3);
        $exp6=explode('</a></td>', $source6);
        $arr4=array();
        foreach($exp6 as $key=>$item): $exp6=explode('">', $item); $arr4[$key]=array_pop($exp6); endforeach;
        array_pop($arr4);

        for($i=0; $i<30; $i++): $resultSet5[$i]['name']=$arr3[$i]; endfor;
        for($i=0; $i<30; $i++): $resultSet6[$i]['name']=$arr4[$i]; endfor;
        $merged3=array();
        foreach($resultSet5 as $key=>$item):
            $merged3[$key]=array_merge($item, $resultSet6[$key]);
        endforeach;

        $this->baseball_model->insertNoDelete('kbo_pitcherbasic_2017', $merged3);
    }function crawlingPlayerRecordRunner(){
        $column_total=array('rank','name','team','g','sba','sb','cs','sbp','oob','pko');
        $source=$this->curl->simple_get('http://www.koreabaseball.com/Record/Player/Runner/Basic.aspx');
        $resultSet=$this->crawlingWithColumnList($source, $column_total);

        $exp5=explode('</a></td>', $source);
        $arr3=array();
        foreach($exp5 as $key=>$item): $exp6=explode('">', $item); $arr3[$key]=array_pop($exp6); endforeach;
        array_pop($arr3);

        for($i=0; $i<30; $i++): $resultSet[$i]['name']=$arr3[$i]; endfor;

        $this->baseball_model->insertNoDelete('kbo_runnerbasic_2017', $resultSet);
    }
}