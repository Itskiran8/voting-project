<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.x.x/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdeliver.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="f-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
  
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
    <!-- ihover -->
    <link href="styles/ihover.css" rel="stylesheet">
    
</head>
<body>
<div class="container-fluid">
<!--  -->
 <div class="row p-3 text-white "  id="top">
  <div class="col-lg-6">
  </div>
  <!-- <div class="col-lg-6">
  <i class="fa-brands fa-instagram p-1"></i>
  <i class="fa-regular fa-envelope p-1"></i>
  <i class="fa-brands fa-square-facebook p-1"></i>
  <i class="fa-brands fa-linkedin p-1"></i>
   <i class="fa-brands fa-youtube p-1"></i>
  </div> -->
 </div> 
<!--  -->
<div class="row  " id="nav" >
  <nav class="navbar  navbar-expand-lg  "> 
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/indialogo.png" alt="" width="40" height="50" class="rounded-circle" class="d-inline-block align-text-center" ><b style="color: orangered;font-size:larger;">IN</b><b style="color: rgb(213, 210, 210);font-size:larger">D</b><b style="color: green;font-size:larger">IA</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <!-- <a class="nav-link" href="candidate_register.php">Register as Candidate</a> -->
            <a class="nav-link" href="voterlogin.php">Register as Voter</a>
            <!-- <a class="nav-link" href="Cast_Vote.php">Voting</a> -->
            <a class="nav-link" href="result.php">Election-Results</a>
            <a class="nav-link" href="contact_us.php">Contact-Us</a>
            <a class="nav-link" href="blog.php">Blogs</a>
            </div>
          </div>
        </div>
       </nav>
</div>
