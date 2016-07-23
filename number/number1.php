<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>number练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        //【检查变量中是否包含数值】
        //方案is_numeric();

        if (is_numeric(5)) {
            echo '这是一个数字';
        } else {
            echo '这不是数字';
        }
        
        echo '<br>';
        //abs()返回一个数的绝对值
        
        $delta = 0.00001;
        
        $a = 1.00000001;
        $b = 1.00000000;
        
        if(abs($a-$b) < $delta){
            echo '$a和$b的差值小于'.$delta;
        }
        
        
        
        
        echo '<hr>';
        //对浮点数取整
        
        //取最近的整数，四舍五入
        echo $number = round(2.5);
        echo '<br>';
        //取最近的整数，四舍五入，只看第一位小数
        echo $number = round(2.49);
        echo '<br>';
        //向上取整
        echo $number = ceil(2.4);
        echo '<br>';
        //向下取整
        echo $number = floor(2.4);
        echo '<br>';
        
        
        echo '<hr>';
        //可以保留精度，结果为2.55
        echo $number = round(2.54545,2);
        echo '<br>';
        //取最近的整数，结果为2.49
        echo $number = round(2.494949,2);
        echo '<br>';
        //注意这时候的四舍五入的位置，结果为2.5
        echo $number = round(2.495949,2);
        echo '<br>';
        
        
        echo '<hr>';
        //【连续整数操作】
        
        var_dump(range('a', 'k'));
        
        echo '<hr>';
        //【在一个范围内生成随机数】
        
        echo $randNumber = mt_rand(1, 100);
        echo '<br>';
        echo $randNumber = rand(1, 100);
        
        //说明：经过测试mt_rand()略微比rand()快，不大量使用可以忽略影响
        //具体可以参见  /number/rand_And_mt_rand_test.php
        
        echo '<hr>';
        //【取对数】
        
        echo $log = log(10);
        
        //以10为底的对数
        echo '<br>';
        echo $log10 = log10(10);
        
        //以其他数为底
        echo '<br>';
        echo $log102 = log(10,2);
        
        echo '<br>';
        //计算任何数的e次幂
        //e = 2.718281828459
        
        echo $exp = exp(2);
        echo '<br>';
        //计算某数的任何次幂
        echo $pow = pow(2, 2);
        echo '<br>';
        echo $pow = pow(2, 3);
        
        echo '<hr>';
         //格式化数字
        $number = 1234.56;
        
        //千位符，不保留小数
        echo number_format($number);
        echo '<br>';
        
        //千位符，保留两位小数
        echo number_format($number,2);
        echo '<br>';
        
        //自定义小数点和千位符，如果要用这个，就必须同时指定，不过当然可以留空
        echo number_format($number,2,'@','+');
        echo '<br>';   
        echo number_format($number,2,'','+');
        echo '<br>';
        
        //如果不知道数字小数的长度，又想保留所有小数，那么可以先取得小数的长度，再进行赋值
        $list = list($int,$dec) = explode('.', $number);
        //var_dump($list);
        //var_dump($dec);
        
        //截取出的小数部分
        echo $dec;
        echo '<br>';
        
        //
        echo number_format($number,  strlen($dec));
        echo '<br>';
        
        
        echo '<br>';
        //本地化参数
        
        //设置本地化信息
        setlocale(LC_ALL, 'en_US');
        //打印对象
        var_dump(localeconv());
        
        
        echo '<hr>';
         //【计算三角函数】
        
        echo $cos = cos($number);
        echo '<br>';
        echo $atan = atan($number);
        
        //php内置数学运算库，可以处理极大数和极小数GMP库
        
        echo '<hr>';
         //【不同进制之间转换】
        
        //二进制转十进制
        echo bindec(110011);
        echo '<br>';
        
        //八进制转十进制
        echo octdec(33);
        echo '<br>';
        
        //十六进制转十进制
        echo hexdec('1b');
        
        echo '<br>';
        //十进制转二进制
        echo decbin(27);
        
        echo '<br>';
        //十进制转八进制
        echo decoct(27);
        
        echo '<br>';
        //十进制转二进制
        echo dechex(27);

        
        ?>

        
    </body>
</html>

