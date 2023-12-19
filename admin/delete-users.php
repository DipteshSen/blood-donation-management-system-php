<?php
$requestid=$_GET['requestid'];

echo "$requestid";

include_once("../db.php");

$sql=$conn->query("DELETE FROM users WHERE id='$requestid' ;");



header("Location:manage-users.php");




?>