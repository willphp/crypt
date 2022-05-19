# 加密解密

crypt组件提供加密解密功能

#开始使用

####安装组件

使用 composer 命令进行安装或下载源代码使用。

    composer require willphp/crypt

> WillPHP框架已经内置此组件，无需再安装。

####设置密钥

    \willphp\crypt\Crypt::key('willphp'); //设置密钥


####加密

    $pwd = \willphp\crypt\Crypt::encrypt('123', 'key');  //key密钥，可选 

####解密

    echo \willphp\crypt\Crypt::decrypt($pwd, 'key'); //显示123
