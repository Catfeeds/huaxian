<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Company extends Base1{
	//首页
	public function index(){
		//企业之窗
		$company = db('company')->order('id desc')->select();

		//重点项目
		$project = db('project')->order('id desc')->select();

		$this->assign(array(
			'company'=>$company,
			'project'=>$project,
		));

		return $this->fetch('index');
	}
}
?>