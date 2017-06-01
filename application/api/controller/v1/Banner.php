<?php

/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/5/28
 * Time: 下午9:08
 */
namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;

class Banner
{
    public function getBanner($id)
    {
        $validate = new IDMustBePositiveInt();
        $validate->goCheck();
        $banner = BannerModel::getBannerById($id);
        if (!$banner ) {
            throw new MissException([
                'msg' => '请求banner不存在',
                'errorCode' => 40000
            ]);
        }
        return $banner;
    }


}