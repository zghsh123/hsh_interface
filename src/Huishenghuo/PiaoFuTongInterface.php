<?php
/**
 * PiaoFuTongInterface.php
 * 文件描述
 * Created on 2019-10-09 18:05
 * Creat by zrf
 */

namespace Huishenghuo;

/**
 * Class PiaoFuTongInterface
 * @package Huishenghuo
 * 第三方票付通
 */
interface PiaoFuTongInterface
{
    /**
     * author:zrf
     * created_at zrf (2019-10-09)-18:06
     * desc:获取产品列表
     * @param array $data
     * @return mixed
     */
    public function GetScenicSpotList(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-09)-18:12
     * desc:产品详情(可选)
     * @param array $data
     * @return mixed
     */
    public function GetScenicSpotInfo(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-09)-18:06
     * desc:获取门票列表
     * @param array $data
     * @return mixed
     */
    public function GetTicketList(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-09)-18:06
     * desc:获取门票详情
     * @param array $data
     * @return mixed
     */
    public function GetTicketInfo(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:06
     * desc:场次信息(演出产品类型;可选)
     * @param array $data
     * @return mixed
     */
    public function GetScreeningsList(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:07
     * desc:价格(日历价格;可选)
     * @param array $data
     * @return mixed
     */
    public function GetRealTimeStorage(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:09
     * desc:身份证校验(仅校验身份证格式是否正确，无判断限购之类;可选)
     * @param array $data
     * @return mixed
     */
    public function CheckPersonID(array $data);
    /**
     * author:zrf
     * created_at zrf (2019-10-09)-18:09
     * desc:预判下单 (判断提交的参数是否满足下单条件，没有生成订单;可选)
     * @param array $data
     * @return mixed
     */
    public function OrderPreCheck(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:11
     * desc:提交订单 (已支付订单提交，必接)
     * @param array $data
     * @return mixed
     */
    public function PFTOrderSubmit(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:12
     * desc:查询订单(可选)
     * @param array $data
     * @return mixed
     */
    public function OrderQuery(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:13
     * desc:修改/取消订单(必接)
     * @param array $data
     * @return mixed
     */
    public function OrderChangePro(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:14
     * desc:重发短信 (可选)
     * @param array $data
     * @return mixed
     */
    public function reSendSMSGlobalPL(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:14
     * desc:查看凭证码/消费码 (可选)
     * @param array $data
     * @return mixed
     */
    public function TerminalCodeVerify(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:15
     * desc:会员关系查看 (可选)
     * @param array $data
     * @return mixed
     */
    public function PFTMemberRelationship(array $data);

    /**
     * author:zrf
     * created_at zrf (2019-10-10)-09:16
     * desc:资金余额查看(可选)
     * @param array $data
     * @return mixed
     */
    public function PFTMemberFund(array $data);

}