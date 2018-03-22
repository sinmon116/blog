<?php

namespace controller;
use model\FormModel;
use framework\Page;
use framework\Upload;

class LifeController extends Controller
{
	public $send;
	public function __construct()
	{
		parent::__construct();
		$this->send = new FormModel();
	}


	public function life()
	{
		$this->display();
	}

	//发博文的方法
	public function dopost()
	{
		//判断有没有登录 ，不登录不能发贴
		if (empty($_SESSION['username'])){
		$this->success('请登录', '/index.php?m=user&a=login',2);
		exit;
	}
		//获取数据
		if(!empty($_POST['title'])){
			$data['title'] = $_POST['title'];
		}
		if(!empty($_POST['content'])){
			$data['content'] = $_POST['content'];
		}
		//获取用户信息
		if (!empty($_SESSION['username'])){
			$data['uname'] = $_SESSION['username'];
		}
		if (!empty($_SESSION['uid'])){
			$data['aid'] = $_SESSION['uid'];
		}
		$data['addtime'] = time();

		//调用上传文件的的类
		$upload = new Upload();
		$fphone = $upload ->uploadFile('file');
		$data['fphoto'] = $fphone;
		
		$fresult = $this->send ->dosend($data);
		if ($fresult)
		{
			$this->success('发表成功' ,'/index.php?m=moodlist&a=moodlist',2);
		}else{
			$this->success('发表失败' ,'/index.php?m=life&a=life',2);
		}
	
	}
}
