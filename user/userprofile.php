<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Site favicon -->
  <link rel="shortcut icon" href="../img/blood.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .countstat{
    border:0.5px solid dimgray;
    border-radius: 5px;
    background: linear-gradient(152deg,red,violet,violet);
    text-align: center;
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
    position: relative;
    top: 0;
    bottom: 0;
  }

  main{
    max-height: 100vh;
  }



</style>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Profile</title>
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
      






      <h3 style="" class="mt-3 mb-3">Your Profile</h3>
      <?php
      $user=$_SESSION['sess_user'];
      $uid=$row['id'];

       // Initialize message variable
  $msg = "";
      
      if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    /*echo "<pre>";print_r($_FILES);
    echo $image;
    echo $uid;
    echo $user;*/

    

    // image file directory
    $target = "images/".basename($image);

    $ssql=$conn->query("SELECT * FROM userdocs WHERE username='$user' and userid='$uid';");
    if(mysqli_num_rows($ssql)>0)//means a dp already exists for user..and he wants to change that
    {
      $sqlupdate=$conn->query("UPDATE userdocs SET image='$image' WHERE userid='$uid';");
      if($sqlupdate)
      {
        echo "Update done successfully";
      }
      else
        echo "Update Failed";
    }

    else{
      $sqlinsert=$conn->query("INSERT INTO userdocs VALUES('$uid','$user','$image' );");
    }


    /*$sql = "INSERT INTO userdocs(image, image_text) VALUES ('$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);*/

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo '<script>alert("Image uploaded successfully")</script>';
    }else{
      echo '<script>alert ("Failed to upload image")</script>';

    }
  }

      ?>
      <div class="container mt-3 mb-3" style="">
        <?php
        $findimg=$conn->query("SELECT image from userdocs where username='$username' ;");
        if(mysqli_num_rows($findimg)==1)
        {
          $show2=mysqli_fetch_assoc($findimg);
          $src=$show2['image'];
        }
        else{
          $src="https://www.shutterstock.com/image-vector/businessman-avatar-profile-picture-260nw-221565274.jpg";
        }
        ?>
        <center>
          <img style="border: 5px double black;width:200px;height:200px;object-fit: contain;" src="images/<?php echo $src;?>" class="img-rounded">&nbsp;&nbsp;
          <button class="btn btn-sm btn-info" data-toggle="modal" style="outline:none;" data-target="#myModal">Change Photo</button>
        </center>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Profile Photo </h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <input type="file" name="image" style="outline: none;" class="form-control mb-3">

          
        </div>
        <div class="modal-footer">
          <button type="submit" name="upload" class="pull-right btn btn-primary">Update</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>

      
    </div>
  </div>
      </div>

      <div class="container">
      


      <form method="post">
      <input type="text" hidden name="id" class="form-control" placeholder="" value="<?php echo $row['id'];?>">
  <div class="row mb-2">
    <div class="col text-left">
      <label for="firstname">First Name</label>
      <input type="text" required name="firstname" class="form-control" placeholder="First name" value="<?php echo $row['firstname'];?>">
    </div>
    <div class="col text-left">
      <label for="midname">Middle Name</label>
      <input type="text"  name="midname" class="form-control" placeholder="Middle name" value="<?php echo $row['midname'];?>">
    </div>
    <div class="col text-left">
      <label for="lastname">Last Name</label>
      <input type="text" required name="lastname" class="form-control" placeholder="Last name" value="<?php echo $row['lastname'];?>">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="text">Username</label>
      <input type="text" disabled name="username" class="form-control" placeholder="Enter Username" value="<?php echo $row['username'];?>">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="email">Email</label>
      <input type="text"  name="email" class="form-control" placeholder="Enter Email Address" value="<?php echo $row['email'];?>">
    </div>
  </div>
  <div class="row mb-2">
    <div class="col text-left">
      <label for="phone">Contact Number</label>
      <input type="text"  name="phone" class="form-control" placeholder="Enter Contact Number" value="<?php echo $row['cno'];?>">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="altphone">Alternative Contact Number</label>
      <input type="text"  name="altphone" class="form-control" placeholder="Enter Alternative Number" value="<?php echo $row['altcno'];?>">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="age">Age</label>
      <input type="number" name="age" class="form-control" placeholder="Enter age" value="<?php echo $row['age'];?>">
    </div>
  
    <div class="col text-left">
      <label for="bg">Blood Group</label>
      <input type="text" disabled  name="bg" class="form-control" placeholder="Blood Type" value="<?php echo $row['bg'];?>">
      </select>
    </div>
    <div class="col text-left">
      <label for="rh">RH Factor</label>
      <input type="text" disabled  name="rh" class="form-control" placeholder="RH" value="<?php echo $row['rh'];?>">
    </div>
  </div>

  
  <div class="row mb-2">
    <div class="col text-left">
      <label for="disability">Disability(if any)</label>
      <input type="text"  name="disability" class="form-control" placeholder="Enter disability" value="<?php echo $row['disability'];?>">
    </div>
  </div>

  <div class="row mb-2">
    <div class="col text-left">
      <label for="address">Personal Address</label>
      <input type="text" name="address" class="form-control" placeholder="Enter personal address" value="<?php echo $row['address'];?>">
    </div>
  </div>

  <div class="row mb-2 mt-3">
  <a href="userprofile.php"><button type="cancel" name="cancel" class="btn btn-default mr-3 ml-3">Cancel</button></a>
  <button type="submit" name="submit" class="btn btn-success ">Update</button>
</div>

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
          <a href="../home.php" id="homearia"><h4 style="padding-top: 5px;">HOME</h4></a>
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
if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $fname=$_POST['firstname'];
  $midname=$_POST['midname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $cno=$_POST['phone'];
  $altcno=$_POST['altphone'];
  $age=$_POST['age'];
  $disability=$_POST['disability'];
  $address=$_POST['address'];
  //echo "<pre>";print_r($_REQUEST);


  $sql1=$conn->query("UPDATE users set firstname='$fname', midname='$midname', lastname='$lname',email='$email',cno='$cno',altcno='$altcno',age='$age',disability='$disability',address='$address' where id='$id'; ");
  //echo $sql1;
  if(!$sql1)
  {
    echo '<script>alert("Sorry! Updation Failed !");</script>';
  }
  else{
    echo '<script>alert("Profile successfully updated!");</script>';
  }

}

?>
<script type="text/javascript">
      const toggleSidebar = () => document.body.classList.toggle("open");

    </script>