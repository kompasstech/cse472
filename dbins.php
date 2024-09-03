<?php
// Open CONNECTION 
include 'dobcon.php'; 

// DO SQL/DB Operations 
$SQLin = "INSERT INTO student (name,age,bg) VALUES ('',21,'A+')"; 
$conn->query($SQLin); 

// Condition for Success 

// Close Connection 
$conn->close();  


?>
