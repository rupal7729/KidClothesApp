<?php 
        include("config.php");
        include("header.php");

        if (isset($_POST['submit'])) 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql ="SELECT * FROM usertb WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn,$sql);
            $data = mysqli_num_rows($result);

            if($data==1){
                $q = mysqli_fetch_array($result);
                $_SESSION['userData']=$q;
                header('location:index.php');
                // echo "<script>alert('Successfully Logged in...');</script>";
            }else{
                $msg ="Invalid Email ID or Password!!!";
                // echo "</script>alert('Email or Password is wrong...!!!!');</script>";
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
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
<?php
if(isset($msg))
       { ?>
            <div style="color: red;font-weight: bolder;width: 100%;height: 50px;background-color: lightyellow;padding-top: 10px;text-align: center;"><?php echo $msg; ?></div>
      <?php  } ?>

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="register.php" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" method="post" id="userLogin" name="userLogin" >
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="email" name="email" value=""
                                        placeholder="email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!-- <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                     --><button type="submit" value="submit" name="submit" class="btn_3">
                                        log in
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