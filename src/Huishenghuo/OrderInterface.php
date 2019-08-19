<?php


namespace Huishenghuo;

/**
 * Interface OrderInterface
 * @package Huishenghuo
 * 订单服务
 */
interface OrderInterface
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:18
     * desc:添加订单
     * @return mixed
     */
    public function addOrder();

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:取消订单
     * @return mixed
     */
    public function cancel_order();

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:支付成功订单
     * @return mixed
     */
    public function pay_success_order();

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:完全关闭订单
     * @return mixed
     */
    public function closed_order();
}