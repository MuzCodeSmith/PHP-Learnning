<?php
include('./config.php'); //database connection
$getStudent = $conn->prepare("SELECT * FROM students");
$getStudent->execute();
$students = $getStudent->fetchAll();

// print_r($students);


echo "<table  border=1 >";
    echo "<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Course</td>
    <td>Batch</td>
    <td>City</td>
    <td>Year</td>
    </tr>";
    foreach($students as $data){
        echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['name']."</td>";
            echo "<td>".$data['course']."</td>";
            echo "<td>".$data['batch']."</td>";
            echo "<td>".$data['city']."</td>";
            echo "<td>".$data['year']."</td>";
        echo "</tr>";

    }
echo "</table>";

?>