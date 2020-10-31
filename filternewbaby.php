<?php 

	include("config.php");

	if(isset($_POST['action']))
	{
		$query = "SELECT * FROM `producttb` WHERE productFor = 'newborn baby'";
		

		if(isset($_POST["sort"]))
 		{
		     $sort=$_POST["sort"];
		    
		     if($sort == 'lth')
		     {
		          $query .= " ORDER BY saleprice ASC";
		     }
		     else if($sort == 'htl')
		     {
		          $query .= " ORDER BY saleprice DESC";
		     }
		     else if($sort == 'a-z')
		     {
		          $query .= " ORDER BY description ASC";
		     }
		     else if($sort =='z-a')
		     {
		          $query .= " ORDER BY description DESC";
		     }
		}
	}

	$sql=mysqli_query($conn,$query);
	$num=mysqli_num_rows($sql);

	$output = '';

	if($num > 0)
	{

		while($row=mysqli_fetch_array($sql)) 
  		{
  			// print_r($row['productimg']);
  			$output .= '<div class="col-xl-4 col-lg-4 col-md-6" id="filterDisplay">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/cottonCollection/'.$row['productimg'].'" alt="">
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
                                        <h4><a href="productdetails.php?pid='.$row['productid'].'">'.$row['description'].'</a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>Rs. '.$row['saleprice'].'.00</li>
                                                <li class="discount">Rs. '.$row['price'] .'.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>';
  		}
  	}else{
  		$output = '<h3>No Data Found</h3>';
  	}
  	echo $output;
 ?>