<?php
namespace Lyfzcom;

use Lyfzcom;
use Lyfzcom\Config;
use Lyfzcom\Http\Client;
use Lyfzcom\Passive\Act;
final class Center
{
    private $APPID;
    private $AppSecret;

    public function __construct($APPID, $AppSecret,$Env="product")
    {
        $this->APPID = $APPID;
        $this->AppSecret = $AppSecret;
        if ($Env=="dev"){
            $this->url=Config::DEV_CENTER;
        }else{
            $this->url=Config::API_CENTER;
        }

    }
    /*获取AccessToken*/
    public function getAccessToken()
    {
        $url=$this->url."auth/token?appId=".$this->APPID."&secret=".$this->AppSecret;

        $ret = Client::Get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->statusCode.":".$ret->error,$ret->jsonData);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }

    /*接受事件返回数据*/
    public function Passive()
    {
        $content = file_get_contents('php://input');
        $data    = json_decode($content, true);
        if ($data["appId"]!=$this->APPID&&isset($data["appId"])){
            return \Lyfzcom\return_error("推送信息的appId不匹配或为空");
        }
        return $data;
    }
}
