<<<<<<< HEAD
# 加密解密
crypt组件提供加密解密功能

#开始使用

####安装组件
使用 composer 命令进行安装或下载源代码使用(依赖willphp/config组件)。

    composer require willphp/crypt

> WillPHP 框架已经内置此组件，无需再安装。

####调用示例

    \willphp\config\Crypt::key('willphp'); //设置密钥

####默认密钥

`config/app.php`配置文件可设置默认密钥：
	
	'key' => 'willphp', //默认密钥
	

####加密

    $pwd = Crypt::encrypt('123456', 'key');  //不带key参数使用默认key 

####解密

    echo Crypt::decrypt($pwd, 'key'); //显示123456


#助手函数


####加密
	
    $app= encrypt('app', 'key'); //用key加密

####解密

    echo decrypt('app', 'key');




=======
# crypt
crypt加密组件提供加密解密功能
>>>>>>> 2c8d6e59e2bf49262e08b4425d34583f7aed849f
