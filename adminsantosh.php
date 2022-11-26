<?php
session_start();

// if (!isset($_SESSION['admin_email'])) {
//     die("File Not Found");
// }

$con = mysqli_connect('localhost', 'root', '', 'loginsignup');
$sql_users = "select * from registration";
$sql_book = "Select * from booknow";
 $sql_complains = "select * from complain_box";
$sql_images = "select * from images";


$no_of_users = mysqli_num_rows(mysqli_query($con, $sql_users));
$no_of_booking = mysqli_num_rows(mysqli_query($con, $sql_book));
 $no_of_complains = mysqli_num_rows(mysqli_query($con, $sql_complains));
$no_of_images = mysqli_num_rows(mysqli_query($con, $sql_images));



?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../CSS/admin/admin.css?v=<?php echo time(); ?>">
</head>

<body>


    <div class="container">

        <div class="wrapper">
            <div class="users">
                <p><?php print($no_of_users) ?></p>
                <p>Number of Users</p>
                <i class="fa-sharp fa-solid fa-users"></i>
                <div class="link">
                    <a href="view_users.php">More Info</a>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </div>

            </div>

            <div class="bikes">
                <p><?php print($no_of_booking) ?></p>
                <p>Number of Bookings</p>
              

                <div class="link">
                    <a href="view_booking.php">More Info</a>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </div>

            </div>

            <div class="scooters">
                <p><?php print($no_of_complains) ?></p>
                <p>Number of complains</p>
                <i class="fa-solid fa-message"></i>
                <div class="link">
                    <a href="view_complains.php">More Info</a>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </div>
            </div>

            <div class="message">
                <p><?php print($no_of_images) ?></p>
                <p>Number of party palace uploaded.</p>
                
                <div class="link">
                    <a href="view_images.php">More Info</a>
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </div>
            </div>
        </div>

    </div>




</body>

</html>