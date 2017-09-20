<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/1
 * Time: 下午2:07
 */

namespace app\api\model;


class User extends BaseModel
{
    public  function address()
    {
        return $this->hasOne('UserAddress','user_id','id');
    }

    public static function getByOpenId($openid)
    {
        $user = self::where("openid", "=", $openid)->find();
        return $user;
    }
}