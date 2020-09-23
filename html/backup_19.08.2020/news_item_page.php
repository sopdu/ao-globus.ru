<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | News item page</title>

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
	<!-- preview container with slider -->

	<!-- news item page -->
<div id="adapt_none_head">
	<div class="lowcontainer newsitem_p">
		<div class="l_tegs mt-2 mb-4">
			<span><a href="index.html">Главная</a></span>
			<span class="ml-1 mr-1">></span>
			<span><a href="#"></a></span>
			<span class="ml-1 mr-1">></span>
			<span><a href="#"></a></span>
		</div>

		<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
			<span class="adaptation_cont"><</span>
			<span class="adaptation_cont">Главная</span>
			<span class="adaptation_cont_forfull">Главная</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">Новости</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">Новинка производства Доска для лепки</span>
		</div>

		<div class="about_title text-body mt-3 mb-1">Новинка производства Доска для лепки</div>
		<div class="news_date text-left mb-2">12.05.2020</div>
		<div class="d-flex justify-content-between mb-4 img_newsitem">
			<img src="img/news_preview.png">
			<img src="img/news_preview.png">
		</div>

		<p>Равным образом укрепление и развитие структуры способствует подготовки и реализации форм развития. Повседневная практика показывает, что консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании модели развития. Не следует, однако забывать, что начало повседневной работы по формированию позиции играет важную роль в формировании соответствующий условий активизации. Таким образом укрепление и развитие структуры требуют от нас анализа соответствующий условий активизации. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Не следует, однако забывать, что постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации существенных финансовых и административных условий.</p>
		<p>Товарищи! начало повседневной работы по формированию позиции в значительной степени обуславливает создание дальнейших направлений развития. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров требуют от нас анализа новых предложений. Таким образом новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Товарищи! постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки форм развития. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий.</p>
		<p>Задача организации, в особенности же реализация намеченных плановых заданий позволяет выполнять важные задания по разработке модели развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке дальнейших направлений развития. Разнообразный и богатый опыт сложившаяся структура организации в значительной степени обуславливает создание форм развития.</p>
	</div>
	<div class="container news_line_wrapper d-flex justify-content-between">
		<div class="line"></div>
		<span class="preview_title_box stylemorenews text-body mt60 book">Ещё новости</span>
		<div class="line"></div>
	</div>

	<div class="container  ">
		<div class="row news_wrapper">
			<div class="news_item col-3">
				<img src="img/news/news1.png">
				<div class="news_title">Новинка производства <br>Цветные стикеры</div>
				<div class="news_date">12.05.2020</div>
			</div>
			<div class="news_item col-3">
				<img src="img/news/news2.png">
				<div class="news_title">Новинка производства <br>Цветные стикеры</div>
				<div class="news_date">12.05.2020</div>
			</div>
			<div class="news_item col-3">
				<img src="img/news/news1.png">
				<div class="news_title">Новинка производства <br>Цветные стикеры</div>
				<div class="news_date">12.05.2020</div>
			</div>
			<div class="news_item col-3">
				<img src="img/news/news2.png">
				<div class="news_title">Новинка производства <br>Цветные стикеры</div>
				<div class="news_date">12.05.2020</div>
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