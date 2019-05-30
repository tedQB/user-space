<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$args['title'] = "我的会员信息";
		$args['slug'] = $slug;
		$args['current'] = 3;
		$args['jieseInfo'] = $this->bang_model->jieseInfo($slug);
		$args['vipInfo'] = $this->bang_model->vipInfo($slug);
		$args['rankInfo'] = $this->bang_model->rankInfo($slug);

		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('member',array( 
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