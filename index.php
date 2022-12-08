<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="admin/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
	<title> Home </title>
	<style type="text/css">
		.avi{
			border-radius: 25px;
			padding: 15px 15px;
		}
	</style>
</head>
<body>
	<div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link text-light" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="#">Contact US</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light">Logout</a>
						</li>
					</ul>
				</div>
			</nav>

			<section id="banner">
				<div class="banner-container d-flex justify-content-center align-items-center">
					<div class="banner-components text-center">
						<h1 class="font-weight-bolder text-primary mb-5"> Welcome to Our Recidence!!!! </h1>
						<button class="btn-lg btn-success mr-2" onclick="window.open('admin/index.php')"> <i class="fas fa-user-tie fa-2x text-dark mr-2"></i> Mess Manager </button>
						<button class="btn-lg btn-success" onclick="window.open('user_login.php')"
						class="request-callback"> <i class="far fa-user fa-2x text-dark mr-2"></i> User Panel </button>
						<div class="avi bg-dark mt-3">
							<h4><p class="text-warning"><a href="user.php" class="text-light">Fill this form, </a>if you want to live here</p><h4>
						</div>
					</div>
				</div>
			</section>
		</header>


		<main>

		</main>

		<footer>
			<div class="row">
				<div class="col-lg-6 text-light text-center text-lg-left">
					<p class="mb-0 font-weight-bolder">&copy; Copyright: Avilash Saha</p>
					<p class="font-weight-light"> All source have been taken from Bootstrap4</p>
				</div>
				<div class="col-lg-6 text-success text-center text-lg-right">
					<button class="btn btn-light">
						<a class="text-dark" href="#">Back To Top</a>
						<i class="fas fa-angle-double-up"></i>
					</button>
					<a href="https://www.facebook.com/avilashsaha.akash"><i class="fab fa-facebook fa-2x"></i></a>
					<a href="https://twitter.com/Avilash_aks"><i class="fab fa-twitter fa-2x"></i></a>
					<a href="https://www.youtube.com/channel/UCSCsB242VFK4tfKKTrGOcCA"><i class="fab fa-youtube fa-2x"></i><a>
					<a href="https://www.pinterest.com/business/hub/"><i class="fab fa-pinterest fa-2x"></i></a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>