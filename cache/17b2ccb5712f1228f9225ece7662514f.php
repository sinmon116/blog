﻿<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta content="542536566763012535145636" property="qc:admins" /> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
  <title>搜索-<?=$content; ?></title> 
  <meta content="把耳朵叫醒,小清新音乐电台,叫醒耳朵" name="keywords" /> 
  <meta content="享笑网是紧贴生活的小清新网站，近期上线的有奖征文比赛更是受到了大家的热捧，给一些热爱写作的网友提供了一个很好的平台。享笑网的宗旨是分享笑，分享爱，让更多的人在欢声笑语下得到爱的滋润为其永恒不变的主题。网站提供时下每周一期的有奖征文，小清新图片、原创文章，搞笑段子。致力打造一片供人们心灵交流的绿洲。" name="description" /> 
  <meta content="width=1050" name="viewport" /> 
  <link href="/public/index/css/common.css?v7.2" type="text/css" rel="stylesheet" /> 
  <link href="/public/index/css/public.css?v1" type="text/css" rel="stylesheet" /> 
  <link type="/public/index/images/x-icon" rel="icon" mce_href="/public/index/images/favicon.ico" href="/public/index/css/images/favicon.ico?v=0.1" /> 
  <link type="/public/index/images/1/x-icon" rel="shortcut icon" mce_href="/public/index/images/favicon.ico" href="/public/index/css/images/favicon.ico?v=0.1" /> 
  <script src="/public/index/js/hm.js?ed37722b76c3b14891aee449d10db2b1"></script>
  <script src="/public/index/js/jq.js?v4.1" type="text/javascript"></script> 
  <script src="/public/index/js/ss.js?v4.8" type="text/javascript"></script> 
  <style type="text/css" media="screen">p.audioplayer_container span {visibility:hidden;height:24px;overflow:hidden;padding:0;border:none;}</style>
 </head> 
 <body>
  <div style="position: absolute; left: -9999em; top: 175px; width: auto; z-index: 1987;" class="aui_state_focus">
   <div class="aui_outer">
    <table class="aui_border">
     <tbody>
      <tr>
       <td class="aui_nw"></td>
       <td class="aui_n"></td>
       <td class="aui_ne"></td>
      </tr>
      <tr>
       <td class="aui_w"></td>
       <td class="aui_c">
        <div class="aui_inner">
         <table class="aui_dialog">
          <tbody>
           <tr>
            <td class="aui_header" colspan="2">
             <div class="aui_titleBar">
              <div class="aui_title" style="cursor: move;">
               消息
              </div>
              <a class="aui_close">&times;</a>
             </div></td>
           </tr>
           <tr>
            <td class="aui_icon" style="display: none;">
             <div class="aui_iconBg" style="background: transparent none repeat scroll 0% 0%;"></div></td>
            <td class="aui_main" style="width: auto; height: auto;">
             <div class="aui_content" style="padding: 20px 25px;">
              <div class="aui_loading">
               <span>loading..</span>
              </div>
             </div></td>
           </tr>
           <tr>
            <td class="aui_footer" colspan="2">
             <div class="aui_buttons" style="display: none;"></div></td>
           </tr>
          </tbody>
         </table>
        </div></td>
       <td class="aui_e"></td>
      </tr>
      <tr>
       <td class="aui_sw"></td>
       <td class="aui_s"></td>
       <td class="aui_se" style="cursor: se-resize;"></td>
      </tr>
     </tbody>
    </table>
   </div>
  </div> 
  <div class="pb-container"> 
   <div class="pb-container-main pb-after-clear"> 
    <!-- 公共头部 --> 
    <div class="pb-main pb-navwrap pb-after-clear"> 
     <div class="pb-iblock pb-fl pb-logo"> 
      <a href="index.html"><img alt="享笑网LOGO 征文比赛 有奖征文" src="/public/index/images/logo.jpg" /></a> 
     </div> 
     <div class="pb-iblock pb-fl pb-nav"> 
      <ul> 
      <ul> 
        <li><a href="/index.php?m=index&a=index">首页</a></li> 
       <li><a href="/index.php?m=about&a=about">关于我</a></li> 
       <li><a href="/index.php?m=moodlist&a=moodlist">碎言碎语</a></li> 
       <li><a href="/index.php?m=life&a=life">慢生活</a></li> 
       <li class="pb-nav-li-last"><a href="/index.php?m=ly&a=ly">留言板</a></li> 
      </ul> 
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
    <!-- 面包屑 --> 
    <div class="pb-main pb-breadcrumbs pb-mt40 pb-size-small"> 
     <a href="index.html">首页</a> &gt;&gt; 
     <a>搜索内容</a> 
    </div> 
    <!-- 面包屑结束 --> 
    <!--content--> 
    <div class="pb-main pb-mt20"> 
     <div class="commmain"> 
      
      
      <div class="ycjpline"></div>
	  <?php if (!empty($soupage)): ?>
	  <?php foreach ($soupage as $key =>$val): ?>
      <div class="one-atl"> 
       <img alt="爱你的第九年,这是你不必详知的事情" src="<?=$val['fphoto']; ?>" class="img f-l" /> 
       <div class="con f-r"> 
        <h3><a class="tle" href="#"><?=$val['title']; ?></a><span class="ath"></span></h3> 
        <h4 class="pb-mt10">作者：<?=$val['uname']; ?></h4> 
        <p class="f-l">发布时间：<?=$time= date('Y-m-d H:i:s' ,$val['addtime']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i><img src='public/index/images/cf_thumb.gi'>浏览（<?=$val['hits']; ?>)</i> </p> 
        <p class="f-l"><object width="400" height="24" type="application/x-shockwave-flash" name="auplayer_2" style="outline: none" data="js/player.swf" id="auplayer_2"><param name="wmode" value="opaque"></param><param name="menu" value="false"></param><param name="flashvars" value="bg=eeeeee&amp;leftbg=a7c8ca&amp;lefticon=155960&amp;rightbg=81b2b6&amp;rightbghover=a7c8ca&amp;righticon=155960&amp;righticonhover=ffffff&amp;text=666666&amp;slider=666666&amp;track=FFFFFF&amp;border=666666&amp;loader=a7c8ca&amp;initialvolume=100&amp;soundFile=/public/audio/201505/ainidedijiunian.mp3&amp;titles=爱你的第九年,这是你不必详知的事情&amp;artists=NJ楚璇&amp;autostart=no&amp;loop=no&amp;playerID=auplayer_2"></param></object></p> 
        <div class="morewp f-l m-t-10">
         <a class="f-r" href="/index.php?m=Detail&a=detail&id=<?=$val['id']; ?>">详细</a>
        </div> 
       </div> 
      </div> 
	  <?php endforeach; ?>
	  <?php else: ?>
	  <h3><a class="tle" href="#">对不起，您搜索的结果不存在！</a><span class="ath"></span></h3> 
	  
	  <?php endif; ?>
	  
      <div class="pb-mt50 pb-listpage"> 
       <table>
        <tbody>
         <tr>
           <td><a href="<?=$surl['first']; ?>&content=<?=$content; ?>" class="yiiPagerA">首页</a></td> 
          <td><a href="<?=$surl['prev']; ?>&content=<?=$content; ?>" class="yiiPagerA on">上一页</a></td> 
          <td><a href="<?=$surl['next']; ?>&content=<?=$content; ?>" class="yiiPagerA">下一页</a></td> 
          <td><a href="<?=$surl['last']; ?>&content=<?=$content; ?>" class="yiiPagerA">末页</a></td>
         </tr>
        </tbody>
       </table> 
      </div> 
     </div> 
     <div class="commside"> 
      <!--右侧我要投稿公共部分--> 
      <div class="pb-iblock pb-fr pb-after-clear pb-main-side"> 
    
       <h6 class="pb-mt15 pb-clr1 pb-size-big">下期专题</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <a href="/index.php?m=Moodlist&a=moodlist" class="tle pb-mt5">返回上一页</a> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <h6 class="pb-mt15"> <span class="pb-clr1 pb-size-normal">搜索结果： <i class="tougao"><?=$soutotal; ?></i></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </h6> 
       <a href="news_detail.html?/add" class="but pb-clr1 pb-size-normal pb-mt15"></a> 
      </div> 
      <!--右侧我要投稿公共部分--> 
      <div class="pb-main-side pb-iblock pb-after-clear pb-fr pb-mt40"> 
       <h6 class="pb-clr1 pb-size-big">热门文章</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
	    <?php if (!empty($ishot)): ?>
		<?php foreach ($ishot as $key=>$value): ?>
       <ul class="pb-mt10 previous-term pb-size-normal"> 
        <li> <span>.</span> <a href="#"><?=$value['title']; ?></a> 
         <div class="pb-line2"> 
         </div> </li>  
       </ul>
	   <?php endforeach; ?>
		<?php endif; ?>
      </div> 
      <div style="clear:both;"></div> 
      <div class="sidewrap  pb-mt40"> 
       <h6 class="pb-clr1 pb-size-big">倾听世界</h6> 
       <div class="pb-line2 pb-mt5"> 
       </div> 
       <div style="height:480px;overflow:hidden;" class="con pr"> 
        <div style="left:150px;height:150px;top:15px;" class="single"> 
         <a title="清纯唯美写真合集" href="pic_detail.html?1"><img alt="清纯唯美写真合集" src="/public/index/images/qing_10001_7b053ee001_310.jpg" style="width:145px;" /></a> 
        </div> 
        <div style="left:0px;height:150px;top:15px;" class="single"> 
         <a title="也许我就是一块老墨" href="pic_detail.html?3"><img alt="也许我就是一块老墨" src="/public/index/images/qing_10001_2278c48f96_310.jpg" style="width:145px;" /></a> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div style="clear:both;"></div> 
    </div> 
    <div style="clear:both;"></div> 
    <!-- end content--> 
   </div> 
 
 </body>
</html>