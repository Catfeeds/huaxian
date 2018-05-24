<?php
namespace app\admin\validate;
use think\Validate;
class Message extends Validate{
	protected $rule=[
		// 'title'=>'require',
	    'content'=>'require',
	    'good'=>'require',
	    'hot'=>'require',
	];
	protected $message=[
	    'content.require'=>'回复内容必须填写',
	    'good.require'=>'请选择是否为精选留言',
	    'hot.require'=>'请选择是否为热门留言',
	];
	protected $scene=[
	    'edit'=>['content','good','hot'],
	];
}
?>