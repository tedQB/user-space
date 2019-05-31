<?php

/**
 * 首页model
 */
class User_model extends CI_Model {

    public function __construct($rules = array())
    {
		$this->load->database();		

    }

    public function test(){

    	//$query = $this->db->query('SELECT weixinName FROM huibao');
    	$this->db->select('weixinName');
    	$query = $this->db->get('huibao');
    	$query = $this->db->get('bang');
    	return $query->result();
    }
   
	public function getMonthDays2($month = "this month", $format = "d") {
	    $start = strtotime("first day of $month");
	    $end = strtotime("last day of $month");

	    echo $start."xxx1<br />";
	    echo $end."xxx2<br />";

	    $days = array();
	    for($i=$start;$i<=$end;$i+=24*3600){ 
	    	$days[] = date($format, $i);
	    }
	    var_dump($days);
	    return $days;
	}

	public function getMonthDays($month = "this month", $format = "d") {
		$j = date('t'); //获取当前月份天数
		$start_time = strtotime(date('Y-m-01'));  //获取本月第一天时间戳
		$array = array();
		for($i=0;$i<$j;$i++){
		     $array[] = date('d',$start_time+$i*86400); //每隔一天赋值给数组
		}
	    return $array;
	}

	public function zikongnengli(){ 
		$suggest = array();
		$suggest1 = '请自觉删除电
		脑，手机，平板电脑上的黄源，还有相关的软件，如云盘，云播放等';
		$suggest2 = '在电脑设备，手机设备安装设置防黄措施:<a href="http://www.jiese360.cn/?p=2470">链接:iphone防黄办法</a>; <a href="http://jingyan.baidu.com/article/f0062228de40a4fbd3f0c802.html">链接：安卓手机防黄办法</a>;电脑上：请安装反黄之盾等防黄软件,如果技术够高，也可以通过设置路由器进行屏蔽操作，<a href="http://beijing.pconline.com.cn/462/4624197.html">方法介绍</a>';		
		$suggest3 = '你可以充分开动自己的大脑，找出适合自己或者自己开发出防黄办法，并分享给小戒和戒友，非常有用,这个过程就是主动反击黄源行动的过程。';
		$suggest4 = '如果以上阶段做的都很不错了，那也还请时刻对黄色信息保持警惕和无视甚至鄙视状态，仍然要求你，每日接触黄源，意淫时间要控制在20秒，避免再次被沉迷其中。';
		$suggest5 = '如果你平日已经很少接触黄源，也能够主动控制意淫。那也还请时刻对黄色信息保持警惕和无视甚至鄙视状态，仍然要求你，每日接触黄源，意淫时间要控制在20秒，避免再次被沉迷其中。'; 

		if($this->zikongnengli<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3,$suggest4);
		}if($this->zikongnengli==5||$this->zikongnengli==6){ 
			array_push($suggest,$suggest2,$suggest3,$suggest4);
		}if($this->zikongnengli==7||$this->zikongnengli>=8){ 
			array_push($suggest,$suggest3,$suggest5);
		}
		return $suggest;
	}

	public function dikangnengliang(){ 
		$suggest = array();
		$suggest1 = '你需要深入理解一个原理：淫念占据大脑并促使人破戒，而且形成习惯，很难戒除的规律：<br />1.首先一个人通过基础黄源，肯定是先动淫心（也就是意淫）<br />2.然后才是淫习（你身体可能会出现的状况：全身发热，精神极度困乏，双眼胀痛，眨眼频率降低，全身火气上涌于脑部，呈感 冒头晕状态，耳鸣目眩，手摸头部却并无高烧状，心头环绕淫状，非份之想，和异性社交之情景，下体若无刺激，缩阳，受刺激，立即有反应，然后手就不由自主的去SY了 <br />3.多巴胺，多巴胺是一种脑垂体的分泌物，如果你长期因为黄源刺激导致撸管破解，就会在脑袋里形成对黄源的条件反射（经典狗,骨头,要铃铛留口水的实验，忘梅止渴实验）。\n这时候你的脑袋里就会分泌多巴胺，这种对黄源刺激的多巴胺一旦形成，非常难戒掉。所谓成瘾就是这个道理。总之：弄清你处于破戒所处的场景，你处于哪个步骤，即使刹住就可以。懂这个原理懂了，就有抵抗力了。如果大脑中存在错误多巴胺腺体分泌，那这实际就很可怕，他实际上是大脑的一种病症。<br />4.以上就是"淫心，淫习，多巴胺"原理，请牢记!';
		$suggest2 = '在你忍不住想要破戒的时候，还请务必实践并掌握一些快速应对的方法:<br />1.口诀法：狂念阿弥陀佛200遍（实际为转移注意力），或者在理解"淫心，淫习，多巴胺"原理后，口诀"淫心，淫习，多巴胺"<br />2.猴子挠头，指甲挠头皮，一个四周，挠个几百下，还舒服 <br />3.叩齿法,这个办法就是你淫念上来的时候,你只要不停的上牙打下牙, 就像特别冷的状态,然后,耳边是你牙齿敲击的声音,这样很容易赶走淫念。';		
		$suggest3 = '如果以上阶段做的都很不错了，还请把精力放在提高生活质量，努力工作和学习上。成年人每天的精力是很恒定的，你如果不找事情消耗它，你肯定也会感到自己的精力因为接触黄色的信息而被消耗和暗耗，周而复始，形成习惯，自然每天就浪费掉了。年轻人的应该把每天的精力放在追求新鲜事物和钻研上。';
		$suggest4 = '如果你现阶段养生的成果已经很好了，能空余很多时间不知道干什么，还请把精力放在提高生活质量，努力工作和学习上。成年人每天的精力是很恒定的，你如果不找事情消耗它，你肯定也会感到自己的精力因为接触黄色的信息而被消耗和暗耗，周而复始，形成习惯，自然每天就浪费掉了。成年人就应该把每天的精力放在追求新鲜事物和钻研上。';
		if($this->dikangnengliang<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3);
		}if($this->dikangnengliang==5){ 
			array_push($suggest,$suggest2,$suggest3);
		}if($this->dikangnengliang>=6){ 
			array_push($suggest,$suggest2,$suggest4);
		}
		return $suggest;		
	}

	public function jiejuewenti(){ 
		$suggest = array();
		$suggest1 = '你需要让自己忙起来，如果你感觉整天生活的很舒适，没有短期或者长期的生活学习工作目标，那么，强烈的建议你给自己找一些事情做，比如看完一本书，考证，学一门在社会中立足的本领。慢慢找到自己在社会中的位置，不再浑浑噩噩。把大好的青春都浪费在撸管上是非常不值得的 。';
		$suggest2 = '当你有了目标之后，请日复一日的培养自己在学习和工作中，解决问题的能力; 这个阶段，你可能会不断的会碰到挫折，感觉痛苦，这其实就是难题，也许是别人都做不了的事情，摆在你面前，你自己可以寻找方法和途径去给解决掉。努力寻找自己能力的边界和价值，放大自己在工作中的价值。';		
		$suggest3 = '培养自己独立生活的能力，学会赚钱，培养自己赚钱的能力，只要是赚钱的事情，一定要学着去做;不要怕脏怕苦，撸管成瘾只是人性的弱点的一小部分，不值一提。我们希望你能够通过赚钱，能够理解人性，把握人性。等你赚钱人生的第一桶金的时候，你的思维和想法就会提高到新的层次';
		$suggest4 = '如果你解决问题的能力已经非常不错了，请不断的突破自己，可以换一个更具挑战的环境和工作去锻炼自己，不断提升自己的个人能力，不要给自己设置限制，去解决更难的问题，帮助更多的人。';
		if($this->jiejuewenti<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3,$suggest4);
		}if($this->jiejuewenti==5||$this->jiejuewenti==6){ 
			array_push($suggest,$suggest2,$suggest3,$suggest4);
		}if($this->jiejuewenti==7||$this->jiejuewenti>=8){ 
			array_push($suggest,$suggest3,$suggest4);
		}
		return $suggest;				
	}

	public function sikaozongjie(){ 
		$suggest = array();
		$suggest1 = '1.首先：最后必不可少的是有一定的意志力,对困难千万不要退缩,要有不解决掉不经意放弃的作风;<br />2.多读书,做到博学多才.不多多阅读,就不知道许多事物最基本的原理,从而你也不会对你所看到的事物感兴趣; <br />3.善于观察,对所见到的事物首先尽量去多想,多问几个为什么;';
		$suggest2 = '1.一定要专注.不管做什么事都要一件件的去做,不要同时去做许多事,那不但无法让你做，好一件事,也无益于培养独立思考的能力;<br />2.要有独立的意识,不要形成每一件事都依赖他人的习惯,先自个解决,不明白再问问他人.在和他人分析问题时,想想有没有更加完美的答案最后试着自己再总结一下';
		$suggest3 = '1.随机化你的生活圈，不要总去相同的场所, 吃相同的食物, 与相同的人谈天, 你可以积极地追寻新的经历. 许多人习惯了这种简单的决定, 这样可以带来安全感. 但如果你像独立地思考, 你需要跳出你所习惯的圈子<br />2.不要先用电脑或者是去图书馆找答案, 先自己想想. 你尽管不能与世界相隔绝, 但是你可以通过限制习惯性观点的摄入量来增加你独立思考的量. 
		';		
		$suggest4 = '1.练习质疑,你可以尝试养成本能的质疑习惯性的观点的习惯.但不要成为犬儒主义者. 不要认为那些”真理”是不证自明的, 只有当自己确信在逻辑的后面还有事实来支持它们之后, 再做出判断.上面说的听起来可能太难了, 那么请想想独立思考能带来什么吧. 就算是微小的向着独立思考的进步也会增加你对这个世界的贡献. 你将看到别人所忽视的机会与方法. 相比于那些不会创新地思考的人, 你将获得相当有竞争力的优势. 更重要的是, 你的思考是你自己的, 而不是只是反刍媒体.
独立地思考, 你将为世界带来无尽的机会。';
		if($this->sikaozongjie<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3,$suggest4);
		}if($this->sikaozongjie==5||$this->sikaozongjie==6){ 
			array_push($suggest,$suggest2,$suggest3,$suggest4);
		}if($this->sikaozongjie==7||$this->sikaozongjie>=8){ 
			array_push($suggest,$suggest3,$suggest4);
		}
		return $suggest;						
	}

	public function yundonghuifu(){ 
		$suggest = array();
		$suggest1 = '把恢复身体的(四大锻炼)做好<br />
① 固肾功。两脚半肩宽分开站立、双膝挺伸、上身前俯，手掌尽力触摸地面，以达到大腿后侧经络的拉伸感为到位，然后上身抬起至拉伸感消失。每晚睡前一小时至半小时做四组、每组五十个。不以绝对下压程度为标准，绝对下压程度会随着练习时间自然增加。<br />
② 慢跑。从半小时三公里开始，其他条件相同情况下，增加距离不要提高速度。保持微汗，切勿大汗淋漓。<br />
③ 俯卧撑。每组十个到三十个，间歇休息半分钟到一分钟，做四到八组。俯卧撑和平板支撑每日只需做一项，或各减量一半每日交叉练习。<br />
④ 平板支撑。双肘弯曲支撑在地面上俯卧，肩膀和肘关节垂直于地面，躯干伸直，眼睛看向地面，均匀呼吸。每组三十秒到两分钟，间歇休息半分钟到一分钟，做三到六组。 <a href="http://url.cn/U3HJkL">http://url.cn/U3HJkL</a>
目的：以慢为好、呼吸和动作节奏一致；对于加固精关、提升肾气、振奋精神状态和提高精子质量很有针对性。<br />
以上，建议每天都做，可以在你加入vip的第一天开始做就可以。强身健体什时候开始都可以
';
		$suggest2 = '1.早睡早起，保证7-8个小时的睡眠，不要熬夜，<br />2.适当的运动，适合自己最重要。运动是不可缺少的，打篮球，踢足球，打羽毛球，乒乓球，网球，之类的。每周都运动一两次，每次一两个小时 <br />3.饮食得当，不要暴饮暴食。
很多人不顾及自己的饮食是否均衡，经常会聚餐，吃的时候也不会太顾及时间和自己的营养。需要大家的注意的是要自己懂得控制自己的食欲。';
		$suggest3 = '能够主动参加多人户外，竞技体育活动，比如：马拉松，篮球，足球赛等。对某项体育活动特别精通。';

		$suggest4 = '有组织多人户外活动，体育运动的能力。可以一个人带队做户外活动(5-10人)，可以再某项体育运动中发挥控制全局，左右比赛大局的领导才能,并能为全队带来胜利。';
		if($this->yundonghuifu<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3,$suggest4);
		}if($this->yundonghuifu==5||$this->yundonghuifu==6){ 
			array_push($suggest,$suggest2,$suggest3,$suggest4);
		}if($this->yundonghuifu==7||$this->yundonghuifu>=8){ 
			array_push($suggest,$suggest3,$suggest4);
		}
		return $suggest;						
	}

	public function zhengnengliang(){ 
		$suggest = array();
		$suggest1 = '理解什么是正能量和负能量：<br />正能量(高)：活力、精力充沛、兴奋、热情、全神贯注、多姿多彩、正面挑战、内外合一、自我提升、提升他人、积极正面、热心付出 <br />正能量(静态):安静、冷静、平静、宁静、放松、焕然一新  、和谐、当下、充分休息、内外合一<br />负能量(高)：愤怒、怀疑、沮丧、担忧、急躁、压力、负面的挑战、抱怨、所有的事情都是问题、习惯性的挑战和抱怨所有一切。<br />负能量(低)： 怨恨、后悔、内疚、嫉妒、自卑、绝望、挫败、羞耻、尴尬、责怪。';
		$suggest2 = '能够识别并帮助身边有困难的人。无论从工作，生活，学习上，在自己的能力范围内，能帮助别人解决正确合理的问题。';
		$suggest3 = '让自己内心强大。1.培养自信，面对挑战相信“我能行”。人心里相信的东西，就能用积极的心态去努力得到它。只要我们多督促自己一些，便会发现自己潜藏着无限精力，真正地推动自己努力去完成。</br>2.其次，倾注热情，认真把当下的事做好。如果将全部精力投入到工作和生活中，生活就会更充实，你就会感到其乐无穷。<br />一种积极的心态，比一百种智慧都更有力量';		
		$suggest4 = '对内，要善于接受正能量，对外，要善于用正能量去影响他人。对我们自己来说，一方面我们要用我们积极的一面去影响人，鼓励人，给人正能量。另一方面，我们不能被别人的一些消极的思想所左右，一定要和这种人保持距离，对他们保持警惕。';

		if($this->zhengnengliang<=4){
			array_push($suggest,$suggest1,$suggest2,$suggest3);
		}if($this->zhengnengliang==5){ 
			array_push($suggest,$suggest2,$suggest3);
		}if($this->zhengnengliang>=6){ 
			array_push($suggest,$suggest3,$suggest4);
		}
		return $suggest;		

	}

	public function getSateData($slug=FALSE){ 
		//自控能力 汇总2个字段所有数据，然后给出平均数
		$scoreArray = array();
		$suggestArray = array();
		$this->db->select_avg('score1');
		$this->db->where('weixinName',$slug);
		$query1 = $this->db->get('huibao');

		$this->db->select_avg('score2');
		$this->db->where('weixinName',$slug);
		$query2 = $this->db->get('huibao');
		$scoreArray[0] =  floor(($query1->row()->score1+$query2->row()->score2)/2);
		$this->zikongnengli = $scoreArray[0];

		//抵抗负能量能力
		$this->db->select_avg('score3');
		$this->db->where('weixinName',$slug);
		$query3 = $this->db->get('huibao');
		$scoreArray[1] =  floor($query3->row()->score3);
		$this->dikangnengliang = $scoreArray[1];

		//解决问题能力
		$this->db->select_avg('score4');
		$this->db->where('weixinName',$slug);
		$query4 = $this->db->get('huibao');
		$scoreArray[2] =  floor($query4->row()->score4);
		$this->jiejuewenti = $scoreArray[2];

		//思考总结能力
		$this->db->select_avg('score5');
		$this->db->where('weixinName',$slug);	
		$query5 = $this->db->get('huibao');
		$scoreArray[3] =  floor($query5->row()->score5/2);	
		$this->sikaozongjie = $scoreArray[3];	

		//运动恢复能力
		$this->db->select_avg('score6');
		$this->db->where('weixinName',$slug);
		$query6 = $this->db->get('huibao');
		$scoreArray[4] =  floor($query6->row()->score6/2);
		$this->yundonghuifu = $scoreArray[4];

		//正能量指数
		$this->db->select_avg('score7');
		$this->db->where('weixinName',$slug);
		$query7 = $this->db->get('huibao');
		$scoreArray[5] =  floor($query7->row()->score7/2);
		$this->zhengnengliang = $scoreArray[5];
		//var_dump($scoreArray);

		//熬夜指数
		/*
		$this->db->select_avg('score8');
		$this->db->where('weixinName',$slug);
		$query7 = $this->db->get('huibao');
		$scoreArray[6] =  floor($query7->row()->score8);
		$this->zhengnengliang = $scoreArray[6];
		*/
		return $scoreArray;		


	}

	public function getWeekDays($week = "this week",$format = "Y-m-d"){ 
		$whichD=date('w',strtotime($week));
		$weeks=array();
		for($i=0;$i<7;$i++){
			if($i<$whichD){
				$date=strtotime($week)-($whichD-$i)*24*3600;
			}else{
				$date=strtotime($week)+($i-$whichD)*24*3600;
			}
			$weeks[$i]=date($format,$date);
		}
		return $weeks;
	} 

	public function getYearDays($slug=FALSE){ 
		$this->db->select('subDate');
		$this->db->where('weixinName',$slug);
		$this->db->order_by('subDate','asc');
		$query = $this->db->get('huibao');

		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){ 
				$result[] = (int)$row->sum; 
			}
			return $result;
		}
		else{ 
			return 'null';
		}		


	}

	public function getYearData($slug=FALSE){ 
		if($slug===FALSE){
		 	return "no data";			
		}
		else{ 

			$this->db->select('sum,subDate');
			$this->db->where('weixinName',$slug);
			$this->db->order_by('subDate','asc');
			$this->db->group_by("subDate"); 
			$query = $this->db->get('huibao');
			$result=array();
			$finalArray=array();
			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){ 
					$tempArr=array();
					$subDate=substr($row->subDate,0,10);
					//echo $subDate.'<br />';
					$year=substr($subDate,0,4);
					//echo $year.'<br />';
					$month=(int)substr($subDate,5,6)-1;
					//echo $month.'<br />'; 
					$day=substr($subDate,8,9);
					//echo $day.'<br />';


					//$tempArr[] = "Date.UTC(".str_replace("-",",",substr($row->subDate,0,10)).")";
					$tempArr[] = "Date.UTC(".$year.','.$month.','.$day.")";
					$tempArr[]= (int)$row->sum; 
					$result[]=$tempArr;
				}

				//var_dump($result);
				return $result;
			}
			else{ 
				return null;
			}
		}
	}
	
    public function getPrevWeekData($slug=FALSE){
    	if($slug===FALSE){
		 	return "no data";			
		}
		else{ 
			$weekArray = $this->getWeekDays('2015-04-14');
			$where = "YEARWEEK(date_format(subDate,'%Y-%m-%d')) = YEARWEEK(now())-2 group by subDate";
			$this->db->select('sum,subDate');
			$this->db->where('weixinName',$slug);
			$this->db->where($where);
			$query = $this->db->get('huibao');
			$result=array();
			$finalArray = array();

			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){ 
					//echo substr($row->subDate,0,10);
					$result[substr($row->subDate,0,10)] = (int)$row->sum;

				}
				foreach ($weekArray as $value) { 
						
					if(!empty($result[$value])){ 
						$finalArray[] = $result[$value];
					}else{ 
						$finalArray[] = null;	
					}
									
				}
				return $finalArray;
			}
			else{ 
				return 'null';
			}

		}

    }

    public function getWeekData($slug=FALSE){ 
     	if($slug===FALSE){
		 	return "no data";			
		}
		else{ 
			$weekArray = $this->getWeekDays();

			$where = "YEARWEEK(date_format(subDate,'%Y-%m-%d')) = YEARWEEK(now()) group by subDate";
			$this->db->select('sum,subDate');
			$this->db->where('weixinName',$slug);
			$this->db->where($where);
			$query = $this->db->get('huibao');
			$result=array();
			$finalArray = array();

			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){ 
					//echo substr($row->subDate,0,10);
					$result[substr($row->subDate,0,10)] = (int)$row->sum;

				}
				foreach ($weekArray as $value) { 
						if(!empty($result[$value])){ 
							$finalArray[] = $result[$value];
						}else{ 
							$finalArray[] = null;	
						}					
				}
				return $finalArray;
			}
			else{ 
				for($i=0;$i<7;$i++){ 
					$finalArray[$i]=null;
				}
				return $finalArray;
			}

		}   	
    }
    public function getMonthData($slug=FALSE){ 
     	if($slug===FALSE){
		 	return "no data";			
		}
		else{ 
			$MonthArray = $this->getMonthDays('this month','Y-m-d');
			//var_dump($MonthArray);
			$where = "date_format(subDate,'%Y-%m') = date_format(now(),'%Y-%m')";
			//$where = "date_sub(curdate(), INTERVAL 30 DAY) <= date('subDate')";
			$this->db->select('sum,subDate');		
			$this->db->where('weixinName',$slug);	
			$this->db->where($where);
			$query = $this->db->get('huibao');
			//var_dump($query);
			$result=array();
			$finalArray = array();

			if ($query->num_rows() > 0){
				foreach ($query->result() as $row){ 
					echo substr($row->subDate,8,2);
					$result[substr($row->subDate,8,2)] = (int)$row->sum;
				}
				foreach ($MonthArray as $value) { 
						if(!empty($result[$value])){
							$finalArray[] = $result[$value];
						}else{ 
							$finalArray[] = null;	
						}					
				}

				return $finalArray;
			}
			else{ 
				return null;
			}
		}   
    }
	
	
	public function upload(){
		
		header("Access-Control-Allow-Origin:*");
	
		$data=$this->input->post('data');	
			
		$arr=array("_id"=>$data['name'],"name"=>$data['name'],"desc"=>$data['desc'],"imgurl"=>$data['imgurl'],"author"=>$data['author'],"cate"=>$data['cate'],"type"=>$data['type'],"classify"=>$data['classify'],"width"=>$data['width'],"resp"=>$data['resp'],"skin"=>$data['skin'],"jsonDetail"=>$data['jsonDetail']);
		
		//echo $arr['jsonDetail'];	

		$obj2 = (object)null;

		if($this->detail->save($arr)){
			$obj2->code=200;
			
		}else{
			$obj2->code=404;
			$obj2->message="remote server error";
			
	    }			
	    return $obj2;
		

	}
	
	
}