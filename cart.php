<?php
session_start();

include 'categories/config.php';
include 'categories/functions.php';
include 'categories/category.php';

if ( isset($_GET['delete_id']) && isset($_SESSION['cart']) ) {
	foreach ($_SESSION['cart'] as $key => $value) {
		if ( $value['product_id'] == $_GET['delete_id'] ) {
			unset($_SESSION['cart'][$key]);
		}
	}
}


if ( isset($_GET['product_id']) && !empty($_GET['product_id']) ) {

	$current_added_product = get_product_by_id($_GET['product_id']);

	// ...
	if ( !empty($current_added_product) ) {

		if ( !isset($_SESSION['cart'])) {
			$_SESSION['cart'][] = $current_added_product;
		}


		$product_check = false;

		if ( isset($_SESSION['cart']) ) {
			foreach ($_SESSION['cart'] as $value) {
				if ( $value['product_id'] == $current_added_product['product_id'] ) {
					$product_check = true;
				}
			}
		}


		if ( !$product_check ) {
			$_SESSION['cart'][] = $current_added_product;
		}

	} else {
		header("Location: 404.php");
	}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Market</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<style media="screen">

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
.just {

    padding-top: 30px;
    text-align: center;
    padding-bottom:30px;
}
  #products {
    padding-top: 50px;
    text-align: center;
    padding-bottom:50px;
  }
  h2,h3,h1,p {
    color: white;
    font-family: 'Poppins', sans-serif;
  }
  p {
    font-size: 12px;
  }
  body{
    /*background-image:url(https://media.tenor.com/images/45c9d4c9e8d05cf1ea42e7f094e73627/tenor.gif) ;
    background-size:100%;*/
    background-color: #1a1a1a;
  }
  .scale {
    transition: 0.4s; /* Время эффекта */
   }
   .scale:hover {
    transform: scale(1.10); /* Увеличиваем масштаб */
   }
</style>
<body>
  <style>
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
          <a class="nav-link" href="index.php">Home</a>
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
            <a class="nav-link" href="index.php">Home</a>
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
  <h1 style="margin:3rem;" align="center">Cart</h1>


  <?php if ( isset($_SESSION['cart']) && count($_SESSION['cart']) !=0 ) : ?>
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col"  style="text-align:center;">Image</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col"  style="text-align:center;">Delete</th>
      </tr>
    </thead>
    <tbody>
      	<?php foreach( $_SESSION['cart'] as $product) : ?>
      <tr>
        <td  style="text-align:center;"><img src="<?=$product['image1']?>" class="photo" height="100"></td>
        <td><a href="/product.php?product_id=<?=$product['product_id']?>"><?php echo $product['product_name']; ?></a></td>
        <td><?php echo $product['product_price']; ?> ₸ </td>
        <td  style="text-align:center;"><a href="cart.php?delete_id=<?php echo $product['product_id'];?>"><i class="fas fa-trash-alt"></i></a></td>
      </tr>
    <?php endforeach; ?>
  </ul>

<?php else : ?>

  <p>
    Ваша корзина пуста
  </p>

<?php endif; ?>
    </tbody>
  </table>

  	<a href="products.php"><button class="btn" type="button" name="button" style="background-color:#9c1616; color:white; margin:1rem;">Continue shopping</button></a>

  	<a href="order.php"><button class="btn" type="button" name="button" style="background-color:#9c1616; color:white; float:right; margin:1rem;">To order</button></a></a>
</section>
<?php
include_once('sections/footer.php');
?>
</body>
<script src="javascript/jquery-1.9.0.min.js"></script>
<script src="javascript/jquery.accordion.js"></script>
<script src="javascript/jquery.cookie.js"></script>
<script>
  $(document).ready(function(){
    $(".menu").dcAccordion();
  });
</script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></html>
