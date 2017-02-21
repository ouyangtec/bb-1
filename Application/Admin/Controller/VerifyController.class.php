<?php
	
	namespace Admin\Controller;
	
	class VerifyController extends \Think\controller
	{
		//对验证码进行判断
			public function code()
		{
			$config['useNoise'] = false;
			$config['length'] = 4;
			$config['codeSet'] = '0123456789';
			$verify = new \Think\Verify($config);
			$verify->entry(1);
		}
	}

?>