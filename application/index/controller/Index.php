<?php
namespace app\index\controller;
// use app\index\model\Sick as SickModel;
// use think\Controller;
use think\db;
use app\index\controller\Base1;
class Index extends Base1{
	//首页
	public function index(){
        //新闻
        $news = db('news')->order('id desc')->limit(8)->select();

        //公告
        $notice = db('notice')->order('id desc')->limit(8)->select();
        
        //重点企业
        $company = db('company')->order('id asc')->select();
        //重点企业前四个
        $company1 = db('company')->order('id asc')->limit(4)->select();
        //重点企业后四个
        $company2 = db('company')->order('id desc')->limit(4)->select();
        // var_dump($company2);die;
        
        //轮播图
        $imgs = db('imgs')->order('id desc')->select();

        $this->assign(array(
            'news'=>$news,
            'notice'=>$notice,
            'company'=>$company,
            'company1'=>$company1,
            'company2'=>$company2,
            'imgs'=>$imgs,
        ));

		return $this->fetch('index');
	}

    //头部文件搜索
    public function search_file(){
        $keywords = input('keywords');
        if($keywords){
            $where['file']=['like','%'.$keywords.'%'];
        }else{
            $where=1; 
        }

        $file=db('file')->where($where)->order('id desc')->select();
        $this->assign('file',$file);

        return $this->fetch('file');
    }
    //头部政策搜索
    public function search_zhengce(){
        $keywords = input('keywords');
        if($keywords){
            $where['title']=['like','%'.$keywords.'%'];
        }else{
            $where=1; 
        }

        $help = db('help')->where($where)->order('id desc')->select();
        $this->assign('help',$help);

        return $this->fetch('helpzhengce');
    }
    //头部新闻搜索
    public function search_news(){
        $keywords = input('keywords');
        if($keywords){
            $where['title']=['like','%'.$keywords.'%'];
        }else{
            $where=1; 
        }

        $news = db('news')->where($where)->order('id desc')->select();
        $this->assign('news',$news);

        return $this->fetch('news');
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
    //文件下载
    public function downloadfile(){
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

    //扶贫攻坚
    public function help(){
        //扶贫政策
        $help = db('help')->order('id desc')->limit(6)->select();
        $this->assign('help',$help);

        //扶贫动态
        $helpdongtai = db('helpdongtai')->order('id desc')->limit(6)->select();
        $this->assign('helpdongtai',$helpdongtai);

        return $this->fetch('help');
    }
    //扶贫政策列表
    public function helpzhengce(){
        $help = db('help')->order('id desc')->select();
        $this->assign('help',$help);
        return $this->fetch('helpzhengce');
    }
     //扶贫动态列表
    public function helpdongtai(){
        $helpdongtai = db('helpdongtai')->order('id desc')->select();
        $this->assign('helpdongtai',$helpdongtai);
        return $this->fetch('helpdongtai');
    }
    //扶贫政策详情
    public function helpzhengcedetail(){
        $id = input('id');
        $help = db('help')->find($id);
        $this->assign('help',$help);
        return $this->fetch('helpzhengcedetail');
    }
    //扶贫动态详情
    public function helpdongtaidetail(){
        $id = input('id');
        $helpdongtai = db('helpdongtai')->find($id);
        $this->assign('helpdongtai',$helpdongtai);
        return $this->fetch('helpdongtaidetail');
    }


    //招商引资
    public function business(){
        $business = db('business')->order('id desc')->find();
        $this->assign('business',$business);

        //扶贫政策信息
        $help = db('help')->order('id desc')->select();
        $this->assign('help',$help);
        return $this->fetch('business');
    }

    //大事记
    public function events(){
        //大事记
        $events = db('events')->order('id asc')->select();
        $this->assign('events',$events);
        return $this->fetch('events');
    }

    //新闻列表
    public function news(){
        //大事记
        $news = db('news')->order('id desc')->select();
        $this->assign('news',$news);
        return $this->fetch('news');
    }
    //新闻详情
    public function newsdetail(){
        //新闻详情
        $id = input('id');
        $news = db('news')->find($id);
        $this->assign('news',$news);

        return $this->fetch('newsdetail');
    }

    //公告详情
    public function noticedetail(){
        $id = input('id');
        $notice = db('notice')->find($id);
        $this->assign('notice',$notice);

        return $this->fetch('noticedetail');
    }
}
?>