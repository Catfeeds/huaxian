<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Loader;
use think\db;
class Company extends Base{
	//企业之窗列表
	public function lst_company(){
		$list=db('company')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('company')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_company');
	}
	//添加企业之窗
	public function companyadd(){
		if(request()->isPost()){
			// $data['image']=input('image');
			// $data['title']=input('title');
			// $data['description']=input('description');
			// $data['content']=input('content');
			$data=input('post.');    //获取表单数据 
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Company');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('company')->insert($data)){
					return $this->redirect('Company/companyadd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('company-add');
	}
	//企业之窗添加成功
	public function companyadd_success(){
		return $this->fetch('companyadd-success');
	}
	//编辑企业之窗
	public function companyedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('company')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['title']=input('title');
			// $data['content']=input('content');
			$data['description']=input('description');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Company');   //调用validate中的add验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('company')->update($data)){
					return $this->redirect('Company/companyedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('company-edit');
	}
	//修改企业之窗图片
	public function companyedit1(){
		$id=input('id');
		$this->assign('id',$id);
		// $list = db('imgs')->find($id);
		// $this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['image']=input('image'); 
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				if(db('company')->update($data)){
					return $this->redirect('Company/companyedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_company');
	}
	//编辑成功
	public function companyedit_success(){
		return $this->fetch('companyedit-success');
	}
	//删除企业之窗
	public function companydel(){
		$id=input('id');
		if(db('company')->delete($id)){
			return $this->redirect('Company/companydel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除企业之窗成功
	public function companydel_success(){
		return $this->fetch('companydel-success');
	}


	//重点项目列表
	public function lst_project(){
		$list=db('project')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('project')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_project');
	}
	//添加重点项目
	public function projectadd(){
		if(request()->isPost()){
			// $data['image']=input('image');
			// $data['title']=input('title');
			// $data['description']=input('description');
			// $data['content']=input('content');
			$data=input('post.');    //获取表单数据 
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
			}
			$validate= \think\Loader::validate('Company');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('project')->insert($data)){
					return $this->redirect('Company/projectadd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('project-add');
	}
	//重点项目添加成功
	public function projectadd_success(){
		return $this->fetch('projectadd-success');
	}
	//编辑重点项目
	public function projectedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('project')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['title']=input('title');
			// $data['content']=input('content');
			$data['description']=input('description');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Company');   //调用validate中的add验证方法
			if(!$validate->scene('edit1')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('project')->update($data)){
					return $this->redirect('Company/projectedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('project-edit');
	}
	//修改重点项目图片
	public function projectedit1(){
		$id=input('id');
		$this->assign('id',$id);
		// $list = db('imgs')->find($id);
		// $this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['image']=input('image'); 
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				if(db('project')->update($data)){
					return $this->redirect('Company/projectedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_project');
	}
	//编辑成功
	public function projectedit_success(){
		return $this->fetch('projectedit-success');
	}
	//删除重点项目
	public function projectdel(){
		$id=input('id');
		if(db('project')->delete($id)){
			return $this->redirect('Company/projectdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除重点项目成功
	public function projectdel_success(){
		return $this->fetch('projectdel-success');
	}
}
?>