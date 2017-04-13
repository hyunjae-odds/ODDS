<?php
class Board_choice_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function choice_add($board_id, $user_id){
		$this->db->insert('board_choice', array(
				'board_id'=>$board_id,
				'user_id'=>$user_id,
		));
		return $this->db->insert_id();
	}
	
	function choice_quest($board_id, $user_id){
		return $this->db->query("SELECT count(*) as aa FROM `board_choice` WHERE board_id=".(int)$board_id." and user_id='".$user_id."' and board_re_id is null")->row();
	}
	
	function choice_re_add($board_id, $board_re_id, $user_id){
		$this->db->insert('board_choice', array(
				'board_id'=>$board_id,
				'board_re_id'=>$board_re_id,
				'user_id'=>$user_id,
		));
		return $this->db->insert_id();
	}
	
	function choice_re_quest1($board_id, $user_id){
		return $this->db->query("SELECT count(*) as aa FROM `board_choice` WHERE board_id=".$board_id." and user_id='".$user_id."' and board_re_id is not null")->row();
	}

	function choice_re_quest2($board_re_id, $user_id){
		return $this->db->query("SELECT count(*) as aa FROM `board_choice` WHERE board_re_id=".$board_re_id." and user_id='".$user_id."'")->row();
	}
}