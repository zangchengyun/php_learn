<?php

/* 
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
 */


//rand()  和 mt_rand() 性能测试

$j = 50000;


$startTime = microtime();
for ($i = 0; $i < $j; $i++) {
    mt_rand(1, 1000);
}
$endTime = microtime();

echo $runTime = $endTime - $startTime;
