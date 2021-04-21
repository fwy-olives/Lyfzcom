<?php
namespace Lyfzcom;

use Lyfzcom\Http\Client;

/**
 * 企业中心 Enterprise Management Center
 * 文档链接https://www.kancloud.cn/lyfz/company_center
 * Class Emc
 * @package Lyfzcom
 */
final class Mem
{
    private $AppId;
    private $AppSecret;
    private $accessToken;
    private $url;
    public function __construct($Env="product",$AppId="", $AppSecret="")
    {

        if ($Env=="dev"){
            $this->murl=Config::DEV_MEMBER;
        }else{
            $this->murl=Config::API_MEMBER;
        }
        $this->AppId = $AppId;
        $this->AppSecret = $AppSecret;
    }



    public function getAccessToken()
    {

    }

    public function setAccessToken($accessToken){
        $this->accessToken=$accessToken;
        return $this;
    }
    //  导入会员数据
    public function vip_import($data)
    {
        $url=$this->murl."other/addMember";

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  增扣积分余额
    public function updateIntegralBalance($data)
    {
        $url=$this->murl."other/updateIntegralBalance";

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  添加一个会员
    public function addOneMember($data)
    {
        $url=$this->murl."other/addOneMember";

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  根据手机号获取会员信息
    public function getMemberByPhone($phone,$ccId)
    {
        $url=$this->murl."other/getMemberByPhone?phone=".$phone."&ccId=".$ccId;

        $ret = Client::Get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  修改手机号码
    public function updatePhone($data)
    {
        $url=$this->murl."other/updatePhone?prePhone=".$data["prePhone"]."&phone=".$data["phone"]."&memberNo=".$data["memberNo"]."&appId=".$data["appId"];

        $ret = Client::Get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    //  校验积分余额
    public function checkInfo($data)
    {
        $url=$this->murl."other/checkInfo";

        $ret = Client::post($url,$data);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
}
