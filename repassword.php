<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ระบบบริหารทรัพยากรบุคคล - DigiTech</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="../assets/images/favicon.ico" />
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
		integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- Slick slider -->
	<link href="assets/css/slick.css" rel="stylesheet">
	<!-- Gallery Lightbox -->
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<!-- Skills Circle CSS  -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">

	<!-- Main Style -->
	<link href="index_style.css" rel="stylesheet">
	<link href="font.css" rel="stylesheet">
</head>

<body>

	<!--START SCROLL TOP BUTTON -->
	<button class="scrollToTop" onclick="topFunction()" id="tothetop" title="Go to top"><i
		class="fa fa-angle-up"></i></button>
	<!-- END SCROLL TOP BUTTON -->

	<!-- Start Header -->
	<header id="mu-hero">
		<div style="height: 80px;margin-left: 50px;margin-right: 50px;">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar" style="top:-5px;">
				<a class="navbar-brand" href="home.php">
					<img src="assets/images/sut_logo_white.png" height="50px" alt="logo" /> &nbsp;
					<img src="assets/images/DigiTech_Logo-white.png" height="40px" alt="logo" />
				</a>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start main content -->
	<main>
		<!-- login -->
		<section id="mu-position">
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div style="height: 30px;"></div>
						<div class="mu-title" style="margin-top: -30px;">
							<b style="font-size: 20px;color:#0072b5;">เปลี่ยนรหัสผ่าน</b>
						</div>
						<form action="check_repassword.php" method="post" style="color: #000;">
							<div class="form-group">
                                <label for="password" style="font-size: 16px 18px; font-weight: bold;">รหัสผ่านปัจจุบัน</label>
                                <input type="password" class="form-control" name="password1" id="password1" placeholder="รหัสผ่าน" required>
							</div>
							
							<br/>
							<div class="form-group">
								<label for="password" style="font-size: 16px;font-weight: bold;">รหัสผ่านใหม่</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="รหัสผ่าน (ไม่เกิน 20 ตัว)" required>
							</div>
							<div class="form-group">
								<label for="confirm_password"
									style="font-size: 16px;font-weight: bold;">ยืนยันรหัสผ่านใหม่</label>
								<input type="password" class="form-control" id="confirm_password" name="newpassword"
									placeholder="ยืนยันรหัสผ่าน" required>
								<label id='message' style="padding-top: 20px;font-size: 16px;"></label>
							</div>
							<br/>
                            <button type="submit" name="login" class="btn btn-primary btn-block"
                            style="background-color:#0072B5;border: 1px solid #004974;">
                            ลงทะเบียน</button>
                            <hr>
                        </form>

						<div style="height: 50px;"></div>

						<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
						<script>
							$('#password, #confirm_password').on('keyup', function() {
								if ($('#password').val() == $('#confirm_password').val()) {
									$('#message').html('รหัสผ่านถูกต้อง').css('color', 'green');
								} else
									$('#message').html('รหัสผ่านไม่ถูกต้อง').css('color', 'red');
							});
						</script>

					</div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</section>
		<!-- End login -->

	</main>

	<!-- End main content -->

	<!-- Start footer -->
	<footer id="mu-footer">

		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="mu-single-footer">
							<ul class="list-unstyled">
								<h3 style="padding-top: 30px;">ติดต่อเรา</h3>
							</ul>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="mu-single-footer">
								<ul class="list-unstyled">
									<li class="media">
										<span class="fa fa-map-marker fa-lg"></span>
										<div class="media-body">
											<p style="font-size: 14px 14px;">
												111 มหาวิทยาลัยเทคโนโลยีสุรนารี<br>
												ต.สุรนารี อ.เมือง จ.นครราชสีมา 30000<br>
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mu-single-footer">
								<ul class="list-unstyled">
									<li class="media">
										<span class="fa fa-phone fa-lg"></span>
										<div class="media-body">
											<p style="font-size: 14px 14px;">
												044-223789
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mu-single-footer">
								<ul class="list-unstyled">
									<li class="media">
										<span class="fa fa-envelope fa-lg"></span>
										<div class="media-body">
											<p style="font-size: 14px 14px;">
												digitech@sut.ac.th
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="mu-footer-bottom-area">

					<p class="mu-copy-right" style="font-size: 14px 14px;">&copy; Copyright 2021 - 
						ระบบบริหารทรัพยากรบุคคล สำนักวิชาเทคโนโลยีดิจิทัล.</p>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
		integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
	</script>

	<!-- Slick slider -->
	<script type="text/javascript" src="../assets/js/slick.min.js"></script>
	<!-- Progress Bar -->
	<script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
	<!-- Filterable Gallery js -->
	<script type="text/javascript" src="../assets/js/jquery.filterizr.min.js"></script>
	<!-- Gallery Lightbox -->
	<script type="text/javascript" src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Counter js -->
	<script type="text/javascript" src="../assets/js/counter.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="../assets/js/app.js"></script>

	<!-- Custom js -->
	<script type="text/javascript" src="../assets/js/custom.js"></script>

	<script>
		//Get the button
		var mytopbtn = document.getElementById("tothetop");
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mytopbtn.style.display = "block";
			} else {
				mytopbtn.style.display = "none";
			}
		}
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
						<script>
							$('#password, #confirm_password').on('keyup', function() {
								if ($('#password').val() == $('#confirm_password').val()) {
									$('#message').html('รหัสผ่านถูกต้อง').css('color', 'green');
								} else
									$('#message').html('รหัสผ่านไม่ถูกต้อง').css('color', 'red');
							});
						</script>

</body>

</html>