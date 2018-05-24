<?php
namespace app\admin\controller;
use app\admin\model\Help as HelpModel;
use app\admin\controller\Base;
use think\db;
class Help extends Base{
	//扶贫攻坚列表
	public function lst_zhengce(){
		//判断是否关键字查询
		$key['words']=input('keywords');
		$model=new HelpModel;
		$data=$model->search($key); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			// 'privilege'=>$privilege1,
			));
		return $this->fetch('help-list');
	}
	//添加扶贫攻坚
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid');
			$data['time']=date('Y-m-d H:i:s');
			// $data['createtime']=time();
			$validate= \think\Loader::validate('Help');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new HelpModel();  
			    $num=$model->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Help/add_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('help-add');
	}
	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}
	//修改扶贫攻坚
	public function edit(){	
		$id=input('id');
		$help=db('help')->find($id);
		$this->assign(array(
			'help'=>$help,
			));
		if(request()->isPost()){
			$data=input('post.');
			$validate= \think\Loader::validate('Help');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new HelpModel();
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Help/edit_success');
			    }else{
				    return $this->error('修改失败！');
			    } 
		    }
		}
		return $this->fetch('help-edit');
	}
	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}
	//删除扶贫攻坚
	public function del(){
		$id=input('id');
		$model=new HelpModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('Help/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除扶贫攻坚
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $model=new HelpModel();
		    $num=$model->p_del($ids);
		    if($num==1){
			    return $this->redirect('Help/del_success');
	    	}else{
			    return $this->error('批量删除失败！');
		    }
		}
	}
	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}


	//扶贫动态列表
	public function lst_dongtai(){
		//判断是否关键字查询
		$key['words']=input('keywords');
		$model=new HelpModel;
		$data=$model->search1($key); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			// 'privilege'=>$privilege1,
			));
		return $this->fetch('lst_dongtai');
	}
	//添加扶贫动态
	public function add1(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid');
			$data['time']=date('Y-m-d H:i:s');
			// $data['createtime']=time();
			$validate= \think\Loader::validate('Help');
			if(!$validate->scene('add1')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new HelpModel();  
			    $num=$model->add1($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('Help/add_success1');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('help-add1');
	}
	//添加成功
	public function add_success1(){
		return $this->fetch('add-success1');
	}
	//修改扶贫动态
	public function edit1(){	
		$id=input('id');
		$help=db('helpdongtai')->find($id);
		$this->assign(array(
			'help'=>$help,
			));
		if(request()->isPost()){
			$data=input('post.');
			$validate= \think\Loader::validate('Help');
			if(!$validate->scene('edit1')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new HelpModel();
			    $num=$model->edit1($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('Help/edit_success1');
			    }else{
				    return $this->error('修改失败！');
			    } 
		    }
		}
		return $this->fetch('help-edit1');
	}
	//修改成功
	public function edit_success1(){
		return $this->fetch('edit-success1');
	}
	//删除扶贫动态
	public function del1(){
		$id=input('id');
		$model=new HelpModel();
		$num=$model->del1($id);
		if($num==1){
			return $this->redirect('Help/del_success1');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除扶贫动态
	public function p_del1(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $model=new HelpModel();
		    $num=$model->p_del1($ids);
		    if($num==1){
			    return $this->redirect('Help/del_success1');
	    	}else{
			    return $this->error('批量删除失败！');
		    }
		}
	}
	//删除成功
	public function del_success1(){
		return $this->fetch('del-success1');
	}
}
?>