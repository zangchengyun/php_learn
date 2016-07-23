<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>datetime练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //小型UTC也称GMT，格林威治标准时间
        //UNIX时间戳 1970年1月1日凌晨开始经过的秒数
        
        //mktime()会根据一段给定的时间生成纪元时间戳
        //date()会根据给定的纪元时间戳，返回一个格式化后的时间字符串
        
        
        //导读例子，计算1986年1月1日是星期几
        echo $stamp = mktime(0,0,0,1,1,1986);
        echo '<br>';

        //‘l’返回完整的星期的名称
        echo date('l',$stamp);
        
        
        echo '<br>';
        //查出当前的日期和时间
        //strftime()或date()来得到一个格式化的时间字符串
        
        echo strftime('%c');
        echo '<br>';
        echo date('r');
        
        echo '<br>';
        //如果要得到时间部分，可以使用getdate()或者localtime()
        
        $nowOne = getdate();
        $nowTow = localtime();
        
        //getdate()
        //hours 小时数
        //mday  一个月中的第几天
        //wday  一周中的第几天
        //mon   月份
        //year  年份，数字（4位）
        //yday  一周中的第几天，数字（例如：299）
        //weekday 一周中的第几天，文本（例如：’Friday’）
        //month 月份，文本，全称（例如：‘January’）
        //0 自纪元起的秒数 （即time()函数的返回值）
        
        
        //localtime()
        //数字位置      键      值
        //  0       tm_sec      秒
        //  1       tm_min      分
        //  2       tm_hour     时
        //  3       tm_mday     一月中的第几天
        //  4       tm_mon      一年中的月份（0表示1月）
        //  5       tm_year     自1990年起经过的年数
        //  6       tm_wday     一周中的第几天（表示星期六）
        //  7       tm_day      一年中的第几天
        //  8       tm_isdst    夏令时是否有效？
        
        
        //一个是赋值数组，一个是下标数组
        var_dump($nowOne);
        var_dump($nowTow);
        
        //注意双引号单引号之间的冲突
        echo "{$nowOne['hours']}:{$nowOne['minutes']}:{$nowOne['seconds']}";
        echo '<br>';
        //或者用字符串连接
        echo $nowOne['hours'].':'.$nowOne['minutes'].':'.$nowOne['seconds'];
        echo '<br>';
        echo "$nowTow[2]:$nowTow[1]:$nowTow[0]";
        
        echo '<br>';
        //发现一种好玩的写法，数组的返回方法可以直接取值
        echo getdate()['hours'];
        echo '<br>';
        echo localtime()['2'];
        
        echo '<hr>';
        //转换为纪元时间戳
        //mktime($hour, $minute, $second, $month, $day, $year, $is_dst)
        
        //本地时间1975年3月10日晚上7:45:03，【注意月份和日期的位置】
        echo mktime(19,45,3,3,10,1975);
        
        echo '<br>';
        //获得基于GMT的特定纪元时间戳
        //gmmktime($hour, $minute, $second, $month, $day, $year, $is_dst)
        
        //GMT时间1975年3月10日晚上7:45:03
        echo gmmktime(19, 45, 3, 3, 10, 1975);
                
                
        echo '<hr>';
        //纪元时间戳转换为时间和日期
        //date() strftime()
        
        //以特定格式打印日期和时间
        //示例
        echo strftime('%c');
        echo '<br>';
        echo date('m/d/y');
        //注意，windows中 strftime()函数有些格式化字符不支持，跨平台建议用date()进行格式化
        //此处省略strfitme()的格式化字符介绍
        //类型格    式化字符    范围            描述
        //小时      H           00-23       小时，数字，24小时制
        //小时      h           01-12       小时，数字，12小时制
        //小时      A                       当前时区的AM或者PM标志大写
        //小时      a                       当前时区的am或者pm标志小写
        //小时      G           0-23        小时，数字，24小时制，无前导零
        //小时      g           0-12        小时，数字，12小时制，无前导零
        //分钟      i           00-59       分钟，数字
        //秒        s           00-61a(a是上标)     秒，数字（暂时不理解a上标的含义）
        //日        d           01-31       每月中的第几天，数字
        //日        z           0-365       一年中的第几天，数字
        //日        N           1-7         一周中的第几天（周日是1）
        //日        w           0-6         一周中的第几天（周日是0)
        //日        j           1-31        一月中的第几天，数字，无前导零
        //日        S           st th nd    表示一个月中第几天的英语，顺序后缀
        //周        D                       简写的姓齐名，当前地区的文本形式
        //周        l                       完整的姓齐名，当前地区的文本形式
        //周        W           01-53       ISO 8601:1998标准中规定的一年中的第几周，数字。周1表示一年中的第一周，该周至少有四天位于当年重。周一是该周的第一天
        //月        F                       完整的月份名，当前地区的文本形式
        //月        M                       简写月份名。当前地区的文本形式
        //月        m           01-12       月份，数字
        //月        n           1-12        月份，数字，无前导零
        //月        t           28,29,30,31 一个月包含几天，数字
        //年        o                       ISO 8601标准中规定带世纪的年份，数字。这个四位数年份对应着ISO的周数，除了属于上一年或者下一年的ISO周数由响应的年份占有外,其他与%y(strftime()的格式化参数)相同   
        //年        y           00-99       不带世纪的年份
        //年        Y                       年份，数字，包括事迹
        //年        L           0,1         闰年标志 1是闰年
        //时区      O           -1200~+1200 基于GMT的小时偏移  ±HHMM（例如：-0400，+0230）
        //时区      P           -12:00 ~ +12:00  失去便宜，包含冒号（例如：-04:00 +02:30）
        //时区      T                       时区，名称或者简写，文本
        //时区      e                       时区标识符，例如America/New_York
        //时区      I           0,1         夏时制标志，1是夏时制
        //时区      Z           -43200~43200    基于GMT的秒数偏移。GMT以西是负值，GMT以东是正值
        //复合      c                       ISO 8601标准格式和日期和时间
        //复合      r                       RFC 822格式的日期 （例如：Thu,22 aug 2002 16:01:07 +0200）
        //其他      U                       从纪元时间开始的秒数
        //其他      B                       样本互联网时间            
        //
        
        
        //date()函数可以使用的常量,不做过多介绍
        var_dump(date(DATE_ATOM));

        echo '<hr>';
        //验证日期
        //checkdate()函数
        
        var_dump(checkdate(3, 33, 3333));
        
        
        echo '<br>';
        //从字符串中解析，语法比较复杂，不推荐
        
        echo strtotime('march 10');
        echo '<br>';
        echo strtotime('last thursday');
        echo '<br>';
        echo strtotime('now + 3 months');
                
        echo '<br>';
        //生成高精度时间
        
        
        //注意两种写法的区别
        echo microtime('ture');
        echo '<br>';
        echo microtime();
        
        //可以用list来形成一个id存储microtime()的值
        
        $list = list($microSeconds,$seconds) = explode(' ',  microtime());
        var_dump($list);
        print_r($list);

        
        
        ?>

        
    </body>
</html>

