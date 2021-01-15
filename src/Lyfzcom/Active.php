<?php
namespace Lyfzcom;

use Lyfzcom;
use Lyfzcom\Config;
use Lyfzcom\Http\Client;
use Lyfzcom\Http\Error;
final class Active
{

    //批量注册企业
    public function batchCompanyList()
    {
        $url=$this->url."auth/token?appId=".$this->APPID."&secret=".$this->AppSecret;

        $ret = Client::Get($url);

        if (!$ret->ok()) {
            return \Lyfzcom\return_error($ret->error);
        }
        return \Lyfzcom\return_success($ret->jsonData);
    }
    // 同步业务系统员工信息
    public function synchronizeCompanyUser()
    {

    }
    // 批量注册企业
    public function batchShopList()
    {

    }
    // 同步业务系统部门列表
    public function batchOrganizationList()
    {

    }
    // 批量添加角色
    public function batchRoleList()
    {

    }
    // 批量添加员工角色
    public function batchUserList()
    {

    }
}
