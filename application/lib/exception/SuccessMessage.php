<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/1
 * Time: 下午3:53
 */

namespace app\lib\exception;


class WechatException extends BaseException
{
    public $code = 400;
    public $errorCode = 999;
    public $msg = "微信服务器接口调用失败";
}