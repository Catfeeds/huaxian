<?php
namespace app\admin\validate;
use think\Validate;
class Gov extends Validate{
	protected $rule=[
	    'title'=>'require',
	    'content'=>'require',
	    'name'=>'require',
	    // 'position'=>'require',
	    'work'=>'require',
	    'image'=>'require',
	    'statue'=>'require',
	    'description'=>'require',
	];
	protected $message=[
	    'title.require'=>'标题必须填写',
	    'content.require'=>'内容必须填写',
	    'name.require'=>'领导姓名必须填写',
	    // 'position.require'=>'必须填写',
	    'work.require'=>'工作内容必须填写',
	    'image.require'=>'领导图片必须上传',
	    'statue.require'=>'请选择是否显示在首页',
	    'description.require'=>'大事记描述内容必须填写',
	];
	protected $scene=[
		//领导添加
		'leaderadd'=>['name','work','image','statue'],
		//领导修改
		'leaderedit'=>['name','work','statue'],
		//大事记添加
		'eventsadd'=>['title','description','image'],
		//大事记修改
		'eventsedit'=>['title','description'],
		//园区详情添加
		'detailadd'=>['title','content'],
	    //园区详情修改
	    'detailedit'=>['title','content'],
	    //扶贫攻坚添加
	    'add1'=>['title','content'],
	    //扶贫攻坚修改
	    'edit1'=>['title','content'],
	];
}
?>