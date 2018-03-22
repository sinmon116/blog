<?php
namespace model;
use framework\Model;

class ReplyModel extends Model
{


	//查询帖子的回复
	public function sreply($id)
	{
		$result = $this->where("tid  = $id and isdel =0")->select();
		return $result;
	}

	//进行帖子回复
	public function fcomment($data)
	{
		$fcomment = $this->insert($data);
		return $fcomment;
	}

	//回复帖子 的总数
		public function total()
		{
			
			return  $this->count();
		}
	//查询回帖内容
	public function fpage($limit)
	{
		return $this->limit("$limit")->select();
	}

	//删除回帖的方法
	public function delreturn($rid)
	{
		return $this->where("rid = $rid")->delete();
	}

}