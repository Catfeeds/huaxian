<?php
namespace app\admin\validate;
use think\Validate;
class Help extends Validate{
	protected $rule=[
	    'title'=>'require',
	    'content'=>'require',
	];
	protected $message=[
	    'title.require'=>'标题必须填写',
	    'content.require'=>'内容必须填写',
	];
	protected $scene=[
	    //扶贫攻坚添加
	    'add'=>['title','content'],
	    //扶贫攻坚修改
	    'edit'=>['title','content'],

	    //扶贫动态添加
	    'add1'=>['title','content'],
	    //扶贫动态修改
	    'edit1'=>['title','content'],
	];
}
?>