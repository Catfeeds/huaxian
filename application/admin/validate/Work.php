<?php
namespace app\admin\validate;
use think\Validate;
class Work extends Validate{
	protected $rule=[
	    'content'=>'require',
	    'address'=>'require',
	];
	protected $message=[
	    'content.require'=>'申报材料必须填写',
	    'address.require'=>'地址必须填写',
	];
	protected $scene=[
	    'add'=>['content','address'],
	    'edit'=>['content','address'],
	];
}
?>