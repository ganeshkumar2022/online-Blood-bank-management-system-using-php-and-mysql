<?php
$servername="localhost";
$user="root";
$password="";
$dbname="bloodbank";

$con=mysqli_connect($servername,$user,$password,$dbname);
if(!$con)
{
    die("Error to connect".mysqli_connect_error());
}

?>