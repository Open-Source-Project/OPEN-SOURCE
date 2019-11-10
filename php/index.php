<?php
require('db.php');
include("auth.php");
?>
<?php
  $db = mysqli_connect("localhost", "root", "", "image_upload");

  $msg = "";
  if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $target = "images/".basename($image);

    $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="900;url=logout.php" />
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
    <style type="text/css">

   
</style>
</head>
<style type="text/css">
    .col-sm-6, .col-lg-4{
        padding-top: 12px;
    }
    .head_project{
        margin: auto;
        margin-top: 200PX;


    }
    #content{
    	 background-color: #f7f7f7;
  padding: 100px 0px 20px;
   	border: 1px solid #cbcbcb;
    }
    #content>input{
    	float: right;
    }
    #content>form{
    	margin: 0;
    }
    

@media (max-width: 991px) {
  /* line 2, E:/172 Etrain Education/172_Etrain_Education_html/sass/_footer.scss */
  #content {
    padding: 70px 0px 30px;
  }
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
                        <h2>PROJECT UPLOAD PORTAL</h2>
                    </div>
                    
                </div>
            </div>
            <section style="margin-top: -40px;">
        
            <div class="" style="margin-bottom: 15px;">
            <b style="font-size: 18px;">Upload your project with name relative to your project.<br>Project should be docx file otherwise it will not be considered.</b>
                
                     
            
        </div>
        <div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form  method="POST" name="myForm" onsubmit="return redirect()" action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <label>File To Upload :</label> <input type="file" name="image">
    </div>
    <div>
    	<label>Project Name:</label>
    	<input type="text" name="pname">
    </div>
    <div>
      <textarea 
        id="text" 
        cols="30" 
        rows="2" 
        name="image_text" 
        placeholder="Short Description"></textarea>
    </div>
    <div>
        <button type="submit" name="upload">Upload</button>
    </div>
  </form>
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
<script type="text/javascript">
    function redirect() {
 window.location.href = 'thank.html';
        }
</script>
    
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>