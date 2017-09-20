<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/5
 * Time: 下午1:33
 */

namespace app\api\validate;


class Address extends BaseValidate
{
    protected $rule = [
        'name' => 'require|isNotEmpty',
        'mobile' => 'require|isMobile',
        'province' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'country' => 'require|isNotEmpty',
        'detail' => 'require|isNotEmpty',
    ];
}