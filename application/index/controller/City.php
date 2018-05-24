<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class City extends Base1{
	//首页
	public function index(){

        //锦和新城图片
        $jinhe = db('jinhe')->order('id desc')->select();
        $this->assign('jinhe',$jinhe);

		return $this->fetch('index');
	}
	//基础设施
	public function basic(){
		$basic = db('basics')->order('id desc')->find();
        $this->assign('basic',$basic);
		return $this->fetch('basic');
	}

	//主导产业定位详情页面
    public function maindetail(){
    	$main = db('main')->order('id desc')->find();
        $this->assign('main',$main);
        return $this->fetch('maindetail');
    }

    //远期规划详情页面
    public function plandetail(){
    	$plan = db('plan')->order('id desc')->find();
        $this->assign('plan',$plan);
        return $this->fetch('plandetail');
    }

    //园区详情页面
    public function yuanqudetail(){
    	$yuanqu = db('yuanqu')->order('id desc')->find();
        $this->assign('yuanqu',$yuanqu);
        return $this->fetch('yuanqudetail');
    }

    //六通一平详情页面
    public function liutongdetail(){
    	$liutong = db('liutong')->order('id desc')->find();
        $this->assign('liutong',$liutong);
        return $this->fetch('liutongdetail');
    }

    //污水处理厂详情页面
    public function waterdetail(){
    	$water = db('water')->order('id desc')->find();
        $this->assign('water',$water);
        return $this->fetch('waterdetail');
    }
}
?>