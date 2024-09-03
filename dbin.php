<?php
include "dobcon.php"; 

$name = 'PINK'; //$_POST['varname']; //'Jerry'; //$_POST['name'];
$age = 11;
//$city = 'WB'; 
$blood = 'B+';

//$SQLin = "INSERT INTO std2 (names,sage,addr,bg) VALUES ('Megh',       21,     'Ruppur',     'A+'     )";

$SQLin = "INSERT INTO student (name,age,bg) VALUES ('".$name."', ".$age." ,'".$blood."')"; 
//$SQLin = "INSERT INTO std2 (names,sage,addr,bg) VALUES ($name,$age,$city,$blood)"; 

//$conn->query($SQLin);  
if ($conn->query($SQLin) === TRUE) 
    echo "New record added successfully";
else 
    echo "Error: " . $SQLin . "<br>" . $conn->error;
  


// $age=15; 
// $SQLin = "INSERT INTO std2 (names,sage,addr) VALUES ('Yahoo',".$age.",'Dhaka','B+')"; 
 $conn->query($SQLin); 
// echo $conn->error;

?>
