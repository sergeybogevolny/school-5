<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctl_main extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

		//index page
	public function index(){
		$data['title'] = "school";
		$this->load->view('index',$data);
	}

	
	public function register(){
		$data['title'] = "ฝ่ายทะบียน";
		$this->load->view('admin/index',$data);
	}

	//เพิ่มข้อมูลนักเรียน
	public function student_info(){
		$data['title'] = "ข้อมูลนักเรียน";
		$this->load->view('admin/student_info',$data);
	}
}
?>