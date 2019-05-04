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
                             <br><br><br>
                        <div class="container bg-light" style="padding:10px;">
                           
                          <form  action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                            <div class="form-group row">
    <label for="ptype" class="col-sm-4 col-form-label">Select Complaint Type</label>
    <div class="col-sm-8">
     <select class="form-control" name ="gtype" id="gtype">
              <option value="0">Select any one</option>
              <option value="Academic">Academic</option>
              <option value="Non Academic">Non Academic</option>
               <option value="Grievance related to Assessment">Grievance related to Assessment</option>
               <option value="Grievance related to Victimization">Grievance related to Victimization</option>
               <option value="Grievance related to Attendance">Grievance related to Attendance</option>
               <option value="Grievance related to charging of fees">Grievance related to charging of fees</option>
               <option value="Grievance regarding conducting of Examination">Grievance regarding conducting of Examination</option>
               <option value="Harassment by collegue students or the teachers">Harassment by collegue students or the teachers</option>
               <option value="Others">Others</option>
        </select>
    </div>
    </div>
  
    <div class="form-group row">
    <label for="comDetails" class="col-sm-4 col-form-label">Specify Complaint</label>
    <div class="col-sm-8">
        <textarea id="comDetails" name="comDetails" required class="form-control"></textarea>
     </div>
    </div>
      <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      <button type="reset" name="clear" value="Cancel" class="btn btn-danger">Cancel</button>
      
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
