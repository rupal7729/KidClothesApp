<?php 

    include("header.php");


 ?>
    <main>

        <!-- slider Area Start -->
        <div class="slider-area ">

            <img src="assets/img/baby/indexsaleimg.png" alt="">            
            <!-- Mobile Menu -->
        </div>
        <!-- slider Area End-->
        <!-- Category Area Start-->
        <section class="category-area section-padding30">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-85">
                            <h2>Shop by Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="assets/img/baby/baby.jpg" alt="">
                                <div class="category-caption">
                                    <h2>Baby Boy`s</h2>
                                    <span class="best"><a href="collectionboy.php">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img text-center">
                                <img src="assets/img/baby/baby2.jpg" alt="">
                                <div class="category-caption">
                                    <span class="collection">Discount!</span>
                                    <h2>Winter Cloth</h2>
                                   <p>New Collection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                              <div class="category-img">
                                <img src="assets/img/baby/baby3.jpg" alt="">
                                <div class="category-caption">
                                    <h2>Baby Girl`s</h2>
                                    <span class="best"><a href="collectiongirl.php">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Area End-->
        
        <!-- Best Product Start -->
        <div class="best-product-area lf-padding" >
           <div class="product-wrapper bg-height" style="background-image: url('assets/img/categori/card.png')">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-end">
                        <div class="product-man position-absolute  d-none d-lg-block">
                            <img src="assets/img/categori/card-man.png" alt="">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="vertical-text">
                                <span>Manz</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="best-product-caption">
                                <h2>Find The Best Product<br> from Our Website</h2>
                                <p>SIZE CHARTS The perfect fit guaranteed.</p>
                                
                                <!-- <a href="#" class="black-btn">Shop Now</a> -->
                                <button type="button" class="black-btn" id="myBtn" class="btn">Size Chart</button>
                                
                                    <!-- Modal -->
                                      <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <center><b><h4 class="modal-title">BABY SIZE CHART</h4></b></center>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              
                                            </div>
                                            <div class="modal-body">
                                                <table align="center" class="table table-striped">
                                                    <thead>
                                                        <th>Size</th>
                                                        <th>Length</th>
                                                        <th>Weight</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Preemie</td>
                                                            <td>to 46Cm</td>
                                                            <td>to 3Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Newborn</td>
                                                            <td>to 53Cm</td>
                                                            <td>to 5Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3 Months</td>
                                                            <td>to 61Cm</td>
                                                            <td>to 10Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 Months</td>
                                                            <td>61 to 68Cm</td>
                                                            <td>10 to 15Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9 Months</td>
                                                            <td>68 to 74Cm</td>
                                                            <td>15 to 18Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12 Months</td>
                                                            <td>74 to 79Cm</td>
                                                            <td>18 to 23Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 Months</td>
                                                            <td>79 to 84Cm</td>
                                                            <td>23 to 26Kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 Months</td>
                                                            <td>84 to 89Cm</td>
                                                            <td>26 to 29Kg</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="black-btn" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>


                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <!-- Shape -->
           <div class="shape bounce-animate d-none d-md-block">
               <img src="assets/img/categori/card-shape.png" alt="">
           </div>
        </div>
        <!-- Best Product End-->

        

    </main>
  
  <?php 
        include("footer.php");
   ?>

   <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>