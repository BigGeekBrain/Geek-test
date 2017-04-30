<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="Products/pic/436974-32.png">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Catalog</title>
</head>
<body>
	
	<?php require_once "Includes/header.php"; ?>
	
	<div class="catalog">
		<ul class="catalog__product">
			<li class="catalog__product-item"><a class="catalog__product-link" href="Products/Product1.php" target="_blank" title="Robot"><img class="catalog__product-pic" src="Products/pic/Robot.png" alt="Robot" width="162" height="119"></a></li>
			<li class="catalog__product-item"><a class="catalog__product-link" href="Products/Product2.php" target="_blank" title="Fridge"><img class="catalog__product-pic" src="Products/pic/Fridge.png" alt="Fridge" width="61" height="119"></a></li>
			<li class="catalog__product-item"><a class="catalog__product-link" href="Products/Product3.php" target="_blank" title="teaPot"><img class="catalog__product-pic" src="Products/pic/teaPot.png" alt="teaPot" width="88" height="119"></a></li>
		</ul>
	</div>
	
	<?php require_once "Includes/footer.php"; ?>

</body>
</html>