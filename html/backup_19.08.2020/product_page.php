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
					<img class="img_p_page" src="img/product/product1_big.png" width="657px">
					<div class="product_photos d-flex justify-content-betwee adaptation_none">
						<img  src="img/product/product1.png" width="97px">
						<img class="ml-4" src="img/product/product1.png" width="97px">
						<img class="ml-4" src="img/product/product1.png" width="97px">
						<img class="ml-4" src="img/product/product1.png" width="97px">
						<img class="ml-4" src="img/product/product1.png" width="97px">
					</div>

					<div class="adaptation_block">
						<div class="price_productp text-center mt-4 mb-5">320₽/уп</div>
						<div class="cart_price_productp d-flex justify-content-center">
							<div class="row cart_price_productp_inp mr-5">
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

						<div class="productpage_specs m0auto row d-flex justify-content-between p-2 flex-nowrap text-nowrap" >
							<div>
								<span class="specsmover">Характеристики:</span><br>
								<span>Длина</span><br>
								<span>Ширина</span><br>
								<span>Толщина</span><br>
								<span>Форма</span><br>
								<span>Покрытие</span><br>
								<span>Кол-во в упак.</span><br>
							</div>
							<div>
								<br>
								<span>22 мм</span><br>
								<span>7 мм</span><br>
								<span>0,8 мм</span><br>
								<span>круглая</span><br>
								<span>без покрытия</span><br>
								<span>100 шт.</span><br>
							</div>
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





				<div class="sticky-block" id="stickyscheck">
					<div class="stickyfor inner" id="fixed">
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
						<div class="productpage_specs adaptation_none row d-flex justify-content-between pt-2 pr-2 pl-2 flex-nowrap text-nowrap ">				
							<div>
								<span class="specsmover">Характеристики:</span><br>
								<span>Длина</span><br>
								<span>Ширина</span><br>
								<span>Толщина</span><br>
								<span>Форма</span><br>
								<span>Покрытие</span><br>
								<span>Кол-во в упак.</span><br>
							</div>
							<div>
								<br>
								<span>22 мм</span><br>
								<span>7 мм</span><br>
								<span>0,8 мм</span><br>
								<span>круглая</span><br>
								<span>без покрытия</span><br>
								<span>100 шт.</span><br>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<script type="text/javascript">
			$(window).scroll(function() {
				var sb_m = 10; /* отступ сверху и снизу */
				var mb = 550; /* высота подвала с запасом */
				var st = $(window).scrollTop();
				var sb = $(".sticky-block");
				var sbi = $(".sticky-block .inner");
				var sb_ot = sb.offset().top;
				var sbi_ot = sbi.offset().top;
				var sb_h = sb.height();

				if(sb_h + $(document).scrollTop() + sb_m + mb < $(document).height()) {
					if(st > sb_ot) {
						var h = Math.round(st - sb_ot) + sb_m;
						sb.css({"paddingTop" : h});
					}
					else {
						sb.css({"paddingTop" : 0});
					}
				}
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
	<script src="js/main.js"></script>



</div>

</body>
</html>