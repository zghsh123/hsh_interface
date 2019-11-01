<?php


namespace Huishenghuo;

/**
 * Interface HuiPlayingCard
 * @package Huishenghuo
 */
interface HuiPlayingCardInterface
{
    /**
     * author:fhc
     * email:3081089511@qq.com
     * Created by fhc on 2019-11-01-14:11
     * desc:下单接口
     * @param array $putArray
     * @return mixed
     */
    public function getCardUserNamePasword(array $putArray);
}