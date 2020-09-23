<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Main</title>

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
	<div id="adapt_none_head">
		<div class="container slider">
			<div class="bd-example mb-4">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/slider/slide1.png" class="d-block w-100" alt="...">
							<div class="carousel-caption  d-md-block">
								<div class="preview_title">Гладкие скрепки канцелярские</div>
								<div class="preview_text">Скрепки и кнопки нужны в любом офисе, доме и школе, наши изделия удовлетворят запросы.</div>
								<a href="#"><div class="preview_btn">Подробнее</div></a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slider/slide1.png" class="d-block w-100" alt="...">
							<div class="carousel-caption  d-md-block">
								<div class="preview_title">Гладкие скрепки канцелярские</div>
								<div class="preview_text">Скрепки и кнопки нужны в любом офисе, доме и школе, наши изделия удовлетворят запросы.</div>
								<a href="#"><div class="preview_btn">Подробнее</div></a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="img/slider/slide1.png" class="d-block w-100" alt="...">
							<div class="carousel-caption  d-md-block">
								<div class="preview_title">Гладкие скрепки канцелярские</div>
								<div class="preview_text">Скрепки и кнопки нужны в любом офисе, доме и школе, наши изделия удовлетворят запросы.</div>
								<a href="#"><div class="preview_btn">Подробнее</div></a>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- previewbox -->
			<div class="container d-flex justify-content-between p-0 adaptation_block">
				<div class="previewbox">
					<div class="previewbox_inside">
						<div class="previewbox_title w-75 mb-4">Гладкие скрепки канцелярские</div>
						<div class="previewbox_btnn d-flex align-items-center">Подробнее</div>
					</div>
				</div>
				<div class="previewbox">
					<div class="previewbox_inside">
						<div class="previewbox_title w-75 mb-4">Гладкие скрепки канцелярские</div>
						<div class="previewbox_btnn d-flex align-items-center">Подробнее</div>
					</div>
				</div>
			</div>


			<!-- catalog -->
			<div class="container">
				<div class="d-flex justify-content-between">
					<div class="line"></div>
					<span class="preview_title_box text-body mt60 book mb-5">Каталог</span>
					<div class="line"></div>
				</div>
				<div class="row db_adapt">
					<div class="catalogbox col">
						<img src="img/catalog/catalog_img1.png">
						<div class="catalogboxtitle">Чертежные принадлежности</div>
					</div>
					<div class="catalogbox col">
						<img src="img/catalog/catalog_img2.png">
						<div class="catalogboxtitle">Офисные принадлежности</div>
					</div>
				</div>
				<div class="row db_adapt">
					<div class="catalogbox col">
						<img src="img/catalog/catalog_img3.png">
						<div class="catalogboxtitle">Школные принадлежности</div>
					</div>
					<div class="catalogbox col">
						<img src="img/catalog/catalog_img4.png">
						<div class="catalogboxtitle">Товары для творчества</div>
					</div>
				</div>
			</div>

			<!-- similar products -->
			<div class="container">
				<div class="d-flex justify-content-between">
					<div class="line smallline"></div>
					<span class="preview_title_box text-body mt60 book mb-5;" style="white-space:nowrap; margin-bottom: 30px;">Похожие товары</span>
					<div class="line smallline"></div>
				</div>


				<div class="stringsimprod row">
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
				</div>
				<div class="stringsimprod row">
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
					<?php require ('html/product.html') ?>
				</div>			
			</div>
		</div>
	</div>
	<div id="adapt_none_header_news">
		<!-- news -->	
		<div class="container news_line_wrapper d-flex justify-content-between">
			<div class="line"></div>
			<span class="preview_title_box text-body mt60 book mb-5">Новости</span>
			<div class="line"></div>
		</div>
		<div class="container">
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
		<div class="line w-100"></div>

		<!-- about company -->
		<div class="container">
			<div class="row">
				<div class="aboutcomp_l col-sm-10">
					<span class="about_title mt60">О компании</span>
					<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
					<p>Качество изготовления инструментов, выбор используемых материалов обеспечивают их длительную эксплуатацию, удобство в работе и экологическую безопасность. Наряду с постоянным расширением ассортимента и функциональных назначений чертежных наборов, большое внимание уделяется освоению производства новых видов канцелярских товаров, находящих успех у покупателей.</p>
				</div>
				<div class="aboutcomp_r col-sm-2 adaptation_none">
					<img src="img/madeinr.svg" alt="">
				</div>
			</div>
		</div>

		<!-- footer -->
		<?php require_once ('html/footer.html') ?>
	</div>
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



</div>

</body>
</html>