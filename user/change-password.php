<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Site favicon -->
  <link rel="shortcut icon" href="../img/blood.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  main{
    max-height: 600px;
  }

  body{
    
  }



</style>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <frameset cols="20%,80%">
      <frame style="overflow-y: auto;">
    <main style="margin-left: 100px;overflow-y: auto;">
      <?php
      session_start();
      //echo "<pre>";print_r($_SESSION);
      include_once("../db.php");
      $username=$_SESSION['sess_user'];
      $sql=$conn->query("SELECT * from users WHERE username='$username';");
      $numrows=mysqli_num_rows($sql);
      if($numrows==1)
      {
        $row=mysqli_fetch_assoc($sql);

      }
      else{
        header("Location:../login.php");
      }


      ?>





      <h3 style="" class="mt-3 mb-3">Change Password</h3>

      <div class="container" style="width:400px;">
      <form method="post">
      <input type="text" hidden name="id" class="form-control" placeholder="" value="<?php echo $row['id'];?>">
  
  
      <input type="text" hidden name="username" class="form-control" placeholder="Enter Username" value="<?php echo $row['username'];?>">
  
  <div class="row mb-2">
    <div class="col text-left">
      <label for="curr">Current Password</label>
      <input type="text"  name="curr" class="form-control" placeholder="Enter Current Password" >
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="new">New Password</label>
      <input type="text"  name="new" class="form-control" placeholder="Enter New Password" >
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="conf">Confirm Password</label>
      <input type="text" name="conf" class="form-control" placeholder="Confirm Password" >
    </div>
  </div>

  <div class="row mb-2 mt-3">
  <a href="change-password.php"><button type="cancel" name="cancel" class="btn btn-default mr-3 ml-3">Cancel</button></a>
  <button type="submit" name="submit" class="btn btn-success ">Update</button>
</div>
</form>
<br><br><br>







      </div>


    </main>
  </frame>
    <frame>
    <nav class="sidebar ">
      <div class="sidebar-inner">
        <header class="sidebar-header">
          <button
            type="button"
            class="sidebar-burger"
            onclick="toggleSidebar()"
            style="transition: 0.5s;border:none;outline: none;"
          ></button>
          <!--<img src="https://raw.githubusercontent.com/frontend-joe/css-sidebars/2e9e0d71cc44e88acec1617897224c5289240001/sidebar-1/assets/blocklord-logo.png" class="sidebar-logo" />-->
          <a href="../home.php" id="homearia"><h5 style="padding-top: 13px;">HOME</h5></a>
        </header>
        
          <nav class="sidebar-menu">
          <a href="dashboard.php" style="text-decoration: none;"><button type="button" class="button">
            <img id="img" src="../img/house.svg" />
            <span id="span">Dashboard</span>
          </button></a>
          <a href="notification.php" style="text-decoration: none;">
          <button type="button" class="button" class="has-border">
            <img id="img" src="../img/noti.svg" />
            <span id="span">Announcements</span>
          </button></a>
          <a href="request-for-blood.php" style="text-decoration: none;">
          <button type="button" class="button">
            <img id="img" src="../img/blood-svgrepo-com.svg" />
            <span id="span">Request for Blood</span>
          </button></a>
          <a href="donate-blood.php" style="text-decoration: none;">
          <button type="button" class="button">
            <img id="img" src="../img/give.png" />
            <span id="span">Donate Blood</span>
          </button></a>
          
          <a href="change-password.php" style="text-decoration: none;">
          <button type="button" class="button">
            <img id="img" src="../img/password.png" />
            <span id="span">Change Password</span>
          </button></a>
          <a href="../logout.php" style="text-decoration: none;"><button type="button" class="button">
            <img id="img" src="../img/sign-out-thin-white.svg" />
            <span id="span">Log out</span>
          </button></a>
          <a href="userprofile.php" style="text-decoration: none;">
          <button type="button" class="button">

            <?php
            include_once("../db.php");

            $slp=$conn->query("SELECT image FROM userdocs WHERE username='$username' ;");
            if(mysqli_num_rows($slp)==1)
            {
              $d=mysqli_fetch_assoc($slp);
              $se='images/'.$d['image'];
            }
            else{
              $se="../img/user-circle-alt.svg";
            }

            ?>
            <img id="img" src='<?php echo $se;?>' class="img-circle" style="translate:-5px ;width:35px;height:35px;border: 1px double black;border-radius: 50%;" alt="<?php echo $se;?>">
            <span id="span">Your Profile</span>
          </button></a>
          
        </nav>
      </div>
    </nav>
  </div>
</frame>

</frameset>

    <script type="text/javascript">
      
    </script>
  </body>
</html>

<?php
include_once("../db.php");
if(isset($_POST['submit']))
{

  if(!empty($_POST['curr']) || !empty($_POST['new']) ||!empty($_POST['conf']) )
  {
    $id=$_POST['id'];
    $curr=$_POST['curr'];
    $new=$_POST['new'];
    $conf=$_POST['conf'];

    $sql=$conn->query("SELECT password from users where id='$id' ; ");
    if(mysqli_num_rows($sql)==1)
    {
      $row=mysqli_fetch_assoc($sql);
      if($row['password']==$curr)
      {
        if($new==$conf)
        {
          $sqlnew=$conn->query("UPDATE users set password='$new' ;");
          if(!$sqlnew)
        {
    echo '<script>alert("Sorry! Updation Failed !");</script>';
  }
  else{
    echo '<script>alert("Password successfully updated!");</script>';
  }

        }
        else{
          echo '
    <br><div style="margin-left:100px;align-self:center; width:400px" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Cofirm Paswword must be same as New Password ! </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
        }
      }
      else{
        echo '
    <br><div style="margin-left:100px;align-self:center; width:400px" class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Wrong Password!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    ';
      }
    }
  }
  
  /*if(mysql_error($sql1))
  {
    echo '<script>alert("Sorry! Updation Failed !");</script>';
  }
  else{
    echo '<script>alert("Profile successfully updated!");</script>';
  }*/

}

?>
<script type="text/javascript">
      const toggleSidebar = () => document.body.classList.toggle("open");

    </script>