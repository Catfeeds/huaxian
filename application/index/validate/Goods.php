<?php
namespace app\index\validate;
use think\Validate;

class Goods extends Validate{
	protected $rule=[
		//委托货源
		'starting_address'=>'require',
		'destination'=>'require',
		'goods_sort'=>'require',
		'goods_name'=>'require',
		'goods_type'=>'require',
		'standard'=>'require',
		'temperature'=>'require',
		'carriage'=>'require',
		'contact'=>'require',
		'phone'=>'require|number',

		//上传货源信息(找车货源)
		'starting_address'=>'require',
		'startingaddress_detail'=>'require',
		'destination'=>'require',
		'destination_detail'=>'require',
		'goods_sort'=>'require',
		'goods_type'=>'require',
		'goods_name'=>'require',
		'low_temperature'=>'require',
		'high_temperature'=>'require',
		'standard_ton'=>'require',
		'standard_square'=>'require',
		'start_loadingtime'=>'require',
		'end_loadingtime'=>'require',
		'start_arrivetime'=>'require',
		'end_arrivetime'=>'require',
		'car_length'=>'require',
		'car_type'=>'require',
		'carriage_type'=>'require',
		'payment_mode'=>'require',
		'invoice'=>'require',
		'contact'=>'require',
		'phone'=>'require|number',

		//修改货源（找车货源）
		'goods_sort'=>'require',
		'goods_type'=>'require',
		'goods_name'=>'require',
		'low_temperature'=>'require',
		'high_temperature'=>'require',
		'standard_ton'=>'require',
		'standard_square'=>'require',
		'start_loadingtime'=>'require',
		'end_loadingtime'=>'require',
		'start_arrivetime'=>'require',
		'end_arrivetime'=>'require',
		'car_length'=>'require',
		'car_type'=>'require',
		'carriage_type'=>'require',
		'payment_mode'=>'require',
		'invoice'=>'require',
		'phone'=>'require|number',

		//上传货源信息(找库货源)
		'whaddress'=>'require',
		// 'whaddress_detail'=>'require',
		'enter_wh_time'=>'require',
		'storage_time'=>'require',
		'goods_name'=>'require',
		'goods_type'=>'require',
		'standard_ton'=>'require',
		'standard_square'=>'require',
		'package_type'=>'require',
		'store_price'=>'require',
		// 'price_type'=>'require',
		'payment_mode'=>'require',
		'need_wh_temperature'=>'require',
		'invoice'=>'require',
		'goods_photo'=>'require',
		'contact'=>'require',
		'phone'=>'require|number',

		//修改货源信息（找库货源）
		'enter_wh_time'=>'require',
		'storage_time'=>'require',
		'goods_name'=>'require',
		'goods_type'=>'require',
		'standard_ton'=>'require',
		'standard_square'=>'require',
		'package_type'=>'require',
		'store_price'=>'require',
		// 'price_type'=>'require',
		'payment_mode'=>'require',
		'need_wh_temperature'=>'require',
		'invoice'=>'require',
		// 'goods_photo'=>'require',
		'phone'=>'require|number',

	];

	protected $message=[
		//委托货源
		'starting_address.require'=>'始发地必须填写',
		'destination.require'=>'目的地必须填写',
		'goods_sort.require'=>'货物品类必须填写',
		'goods_name.require'=>'货物名称必须填写',
		'goods_type.require'=>'货物类型必须填写',
		'standard.require'=>'货物规格必须填写',
		'temperature.require'=>'温度要求必须填写',
		'carriage.require'=>'运输费用必须填写',
		'contact.require'=>'联系人必须填写',
		'phone.require'=>'联系电话必须填写',
		'phone.number'=>'联系电话必须是数字',

		//上传货源信息(找车货源)
		'starting_address.require'=>'始发地必须填写',
		'startingaddress_detail.require'=>'始发地详细地址必须填写',
		'destination.require'=>'目的地必须填写',
		'destination_detail.require'=>'目的地详细地址必须填写',
		'goods_sort.require'=>'货物品类必须填写',
		'goods_type.require'=>'货物类型必须填写',
		'goods_name.require'=>'货物名称必须填写',
		'low_temperature.require'=>'温度要求必须填写',
		'high_temperature.require'=>'温度要求必须填写',
		'standard_ton.require'=>'货物规格必须填写',
		'standard_square.require'=>'货物规格必须填写',
		'start_loadingtime.require'=>'装车时间必须填写',
		'end_loadingtime.require'=>'装车时间必须填写',
		'start_arrivetime.require'=>'到货时间必须填写',
		'end_arrivetime.require'=>'到货时间必须填写',
		'car_length.require'=>'车长必须选择',
		'car_type.require'=>'车型必须选择',
		'carriage_type.require'=>'运费类型必须选择',
		'payment_mode.require'=>'支付方式必须选择',
		'invoice.require'=>'是否需要发票必须选择',
		'contact.require'=>'联系人必须填写',
		'phone.require'=>'联系电话必须填写',
		'phone.number'=>'联系电话必须是数字',

		//修改货源（找车货源）
		'goods_sort.require'=>'货物品类必须填写',
		'goods_type.require'=>'货物类型必须填写',
		'goods_name.require'=>'货物名称必须填写',
		'low_temperature.require'=>'温度要求必须填写',
		'high_temperature.require'=>'温度要求必须填写',
		'standard_ton.require'=>'货物规格必须填写',
		'standard_square.require'=>'货物规格必须填写',
		'start_loadingtime.require'=>'装车时间必须填写',
		'end_loadingtime.require'=>'装车时间必须填写',
		'start_arrivetime.require'=>'到货时间必须填写',
		'end_arrivetime.require'=>'到货时间必须填写',
		'car_length.require'=>'车长必须选择',
		'car_type.require'=>'车型必须选择',
		'carriage_type.require'=>'运费类型必须选择',
		'payment_mode.require'=>'支付方式必须选择',
		'invoice.require'=>'是否需要发票必须选择',
		'phone.require'=>'联系电话必须填写',
		'phone.number'=>'联系电话必须是数字',


		//上传货源信息(找库货源)
		'whaddress.require'=>'冷库地址必须填写',
		// 'whaddress_detail.require'=>'冷库详细地址必须填写',
		'enter_wh_time.require'=>'入库时间必须填写',
		'storage_time.require'=>'预计库存时间必须填写',
		'goods_name.require'=>'货物名称必须填写',
		'goods_type.require'=>'货物类型必须填写',
		'standard_ton.require'=>'货物规格必须填写',
		'standard_square.require'=>'货物规格必须填写',
		'package_type.require'=>'包装类型必须填写',
		'store_price.require'=>'不包括其他费用的存储费用必须填写',
		// 'price_type.require'=>'价格类型必须填写',
		'payment_mode.require'=>'支付方式必须选择',
		'need_wh_temperature.require'=>'所需温度类型必须选择',
		'invoice.require'=>'是否需要发票必须选择',
		'goods_photo.require'=>'货物照片必须上传',
		'contact.require'=>'联系人必须填写',
		'phone.require'=>'联系电话必须填写',
		'phone.number'=>'联系电话必须是数字',

		//修改货源信息（找库货源）
		'enter_wh_time.require'=>'入库时间必须填写',
		'storage_time.require'=>'预计库存时间必须填写',
		'goods_name.require'=>'货物名称必须填写',
		'goods_type.require'=>'货物类型必须填写',
		'standard_ton.require'=>'货物规格必须填写',
		'standard_square.require'=>'货物规格必须填写',
		'package_type.require'=>'包装类型必须填写',
		'store_price.require'=>'不包括其他费用的存储费用必须填写',
		// 'price_type.require'=>'价格类型必须填写',
		'payment_mode.require'=>'支付方式必须选择',
		'need_wh_temperature.require'=>'所需温度类型必须选择',
		'invoice.require'=>'是否需要发票必须选择',
		// 'goods_photo.require'=>'货物照片必须上传',
		'phone.require'=>'联系电话必须填写',
		'phone.number'=>'联系电话必须是数字',
	];

	protected $scene=[
		//委托货源
		'entrustadd'=>['starting_address','destination','goods_sort','goods_name','goods_type','standard','temperature','carriage','contact','phone'], 

		//上传货源信息(找车货源)
		'goodsadd'=>['starting_address','startingaddress_detail','destination','destination_detail','goods_sort','goods_type','goods_name','low_temperature','high_temperature','standard_ton','standard_square','start_loadingtime','end_loadingtime','start_arrivetime','end_arrivetime','car_length','car_type','carriage_type','payment_mode','invoice','contact','phone'],

		//修改货源（找车货源）
		'goodslist_car_revise'=>['goods_sort','goods_type','goods_name','low_temperature','high_temperature','standard_ton','standard_square','start_loadingtime','end_loadingtime','start_arrivetime','end_arrivetime','car_length','car_type','carriage_type','payment_mode','invoice','phone'],

		//上传货源信息(找库货源)
		'goodsadd1'=>['whaddress','enter_wh_time','storage_time','goods_name','goods_type','standard_ton','standard_square','package_type','store_price','payment_mode','need_wh_temperature','invoice','goods_photo','contact','phone'],

		//修改货源（找库货源）
		'goodslist_ku_revise'=>['enter_wh_time','storage_time','goods_name','goods_type','standard_ton','standard_square','package_type','store_price','payment_mode','need_wh_temperature','invoice','phone'],
	];
}