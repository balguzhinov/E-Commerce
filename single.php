<?php
session_start();

include 'categories/config.php';
include 'categories/functions.php';
include 'categories/category.php';
if (isset($_SESSION['cart'])) {
	echo "(" . count($_SESSION['cart']) . ")";
}

$product_id= $_GET['product_id'];
if (!is_numeric($product_id)){
  exit();
}
$current_product=get_product_by_id($product_id);

	if (empty($current_product)) {
		header("Location: 404.php");
	}
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="index.php">Главная</a>

	<h1>
		<?php echo $current_product['product_name']?>
	</h1>

	<p>
		<?php echo $current_product['decsription']?>
	</p>

	<p><strong>
		<?php echo $current_product['product_price']?> tg
	</strong></p>
	<br>
	<a href="cart1.php?product_id=<?php echo $current_product['product_id']?>">Добавить в корзину</a>


</body>
</html>
