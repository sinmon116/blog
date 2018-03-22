<?php
namespace controller;
use model\FormModel;
use model\ReplyModel;
use framework\Page;

class DetailController extends Controller
{

	public $detail ;
	public $reply;
	public function __construct()
	{
		parent::__construct();
		$this->detail = new FormModel();
		$this->reply = new ReplyModel();
	}
	//调用模板引擎
	public function detail()
	{	
		//调用postail
		$this->postail();
		//调用reply
		$this->reply();

		
		$this->display();
	}
	//展示帖子的内容和详情
	protected function  postail()
	{
		//获取帖子的id
		if (!empty($_GET['id'])){
			$id = $_GET['id'];
			$_SESSION['tid']= $id;
		}else{
			$id = 4;
		}
		
		$postail = $this->detail ->post($id);
		$hits = $postail[0]['hits'];
		$hits = $hits+1;
		 //浏览量增加的方法
		 $look = $this->detail ->uphits($id , $hits);
		$this->assign('postail' , $postail);
	}


	//帖子的回复
	public function reply()
	{
		//获取帖子的id
		if (!empty($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id = 4;
		}
		$result = $this->reply ->sreply($id);
		
		$this->assign('result' , $result);
	}
	

	//处理评论的方法
	public function comment()
	{

		if (empty($_SESSION['username'])){
			$this->success('请登录', '/index.php?m=user&a=login',2);
			exit;
		}
		//获取帖子的id
		$id = $_SESSION['tid'];
		//获取当前用户名 uid
		if (!empty($_SESSION['uid'])){
			$uid = $_SESSION['uid'];
		}
		if (!empty($_SESSION['username'])){
			$username = $_SESSION['username'];
		}
		//获取回复内容
		if(!empty($_POST['content'])){
			$data['content'] =$_POST['content'];
		}
		//获取前时间、用户名 、uid
		$data['addtime'] = time();
		$data['username'] = $username;
		$data['uid']=$uid;
		$data['tid'] = $id;

		$fcomment = $this->reply->fcomment($data);
		if($fcomment){
			echo "<script>alert('评论成功');history.go(-1);</script>";
			exit;
		}else{
			echo "<script>alert('评论失败');history.go(-1);</script>";
			exit;
		}
	
	}

}

