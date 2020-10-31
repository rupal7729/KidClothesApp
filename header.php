<?php 
    ob_start();
 ?>
<!doctype html>
<html>
    <head>
        <title>Tiny Feet clothes</title>
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

<style type="text/css">
    .header-bottom .header-right .favorit-items::before {
        content: "<?php echo $_SESSION['wishlist_cart'] ?>"
    }

    .header-bottom .header-right .shopping-card::before {
        content: "<?php echo $_SESSION['count_cart'] ?>"
    }

    .newColor {
        color: red;
    }

    .oldColor {
        color: green
    }

    label.error {
    color: red;
    margin-top: 5px;
    font-size: 13px;
}

</style>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->


    <!-- heder start -->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">

                <!-- heder black content start-->
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                
                            </div>
                       </div>
                   </div>
                </div>
                <!-- heder black content end -->


               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">NewBorn Baby</a>
                                                <ul class="submenu">
                                                    <li><a href="blankets.php">blankets</a></li>
                                                    <li><a href="bodysuits.php">body suits</a></li>
                                                    <li><a href="sleeperSet.php">sleeper set</a></li>
                                                    <li><a href="sweaters.php">sweaters</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php">baby boy</a>
                                                <ul class="submenu">
                                                    <li><a href="newborn.php">newborn baby</a></li>
                                                    <li><a href="collectionboy.php">Collection</a></li>
                                                    <li><a href="topwareBoy.php">Top ware</a></li>
                                                    <li><a href="bottomboy.php">Bottom ware</a></li>
                                                </ul>
                                            </li>
                                           
                                            <li><a href="index.php">baby girl</a>
                                                <ul class="submenu">
                                                    <li><a href="newborn.php">newborn baby</a></li>
                                                    <li><a href="collectiongirl.php">Collection</a></li>
                                                    <li><a href="topwareGirl.php">Top ware</a></li>
                                                    <li><a href="bottomgirl.php">Bottom ware</a></li>
                                                </ul>
                                            </li>
                                            <li class="hot"><a href="cottonCollection.php">Cotton Collection</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="product_list.html"> Product list</a></li>
                                                    <li><a href="single-product.html"> Product Details</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="contactus.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" id="myInput" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <a href="wishlist.php"><i class="far fa-heart"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>

                                    <?php 
                                    
                                    if(!isset($_SESSION['userData']))
                                    {
                                        ?>
                                        <li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Sign in</a></li>
                                    <?Php
                                    }else{
                                        ?>
                                        <li class="d-none d-lg-block"> <a href="logout.php" class="btn header-btn">Sign out</a></li>
                                        <?php
                                    }
                                    ?>
                                    
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
  <!-- heder end -->

  