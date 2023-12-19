<?php
include_once("../db.php");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM request 
	WHERE requestid LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR userid LIKE '%".$search."%' 
	OR bg LIKE '%".$search."%' 
	OR rh LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM request ORDER BY reqdate";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered" id="table-id">
						<tr>
							<th>RequestId</th>
							<th>UserId</th>
							<th>Username</th>
							<th>Blood Type</th>
							<th>Contact No.</th>
							<th>Description</th>
							<th>Date</th>
							<th></th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["requestid"].'</td>
				<td>'.$row["userid"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["bg"].' '.$row["rh"].'</td>
				<td>'.$row["contactno"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["reqdate"].'</td>
				<td><a href="delete-needers.php?requestid='.$row["requestid"].'"><button class="btn text-white btn-sm btn-danger">Delete</button></a>
				</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>