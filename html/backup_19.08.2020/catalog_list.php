<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Catalog</title>

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

	<!-- CATALOG list PAGE -->

	<div class="container" id="adapt_none_head">
		

		<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
			<span class="adaptation_cont"><</span>
			<span class="adaptation_cont">Главная</span>
			<span class="adaptation_cont_forfull">Главная</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">Офисные пренодлежности</span>
		</div>

		<div class="d-flex justify-content-between">
			<div class="about_title text-body mt-3">Офисные пренодлежности</div>
			<div class="d-flex justify-content-between">
				<img class="mr-2" src="img/list_active.svg" alt="">
				<img src="img/grid.svg" alt="">
			</div>
		</div>

		<div class="d-flex justify-content-between">
			<div class="product_filters adaptation_none">
				<div class="product_filters_parameters mb-4"></div>
				<div class="product_filters_categories"></div>
			</div>

			<div class="product_list_list ml-3">

				<div class="prod_item_list row">
					<img class="mr-3 mt-2" src="img/product/product1.png" width="77px" height="77px">
					<div class="col-4 nameandstatus">
						<div class="simprod_item_status d-flex justify-content-betwee p-0 m-0 mt-2 mb-1">
							<div class="simprod_item_hit ">Хит</div>
							<div class="simprod_item_new ">Новинка</div>
						</div>
						<div class="prod_item_list_name">Скрепки канцелярские гладкие <br>22 мм. по 100 шт.</div>
					</div>
					<div class="col simprod_item_price text-center mt-4">320₽/ед.</div>

					<div class="col cart_inner mt-4">
						<div class="cart m-0 d-flex justify-content-between">
							<div class="subtract">
								-
							</div>
							<div class="amount">
								1
							</div>
							<div class="add">
								+
							</div>
							<div class="to-cart">
								В корзину
							</div>
						</div>
					</div>
				</div>

				<script src="js/clone.js"></script>

				<div class="page_picker d-flex justify-content-between">
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

				<span class="about_title mt60">Большоай выбор офисных принадлежностей</span>
				<p>Более 50 лет Открытое Акционерное Общество «ГЛОБУС » является традиционным производителем и поставщиком широкого ассортимента канцелярских товаров и в первую очередь чертежных инструментов школьного и технического назначения: от самых простых до самых сложных.</p>
				<p>Качество изготовления инструментов, выбор используемых материалов обеспечивают их длительную эксплуатацию, удобство в работе и экологическую безопасность. Наряду с постоянным расширением ассортимента и функциональных назначений чертежных наборов, большое внимание уделяется освоению производства новых видов канцелярских товаров, находящих успех у покупателей.</p>
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



</div>

</body>
</html>