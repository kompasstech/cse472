<!DOCTYPE HTML>
<html>
<head>
    <title>Table</title>
</head>
<body>
<?php 
 $x=10;
 $y=12;
 $z=15;

 echo "PHP Project Runs from INDEX FIle"; 
 echo ".NET Project Runds from DEFAULT File";
 echo "Node JS Project Runs from App File"; 
 
?>
<table border='1'>
<tr>
    <td> COL1 </td>
    <td> COL2 </td>
    <td> COL3 </td>
</tr>
<tr>
    <td><?php echo $x?></td>
    <td><?php echo $y ?></td>
    <td><?php echo $z ?></td>
</tr>
<tr>
    <td>  </td>
    <td>  </td>
    <td>  </td>
</tr>

</table>


<table border=1> 
    <tr><td>Login</td><td> LOgin Here </td></tr>
    <tr><td>Password</td><td> Password Here </td></tr>
    <tr><td></td><td> Submit Here </td></tr>
</table>

</body>
</html>
