<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
class Index extends Base{
	//首页
	public function index(){
		$adminid=session('adminid');
		$role=session('role');
		//判断是否存在该角色
		$role=db('role')->where('id','=',$role)->find();
		if($role){
			$this->assign('adminid',$adminid);
		    return $this->fetch('index');
		}else{
			return $this->redirect('Index/role_message');
		}
	}

	public function role_message(){
		return $this->fetch('role-message');
	}

	public function welcome(){
		return $this->fetch('welcome');
	}

	//清除缓存
	public function cachedel(){ 
		delFile(CACHE_PATH);
		// Cache::clear();
        $this->success('清除缓存成功！','Index/index');
	}

}
?>