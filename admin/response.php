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
    <title>Responses</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/blood.png">
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
                        <h4 class="page-title"><a href="notification.php">Announcements </a><i class=" fas fa-chevron-right"></i> Responses</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">
                                <?php 
      
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Responses List</h3>
                            <?php include_once("../db.php"); ?>
                            <?php
$reqid=$_POST['requestid'];
$smol=$conn->query("SELECT requestid,announcement FROM notification WHERE requestid='$reqid' ; ");
if(mysqli_num_rows($smol)==1)
{
    $sham=mysqli_fetch_assoc($smol); ?>
                            <p class="text-muted">Request Id: <code style="font-size: 15px;"><?php echo $sham['requestid'];?></code></p>
                            <p class="text-muted">Announcement: <code style="font-size: 15px;"><?php echo $sham['announcement'];}?></code></p>
                            <div class="table-responsive">
                                <?php
                                if(isset($_POST['submit']))
{
    
    $pp=$conn->query("SELECT username,id,firstname,midname,lastname,bg,rh,cno  FROM response where reqid='$reqid' ;");
    if(mysqli_num_rows($pp)>0)
    {
        echo '
    <div style="overflow-x:auto;">
      <table class="table bg-light table-hover">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">UserId</th>
      <th scope="col">Full Name</th>
      <th scope="col">Blood Type</th>
      <th scope="col">Contact No.</th>
    </tr>
  </thead>
  <tbody>
      ';
        while($room=mysqli_fetch_assoc($pp))
        {
            $fullname=$room['firstname'].' '.$room['midname'].' '.$room['lastname'];
            $blood=$room['bg'].' '.$room['rh'];
            ?>
            <tr>
      <th scope="row"><?php echo $room['username'];?></th>
      <td><?php echo $room['id'];?></td>
      <td><?php echo $fullname;?></td>
      <td><?php echo $blood;?></td>
      <td><?php echo $room['cno'];?></td>
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
  <strong>No Responses for now !</strong>
  
</div>
      ';
    }
}
                                ?>
                            </div>
                            <?php
if(isset($_REQUEST['delete']))
{
  $del=$conn->query("DELETE FROM response WHERE reqid='$reqid' ;");
  $del2=$conn->query("DELETE FROM notification WHERE requestid='$reqid' ;");
  if($del && $del2)
  {
    echo '<script>alert("Announcement terminated !");</script>';
    echo '<script>window.location="notification.php";</script>';
  }
}


?>
                        </div>
                    </div>
                </div>
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

</html>