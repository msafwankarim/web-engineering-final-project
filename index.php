<!-- 
	Author: 	Muhammad Safwan Karim
	Reg# 		3848-FBAS/BSSE/F18 (B)
	Project:	E-Bakers
	Subject: 	Web Engineering
 -->
<?php require 'Connection.php'; ?>
<?php require 'Product.php'; ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-Bakers</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link rel="icon" href="/images/logo.png" type="image/png" />
	<link rel="shortcut icon" href="/favicon.ico" />

	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->

	<!-- Bootstrap core -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<div class="mian-content">
		<!-- header -->
		<header>
			<?php include 'header.php'; ?>
		</header>
		<!-- //header -->

		<!-- banner -->
		<!-- main image slider container -->
		<div id="slider-main">
			<div class="banner-text-agile text-center">
				<div class="container">
					<h3 class="text-white font-weight-bold mb-3">E-Bakers, the smart choice.</h3>
					<p class="text-light px-4 "> We bake the best breads, pastries, jams and cakes, doughnuts and ice cream
						and of course, our favourite chocolate cookies.</p>
					<button type="button" class="btn btn-primary button mt-md-5 mt-4" data-toggle="modal" data-target=".bd-example-modal-lg">
						<span>Watch Our Video</span>
					</button>
				</div>
			</div>
			<!-- previous button -->
			<div id="heroCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#heroCarousel" data-slide-to="1"></li>
					<li data-target="#heroCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="images/1-i.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/2-i.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="images/3-i.jpg" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<!-- small circles container -->
			<!-- <div id="circles"></div> -->

		</div>
		<!-- end of main image slider container -->
		<!-- Modal -->
		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center" id="exampleModalCenterTitle" style="width: 100%;">E-Bakers
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-0">
						<iframe width="1280" height="720" src="https://www.youtube.com/embed/tYolNmtciF4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture inline" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- //Model -->
		<!-- //banner -->

		<!-- banner bottom icons -->
		<div class="icons-banner-botom">
			<div class="container">
				<ul class="list-unstyled my-4" style="display: flex; justify-content: center; flex-wrap: wrap;">
					<li class="icons-mkw3ls">
						<p class="mb-2">Cake</p>
						<img src="images/img1.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Bread</p>
						<img src="images/bread-img.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Pista</p>
						<img src="images/img3.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Strawberry</p>
						<img src="images/img4.png" class="img-fluid" alt="">
					</li>
					<li class="icons-mkw3ls">
						<p class="mb-2">Muffins</p>
						<img src="images/img5.png" class="img-fluid" alt="">
					</li>
				</ul>
			</div>
		</div>
		<!-- //banner bottom icons -->
	</div>
	<!-- //main -->

	<!-- banner-bottom -->
	<section class="banner-main-agiles py-5">
		<div class="banner-bottom-w3layouts" id="about">
			<div class="container pt-xl-5 pt-lg-3">
				<div class="row mt-5">
					<div class="col-lg-6">
						<p class="text-uppercase">A few words</p>
						<h3 class="aboutright">Welcome to E-Bakers</h3>
						<h4 class="aboutright">We are passionate about baking and we love what we do.</h4>
						<p>E-Bakers is a great place for families to relax and have a great time, as it is a friendly
							neighborhood bakery, and we have a knowledgeable and helpful staff to make sure you have a
							special day. You could enjoy a delicious breakfast, lunch, or dinner, and are sure to have
							your cake and eat it too. We are a great bakery that is not only an honor for the owners,
							but a benefit for our residents and friends.</p>
						<button type="button" class="btn btn-primary button mt-md-5 mt-4" onclick="window.location='about.html'">
							<span>Learn More</span>
						</button>
					</div>
					<div class="col-lg-6 about-img text-lg-enter">
						<img src="images/about.png" alt="" class="img-fluid">
					</div>
				</div>
			</div>


		</div>
		<!-- //banner-bottom-w3layouts -->
		<div class="some-another text-center pb-5">
			<div class="container pb-xl-5 pb-lg-3">
				<i class="fas fa-utensils"></i>
				<p class="text-uppercase mb-4 mt-2">A few words about our Site</p>
				<h4 class="aboutright about-right-2">At E-Bakers we are proud to be a small batch specialty bakery
					specializing in handcrafted pastries, artisan cakes, and artisan pastries from the finest bakeries
					and food producers throughout <strong>Islamabad</strong> .</h4>
				<h5 class="text-uppsecase font-weight-bold text-dark mt-4">Muhammad Safwan Karim
					<span class="text-secondary font-weight-normal">(Master Chef)</span>
				</h5>
			</div>
		</div>
		<!-- cake -->
		<img src="images/cake7.png" alt="" class="img-fluid cake-style">

		<!-- //cake -->
	</section>

	<!-- services -->
	<div class="serives-agile py-5 bg-light border-top" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="far fa-heart"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Made With Love</h5>
					<p>We offer a full menu of artisanal, handcrafted food that is made with love. </p>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-4">
					<i class="fas fa-birthday-cake"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Seasonal Pastries</h5>
					<p>We provide best pastries</p>
				</div>
				<div class="col-md-4 support-grid">
					<i class="far fa-calendar"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Event Catering</h5>
					<p>Order in bulk for big events</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- stats section -->
	<div class="middlesection-agile ">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center pt-4">
					<img src="images/women.png" alt="" class="img-fluid women-style" />
				</div>
				<div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0 py-5">
					<div class=" py-xl-5 py-lg-3">
						<h2 class="title-2 text-white mb-sm-5 mb-4">Some Statistical Facts</h2>
						<div class="row mb-xl-5 mb-4">
							<div class="col-4 w3layouts_stats_left w3_counter_grid">
								<p class="counter">1680</p>
								<p class="para-text-w3ls text-light">Popularity</p>
							</div>
							<div class="col-4 w3layouts_stats_left w3_counter_grid2">
								<p class="counter">1200</p>
								<p class="para-text-w3ls text-light">Happy Customers</p>
							</div>
							<div class="col-4 w3layouts_stats_left w3_counter_grid1">
								<p class="counter">400</p>
								<p class="para-text-w3ls text-light">Awards Won</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //stats section -->

	<!-- new products -->
	<div class="featured-section py-5" id="products">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">Our Products</h3>
				<p>Check out our our Products</p>
			</div>
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<?php
					$conn = new Connection();
					$conn = $conn->get_connection();
					$result = mysqli_query($conn, "SELECT * FROM products");
					$products = array();
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while ($row = mysqli_fetch_assoc($result)) {
							$product = Product::makeProductFromRow($row);
							array_push($products, $product);
						}
					} else {
						// echo "0 results";
					}
					foreach ($products as $product) {
						echo '<li>
						<div class="w3l-specilamk">
							<div class="row">
								<div class="col-lg-6 product-name-w3l">
									<h4 class="font-weight-bold">' . $product->name . '</h4>
									<p class="dont-inti-w3ls mt-4 mb-2">Rs.' . $product->price . '/-</p>
									<p>' . $product->description . '</p>
									<form action="/cart.php" method="post">
									<input type="hidden" name="product" value="'.$product->id.'" />
									<input type="hidden" name="quantity" value="1" />
									<button type="submit" class="button-3 active mt-5 py-4 scroll border-0"  data-category="' . strtolower($product->category) . '" data-product="' . strtolower($product->name) . '">Order Now</button>
									</form>
									
								</div>
								<div class="col-lg-6 speioffer-agile">
									<img src="' . $product->img_url . '" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</li>';
					}
					?>
				</ul>
				<div class="control-buttons col-lg-6 mt-2">
					<button class="prev rounded-circle border border-dark bg-white ">
						<i class="fas fa-chevron-left"></i>
					</button>
					<button class="next rounded-circle border border-dark bg-white ">
						<i class="fas fa-chevron-right"></i>
					</button>
				</div>



			</div>
		</div>
	</div>
	<!-- //new products	-->

	<!-- news -->
	<div class="news-agile bg-cream py-5" id="news">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<!-- order form -->
				<div class="col-lg-4 order-form-w3ls pl-lg-0" id="order">
					<div class="agile_its_registration bg-white">
						<h3 class="title-2 mb-3">Order Now</h3>
						<p class="mb-4">Order your favourite product now</p>
						<script>
							function productChanged(source) {
								// if (source.value == "cake") {
								// 	$("#cakeSize").removeClass("d-none");
								// 	$("#levelsWrap").removeClass("d-none");
								// } else {
								// 	$("#cakeSize").addClass("d-none");
								// 	$("#levelsWrap").addClass("d-none");
								// }

								$.get(`getcategoryprods.php?q=${source.value}`, (data, status) => {
									if (status == "success")
										$("#productSelector").html(data);
								})
							}
						</script>
						<form action="cart.php" method="post">
							<div class=" form-group">
								<label>Category</label>
								<select required onchange="productChanged(this)">
									<option value="" hidden>- Select a Category -</option>
									<?php
									$result = mysqli_query($conn, "SELECT DISTINCT category FROM products");
									if (mysqli_num_rows($result) > 0) {
										while ($row = mysqli_fetch_assoc($result)) {
											$cat = $row["category"];
											echo '<option value="' . strtolower($cat) . '">' . $cat . '</option>';
										}
									}
									?>
								</select>
								<div class="clear"></div>
							</div>
							<div class="  form-group">
								<label>Products</label>
								<select name="product" id="productSelector" required>
									<option value="" hidden>- Select Category -</option>
								</select>
								<div class="clear"></div>
							</div>
							<div id="levelsWrap" class=" form-group d-none">
								<label>Cake Levels</label>
								<input style="border: 1px solid;" placeholder="1 - 5" type="number" name="" id="" min="1" max="5">
								<div class="clear"></div>
							</div>
							<div class="quantityWrap form-group">
								<label>Quantity</label>
								<input style="border: 1px solid;" placeholder="1 - 9" type="number" name="quantity" id="" min="1" max="9" required>
								<div class="clear"></div>
							</div>
							<div id="cakeSize" class=" form-group d-none">
								<label>Size</label>
								<select>
									<option value="">4 inch</option>
									<option value="">6 inch</option>
									<option value="">8 inch</option>
									<option value="">10 inch</option>
								</select>
								<div class="clear"></div>
							</div>

							<input type="submit" value="Order" class="agileinfo-order btn" />
						</form>
					</div>
				</div>
				<!-- //order form -->
				<!-- news -->
				<div class="col-lg-8 news-blog mt-lg-0 mt-5">

					<!-- //news -->
					<!-- faqs -->
					<div class="faq-w3agile mt-5" id="faqs">
						<h3 class="title-2 mb-md-5 mb-4">Frequently asked questions</h3>
						<ul class="faq list-unstyled">
							<li class="item1">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">How long it will
									take to deliver?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4"> Your order will be delivered within 30-90 minutes. </p>
									</li>
								</ul>
							</li>
							<li class="item2 my-3">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">What if I cancel the
									order?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4">80% of the payment will be refunded</p>
									</li>
								</ul>
							</li>
							<li class="item3 my-3">
								<a href="#" title="click here" class="text-dark border-bottom pb-3">Which Payment method
									is acceptable?
									<i class="fas fa-plus float-right"></i>
								</a>
								<ul class="list-unstyled">
									<li class="subitem1">
										<p class="pt-3 pb-4">Cash on delivery</p>
									</li>
								</ul>
							</li>

						</ul>
					</div>
					<!-- //faqs -->
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->

	<!-- support -->
	<div class="serives-agile py-5" id="support">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="text-dark mb-2">Help & Support</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<i class="fas fa-headphones"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Online Support</h5>
					<p>Let us know if you face any issue</p>
					<button type="button" class="button button-2" onclick="window.location='contact.php'">
						<span>Call Us</span>
					</button>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-5">
					<i class="far fa-comments"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Live Chat 24/7</h5>
					<p>Our IT team is available 24/7.</p>
					<button type="button" class="button button-2 active" onclick="window.location='contact.php'">
						<span>Let's Chat</span>
					</button>
				</div>
				<div class="col-md-4 support-grid">
					<i class="fas fa-question"></i>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Any Questions</h5>
					<p>We are here to resolve your queries</p>
					<button type="button" class="button button-2" onclick="window.location='contact.php'">
						<span>Learn More</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- support -->

	<!-- footer -->
	<?php include 'footer.php' ?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/slick.min.js"></script>

	<!-- flexisel (for special offers) -->
	<script src="js/jquery.flexisel.js"></script>
	<link rel="stylesheet" href="css/slick.css">
	<script>
		$("#flexiselDemo1").slick({
			slidesToShow: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			prevArrow: $('.prev'),
			nextArrow: $('.next')
		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- script for tabs -->
	<script>
		$(function() {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function(e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->

	<!-- stats -->
	<!-- <script src="js/jquery.waypoints.min.js"></script> -->
	<!-- <script src="js/jquery.countup.js"></script> -->
	<script>
		// $('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function(e) {
			e.preventDefault();
			$(this).toggleClass('navicon--active');
			$('.toggle').toggleClass('toggle--active');
		});
	</script>
	<!-- //menu-js -->

	<!-- banner slider -->
	<script src="js/image-slider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/image-slider.css">
	<!-- //banner slider -->

	<!-- smooth scrolling -->
	<!-- move-top -->
	<!-- <script src="js/move-top.js"></script> -->
	<!-- easing -->
	<!-- <script src="js/easing.js"></script> -->
	<!--  necessary snippets for few javascript files -->
	<script src="js/cakes-bakery.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>