<?php
namespace app\index\controller;
use think\Controller;

class Base extends Controller{
	//判断用户是否登录
	public function _initialize(){     
		// if(!session('username')){
		// 	$this->error('请登录...','Login/login');
		// }else{
			$id=session('userid');
			$username = session('username');
	        $this->assign('username',$username);    
			$this->assign('id',$id);
			
			//底部友情链接
			$link = db('link')->order('id desc')->limit(5)->select();
			$this->assign('link',$link);
		// }
	}
}
?>