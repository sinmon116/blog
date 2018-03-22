<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>话题管理-有点</title>
<link rel="stylesheet" type="text/css" href="/public/admin/css/css.css" />
<link href="/public/index/css/common.css?v7.2" type="text/css" rel="stylesheet" /> 
  <link href="/public/index/css/public.css?v1" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="/public/admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">帖子管理</a></span>
			</div>
		</div>

		<div class="page">
			<!-- topic页面样式 -->
			<div class="topic">
			
				<!-- topic表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">ID</td>
							<td width="200px" class="tdColor">图像</td>
							<td width="125px" class="tdColor">标题</td>
							<td width="155px" class="tdColor">作者</td>
							<td width="175px" class="tdColor">发布时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php if (!empty($rpage)): ?> 
						<?php foreach ($rpage as $key=>$value): ?>
						<tr>
							<td>1</td>
							<td>
								<div class="onsImg">
									<img src="<?=$value['fphoto']; ?>">
								</div>
								<p class="topicP">
									<img class="topicImg" src="img/topic.png">
								</p>
							</td>
							<td><?=$value['title']; ?></td>
							<td><?=$value['uname']; ?></td>
							<td><?=$time = date('Y-m-d H:i:s',$value['addtime']); ?></td>
							<td><a href="">屏蔽帖子</a> 
									
							<a href="/index.php?m=Admin&a=deltz&id=<?=$value['id']; ?>"><img  src="/public/admin/img/delete.png"></a></td>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</table>
					<!-- <div class="paging">此处是分页</div> -->
											</script> 
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
				</div>
				<!-- topic 表格 显示 end-->
			</div>
			<!-- topic页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>