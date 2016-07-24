<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>variable练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //变量设置
        //自己延伸
        $var1 = '';
        $var2 = null;
        
        var_dump(isset($var1)); //返回true
        var_dump(isset($var2)); //返回false
        
        //注意，变量初始化空字符串和空值的区别
        
        //unset()是销毁变量，包括变量的声明
        $var3 = 1;
        unset($var3);
        //var_dump($var3);  //会报错，未定义的变量
        //变量、数组、对象都可以传递给unset()函数来销毁
        
        
        // = 赋值操作符
        // == 判断操作符
        
        //不使用临时变量而实现变量值交换
        $var1 = 1;
        $var2 = 2;
        
        list($var1,$var2) = array($var2,$var1);
        
        echo $var1.$var2;
        
        //在进程间共享变量
        //shmop、System V 两种方式
        //暂时不举例
        
        //serillize()编码为文本形式
        //unserialize() 恢复变量形式
        
        //利用print_r() 或者 var_dump()转为字符串

        
        
        ?>

        
    </body>
</html>

