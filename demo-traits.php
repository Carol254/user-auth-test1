<!DOCTYPE html>
<html>
<?php
    trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
    }
    }

    trait message2 {
    public function msg2() {
        echo "OOP reduces code duplication!";
    }
    }

    class Welcome {
    use message1;
    }

    class Welcome2 {
    use message1, message2;
    }

    $obj = new Welcome();
    $obj->msg1();
    echo "<br>";

    $obj2 = new Welcome2();
    $obj2->msg1();
    $obj2->msg2();
    echo "<br>";
?>
<hr>
<?php
    //accessing a static method in the same class using the self keyword
    class greeting {
    public static function welcome() {
        echo "Hello World!";
    }

    public function __construct() {
        self::welcome();
    }
    }

    new greeting();
?>
<hr>
<?php
    //accessing static methods from methods in other classes
    class A {
        public static function welcome() {
            echo "Hello PHP!";
        }
    }

    class B {
        public function message() {
            A::welcome();
        }
    }

    $obj = new B();
    echo $obj -> message();
?>
</html>