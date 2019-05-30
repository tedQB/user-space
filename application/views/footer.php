  <style type="text/css">
	.mui-bar-tab span.badge2{
	  position: absolute;
	  top: -26px;
	  left: 92%;
	  padding: 1px 5px;
	  margin-left: -10px;
	  font-size: 10px;
	  line-height: 1.4;
	  color: #fff;
	  background: #007aff;
	  -webkit-user-select: none; 
	  -khtml-user-select: none;
	  user-select: none;
	}
	.relat{ position: relative; }
  </style>
		<nav class="mui-bar mui-bar-tab">
		  <a class="mui-tab-item <?php if($args['current']==1) echo 'mui-active'; ?>" 
			<?php if($args['current']!=1){ echo 'href='.base_url('home/index').'/'.$args['slug']; } ?>>
				<span class="cate cate1"></span>
				<span class="mui-tab-label relat fz">我的状态</span>
			</a>
			<a class="mui-tab-item <?php if($args['current']==2) echo 'mui-active'; ?>"
			<?php if($args['current']!=2){ echo 'href='.base_url('diary/r').'/'.$args['slug']; } ?>>
				<span class="cate cate2"></span>
				<span class="mui-tab-label relat fz">我的日记</span>
			</a>
			<a class="mui-tab-item <?php if($args['current']==3) echo 'mui-active'; ?>"<?php if($args['current']!=3){ echo 'href='.base_url('member/r').'/'.$args['slug']; } ?>>
				<span class="cate cate3"></span>
				<span class="mui-tab-label relat fz">我是会员<span class="mui-badge badge2">更新</span></span>
			</a>
			<a style="<?php if($args['slug']=='1237447416'){ echo 'display:none'; } ?>" class="mui-tab-item <?php if($args['current']==4) echo 'mui-active'; ?>" <?php if($args['current']!=4){ echo 'href='.base_url('huibao/r').'/'.$args['slug']; } ?>>
				<span class="cate cate4"></span>
				<span class="mui-tab-label fz">每日汇报</span>
			</a>
		</nav>
	</div>
</body>
</html>