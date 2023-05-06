<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
</body>
</html>
<?php
if(isset($_POST["join"]))
{

    
    $firstname=$_POST["firstname"];
    $firstname=trim($firstname);
    $lastname=$_POST["lastname"];
    $lastname=trim($lastname);
    $email=$_POST["email"];
    $email=trim($email);
    $dob=$_POST["dob"];
    $dob=trim($dob);
    $gender=$_POST["gender"];
    $blood=$_POST["blood"];
    $address=$_POST["address"];
    $address=trim($address);
    $city=$_POST["city"];
    $city=trim($city);
    $mobile=$_POST["mobile"];

    #name validation
    if(empty($firstname) || empty($lastname))
    {
        $nameerr="Please fill name field";
    }
    elseif(!preg_match("/^[a-zA-Z ]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname))
    {
        $nameerr="Name field contains letters, alphabhets and whitespace";
    
    }
    else
    {
    $f=$firstname;
    $l=$lastname;
    }

    #email validation
    if(empty($email))
    {
        $emailerr="Please enter email field";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $emailerr="check if Email should be in correct format";
    }
    else
    {
        $e=$email;
    }

    #city validation
    if(empty($city))
    {
        $cityerr="Please fill city field";
    }
    elseif(!preg_match("/^[a-zA-Z ]*$/",$city))
    {
        $cityerr="city field contains letters, alphabhets and whitespace";
    
    }
    else
    {
    $c=$city;
    }

    
     #mobile validation
    if(empty($mobile))
    {
        $mobileerr="Please fill mobile field";
    }
    elseif(!preg_match("/^[0-9]*$/",$mobile))
    {
        $mobileerr="Please use digits only";
    
    }
    elseif(strlen($mobile)>10 || strlen($mobile)<10)
    {
        $mobileerr="please enter valid mobile number";
    }
    else
    {
    $m=$mobile;
    }

if(isset($f) && isset($l) && isset($e) && isset($dob) && isset($gender) && isset($blood) && isset($address) && isset($c) && isset($m))
{
include('db.php');
$sql="insert into bloodbank_member values (null,'$f','$l','$e','$dob','$gender','$blood','$address','$c','$m',null)";
if(mysqli_query($con,$sql))
{
echo "<script>
Swal.fire('Registration Process is successfully finished');
</script>";
}
else
{
    echo "<script>
Swal.fire('Error to register');
</script>";
}
}
}

?>