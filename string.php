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
        
        
        //如果$start + $lenth 大于字符串长度，则返回从$start开始到最后的所有字符
        
        print '字符串总长度'.strlen('watch out for that tree');
        echo "<br><br>";
        print substr('watch out for that tree',20,30);
        
        //字符串总长度23
        //从第21个字符开始，返回30个，实际上只剩3个
        //返回  ree
        
        
        
        echo "<br><br>";
        //如果$start是负值，substr()会从这个字符串的结尾开始反推
        //输出 t tree 含空格
        print substr('watch out for that tree',-6);
        
        
        echo "<br><br>";
        //如果一个负的 $start值 超过了 这个字符串的起始位置，substr()将$start的值视为0
        //这时候输出完整的字符串
        print substr('watch out for that tree',-30);
        
        
        echo "<br><br>";
        //如果$length是负值，那么substr()会从起始位置反向推算，并截取字符串
        
        //从倒数第六个字符，截取3个字符
        //输出结果 t t
        print substr('watch out for that tree',-6,3);
        
        
        echo '<hr>';
        //【替换字符串】
        //方案：substr_replace()方法
        
        //方案1
        //substr_replace($old_string,$new_substring,$start);
        //$old_string 要处理的字符串
        //$new_substring 要替换进去的新的字符串（直到结尾）
        //$start 替换开始的起始位置（注意0是第一个字符）
        
        
        
        //从第12个字符，用fish替换掉blue dog的内容
        print substr_replace('My pet is a blue dog', 'fish', 12);
        echo "<br><br>";
        
        
        
        
        //方案2
        //substr_replace($old_string,$new_substring,$start,$length);
        //把从$start开始的$length个字符替换成$new_substring
        //从第12个字符，用red替换4个字符（4个字符指blue的占位）
        print substr_replace('My pet is a blue dog', 'red', 12,4);
        echo "<br><br>";
        
        
        //如果$start是负值
        

        ?>
    </body>
</html>

