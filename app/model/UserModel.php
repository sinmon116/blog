<?php
namespace model;
use framework\Model;
class UserModel extends Model
{
	
		//注册
		public function doregist($data)
		{
			$result = $this->insert($data);

			return $result;

		}

		//用户总数
		public function totaluse()
		{
			return $this->count();
		}
		//后台用户管理查询用户数据
		public function seluser($limit)
		{
			return $this->limit("$limit")->select();
		}

		//删除用户的方法
		public function deluser($uid)
		{
			return $this->where("uid = $uid")->delete();
		}

		//更改管理用户密码
		public function upass($uid,$pas)
		{
			$result =  $this->where("uid = $uid")->update(['password'=>$pas]);
			return $result;
		}


		//about  用户数据
		public function sele($uid)
		{
			return $this->where("uid = $uid")->select();
		}
		//头像查
		
		public function selphoto($uid)
		{
			return $this->field('photo')->where("uid =$uid")->select();
		}

		//更新资料的方法
		
		public function up($uid,$data)
		{
			return $this->where("uid = $uid")->update($data);

		}


		//修改头像的方法
		public function chan($uid, $data)
		{
			return $this->where("uid = $uid")->update($data);
		}

		//查询输入的邮箱是否被注册
		public function seleamil($username)
		{
			return $this->field('email')->where("username = '$username'")->select();
		}
		//邮箱验证更改密码
		public function emailpass($username,$data)
		{
			return $this->where("username = '$username'")->update($data);
		}
}