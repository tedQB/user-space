<style>
*{-webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
	.ms-panel {
    /*position: absolute;*/
    position: fixed;
    overflow: hidden;
    height: 100%;
    width: 100%;
    top: 100%; left: 0;
    background-color: #ffffff;
    visibility: hidden;
    display: none;
    z-index: 100;
    -webkit-transform: translateZ(0px);
}
.mui-content{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; }
.mui-content *{ -webkit-user-select: none; -khtml-user-select: none; user-select: none; }
.ms-panel.horizontal {
    left: 100%; top: 0;
}
.ms-panel .ms-panel-header {
    height: 36px;
    border-bottom: 1px solid #ddd;
    text-align: center;
    font-size: 15px;
    line-height: 36px;
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    background-color: #ffffff;
    z-index: 2;
}
.ms-panel .ms-panel-bodyer {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    -webkit-transform: translateZ(0px);
    height: 100%;
    position: relative;
    z-index: 1;
    padding:40px 5px 0;
}
.ms-panel .ms-panel-cancel {
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeBAMAAADJHrORAAAAG1BMVEUAAABmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZ8aTmeAAAACHRSTlMAb0X2VldYYZ26vlYAAACMSURBVBjTRdEhDsJQEEXR16QEX4VEsIIqloAsCiRLwJDgCTDLhk5u3vtucq6YyZcm5V2k4bX3uKm7djV7vtb3P68BXB8NVbO5bkowrqwEp2YCM4GZAHYAOzg0Jzg2J4AT1KK8sXwFq7GkmcB8JoDfvWR44QqzCGCuCBOECWAHcIKnWf03WzN/91DepB+/ckpiQmNfgQAAAABJRU5ErkJggg==) no-repeat 0 center;
    width: 15px; height: 100%;
    position: absolute;
    right: 12px; top: 0;
    display: block;
    background-size: 100% auto;
}
.ms-panel.horizontal .ms-panel-cancel {
    background: none;
    width: 25px; height: 100%;
    position: absolute;
    left: 6px; top: 0;
    right: auto;
    display: block;
    background-size: 100% auto;
    /*position*/
}
.ms-panel.horizontal .ms-panel-cancel .ms-icon{
    font-size: 25px;
    font-weight: bold;
    color: #858585;
    top: 2px;
}
.ms-panel.panel-show {
    visibility: visible;
    display: block;
}
.mui-table-view .clipped{ 
	overflow: hidden;
	margin-top:5px; 
	height:30px;

}
.ms-panel-bodyer{ 
	line-height: 20px;
}
.ms-panel-bodyer dd{ 
	margin-left:0px; 
	text-indent: 20px; 
    position: relative;
    padding:5px 0;
    overflow: hidden;
    background-color: inherit;
    -webkit-touch-callout: none	
}
.ms-panel-bodyer dd:after {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 15px;
    height: 1px;
    content: '';
    border-bottom:1px dashed #000;
    -webkit-transform: scaleY(.5);
    transform: scaleY(.5);
}
#diary{ margin-top:26px;}
.ms-panel-bodyer dd.fr:after{ background: none;}
.ms-panel-bodyer dd.fr{ text-align: right; }
.ms-panel-bodyer dd.fd:after{ background: none; border-bottom:0px; }
.ms-panel-bodyer dd.fd{ text-align: right; color:#C8D1D5; }
.mui-bar-nav~.mui-content{ padding-top:10px;}
.mg-bottom{ margin-bottom:34px;}
.hidden{ overflow: hidden;}
.paper{ color:#C8D1D5; }
.ms-panel .ms-panel-bodyer{ -webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
.ms-panel .ms-panel-bodyer *{ -webkit-user-select: inherit;-khtml-user-select: inherit; user-select: inherit; }
.ms-panel .ms-panel-bodyer .break{ height:0px; font-size:0px; padding:1px;}
.ms-panel .ms-panel-bodyer dd.break:after{background: none; border-bottom:0px; }
</style>
<link rel="stylesheet" type="text/css" href="http://style.aliunicorn.com/mobile/ae/common/iconfont/1.0.0/iconfont.css">
<div class="mui-content">
<?=$args['getRecentWork'] ?>
	<ul class="mui-table-view" id="diary">	
		<?php if($args['getRecentWork']!='null'){ 
			foreach ($args['getRecentWork'] as $key => $value) { ?>
			<li class="mui-table-view-cell">
				<span class="date"><?=$value['subDate'] ?></span>
				<p class="clipped"><?=mb_substr($value['cont6'],0,40)?></p>
				<dl style="display:none;" class="cont">
					<dd><?=$value['cont1'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont2'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont3'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont4'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont5'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont6'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd><?=$value['cont7'] ?></dd>
					<dd class="break">----------------------</dd>
					<dd>日报成绩为<?=$value['sum']?>分。<?=$value['tip']?></dd>
					<dd class="break">----------------------</dd>
					<dd class="fr">日期:<?=$value['subDate'] ?></dd>
					<dd class="break">----------------------</dd>
					<?php 
						if(strlen($args['declaration'])){
							echo "<dd>";
							echo "我立下的誓言:".$args['declaration'];
							echo "</dd><dd class='break'>----------------------</dd>";
						}
					?>
					<dd class="fd"><span class="paper">来自www.jiese360.com会员日记</span></dd>
				</dl>			
			</li>
			<?php } ?>
		<?php }else{ ?>
			<li class="mui-table-view-cell">
				<a href="<?=base_url('huibao/r').'/'.$args['slug'] ?>">点击这里开始你的第一篇日记</a>
			</li>
		<?php }?>
	</ul>
</div>
<script id="list-li" type="text/x-handlebars-template">
	{{#each arr}}
	<li class="mui-table-view-cell">
		<span class="date">{{subDate}}</span>
		<p class="clipped">{{cont6}}</p>
		<dl style="display:none;" class="cont">
			<dd>{{cont1}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont2}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont3}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont4}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont5}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont6}}</dd>
			<dd class="break">----------------------</dd>
			<dd>{{cont7}}</dd>
			<dd class="break">----------------------</dd>
			<dd>日报成绩为{{sum}}分。{{tip}}</dd>
			<dd class="break">----------------------</dd>
			<dd class="fr">日期:{{subDate}}</dd>
			<dd class="break">----------------------</dd>
			{{#if ../hasDec}}
			<dd>我立下的誓言:{{../../declaration}}</dd>
			<dd class="break">----------------------</dd>
			{{/if}}
			<dd class="fd"><span class="paper">来自www.jiese360.com会员日记</span></dd>
		</dl>	
	</li>
	{{/each}}
</script>
<script type="text/javascript" src="http://style.aliunicorn.com/mobile/ae/common/atom/1.0.1/atom.js"></script>

<script>
  seajs.use(['http://style.aliunicorn.com/mobile/ae/common/panel/1.0.1/panel.js', 'http://style.aliunicorn.com/js/6v/lib/gallery/jquery/jquery.js','http://style.aliunicorn.com/js/6v/lib/gallery/handlebars/handlebars.js'], function(panel, $ ,Handlebars) {

  		function bindClick(){
	 		$('#diary li').die().bind('click', function() {
				var cont = $(this).find('.cont').html();
				var title = $(this).find('.date').html();

				new panel({ 
			 		title: "日记内容",
			        content: cont,
					isVertical: false,
			        afterShow: function() {
			        	$("body").addClass("hidden");
			        },
			        afterHide: function() {
			            $("div[id*='ai-']").remove();
			            $("body").removeClass("hidden");
			        }
	    		}).show();

	  		});	
  		}
  		bindClick();
  		/*****日记打开******/

  		/*滚动加载日记内容*/
  		var dec = "<?=$args['declaration'] ?>";
	    var _config = {
	        api:"<?=base_url('diary/getList')?>",
	        productContion:$('#diary'),
			//当前请求的页数
	        loadingHtml: '<div class="loading-layout" id="photo-wall-loading"><span class="loading-s"></span></div>',
			pageSize:<?=$args['getResultCount'] ?>,
			source:$("#list-li").html(),
			declaration:dec,
			screenHeight:window.innerHeight - window.innerHeight / 5
	    };

	    var _cache = {
	        isAddLoading: false,
	        curPage:1,//当前页书
	        hasNext: true,
            isAjax: false,
	        template:Handlebars.compile(_config.source)
	    };


		function _bindEvent(conf){

	        $(window).scroll(function() {
				var bodyHeight = $(document.body).height();
	            var scrollHeight = window.innerHeight + $(window).scrollTop() + _config.screenHeight;
	            if(_config.declaration.length){ 
	            	_config.hasDec = true;
	            }else{ 
	            	_config.hasDec = false;
	            }	           
	             //加载数据
	          	if (_cache.hasNext) {	
		            if(scrollHeight >= bodyHeight && bodyHeight != window.innerHeight) {
		                _ajaxPostList(conf,_cache.curPage+1);
		            }
	        	}
	        });
    	}
		function _showLoading(){
			_config.productContion.parent().append(_config.loadingHtml);
	        $('#error-wall-tips').remove();
			_cache.isAddLoading = true;
		}
		function _closeLoading(){
			$('#photo-wall-loading').remove();
			_cache.isAddLoading = false;
			_cache.isComposing = false;
		}

		function _ajaxPostList(conf,curPage){

	        if (_cache.isAjax) return;
            _cache.isAjax = true;

			$.ajax({
				url: conf.api,
				type: 'POST',
				data:{ //ajax处理data的方式
					cur_page:curPage,
					slug:<?= $args['slug'] ?>,
				},	
				dataType:'json',			
				timeout:3000,
				success:function(data){
					_cache.isAjax = false;
					if(!data){
						$('#diary').addClass('mg-bottom');
						return ; 
					}
                    _cache.hasNext = data.hasNext;
                    _cache.curPage = data.currentPage;		
					_buildPostHtml(data);					
				},
				error:function(){ 
					_closeLoading();
				//_showFailInfo();
				}
			})
		}

		function _buildPostHtml(data){
			var template = Handlebars.compile(_config.source);
			var content = template({ 
				'arr':data['result'],
				'hasDec':_config.hasDec,
				'declaration':_config.declaration
			});
			_config.productContion.append(content);
			bindClick();
			_cache.isComposing = false;
		}	

		_bindEvent(_config);	  			
	})

</script>
