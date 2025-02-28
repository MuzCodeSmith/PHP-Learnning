<?php
if(isset($_GET)){
    include("./config.php");
    $userId = $_GET['id'];
    
    $userDetails = $conn->prepare("SELECT * FROM students WHERE id=$userId");
    $userDetails->execute();
    $userData= $userDetails->fetchAll();
    
    $id = $userData[0]["id"];
    $name = $userData[0]["name"];
    $city = $userData[0]["city"];
    $course = $userData[0]["course"];
    $batch = $userData[0]["batch"];
    $year = $userData[0]["year"];
}

?>

<form  method="post">
        <input type="text" name="name" value="<?php echo $name ?>"/>
        <br/>
        <br/>
        <input type="text" name="course" id="name" value="<?php echo $course ?>">
        <br/>
        <br/>
        <input type="text" name="batch" id="name" value="<?php echo $batch ?>" >
        <br/>
        <br/>
        <input type="text" name="city" id="name" value="<?php echo $city ?>">
        <br/>
        <br/>
        <input type="text" name="year" id="name" value="<?php echo $year ?>">
        <br/>
        <br/>
        <button name="updateData" value="<?php echo $id ?>" type="submit">Update</button>
</form>

<?php
if(isset($_POST['updateData'])){

    $id = $_POST["updateData"];
    $name = $_POST["name"];
    $city = $_POST["city"];
    $course = $_POST["course"];
    $batch = $_POST["batch"];
    $year = $_POST["year"];

    $userDetails = $conn->prepare("UPDATE students  SET 
    `name`='$name', 
    `city`='$city', 
    `course`='$course', 
    `batch`='$batch',
    `year`='$year'  
    WHERE students.id = '$id' ");
    if($userDetails->execute()){
        // echo "details updated successfully";
        header('location:table.php');// redirect to
    }else{
        echo "failed updated";
    };

}

?>