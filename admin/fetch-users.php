<?php
include_once("../db.php");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM users 
	WHERE id LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR firstname LIKE '%".$search."%'
	OR midname LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%'
	OR cno LIKE '%".$search."%' 
	OR bg LIKE '%".$search."%' 
	OR rh LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users ORDER BY logindate";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive" style="font-size:small;">
					<table id="table-id" style="border-radius:25px;border:solid white;" class="table bg-white">
						<tr>
							<th>Id</th>
							<th>Username</th>
							<th>Full Name</th>
							<th>Blood Type</th>
							<th>Contact No.</th>
							<th>Last Login Date</th>
							<th>Last Login Time</th>
							<th></th>
							<th></th>
						</tr>';
		//href="delete-users.php?requestid='.$row["id"].'"
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["firstname"].' '.$row["midname"].' '.$row["lastname"].'</td>
				<td>'.$row["bg"].' '.$row["rh"].'</td>
				<td>'.$row["cno"].'</td>
				<td>'.$row["logindate"].'</td>
				<td>'.$row["logintime"].'</td>
				<td><a href="view-users.php?requestid='.$row["id"].'"><button style="outine:none;" class="btn text-white btn-sm btn-info">View & Edit</button></a>
				<td><a href="delete-users.php?requestid='.$row["id"].'"><button style="outine:none;" class="text-white btn btn-sm btn-danger" >Delete</button></a>
				
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