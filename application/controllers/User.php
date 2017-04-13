<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
	{
		parent::__construct();
//		$this->load->model('/board/board_model');
	}
	
	function register(){
		$this->load->library('form_validation');
		$this->load->view("head_");
		$this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('nickname', '닉네임', 'required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
		$this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("/user/register");
		}else{
			$hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
				
			$this->load->model('/user/user_model');
			$this->user_model->add(array(
					'email'=>$this->input->post('email'),
					'nickname'=>$this->input->post('nickname'),
					'password'=>$hash
			));
				
			$this->session->set_flashdata('message', '회원가입에 성공했습니다.');
			$this->load->helper('url');
			redirect('/');
		}
		$this->load->view("footer_");
	}
	
	function login(){
		$this->load->view('head_');
		$this->load->helper('url');
		$this->load->view('/user/login');
		$this->load->view('footer_');
	}
	
	function authentication(){
		$this->load->model('/user/user_model');
		$user = $this->user_model->getByEmail(array('email'=>$this->input->post('email')));
		if(!function_exists('password_hash')){
			$this->load->helper('password');
		}
		$board_read="";
		if($this->input->post('email') == $user->email && password_verify($this->input->post('password'), $user->password)){
			$newdata = array(
				'is_login' => true,
				'email' => $user->email,
				'nickname' => $user->nickname,
				'board_read' => $board_read
			);
			$this->session->set_userdata($newdata);
			$this->load->helper('url');
			$returnURL = $this->input->get('returnURL');
			if($returnURL==false) $returnURL = '/';
			redirect($returnURL);
		} else{
			$hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$this->session->set_flashdata('message', '로그인에 실패 하였습니다.');
			$this->load->helper('url');
			redirect("/auth/login");
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->load->helper('url');
		redirect("/");
	}
}