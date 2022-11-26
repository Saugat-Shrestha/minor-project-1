<?php
session_start();



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

    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
</head>

<body>

    <header>
       <img src="images/logo.jpg" class="logo" width="50px" height="50px " alt="">
    </header>
    <div class="container">

        <div class="wrapper">
            <div class="box">
               
                <p> <i class="fa-sharp fa-solid fa-users"></i> Number of Users: <?php print($no_of_users) ?></p>
                
               
                <div class="link">
                    <a href="view_users.php">  <i class="fa-solid fa-arrow-right-to-bracket"></i> More Info</a>
                  
                </div>

            </div>

            <div class="box">
                
                <p>   <i class="fas fa-book"></i> Number of Bookings: <?php print($no_of_booking) ?></p>
              
             


                <div class="link">
                    <a href="view_booking.php"> <i class="fa-solid fa-arrow-right-to-bracket"></i> More Info</a>
                   
                </div>

            </div>

            <div class="box">
              
                <p><i class="fa-solid fa-message"></i> Number of complains: <?php print($no_of_complains) ?></p>
              
                
                <div class="link">
                    <a href="view_complains.php">  <i class="fa-solid fa-arrow-right-to-bracket"></i> More Info</a>
                  
                </div>
            </div>

            <div class="box">
             
                <p>  <i class="fa-solid fa-location-dot"></i> Number of party palace uploaded: <?php print($no_of_images) ?></p>
                
              

                <div class="link">
                    <a href="view_images.php"> <i class="fa-solid fa-arrow-right-to-bracket"></i> More Info</a>
                   
                </div>
            </div>
        </div>

    </div>




</body>

</html>