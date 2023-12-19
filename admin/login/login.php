<!-----admin login----->
<!DOCTYPE html>
<html>
<head>
	<title>Adminitrator Login</title>
	<!-- Site favicon -->




	<link rel="shortcut icon" href="../../img/blood.png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">

	<link rel="stylesheet" href="fonts/font.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<style type="text/css">
body{
animation:fade 0.6s ease-in;
}
	@keyframes fade{
0%{opacity:0}
100%{opacity:1}
}	

.signin{
	transition: 0.4s;
}
	.signin:hover{
		/*background: cyan;*/
		box-shadow: 0px 0px 10px cyan;
		transition: 0.4s;
	}
	.signin:focus{
		background: cyan;
		box-shadow: 0px 0px 5px cyan;
		transition: 1.4s;
	}
</style>

<body>

	
	<main class="cd-main">
		<section class="cd-section index visible ">
			<div class="cd-content style1" style="padding: 30px 15px 0px;">
				<div style="height:570px" class="login-box d-md-flex align-items-center">
					<h1 class="title">Welcome Back</h1>
					<h3 class="subtitle" style="margin-top: 10px;">Have a great journey ahead!</h3>
					<div class="login-form-box" style="height:400px">
						<div class="login-form-slider">
							<!-- login slide start -->
							<div class="login-slide slide login-style1">
								<form>
									<div class="form-group">
										<label class="label">User name</label>
										<input type="text" required name="username" placeholder="Enter name" class="form-control">
									</div>
									<div class="form-group">
										<label class="label">Password</label>
										<div class="input-group">
											<input type="password" required name="password" class="form-control" id="myInput" placeholder="Enter password" value="">
											<div class="input-group-append work" id="div" onmouseover="glowup()" onmouseout="glowdown()" style="border: 0px solid white;border-top-right-radius:50%;border-bottom-right-radius:50%;">
      										<span class="input-group-text work" id="eye" onclick="myFunction()" style="border: 1px solid white;border-top-right-radius:50%;
	border-bottom-right-radius:50%;
	"><i class="fa fa-eye" style="font-size: 30px;text-align: left;"></i></span>
    										</div>
										</div>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Remember me</label>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" class="submit signin" value="Sign In">
									</div>
								</form>
<?php
include_once("../../db.php");
if(isset($_REQUEST['submit']))
{
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$sql=$conn->query("SELECT current_timestamp as a;");
		$show=mysqli_fetch_assoc($sql);
		$newlogintime=$show['a'];
		//echo $show['a'];
		$sqllogin=$conn->query("SELECT * FROM admin WHERE username='$username' and password='$password' ;");
		$numrows=mysqli_num_rows($sqllogin);
		if($numrows==1)
		{
			session_start();
      $_SESSION['username']=$username;
      $updatetime=$conn->query("UPDATE admin SET logintime='$newlogintime' WHERE username='$username';");
      //header("Location:../dashboard.php");
      echo '<script>window.location.href = "../dashboard.php";</script>';

		}
		else{
			echo('
      <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Wrong Username or Password!</strong><br>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  ');
		}

	}

?>
								
								
								
							</div>
							<!-- login slide end -->
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



function glowup()
{
	document.getElementById('eye').style.color="cyan";
	document.getElementById('eye').style.transition="0.4s";
}

function glowdown()
{
	document.getElementById('eye').style.color="gray";
	document.getElementById('eye').style.transition="0.4s";
}
</script>


