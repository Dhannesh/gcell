<?php header('Access-Control-Allow-Origin:*'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to COER Online Grievance &amp; Redressal System</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="<?=ROOT_URL?>css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="<?=ROOT_URL?>css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="<?=ROOT_URL?>css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?=ROOT_URL?>css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?=ROOT_URL?>css/style.css">
</head>
<body>

<div>
   
    <?php require($view); ?>
    
<footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <a class="foot-logo" href="#"><img src="images/logo41.png" class="img-fluid" alt="COER Logo" width="80%"></a>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact Us</h2>

                            <ul>
                                <li>Email: grs@coer.ac.in</li>
                                <li>Phone: (+91) 87553 19302</li>
                                <li>Address: Vardhmanpurm, Roorkee, Haridwar, Uttarakhand - 247667</li>
                            </ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="quick-links flex flex-wrap">
                            <h2 class="w-100">Quick Links</h2>

                            <ul class="w-50">
                                <li><a href="#">About </a></li>
                                <li><a href="#">Terms of Use </a></li>
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>

                            <ul class="w-50">
                                
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="follow-us">
                            <h2>Follow Us</h2>

                            <ul class="follow-us flex flex-wrap align-items-center">
                               
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    </div>

</body>
</html>