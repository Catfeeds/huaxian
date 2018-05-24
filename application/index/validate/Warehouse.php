<?php
namespace app\index\validate;
use think\Validate;

class Warehouse extends Validate{

	protected $rule=[
		'wh_name'=>'require',
		'wh_type'=>'require',
		'wh_price'=>'require',
		'wh_area'=>'require',
		'temperature_type'=>'require',
		'wh_address'=>'require',
		'wh_contact'=>'require',
		'wh_phone'=>'require|number',

		//上传库源信息
		'wh_name'=>'require',
		'wh_address'=>'require',
		'wh_address_detail'=>'require',
		'wh_price'=>'require',
		'wh_price_type'=>'require',
		'wh_type'=>'require',
		'wh_invoice'=>'require',
		// 'wh_service'=>'require',
		// 'normal_area'=>'require',
		// 'normal_volume'=>'require',
		// 'coldstorage_area'=>'require',
		// 'coldstorage_volume'=>'require',
		// 'freeze_area'=>'require',
		// 'freeze_volume'=>'require',
		// 'quickfreeze_area'=>'require',
		// 'quickfreeze_volume'=>'require',
		// 'deepcold_area'=>'require',
		// 'deepcold_volume'=>'require',
		// 'useable_area'=>'require',
		// 'useable_volume'=>'require',
		// 'wh_photo'=>'require',
		'wh_contact'=>'require',
		'wh_phone'=>'require|number',

		//修改库源
		'wh_price'=>'require',
		'wh_price_type'=>'require',
		'wh_type'=>'require',
		'wh_invoice'=>'require',
		// 'useable_area'=>'require',
		// 'useable_volume'=>'require',
		// 'wh_photo'=>'require',
		'wh_phone'=>'require|number',
	];

	protected $message=[
    	'wh_name.require'=>'仓库名称必须填写',
    	'wh_type.require'=>'仓库类型必须填写',
    	'wh_price.require'=>'仓库价格必须填写',
    	'wh_area.require'=>'仓库面积必须填写',
    	'temperature_type.require'=>'库温类型必须填写',
    	'wh_address.require'=>'仓库地址必须填写',
    	'wh_contact.require'=>'仓库联系人必须填写',
    	'wh_phone.require'=>'仓库联系电话必须填写',
    	'wh_phone.number'=>'仓库联系电话必须为数字',

    	//上传库源信息
    	'wh_name.require'=>'仓库名称必须填写',
    	'wh_address.require'=>'仓库地址必须填写',
		'wh_address_detail.require'=>'仓库详细地址必须填写',
		'wh_price.require'=>'仓库价格必须填写',
		'wh_price_type.require'=>'价格类型必须选择',
		'wh_type.require'=>'仓库类型必须填写',
		'wh_invoice.require'=>'是否需要发票必须选择',
		// 'wh_service.require'=>'增值服务必须选择',
		// 'normal_area.require'=>'',
		// 'normal_volume.require'=>'',
		// 'coldstorage_area.require'=>'',
		// 'coldstorage_volume.require'=>'',
		// 'freeze_area.require'=>'',
		// 'freeze_volume.require'=>'',
		// 'quickfreeze_area.require'=>'',
		// 'quickfreeze_volume.require'=>'',
		// 'deepcold_area.require'=>'',
		// 'deepcold_volume.require'=>'',
		// 'useable_area.require'=>'可用库存面积必须填写',
		// 'useable_volume.require'=>'可用库存体积必须填写',
		// 'wh_photo.require'=>'仓库图片必须上传',
		'wh_contact.require'=>'仓库联系人必须填写',
		'wh_phone.require'=>'仓库联系电话必须填写',
		'wh_phone.number'=>'仓库联系电话必须为数字',

		//修改库源
		'wh_price.require'=>'仓库价格必须填写',
		'wh_price_type.require'=>'价格类型必须选择',
		'wh_type.require'=>'仓库类型必须填写',
		'wh_invoice.require'=>'是否需要发票必须选择',
		// 'useable_area.require'=>'可用库存面积必须填写',
		// 'useable_volume.require'=>'可用库存体积必须填写',
		// 'wh_photo.require'=>'仓库图片必须上传',
		'wh_phone.require'=>'仓库联系电话必须填写',
		'wh_phone.number'=>'仓库联系电话必须为数字',

	];

	protected $scene=[
    	'warehouse'=>['wh_name','wh_type','wh_price','wh_area','temperature_type','wh_address','wh_contact','wh_phone'],

    	//上传库源信息页面
    	'warehouseadd'=>['wh_name','wh_address','wh_address_detail','wh_price','wh_price_type','wh_type','wh_invoice','wh_photo','wh_contact','wh_phone'],

    	//修改库源
    	'warehouse_revise'=>['wh_price','wh_price_type','wh_type','wh_invoice','wh_phone'],

	];

}