<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate{
	protected $rule=[
	    'adminid'=>'require|unique:admin',
	    // 'adminname'=>'require',
	    'adminpassword'=>'require',
	    'role'=>'require',
	];
	protected $message=[
	    'adminid.require'=>'用户名必须填写',
	    'adminid.unique'=>'用户名已经存在',
	    // 'adminname.require'=>'用户名必须填写',
	    // 'adminpassword.require'=>'密码必须填写',
	    'role.require'=>'用户角色必须选择',
	];
	protected $scene=[
	    'add'=>['adminid','adminpassword','role'],
	    'login'=>['adminid'=>'require','adminpassword'],
	    'changepwd'=>['adminpassword'],
	];
}
?>