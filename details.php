<?php
session_start();
include 'categories/config.php';
include 'categories/functions.php';
include 'categories/category.php';
$product_id= $_GET['product_id'];
$parent= $_GET['parent'];
if (!is_numeric($product_id)){
  exit();
}

$product=get_product_by_id($product_id);
$related=get_related_products($parent);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$product['product_name'] ?></title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
<script src="https://kit.fontawesome.com/c98d165499.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <?php
  include_once('sections/header.php');
  ?>
           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                   <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
                                   <li data-target="#myCarousel" data-slide-to="1"></li>
                                   <li data-target="#myCarousel" data-slide-to="2"></li>
                               </ol><!-- carousel-indicators Finish -->

                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="<?=$product['image1'] ?>" alt="Product 3-a"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="<?=$product['image2'] ?>" alt="Product 3-b"></center>
                                   </div>
                                   <div class="item">
                                       <center><img class="img-responsive" src="<?=$product['image3'] ?>" alt="Product 3-c"></center>
                                   </div>
                               </div>

                               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- left carousel-control Finish -->

                               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel-control Begin -->
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Previous</span>
                               </a><!-- right carousel-control Finish -->

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->
                   </div><!-- col-sm-6 Finish -->

                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div class="box"><!-- box Begin -->
                           <h1 class="text-center"><?=$product['product_name'] ?></h1>

                           <form action="details.php" class="form-horizontal" method="post"><!-- form-horizontal Begin -->
                               <div class="form-group"><!-- form-group Begin -->
                                   <label for="" class="col-md-5 control-label">Products Quantity</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->

                                    </div><!-- col-md-7 Finish -->

                               </div><!-- form-group Finish -->

                               <div class="form-group"><!-- form-group Begin -->
                                   <label class="col-md-5 control-label">Product Size</label>

                                   <div class="col-md-7"><!-- col-md-7 Begin -->

                                       <select name="product_size" class="form-control"><!-- form-control Begin -->

                                           <option>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>

                                       </select><!-- form-control Finish -->

                                   </div><!-- col-md-7 Finish -->
                               </div><!-- form-group Finish -->

                               <p class="price"><?=$product['product_price'] ?> ₸</p>

                               <p class="text-center buttons"><button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to cart</button></p>

                           </form><!-- form-horizontal Finish -->

                       </div><!-- box Finish -->

                       <div class="row" id="thumbs"><!-- row Begin -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="0"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="<?=$product['image1'] ?>" alt="product 1" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="1"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="<?=$product['image2'] ?>" alt="product 2" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                           <div class="col-xs-4"><!-- col-xs-4 Begin -->
                               <a data-target="#myCarousel" data-slide-to="2"  href="#" class="thumb"><!-- thumb Begin -->
                                   <img src="<?=$product['image3'] ?>" alt="product 4" class="img-responsive">
                               </a><!-- thumb Finish -->
                           </div><!-- col-xs-4 Finish -->

                       </div><!-- row Finish -->

                   </div><!-- col-sm-6 Finish -->


               </div><!-- row Finish -->

               <div class="box" id="details"><!-- box Begin -->

                       <?=$product['description'] ?>

                       <hr>

               </div><!-- box Finish -->
               <h1>Products You Maybe Like:</h1>
               <?php
               $connect = mysqli_connect('localhost','root','root','online_market');

               if (!$connect){
                 die('Error connect');
               }
               $search_get= $product['parent'];
               $sql= "SELECT * FROM `product` WHERE `parent` LIKE '%$search_get%'";
               $select = mysqli_query($connect,$sql);?>

               <section  id="products">
                 <div class="row">
               <?php
               while ($select_while = mysqli_fetch_assoc($select)){
                 ?><br>
                 <a href="/details.php?product_id=<?=$select_while['product_id']?>">
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


    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>
