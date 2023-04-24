<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELS</title>

    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- End Bootstrap -->

    <!--Compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- end compiled js -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ec862f73b.js" crossorigin="anonymous"></script>

    <!-- End Font Awesome -->

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600&family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
    <!-- End Google Font Link -->

    <!-- Css Link -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/extra.css">
    <!-- End Css Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- header starts -->
    <header class="w-100" style="background:url(images/prject_img/hotel.jpg); background-size:cover;">
        <div class="p2">
            <div class="container">
                <div class="row aic jcse m4 bod">
                    <div class="col-md-2 col-6 bod">
                        <img src="images/icons/monnos-white.svg" class="icon_x mb-0 mrg">     
                    </div>
                    <div class="col-md-10 mhide txtr">
                        <nav class="txtr">
                            <a href="tour.php" class="nodeco nav_link bold5 active">Home</a>
                            <a href="about.php" target=_blank class="nodeco nav_link bold5">About</a>
                            <a href="tr.php" class="nodeco nav_link bold5">Tour</a>
                            <a href="ht.php" class="nodeco nav_link bold5">Hotels</a>
                            <a href="contact.php" target="_blank" class="nodeco nav_link bold5">Contact</a>
                            <a href="signup.php" target="_blank">
                                <button class="mb-0 nav_btn">User Login</button>
                            </a>
                            <a href="adminlogin.php" target="_blank">
                                <button class="mb-0 nav_btn">Admin</button>
                            </a>
                        </nav>
                    </div>
                    <div class="col-6 dhide mblock bod txtr">
                        <span class=""><i class="fas fa-bars nav_bar"></i></span>
                    </div>
                </div>
                <div class="about_hero text-center">
                    <p class="stag wht">HOME <span class="diml stag px1">HOTEL</span></p>
                    <h1 class="wht jumbo bold6">Hotels</h1>
                </div>
            </div>    
        </div> 
    </header>     
    <!--header ends-->

    <!-- Popular hotels & rooms -->
    <section class="section bod w-100">
                <div class="container bod">
                    <!-- Heading portion -->
                    <div class="row">
                        <p class="dim">Special Offers</p>
                        <h3><span class="bold5">Popular</span> <span class="bold3">Hotels & Rooms</span></h3>
                    </div>
                    <!-- Heading portion -->
                    <!-- Row 1 -->
                    <div class="row jcc">
                        <div class="col-lg-12">
                        <div class="row"> 
                        <?php
                        $con=mysqli_connect("localhost","root","","tour");
                        $r=mysqli_query($con,"select * from hotels order by id desc");
                        while($row=mysqli_fetch_array($r)){
                        ?>
                        <div class="col-md-6 col-lg-3 p-0">
                                <!-- Service Card -->
                                <div class="svc_card svc_card--2 p-0 bora">
                                    <img src="upload/<?php echo $row[5]; ?>" class="w-100 imgh" alt="svc_card--icon">
                                    <div class="pxy3">
                                        <p class="ltag bold5"><?php echo $row[1]; ?> <span class="float-end cl"><?php echo $row[4]; ?></span></p>
                                        <p class="mtag"><?php echo $row[2]; ?></p>
                                        <p class="mtag bold5"><?php echo $row[3]; ?></p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-9">
                                                <span><i class="fa-regular fa-map"></i></span> San Francisco, CA</div>
                                            <div class="col-3 aic">
                                                <button class="card2_btn">Book</button>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Service Card -->
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Popular hotels & rooms -->


    <!-- footer -->
    <footer>
        <section class="section w-100 footer_bg">
            <div class="container">
                <div class="row bod jcsb">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-6 mb bod">
                        <p class="bold6">monnos</p>
                        <ul class="footer_link lstn noblue">
                            <li>
                                <a href="#">Free Animations</a>
                            </li>
                            <li>
                                <a href="#">Marketplace</a>
                            </li>
                            <li>
                                <a href="#">Hire Animators</a>
                            </li>
                            <li>
                                <a href="#">Showcase</a>
                            </li>
                            <li>
                                <a href="#">Sell animations</a>
                            </li>
                        </ul>
                    </div>
    
    
                    <div class="col-lg-3 col-md-2 col-sm-2 col-6 mb bod">
                        <p class="bold6 ">Information</p>
                        <ul class="footer_link lstn noblue">
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Service</a>
                            </li>
                            <li>
                                <a href="#">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="#">Become a partner</a>
                            </li>
                            <li>
                                <a href="#">Best Price Guarantee</a>
                            </li>
                            <li>
                                <a href="#">Privacy and Policy</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-lg-2 col-md-2 col-sm-3 col-6 mb bod">
                        <p class="bold6">Customer Support</p>
                        <ul class="footer_link lstn noblue">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>
                                <a href="#">Payment Option</a>
                            </li>
                            <li>
                                <a href="#">Booking Tips</a>
                            </li>
                            <li>
                                <a href="#">How it works</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="col-lg-2 col-md-2 col-sm-3 col-6 bod">
                        <div class="mb5">
                            <p class="bold6">Get Trafford for mobile and desktop</p>
                            <div>
                                <a href="#" class="ft_icon"><i class="fab fa-android licon px1"></i></a>
                                <a href="#" class="ft_icon"><i class="fas fa-desktop micon px1"></i></a>
                                <a href="#" class="ft_icon"><i class="fab fa-apple licon"></i></a>
                            </div>
                        </div>
                        <div>
                            <p class="bold6">Social</p>
                            <div>
                                <a href="" class="ft_icon">
                                    <i class="fab fa-facebook  footer_icons micon"></i>
                                </a>
                                <a href="" class="ft_icon">
                                    <i class="fab fa-instagram footer_icons micon"></i>
                                </a>
                                <a href="" class="ft_icon">
                                    <i class="fab fa-twitter footer_icons micon"></i>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>        
            </div>
        </section>
    
        <section class="p3 w-100 footer_bg2">
            <hr>
            <div class="container">
                <div class="row jcsb aic">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-7">
                        <p class="stag mb-0">Copyright © 2021 monnos.com</p>
                        <p class="stag mb-0">Designed by Aastha and Shivani</p>
                    </div> 
                    <div class="col-lg-5 col-md-5 col-sm-6 col-5">
                        <div class="flex fwr footer_link">
                            <a href="#" class="px3 stag">Feedback</a>
                            <a href="#" class="px3 stag">Press</a>
                            <a href="#" class="px3 stag">Team</a>
                            <a href="#" class="px3 stag">Careers</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
    </footer>
    <!-- footer -->

</body>
</html>

