<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <?php session_start(); include_once("../db.php");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Your Profile</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <h3 class="text-dark mt-2">Admin Panel</h3>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!--<li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <?php 
      if($_SESSION['username']){
        //echo $_SESSION['username'];
        $username=$_SESSION['username'];
        $sql=$conn->query("SELECT * from admin WHERE username='$username';");
        $numrows=mysqli_num_rows($sql);
        if($numrows==1)
      {
        $row=mysqli_fetch_assoc($sql);

      }
      }
      else{
        
        echo '<script>window.location="login/login.php";</script>';
      }?>
                            <?php
            include_once("../db.php");

            $slp=$conn->query("SELECT image FROM admindocs WHERE username='$username' ;");
            if(mysqli_num_rows($slp)==1)
            {
              $d=mysqli_fetch_assoc($slp);
              $se='images/'.$d['image'];
            }
            else{
              $se="../img/user-circle-alt.svg";
            }

            ?>
                            <a class="profile-pic" href="#">
                                <img src="<?php echo $se;?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">
                                        <?php 
      echo $_SESSION['username'];?>
                                            
                                        </span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="notification.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Announcements</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blood-requests.php"
                                aria-expanded="false">
                                <i class="fa fa-burn" aria-hidden="true"></i>
                                <span class="hide-menu">Blood Requests</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blood-donors.php"
                                aria-expanded="false">
                                <i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
                                <span class="hide-menu">Blood Donors</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manage-users.php"
                                aria-expanded="false">
                                <i class="fas fa-tv" aria-hidden="true"></i>
                                <span class="hide-menu">Manage Users</span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="change-password.php"
                                aria-expanded="false">
                                <i class="fas fa-key" aria-hidden="true"></i>
                                <span class="hide-menu">Change Password</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profilelol.php"
                                aria-expanded="false">
                                <i class="fas fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Your Profile</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="logout.php"
                                class="btn d-grid btn-danger text-white" target="_blank">
                                Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Your Profile</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"><?php 
      
        echo "<h5>Welcome !".' '.$_SESSION['username'].'</h5>';
        

        ?></a></li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <?php
      $user=$_SESSION['username'];
      $uid=$row['adminid'];

       // Initialize message variable
  $msg = "";
      
      if (isset($_POST['upload']) &&  !empty($_POST['image']))
      //if(!empty($_POST['image'])) 
      {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    /*echo "<pre>";print_r($_FILES);
    echo $image;
    echo $uid;
    echo $user;*/

    

    // image file directory
    $target = "images/".basename($image);

    $ssql=$conn->query("SELECT * FROM admindocs WHERE username='$user' and userid='$uid';");
    if(mysqli_num_rows($ssql)>0)//means a dp already exists for user..and he wants to change that
    {
      $sqlupdate=$conn->query("UPDATE admindocs SET image='$image' WHERE userid='$uid';");
      if($sqlupdate)
      {
        echo "Update done successfully";
      }
      else
        echo "Update Failed";
    }

    else{
      $sqlinsert=$conn->query("INSERT INTO admindocs VALUES('$uid','$user','$image' );");
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
      <?php
        $findimg=$conn->query("SELECT image from admindocs where username='$username' ;");
        if(mysqli_num_rows($findimg)==1)
        {
          $show2=mysqli_fetch_assoc($findimg);
          if($show2['image']=='')
            $src="https://www.shutterstock.com/image-vector/businessman-avatar-profile-picture-260nw-221565274.jpg";
        else $src=$show2['image'];
        }
        else{
          $src="https://www.shutterstock.com/image-vector/businessman-avatar-profile-picture-260nw-221565274.jpg";
        }
        ?>
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="images/<?php echo $src;?>"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><?php echo $row['firstname'].' '.$row['midname'].' '.$row['lastname']; ?></h4>
                                        <h5 class="text-white mt-2">Admin Id : <?php echo $row['adminid']; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <!--<div class="col-md-4 col-sm-4 text-center">
                                    <h1>258</h1>
                                </div>-->
                                <div class="col-md-4 col-sm-4 text-center">
                                   <center><button class="btn btn-sm btn-info" id="buttonopen"  style="outline:none;">Change Photo</button></center>
                                </div>
                                <!--<div class="col-md-4 col-sm-4 text-center">
                                    <h1>556</h1>
                                </div>-->
                            </div>
                            <div id="mkform" class="mt-3" style="display: none;">
                            <form method="post" enctype="multipart/form-data" class="">
                                <input type="hidden" name="size" value="1000000">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Update Profile Picture</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" placeholder="Johnathan Doe"
                                                class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" name="upload" class="btn btn-sm btn-success">
                                                <i class="fa fa-check"></i>
                                                &nbsp;Update</button>
                                            <button class="text-dark btn btn-sm btn-default" id="buttonclose"><i class="fa fa-times-circle"></i>
  Close
</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post">
                                    <input type="text" hidden name="id" class="form-control" placeholder="" value="<?php echo $row['adminid'];?>">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">First Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="firstname" placeholder="First name" value="<?php echo $row['firstname'];?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Middle Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="midname" placeholder="Middle name" value="<?php echo $row['midname'];?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Last Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text"  name="lastname" placeholder="Last name" value="<?php echo $row['lastname'];?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">User Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input disabled type="text"  name="username" placeholder="Enter Username" value="<?php echo $row['username'];?>"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="email"  placeholder="Enter Email Address" value="<?php echo $row['email'];?>" 
                                                class="form-control p-0 border-0" name="example-email"
                                                >
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Phone No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="phone" placeholder="Enter Contact Number" value="<?php echo $row['cno'];?>" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Alternative Phone No</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                               name="altphone" placeholder="Enter Alternative Number" value="<?php echo $row['altcno'];?>"  class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Age</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                               name="age" placeholder="Enter age" value="<?php echo $row['age'];?>"  class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Disability(if any)</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                                name="disability" placeholder="Enter disability" value="<?php echo $row['disability'];?>" class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Personal Address</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" 
                                                name="address" placeholder="Enter personal address" value="<?php echo $row['address'];?>"  class="form-control p-0 border-0">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Update Profile</button>
                                            <button name="cancel" type="submit" class="btn btn-default text-dark">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>
<script type="text/javascript">
      $(document).ready(function(){
  $('#buttonopen').click(function(){
    $('#mkform').slideDown();
  });
  $('#buttonclose').click(function(){
    $('#mkform').slideUp();
  });

  $('#mybtn').click(function(){
    $('#mytable').slideToggle();
  });
});
    </script>
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


  $sql1=$conn->query("UPDATE admin set firstname='$fname', midname='$midname', lastname='$lname',email='$email',cno='$cno',altcno='$altcno',age='$age',disability='$disability',address='$address' where adminid='$id'; ");
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