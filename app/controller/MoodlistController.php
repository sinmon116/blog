<?php
namespace controller;
use model\FormModel;
use framework\Page;


class MoodlistController extends Controller
{
	public $form;
	public function __construct()
	{
		parent::__construct();
		$this->form = new FormModel();

	}

	

		//调用模板引擎展示页面
		public function moodlist()
	{


		//热门帖子 查看数大于 5
		$hits = $this->form ->hits();

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
		 $this->assign('hits' , $hits);


		$this->display();
	}

		// 搜索
		public function search()
		{
			
			if(!empty($_REQUEST['content'])){
				$content = $_REQUEST['content'];
			}else{
				$content='php';
			}
			
			
		//调用搜索的方法
		//总数
		$soutotal = $this->form->soutotal($content);
		//调用分页类
		$spage = new Page($soutotal , 2);
		//偏移量
		$limit = $spage->getOffset();
		//页面跳转链接
		$surl = $spage ->rander();
		$soupage = $this->form->soupage($limit,$content);
		//热门帖子
		$ishot = $this->form ->hits();
		 $this->assign('surl' , $surl);
		 $this->assign('ishot' , $ishot);
		 $this->assign('soupage' , $soupage);
		 $this->assign('content' , $content);
		 $this->assign('soutotal' , $soutotal);
		$this->display();
		}
		
		
		


}