<?php

class Properties{
    public $name = "sample";

    function getName (){
        return $this->name;
    }

    function setName($name){
        $this->name=$name;
    }

}

$user1 = new Properties();

echo $user1->name;

$user1->setName("muzzu");

echo $user1->name;
?>