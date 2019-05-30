<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('bang_model');
	}	

	public function index($slug)
	{
		if($this->bang_model->allowed($slug)){ 
			redirect(base_url('verify/allowed').'/'.$slug);
		}
		if($this->bang_model->auth($slug)){ 
			redirect(base_url('verify/expire').'/'.$slug);
		}				
		$args['title'] = "我的状态";
		$args['slug'] = $slug;
		$args['current'] = 1;
		$args['thisWeekdata'] = json_encode($this->user_model->getWeekData($slug));	
		//var_dump($args['thisWeekdata']);
		//$args = $this->user_model->test();
		$args['thisMonthdata'] = json_encode($this->user_model->getMonthData($slug));	
		$args['getMonthDays'] = $this->user_model->getMonthDays("this month","d");

		$args['userType'] = $this->bang_model->getUserType($slug);
		$args['getYearData'] = json_encode($this->user_model->getYearData($slug));
		$args['getSateData'] = json_encode($this->user_model->getSateData($slug));

		$args['zikongnengli'] = $this->user_model->zikongnengli($slug);
		$args['dikangnengliang'] = $this->user_model->dikangnengliang($slug);
		$args['jiejuewenti'] = $this->user_model->jiejuewenti($slug);
		$args['sikaozongjie'] = $this->user_model->sikaozongjie($slug);
		$args['yundonghuifu'] = $this->user_model->yundonghuifu($slug);
		$args['zhengnengliang'] = $this->user_model->zhengnengliang($slug);

		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('home',array( 
			  'args' => $args
		));
        $this->load->view('footer',array( 
			  'args' => $args
		));
	}	
	public function r($slug)
	{


		$args=$this->user_model->getWeekData($slug);	

		//$args = $this->user_model->test();
		
		//var_dump($args);

		$this->load->view('home');
		
	}	

	
	public function test(){ 

		$this->load->view('test');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */