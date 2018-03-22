<?php

namespace model;
use framework\Model;
class FormModel extends Model
{

		//查询帖子总数
		public function total()
		{
			$totalCount = $this->where('isdel = 0')->count();
			return $totalCount;
		}

		//分页查询
	
		public function  fpage($limit)
		{
			$rpage = $this->field('id,title,fphoto,addtime,uname')->limit("$limit")->where('isdel = 0')->order('addtime desc')->select();
			return $rpage;
		}
		//热门文章的查询  hits >10 
		public function hits()
		{
			$hits = $this->field('hits,title')->where('hits > 10')->order('hits desc')->limit('0,5')->select();
			return $hits;
		}

		//查询帖子详情 展示帖子内容
		public function post($id)
		{
			$postail = $this->where("id = $id")->select();
			return $postail;
		}

		//增加帖子阅读量的量的方n法
		public function uphits($id, $hits)
		{
			$look = $this->where("id = $id")->update(['hits'=>"$hits"]);
			return $look;
		}

		//查询搜索帖子总数
		public function soutotal($content)
		{
			$soutotal = $this->where("isdel = 0 and title like '%$content%'")->count();
			return $soutotal;
		}


		//搜索分页查询
	
		public function  soupage($limit,$content)
		{
			$soupage = $this->field('id,title,fphoto,addtime,uname,hits')->limit("$limit")->where("isdel = 0 and title like '%$content%'")->select();
			return $soupage;
		}


		//发帖子的方法
		public function dosend($data)
		{
			$fresult = $this->insert($data);
			return $fresult;
		}

		//删除帖子的方法
		public function deltz($id)
		{
			return $this->where("id = $id")->delete();
		}
}