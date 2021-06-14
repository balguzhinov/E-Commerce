<?php
session_start();
if ($_SESSION['customer']){
  header('Location: profile.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Log in</title>
  </head>
  <body>
    <style>
    .navbar{
font-family: 'Poppins', sans-serif;
      border-radius:0px 0px 20px 20px;
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
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{font-family: 'Poppins', sans-serif;
        background: black;
      }
      .row{
        background: white;
        border-radius: 30px;
        box-shadow: 12px 12px 22px black;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      .btn1{
        border:none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
      }
      .btn1:hover{
        background: red;
        border: 1px solid;
        color: white;
      }

.form-row{
  padding-top:10px;
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
	color:white;
	font-weight: bold;
	margin-top: 10px;
  background-color: #9c1616;
}
    </style>

    <?php
    include_once('sections/header.php');
    ?>

  <section class="Form my-4 mx-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="#" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 px-5 pt-5">
          <h1 class="font-weight-bold py-3">EAD-Corporation</h1>
          <h4>Sign into your account</h4>
          <form action="vendor/signin.php" method="post">
            <div class="form-row">
              <div class="col-lg-7">
              <input type="text" placeholder="Username" class="form-control" id="username" name="username">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
              <input type="password" placeholder="********" class="form-control" id="password" name="password">
              </div>
            </div>

            <div class="form-row">
              <div class="col-lg-7">
              <button type="submit" class="btn1 mt-3 mb-5">Login</button>
              </div>
            </div>
            <a href="#">Forgot Password?</a>
            <p>Don't have an account? <a href="signup.php">Register here</a></p>
            <?php
            if ($_SESSION['message']){
              echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';}
      unset($_SESSION['message']);
      ?>

          </form>
        </div>
      </div>

    </div>


  </section>
  <?php
  include_once('sections/footer.php');
  ?>

  </body>
</html>
