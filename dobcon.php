<?php
$servername = "localhost:3307";
$username = "root"; // Different in real life
$password ="";  // STRONG PASS real life 
$dbname ="summer24"; // Different real life 

// OO WAY 

$conn = new mysqli($servername,$username,$password,$dbname); 

if ($conn->connect_error)
  die("<br>Connection FAILED WITH ERROR <br>".$conn->connect_error); 
else 
  echo "<br><h1>Yahooooooo... Database Connected</h1>"; 

  
// PRO WAY 
/*
$pcon = mysqli_connect($servername,$username,$password,$dbname); 

if (!$pcon)
  die("<br> <h4>FAILED CONNECTION</h4> ".mysqli_connect_error());
else 
  echo "<br> <h4>Procedural Successfull Connection </h4>"; 
*/

// PDO 
/*
try
{
 $pdocon = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
 $pdocon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "<br> PDO CONNECTED";  
}
catch(PDOException $e) 
{
  echo "<br> PDO Connection ERROR ".$e->getMessage(); 
}
*/

?>