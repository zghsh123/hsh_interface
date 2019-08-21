<?php


namespace Huishenghuo;

/**
 * Interface PayInterface
 * @package Hui
 * desc:支付相关接口
 */
interface PayInterface
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-19-12:00
     * desc:方法说明
     * @param array $arr
     * @return mixed
     */
    public function getPay(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-21-18:42
     * desc:退款
     * @param array $arr
     * @return mixed
     */
    public function orderRefund(array $arr);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-21-18:42
     * desc:方法说明
     * @param array $arr
     * @return mixed
     */
    public function orderSelectResult(array $arr);
}