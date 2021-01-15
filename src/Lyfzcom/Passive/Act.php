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
}
