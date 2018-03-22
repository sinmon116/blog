<?php
namespace controller;
use model\UserModel;
use framework\Ucpaas;
use framework\Upload;
class AboutController extends Controller{

	public $about;
	public function __construct()
	{
		parent::__construct();
		$this->about = new UserModel();

	}


	public function about()
	{

		$this->use();
		$this->display();
	}


	public function use()
	{
		if (empty($_SESSION['username'])){
			$this->success('登录后查看','/index.php?m=user&a=login',3);
			exit;
		}

		if (!empty($_SESSION['uid'])){
			$uid = $_SESSION['uid'];
		}
		//查询用户
		$user = $this->about->sele($uid);

		$this->assign('user' , $user);
	}


	//修改个人资料的方法
	public function uperson()
	{
		
		//获取数据
		$uid = $_SESSION['uid'];
		$data['username'] = $_POST['username'];
		$data['email'] = $_POST['email'];
		$data['place'] =$_POST['place'];
		$data['autoph'] = $_POST['content'];
		$person = $this->about->up($uid,$data);
		if($person){
		echo "<script>alert('修改成功');history.go(-1);</script>";
		exit;
		}
		
	}


	//修改头像的方法
	public function changepic()
	{
		
		//获取用户id
		$uid=$_SESSION['uid'];

		//调用上传文件的的类
		$upload = new Upload();
		$fphone = $upload ->uploadFile('file');
		$data['photo'] = $fphone;

		$result = $this->about->chan($uid, $data);
		if($result){
		echo "<script>alert('修改成功,重新登录后头像改变');history.go(-1);</script>";
		exit;
		}
	}

}