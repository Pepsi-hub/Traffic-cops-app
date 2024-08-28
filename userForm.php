<?php
include "userClass.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname']; 
    $cellno = $_POST['cellphone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email address";
		exit;
	}

	
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Eparking Challan | System. </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-20">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo1.png" alt=""></a>
                            </div>
                        </div>

	<div class="container">
		<div class="text-center mb-4">
			<h3>Create new profile</h3>
			<p class="text-muted">Complete the form below to create a new profile</p>
		</div>

		<div class="container d-flex justify-content-center">
			<form action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;"> 
				<div class="row mb-3">
					<div class="col">
						<label class="form-label">Name:</label>
						<input type="text" class="form-control" name="name" placeholder="Name" required>
					</div>

					<div class="col">
						<label class="form-label">Surname:</label>
						<input type="text" class="form-control" name="surname" placeholder="Surname" required>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col">
						<div class="form-check">
						</div>
						<div class="form-check">
						</div>
					</div>

					<div class="col">
						<label class="form-label">Cellphone No:</label>
						<input type="text" class="form-control" name="cellphone" placeholder="0712345678" required>
					</div>
				</div>

				<div class="mb-3">
					<label class="form-label">Email:</label>
					<input type="email" class="form-control" name="email" placeholder="name@example.com" required>
				</div>

				<div class="mb-3">
					<label class="form-label">Password:</label>
					<input type="password" class="form-control" name="password" placeholder="Password" required>
				</div>

				<br>

				<div class="form-group">
					<label for="name">Image:</label>
					<img src="<?= "images/".$image ?>" alt="" width="100px" height="100px" class="thumbnail">
					<input type="file" name="image" class="form-control" placeholder="Upload image" value="<?php echo $image ?>">
				</div>

				<br>

				<div>
					<button type="submit" class="btn btn-success" name="submit">Save</button>
					<a href="index.php" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		</div>
	</div>

	  <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>