<?php
class Common_code_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function gets($fild_value){
		return $this->db->query("select code_value, name_value from common_code where fild_value='".$fild_value."' order by code_value asc")->result();
	}
	
	function get($fild_value){
		return $this->db->query("select code_value, name_value from common_code where fild_value='".$fild_value."' order by code_value asc")->row();
	}
}