<?php
namespace app\admin\validate;
use think\Validate;
class Call extends Validate{
	protected $rule=[
	    'call'=>'require',
	    'email'=>'require',
	    'address'=>'require',
	];
	protected $message=[
	    'call.require'=>'联系电话必须填写',
	    'email.require'=>'邮箱地址必须填写',
	    'address.require'=>'地址必须填写',
	];
	protected $scene=[
	    'add'=>['call','email','address'],
	    'edit'=>['call','email','address'],
	];
}
?>