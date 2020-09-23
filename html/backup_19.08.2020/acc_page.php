<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Acc page</title>

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
	

	<?php require_once('html/navigation_DEV.html') ?>
	<!-- header -->
	<?php require_once('html/header.html'); ?>
	

	<!-- acc page -->

	<div class="container accpage" id="adapt_none_head">
		
		<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
			<span class="adaptation_cont"><</span>
			<span class="adaptation_cont">Главная</span>
			<span class="adaptation_cont_forfull">Главная</span>
			<span class="adaptation_cont_forfull">></span>
			<span class="adaptation_cont_forfull">Личный кабинет</span>
		</div>
		<div class="about_title text-body mb-4 mt-3 mb-1">Личный кабинет</div>


		<div class="row accpageblock">
			<div class="col-3 fixpickaccorhist">
				<div class="pickaccorhist">
					<div id="active_acc" class="active_paoh pick_acc">Профиль организации</div>
					<div id="active_history" class="pick_history">История заказов</div>
				</div>
				<div class="your_manager text-left mt-3 mb-5 w-100 adaptation_none">
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
			
			<div class="col acc_infer mb-5">
				<div class="accpage_style">
					<div>Название организации<span>*</span></div>
					<input type="text" placeholder="ООО “Мега”" name="nameorg" class="footer_input">
					<div>ИНН<span>*</span></div>
					<input type="text" placeholder="123-545-5452-54" name="inn" class="footer_input">
					<div>ОГРН<span>*</span></div>
					<input type="text" placeholder="58488-5-254-7575-54" name="ogrn" class="footer_input">
					<div>БИК<span>*</span></div>
					<input type="text" placeholder="58489-55865-58-54-54" name="bik" class="footer_input">
					<div>Расчетный счет<span>*</span></div>
					<input type="text" placeholder="58489-55865-58-54-54" name="checker" class="footer_input">
				</div>
			</div>

			<div class="col acc_infer1">
				<div class="accpage_style del_prof">
					<div>Менеджер огранизации</div>
					<input type="text" placeholder="Мария Варизя" name="managerorg" class="footer_input">
					<div>Телефон менеджера</div>
					<input type="text" placeholder="+7 981 973-00-47" name="phonemanager" class="footer_input">
				</div>
			</div>

			<div class="historyblock" style="display: none;">
				<div class="col-12">
					<div class="d-flex justify-content-between order_inf">
						<div class="mt-2 mb-3 gren_send">Заказ 26.04.2020 - <span>Доставлен</span></div>
						<div>
							<span class="dwnld_after">Скачать в Excel</span>
							<span class="ml-4 print_after">Печать</span>
						</div>
					</div>
					<div class="history_items">
						<div class="history_item row adaptation_flex_invers">
							<img class="col-2 " src="img/product/product1.png" width="77px">
							<span class="history_item_title col-6">Скрепки канцелярские гладкие 22 мм. по 100 шт.</span>
							<span class="history_item_colvo col-2">2 уп</span>
							<span class="history_item_price col-2">320₽/уп</span>
						</div>

						<div class="history_item_a adaptation_block" style="display: none;">
							<div class="d-flex justify-content-center">
								<img src="img/product/product1.png" width="77px" height="77px">
								<div class="history_item_a_r ml-5">
									<div class="history_item_a_title">Скрепки канцелярские гладкие 22 мм. по 100 шт.</div>
									<div class="d-flex justify-content-between history_item_a_info">
										<div class="history_item_a_colvo">2 уп</div>
										<div class="history_item_a_price">320₽/уп</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="order_again m0auto mt-3 mb-5">Заказать повторно</div>
					<div class="d-flex justify-content-between order_inf">
						<div class="mt-2 mb-3 gren_send">Заказ 26.04.2020 - <span>Доставлен</span></div>
						<div>
							<span class="dwnld_after">Скачать в Excel</span>
							<span class="ml-4 print_after">Печать</span>
						</div>
					</div>

					<div class="history_items">
						<div class="history_item row adaptation_flex_invers">
							<img class="col-2 " src="img/product/product1.png" width="77px">
							<span class="history_item_title col-6">Скрепки канцелярские гладкие 22 мм. по 100 шт.</span>
							<span class="history_item_colvo col-2">2 уп</span>
							<span class="history_item_price col-2">320₽/уп</span>
						</div>
					</div>
					<div class="order_again m0auto mt-3 mb-5">Заказать повторно</div>
				</div>
			</div>

		</div>


		


		<div class="your_manager text-left mt-3 mb-5 w-100 adaptation_block" style="display: none;">
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
	document.querySelector('.pick_acc').addEventListener('click', function(){
		document.querySelector('.historyblock').style.display = "none";
		document.querySelector('.acc_infer').style.display = "block";
		document.querySelector('.acc_infer').style.display = "block";
		document.querySelector('.historypageblock').style.display = "none";	
		document.querySelector('.historyblock').style.display = "none";	
		
	});

	document.querySelector('.pick_history').addEventListener('click', function(){
		document.querySelector('.acc_infer').style.display = "none";
		document.querySelector('.acc_infer1').style.display = "none";
		document.querySelector('.historyblock').style.display = "block";
	});	

	document.getElementById('active_acc').onclick = function() {
		document.getElementById('active_acc').classList.add('active_paoh');
		document.getElementById('active_history').classList.remove('active_paoh');
	}
	document.getElementById('active_history').onclick = function() {
		document.getElementById('active_history').classList.add('active_paoh');
		document.getElementById('active_acc').classList.remove('active_paoh');
	}
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