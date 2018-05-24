<?php
namespace app\index\validate;
use think\Validate;

class Path extends Validate{
	protected $rule=[
		//发布路线
		'startsite'=>'require',
		'endsite'=>'require',
		'vehicle_type'=>'require',
		'vehicle_length'=>'require',
		'linkman'=>'require',
		'linkphone'=>'require|number',

		//修改路线
		'vehicle_type'=>'require',
		'vehicle_length'=>'require',
		'linkphone'=>'require|number',
	];

	protected $message=[
		//发布路线
		'startsite'=>'请填写始发地',
		'endsite'=>'请填写目的地',
		'vehicle_type'=>'请选择常用车型',
		'vehicle_length'=>'请选择车长',
		'linkman'=>'请填写联系人',
		'linkphone'=>'请填写联系方式',

		//修改路线
		'vehicle_type'=>'请选择常用车型',
		'vehicle_length'=>'请选择车长',
		'linkphone'=>'请填写联系方式',	
	];

	protected $scene=[
		//发布路线
		'pathadd'=>['startsite','endsite','vehicle_type','vehicle_length','linkman','linkphone'], 

		//修改路线
		'path_revise'=>['vehicle_type','vehicle_length','linkphone'],
	];
}