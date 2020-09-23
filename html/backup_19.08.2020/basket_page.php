<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Basket page</title>

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

	<!-- basket -->

	<div class="container" id="adapt_none_head">
		
		<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
			<span class="adaptation_cont"><</span>
			<span class="adaptation_cont">Главная</span>
			<span class="adaptation_cont_forfull">Главная</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">Корзина</span>
		</div>
		<div class="row">
			<div class="col-9 colfix">
				<div class="about_title text-body mb-4">Корзина</div>
				<div class="basket_container_title mb-3">Скрепки</div>
				<div class="basket_container">
					<div class="basket_item row">
						<div class="col-6 basket_item_name">Скрепки канцелярские гладкие 22 мм. по 100 шт.</div>
						<div class="col-2 basket_item_price">320₽/ед</div>
						<div class="col-4 adaptation_flex d-flex justify-content-around">	
							<div class="basket_item_cart colfix50">
								<span>-</span>
								<span>100</span>
								<span>+</span>
							</div>
							<div class="basket_item_delete"><img src="img/delete.svg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="basket_container_title mt-4 mb-3">Скрепки необычные</div>
				<div class="basket_container">
					<div class="basket_item row">
						<div class="col-6 basket_item_name">Скрепки канцелярские гладкие 22 мм. по 100 шт.</div>
						<div class="col-2 basket_item_price">320₽/ед</div>
						<div class="col-4 adaptation_flex d-flex justify-content-around">	
							<div class="basket_item_cart colfix50">
								<span>-</span>
								<span>100</span>
								<span>+</span>
							</div>
							<div class="basket_item_delete"><img src="img/delete.svg" alt=""></div>
						</div>
					</div>
				</div>
				
				<div class="basket_order row mt-4 mb-5 w-100 ml-0">
					<div class="col ml-4 basket_order_btn">Оформить заказ</div>
					<div class="col text-center basket_order_cost ml-5">Стоимость</div>
					<div class="col text-center basket_order_price">123 320₽</div>
					<div class="col dwnld_prnt">
						<span class="text-center mr-2">Скачать в Excel</span><span><img src="img/exel.svg" alt=""></span><br>
						<span class="text-center mr-2 ml-4">Печать</span><span><img src="img/printer.svg" alt=""></span>
					</div>
				</div>

				<div class="basket_order_a m0auto container mt-3 mb-4 p-4 adaptation_block">
					<div class="d-flex justify-content-center">
						<div class="mr-5">
							<span>Стоимость</span><br>
							<span>Вес</span><br>
							<span>Объем</span>
						</div>

						<div>
							<span class="basket_order_a_price">123 320₽</span><br>
							<span class="float-right">35.5кг</span><br>
							<span class="float-right mt-3">1.5м2</span>
						</div>
					</div>
					<div class="m0auto text-center mt-4 w-100 basket_order_btn_a">Оформить заказ</div>

					<div class="text-center mt-2 dwnld_after">Скачать в Excel</div>
					<div class="text-center print_after">Печать</div>
				</div>

				<!-- <div class="your_manager w-100 mr-5 mb-4">
					<div class="row">
						<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
						<div class="col-8 info">
							<div class="title mt-3 mb-3">Ваш менеджер</div>
							<div class="name mb-3">Шилова Наталья Натальевна</div>
							<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
							<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
						</div>
					</div>
				</div> -->

			</div>




			<div class="col-3 adaptation_none sticky-block" id="fixed">
				<div class="result_r pl-3 pr-3 inner">
					<div class="row">
						<div class="col mt-4 mb-2">Стоимость</div>
						<div class="col mt-4 mb-2 text-right price_col">123 320₽</div>
					</div>
					<div class="row">
						<div class="col mb-3">Вес</div>
						<div class="col mb-3"><span class="text-right w-75">35.5кг</span></div>
					</div>
					<div class="row">
						<div class="col mb-2">Объем</div>
						<div class="col mb-2"><span class="text-right w-75">1.5м2</span></div>
					</div>
					<div class="col text-center pl-5 mt-4 mb-2 basket_order_btn">Оформить заказ</div>
					<span class="text-center dwnld_res">Скачать в Excel</span><span class="ml-2"><img src="img/exel.svg">
					</span><br>
					<span class="text-center dwnld_resplus">Печать</span><span class="ml-2"><img src="img/printer.svg">
					</span>
				</div>
				<div class="your_manager mt-4">
					<div class="row">
						<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
						<div class="col-8 info">
							<div class="title mt-3 mb-3">Ваш менеджер</div>
							<div class="name mb-3">Шилова Наталья Натальевна</div>
							<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
							<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<script type="text/javascript">
		$(window).scroll(function() {
			var sb_m = -11; /* отступ сверху и снизу */
			var mb = 250; /* высота подвала с запасом */
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