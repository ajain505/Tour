<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>

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
    <header class="w-100 mb-5" style="background:url(images/prject_img/about.webp); background-size:cover;">
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
                    <p class="stag wht">HOME <span class="diml stag px1">ABOUT</span></p>
                    <h1 class="wht jumbo bold6">About Us</h1>
                </div>
            </div>    
        </div> 
    </header>     
    <!--header ends-->

    <!-- tab section -->
    <section class="section-s w-100 mb-0">
            <div class="container">
                <div class="row bod">
                    <div class="col-lg-6 bod">
                        <img src="images/prject_img/about_img.jpg" class="w-100">  
                    </div>
                    <div class="col-lg-6 bod ">

                        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="abt_btn nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">What we do</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" abt_btn nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Our mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class=" abt_btn nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Our goal</button>
                            </li>
                        </ul>
                        <div class="tab-content ms-3" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h5 class="blk1">Offering Reliable Hosting</h5>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.
                                    <br>
                                    Some placeholder content for the first collapse component of this multi-collapse example.Animi iusto vero dolorum nobis similique dolore aspernatur pariatur Separated they live in Bookmarksgrove right at the coast. </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h5 class="blk1">Exceptional Web Solutions</h5>
                                    Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger
                                    large ocean.
                                    <br>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean..
                                </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> 
                                <h5 class="blk1">Help Our Customer</h5>
                                    Some placeholder content for the second collapse component of this multi-collapse example  by default but revealed when the user activates the relevant trigger
                                    large. 
                                    <br>
                                     Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tab section end -->

        <!-- acordian section -->
        <section class="w-100 section-m">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <p class="dim">FAQ</p>
                        <h3 class="mb5"><span class="bold5">Frequently</span> <span class="bold3">Asked Questions</span></h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    When she reached the first hill?
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Italic Mountains, she had a last
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Bookmarksgrove, the headline?
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                                   Alphabet Village and the subline of her own?
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false" aria-controls="panelsStayOpen-collapsefive">
                                    Then she continued her way?
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfive">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- acordian ends -->

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