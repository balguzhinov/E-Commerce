<?php
session_start();
if (!$_SESSION['customer']){
  header('Location: login.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style type="text/css">
        .profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #654ea3;
    background-color: #1a1a1a;
    min-height: 100vh;
    overflow-x: hidden
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
.top3 {
  padding: 50px;
  text-align: center;
  background-color: white;
  color:black;
  border-radius: 20px;
}
.photo {
  border-radius: 15px;
}
.p-2 {
  border-radius: 10px;
margin: 5px;
  text-align: center;
}
.btn-category{
  background-color:#9c1616;
  color:white;
  margin:15px;
border-radius: 13px;
}
.card{
  border-radius: 25px;
}
.d-block{
    border-radius: 25px;
}
.btn-category:hover{

  transform: scale(1.15);
}
    </style>
    <?php
if($_SESSION['customer'] == ''):
?>
<header>
  <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: #9c1616;">
    <a class="navbar-brand" href="index.php"><strong>EDA</strong></a>
    <div>
      <form class="form-inline justify-content-center" style="text-align: center;">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 300px; height:25px;">
        <button class="btn btn-inline my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true" title="Search"></i></button>
      </form>

      <ul class="navbar-nav ml-auto text">
        <li class="nav-text">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-text">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-text">
          <a class="nav-link" href="Contacts.php">Contacts</a>
        </li>
      </ul>

    </div>

    <div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php" title="Sign up"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php" title="Log in"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<?php else: ?>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between" style="background-color: #9c1616;">
      <a class="navbar-brand" href="index.php">EDA</a>
      <div>
        <form class="form-inline justify-content-center" style="text-align: center;">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" style="width: 300px; height:25px;">
          <button class="btn btn-inline my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true" title="Search"></i></button>
        </form>

        <ul class="navbar-nav ml-auto text">
          <li class="nav-text">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-text">
            <a class="nav-link" href="Contacts.php">Contacts</a>
          </li>
        </ul>

      </div>

      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link" href="" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php" title="Name">
                <?= $_SESSION['customer']['fname']?>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vendor/logout.php" title="Exit">
                Exit
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<?php endif;?>
</head>

<body>
<div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?=$_SESSION['customer']['lname'];?> <?=$_SESSION['customer']['fname'];?></h4><br>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i><?=$_SESSION['customer']['email'];?><br></p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About me</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    

 <?=$_SESSION['customer']['fname'];?><br>

<?=$_SESSION['customer']['lname'];?><br>

<?=$_SESSION['customer']['phone'];?><br>

<?=$_SESSION['customer']['email'];?><br>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<footer>
      <div class="grid-container" style="height:36xrem;background-image:linear-gradient(#9c1616,#813131)">

  <div class="grid-item item1">
      <p class="footer-text">For Client</p>
      <div class="container">
        <a href="#" class="footer-link">Order</a><br>
        <a href="#" class="footer-link">Shipping</a><br>
        <a href="payment_methods.php" class="footer-link">Payment Method</a>
      </div>
    </div>

  <div class="grid-item item2">
    <p>Download App</p>
    <div class="container">
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-google-play"></i><p style="padding:10px 10px">Google Play</p></button><br>
    <button type="button" name="button" class="btn btn-lg download-button"><i class="fab fa-apple"></i><p style="padding:10px 10px">App Store</p></button>
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
      <a href="https://www.facebook.com" class="footer-link">Facebook</a><br>
      <a href="https://www.instagram.com" class="footer-link">Instagram</a><br>
      <a href="https://www.whatsapp.com" class="footer-link">Whatsapp</a>
    </div>
  </div>
  <div class="grid-item item5"><i class="fab fa-cc-visa" style="padding:100px 5px 0 0"></i><i class="fab fa-cc-mastercard" style="padding:100px 0 0 5px"></i></div>
      </div>

    </footer>
</body>
</html>