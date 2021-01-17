<?php
namespace Lyfzcom;

use Lyfzcom;
use Lyfzcom\Config;
use Lyfzcom\Http\Client;
use Lyfzcom\Http\Error;
final class LActive
{
    private $accessToken;
    public function __construct($accessToken,$Env="product")
    {

        if ($Env=="dev"){
            $this->url=Config::DEV_CENTER;
        }else{
            $this->url=Config::API_CENTER;
        }
        $this->accessToken = $accessToken;
    }
    //  注册账户
    public function addUser($data)
    {
        $url=$this->url."other/addUser?accessToken=".$this->accessToken;

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  修改账户密码
    public function modifyPassword($data)
    {
        $url=$this->url."other/modifyPassword?accessToken=".$this->accessToken;

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
//  校验ticket
    public function checkTicket($ticket)
    {
        $url=$this->url."other/checkTicket?accessToken=".$this->accessToken."&ticket=".$ticket;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  修改账户信息
    public function updateUser($data)
    {
        $url=$this->url."other/updateUser?accessToken=".$this->accessToken;

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  注销退出账号
    public function cancellation($ticket)
    {
        $url=$this->url."other/cancellation?accessToken=".$this->accessToken."&ticket=".$ticket;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  获取账号UID
    public function getUnumberEffectiveness($number)
    {
        $url=$this->url."other/getUnumberEffectiveness?accessToken=".$this->accessToken."&number=".$number;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  获取账户信息
    public function findByUid($uid)
    {
        $url=$this->url."other/findByUid?accessToken=".$this->accessToken."&uid=".$uid;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  获取unionid
    public function findUnionid($uid)
    {
        $url=$this->url."other/findUnionid?accessToken=".$this->accessToken."&uid=".$uid;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  解绑微信
    public function deleteWechat($uid)
    {
        $url=$this->url."other/deleteWechat?accessToken=".$this->accessToken."&uid=".$uid;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  设置灰度用户
    public function grayLevelAddUser($data)
    {
        $url=$this->url."other/grayLevelAddUser?accessToken=".$this->accessToken;

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  清除应用灰度用户
    public function grayLevelRemoveUser()
    {
        $url=$this->url."other/grayLevelRemoveUser?accessToken=".$this->accessToken;

        $ret = Client::get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }

}
