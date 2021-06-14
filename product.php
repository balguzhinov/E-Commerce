<?php
session_start();
include 'categories/config.php';
include 'categories/functions.php';
include 'categories/category.php';
$product_id= $_GET['product_id'];
if (!is_numeric($product_id)){
  exit();
}

$product=get_product_by_id($product_id);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?=$product['product_name'] ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style media="screen">
  #products {
    padding-top: 50px;
    text-align: center;
    padding-bottom: 50px;
  }

  h3{font-family: 'Poppins', sans-serif;
    color: black;
  }
  h1,
  p {font-family: 'Poppins', sans-serif;
    color: white;
  }

  p {
    font-size: 12px;
  }

  body {
    /*background-image:url(https://media.tenor.com/images/45c9d4c9e8d05cf1ea42e7f094e73627/tenor.gif) ;
    background-size:100%;*/
    font-family: 'Poppins', sans-serif;
    background-color: #1a1a1a;
  }

  .body-container{
    padding:3rem;
    margin-top: 2rem;
  }
  .scale {
    transition: 0.4s;
    /* Время эффекта */
  }

  .scale:hover {
    transform: scale(1.15);
    /* Увеличиваем масштаб */
  }

  .carousel-item {
    height: 24rem;
    background-color: #1a1a1a;
    color: #fff;
  }

  .line{
    background-color:white;
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
.row {
  margin-top: 6rem;
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
  .Productname-pos{
    color:#1a1a1a;


  }
  .price-pos1{
    color:#1a1a1a;
    margin: 2rem;
    position: relative;
    left:34rem; top:1rem;
  }
  .price-pos2{
    color:#1a1a1a;
    position: relative;
    left:27rem; bottom:6rem;
  }

.buybutton {
  margin-left: 40rem;
}
  }
  .addToCar-num{
    color:#1a1a1a;

  }
  .addToCar-buy{
    color:#fff;
    background-color:#9c1616;
    position: relative;
    left:9rem;
    margin-top: 2rem;
    margin-bottom: 10rem;
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
  .navbar{
  font-family: 'Poppins', sans-serif;
    border-radius:0px 0px 20px 20px;
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
    transition: 0.5s;
  }

  .fa:hover {
    color: black;
    transform: scale(1.17);
  }

  .text {
    margin-right: 20px;
  }
  .body-container{
    border-radius: 25px;
  }
</style>

<body>

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-text">
            <a class="nav-link active" href="products.php">Products</a>
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
              <a class="nav-link" href="cart.php" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php
              if (isset($_SESSION['cart'])) {
              	echo "(" . count($_SESSION['cart']) . ")";
              } ?></a>
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
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-text">
              <a class="nav-link active" href="products.php">Products</a>
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
                <a class="nav-link" href="cart.php" title="Shopping cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php
                if (isset($_SESSION['cart'])) {
                	echo "(" . count($_SESSION['cart']) . ")";
                } ?></a>
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

  <section>
    <div class="container body-container" style="background-color:#fff">
    <h1 class="Productname-pos"><?=$product['product_name'] ?></h1>
    <h2 class="price-pos1"><?=$product['product_price'] ?> ₸</h2>

    <a href="cart.php?product_id=<?php echo $product['product_id']?>"><button class="btn addToCar-buy btn-lg" type="button" name="button"><i class="fas fa-cart-plus"></i> Add to cart</button></a>
    <img src="<?=$product['image1'] ?>" alt="hoodie" style="height:25rem; margin:1rem;" align="left">
    <p style="color:#1a1a1a ;font-size:1rem" style="position:relative;" align="left">
      <?=$product['description'] ?>
    </p>


    <h3 class="row" style="padding-top:1rem;">You can also look at: <br><br></h3>
    <?php
    $connect = mysqli_connect('localhost','root','root','online_market');

    if (!$connect){
      die('Error connect');
    }
    $search_get= $product['parent'];
    $sql= "SELECT * FROM `product` WHERE `parent` LIKE '%$search_get%'";
    $select = mysqli_query($connect,$sql);?>
    <section  id="products">
      <div class="row" >
    <?php
    while ($select_while = mysqli_fetch_assoc($select)){
      ?><br>
      <a href="/product.php?product_id=<?=$select_while['product_id']?>">
      <div class="feature-box col-lg-2 scale">
        <img src="<?=$select_while['image1']?>" class="photo" height="150">
        <h3><?=$select_while['product_price']?> ₸</h3>
        <p style="color:black;"><?=$select_while['product_name']?></p>
        </a>
      </div>
      <?php
    } ?>

    </div >
    </section>

    </div>
  </section>

  <section id="products">

  </section>

  <footer>
    <div class="grid-container" style="height:35rem;background-image:linear-gradient(#9c1616,#813131)">

      <div class="grid-item item1">
        <p class="footer-text">For Client</p>
        <div class="container">
          <a href="#" class="footer-link">Order</a><br>
          <a href="#" class="footer-link">Shipping</a><br>
          <a href="#" class="footer-link">Payment Method</a>
        </div>
      </div>

      <div class="grid-item item2">
        <h4>Download App</h4>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="index.js" charset="utf-8"></script>
</body>

</html>
