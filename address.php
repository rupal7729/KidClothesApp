<!--these is  address page logic -->


<?php 
	include("config.php");
	include("header.php");
  @$userid=isset($_SESSION['userData']['userid'])?$_SESSION['userData']['userid']:0; 
	@$firstname = $_SESSION['userData']['firstname'];
	@$lastname = $_SESSION['userData']['lastname'];
	@$email = $_SESSION['userData']['email'];

	$sql = "SELECT * FROM `carttb` WHERE userid = '$userid'";
  	$result = mysqli_query($conn,$sql);

	if(isset($_POST['submit'])){

		$address = $_POST['address'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$zipcode = $_POST['zipcode'];

		$sql = "insert into addresstb(userid,address,street,city,country,state,zipcode) values('$userid','$address','$street','$city','$country','$state','$zipcode')";
		$result = mysqli_query($conn,$sql);

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
                            <h2>Information</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

  <section class="login_part section_padding ">
        <div class="container">
  			<div class="row">
				<div class="col-lg-6 col-md-6">
					        <b><h4>Contact Information Shipping Address</h4></b><br/>
                            <form class="row contact_form" method="post" id="userLogin" name="userLogin" >
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname; ?>" placeholder="firstname" readonly="" >
                                </div>
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" readonly="" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname; ?>"
                                        placeholder="lastname">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="email" readonly="" >
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="address" name="address" value=""
                                        placeholder="Address">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="street" name="street" value=""
                                        placeholder="Apartment,Street,etc..(optional)">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="city" name="city" value=""
                                        placeholder="city">
                                </div>
                                <div class="col-md-4 form-group p_star">
                                    <select name="country">
                                    	<option>Select country</option>
                                    	<option value="india">India</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group p_star">
 									<select name="state">
                                    	<option>Select state</option>
                                    	<option value="Gujarat">Gujarat</option>
                                    	<option value="maharashtra">Maharashtra</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group p_star">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode" value=""
                                        placeholder="ZipCode">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!-- <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                     --><button type="submit" value="submit" name="submit" class="btn_3">
                                        Place Order
                                    </button>
                                    <!-- <a class="lost_pass" href="#">forget password?</a> -->
                                </div>
                            </form>
				</div>
 				
 				<div class="col-lg-6 col-md-6">
                    
              					<table align="align-items-center">
              						<thead>
              							<th>product</th>
              							<th></th>
              							<th></th>
              							<th>price</th>
              						</thead>
              						<tbody>
              							
              				<?php 
              					$amount = 0;
								while ($row = mysqli_fetch_object($result)) {
							    $items = (unserialize($row->cartdata)); 
				   				foreach ($items as $key => $row) {
				              	?>
				              			<tr>
              								<td><img src="assets/img/product/<?php echo $row['img']; ?>" alt="" height="100px" wight="100px" ></td>
              								<td style="font-size: 13px;"><?php echo $row['desc']; ?></td>
              								<td></td>
              								<td>Rs.<?php echo $row['single_price']; ?></td>
              							</tr>
              							<?php
              							$amount = $amount + $row['sum_total_item_price'];
   						  }
   						}
                     	$totl = $amount + '17';
                     ?>
                     					<tr></tr>
                     					<tr>
                     						<td>Total</td>
                     						<td></td>
                     						<td></td>
                     						<td> rs. <?php echo $amount; ?></td>
                     					</tr>
                     					<tr>
                     						<td>Shipping</td>
                     						<td></td>
                     						<td></td>
                     						<td>Free </td>
                     					</tr>
                     					<tr>
                     						<td>Text</td>
                     						<td></td>
                     						<td></td>
                     						<td>rs. 17.00</td>
                     					</tr>
                     					<tr></tr>
                     					<tr></tr>
                     					<tr>
                     						<td></td>
                     						<td><center>Total:</center></td>
                     						<td></td>
                     						<td>IND <b style="font-size: 23px;">Rs.<?php echo $totl; ?>.00</b></td>
                     					</tr>
              						</tbody>
              					</table>
            					
                </div>

            </div>    
        </div>
  </section>



 <?php 
 	include("footer.php");
  ?>