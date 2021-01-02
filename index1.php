<?php
session_start();
include('actpage.php');
//include('script.php');
error_reporting(0);
$msg="";
$username="";
$msg1="";
if(isset($_POST['submit'])){
    $username=$_SESSION['username'];
	$feed=htmlspecialchars($_POST['password']);
	//$sql="insert into admin(username,password) values ('".$_POST['username']."','".$_POST['password']."')";



       $sql="insert into feedback(email,feedback) values ('$username','$feed') ";
       if(mysqli_query($con,$sql)){

        $msg="Thanks for feedback";

  }
  }





  if(isset($_POST['book'])){
    $username=$_SESSION['username'];
  $date=htmlspecialchars($_POST['date']);
  $time=htmlspecialchars($_POST['time']);
  $ptsize=htmlspecialchars($_POST['ptsize']);
	//$sql="insert into admin(username,password) values ('".$_POST['username']."','".$_POST['password']."')";



       $sql1="insert into tablebook(username,date,time,parysize) values ('$username','$date','$time','$ptsize') ";
       if(mysqli_query($con,$sql1)){

        $msg1="Thanks for booking";




    }




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="images/CSSpage.css">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="./sweetalert.min.js"></script>

  <?php
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
  {
    ?>
    <script>swal({
  title: "<?php echo $_SESSION['status']; ?>",
  text: "<?php echo $_SESSION['status_code']; ?>",
  icon: "success",


});</script>
    <?php unset($_SESSION['status']);

  }
  ?>

<link rel="stylesheet" href="css/glyphicon.css">

    <script src="https://kit.fontawesome.com/004eb124bd.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><h3>LAWRANCE</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#t1"><h4>Reservation</h3></a>
      </li>
      <li class="nav-item">
        <a href="#about" class="nav-link" href="#"><h4>About</h4>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./menu1.php"><h4>Menu</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#f1"><h4>Contact</h4></a>
      </li>
      </ul>

          <ul class="navbar-nav ml-auto">
          <li class="nav-item  navbar-nav ">
          <h4>
            <a class="nav-link "   aria-haspopup="true" aria-expanded="false">
              <?php

                echo $_SESSION['username'];

?>
            </a>
            </h4>
            </li>
            <li>

            <button class="btn-lg">
              <a  href="logout.php">


                Logout
              </a>
</button>

          </li>




    </ul>
  </div>
</nav>

<div   style="width: 100%; height: 30%;">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner"  >
    <div class="carousel-item active carousel-fade"   id="i1">
      <img src="images/r336.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1>Lawrence</h1>
       <h2>You are always welcome!</h2>


      </div>
    </div>
    <div class="carousel-item carousel-fade"  id="i1">
      <img src="images/r4.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">

        <h1>Lawrence</h1>
        <h2>You are always welcome!</h2>
      </div>
    </div>
    <div class="carousel-item carousel-fade"  id="i1">
      <img src="images/r556.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Lawrence</h1>
        <h2>You are always welcome!</h2>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="card text-center" id="about">
  <div class="card-header">
    <h1>
   Lawrence Restaurant
    </h1>

  </div>
  <div class="card-body" style="background-color:floralwhite;">
    <h2 class="card-title">Made With Love.</h2>
    <h2>Simply Delicious</h2>
    <br>
    <br>

    <p class="card-text">Hey..your favourite eating destination is back with completely new look and wde variety of food.<br>Lawrence restaurant is one of the best restaurant in Banglore, you can test delicious and healthy food here.<br> 30 years of expertise into food buisness is dtill bound to deliver complete customer satisfaction.<br> Visit today for a complete new experience!</p>

  </div>

</div>

<br>


<div class="container-fluid"  id="team">
  <div class="raw text-center">
  <div class="col-12">




    <button type="button" class="btn btn-primary">
     <a href="./orderpage.php" ><h1 class="display-4" style="color:#fff">Order Online</h1></a>
     </button>













 <br>
 <br>
<h2>Our Special Dishes</h2>
 <hr>
</div>
</div>
</div>
<br>
<br>
<div class="container-fluid">
  <div class="row text-center">
 <!-- Grid column -->
<div class="col-sm-12 col-lg-4">
     <!-- Material input -->
                       <div class="md-form">
                       <div class="card">
                       <img src="images/f1.jpg" class="card-img-top">
                       <br>
                      <div class="cord-body">
                     <h3 class="card-title">Sweet Potato salad</h3>
                    <p class="card-text">Enjoy the best of seasonal ingredient with this hearty salad. </p>
                   <h4>price-150</h4>
                 <a href="./manage_category.php" class="btn btn-outline-secondary">Order</a>
                 <br>
            </div>
        </div>
     </div>
   </div>
 <!-- Grid column -->

 <!-- Grid column -->
 <div class="col-sm-12 col-lg-4">
     <!-- Material input -->
     <div class="md-form">
       <div class="card">
       <img src="images/f333.jpg" class="card-img-top">
       <div class="card-body">
         <h3 class="card-title">Chaat Salad</h3>
         <p class="card-text">Your Favourite Chatpata salad, now in chaat version. How can you possibly say no to this? Try it right away</p>
         <h4>price-150</h4>
       <a href="./manage_category.php" class="btn btn-outline-secondary">Order</a>
       <br>
     </div>
 </div>
</div>
</div>
 <!-- Grid column -->

 <!-- Grid column -->
 <div class="col-sm-12 col-lg-4">
     <!-- Material input -->
     <div class="md-form">
       <div class="card">
         <img src="images/f6.jpg" class="card-img-top">

         <div class="card-body">
         <h3 class="card-title">Kathal ke kebab </h3>
       <p class="card-text">Are you 'Krazy' for kathal> Try these delish kebabs this time</p>

       <h4>price-150</h4>
       <a href="./manage_category.php" class="btn btn-outline-secondary">Order</a>
       <br>
</div>
</div>
     </div>
 </div>
 <!-- Grid column -->
</div>
</div>
<div style="width: 100%; height: 30%; " >
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style= "height:90vh" style="width: 85vw" >
    <div class="carousel-item active" data-interval="10000">
      <img src="images/f4.jpg" class="d-block w-100" alt="..." >
    </div>

    <div class="carousel-item">
      <img src="images/f5.jpg" class="d-block w-100" alt="..." >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Our Kitchen & chef</h2>
            <br>
            <h4>Chef Sanjeev Kapoor</h4>
            <br>
            <p>Chef Sanjeev Kapoor is the most celebrated face of Indian cuisine. He is Chef extraordinaire, runs a successful TV Channel FoodFood, hosted Khana Khazana cookery show on television for more than 17 years, author of 150+
             best selling cookbooks, restaurateur and winner of several culinary awards.
            </p>
            <p> He is living his dream of making Indian suisine the number one in the world and empowering women through power of cooking and become self sufficient.</p>
            <a href="https://www.sanjeevkapoor.com/">
            <button type="button" class="btn btn-secondary">Learn more</button>
            </a>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/c1.jpg" class="img-fluid img-thumbnail">
          </div>
      </div>
  </div>
</div>







<div class="container-fluid bg" id="t1" >

  <div class="row">
    <div class="col-md-4 col-sm-11 col-xs-12"></div>
    <div class="col-md-4 col-sm-11 col-xs-12">
      <form class="form-container"  method="post">
        <h1>Reservation</h1>

        <div class="form-group">
          <label for="exampleInputPassword1">Date</label>

            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Time</label>

            <input class="form-control" type="time" value="13:45:00" id="example-time-input" name="time">

        </div>
        <div class="form-group">

          <label for="exampleInputEmail1">Party Size</label>
          <input class="form-control" type="number" value="4" id="example-number-input" name="ptsize">
        </div>


       <a href="./login1.php">
        <button type="submit" class="btn btn-success btn-block" value="book" name="book">Book</button></a>
        <div ><?php echo $msg1?></div>
      </form>

      </div>
      <div class="col-md-4 col-sm-11 col-xs-12"></div>
    </div>
    </div>


<div class="container-fluid text-center" id="f1">
  <h1 class="lead display-4"><strong>Connect With Us</strong><h1>
      </div>
      <br>
  <!--second-->
  <div class="container-fluid">
      <div class="row text-center">
          <!-- Grid column -->
          <div class="col-sm-4 col-lg-2">
              <!-- Material input -->
              <div class="md-form">
                <a href="#"><i class="fab fa-twitter display-4"></i></a>
      <br>
              </div>
          </div>
          <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-sm-4 col-lg-2">
                  <!-- Material input -->
                  <div class="md-form">
        <a href="#"><i class="fab fa-facebook-square display-4"></i></a>
          <br>
                  </div>
              </div>
              <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-sm-4 col-lg-2">
                      <!-- Material input -->
                      <div class="md-form">
            <a href="#" style="color: rgb(180, 16, 16);"><i class="fab fa-youtube display-4"></i>
              <br>
                      </div>
                  </div>
                  <!-- Grid column -->

                      <!-- Grid column -->
                      <div class="col-sm-4 col-lg-2">
                          <!-- Material input -->
                          <div class="md-form">
                <a href="#" style="color: black;"><i class="fab fa-github display-4"></i>
                  <br>
                          </div>
                      </div>
                      <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm-4 col-lg-2">
              <!-- Material input -->
              <div class="md-form">
                <a href="#" style="color: rgb(240, 240, 9);"><i class="fab fa-snapchat-ghost display-4"></i></a>
                  <br>
              </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-sm-4 col-lg-2">
              <!-- Material input -->
              <div class="md-form">
                <a href="#"><i class="fab fa-linkedin-in display-4"></i>
                  <br>
              </div>
            </div>
          </div>
          </div>



<br>
<div class="container-fluid footer"  style="background-color: rgb(20, 20, 16); color: #fff;">
  <div class="row">
    <div class="col-lg-4 col-md-4">
      <div class="md-form">


        <h2 style="color: #fff;">Contact Us</h2>
        <br>
     <span class="glyphicon glyphicon-map-marker"></span><label style="color: #fff;">Address:
     <a href="#" style="color: #fff;"> 2931 Ridge Rd #101, Rockwall, TX 75032, United State</a></label>
     <br>
  <span class="glyphicon glyphicon-envelope" style="color: #fff;"></span><label style="color: #fff;">Email:<a href="#" style="color: #fff;"> janhaviachwale27@gmail.com
  </a></label>
  <br>
  <span class="glyphicon glyphicon-earphone"></span>
  <label style="color: #fff;">Phone:<a href="#" style="color: #fff;">(817) 213-6552.</a></label>
  </div>
    </div>
    <div class="col-lg-3 col-sm-4 middle">
      <div class="md-form">
        <h2>Opening Hours</h2>
        <br>
  <p>Mon - Fri: 6am- 11pm</p>
  <p>Sat-Sun: 6am-4am</p>
  </div>
    </div>

    <div class="col-lg-5 col-sm-4" id="uu" >
      <div class="md-form"  method="post">

        <h2>Give your feedback</h2>
        <form class="pt-3" method="post">
                <div class="form-group">
                  <input  class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username" value="<?php echo $_SESSION['username']?>"  disabled >
                </div>
                <div class="form-group">
                  <input  class="form-control form-control-lg" id="exampleInputPassword1" placeholder="feedback"  name="password" required>
                </div>

                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="submit" name="submit" href="#uu"/>
                </div>

              </form>
              <div ><?php echo $msg?></div>



  </div>
    </div>

  </div>
  </div>
  <div class="container-fluid copy" style="background-color: rgb(20, 20, 16); color: #fff; padding-bottom: 5vh;">

    <p class="text-center">
      Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
  </div>







</body>
</html>
