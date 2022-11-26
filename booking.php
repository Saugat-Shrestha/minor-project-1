<?php
$hostname = "localhost";
$dbname = "loginsignup";

$con = mysqli_connect($hostname, "root", "", $dbname);
$id = $_GET['id'];
$sql_detail = "select * from registration where id = '$id'";
$result_detail = mysqli_query($con, $sql_detail);
$owner_email = mysqli_fetch_assoc($result_detail)['email'];

?>

<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:login.php");
}
if (isset($_POST['submit'])) {
    $hostname = "localhost";
    $dbname = "loginsignup";

    $con = mysqli_connect($hostname, "root", "", $dbname);
    $occasion = $_POST['occasion'];
    $howmany = $_POST['howmany'];
    $eventdate = $_POST['eventdate'];
   
    $email = $_SESSION['email'];


    $sql = "insert into booknow(occasion, howmany, eventdate,email) values('$occasion', '$howmany', '$eventdate','$email')";
    mysqli_query($con, $sql)  or die("Query Failed");

    // $sqll = "SELECT * FROM `registration` WHERE username ='$username'";
    // mysqli_query($con, $sqll)  or die("Query Failed");

    $mailto = $email;
    // $name = "saugat";
    $subject = "Your booking is done successfully";
    $message = "Dear Thank you for your booking";
    $headers = "From: shresthaasaugat31@gmail.com ";
    $result = mail($mailto, $subject, $message);
  

    $mailto = $owner_email;
    // $name = "saugat";
    $subject = "Your party palace have been booked by $email";
    $message =  "Thank you for your booking";
    $headers = "From: shresthaasaugat31@gmail.com ";

    header("location:personal.php");
}
?>

<?php
$con = mysqli_connect('localhost', 'root', '', 'loginsignup');

$id = $_GET['id'];
$displayquery = "select * from images where id = '$id' ";
$querydisplay = mysqli_query($con, $displayquery);
$result = mysqli_fetch_assoc($querydisplay);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

    <script src="litchi.js"></script>
</head>

<body>

    <!-- header section starts -->
    <header>


        <a href="personal.php"><img src="images/logo.jpg" class="logo" width="50px" height="50px " alt=""></a>



    </header>


    <div class="container">
        <div class="content">
            <div class="left-content">

                <div class="f-logo">
                    <h1> <i class="fas fa-utensils"></i> <?php print($result['partypalacename']) ?></h1>
                    <img src="<?php print($result['images']) ?>" id="pic" alt="">
                    <h1>Details</h1>

                    <h2 class="th"> <?php print($result['details']) ?> </h2>
                    <br>
                    <br>
                    <table>
                        <tr>
                            <th class="bd">Location</th>
                            <th class="bd">Capacity</th>
                            
                            <th class="bd">Phone-number</th>
                        </tr>
                        <tr>
                            <th class="th"><i class="fas fa-location-arrow"> <?php print($result['location']) ?></i></th>
                            <th class="th"><?php print($result['capacity']) ?></th>
                         
                            <th class="th"> </i><?php print($result['phonenumber']) ?></th>
                        </tr>

                    </table>

                    <br>
                    <br>
                    <table>
                        <tr>
                            <th>Pricing</th>
                        </tr>
                        <tr>
                            <th class="th">Standard Veg Menu: </th>
                            <th class="th"> <i class="fa fa-rupee"></i><?php print($result['vegprice']) ?></th>

                        </tr>
                        <tr>
                            <th class="th">Standard Non-Veg Menu: </th>
                            <th class="th"> <i class="fa fa-rupee"></i><?php print($result['nonvegprice']) ?> </th>
                        </tr>
                        <tr>
                            <th class="th">For Venue Space:</th>
                            <th class="th">
                                <div class="price">Rs<?php print($result['pricing']) ?> </div>
                            </th>
                        </tr>

                    </table>
                    <br>
                    <table>
                        <tr>
                            <th> <i class="fas fa-parking"></i> Parking Space: </th>
                            <th class="th"><?php print($result['parkingspace']) ?> Vehicles </th>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="right-content">
                <div class="card">
                    <section class="book" id="book">
                        <div class="row">
                            <form action="" method="post">
                                <div class="inputBox">
                                    <h3>Occasion</h3>
                                    <!-- <input type="text" name="ocassion" placeholder="Occasion" required> -->
                                    <div class="myDropDown">
                                        <select name='occasion'>
                                            <option value='Wedding'>Wedding</option>
                                            <option value='Parties'>Parties</option>
                                            <option value='Private dining'>Private dining</option>
                                            <option value='Conference'>Conference</option>
                                            <option value='Meeting and Seminar'>Meeting and Seminar</option>
                                            <option value='Bartabandha'>Bartabandha</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="inputBox">
                                    <h3>how many</h3>
                                    <input type="number" name="howmany" placeholder="number of guests" required>
                                </div>
                                <div class="inputBox">
                                    <h3>Event Date</h3>
                                    <input type="date" name="eventdate" required>
                                </div>

                                <input type="submit" name="submit" class="btn" value="book now">



                            </form>
                        </div>
                    </section>

                </div>

            </div>
        </div>
    </div>


   

    <!-- review section ends -->
</body>

</html>