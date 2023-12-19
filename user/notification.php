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
  table{
    background: linear-gradient(red,purple);
    color: white;
  }
  

  
</style>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Announcement</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <frameset >
      <frame>
    <main style="margin-left: 100px;">


<!-------notifications----------->

<div class="container">
  <center><h3 style="" class="mt-3 mb-3">Announcements</h3></center>
  <?php
  session_start();
  if($_SESSION['sess_user'])
  {
    $username=$_SESSION['sess_user'];
  }else{
    header("Location:../login.php");
  }
  include_once("../db.php");
  $sql=$conn->query("SELECT * from notification order by time desc;");
  $numrows=mysqli_num_rows($sql);
  if($numrows>0)
  {
    echo '
    <div style="overflow-x:auto;">
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ReqId</th>
      <th scope="col">Announcement</th>
      <th scope="col">Blood Type</th>
      <th scope="col">RH Factor</th>
      <th scope="col">Announcement Time</th>
      <th scope="col">Response</th>
    </tr>
  </thead>
  <tbody>
      ';
    while($row=mysqli_fetch_assoc($sql))
    {
      ?>
      <form method="post">
      <input type="hidden" name="requestid" value="<?php echo $row['requestid'];?>">
      <tr>
      <th scope="row"><?php echo $row['requestid'];?></th>
      <td><?php echo $row['announcement'];?></td>
      <td><?php echo $row['bg'];?></td>
      <td><?php echo $row['rh'];?></td>
      <td><?php echo $row['time'];?></td>
      <td>
        <button type="submit" id="<?php echo $row['requestid'];?>" name="submit" class="btn btn-sm btn-success">I'll Help</button>
      </td>
    </tr>
  </form>


    <?php
    }
    echo '
      </tbody>
</table>
</div>
'; 
  }
  else{
    echo '
      <br><div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>No Announcements for now !</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
      ';

  }

  ?>
</div>
<!--------notifications end here---------->
<?php
$username=$_SESSION['sess_user'];
$sqlnew=$conn->query("SELECT * FROM response WHERE username='$username' ;");
if(mysqli_num_rows($sqlnew)>0)
{
  while($bruh=mysqli_fetch_assoc($sqlnew))
  {
    $rigid=$bruh['reqid'];
    $a='Applied';
    echo'<script>
    document.getElementById("'.$rigid.'").disabled = true;
    document.getElementById("'.$rigid.'").value = '.$a.';
    </script>';
  }
}


if(isset($_POST['submit']))
{
  
$requestid=$_POST['requestid'];
  
  //echo $requestid;
  //echo "<pre>";print_r($_SESSION);
  $sqlfind=$conn->query("SELECT * FROM users WHERE username='$username'; ");
  $findnumrows=mysqli_num_rows($sqlfind);
  if($findnumrows==1)
  {
    $rows=mysqli_fetch_assoc($sqlfind);
    $userid=$rows['id'];
    $userfname=$rows['firstname'];
    $usermidname=$rows['midname'];
    $userlname=$rows['lastname'];
    $userbg=$rows['bg'];
    $userrh=$rows['rh'];
    $usercno=$rows['cno'];

    $sql1=$conn->query("SELECT * FROM response WHERE username='$username' and reqid='$requestid' ;");
    if(mysqli_num_rows($sql1)==1)
    {
      echo '<script> 
      alert("You already applied for this");
      </script>';
    }
    else{
    $sqlresponse=$conn->query("INSERT INTO response VALUES('$username','$requestid','$userid','$userfname','$usermidname','$userlname','$userbg','$userrh','$usercno') ;");
    if($sqlresponse)
    {
      echo '
      <script>
      alert("Thanks for your help! Our team will contact you !");
      </script>
      ';
    }
    else{
      echo '<script>alert("Sorry some error occured!");</script>';
    }
  }
  }
  else{
    echo "username not found";
  }

}


?>



    </main>
  </frame>
    <frame>
    <nav class="sidebar">
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
      const toggleSidebar = () => document.body.classList.toggle("open");


    </script>
  </body>
</html>
