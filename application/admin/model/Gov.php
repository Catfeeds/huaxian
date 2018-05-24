<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Gov extends Model{
	//扶贫攻坚列表
	public function search1($key){
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		} //关键字查询
		$list=db('help')->where($where)->order('id desc')->paginate(12,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('help')->where($where)->order('id desc')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//添加扶贫攻坚
	public function add1($data){
		if(db('help')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//修改扶贫攻坚
	public function edit1($data){
	    $save=db('help')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//删除扶贫攻坚
	public function del1($id){
        if(db('help')->delete($id)){
		    return 1; //删除成功
		}else{
			return 2;  //删除失败
		}
	}
	//批量删除扶贫攻坚
	public function p_del1($ids){
		$list=db('help')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

}
?>