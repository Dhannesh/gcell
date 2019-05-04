<div class="hero-content">
        <header class="site-header">
            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="<?=ROOT_URL?>" rel="home">
                                    <img src="<?=ROOT_URL?>images/logo4.png" class="img-fluid" width="30%"></a></h1>
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
                        <div class="hero-content-wrap flex flex-column align-items-start">
                            <br><br>
                        <div class="container bg-light" style="padding:10px;">
                          <form  action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                         
    
    <div class="form-group row">
    <label for="gtype" class="col-sm-4 col-form-label">Complaint Type</label>
    <div class="col-sm-8">
     <input type="text" class="form-control" id="gtype" name="gtype" readonly value="<?=$viewmodel['type']?>">
    </div>
    </div>

    <div class="form-group row">
    <label for="cno" class="col-sm-4 col-form-label">Complaint No.</label>
    <div class="col-sm-8">
     <input type="text" class="form-control" id="cno" name="cno" readonly value="<?=$viewmodel['srno']?>">
    </div>
    </div>
   
  
    <div class="form-group row">
    <label for="comDetails" class="col-sm-4 col-form-label">Complaint Details</label>
    <div class="col-sm-8">
        <textarea id="comDetails" name="comDetails" readonly required class="form-control"><?=$viewmodel['details']?></textarea>
     </div>
    </div>
    <div class="form-group row">
    <label for="status" class="col-sm-4 col-form-label">Select Complaint Type</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="cno" name="cno" readonly value="<?=$viewmodel['status']?>">
   
    </div>
    </div>
    <div class="form-group row">
    <label for="comments" class="col-sm-4 col-form-label">Closing Comments</label>
    <div class="col-sm-8">
        <textarea id="comments" name="comments" readonly class="form-control"><?=$viewmodel['comments']?></textarea>
     </div>
    </div>
      <a href="<?=ROOT_URL?>shares/show" class="btn btn-primary">Back</a>
      
      </form>
      <?php Messages::display() ?>
      </div>
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->
<div>

