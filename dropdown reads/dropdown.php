<?php
    include("./php-mysql/config.php");

    $getStudents = $conn->prepare("SELECT id,name from students");
    $getStudents->execute();
    $students = $getStudents->fetchAll();

    // print_r($students);

    echo '<select>';
    echo "<option>Select Student</option>";
    foreach($students as $student){
        echo "<option value=".$student['id'].">".$student['name']."</option>";
    }
    echo '</select>';
?>