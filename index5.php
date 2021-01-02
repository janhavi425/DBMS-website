
<?php
session_start();
include("actpage.php");
if(isset($_POST['submit'])){
  $email=$_POST['email'];
$feed=$_POST['feed'];
//$sql="insert into admin(username,password) values ('".$_POST['username']."','".$_POST['password']."')";
  
  $sql1="select * from admin where email='$email'";
  echo "ddddddddddddddddd";
  if(mysqli_query($con,$sql1)){
      echo "111111111111111111111";
   }
  else{
     echo "22222222222222";
  }
$res=mysqli_query($con,$sql1);  //data got or not
if(mysqli_num_rows($res)>0){
  $sql="insert into feedback(email,feedback) values('$email','$feed')";
  $_SESSION['status']="Success";
  $_SESSION['status_code']="success";

  header('location:"index1.php"');
}else{
  $_SESSION['status']="fail";
  $_SESSION['status_code']="error";

  header('location:"index1.php"');
}

}


?>
<html>
<head>
<title>

ADMIN LOGIN
</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#fd79a8">
<div id="my">
<h2>LOGIN FORM</h2>
<img src="images/humanicon.png" class="my2"/><br>

<form class="myform"  method="post">
<br>
<label>USERNAME</label><br>
<input type="text" class="my3" placeholder="username" name="email">
<br>
<label>PASSWORD</label><br>
<input type="text" class="my4" placeholder="password" name="feed"><br><br>

<input type="submit" name="submit" id = "lO" value="SUBMIT" /><br>

</form>
</div>
</body>
</html>

