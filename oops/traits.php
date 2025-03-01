<?php
trait Compony1{
    function getAllEmployees(){
        return 200;
    }

    function getIncome(){
        return 5000000;
    }
}
trait Compony2{
    function getAllEmployees(){
        return 500;
    }
    function getIncome(){
        return 3000000;
    }
}

class Center{
    use Compony1;
    use Compony2{
        Compony1::getAllEmployees insteadOf Compony2;
        Compony2::getAllEmployees as getAllEmployees2;
        Compony1:: getIncome insteadOf Compony2 ;
    }
}

$obj = new Center();
// echo $obj->getIncome();
// echo $obj->getAllEmployees();
echo $obj->getIncome();


?>