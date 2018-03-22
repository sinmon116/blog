<?php
namespace controller;
use model\LyModel;
use framework\Page;

class LyController extends Controller
{
	public $ly;
	public function __construct()
	{
		parent::__construct();
		$this->ly = new  LyModel();
	}


	public function ly()
	{
		$this->sly();
		$this->display();
	}

	//留言
	
	public function doly()
	{
		//判断有没有登录 ，不登录不能发贴
		if (empty($_SESSION['username'])){
		$this->success('请登录', '/index.php?m=user&a=login',2);
		exit;
		}

		//获取用户名
		$data['username'] = $_SESSION['username'];

		//内容
		
			$data['neirong'] = $_POST['content'];

		

		$data['lctime'] = time();

		//开始留言
		$res = $this->ly ->kly($data);
		if ($res){
		$this->success('留言成功', '/index.php?m=ly&a=ly',2);
		exit;
		}else{
			$this->success('留言成功', '/index.php?m=ly&a=ly',2);
		}

	}


		//查询留言	
	public function sly()
	{
		//总数
		$total = $this->ly->total();
		//调用分页类
		$spage = new Page($total , 3);
		//偏移量
		$limit = $spage->getOffset();

		//页面跳转链接
		$surl = $spage ->rander();
		$ly = $this->ly ->selectly($limit);
		$this->assign('url',$surl);
		$this->assign('ly', $ly);
		
	}
}