<?php
namespace app\admin\controller;
use app\admin\model\User as UserModel;
use app\admin\controller\Base;
use think\Loader;
use think\Controller;
class User extends Base{
	//用户列表
	public function lst(){
		//权限
		$role=session('role');
		$privilege=db('role')->field('pri_id')->find($role);
		$privilege1=explode(',',$privilege['pri_id']);
		//断是否关键字查询
		$key['words']=input('keywords');
		$key['id']=input('keyid');
		if($key['words']!==''){
			session('userkeywords',null);  //删除上一次存储数据
			session('userkeywords',$key['words']);
		}else{
			session('userkeywords',null);
		}
		if($key['id']!==''){
			session('userkeyid',null);  //删除上一次存储数据
			session('userkeyid',$key['id']);
		}else{
			session('userkeyid',null);
		}
		    //把查询条件保存在表单中
		$model=new UserModel;
		$data=$model->search($key); //调用模型中方法
		$page=$data['list']->render();   
		$this->assign(array(
			'counts'=>$data['counts'],
			'list'=>$data['list'],
			'page'=>$page,
			'privilege'=>$privilege1,
			'keywords'=>$key['words'],
			'keyid'=>$key['id'],
			));
		return $this->fetch('user-list');
	}
	//添加用户
	public function add(){
		if(request()->isPost()){
			$data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
                'time'=>date('Y-m-d H:i:s'),
			];//获取表单数据
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('add')->check($data)){
				return $this->error($validate->getError());
			}else{
				//判断用户名是否存在
				$isuser=db('user')->where('username','=',$data['username'])->find();
				if($isuser){
					return $this->error('该用户已存在！');
				}else{
	                $model=new UserModel();  
				    $num=$model->add($data);   //调用模型中方法
				    if($num==1){
					    return $this->redirect('User/add_success');
				    }else{
					    return $this->error('添加失败！');
				    }
			    }
			}
		}
		return $this->fetch('user-add');
	}

	//添加成功
	public function add_success(){
		return $this->fetch('add-success');
	}

	//验证用户名是否存在
	public function usernamecheck($username){
		$info=db('user')->where('username','=',$username)->find();
		if($info){
			echo "该用户名已存在";
		}
		exit;
	}

	//修改用户信息
	public function edit(){	
	    //查询用户信息
	    $id=input('id');
	    $list=db('user')->find($id);
	    //查询到角色类别
		$type=db('usertype')->select();
		$this->assign(array(
			'type'=>$type,
			'list'=>$list,
			));
		if(request()->isPost()){
			$data=[
			    'id'=>input('id'),
                'username'=>input('username'),
                'password'=>md5(input('password')),
			];//获取表单数据
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('edit')->check($data)){
				return $this->error($validate->getError());
			}else{
                $model=new UserModel();  
			    $num=$model->edit($data);   //调用模型中方法
			    if($num==1){
				    return $this->redirect('User/edit_success');
			    }else{
				    return $this->error('添加失败！');
			    }
			}
		}
		return $this->fetch('User-edit');
	}

	//修改成功
	public function edit_success(){
		return $this->fetch('edit-success');
	}
	//删除成功
	public function del_success(){
		return $this->fetch('del-success');
	}
	//删除
	public function del(){
		$id=input('id');
		$model=new UserModel();
		$num=$model->del($id);
		if($num==1){
			return $this->redirect('User/del_success');
		}else{
			return $this->error('删除失败！');
		}
	}
	//批量删除用户
	public function p_del(){
		$id=input('post.id/a');
		if($id==''){
			return $this->error('选择不能为空');
		}else{
		    $ids=join(',',$id);
		    $user=new UserModel();
		    $num=$user->p_del($ids);
		    if($num==1){
			    return $this->redirect('User/del_success');
		    }else{
			    return $this->error('批量删除失败！');
		    }
		}
	}

	//导出用户数据表
	public function userexport(){
		$keywords=input('keywords');
		$keyid=input('keyid');
		if($keywords&&$keyid){
			$where['username']=['like','%'.$keywords.'%'];//根据账号关键字查询
			$where['id']=$keyid;
		}elseif($keywords){
			$where['username']=['like','%'.$keywords.'%'];
		}elseif($keyid){
			$where['id']=$keyid;
		}else{
			$where=1;
		} 
		$data=db('user')->order('id desc')->where($where)->select();//数据库中查询数据
	    $path = dirname(__FILE__); //找到当前脚本所在路径
        Loader::import('PHPExcel.Classes.PHPExcel');
        Loader::import('PHPExcel.Classes.PHPExcel.IOFactory.PHPExcel_IOFactory'); //引入文件
        $PHPExcel = new \PHPExcel();
        $PHPSheet = $PHPExcel->getActiveSheet();
        $PHPSheet->setTitle("demo"); //给当前活动sheet设置名称
        $PHPSheet->setCellValue("A1","用户ID")
                 ->setCellValue("B1","用户名")
                 ;//表头
        $num=2; //循环起始行数
        foreach($data as $key=>$v){

        	$PHPSheet->setCellValue("A".$num," ".$v['id'])
                     ->setCellValue("B".$num," ".$v['username']);
            $num++;
        }//表格数据
        $PHPWriter = \PHPExcel_IOFactory::createWriter($PHPExcel,"Excel2007");
        header('Content-Disposition: attachment;filename="用户数据.xlsx"');  //Excel表名
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $PHPWriter->save("php://output"); //表示在$path路径下面生成demo.xlsx文件	
    }
}
?>