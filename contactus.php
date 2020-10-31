<?php 
	include("config.php");
	include("header.php");
 ?>
<!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact Us</h2>
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
  				<div class="col-md-2">
  					<h5 style="color: grey;">CUSTOMER SERVICE</h5>
  					<ul style="color: lightgrey;">
  						<li>Shipping information</li>
  						<li>Return & Exchange Policy</li>
  						<li>Privacy Policy</li>
  						<li>Terms & Condition</li>
  						<li>Track Your Order</li>
  					</ul>
  				</div>
				<div class="col-md-8">
					        <b><h4>Contact Us</h4></b><br/>
					        <p>For questions about orders, please be sure to include your order number. Customer service is available Monday-Friday,</p><br/>
                            <form class="row contact_form" method="post" id="userLogin" name="userLogin" >
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                        placeholder="email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="phn" name="phn" value=""
                                        placeholder="Phone Number">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <textarea class="form-control" id="msg" name="msg" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-4 form-group">
                                    <!-- <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                     --><button type="submit" value="submit" name="submit" class="btn_3">
                                        send
                                    </button>
                                    <!-- <a class="lost_pass" href="#">forget password?</a> -->
                                </div>
                            </form>
				</div>
				<div class="col-md-2" style="text-align: left;">
					<h2 style="color: grey;"><i class="fa fa-comment"></i></h2>
					<h6>Have a question?</h6>
					<p></p>
					<h6 style="color: grey;">We can help with orders,</br>
						sizing, style advice, & more!</h6>
					
					<br/>
					<h2 style="color: grey;"><i class="fa fa-envelope"></i></h2>
					<h6>Email</h6>
					<p></p>
					<a href=""><p>customerservices@tinyfeet.com</p></a>

					<br/>
					<h2 style="color: grey;"><i class="fa fa-file"></i></h2>
					<h6>Write Us</h6>
					<p></p>
					<p>TinyFeet<br/>IND</p>



				</div>
			</div>
		</div>
	</section>
 	

 <?php 
 	include("footer.php");
  ?>