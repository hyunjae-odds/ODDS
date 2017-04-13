<?php
class Board_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	function get($id){
		return $this->db->query("SELECT b.id, c.name_value as sub, c.code_value as sub_code, b.title, b.description, b.created, b.write_id, u.nickname, b.read_num, b.good, b.bad, 
				(select count(r.id) from board_re as r where r.board_no = b.id and r.delete_yn='N') as count_r 
				FROM board as b, common_code as c, user as u 
				where b.sub = c.code_value and c.fild_value = 'board_code' and b.delete_yn = 'N' and u.email = b.write_id and b.id=".$id)->row();
	}

	function count($id){
		//조회수 1 증가
		$aa = $this->db->query("select read_num from board where id=".$id)->row();
		$num= $aa->read_num;
		$num=$num+1;
		$data = array('read_num'=>$num);
		$where = "id=".$id;
		$this->db->update('board', $data, $where);
	}
	
	function get_re($id){
		return $this->db->query("select br.*, u.nickname from board_re as br, user as u where br.delete_yn='N' and u.email=br.write_id and br.board_no=".$id." order by br.id asc")->result();
	}
	
	function list_(){
		return $this->db->query("
				SELECT  b.id, c.name_value as sub, c.code_value as sub_code, b.title, b.created, b.write_id, u.nickname, b.read_num, b.good, b.bad, 
					(select count(r.id) from board_re as r where r.board_no = b.id and r.delete_yn='N') as count_r 
				FROM board as b, common_code as c, user as u
				where b.sub = c.code_value and c.fild_value = 'board_code' and b.delete_yn = 'N' and b.write_id=u.email  
				order by b.id desc")->result();
	}
	
	function sub_list($sub){
		return $this->db->query("
				SELECT  b.id, c.name_value as sub, c.code_value as sub_code, b.title, b.created, b.write_id, u.nickname, b.read_num, b.good, b.bad,
					(select count(r.id) from board_re as r where r.board_no = b.id and r.delete_yn='N') as count_r
				FROM board as b, common_code as c, user as u 
				where b.sub = c.code_value and c.fild_value = 'board_code' and b.delete_yn = 'N' and u.email = b.write_id and sub='".$sub.
				"' order by b.id desc")->result();
	}
	
	function good_bad($id, $choice){
		//조회수 1 증가
		if($choice=="good"){
			$aa = $this->db->query("select good from board where id=".$id)->row();
			$num= $aa->good;
			$num=$num+1;
			$data = array('good'=>$num);
			$where = "id=".$id;
			$this->db->update('board', $data, $where);
		}else{
			$aa = $this->db->query("select bad from board where id=".$id)->row();
			$num= $aa->bad;
			$num=$num+1;
			$data = array('bad'=>$num);
			$where = "id=".$id;
			$this->db->update('board', $data, $where);
		}
	}
	
	function re_good_bad($id, $choice, $re_id){
		//조회수 1 증가
		if($choice=="good"){
			$aa = $this->db->query("select good from board_re where id=".$re_id)->row();
			$num= $aa->good;
			$num=$num+1;
			$data = array('good'=>$num);
			$where = "id=".$re_id;
			$this->db->update('board_re', $data, $where);
		}else{
			$aa = $this->db->query("select bad from board_re where id=".$re_id)->row();
			$num= $aa->bad;
			$num=$num+1;
			$data = array('bad'=>$num);
			$where = "id=".$re_id;
			$this->db->update('board_re', $data, $where);
		}
	}
	
	function add($sub, $title, $description, $user_id){
		$this->db->set('created','NOW()', false);
		$this->db->insert('board', array(
				'sub'=>$sub,
				'title'=>$title,
				'description'=>$description,
				'write_id'=>$user_id,
		));
		return $this->db->insert_id();
	}
	
	function edit($sub, $title, $description, $id){
		$data = array('sub'=>$sub,
				'title'=>$title,
				'description'=>$description,);
		$where = "id=".$id;
		$this->db->set('created','NOW()', false);
		$this->db->update('board', $data, $where);
		return $id;
	}
	
	function delete($id){
		$data = array('delete_yn'=>'Y',);
		$where = "id=".$id;
		$this->db->set('created','NOW()', false);
		$this->db->update('board', $data, $where);
		return $id;
	}
	
	function re_add($user_id, $board_id, $description){
		//"user_id", TRUE),$this->input->post("board_id", TRUE),$this->input->post("description"
		$this->db->set('created','NOW()', false);
		$this->db->insert('board_re', array(
				'board_no'=>$board_id,
				'description'=>$description,
				'write_id'=>$user_id,
		));
	}
	
// 	$re_id = $this->board_model->re_edit($this->input->post("board_id", TRUE),$this->input->post("description", TRUE));
// 	$re_id = $this->board_model->re_edit($this->input->post("board_id", TRUE));
		
	function re_edit($board_id, $description){
		$data = array('description'=>$description,);
		$where = "id=".$board_id;
		$this->db->set('created','NOW()', false);
		$this->db->update('board_re', $data, $where);
	}
	
	function re_delete($id){
		$data = array('delete_yn'=>'Y',);
		$where = "id=".$id;
		$this->db->set('created','NOW()', false);
		$this->db->update('board_re', $data, $where);
	}
	
	function board_user($board_id, $user_id){
		return $this->db->query("select count(*) as aa from board where id=".$board_id." and write_id='".$user_id."'")->row();
	}
	
	function re_board_user($board_id, $user_id){
		return $this->db->query("select count(*) as aa from re_board where id=".$board_id." and write_id='".$user_id."'")->row();
	}
	
	function some_board($board_id){
		return $this->db->query("select title, date_format(created, '%m') as created1, date_format(created, '%d') as created2 from board where sub='".$board_id."' order by id*1 desc limit 0,10")->result();
	}
	
}
