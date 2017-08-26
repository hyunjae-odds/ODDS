<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Odds extends MY_Controller{
    function __construct(){
        parent::__construct();
    }

    function main(){
        $this->load->view("/game/head_up");
        $this->load->view("/game/head");
        $this->load->view('/game/game_main');
        $this->load->view("footer");
    }

}