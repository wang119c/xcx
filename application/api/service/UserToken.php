<?php
/**
 * Created by PhpStorm.
 * User: luodongyun
 * Date: 2017/6/1
 * Time: 下午2:09
 */

namespace app\api\service;


use app\lib\exception\WechatException;

class UserToken
{
    protected $code;
    protected $wxAppID;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    public function __construct($code)
    {
        $this->code = $code;
        $this->wxAppID = config('wx.app_id');
        $this->wxAppSecret = config('wx.app_secret');
        $this->wxLoginUrl = sprintf(config('wx.login_url'), $this->wxAppID, $this->wxAppSecret, $this->code);
    }

    public function get()
    {
        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result, true);
        if (empty($wxResult)) {
            throw new Exception("获取session_key及openiD失败,微信内部错误");
        } else {
            $loginFail = array_key_exists('errcode', $wxResult);
            if ($loginFail) {
                $this->processLoginError($wxResult);
            } else {
                $this->grantToken($wxResult);
            }
        }
    }

    private function grantToken($wxResult){
        $openid = $wxResult['openid'];

    }

    private function processLoginError($wxResult)
    {
        throw new WechatException([
            'msg' => $wxResult['errmsg'],
            'errorcode' => $wxResult['errcode']
        ]);
    }

}