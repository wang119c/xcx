<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/5
 * Time: 下午1:26
 */

namespace app\api\controller\v1;

use \app\api\validate\AddressNew;
use \app\api\service\Token as TokenService;
use \app\api\model\User as UserModel;
use app\lib\exception\UserException;


class Address
{
    public function createOrUpdateAddress()
    {
        (new AddressNew())->check();
        //根据token 来获取用户的uid
        //根据uid 查用户信息,如果用户不存在,则抛出异常
        //获取用户从客户端提交来的地址信息
        //根据用户信息地址是否存在,判断是更新地址还是添加地址
        $uid = TokenService::getCurrentUid();
        $user = UserModel::get($uid);
        if (!$user) {
            throw new UserException();
        }
        $dataArray = getDatas();
        $userAddress = $user->address;

        if(!$userAddress){
            $user->address()->save($dataArray);
        }else{
            $user->address()->save($dataArray);
        }
        return new successMessage();
    }
}