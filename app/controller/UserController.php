<?php
namespace controller;
use model\UserModel;
use framework\Ucpaas;
use framework\Email;


class UserController extends Controller
{

	public $user;
	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
	}
	//登录
	
	public function login()
	{
		$this->display();
	}

	//开始登录
	public function dologin()
	{
		$name = $_POST['username'];
		$u = $this->user->getByUsername($name);
		$type = $u[0]['type'];
		$uid = $u[0]['uid'];
		$picture = $u[0]['photo'];

		if (empty($u[0])) {
			$this->success('用户名不存在','/index.php?m=user&a=login',3);
			exit;
		} 
		$pwd = md5($_POST['password']);
		if (strcmp($pwd, $u[0]['password'])) {
			$this->success('密码错误','/index.php?m=user&a=login',3);
			exit;
		}
		$_SESSION['username'] = $name;
		$_SESSION['type'] = $type;
		$_SESSION['uid'] = $uid;
		$_SESSION['picture'] = $picture;
		$this->success('登录成功','/index.php?m=index&a=index',3);
	}

	//注册
	
	public function regist()
	{
		$this->display();
	}

	//开始注册
	
	public function doregist()
	{


		//注册数据验证
		//用户名是否存在
		$name = $_POST['username'];
		$u = $this->user->getByUsername($name);
		$username = $u[0]['username'];
		if($name = $username){
		echo "<script>alert('该用户已经存在');history.go(-1);</script>";
		exit;
		}

		//密码长度  不能是纯数字
		if(strlen($_POST['password']) < 6){
			echo "<script>alert('密码不得低于6位');history.go(-1);</script>";
			exit;
		}

		if(is_numeric($_POST['password'])){
			echo "<script>alert('密码不能是纯数字');history.go(-1);</script>";
			exit;
		}


		
		//获取数据
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['tel'];
		$data['ctime'] = time();
		$yzm = $_POST['yzm'];

		if ($_SESSION['check'] !=$yzm){
			echo "<script>alert('手机验证码不对');history.go(-1);</script>";
			exit;
		}

		$result = $this->user ->doregist($data);
		if ($result) {
			//自增主键的id
			$uid = $result;
			//把信息写入session
			$_SESSION['uid'] = $uid;
			$_SESSION['username'] = $data['username'];
			$_SESSION['type'] = 0;

			$this->success('注册成功' , '/index.php?m=index&a=index' , 3);
		}else{
			$this->success('注册失败' , '/index.php?m=index&a=index' , 3);
		}

	}

	//获取手机验证的方法
	public function phone()
	{
				$num=$_POST['tel'];
				//初始化必填
				$options['accountsid']='2dee17ec85c76f95de8718f48e070f9c';
				$options['token']='0c8aec84111675d9f36c376f857a26c2';
				//初始化 $options必填
				$ucpass = new Ucpaas($options);
				//开发者账号信息查询默认为json或xml
				header("Content-Type:text/html;charset=utf-8");
				//产生随机的4位数验证码
				$str='0123456789';
				$str1=substr(str_shuffle($str) , 0, 6);
				$_SESSION['check']=$str1;
				//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
				$appId = "272a9e1f1dca44ffbfa3b3e4ce8046b2";
				$to = "$num";
				$templateId = "244629";
				$param="$str1";
				echo $ucpass->templateSMS($appId,$to,$templateId,$param);
				

	}
	

	//退出的方法
	public function logout()
	{
		unset($_SESSION['username']);

		session_destroy();
		$this->success('退出成功','/index.php?m=index&a=index',2);
	}

	//邮箱验证的方法
	public function email()
	{
		$this->display();

	}

	public function kemail()
	{
		//判断  获取数据
		if(!empty($_POST['username'])){

			$username = $_POST['username'];

		}else{
			exit("<script>alert('请输入用户名');history.go(-1);</script>");
		}

		if(!empty($_POST['email'])){

			$email = $_POST['email'];

		}else{
			exit("<script>alert('请输入邮箱');history.go(-1);</script>");
		}

		//根据用户名查询输入的邮箱是否注册
		$uemail = $this->user->seleamil($username);
		$semail =$uemail[0]['email'];
		if($semail != $email){
		exit("<script>alert('该邮箱未注册');history.go(-1);</script>");
	}


		//邮箱里面的验证码
		 $str = '1234567890';
		 $code = substr(str_shuffle($str),0,6);
		 //调用邮箱验证
		 $mail = new Email();
		 $mail->setServer("smtp.exmail.qq.com", "cn@msinmon.cn", "Lcn123456"); //设置smtp服务器
		 $mail->setFrom("cn@msinmon.cn"); //设置发件人 
		 $mail->setReceiver("$email"); //设置收件人，多个收件人，调用多次
		 // $mail->setCc("XXXX"); //设置抄送，多个抄送，调用多次
		 // $mail->setBcc("XXXXX"); //设置秘密抄送，多个秘密抄送，调用多次
		 $result = $mail->setMailInfo("找回密码", "您的临时密码为：$code"); //设置邮件主题、内容
		 $mail->sendMail(); //发送
		 //密码
		 $data['password'] =md5($code); 
		 //更新密码
		 
		 $result = $this->user->emailpass($username, $data);
		if ($result){
			$this->success('找回成功' ,'/index.php?m=user&a=login',2);
		}

	}
}