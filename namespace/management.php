<?php

    include('./student.php');
    include('./teacher.php');

    // $obj = new student\JoinningDetails();
    $obj = new teacher\JoinningDetails();
    $obj->showDetails();

?>