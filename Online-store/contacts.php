<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="Products/pic/436974-32.png">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Contacts</title>
</head>
<body>
	
	<?php require_once "Includes/header.php"; ?>


	<form class="feedback" action="" method="post">
		<fieldset class="feedback__line">
			<legend class="feedback__line-caption">Напишите нам</legend>
				<input class="feedback__field feedback__field_name" type="text" name="name" autofocus placeholder="Введите имя" required>
				<input class="feedback__field feedback__field_email" type="email" name="email" placeholder="Введите e-mail" required>
				<input class="feedback__field feedback__field_subject" type="text" name="subject" placeholder="Введите тему" required>
				<textarea class="feedback__field feedback__field_message" rows="5" cols="40" placeholder="Поле для сообщения" required></textarea>
				<input class="feedback__field feedback__field_phone" type="tel" name="phone" placeholder="Введите номер телефона" required>
				<input class="feedback__btn feedback__btn_reset" type="reset" name="reset" value="Сбросить">
				<input class="feedback__btn feedback__btn_submit" type="submit" name="submit" value="Отправить">
		</fieldset>
	</form>

<div class="conteiner">
	<form class="aboutus" action="" method="post">
		<div class="aboutus__caption" data-name="Контактный номер телефона интернет-магазина:"></div>
		<input class="aboutus__field aboutus__field_phone" type="tel" name="phone" readonly value="+7(343)256-58-78">
		<div class="aboutus__caption"  data-name="Адрес:"></div>
		<input class="aboutus__field aboutus__field_adress" type="text" name="adress" value="г.Екатеринбург, ул.Ленина 58, оф.167" readonly>
		<iframe class="aboutus__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2182.280520170151!2d60.629352316224384!3d56.84113198085834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c16e83ccad8a35%3A0xe677352e80108954!2z0L_RgNC-0YHQvy4g0JvQtdC90LjQvdCwLCA1OCwg0JXQutCw0YLQtdGA0LjQvdCx0YPRgNCzLCDQodCy0LXRgNC00LvQvtCy0YHQutCw0Y8g0L7QsdC7LiwgNjIwMDc1!5e0!3m2!1sru!2sru!4v1492422427211" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div class="aboutus__caption"  data-name="Email:"></div>
		<input class="aboutus__field aboutus__field_email" type="email" name="e-mail" value="Tehno-market@mail.ru" readonly>
		<div class="aboutus__caption"  data-name="Юридические реквизиты:"></div>
		<textarea class="aboutus__field aboutus__field_requisites" readonly>
Общество с ограниченной ответственность
"Интернет-магазин Tehno-market"

ОГРН: 14766796326164

Юридический адрес:
620075, Свердловская обл.,
г.Екатеринбург, просп. Ленина, дом 58,
офис 167,

тел.: +7(343) 2779063
		</textarea>
	</form>
</div>

	<?php require_once "Includes/footer.php"; ?>

</body>
</html>