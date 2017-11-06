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
		<link href="css/insert_prod.css" rel="stylesheet" />
	</head>
	<body>
		<div id="insert_prod_container">
			<div class="insert_prod_form_container">
				<h1 class="insert_prod_heading">Product Upload:</h1>
				<form action="https://minimized-bck-end-bogdandima.c9users.io/api/products/addProduct.php" method="post">
					<input type="text" placeholder="Enter A Product Name:" name="name"/></br>
					<textarea name="message" rows="10" cols="30" name="description">Product Description:</textarea> </br>
					<input list="category" name="category">
					<datalist id="category" lable="category" name="category">
						<option data-category="1" value="1">
						<option data-category="2" value="2">
						<option data-category="4" value="4">
						<option data-category="5" value="5">
						<option data-category="8" value="8">
						<option data-category="9" value="9">
						<option data-category="10" value="10">
						<option data-category="11" value="11">
					</datalist></br>
					<input type="text" placeholder="Price:" name="price"/></br>
					<input type="text" placeholder="Image:" name="image"/></br>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
		<div class="alert_wrap">
			<div class="alert_cancel"></div>
			<div class="inner_wrap">
				<h1>NEWSLETTER</h1>
				<p>Subscribe to the Bachas mailing list to receive updates on new arrivals, offers and other discount information.</p>
				<form>
					<input id="input_mail" type="text" placeholder="Your Email Here"><br />
					<input id="alert_submit" type="submit" value="SUBSCRIBE" ><br/>
					<input id="alert_che" type="checkbox" value="Don't show this popup again"> <p id="alert_check">Don't show this popup again</p>
				</form>
			</div>
		</div>
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
					<a href="index.php"><img class="logo" src="images/logo.png" alt="Bazar - Online Shoping" /></a>
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
					<li id="first_li"><a class="anch" href=#>HOME</a></li>
					<li id="navbar_fur_hov"><a href="Products Details Page_3_Grid_test2s.html" class="anch" href=#>FURNITURE</a>

						<!--<div class="table_menu">
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
						</div>-->



					</li>
					<li><a class="anch" href=#>CHAIR</a></li>
					<li><a class="anch" href=#>TABLE</a></li>
					<li><a class="anch" href=#>SOFA</a></li>
					<li><a class="anch" href=#>BEDROOM</a></li>
					<li id="last_li"><a class="anch" href=#>BLOG</a></li>
				</ul>
			</div><div class="clear"></div>						
		</nav>

		<!--Section-->
		<section>
			

			<div class="container_w2">
				<div class="hot_deals">
					<div class="deals_header"><div class="hdealtitle">HOT DEALS</div>
						<div class="changeitem">
							<div class="current_item div1 timer_selector" onclick="hotdeals_man()"></div>
							<div class="div2 timer_selector" onclick="hotdeals_man()"></div>
							<div class="div3 timer_selector" onclick="hotdeals_man()"></div>
						</div>
					</div>
					<div id="hotbigcontainer">
						<div class="hotcontainer">
							<div class="htconti">
							</div>
							<div class="add_t_c">
								<div id="add_t">
									<img src="images/buy.png" alt="buy"/><div>ADD TO CART</div>
								</div>
							</div>
							<div class="left_untill">
								<div class="left_circles circle1 circle1"><div><span class="timer_days"></span><br/>DAYS</div></div>
								<div class="left_circles circle2 circle2"><div><span class="timer_hrs"></span><br/>HRS</div></div>
								<div class="left_circles circle3 circle3"><div><span class="timer_min"></span><br/>MINS</div></div>
								<div class="left_circles circle4 circle4"><div><span class="timer_sec"></span><br/>SECS</div></div>
							</div>
							<div class="name_aricle"><div id="art_name">Article Name</div></div>
							<div class="rateing"><img src="images/blackstar.png" alt=""/><img src="images/blackstar.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/></div>
							<div class="line_s"><div class="orange_line"></div></div>
							<div class="priceandoth">
								<div class="lftdivs">
									<div><img src="images/eye.png"alt="ceva"/></div>
									<div><img src="images/heart.png"/ alt=""></div>
									<div><img src="images/arrows.png" alt=""/></div>
								</div>
								<div class="rghdivs">
									<div class="rghdivsinitial">$350.00</div>
									<div class="rghdivsnew">$300.00</div>
								</div>
							</div>
						</div>
						<div class="hotcontainer">
							<div class="htconti2">
							</div>
							<div class="add_t_c">
								<div id="add_t">
									<img src="images/buy.png" alt="buy"/><div>ADD TO CART</div>
								</div>
							</div>
							<div class="left_untill">
								<div class="left_circles circle1"><div><span class="timer_days"></span><br/>DAYS</div></div>
								<div class="left_circles circle2"><div><span class="timer_hrs"></span><br/>HRS</div></div>
								<div class="left_circles circle3"><div><span class="timer_min"></span><br/>MINS</div></div>
								<div class="left_circles circle4"><div><span class="timer_sec"></span><br/>SECS</div></div>
							</div>
							<div class="name_aricle"><div id="art_name">Article Name</div></div>
							<div class="rateing"><img src="images/blackstar.png" alt=""/><img src="images/blackstar.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/></div>
							<div class="line_s"><div class="orange_line"></div></div>
							<div class="priceandoth">
								<div class="lftdivs">
									<div><img src="images/eye.png"alt="ceva"/></div>
									<div><img src="images/heart.png"/ alt=""></div>
									<div><img src="images/arrows.png" alt=""/></div>
								</div>
								<div class="rghdivs">
									<div class="rghdivsinitial">$350.00</div>
									<div class="rghdivsnew">$300.00</div>
								</div>
							</div>
						</div>
						<div class="hotcontainer">
							<div class="htconti3">
							</div>
							<div class="add_t_c">
								<div id="add_t">
									<img src="images/buy.png" alt="buy"/><div>ADD TO CART</div>
								</div>
							</div>
							<div class="left_untill">
								<div class="left_circles circle1" id="circle1"><div><span class="timer_days"></span><br/>DAYS</div></div>
								<div class="left_circles circle1"><div><span class="timer_hrs"></span><br/>HRS</div></div>
								<div class="left_circles circle1"><div><span class="timer_min"></span><br/>MINS</div></div>
								<div class="left_circles circle1"><div><span class="timer_sec"></span><br/>SECS</div></div>
							</div>
							<div class="name_aricle"><div id="art_name">Article Name</div></div>
							<div class="rateing"><img src="images/blackstar.png" alt=""/><img src="images/blackstar.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/><img src="images/star.png" alt=""/></div>
							<div class="line_s"><div class="orange_line"></div></div>
							<div class="priceandoth">
								<div class="lftdivs">
									<div><img src="images/eye.png"alt="ceva"/></div>
									<div><img src="images/heart.png"/ alt=""></div>
									<div><img src="images/arrows.png" alt=""/></div>
								</div>
								<div class="rghdivs">
									<div class="rghdivsinitial">$350.00</div>
									<div class="rghdivsnew">$300.00</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--CAROUSEL-->
				<div class="carousel">
					<div class="slider_wrapper">
						<ul class="slider-list">
							<li class="slider-img">
								<div id="indoor_background" class="slider-img-div">
									<div class="displacemen_carousel1" ></div>
									<div class="cont_carousel"><h1>INDOOR<span> FURNITURE</span></h1><br><h3>SAVE UP TO 50% OF ALL FURNITURE</h3></div>
									<div class="displacemen_carousel2">
										<div class="shop_now">SHOP NOW</div>
									</div>
								</div>
							</li>

							<li class="slider-img">
								<div id="outdoor_background" class="slider-img-div">
									<div class="displacemen_carousel1"></div>
									<div class="cont_carousel"><h1>OUTDOOR<span>FURNITURE</span></h1><br><h3>SAVE UP TO 40% OF ALL FURNITURE</h3></div>
									<div class="displacemen_carousel2">
										<div class="shop_now">SHOP NOW</div>
									</div>
								</div>
							</li>
							<li class="slider-img">
								<div id="kitchen_background" class="slider-img-div">
									<div class="displacemen_carousel1"></div>
									<div class="cont_carousel"><h1>Kitchen<span> FURNITURE</span></h1><br><h3>SAVE UP TO 50% OF ALL FURNITURE</h3></div>
									<div class="displacemen_carousel2">
										<div class="shop_now">SHOP NOW</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="cursor_carousel">
						<div class="prev_carousel"><img src="images/prev.png" alt="previous"/></div>
						<div class="next_carousel"><img src="images/next.png" alt="next"/></div>
					</div>
				</div>


				<!--section2-->
				<div class="section2">
					<div class="cont">
						<div class="outercircle">
							<div class="innercircle">
								<img src="images/transport_b.png" alt="transport" class="icn"/>
							</div>
						</div>
						<div class="bottomdiv">
							<div class="textdiv">
									<span class="textbld">FREE SHIPPING</span><br>
									ALL ORDER
						    </div>
						</div>

					</div>

					<div class="cont">
						<div class="outercircle">
							<div class="innercircle">
								<img src="images/listen_b.png" alt="listen" class="icn"/>
							</div>
						</div>
						<div class="bottomdiv">
							<div class="textdiv">
									<span class="textbld">FREE SHIPPING</span><br>
									ALL ORDER
						    </div>
						</div>

						<div class="sp"></div>
					</div>

					<div class="cont">
						<div class="outercircle">
							<div class="innercircle">
								<img src="images/money_back_b.png" alt="money back" class="icn"/>
							</div>
						</div>
						<div class="bottomdiv">
							<div class="textdiv">
									<span class="textbld">FREE SHIPPING</span><br>
									ALL ORDER
						    </div>
						</div>

						<div class="sp"></div>
					</div>
					<div class="cont">
						<div class="outercircle">
							<div class="innercircle">
								<img src="images/member discount_b.png" alt="member discount" class="icn"/>
							</div>
						</div>
						<div class="bottomdiv">
							<div class="textdiv">
									<span class="textbld">FREE SHIPPING</span><br>
									ALL ORDER
						    </div>
						</div>
					</div>
				</div>


				<!--section3-->
				<div class="section3">
					<div class="guest-room">
						<div class="guest-room_i">
							<img class="guest_room_s" src="images/continut/sofa7.jpg" alt="sofa" />
							<div class="displacement_gr"></div>
								
								<h3>GUEST ROOM</h3>
								<h1>SOFA</h1>
					
								<div class="discount_gr">-20%</div>
						</div>
					</div>
					<div class="right_room">
						<div class="right_upper">
							<div class="displ_blue"><img class="right_upper_chair" src="images/continut/chair2.jpg" alt="chair" /></div>
							<div class="text_blue_div">
								<div class="blue_div_text">	
									<h3><span>OFFICE</span> CHAIR<h3>
									<h5>COLLECTION</h5>
									<h1>$200.00</h1>
								</div>	
							</div>
						</div>
						<div class="right_lower">
							<div class="displ_pink">
								<img class="displ_pink_spec" src="images/continut/dining6.jpg" alt="chair" />
							</div>
							<div class="text_pink_div">
								<div class="pink_div_text">	
									<h3><span>SECIAL</span> COLLECTION<h3>
									<h5>SAVE UP 45% OF FURNITURE</h5>
								</div>	
							</div>
						</div>
					</div>
				</div>


				<!--NEW FURNITURE-->
				<div class="section4">
					<div class="n_left">
						NEW FURNITURE
					</div>
					<div class="nf_nav">
						<ul class="nf_nav_ul">
							<li><div data-newtab="8" id="but_bed" class="tab-name">Bed</div></li>
							<li><div data-newtab="2" id="but_chair" class="tab-name">Chair</div></li>
							<li><div data-newtab="4" id="but_sofa" class="tab-name">Sofa</div></li>
							<li><div data-newtab="1" id="but_table" class="tab-name">Table</div></li>
							<li><div data-newtab="9" id="but_dining" class="tab-name">Dining</div></li>
						</ul>
					</div>
					<div class="nf_line the_nf_line">
					</div>
					<div class="nf_dotts changeitem">
						<div class="current_item"></div>
						<div></div>
						<div></div>
					</div>
				</div>


				<!--section#5-->

				<!--section#5 __ BED-->
				<div id="bed" class="product section5">
					<div class="rw">
						
					</div>
				</div>


				<!--section#6-->
				<div class="section6">
					<div class="fur_gallery">
						<div class="fr-top">FURNITURE GALLERY</div>
						<div class="fr-line">
							<div class="fr-line-o"></div>
						</div>

						<div class="frg_menu">
							<div class="frg_container">

								<div data-categ="featured" class="frg_menu_item frg_menu_item_active" id="fr_gal1">FEATURED</div>
								<div data-categ="topsel" class="frg_menu_item buton_de_test" id="fr_gal2">TOP SELLER</div>
								<div data-categ="sale-off" class="frg_menu_item" id="fr_gal3">SALE OFF</div>
								<div data-categ="top-rated" class="frg_menu_item" id="fr_gal4">TOP RATED</div>
								<div class="frg_big_container">
									<div class="frg_inner_container1 inner_cont_sell">
										<div class="frg_body_cont">
											<div class="frg_body">
												<div class="frg_w_toolt">
													<div class="frg_buttons"><img src="images/heart.png" alt="heart"/></div>
													<div class="frg_tooltip">Add To Wishlist</div>
												</div>
												<div class="frg_w_toolt">
													<div class="frg_buttons"><img src="images/arrows.png" alt="arrows"/></div>
													<div class="frg_tooltip">Add To Compare</div>
												</div>
												<div class="frg_w_toolt">
													<div class="frg_buttons"><img src="images/eye.png" alt="eye"/></div>
													<div class="frg_tooltip">Quick Views</div>
												</div>
												<div class="frg_w_toolt">
													<div class="frg_buttons"><img src="images/buy_black.png" alt="buy"/></div>
													<div class="frg_tooltip">Add To Cart</div>
												</div>
											</div>

											<div class="frg_body_img">
												<img src="images/continut/my_shop.jpg" alt="my shop"/>
												<h1 class="headder_nume_produs">This Is Our Shop</h1>
											</div>
										</div>
										<div class="frg_carousell">
											<div class="frg_cont">
												<div class="frg_l_arrow"><img src="images/prev.png" alt="prev"/></div>	
												<div class="frh_car_items">
													
												</div>
												<div class="frg_r_arrow"><img src="images/next.png" alt="next"/></div>			
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>



					<div class="fur_gal_right">
						<img class="fur_gal_right_img" src="images/continut/bed8.jpg" alt="bed8" />
						<div class="fur_gal_right_body">
							<span class="fur_right1">FROM</span>
							<span class="fur_right2"> $50.80</span></br>
							<span class="fur_right3">Bedroom Bed</span>
						</div>
						<div class="fur_right_greenb">SHOP NOW</div>
					</div>
				</div>



				<div class="section7">
					<div class="blog">
						<div class="section4">
							<div class="n_left">
								LATEST BLOG
							</div>
							<div class="nf_nav">
								
							</div>
							<div class="nf_line2">
							</div>
							<div class="nf_dotts changeitem">
								<div class="div1 current_item"></div>
								<div class="div2"></div>
								<div class="div3"></div>
							</div>
						</div>
						<div id="blog_big_wrap">
							<div class="blogs_wr">
								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://amberinteriordesign.com/wp-content/uploads/2017/03/StudioSession-274.jpg" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>02 JUN 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>2 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Client of the Mid Century</h4>
										<div class="blog_text">
											On this project we updated all the spaces. We added bigger doors, windows, and changed materials and plumbing throughout. We added neutral furnishings paired with one of a kind vintage pieces and vintage rugs.
										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>

								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://www.benpentreath.com/wp-content/uploads/2015/08/P1090583.jpg" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>15 MAY 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>4 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>High Summer in Oxfordshire</h4>
										<div class="blog_text">
It’s been a perfect weekend in Oxfordshire. We were staying at Wardington, but on the way, leaving London lazily on Saturday morning, we decided to stop briefly at Rousham.
									</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>
								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2016/07/A-beautiful-old-blacksmith-studio-renovated-in-Greece-1-2.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>10 APR 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>7 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>A Renovated Blacksmith Studio</h4>
										<div class="blog_text">
I have a thing for high ceilings, don’t you?
I also very much love plywood or any architectural buildings and dwellings made out of wood for that matter and if you haven’t seen my recent post. 										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
							</div>
							<div class="blog_spacer"></div>
							<div class="blogs_wr">
								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2016/09/How-to-get-the-look-A-beautiful-white-apartment-with-natural-accents-1.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>20 APR 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>5 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>A White Apartment With Natural Accents</h4>
										<div class="blog_text">
Hello everyone! If you’ve been a reader of my blog for a while, you know that white interiors is my first love so today, I’m taking inspiration from this beautiful white apartment with lovely natural accents.										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>

								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2017/01/Grey-bedroom.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>15 FEBR 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>4 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Grey Minimalism in the Bedroom</h4>
										<div class="blog_text">
I just came back from shooting my Artist friend Perrine Fifadji (check the African Queen visual story) while she was performing at La Mediathèque of Mérignac. It was a great experience as she has an amazing voice…										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>

								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2017/04/Vispring-x-Missoni-4.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>15 JAN 2017</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>4 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Vispring x Missoni Collaboration</h4>
										<div class="blog_text">
During my last trip to London, I spent one night in the quintessentially English Elephant Hotel in Pangbourne (Berkshire) and one in The Sanderson boutique hotel.
I slept like a baby in both.										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
							</div>
							<div class="blog_spacer"></div>
							<div class="blogs_wr">
								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2016/08/4W0A2530.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>05 DEC 2016</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>12 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Inspiring White Rustic Kitchen</h4>
										<div class="blog_text">
Kitchens are definitively my favourite room in a home and when it combines natural materials with simple, minimalist lines, I’m in heaven. I first spotted this kitchen on Instagram and my immediate reaction was WOW…										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>

								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2017/05/Stylish-bedroom-update-with-a-new-print-1.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>24 NOV 2016</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>7 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Bedroom Update in France</h4>
										<div class="blog_text">
As soon as I recovered from the low blood pressure that hit me recently and let me with very little energy for three weeks, I tackled all the things I wanted to do during Mila‘s school holidays.										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
								<div class="blog_spacer"></div>

								<div class="blogs">
									<div class="blog_up">
										<img class="image_blog_top" src="http://karinecandicekong.com/wp-content/uploads/2017/05/Carl-Hansen-Son-limited-edition-CH23-2.jpg
" alt=""/>
										<div class="date_com">
											<div class="blog_date"><img src="images/date.png" alt"date"/>15 OCT 2016</div>
											<div class="blog_comm"><img src="images/comm.png" alt"comm"/>4 Comments</div>
										</div>
									</div>
									<div class="blog_down">
										<h4>Limited Edition CH23 Available</h4>
										<div class="blog_text">
I’m back from a girls weekend in Marrakech (which was so good on so many levels!) and I have to admit that after spending days in the souk surrounded by beautiful woven baskets and shades, hand carved wooden home 										</div>
										<div class="blog_read_more">Read More</div>
									</div>
								</div>
							</div>
							<div class="blog_spacer"></div>
						</div>
					</div>
				</div>
				<div class="section8">
					<div class="brand">
						<div class="brand_move_l"><img src="images/prev.png" alt="prev"/></div>
						<div class="brand_wrap">
							<div class="brand_spacer"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand1.png" alt="brand1"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand2.png" alt="brand2"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand3.png" alt="brand3"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand4.png" alt="brand4"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand5.png" alt="brand5"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand6.png" alt="brand6"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand2.png" alt="brand2"></div>
							<div class="brand_spacer"></div>
							<div class="brands"><img src="images/brand6.png" alt="brand6"></div>
							<div class="brand_spacer"></div>
						</div>
						<div class="brand_move_r"><img src="images/next.png" alt="next"/></div>
					</div>
				</div>
				<div class="section9">
					<div class="feedback">

						<div class="feedback_header">
							<div class="n_left">
								CLIENT FEEDBACK
							</div>
							<div class="nf_nav">
								
							</div>
							<div class="nf_line2">
							</div>
							<div class="nf_dotts changeitem">
								<div id="div1" class="current_item" onclick="manslide()"></div>
								<div id="div2" onclick="manslide()"></div>
								<div id="div3" onclick="manslide()"></div>
							</div>
						</div>

						<div class="feedback_text"><span>"</span>
							<div class="feedback_div">
								<div>
									</br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.

									<div class="feedback_author">
										<div class="feedback_author_pict"><img src="https://theawesomer.com/photos/2011/01/012611_van_gogh_fake_self_portrait_1.jpg" alt=""/></div>
										<div class="feedback_author_name"><span id="feedback_aut_name">John Smith</span></br>Furniture Client</div>
									</div>
								</div>
								<div>
									</br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.

									<div class="feedback_author">
										<div class="feedback_author_pict"><img src="http://sabrinasmelko.com/wp-content/uploads/2015/07/IncMagazine-CaterinaFake-1024x1024.jpg" alt=""/></div>
										<div class="feedback_author_name"><span>James Smith</span></br>Furniture Client</div>
									</div>
								</div>
								<div>
									</br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.

									<div class="feedback_author">
										<div class="feedback_author_pict"><img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/1/000/1a7/244/064b81d.jpg" alt=""/></div>
										<div class="feedback_author_name"><span>John Hetfield</span></br>Furniture Client</div>
									</div>
								</div>
							</div>
						</div>
										
					</div>
				</div>
			</div>

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
		<script type="text/javascript" src="js/tabbing.js"></script>

		<script type="text/javascript" src="js/new_furniture_backend.js"></script>

	</body>
</html>