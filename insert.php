<?php
 session_start();
$con = mysqli_connect("localhost", "root", "", "loginsignup");
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from registration where email = '$email' and password = '$password'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 0) {
    $alert = "<script> alert('Your email or password is wrong');</script>";
    echo $alert;
   
    echo"<script>window.location.href='login.php';</script>";
} else {
    $_SESSION['email']=$email;
    echo $_SESSION['email'];
}

$rows = mysqli_fetch_assoc($result);
if ($rows['role'] == 'b') {
    $_SESSION['owneremail'] = $email;
    header("location: business.php");
} elseif($rows['role'] == 'p') {
    $_SESSION['personalemail'] = $email;
    header("location: personal.php");
}
elseif($rows['role'] == 'a') {
    header("location: admin.php");
}

     
   
?>