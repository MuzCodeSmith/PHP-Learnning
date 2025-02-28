<?php
class MathOperations {
    public $val=30;

    function sum($a,$b){
        return $a+$b+$this->val;
    }

    function mul($a,$b){
        return $a*$b;
    }
}

$math = new MathOperations();
echo $math->sum(10,20);
echo "<br/>";
echo $math->mul(10,20);
echo "<br/>";
$math1 = new MathOperations();
echo $math1->sum(30,40);
?>