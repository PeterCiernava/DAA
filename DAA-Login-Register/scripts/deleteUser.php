<?php
require_once('../scripts/connection.php');

$sql = "DELETE FROM users WHERE id=".$_GET['id'];

$users = null;

if($conn->query($sql)===TRUE){
echo "Record deleted succesfully";

}else{
echo "Task failed succesfully: ".$conn->error;

}

