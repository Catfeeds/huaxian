<?php
namespace app\admin\validate;
use think\Validate;
class User extends Validate{
	protected $rule=[
	    'username'=>'require',
	    'password'=>'require',
	];
	protected $message=[
	    'username.require'=>'账号必须填写',
	    'password.require'=>'密码必须填写',
	];
	protected $scene=[
	    'add'=>['username','password'],
	    'edit'=>['username'=>'require','password'],
	];
}
?>