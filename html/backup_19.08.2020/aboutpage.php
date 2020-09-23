<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | About page</title>

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

	<!-- about page -->

	<div class="lowcontainer" id="adapt_none_head">
		<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
			<span class="adaptation_cont"><</span>
			<span class="adaptation_cont">Главная</span>
			<span class="adaptation_cont_forfull">Главная</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">О компании</span>
		</div>

		<div class="about_title text-body mb-4 mt-3 mb-1">О компании</div>
		<img src="img/about.png" class="w-100">
		<div class="aboutpage">
			<p class="mt-4"><span>Более 50 лет Акционерное общество "ГЛОБУС"</span> является традиционным производителем канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения.</p>
			<p>За эти года предприятие стало одним из крупнейших предприятий по производству чертежных принадлежностей.</p>
			<p>"ГЛОБУС" сегодня - современное многопрофильное предприятие полного цикла, имеющее широкий диапазон технологического оборудования, что позволяет производить самые разнообразные канцелярские товары.</p>
			<span>В настоящее время предприятие включает в себя следующие виды производств:</span>
			<ul>
				<li>• Производство циркулей и чертежных принадлежностей</li>
				<li>• Производство канцелярских скрепок, кнопок, скоб для степлера</li>
				<li>• Производство клея карандаша</li>
				<li>• Производство пластилина</li>
				<li>• Производство изделий из PVC ( школьные обложки, чехлы и прочее)</li>
				<li>• Производство товаров для школы ( школьные подставки для книг, точилки, счетные палочки, веера)</li>
				<li>• Производство товаров для офиса ( шило, подставка под календарь )</li>
			</ul>
		</div>
		<div class="contpage_order mt-5 mb-5">
			<div class="cont_title text-center">Оставить заявку</div>
			<div class="d-flex justify-content-between adaptation_block">
				<div>
					<input class="mt-2" type="email" id="email" placeholder="E-mail"><br>
					<input class="mt-4" type="email" id="email" placeholder="Имя">
				</div>
				<input class="mt-2" type="messege" id="messege_c" placeholder="Сообщение">
			</div>
			<button class="mt-4" type="signin">Отправить</button>
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