<?php
namespace Lyfzcom;

use Lyfzcom;
use Lyfzcom\Config;
use Lyfzcom\Http\Client;
use Lyfzcom\Passive\LAct;
final class Login
{
    private $APPID;
    private $AppSecret;

    public function __construct($APPID, $AppSecret,$Env="product")
    {
        $this->APPID = $APPID;
        $this->AppSecret = $AppSecret;
        if ($Env=="dev"){
            $this->url=Config::DEV_LOGIN;
        }else{
            $this->url=Config::API_LOGIN;
        }
    }

    public function getAccessToken()
    {
        $url=$this->url."auth/token?appId=".$this->APPID."&secret=".$this->AppSecret;

        $ret = Client::Get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    public function Passive()
    {
        $content = file_get_contents('php://input');
        $data    = json_decode($content, true);
/*        if ($data["appId"]!=$this->APPID||!$data["appId"]){
            return \Lyfzcom\return_error("推送信息的appId不匹配或为空");
        }*/
        if (isset($data["eventType"])){
            switch ($data["eventType"]){
                case "cancellation":/*账号注销推出推送事件*/
                    return LAct::cancellation($data);
                    break;
                default:
                    return \Lyfzcom\return_error("No Event");
            }
        }
    }
}
