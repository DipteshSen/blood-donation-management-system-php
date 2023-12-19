<?php
$subject=$_GET['subject'];
$messege=$_GET['messege'];
/*echo $subject."<br>";
echo $messege;*/

include_once("../db.php");
$delete=$conn->query("DELETE FROM feedbacks WHERE subject='$subject' and messege='$messege' ;");
if($delete)
{
	header("Location:feedbacks.php");
	echo('
      <br><div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong style="font-size:20px;font-family:Times New Roman;">There is nothing for now!</strong><br>
  <p></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    
</div>
  ');
}
else
{
	header("Location:feedbacks.php");
	echo('
      <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong style="font-size:20px;font-family:Times New Roman;">Some error occured!</strong><br>
  <p></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    
</div>
  ');
}
?>