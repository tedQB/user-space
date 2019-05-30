<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class diary extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('diary_model');
		$this->load->model('bang_model');
	}	

	public function r($slug)
	{

		if($this->bang_model->allowed($slug)){ 
			redirect(base_url('verify/allowed').'/'.$slug);
		}
		$args['title'] = "我的日记";
		$args['slug'] = $slug;
		$args['current'] = 2;

		
		$args['getRecentWork'] = $this->diary_model->getRecentWork($slug);
		$args['declaration'] = $this->diary_model->getDeclaration($slug);
		$args['getResultCount'] = $this->diary_model->getResultCount($slug);
		$args['$slug'] = $slug;
	
		$this->load->view('head',array( 
			  'args' => $args
		));
		$this->load->view('diary',array( 
			  'args' => $args
		));
        $this->load->view('footer',array( 
			  'args' => $args
		));


	}	

	public function getList () {
		$currentPage =  $_POST['cur_page'];
		$slug = $_POST['slug'];
		$rst = $this->diary_model->getList($slug,$currentPage);			
		//header('Content-Type: application/json');
		
		echo json_encode($rst);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */