<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verify extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bang_model');

	}	

	public function expire($slug)
	{
		$args['title'] = "到期提示";
		$args['slug'] = $slug;
		$args['current'] = 0;
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('expire',array( 
			  'args' => $args
		));
        $this->load->view('footer',array( 
			  'args' => $args
		));
	}	

	public function allowed($slug)
	{
		$args['title'] = "alienpage";
		$this->load->view('allowed',array( 
			  'args' => $args
		));

	}		

	public function test(){ 

		$this->load->view('test');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */