<?php
namespace app\admin\validate;
use think\Validate;
class News extends Validate{
	protected $rule=[
	    'title'=>'require',
	    'newstime'=>'require',
	    'content'=>'require',
	];
	protected $message=[
	    'title.require'=>'标题必须填写',
	    'newstime.require'=>'新闻时间必须选择',
	    'content.require'=>'内容必须填写',
	];
	protected $scene=[
	    'add'=>['title','newstime','content'],
	    'edit'=>['title','newstime','content'],
	    'add1'=>['title','content'],
	    'edit1'=>['title','content'],
	];
}
?>