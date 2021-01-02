<?php
session_start();
include('actpage.php');
include('function.php');
error_reporting(0);
$msg="";
$username="";

if(isset($_POST['submit'])){
    $username=get_safe_value($_POST['username']);
	$password=get_safe_value($_POST['password']);
	//$sql="insert into admin(username,password) values ('".$_POST['username']."','".$_POST['password']."')";
    
    $sql1="select * from admin where username='$username' and password='$password'";
    // if(mysqli_query($con,$sql)){
    //     echo "111111111111111111111";
    // }
    // else{
    //     echo "22222222222222";
    // }
	$res=mysqli_query($con,$sql1);  //data got or not
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
    $_SESSION['IS_LOGIN']='yes';
    $_SESSION['username']=$username;
		redirect('index1.php');
	}else{
		$msg="Please enter valid login details";
	}

}
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Ordering Admin Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../janhavi/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./images/CSSpage.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
  
 <div class="container-fluid bg" id="t1" >


 <div class="row">
 <div class="col-md-4 col-sm-11 col-xs-12"></div>
 <div class="col-md-4 col-sm-11 col-xs-12"></div>
 <div class="col-md-4 col-sm-11 col-xs-12" style="justtify-content:left"><button type="button" class="btn btn-primary"  style="color:#fff; justify-content:left">
    <a class="nav-link" href="./firstlog.php"style="color:#fff" >
 login
</a>
 </button>
 <button type="button" class="btn btn-primary"  style="color:#fff">
    <a class="nav-link" href="./firstsign.php"style="color:#fff" >
 Sign-up
</a>
 </button></div>
 </div>
  
  <div class="row">
  
  <div class="col-md-4 col-sm-11 col-xs-12"></div>
    
    <div class="col-md-4 col-sm-11 col-xs-12">
    
      <form class="form-container"  method="post">
        <h1 style="text-align:center">login</h1>
        
        
        <div class="form-group">
                  <input type="textbox" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"  name="password" required>
                </div>
        
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN" name="submit"/>
                </div>
                <br>
                <div class="login_msg"><?php echo $msg?></div>
      </form>
     
      </div>
      <div class="col-md-4 col-sm-11 col-xs-12" style="justtify-content:left"></div>
    </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <!-- plugins:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>