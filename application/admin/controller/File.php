<?php
namespace app\admin\controller;
use app\admin\model\File as FileModel;
use app\admin\controller\Base;
// use think\Loader;
use think\db;
class File extends Base{
	//文件列表
	public function lst_file(){
		//权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		$privilege1=explode(',',$privilege['pri_id']);

		$list=db('neibufile')->order('id desc')->paginate(10);  //分页查询数据
		$counts=db('neibufile')->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			'role'=>$role,
			'privilege1'=>$privilege1,
			));
		return $this->fetch('lst_file');
	}
	//我的文件列表
	public function my_file(){
		$user = session('adminid');
		$list=db('neibufile')->order('id desc')->where('user','=',$user)->paginate(10);  //分页查询数据
		$counts=db('neibufile')->where('user','=',$user)->count();  //记录总数
		$page=$list->render();   
		$this->assign(array(
			'counts'=>$counts,
			'list'=>$list,
			'page'=>$page,
			));
		return $this->fetch('my_file');
	}
	//上传政府文件
	public function add_file(){
        if(request()->isPost()){
        	//获取表单提交的数据
        	$a=input('name');
			if($a!=''){
				$data=[
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
            	
		    	if(db('neibufile')->insert($data)){
			    	return $this->redirect('File/fileadd_success');
			    }else{
				    return $this->error('文件上传失败！');
			    }
			}else{
				return $this->error('请添加您要上传的文件！');
			}
    	}
        return $this->fetch('add_file');
	}
	//内部文件添加成功
	public function fileadd_success(){
		return $this->fetch('fileadd-success');
	}
	//删除内部文件
	public function del(){
		$id=input('id');
		if(db('neibufile')->delete($id)){
			return $this->redirect('File/filedel_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//删除内部文件成功
	public function filedel_success(){
		return $this->fetch('filedel-success');
	}
	//批量删除内部文件
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
			$ids=join(',',$id);
		    $model=new FileModel();
		    $num=$model->p_del($ids);
		    if($num==1){
			    return $this->redirect('File/filedel_success');
	    	}else{
			    return $this->error('批量删除失败！');
		    }
		}
	}
	//文件下载
    public function download(){
        $id = input('id');
        $file = db('neibufile')->find($id);  
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


    //文件预览
    public function preview(){
        $id = input('id');
        $file = db('neibufile')->find($id);  
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
            // Header ( "Content-type: application/octet-stream" );
            // Header ( "Accept-Ranges: bytes" );   
            // Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );      
            // Header ( "Content-Disposition: attachment; filename=" . $file['file'] );  
            // Header("filename:" . $file_name);

            ob_clean();    //重点！！！   //清除文件中多余的路径名
            flush();       //重点！！！！  解决乱码的问题；

            //获取文件后缀名
            // $temp = substr($file_dir . $file_name,strrpos($file_dir . $file_name, '.')+1);   
            // var_dump($temp);die;
         
            //输出文件内容       
            //读取文件内容并直接输出到浏览器      
            echo fread ( $file1, filesize ( $file_dir . $file_name ) );      
            fclose ( $file1 );      
            exit ();
        }

        // return $this->fetch('preview');
    }
}
?>