<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Call extends Base1{
	//联系我们页面
	public function call(){

        //读取信息
        $list = db('call')->find();
        $this->assign(array(
            'list'=>$list,
        ));
		return $this->fetch('contactUs');
	}
    //地图
    public function map(){

        return $this->fetch('usMap');
    }
}
?>