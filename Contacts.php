<!DOCTYPE html>
<html>

<head>
	<title>Contacts</title>
	<script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style>
.navbar{
font-family: 'Poppins', sans-serif;
  border-radius:0px 0px 20px 20px;
}
.text {
	margin-right: 200px;
}

.nav-text {
	padding-left: 30px;
}

.navbar-brand {
	font-size: 2rem;
	padding-left: 20px;

}

.nav-item {
	text-align: center;
	padding: 3px;
	font-size: 20px;
}

.srch {
	margin-left: 20px;
}

.fa {
	color: Black;
	font-size: 25px;
	text-align: center;
	padding-right: 10px;
}

.fa:hover {
	color: black;
	box-shadow: 0 5px 15px black;
}

.text {
	margin-right: 20px;
}
	.grid-container {
		display: grid;
		grid-gap: 1rem;
		padding: 1rem;
	}

	.grid-item {
		color: rgba(255, 255, 255, 0.9);
		text-align: center;
		padding: 20px;
		font-size: 30px;
	}

	.item1 {
		grid-column: 1 / span 2;
		grid-row: 1;
	}

	.item2 {
		grid-column: 3;
		grid-row: 1 / span 2;
	}

	.item5 {
		grid-column: 1 / span 3;
		grid-row: 3;
	}

	.send {
		margin-left: 15px;
		background-color: #9c1616;
		color: white;
	}

	.download-button {
		color: white;
	}

	.footer-text {
		font-size: 1rem;
		color: white;
	}

	.footer-link {
		color: white;
		opacity: 0.5;
		font-size: 1rem;
	}

	.footer-link:hover {
		color: white;
		opacity: 1.0;
	}

	#input1 {
		color: black;
	}

	.icon {
		color: #9c1616;
	}

	p,
	h2 {
		color: white;
	}

	.text-dark {
		color: white;
	}

	#input2 {
		color: white;
	}

	body {font-family: 'Poppins', sans-serif;
		background-color: #1a1a1a;
	}
</style>

<body>
	<?php
include_once('sections/header.php');
	 ?>
	<div class="container">
		<section class="mb-4">
			<h2 class="h1-responsive font-weight-bold text-center my-5">Contacts Us</h2>
			<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you</p>

			<div class="row">
				<div class="col-md-9 mb-md-0 mb-5">
					<form id="contactform">
						<div class="row">
							<div class="col-md-6">
								<div class="md-form mb-0">
									<input type="text" name="name" class="form-control" id="input1">
									<label for="email" id="input2">Your Name</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="md-form mb-0">
									<input type="text" name="email" class="form-control" id="input1">
									<label for="email" id="input2">Your Email</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="md-form mb-0">
									<input type="text" name="subject" class="form-control" id="input1">
									<label for="subject" id="input2">Subject</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="md-form">
									<textarea type="text" name="message" rows="3" class="form-control md-textarea" id="input1"></textarea>
									<label for="message" id="input2">Your Message</label>
								</div>
							</div>


							<div class="text-center text-md-left">
								<button class="btn send" type="submit" style="background-color:#9c1616;">Send</button>
							</div>
						</div>

					</form>
				</div>

				<div class="col-md-3 text-center text-primary">
					<ul class="list-unstyled mb-0">
						<li><i class="fas fa-map-marker-alt fa-2x icon"></i>
							<p class="text-white">Kairbekova 389</p>


						<li><i class="fas fa-phone mt-4 fa-2x icon"></i>
							<p class="text-white">+77082141862</p>


						<li><i class="fas fa-envelope mt-4 fa-2x icon"></i>
							<p class="text-white">anonymous@mail.ru</p>

						</li>
					</ul>
				</div>
			</div>

		</section>
	</div>




	<footer>
		<div class="grid-container" style="height:36xrem;background-image:linear-gradient(#9c1616,#813131)">

			<div class="grid-item item1">
				<p class="footer-text">For Client</p>
				<div class="container">
					<a href="#" class="footer-link">Order</a><br>
					<a href="#" class="footer-link">Shipping</a><br>
					<a href="payment.php" class="footer-link">Payment Method</a>
				</div>
			</div>

			<div class="grid-item item2">
				<p>Downloade App</p>
				<div class="container">
					<button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i>
						<p style="padding:10px 10px">Google Play</p>
					</button><br>
					<button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i>
						<p style="padding:10px 10px">App Store</p>
					</button>
				</div>
			</div>

			<div class="grid-item item3">
				<p class="footer-text">Company</p>
				<div class="container">
					<a href="#" class="footer-link">About us</a><br>
					<a href="#" class="footer-link">News</a><br>
					<a href="#" class="footer-link">Manager</a>
				</div>
			</div>
			<div class="grid-item item4">
				<p class="footer-text">Our social net</p>
				<div class="container">
					<a href="#" class="footer-link">Facebook</a><br>
					<a href="#" class="footer-link">Instagram</a><br>
					<a href="#" class="footer-link">Whatsapp</a>
				</div>
			</div>
			<div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
		</div>

	</footer>



	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>

</html>
