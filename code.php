<?php
session_start();
include('images.php');
$connection = mysqli_connect("localhost","root","","loginsignup");

if(isset($_POST['submit'])){

    $partypalacename = $_POST['partypalacename'];
    $image = $_FILES['image']['name'];
    $details = $_POST['details'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];
    $available = $_POST['available'];
    $pricing =$_POST['pricing'];
    $parkingspace = $_POST['parkingspace'];

    if(file_exists("upload/" . $_FILES["image"]["name"]))
    {
        $store = $_FILES['image']['name'];
        $_SESSION['status'] = "Image already exists.'.$store.'";
        header('Location: durbarthhok.php');
    }
    else
    {
        $query = "INSERT INTO images (partypalacename,images,details, location ,capacity,available,pricing,parkingspace) VALUES('$partypalacename','$images','$details','$location','$capacity','$available','$pricing','$parkingspace')";

        $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
            move_uploaded_file(["image"]["tmp_name"],"upload".$_FILES["image"]["name"]);
            $_SESSION['success'] = "data published successfully";
            header("location: durbarthhok.php");

        }
        else{
            $_SESSION['success'] = "Data not onserted";
            header("location: durbarthhok.php");
        }
    }
}
?>