

<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $batch = $_POST['batch'];
    $course = $_POST['course'];
    $city = $_POST['city'];
    $year = $_POST['year'];


    include("./config.php");
    
    $formData=$_POST;
     
     $student =  $conn->prepare("
         INSERT INTO `students` (`id`,`name`,`course`,`batch`,`city`,`year`) 
         VALUES (NULL,'$name','$batch','$course','$city','$year')");
     $result = $student->execute();
     if($result){
         echo "Data inserted";
     }else{
         echo "operation failed";
     }

}
  
?>