<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Site favicon -->
  <link rel="shortcut icon" href="../img/blood.png">
<link rel="stylesheet" type="text/css" href="dashboard.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .countstat{
    border:0.5px solid dimgray;
    border-radius: 5px;
    background: linear-gradient(152deg,red,violet,violet);
    text-align: center;
  }
  body{
    /*background-color: #f0b6d4;*/
    background: url("images/wallpaper.jpg");
  
  }
  table{
    background: linear-gradient(red,violet);
  }

  main{
    max-height: 600px;
  }

  .count{
    animation: counter ;
  }

  .tablinks{
    text-decoration: none;
    color: black;
    transition: 0.5s;
  }
  .tablinks:hover{
    text-decoration: none;
    color: darkred;
    transition: 0.5s;
  }

  nav{
    box-shadow: 0px 0px 5px orangered;
  }
</style>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body style="background: url('images/wallpaper.jpg');">
    <frameset cols="20%,80%">
      <frame style="overflow-y: auto;">
    <main style="margin-left: 100px;overflow-y: auto;">
      <h3 style="" class="mt-3 mb-3">Dashboard</h3>

      <?php session_start();
      if($_SESSION['sess_user'])
      {
        echo "<h5>Welcome !".' '.$_SESSION['sess_user'].'</h5>';
        $username=$_SESSION['sess_user'];
      }
      else{
        header("Location:../login.php");
      }

        ?>
<!--Cards of stats-->      
<div class="container" style="display: inline-flex;">
  <div class="row" style="width:100%">
  <div class="col-lg-3 col-md-4 col-sm-9 col-xs-6 mb-3 mr-3 countstat">
    <center>
      <h1 class="display-4">
        <img src="../img/solidarity.png" style="width: 64px; height: 64px;">
      <span class="num" data-val="223">0</span></h1>
      <p ><small>ACTIVE DONORS</small></p>
    </center>
    <hr>
    <p class="hidden-xs hidden-sm"><a class="tablinks" href="donate-blood.php">Become a Donor</a></p>
  </div>
  
  <div class="col-lg-3 col-md-4 col-sm-9 col-xs-6 mb-3 mr-3 countstat">
    <center>
      <h1 class="display-4">
        <img src="../img/life-saving.png" style="width: 64px; height: 64px;">
      <span class="num" data-val="568">0</span>
    </h1>
      <p><small>LIVES SAVED</small></p>
    </center>
    <hr>
    <p><a class="tablinks" href="request-for-blood.php">Need Blood?</a></p>

    

  </div>

  <div class="col-lg-3 col-md-4 col-sm-9 col-xs-6 mb-3 mr-3 countstat">
    <center>
      <h1 class="display-4">
        <img src="../img/team.png" style="width: 64px; height: 64px;">
      <span class="num" data-val="123">0</span></h1>
      <p><small>MEMBERS</small></p>
    </center>
    <hr>
    <p><a class="tablinks" href="../home.php#part5">Feedback / Complain</a></p>
  </div>
</div>
</div>
<!-- Cards end here----->


<!-------notifications----------->

<div class="container pull-left" style="translate:-13px">
  <h3>Notifications</h3>
  <?php
  include_once("../db.php");
      $viewall=$conn->query("SELECT * FROM messages WHERE username='$username'  order by sendtime ;");
      if(mysqli_num_rows($viewall)>0)
      {
        //echo "<pre>";print_r(mysqli_fetch_assoc($viewall));

        echo '
    <div style="overflow-x:auto;" id="mytable">
      <table style="border-radius:5px;" class="table text-light table-hover">
  <thead>
    <tr>
      <th scope="col">Message Id</th>
      <th scope="col">User Id</th>
      <th scope="col">Username</th>
      <th scope="col">Description</th>
      <th scope="col">Sent on</th>
    </tr>
  </thead>
  <tbody>
      ';
while($rows=mysqli_fetch_assoc($viewall))
    {
      ?>
      <tr>
      <th scope="row"><?php echo $rows['messageid'];?></th>
      <td><?php echo $rows['userid'];?></td>
      <td><?php echo $rows['username'];?></td>
      <td><?php echo $rows['description'];?></td>
      <td><?php echo $rows['sendtime'];?></td>
    </tr>


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
            <!--noti.svg-->
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

let valueDisplays = document.querySelectorAll(".num");
let interval = 5000;
valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});
    </script>
  </body>
</html>
