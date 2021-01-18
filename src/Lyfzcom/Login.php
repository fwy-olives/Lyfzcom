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
        return $data;
    }
}
