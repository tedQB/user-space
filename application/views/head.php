<!doctype html>
<html lang="en">
<head>
<title><?=$args['title']?></title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://dcloudio.github.io/mui/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" href="http://www.jiese360.cn/css/mui.min.css">
<style type="text/css">
	body{ font:12px "黑体","Arial Narrow",HELVETICA;background:#fff;-webkit-text-size-adjust:; }
	.theme .mui-control-item{ border-color:#FF0038; border-left:#FF0038; background: #fff; color:#000;}
	.theme .mui-control-item.mui-active{ background-color:#FF0038;}
	.theme{ border:2px solid #FF0038; }
	.theme .bdr{ border-right:2px solid #FF0038; border-left:2px solid #FF0038;}
	.nav{ padding:0 5px;}
	.cate { display: block; width: 47px; height: 22px; margin: 0 auto; margin-top:3px; }
	.mui-bar-tab{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; height:30px; }
	.mui-bar-tab *{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; }
	.mui-bar-tab .mui-active .cate1{
	   background: url(http:///www.jiese360.cn/images/c1.jpg) no-repeat center center;	  	
	   background-size: 35px 22px; 
	}
	.mui-bar-tab .cate1{
	   background: url(http:///www.jiese360.cn/images/c2.jpg) no-repeat center center;	
	   background-size: 35px 22px; 	
	}	
	.mui-bar-tab .cate2{ background: url(http://www.jiese360.cn/images/d1.jpg) no-repeat center center; background-size: 35px 22px; }
	.mui-bar-tab .mui-active .cate2{
	   background: url(http:///www.jiese360.cn/images/d2.jpg) no-repeat center center;	
	   background-size: 35px 22px; 	
	}
	.mui-bar-tab .cate3{ background: url(http:///www.jiese360.cn/images/a1.jpg) no-repeat center center; background-size: 35px 22px;  }
	.mui-bar-tab .mui-active .cate3{
	   background: url(http:///www.jiese360.cn/images/a2.jpg) no-repeat center center;	
	   background-size: 35px 22px; 	
	}
	.mui-bar-tab .cate4{ background: url(http://www.jiese360.cn/images/c1.png) no-repeat center center;
	background-size: 35px 22px;  }
	.mui-bar-tab .mui-active .cate4{
	   background: url(http:///www.jiese360.cn/images/c2.png) no-repeat center center;	
	   background-size: 35px 22px; 	
	}
	.mui-bar-tab .mui-active span{ color:#FF0038; }
	.mui-content{ background: #fff }
	.adar{ margin-bottom: 80px; margin-top:10px;}
	a.mui-tab-item:hover{ text-decoration: none; } 
	.mui-bar-tab .mui-tab-item{ height:30px; }	
	.mui-bar-tab .mui-tab-item .fz{ font-size: 10px; }
	.mui-segmented-control .mui-control-item{ line-height: 28px; }
	.mui-bar{ height: 36px;}
	.mui-title{ line-height: 36px; }
	.mui-bar-nav~.mui-content{ padding-top: 38px; }
</style>
<script type="text/javascript">
function onBridgeReady(){
 	WeixinJSBridge.call('hideOptionMenu');
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}	

</script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
		<h1 class="mui-title"><?=$args['title']?></h1>
	</header>
