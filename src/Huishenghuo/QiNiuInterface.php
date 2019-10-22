<?php
/**
 * QiNiuInterface.php
 * 文件描述
 * Created on 2019-10-22 18:17
 * Creat by zrf
 */

namespace Huishenghuo;


interface QiNiuInterface
{
    /**
     * author:zrf
     * created_at zrf (2019-10-22)-18:18
     * desc:上传文件
     * @param string $key
     * @param string $filePath
     * @return mixed
     */
    public function putFile(string $key='',string $filePath='');

    /**
     * author:zrf
     * created_at zrf (2019-10-22)-18:19
     * desc:获取上传文件的token
     */
    public function getUploadToken();
}