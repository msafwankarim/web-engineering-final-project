<!-- 
	Author: 	Muhammad Safwan Karim
	Reg# 		3848-FBAS/BSSE/F18 (B)
	Project:	E-Bakers
	Subject: 	Web Engineering
 -->
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
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
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
			<?php include 'header.php' ?>
		</header>
		<!-- //header -->

		<!-- banner 2 -->
		<div class="banner2-w3ls">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- main -->
	<!-- page details -->
	<div class="breadcrumb-agile">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ol>
		</nav>
	</div>
	<!-- //page details -->

	<!-- contact page -->
	<div class="address py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h2 class="text-dark mb-2">Contact Us</h2>
				<p>Send us your word</p>
			</div>
			<div class="row address-row">
				<div class="col-lg-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4 class="font-weight-bold mb-3">Address</h4>
						<p><i class="fas fa-map-marker"></i> Aabpara Market Islamabad, Pakistan</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4 class="font-weight-bold mb-3">Phone </h4>
						<p><i class="fa fa-phone"></i> +92 51 123456</p>
						<p><i class="fa fa-phone"></i> +92 51 123457</p>
					</div>
					<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4 class="font-weight-bold mb-3">Mail</h4>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="mailto:example@mail.com"> bilalmalik@gmail.com</a>
						</p>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="mailto:sufwankareem@gmail.com"> sufwankareem@gmail.com</a>
						</p>
						<p>
							<i class="fa fa-envelope"></i>
							<a href="mailto:example@mail.com"> huzaifahsan@gmail.com</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 address-left mt-lg-0 mt-5">
					<div class="address-grid">
						<h4 class="font-weight-bold mb-3">Get In Touch</h4>
						<form action="contact-form.php" id="contactUsForm" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name*" name="name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email*" name="email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject*" name="subject" required>
							</div>
							<div class="form-group">
								<textarea placeholder="Message*" name="msg" class="form-control" required></textarea>
							</div>
							<small class="form-text text-muted">
								* This is required.
							</small>
							<div class="form-submit">
								<button type="submit">
									<div class="spinner-border d-none" role="status">
										<span class="sr-only">Loading...</span>
									</div> SEND
								</button>
								<!-- <input type="submit" value="SEND"> -->
							</div>
						</form>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Submitted</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Your response has been submitted</p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-primary">OK</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1659.559349724527!2d73.08529553405009!3d33.705877322982936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf8ac09bcc91%3A0xb2b7b48f5606f74b!2sAabpara%20G%206%2F1%20G-6%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1639758643351!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<!--// map -->
	<!-- //contact page -->

	<!-- footer -->
	<?php include 'footer.php' ?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script>
		let $contactForm = $("#contactUsForm"),
			$modal = $(".modal");

		$contactForm.submit(e => {
			e.preventDefault();
			$contactForm.find("div[role=status]").removeClass("d-none");
			$.ajax({
				type: "POST",
				url: $contactForm.attr("action"),
				data: $contactForm.serialize(),
				success: data => {
					$modal.find(".modal-title").text("Success");
					$modal.find(".modal-body>p").text("Data submitted successfully!");
				},
				error: data => {
					$modal.find(".modal-title").text("Error");
					$modal.find(".modal-body>p").text("Form submission failed!");

				}

			}).always(xhr => {
				$modal.modal("show");
				$contactForm.find("div[role=status]").addClass("d-none");
			});
		});
	</script>

	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function(e) {
			e.preventDefault();
			$(this).toggleClass('navicon--active');
			$('.toggle').toggleClass('toggle--active');
		});
	</script>
	<!-- //menu-js -->

	<!-- smooth scrolling -->

	<!-- move-top -->

	<!-- easing -->

	<!--  necessary snippets for few javascript files -->
	<script src="js/cakes-bakery.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>