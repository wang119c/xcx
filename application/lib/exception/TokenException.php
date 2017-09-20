<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/5
 * Time: 上午10:38
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $errorCode = 10001;
    public $msg = "Token已过期或者无效Token";
}