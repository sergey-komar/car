<?php
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

 <?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
   <!-- Topbar Start -->
   <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Cars</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto py-0">
                        <li class="nav-item nav-link active"><a class="test" href="index.html">Home</a></li>
                        <li class="nav-item nav-link "><a class="test"href="about.html">About</a></li>
                        <li class="nav-item nav-link "><a class="test" href="service.html">Service</a></li>
                        <li class="nav-item nav-link "><a class="test" href="car.html">Cars</a></li>
                    </ul>
                    <?php
                        wp_nav_menu([
                            'theme_location' => 'menu-header',
                            'container'      => '',
                            'menu_class'     => 'navbar-nav ml-auto py-0',
                            'add_li_class'   => 'nav-item nav-link',
                        ]);
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

