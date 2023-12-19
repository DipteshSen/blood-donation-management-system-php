<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<!-- Site favicon -->
  <link rel="shortcut icon" href="img/blood.png">



<style type="text/css">
/*body{
animation: Fade 0.4s ease-in;
}
@keyframes Fade{
  0%{opacity: 0;}
  100%{opacity: 1;}
}*/
#logoname{
    font-family: sans-serif;
    font-size: larger;
    color: black;
    font-size: large;
  }

.nav-link{
  color: white;
}

.nav-link:hover{
  color: darkred;
}

.navbar{
  background: linear-gradient(red,darkred,darkred,darkred);
  /*background-color: darkred;*/
}
.lol{
      padding: 3px;
      transition: 0.3s;
      border-radius: 25px;
    }

    .lol:hover{
      background: ghostwhite;
      color: darkred;
      transition: 0.3s;
    }


</style>

<title>DROP</title>
<body>
  <!----loading animation starts--->
<style type="text/css">
  #preloader{
    background:#0d0d0d url("img/loader2.gif") no-repeat center;
    height:100vh;
    width: cover;
    z-index: 100;
    /*mix-blend-mode: color-burn;*/
  }

 
</style>
<div id="preloader"></div>
<script type="text/javascript">
  var loader =document.getElementById('preloader');
  window.addEventListener("load",function(){
    loader.style.display="none";
  });
</script>
<!--loaing animation ends--->



<div class="container-fluid" style="background:transparent;opacity:0.9">
  <div class="mailinf row bg-black">
  <a href="mailto:valtvalt214@gmail.com" id="mailto" class="" ><small class="mailtext"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Mail us for any query</small></a>
  </div>
</div>
<!--navigation bar begins-->
<nav class=" wow navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    	<img src="img/blood.png" style="width:32px;height: 32px;margin-left: 5px;" name="logo" class="img-responsive input-group">
    	<label for="logo"><strong id="logoname" style="color:white">Drop</strong></label>	
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" id="toggle" onclick="myFunction()"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item lol">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item lol">
          <a class="nav-link" href="#part2">Overview</a>
        </li>
        
        <li class="nav-item lol">
          <a class="nav-link" href="#part4">FAQ</a>
        </li>
        <li class="nav-item lol">
          <a class="nav-link" href="#part5">Feedback</a>
        </li>
        <li class="nav-item lol">
          <a class="nav-link" href="#part6">Quick Links</a>
        </li>
        <li class="nav-item lol">
          <a class="nav-link" href="admin/login/login.php">Admin Login</a>
        </li>
      </ul>
      <span class="nav-item ">
        <a href="signin.php"><button style="border-radius:25px;border:solid red;" class="btn btncss">Sign Up</button></a>
      </span>
      <span class="nav-item ">
        <a href="login.php"><button style="border-radius:25px;border:solid red;" class="btn btncss">Log In</button></a>
      </span>
    </div>
  </div>
</nav>
<!---Navigation bar ends-->







<!-- embedded video starts-->
<div class="container mt-3 " id="part2">
  <br><br><br><br>
  <center>
    <div class="row ">
    <div class="col">
      <iframe width="470" height="315" style="overflow: auto;" src="https://www.youtube.com/embed/kOISEM6L4xk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="col">
      <h2 class="text-danger" style="text-decoration: underline;">Why should people donate blood?</h2>
      <p class="text-left" style="text-align: justify;">Safe blood saves lives. Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.



Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.</p>
    </div>
  </div>
</center>
</div>
<!----embedded video ends---->

<hr><br>
<!---timeline--->
<div class="container mt-3" id="part3">
  <center><h1 style="font-family: bahnschrift">Blood Donation Procedure<br><br></h1></center>
<div class="timeline">
  <div class="card mycontainer col-lg-2 left">
    <div class="card-body">
      <h3>Registration</h3>
      <h5 class="acss link1" onmouseover="toright()" onmouseout="toleft()">Details&nbsp;<i class="fa fa-angle-right"></i></h5>
      <div class="hidden1" style="display:none">
        <ul>
          <li>We’ll sign you in and go over basic eligibility.</li>
          <li>You’ll be asked to show ID, such as your Aadhar/Voter card</li>
        </ul>
      </div>
    </div>
  </div>

<div class="card mycontainer col-lg-2 right">
   <div class="card-body">
      <h3>Health History</h3>
      <h5 class="acss link2">Details&nbsp;<i class="fa fa-angle-right"></i></h5>
      <div class="hidden2" style="display:none">
        <ul>
          <li>You’ll answer a few questions about your health history and places you’ve traveled, during a private and confidential interview.</li>
          <li>You’ll tell us about any prescription and/or over the counter medications that may be in your system.</li>
          <li>We’ll check your temperature, pulse, blood pressure and hemoglobin level. </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card mycontainer left">
    <div class="card-body">
      <h3>Your Donation</h3>
      <h5 class="acss link3">Details&nbsp;<i class="fa fa-angle-right"></i></h5>
      <div class="hidden3" style="display:none">
        <ul>
          <li>If you’re donating whole blood, we’ll cleanse an area on your arm and insert a brand new sterile needle for the blood draw. (This feels like a quick pinch and is over in seconds.)</li>
          <li>Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms.</li>
          <li>A whole blood donation takes about 8-10 minutes, during which you’ll be seated comfortably or lying down. </li>
          <li>When approximately a pint of whole blood has been collected, the donation is complete and a staff person will place a bandage on your arm.</li>
          <li>For platelets, the apheresis machine will collect a small amount of blood, remove the platelets, and return the rest of the blood through your other arm; this cycle will be repeated several times over about 2 hours. </li>
        </ul>
      </div>
    </div>
  </div>

  



  <div class="card mycontainer col-lg-2 right">
   <div class="card-body">
      <h3>Refreshment and Recovery</h3>
      <h5 class="acss link4">Details&nbsp;<i class="fa fa-angle-right"></i></h5>
      <div class="hidden4" style="display:none">
        <ul>
          <li>After donating blood, you’ll have a snack and something to drink in the refreshment area.</li>
          <li>You’ll leave after 10-15 minutes and continue your normal routine.</li>
          <li>Enjoy the feeling of accomplishment knowing you are helping to save lives.</li>
          <li>Take a selfie, or simply share your good deed with friends. It may inspire them to become blood donors. </li>
        </ul>
      </div>
    </div>
  </div>
  
</div>

</div>





<!---timeline ends-->

<!--faq-->
<div class="container mt-3" id="part4">
  <br><br><br><br>
  <div class="jumbotron">
  <strong><h1>Frequently Asked Questions<br></h1></strong>
  <div class="container row">
    <center><img src="https://cdni.iconscout.com/illustration/premium/thumb/blood-donation-5629724-4695025.png" style="width:50%;" class="img-responsive"></center>
  </div>
<!---q1-->
  <div class="row">
    <hr>
    <div class="col faq mb-2 q1" id="q1" onmouseover="goright()" onmouseout="goleft()" id="q1">
      <h5 class="new1" id="new1">What happens when I give blood?</h5>
      
    </div>
    

  <div class="row ans1" id="ans1" style="display:none;">Whether you are a first-time or regular donor, the blood service must make sure that you will come to no harm by donating blood. This includes checking your blood to be sure it will be safe for the person who receives it.
Before you give blood, you will be asked questions about your medical history, including any medication you are taking, and about your current health and lifestyle. You may also be asked about recent travel; for example, if you live in a country where there is no malaria, you may be asked whether you have recently visited a tropical country. These questions will be asked only to safeguard your own health and the health of the person receiving your blood. You will be told whether you are eligible to give blood and, if not, whether you may be able to donate blood in the future. Any personal information that you give will be kept confidential and will not be used for any other purpose.
After resting for 10 or 15 minutes and taking some refreshment, you will be able to return to your normal activities, although you should avoid strenuous activity for the rest of the day. You should drink plenty of fluids over the next 24 hours.</div><hr>
  </div>

<!---q2-->
  <div class="row">
    
    <div class="col faq mb-2 q1" id="q2">
      <h5>How much blood will be taken? Will I have enough?</h5>
      
    </div>
    

  <div class="row ans1" id="ans2" style="display:none;">In most countries, the volume of blood taken is 450 millilitres, less than 10 per cent of your total blood volume (the average adult has 4.5 to 5 litres of blood). In some countries, a smaller volume is taken. Your body will replace the lost fluid within about 36 hours.</div><hr>
  </div>

<!---q3-->
  <div class="row">
    
    <div class="col faq mb-2 q1" id="q3">
      <h5>Is giving blood safe?</h5>
      
    </div>
    

  <div class="row ans1" id="ans3" style="display:none;">Yes. Remember that you will only be accepted as a blood donor if you are fit and well. Your health and well-being are very important to the blood service. The needle and blood bag used to collect blood come in a sterile pack that cannot be reused, so the process is made as safe as possible.</div><hr>
  </div>


<!----q4-->
  <div class="row">
  
    <div class="col faq mb-2 q1" id="q4">
      <h5>Does it hurt?</h5>
      
    </div>
    

  <div class="row ans1" id="ans4" style="display:none;">Just squeeze the inside of your elbow tightly and you will get a quick idea of what the needle feels like. All you should feel is a gentle pressure and a momentary “pinprick” sensation. Blood donation is very safe and discomfort or problem during or after donating is very uncommon.</div><hr>
  </div>

<!---q5-->
   <div class="row">
  
    <div class="col faq mb-2 q1" id="q5">
      <h5>Can I give blood after vaccination against SARS-CoV-2?</h5>
      
    </div>
    

  <div class="row ans1" id="ans5" style="display:none;">Consistent with current general global practice, recipients of SARS-CoV-2 vaccines that do not contain live virus may donate blood if they feel well. As SARS-CoV-2 vaccines have been developed only recently,  in settings where deferrals would not compromise blood supply availability, the National Blood Transfusion Service may consider implementing a precautionary deferral period of up to seven days  to minimize the impact of call-backs from donors who develop symptoms subsequent to donating soon after vaccination.

Recipients of live virus vaccines (e.g., virus vector based or live-attenuated virus vaccines) should be deferred for four weeks, consistent with current practices.

Persons who feel unwell after receiving a SARS-CoV-2 vaccine should be deferred for seven days after complete resolution of symptoms, or as specified after receipt of a virus vector-based or live-attenuated vaccine, whichever is the longer period.

In situations where it cannot be established whether the donor received a live virus vaccine, a four-week deferral period should be applied.</div><hr>
  </div>

<!--q6-->

 <div class="row">
  
    <div class="col faq mb-2 q1" id="q6">
      <h5>Who should not give blood?</h5>
      
    </div>
    

  <div class="row ans1" id="ans6" style="display:none;">

You should not give blood if your own health might suffer as a result. The first concern of the blood service is to ensure that blood donation does no harm to the blood donor. You should not donate blood if:<br>
<ul>
<li>You are feeling unwell</li>
<li>You are anaemic</li>
<li>You are pregnant, have been pregnant within the last year or are breastfeeding</li>
<li>You have certain medical conditions, which might make you an unsuitable donor </li>
<li>You are taking certain medications, such as antibiotics.</li>
</ul><br>

You should not donate blood if it might cause harm to the patient who receives it. Blood can transmit life-threatening infections to patients who receive blood transfusions. You should not donate blood if:<br>
<ul>
<li>You have or may recently have contracted a sexually transmitted disease, such as HIV or syphilis, that can be passed on to a patient who receives your blood</li>
<li>Your lifestyle puts you at risk of contracting an infection that can be transmitted through your blood: for example, if you have more than one sexual partner or have sexual contact with prostitutes</li>
<li>You have ever injected recreational, non-medicinal drugs</li>
<li>You have recently had a tattoo, skin scarification or ear or body piercing – your local blood service can tell you how long you must wait before giving blood</li>
<li>You have had sexual contact with anyone in the above categories.</li>
</ul>
 
  </div><hr>
  </div>








</div>

</div>


<!---faq ends here-->

<!----feedback form--->
<section id="content">
  
  <div class="container mt-3" id="part5">
    <br><br><br><br>
  <div class="row mt-3">
                <div class="col-md-6">
                  <h1>Feedback</h1>
                  <p>Have any ideas how we can improve ? Please do let us know. </p>
                  
                  <div class="contact-form mb-3">
                    <form id="contact-form" role="form" method="post" novalidate="novalidate">
                      <div class="form-group has-feedback mb-3">
                        <label for="name" class="mb-2">Name*</label>
                        <div class="input-group ">
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                        <div class="input-group-append input-group-text">
                        <i class="fa fa-user form-control-feedback"></i></div>
                      </div>
                      </div>
                      <div class="form-group has-feedback mb-3">
                        <label for="email" class="mb-2">Email*</label>
                        <div class="input-group ">
                        <input type="email" class="form-control" id="email" name="email" placeholder="">
                        <div class="input-group-append input-group-text">
                          <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        
                        </div>
                      </div>
                      <div class="form-group has-feedback mb-3">
                        <label for="subject" class="mb-2">Subject*</label>
                        <div class="input-group ">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                        <div class="input-group-append input-group-text">
                        <i class="fa fa-navicon form-control-feedback"></i>
                      </div>
                      </div>
                      </div>
                      <div class="form-group has-feedback mb-3">
                        <label for="message" class="mb-2">Message*</label>
                        <div class="input-group">
                        <textarea class="form-control" rows="6" id="message" name="messege" placeholder=""></textarea>
                        <div class="input-group-append input-group-text">
                        <i class="fa fa-pencil form-control-feedback"></i>
                      </div>
                    </div>
                      </div>
                      <input type="submit" name="submit" value="Submit" class="btn btn-dark btn-lg">
                    </form>
                    <?php
if(isset($_POST['submit']))
{
  if(!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['messege'] ))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $messege=$_POST['messege'];

    include_once("db.php");
    $check=$conn->query("SELECT * FROM feedbacks WHERE email='$email' and subject='$subject' and messege='$messege' ;");
    if(mysqli_num_rows($check)==0)
  {
    $finddate=$conn->query("SELECT current_timestamp as a;");
    $show1=mysqli_fetch_assoc($finddate);
    $newlogintime=$show1['a'];

    $query=$conn->query("INSERT INTO feedbacks(name,email,subject,messege,timeofentry) values('$name', '$email','$subject','$messege','$newlogintime') ;");
    //echo "<pre>";print_r($_POST);
    
    if($query)
    {
echo('
      <br><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Feedback successfully sent to Admin!</strong><br>
  <p>We will look into the matter soon</p>
    
</div>
  ');
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

}
  }

}
?>
                  </div>
                </div>
                <div class="col-md-6">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
              </div>
  </div>
 
  </section>


 <!-----Feedback form part ends here----> 
<!---quick link part--->
<div id="part6"></div>
<?php
include_once("footer.php")
?>
<!---quick link ends-->






</html>

<script type="text/javascript">
  /*
  function myFunction()
  {
    document.getElementById("toggle").style.transition = "0.3s";
    document.getElementById("toggle").style.transform = "rotate(90deg)";
  }*/

  function myFunction()
  {
    document.getElementByClassName("navbar-toggler-icon").style.transition = "0.3s";
    document.getElementByClassName("navbar-toggler-icon").style.transform = "rotate(90deg)";
  }
/*
  $(document).ready(function(){
      $('#toggle').click(function(){
          document.getElementById("toggle").style.transition = "0.3s";
    document.getElementById("toggle").style.rotate = "90deg";
      });
  });*/

  function goright()
  {
    document.getElementById("new1").style.transform="translateX(5px)";
    document.getElementById("new1").style.transition="0.5s";
  }
  function goleft()
  {
    document.getElementsById("new1").style.transform="translateX(-5px)";
    document.getElementsById("new1").style.transition="0.5s";
  }


  function toright()
  {
    document.getElementByClassName("acss").style.transform="translateX(5px)";
    document.getElementByClassName("acss").style.transition="0.5s";
  }

  function toleft()
  {
    document.getElementByClassName("acss").style.transform="translateX(-5px)";
    document.getElementByClassName("acss").style.transition-delay="0.5s";
  }





</script>
<script>
  $(document).ready(function(){
    $('#q1').click(function(){
      $('#ans1').slideToggle();
    });
  });

  $(document).ready(function(){
    $('#q2').click(function(){
      $('#ans2').slideToggle();
    });
  });

  $(document).ready(function(){
    $('#q3').click(function(){
      $('#ans3').slideToggle();
    });
  });


  $(document).ready(function(){
    $('#q4').click(function(){
      $('#ans4').slideToggle();
    });
  });

  $(document).ready(function(){
    $('#q5').click(function(){
      $('#ans5').slideToggle();
    });
  });

  $(document).ready(function(){
    $('#q6').click(function(){
      $('#ans6').slideToggle();
    });
  });

  $(document).ready(function(){
    $('.link1').click(function(){
      $('.hidden1').slideToggle();
    });
  });

  $(document).ready(function(){
    $('.link2').click(function(){
      $('.hidden2').slideToggle();
    });
  });

  $(document).ready(function(){
    $('.link3').click(function(){
      $('.hidden3').slideToggle();
    });
  });

  $(document).ready(function(){
    $('.link4').click(function(){
      $('.hidden4').slideToggle();
    });
  });
</script>

</body>

