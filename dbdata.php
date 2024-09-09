<?php
// open connec
include 'dobcon.php';

//DB Operations 

//$SQLup = "UPDATE std2 SET password='iSrAt' where email='youreamil@dot.com"; // Password change like this way
$SQLup = "UPDATE seucse SET names='iSrAt' where sage=18"; 
$conn->query($SQLup);

// Pulling data from the Database 
$SQLsw ="SELECT names,sage,addr,bg from seucse"; 
$res = $conn->query($SQLsw);

//echo $res; 

print_r($res); 
//var_dump($res); 


while ($row = $res->fetch_assoc())
{
    echo "<br>";
    echo "<h4>".$row['names']."</h4>"; 
}

$totage=0; 
foreach ($res as $row)
{
    echo "<br>";
    //echo $row['names']; 
    echo $row['names']."==".$row['sage']."==".$row['addr']."==".$row['bg'];
    $totage = $totage + $row['sage']; 
}

echo "<br> Total Age =".$totage; 


echo "<table border=1>";
echo "<tr><th>NAME</th> <th> AGE </th> <th> Address </th> <th> Blood Group</th> </tr>";

foreach ($res as $row)
{ 
    echo "<tr>"; 
    echo "<td>".$row['names']."</td><td>".$row['sage']."</td><td>".$row['addr']."</td><td>".$row['bg']."</td>";
    echo "</tr>"; 

    $totage = $totage + $row['sage']; 
}
echo "</table>";

echo "<br> Total Age =".$totage; 



// close connection
$conn->close(); 

?>
