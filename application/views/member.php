<link rel="stylesheet" href="http://s.amazeui.org/assets/2.x/css/amazeui.min.css?v=ihltiou3">
<script src="http://s.amazeui.org/assets/2.x/js/jquery.min.js?v=ihltiou3">
</script>
<script src="http://s.amazeui.org/assets/2.x/js/amazeui.min.js?v=ihltiou3">
</script>
<style>
.topHead{  }
.member{ margin-top: 30px; padding:10px; font-size:12px; overflow-y:auto;}
.topHead{ position: relative; margin:10px 0; font-size:14px; }
.topHead .imgUrl{ width:50px; height:50px; border-radius: 3px; }
.topHead .nickName{ position: absolute; top:5px; left:60px;  }
.topHead .level{ position: absolute; top:25px; left:60px; }
.topHead .dec{ margin-top:5px; height: 16px; overflow: hidden; }
.topHead .have{ padding-right: 10px; background:url(http://www.jiese360.cn/images/user/arrow-down.png) no-repeat right center;}
.fix{ margin:0px; }
.topHead .on{ height:auto; overflow: auto; background:none; padding-right: 10px}
.am-tabs-default .am-tabs-nav{ background-color: #fff; }
.am-tabs-default .am-tabs-nav>.am-active a{ background-color:#fff; color: #FF0038; border-top:2px solid #FF0038; }
.am-tabs-default .am-tabs-nav li a{ border-top:2px solid #fff; }
.am-tabs-bd{ border:none; z-index:0;}
.am-tabs-default .am-tabs-nav li a{ font-size:14px;}
.mui-table-view-cell{ padding:11px 0px; }
.am-tabs-bd .am-tab-panel{ padding:0px;}
.mui-table-view-cell:after{ left:0px;}
.page{ margin-top:20px;}
body{ font:12px "黑体","Arial Narrow",HELVETICA;}
.mui-table-view-cell>a:not(.mui-btn) {
    position: static; 
	display: inline;
	padding: inherit;
	margin: 0px;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
  }
 .mui-table-view-cell a.link{ color:#FF0038; }
</style>
<div class="member">
	<div class="topHead">
		 <img src="<?=$args['jieseInfo']['imgUrl']?>" class="imgUrl"/>
	     <span class="nickName"><?=$args['jieseInfo']['nickName']?></span>
	     <span class="level"><?=$args['jieseInfo']['level']?></span>
	     <?php if($args['jieseInfo']['declaration']){ ?>
	     <div class="dec <?php if(count($args['jieseInfo']['declaration'])){ echo "have"; }?>">
	     	<span>我的誓言:</span>
	     	<?=$args['jieseInfo']['declaration']?>
	     </div>
	     <?php }?>
	</div>
	<div class="page pg-demo">
	    <div id="demo-view" data-backend-compiled>
	        <div data-am-widget="tabs" class="am-tabs am-tabs-default fix">
	            <ul class="am-tabs-nav am-cf">
	                <li class="am-active">
	                    <a href="[data-tab-panel-0]">
	                        养生情况
	                    </a>
	                </li>
	                <li class="">
	                    <a href="[data-tab-panel-1]">
	                        VIP信息
	                    </a>
	                </li>
	                <li class="">
	                    <a href="[data-tab-panel-2]">
	                       养生排名
	                    </a>
	                </li>
	            </ul>
	            <div class="am-tabs-bd">
	                <div data-tab-panel-0 class="am-tab-panel am-active mui-table-view">
	             		<div class="grid mui-table-view-cell">已经戒天数：<?=$args['jieseInfo']['hasTime']?>天</div>
	             		<div class="grid mui-table-view-cell">所处养生状态：<?=$args['jieseInfo']['jieseState']?></div>
	             		<div class="grid mui-table-view-cell">养生等级：<?=$args['jieseInfo']['level']?> 
						<?php if($args['jieseInfo']['hasTime']<368){?>
	             		还有<?=$args['jieseInfo']['nextLevelDay']?>天升级到 <?=$args['jieseInfo']['nextLevel']?> <img src="<?=$args['jieseInfo']['nextImgUrl']?>" style="width:16px; height:16px; border-radius:2px;  "/>
	             		<?php } else { ?>
							您已到最高等级，恭喜。
	             		<?php }?>
	             		</div>
	             		<?php if($args['jieseInfo']['pojiecishu']){ ?>
						<div class="grid mui-table-view-cell">总破戒次数：<?=$args['jieseInfo']['pojiecishu']?>次</div>
						<div class="grid mui-table-view-cell">上一次破戒时间：<?=$args['jieseInfo']['pojieTime']?></div>
						<div class="grid mui-table-view-cell" style="color:#DA6911">提示：由于你破戒<?=$args['jieseInfo']['pojiecishu']?>次，平台曾扣除您<?=$args['jieseInfo']['pojiecishu']*10?>的天数作为破戒惩罚</div>
						<?php }?>
	                </div>
	                <div data-tab-panel-1 class="am-tab-panel">
	         			<div class="grid mui-table-view-cell">会员加入时间：<?=$args['vipInfo']['luruTime']?></div>
	         			<div class="grid mui-table-view-cell">会员剩余时间：<?=$args['vipInfo']['leftTime']?>天</div>
	         			<div class="grid mui-table-view-cell">会员到期日: <?=$args['vipInfo']['endTime']?></div>
	                </div>
	                <div data-tab-panel-2 class="am-tab-panel">
	                	<?php if($args['vipInfo']['jieseTime']==30){ ?>
							<div class="grid mui-table-view-cell">由于你是30天体验版用户，没有排行榜功能</div>
	                	<?php } else if($args['vipInfo']['jieseTime']>=120 && $args['vipInfo']['isShow'] == 1){ ?>
							<div class="grid mui-table-view-cell">由于你30天没有上报成绩，排行榜单隐藏，上报后明日恢复</div>
	                	<?php } else{ ?>
	                		<div class="grid mui-table-view-cell">你位于养生英雄帮单第<?=$args['rankInfo']?>位 <a href="<?php 
	                		echo 'http://'.$_SERVER['HTTP_HOST'].'/rank/index/i/'.$args['slug'];
	                		?>" class="link">点击查看</a></div>
	                	<?php } ?>
	                </div>
	            </div>
	        </div>	
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(function(){ 
		$('.have').click(function(){ 
			if($(this).hasClass('on')){ 
				$(this).removeClass('on');
			}else{ 
				$(this).addClass('on');
			}
		})
	})


</script>