<?php
session_start();

include 'categories/config.php';
include 'categories/functions.php';
include 'categories/category.php';

if ( isset($_GET['delete_id']) && isset($_SESSION['cart']) ) {
	foreach ($_SESSION['cart'] as $key => $value) {
		if ( $value['id'] == $_GET['delete_id'] ) {
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

// var_dump($_SESSION);




?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="index.php">На главную</a>

	<h1>Корзина</h1>

	<?php if ( isset($_SESSION['cart']) && count($_SESSION['cart']) !=0 ) : ?>

		<ul>
			<?php foreach( $_SESSION['cart'] as $product) : ?>

				<li>
					<?php echo $product['product_name']; ?> |
					<?php echo $product['product_price']; ?> tg |
					<a href="cart1.php?delete_id=<?php echo $product['product_id'];?>">Х</a>
				</li>

			<?php endforeach; ?>
		</ul>

	<?php else : ?>

		<p>
			Ваша корзина пуста
		</p>

	<?php endif; ?>


	<a href="index.php">Продолжить покупки</a>
	<br>
	<a href="order.php">Оформить заказ</a>

</body>
</html>
