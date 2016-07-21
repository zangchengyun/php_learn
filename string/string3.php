<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>string练习3</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //【控制大小写】
        //ucfirst() 字符串首字符大写
        //ucwords() 字符串每个单词首字母大写
         
        //赋值字符串
        $string = 'this is a good day!';
        
        //字符串首字母大写
        print ucfirst($string);
        echo '<br><br>';
        
        //字符串每个单词首字母大写，以空格为区分
        print ucwords($string);
        
        echo '<br><br>';
        //全部字符大写
        print strtoupper($string);
        
        echo '<br><br>';
        //全部字符小写
        print strtolower('<A HREF="HTTP://WWW.CHENGYUN.ME/">CHENGYUN</A>');
        
        echo '<hr/>';
        //字符串中插入表达式，用连字符'.'操作
        
        print 'My document is under "'.$_SERVER['DOCUMENT_ROOT'].'" path!';
        
        echo '<hr/>';
        //【删除字符两端的空白】
        //ltrim() 删除字符串开始处的空白符
        //rtrim() 删除字符串结尾处的空白符
        //trim() 同时删除字符串开始和结尾处的空白符
        
        
        $string = ' this a good stroy! ';
        
        print 'titie:'.ltrim($string).'on TV';
        echo '<br><br>';
        print 'titie:'.rtrim($string).'on TV';
        echo '<br><br>';
        print 'titie:'.trim($string).'on TV';
        
        echo '<hr/>';
        //trim() 还能删除用户指定的字符
         
        //从开头删除1-9的数字
        print ltrim('10 22 33 aaa bbb 11 22 33','1...9');
        echo '<br><br>';
        //从结尾删除1-9的数字
        print rtrim('10 22 33 aaa bbb 11 22 33','1...9');
        echo '<br><br>';
        //从开头和结尾删除1-9的数字
        print trim('10 22 33 aaa bbb 11 22 33','1...9');
        echo '<br><br>';
        //支持删除字符，汉字
        print trim('abc 10 22 33 aaa bbb 11 22 33','1...z');
        echo '<br><br>';
        //支持删除字符，汉字
        print trim('你好 abc 10 22 33 aaa bbb 11 22 33你好','你好');
        
        echo '<hr/>';
        //【导出文件到CSV】
        
        //定义一个二维数组对象
        $people = array(
            array('xiaiming','33'),
            array('laowang','60'),
            array('小李','33')
        );
        
        //打开文件并定义文件流对象$fh
        //fopen()第一个参数是要打开的文件，不存在就新建
        //fopen()第二个参数是模式，w = write，写操作
        $fh = fopen('people.csv', 'w') or die("Can't open people.csv");
        
        //定义CSV BOM文件头，防止中文乱码
        fwrite($fh,chr(0xEF).chr(0xBB).chr(0xBF));
        
        //将二维数组赋值给foreach循环对象
        foreach ($people as $people_s){
            //向CSV循环写入内容
            if(fputcsv($fh, $people_s) === FALSE){
                die("Can't write CSV line");
            }
        }
        //关闭打开的文件流
        fclose($fh) or die("Can't close people.csv");
        
        
        //【从文件中读取CSV】

        //打开文件并定义文件流对象$fp
        //fopen()第一个参数是要打开的文件，不存在就新建
        //fopen()第二个参数是模式，r = read，读操作
        $fp = fopen('people.csv', 'r') or die("Can't open file");
        
        
        while($csv_line = fgetc($fp)){
            
            for ($i = 0,$j = count($csv_line); $i < $j ; $i++) {
                print htmlentities($csv_line[$i]); 
            }
           
        }
        fclose($fp) or die("Can't close file");
        //☆☆☆☆☆暂时未找到解决读取中文字符的问题，以后再解决！
        
  
        
        ?>
    </body>
</html>

