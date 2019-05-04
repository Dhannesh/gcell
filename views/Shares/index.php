<div class="hero-content">
        <header class="site-header">
          
            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="<?=ROOT_URL?>" rel="home">
                                    <img src="<?=ROOT_URL?>images/logo4.png" class="img-fluid" width="50%"></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="<?=ROOT_URL?>">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <?php if(isset($_SESSION['is_logged_in'])): ?>
                                        <li><a href="<?=ROOT_URL?>users/logout">Logout</a></li>
                                    <?php endif; ?>
                          </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->

                                <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->

        <div class="hero-content-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                  
                                <h1>College of Engineering Roorkee</h1>
                                <?php if(isset($_SESSION['is_logged_in'])): ?>
                                <h2 class="text-light">Welcome Mr/Ms <?=$_SESSION['user_data']['name']?></h2>
<?php else: ?>
<h2 class="text-light">COER online<br/>
Grievance & Redressal System</h2>
<?php endif; ?>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>The Students are the main stakeholders in any institution imparting education, and its our endeavour to make all efforts to ensure transparency in all the activities at different stages</p>
                            </div><!-- .entry-content -->
                             <footer class="entry-footer read-more">
                                 <div class="row">
                                 <?php if(isset($_SESSION['is_logged_in'])): ?>
                                <a href="<?=ROOT_URL?>shares/add">Post Complaint</a> &nbsp; &nbsp;
                                 <a href="<?=ROOT_URL?>shares/show">Show Status</a>
<?php else: ?>
<a href="#" data-toggle="modal" data-target="#loginModal">Login</a> &nbsp; &nbsp;
                                 <a href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                               
<?php endif; ?>
                                </div>
                            </footer><!-- .entry-footer -->
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->

</div>
