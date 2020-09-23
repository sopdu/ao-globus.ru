<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | thx page</title>

	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media2.css">
</head>
<body>

	<?php require_once('html/navigation_DEV.html'); ?>

	<!-- header -->
	<?php require_once('html/header.html'); ?>

	<!-- thx page -->
	<div id="adapt_none_head">
		<div class="ultralowcontainer text-center">
			<img src="img/smile.svg" class="mt-5 mb-3">
			<div class="bigthx">Спасибо за заказ</div>
			<div class="mt-4 priceofthx">Стоимость заказа</div>
			<div class="mb-2 pricethx">123 320₽</div>
			<span class="text-center dowloaderprice mr-2">Скачать в Excel</span><span><img src="img/printer.svg" alt=""></span><br>
			<span class="text-center dowloaderprice  mr-2 ml-4">Печать</span><span><img src="img/exel.svg" alt=""></span>

			<div class="your_manager w-100 text-left mt-5 mb-5">
				<div class="row">
					<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
					<div class="col-8 info">
						<div class="title mt-3 mb-3">Ваш менеджер</div>
						<div class="name mb-3">Шилова Наталья <br>Натальевна</div>
						<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
						<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div id="adapt_none_header_news">
		<?php require_once('html/footer.html') ?>
	</div>
	<script>
		document.querySelector('#openbmenu').addEventListener('click', function(){
			document.querySelector('#openbmenu').style.display = "none";
			document.querySelector('#phoneheader').style.display = "none";
			document.querySelector('#closebmenu').style.display = "block";
			document.querySelector('#headerlangs').style.display = "block";
			document.querySelector('#adaptview').style.display = "block";
			document.querySelector('#adapt_none_head').style.display = "none";
			document.querySelector('#adapt_none_header_news').style.display = "none";

		});
		document.querySelector('#closebmenu').addEventListener('click', function(){
			document.querySelector('#closebmenu').style.display = "none";
			document.querySelector('#headerlangs').style.display = "none";
			document.querySelector('#openbmenu').style.display = "block";
			document.querySelector('#phoneheader').style.display = "block";
			document.querySelector('#adaptview').style.display = "none";
			document.querySelector('#adapt_none_head').style.display = "block";
			document.querySelector('#adapt_none_header_news').style.display = "block";
		});
	</script>
	<script src="js/main.js"></script>
	<script src="js/clone.js"></script>



</div>

</body>
</html>