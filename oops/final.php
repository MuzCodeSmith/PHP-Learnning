<?php
 class ParentClass {
    final public $secret ="confidential-data";
}

class ChildClass extends ParentClass{
    
}

// $obj = new ParentClass();
$obj = new ChildClass(); //get error here
echo $obj->secret;
?>