<script type="text/javascript" src="https://a.alipayobjects.com/seajs/seajs/2.2.0/sea.js"></script>
<link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css">
<div style="padding-top:200px; text-align:center; position:relative">
  <div class="input-group" style="margin:auto 10px;">
    <label for="weixinName" class="input-group-addon" style=""></label>
    <input type="text" class="form-control" id="weixinName" placeholder="请输入会员Id">
  </div>
  <button type="button" class="btn btn-info" id="submitBtn" style="position:absolute; top:200px;right:9px; padding:9px 20px; ">登录</button>
</div>
<div style="padding-top:20px; text-align:center; position:relative; display:none;" id="sp">
	<div id="d2" style="color:#ccc; ">您好，您暂时还不是会员，点击这里<a style="color:#ccc;" href="<?=base_url('home/index')?>/1237447416">>>>>>>></a>查看会员功能</div>
</div>
<div style="padding-top:20px; text-align:center; position:relative;" id="sp2">
	<div id="d2" style="color:#ccc; ">您好，非会员可以点击这里<a style="color:#ccc;" href="<?=base_url('home/index')?>/1237447416">>>>>>>></a>查看会员功能</div>
</div>
<script type="text/javascript">


seajs.config({
alias: {
$: 'https://a.alipayobjects.com/jquery/jquery/1.9.1/jquery.js'
}
});
seajs.use(['$','http://style.aliexpress.com/js/6v/lib/gallery/store/store.js'], function($,store) {

		console.log(store.get('pass'));

		$('#weixinName').val(store.get('pass'));	

		$('#submitBtn').click(function(){
			$.ajax({
				url: "<?=base_url('login/authAllowed')?>",
				type: 'POST',
				data:{ //ajax处理data的方式
					id:$.trim($("#weixinName").val()),
				},	
				dataType:'json',			
				timeout:3000,
				success:function(data){
					if(data=='1'||data=='3'){ 
						store.set('pass',$.trim($("#weixinName").val()));
						window.location.href = "<?=base_url('home/index')?>/"+$.trim($("#weixinName").val());
					}else if(data=='2'){ 
						$('#sp').show();
						$('#sp2').hide();
					}
				},	
				error:function(){ 
				}
			})			
		})

})	
</script>
