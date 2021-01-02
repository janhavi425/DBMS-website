<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Ordering Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="./bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/style2.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" ><h1>Order Online</h1></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="./images/dal.jpeg" alt="logo"/></a>
        </div>
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item  ">
            <a class="nav-link "   aria-haspopup="true" aria-expanded="false">
              <?php
               
                echo $_SESSION['username'];
              
?>
            </a>
            
            
          </li>
          
          
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index1.php">
              
              <span class="menu-title">Dashboard</span>
            </a>
          </li>







          
          <li class="nav-item">
            <a class="nav-link" href="orderpage.php">
              
              <span class="menu-title">order online</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">
              
              <span class="menu-title">My cart</span>
            </a>
          </li>
         
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">