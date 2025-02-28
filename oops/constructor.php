<?php
class DemoConstructor{
    public $name = "user";
    function __construct($name){
        $this->name = $name;
    }
}

$dc = new DemoConstructor("muzaffar shaikh");

echo $dc->name;

?>