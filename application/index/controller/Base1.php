<?php
namespace app\index\controller;
use think\Controller;

class Base1 extends Controller{
	//公共控制器
	public function _initialize(){ 
		$id=session('userid');
		$username = session('username');
        $this->assign('username',$username);    
		$this->assign('id',$id); 

		//底部友情链接
		$link = db('link')->order('id desc')->limit(5)->select();
		$this->assign('link',$link);
	}
}
?>