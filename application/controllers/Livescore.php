<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livescore extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function baseball(){
		$this->load->view("/livescore/head_up");
		$this->load->view("head");
		$this->load->view('/livescore/baseball');
		$this->load->view("footer");
		$this->load->view("/livescore/footer_down");
	}
	
	function soccer(){
		$this->load->view("/livescore/head_up");
		$this->load->view("head");
		$this->load->view('/livescore/soccer');
		$this->load->view("footer");
		$this->load->view("/livescore/footer_down");
	}
}