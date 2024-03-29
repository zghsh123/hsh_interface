<?php
namespace Huishenghuo;
/**
 * Interface SmsInterface
 * @package Hui
 * desc:短信接口
 */
interface SmsInterface
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-18-13:44
     * desc:发送短信
     * @param string $code
     * @param string $phone
     * @param string $secne
     * @return mixed
     */
    public function sendMsg(string $code,string $phone,string $secne);

    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-08-18-13:45
     * desc:获取短信数量
     * @return mixed
     */
    public function getCountMsg();
}