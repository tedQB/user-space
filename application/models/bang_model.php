<?php

/**
 * 首页model
 */
class Bang_model extends CI_Model {

    public function __construct($rules = array())
    {
		$this->load->database();		
    }

    public function test(){


    }

    public function auth($slug=FALSE){ 
    	$this->db->select('id');
    	$this->db->where('weixinName',$slug);
		$this->db->where('leftTime < 0');
		$query = $this->db->get('bang');
		if ($query->num_rows() > 0){ 
			return true; 
		}
		else{ 
			return false; 
		}
    }

    public function allowed($slug=FALSE){ 
    	$this->db->select('weixinName');
    	$this->db->where('weixinName',$slug);
    	$query = $this->db->get('bang');
    	if($query->num_rows()>0){ 
    		return false;
    	}else{ 
    		return true; 
    	}
    }

    public function authAllowed($slug=FALSE){ 
    	$this->db->select('id');
    	$this->db->where('weixinName',$slug);
    	$query = $this->db->get('bang');
		if ($query->num_rows() > 0){ 
			if($this->auth($slug)){ 
				return 3; //在库里但是已经到期
			}else{ 
				return 1; //在库里是正式会员
			}
		}
		else{ 
			return 2; //非正式会员
		}
    }



    public function getUserType($slug=FALSE){ 
    	if($slug===FALSE){
		 	return "no data";			
		}else{
	    	$this->db->select('jieseTime');
	    	$this->db->where('weixinName',$slug);
	    	$query = $this->db->get('bang');

	    	if ($query->num_rows() > 0){ 
	    		$day = (int)$query->row()->jieseTime;
	    		if($day<=30){ 	
	    			return 'nohave';
	    		}
	    		else if($day<=120&&$day>30){ 
	    			return '年year';
	    		}
	    		else if($day<=365&&$day>120){ 
	    			return '1年year';
	    		}
	    		else if($day>365&&$day<=730){ 
	    			return '2年year';
	    		}
	    		else if($day>730){ 
	    			return '3年year';
	    		}
	    	}	
    	}
    }

    public function jieseInfo($slug=FALSE){ 
    	if($slug===FALSE){
		 	return "no data";			
		}else{ 
			$this->db->select('nickName,sex,hasTime,pojiecishu,pojieTime,declaration');
			$this->db->where('weixinName',$slug);
			$this->db->where('leftTime > 0');
			$query = $this->db->get('bang');
			if($query->num_rows() > 0){ 
				$result = array();
				foreach ($query->result() as $row){ 
					$result['hasTime'] = $row->hasTime;
					$result['nickName'] = $row->nickName;
					$result['sex'] = $row->sex;
					$result['pojiecishu'] = $row->pojiecishu;
					$result['pojieTime'] = substr($row->pojieTime,0,10);
					$result['level'] = $this->level($row->hasTime);
					$result['imgUrl'] = $this->imgUrl($row->hasTime);
					$res = $this->nextLevel($row->hasTime);					
					$result['nextLevelDay'] = $res['upDay'];
					$result['nextImgUrl'] = $this->imgUrl($res['levelDay']);
					$result['nextLevel'] = $this->level($res['levelDay']);
					$result['jieseState'] = $this->jieseState($row->hasTime);
					$result['declaration'] = $row->declaration;
				}
				return $result;
			}else{ 
				return 'null';
			}

		}

    }

    public function vipInfo($slug=FALSE){ 
		if($slug===FALSE){
			return "no data";			
		}else{ 
			$this->db->select('luruTime,jieseTime,endTime,leftTime,isShow');
			$this->db->where('weixinName',$slug);   
			$this->db->where('leftTime > 0');
			$query = $this->db->get('bang');	
			if($query->num_rows() > 0){ 
				$result = array();
				foreach ($query->result() as $row){ 
					$result['luruTime'] = $row->luruTime;
					$result['jieseTime'] = $row->jieseTime;
					$result['endTime'] = substr($row->endTime,0,10);
					$result['leftTime'] = $row->leftTime;
					$result['isShow'] = $row->isShow;					
				}	
				return $result;
			}else{ 
				return 'null';
			}

		}
		 	
    }

    public function rankInfo($slug=FALSE){ 
    	if($slug===FALSE){
			return "no data";			
		}else{ 
			$this->db->select('weixinName');
			$where = 'leftTime > 0 AND isShow != 1';
			$this->db->where($where);
			$this->db->order_by('hasTime','desc');
			$query = $this->db->get('bang');	
			$result = NULL;
			if ($query->num_rows() > 0){ 
				foreach ($query->result() as $key => $row){
					if($row->weixinName == $slug){ 
						$result = $key+1;
						break; 
					}
				}
				return $result;
			}else{ 
				return 'null';
			}			

		}
    }
	
    private function jieseState($hasTime){
    	if($hasTime > 0 && $hasTime <=30){ 
    		return '习惯养成期';
    	}else if($hasTime > 30 && $hasTime <=90){ 
    		return '信心建立期';
    	}else if($hasTime > 90 && $hasTime <= 180){ 
    		return '奋斗精进期';
    	}else if($hasTime > 180 && $hasTime <= 300){ 
    		return '成功蜕变期';
    	}else if($hasTime > 300){ 
    		return '完全成功期';
    	}

    }

    private function nextLevel($hasTime){
      $result = array();
     if($hasTime>=0&&$hasTime<=7){ 
	 	$result['levelDay'] = 8;
	 	$result['upDay'] = 8 - $hasTime;     	
		return $result;
	 }else if($hasTime>=8&&$hasTime<=15){ 
	 	$result['levelDay'] = 16;
	 	$result['upDay'] = 16 - $hasTime;  
		return $result;
	 }else if($hasTime>=16&&$hasTime<=23){ 
	 	$result['levelDay'] = 24;
	 	$result['upDay'] = 24 - $hasTime;
		return $result;
	 }else if($hasTime>=24&&$hasTime<=31){ 
	 	$result['levelDay'] = 32;
	 	$result['upDay'] = 32 - $hasTime;  	 	
		return $result;
	 }else if($hasTime>=32&&$hasTime<=39){ 
	 	$result['levelDay'] = 40;
	 	$result['upDay'] = 40 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=40&&$hasTime<=47){ 
	 	$result['levelDay'] = 48;
	 	$result['upDay'] = 48 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=48&&$hasTime<=55){ 
	 	$result['levelDay'] = 56;
	 	$result['upDay'] = 56 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=56&&$hasTime<=63){ 
	 	$result['levelDay'] = 64;
	 	$result['upDay'] = 64 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=64&&$hasTime<=71){ 
	 	$result['levelDay'] = 72;
	 	$result['upDay'] = 72 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=72&&$hasTime<=79){ 
	 	$result['levelDay'] = 80;
	 	$result['upDay'] = 80 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=80&&$hasTime<=87){ 
	 	$result['levelDay'] = 88;
	 	$result['upDay'] = 88 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=88&&$hasTime<=95){ 
	 	$result['levelDay'] = 96;
	 	$result['upDay'] = 96 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=96&&$hasTime<=103){ 
	 	$result['levelDay'] = 104;
	 	$result['upDay'] = 104 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=104&&$hasTime<=111){ 
	 	$result['levelDay'] = 112;
	 	$result['upDay'] = 112 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=112&&$hasTime<=119){ 
	 	$result['levelDay'] = 120;
	 	$result['upDay'] = 120 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=120&&$hasTime<=127){ 
	 	$result['levelDay'] = 128;
	 	$result['upDay'] = 128 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=128&&$hasTime<=135){ 
	 	$result['levelDay'] = 136;
	 	$result['upDay'] = 126 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=136&&$hasTime<=143){ 
	 	$result['levelDay'] = 144;
	 	$result['upDay'] = 144 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=144&&$hasTime<=151){ 
	 	$result['levelDay'] = 152;
	 	$result['upDay'] = 152 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=152&&$hasTime<=159){ 
	 	$result['levelDay'] = 160;
	 	$result['upDay'] = 160 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=160&&$hasTime<=167){ 
	 	$result['levelDay'] = 168;
	 	$result['upDay'] = 168 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=168&&$hasTime<=175){ 
	 	$result['levelDay'] = 176;
	 	$result['upDay'] = 176 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=176&&$hasTime<=183){ 
	 	$result['levelDay'] = 184;
	 	$result['upDay'] = 184 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=184&&$hasTime<=191){ 
	 	$result['levelDay'] = 192;
	 	$result['upDay'] = 192 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=192&&$hasTime<=199){ 
	 	$result['levelDay'] = 200;
	 	$result['upDay'] = 200 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=200&&$hasTime<=207){ 
	 	$result['levelDay'] = 208;
	 	$result['upDay'] = 208 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=208&&$hasTime<=215){ 
	 	$result['levelDay'] = 216;
	 	$result['upDay'] = 216 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=216&&$hasTime<=223){ 
	 	$result['levelDay'] = 224;
	 	$result['upDay'] = 224 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=224&&$hasTime<=231){ 
	 	$result['levelDay'] = 232;
	 	$result['upDay'] = 232 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=232&&$hasTime<=239){ 
	 	$result['levelDay'] = 240;
	 	$result['upDay'] = 240 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=240&&$hasTime<=247){ 
	 	$result['levelDay'] = 248;
	 	$result['upDay'] = 248 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=248&&$hasTime<=255){ 
	 	$result['levelDay'] = 256;
	 	$result['upDay'] = 256 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=256&&$hasTime<=263){ 
	 	$result['levelDay'] = 264;
	 	$result['upDay'] = 264 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=264&&$hasTime<=271){ 
	 	$result['levelDay'] = 272;
	 	$result['upDay'] = 272 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=272&&$hasTime<=279){ 
	 	$result['levelDay'] = 280;
	 	$result['upDay'] = 280 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=280&&$hasTime<=287){ 
	 	$result['levelDay'] = 288;
	 	$result['upDay'] = 288 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=288&&$hasTime<=295){ 
	 	$result['levelDay'] = 296;
	 	$result['upDay'] = 296 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=296&&$hasTime<=303){ 
	 	$result['levelDay'] = 304;
	 	$result['upDay'] = 304 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=304&&$hasTime<=311){ 
	 	$result['levelDay'] = 312;
	 	$result['upDay'] = 312 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=312&&$hasTime<=319){ 
	 	$result['levelDay'] = 320;
	 	$result['upDay'] = 320 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=320&&$hasTime<=327){ 
	 	$result['levelDay'] = 328;
	 	$result['upDay'] = 328 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=328&&$hasTime<=335){ 
	 	$result['levelDay'] = 336;
	 	$result['upDay'] = 336 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=336&&$hasTime<=343){
	 	$result['levelDay'] = 344;
	 	$result['upDay'] = 344 - $hasTime;  		  
		return $result;
	 }else if($hasTime>=344&&$hasTime<=351){ 
	 	$result['levelDay'] = 352;
	 	$result['upDay'] = 352 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=352&&$hasTime<=359){ 
	 	$result['levelDay'] = 360;
	 	$result['upDay'] = 360 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=360&&$hasTime<=367){ 
	 	$result['levelDay'] = 368;
	 	$result['upDay'] = 368 - $hasTime;  		 	
		return $result;
	 }else if($hasTime>=368){ 
	 	$result['levelDay'] = 368;
	 	$result['upDay'] = "";  		 	
		return $result;
	 }		
    }

  	private function level($hasTime){ 
	 if($hasTime>=0&&$hasTime<=7){ 
		return "鄂焕";
	 }else if($hasTime>=8&&$hasTime<=15){ 
		return "华雄";
	 }else if($hasTime>=16&&$hasTime<=23){ 
		return "邓艾";
	 }else if($hasTime>=24&&$hasTime<=31){ 
		return "高览";
	 }else if($hasTime>=32&&$hasTime<=39){ 
		return "周泰";
	 }else if($hasTime>=40&&$hasTime<=47){ 
		return "夏侯渊";
	 }else if($hasTime>=48&&$hasTime<=55){ 
		return "姜维";
	 }else if($hasTime>=56&&$hasTime<=63){ 
		return "魏延";
	 }else if($hasTime>=64&&$hasTime<=71){ 
		return "文鸯";
	 }else if($hasTime>=72&&$hasTime<=79){ 
		return "关平";
	 }else if($hasTime>=80&&$hasTime<=87){ 
		return "曹彰";
	 }else if($hasTime>=88&&$hasTime<=95){ 
		return "徐晃";
	 }else if($hasTime>=96&&$hasTime<=103){ 
		return "张郃";
	 }else if($hasTime>=104&&$hasTime<=111){ 
		return "甘宁";
	 }else if($hasTime>=112&&$hasTime<=119){ 
		return "夏侯惇";
	 }else if($hasTime>=120&&$hasTime<=127){ 
		return "张辽";
	 }else if($hasTime>=128&&$hasTime<=135){ 
		return "孙策";
	 }else if($hasTime>=136&&$hasTime<=143){ 
		return "太史慈";
	 }else if($hasTime>=144&&$hasTime<=151){ 
		return "黄忠";
	 }else if($hasTime>=152&&$hasTime<=159){ 
		return "越兮";
	 }else if($hasTime>=160&&$hasTime<=167){ 
		return "庞德";
	 }else if($hasTime>=168&&$hasTime<=175){ 
		return "许褚";
	 }else if($hasTime>=176&&$hasTime<=183){ 
		return "文丑";
	 }else if($hasTime>=184&&$hasTime<=191){ 
		return "张飞";
	 }else if($hasTime>=192&&$hasTime<=199){ 
		return "关羽";
	 }else if($hasTime>=200&&$hasTime<=207){ 
		return "典韦";
	 }else if($hasTime>=208&&$hasTime<=215){ 
		return "颜良";
	 }else if($hasTime>=216&&$hasTime<=223){ 
		return "马超";
	 }else if($hasTime>=224&&$hasTime<=231){ 
		return "赵云";
	 }else if($hasTime>=232&&$hasTime<=239){ 
		return "吕布";
	 }else if($hasTime>=240&&$hasTime<=247){ 
		return "诸葛瑾";
	 }else if($hasTime>=248&&$hasTime<=255){ 
		return "陈宫";
	 }else if($hasTime>=256&&$hasTime<=263){ 
		return "张昭";
	 }else if($hasTime>=264&&$hasTime<=271){ 
		return "程昱";
	 }else if($hasTime>=272&&$hasTime<=279){ 
		return "法正";
	 }else if($hasTime>=280&&$hasTime<=287){ 
		return "田丰";
	 }else if($hasTime>=288&&$hasTime<=295){ 
		return "鲁肃";
	 }else if($hasTime>=296&&$hasTime<=303){ 
		return "荀攸";
	 }else if($hasTime>=304&&$hasTime<=311){ 
		return "陆逊";
	 }else if($hasTime>=312&&$hasTime<=319){ 
		return "徐庶";
	 }else if($hasTime>=320&&$hasTime<=327){ 
		return "荀彧";
	 }else if($hasTime>=328&&$hasTime<=335){ 
		return "毒士——贾诩";
	 }else if($hasTime>=336&&$hasTime<=343){ 
		return "周瑜";
	 }else if($hasTime>=344&&$hasTime<=351){ 
		return "凤雏——庞统";
	 }else if($hasTime>=352&&$hasTime<=359){ 
		return "鬼才——郭嘉";
	 }else if($hasTime>=360&&$hasTime<=367){ 
		return "宣皇帝——司马懿";
	 }else if($hasTime>=368){ 
		return "卧龙——诸葛亮";
	 }	

	}

	private function imgUrl($hasTime){
	  if($hasTime>=0&&$hasTime<=7){ 
		return "http://www.jiese360.cn/images/rank/eh.jpg";
	 }else if($hasTime>=8&&$hasTime<=15){ 
		return "http://www.jiese360.cn/images/rank/hx.jpg";
	 }else if($hasTime>=16&&$hasTime<=23){ 
		return "http://www.jiese360.cn/images/rank/da.jpg";
	 }else if($hasTime>=24&&$hasTime<=31){ 
		return "http://www.jiese360.cn/images/rank/gl.jpg";
	 }else if($hasTime>=32&&$hasTime<=39){ 
		return "http://www.jiese360.cn/images/rank/zt.jpg";
	 }else if($hasTime>=40&&$hasTime<=47){ 
		return "http://www.jiese360.cn/images/rank/xhy.jpg";
	 }else if($hasTime>=48&&$hasTime<=55){ 
		return "http://www.jiese360.cn/images/rank/jw.jpg";
	 }else if($hasTime>=56&&$hasTime<=63){ 
		return "http://www.jiese360.cn/images/rank/wy.jpg";
	 }else if($hasTime>=64&&$hasTime<=71){ 
		return "http://www.jiese360.cn/images/rank/wyun.jpg";
	 }else if($hasTime>=72&&$hasTime<=79){ 
		return "http://www.jiese360.cn/images/rank/gp.jpg";
	 }else if($hasTime>=80&&$hasTime<=87){ 
		return "http://www.jiese360.cn/images/rank/cz.jpg";
	 }else if($hasTime>=88&&$hasTime<=95){ 
		return "http://www.jiese360.cn/images/rank/xh.jpg";
	 }else if($hasTime>=96&&$hasTime<=103){ 
		return "http://www.jiese360.cn/images/rank/zh.jpg";
	 }else if($hasTime>=104&&$hasTime<=111){ 
		return "http://www.jiese360.cn/images/rank/gn.jpg";
	 }else if($hasTime>=112&&$hasTime<=119){ 
		return "http://www.jiese360.cn/images/rank/xhd.jpg";
	 }else if($hasTime>=120&&$hasTime<=127){ 
		return "http://www.jiese360.cn/images/rank/zl.jpg";
	 }else if($hasTime>=128&&$hasTime<=135){ 
		return "http://www.jiese360.cn/images/rank/sc.jpg";
	 }else if($hasTime>=136&&$hasTime<=143){ 
		return "http://www.jiese360.cn/images/rank/tsc.jpg";
	 }else if($hasTime>=144&&$hasTime<=151){ 
		return "http://www.jiese360.cn/images/rank/hz.jpg";
	 }else if($hasTime>=152&&$hasTime<=159){ 
		return "http://www.jiese360.cn/images/rank/yx.jpg";
	 }else if($hasTime>=160&&$hasTime<=167){ 
		return "http://www.jiese360.cn/images/rank/pd.jpg";
	 }else if($hasTime>=168&&$hasTime<=175){ 
		return "http://www.jiese360.cn/images/rank/xc.jpg";
	 }else if($hasTime>=176&&$hasTime<=183){ 
		return "http://www.jiese360.cn/images/rank/wc.jpg";
	 }else if($hasTime>=184&&$hasTime<=191){ 
		return "http://www.jiese360.cn/images/rank/zf.jpg";
	 }else if($hasTime>=192&&$hasTime<=199){ 
		return "http://www.jiese360.cn/images/rank/gy.jpg";
	 }else if($hasTime>=200&&$hasTime<=207){ 
		return "http://www.jiese360.cn/images/rank/dw.jpg";
	 }else if($hasTime>=208&&$hasTime<=215){ 
		return "http://www.jiese360.cn/images/rank/yl.jpg";
	 }else if($hasTime>=216&&$hasTime<=223){ 
		return "http://www.jiese360.cn/images/rank/mc.jpg";
	 }else if($hasTime>=224&&$hasTime<=231){ 
		return "http://www.jiese360.cn/images/rank/zy.jpg";
	 }else if($hasTime>=232&&$hasTime<=239){ 
		return "http://www.jiese360.cn/images/rank/lb.jpg";
	 }else if($hasTime>=240&&$hasTime<=247){ 
		return "http://www.jiese360.cn/images/rank/zgj.jpg";
	 }else if($hasTime>=248&&$hasTime<=255){ 
		return "http://www.jiese360.cn/images/rank/cg.jpg";
	 }else if($hasTime>=256&&$hasTime<=263){ 
		return "http://www.jiese360.cn/images/rank/zz.jpg";
	 }else if($hasTime>=264&&$hasTime<=271){ 
		return "http://www.jiese360.cn/images/rank/cl.jpg";
	 }else if($hasTime>=272&&$hasTime<=279){ 
		return "http://www.jiese360.cn/images/rank/fz.jpg";
	 }else if($hasTime>=280&&$hasTime<=287){ 
		return "http://www.jiese360.cn/images/rank/tf.jpg";
	 }else if($hasTime>=288&&$hasTime<=295){ 
		return "http://www.jiese360.cn/images/rank/ls.jpg";
	 }else if($hasTime>=296&&$hasTime<=303){ 
		return "http://www.jiese360.cn/images/rank/xy.jpg";
	 }else if($hasTime>=304&&$hasTime<=311){ 
		return "http://www.jiese360.cn/images/rank/lx.jpg";
	 }else if($hasTime>=312&&$hasTime<=319){ 
		return "http://www.jiese360.cn/images/rank/xs.jpg";
	 }else if($hasTime>=320&&$hasTime<=327){ 
		return "http://www.jiese360.cn/images/rank/xuny.jpg";
	 }else if($hasTime>=328&&$hasTime<=335){ 
		return "http://www.jiese360.cn/images/rank/jx.jpg";
	 }else if($hasTime>=336&&$hasTime<=343){ 
		return "http://www.jiese360.cn/images/rank/zyu.jpg";
	 }else if($hasTime>=344&&$hasTime<=351){ 
		return "http://www.jiese360.cn/images/rank/pt.jpg";
	 }else if($hasTime>=352&&$hasTime<=359){ 
		return "http://www.jiese360.cn/images/rank/gj.jpg";
	 }else if($hasTime>=360&&$hasTime<=367){ 
		return "http://www.jiese360.cn/images/rank/smy.jpg";
	 }else if($hasTime>=368){ 
		return "http://www.jiese360.cn/images/rank/zgl.jpg";
	 }	
 

	}
	



}