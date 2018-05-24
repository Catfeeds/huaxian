<?php
namespace app\admin\controller;
use app\admin\controller\Base;
// use think\Loader;
use think\db;
class City extends Base{
	//基础设施列表
	public function lst_basics(){
		$list=db('basics')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_basics');
	}
	//添加基础设施
	public function basicsadd(){
		if(request()->isPost()){
			$data['health']=input('health');
			$data['culture']=input('culture');
			$data['edu']=input('edu');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['health']){
				if($data['culture']){
					if($data['edu']){
						if(db('basics')->insert($data)){
							return $this->redirect('City/basicsadd_success');
						}else{
							return $this->error('添加失败');
						}
					}else{
						return $this->error('请添加教育相关内容！');
					}
				}else{
					return $this->error('请添加文化相关内容！');
				}
			}else{
				return $this->error('请添加卫生的内容！');
			}
		}
		return $this->fetch('basics-add');
	}
	//基础设施添加成功
	public function basicsadd_success(){
		return $this->fetch('basicsadd-success');
	}
	//编辑基础设施
	public function basicsedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('basics')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['health']=input('health');
			$data['culture']=input('culture');
			$data['edu']=input('edu');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['health']){
				if($data['culture']){
					if($data['edu']){
						if(db('basics')->update($data)){
							return $this->redirect('City/basicsedit_success');
						}else{
							return $this->error('修改失败');
						}
					}else{
						return $this->error('请添加教育相关内容！');
					}
				}else{
					return $this->error('请添加文化相关内容！');
				}
			}else{
				return $this->error('请添加卫生的内容！');
			}
		}
		return $this->fetch('basics-edit');
	}
	//编辑成功
	public function basicsedit_success(){
		return $this->fetch('basicsedit-success');
	}


	//主导产业定位列表
	public function lst_main(){
		$list=db('main')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_main');
	}
	//添加主导产业定位
	public function mainadd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('main')->insert($data)){
					return $this->redirect('City/mainadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加主导产业定位的相关内容！');
			}
		}
		return $this->fetch('main-add');
	}
	//主导产业定位添加成功
	public function mainadd_success(){
		return $this->fetch('mainadd-success');
	}
	//编辑主导产业定位
	public function mainedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('main')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('main')->update($data)){
					return $this->redirect('City/mainedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加主导产业定位的相关内容！');
			}
		}
		return $this->fetch('main-edit');
	}
	//编辑成功
	public function mainedit_success(){
		return $this->fetch('mainedit-success');
	}


	//远期规划列表
	public function lst_plan(){
		$list=db('plan')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_plan');
	}
	//添加远期规划
	public function planadd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('plan')->insert($data)){
					return $this->redirect('City/planadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加远期规划的相关内容！');
			}
		}
		return $this->fetch('plan-add');
	}
	//远期规划添加成功
	public function planadd_success(){
		return $this->fetch('planadd-success');
	}
	//编辑远期规划
	public function planedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('plan')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('plan')->update($data)){
					return $this->redirect('City/planedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加远期规划的相关内容！');
			}
		}
		return $this->fetch('plan-edit');
	}
	//编辑成功
	public function planedit_success(){
		return $this->fetch('planedit-success');
	}


	//园区规划列表
	public function lst_yuanqu(){
		$list=db('yuanqu')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_yuanqu');
	}
	//添加园区规划
	public function yuanquadd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('yuanqu')->insert($data)){
					return $this->redirect('City/yuanquadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加园区规划的相关内容！');
			}
		}
		return $this->fetch('yuanqu-add');
	}
	//园区规划添加成功
	public function yuanquadd_success(){
		return $this->fetch('yuanquadd-success');
	}
	//编辑园区规划
	public function yuanquedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('yuanqu')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']!=''){
				if(db('yuanqu')->update($data)){
					return $this->redirect('City/yuanquedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加园区规划的相关内容！');
			}
		}
		return $this->fetch('yuanqu-edit');
	}
	//编辑成功
	public function yuanquedit_success(){
		return $this->fetch('yuanquedit-success');
	}


	//六通一平情况列表
	public function lst_liutong(){
		$list=db('liutong')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_liutong');
	}
	//添加六通一平情况
	public function liutongadd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('liutong')->insert($data)){
					return $this->redirect('City/liutongadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加六通一平情况的相关内容！');
			}
		}
		return $this->fetch('liutong-add');
	}
	//六通一平添加成功
	public function liutongadd_success(){
		return $this->fetch('liutongadd-success');
	}
	//编辑六通一平
	public function liutongedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('liutong')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('liutong')->update($data)){
					return $this->redirect('City/liutongedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加六通一平情况的相关内容！');
			}
		}
		return $this->fetch('liutong-edit');
	}
	//编辑成功
	public function liutongedit_success(){
		return $this->fetch('liutongedit-success');
	}


	//污水处理厂列表
	public function lst_water(){
		$list=db('water')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_water');
	}
	//添加污水处理厂
	public function wateradd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('water')->insert($data)){
					return $this->redirect('City/wateradd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加污水处理厂的相关内容！');
			}
		}
		return $this->fetch('water-add');
	}
	//污水处理厂添加成功
	public function wateradd_success(){
		return $this->fetch('wateradd-success');
	}
	//编辑污水处理厂
	public function wateredit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('water')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']){
				if(db('water')->update($data)){
					return $this->redirect('City/wateredit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加污水处理厂的相关内容！');
			}
		}
		return $this->fetch('water-edit');
	}
	//编辑成功
	public function wateredit_success(){
		return $this->fetch('wateredit-success');
	}


	//锦和新城列表
	public function lst_jinhe(){
		$list=db('jinhe')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('jinhe')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_jinhe');
	}
	//添加锦和新城
	public function jinheadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['title']=input('title');
			// $data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				$validate= \think\Loader::validate('City');
				if(!$validate->scene('jinheadd')->check($data)){
					return $this->error($validate->getError());
				}else{
					if(db('jinhe')->insert($data)){
						return $this->redirect('City/jinheadd_success');
					}else{
						return $this->error('添加失败');
					}
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('jinhe-add');
	}
	//锦和新城添加成功
	public function jinheadd_success(){
		return $this->fetch('jinheadd-success');
	}
	//编辑锦和新城
	public function jinheedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('jinhe')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['title']=input('title');
			// $data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('City');
			if(!$validate->scene('jinheedit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('jinhe')->update($data)){
					return $this->redirect('City/jinheedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('jinhe-edit');
	}
	//修改锦和新城图片
	public function jinheedit1(){
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
				if(db('jinhe')->update($data)){
					return $this->redirect('City/jinheedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_jinhe');
	}
	//编辑成功
	public function jinheedit_success(){
		return $this->fetch('jinheedit-success');
	}
	//删除锦和新城
	public function jinhedel(){
		$id=input('id');
		if(db('jinhe')->delete($id)){
			return $this->redirect('City/jinhedel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除锦和新城成功
	public function jinhedel_success(){
		return $this->fetch('jinhedel-success');
	}
}
?>