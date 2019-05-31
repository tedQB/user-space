<!--
<script type="text/javascript" src="http://www.jiese360.cn/js/jquery-1.8.3.min.js"></script>
-->
<!--
<script type="text/javascript" src="http://mat1.gtimg.com/www/asset/lib/jquery/jquery/jquery-1.11.1.min.js"></script>
-->

<script type="text/javascript" src="http://www.jiese360.cn/js/jquery-1.8.3.min.js"></script>
<!--
<script type="text/javascript" src="http://www.jiese360.cn/js/highcharts.js"></script>
-->
<script type="text/javascript" src="https://mta.qq.com/mta/resource/scripts/highcharts.js?t=1438071557"></script>

<script type="text/javascript" src="http://www.jiese360.cn/js/highcharts-more-v161110.js"></script>

<!--
<script type="text/javascript" src="http://static.hcharts.cn/highcharts/highcharts-more.js"></script>
-->

<style type="text/css">
	.recommend .mui-table-view-cell{ padding:11px 0px; }
	.recommend .mui-table-view-cell:after{ left:0px; }
	.recommend .cont{ display: none; margin-top:5px;}
	.recommend .cont b{ display:block; margin-bottom: 5px; }
	.recommend .cont ul{ padding-left: 0px}
	.recommend .cont ul li:nth-of-type(1) span{ color:#007aff; }
	.recommend .cont ul li:nth-of-type(2) span{ color:#dd524d; }
	.recommend .cont ul li:nth-of-type(3) span{ color:#4cd964; }
	.recommend .cont ul li:nth-of-type(4) span{ color:#f0ad4e; }	
	.recommend .cont ul li div{ margin:3px 0 3px 5px; }	
	#cont{ height:300px;}
	
</style>

	<div class="mui-content">
	 <div class="mui-content-padded" id="curve">	
		<div id="btn" class="mui-segmented-control theme">
			<a class="mui-control-item mui-active">
					周week
				</a>
			<a class="mui-control-item <?php if($args['userType']!='nohave'){ echo 'bdr'; } ?>">
					月month
				</a>
			<?php if($args['userType']!='nohave'){ ?>
			<a class="mui-control-item">
					<?=$args['userType'] ?>
				</a>
			<?php }?>
		</div>	
		<div id="cont">
			<div id="item1mobile" class="mui-control-content mui-active">
				<div id="chat1"></div>
			</div>
			<div id="item2mobile" class="mui-control-content">
				<div id="chat2"></div>
			</div>
			<?php if($args['userType']!='nohave'){ ?>
			<div id="item3mobile" class="mui-control-content">
				<div id="chat3"></div>			
			</div>	
			<?php }?>	
		</div>
		<div class="adar">
			<div id="container2"></div>
			<div class="recommend" id="recommend">
				<ul class="mui-table-view">
					<li class="mui-table-view-cell">小戒建议：提升自控能力方法<span class="mui-badge mui-badge-primary"><?=count($args['zikongnengli'])?></span>
						<div class="cont">
							<b>
								自控能力解释：每日能够自觉抵制接触黄源，降低接触黄源，意淫时间在每日生活中的比例的能力。
							</b>			
							<ul>
								<?php foreach ($args['zikongnengli'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>
							</ul>
						</div>
					</li>
					<li class="mui-table-view-cell">小戒建议：提升抵抗负能量能力方法<span class="mui-badge mui-badge-success"><?=count($args['dikangnengliang'])?></span>
						<div class="cont">
							<b>
								抵抗负能量能力解释：自己能够采取一些方法，能够经常成功阻止自己沉沦在黄源里，并形成习惯性的能力。
							</b>							
							<ul>
								<?php foreach ($args['dikangnengliang'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>
							</ul>		
						</div>		
					</li>
					<li class="mui-table-view-cell">小戒建议：提升正能量指数方法<span class="mui-badge mui-badge-warning"><?=count($args['dikangnengliang'])?></span>
						<div class="cont">
							<b>
								正能量指数解释：指的是自身是否具备健康乐观、积极向上的动力和情感,能够主动做给别人力量和希望，帮助别人的事情等一系列综合的分数。
							</b>																		
							<ul>
								<?php foreach ($args['zhengnengliang'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>		
							</ul>	
						</div>						
					</li>
					<li class="mui-table-view-cell">小戒建议：提升思考总结能力方法<span class="mui-badge mui-badge-primary"><?=count($args['sikaozongjie'])?></span>
						<div class="cont">
							<b>
								独立思考总结能力解释：能够从日常，普遍的生活，事情中，能够经常分析事件，学习书本的理论，并提炼，总结出一些规律性的养生/生活/学习/工作感悟，能够指导自己以后的生活轨迹的能力。
							</b>
							<ul>
								<?php foreach ($args['sikaozongjie'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>
							</ul>	
						</div>							
					</li>
					<li class="mui-table-view-cell">小戒建议：提升运动身体能力素质方法<span class="mui-badge mui-badge-danger"><?=count($args['yundonghuifu'])?></span>
						<div class="cont">
							<b>
								身体运动能力素质解释：身体素质,体质,耐力,力量,速度,灵敏等等综合能力
							</b>				
							<ul>
								<?php foreach ($args['yundonghuifu'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>
							</ul>	
						</div>						
					</li>
					<li class="mui-table-view-cell">小戒建议：提升解决问题能力建议方法<span class="mui-badge mui-badge-purple"><?=count($args['jiejuewenti'])?></span>
						<div class="cont">
							<b>
								解决问题能力解释：独立生活，面对困难和挫折展现的能力
							</b>					
							<ul>
								<?php foreach ($args['jiejuewenti'] as $key => $value) { ?>
									<li><span>阶段<?=$key+1?></span><div><?=$value ?></div></li>
								<?php }?>
							</ul>		
						</div>
					</li>	
				</ul>
			</div>			
		</div>	
      </div>	
	
<script>

$(function () {
	<?php 
		$weekarray=array("日","一","二","三","四","五","六");
	 ?>
		//console.log(new Date().getMonth());	
    $('#chat1').highcharts({      
    		/*数据面板样式*/
			chart: {
				type:'line',
				backgroundColor: {
					linearGradient: { x1: 0, y1: 0.3, x2: 0, y2: 1 },
					stops: [
						[0, '#FE8A4D'],
						[1, '#FF4033']
					]
				},
				height:300,
				borderRadius:8,
				borderColor: '',
				borderWidth: 2,
				className: 'dark-container',
				plotBackgroundColor: 'transparent',
				plotBorderWidth: 0			
			},			
			title: {
				text: '本周个人状态',
				style: {
                	color: '#FFFCFA',
                	fontFamily : '黑体'
           	 	}
			},
			xAxis: {
				categories: ['周日','周一', '周二', '周三', '周四', '周五', '周六'],
				tickColor:'#FF8B55',
			  	lineColor: '#FF6F50',	
			  	labels:{ 
					style:{ 
						color:'#FFC2B2',
					},
					formatter:function(){ 
						if('<?php echo "周".$weekarray[date("w")]?>' == this.value){ 
							return '<b style="color:#fff; font-size:14px ">'+this.value+'</b>';
						}
						else{ 
							return this.value; 
						}
					}
				},
				lineWidth :1,
				tickLength:1,//设置刻度线x轴长度
			},
			yAxis: {
				/*设置60分基准线样式*/
				plotLines: [
					{
						color: '#FFF28B',
						width: 2,
						value: 60,
						dashStyle: '',
						zIndex: 3
					}		],				
				/*设置60分基准线样式*/

				title: {
					text: ''
				},
				labels:{ 
					/*设置Y轴分数样式*/
					style:{ 
						color:'#FFC2B2',  
						fontWeight:'normal',
					}
					/*设置Y轴分数样式*/
				},				
				gridLineDashStyle: 'shortdash', /*设置背景刻度线*/	
				gridLineColor:'#FFBA74', /*设置背景颜色*/	
				lineWidth:0, //设置Y轴线宽
 				max: 100,    //设置Y轴最大值为100
           		tickInterval: 20   //设置Y轴坐标值的间隔固定为10,固定刻度值			
			
			},
			labels:{	
				items:[
				{
                	html:'及格线',
	                style: { 
						left: '0px',
						top: '60px',
						color:'#FFC2B2',
						fontWeight:'bolder',
						fontSize:'8px'
					}
            	},
				{
                	html:'危险线',
	                style: { 
						left: '0px',
						top: '120px',
						color:'#FFC2B2',
						fontWeight:'bolder'
					}
            	},
				{
                	html:'优秀线',
	                style: { 
						left: '0px',
						top: '20px',
						color:'#FFC2B2',
						fontWeight:'bolder'
					}
            	}
            	]
			},
			/*鼠标移动，弹出的得分框样式*/
			series: [{
				name: '得分',
				type: 'area',
				data: <?= $args['thisWeekdata'] ?>,//[-5, 59, 71, 80, 35, 80, 59],
				color:'#fff',
				marker:{ 
					symbol:'circle'
				}
			}],
			/*导出png,svg数据*/
			exporting: {
				enabled: false
			},
			/*版权*/
			credits: {
				enabled: false
			},
			/*x,y轴介绍*/
			legend: { 
				enabled: false
			},
			/*配置数值点的样式，以及渐变*/
			plotOptions: {
				area: {
				color:'#fff',
				fillColor: {
					linearGradient: [0, 0, 0, 300],
					stops: [
						[0, '#FE8A4D'], 
						[0.9, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
					],
					
				},
				fillOpacity:0.7,
				lineWidth: 2,
				marker: {  
					fillColor: '#FE8A4D',
					lineWidth: 2,
					lineColor: '#FFF5F0',
					states: {
						hover: {
							lineColor:'#FE8A4D',
							lineWidth:1,
							radius:4
						}
					},
				},
				shadow: false,			
			}
		}		
  });
	
	$('#container2').highcharts({
	            
	    chart: {
	        polar: true,
	        type: 'line'	        
	    },
	    
	    title: {
	        text: '自我状态指数'
	    },
	    /*仪表盘大小*/
	    pane: {
	    	size: '70%'
	    },
		/*版权*/
		credits: {
			enabled: false
		},	    
	    xAxis: {
	        categories: ['抵扛黄源能力', '解决问题能力', '身体运动指数', '思考总结能力', 
	                '正能量指数', '抵抗负能量能力'],
	        tickmarkPlacement: 'on',
	        lineWidth: 0
	    },
	        
	    yAxis: {
	        gridLineInterpolation: 'polygon',
	        lineWidth: 0,
	        min: 0,
	        max:10
	    },
	    
	    tooltip: {
	    	shared: true,
	        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b>分<br>'
	    },
	    
	    legend: {
	    	 enabled: true
	    },
		
		plotOptions: {
				area: {
				color:'#fff',
				/*
				fillColor: {
					linearGradient: [0, 0, 0, 300],
					stops: [
						[0, '#FE8A4D'], 
						[0.9, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
					],
					
				},
				*/
				fillOpacity:0.5,
				lineWidth: 2,
				marker: {  
					fillColor: '#FE8A4D',
					lineWidth: 1,
					lineColor: '#FFF5F0',
					states: {
						hover: {
							lineColor:'#FE8A4D',
							lineWidth:1,
							radius:4
						}
					},
				},
				shadow: false,			
			}
		},
		
	    series: [{
	        name: '成功者状态',
	       	type: 'area',
	        data: [7.5, 6, 8, 7, 8, 6.5],
	        pointPlacement: 'on',
	        color:'#FF4033'
	    },{
	        name: '你的个人状态',
	        type: 'area',
	        data: <?=$args['getSateData'] ?>,
	        pointPlacement: 'on',
	        color:'',

	    }]
	
	}); 	

});
				
</script>
	<script type="text/javascript">
		$(function(){ 	
			var cont = $("#cont .mui-control-content");
			var btn = $("#btn .mui-control-item");
			var chat2 = $('#chat2');
			var chat3 = $('#chat3');
			var ids = <?=$args['slug'] ?>;

			function showOrHide(cont,index){ 
				cont.hide();
				cont.eq(index).show();
				btn.removeClass('mui-active');
				btn.eq(index).addClass('mui-active');
			}

			function initChat(obj){ 

				$(obj.id).highcharts({
					chart: {
						type:'line',
						backgroundColor: {
							linearGradient: { x1: 0, y1: 0.3, x2: 0, y2: 1 },
							stops: [
								[0, '#FE8A4D'],
								[1, '#FF4033']
							]
						},
						height:300,
						borderRadius:8,
						borderColor: '',
						borderWidth: 2,
						className: 'dark-container',
						plotBackgroundColor: 'transparent',
						plotBorderWidth: 0,		
						zoomType: 'x' //可设置手动自然拖放		
					},			
					title: {
						text: obj.title,
						style: {
		                	color: '#FFFCFA',
		                	fontFamily : '黑体'
		            	}	
					},
					scrollbar: {
						enabled: true
					},					
					xAxis: obj.xAxis,
			        tooltip: {
			            xDateFormat: '%Y-%m-%d',
			            shared: true
			        },					
					yAxis: {
						/*设置60分基准线样式*/
						plotLines: [{
							color: '#FFF28B',
							width: 2,
							value: 60,
							dashStyle: '',
							zIndex: 3
						}
						],				
						/*设置60分基准线样式*/

						title: {
							text: ''
						},
						labels:{ 
							/*设置Y轴分数样式*/
							style:{ 
								color:'#FFC2B2',  
								fontWeight:'normal',
							}
							/*设置Y轴分数样式*/
						},				
						gridLineDashStyle: 'shortdash', /*设置背景刻度线*/	
						gridLineColor:'#FFBA74', /*设置背景颜色*/	
						lineWidth:0, //设置Y轴线宽
		 				max: 100,    //设置Y轴最大值为100
		           		tickInterval: 20   //设置Y轴坐标值的间隔固定为10,固定刻度值			
			
					},
					labels:obj.labels,					
					/*鼠标移动，弹出的得分框样式*/
					series: [{
						name: '得分',
						type: 'area',
						data: obj.series,//[-5, 59, 71, 80, 35, 80, 59],
						color:'#fff',
						marker:{ 
							symbol:'circle'
						}
					}],
					/*导出png,svg数据*/
					exporting: {
						enabled: false
					},
					/*版权*/
					credits: {
						enabled: false
					},
					/*x,y轴介绍*/
					legend: { 
						enabled: false
					},
					/*配置数值点的样式，以及渐变*/
					plotOptions: {				
						area: {
						color:'#fff',
						fillColor: {
							linearGradient: [0, 0, 0, 300],
							stops: [
								[0, '#FE8A4D'], 
								[0.9, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
							],
							
						},
						fillOpacity:0.7,
						lineWidth: 2,
						marker: {  
							enabled: true,
							fillColor: '#FE8A4D',
							lineWidth: 2,
							lineColor: '#FFF5F0',
							states: {
								hover: {
									lineColor:'#FE8A4D',
									lineWidth:1,
									radius:4
								}
							},
						},
						shadow: false,
						
						
					}
					}
			

				})
				
			};

			$('#recommend .mui-table-view-cell').click(function(){ 
				//console.log($(this),index);
				if(ids!='1237447416'){ 
					$(this).find('.cont').toggle();
					$(this).find('.mui-badge').toggle();
				}

			})
			/*
			.each(function(index,obj){ 
				$(obj).find('.cont').click(function(){ 
					$(this).toggle();
				})
			})
			*/
			$('#btn').find('.mui-control-item').each(function(index,obj){ 
				
				$(obj).click(function(){

					if(index==0){ 
						showOrHide(cont,index);
					}
					if(index==1){ 
						var thisMonthdata = <?= $args['thisMonthdata'] ?>;	
						if(thisMonthdata==null){
							var temp=[];
							for(var i=0;i<30;i++){ 
								temp[i] = null;
							}
							thisMonthdata = temp;
						}				
						showOrHide(cont,index);
						if(!chat2.html().length){
							initChat({ 
								id:'#chat2',
								title:'本月个人状态',
								xAxis:{						
									categories: <?= json_encode($args['getMonthDays']) ?>,
									type: 'datetime',
									dateTimeLabelFormats: { // don't display the dummy year
										day:"%m-%e",
										month:"%Y-%m",
									},						
									tickColor:'#FF8B55',
								    lineColor: '#FF6F50',	
								    labels:{ 
										style:{ 
											color:'#FFC2B2',
										},
										formatter:function(){						

											//if('<?php echo "周".$weekarray[date("w")]?>' == this.value){ 
											
											if('<?php echo $args['getMonthDays'][date("j")-1] ?>' == this.value){ 
												return '<b style="color:#fff; font-size:14px ">'+this.value+'</b>';
											}
											else{ 
												return this.value; 
											}
										}
									},
									lineWidth :1,
									tickLength:1,
								},
								labels:<?php if($args['thisMonthdata']===null||strlen($args['thisMonthdata'])==4){  ?>
									{	
										items:[
											{
							                	html:'无数据',
								                style: { 
													left: '30px',
													top: '100px',
													color:'#FFC2B2',
													fontWeight:'bolder',
													fontSize:'80px'
												}
							            	}
							            ]
							        }

								<?php }else{ ?>
									{	
									items:[
										{
						                	html:'及格线',
							                style: { 
												left: '0px',
												top: '60px',
												color:'#FFC2B2',
												fontWeight:'bolder',
												fontSize:'8px'
											}
						            	},
										{
						                	html:'危险线',
							                style: { 
												left: '0px',
												top: '120px',
												color:'#FFC2B2',
												fontWeight:'bolder'
											}
						            	},
										{
						                	html:'优秀线',
							                style: { 
												left: '0px',
												top: '20px',
												color:'#FFC2B2',
												fontWeight:'bolder'
											}
						            	}

					            	]
								}									


								<?php }?>,
								series:thisMonthdata
								//xAxis:<?= json_encode($args['getMonthDays']) ?>,
								//series: <?= $args['thisMonthdata'] ?>
								
							})
						}

					}
					if(index==2){ 
						var YearData = <?= $args['getYearData'] ?>;	
						if(YearData!=null){
							YearData = $.each(YearData,function(index,obj){ 	
								obj[0] = eval(obj[0]);
							})
						}else{ 
							YearData=[[null]];
						}

						showOrHide(cont,index);
						if(!chat3.html().length){
							initChat({ 
								id:'#chat3',
								title:'年度个人状态',		
								xAxis:{														
						            type: 'datetime',
						 			labels: {
						                formatter: function () { /*自定义日期格式2015-01刻度，真的好难。。*/
						                    return '<span style="color:#FFC2B2">'+Highcharts.dateFormat("%Y-%m", this.value)+'</span>';
						                }
						            },												
									tickColor:'#FF8B55',
								    lineColor: '#FF6F50',	
									lineWidth :1,
									tickLength:1,
								},				
								labels:<?php if($args['getYearData']===null||strlen($args['getYearData'])==4){ ?>
									{	
										items:[
											{
							                	html:'无数据',
								                style: { 
													left: '30px',
													top: '100px',
													color:'#FFC2B2',
													fontWeight:'bolder',
													fontSize:'80px'
												}
							            	}
							            ]
							        }

								<?php }else{ ?>
									{	
									items:[
										{
						                	html:'及格线',
							                style: { 
												left: '0px',
												top: '60px',
												color:'#FFC2B2',
												fontWeight:'bolder',
												fontSize:'8px'
											}
						            	},
										{
						                	html:'危险线',
							                style: { 
												left: '0px',
												top: '120px',
												color:'#FFC2B2',
												fontWeight:'bolder'
											}
						            	},
										{
						                	html:'优秀线',
							                style: { 
												left: '0px',
												top: '20px',
												color:'#FFC2B2',
												fontWeight:'bolder'
											}
						            	}										

					            	]
								}									


								<?php }?>
								,										
								series: YearData
							})
						}
					}
				})
			})

		})
	</script>
