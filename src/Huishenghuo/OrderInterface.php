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
     * @param array $arr
     * @return mixed
     */
    public function addOrder(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:取消订单
     * @param array $arr
     * @return mixed
     */
    public function cancel_order(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:支付成功订单
     * @param array $arr
     * @return mixed
     */
    public function pay_success_order(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-13:19
     * desc:完全关闭订单
     * @param array $arr
     * @return mixed
     */
    public function closed_order(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-21-19:49
     * desc:获取订单物流
     * @param array $arr
     * @return mixed
     */
    public function getOrderLogists(array $arr);
}