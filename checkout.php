<?php
session_start()
?>	
<!DOCTYPE html>
<html>
<head>
<style>
.button1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 10	px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 4px;
  cursor: pointer;
  float:left;
}
.button2 {
  background-color: #4CAF50 ;
  border: none;
  color: white;
  padding: 5px 10	px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 4px;
  cursor: pointer;
  float:center;
}
.button3 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 10	px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 4px 4px;
  cursor: pointer;
  float:right;
}
.text1 {
  width: 30%;
  padding: 5px 2px;
  margin: 8px 0;
  float:center;
  display: hidden;
  text-align: center;
  cursor: pointer;
  top:200px;
  vertical-align:top;
}
.text2{
	visibility:hidden;
}
</style>
<title> Choco-o-lick </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="search.php" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="checkout.php" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span></span> Choc-o-lick</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@bakery.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="products.html">Chocolates</a></li>
						<li><a href="household.html">Cakes</a></li>
						<li><a href="kitchen.html">Brownies</a></li>
						<li><a href="pet.html">Mousse</a></li>
						</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- about -->
					<div class="privacy about">
					<h3>Chec<span>kout</span></h3>
			
				      <div class="checkout-right">
						<table class="timetable_sub">
						<thead>
						<tr>
						<th>SL No.</th>	
						<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th>
						
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
		<?php
		include 'test.php';
		$conn = OpenCon();
		$userid=$_SESSION["User_id"];
		$count=0;
		$sql="select * from cart where user_id='".$userid."'";
		
		$result=mysqli_query($conn,$sql);
		$rows=mysqli_num_rows($result);
		if($rows>0)
		{
				while($row=mysqli_fetch_assoc($result))
				{	
					$count=$count+1	;
					$iname=$row["cart_item"];
					$istock=$row["cart_stock"];
					$sql1="select * from stock where product_name='".$iname."'";
					$result1=mysqli_query($conn,$sql1);
					$rows1=mysqli_num_rows($result1);
					if($rows1>0)
					{
						while($row1=mysqli_fetch_assoc($result1))
						{
							$pimg="\"".$row1["product_img"]."\"";
							$pprice=$row1["product_price"]*$istock;		
						}
					}
				
				?>
				<tbody><tr class="rem1">
					<td class="invert"><?php echo $count; ?></td>
					<td class="invert-image"> <a href="single.html"> <img src=<?php echo $pimg;?> alt=" " class="img-responsive"></a></td>
					<td class="invert">
						<div class="quantity"> 
							<div class="quantity-select">  
							<form action="minus.php" method="post">
								<input type="hidden" name="pname" value="<?php echo $iname?>">
								<input type="submit" class="button1" value="-">   
							</form>   
							<form action="plus.php" method="post">
								<input type="hidden" name="pname" value="<?php echo $iname?>">
								<input type="text" class="text1" value=<?php echo $istock?> disabled />
								<input type="submit" class="button3" value="+">
							</form>                     
							
							</div>
						</div>
					</td>
					<td class="invert"> <?php echo $iname?> </td>
					<td class="invert"> <?php echo $pprice?> </td>
					<td class="invert">
						<div class="rem">
						<form action="remove.php" method="post">
						<input type="hidden" name="pname" value="<?php echo $iname?>">
						<input type="submit" value="Remove" class="button2">
						</form>
						</div>
						</div>
					</td>
					</tr><br>

		<?php
			}	
		}
		?>
					
				</tbody></table>
			</div>
			<div class="checkout-left">	
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>

					<ul>
					<?php
					$result=mysqli_query($conn,$sql);
					$rows=mysqli_num_rows($result);
					if($rows>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$price=$row["cart_price"];
							$sql7="select SUM(cart_price) AS Totalprice from cart";
							$result7=mysqli_query($conn,$sql7);
							$rows7 = mysqli_fetch_assoc($result7);
							$sum=$rows7["Totalprice"]; 
							$totalsum=$sum+15;	
							$_SESSION["totalsum"]=$totalsum;
							?>	
						<li> <?php echo $iname?> <i>-</i> <span> <?php echo $price?> </span></li>
						<?php
						}
					}
					else  
					{
							echo '<script> alert("'.$usrname.' Your Cart is empty") </script>';
							?>
							<script>
							location.href="index.html"
							</script>
							<?php
					}
					?>
						<li>TotalShopping Charge is <i>-</i> <span> <?php echo $sum?> </span></li>
						<li>Total Service Charges <i>-</i> <span>15	</span></li>
						<li>Total Charges <i>-</i> <span></span> <?php echo $totalsum;?> </li>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
				<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name" required="">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" type="text" placeholder="Mobile number" name="number" required="">

														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Landmark: </label>
														 <input class="form-control" type="text" placeholder="Landmark" required="">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Town/City: </label>
												 <input class="form-control" type="text" placeholder="Town/City" required="">
												</div>
													<div class="controls">
															<label class="control-label">Address type: </label>
												     <select class="form-control option-w3ls">
																							<option>Office</option>
																							<option>Home</option>
																							<option>Commercial</option>
							
																					</select>
													</div>
											</div>
											<button  class="submit check_out">Delivery to this Address</button>
										</div>
									</section>
								</form>
									
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>what in stores</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="products.html">Chocolates</a></li>
						<li><a href="household.html">Cakes</a></li>
						<li><a href="kitchen.html">Brownies</a></li>
						<li><a href="pet.html">Mousse</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>twitter posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Choc-o-lick <a href="#">http://sd.ds/13jklf#</a>
						new flavor of chocolate (minty shells) is the best
						<a href="#">http://sd.ds/1389kjklf#</a>naina.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Choc-o-lick <a href="#">http://fd.uf/56hfg#</a>
						pineapple cake is worth trying
						<a href="#">http://fd.uf/56hfg#</a>john.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>100% secure payments</h4>
						<img src="images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
<!-- //footer -->
<!-- js -->


<!-- //js -->
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

</body>
</html>