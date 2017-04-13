<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
//		if(!$this->input->is_cli_request())
		$this->load->helper('url');
		$this->load->library('session');

		

	}
	
}