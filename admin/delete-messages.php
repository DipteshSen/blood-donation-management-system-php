<?php
$messegeid=$_GET['messegeid'];
$userid=$_GET['userid'];

include_once("../db.php");
$serp=$conn->query("DELETE FROM messages WHERE messageid='$messegeid' ;");
/*if($serp)
{
	echo '<script>alert("Message deleted successfully !");</script>';
}
else{
	echo '<script>alert("Message deletion failed!");</script>';
}*/

header("Location:view-users.php?requestid=".$userid);



?>