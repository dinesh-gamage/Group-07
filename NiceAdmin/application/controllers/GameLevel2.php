<?php 

header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, OPTIONS");
class GameLevel2 extends CI_Controller
{
	
	public function index(){
		$this->load->view('gameLevel2');
	}

}