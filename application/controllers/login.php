<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('diary_model');
		$this->load->model('bang_model');
	}	


	public function authAllowed() {
		$slug =  $_POST['id'];
	 	$rst = $this->bang_model->authAllowed($slug);
		echo json_encode($rst);
	}

	public function r()
	{
		$args['title'] = "会员登录";
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('login.php',array( 
			  'args' => $args
		));

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */