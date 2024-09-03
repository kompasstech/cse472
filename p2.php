<?php 
echo "<h3>Hello I am in Page 2</h3>";

$un = $_POST['uname'];
$pass =$_POST['upass'];

echo "Username =".$un."<br>Password=".$pass; 

if (($un == "myname@yahoo.com") && ($pass == 12345))
   echo "<h4><br> Successfull LOGIN"; 
else
   echo "<h4><br> WRONG User name or Password";

?>

