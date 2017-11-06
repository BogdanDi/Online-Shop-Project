<?php 

require_once(__DIR__.'/../lib/productsLib.php');

$productId = $_GET["prodId"];
//echo $productId; 
$product = returnProduct($productId);
//print_r($product);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bazar</title>
		<link href="css/reset.css" rel="stylesheet" />
		<link href="css/header.css" rel="stylesheet" />
		<link href="css/hot_deals.css" rel="stylesheet" />
		<link href="css/slider.css" rel="stylesheet" />
		<link href="css/shipping.css" rel="stylesheet" />
		<link href="css/section3.css" rel="stylesheet" />
		<link href="css/section4_nf.css" rel="stylesheet" />
		<link href="css/section5_nf.css" rel="stylesheet" />
		<link href="css/section6_furn-gal.css" rel="stylesheet" />
		<link href="css/section7_blog.css" rel="stylesheet" />
		<link href="css/section8_brands.css" rel="stylesheet" />
		<link href="css/section9_feedback.css" rel="stylesheet" />
		<link href="css/section9_footer.css" rel="stylesheet" />
		<link href="css/alert-section.css" rel="stylesheet" />
		<link href="css/shope_page.css" rel="stylesheet" />
	</head>
	<body>
		<!--Header-ul-->
		<header>
			<div id="top_header">
				<div class="container_w">
					<div class="center"></div>
			<!--Languages / Help-->
					<div class="lang">
						<a href=""><div>USD <img src="images/down-arrow.png" alt="d_down"/></div></a><p>|</p>
						<a href=""><div>English <img src="images/down-arrow.png" alt="d_down"/></div></a><p>|</p>
						<a href=""><div>Help <img src="images/down-arrow.png" alt="d_down"/></div></a>
					</div>
				<!--Login / Register-->
					<div class="log">
						<div class="lgmen" id="dd_but"><img src="images/drop_down1.png" alt="dd"/>
							<div class="popup_menu">
								<div>My Account</div>
								<div>Wish List</div>
								<div>Checkout</div>
								<div>Shopping Cart</div>
								<div>Log Out</div>
							</div>
						</div>
						<a href=""><div class="lgmen"></div></a>
						<a href=""><div class="lgmen"><img src="images/lock.png" alt="Reg"/> Register</div></a>
						<a href=""><div class="lgmen"><img src="images/user.png" alt="Log"/> Login</div></a>
					</div>
				</div>
			</div>
			<!--Tel / logo / # items in shopping cart-->
			<div id="bottom_header" >	
				<div class="container_w">
					<div class="tel"><img src="images/phone.png" alt="phone:"/> <div> 2300 - 3560 - 222</div></div>
					<img class="logo" src="images/logo.png" alt="Bazar - Online Shoping" />
					<div class="in_cos">
						<img src="images/buy.png" alt="# items in shopping cart"/>
							<div id="number"><p>0</p></div>
					</div>
				</div>
			</div>
		</header>
		<!--nav-bar-ul-->
		<nav class="container_nav">


			<div class="search">
				<div class="select">
					<div class="sel_cat">Select a Category<img class="selcarimg" src="images/arow_down.png" alt="dropdown"/></div>
				</div>
				<!--<div class="dropdown-content">
					<a href="#">Link 1</a>
					<a href="#">Link 2</a>
					<a href="#">Link 3</a>
				</div>-->
				<div class="search_inp">
					<form class="formsrchprod">
						<div><input class="main_search" type="search" placeholder="Search products..."/></div>
					</form>
				</div>

			</div>


			<div class="navig">
				<ul class="navbar">
					<li id="first_li"><a class="anch" href="index.php">HOME</a></li>
					<li id="navbar_fur_hov"><a class="anch" href="Products Details Page_3_Grid_test2s.html">FURNITURE</a>

						<div class="table_menu">
							<table>
								<tr class="table_menu_head">
									<th><div class="table_m_head">CAMCORDERS</div></th>
									<th><div class="table_m_head">CAMCORDERS</div></th>
									<th><div class="table_m_head">CAMCORDERS</div></th>
								</tr>
								<tr class="table_menu_body">
									<td>Apple</td>
									<td>Apple</td>
									<td>Apple</td>
								</tr>
								<tr class="table_menu_body">
									<td>HTC</td>
									<td>HTC</td>
									<td>HTC</td>
								</tr>
								<tr class="table_menu_body">
									<td>Samsung</td>
									<td>Samsung</td>
									<td>Samsung</td>
								</tr>
								<tr class="table_menu_body">
									<td>BlackBerry</td>
									<td>BlackBerry</td>
									<td>BlackBerry</td>
								</tr>
								<tr class="table_menu_body">
									<td>Nokia</td>
									<td>Nokia</td>
									<td>Nokia</td>
								</tr>
								<tr class="table_menu_body">
									<td>Motorola</td>
									<td>Motorola</td>
									<td>Motorola</td>
								</tr>
							</table>
						</div>



					</li>
					<li><a class="anch" href=#>CHAIR</a></li>
					<li><a class="anch" href=#>TABLE</a></li>
					<li><a class="anch" href=#>SOFA</a></li>
					<li><a class="anch" href=#>BEDROOM</a></li>
					<li id="last_li"><a class="anch" href=#>BLOG</a></li>
				</ul>
			</div>
			<div class="clear"></div>						
		</nav>

		<!--Section-->
		<section class="for_height">
			<div class="sub_nav"></div>
			<div class="container_w2">
				<div class="shope_head">
					<div class="hdealtitle hdealtitle2">FURNITURE</div>
				</div>
			</div>
			<article class="main_article_shope">
				<div class="article_shope1">
					<div class="shope_images_div">
						<div class="shope_main_image" style="background-image:url('<?php echo $product[0]["image"]; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
						<div class="shope_main_slider">
							<div class="shope_main_slider_arrow_l"><</div>
							<div class="shope_main_slider_images_folder">
								<div class="shope_main_slider_images"></div>
								<div class="shope_main_slider_images"></div>
								<div class="shope_main_slider_images"></div>
								<div class="shope_main_slider_images"></div>
								<div class="shope_main_slider_images"></div>
							</div>
							<div class="shope_main_slider_arrow_r">></div>
						</div>
					</div>
					<div class="shope_prod_details">
						<div class="shope_title">
							<div>
								<h1 class="shope_prod_name"><?php echo $product[0]["name"] ?></h1>
								<div class="shope_next_prev">
									<div class="shope_prev_product"></div>
									<div class="shope_next_product"></div>
								</div>
							</div></br>
							<div class="shope_rateing">
								<div class="stars5 shope_star_left">
									<img src="images/blackstar.png" alt="star" />
									<img src="images/blackstar.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
								</div>
							</div>
							<div class="shope_no_rev">(0 reviews)</div>
							<div class="shope_add_rev">Add Your Review</div>
							<div class="reset_clear"></div>
						</div>
						<div class="shope_price">
							<div class="shope_price_div">$2500</div>
						</div>
						<div class="shope_ADDtc">
							<div class="shope_ADDtc_top">
								<div class="buton shope_ADDtc_top_add"><img src="images/buy.png" alt="buy"/><div class="buton shope_ADDtc_top_add_in">  ADD TO CART</div></div>
								<div class="small"><img src="images/heart.png" alt="like" /></div>
								<div class="small"><img src="images/arrows.png" alt="rep" /></div>
								<div class="small"><img src="images/mail.png" alt="mail" /></div>
							</div></br>
							<div class="shope_ADDtc_bottom">
								<div class="small shope_quant">Quantity:</div>
								<div class="small">2</div>
								<div class="small shope_plus_min">-</div>
								<div class="small shope_plus_min">+</div>

							</div>
						</div>
						<div class="shope_overview">
							<h2>Quick Overview</h2>
							<p><?php echo $product[0]["description"]; ?> </p>
						</div>
						<div class="shope_availab">
							<span>Availability: </span> In Stock</br>
							<span>Category: </span> Furniture
						</div>
						<div class="shope_social">
							<div class="shope_facebook"><img src="images/facebook.png" alt="facebook"/>Share</div>
							<div class="shope_google"><img src="images/g+.png" alt="g+"/>Google+</div>
							<div class="shope_theet"><img src="images/twit_blue.png" alt="Tweet"/>Tweet</div>
							<div class="shope_pinterest"><img src="images/pin_red.png" alt="Pinterest"/>Pinterest</div>
							<div class="shope_linkedin"><img src="images/linkedin.png" alt="Linkedin"/>Linkedin</div>
						</div>
					</div>
				</div>
				<div class="article_shope2"></div>



				<!--NEW FURNITURE-->
				<div class="section4">
					<div class="n_left">
						NEW FURNITURE
					</div>
					<div class="nf_nav">
						<ul class="nf_nav_ul">
							<li><div data-tab="bed" id="but_bed" class="tab-name"></div></li>
							<li><div data-tab="chair" id="but_chair" class="tab-name"></div></li>
							<li><div data-tab="sofa" id="but_sofa" class="tab-name"></div></li>
							<li><div data-tab="table" id="but_table" class="tab-name"></div></li>
							<li><div data-tab="dining" id="but_dining" class="tab-name"></div></li>
						</ul>
					</div>
					<div class="nf_line">
					</div>
					<div class="nf_dotts changeitem">
						<div class="current_item"></div>
						<div></div>
						<div></div>
					</div>
				</div>
				<div id="bed" class="product section5">
					<div class="rw">
						<div id="bed1" class="shop_cart">

							<div class="sus">
								<div class="btns">    
									<a href=""><div  class="but1">Quick View</div></a>
									<a class="butondr" href=""><div class="buton but2"><img src="images/buy.png" alt="buy"/>  ADD TO CART</div></a>
								</div>
							</div>
							<div class="centru">
								<div class="art"><h3 class="art_name">Article Name</h3></div>
								<div class="stars5">
									<img src="images/blackstar.png" alt="star" />
									<img src="images/blackstar.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
								</div>
								<div class="line5"></div>
								<div class="cursor4"></div>
							</div>
							<div class="jos">
								<div class="d_left">
									<div class="small"><img src="images/heart.png" alt="like" /></div>
									<div class="small"><img src="images/arrows.png" alt="rep" /></div>
									<div class="price">$30.00</div>
								</div>
							</div>
						</div>
						<div id="bed2" class="shop_cart">
							<div class="sus">
								<div class="btns">    
									<a href=""><div  class="but1">Quick View</div></a>
									<a class="butondr" href=""><div class="buton but2"><img src="images/buy.png" alt="buy"/>  ADD TO CART</div></a>
								</div>
							</div>
							<div class="centru">
								<div class="art"><h3 class="art_name">Article Name</h3></div>
								<div class="stars5">
									<img src="images/blackstar.png" alt="star" />
									<img src="images/blackstar.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
								</div>
								<div class="line5"></div>
								<div class="cursor4"></div>
							</div>
							<div class="jos">
								<div class="d_left">
									<div class="small"><img src="images/heart.png" alt="like" /></div>
									<div class="small"><img src="images/arrows.png" alt="rep" /></div>
									<div class="price">$30.00</div>
								</div>
							</div>
						</div>
						<div id="bed3" class="shop_cart">
							<div class="sus">
								<div class="btns">    
									<a href=""><div  class="but1">Quick View</div></a>
									<a class="butondr" href=""><div class="buton but2"><img src="images/buy.png" alt="buy"/>  ADD TO CART</div></a>
								</div>
							</div>
							<div class="centru">
								<div class="art"><h3 class="art_name">Article Name</h3></div>
								<div class="stars5">
									<img src="images/blackstar.png" alt="star" />
									<img src="images/blackstar.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
								</div>
								<div class="line5"></div>
								<div class="cursor4"></div>
							</div>
							<div class="jos">
								<div class="d_left">
									<div class="small"><img src="images/heart.png" alt="like" /></div>
									<div class="small"><img src="images/arrows.png" alt="rep" /></div>
									<div class="price">$30.00</div>
								</div>
							</div>
						</div>
						<div id="bed4" class="shop_cart">
							<div class="sus">
								<div class="btns">    
									<a href=""><div  class="but1">Quick View</div></a>
									<a class="butondr" href=""><div class="buton but2"><img src="images/buy.png" alt="buy"/>  ADD TO CART</div></a>
								</div>
							</div>
							<div class="centru">
								<div class="art"><h3 class="art_name">Article Name</h3></div>
								<div class="stars5">
									<img src="images/blackstar.png" alt="star" />
									<img src="images/blackstar.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
									<img src="images/star.png" alt="star" />
								</div>
								<div class="line5"></div>
								<div class="cursor4"></div>
							</div>
							<div class="jos">
								<div class="d_left">
									<div class="small"><img src="images/heart.png" alt="like" /></div>
									<div class="small"><img src="images/arrows.png" alt="rep" /></div>
									<div class="price">$30.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>















			</article>

			
		</section>
		<footer>
			<div class="upper_footer">
				<div class="footer_table">
					<div class="footer_table_col">
						<h2>INFORMATION</h2>
						<ul class="footer_table_rows">
							<li>About Us</li>
							<li>Privacy</li>
							<li>Conditions</li>
							<li>Online Support</li>
						</ul>
					</div>
					<div class="footer_table_col">
						<h2>MY ACCOUNT</h2>
						<ul class="footer_table_rows">
							<li>Login</li>
							<li>My Cart</li>
							<li>Wishlist</li>
							<li>Checkout</li>
						</ul>
					</div>
					<div class="footer_table_col">
						<h2>INFORMATION</h2>
						<ul class="footer_table_rows">
							<li>Specials</li>
							<li>New Products</li>
							<li>Best Sellers</li>
							<li>Our Stores</li>
						</ul>
					</div>
					<div class="footer_table_col">
						<h2>ORDERS</h2>
						<ul class="footer_table_rows">
							<li>Payment Options</li>
							<li>Shipping Our Delivery</li>
							<li>Returns</li>
							<li>Shipping</li>
						</ul>
					</div>
					<div class="cards"><img src="images/card.png" alt="card" /></div>
				</div>

			</div>
			<div class="lower_footer">
				<div class="lf_cont">
					<div class="Copy_r">©Copyright 2016 | All Rights Reserved</div>
					<div class="lf_social">
						<img class="lf_social_img" src="images/twitter.png" alt="twitter" />
						<img class="lf_social_img" src="images/facebook.png" alt="facebook" />
						<img class="lf_social_img" src="images/you_tube.png" alt="youtybe" />
						<img class="lf_social_img" src="images/g+.png" alt="g+" />
						<img class="lf_social_img" src="images/in.png" alt="in" />
						<img class="lf_social_img" src="images/pin.png" alt="pin" />
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/alert.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script type="text/javascript" src="js/timer.js"></script>
		<script type="text/javascript" src="js/new_furniture_toggle.js"></script>
		<script type="text/javascript" src="js/active_tab.js"></script>
		<script type="text/javascript" src="js/carousell.js"></script>
		<script type="text/javascript" src="js/n_furniture.js"></script>
	</body>
</html>