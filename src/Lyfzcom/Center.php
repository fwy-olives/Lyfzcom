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
            return \Lyfzcom\return_error($ret->error);
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
        if (isset($data["eventType"])){
            switch ($data["eventType"]){
                case "appAuth":/*业务系统授权员工事件 */
                   return Act::appAuth($data);
                   break;
                case "appCancelAuth":/*业务系统移除员工授权事件*/
                    return Act::appCancelAuth($data);
                    break;
                case "exit":/*员工离职事件*/
                    return Act::exit($data);
                    break;
                case "renew":/*员工恢复在职事件*/
                    return Act::renew($data);
                    break;
                case "updateRemarkName":/*员工编辑事件*/
                    return Act::updateRemarkName($data);
                    break;
                case "editShop":/*新增/编辑门店事件*/
                    return Act::editShop($data);
                    break;
                case "deleteShop":/*删除门店事件*/
                    return Act::deleteShop($data);
                    break;
                case "editOrganization": /*新增/编辑部门事件*/
                    return Act::editOrganization($data);
                    break;
                case "delOrganization":/*删除部门事件*/
                    return Act::delOrganization($data);
                    break;
                case "editPosition":/*新增/编辑职位事件*/
                    return Act::editPosition($data);
                    break;
                case "delPosition":/*删除职位事件*/
                    return Act::delPosition($data);
                    break;
                case "open":/*应用开通授权事件*/
                    return Act::open($data);
                    break;
                case "order":/*应用续费事件*/
                    return Act::order($data);
                    break;
                case "bind":/*兼容旧企业事件*/
                    return Act::bind($data);
                    break;
                case "delRole":/*角色删除事件*/
                    return Act::delRole($data);
                    break;
                case "editRole":/*角色新增/编辑事件*/
                    return Act::editRole($data);
                    break;
                case "appPayBind":/*应用绑定商户号事件*/
                    return Act::appPayBind($data);
                    break;
                case "appPayUnbind":/*应用解绑商户号事件*/
                    return Act::appPayUnbind($data);
                    break;
                case "payNotify":/*订单支付成功事件*/
                    return Act::payNotify($data);
                    break;
                default:
                    return \Lyfzcom\return_error("No Event");
            }
        }
    }
}
