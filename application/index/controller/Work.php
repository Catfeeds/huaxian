<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Work extends Base1{
	//首页
	public function index(){
		//文件
		$file = db('downloadfile')->order('id desc')->select();
		$this->assign('file',$file);
		//企业入驻流程图
		$liucheng = db('liucheng')->order('id desc')->find();
		$this->assign('liucheng',$liucheng);

		return $this->fetch('index');
	}
	//电力接入
	public function lst_dianli(){
		$dianli = db('dianli')->order('id desc')->find();
        $this->assign('dianli',$dianli);
		return $this->fetch('lst_dianli');
	}
	//供水接入
	public function lst_gongshui(){
		$gongshui = db('gongshui')->order('id desc')->find();
        $this->assign('gongshui',$gongshui);
		return $this->fetch('lst_gongshui');
	}
	//弱点接入
	public function lst_ruodian(){
		$ruodian = db('ruodian')->order('id desc')->find();
        $this->assign('ruodian',$ruodian);
		return $this->fetch('lst_ruodian');
	}

    //文件列表
    public function file(){
        $file = db('downloadfile')->order('id desc')->select();
        $this->assign('file',$file);
        return $this->fetch('file');
    }
	//文件详情
    public function filedetail(){
    	$id = input('id');
        $file = db('downloadfile')->find($id);
        $this->assign('file',$file);
        return $this->fetch('filedetail');
    }
    //文件下载
    public function download(){
        if(session('username')!=''){
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
        }else{
            return $this->error('请登录！','Work/index');
        }
    }
}
?>