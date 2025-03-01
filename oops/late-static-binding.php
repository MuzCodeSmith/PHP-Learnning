<?php

class ParentClass{
    static public $secreat = "parent secreate data";

    function showSecreatData(){
        echo static::$secreat;
    }

    static function greet(){
        echo "good mornnig from parent";
    }

    function greetNow(){
        static::greet();
    }
    
}
Class ChildClass extends ParentClass{
    static public $secreat = "child secreate data";

    static function greet(){
        echo "good mornnig from child";
    }

}

$obj = new ChildClass();
$obj->greetNow();

?>