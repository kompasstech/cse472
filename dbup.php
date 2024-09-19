<?php 
include 'dobcon.php';

$Usql = "Update seucse set addr='Jessor' where id=1";
$res = $conn->query($Usql);

if ($res) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ". $conn->error;
}

$conn->close();