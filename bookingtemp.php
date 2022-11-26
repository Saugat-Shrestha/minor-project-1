<?php
$con = mysqli_connect('localhost', 'root', '', 'loginsignup');

$id = $_GET['id'];
$displayquery = "select * from images where id = '$id'";
$querydisplay = mysqli_query($con, $displayquery);
$result = mysqli_fetch_assoc($querydisplay);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
   
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="litchibot.css">
  <script src="litchi.js"></script>
</head>
<body>

<!-- header section starts -->
<header>


    <a href="personal.php"><img src="images/logo1.png" class="logo" width="50px" height="50px " alt=""></a>
    

   
</header>
  

    <div class="container">
        <div class="content">
           <div class="left-content">
            
               <div class="f-logo">
               <h1> <i class="fas fa-utensils"></i>  <?php print($result['partypalacename']) ?></h1>
                <img src="<?php print($result['images']) ?>" id="pic"   alt="">
                <h1>Details</h1>
             
                <h2 class="th"> <?php print($result['details']) ?> </h2>
                <br>
                <br>
                <table>
                    <tr>
                        <th class="bd">Location</th>
                        <th class="bd">Capacity</th>
                        <th class="bd">Available</th>
                        <th class="bd">Phone-number</th>
                    </tr>
                    <tr>
                        <th class="th"><i class="fas fa-location-arrow"> <?php print($result['location']) ?></i></th>
                        <th class="th"><?php print($result['capacity']) ?></th>
                        <th class="th"> </i><?php print($result['available']) ?></th>
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
                        <th class="th"><div class="price">Rs<?php print($result['pricing']) ?> </div></th>
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
                        <form action="delete1.php">
                              <div class="inputBox">
                                  <h3>Occasion</h3>
                                  <input type="text" placeholder="Occasion" required>
                              </div>
                              <div class="inputBox">
                                <h3>how many</h3>
                                <input type="number" placeholder="number of guests" required>
                            </div>
                            <div class="inputBox">
                                <h3>Event Date</h3>
                                <input type="date" required>
                            </div>
                            
                            <input type="submit" name="submit" class="btn" value="book now">
                           

                            
                        </form>
                    </div>
                </section>

               </div>
              
           </div>
        </div>
    </div>


<section class="packages" id="packages">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>
    </h1>
<div class="box-container">
    <div class="box">
        <img src="default.jpg" alt="">
        <div class="content">
            <h3>Santosh Paudel</h3>
                    <p>A party palace for general people for
                         any get together for celebrating any social functions, like wedding, birthday etc. 
                         It is centrally located in the heart of the city..</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
            
        </div>
    </div>

    <div class="box">
        <img src="default.jpg" alt="">
        <div class="content">
            <h3>Sumit Karmacharya</h3>
            <p>A party hall for all occasions, ceromany and custom.
                Well manage environment with ready to help staff and management level.
                Although the parking space is cozy but enough for medium size events.
                Located just above Metro city hospital or Srijana Chowk is an ideal spot for the citizens of Pokhara city.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
        </div>
    </div>

    <div class="box">
        <img src="default.jpg" alt="">
        <div class="content">
            <h3>Ujjwal BK</h3>
            <p>Really they know what they are doing. They hire expert staff mostly from India which I would like to see more local staff. But that don't mean any bad, I am really happy with the management crew. 
                They never seem to to tired even after my 4 day event. Thank you for making my wedding best event in my life.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
        </div>
    </div>

    <div class="box">
        <img src="default.jpg" alt="">
        <div class="content">
            <h3>Subarna Paudel</h3>
                    <p>2 years ago
                        I strongly recommend this company for Weddding management and flower decorators in all over Nepal.
                         They guys knows what exactly we want and provide service more than what we want❤️</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
        </div>
    </div>

    

    
    
</div>
</section>

<!-- review section ends -->

    
    
</body>
</html>