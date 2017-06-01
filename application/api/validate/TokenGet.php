<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/1
 * Time: 下午1:57
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];
    protected $message = [
        'code' => '没有code,无法获取验证信息'
    ];
}