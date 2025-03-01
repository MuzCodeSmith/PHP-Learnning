<?php
class ParenClass {
    static public $secreat = "data";

    static function showSecreatData(){
        // echo "showing:".ParenClass::$secreat;
        echo "showing:".self::$secreat;

    }

}

$obj = new ParenClass();
// echo $obj->secreat;
// echo $obj->showSecreatData();

echo ParenClass::$secreat; //can be accessed withoud createing object of class
ParenClass::showSecreatData(); //can be accessed withoud createing object of class
?>