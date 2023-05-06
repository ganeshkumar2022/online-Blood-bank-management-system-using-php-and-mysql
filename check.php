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
<div class="col-md-12">
<h1><u>Check Availability</u></h1>
<form class="form-inline" action="" method="post">
  <label for="sel1">Select Blood group: </label>
  <select class="form-control mx-2" id="sel1" name="blood" required>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>O+</option>
    <option>O-</option>
    <option>AB+</option>
    <option>AB-</option>
  </select>
  <input type="submit" name="submit" value="Check availability" class="btn btn-danger">
</form>
<?php
if(isset($_POST["submit"]))
{
    $blood=$_POST["blood"];
    $sql="select * from bloodbank_member where blood='$blood'";
    $sql2="select count(id)as total from bloodbank_member where blood='$blood'";
    include('db.php');

$result=mysqli_query($con,$sql);
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_assoc($result2);
if(mysqli_num_rows($result)>0)
{


  ?>  

<p>Total number of donors with <?php echo $blood; ?></p>
<h4 class="text-danger font-weight-bold"><?php echo $row2["total"]; ?> Donors</h4>
<table class="table table-bordered">
    <tr class="bg-dark text-white">
        <th>S.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>D.O.B</th>
        <th>Gender</th>
        <th>Blood Group</th>
        <th>Address</th>
        <th>City</th>
        <th>Mobile</th>
    </tr>
    <?php

if(mysqli_num_rows($result)>0)
{
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['blood']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
        </tr>
        <?php
        $i++;
    }
}
    ?>
</table>

<?php
}
else
{
    echo "No donors found...";
}
}
?>
</div>
</div>
</div>
<?php include('footer.php');  ?>
</body>
</html>