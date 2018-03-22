<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta property="qc:admins" content="542536566763012535145636" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title><?=$postail[0]['title']; ?></title> 
  <meta name="keywords" content=",享笑" /> 
  <meta name="description" content="     高中时代的恋爱，直到现在想起，我都觉得那是上天的恩赐。它让我在最美的青春里，经历了最真的爱恋。虽然直到最后，也没能为它起一个流芳百世的名字，但是这样风轻云淡的的日子里，不温不火，也给了我们最温..." /> 
  <meta name="viewport" content="width=1050" /> 
  <link rel="stylesheet" type="text/css" href="/public/index/css/common.css?v7.2" /> 
  <link rel="stylesheet" type="text/css" href="/public/index/css/public.css?v1" /> 
  <link href="/public/index/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="icon" type="image/x-icon" /> 
  <link href="/public/index/images/favicon.ico?v=0.1" mce_href="http://www.sharesmile.cn/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <script type="text/javascript" src="/public/index/js/jq.js?v4.1"></script> 
  <script type="text/javascript" src="/public/index/js/ss.js?v4.8"></script> 
  <script type="text/javascript">
function getBrowser()
{  
   var OsObject = "";  
   if(navigator.userAgent.indexOf("MSIE")>0) {  
		var browser=navigator.appName;
		var b_version=navigator.appVersion; 
		var version=b_version.split(";"); 
		var trim_Version=version[1].replace(/[ ]/g,""); 
		if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE6.0") 
		{ 
			return("IE6"); 
		} 
		else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE7.0") 
		{ 
			return("IE7"); 
		} 
		else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE8.0") 
		{ 
			return("IE8"); 
		} 
		else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE9.0") 
		{ 
			return("IE9"); 
		}
		else if(browser=="Microsoft Internet Explorer" && trim_Version=="MSIE10.0") 
		{ 
			return("IE10"); 
		}
   }  
   if( navigator.userAgent.indexOf("Firefox")>0){  
        return "Firefox";  
   }
   if( navigator.userAgent.indexOf("Chrome")>0){  
        return "Chrome";  
   }
   if( navigator.userAgent.indexOf("Opera")>0){  
        return "Opera";  
   } 
   if( navigator.userAgent.indexOf("Safari")>0) {  
        return "Safari";  
   }
   return 'Others';  
} 
(function(){
	vars = {};
	vars.browser = getBrowser();
	vars.hello_ketty = "heimao";
	vars.jsUrl = "http://www.sharesmile.cn/js/";
	vars.homeUrl = 'http://www.sharesmile.cn/';
	vars.siteName = '享笑网 - www.ShareSmile.cn - 享你所想,享你所笑';
	vars.publicUrl = "/public/";
	vars.showgirlUrl = "/user#showgirl";
	vars.userid = '10460';
	vars.username = '416148489@qq.com';
	vars.nickname = '阿斗';
	vars.gender = 0;
	vars.PHPSESSID = "krach1sltrpu5pa9ldu9jen4k2";
	vars.ajaxSubmiting = false;
	vars.sysImageUrl = '/public/system/';
	vars.qingImageUrl = '/public/qing/';
	vars.headImageUrl = '/public/userhead/';
	vars.postImageUrl = '/public/post/';
	vars.essayImageUrl = '/public/essay/';
	vars.jokesImageUrl = '/public/jokes/';
	vars.showgirlImageUrl = '/public/showgirl/';
	vars.photoImageUrl = '/public/photo/';
	vars.commStatUrl = '/Stat/stat';
	vars.cookieUMessage = 'HASMESSAGE'+vars.userid;
	vars.voteBlankColor = new Array( '#5DBBEF', '#95E62A', '#CC1CD9', '#FFCD10', '#F79395');
	var d = new Date();
	vars.todayTimeString = 20160122;
})();
</script> 
 </head> 
 <body> 
  <div class="pb-container"> 
   <div class="pb-container-main pb-after-clear"> 
    <!-- 公共头部 --> 
    <div class="pb-main pb-navwrap pb-after-clear"> 
     <div class="pb-iblock pb-fl pb-logo"> 
      <a href="index.html"><img src="/public/index/images/logo.jpg" alt="享笑网LOGO 征文比赛 有奖征文" /></a> 
     </div> 
     <div class="pb-iblock pb-fl pb-nav"> 
      <ul> 
       <li><a href="index.php?m=index&a=index">首页</a></li> 
       <li><a href="about.html">关于我</a></li> 
       <li><a href="/index.php?m=moodlist&a=moodlist">碎言碎语</a></li> 
       <li><a href="/index.php?m=life&a=life">慢生活</a></li> 
       <li class="pb-nav-li-last"><a href="/index.php?m=ly&a=ly">留言板</a></li> 
      </ul> 
     </div> 
    <!-- 公共头部 --> 
    <!-- 面包屑 --> 
    <div class="pb-main pb-breadcrumbs pb-mt40 pb-size-small"> 
     <a href="">首页</a> &gt; 
	   <a href="#">永无止境</a> &gt; 
	   <a href="#"><?=$postail[0]['title']; ?></a> 
    </div> 
    <!-- 面包屑结束 --> 
    <!-- 当前页面内容 --> 
    <link rel="stylesheet" type="text/css" href="/public/index/css/article.css?v3" /> 
    <div class="pb-main pb-mt20"> 
     <!--主文章展示--> 
	 <?php if (!empty($postail)): ?>
     <div class="atl-main pb-inner-main"> 
      <div class="pb-after-clear"> 
       <h1 class="pb-fl"><?=$postail[0]['title']; ?></h1> 
       <h3 class="pb-fl"><a href="news_detail.html?-10" class="pb-block"><?=$postail[0]['title']; ?></a></h3> 
      </div> 
      <div class="pb-mt15 pb-size-tiny meta"> 
       <span class="dt"><?=$time = date('Y-m-d H:i:s' ,$postail[0]['addtime']); ?></span> 
       <span class="at">作者：<?=$postail[0]['uname']; ?></span> &nbsp;&nbsp;|&nbsp;&nbsp; 
       <span class="vw"><i class="pb-icons"></i>浏览（<?=$postail[0]['hits']; ?>）</span> &nbsp;&nbsp;|&nbsp;&nbsp; 
       <span class="sc"><i class="pb-icons"></i>得分（1）</span> 
      </div> 
      <div class="pb-mt20 cnt"> 
       <p>&nbsp; &nbsp; &nbsp;<?=$postail[0]['content']; ?></p> 
      
      </div> 
	
      <div class="pb-mt30 pb-after-clear"> 
       <a href="news_detail.html?-9-64" class="pb-fr">下一篇: 请允许我忧伤的想念</a> 
      </div> 
      <div class="pb-mt50 votebar"> 
       <div class="e-point pb-icons" score="1"> 
        <div class="m"></div> 
        <div class="l pb-icons">
         0 分
        </div> 
       </div> 
       <button class="t1" act="support"><i class="pb-icons"></i> +1分 [<span>1</span>]</button> 
       <button class="t2" act="oppose"><i class="pb-icons"></i> -1分 [<span>1</span>]</button> 
       <button class="t4" act="share"><i class="pb-icons"></i> +15分[<span>0</span>]</button> 
       <button class="t3" act="comment"><i class="pb-icons"></i> +5分</button> 
       <div class="bdsharebuttonbox pb-hide" style="line-height: 28px; position: absolute; top: 118px; right: 175px;"> 
        <span class="pb-fl">分享到合作网站并加15分：</span> 
        <a title="分享到QQ空间" href="http://www.lanrenzhijia.com/"" class="bds_qzone" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="http://www.lanrenzhijia.com/"" class="bds_tsina" data-cmd="tsina"></a> 
       </div> 
       <script>window._bd_share_config={"common":{"onBeforeClick":function(cmd, config){
				if( cmd == 'tsina'){
					config.bdText = '#' +config.bdText + '#这篇文章写得相当不错，有空的时候来看看。';
				}
				return config;
			},"onAfterClick": function(){
				W.confirm('我已经将此篇文章分享给好友了',function(){
					submitShare();
				});
			},"bdSnsKey":{},"bdText":"如果高中生谈恋爱，请善待它","bdDesc":"这篇文章写得相当不错，有空的时候来看看。","bdMini":"2","bdMiniList":false,"bdPic":"http://www.sharesmile.cn/public/essay/201510/11-1/essay_10001_e27ef3b65d.jpg","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script> 
      </div> 
      <div class="atl-cmtlist pb-mt50 pb-after-clear" id="pb-cmtlist-wp"> 
       <div class="head pb-clr1 pb-size-small pb-after-clear"> 
        <a class="pb-clr1 pb-size-small pb-underline pb-fr" href="javascript:Sys.showRuleDiv();">可以写连接</a> 
        <span class="pb-fl">全部评论（<i>0</i>）</span> 
       </div> 
	   <!-- 回复的内容 -->
       <div class="body pb-mt40 pb-after-clear"> 
	   <?php if (!empty($result)): ?>
		<?php foreach ($result as $key => $value): ?>
        <ul style='background:#FCFCFC;	border:1px solid #CAE1FF;'> 
		<li><img src="/public/index/images/"><b>评论者：</b><?=$value['username']; ?> &gt;&gt;&gt;&gt;&gt;&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>发表于：</b><?=$time = date('Y-m-d H:i:s' ,$value['addtime']); ?></li>
		<li><?=$value['content']; ?></li>
        </ul>
		<?php endforeach; ?>
		<?php endif; ?>		
       </div> 
       <div class="pb-mt50 pb-fl pb-listpage"> 
       </div> 
      </div> 
      <script>
		$('.yiiPagerA').die().live('click',function(){
			$.get( $(this).attr('link'),function( d){
				Sys.scrollTo('pb-cmtlist-wp',function(){
					$('#pb-cmtlist-wp').html( d);
					adjustCommentScoreLine();
				});
			});
		});
		</script> 
		<!-- 提交评论 -->
		<form action='/index.php?m=detail&a=comment' method ='post'>
		<input type='hidden' value="{tid=$_REQUEST['id']}">
      <div class="atl-cmtbox pb-mt50 pb-after-clear"> 
       <input class="but pb-fr" type="submit" value="评&nbsp;论" /> 
       <div contenteditable="true" class="pb-size-normal ta pb-fl" cpid="0" rcpid="0" ><textarea name = 'content'>1.</textarea></div> 
      </div> 
     </div> 
     <!--主文章展示 end--> 
     <!--右侧我要投稿公共部分--> 
     <div class="commside"> 
	
      <div class="pb-iblock pb-fr pb-main-side"> 
       <img style="width:100px;height:100px;" class="pb-fl" alt="小红楼" src="/public/index/images/head_10348_57fbdd4d36_100.jpg" /> 
       <p class="atl-uinfo-p">作者昵称：<?=$postail[0]['uname']; ?><a href="/user-10348"><i class="pb-icons house"></i></a></p> 
       <p class="atl-uinfo-p">当前排名：6</p> 
       <p class="atl-uinfo-p">当前得分：1</p> 
      </div> 
	  <?php endif; ?>
      <!--右侧我要投稿公共部分--> 
      <div style="clear:both;"></div> 
      <div class="sidewrap  pb-mt40"> 
       <h6 class="pb-clr1 pb-size-big">倾听世界</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <div class="con pr" style="height:480px;overflow:hidden;"> 
        <div class="single" style="left:150px;height:150px;top:15px;"> 
         <a href="/" title="清纯唯美写真合集"><img style="width:145px;" src="/public/index/images/qing_10001_7b053ee001_310.jpg" alt="清纯唯美写真合集" /></a> 
        </div> 
        <div class="single" style="left:0px;height:150px;top:15px;"> 
         <a href="/ title="也许我就是一块老墨"><img style="width:145px;" src="/public/index/images/qing_10001_2278c48f96_310.jpg" alt="也许我就是一块老墨" /></a> 
        </div> 
        <div class="single" style="left:150px;height:150px;top:170px;"> 
         <a href="/" title="证件照"><img style="width:145px;" src="/public/index/images/qing_9999_6963913fb8_310.jpg" alt="证件照" /></a> 
        </div> 
        <div class="single" style="left:0px;height:150px;top:170px;"> 
         <a href="/" title="享笑网2015-5-30#325806#"><img style="width:145px;" src="/public/index/images/qing_10001_3f5af7636f_310.jpg" alt="享笑网2015-5-30#325806#" /></a> 
        </div> 
       </div> 
      </div> 
     </div> 
     <!--右侧我要投稿公共部分--> 
    </div> 
    <!-- 当前页面内容结束 --> 
    <script>
var gEssayId = '65';
var gEssayScore = '1';
var gHigestEssayId = '67';
var gHigestEssayScore = parseInt('27');
var gEssayUserid = '10348';
var gEssayStatus = parseInt('1');
var gEssayFeatureStatus = parseInt('2');
var gSubmitUrl = '/essay/commentadd';
var gVoteUrl = '/essay/Vote';
var gShareUrl = '/essay/Share';
var gEssayDelUrl = '/essay/AdminCommentdel';
var gVoteCommentUrl = '/essay/VoteComment';
var gHighestCommentId = '0';
var gHighestCommentScore = '0';
var gSingleCommentUrl = '/essay/SingleComment';

/**
* pid 文章ID
* cpid 父评论ID
* rcpid 真正回复的评论ID
* content 回复的内容
*/
function submitEssayComment( iptObj){
	if( gEssayStatus < 1){
		W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
		return false;
	}
	if( gEssayFeatureStatus < 2){
		W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
		return false;
	}
	var submitUrl = gSubmitUrl;
	var pid = gEssayId, cpid = iptObj.attr('cpid'), rcpid = iptObj.attr('rcpid');
	var content = Sys.removeHTMLTag(iptObj.html());
	var butObj = iptObj.prev('input');
	var butTxt = butObj.val();
	if( content){
		$.ajax({
			'url' : submitUrl,
			'type' : 'POST',
			'dataType' : 'JSON',
			'data' : 'EssayCommentUser[pid]='+ pid +'&EssayCommentUser[cpid]='+ cpid +'&EssayCommentUser[rcpid]='+ rcpid +'&EssayCommentUser[content]=' + encodeURIComponent(content),
			'beforeSend' : function(){
				butObj.unbind('click').val('提交中...');
			},
			'success' : function( ret){
				if( ret.ret == 0){
					iptObj.removeClass('active').html('');
					butObj.removeClass('active').unbind('click');
					adjustEssayScoreLine( 5);
					if( ret.comment.cpid && parseInt(ret.comment.cpid) > 0){//如果是子回复
						iptObj.parent().find('ul').append( tpl2html('tpl-essay-childcomment', ret.comment));
						adjustCommentScoreLine( cpid, 3);
					}else{
						$('.atl-cmtlist ul:first').append( tpl2html('tpl-essay-comment', ret.comment));
					}
					Sys.updateNumeric($('.atl-cmtlist .head span i'));
				}else if( ret.ret == 3){
					W.tips('亲,你说话的速度也太快了吧，赶紧休息会 :)');
					return false;
				}else{
					W.tips( ret.msg);
					butObj.bind('click',function(){
						submitEssayComment( iptObj);
					});	
				}
			},
			'complete' : function(){
				butObj.val( butTxt);
			}
		});
	}
}
function submitVoteComment( butObj){
	if( gEssayStatus < 1){
		W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
		return false;
	}
	if( gEssayFeatureStatus < 2){
		W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
		return false;
	}
	var submitUrl = gVoteCommentUrl;
	var id = butObj.attr('commentid');
	var act = butObj.attr('act');
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id + '&act=' + act,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			if( ret.ret == 0){
				adjustCommentScoreLine( id, act == 'support' ? 2 : -1);
				Sys.updateNumeric( butObj.find('span'), 1);
			}else if( ret.ret == 34){
				W.tips( '亲，您已经点评过这个评论咯！');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
function submitVote( act){
	var id = gEssayId;
	var submitUrl = gVoteUrl;
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id + '&act=' + act,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			if( ret.ret == 0){
				adjustEssayScoreLine( act == 'support' ? 3 : -2);
				Sys.updateNumeric($('.votebar ' + (act == 'support' ? '.t1' : '.t2') +' span'));
			}else if( ret.ret == 34){
				W.tips( '亲，您已经点评过这个文章咯！');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
function submitShare( ){
	var id = gEssayId;
	var submitUrl = gShareUrl;
	$.ajax({
		'url' : submitUrl,
		'type' : 'GET',
		'dataType' : 'JSON',
		'data' : 'id='+id ,
		'beforeSend' : function(){
		},
		'success' : function( ret){
			$('.bdsharebuttonbox').fadeOut();
			if( ret.ret == 0){
				adjustEssayScoreLine( 15);
				Sys.updateNumeric($('.votebar .t4 span'));
			}else if( ret.ret == 34){
				W.tips( '我们只给您的第一次分享加分:)');
			}else {
				W.tips( ret.msg);
			}
		},
		'complete' : function(){
		}
	});
}
//某一个评论的分数改变以后，调整所有的分数进度条
function adjustCommentScoreLine( scoreId, addScore){
	var hScore = parseInt( gHighestCommentScore);
	var hScoreId = parseInt( gHighestCommentId);
	if( scoreId && addScore){
		scoreId = parseInt(scoreId);
		addScore = parseInt(addScore);
		var targetObj = $('#point_'+ scoreId), targetScore, targetNewScore;
		if( parseInt( vars.userid) == parseInt( targetObj.attr('userId')) ){//如果是自己给自己点评，就不加分
			W.tips('允许评论自己，但不给加分哟 :)');
			return false;
		}
		if( gEssayFeatureStatus > 2 ){
			W.tips('允许评论已结束参赛文章，但不给加分哟 :)');
			return false;
		}
		if( scoreId == hScoreId){
			hScore += addScore;
			if( hScore < 0){
				hScore = 0;
			}
			gHighestCommentScore = targetNewScore = hScore;
		}else{
			targetScore = parseInt( targetObj.attr('score'));
			targetNewScore = targetScore + addScore;
			if( targetNewScore < 0){
				targetNewScore = 0;
			}
			if( targetNewScore > hScore){
				hScore = gHighestCommentScore = targetNewScore;
				gHighestCommentId = scoreId;
			}
		}
		targetObj.attr('score', targetNewScore).find('i').html( targetNewScore);
	}
	//处理所有进度条
	$('.point').each(function(){
		var score = parseInt( $(this).attr('score'));
		var percentage = hScore ? parseInt( score / hScore * 100) : 0;
		$(this).animate({'width' : percentage + '%'}, 2000);
	});
}

//文章分数发生变化后，调整文章的进度条
function adjustEssayScoreLine( addScore){
	addScore = (addScore ? parseInt(addScore) : 0);
	if( addScore){
		if( parseInt( vars.userid) == parseInt( gEssayUserid) ){
			W.tips('允许点评或分享自己的文章，但不给你加分哟 :)');
			return false;
		}
		if( gEssayFeatureStatus > 2 ){
			W.tips('允许点评或分享已结束参赛文章，但不给加分哟 :)');
			return false;
		}
	}
	var targetObj = $('.e-point');
	var oldScore = parseInt( targetObj.attr('score') );
	var newScore = oldScore + addScore;
	if( newScore < 0){
		newScore = 0;
	}
	targetObj.attr('score', newScore).find('.l').html( newScore + ' 分');
	if( newScore > gHigestEssayScore){
		gHigestEssayScore = newScore;
	}
	
	var full = 640;
	var r = full - (gHigestEssayScore != 0 ? parseInt( newScore / gHigestEssayScore * full) : 0 );
	targetObj.find('.m').animate({'width' : r + 'px'}, 2000);
}
function getSinleComment( id){
	$.ajax({
		'url' : gSingleCommentUrl,
		'type' : 'GET',
		'data' : 'id='+id,
		'beforeSend' : function(){
		},
		'success' : function( d){
			if( d){
				$('.atl-cmtlist ul:first').prepend( d);
				Sys.scrollTo($('#comment_li_' + id));	
			}
		},
		'complete' : function(){
		}
	});
}
function delEssayComment( id){
	W.confirm('确定删除该评论吗？',function(){
		$.ajax({
			'url' : gEssayDelUrl,
			'type' : 'GET',
			'dataType' : 'JSON',
			'data' : 'commentId='+id,
			'beforeSend' : function(){
			},
			'success' : function( ret){
				W.tips(ret.msg);
			},
			'complete' : function(){
			}
		});
	});
}

$(document).ready(function(){
		adjustCommentScoreLine();
	adjustEssayScoreLine();
	var param = Sys.getUrlParams();
	if( param['message']){
		var messageLi = $('#comment_li_' + param['message']);
		if( messageLi.length > 0){
			Sys.scrollTo(messageLi);	
		}else{
			getSinleComment( param['message']);
		}
	}
	
	//对评论分数小气球做处理
	$(".atl-cmtlist .pli").live('mouseenter', function(){
		$(this).find('.point i').css('opacity', 0).show().animate({
           opacity: "1"
       }, "slow");
	}).live('mouseleave', function(){
		$(this).find('.point i').animate({
           opacity: "hide"
       }, "fast");
	});
	//对各个点击回复按钮事件做处理
	$(".atl-cmtlist .ping,.atl-cmtlist .cping").live('click',function(){
		var cpid = $(this).attr('cpid');
		var rcpid = $(this).attr('rcpid');
		var userid = parseInt($(this).attr('userid'));
		if( parseInt( vars.userid) == userid){
			W.tips('亲，你想对自己说什么呢？');
			return false;
		}
		//获取父评论对象
		var cpidObj = $('#comment_li_'+cpid);
		//获取真正回复的对象
		var rcpidObj = $('#comment_li_'+rcpid);
		var nick = rcpidObj.attr('nick');
		var txt = $.browser.mozilla ? '<img alt="@'+ nick +'："/>' : '<button name="" onclick="return false;" tabindex="-1" contentEditable=false>@'+ nick +':</button>&nbsp;';
		var iptObj = cpidObj.find('.textarea');
		function needConfirmLogic(){//以下逻辑当在需要用户确认的时候需要判断后再执行
			iptObj.html('').append(txt);
			Sys.placeCaretAtEnd( iptObj[0]);
			iptObj.attr('rcpid', rcpid);
			iptObj.unbind('keyup').keyup(function(event){ 
				if( event.keyCode == 8){
					if( $(this).html() == '' || $(this).html() == '<br>'){
						//如果内容全部删掉的话，需要执行将内容置为父评论的级别
						iptObj.attr('rcpid', cpid);
					}
				}
			});
		}
		if( iptObj.html() != '' && iptObj.html() != '<br>'){
			W.confirm('确定放弃之间编辑的内容吗？',function(){
				needConfirmLogic();
			});
		}else{
			needConfirmLogic();
		}
	});
	//对编辑文本框添加焦点失去与捕获时间，处理相关状态的转换问题
	$('.atl-cmtlist .textarea,.atl-cmtbox div').live('focus',function(){
		Sys.checkUserLogin();
		var iptObj = $(this);
		iptObj.removeClass('active').addClass('active');
		//捕获焦点后，给焦点紧邻的button增加点击事件
		iptObj.prev('input').removeClass('active').addClass('active').unbind('click').bind('click',function(){
			submitEssayComment( iptObj);
		});
	}).live('blur',function(){
		var iptObj = $(this);
		var content = Sys.removeHTMLTag(iptObj.html());
		if( content == ''){//如果失去焦点的时候内容为空
			$(this).removeClass('active');
			$(this).prev('input').removeClass('active').unbind('click');
			$(this).attr('rcpid', $(this).attr('cpid'));
			iptObj.html('');
		}
	});
	//对点点击子评论按钮做处理
	$(".atl-cmtlist .jia,.atl-cmtlist .jian").live('click',function(){
		submitVoteComment( $(this));
	});
	//对点点击文章评论按钮做处理
	$(".votebar button").bind('click',function(){
		if( gEssayStatus < 1){
			W.tips('文章审核后才可以开始点评，心急吃不了臭豆腐哦 :)');
			return false;
		}
		if( gEssayFeatureStatus < 2){
			W.tips('专题评比开始后才可以统一开始点评，不要心急哟 :)');
			return false;
		}
		var act = $(this).attr('act')
		if( act == 'support' || act == 'oppose'){
			submitVote( act);
		}else if( act == 'comment'){
			var target = $('.atl-cmtbox:first');
			Sys.scrollTo( target,function(){
				target.find('div').focus();
			});
			
		}else if( act == 'share'){
			$('.bdsharebuttonbox').fadeIn();
		}
	});
	
		Sys.updateEntityClicknum('/stat/ClickNum','e', gEssayId);
});
</script> 
    <script id="tpl-essay-comment" type="text/x-jsmart-tmpl">
	<li class="pli" id="comment_li_<?=$id; ?>" nick="<?=$nickname; ?>">
		<a href="javascript:void(0);" class="avatars pb-fl">
			<img src="<?=$headimage; ?>" style="width:60px;height:60px;" alt="<?=$nickname; ?>">
		</a>
		<div class="rbox">
			<div class="nickbar">
				<div class="point" id="point_<?=$id; ?>" style="width:0%;" score="<?=$score; ?>" userId="<?=$userid; ?>"><i class="pb-icons"><?=$score; ?></i></div>
				<a href="javascript:void(0);" class="p7"><?=$nickname; ?></a>
			</div>
			<div class="cnt"><?=$content; ?></div>
			<div class="btbar pb-size-small pb-after-clear">
				<span title="<?=$createdate; ?>" class="date"><?=$createdate; ?></span>
				<a href="javascript:void(0);" class="jia" act="support" commentid="<?=$id; ?>"><i class="pb-icons"></i>加分(<span><?=$supportnum; ?></span>)</a>
				<a href="javascript:void(0);" class="jian" act="oppose" commentid="<?=$id; ?>"><i class="pb-icons"></i>减分(<span><?=$opposenum; ?></span>)</a>		
				<a href="javascript:void(0);" class="ping" cpid="<?=$id; ?>" rcpid="<?=$id; ?>" userid="<?=$userid; ?>><i class="pb-icons"></i>回复(<?=$commentnum; ?>)</a>
			</div>
		</div>
		<div class="rdiv pb-after-clear">
			<ul></ul> 
		   <input class="pb-mt10" type="button" value="回复 +3"/>
		   <div contentEditable=true class="pb-size-normal pb-mt10 textarea" cpid="<?=$id; ?>" rcpid="<?=$id; ?>"></div>
	   </div>
   </li>
</script> 
    <script id="tpl-essay-childcomment" type="text/x-jsmart-tmpl">
	<li id="comment_li_<?=$id; ?>" nick="<?=$nickname; ?>">
		<a href="javascript:void(0);" class="avatars pb-fl">
			<img src="<?=$headimage; ?>" style="width:60px;height:60px;" alt="<?=$nickname; ?>">
		</a>
		<div class="rbox rrbox">
			<div class="nickbar rnickbar"><a href="javascript:void(0);"><?=$nickname; ?></a><?php if ($rnickname): ?>@<a href="javascript:void(0);"><?=$rnickname; ?></a><?php endif; ?></div>
			<div class="cnt"><?=$content; ?></div>
			<div class="btbar pb-size-small">
				<span title="<?=$createdate; ?>"><?=$createdate; ?></span>	
				<a href="javascript:void(0);" class="ping cping" cpid="<?=$cpid; ?>" rcpid="<?=$id; ?>" userid="<?=$userid; ?>><i class="pb-icons"></i></a>	
			</div>
		</div>
	</li>
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
  <script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(".pb-ucenter").bind('mouseenter', function(){
			$(this).find('ul').stop().slideDown('fast');
			Sys.clearFlicker('uMessageCenter');
		}).bind('mouseleave', function(){
			$(this).find('ul').stop().slideUp('fast');
		});
		
		$("#goTopButton").click(function(){
			Sys.scrollTo($('body'));
			Sys.commStat(33);
		});
		if( vars.browser != 'IE6'){
			var w_w = parseInt( $("body").width());
			var obj = $("#goTopButton");
			$(window).scroll(function(){
				if($(this).scrollTop() > 500){
					if( !isNaN(w_w) && w_w > 0){
						obj.css('left', (Math.ceil((w_w-1050)/2) + 1050 + 10) + "px" );
					}
					obj.fadeIn();
				}else{
					obj.fadeOut();
				}
			});
		}
		Sys.hide51();
	});
	</script> 
  <script type="text/javascript" src="/public/index/js/form.js"></script>  
 </body>
</html>