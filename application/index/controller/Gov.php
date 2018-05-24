<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Gov extends Base1{
	//首页
	public function index(){
		//园区详情
		$detail = db('detail')->order('id desc')->find();

		//政府领导
		$leader = db('leader')->order('id desc')->where('statue','=',"是")->find();

		//政府文件
		$file = db('file')->order('id desc')->limit(7)->select();

		//大事记
		$events = db('events')->order('id desc')->limit(7)->select();

		$this->assign(array(
			'detail'=>$detail,
			'leader'=>$leader,
			'file'=>$file,
			'events'=>$events,
		));

		return $this->fetch('index');
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
    //更多文件
    public function file(){
        $file=db('file')->order('id desc')->select();
        $this->assign('file',$file);

        return $this->fetch('file');
    }
    //文件详情
    public function filedetail(){
        $id = input('id');
        $file = db('file')->find($id);
        $this->assign('file',$file);
        return $this->fetch('filedetail');
    }

    //政府领导列表
    public function lst_leader(){
        $leader = db('leader')->order('id desc')->select();
        $this->assign('leader',$leader);
        return $this->fetch('lst_leader');
    }

    //园区详情页面
    public function yuanqudetail(){
        //园区详情
        $detail = db('detail')->order('id desc')->find();
        $this->assign('detail',$detail);
        return $this->fetch('yuanqudetail');
    }

    //招商引资详情页面
    public function businessdetail(){
        $business = db('business')->order('id desc')->find();
        $this->assign('business',$business);
        return $this->fetch('businessdetail');
    }

    //大事记详情页面
    public function eventsdetail(){
        //大事记
        $events = db('events')->order('id asc')->select();
        $this->assign('events',$events);
        return $this->fetch('eventsdetail');
    }
}
?>