<?php 
	include("config.php");
	include("header.php");
	@$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0;
	// print_r($userid);
  if(!isset($_SESSION['userData']))
  {
        ?>
        <div class="alert alert-danger">
          <strong>Please Login!!!</strong> 
        </div>
      <?Php
  }
  

  $sql = "SELECT * FROM `carttb` WHERE userid = '$userid'";
  $result = mysqli_query($conn,$sql);
  
  
  


	// $spid = $_GET['cpid'];
	// $sql = "select * from carttb where userid='$userid'";

 //    $result = mysqli_query($conn,$sql);
 //    $num = mysqli_num_rows($result);	

    if(isset($_GET['did'])){

    	$did = $_GET['did'];
    	$deletcart = "delete from carttb where cartid='$did'";
    	$q = mysqli_query($conn,$deletcart);
    	header("loaction:cart.php");
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
                        <h2>Card List</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- slider Area End-->

  <!--================Cart Area =================-->
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
            	
            <?php 

            $amount = 0;
            $count_cart = 0;	 

            while ($row = mysqli_fetch_object($result)) {
              $remove_cartid = $row->cartid; 
              $items = (unserialize($row->cartdata)); 
   

            	foreach ($items as $key => $row) {
              
            		?>

              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="assets/img/product/<?php echo $row['img']; ?>" alt="" />
                    </div>
                    <div class="media-body">
                      <p><?php echo $row['desc']; ?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Rs.<?php echo $row['single_price'] ?></h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="text" id="qty_cart" type="text" value="<?php echo $row['qty'] ?>" min="0" max="5" name="qty">
                    <input name="single_price" id="single_price" type="hidden" value="<?php echo $row['single_price'] ?>" /><br />
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5><p id="total">Rs.<?php echo $row['sum_total_item_price'];  ?></p></h5>
                </td>
                 <td>
                    <a href="cart.php?did=<?php echo $remove_cartid; ?>">
                    	<h5>remove</h5>
                    </a>
                 </td>
              </tr>
              
                <?php

                $amount = $amount + $row['sum_total_item_price'];
                $count_cart++;
                } 
              }
              $_SESSION['count_cart'] = $count_cart;

            if($count_cart == 0){
              ?>
                <tr><td colspan="5"><center>Cart Empty..!!</center></td></tr>
                <?php
            }
				?>


              <tr class="bottom_button">
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Update Cart</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5><b>Rs.<?php echo $amount?></b></h5>
                </td>
              </tr>
              <tr class="shipping_area">
                <td></td>
                <td></td>
                <td>
                  <h5>Shipping</h5>
                </td>
                <td>
                  <div class="shipping_box">
                    <ul class="list">
                      <li>
                        Extra Rate: Rs.5.00
                        <!-- <input type="radio" aria-label="Radio button for following text input"> -->
                      </li>
                      <li>
                        Shipping Rate: Rs.10.00
                        <!-- <input type="radio" aria-label="Radio button for following text input"> -->
                      </li>
                      <li class="active">
                        Local Delivery: Rs.2.00
                        <!-- <input type="radio" aria-label="Radio button for following text input"> -->
                      </li>
                    </ul>
                    <h6>
                      <?php $total = $amount + 5 + 10 + 2; ?>
                      Calculate Shipping <b>Rs.<?php echo $total ?></b>
                      <!-- <i class="fa fa-caret-down" aria-hidden="true"></i> -->
                    </h6>
                   <!--  <select class="shipping_select">
                      <option value="1">Bangladesh</option>
                      <option value="2">India</option>
                      <option value="4">Pakistan</option>
                    </select>
                    <select class="shipping_select section_bg">
                      <option value="1">Select a State</option>
                      <option value="2">Select a State</option>
                      <option value="4">Select a State</option>
                    </select> -->
                    <!-- <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                    <a class="btn_1" href="#">Update Details</a> -->
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="newborn.php">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="address.php">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->


 <?php 
 	include("footer.php");
  ?>

 