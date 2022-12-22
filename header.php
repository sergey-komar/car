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
                <a href="<?php home_url('/')?>" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1"><?php bloginfo('name');?></h1>
                    <!--<?php bloginfo('name');?> Выводит название сайта -->
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                  
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



    <!-- Если это не главная страница is_front_page()-->
    <!-- Выводим картинку которая в изображение записи на странице в данном случаи вывели на старнице about -->
    <?php
        if(!is_front_page()){
        $bg_image = '';
        if(get_the_post_thumbnail_url(get_the_id(),'full')){
            $bg_image = 'style="background-image: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('.get_the_post_thumbnail_url(get_the_id(),'full').')"';
        }
        ?>
        <div class="container-fluid page-header" <?php echo $bg_image?>>
            <h1 class="display-3 text-uppercase text-white mb-3"><?php wp_title('');?></h1>
            <!-- wp_title ВЫВОДИТ ЗАГОЛОВОК СТРАНИЦЫ, ТО НАЗВАНИЕ КОТОРОЕ В БРАУЗЕРЕ -->
           
        </div>
    <?php   }
    ?>

