<!DOCTYPE html>
<!--
Author:chengyun
Email:573125546@qq.com
Github：https://github.com/zangchengyun/php_learn
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OOP练习1</title>
    </head>
    <body style="font-size: 12px;">
        <?php
        
        //__construct()构造函数，在类初始化时优先调用的方法
        
        //一个对象使用完以后，可以用unset()进行销毁
        
        //如果想让一个对象在被删除之前调用一个方法
        //可以用__destruct()
        //比如在数据库操作类中，最后关闭数据库连接
        
        //访问控制 可以定义变量和方法
        //public    公共    可以在任何地方访问
        //protected 受保护 在类和子类中可以访问
        //private   私有   只在特定类中可以访问
        
        //防止修改的类和方法
        //用 final关键词修饰
        
        
        //__toString()方法还不太理解
        class Person {
            public function __toString() {
                return "你好";
            }
        }
        
        //接口类
        //保证一个类按照特定的名称、可见性和原型实现一个或者多个方法
        
        interface Nameable {
            public function getName();
            public function setName($name);
        }
        
        
        class Book implements Nameable{
            private $name;
            public function getName() {
                return $this->name;
            }
            public function setName($name) {
                return $this->name = $name;
            }
        }
        
        //抽象类
        //不馁直接被实例化，但是可以被继承
        
        abstract class Datebase {
            abstract public function connect();
        }
        
        class Mysql extends Datebase {
            
            public function connect() {
                return "您好";
            }
        }
        
        //抽象方法不能定义为私有方法，因为他们需要被继承
        //抽象方法不能定义为最终方法，因为他们需要被覆盖
        
        
        //魔术方法__get()  和 __set()
        
        //调用另外一个方法返回的对象方法
        //$orange = $fruit->get('citrus')->peel();
        
        
        //子类中访问父类中已经被覆盖的方法
        //给方法名前边加上parent::
        
        //方法多态性
//        is_numeric($var);
//        is_string($var);
//        is_array($var);
//        is_bool($var);
//        is_object($var);
        
        
        //定义类常量
        class Math {
            const pi = 3.14159;
            const e = 2.71828;
        }
        $area = Math::pi * Math::e;
        
        //访问静态属性类似，要使用::
        
        
        //定义静态属性和方法
        //在不实例化的情况下就访问
        
        class Format {
            public static function number($number){
                return $number+1;
            }
        }
        
        echo Format::number(2);
        
        //如果要在一个勒种引用静态属性，可以用self::前缀

        //__wakeUp() 和 __sleep()暂缺
        
        //分析对象，查看有哪些属性和方法
        //Reflection 暂缺
        
        //检查一个类是不是另外一个类的实例
        //instanceof()
        
        //对象实例化期间，自动的加载类文件
        //__autoload()魔术方法
        
        ?>

        
    </body>
</html>

