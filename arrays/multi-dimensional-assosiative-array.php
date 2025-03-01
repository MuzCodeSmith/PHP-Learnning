<?php

$Users = [
    ["ID" => 1,"Name"=>"Tony", "Age"=>32,"Email"=>"tony@stark.com"],
    ["ID" => 2,"Name"=>"Peter", "Age"=>17,"Email"=>"peter@parker.com"],
    ["ID" => 3,"Name"=>"Bruce", "Age"=>36,"Email"=>"bruce@banner.com"],
    ["ID" => 4,"Name"=>"Steve", "Age"=>110,"Email"=>"steve@rogers.com"]
];
echo "<table border=1 >";
for($i=0;$i<count($Users);$i++){
    foreach($Users[$i] as $key => $data){
       if($i === 0){
        echo "<td>";
        echo $key;
        echo "</td>";
       }
        echo "<td>";
        echo $data;
        echo "</td>";
    };
    echo "</tr>";
}
echo "<table>";

?>