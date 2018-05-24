<?php
namespace app\admin\validate;
use think\Validate;
class City extends Validate{
	protected $rule=[
	    'title'=>'require',
	    // 'content'=>'require',
	];
	protected $message=[
	    'title.require'=>'标题必须填写',
	    // 'content.require'=>'内容必须填写',
	];
	protected $scene=[
		//锦和新城添加
		'jinheadd'=>['title'],
	    //锦和新城修改
	    'jinheedit'=>['title'],
	];
}
?>