<?php
namespace app\admin\controller;
use app\admin\model\Gov as GovModel;
use app\admin\controller\Base;
use think\db;
class Gov extends Base{
	//领导列表
	public function lst_leader(){
		$list=db('leader')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('leader')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_leader');
	}
	//添加领导
	public function leaderadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['name']=input('name');
			// $data['position']=input('position');
			$data['work']=input('work');
			$data['statue']=input('statue');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				$validate= \think\Loader::validate('Gov');
				if(!$validate->scene('leaderadd')->check($data)){
					return $this->error($validate->getError());
				}else{
					if(db('leader')->insert($data)){
						return $this->redirect('Gov/leaderadd_success');
					}else{
						return $this->error('添加失败');
					}
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('leader-add');
	}
	//领导添加成功
	public function leaderadd_success(){
		return $this->fetch('leaderadd-success');
	}
	//编辑领导
	public function leaderedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('leader')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data['name']=input('name');
			// $data['position']=input('position');
			$data['work']=input('work');
			$data['statue']=input('statue');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Gov');
			if(!$validate->scene('leaderedit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('leader')->update($data)){
					return $this->redirect('Gov/leaderedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('leader-edit');
	}
	//修改领导图片
	public function leaderedit1(){
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
				if(db('leader')->update($data)){
					return $this->redirect('Gov/leaderedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_leader');
	}
	//编辑成功
	public function leaderedit_success(){
		return $this->fetch('leaderedit-success');
	}
	//删除领导
	public function leaderdel(){
		$id=input('id');
		if(db('leader')->delete($id)){
			return $this->redirect('Gov/leaderdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除领导成功
	public function leaderdel_success(){
		return $this->fetch('leaderdel-success');
	}


	//园区详情列表
	public function lst_detail(){
		$list=db('detail')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('detail')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_detail');
	}
	//添加园区详情
	public function detailadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['title']=input('title');
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				$validate= \think\Loader::validate('Gov');
				if(!$validate->scene('detailadd')->check($data)){
					return $this->error($validate->getError());
				}else{
					if(db('detail')->insert($data)){
						return $this->redirect('Gov/detailadd_success');
					}else{
						return $this->error('添加失败');
					}
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('detail-add');
	}
	//园区详情添加成功
	public function detailadd_success(){
		return $this->fetch('detailadd-success');
	}
	//编辑园区详情
	public function detailedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('detail')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data['title']=input('title');
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Gov');
			if(!$validate->scene('detailedit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('detail')->update($data)){
					return $this->redirect('Gov/detailedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('detail-edit');
	}
	//修改园区详情图片
	public function detailedit1(){
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
				if(db('detail')->update($data)){
					return $this->redirect('Gov/detailedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_detail');
	}
	//编辑成功
	public function detailedit_success(){
		return $this->fetch('detailedit-success');
	}
	//删除园区详情
	public function detaildel(){
		$id=input('id');
		if(db('detail')->delete($id)){
			return $this->redirect('Gov/detaildel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除园区详情成功
	public function detaildel_success(){
		return $this->fetch('detaildel-success');
	}


	//政府文件列表
	public function lst_file(){
		$list=db('file')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('file')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_file');
	}
	//上传政府文件
	public function fileadd(){
        if(request()->isPost()){
        	//获取表单提交的数据
        	$a=input('file');
        	$b = input('content');
			if($a!=''){
				if($b!=''){
					$data=[
						'file'=>input('file'),
						'content'=>input('content'),
						'user'=>session('adminid'),
		                'time'=>date('Y-m-d H:i:s'),   //插入当前时间
					];
					// 将上传的文件移动到框架应用根目录/public/upfiles/ 目录下     //upfiles为新建目录
	        		// $file=request()->file('name');
					// $info=$file->move(ROOT_PATH . 'public' . DS .'upfiles'); 
	        		//如果不清楚文件上传的具体键名，可以直接打印$info来查看    
	        		//获取文件（文件名），$info->getFilename()  
	        		//获取文件（日期/文件名），$info->getSaveName() 
					//获取带日期的乱码的文件
					// $data['fileurl']=$info->getSaveName(); 

					// $infos = $info->getInfo();    //直接可获取文件原名
	            	// 源文件名
	            	// $data['file'] = $infos['name'];  //文件名传入数据表
	            	
			    	if(db('file')->insert($data)){
				    	return $this->redirect('Gov/fileadd_success');
				    }else{
					    return $this->error('文件添加失败！');
				    }  
				}else{
					return $this->error('请添加您的文件内容！');
				}	
			}else{
				return $this->error('请输入您的文件标题！');
			}
    	}
        return $this->fetch('file-add');
	}
	//政府文件添加成功
	public function fileadd_success(){
		return $this->fetch('fileadd-success');
	}
	//修改文件内容
	public function fileedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('file')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['file']=input('file');
			// $data['image']=input('image'); 
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']!=''){
				if(db('file')->update($data)){
					return $this->redirect('Gov/fileedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加您的文件内容！');
			}
		}
		return $this->fetch('file-edit');
	}
	//重新上传文件
	public function fileedit1(){
		$id=input('id');
		$this->assign('id',$id);
        if(request()->isPost()){
        	//获取表单提交的数据
        	$a=input('name');
			if($a!=''){
				$data=[
					// 'content'=>input('content'),
					'id'=>$id,
					'user'=>session('adminid'),
	                'time'=>date('Y-m-d H:i:s'),   //插入当前时间
				];
				// 将上传的文件移动到框架应用根目录/public/upfiles/ 目录下     //upfiles为新建目录
	        	$file=request()->file('name');
				$info=$file->move(ROOT_PATH . 'public' . DS .'upfiles'); 
        		//如果不清楚文件上传的具体键名，可以直接打印$info来查看    
        		//获取文件（文件名），$info->getFilename()  
        		//获取文件（日期/文件名），$info->getSaveName() 
				//获取带日期的乱码的文件
				$data['fileurl']=$info->getSaveName(); 

				$infos = $info->getInfo();    //直接可获取文件原名
            	// 源文件名
            	$data['file'] = $infos['name'];  //文件名传入数据表
            	
		    	if(db('file')->update($data)){
			    	return $this->redirect('Gov/fileedit_success');
			    }else{
				    return $this->error('文件上传失败！');
			    }  
			}else{
				return $this->error('请添加您要上传的文件！');
			}
    	}
        return $this->fetch('edit_file');
	}
	//编辑成功
	public function fileedit_success(){
		return $this->fetch('fileedit-success');
	}
	//删除政府文件
	public function filedel(){
		$id=input('id');
		if(db('file')->delete($id)){
			return $this->redirect('Gov/filedel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除政府文件成功
	public function filedel_success(){
		return $this->fetch('filedel-success');
	}
	//文件下载
    public function download(){
        $id = input('id');
        $file = db('file')->find($id);  
        $file_name = $file['fileurl'];     //下载文件的路径名      
        $file_dir = ROOT_PATH . 'public' . DS .'upfiles' . "/";   //下载文件存放目录    
        echo $file_dir . $file_name;  
        //检查文件是否存在      
        if (! file_exists ( $file_dir . $file_name )) {      
            echo "文件找不到";      
            exit ();      
        } else {      
            //打开文件      
            $file1 = fopen ( $file_dir . $file_name, "r" );      
            //输入文件标签       
            Header ( "Content-type: application/octet-stream" );      
            Header ( "Accept-Ranges: bytes" );      
            Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );      
            Header ( "Content-Disposition: attachment; filename=" . $file_name );
            ob_clean();    //重点！！！
            flush();       //重点！！！！  可清除文件中多余的路径名以及解决乱码的问题；
            //输出文件内容       
            //读取文件内容并直接输出到浏览器      
            echo fread ( $file1, filesize ( $file_dir . $file_name ) );      
            fclose ( $file1 );      
            exit ();
        }
    }


    //招商引资列表
	public function lst_business(){
		$list=db('business')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_business');
	}
	//添加招商引资
	public function businessadd(){
		if(request()->isPost()){
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']!=''){
				if(db('business')->insert($data)){
					return $this->redirect('Gov/businessadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
				return $this->error('请添加招商引资的相关内容！');
			}
		}
		return $this->fetch('business-add');
	}
	//招商引资添加成功
	public function businessadd_success(){
		return $this->fetch('businessadd-success');
	}
	//编辑招商引资
	public function businessedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('business')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['content']!=''){
				if(db('business')->update($data)){
					return $this->redirect('Gov/businessedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请添加招商引资的相关内容！');
			}
		}
		return $this->fetch('business-edit');
	}
	//编辑成功
	public function businessedit_success(){
		return $this->fetch('businessedit-success');
	}
	//删除招商引资
	public function businessdel(){
		$id=input('id');
		if(db('business')->delete($id)){
			return $this->redirect('Gov/businessdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除招商引资成功
	public function businessdel_success(){
		return $this->fetch('businessdel-success');
	}


	//大事记列表
	public function lst_events(){
		$list=db('events')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('events')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_events');
	}
	//添加大事记
	public function eventsadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['title']=input('title');
			$data['description']=input('description');
			// $data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				$validate= \think\Loader::validate('Gov');
				if(!$validate->scene('eventsadd')->check($data)){
					return $this->error($validate->getError());
				}else{
					if(db('events')->insert($data)){
						return $this->redirect('Gov/eventsadd_success');
					}else{
						return $this->error('添加失败');
					}
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('events-add');
	}
	//大事记添加成功
	public function eventsadd_success(){
		return $this->fetch('eventsadd-success');
	}
	//编辑大事记
	public function eventsedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('events')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			$data['title']=input('title');
			$data['description']=input('description');
			// $data['content']=input('content');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Gov');
			if(!$validate->scene('eventsedit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('events')->update($data)){
					return $this->redirect('Gov/eventsedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('events-edit');
	}
	//修改大事记图片
	public function eventsedit1(){
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
				if(db('events')->update($data)){
					return $this->redirect('Gov/eventsedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('edit_events');
	}
	//编辑成功
	public function eventsedit_success(){
		return $this->fetch('eventsedit-success');
	}
	//删除大事记
	public function eventsdel(){
		$id=input('id');
		if(db('events')->delete($id)){
			return $this->redirect('Gov/eventsdel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除大事记成功
	public function eventsdel_success(){
		return $this->fetch('eventsdel-success');
	}
}
?>