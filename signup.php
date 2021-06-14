<?php
session_start();
if ($_SESSION['customer']){
  header('Location: profile.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Sign Up Form</title>

</head>
<body>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Montserrat', sans-serif;
}

body{font-family: 'Poppins', sans-serif;
	background-color: #1a1a1a;
}
.navbar{
font-family: 'Poppins', sans-serif;
  border-radius:0px 0px 20px 20px;
}

.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.registration_form{
	background: #000000;
	padding: 25px;
	border-radius: 5px;
	width: 400px;
}

.registration_form .title{
	text-align: center;
	font-size: 20px;
	text-transform: uppercase;
	color: white;
	letter-spacing: 5px;
	font-weight: 700;
}

.form_wrap{
	margin-top: 35px;
}

.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: white;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
	width: 165px;
}

.form_wrap  input[type="text"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}

.form_wrap  input[type="password"]:focus{
	border-color: #000000;
}

.form_wrap .input_grp  input[type="password"]{
	width: 165px;
}

.form_wrap  input[type="password"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}
.form_wrap  input[type="email"]:focus{
	border-color: #000000;
}

.form_wrap .input_grp  input[type="email"]{
	width: 165px;
}

.form_wrap  input[type="email"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
}


.form_wrap ul{
	background: #fff;
	padding: 8px 10px;
	border-radius: 3px;
	display: flex;
	justify-content: center;
}

.form_wrap ul li:first-child{
	margin-right: 15px;
}

.form_wrap ul .radio_wrap{
	position: relative;
	margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
	position: absolute;
	top: 0;
	right: 0;
	opacity: 0;
}

.form_wrap ul .radio_wrap span{
	display: inline-block;
	font-size: 14px;
	padding: 3px 20px;
	border-radius: 3px;
	color: black;
}

.form_wrap .input_radio:checked ~ span{
	background: #FF4500;
}

.form_wrap .submit_btn{
	width: 100%;
	background: white;
	padding: 10px;
	border: 0;
	border-radius: 3px;
	text-transform: uppercase;
	letter-spacing: 3px;
	cursor: pointer;
}

.carousel-item {
    height: 24rem;
    background-color:#1a1a1a;
    color: #fff;
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

.download-button{
  color: white;
}

.footer-text{
  font-size: 1rem;
  color: white;
}
.footer-link{
  color: white;
  opacity: 0.5;
  font-size: 1rem;
}
.footer-link:hover{
  color: white;
  opacity: 1.0;
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

.form-control {
	margin-left: 20px;
}

.fa {
	color: Black;
	font-size: 25px;
	text-align: center;
	padding-right: 10px;
}


.text {
	margin-right: 20px;
}
.msg {
	border: 2px solid #9c1616;
	border-radius: 3px;
	padding: 10px;
	text-align: center;
	color:White;
	font-weight: bold;
	margin-top: 10px;
}
	</style>
  <?php
  include_once('sections/header.php');
  ?>
<div class="wrapper">
	<div class="registration_form">
		<div class="title">
			Registration Form
		</div>

		<form action="vendor/reg.php" method="post">
			<div class="form_wrap">
				<div class="input_grp">
					<div class="input_wrap">
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname">
					</div>
					<div class="input_wrap">
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname">
					</div>
				</div>

					<div class="input_wrap">
						<label for="username">Username</label>
						<input type="text" id="username" name="username">
					</div>
				<div class="input_wrap">
					<label for="email">Email Address</label>
					<input type="email" id="email" name="email">
				</div>
				<div class="input_wrap">
					<label for="phone">Phone Number</label>
					<input type="text" id="phone" name="phone">
				</div>
				<div class="input_wrap">
		<label for="password">Password</label>
		<input type="password" id="password" placeholder="********" name="password" >
	</div>
	<div class="input_wrap">
<label for="password">Repeat a Password</label>
<input type="password" id="password" placeholder="********" name="password2">
</div>
				<div class="input_wrap">
					<button type="submit" value="Register Now" class="submit_btn">Register Now</button>
				</div>
			</div>
      <?php
      if ($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';}
unset($_SESSION['message']);
?>

		</form>

	</div>
</div>
<?php
include_once('sections/footer.php');
?>


</body>
</html>
