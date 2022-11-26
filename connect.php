<?php 
session_start();
$code = $_SESSION['code'];
$user_code = $_POST['code'];

if($code != $user_code){
    die("Incorrect code");
    header("location:signup_verify.php");
}

// $username = $_POST['username'];
// $email = $_POST['email'];
// $phonenumber = $_POST['phonenumber'];
// $password = $_POST['password'];
// $role = $_POST['role'];

$username = $_SESSION['username'];
$email = $_SESSION['signup_email'];
$phonenumber = $_SESSION['phonenumber'];
$password = $_SESSION['password'];
$role = $_SESSION['role'];

//database connection
$conn = new mysqli('localhost','root','','loginsignup');
$sql = "insert into registration(username, email, phonenumber, password, role) values('$username', '$email', '$phonenumber', '$password', '$role')";
mysqli_query($conn, $sql);

header("location:login.php");



?>