<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>关于我</title>
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="/public/index/css/base.css" rel="stylesheet">
<link href="/public/index/css/about.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav"><a href="/index.php?m=index&a=index"><span>首页</span><span class="en">Protal</span></a><a href="/index.php?m=about&a=about"><span>关于我</span><span class="en">About</span></a><a href="/index.php?m=life&a=life"><span>慢生活</span><span class="en">Life</span></a><a href="/index.php?m=Moodlist&a=moodlist"><span>碎言碎语</span><span class="en">Doing</span></a><a href="/index.php?m=ly&a=ly"><span>留言版</span><span class="en">Gustbook</span></a></nav>
  </nav>
</header>
<article class="aboutcon">
<h1 class="t_nav"><span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">关于我</a></h1>
<form action="/index.php?m=About&a=uperson" method="post"> 
<div class="about left">
<?php foreach ($user as $key =>$value): ?>
  <h2>Just about me</h2>
    <ul> 
   <textarea placeholder="長得好看的都會在這邊說點什麼O(∩_∩)O~~..." name="content" class="commentbody" rows="5" style="border:1px solid #edf1f6;background:#fff;width:670px;height:300px;" tabindex="4" ><?=$value['autoph']; ?></textarea>
    </ul>
    <h2>About my blog</h2>
    <p>域  名：www.yangqq.com 创建于2011年01月12日 <a href="/" class="blog_link" target="_blank">注册域名</a></p>
    <p>服务器：阿里云服务器<a href="/" class="blog_link" target="_blank">购买空间</a></p>
    <p>备案号：蜀ICP备11002373号-1</p>
    <p>程  序：PHP 帝国CMS7.0</p>
</div>

<aside class="right">  
    <div class="about_c">
    <p>网名：<input type='text' name='username' style='border:none;' value="<?=$value['username']; ?>"></p>
    <p>Email：<input type='text' name='email' style='border:none;' value="<?=$value['email']; ?>"> </p>
    <p>籍贯：<input type='text' name='place' style='border:none;' value="<?=$value['place']; ?>"></p>
    <p>喜欢的书：《红与黑》《红楼梦》</p>
    <p>喜欢的音乐：《burning》《just one last dance》《相思引》</p>
	<input type='submit' name='user' value='修改'>
	</form>
	<!-- 上传头像 -->
	<form action='/index.php?m=about&a=changepic' method='post' enctype="multipart/form-data"> 
	 <p>头像：<input type ='file' name='file'></p>
	 <input type='submit' value='修改头像'>
	 </form>
<a target="_blank" href="http://www.htmlsucai.com">
<img src="http://pub.idqqimg.com/wpa/images/group.png" alt="杨青个人博客网站" title="杨青个人博客网站"></a>
<a target="_blank" href="http://www.htmlsucai.com" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a>
</div>
<div  style="position:fixed;top:260px;left:10px">
<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2991326381&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2991326381:53" alt="有事点这里！！！" title="有事点这里！！！"/></a></div>  
</aside>
</article>
<?php endforeach; ?>


<footer>
  <p>Design by DanceSmile <a href="http://www.htmlsucai.com" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>