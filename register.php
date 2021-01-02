<?php
include("dbcon.php");
error_reporting(0);
?>


<html>
<head>
<title>

REGISTER
</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#fd79a8">
<div id="my">
<h2>REGISTER</h2>
<img src="images/humanicon.png" class="my2"/><br>

<form class="myform" action="register.php" method="post">
<br>
<label>USERNAME</label><br>
<input name= "use" type="text" class="my3" placeholder="username" required>
<br>
<label>PASSWORD</label><br>
<input name="pass" type="text" class="my4" placeholder="password" required><br><br>
<label>CONFIRM PASSWORD</label><br>
<input name="conf" type="text" class="my5" placeholder="confirm password" required>
<input type="submit" id = "l1"value="sign-up" /><br>
<br>
<input type="button" id="L2" value="Back to login" /><br>
</form>
</div>
<?php 
if(isset($_POST['use'])){
	
	
	$use= $_POST['use'];
	 
	$pass = $_post['pass'];
	$conf= $_POST['conf'];
	if($pass==$conf)
	{
		$query = "select * from student WHERE USERNAME ='$use'";
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript">';
echo ' alert("user exist ")';  //not showing an alert box.
echo '</script>';
			
		}
		{
		 $query = "insert into student values('$use','$pass')";	
		 $query_run = mysqli_query($con,$query);
		 if($query_run){
			echo '<script type="text/javascript">';
echo ' alert("registerd")';  //not showing an alert box.
echo '</script>';
		 }
		 else{
			echo '<script type="text/javascript">';
echo ' alert("error")';  //not showing an alert box.
echo '</script>';
			 
		 }
		}
	}
	
	
}
?>
</body>
</html>
