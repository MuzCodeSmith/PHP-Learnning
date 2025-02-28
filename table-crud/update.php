<?php
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
        <button value="<?php echo $id ?>" type="submit">Update</button>
</form>