<?php
namespace app\admin\controller;
use app\admin\model\News as NewsModel;
use app\admin\controller\Base;
class News extends Base{
	//资讯列表
	public function lst_news(){
		//判断是否关键字查询
		$key['words']=input('keywords');
		$model=new NewsModel;
		$data=$model->search($key); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			// 'privilege'=>$privilege1,
			));
		return $this->fetch('news-list');
	}
	//添加资讯
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid');
			$data['time']=date('Y-m-d H:i:s');
			// $data['createtime']=time();
			$validate= \think\Loader::validate('News');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new NewsModel();  
			    $num=$model->add($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('News/add_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('news-add');
	}
	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}
	//修改资讯
	public function edit(){	
		$id=input('id');
		$news=db('news')->find($id);
		$this->assign(array(
			'news'=>$news,
			));
		if(request()->isPost()){
			$data=input('post.');
			$validate= \think\Loader::validate('News');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new NewsModel();
			    $num=$model->edit($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('News/edit_success');
			    }else{
				    return $this->error('修改失败！');
			    } 
		    }
		}
		return $this->fetch('news-edit');
	}
	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}
	//删除资讯
	public function del(){
		$id=input('id');
		$model=new NewsModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('News/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除资讯
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $model=new NewsModel();
		    $num=$model->p_del($ids);
		    if($num==1){
			    return $this->redirect('News/del_success');
	    	}else{
			    return $this->error('批量删除失败！');
		    }
		}
	}
	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}


	//公告列表
	public function lst_notice(){
		//判断是否关键字查询
		$key['words']=input('keywords');
		$model=new NewsModel;
		$data=$model->search1($key); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			// 'privilege'=>$privilege1,
			));
		return $this->fetch('notice-list');
	}
	//添加公告
	public function add1(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid');
			$data['time']=date('Y-m-d H:i:s');
			// $data['createtime']=time();
			$validate= \think\Loader::validate('News');
			if(!$validate->scene('add1')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new NewsModel();  
			    $num=$model->add1($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('News/add_success1');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('notice-add');
	}
	//添加成功
	public function add_success1(){
		return $this->fetch('add-success1');
	}
	//修改公告
	public function edit1(){	
		$id=input('id');
		$notice=db('notice')->find($id);
		$this->assign(array(
			'notice'=>$notice,
			));
		if(request()->isPost()){
			$data=input('post.');
			$validate= \think\Loader::validate('News');
			if(!$validate->scene('edit1')->check($data)){
				return $this->error($validate->getError());
			}else{
			    $model=new NewsModel();
			    $num=$model->edit1($data);  //调用model中的方法
			    if($num==1){
				    return $this->redirect('News/edit_success1');
			    }else{
				    return $this->error('修改失败！');
			    } 
		    }
		}
		return $this->fetch('notice-edit');
	}
	//修改成功
	public function edit_success1(){
		return $this->fetch('edit-success1');
	}
	//删除公告
	public function del1(){
		$id=input('id');
		$model=new NewsModel();
		$num=$model->del1($id);
		if($num==1){
			return $this->redirect('News/del_success1');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除公告
	public function p_del1(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $model=new NewsModel();
		    $num=$model->p_del1($ids);
		    if($num==1){
			    return $this->redirect('News/del_success1');
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