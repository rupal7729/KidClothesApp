<?php 
	include("config.php");
	include("header.php");
	@$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0;
  if(!isset($_SESSION['userData']))
  {
        ?>
        <div class="alert alert-danger">
          <strong>Please Login!!!</strong> 
        </div>
          <!-- <script class="alert alert-danger">  
          alert('Please Login!!!');
          window.location="index.php";
          </script> -->
      <?Php
  }
	
    $sql = "SELECT * FROM wishlisttb w JOIN producttb p on w.productid=p.productid WHERE userid = '$userid'";
    $result = mysqli_query($conn,$sql);

    if(isset($_GET['did'])){

    	$did = $_GET['did'];
    	$deletcart = "delete from wishlisttb where wishlistid='$did'";
    	$q = mysqli_query($conn,$deletcart);
    	header("loaction:wishlist.php");
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
                        <h2>Wishlist</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- slider Area End-->

  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">add to cart</th>
                <th scope="col">Remove</th>
              </tr>
            </thead>
            <tbody>
            	
            <?php 

            
            $wishlist_cart = 0;	 
            
            while ($row = mysqli_fetch_array($result)) {
     		?>
 
              <tr>
                <td>
                  <div class="media">
                    <div class="">
                      <img src="assets/img/product/<?php echo $row['productimg']; ?>" alt="" width="400" height="400" />
                    </div>
                    <div class="media-body">
                      <p><?php echo $row['description']; ?></p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Rs.<?php echo $row['price'] ?></h5>
                </td>
                <td>
                  <div class="add_to_cart">
                    <!-- <div class="add_to_cart"> -->
                 <form method="post">   	
                 
                 <!-- <input type="hidden" name="product_id" value="<?php echo $spid ?>"> -->
                 <a href="productdetails.php?pid=<?php echo $row['productid']; ?>" class="btn_3" >add to cart</a>
                  <!-- <input type="submit" name="cart" value="add to cart" class="btn_3"></a> -->
                  </form>
              
                  </div>
                </td>
                 <td>
                    <a href="wishlist.php?did=<?php echo $row['wishlistid']; ?>">
                    	<h5><i class="fa fa-times" style="color: red;"></i></h5>
                    </a>
                 </td>
              </tr>
              
               <?php
                $wishlist_cart++;
                }
                $_SESSION['wishlist_cart'] = $wishlist_cart;
                
                if($wishlist_cart == 0){
                ?>
                <tr><td colspan="4"><center>Wishlist Empty..!!</center></td></tr>
                <?php
              }
				?>


              
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="newborn.php">Continue Shopping</a>
          </div>
        </div>
      </div>
  </section>
  


 <?php 
 	include("footer.php");
  ?>