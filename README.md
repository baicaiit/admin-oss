#### 本扩展 是在 ezreal/admin-oss 基础上进行修改的

> 文件或者富文本上传到 oss 的插件

#### 安装

`composer require baicaiit/admin-oss`

#### 发布前端资源 `php artisan vendor:publish --tag=admin-oss`

#### 相关配置设置

在`config/admin_oss.php`中配置
```php
    return [
        "access_id" => env('OSS_ACCESSKEYID', ''),
        "access_key" => env('OSS_ACCESSKEYSECRET', ''),
        "bucket" => env('OSS_BUCKET', ''),
        "endpoint" => env('OSS_ENDPOINT', ''),
        "ssl" => env('OSS_SSL', false),
    ];
```

#### 用法
```php
//一般用法
$form->customFile('test', '测试'); //单文件上传
$form->customMultiFile('test', '测试'); //多文件上传
$form->customEditor('test', '测试'); //富文本

//设置参数
$form->customFile('test', '测试')->maxFileSize('10kb')->fileExtensions('rar,mp4,jpg'); //设置上传文件大小和设置文件后缀
```
