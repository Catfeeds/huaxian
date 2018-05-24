<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User;
class Login extends Controller{

	//注册
	public function register(){

		if(request()->isPost()){
			$repassword=input('repassword');
			$data=[
                'username'=>input('username'),    //手机号
                'password'=>md5(input('password')),
                // 'mobile'=>input('mobile'),
                'time'=>date('Y-m-d H:i:s'),   //获取当前时间，即注册时间
			];
			$repwd = input('repwd');
			$validate= \think\Loader::validate('user');
			$user=db('user')->where('username','=',$data['username'])->find();
			if($user == ''){
				// if($code!=''){                       //判断手机验证码是否为空
					if($data['username']!=''){
						if($data['password']!=''){
							if($repwd!=''){
								if(md5($repwd) != $data['password']){
									return $this->error('两次密码不一致！请您重新填写！');
								}else{
									if(!$validate->scene('register')->check($data)){
										$this->error($validate->getError()); //表单数据是否合法
									}else{
								    	// if(md5($repassword)!=$data['password']){
					        //             	return $this->error('两次密码不一致！请您重新注册！');
					        //         	}else{
										    if(db('user')->insert($data)){   //插入数据库
											    return $this->success('注册成功，请登录！','Index/index');
										    }else{
											    return $this->error('注册失败！');
										    }
										// }
									}
								}
							}else{
								return $this->error('再次输入的密码不能为空！'); 
							}
						}else{
							return $this->error('密码不能为空！'); 
						}	
					}else{
						return $this->error('用户名不能为空！'); 
					}
				// }else{
				// 	return $this->error('短信验证码不能为空！');
				// }
			}else{
				return $this->error('该用户名已存在！');
			}
		}
		// return $this->fetch('register');
	}

	//验证用户名是否存在(注册)  //不带短信验证码
	// public function checkname($username){
	// 	$info=db('user')->where('username','=',$username)->find();
	// 	if($info){
	// 		echo '用户名已存在';
	// 	}
	// }
	//验证用户名是否存在(注册)    //带短信验证码
	public function checkname($username){
		// $del=db('messages_code')->where('mobile','=',$username)->find();
		// if($del){
		// 	$isdel=db('messages_code')->where('mobile','=',$username)->delete();
		// }
		// $del2=db('smscode')->where('mobile','=',$username)->find();
		// if($del2){
		// 	$isdel2=db('smscode')->where('mobile','=',$username)->delete();
		// }
		$info=db('user')->where('username','=',$username)->find();
		if($info){
			echo '用户名已存在';
		}
	}

	//验证用户名是否存在(忘记密码)
	public function checkfindname($username){
		$del=db('messages_code')->where('mobile','=',$username)->find();
		if($del){
			$isdel=db('messages_code')->where('mobile','=',$username)->delete();
		}
		$del2=db('smscode')->where('mobile','=',$username)->find();
		if($del2){
			$isdel2=db('smscode')->where('mobile','=',$username)->delete();
		}
		$info=db('user')->where('username','=',$username)->find();
		if(!$info){
			echo '该用户不存在';
		}
	}

	//修改密码
	public function editpwd(){
		if(request()->isPost()){
			$repassword=input('repassword');
			$data=[
                'password'=>md5(input('password')),
                'username'=>input('username'),
                'id'=>session('userid'),
			];
			$oldpwd = input('oldpwd');
			$validate= \think\Loader::validate('User');
			$user=db('user')->where('username','=',$data['username'])->find();
			if($user){
				if($code!=''){                       //判断手机验证码是否为空
					if($oldpwd!=''){
						if(md5($oldpwd)==$user['password']){
							if($data['password']!=''){
								if($repassword!=''){
									if(!$validate->scene('editpwd')->check($data)){
										$this->error($validate->getError()); //表单数据是否合法
									}else{
								    	if(md5($repassword)!=$data['password']){
					                    	return $this->error('两次密码不一致！请您重新填写！');
					                	}else{
										    if(db('user')->update($data)){   //更新数据库
											    return $this->success('修改成功，请登录！','Login/login');
										    }else{
											    return $this->error('修改失败！');
										    }
										}
									}
								}else{
									return $this->error('再次输入的密码不能为空！'); 
								}
							}else{
								return $this->error('密码不能为空！'); 
							}
						}else{
							return $this->error('原始密码不正确！');
						}
					}else{
						return $this->error('原始密码不能为空！');
					}
				}else{
					return $this->error('短信验证码不能为空！');
				}
			}else{
				return $this->error('用户不存在！');
			}
		}
		return $this->fetch('editpwd');
	}

	//注册结果
	// public function register_result(){
	// 	return $this->fetch('register_result');
	// }

	//登录
	public function login(){
		if(request()->isPost()){
			$data=[
			    'username'=>input('username'),
			    'password'=>input('password'),
			];
			$validate= \think\Loader::validate('User');
			if(!$validate->scene('login')->check($data)){
				$this->error($validate->getError());  //表单数据不合法
			}else{
				$user=new User();   //实例化模型
				$num=$user->login($data);    //调用模型中方法
				if($num==1){
					return $this->success('登录成功！','Index/index');
				}elseif($num==2){
					return $this->error('密码错误！');
				}else{
					return $this->error('用户不存在！');
				}
			}		
		}
		// return $this->fetch('login');
	}


	//找回密码处验证码
    //获取短信验证码
    public function createcode(){
    	// create curl resource
		$ch = curl_init();
		// set url
		$url = 'https://sms.yunpian.com/v1/sms/send.json';
		curl_setopt($ch, CURLOPT_URL, $url); 
		// set param
		$mobile = input('username'); //获取到手机号
		$code=substr(str_shuffle("012345678901234567890123456789"), 0, 6); //创建随机数字的验证码
		$paramArr = array(
		    'apikey' => 'ebdad96dc45cee49961865c7c897b4df',
		    'mobile' => $mobile,
		    'text' => '您的验证码是'.$code
		);
		$param = '';
		foreach ($paramArr as $key => $value) {
		    $param .= urlencode($key).'='.urlencode($value).'&';
		}
		$param = substr($param, 0, strlen($param)-1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书下同
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// $output contains the output string
		$output = curl_exec($ch); 
		// close curl resource to free up system resources
		curl_close($ch);
		//$outputJson = json_decode($output);
		$outputArr = json_decode($output, true);
		//echo $outputJson->code;die;
		if($outputArr['code'] == 0){  //验证码发送成功
		    $data['mobile'] = $mobile;
		    $data['code'] = $code;
		    $data['statue']=1;  //可以修改密码
		    $smscodeObj = db('smscode')->where('mobile','=',$mobile)->find();
		    if($smscodeObj){ //当用户名已存在，更新验证码、时间
		        $data['update_at'] = date('Y-m-d H:i:s');
		        $success = db('smscode')->where('mobile','=',$mobile)->update($data);
		        if($success !== false){
		            echo '验证码已发送，请在60秒内输入验证码';
		        }
		    }else{  //用户名不存在时，插入用户名、验证码、时间
		        $data['create_at'] = date('Y-m-d H:i:s');
		        $data['update_at'] = $data['create_at'];
	            $id = db('smscode')->insert($data);
	            if($id){
	                echo '验证码已发送，请在60秒内输入验证码';
	            }
		    }
		}else{    //验证码发送失败
			echo $outputArr['msg'];
		}
    }
    //判断验证码是否有效（忘记密码）
    public function checkcode(){
    	$mobile=input('username');
    	$code=input('code');
	    $nowTimeStr = date('Y-m-d H:i:s');
	    $smscode = db('smscode');
	    $smscodeObj = $smscode->where('mobile','=',$mobile)->find();
	    if($smscodeObj){
	        $smsCodeTimeStr = $smscodeObj['update_at']; //获取到验证码的跟新时间
	        $recordCode = $smscodeObj['code'];          //获取到验证码
	        $nowTime = strtotime($nowTimeStr);          //获取当前时间
	        $smsCodeTime = strtotime($smsCodeTimeStr);  //获取更新时间
	        $period=$nowTime-$smsCodeTime;    //得到时间差
	        if($period>60){  //判断是否过期
	        	$data['statue']=2; //更新验证码状态，2为不可修改
	        	$success = $smscode->where('mobile','=',$mobile)->update($data);
	            $result = array(
	                'code' => '1',
	                'ext' => '验证码过期，请刷新后重新获取'
	            );
	            echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	            return;
	        }
	        if($code != $recordCode){
	        	$data['statue']=2; //更新验证码状态，2为不可修改
	        	$success = $smscode->where('mobile','=',$mobile)->update($data);
	            $result = array(
	                'code' => '2',
	                'ext' => '验证码错误，请重新输入'
	            );
	            echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	             return;
	        }
	        $data['statue']=1; //更新验证码状态，1为可修改
	        $success = $smscode->where('mobile','=',$mobile)->update($data);
	         $result = array(
	             'code' => '0',
	             // 'ext' => '验证码正确，请输入新密码'
	             'ext' => '验证码正确'
	         );
	        echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	    }
    }

    //注册处验证码
	//获取短信验证码
    public function createcode1(){
    	// create curl resource
		$ch = curl_init();
		// set url
		$url = 'https://sms.yunpian.com/v1/sms/send.json';
		curl_setopt($ch, CURLOPT_URL, $url); 
		// set param
		$mobile = input('username'); //获取到手机号
		$code=substr(str_shuffle("012345678901234567890123456789"), 0, 6); //创建随机数字的验证码
		$paramArr = array(
		    'apikey' => 'ebdad96dc45cee49961865c7c897b4df',
		    'mobile' => $mobile,
		    'text' => '您的验证码是'.$code
		);
		$param = '';
		foreach ($paramArr as $key => $value) {
		    $param .= urlencode($key).'='.urlencode($value).'&';
		}
		$param = substr($param, 0, strlen($param)-1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书下同
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
		//return the transfer as a string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// $output contains the output string
		$output = curl_exec($ch); 
		// close curl resource to free up system resources
		curl_close($ch);
		//$outputJson = json_decode($output);
		$outputArr = json_decode($output, true);
		//echo $outputJson->code;die;
		if($outputArr['code'] == 0){  //验证码发送成功
		    $data['mobile'] = $mobile;
		    $data['code'] = $code;
		    $data['statue']=1;  //可以注册
		    $messages_codeObj = db('messages_code')->where('mobile','=',$mobile)->find();
		    if($messages_codeObj){ //当用户名已存在，更新验证码、时间
		        $data['update_at'] = date('Y-m-d H:i:s');
		        $success = db('messages_code')->where('mobile','=',$mobile)->update($data);
		        if($success !== false){
		            echo '验证码已发送，请在60秒内输入验证码';
		        }
		    }else{  //用户名不存在时，插入用户名、验证码、时间
		        $data['create_at'] = date('Y-m-d H:i:s');
		        $data['update_at'] = $data['create_at'];
	            $id = db('messages_code')->insert($data);
	            if($id){
	                echo '验证码已发送，请在60秒内输入验证码';
	            }
		    }
		}else{    //验证码发送失败
			echo $outputArr['msg'];
		}
    }
    //判断验证码是否有效
    public function checkcode1(){
    	$mobile=input('username');
    	$code=input('code');
	    $nowTimeStr = date('Y-m-d H:i:s');
	    $messages_code = db('messages_code');
	    $messages_codeObj = $messages_code->where('mobile','=',$mobile)->find();
	    if($messages_codeObj){
	        $smsCodeTimeStr = $messages_codeObj['update_at']; //获取到验证码的跟新时间
	        $recordCode = $messages_codeObj['code'];          //获取到验证码
	        $nowTime = strtotime($nowTimeStr);          //获取当前时间
	        $smsCodeTime = strtotime($smsCodeTimeStr);  //获取更新时间
	        $period=$nowTime-$smsCodeTime;    //得到时间差
	        if($period>60){  //判断是否过期
	        	$data['statue']=2; //更新验证码状态，2为不可修改
	        	$success = $messages_code->where('mobile','=',$mobile)->update($data);
	            $result = array(
	                'code' => '1',
	                'ext' => '验证码过期，请刷新后重新获取'
	            );
	            echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	            return;
	        }
	        if($code != $recordCode){
	        	$data['statue']=2; //更新验证码状态，2为不可修改
	        	$success = $messages_code->where('mobile','=',$mobile)->update($data);
	            $result = array(
	                'code' => '2',
	                'ext' => '验证码错误，请重新输入'
	            );
	            echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	             return;
	        }
	        $data['statue']=1; //更新验证码状态，1为可修改
	        $success = $messages_code->where('mobile','=',$mobile)->update($data);
	         $result = array(
	             'code' => '0',
	             // 'ext' => '验证码正确，请输入新密码'
	             'ext' => '验证码正确'
	         );
	        echo json_encode($result['ext'],JSON_UNESCAPED_UNICODE);
	    }
    }

    
	//退出
	public function logout(){

        session(null);
        $this->success('退出成功！','Index/index');
    }


}
?>