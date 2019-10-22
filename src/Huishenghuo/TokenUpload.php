<?php


namespace Huishenghuo;

/**
 * Interface TokenUpload
 * @package Huishenghuo
 */
interface TokenUpload
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-09-16-17:39
     * desc:获取商品数据
     * @return mixed
     */
    public function getUploadToken();

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-09-16-17:40
     * desc:支付成功下取订单
     * @param array $arr
     * @return mixed
     */
    public function putFile(array $arr);
}