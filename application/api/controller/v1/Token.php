<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/1
 * Time: 下午1:55
 */

namespace app\api\controller\v1;


use app\api\service\UserToken;
use app\api\validate\TokenGet;

class Token
{
    public function getToken($code = "")
    {
        (new TokenGet())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return [
            'token' => $token
        ];
    }
}