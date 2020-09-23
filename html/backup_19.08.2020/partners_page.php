<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS | Partners page</title>

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
		<div class="container partners">
			
			<div class="l_tegs mt-3 mb-4" style="white-space: nowrap;">
				<span class="adaptation_cont"><</span>
				<span class="adaptation_cont">Главная</span>
				<span class="adaptation_cont_forfull">Главная</span>
				<span class="adaptation_cont_forfull">></span>
				<span class="adaptation_cont_forfull">Партнеры</span>
			</div>
			<div class="about_title text-body mt-3 mb-4">Партнеры</div>
			<div class="row">
				<a href="#" class="col-3"><img src="img/partners/sberbank.png"></a>
				<a href="#" class="col-3"><img src="img/partners/lomus.png"></a>
				<a href="#" class="col-3"><img src="img/partners/officeplanet.png"></a>
				<a href="#" class="col-3"><img src="img/partners/staff.png"></a>
			</div>
			<div class="row">
				<a href="#" class="col-3"><img src="img/partners/brauberg.png"></a>
				<a href="#" class="col-3"><img src="img/partners/n1scool.png"></a>
				<a href="#" class="col-3"><img src="img/partners/lg.png"></a>
				<a href="#" class="col-3"><img src="img/partners/basf.png"></a>
			</div>
			<div class="row">
				<a href="#" class="col-3"><img src="img/partners/officeplanet.png"></a>
				<a href="#" class="col-3"><img src="img/partners/staff.png"></a>
				<a href="#" class="col-3"><img src="img/partners/lomus.png"></a>
				<a href="#" class="col-3"><img src="img/partners/sberbank.png"></a>
			</div>
			<div class="row">
				<a href="#" class="col-3"><img src="img/partners/basf.png"></a>
				<a href="#" class="col-3"><img src="img/partners/lg.png"></a>
				<a href="#" class="col-3"><img src="img/partners/brauberg.png"></a>
				<a href="#" class="col-3"><img src="img/partners/n1scool.png"></a>
			</div>
		</div>
	</div>


	<!-- footer -->
	<div id="adapt_none_header_news">
		<?php require_once ('html/footer.html') ?>
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