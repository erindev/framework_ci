<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Controller

class Company extends CI_Controller {
	
	//중복되는 코드를 설정
	function __construct(){
		parent::__construct();
		
//		$this->load->database();
//		$this->load->model('topic_model');
//		log_message('debug','topic 초기화');
	}
	
	function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
}



?>