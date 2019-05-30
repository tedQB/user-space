<!doctype html>
<html lang="en">
<head>
<title>健康</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="http://dcloudio.github.io/mui/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
 <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
  <script type="text/javascript" src="http://cdn.hcharts.cn/highcharts/exporting.js"></script>
<link rel="stylesheet" href="http://dcloudio.github.io/mui/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="http://dcloudio.github.io/mui/dist/css/mui.min.css?v=2014-12-30 14:09:32 +0800">
<style type="text/css">
	body{ font-family: "黑体"; }
	.theme .mui-control-item{ border-color:#FF0038; border-left:#FF0038; background: #fff; color:#000;}
	.theme .mui-control-item.mui-active{ background-color:#FF0038;}
	.theme{ border:2px solid #FF0038; }
	.theme .bdr{ border-right:2px solid #FF0038;}
	.nav{ padding:0 5px;}
	.cate {
	 display: block; width: 47px; height: 40px; margin: 0 auto; margin-top:5px; }

	.mui-bar-tab .cate1{ background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEVm2IFVYueQi/800?w5=47&h5=33&rf=viewer_421&t=5) no-repeat; }

	.mui-bar-tab .mui-active .cate1{
	   background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEVq2IFVAlikj/800?w5=47&h5=33&rf=viewer_421&t=5) no-repeat;		
	}

	.mui-bar-tab .cate2{ background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEZO5IFUQRzAF/800?w5=44&h5=37&rf=viewer_421&t=5) no-repeat; }

	.mui-bar-tab .mui-active .cate2{
	   background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEZK5IFVwD3Yy/800?w5=44&h5=37&rf=viewer_421&t=5) no-repeat;		
	}

	.mui-bar-tab .cate3{ background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEYq9IFXQNLQA/800?w5=43&h5=40&rf=viewer_421&t=5) no-repeat; }

	.mui-bar-tab .mui-active .cate3{
	   background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEYm9IFWY*FwO/800?w5=43&h5=40&rf=viewer_421&t=5) no-repeat;		
	}

	.mui-bar-tab .cate4{ background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEXHFIFUYm6so/800?w5=48&h5=40&rf=viewer_421&t=5) no-repeat; }

	.mui-bar-tab .mui-active .cate4{
	   background: url(http://group.store.qq.com/qun/V12jHQ0A0ue65m/V3thg7GEXDFIFV403cF/800?w5=48&h5=40&rf=viewer_421&t=5) no-repeat;		
	}


	.mui-bar-tab .mui-active span{ color:#FF0038; }
</style>


</head>
<body>
<div id="segmentedControl" class="mui-segmented-control">
		<a class="mui-control-item" href="#item1mobile">
				待办公文（8）
			</a>
		<a class="mui-control-item" href="#item2mobile">
				已办公文
			</a>
		<a class="mui-control-item mui-active" href="#item3mobile">
				全部公文
			</a>
	</div>
	<div class="mui-content-padded">
		<div id="item1mobile" class="mui-control-content">
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					第一个选项卡子项-1
				</li>
				<li class="mui-table-view-cell">
					第一个选项卡子项-2
				</li>
				<li class="mui-table-view-cell">
					第一个选项卡子项-3
				</li>
				<li class="mui-table-view-cell">
					第一个选项卡子项-4
				</li>
				<li class="mui-table-view-cell">
					第一个选项卡子项-5
				</li>
			</ul>
		</div>
		<div id="item2mobile" class="mui-control-content">
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					第二个选项卡子项-1
				</li>
				<li class="mui-table-view-cell">
					第二个选项卡子项-2
				</li>
				<li class="mui-table-view-cell">
					第二个选项卡子项-3
				</li>
				<li class="mui-table-view-cell">
					第二个选项卡子项-4
				</li>
				<li class="mui-table-view-cell">
					第二个选项卡子项-5
				</li>
			</ul>
		</div>
		<div id="item3mobile" class="mui-control-content mui-active">
			<ul class="mui-table-view">
				<li class="mui-table-view-cell">
					第三个选项卡子项-1
				</li>
				<li class="mui-table-view-cell">
					第三个选项卡子项-2
				</li>
				<li class="mui-table-view-cell">
					第三个选项卡子项-3
				</li>
				<li class="mui-table-view-cell">
					第三个选项卡子项-4
				</li>
				<li class="mui-table-view-cell">
					第三个选项卡子项-5
				</li>
			</ul>
		</div>
	</div>
	<h5 class="mui-content-padded">Style</h5>
	<div class="mui-card">
		<form class="mui-input-group">
			<div class="mui-input-row mui-radio">
				<label>按钮</label>
				<input name="style" type="radio" checked="" value="">
			</div>
			<div class="mui-input-row mui-radio">
				<label>文字</label>
				<input name="style" type="radio" value="inverted">
			</div>
		</form>
	</div>
	<h5 class="mui-content-padded">Color</h5>
	<div class="mui-card">
		<form class="mui-input-group">
			<div class="mui-input-row mui-radio">
				<label><span class="mui-bg-primary" style="display:block;width:25px;height:25px;"></span>
				</label>
				<input name="color" type="radio" checked="" value="primary">
			</div>
			<div class="mui-input-row mui-radio">
				<label><span class="mui-bg-positive" style="display:block;width:25px;height:25px;"></span>
				</label>
				<input name="color" type="radio" value="positive">
			</div>
			<div class="mui-input-row mui-radio">
				<label><span class="mui-bg-negative" style="display:block;width:25px;height:25px;"></span>
				</label>
				<input name="color" type="radio" value="negative">
			</div>
		</form>
	</div>
	<script src="http://dcloudio.github.io/mui/dist/js/mui.min.js?v=2014-12-30 14:09:32 +0800"></script>

</body>
</html>