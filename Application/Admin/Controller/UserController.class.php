<?php 
	namespace Admin\Controller;
	
	class UserController extends AdminController
	{
		public function index($name = NULL,$field = NULL,$status = NULL)
		{
			$where = array();
			if($field && $name){
				$where[$field] = $name;
			}
			if($status){
				$where['status'] = $status -1;
			}
			$count = M('User')->where($where)->count();
			$page = new \Think\Page($count,3);
			$show = $page->show();
			$list = M('User')->where($where)->order('id desc')->limit($page->firstRow .',' . $page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);
			$this->display();
		}
		
	}
?>