<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Site favicon -->
  <link rel="shortcut icon" href="img/blood.png">
<title>User Log In</title>
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
    
    <h3>Log In</h3>
    <?php
    
    ?>
    <form>
      <p><small id="emailHelp" class="form-text text-muted">Dont Have an account? <a href="signin.php" id="loginlink">Sign Up</a> now
    </small></p>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="username">Username</label>
      <input type="text" required name="username" class="form-control" placeholder="Enter username">
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

 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once("db.php");
if(isset($_REQUEST['submit']))
{
   $username=$_REQUEST['username'];
   
   $pwd=$_REQUEST['password'];

   $sql=$conn->query("SELECT * FROM users WHERE username='$username' and password='$pwd'; ");
   $numrows=mysqli_num_rows($sql);

   if($numrows==1)
   {
      session_start();
      $_SESSION['sess_user']=$username;
      $sqldate=$conn->query("SELECT current_date as a;");
      $show=mysqli_fetch_assoc($sqldate);
      $newlogindate=$show['a'];

      $sqltime=$conn->query("SELECT current_time as a;");
      $show1=mysqli_fetch_assoc($sqltime);
      $newlogintime=$show1['a'];

      $updatetime=$conn->query("UPDATE users SET logintime='$newlogintime',logindate='$newlogindate' WHERE username='$username' ;");

      header("Location:user/dashboard.php");
   }
   else{
    echo('
      <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>There was a problem!</strong><br>
  <p>We cannot find an account with that username</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  ');

   }
   

  /* if($age<0)
   {
    echo('
      <br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Age cannot be negative!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      ');
   }*/




   





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

