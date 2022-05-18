<?php
include('../scripts/connection.php');

$sql = "DELETE FROM users WHERE id=".$_GET['id'];
$user = null;

if($conn->query($sql) === TRUE){
    header("Location:../pages/index.php"); 
} else {
    echo "Error deleting record" ;
}
$conn->close();
?>