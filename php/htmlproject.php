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
    <script type="text/javascript">var submied=false;</script>
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
                        <h2>HTML PROJECTS</h2>
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
                
                	<div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <a href="htmlproject.php#h1"><div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                            <h4>Login page with validation</h4>
                            <button type="button" id="formButton" class="btn_1">VIEW
                        </button>
                        </div></a>
                    </div>
                </div>
            	
            	
                <div class="col-sm-6 col-xl-3">
                	
                    <div class="single_feature">
                        <a href="htmlproject.php#h2"><div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                            <h4>A HTML datasheet using tables</h4>
                            <button type="button" id="formButton1" class="btn_1">VIEW
                        </button>
                        </div></a>
                    </div>
                </div>
            	
            	
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <a href="htmlproject.php#h3"><div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                            <h4>Video player using only HTML</h4>
                            <button type="button" id="formButton2" class="btn_1">VIEW
                        </button>
                        </div></a>
                    </div>
                </div>
                
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <a href="htmlproject.php#h4"><div class="single_feature_part">
                            <span class="single_feature_icon"><i class="fa fa-code" aria-hidden="true"></i></span>
                            <h4>A pure html signup page.</h4>
                            <button type="button" id="formButton3" class="btn_1">VIEW
                        </button>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        </div>
    </section>
    
   

    <section class="banner_part2" style="background-color: #F5F5F5; background-image: url(img/banner_bg.png); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            
                <div class="row justify-content-center" style="margin-top: 130px; margin-bottom:  -50px;">
                <div class="col-xl-5" id="h1">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>HTML FIRST PROJECT</h2>
                    </div>
                    
                </div>
            </div>
            <section style="margin-top: -40px;">
        
            <div class="" style="margin-bottom: 15px;">
            <b style="font-size: 18px;">For this assignment, design a login page that contains the following part:</b>
                <div class="points">
                     <li>Create two HTML webpage login.html and user.html.</li>
                     <li>For login.html, create a form that should have 4 input elements.</li>
                     <li>Add a div class “login-page” for login page and a div class “form” for form.</li>
                     <li>The form method should be set to POST, and the action should be a new html page – user.html.</li>
                     <li>No input field should remain empty.</li>
                     <li>When user click submit user should redirect to user.html</li>
                     <li>In user Thank You message will be there which should go up and down continuously</li>
                </div>  
                <div class="img_proj col-lg-12">
                    <h6>Sample of Page is given below</h6>
                     <img src="img/login.jpg">
                </div> 
                <a href="index.php"><button type="button" id="formButton" class="btn_1">Upload File
                        </button></a>
                        
            
        </div>
        
       
    </section>
        </div>
    </section>

    <section class="banner_part2" style="background-color: #F5F5F5; background-image: url(img/banner_bg.png); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            
                <div class="row justify-content-center" style="margin-top: 130px; margin-bottom:  -50px;">
                <div class="col-xl-5" id="h2">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>HTML SECOND PROJECT</h2>
                    </div>
                    
                </div>
            </div>
            <section style="margin-top: -40px;">
        
            <div class="" style="margin-bottom: 15px;">
            <b style="font-size: 18px;">For this assignment, design a table page that contains the following part:</b>
                <div class="points">
                     <li>Create one HTML webpage data.html</li>
                     <li>For data.html, create a table that consists of 4 columns.</li>
                     <li>Add a div class “outer” for outer design and a div class “inside_table” for inside details.</li>
                     <li>The table should have proper border.</li>
                     <li>No  field should remain empty.</li>
                     <li>When user click submit user should redirect to user.html</li>
                     
                </div>  
                <div class="img_proj col-lg-12">
                    <h6>Sample of Page is given below</h6>
                     <img src="img/Table.jpg">
                </div> 
                  <a href="index.php"><button type="button" id="formButton" class="btn_1">Upload File
                        </button></a>      
            
        </div>
        
       
    </section>
        </div>
    </section>

    <section class="banner_part2" style="background-color: #F5F5F5; background-image: url(img/banner_bg.png); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            
                <div class="row justify-content-center" style="margin-top: 130px; margin-bottom:  -50px;">
                <div class="col-xl-5" id="h3">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>HTML THIRD PROJECT</h2>
                    </div>
                    
                </div>
            </div>
            <section style="margin-top: -40px;">
        
            <div class="" style="margin-bottom: 15px;">
            <b style="font-size: 18px;">For this assignment, design a video page that contains the following part:</b>
                <div class="points">
                     <li>Create one HTML webpage vp.html.</li>
                     <li>For vp.html, create a div that  have a video inserted in it.</li>
                     <li>Add a div class “button” for button like play,pause etc. </li>
                     <li>Video should be autoplayed</li>
                     <li>Set proper height and video.</li>
                     <li>Video should be in center of the screen.</li>
                     
                </div>  
                <div class="img_proj col-lg-12">
                    <h6>Sample of Page is given below</h6>
                     <img src="img/video.jpg">
                </div> 
                        <a href="index.php"><button type="button" id="formButton" class="btn_1">Upload File
                        </button></a>
            
        </div>
        
       
    </section>
        </div>
    </section>


    <section class="banner_part2" style="background-color: #F5F5F5; background-image: url(img/banner_bg.png); background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            
                <div class="row justify-content-center" style="margin-top: 130px; margin-bottom:  -50px;">
                <div class="col-xl-5" id="h4">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>HTML FOURTH PROJECT</h2>
                    </div>
                    
                </div>
            </div>
            <section style="margin-top: -40px;">
        
            <div class="" style="margin-bottom: 15px;">
            <b style="font-size: 18px;">For this assignment, design a Signup page that contains the following part:</b>
                <div class="points">
                     <li>Create two HTML webpage Signup.html and user.html.</li>
                     <li>For Signup.html, create a form that should have 4 input elements.</li>
                     <li>Add a div class “Signup-page” for Signup page and a div class “form” for form.</li>
                     <li>The form method should be set to POST, and the action should be a new html page – user.html.</li>
                     <li>No input field should remain empty.</li>
                     <li>When user click submit user should redirect to user.html</li>
                     <li>In user Thank You message will be there which should go up and down continuously</li>
                </div>  
                <div class="img_proj col-lg-12">
                    <h6>Sample of Page is given below</h6>
                     <img src="img/Signup.png" width="500px">
                </div> 
                  <a href="index.php"><button type="button" id="formButton" class="btn_1">Upload File
                        </button></a>      
            
        </div>
        
       
    </section>
        </div>
    </section>
    <!--section class="testimonial_part" id="form2">
        <div class="container-fluid">
            <div class="" >hdsghfksm    jskejfmk nfkk, sxlchn</div>
        </div>
    </section>
    <section class="testimonial_part" id="form3">
        <div class="container-fluid">
            <div class="" >gfghnb fjhnc hfjjc</div>
        </div>
    </section>
    <section class="testimonial_part" id="form4">
        <div class="container-fluid">
            <div class="" >hdsghfksmsxlj fnjnfieekfjmi hfejdnjfh khfejhfnchn</div>
        </div>
    </section-->
    


    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="../index.html"> <img src="img/logo.png" alt=""> </a>
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