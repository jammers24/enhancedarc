<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	

	
	public function index(){
		$this->login_page();
	}
	
	public function login_page($param = ''){
		echo "login page";
// 		$data['uerror'] = $param;
// 		$data['main_content'] = 'userlogin/login_view';
// 		$this->load->view('includes/template_login', $data);
	}
	
}