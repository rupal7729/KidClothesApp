<?php 
    
    include("config.php");
    include("header.php");
    @$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0; 

    $sql = "SELECT * FROM producttb p join categorytb c on p.categoryid=c.categoryid WHERE c.categoryid=6 and productFor = 'baby girl'";
    $result = mysqli_query($conn,$sql);
    // print_r($sql);
    if (isset($_GET['pid']) && isset($_GET['list']) == 'wishlist') {

           $pid = $_GET['pid'];
           $sql = "insert into wishlisttb(productid,userid)
           values('$pid','$userid')";
           $rst=mysqli_query($conn,$sql);
    }


 ?>
    <main>

        <!-- Latest Products Start -->
        <section class="latest-product-area padding-bottom">

            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    
                    <div class="col-xl-8 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Baby Girl'S</h2>
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
                                        <h4><a href="bottomgirl.php?pid=<?php echo $id;?>&list=wishlist" style="color: red;" class="heart" ><i class="far fa-heart" id="iheart"></i></a>
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
                           
            </div>
        </section>
        <!-- Latest Products End -->
        

    </main>
  
  <?php 
        include("footer.php");
   ?>