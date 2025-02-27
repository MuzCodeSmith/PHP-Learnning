<?php

$users =  [
    [1,"Tony", "tonystark@test.com", 16],
    [2,"Tom", "tomhardy22@test.com", 22],
    [3,"gwen", "gwendoe@test.com", 18],
    [4,"gwen", "gwendoe@test.com", 56],
    [5,"gwen", "gwendoe@test.com", 25],
    [6,"gwen", "gwendoe@test.com", 18],
];
echo "<table border=1 >";
    for($i=0;$i<count($users);$i++){
        echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
        echo "</tr>";
    }
echo "</table>";
?>