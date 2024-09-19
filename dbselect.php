<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Table</title>
  
  <link rel="stylesheet" href="style/webstyle.css">

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body style="background-color:#c4dc5a;">
<h1>Data Table</h1> 

<?php 
include 'dobcon.php';

$Ssql = 'SELECT * from seucse';
$result = $conn->query($Ssql);

foreach ($result as $row)
{
  echo $row['names']. " - ". $row['sage']." - ". $row['addr']." - ". $row['bg']. "<br>";
}

$Ssql = 'SELECT * from seucse';
$result = $conn->query($Ssql);

echo "<table>";
echo "<thead> <tr><th>SL</th><th>NAME</th><th>Age</th><th>Address</th><th>BloodGroup</th></tr></thead";  
$i=1; 
while ($row = $result->fetch_assoc())
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


</body>
</html>

