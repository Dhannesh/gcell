
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

    <div class="icon-boxes">
        <div class="container-fluid">
            <div class="flex flex-wrap align-items-stretch">
                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-book"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Academic</h2>
                    </header><!-- .entry-header -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Non Academic</h2>
                    </header><!-- .entry-header -->

                  
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-folder"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Grievance related to Assessment</h2>
                    </header><!-- .entry-header -->
                </div><!-- .icon-box -->
                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-world"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Grievance related to Victimization</h2>
                    </header><!-- .entry-header -->
                </div><!-- .icon-box -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .icon-boxes -->
 <div class="icon-boxes">
        <div class="container-fluid">
            <div class="flex flex-wrap align-items-stretch">
                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Grievance related to Attendance</h2>
                    </header><!-- .entry-header -->
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-user"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Grievance related to charging of fees</h2>
                    </header><!-- .entry-header -->

                  
                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-folder"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Grievance regarding conducting of Examination</h2>
                    </header><!-- .entry-header -->

                   

                </div><!-- .icon-box -->

                <div class="icon-box">
                    <div class="icon">
                        <span class="ti-world"></span>
                    </div><!-- .icon -->

                    <header class="entry-header">
                        <h2 class="entry-title">Harassment by collegue students or the teachers etc.</h2>
                    </header><!-- .entry-header -->

                 

                 
                </div><!-- .icon-box -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .icon-boxes -->


    
<!--    Register Modal start-->
     <div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
      <div class="modal-header">
          <h4 class="modal-title">Registration Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
             <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
                     
            <div class="form-group">         
                <input type="text" class="form-control" autocomplete="off" required placeholder="Enter Full Name" name="fname" id="fname">
                </div>
            <div class="form-group">
                    <div class="row">
                <div class="col-sm-8">
            <input type="number" class="form-control" autocomplete="off" required id="mobile" maxlength="10" placeholder="Enter Mobile No" name="mobile">
                    </div>
                         
            <div class="col-sm-4">
               
                      <button type="button" name="button" value="sendOTP" onclick="sendOTP()" class="btn btn-primary">Send OTP</button>
                    
                       
                    </div>
                </div>
                    </div>
    <div class="form-group">
         <div class="row">
             <div class="col-sm-5">
        <input type="number" class="form-control" required autocomplete="off" maxlength="6" name="otp" id="otp" placeholder="Enter OTP No" name="otp">
             </div>
             <div class="col-sm-7">
                 <input type="password" class="form-control" required placeholder="Enter Password"  name="pass1" id="pass1">
             </div>
        </div>
        
    </div>
                
                 <div class="row">
                    <div class="col-sm-4">
                         <button type="button" name="submit" onclick="doRegister()" value="register" class="btn btn-success right">Register</button>
                     </div>
                     <div class="col-sm-8">
                          <div class="form-group text-danger" id="result">&nbsp;</div>
                     </div>
                 </div>
               
            </form>
        </div>
        
      </div>
    </div>
  </div>
<!--    Register Modal end-->

<!--    Login Modal start -->
      <div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
   
          
          
          <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" role="form">
                <div class="form-group">
               
                <input type="number" class="form-control" id="mobile" maxlength="10" required placeholder="Enter Mobile" name="mobile">
                </div>
                 <div class="form-group">
               
                <input type="password" class="form-control" id="pass" required placeholder="Enter Password" name="pass">
                </div>
                <button type="submit" name="submit" value="login" class="btn btn-success right">Login</button>
            </form>
        </div>
       
      </div>
    </div>
  </div>
<!--    Login Modal end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type='text/javascript' src='<?=ROOT_URL?>js/swiper.min.js'></script>
<script type='text/javascript' src='<?=ROOT_URL?>js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='<?=ROOT_URL?>js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='<?=ROOT_URL?>js/custom.js'></script>
<script>

    function sendOTP(){
       
           var mobile = $('#mobile').val();
           var fname = $('#fname').val();
           if(jQuery.trim(mobile)=="" || mobile==null || mobile.length<10 ||mobile.length>10){
             
            $('#result').show();
            $('#result').html('Missing/Invalid Mobile No');
             return;
            }
           $.ajax({
              type:"POST",
              url:"./include/sendSMS2.inc.php",
              data:{sender:mobile,email:fname},
                success:function(response){
                    $('#result').show();
                    $('#result').html(response);
                }
          });
           
}
    
    function doRegister(){
            var mobile = $('#mobile').val();
            var fname = $('#fname').val();
            var userOTP = $('#otp').val();
            var pass1 = $('#pass1').val();
        
         if(jQuery.trim(mobile)=="" || mobile==null || mobile.length<10 ||mobile.length>10){
             
            $('#result').show();
            $('#result').html('Missing/Invalid Mobile No');
             return;
            }
           $.ajax({
              type:"POST",
              url:"./include/doRegister.inc.php",
              data:{sender:mobile,email:fname,userOTP:userOTP,pass1:pass1},
                success:function(response){
                    $('#result').show();
                    $('#result').html(response);
                }
          });
    }
    


</script>