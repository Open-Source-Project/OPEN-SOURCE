<?php
require('db.php');
include("auth.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OPEN SOURCE LEARNING</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/1d7e334a29.js"></script>
    <script type="text/javascript">var submitted=false;</script>
    <script type="text/javascript">var submited=false;</script>
</head>
<style type="text/css">
    .col-sm-6, .col-lg-4{
        padding-top: 12px;
    }
    .head_project{
        margin: auto;
        margin-top: 200PX;

    }
</style>
<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../index.html"> <img src="img/logo4.png" height="80px" alt="logo" > </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../course.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="project.php">Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../contact.html">Contact</a>
                                </li>
                                <!--li class="nav-item">
                                    <a class="nav-link" href="profile.html">Profile</a>
                                </li-->
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="logout.php">SIGN OUT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<section class="banner_part2" style="background-color: #F5F5F5; background-image: url(img/banner_bg.png); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            
                <div class="row justify-content-center" style="margin-top: 130px; margin-bottom:  -50px;">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>PROJECTS</h2>
                    </div>
                    <div class="section_tittle text-center" style="margin-top: -50px;margin-bottom: -20px;">
                        <h4>Enhance your skills by working on projects.</h4>
                    </div>
                </div>
            </div>
            <section class="feature_part" style="margin-top: -40px;">
        
        <div class="container" style="margin-bottom: 15px;">
            <div class="row">
                <!--div class="col-md-4 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Awesome <br> Feature</h2>
                        <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div-->
                
                	<div class="col-sm-6 col-xl-3"><a href="htmlproject.html">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-html5" aria-hidden="true"></i></span>
                            <h4>HTML5</h4>
                            <p>Simple designing projects based only upon HTML.</p>
                        </div>
                    </div></a>
                </div>
            	</a>
            	
                <div class="col-sm-6 col-xl-3">
                	<a href="sqlproject.html">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                            <h4>My SQL</h4>
                            <p>Simple data management using mysql.</p>
                        </div>
                    </div></a>
                </div>
            	
            	
                <div class="col-sm-6 col-xl-3"><a href="jsproject.html">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                            <h4>Java Script</h4>
                            <p>Design codes for webpages that will make webiste dynamic.</p>
                        </div>
                    </div></a>
                </div>
                
                <div class="col-sm-6 col-xl-3"><a href="cssproject.html">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-css3" aria-hidden="true"></i></span>
                            <h4>CSS</h4>
                            <p>Give design to multiple webpage available over there.</p>
                        </div>
                    </div>
                </div></a>
            </div>
        </div>
    </section>
        </div>
    </section>
    
    


    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>OPEN SOURCE LEARNING is an online learning platform which provides learners to learn things without any cost.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" 
                        onload="if(submited) {window.location='thankyou.html';}"></iframe>
                        <form action="https://docs.google.com/forms/u/5/d/e/1FAIpQLSdmXnHGR5c2vW14bWsJkDntwN5j1DGfrnAlHr2usZDVXBax_A/formResponse"  target="hidden_iframe" onsubmit="submited=true;">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="entry.107508421" required="" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <input class="btn_1" type="submit" value="GO">
                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span>Sector 26, Model Town, New Delhi</p>
                            <p><span> Phone :</span> +91 987 249 4705</p>
                            <p><span> Email : </span>info@open-source-learning.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://open-source-learning.com" target="_blank">Open-Source-Learning team</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>