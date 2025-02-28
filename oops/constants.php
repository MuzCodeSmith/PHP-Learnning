<?php

class ConstantsTut{
    protected const name ="muzaffar";

    function showData(){
        echo self::name;
    }
}

class Child extends ConstantsTut{
    function showData1(){
        // $this->showData();
        echo ConstantsTut::name;
    }

}

$ct= new ConstantsTut();
$ch1= new Child();
// echo ConstantsTut::name;
// $ct->showData();
$ch1->showData1();


?>