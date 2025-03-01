<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" type="submit">call function</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['btn'])){
    onBtnClick();
}

function onBtnClick(){
    echo "request recived";
}
?>