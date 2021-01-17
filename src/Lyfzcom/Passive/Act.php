<?php
namespace Lyfzcom\Passive;
/*
 * companyId:企业id
 * eventType:事件类型
 * appId:系统appId
 * uid:账户uid
 * 文档链接https://www.kancloud.cn/lyfz/company_center
 */
final class Act
{
    /*业务系统授权员工事件 */
    public static function appAuth($data)
    {
        return $data;
    }
    /*业务系统移除员工授权事件*/
    public static function appCancelAuth($data)
    {
        return $data;
    }
    /*员工离职事件*/
    public static function exit($data)
    {
        return $data;
    }
    /*员工恢复在职事件*/
    public static function renew($data)
    {
        return $data;
    }
    /*员工编辑事件*/
    public static function updateRemarkName($data)
    {
        return $data;
    }
    /*新增/编辑门店事件*/
    public static function editShop($data)
    {
        return $data;
    }
    /*删除门店事件*/
    public static function deleteShop($data)
    {
        return $data;
    }
    /*新增/编辑部门事件*/
    public static function editOrganization($data)
    {
        return $data;
    }
    /*删除部门事件*/
    public static function delOrganization($data)
    {
        return $data;
    }
    /*新增/编辑职位事件*/
    public static function editPosition($data)
    {
        return $data;
    }
    /*删除职位事件*/
    public static function delPosition($data)
    {
        return $data;
    }
    /*应用开通授权事件或登录检验事件*/
    public static function open($data)
    {
        return $data;
    }
    /*应用续费事件*/
    public static function order($data)
    {
        return $data;
    }

    /*兼容旧企业事件*/
    public static function bind($data)
    {
        return $data;
    }
    /*角色删除事件*/
    public static function delRole($data)
    {
        return $data;
    }
    /*角色新增/编辑事件*/
    public static function editRole($data)
    {
        return $data;
    }
    /*应用绑定商户号事件*/
    public static function appPayBind($data)
    {
        return $data;
    }
    /*应用解绑商户号事件*/
    public static function appPayUnbind($data)
    {
        return $data;
    }
    /*订单支付成功事件*/
    public static function payNotify($data)
    {
        return $data;
    }
}
