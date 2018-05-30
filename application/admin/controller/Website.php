<?php
namespace app\admin\controller;
use app\admin\controller\Base;
class Website extends Base{
	//轮播图列表
	public function lst_img(){
		$list=db('imgs')->order('id asc')->paginate(5);  //分页查询数据
		$counts=db('imgs')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_img');
	}

	//添加轮播图
	public function imgadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['name']=input('name');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				if($data['name']!=''){
					$file=request()->file('image');
					$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
					$data['image']='/upimages/'.$info->getSaveName();
					if(db('imgs')->insert($data)){
						return $this->redirect('Website/imgadd_success');
					}else{
						return $this->error('添加失败');
					}
				}else{
	                return $this->error('标题不能为空！');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('img-add');
	}

	//轮播图添加成功
	public function imgadd_success(){
		return $this->fetch('imgadd-success');
	}

	//编辑轮播图标题
	public function imgedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('imgs')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data['name']=input('name');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['name']!=''){
				if(db('imgs')->update($data)){
					return $this->redirect('Website/imgedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('标题不能为空！');
			}
		}
		return $this->fetch('img-edit');
	}
	//修改轮播图图片
	public function imgedit1(){
		$id=input('id');
		$this->assign('id',$id);
		// $list = db('imgs')->find($id);
		// $this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['image']=input('image'); 
			// $data['name']=input('name');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				if(db('imgs')->update($data)){
					return $this->redirect('Website/imgedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_img');
	}

	//编辑成功
	public function imgedit_success(){
		return $this->fetch('imgedit-success');
	}

	//删除轮播图
	public function imgdel(){
		$id=input('id');
		if(db('imgs')->delete($id)){
			return $this->redirect('Website/imgdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除轮播图成功
	public function imgdel_success(){
		return $this->fetch('imgdel-success');
	}

	//友情链接列表
	public function lst_link(){
		$list=db('link')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('link')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_link');
	}

	//添加友情链接
	public function linkadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['linkurl']=input('linkurl');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Link');
			// if(!$validate->scene('add')->check($data)){
			// 	return $this->error($validate->getError());
			// }else{
				if($data['image']!=''){
					if($data['linkurl']!=''){
						$file=request()->file('image');
						// var_dump($file);die;
						$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
						$data['image']='/upimages/'.$info->getSaveName();
						if(db('link')->insert($data)){
							return $this->redirect('Website/linkadd_success');
						}else{
							return $this->error('添加失败');
						}
					}else{
	        			return $this->error('链接地址不能为空！');
					}
				}else{
        			return $this->error('图片不能为空！');
				}
			// }
		}
		return $this->fetch('link-add');
	}

	//友情链接添加成功
	public function linkadd_success(){
		return $this->fetch('linkadd-success');
	}

	//编辑友情链接
	public function linkedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('link')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data['linkurl']=input('linkurl');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['linkurl']!=''){
				if(db('link')->update($data)){
					return $this->redirect('Website/linkedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('链接地址不能为空！');
			}
		}
		return $this->fetch('link-edit');
	}
	//修改友情链接图片
	public function linkedit1(){
		$id=input('id');
		$this->assign('id',$id);
		// $list = db('imgs')->find($id);
		// $this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['image']=input('image'); 
			// $data['name']=input('name');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				if(db('link')->update($data)){
					return $this->redirect('Website/linkedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_link');
	}
	//编辑成功
	public function linkedit_success(){
		return $this->fetch('linkedit-success');
	}

	//删除友情链接
	public function linkdel(){
		$id=input('id');
		if(db('link')->delete($id)){
			return $this->redirect('Website/linkdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除友情链接成功
	public function linkdel_success(){
		return $this->fetch('linkdel-success');
	}

	//联系我们列表
	public function lst_call(){
		$list=db('call')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('call')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_call');
	}

	//添加联系我们
	public function calladd(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid');
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Call');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('call')->insert($data)){
					return $this->redirect('Website/calladd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('call-add');
	}
	//联系我们添加成功
	public function calladd_success(){
		return $this->fetch('calladd-success');
	}

	//删除联系我们
	public function calldel(){
		$id=input('id');
		if(db('call')->delete($id)){
			return $this->redirect('Website/calldel_success');
		}else{
			return $this->error('删除失败！');
		}
	}

	//删除联系我们成功
	public function calldel_success(){
		return $this->fetch('calldel-success');
	}

	//修改联系我们
	public function calledit(){
		//获取原来数据		
		$id=input('id');
		$list=db('call')->find($id);
		$this->assign(array(
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=input('post.'); //获取表单新提交的数据
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Call');  //调用validate中的edit验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
			    if(db('call')->update($data)){
					return $this->redirect('Website/edit_success');
				}else{
					return $this->error('修改失败');
				}
			}
			
		}
		return $this->fetch('edit_call');
	}
	//修改联系我们成功
	public function edit_success(){
		return $this->fetch('edit_success');
	}

}
?>