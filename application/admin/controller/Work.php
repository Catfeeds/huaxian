<?php
namespace app\admin\controller;
use app\admin\controller\Base;
// use think\Loader;
use think\db;
class Work extends Base{
	//电力接入列表
	public function lst_dianli(){
		$list=db('dianli')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_dianli');
	}
	//添加电力接入
	public function dianliadd(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('dianli')->insert($data)){
					return $this->redirect('Work/dianliadd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('dianli-add');
	}
	//电力接入添加成功
	public function dianliadd_success(){
		return $this->fetch('dianliadd-success');
	}
	//编辑电力接入
	public function dianliedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('dianli')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('dianli')->update($data)){
					return $this->redirect('Work/dianliedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('dianli-edit');
	}
	//编辑成功
	public function dianliedit_success(){
		return $this->fetch('dianliedit-success');
	}
	//删除电力接入
	public function dianlidel(){
		$id=input('id');
		if(db('dianli')->delete($id)){
			return $this->redirect('Work/dianlidel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除电力接入成功
	public function dianlidel_success(){
		return $this->fetch('dianlidel-success');
	}


	//供水接入列表
	public function lst_gongshui(){
		$list=db('gongshui')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_gongshui');
	}
	//添加供水接入
	public function gongshuiadd(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('gongshui')->insert($data)){
					return $this->redirect('Work/gongshuiadd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('gongshui-add');
	}
	//供水接入添加成功
	public function gongshuiadd_success(){
		return $this->fetch('gongshuiadd-success');
	}
	//编辑供水接入
	public function gongshuiedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('gongshui')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('gongshui')->update($data)){
					return $this->redirect('Work/gongshuiedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('gongshui-edit');
	}
	//编辑成功
	public function gongshuiedit_success(){
		return $this->fetch('gongshuiedit-success');
	}
	//删除供水接入
	public function gongshuidel(){
		$id=input('id');
		if(db('gongshui')->delete($id)){
			return $this->redirect('Work/gongshuidel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除供水接入成功
	public function gongshuidel_success(){
		return $this->fetch('gongshuidel-success');
	}


	//弱点接入列表
	public function lst_ruodian(){
		$list=db('ruodian')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_ruodian');
	}
	//添加弱点接入
	public function ruodianadd(){
		if(request()->isPost()){
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('ruodian')->insert($data)){
					return $this->redirect('Work/ruodianadd_success');
				}else{
					return $this->error('添加失败');
				}
			}
		}
		return $this->fetch('ruodian-add');
	}
	//弱点接入添加成功
	public function ruodianadd_success(){
		return $this->fetch('ruodianadd-success');
	}
	//编辑弱点接入
	public function ruodianedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('ruodian')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			$data=input('post.');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			$validate= \think\Loader::validate('Work');   //调用validate中的add验证方法
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
				if(db('ruodian')->update($data)){
					return $this->redirect('Work/ruodianedit_success');
				}else{
					return $this->error('修改失败');
				}
			}
		}
		return $this->fetch('ruodian-edit');
	}
	//编辑成功
	public function ruodianedit_success(){
		return $this->fetch('ruodianedit-success');
	}
	//删除弱点接入
	public function ruodiandel(){
		$id=input('id');
		if(db('ruodian')->delete($id)){
			return $this->redirect('Work/ruodiandel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除弱点接入成功
	public function ruodiandel_success(){
		return $this->fetch('ruodiandel-success');
	}


	//企业入驻流程图列表
	public function lst_liucheng(){
		$list=db('liucheng')->order('id desc')->find();  //分页查询数据
		// $counts=db('business')->count();  //记录总数
		// $page=$list->render();   
		$this->assign(array(
			// 'counts'=>$counts,
			'list'=>$list,
			// 'page'=>$page,
			));
		return $this->fetch('lst_liucheng');
	}
	//添加企业入驻流程图
	public function liuchengadd(){
		if(request()->isPost()){
			$data['image']=input('image');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['image']!=''){
				$file=request()->file('image');
				$info=$file->move(ROOT_PATH . 'public' . DS .'static/upimages');
				$data['image']='/upimages/'.$info->getSaveName();
				if(db('liucheng')->insert($data)){
					return $this->redirect('Work/liuchengadd_success');
				}else{
					return $this->error('添加失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('liucheng-add');
	}
	//企业入驻流程图添加成功
	public function liuchengadd_success(){
		return $this->fetch('liuchengadd-success');
	}
	//修改企业入驻流程图图片
	public function liuchengedit(){
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
				if(db('liucheng')->update($data)){
					return $this->redirect('Work/liuchengedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
                return $this->error('图片不能为空！');
			}
		}
		return $this->fetch('liucheng-edit');
	}
	//编辑成功
	public function liuchengedit_success(){
		return $this->fetch('liuchengedit-success');
	}


	//文件列表
	public function lst_file(){
		$list=db('downloadfile')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('downloadfile')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('lst_file');
	}
	//上传文件
	public function fileadd(){
        if(request()->isPost()){
        	//获取表单提交的数据
        	$a=input('name');
        	// $data['content']=input('content');
        	$data['address']=input('address');
			if($a!=''){
				if($data['address']!=''){
					$data=[
						'address'=>input('address'),
						'content'=>input('content'),
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
	            	
			    	if(db('downloadfile')->insert($data)){
				    	return $this->redirect('Work/fileadd_success');
				    }else{
					    return $this->error('文件上传失败！');
				    }
			    }else{
					return $this->error('请输入办事处地址！');
				} 
			}else{
				return $this->error('请添加您要上传的文件！');
			}
    	}
        return $this->fetch('file-add');
	}
	//文件添加成功
	public function fileadd_success(){
		return $this->fetch('fileadd-success');
	}
	//修改文件内容
	public function fileedit(){
		$id=input('id');
		$this->assign('id',$id);
		$list = db('downloadfile')->find($id);
		$this->assign('list',$list);
		if(request()->isPost()){
			$data['id']=$id;
			// $data['image']=input('image'); 
			// $data['content']=input('content');
			$data['address']=input('address');
			$data['user']=session('adminid'); 
			$data['time']=date('Y-m-d H:i:s');
			if($data['address']!=''){
				if(db('downloadfile')->update($data)){
					return $this->redirect('Work/fileedit_success');
				}else{
					return $this->error('修改失败');
				}
			}else{
				return $this->error('请输入办事处地址！');
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
            	
		    	if(db('downloadfile')->update($data)){
			    	return $this->redirect('Work/fileedit_success');
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
		if(db('downloadfile')->delete($id)){
			return $this->redirect('Work/filedel_success');
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
        $file = db('downloadfile')->find($id);  
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
            //显示下载的文件名    
            Header ( "Content-Disposition: attachment; filename=" . $file['file'] );
            ob_clean();    //重点！！！
            flush();       //重点！！！！  可清除文件中多余的路径名以及解决乱码的问题；
            //输出文件内容       
            //读取文件内容并直接输出到浏览器      
            echo fread ( $file1, filesize ( $file_dir . $file_name ) );      
            fclose ( $file1 );      
            exit ();
        }
    }
}
?>