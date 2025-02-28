<?php
class UserAuth{
    function login($userType){
        echo "$userType logged in!";
    }
}

class Student extends UserAuth{

}

class Teacher extends UserAuth{

}

$s1 = new Student();
$t1 = new Teacher();
$s1->login("student");
echo "<br/>";
$t1->login("teacher");

?>