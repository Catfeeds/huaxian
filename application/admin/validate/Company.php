<?php
namespace app\admin\validate;
use think\Validate;
class Company extends Validate{
	protected $rule=[
	    'image'=>'require',
	    'title'=>'require',
	    // 'content'=>'require',
	    'description'=>'require',
	];
	protected $message=[
	    'image.require'=>'图片不能为空',
	    'title.require'=>'标题必须填写',
	    // 'content.require'=>'内容必须填写',
	    'description.require'=>'描述内容必须填写',
	];
	protected $scene=[
	    'add'=>['image','title','description'],
	    'edit'=>['title','description'],
	    'edit1'=>['title','description'],
	];
}
?>