<!DOCTYPE html>
<!--
Auther:chengyun
Email:573125546@qq.com
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>string练习</title>
    </head>
    <body>
        <?php
        
        //【判断一个字符串中是否包含另一个字符串】
        //方案：strpos()方法
        
        $email = '573125546@qq.com';
        
        
        //如果找到相关的内容，就返回该字符出现的起始位置，如果没有找到 返回false
        //注意，如果是首位，起始位置为0
        //由于要区分0和fasle 所以 必须用恒等于 === 来进行判断
        if (strpos($email, '@') === FALSE) {
            
            print '当前提交的EMAIL不包含@符号';
        } else {
            
            //int 9 ，当前第10个字符出现@
            print var_dump(strpos($email, '@'));
            print '当前提交的EMAIL包含@符号';
            
        }
        
        echo '<hr>';
        //延伸
        // =、==、=== 区别
        // = 是赋值操作符
        // == 判断值是否相等，不判断类型，比如 true == 1 为真
        // === 除了比较值以外，还比较类型   true === 1 为假
        
        print var_dump(true == 1);
        print var_dump(true === 1);
        
        echo '<hr>';
        //单引号与双引号区别
        //单引号包含的字符串内的变量与转义字符无法进行替换
        //双引号内的变量和转移字符可以正常解析
        
        //用全局变量来做演示
        print '$_SERVER[DOCUMENT_ROOT]';
        echo "<br><br>";
        print "$_SERVER[DOCUMENT_ROOT]";
        
        echo '<hr>';
        //【提取字符串】
        //方案：substr()方法
        
        //substr($string, $start,$length);
        //$string 要格式化的字符串
        //$start 起始位置
        //$length 要截取的长度
        
        //如果$start 和 $length 是正值，将从$string的第一个字符位置0开始
        
        print substr('watch out for that tree',6,5);
        //表示从这个字符串第7个位置（算上0）开始，向后截取5个字符（包括空格）
        //得到结果：out f
        echo "<br><br>";
        
        
        //如果省略$length，substr()会返回从位置$start开始一直到结尾的字符
        //注意，$length为正值
        print substr('watch out for that tree',6);
        //得到结果：out for that tree
        
        
        
        
        //如果$start的值大于字符串的长度，则返回false
        print var_dump(substr('watch out for that tree',30));
        

        ?>
    </body>
</html>

