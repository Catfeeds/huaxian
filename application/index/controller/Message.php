<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Message extends Base1{
	//首页
	public function index(){

		//精选留言
		$good_message=db('message')->where('good','=',1)->order('id desc')->select();

		//热门留言
		$hot_message=db('message')->where('hot','=',1)->order('id desc')->limit(8)->select();

		$this->assign(array(
			'good_message'=>$good_message,
			'hot_message'=>$hot_message,
		));
		return $this->fetch('index');
	}
	//添加留言页面
	public function add(){
		if(session('username')!=''){
			//我的留言

			$my_message = db('message')->where('yonghu','=',session('username'))->order('id desc')->select();
			$this->assign('my_message',$my_message);

			if(request()->isPost()){
				$data['yonghu']=session('username');
				$data['title']=input('title'); 
				$data['time1']=date('Y-m-d H:i:s');
				if($data['title']!=''){
					if(db('message')->insert($data)){
						return $this->success('留言成功','Message/add');
					}else{
						return $this->error('留言失败');
					}
				}else{
					return $this->error('请输入您的留言内容！');
				}
			}
		}else{
			return $this->error('请登录！','Message/index');
		}
		
		return $this->fetch('add');
	}

	//热门问题页面
	public function hot(){
		//热门留言
		$hot_message=db('message')->where('hot','=',1)->order('id desc')->select();
		$this->assign('hot_message',$hot_message);

		return $this->fetch('hot');
	}
}
?>