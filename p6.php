<?php
$servername = "localhost";
$username= "root";
$password= "";
$dbname = "test"; 

// OOP Way  
// create connection 
$con = new mysqli($servername,$username,$password,$dbname);
//$con = new mysqli($servername,$username,$password);

if ($con->connect_error)
  die ("<br>Connection Faild ".$con->connect_error); 
else 
  echo "<br>Alhamdulillah OO Connection Success"; 


// Procedural Way 

$pcon = mysqli_connect($servername,$username,$password,$dbname); 

if (!$pcon)
   die ("<br>PCON Connection Failed ".mysqli_connect_error()); 
else 
   echo "<br>PCON Connection is Successful"; 



// PDO Way 
try {
    $pdoconn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<br>PDO Connected successfully";
  } 
catch(PDOException $e) {
    echo "<br> PDO Connection failed: " . $e->getMessage();
  }

?>
