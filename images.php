<?php

$server_name="localhost";
$db_username = "root";
$db_password = "";
$db_name="loginsignup";
$connection = mysqli_connect("localhost","root","","loginsignup");

$images = mysqli_select_db($connection,$db_name);

if(!$connection)
{
    die("connection failed:" . mysqli_connect_error());
    echo 'database connection failed';
}

?>