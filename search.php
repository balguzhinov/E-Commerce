<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search: <?php echo $_GET['search']; ?></title>
  </head>
  <body>
    <?php
    include_once('sections/header.php');
    ?>
<?php
$connect = mysqli_connect('localhost','root','root','online_market');

if (!$connect){
  die('Error connect');
}
$search_get= $_GET['search'];
$sql= "SELECT * FROM `product` WHERE `product_name` LIKE '%$search_get%'";
$select = mysqli_query($connect,$sql);?>

<section  id="products">
  <div class="row">
<?php
while ($select_while = mysqli_fetch_assoc($select)){
  ?><br>
  <a href="/product.php?product_id=<?=$select_while['product_id']?>">
  <div class="feature-box col-lg-2 scale">
    <img src="<?=$select_while['image1']?>" class="photo" height="150">
    <h3><?=$select_while['product_price']?> ₸</h3>
    <p><?=$select_while['product_name']?></p>
    </a>
  </div>
  <?php
} ?>
</div >
</section>

  <?php
  include_once('sections/footer.php');
  ?>
  </body>
</html>
