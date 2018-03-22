<?php

namespace controller;
use model\UserModel;
class IndexController extends Controller
{
	public $index;
	function __construct()
	{
		parent::__construct();
		$this->index = new UserModel();
	}

	function index()
	{
		if (!empty($_SESSION['uid'])){
			$uid = $_SESSION['uid'];
		}
		//首页用户数据头像
		$red = $this->index ->selphoto($uid);
		$this->assign('red',$red);

		//什么都用写，代表显示app/view/index(控制器)/index(方法名字).html
		$this->display();
	}
}
