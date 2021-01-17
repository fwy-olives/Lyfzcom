<?php
namespace Lyfzcom\Passive;
/*
 * companyId:企业id
 * eventType:事件类型
 * appId:系统appId
 * uid:账户uid
 * 文档链接https://www.kancloud.cn/lyfz/company_center
 */
final class LAct
{
    /*账号注销推出推送事件 */
    public static function cancellation($data)
    {
        return $data;
    }
}
