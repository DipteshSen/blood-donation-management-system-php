<!DOCTYPE html>
<html dir="ltr" lang="en">
<style type="text/css">
    .pagination li:hover{
    cursor: pointer;
}

.pn{
    padding:5px 12px;
    background-color: #ed0c40;
    color:whitesmoke;
    margin-top: 10px;
    margin-right: 2px;
    font-family: sans-serif;
    /*font-weight: bold;*/
}

.pn:hover, .pn:active{
    opacity: 50%;
}
</style>
<head>
    <?php include_once("../db.php");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/blood.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <?php session_start(); ?>
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
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            
                        </li>
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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">
                                    <?php 
      
        echo "<h5>Welcome !".' '.$_SESSION['username'].'</h5>';
        

        ?>
                                </a></li>
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
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-success">102</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">233</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">11</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!----------->
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group A+</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_a-positive_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-danger">59</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group A-</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_a-negative_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">86</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group B+</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_b-positive_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">91</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group B-</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_b-negative_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-primary">121</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-----2nd row of blood stat----->
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group AB+</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_ab-positive_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-danger">169</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group AB-</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash2"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_ab-negative_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-purple">59</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group O+</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_o-positive_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-primary">71</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Group O-</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><img class="" style="height:64px;width: 75px;" src="https://www.blood.ca/sites/default/files/icon/blood-types_o-negative_blood-drop.jpg">
                                    </div>
                                </li>
                                <li class="ms-auto"><span class="counter text-info">45</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent Comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="card white-box p-0">
                            <div class="card-body">
                                <h3 class="box-title mb-0">Recent Feedbacks</h3>

                            </div>
                            <div class="comment-widgets">
                                <?php
                                include_once("../db.php");
                                $sql=$conn->query("SELECT * FROM feedbacks;");
                                if(mysqli_num_rows($sql)>0)
                                {
                                    echo '
    <div style="overflow-x:auto;">
      <table style="font-size:xx-small;" class="table text-light table-hover" id= "table-id">
  <thead>
    <tr>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody style="font-size: xx-small;">
      ';?>
      <div style="width:60%;margin-left: 20px;">
       <h5>Select Number Of Rows</h5>
                <div class="form-group">    <!--        Show Numbers Of Rows        -->
                    <select class  ="form-control" name="state" id="maxRows">
                         <option value="5000">Show ALL Rows</option>
                         <option value="5">5</option>
                         <option value="10">10</option>
                         <option value="15">15</option>
                         <option value="20">20</option>
                         <option value="50">50</option>
                         <option value="70">70</option>
                         <option value="100">100</option>
                        </select>
                    
                </div></div>
      <?php
                                    while($row=mysqli_fetch_assoc($sql))
                                {
                                ?>

                            <!-- Comment Row -->
                            <tr><td>
                                <div class="d-flex flex-row comment-row p-3 mt-0">
                                    <!--<div class="p-2"><img src="plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle"></div>-->

                                    <div class="comment-text ps-2 ps-md-3 w-100">
                                        <h5 class="font-medium"><?php echo $row['name'];?></h5>
                                        <p class="text-muted"><?php echo $row['email'];?></p>
                                        <p>Feedback Id : <?php echo $row['feedbackid'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject : <?php echo $row['subject'];?>
                </p>
                                        <span class="mb-3 d-block">Message : <?php echo $row['messege'];?> </span>
                                        <div class="comment-footer d-md-flex align-items-center">
                                             <a href="mailto:<?php echo $row['email']; ?>"><span class="badge bg-primary rounded">Reply</span></a>
                                             <a href="deletefeedbacks.php?subject=<?php echo $row['subject'];?>&messege=<?php echo $row['messege'];?>">&nbsp;&nbsp;
                  <span class="badge rounded bg-danger pull-right text-white ml-3">Delete</span>
                </a>
                                             
                                            <div class="text-muted fs-2 ms-auto mt-2 mt-md-0"><?php echo $row['timeofentry'];?></div>
                                        </div>
                                    </div>
                                </div></td>
                            </tr>

                                <!-- Comment Row -->
                                <?php
          }
        }
        else{
          echo('
      <br><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong style="font-size:20px;font-family:Times New Roman;">There is nothing for now!</strong><br>
  <p></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    
</div>
  ');
        }


        ?>
                            </div>
                            <!--        Start Pagination -->
            <div class='pagination-container' style="font-family: sans-serif; margin-left: 20px;" >
                <nav>
                  <ul class="pagination">
                        <li class="pn" data-page="prev" >
                            <span> < <span class="rock sr-only">(current)</span></span>
                        </li>
                   <!-- Here the JS Function Will Add the Rows -->
                        <li class="pn" data-page="next" id="prev">
                            <span> > <span class="rock sr-only">(current)</span></span>
                            </li>
                  </ul>
                </nav>
            </div>

</div> <!--         End of Container -->
                        </div>
                    </div>
                
                </div>
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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>
<script type="text/javascript">
              getPagination('#table-id');
                    //getPagination('.table-class');
                    //getPagination('table');

          /*                    PAGINATION 
          - on change max rows select options fade out all rows gt option value mx = 5
          - append pagination list as per numbers of rows / max rows option (20row/5= 4pages )
          - each pagination li on click -> fade out all tr gt max rows * li num and (5*pagenum 2 = 10 rows)
          - fade out all tr lt max rows * li num - max rows ((5*pagenum 2 = 10) - 5)
          - fade in all tr between (maxRows*PageNum) and (maxRows*pageNum)- MaxRows 
          */
         

function getPagination(table) {
  var lastPage = 1;

  $('#maxRows')
    .on('change', function(evt) {
      //$('.paginationprev').html('');                      // reset pagination

     lastPage = 1;
      $('.pagination')
        .find('li')
        .slice(1, -1)
        .remove();
      var trnum = 0; // reset tr counter
      var maxRows = parseInt($(this).val()); // get Max Rows from select option

      if (maxRows == 5000) {
        $('.pagination').hide();
      } else {
        $('.pagination').show();
      }

      var totalRows = $(table + ' tbody tr').length; // numbers of rows
      $(table + ' tr:gt(0)').each(function() {
        // each TR in  table and not the header
        trnum++; // Start Counter
        if (trnum > maxRows) {
          // if tr number gt maxRows

          $(this).hide(); // fade it out
        }
        if (trnum <= maxRows) {
          $(this).show();
        } // else fade in Important in case if it ..
      }); //  was fade out to fade it in
      if (totalRows > maxRows) {
        // if tr total rows gt max rows option
        var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get ..
        //  numbers of pages
        for (var i = 1; i <= pagenum; ) {
          // for each page append pagination li
          $('.pagination #prev')
            .before(
              '<li class="pn" data-page="' +
                i +
                '">\
                                  <span>' +
                i++ +
                '<span class="sr-only">(current)</span></span>\
                                </li>'
            )
            .show();
        } // end for i
      } // end if row count > max rows
      $('.pagination [data-page="1"]').addClass('active'); // add active class to the first li
      $('.pagination li').on('click', function(evt) {
        // on click each page
        evt.stopImmediatePropagation();
        evt.preventDefault();
        var pageNum = $(this).attr('data-page'); // get it's number

        var maxRows = parseInt($('#maxRows').val()); // get Max Rows from select option

        if (pageNum == 'prev') {
          if (lastPage == 1) {
            return;
          }
          pageNum = --lastPage;
        }
        if (pageNum == 'next') {
          if (lastPage == $('.pagination li').length - 2) {
            return;
          }
          pageNum = ++lastPage;
        }

        lastPage = pageNum;
        var trIndex = 0; // reset tr counter
        $('.pagination li').removeClass('active'); // remove active class from all li
        $('.pagination [data-page="' + lastPage + '"]').addClass('active'); // add active class to the clicked
        // $(this).addClass('active');                  // add active class to the clicked
        limitPagging();
        $(table + ' tr:gt(0)').each(function() {
          // each tr in table not the header
          trIndex++; // tr index counter
          // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
          if (
            trIndex > maxRows * pageNum ||
            trIndex <= maxRows * pageNum - maxRows
          ) {
            $(this).hide();
          } else {
            $(this).show();
          } //else fade in
        }); // end of for each tr in table
      }); // end of on click pagination list
      limitPagging();
    })
    .val(5)
    .change();

  // end of on select change

  // END OF PAGINATION
}

function limitPagging(){
    // alert($('.pagination li').length)

    if($('.pagination li').length > 7 ){
            if( $('.pagination li.active').attr('data-page') <= 3 ){
            $('.pagination li:gt(5)').hide();
            $('.pagination li:lt(5)').show();
            $('.pagination [data-page="next"]').show();
        }if ($('.pagination li.active').attr('data-page') > 3){
            $('.pagination li:gt(0)').hide();
            $('.pagination [data-page="next"]').show();
            for( let i = ( parseInt($('.pagination li.active').attr('data-page'))  -2 )  ; i <= ( parseInt($('.pagination li.active').attr('data-page'))  + 2 ) ; i++ ){
                $('.pagination [data-page="'+i+'"]').show();

            }

        }
    }
}
/*
$(function() {
  // Just to append id number for each row
  $('table tr:eq(0)').prepend('<th> ID </th>');

  var id = 0;

  $('table tr:gt(0)').each(function() {
    id++;
    $(this).prepend('<td>' + id + '</td>');
  });
});*/

//  Developed By Yasser Mas
// yasser.mas2@gmail.com

</script>
</html>