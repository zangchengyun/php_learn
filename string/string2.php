<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>string练习2</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        
        //【逐字节进行处理文本】
        //利用for循环逐字节进行处理
        //注意：字符串中的字符可以以下标的方式取出


        //定义一个字符串
        $string = "This weekend, I'm ging shooping for a pet chicken.";
        
        //设置计数变量
        $vowels = 0;
        
        //计算字符串长度
        $j = strlen($string);
        
        //for循环开始
        //定义游标从0开始，也就是字符串的第一个字符
        //$i循环到字符串的长度时，结束
        //每次循环$i+1
        for ($i = 0;$i<$j;$i++) {
            
            //判断$string[$i]是否包含在'aeiouAEIOU'这个字符传中
            //比如第一次循环，$i=0时，$string[$i] = $string[0],也就是字符串的第一个字符T
            if(strstr('aeiouAEIOU', $string[$i])){
                //内循环执行次数+1
                $vowels++;
                
                //输出当前执行的字母以及当前的执行次数
                echo "当前执行次数：$i,当前的字符是:$string[$i],当前内循环执行次数:$vowels <br/>";
                
            }
        }
        
        echo '<hr/>';
        //拓展思考
        //比如做一个节点的权限判断
        //某个节点有修改和删除两个选项，设置增加权限为pe为修改权限，pd为删除权限,
        //假设一个用户的权限是 $power = 'pepd';
        //这个权限字符串可以保存在数据库的单一字段中即可
        //进行权限判断时
        
        //假设从数据库取到的权限值
        $userPower = 'pepd';
        
        //该节点需要修改权限
        $requierPower = 'pe'; 
        
        if(strstr($userPower,$requierPower)){
            echo '拥有修改权限';
        }
        
        echo '<br><br>';
        
        //如果是用户组和特殊权限并存
        
        $userLevel = 2;
        
        //需要的用户级别为3
        $requireLevel = 3;
        
        //如果用户拥有节点权限或者用户组达到要求，那么有权限
        if(strstr($userPower,$requierPower) or $requierPower == $userLevel){
            echo '拥有修改权限';
        }
        
        echo '<hr/>';
        //Look and say序列
        
        function lookAndSay($s) {
            $r = null;
            $m = $s[0];
            $n = 1;
            
            for ($i = 1,$j = strlen($s); $i < $j; $i++) {
                
                if ($s[$i] == $m) {
                    $n++;
                }  else {
                    $r .= $n.$m;
                    $m = $s[$i];
                    $n = 1;
                }
                
            }
            
            return $r.$n.$m;
        }
        
        for ($i = 0,$s = 1;$i<10 ; $i++) {
            $s = lookAndSay($s);
            print "$s <br/>\n";
        }
        
        //程序执行分析
        //该程序的核心在于第二个for循环调用以$s为参数，连续调用10次lookAndSay($s)方法
        //第一次传入的参数是$s=1，然后进去做变量运算
        //把每次返回的值赋值给$s,并代入第一个方法循环重新运算
        
        echo '<hr/>';
        //【按字或者字节来翻转字符串】
        //方案：strrev()方法
         
        //按字节翻转
        print strrev('This is not a palindrome.');
        
        
        
        echo '<br><br>';
        //原书是按字翻转，准确说是按单词翻转，以空格为区分
        //定义要翻转的字符串
        $s = "Once upon a time there was a trutle.";
        
        //以空格隔断字符串,注意括号中间是空格，隔断以后生成的是数组
        $words = explode(' ', $s);
        
        //打印数组元素
        var_dump($words);
        
        //翻转数组内的数组元素，并重新赋值给变量$words，形成新的数组
        $words = array_reverse($words);
        
        //打印新数组元素
        var_dump($words);
        
        //以空格重建数组元素，注意引号中间有一个空格
        $s = implode(' ', $words);
        
        //打印输出最终翻转的结果
        print $s;
         
        
        echo '<br><br>';
        //简化后的代码,注意$s已经是翻转后的结果了,再次翻转就和原来的字符串内容一样
        print $reversed_s = implode(' ',array_reverse(explode(' ', $s)));
        
        
        ?>
    </body>
</html>

