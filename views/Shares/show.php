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
                        <table class="table table-hover">
                        <thead>
                        <tr>
                        <th>Complaint No</th>
                        <th>Type</th>
                        <th>Complaint</th>
                        <th>Status</th>
                        <th>Date</th>
                        
                        </tr>
                        </thead>
    
    <tbody>
       
    <?php foreach($viewmodel as $item): ?>
    <tr>
        <td><?=$item['srno']?></td>
        <td><?=$item['type']?></td>
        <td><?=$item['details']?></td>
        <td><a href="<?=ROOT_URL?>shares/details/<?=$item['srno']?>"><?=$item['status']?></a></td>
        <td><?=date("j M Y", strtotime($item['doc']))?></td>
        <?php if($_SESSION['user_data']['name']=='admin'): ?>
        <td><a href="<?=ROOT_URL?>shares/update/<?=$item['srno']?>">Update</td>

<?php endif; ?>
    </tr>
<?php endforeach;?>
</tbody>
</table>
      <?php Messages::display() ?>
      </div>
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .hero-content-hero-content-overlay -->
    </div><!-- .hero-content -->
<div>
