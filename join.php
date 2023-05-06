<?php
include('verify.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<style>
  h1,h2 {font-family: "Audiowide", sans-serif;}
  h1 { color:red; }
  h2 { color:gray;}
  body {position:relative;height:100vh;}
</style>
</head>
<body>
    <?php include('header.php');   ?>
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3 mt-2">
<table>
<tr>
    <th style="width:50%;"><img src="images/join.jfif" class="img-fluid" style="height:100px;"></th>
    <th style="font-weight:normal;font-size:10px;">Join our community and reach out your hands for the others in need. just by registering below you will make an agreement with us
 that you are ready to donate and will be available whenever we will need you.    
</th>
</tr>

<!-- form -->
<form action="" method="post" autocomplete="off">
<tr>
<th>
<label for="first" class="font-weight-normal">First name:</label>
<input type="text" class="form-control" placeholder="Enter first name" name="firstname" id="first" required>
</th>
<th>
<label for="last" class="font-weight-normal">Last name:</label>
<input type="text" class="form-control" placeholder="Enter last name" id="last" name="lastname" required>
</th>
</table><span class="text-danger"><?php if(isset($nameerr)) { echo $nameerr; } ?></span>
  <div class="form-group mt-2">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" required>
    <span class="text-danger"><?php if(isset($emailerr)) { echo $emailerr; } ?></span>
  </div>
  <div class="form-group mt-2">
    <label for="email">Date of Birth:</label>
    <input type="date" class="form-control" placeholder="Enter dob" name="dob" id="email" required>
  </div>
<div class="form-group">
    Gender : 
    <input type="radio" value="male" id="male" name="gender"><label for="male" required>&nbsp;Male
    <input type="radio" value="female" id="female" name="gender"><label for="female">&nbsp;Female
</div>
<div class="form-group">
  <label for="sel1">Select Blood group:</label>
  <select class="form-control" id="sel1" name="blood" required>
    <option value="">Choose your blood group</option>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
  </select>
</div>
<div class="form-group">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="5" id="comment" name="address" placeholder="Please fill out your complete address" required></textarea>
</div>
  <div class="form-group">
    <label for="pwd">City:</label>
    <input type="text" class="form-control" name="city" placeholder="Enter city" id="pwd" required>
    <span class="text-danger"><?php if(isset($cityerr)) { echo $cityerr; } ?></span>
  </div>
  <div class="form-group">
    <label for="pwd">Mobile:</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile" id="pwd" required>
    <span class="text-danger"><?php if(isset($mobileerr)) { echo $mobileerr; } ?></span>
  </div>

  <button type="submit" class="btn btn-dark btn-block mb-4" name="join">join</button>
</form>


<!-- end form  -->
</div>
</div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center" style="bottom:0;width:100%;">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Made by R.Ganesh kumar<br>&copy; copyrights reserved</a>
    </li>
  </ul>
</nav>
</body>
</html>