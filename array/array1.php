<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>array练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //数组赋值方式
        $fruits = array('apples','bananas','dates');
        
        //或者
        $fruits = array('red' => 'apple','yello' => 'bananas');
        //注意，使用这种赋值方式，会覆盖之前的数组元素
        
        var_dump($fruits);
        
        //或者采用下列方式
        $fruits[7] = 'apples';
        $fruits[8] = 'bananas';
        $fruits[9] = 'dates';
        var_dump($fruits);
        //或者
        
        $fruits[] = 'apples';
        $fruits[] = 'bananas';
        $fruits[] = 'dates';
        var_dump($fruits);
        //或者指定索引名
        $fruits['a'] = 'apples';
        $fruits['b'] = 'bananas';
        $fruits['c'] = 'dates';
        var_dump($fruits);
        
        //以上内容由于写在一个PHP脚本中，所以数组都会被追加到$fruits中
        //新追加的部分会在上一个索引之后添加
        $fruits[] = 'apples';
        $fruits[] = 'bananas';
        $fruits[] = 'dates';
        var_dump($fruits);
        
        //PHP会在追加新元素之前，先确定数组的长度值，然后把这个值作为新的索引
        //array_push()同样可以追加
        array_push($fruits, 'xiaoming');
        var_dump($fruits);
        
        
        //注意，使用这种赋值方式，会覆盖之前的数组元素
        $fruits = array('apples','bananas','dates');
        $fruits = array('red' => 'apple','yello' => 'bananas');
         var_dump($fruits);

        //可以直接把从数据库中取出的数组或者对象保存到一个数组中
        
        $array = $GLOBALS;
        var_dump($array);
        
        //用一个整数范围来初始化数组
        
        $cards = range(1, 10);
        var_dump($cards);
        
        //遍历数组 输出值
        foreach ($fruits as $value) {
            echo $value.'<br>';
        }
        
        echo '<br>';
        //遍历数组 输出键值
        foreach ($fruits as $key => $value) {
            echo $key.'----'.$value.'<br>';
        }
        
        echo '<br>';
        //for循环输出
        //注意，此种方法仅适合数字索引，否则会报错
        //可以用count()数出数组元素个数
        for ($i = 0; $i < count($cards); $i++) {
            echo $cards[$i]."<br>";
        }
        
        
        echo '<hr>';
        //从数组中删除元素,可以一次性删除多个
        unset($cards[5],$cards[7]);
        var_dump($cards);
        
        //如果要删除连续的元素，可以用array_splice()
        //重新定义
        $newCards = range(1, 10);
        
        //保留3个索引
        array_splice($newCards,3);
        var_dump($newCards);
        
        
        //重新定义
        $newCards = range(1, 10);
        //从第三个索引开始，向后删除一个，注意是数字4和5被删掉了
        array_splice($newCards,3,2);
        var_dump($newCards);
        
        //重新定义fruit数组
        $fruits = array('red' => 'apple','yello' => 'bananas');
        var_dump($fruits);
        $newFruits = array_values($fruits);
        var_dump($newFruits);
        //可以看到原来的变量索引被重新格式化了
        
        echo '<hr>';
        //将一个数组追加到另外一个数组
        
        $arr1 = array('xiaoming','xiaobai','xiaozi');
        $arr2 = array('laowang','laoli','laozhang');
        $arrAll = array_merge($arr1,$arr2);
        var_dump($arrAll);
        
        //如果带索引的追加
        $fruits = array('red' => 'apple','yello' => 'bananas');
        $arrAllNew = array_merge($arr1,$arr2,$fruits);
        var_dump($arrAllNew);
        
        echo '<hr>';
        //数组转换为字符串
        //join()方案
        echo $strNew = join(',', $arrAllNew);
        
        //循环方案
        echo '<hr>';
        $str = ' ';
        foreach ($arrAllNew as $key => $value) {
            $str .= "$value,";
        }

        echo $str;
        
        echo '<hr>';
        //检查数组中是否包含某个键
        $fruits = array('red' => 'apple','yello' => 'bananas');
        if(array_key_exists('1', $fruits)){
            echo '包含';
        }  else {
            echo '不包含';
        }
        
        
        //用isset()检查一个值不为NULL的键
        //$fruits没有索引为2的键，所以输出空白
        if(isset($fruits[2])){
            echo "已经设置";
        }
        echo '<br>';
        //检查数组中是否包含某个元素
        //in_array();
        if (in_array('apple',$fruits)) {
            echo '在数组中';
        }
        
        
        //确定值在数组中的位置
        //array_search()
        //注意array_search()返回值是false
        if (array_search('apple', $fruits) != FALSE){
            echo array_search('apple', $fruits);
        }
        
        echo '<hr>';
        //数组排序
        //sort()
        $fruits = array('yello' => 'bananas','red' => 'apple');  
        sort($fruits);
        var_dump($fruits);
        
        
        //对多个数组进行排序
        array_multisort($arr1,$arr2);
        
        //返回包含唯一元素的新数组
        $unique = array_unique($arr2);
        
        //数组遍历还可以用array_walk()
        //暂不举例
        
        //计算并集、交集、差集
        
        //并集，先合并，再取出唯一元素
        $union = array_unique(array_merge($arr1,$arr2));
        
        //交集
        $intersection = array_intersect($arr2, $arr1);
        
        //差集
        $difference = array_diff($arr2, $arr1);
        
        

        
        
        

        
        
        ?>

        
    </body>
</html>

