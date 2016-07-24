<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>function练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //函数的主要目的就是可以创建有组织的、可重用的代码
        
        //简单示例
        function sum($a,$b){
            return $a+$b;
        }
        
        $total = sum(2, 2);
        var_dump($total);
        
        //方法中的参数只是引用传递参数的值，但是并不会影响到原来参数本身的值
        
        function addOne($number){
            $number++;
            return $number."<br>";
        }
        $number = 1;
        echo addOne($number); //输出2
        echo $number;  //输出1
        
        
        echo '<br>';
        //为函数参数设定默认值，如果指定有其他值，则取代默认值
        function warp($string,$tag = 'b'){
            return "$string : $tag <br>";
        }
        echo warp('nihao');
        echo warp('nihao', 'xiaowang');
        
        //注意：
        //1，所有指定默认值的参数，必须出现在未指定默认值参数的后边，否则PHP无法识别
        //2.指定的值必须是定值，例如字符串或者数字，不能使变量
        //例如不能是$tag = $var
        
        //传递引用
        //如果你把一个变量传递给一个函数，并且希望保留修改后的值
        //注意和前边的例子对比
        //用&引用变量传值，如 &$number
        
        
         //函数并不需要返回值，因为内部已经修改了
        function addOne2(&$number){
            $number++;
        }
        //赋值
        $number = 1;
        //修改
        addOne2($number); 
        //直接输出$number,已经被方法修改掉
        echo $number;  //输出2
        
        //使用命名参数，暂缺
        
        
        //【创建可以接受个数可变的参数的函数】
        echo '<br>';
        //计算一组数字的平均数
        function mean($numbers){
            //初始化，消除警告
            $sum = 0;
            
            //计算数组长度
            $size = count($numbers);
            
            for ($i = 0; $i < $size; $i++) {
                $sum = $sum + $numbers[$i];
            }
            //用总数除以个数
            $average = $sum / $size;
            //返回平均值
            return $average;
  
        }
        
        echo $mean = mean(array(96,83,33));
        
        echo '<br>';
        //另外一种方法
        function mean2(){
            $sum = 0;
            $size = func_num_args();
            
            for ($i = 0; $i < $size; $i++) {
                $sum = $sum + func_get_arg($i);
            }
            
            $average = $sum / $size;
            return $average;
        }
        echo $mean = mean2(96,93,97);
        
        
        echo '<br>';
        //把传入参数赋值给变量
        //此方法比前两个方法效率低，遍历过程较多
        function mean3() {
            $sum = 0;
            
            $numbers = func_get_args();
            
            $size = count($numbers);
            
            for ($i = 0; $i < $size; $i++) {
                $sum = $sum + $numbers[$i];
            }
            
            $average = $sum / $size;
            
            return $average;
            
        }
        
        echo mean3(96,93,47);
        
        
        //返回变量的引用，暂时空缺
        echo '<br>';
        //返回多个值
        function time_parts($time){
            return explode(':', $time);
        }
        list($hour,$minute,$second) = time_parts('12:34:45');
        echo "$hour:$minute:$second";
        
        //全局变量$GLOBALS
        

        
        
        

        
        
        ?>

        
    </body>
</html>

