<?php
    include("config.php");
    include("header.php");
    @$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0;

    $sql = "SELECT * FROM producttb p join categorytb c on p.categoryid=c.categoryid WHERE c.categoryid=7";
    $result = mysqli_query($conn,$sql);

    if (isset($_GET['pid']) && isset($_GET['list']) == 'wishlist') {

           $pid = $_GET['pid'];
           $sql = "insert into wishlisttb(productid,userid)
           values('$pid','$userid')";
           $rst=mysqli_query($conn,$sql);
    }

    // pagination
    // $results_per_page = 6;
    // $number_of_result = mysqli_num_rows($result);
    // $number_of_page = ceil ($number_of_result / $results_per_page);

 ?>
    <main>

        <!-- slider Area Start -->

        <!-- slider Area End-->
        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Organic Cotton Collections</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="assets/img/cottonCollection/headerimg.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Category Area End-->
        <!-- Latest Products Start -->
        <section class="latest-product-area padding-bottom">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-9 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-7 col-md-7">
                        <div class="select-this d-flex">
                            <div class="featured">
                                <span>Short by: </span>
                            </div>
                            <form action="#" method="post" >
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="lth">price,LowToHight</option>
                                        <option value="htl">price,HighToLow</option>
                                        <option value="a-z">Alphabetically A-Z</option>
                                        <option value="z-a">Alphabetically Z-A</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row" id="filterDisplay">

                        <?php

                            if(mysqli_num_rows($result))
                            {
                              while($row = mysqli_fetch_array($result))
                              {
                                // $id=base64_encode($row['product_id']);
                                $id = $row['productid'];
                                $pname = $row['name'];
                                $description = $row['description'];
                                $price = $row['price'];
                                $saleprice = $row['saleprice'];
                                $img = $row['productimg'];
                              ?>

                            <div class="col-xl-4 col-lg-4 col-md-6" id="data">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/product/<?php echo $img; ?>" alt="">
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4>
                                            <!-- <input type="button" name="wishlist" value="<i class='far fa-heart'></i>"> -->
                                            <a href="cottonCollection.php?pid=<?php echo $id;?>&list=wishlist" style="color: red;" class="heart" ><i class="far fa-heart" id="iheart"></i></a>
                                        </h4>
                                        <h4><a href="productdetails.php?pid=<?php echo $id; ?>"><?php echo $description; ?></a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>Rs. <?php echo $saleprice; ?>.00</li>
                                                <li class="discount">Rs. <?php echo $price; ?>.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                }
                            }
                             ?>


                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->




        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                         <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="assets/img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->

    </main>
  <?php
        include("footer.php");
   ?>

  