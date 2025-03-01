<?php

class ParentClass{

    function showSecreatData(){
        echo "sshowing data";
        echo "<br/>";
        return $this;
    }

     function greet(){
        echo "good mornnig 1";
        echo "<br/>";
        return $this;

    }
     function greet2(){
        echo "good mornnig 2";
        echo "<br/>";

    }

    
}


$obj = new ParentClass();
$obj->showSecreatData()->greet()->greet2();

?>