<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Controller

class Company extends CI_Controller {
	
	//중복되는 코드를 설정
	function __construct(){
		parent::__construct();
		$this -> load -> model('auth_m');
		$this -> load -> helper('form');
//		$this->load->database();
//		$this->load->model('topic_model');
//		log_message('debug','topic 초기화');
	}
	
//	public function index() {
//        $this -> login();
//    }
	

	function login_form(){
		$this->load->view('login_css');
		$this->load->view('login');
		$this->load->view('footer');
	}
	
	function login(){
		//echo "succes3s";
			
		$this->load->helper(array('form', 'url'));
        $this -> load -> library('form_validation');
 
        //$this -> load -> helper('alert');
 
        $this -> form_validation -> set_rules('username', '아이디', 'required|alpha_numeric');
        $this -> form_validation -> set_rules('password', '비밀번호', 'required');
 
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 
        if ($this -> form_validation -> run() == TRUE) {

            $auth_data = array(
                'username' => $this -> input -> post('username', TRUE),
                'password' => $this -> input -> post('password', TRUE)
            );
            
            $result = $this -> auth_m -> login($auth_data);
            
            if ($result) {

                $newdata = array(
                    'username' => $result -> userid,
                    'email' => $result -> useremail,
                    'logged_in' => TRUE
                );
                
                $this -> session -> set_userdata($newdata);
                
                echo "<script>alert('로그인 되었습니다.');
				document.location.href='/Portfolio_server/framework/index.php/company/dashboard';
				</script>";
				
                exit;
            } else {

				
               echo "<script> alert('아이디나 비밀번호를 확인해 주세요.');
			   history.go(-1);</script>";
                exit;
            }
        } else {
			echo "<script>history.go(-1);</script>";
			
        }
	}
 
    public function logout() {
       // $this -> load -> helper('alert');
        
        $this -> session -> sess_destroy();
        
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        echo "<script> alert('로그아웃 되었습니다.'); document.location.href='/Portfolio_server/framework/index.php/company/login_form'; </script>";
        exit;
        
    }
	
	function dashboard(){
		$this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	
	function member(){
		$this->load->view('header');
		$this->load->view('member');
		$this->load->view('footer');
	}
	
	function add(){
		$this->load->view('header');
		$this->load->view('add');
		$this->load->view('footer');
	}
	
	function calendar(){
		$this->load->view('header');
		$this->load->view('calendar');
		$this->load->view('footer');
	}
	
	function paycheck(){
		$this->load->view('header');
		$this->load->view('paycheck');
		$this->load->view('footer');
	}
	
	function photo(){
		$this->load->view('header');
		$this->load->view('photo');
		$this->load->view('footer');
	}
	
	function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	function reserve(){
		$this->load->view('header');
		$this->load->view('reserve');
		$this->load->view('footer');
	}
}



?>