<?php
namespace app\admin\controller;
use app\admin\controller\Base;
// use think\Loader;
use think\db;
class Message extends Base{
	//添加留言(前台功能)
	public function add(){
		if(request()->isPost()){
			$data['yonghu']=session('username');
			$data['title']=input('title'); 
			$data['time1']=date('Y-m-d H:i:s');
			if($data['title']!=''){
				if(db('message')->insert($data)){
					return $this->redirect('Message/add_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加输入您的留言内容！');
			}
		}
		return $this->fetch('add');
	}
	//留言列表
	public function lst_all(){
		$key['words']=input('keywords');
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		}
		$list=db('message')->where($where)->order('id desc')->paginate(10,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('message')->where($where)->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_all');
	}
	//精选留言列表
	public function lst_good(){
		$key['words']=input('keywords');
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		}
		$list=db('message')->where($where)->where('good','=',1)->order('id desc')->paginate(10,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('message')->where($where)->where('good','=',1)->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_good');
	}
	//热门留言列表
	public function lst_hot(){
		$key['words']=input('keywords');
		if($key['words']){
			$where['title']=['like','%'.$key['words'].'%'];
		}else{
			$where=1;
		}
		$list=db('message')->where($where)->where('hot','=',1)->order('id desc')->paginate(10,false,[
		    'query'=>[
		        'keywords'=>$key['words']
		    ]]);  //分页查询数据
		$counts=db('message')->where($where)->where('hot','=',1)->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_hot');
	}
	//回复或修改留言
	public function edit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('message')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data = input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Message');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('message')->update($data)){
					return $this->redirect('Message/edit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('edit');
	}
	//编辑成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}
	//删除留言
	public function del(){
		$id=input('id');
		if(db('message')->delete($id)){
			return $this->redirect('Message/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除留言成功
	public function del_success(){
		return $this->fetch('del-success');
	}
	//删除精选留言
	public function del_good(){
		$id=input('id');
		$data=[
            'id'=>$id,
            'good'=>0,
		];
		if(db('message')->update($data)){
			return $this->redirect('Message/lst_good');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除热门留言
	public function del_hot(){
		$id=input('id');
		$data=[
            'id'=>$id,
            'hot'=>0,
		];
		if(db('message')->update($data)){
			return $this->redirect('Message/lst_hot');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除留言
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $list=db('message')->where(array('id'=>array('in',$ids)))->delete();
		    if($list){
			    return $this->redirect('Message/del_success');
	    	}else{
			    return $this->error('批量删除失败！');
		    }
		}
	}
}
?>