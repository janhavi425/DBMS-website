








<?php
session_start();
include('actpage.php');
include('function.php');
error_reporting(0);
$username="";
$errors=array();



if(isset($_POST['submit'])){
    $username=get_safe_value($_POST['username']);
  $password=get_safe_value($_POST['password']);
  $email=get_safe_value($_POST['email']);
  $address=get_safe_value($_POST['address']);
  
  
  $address=get_safe_value($_POST['address']);

  if(empty($username)){array_push($errors,"Username is required");}
  if(empty($password)){array_push($errors,"password is required");}
  if(empty($email)){array_push($errors,"email is required");}
  if(empty($address)){array_push($errors,"address is required");}
	//$sql="insert into admin(username,password,email,address) values ('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['address']."')";
  
   $sql1="select * from admin where username='$username' or password='$password' or email='$email' limit 1";
    $result=mysqli_query($con,$sql1);
    $user=mysqli_fetch_assoc($result);
       if($user){
         if($user['username']===$username){
           array_push($errors,"username already exist");
         }
         if($user['email']===$email){
          array_push($errors,"email already exist");
        }
       }

    if(count($errors)==0){
      $sql="insert into admin(username,password,email,address) values ('$username','$password','$email','$address')";
      mysqli_query($con,$sql);
      $_SESSION['username']=$username;
      $_SESSION['IS_LOGIN']='yes';
      redirect('category.php');

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
<button type="button" class="btn btn-primary"  style="color:#fff">
    <a class="nav-link" href="./login1.php"style="color:#fff" >
 login
</a>
 </button>
 <button type="button" class="btn btn-primary"  style="color:#fff">
    <a class="nav-link" href="./signup.php"style="color:#fff" >
 Sign-up
</a>
 </button>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <h1>sign-up</h1>
              </div>
              
              <form method="post" >
              <?php include("errors.php");?>
  
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group ">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Username</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Username" name="username">
    </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
</form>


			  <div class="login_msg"><?php echo $msg?></div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
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