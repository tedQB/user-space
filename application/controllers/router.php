<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class router extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}	

	public function redirect($slug)
	{
		if($slug == "diary"){ 
			redirect('http://www.jiese360.cn/diaryIntro/diary/recList');
		}else if($slug == "voice"){ 
			redirect('http://m.ximalaya.com/weizhubo/54070870/album/4664351');
		}else if($slug == "checkIn"){ 
			redirect('http://wx.wsq.qq.com/189065315');
		}else if($slug == "intro"){ 
			redirect('http://www.jiese360.cn/%E6%9C%8D%E5%8A%A1%E4%BB%8B%E7%BB%8D/');
		}else if($slug == "comment"){ 
			redirect('http://mp.weixin.qq.com/s?__biz=MjM5ODMyMTI2MA==&mid=2663183485&idx=1&sn=ca2944a188bee2517c3371e9d31eeea3#rd');
		}else if($slug == "buy"){ 
			redirect('http://www.jiese360.cn/%E5%A6%82%E4%BD%95%E5%8A%A0%E5%85%A5%E4%BC%9A%E5%91%98%E6%9C%8D%E5%8A%A1/');
		}else if($slug == "rank"){ 
			redirect('http://www.jiese360.cn/rank/index');
		}else if($slug == "login"){ 
			redirect('http://www.jiese360.cn/user/login/r');
		}else if($slug == "index"){ 
			redirect('http://www.jiese360.cn');
		}
	/* 
	else if($slug == "intro"){ 
		redirect('http://mp.weixin.qq.com/s?__biz=MjM5ODMyMTI2MA==&mid=10000194&idx=1&sn=12d4e637d78058f5cccc2b69c06c50ec&scene=18#rd');
	}else if($slug == "comment"){ 
		redirect('http://mp.weixin.qq.com/s?__biz=MjM5ODMyMTI2MA==&mid=2663183485&idx=1&sn=ca2944a188bee2517c3371e9d31eeea3#rd');
	}else if($slug == "buy"){ 
		redirect('http://wd.koudai.com/?userid=160244745');	
	}

	*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */