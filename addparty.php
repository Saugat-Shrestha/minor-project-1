<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'loginsignup');
            mysqli_select_db($con, 'loginsignup');
            if (isset($_POST['submit'])) {
                $partypalacename = $_POST['partypalacename'];
                $files = $_FILES['images'];
                $details = $_POST['details'];
                $location = $_POST['location'];
                $capacity = $_POST['capacity'];
                $available = $_POST['available'];
                $pricing = $_POST['pricing'];
                $parkingspace = $_POST['parkingspace'];
                $phonenumber = $_POST['phonenumber'];
                $vegprice = $_POST['vegprice'];
                $nonvegprice = $_POST['nonvegprice'];
                $email = $_SESSION['email'];



                $filename = $files['name'];
                $fileerror = $files['error'];
                $filetmp = $files['tmp_name'];

                $fileext = explode('.', $filename);
                $filecheck = strtolower(end($fileext));
                $fileextstored = array('png', 'jpg', 'jpeg');

                if (in_array($filecheck, $fileextstored)) {

                    $destinationfile = 'userimg/' . $filename;
                    move_uploaded_file($filetmp, $destinationfile);

                    $q = "INSERT INTO `images`( `partypalacename`, `images`, `details`, `location`, `capacity`, `pricing`, `parkingspace`,`phonenumber`,`vegprice`, `nonvegprice`,`email`)
                 VALUES ('$partypalacename','$destinationfile','$details','$location','$capacity','$pricing','$parkingspace','$phonenumber','$vegprice','$nonvegprice','$email')";

                    $query = mysqli_query($con, $q);
                    $alert = "<script> alert('Your venue have been listed');</script>";
                    echo $alert;
                    echo"<script>window.location.href='business.php';</script>";
                    
                }
            }

            ?>