<?php
namespace controller;
use model\UserModel;
use model\FormModel;
use model\LyModel;
use model\ReplyModel;
use framework\Ucpaas;
use framework\Code;
use framework\Page;

class AdminController extends Controller
{
	public $user;
	public $form;
	public $ly;
	public $reply;
	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
		$this->form = new FormModel();
		$this->ly = new LyModel();
		$this->reply = new ReplyModel();
		 if ($_SESSION['username'] != 'SINMON') {
            header('location:index.php');
            exit;
        }
	}


	public function admin()
	{
			if(($_SESSION['username']!='SINMON') && empty($_SESSION['type'])){
			$this->success('非法操作','/index.php?m=index&a=index',3);
		}
		$this->display();
	}

	public function hea()
	{
		$this->display();
	}
	public function lef()
	{
		$this->display();
	}
	public function mainn()
	{
		$this->display();
	}
	//后台主页登录
	
	public function log()
	{
		$this->display();
	}

	//验证码
	 public function verify()
	{
		$code = new Code();
		$code->outImage();
		//保存验证码
		$_SESSION['code'] = $code->code;
	}

		//后台主页
	
		//开始后台登录
	
	public function dolog()
	{
		$yzm = $_POST['yzm'];
		$name = $_POST['username'];
		$u = $this->user->getByUsername($name);
		$type = $u[0]['type'];
		$uid = $u[0]['uid'];

		// if (strcasecmp($yzm, $_SESSION['code'])) {
		// 	$this->success('验证码不正确','/index.php?m=admin&a=log',3);
		// 	exit;
		// } 

		if (empty($u[0])  || $type!= '1') {
			$this->success('用户名不存在','/index.php?m=Admin&a=log',3);
			exit;
		} 
		$pwd = md5($_POST['password']);
		if ($pwd != $u[0]['password']) {
			$this->success('密码错误','/index.php?m=Admin&a=log',3);
			exit;
		}
		$_SESSION['username'] = $name;
		$_SESSION['type'] = $type;
		$_SESSION['uid'] = $uid;
		$this->success('登录成功','/index.php?m=Admin&a=admin',3);
	}

	//后台退出
	public function logout()
	{
		unset($_SESSION['username']);

		session_destroy();
		$this->success('退出成功','/index.php?m=Admin&a=log',2);
	}
	

	//用户管理
	public function vip()
	{	

		$this->seluser();

		$this->display();
	}

	// 查询用户的信息
	public function seluser()
	{
		//查询用户总数
		$total = $this->user ->totaluse();
		//调用分页类
		$page = new Page($total , 4);
		//偏移量
		$limit = $page->getOffset();

		//页面跳转链接
		$url = $page ->rander();
		$user = $this->user ->seluser($limit);
		$this->assign('url',$url);
		$this->assign('user' , $user);
	}
	//删除用户
	public function deluser()
	{
		if(!empty($_GET['uid']))
		{
			$uid = $_GET['uid'];
		}

		$result = $this->user ->deluser($uid);
		echo("<script>alert('删除成功');window.location.href='/index.php?m=Admin&a=vip'</script>");	
		exit;
		

	}

	//帖子管理
	public function topic()
	{
		//分页查询展示帖子
		//总数
		$totalCount = $this->form->total();
		//调用分页类
		$page = new Page($totalCount , 4);
		//偏移量
		$limit = $page->getOffset();

		//页面跳转链接
		$url = $page ->rander();

		$rpage = $this->form->fpage($limit);
		 $this->assign('url' , $url);
		 $this->assign('rpage' , $rpage);
		 $this->assign('totalCount' , $totalCount);
		$this->display();
	}

	//删除帖子的方法
	
	public function deltz()
	{
		if(!empty($_GET['id']))
		{
			$id = $_GET['id'];
		}
		$result = $this->form->deltz($id);
		if($result){
			echo("<script>alert('删除成功');window.location.href='/index.php?m=Admin&a=topic'</script>");	
		exit;
		}
	
	}
	//回帖管理
	public function wish()
	{
		//总数
		$rtotal = $this->reply->total();
		//调用分页类
		$page = new Page($rtotal , 8);
		//偏移量
		$limit = $page->getOffset();

		//页面跳转链接
		$url = $page ->rander();

		$rpage = $this->reply->fpage($limit);

		 $this->assign('url' , $url);
		 $this->assign('rpage' , $rpage);
		 $this->assign('rtotal' , $rtotal);
		$this->display();
	}
	//删除回帖的方法
	public function delreturn()
	{
		if(!empty($_GET['rid']))
		{
			$rid = $_GET['rid'];
		}
		$result = $this->reply->delreturn($rid);
		if ($result){
			echo("<script>alert('删除成功');window.location.href='/index.php?m=Admin&a=wish'</script>");	
		exit;
		}
	
	}


	//留言管理
	public function appointment()
	{
		//总数
		$ltotal = $this->ly->total();
	
		//调用分页类
		$page = new Page($ltotal , 6);
		//偏移量
		$limit = $page->getOffset();

		//页面跳转链接
		$url = $page ->rander();

		$rpage = $this->ly->selectly($limit);

		 $this->assign('url' , $url);
		 $this->assign('rpage' , $rpage);
		 $this->assign('ltotal' , $ltotal);
		$this->display();
	}
	//删除留言
	public function delly()
	{
		$lid = $_GET['lid'];

		$result = $this->ly->dely($lid);
	
	if($result){
		echo("<script>alert('删除成功');window.location.href='/index.php?m=Admin&a=appointment'</script>");	
		exit;
	}
	
	}

	//修改密码
	public function changepwd()
	{
		$this->display();
	}

	//修改密码的方法
	
	public function change()
	{
		$uid= $_SESSION['uid'];
		if(!empty($_POST['password'])){
			$password = md5($_POST['password']);
		}
		
		$result = $this->user->upass($uid,$password);
		if ($result){
			echo("<script>alert('修改成功');window.location.href='/index.php?m=Admin&a=changepwd'</script>");	
		exit;
		}else{
			echo 2222;
		}
	}
}