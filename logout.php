<?php
session_start();
session_destroy();
include('function.php');
unset($_SESSION['IS_LOGIN']);
redirect('firstlog.php');
$_SESSION['IS_LOGIN']="no";
?>