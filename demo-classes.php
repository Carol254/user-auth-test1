<?php
    class Fruit{
        public $name;
    }

    $apple =  new Fruit($name);
    $apple->name = "Apple";

    echo $apple->name;
    echo "<br>";
?>