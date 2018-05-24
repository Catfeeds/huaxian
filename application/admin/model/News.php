<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class News extends Model{
	//资讯列表
	public function search($key){
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		} //关键字查询
		$list=db('news')->where($where)->order('id desc')->paginate(12,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('news')->where($where)->order('id desc')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//添加资讯
	public function add($data){
		if(db('news')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//修改资讯
	public function edit($data){
	    $save=db('news')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//删除资讯
	public function del($id){
        if(db('news')->delete($id)){
		    return 1; //删除成功
		}else{
			return 2;  //删除失败
		}
	}
	//批量删除资讯
	public function p_del($ids){
		$list=db('news')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}


	//公告列表
	public function search1($key){
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		} //关键字查询
		$list=db('notice')->where($where)->order('id desc')->paginate(12,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('notice')->where($where)->order('id desc')->count();  //记录总数
        $data=array(
            'list'=>$list,
            'counts'=>$counts,
        );  
        return $data;
	}
	//添加公告
	public function add1($data){
		if(db('notice')->insert($data)){
			return 1; //添加成功
		}else{
			return 2;//添加失败
		}
	}
	//修改资讯
	public function edit1($data){
	    $save=db('notice')->update($data);
	    if($save!==false){
	    	return 1; //修改成功
	    }else{
	    	return 2;  //修改失败
	    }
	}
	//删除公告
	public function del1($id){
        if(db('notice')->delete($id)){
		    return 1; //删除成功
		}else{
			return 2;  //删除失败
		}
	}
	//批量删除公告
	public function p_del1($ids){
		$list=db('notice')->where(array('id'=>array('in',$ids)))->delete();
		if($list){
			return 1;//删除成功
		}else{
			return 2;//删除失败
		}
	}

}
?>