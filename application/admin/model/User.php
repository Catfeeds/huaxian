<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class User extends Model{
	//用户列表
	public function search($key){
		if($key['words']&&$key['id']){
			$where['username']=['like','%'.$key['words'].'%'];//根据账号关键字查询
			$where['id']=$key['id'];                     
		}elseif($key['words']){
			$where['username']=['like','%'.$key['words'].'%'];
		}elseif($key['id']){
			$where['id']=$key['id'];
		}else{
			$where=1;
		} //关键字查询
		$list=db('user')->where($where)->order('id desc')->paginate(12,false,[
		    'query'=>[
		        'keywords'=>$key['words'],
		        'keyid'=>$key['id'],
		    ]]);  //分页查询数据
		$counts=db('user')->where($where)->order('id desc')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}

	//添加用户
	public function add($data){
		if(db('user')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}

	//用户修改
	public function edit($data){
	    $save=db('user')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//用户删除
	public function del($id){
		if(db('user')->delete($id)){
		    return 1; //删除成功
		}else{
			return 2;  //删除失败
		}
	}
	//用户批量删除
	public function p_del($ids){
		$list=db('user')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

}
?>