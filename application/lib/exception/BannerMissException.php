<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/5/31
 * Time: 上午11:31
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = "请求的banner不存在";
    public $errorCode = 40000;
}