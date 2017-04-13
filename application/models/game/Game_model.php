<?php
class Game_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function get_result($league_id, $year, $month){
		if($month==12){
			return $this->db->query("select * ,(select name from ex_team where ex_schedule.home_team=ex_team.team_id), (select name from ex_team where ex_schedule.visit_team=ex_team.team_id) from ex_schedule where league_no='".$league_id."' and date > '".$year."-".$month."-01 00:00:00' and date < '".($year+1)."-01-01 00:00:00' order by date")->row();
		}else{
			return $this->db->query("select * ,(select name from ex_team where ex_schedule.home_team=ex_team.team_id), (select name from ex_team where ex_schedule.visit_team=ex_team.team_id) from ex_schedule where league_no='".$league_id."' and date > '".$year."-".$month."-01 00:00:00' and date < '".$year."-".($month+1)."-01 00:00:00' order by date")->row();
		}
		
	}
	
	function get_stat($league_id){
		return $this->db->query("select home_team, home_name, visit_team, visit_name, home_score, visit_score, home_red, visit_red, date from ex_league_history where league_id='".$league_id."' and home_score!='VS' order by date desc")->result();
	}
	
	
	function get_schedule($league_id){
		return $this->db->query("select es.game_no, es.home_team, (select name from ex_team as et where et.team_id= es.home_team) as home_team_name, es.visit_team, (select name from ex_team as et where et.team_id= es.visit_team) as visit_team_name, 
es.date from ex_schedule as es where league_no='".$league_id."' and es.date>'2016-11-30 23:59:00'")->result();
	}

	function get_handicap($game_no){
		return $this->db->query("select * from ex_handicap where game_no='".$game_no."' order by date desc")->result();
	}

	function get_overunder($game_no){
		return $this->db->query("select * from ex_overunder where game_no='".$game_no."' order by date desc")->result();
	}

	function get_winlose($game_no){
		return $this->db->query("select * from ex_winlose where game_no='".$game_no."' order by date desc")->result();
	}
	
	function get_league_info($league_no){
		return $this->db->query("select l.name as league_name, c.name as country_name from ex_league as l, ex_country as c where l.league_id='".$league_no."' and l.country_no=c.country_id")->row();
	}

	function get_last_game_num($league_no){
		return $this->db->query("select max(run_game*1) as run_game from ex_league_history where home_score!='VS' and league_id='".$league_no."'")->row();
	}
	
	function get_last_game_num1($league_no){
		return $this->db->query("select min(run_game*1) as run_game from ex_league_history where home_score='VS' and league_id='".$league_no."'")->row();
	}
	
	function get_game2($league_no, $a){
		return $this->db->query("select date_format(date, '%m.%d | %H:%i') as date, run_game, home_name, visit_name, home_score, visit_score from ex_league_history where home_score!='VS' and league_id='".$league_no."' and run_game ='".$a."' order by date asc")->result();
	}
	
	function get_game21($league_no, $a, $b){
		return $this->db->query("select date_format(date, '%m.%d | %H:%i') as date, run_game, home_name, visit_name from ex_league_history where home_score='VS' and league_id='".$league_no."' and run_game in ('".$a."', '".$b."') order by date asc")->result();
	}
	

// 	select * from ex_handicap where game_no='1583671' order by date desc
// 	select * from ex_handicaps where game_no='1583671' order by date desc
	
// 	select * from ex_overunder where game_no='1583671' order by date desc
// 	select * from ex_overunders where game_no='1583671' order by date desc
	
// 	select * from ex_winlose where game_no='1583671' order by date desc
// 	select * from ex_winloses where game_no='1583671' order by date desc
// 	select * from ex_overunder where game_no='1583671' order by date desc
	
	
}