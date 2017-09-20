<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/5
 * Time: 下午3:38
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $errorCode = 60000;
    public $msg = "用户不存在";
}