<?php

   $con = mysqli_connect("localhost","root","","janhavi") or die("unable to connect");
   if($con == false)
   {
       echo("Connection not done");
    }
	else{
		echo("connected");
	}
	

  
?>