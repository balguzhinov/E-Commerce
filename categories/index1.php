<?php  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>
      <?php
    include 'config.php';
    include 'functions.php';
    $categories = get_cat();
       ?>
       <a href="#"><br>Glavnaya</a>
       <div class="wrapper">
         <div class="sidebar">
           sidebar
         </div>
         <div class="Content">
           <?php print_r($categories); ?>
         </div>
       </div>
    </section>
  </body>
</html>
