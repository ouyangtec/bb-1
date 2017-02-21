<?php 
	namespace Admin\Controller;
	
	class LoginController extends \Think\Controller
	{
		//进入后台登录的首页
		public function index($username = Null,$password =NULL,$verify = NULL)
		{
			if(IS_POST)
			{
				if(!($verify)){
					$this->error('验证码输入错误！');
				}
				$admin = M('Admin')->where(array('username' => $username))->find();
				if($admin['password'] != $password){
					$this->error('用户名或者密码错误！');
				}else{
					session('admin_id',$admin['id']);
					session('admin_username',$admin['username']);
					session('admin_password',$admin['password']);
					$this->success('登录成功！',U('Index/index'));
				}
			}else{
				if(session('admin_id')){
					$this->redirect('Admin/Index/index');
				}
				$this->display();
			}
			
		}
		//执行退出跳转的页面；
		public function loginout()
		{
			session(null);
			//S('5df4g5dsh8shnfsf', null);
			$this->redirect('Login/index');
		}
		//执行锁屏的操作;
			public function lockScreen()
		{
			if (!IS_POST) {
				$this->display();
			}
			else {
				$pass = trim(I('post.pass'));

				if ($pass) {
					session('LockScreen', $pass);
					session('LockScreenTime', 3);
					$this->success('锁屏成功,正在跳转中...');
				}
				else {
					$this->error('请输入一个锁屏密码');
				}
			}
		}
		//执行解锁屏幕的操作；
		public function unlock()
		{
			if (!session('admin_id')) {
				session(null);
				$this->error('登录已经失效,请重新登录...', '/Admin/login');
			}

			if (session('LockScreenTime') < 0) {
				session(null);
				$this->error('密码错误过多,请重新登录...', '/Admin/login');
			}

			$pass = trim(I('post.pass'));

			if ($pass == session('LockScreen')) {
				session('LockScreen', null);
				$this->success('解锁成功', '/Admin/index');
			}

			$admin = M('Admin')->where(array('id' => session('admin_id')))->find();

			if ($admin['password'] == $pass) {
				session('LockScreen', null);
				$this->success('解锁成功', '/Admin/index');
			}

			session('LockScreenTime', session('LockScreenTime') - 1);
			$this->error('用户名或密码错误！');
		}
	}
?>