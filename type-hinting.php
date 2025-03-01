<?php

class Student{
    function showDetails(string $name){
        return is_string($name);
    }
}

$obj = new Student();
echo $obj->showDetails(["hellow"]);

?>