<?php 

    include("config.php");
    include("header.php");
    @$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0; 

    $sql = "SELECT * FROM `producttb` WHERE productFor = 'newborn baby'";
    $result = mysqli_query($conn,$sql);

    if (isset($_GET['pid']) && isset($_GET['list']) == 'wishlist') {

           $pid = $_GET['pid'];
           $sql = "insert into wishlisttb(productid,userid)
           values('$pid','$userid')";
           $rst=mysqli_query($conn,$sql);
    }
 ?>



 <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Newborn Baby</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="select-this d-flex">
                            <div class="featured">
                                <span>Short by: </span>
                            </div>
                            <form action="#">
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
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
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
                                        <img src="assets/img/product/<?php echo $img;?>" alt="">
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
                                            <a href="newborn.php?pid=<?php echo $id;?>&list=wishlist" style="color: red;" class="heart" ><i class="far fa-heart" id="iheart"></i></a>
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


    </main>
   
   <?php 

        include("footer.php");

    ?>

    <!-- <script type="text/javascript">

       $(document).ready(function(){
       // alert('hii');
            $('#filterDisplay');
            var action = 'fetch_data';
            $('#select').change(function(){
                // alert('select');
            filterData();

        });

        function filterData(){

            var sort = $('#select').val();

            $.ajax({
                url:"filternewbaby.php",
                method:"POST",
                data:{
                    action:action,
                    sort:sort
                },
                success:function(data){
                 $('#filterDisplay').html(data);
             
            }

            });
        }
     });
    </script> -->