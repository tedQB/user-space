<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class huibao extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('bang_model');
	}	

	public function r($slug)
	{
		
		if($this->bang_model->allowed($slug)){ 
			redirect(base_url('verify/allowed').'/'.$slug);
		}
		if($this->bang_model->auth($slug)){ 
			redirect(base_url('verify/expire').'/'.$slug);
		}
		$args['title'] = "每日汇报beta";
		$args['slug'] = $slug;
		$args['current'] = 4;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('huibao',array( 
			  'args' => $args
		));
        $this->load->view('footer',array( 
			  'args' => $args
		));

	}	

	public function test(){ 

		$this->load->view('test');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */