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
        //书签55页
        
        

  
        
        
        
        
        
        ?>

        
    </body>
</html>

