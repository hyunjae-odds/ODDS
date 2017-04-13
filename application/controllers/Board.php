<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('/board/board_model');
	}

	function index(){
		$this->load->view("/board/head_");
		$sub = "";
		if($this->input->get("sub")!=""){
			$board = $this->board_model->sub_list($this->input->get("sub"));
			$sub = $this->input->get("sub");
		} else {
			$board = $this->board_model->list_();
			$sub = "00";
		}
		$this->load->helper(array('url', 'HTML'));
		$this->load->view('/board/main', array('board'=>$board, 'sub'=>$sub));
		$this->load->view("/board/footer_");
	}
	
	function read($id, $sub){
		$this->load->view("/board/head_");
		$board_read = $this->session->userdata('board_read');
		$board_cnt_ok = 0;
		
		$board = $this->board_model->get($id);
		$board_re = $this->board_model->get_re($id);
		
		$cnt_list_dummy = explode(";",$board_read);
		for($i=0;$i<sizeof($cnt_list_dummy);$i++){
			if($cnt_list_dummy[$i]==$id){
				$board_cnt_ok=1;
				break;
			}
		}
		if($board_cnt_ok==0){
			if($board->write_id!=$this->session->userdata('email')){
				$this->board_model->count($id);
				$board_read.=$id.";";
				unset($_SESSION['board_read']);
				$this->session->set_userdata('board_read', $board_read);
			}
		}
		$board = $this->board_model->get($id);

		$this->load->helper(array('url', 'HTML'));
		$this->load->view('/board/read', array('board'=>$board, 'board_re'=>$board_re, 'board_read'=>$board_read, 'sub'=>$sub));
		$this->load->view("/board/footer_");
	}

	function add($sub){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('sub', '게시판 구분', 'required');
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('description', '본문', 'required');
		$this->load->view("head_");
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('common_code_model');
			$board_code = $this->common_code_model->gets('board_code');

			$this->load->view("/board/add", array('board_code'=>$board_code, 'sub'=>$sub));

		}else{
			$board_id = $this->board_model->add($this->input->post('sub'),$this->input->post('title'),$this->input->post('description'),$this->session->userdata('email'));
			$this->load->helper('url');
			redirect('/board/read/'.$board_id.'/'.$sub, 'refresh');
		}
		$this->load->view("/board/footer_");
	}
	
	function upload_receive_from_ck(){
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './public/board';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '1000';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '10240';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '7680';
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload("upload"))
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('upload_form', $error);
			//   		echo $this->upload->display_errors();
			echo "<script>alert('업로드에 실패 하였습니다. ".$this->upload->display_errors('','')."');</script>";
		}else{
			$CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$url = '/ODDS/public/board/'.$filename;
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', '전송에 성공 했습니다.')</script>";
	
		}
	}
	
	function upload_receive(){
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './public/board';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '1000';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '10240';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '7680';
		$this->load->library('upload', $config);
		 
		if ( ! $this->upload->do_upload("user_upload_file"))
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('upload_form', $error);
			 
			echo $this->upload->display_errors();
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('upload_success', $data);
			echo "성공";
			var_dump($data);
		}
	}
	
	function upload_form(){
		$this->_head();
		$this->load->view('/board/upload_form');
		$this->_footer();
	}
	
	function edit($id){
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('sub', '게시판 구분', 'required');
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('description', '본문', 'required');
		$this->load->view("/board/head_");
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->model('common_code_model');
			$board_code = $this->common_code_model->gets('board_code');
			$board = $this->board_model->get($id);
			$board_re = $this->board_model->get_re($id);
			$this->load->view('/board/edit', array('board_code'=>$board_code, 'board'=>$board, 'id' => $id));
		}else{
			$board_id = $this->board_model->edit($this->input->post('sub'),$this->input->post('title'),$this->input->post('description'),$this->input->post('id'));
			$this->load->helper('url');
			redirect('/board/read/'.$board_id.'/00', 'refresh');
		}
		$this->load->view("/board/footer_");
	}
	
	function delete($id){
		//작성자 ID 비교
		$this->board_model->delete($id);
		$this->load->helper('url');
		redirect('/board/ ', 'refresh');
	}
	
	function re_add(){
 		$re_id = $this->board_model->re_add($this->session->userdata('email'), $this->input->post("board_id", TRUE), $this->input->post("description", TRUE));
 		echo "답글 작성이 완료 되었습니다.";
	}
	
	function re_edit(){
		//user_id:user_id, board_id:board_id, description:description},
		
		$re_id = $this->board_model->re_edit($this->input->post("board_id", TRUE),$this->input->post("description", TRUE));
		echo "답글 수정이 완료 되었습니다.";
	}
	
	function re_delete(){
		$re_id = $this->board_model->re_delete($this->input->post("id", TRUE));
		echo "답글 삭제가 완료 되었습니다.";
	}
	

	function good_bad(){
		$this->load->model('/board/board_choice_model');
 		$choice_num = $this->board_choice_model->choice_quest($this->input->post("board_id", TRUE), $this->session->userdata('email'));
 		$aa=(int)$choice_num->aa;
 		
 		if((int)$aa<1){
 			if($this->input->post("user_id", TRUE)!=$this->session->userdata('email')){
				$good_bad = $this->board_choice_model->choice_add($this->input->post("board_id", TRUE), $this->session->userdata('email'));
				$this->board_model->good_bad($this->input->post("board_id", TRUE), $this->input->post("choice", TRUE));
				if($this->input->post("choice", TRUE)=='good') echo "찬성 투표 하였습니다.";
				else echo "반대 투표 하였습니다.";
 			}else echo "본인 글은 투표 할 수 없습니다.";
 		}else echo "이미 투표 하였습니다.";
	}
	
	function re_good_bad(){
		//공통 코드에 리플 갯수 읽어 오기
		$this->load->model('common_code_model');
 		$board_re_num = $this->common_code_model->get('board_re_num');
 		
 		//리플 테이블에 답글에 대한 리플 갯수 구하기
 		$this->load->model('/board/board_choice_model');
 		$aa = $this->board_choice_model->choice_re_quest1($this->input->post("board_id", TRUE), $this->session->userdata('email'));
		
 		if((int)$aa->aa <(int)$board_re_num->code_value){
 			if($this->input->post("user_id", TRUE)!=$this->session->userdata('email')){
	 			$aa = $this->board_choice_model->choice_re_quest2($this->input->post("re_id", TRUE), $this->session->userdata('email'));
	 			if((int)$aa->aa<1){
					$this->board_choice_model->choice_re_add($this->input->post("board_id", TRUE), $this->input->post("re_id", TRUE), $this->session->userdata('email'));
					$this->board_model->re_good_bad($this->input->post("board_id", TRUE), $this->input->post("choice", TRUE), $this->input->post("re_id", TRUE));
					if($this->input->post("choice", TRUE)=='good') echo "찬성 투표 하였습니다.";
					else echo "반대 투표 하였습니다.";
	 			}else echo "이미 투표 하였습니다.";
 			}else echo "본인 답글은 투표 할 수 없습니다.";
 		}else{
 			$aa = $board_re_num->code_value;
 			echo "답글 투표 제한 건수(".$aa.")를 초과 하였습니다.";
 		}
	}

}