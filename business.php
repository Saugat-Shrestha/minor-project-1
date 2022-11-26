<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'loginsignup');
// $id = $_GET['id'];
$displayquery = "select * from images";
$querydisplay = mysqli_query($con, $displayquery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Bookings</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="design.css">


</head>

<body>

    <!-- header section starts -->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#"><img src="images/logo.jpg" class="logo" width="50px" height="50px " alt=""></a>
        <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#packages">VENUES</a>
            <a href="#services">SERVICES</a>
            <a href="#contact">CONTACT_US</a>
            <a href="#foot">ABOUT</a>
            
            <?php 
            if(isset($_SESSION['email'])){
            ?>
            <a href="myaccount.php">MY-ACCOUNT</a>
            <a href="logout.php">LOGOUT</a>            <a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i></a>



            <?php  } ?>
            <?php 
            if(!isset($_SESSION['email'])){
            ?>
            <a href="signup.php">SIGNUP</a>
            <a href="login.php">LOGIN</a>
<?php } ?>


        </nav>

        <div class="icons">

           
           

        </div>

     
    </header>

    <!-- header section ends -->




    <!-- home section starts -->

    <section class="home" id="home">
        <div class="content">
            <div id="banner">
                <a href="#packages" class="btn">View Details</a>
            </div>
        </div>



    </section>


    <!-- home section ends -->



    <!-- packages section starts -->

    <section class="packages" id="packages">
        <h1 class="heading">
            <span>v</span>
            <span>e</span>
            <span>n</span>
            <span>u</span>
            <span>e</span>
            <span>s</span>


        </h1>

        <div class="box-container">
            <?php
            while ($result = mysqli_fetch_array($querydisplay)) {
            ?>
                <div class="box">
                    <div class="box">
                        <img src="<?php print($result['images']) ?>" alt="">
                        <div class="content">
                            <h3><?php print($result['partypalacename']) ?></h3>
                            <br>
                            <p><i class="fas fa-map-marker-alt"></i><?php print($result['location']) ?> </p>
                            <p><?php print($result['details']) ?></p>
                            <!-- <p><i class="fa-solid fa-address-book"></i> +977 9846267924</p> -->
                           


                            <a href="viewdetails.php?id=<?php print($result['id']) ?>" class="btn">View Details</a>
                        </div>

                    </div>
                </div>






            <?php


            }



            ?>
        </div>
        </div>
    </section>


    <!-- packages section ends -->

    <!-- services section starts -->
    <br>
    <section class="services" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-archway"></i>
                <h3>affordable venue</h3>

            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>catering</h3>

            </div>
            <div class="box">
                <i class="fas fa-camera"></i>
                <h3>Photography & videography</h3>
                <p>Coming Soon</p>

            </div>
            <div class="box">
                <i class="fas fa-smile"></i>
                <h3>Makeups</h3>
                <p>Coming Soon</p>



            </div>
        </div>
    </section>




    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h1 class="heading">

            <span>c</span>
            <span>o</span>
            <span>m</span>
            <span>p</span>
            <span>l</span>
            <span>a</span>
            <span>i</span>
            <span>n</span>
            <span>-</span>
            <span>b</span>
            <span>o</span>
            <span>x</span>
        </h1>
        <div class="row">
            <div class="img">
                <img src="images/ok.jpg" alt="">
            </div>
            <form action="messageuss.php" method="POST">

                <div class="inputBox" >
                    <input type="text" name='subject' placeholder="Subject" required>
                </div>

                <textarea placeholder="Message" name="message" cols="30" rows="10" required></textarea>

                <input type="submit" name="submit" class="btn" value="submit">

            </form>
        </div>
    </section>
    <!-- contact section ends -->




    <!-- footer section -->
    <section id="foot">

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>about us</h3>
                    <p>The project ‘Events Booking’ is a convenient website which is used for reservation of
                        party palaces. It comprises booking of venues for different events at specified dates and
                        time, venue details which includes the area coverage with approximate capacity of people
                        and location . Also reviews and responses between the clients and provider is
                        comprehended. It also gives provisions of contacts of decorating teams.</p>
                </div>
                <div class="box">
                    <h3>branch locations</h3>
                    <a href="#"><i class="fas fa-location-arrow"></i> Pokhara</a>
                    <a href="#"><i class="fas fa-location-arrow"></i> Kathmandu</a>
                    <a href="#"><i class="fas fa-location-arrow"></i> Chitwan</a>

                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="#"><i class="fab fa-linkedin"></i> Likedin</a>
                </div>

            </div>

        </section>
    </section>

    <!--script-->
    <script src="main.js"></script>
</body>

</html>