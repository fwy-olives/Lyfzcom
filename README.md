
## 安装

* 通过composer，这是推荐的方式，可以使用composer.json 声明依赖，或者运行下面的命令。SDK 包已经放到这里 [`fwy-olives/lyfzcom`][install-packagist] 。
```bash
$ composer require fwy-olives/lyfzcom
```
* 直接下载安装，SDK 没有依赖其他第三方库，但需要参照 composer的autoloader，增加一个自己的autoloader程序。

## 运行环境

| Qiniu SDK版本 | PHP 版本 |
|:--------------------:|:---------------------------:|
|          7.x         |  cURL extension,   5.3 - 5.6,7.0 |
|          6.x         |  cURL extension,   5.2 - 5.6 |

## 使用方法

### 上传
```php
use LyfzcomLyfzcom\Storage\UploadManager;
use Lyfzcom\Auth;
...
    $upManager = new UploadManager();
    $auth = new Auth($accessKey, $secretKey);
    $token = $auth->uploadToken($bucketName);
    list($ret, $error) = $upManager->put($token, 'formput', 'hello world');
...
```

## 测试

``` bash
$ ./vendor/bin/phpunit tests/Lyfzcom/Tests/
```

## 常见问题

- $error保留了请求响应的信息，失败情况下ret 为none, 将$error可以打印出来，提交给我们。
- API 的使用 demo 可以参考 [单元测试](https://github.com/lyfzcom/php-sdk/blob/master/tests)。

## 代码贡献

详情参考[代码提交指南](https://github.com/lyfzcom/php-sdk/blob/master/CONTRIBUTING.md)。

## 贡献记录

- [所有贡献者](https://github.com/lyfzcom/php-sdk/contributors)

## 联系我们

- 如果需要帮助，请提交工单（在portal右侧点击咨询和建议提交工单，或者直接向 support@lyfzcom.com 发送邮件）
- 如果有什么问题，可以到问答社区提问，[问答社区](http://lyfzcom.segmentfault.com/)
- 更详细的文档，见[官方文档站](http://developer.lyfzcom.com/)
- 如果发现了bug， 欢迎提交 [issue](https://github.com/lyfzcom/php-sdk/issues)
- 如果有功能需求，欢迎提交 [issue](https://github.com/lyfzcom/php-sdk/issues)
- 如果要提交代码，欢迎提交 pull request
- 欢迎关注我们的[微信](http://www.lyfzcom.com/#weixin) [微博](http://weibo.com/lyfzcomtek)，及时获取动态信息。

## 代码许可

The MIT License (MIT).详情见 [License文件](https://github.com/lyfzcom/php-sdk/blob/master/LICENSE).

[packagist]: http://packagist.org
[install-packagist]: https://packagist.org/packages/lyfzcom/php-sdk
