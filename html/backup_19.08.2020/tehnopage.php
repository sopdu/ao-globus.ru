<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Tehno page</title>

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

	<!-- news page -->
	<div id="adapt_none_head">
		<div class="container">
			<div class="l_tegs mt-2 mb-4">
				<span><a href="index.html">Главная</a></span>
				<span class="ml-1 mr-1">></span>
				<span><a href="#">Технологии</a></span>
			</div>
			<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
				<span class="adaptation_cont"><</span>
				<span class="adaptation_cont">Главная</span>
				<span class="adaptation_cont_forfull">Главная</span>
				<span class="adaptation_cont_forfull">></span>
				<span class="adaptation_cont_forfull">Технологии</span>

			</div>
			<div class="about_title text-body mt-3 mb-4">Технологии</div>

			<div class="row news_wrapper news_wrapper_newspage">
				<div class="news_item col-3">
					<img src="img/tehno/image 1.png">
					<div class="news_title">Сварка токами высокой<br>частоты.</div>
					<div class="news_date">12.05.2020</div>
				</div>
				<div class="news_item col-3">
					<img src="img/tehno/image 2.png">
					<div class="news_title">Вакуумная формовка<br>изделий.</div>
					<div class="news_date">12.05.2020</div>
				</div>
				<div class="news_item col-3">
					<img src="img/tehno/image 3.png">
					<div class="news_title">Изготовление вкладышей<br>наборов готовален</div>
					<div class="news_date">12.05.2020</div>
				</div>
				<div class="news_item col-3">
					<img src="img/tehno/image 4.png">
					<div class="news_title">Производство скоб для<br>степлера.</div>
					<div class="news_date">12.05.2020</div>
				</div>
			</div>
			<div class="page_picker mt-5 mb-5 d-flex justify-content-between">
				<a href="#"><div class="pagepicker_btn pagepicker_btn_active">1</div></a>
				<a href="#"><div class="pagepicker_btn">2</div></a>
				<a href="#"><div class="pagepicker_btn">3</div></a>
				<div class="d-flex justify-content-between pplns_d">
					<div class="pp_lns"></div>
					<div class="pp_lns"></div>
					<div class="pp_lns"></div>
				</div>
				<a href="#"><div class="pagepicker_btn pagepicker_btn_lastpage">17</div></a>
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