<?php
    class Fruit{
        public $name;
    }

    $apple =  new Fruit();
    $apple->name = "Apple";

    echo $apple->name;
    echo "<br>";
    var_dump($apple instanceof Fruit);
?>