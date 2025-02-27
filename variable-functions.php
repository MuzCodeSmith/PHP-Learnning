<?php
    function testFunc(){
        echo "test function called! <br/>";
    }

    $test = "testFunc";

    // $test();

    anotherFunction($test);

    function anotherFunction ($a){
        echo "calling inside another Function <br/>";
        $a();
    }
?>