<?php


namespace Huishenghuo;

/**
 * author:fhc
 * email:3081089511@qq.com
 * Created by fhc on 2019-09-16-17:39
 * desc:天时同城第三方
 * Class TianShiInterface
 * @package Huishenghuo
 */
interface TianShiInterface
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-09-16-17:39
     * desc:获取商品数据
     * @param array $data
     * @return mixed
     */
    public function getGoodsList(array $data);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-09-16-17:40
     * desc:支付成功下取订单
     * @param array $data
     * @return mixed
     */
    public function addOrder(array $data);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-09-17-13:15
     * desc:订单退款
     * @param array $data
     * @return mixed
     */
    public function orderRefund(array $data);
}