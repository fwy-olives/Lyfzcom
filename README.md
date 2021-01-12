
## 安装

* 通过composer，这是推荐的方式，可以使用composer.json 声明依赖，或者运行下面的命令。SDK 包已经放到这里 [`fwy-olives/lyfzcom`][install-packagist] 。
```bash
$ composer require fwy-olives/lyfzcom
```
* 直接下载安装，SDK 没有依赖其他第三方库，但需要参照 composer的autoloader，增加一个自己的autoloader程序。

## 运行环境

|  SDK版本 | PHP 版本 |
|:--------------------:|:---------------------------:|
|         1.x        |  cURL extension,   >= 5.6 |

## 使用方法

### 获取AccessToken
```php
use LyfzcomLyfzcom\Storage\UploadManager;
use Lyfzcom\Auth;
...
    $Lyfzcom = new Lyfzcom();
    $auth = new Auth($accessKey, $secretKey);
    $token = $auth->getAccessToken();
...
tp
$auth = new \Lyfzcom\Auth($accessKey, $secretKey);
$token = $auth->getAccessToken();
```

## 代码许可

The MIT License (MIT).详情见 [License文件](https://github.com/lyfzcom/php-sdk/blob/master/LICENSE).

