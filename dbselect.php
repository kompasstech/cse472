<?php 

include 'dobcon.php';

$Ssql = 'SELECT * from seucse';
$result = $conn->query($Ssql);

foreach ($result as $row)
{
  echo $row['names']. " - ". $row['sage']." - ". $row['addr']." - ". $row['bg']. "<br>";
}

 echo "<table border='1'>";
 echo "<thead> <tr><th>SL</th><th>NAME</th><th>Age</th><th>Address</th><th>BloodGroup</th></tr></thead";  
 while ($row = $res->fetch_assoc())
 {
    //echo "<br>";
    //echo $row['names']; 
    //echo $i.">>". $row['names']."++++".$row['sage']."++++".$row['addr']."++++".$row['bg'];
    
    echo "<tr>";
    echo "<td>".$i."</td><td>".$row['names']."</td><td>".$row['sage']."</td><td>".$row['addr']."<td>".$row['bg']."</td>";
    echo "</tr>";
    $i++;
  }

 echo "</table>"; 

?>
 