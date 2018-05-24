<?php
namespace app\admin\validate;
use think\Validate;
class Link extends Validate{
	protected $rule=[
	    'linkurl'=>'require',
	];
	protected $message=[
	    'linkurl.require'=>'链接地址必须填写',
	];
	protected $scene=[
	    'add'=>['linkurl'],
	];
}
?>