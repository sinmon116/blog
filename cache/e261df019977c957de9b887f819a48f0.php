<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta property="qc:admins" content="542536566763012535145636" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>留言 - 发布</title> 
  <meta name="keywords" content="有奖征文,征文比赛,有奖征文比赛,年味为什么越来越淡了" /> 
  <meta name="description" content="享笑网每周举行一期不同主题的有奖征文及征文比赛活动，作者投稿审核通过即可获得10元奖金，然后由用户对投稿文章进行点评，分享一次加10分，评论一次加5分，顶一次加3分，踩一次减2分，当期结束后总得分第一的作者将获得100元奖金，第二名30元奖金，第三名20元奖金；每期第一名作者有权利指定一位当前文章最佳评论，评论作者获得10元奖金。每期第一名文章随机抽取一个评论，其作者获得5元奖金。本期有奖征文专题：年味为什么越来越淡了" /> 
  <meta name="viewport" content="width=1050" /> 
  <link rel="stylesheet" type="text/css" href="/public/index/css/common.css?v7.2" /> 
  <link rel="stylesheet" type="text/css" href="/public/index/css/public.css?v1" /> 
  <link href="/public/index/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="icon" type="image/x-icon" /> 
  <link href="/public/index/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <script type="text/javascript" src="/public/index/js/jq.js?v4.1"></script> 
  <script type="text/javascript" src="/public/index/js/ss.js?v4.8"></script> 
 </head> 
 <body>
  <script type="text/javascript" src="/public/index/js/ckeditor.js?v=2.0"></script> 
  <div class="pb-container"> 
   <div class="pb-container-main pb-after-clear"> 
    <!-- 公共头部 --> 
    <div class="pb-main pb-navwrap pb-after-clear"> 
     <div class="pb-iblock pb-fl pb-logo"> 
      <a href="index.html"><img src="images/logo.jpg" alt="享笑网LOGO 征文比赛 有奖征文" /></a> 
     </div> 
     <div class="pb-iblock pb-fl pb-nav"> 
      <ul> 
        <li><a href="index.php?m=index&a=index">首页</a></li> 
       <li><a href="/index.php?m=about&a=about">关于我</a></li> 
       <li><a href="/index.php?m=moodlist&a=moodlist">碎言碎语</a></li> 
       <li><a href="/index.php?m=life&a=life">慢生活</a></li> 
       <li class="pb-nav-li-last"><a href="/index.php?m=ly&a=ly">留言板</a></li> 
      </ul> 
     </div> 
     <div class="pb-iblock pb-fr pb-oths"> 
  
      <div class="pb-ucenter pb-after-clear"> 
       <div id="uMessageCenter"> 
        <i class="pb-icons triangle"></i> 
        
        <i class="pb-icons notice pb-hide"></i> 
       </div> 
       <br /> 
       <ul> 
        <li><a href="/user" id="uSetEntry"><i class="pb-icons my"></i> 个人中心</a></li> 
        <li><a href="/site/logout"><i class="pb-icons logout"></i> 退出登录</a></li> 
       </ul> 
      </div> 
      <br /> 
      <form action="/index.php?m=moodlist&a=search" method='post' > 
       <input class="pb-search-btn" type="submit" value="" /> 
       <input class="pb-search" type="text" name='content' placeholder='输入帖子标题'/> 
      </form> 
     </div> 
    </div> 
    <!-- 公共头部 --> 
    <style>
.cke_toolbox_collapser.cke_toolbox_collapser_min{
	display:none;
}
</style> 
    <link rel="stylesheet" type="text/css" href="/public/index/css/article.css" /> 
    <div class="atl-add-bg pb-mt40"> 
     <div class="atl-add-head pb-main"> 
      <h3>叶子的离开，是因为风的追求还是树的不挽留?</h3> 
      <p>· 一声问候，让我们不再陌生;一句祝福，让我们不再遥远;留言中有你，感觉温馨;交流中有你，感觉亲切;空间有你，感觉精彩。</p> 
	  <p>·我不会眼睁睁地看着你往火炕里跳，我会闭上眼睛的。</p>
	</div> 
    </div> 
    <div class="pb-main atl-add pb-mt30"> 
     <div class="pb-inner-main"> 
	 <!-- 表单处理 -->
      <form  action="/index.php?m=Ly&a=doly" method="post" enctype="multipart/form-data"> 
       <h3 class="pb-mt5 pb-size-big pb-clr1">内容</h3>
       <div class="editormd" id="test-editormd">
<textarea placeholder="長得好看的都會在這邊說點什麼O(∩_∩)O~~..." name="content" class="commentbody" rows="5" style="border:1px solid #edf1f6;background:#fff;width:670px;height:250px;" tabindex="4"></textarea>
		</div>
		<h3 class="pb-size-big pb-clr1"><a class="pb-clr2" href="javascript:Sys.showRuleDiv();"></a>留言中有你，感觉温馨</h3> 
		<?php if (!empty($ly)): ?>
		<?php foreach ($ly as $key=> $val): ?>
	   <p class="tle pb-mt10"> <input class="text-input small-input" type="text" maxlength="100" value="<?=$val['neirong']; ?>"/>
		<span>留言者：<?=$val['username']; ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>time：<?=$time = date('Y-m-d H:i:s' , $val['lctime']); ?></span>
		</p> 
		<?php endforeach; ?>
		<?php endif; ?>
				
      <div class="pb-mt50 pb-listpage"> 
       <table>
        <tbody>
         <tr>
          <td><a href="<?=$url['first']; ?>" class="yiiPagerA">首页</a></td> 
          <td><a href="<?=$url['prev']; ?>" class="yiiPagerA on">上一页</a></td> 
          <td><a href="<?=$url['next']; ?>" class="yiiPagerA">下一页</a></td> 
          <td><a href="<?=$url['last']; ?>" class="yiiPagerA">末页</a></td>
         </tr>
        </tbody>
       </table> 
      </div> 
       <p class="but pb-mt50"> <input type="submit" onclick="submitPostForm();" value="留言" name="submit" class="pb-button01" /> 
        <!--<input type="submit" value="预览" name="submit" class="pb-button02 pre"/>--> </p> 
      </form> 
     </div> 
     <div class="pic"> 
      <span id="swf_EssayContent"></span> 
      <input id="btnCancel" type="button" style="display:none;" value="取消" disabled="disabled" /> 
     </div> 
    </div> 
	<!-- 文本编辑器 -->
	
    <script>
vars.verifyHtml = '<img onclick="changeVerifyCodeImage();" id="yw1" src="/essay/captcha/v/56a21e02893c2" alt="" /><a href="javascript:void(0);" id="yw0_button" class="yw0_button" onclick="changeVerifyCodeImage();">看不清？点击这里</a>';
$(document).ready(function(){
	Sys.showRuleDiv();
	vars.essayEditor = Sys.genEditor( 'EssayUser_content',{resize_maxWidth :695,resize_minWidth :695,height:500,width:695});
	vars.essayEditor.on('focus',function(){
		Sys.checkUserLogin();
	});
	$('#EssayUser_title').on('focus',function(){
		Sys.checkUserLogin();
	});
	Sys.genSwfupload({
		upload_url : '/essay/UploadImage',
		post_params : {
			'op' : 'cropEssayContent',
			'screen_w' : window.screen.width,
			'screen_h' : window.screen.height
		},
		file_types : "*.jpg;*.gif;*.png",
		file_size_limit : "3 MB",
		upload_success_handler : editPostUploadSucess
	},'swf_EssayContent');
	Sys.genSwfupload({
		upload_url : '/essay/UploadImage',
		post_params : {
			'op' : 'cropEssayHead',
			'screen_w' : window.screen.width,
			'screen_h' : window.screen.height
		},
		file_types : "*.jpg;*.gif;*.png",
		file_size_limit : "3 MB",
		upload_success_handler : editPostUploadSucess
	},'swf_EssayHead');
	
	$('.atl-selet-head a').live('click',function(){
		$('.atl-selet-head a div').remove();
		var img = $(this).attr('headimage'),inputObj=$("#EssayUser_headimage");
		var old = inputObj.val();
		if( img != old){
			$(this).append('<div></div>');
			inputObj.val( img);
		}else{
			inputObj.val( '');
		}
	})
});
function editPostUploadSucess( file ,data){
	var ret = $.evalJSON( data);
	if( ret.ret == 0){
		var imageUrl = vars.essayImageUrl+ret.name;
		if( ret.op == 'cropEssayContent'){
			Sys.openJscropDialog( imageUrl + "?refresh",3, ret.width, ret.height, ret.width, ret.height,false,{title:'编辑图片 ( 最终尺寸：'+ret.needWidth+'*'+ret.needHeight+' )','minSize':[ret.needWidth,ret.needHeight],'zoom':false},function( data){
				$.get('/essay/cropImage?op='+ret.op+'&x='+data.x+'&y='+data.y+'&x2='+data.x2+'&y2='+data.y2,function( childRet){
					var imageUrl = vars.essayImageUrl+childRet.name;
					vars.essayEditor.insertHtml( '<p><img src="'+imageUrl+'" alt="有奖征文,征文比赛,有奖征文比赛,年味为什么越来越淡了"/></p>');
				},'json');
			});
		}else if( ret.op == 'cropEssayHead'){
			Sys.openJscropDialog( imageUrl,1, ret.width, ret.height, parseInt( ret.needWidth), parseInt( ret.needHeight),false,{title:'编辑图片 ( 最终尺寸：'+ret.needWidth+'*'+ret.needHeight+' )','minSize':[ret.needWidth,ret.needHeight],'zoom':true},function( data){
				$.get('/essay/cropImage?op='+ret.op+'&x='+data.x+'&y='+data.y+'&x2='+data.x2+'&y2='+data.y2+'&zoom='+data.zoom,function( childRet){
					var imageUrl = vars.essayImageUrl+childRet.name+'?'+Math.random();
					var obj = $('.atl-selet-head li:first').clone();
					obj.find('a').attr('headimage',imageUrl);
					obj.find('img').attr('src', imageUrl);
					obj.show();
					obj.insertBefore( $('.atl-selet-head li:last'));
					var i = -1;
					$('.atl-selet-head a').each(function(){
						++i;
						if(i == 0){
							return true;
						}
						if( i % 6 == 0){
							$(this).parent().attr('style','margin-right:0;');
						}
					});
					obj.find('a').trigger('click');
				},'json');
			});
		}
		return true;
	}
	W.tips(ret.msg);
}
function checkPost(){
	$("#EssayUser_content").html( vars.essayEditor.getData() );
	var titleLength = $("#EssayUser_title").val().length;
	var conentLength = $("#EssayUser_content").val().length;
	if( titleLength <= 0){
		W.tips( '你好像还没填写标题哦 :)');
		return false;
	}else if( titleLength < 1){
		W.tips( '为了顺利通过审核，投稿文章的标题不能少于1个字 :)');
		return false;
	}
	if( conentLength <= 0){
		W.tips( '你好像还没填写内容哦 :)');
		return false;
	}
	if( conentLength < 100){
		W.tips( '为了顺利通过审核，投稿文章的主内容不能少于100个字 :)');
		return false;
	}
	if( $("#EssayUser_headimage").val() == ''){
		W.tips( '请为你的文章配一张喜欢的封面吧 :)');
		return false;
	}
	$("#EssayUser_content").html( encodeURIComponent(vars.essayEditor.getData()) );
	
	return true;
}
function submitPostForm( jq){
	if( vars.ajaxSubmiting){
		W.tips('正在提交文章...');
		return false;
	}
	if( !checkPost()){
		return false;
	}
	vars.ajaxSubmiting = true;
	$("#essay-user-form").ajaxSubmit(function( ret){
		vars.ajaxSubmiting = false;
		ret = $.evalJSON( ret); 
		if( ret.ret == 0){
			window.top.location.href = window.top.location.href;
			return true;
		}else if( ret.ret == 3){//需要输入验证码
			vars.ajaxSubmiting = false;
			displayVerifyCodeMsgbox(vars.verifyHtml,'/essay/CheckVerifyCode',function(){
				submitPostForm();
			});
			return false;
		}
		W.tips( ret.msg);
	});
}
function previewPost(){
	if( !checkPost()){
		return false;
	}
	$("#pre-title").val( $("#EssayUser_title").val());
	$("#pre-content").val( $("#EssayUser_content").val());
	return true;
}
</script> 
   </div> 
   <!-- 公共尾部 --> 
   <div style="clear:both;"></div> 
   <div class="pb-footer"> 
    <div class="pb-footer-wp"> 
     <div class="pb-main pb-footer-cnt pb-size-small"> 
      <span class="pb-fl">&copy; 2012 - 2015 深圳市享笑网科技有限公司版权所有 粤 icp 备 13011067 号</span> 
      <ul class="pb-fr"> 
       <li><a href="http://www.whzcwl.com.cn" target="_blank">志诚网络</a></li> 
       <li><a href="http://wpa.qq.com/msgrd?v=1&amp;uin=2338601847&amp;site=www.sharesmile.cn&amp;menu=yes">版权声明</a></li> 
       <li><a href="http://wpa.qq.com/msgrd?v=1&amp;uin=2338601847&amp;site=www.sharesmile.cn&amp;menu=yes">客服中心</a></li> 
       <li><a href="http://wpa.qq.com/msgrd?v=1&amp;uin=2338601847&amp;site=www.sharesmile.cn&amp;menu=yes">联系我们</a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- 公共尾部 --> 
   <div class="ssretotop" id="goTopButton"> 
    <div class="SG-sidecont"> 
     <a style="visibility: visible;" href="javascript:;" id="gotonext"></a> 
     <a id="retotop" class="pb-icons" href="javascript:void(0)" style="visibility: visible;" title="点击我 坐飞机到顶部"></a> 
     <a href="javascript:;" id="gotopre"></a> 
    </div> 
   </div> 
  </div> 
  <script id="tpl-pb-rule" type="text/x-jsmart-tmpl">
		<img src="images/rule.gif" alt="获奖规则"/>
		<a href="javascript:top.window.location.href='/user#go=cash';" style="position: absolute; cursor:pointer;height: 24px; width: 72px; left: 730px; top: 494px; display:inline-block;background:#fff;opacity:0; filter:alpha(opacity=0);"></a>
	</script> 
  <script language="javascript" type="text/javascript" src="js/15502332.js"></script> 
  <noscript>
   <a href="http://www.51.la/?15502332" target="_blank"><img alt="我要啦免费统计" src="images/15502332.asp" style="border:none" /></a>
  </noscript> 
  
  <script type="text/javascript" src="/public/index/js/form.js"></script> 
  <script type="text/javascript" src="/public/index/js/swfupload.js?v=2.0"></script> 
  <script type="text/javascript" src="/public/index/js/jquery.Jcrop.min.js?v=2.0"></script> 
  <script type="text/javascript">
/*<![CDATA[*/


function changeVerifyCodeImage(){
	$.ajax({
		url: "\/essay\/captcha\/refresh\/1",
		dataType: 'json',
		cache: false,
		success: function(data) {
			$('#yw1').attr('src', data['url']);
			$('body').data('captcha.hash', [data['hash1'], data['hash2']]);
		}
	});
	return false;	
}


/*]]>*/
</script> 
 
 </body>
</html>