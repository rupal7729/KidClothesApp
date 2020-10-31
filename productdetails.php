<?php 

	include("config.php");
	include("header.php");


	$spid = $_GET['pid'];
    // $iid = base64_decode($iid);
    $sql = "SELECT * FROM `producttb` WHERE productid = '$spid'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $pid = $row['productid'];
    $img = $row['productimg'];
    $desc = $row['description'];
    $saleprice = $row['saleprice'];
    $price=$row['price'];
    $size = $row['size'];
    $color = $row['color'];
    $name=$row['name'];

    $sqll = "SELECT * FROM `imagetb` WHERE productid = '$spid'";
    $q = mysqli_query($conn,$sqll);  

      // print_r($row);


    if(isset($_POST['add_to_cart']) && $_POST['add_to_cart']==1 )
    {
      /*get cart*/
      if(!isset($_SESSION['userData']))
      {
        ?>
          <script>
          alert('Please Login!!!');
          window.location="index.php";
          </script>
      <?Php
      }
      
      $userid = $_SESSION['userData']['userid'];
      $sql = "SELECT * FROM `carttb` WHERE userid = '$userid'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);

    

      $cart_data = array();

      // $price = 10;  
      $cart_data[$_POST['product_id']] = array(
                      'product_id' => $_POST['product_id'],
                      'qty' => $_POST['qty'],
                      'img' => $img,
                      'desc' => $desc,  
                      'single_price' => $saleprice,
                      'sum_total_item_price' => ($saleprice * $_POST['qty']),
                      'total_extra_price' => 5,
                      'shipping_price' => 10,
                      'local_price' => 2,
                      'total_price' => ($saleprice * $_POST['qty']) + 5 + 10 + 2


      );


    

      $totalprice = $saleprice; 
      $sa  = serialize($cart_data);
      // print_r($sa);




       $sql = "insert into carttb(productid,totalprice,userid,cartdata) 
       values('$pid','$totalprice','$userid','$sa')";
       $rst=mysqli_query($conn,$sql);

       if($rst)
       {
          $msg="Product is added to your shopping cart...";
       }else{
          $msg="Something happened wrong !!!";
        }    
    }
 ?>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>product Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
 <?php if(isset($msg)) { ?>
                <div class="alert alert-success"><?php echo $msg;?> </div>
      <?php } ?>
   
  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
        	
          <div class="product_img_slide owl-carousel">
          
            <div class="single_product_img">
              <img src="assets/img/product/<?php echo $img; ?>" alt="#" class="img-fluid">
            </div>
            
            <?php while ($rows = mysqli_fetch_array($q)) {
              ?>
            
            <div class="single_product_img">
              <img src="assets/img/product/<?php echo $rows['image']; ?>" alt="#" class="img-fluid">
            </div>
          <?php } ?>
            <!-- <div class="single_product_img">
              <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
            </div>-->
          </div>
        </div>
        <div class="col-md-6">
          <div class="single_product_text text-center">
            <h3><?php echo $name; ?></h3>
            <p><?php echo $desc; ?><br/>
 			   Size: <?php echo $size; ?><br/>
 			   Color: <?php echo $color; ?><br/><br/>
 			   <?php  
 			   $discount = ($price-$saleprice)*100/$price;
 			   $off = round($discount,2);?>
 			   <b style="color: green;"> <?php echo $off; ?>% OFF</b><br/>
 			   <b>Rs. <?php echo $saleprice; ?></b> <del style="color: red;">Rs.<?php echo $price; ?></del>
            </p>
             <form method="post">
            <div class="card_area">
                <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="5" name="qty">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                  
                </div>
              <div class="add_to_cart">
                 <input type="hidden" name="add_to_cart" value="1"> 
                 <input type="hidden" name="product_id" value="<?php echo $spid ?>">
                  <input type="submit" name="cart" value="add to cart" class="btn_3">
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->
   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                      <h2>Get promotions & updates!</h2>
                      <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                      <div class="subscribe_form">
                          <input type="email" placeholder="Enter your mail">
                          <a href="#" class="btn_1">Subscribe</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
 <?php 
	include("footer.php"); 
  ?>
