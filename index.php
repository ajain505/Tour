<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOUR</title>

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
    <header class="w-100 ">
        <div class="hero_bg p3" style="background:url(images/prject_img/bg18.jpg); background-size:cover;">
            <div class="container">
                <div class="row aic jcse jc m4 bod">
                    <div class="col-md-2 col-6 bod p-0">
                        <img src="images/icons/monnos-white.svg" class="icon_x mb-0 mrg">     
                    </div>
                    <div class="col-md-10 mhide txtr">
                        <nav class="txtr">
                            <a href="tour.php" class="nodeco nav_link bold5 active">Home</a>
                            <a href="about.php" class="nodeco nav_link bold5">About</a>
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

                <div class="row">
                    <div class="col-lg-12 col-12 bod">
                        <div class="hero_title">
                            <h1 class="jumbo bold5 wht">Explore</h1>
                            <h1 class="mb-0 bold3 wht">Your Amazing City</h1>
                            <p class="p4 whtl bold3 mb-0">Find great places to stay, eat, shop, or visit from local experts</p>
                            <form action method="post" class="flex mhide">
                                <div class="flex">
                                    <input type="text" class="form-control" placeholder="Ex: food, service, hotel" >
                                    <select class="form-control">
                                        <option disabled selected select>Where</option>
                                        <option>San Francisco USA</option>
                                        <option>Berlin Gremany</option>
                                        <option>London United Kingdom</option>
                                        <option>Paris Italy</option>
                                    </select>
                                </div>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                            <p class="p4 wht bold3 mb-0 mhide">Or browse the highlights</p>
                            <div class="flex hero_links mb5 mhide">
                                <a href="#" class="hero_btn">
                                    <img src="images/prject_img/cutlery.png" class="hero_icon">
                                    <!-- <i class="fas fa-utensils sicon aic"></i> -->
                                    Restaurant
                                </a>
                                <a href="#" class="hero_btn">
                                    <img src="images/prject_img/hotel.png" class="hero_icon">
                                    <!-- <i class="fas fa-hotel sicon aic"></i> -->
                                    Hotel
                                </a>
                                <a href="#" class=" hero_btn">
                                    <img src="images/prject_img/place.png" class="hero_icon">
                                    <!-- <i class="fas fa-map-marker-alt sicon aic"></i> -->
                                    Places
                                </a>
                                <a href="#" class="hero_btn">
                                    <img src="images/prject_img/shopping-bag.png" class="hero_icon">
                                    <!-- <i class="fas fa-shopping-cart sicon aic "></i> -->
                                    Shopping
                                </a>
                            </div>   
                        </div>
                    </div>   
                </div>   
            </div>
        </div>
    </header>
    <!-- header ends -->
    
    <!-- card1 section -->
        <section class="section bod w-100 #f8faff">
            <div class="container bod">
                <div class="row">
                    <div class="col-md-3 bod neg_mt">   
                       <!-- Service Card -->
                       <div class="svc_card text-center svc_card--2">
                            <img src="images/prject_img/guarantee.png" class="svc_card--icon p2">
                            <h3 class="svc_card--title p4 mb-0">Best Price</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                        <!-- Service Card -->
                    </div>
                    <div class="col-md-3 bod neg_mt">
                         <!-- Service Card -->
                       <div class="svc_card text-center svc_card--2 ">
                            <img src="images/prject_img/heart.png" class="svc_card--icon p2">
                            <h3 class="svc_card--title p4 mb-0">Travellers Love Us</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                        <!-- Service Card -->
                    </div>
                    <div class="col-md-3 bod neg_mt">
                         <!-- Service Card -->
                       <div class="svc_card text-center svc_card--2 ">
                            <img src="images/prject_img/detective.png" class="svc_card--icon p2">
                            <h3 class="svc_card--title p4 mb-0">Best Travel Agent</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                        <!-- Service Card -->
                    </div>
                    <div class="col-md-3 bod neg_mt">
                         <!-- Service Card -->
                       <div class="svc_card text-center svc_card--2 ">
                            <img src="images/prject_img/support.png" class="svc_card--icon p2">
                            <h3 class="svc_card--title p4 mb-0">Our Support </h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                        <!-- Service Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Card1 section ends-->

         <!-- Carousal starts-->
            <section class="section-m bod w-100">
                <div class="container bod">
                    <div class="row">
                        <p class="dim">Featured</p>
                        <h3><span class="bold5">Featured</span> <span class="bold3">Destination</span></h3>
                    </div>

                      <!-- slider -->
                      <!-- Carousel -->
                      <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>
                        
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                                <img src="images/prject_img/bg13.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h4>Los Angeles</h4>
                                    <p>We had such a great time in LA!</p>
                                </div>
                          </div>
                          <div class="carousel-item">
                                <img src="images/prject_img/bg13.jpg" alt="Chicago" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h4>Los Angeles</h4>
                                    <p>We had such a great time in LA!</p>
                                </div>
                          </div>
                          <div class="carousel-item">
                                <img src="images/prject_img/bg13.jpg" alt="New York" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h4>Los Angeles</h4>
                                    <p>We had such a great time in LA!</p>
                                </div>
                          </div>
                        </div>
                        
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </button>
                      </div>
               </div>
            </section>
            <!-- End of Carousal-->

            <!-- Tour Packages -->
            <section class="section-m bod w-100">
                <div class="container bod">
                    <!-- Heading portion -->
                    <div class="row">
                        <p class="dim">Special Offers</p>
                        <h3><span class="bold5">Top</span> <span class="bold3">Tour Packages</span></h3>
                    </div>
                    <!-- Heading portion -->
                    <!-- Row 1 -->
                    <div class="row jcc">
                        <div class="col-lg-12">
                        <div class="row"> 
                        <?php
                        $con=mysqli_connect("localhost","root","","tour");
                        $r=mysqli_query($con,"select * from packages order by id desc");
                        while($row=mysqli_fetch_array($r)){
                        ?>
                            <div class="col-md-6 col-lg-3 p-0">
                                <!-- Service Card -->
                                <div class="svc_card svc_card--2 p-0 bora ">
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
                                               <a href="user_pkg.php?a= <?php echo $row[0]; ?>" target="_blank"><button class="card2_btn">Discover</button>
                                                </a>
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
        <!-- tour packages end -->

         <!-- fun facts -->
         <section class="w-100 bg_ff"style="background-image:linear-gradient(#2ebdc4b8, #68e5b2b8), url(images/prject_img/bg18.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="txtc wht bold4">Some Fun Facts</h2>
                        <p class="txtc wht bold3">More than 100,000 websites hosted</p>
                    </div>  
                    <div class="counters">
                        <div>
                            <div class="counter" data-target="40000">0</div>
                            <h5 class="bold3">Happy Customers</h5>
                        </div>
                        <div>
                            <div class="counter" data-target="30000">0</div>
                            <h5 class="bold3">Destination Places</h5>
                        </div>
                        <div>
                            <div class="counter" data-target="16000">0</div>
                            <h5 class="bold3">Hotels</h5>
                        </div>
                        <div>
                            <div class="counter" data-target="8000">0</div>
                            <h5 class="bold3">Restaurant</h5>
                        </div>
                    </div>
                </div>    
            </div>           
        </section>  
        <!-- fun facts end -->

         <!-- Popular hotels & rooms -->
         <section class="section-m bod w-100">
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
                                            <a href="user_htl.php?b= <?php echo $row[0]; ?>" target="_blank">
                                            <button class="card2_btn">Book</button>
                                            </a>
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

        <!-- Popular Restaurants -->
        <section class="section-m bod w-100">
                <div class="container bod">
                    <!-- Heading portion -->
                    <div class="row">
                        <p class="dim">Special Offers</p>
                        <h3><span class="bold5">Popular</span> <span class="bold3">Restaurants</span></h3>
                    </div>
                    <!-- Heading portion -->
                    <!-- Row 1 -->
                    <div class="row jcc">
                        <div class="col-lg-12">
                        <div class="row"> 
                        <?php
                        $con=mysqli_connect("localhost","root","","tour");
                        $r=mysqli_query($con,"select * from restro order by id desc");
                        while($row=mysqli_fetch_array($r)){
                        ?>
                        <div class="col-md-6 col-lg-3 p-0">
                                <!-- Service Card -->
                                <div class="svc_card svc_card--2 p-0 bora">
                                    <img src="upload/<?php echo $row[3]; ?>" class="w-100 imgh" alt="svc_card--icon">
                                    <div class="pxy3">
                                        <p class="mtag bold5"><?php echo $row[1]; ?></p>
                                        <p class="mtag"><?php echo $row[2]; ?></p>
                                        <hr>
                                        <div class="row">
                                            <div class="col-9">
                                                <span><i class="fa-regular fa-map"></i></span> San Francisco, CA</div>
                                            <div class="col-3 aic">
                                            <a href="user_res.php?c= <?php echo $row[0]; ?>" target="_blank">
                                                <button class="card2_btn">Book</button>
                                            </a>    
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
        <!-- Popular Restaurants-->

        <!-- Get Start -->
    <section class="section-lx" style="background-image:linear-gradient(#2ebdc4b8, #68e5b2b8), url(images/prject_img/bg18.jpg);">
        <div class="container">
            <div class="row justify-content-center bod">
                <div class="col-md-9">
                    <!-- Wordblock subheading -->
                    <div class="wordblock text-center ">
                        <div class="wht">
                            <div class="p5">
                                <h2 class="bold4">Subcribe to our Newsletter</h2>
                                <p class="p1">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                                </p>
                            </div>
                            <div class=" p3 flex justify-content-center">
                                <input type="text" class="instyle pxy2 mtag" placeholder="Enter Your Email" name="">
                                <button class="card2_btn">Suscribe</button>
                            </div>
                        </div>
                    </div>
                    <!-- Wordblock end -->
                </div>
            </div>
        </div>

    </section>
    <!-- End Get Start -->



       

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

<script>
    const counters = document.querySelectorAll('.counter');
const speed = 1000; // The lower the slower

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		// Lower inc to slow and higher to slow
		const inc = target / speed;

		// console.log(inc);
		// console.log(count);

		// Check if target is reached
		if (count < target) {
			// Add inc to count and output in counter
			counter.innerText = count + inc;
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});

</script>
</body>

</html>

