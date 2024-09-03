<!DOCTYPE HTML>
<html>
<head>
<title> LOGIN </title>
</head>

<style>

</style> 

<script> 
  
</script> 

<body bgcolor="#2CD2F7">  
<?php
session_start();
echo $_SESSION["wup"]; 

?>

<form action="logchk.php" method="post">
    User Name<input type="text" name="usrname" id="usrid" value="">
    Password <input type="password" name="upass" id="upid" value="">
    <input type="submit" name="submit" value="Login">

<!-- <table>
<tr><td> </td><td> </td> </tr>
<tr> </tr>
</table> -->

</form>    

</body>

</html>