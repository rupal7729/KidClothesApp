<?php 
        
        include("config.php");
        include("header.php");


        if(isset($_POST['register']))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "insert into usertb(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
     
            $result = mysqli_query($conn,$sql);
            
            if($result)
            {
                echo '<script language="javascript">';
                echo 'alert("Registered Successfully ...")';
                echo '</script>';
                header("location:login.php");
            
            }else{

                echo '<script language="javascript">';
                echo 'alert(Somthing wrong!!!)';
                echo '</script>';
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
                            <h2>Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================reg_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="login.php" class="btn_3">Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign Up now</h3>
                            <form class="row contact_form" method="post" name="userReg" id="userReg">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="firstname" name="firstname" value=""
                                        placeholder="Firstname">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="lastname" name="lastname" value=""
                                        placeholder="lastname">
                                </div>
                                
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!-- <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                     --><button type="submit" value="submit" name="register" class="btn_3">
                                        Submit
                                    </button>
                                    <!-- <a class="lost_pass" href="#">forget password?</a> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    <?php 

        include("footer.php");

     ?>
