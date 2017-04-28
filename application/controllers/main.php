<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$this->load->view("head_up");
		$this->load->view("head_main");
		$this->load->view("index");
		$this->load->view("footer");
		$this->load->view("footer_down");
		//echo '</body></html>'; 
	}
	
	function main(){
		$this->load->view("main");
	}
	
}