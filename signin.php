<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Site favicon -->
  <link rel="shortcut icon" href="img/blood.png">
<title>Sign Up</title>
<style type="text/css">
	body{
		background:linear-gradient(123deg,hotpink,yellow,violet);
		animation:fade 0.5s ease-in;
	}
@keyframes fade{
0%{opacity:0}
100%{opacity:1}
}

  .law:hover{
    color:hotpink;
    transition: 0.3s;
  }

  #loginlink{
    text-decoration: none;
  }

  #loginlink:hover{
    text-decoration: none;
    color:hotpink;
    transition: 0.5s;
  }




  
</style>

<center>
<div class="container">
	<div class="jumbotron mt-lg-5 mt-md-3 mt-sm-3 mt-3" style="width: 450px;">
    
		<h3>Sign Up</h3>
    <?php
    
    ?>
		<form>
      <p><small id="emailHelp" class="form-text text-muted">Create an account or <a href="login.php" id="loginlink">log in</a>
    </small></p>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="firstname">First Name</label>
      <input type="text" required name="firstname" class="form-control" placeholder="First name">
    </div>
    <div class="col text-left">
      <label for="lastname">Last Name</label>
      <input type="text" required name="lastname" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="text">Username</label>
      <input type="text" required name="username" class="form-control" placeholder="Enter Username">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="email">Email</label>
      <input type="text" required name="email" class="form-control" placeholder="Enter Email Address">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="password">Password</label>
      <div class="input-group">   
  <input type="password" required name="password" id="myInput" class="form-control" placeholder="Enter Password" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <a href="#" role="button" onclick="myFunction()" style="text-decoration: none;">
      <span class="input-group-text" id="basic-addon2">
      <i class="fa fa-eye law" style="font-size:24px"></i>
    </span></a>
  </div>
</div>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="age">Age</label>
      <input type="number" required name="age" class="form-control" placeholder="Enter age">
    </div>
    <div class="col text-left">
      <label for="bg">Blood Group</label>
      <select name="bg" class="form-control form-control">
      <option default>Select</option>
      <option>A</option>
      <option>B</option>
      <option>AB</option>
      <option>O</option>
      </select>
    </div>
    <div class="col text-left">
      <label for="rh">RH Factor</label>
      <select name="rh" class="form-control form-control">
      <option default>Select</option>
      <option>Positive</option>
      <option>Negative</option>
      </select>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="phone">Contact Number</label>
      <input type="text" required name="phone" class="form-control" placeholder="Enter Contact Number">
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once("db.php");
if(isset($_REQUEST['submit']))
{
   $fname=$_REQUEST['firstname'];
   $lname=$_REQUEST['lastname'];
   $email=$_REQUEST['email'];
   $username=$_REQUEST['username'];
   $pwd=$_REQUEST['password'];
   $age=$_REQUEST['age'];
   if($_REQUEST['bg']=='Select'){
    $bg='Not Specified';
   }
   else{
    $bg=$_REQUEST['bg'];
   }

   if($_REQUEST['rh']=='Select'){
    $rh='Not Specified';
   }
   else{
    $rh=$_REQUEST['rh'];
   }

   $cno=$_REQUEST['phone'];

   if($age<0)
   {
    echo('
      <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Age cannot be negative!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      ');
   }

   $sql=$conn->query("SELECT * FROM users WHERE username='$username'");
   $numrows=mysqli_num_rows($sql);
   if($numrows>0)
   {
    echo '
    <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Same username already exists!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
   }
   else{
    $sql=$conn->query("INSERT INTO users(firstname,lastname,username,email,password,age,bg,rh,cno) VALUES('$fname','$lname','$username','$email','$pwd','$age','$bg','$rh','$cno'); ");
    if($sql)
    {
      //header("Location:login.php");
      echo '<script>window.location.href = "login.php";</script>';
    }
    else{die();}
   }



   





   //echo "<pre>";print_r($_REQUEST);
}
?>
	</div>
</div></center>

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
</script>

