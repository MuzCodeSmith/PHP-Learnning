<?php

include("./config.php");


    $students = NULL;
    fetchStudentData();

    
    echo '<table border=1>';
    echo '<thead>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Batch</th>
        <th>City</th>
        <th>Year</th> 
        <th>Action</th> 
        </thead>';

    foreach($students as $student){
        echo '<tr>';
            echo "<td>".$student['id']."</td>";
            echo "<td>".$student['name']."</td>";
            echo "<td>".$student['course']."</td>";
            echo "<td>".$student['batch']."</td>";
            echo "<td>".$student['city']."</td>";
            echo "<td>".$student['year']."</td>";
            echo "<td><form method='post'> 
            <button name='delbtn' value=".$student['id'].">delete</button>
            <a href='update.php?id=" .$student['id']."'>edit</a>
            </form></td>";
        echo '</tr>';
    }
    echo '</table>';

    if(isset($_POST['delbtn'])){
        $id = $_POST['delbtn'];
        deleteRecordHandler($id);
    }


function deleteRecordHandler($id){
    global $conn;
    $deleteStudentRecord = $conn->prepare("DELETE FROM students WHERE students.id=" .$id);
    if($deleteStudentRecord->execute()){
        echo "Record deleted successfully";
        fetchStudentData();
    }else{
        echo "Unable to delete Record";
    }
}

function fetchStudentData(){
    global $conn;
    global $students;

    $getStudents = $conn->prepare('SELECT * FROM students');
    $getStudents->execute();
    $students=$getStudents->fetchAll();
}
    

?>