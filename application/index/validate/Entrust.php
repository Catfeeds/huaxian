<?php
namespace app\index\validate;
use think\Validate;

class Entrust extends Validate{
	protected $rule=[

		'goods_sort'=>'require',
        'goods_name'=>'require',
        'goods_type'=>'require',
        'goods_ton'=>'require',
        'goods_square'=>'require',
        'low_t'=>'require',
        'high_t'=>'require',

        'shipper_name'=>'require',     //发货人姓名与联系方式
        'shipper_phone'=>'require',  
        'receiver_name'=>'require',    //收货人姓名与联系方式
        'receiver_phone'=>'require',
        'carriver_name'=>'require',     //托运方姓名与联系方式
        'carriver_phone'=>'require',
        'order_money'=>'require',
        'payment_mode'=>'require',
        'invoice'=>'require',
        'startsite'=>'require',
        'startsite_detail'=>'require',                   
        'endsite'=>'require',
        'endsite_detail'=>'require',
        'start_loadingtime'=>'require',
        'end_loadingtime'=>'require',
        'start_arrivetime'=>'require',
        'end_arrivetime'=>'require',
        'car_length'=>'require',
        'car_type'=>'require',
        'remark'=>'require',
    ];

	protected $message=[

		'goods_sort'=>'请填写货物品类',
        'goods_name'=>'请填写货物名称',
        'goods_type'=>'请填写货物类型',
        'goods_ton'=>'请填写货物规格（吨）',
        'goods_square'=>'请填写货物规格（方）',
        'low_t'=>'请填写最低温度',
        'high_t'=>'请填写最高温度',


        'shipper_name'=>'发货人姓名必须填写',     //发货人姓名与联系方式
        'shipper_phone'=>'发货人联系方式必须填写',  
        'receiver_name'=>'收货人姓名必须填写',    //收货人姓名与联系方式
        'receiver_phone'=>'收货人联系方式必须填写',
        'carriver_name'=>'托运方姓名必须填写',     //托运方姓名与联系方式
        'carriver_phone'=>'托运方联系方式必须填写',
        'order_money'=>'订单金额必须填写',
        'startsite'=>'始发地必须填写',
        'startsite_detail'=>'始发地详细地址必须填写',                   
        'endsite'=>'目的地必须填写',
        'endsite_detail'=>'目的地详细地址必须填写',
        'start_loadingtime'=>'起始装车时间必须填写',
        'end_loadingtime'=>'终止装车时间必须填写',
        'start_arrivetime'=>'起始到货时间必须填写',
        'end_arrivetime'=>'终止到货时间必须填写',
        'car_length'=>'车长必须填写',
        'car_type'=>'车型必须填写',
	];

	protected $scene=[
		
		// 'goods_entrust_car'=>['goods_sort','goods_name','goods_type','goods_ton','goods_square','low_t','high_t'], 

		'order_entrust_car'=>['shipper_name','shipper_phone','receiver_name','receiver_phone','carriver_name','carriver_phone','order_money','startsite','startsite_detail','endsite','endsite_detail','start_loadingtime','end_loadingtime','start_arrivetime','end_arrivetime','car_type','car_length'], 

	];
}