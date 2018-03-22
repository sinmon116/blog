<?php

namespace model;
use framework\Model;
class LyModel extends Model
{
	
	//留言的方法
	public function kly($data)
	{
		$res = $this->insert($data);
		return $res;
	}


	//查询留言
	public function total()
	{
		return $this->count();
	}
	//查看留言的内容
	public function selectly($limit)
	{
		$ly = $this->field('lid,username,lctime,neirong')->order('lctime desc')->limit("$limit")->select();

		return $ly;
	}

	//删除留言
	
	public function dely($lid)
	{
		return $this->where("lid  = $lid")->delete();
	}
}