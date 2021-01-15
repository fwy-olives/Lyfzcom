
## 安装

* 通过composer，这是推荐的方式，可以使用composer.json 声明依赖，或者运行下面的命令。SDK 包已经放到这里 [`fwy-olives/lyfzcom`][install-packagist] 。
```bash
$ composer require fwy-olives/lyfzcom
```
* 直接下载安装，SDK 没有依赖其他第三方库，但需要参照 composer的autoloader，增加一个自己的autoloader程序。

## 运行环境

|  SDK版本 | PHP 版本 |
|:--------------------:|:---------------------------:|
|          1.X         |  cURL extension,   5.6,7.0 |

## 使用方法

### 获取toke
```php
use Lyfzcom\Center;
...
生产环境
    $Lyfzcom = new Lyfzcom();
    $auth = new Center($accessKey, $secretKey);
    $token = $auth->getAccessToken();
...
测试环境
    $Lyfzcom = new Lyfzcom();
    $auth = new Center($accessKey, $secretKey,"dev");
    $token = $auth->getAccessToken();
...
tp
$auth = new \Lyfzcom\Center($accessKey, $secretKey);
$token = $auth->getAccessToken();
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

## 代码许可

The MIT License (MIT).详情见 [License文件](https://github.com/lyfzcom/php-sdk/blob/master/LICENSE).
