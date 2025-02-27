<?php
if($_POST){
    echo " username is :".$_POST['user_name'];
    echo "<br/>";
    echo " email is :".$_POST['user_email'];
    echo "<br/>";
    echo " password is :".$_POST['user_password'];
}else{
    echo "Please fill the form";
}
?>