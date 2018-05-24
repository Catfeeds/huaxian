<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class File extends Model{
	//批量删除文件
	public function p_del($ids){
		$list=db('neibufile')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

}
?>