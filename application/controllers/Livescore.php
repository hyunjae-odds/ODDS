<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Livescore extends MY_Controller{
	function __construct(){
		parent::__construct();
        date_default_timezone_set('Asia/Seoul');
        $this->load->model('/livescore/livescore_model');
	}
	
	function baseball(){
		$this->load->view("/livescore/head_up");
		$this->load->view("/livescore/head");

		/*args*/
        $date=($this->input->get('date')==null)? date('Y-m-d') : $this->input->get('date');
        $selector=($this->input->get('selector')==null)? 'all': $this->input->get('selector');
        $checked=($this->input->get('checked')==null)? '': $this->input->get('checked');
        $top=($this->input->get('top')==null)? '': $this->input->get('top');

        /*schedule*/
        $schedule=array();
        if($selector=='check'): foreach(explode(' ', $checked) as $item) array_push($schedule, $this->livescore_model->get_where_row_from_mining('schedule', array('no'=>$item)));
        else: $schedule=$this->livescore_model->get_schedule_by_date($date, $selector); endif;
        /*schedule > top*/
        if($top!=''):
            $no=''; $it='';
            foreach($schedule as $key=>$item) if($item->no==$top): $no=$key; $it=$schedule[$key]; endif;
            unset($schedule[$no]); array_unshift($schedule, $it);
        endif;
        $score_board=$this->get_schedule($schedule, $selector);

		$this->load->view('/livescore/baseball', array('date'=>$date,'schedule'=>$schedule,'score_board'=>$score_board,'selector'=>$selector,'checked'=>$checked));
		$this->load->view("footer");
		$this->load->view("/livescore/footer_down");
	}
	
	function soccer(){
		$this->load->view("/livescore/head_up");
		$this->load->view("/livescore/head");
		$this->load->view('/livescore/soccer');
		$this->load->view("footer");
		$this->load->view("/livescore/footer_down");
	}

	function ratchet(){
	    $this->load->view('/livescore/ratchet');
    }

	/*------------------------------------------COMMON FUNC------------------------------------------*/

	function get_schedule($schedule, $selector){
        $result=array();
        foreach($schedule as $item):
            $score_board=$this->livescore_model->get_mining_score_board(date('Y-m-d', strtotime($item->game_time)), $item->away_name, $item->home_name);

            if($selector=='all' && $score_board['status']!='rain') array_push($result, $score_board);
            elseif($selector=='live' && $score_board['status']=='live') array_push($result, $score_board);
            elseif($selector=='set' && $score_board['status']=='set') array_push($result, $score_board);
            elseif($selector=='check' && $score_board['status']=='all') array_push($result, $score_board);
            elseif($selector=='check' && $score_board['status']=='live') array_push($result, $score_board);
            elseif($selector=='check' && $score_board['status']=='set') array_push($result, $score_board);
        endforeach;

        return $result;
    }
}