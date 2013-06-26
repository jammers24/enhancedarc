<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Barangay extends CI_Controller{
	

	public function index(){
		$this->section();
		
	}
	
	public function section(){
	
		$section = ($this->uri->segment(4)) ? $this->uri->segment(4) : '';
		$id = ($this->uri->segment(5)) ? $this->uri->segment(5) : '';
	
		switch($section){
			case 'viewbarangay':
				$this->_viewbarangay();
				break;
			case 'addbarangay':
				$this->_addbarangay();
				break;
			default:
				$this->_viewbarangay();
		}
	}
	
	
	private function _viewbarangay($param = ''){
		$data['main_content'] = 'master/barangay/view_barangay';
		$this->load->view('includes/template', $data);
	}
	
	private function _addbarangay(){
		$data['main_content'] = 'master/barangay/add_barangay';
		$this->load->view('includes/template', $data);
	}
}