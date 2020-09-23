<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Product page</title>

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
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media2.css">
</head>
<body>

	<?php require_once('html/navigation_DEV.html'); ?> 

	<!-- header -->
	<?php require_once('html/header.html'); ?>
	<div id="adapt_none_head">
		<div class="container">	
			<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
				<span class="adaptation_cont"><</span>
				<span class="adaptation_cont">Главная</span>
				<span class="adaptation_cont_forfull">Главная</span>
				<span class="adaptation_cont_forfull">></span>
				<span class="adaptation_cont_forfull">Чертежные принадлежности</span>
				<span class="adaptation_cont_forfull">></span>
				<span class="adaptation_cont_forfull">Скрепки канцелярские гладкие 22 мм. по 100 шт.</span>
			</div>
			<div class="about_title text-body mt-3 mb-3">Скрепки канцелярские гладкие 22 мм. по 100 шт</div>
			<div class="d-flex justify-content-between">
				<div class="productpage_preview">
					<div class="simprod_item_status d-flex justify-content-betwee">
						<div class="simprod_item_hit ">Хит</div>
						<div class="simprod_item_new ">Новинка</div>
					</div>
					<div class="slider-wrapper">
						<div class="slider-for">
							<div><img src="img/product/product1.png"></div>
							<div><img src="img/product/product1.png"></div>
							<div><img src="img/product/product1.png"></div>
							<div><img src="img/product/product1.png"></div>
							<div><img src="img/product/product1.png"></div>
							
						</div>
						<div class="slider-nav">	
							<div><img class="w-75" src="img/product/product1.png"></div>
							<div><img class="w-75" src="img/product/product1.png"></div>
							<div><img class="w-75" src="img/product/product1.png"></div>
							<div><img class="w-75" src="img/product/product1.png"></div>
							<div><img class="w-75" src="img/product/product1.png"></div>
						</div>
					</div>

					

					<div id="description_description">
						<div class="descript_picker d-flex justify-content-betwee mt60 mb-4">
							<a><div id="p_descr" class="descript_picker_description_title text-center active_product">Описание</div></a>
							<a  id="p_video"><div class="descript_picker_video pl-4">Видео</div></a>
						</div>
						<div class="descript_picker_description" style="animation: simprod_item_anim 0.6s;">
							<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
							<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных. Более </p>
							<p>50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
						</div>
						<div class="descript_picker_video_con" style="display: none; animation: simprod_item_anim 0.6s;">
							<iframe width="100%" height="424" src="https://www.youtube-nocookie.com/embed/hn9jzDvM9nk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>

					<script>
						document.querySelector('#p_descr').addEventListener('click', function(){
							document.querySelector('.descript_picker_description').style.display = "block";
							document.querySelector('.descript_picker_video_con').style.display = "none";
						});

						document.querySelector('#p_video').addEventListener('click', function(){
							document.querySelector('.descript_picker_description').style.display = "none";
							document.querySelector('.descript_picker_video_con').style.display = "block";
						});
						document.getElementById('p_video').onclick = function() {
							document.getElementById('p_video').classList.add('active_product');
							document.getElementById('p_descr').classList.remove('active_product');
						}
						document.getElementById('p_descr').onclick = function() {
							document.getElementById('p_descr').classList.add('active_product');
							document.getElementById('p_video').classList.remove('active_product');
						}

					</script>




				</div>





				<div class="">
					<div class="stickyfor" id="fixed">
						<div class="price_productp mb-4 adaptation_none">320₽/уп</div>
						<div class="cart_price_productp d-flex justify-content-center adaptation_none">
							<div class="row cart_price_productp_inp mr-3">
								<div class="col-4 price_productp_subtract">
									-
								</div>
								<div class="col-4 price_productp_amount">
									1
								</div>
								<div class="col-4 price_productp_add">
									+
								</div>
							</div>

							<div class="price_productp_to_cart">
								В корзину
							</div>
						</div>
						<div class="productpage_specs adaptation_none row d-flex justify-content-between p-2 flex-nowrap text-nowrap ">				
							<div class="w-100">
                                <span class="specsmover">Характеристики:</span><br>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Длина</div><div>22 мм</div>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Ширина</div><div>7 мм</div>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Толщина</div><div>0,8 мм</div>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Форма</div><div>круглая</div>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Покрытие</div><div>без покрытия</div>
                                </div>
                                <div class="d-flex justify-content-between w-100">
                                    <div>Кол-во в упак.</div><div>100 шт.</div>
                                </div>
                            </div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function () {
				var offset = $('#fixed').offset();
				var topPadding = 0;
				$(window).scroll(function() {
					if ($(window).scrollTop() > offset.top) {
						$('#fixed').stop().animate({marginTop: 890});
					}
					else {
						$('#fixed').stop().animate({marginTop: 0});
					}
				});
			});
		</script>

		<!-- same prod -->

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



	<!-- catalog -->
	<div class="container" id="cataldelete">
		<div class="d-flex justify-content-between">
			<div class="line"></div>
			<span class="preview_title_box text-body mt60 mb-5">Каталог</span>
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
			document.querySelector('#cataldelete').style.display = "none";
		});
		document.querySelector('#closebmenu').addEventListener('click', function(){
			document.querySelector('#closebmenu').style.display = "none";
			document.querySelector('#headerlangs').style.display = "none";
			document.querySelector('#openbmenu').style.display = "block";
			document.querySelector('#phoneheader').style.display = "block";
			document.querySelector('#adaptview').style.display = "none";
			document.querySelector('#adapt_none_head').style.display = "block";
			document.querySelector('#adapt_none_header_news').style.display = "block";
			document.querySelector('#cataldelete').style.display = "block";
		});
	</script>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script src="js/main.js"></script>


	<script>
		$('.slider-for').slick({
			slidesToShow: 10,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: false,
			centerMode: true,
			focusOnSelect: true
		});
	</script>

</div>

</body>
</html>