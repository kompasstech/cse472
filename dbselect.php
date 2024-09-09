<?php 

include 'dobcon.php';

$Ssql = 'SELECT * from seucse';
$result = $conn->query($Ssql);

foreach ($result as $row)
{
  echo $row['names']. " - ". $row['sage']." - ". $row['addr']." - ". $row['bg']. "<br>";
}
?>
