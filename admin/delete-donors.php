<?php
$requestid=$_GET['requestid'];
//echo "$request";

include_once("../db.php");

$sql=$conn->query("DELETE FROM donor WHERE requestid='$requestid' ;");

header("Location:blood-donors.php");




?>