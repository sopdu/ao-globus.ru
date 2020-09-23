
$(document).ready(function(){
	$('.tab-content:first').show(0);
	$('.tab:first>span').addClass('selected');
	$('.tab>span').click(function(){
		$('.tab>span').removeClass('selected');
		$(this).addClass('selected'); 
		$('.tab-content').hide(0);   
		$(this).next('.tab-content').show(0);     
	});
});

var signup_h = document.getElementById('signup_h');
var myEl_signup_h = document.getElementById('modal-body');
signup_h.onclick = function(){
	myEl_signup_h.style.height = '491px';
};

var signin_h = document.getElementById('signin_h');
var myEl_signin_h = document.getElementById('modal-body');
signin_h.onclick = function(){
	myEl_signin_h.style.height = '329px';
};


$(document).ready(function () {

	$('.first-button').on('click', function () {

		$('.animated-icon1').toggleClass('open');
	});
	$('.second-button').on('click', function () {

		$('.animated-icon2').toggleClass('open');
	});
	$('.third-button').on('click', function () {

		$('.animated-icon3').toggleClass('open');
	});
});


$('.item_test span').on('click',function(){
	$(this).siblings('.submain').toggle('easing')
	$(this).siblings('.fa').toggleClass('rotate')
});
$('.item_test i').on('click',function(){
	$(this).siblings('.submain').toggle('easing')
	$(this).siblings('.fa').toggleClass('rotate')
});


var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");
var krugLeft = document.querySelector(".krug_left");
var krugRight = document.querySelector(".krug_right");

function setLeftValue() {
	var _this = inputLeft,
	min = parseInt(_this.min),
	max = parseInt(_this.max);
	console.log('1:',_this.value);

	_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

	$('.min_value').text(_this.value)

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbLeft.style.left = percent + "%";
	range.style.left = percent + "%";
	krugLeft.style.left= percent + "%";
}
setLeftValue();

function setRightValue() {
	var _this = inputRight,
	min = parseInt(_this.min),
	max = parseInt(_this.max);
	console.log('2:',_this.value);

	_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

	$('.max_value').text(_this.value)
	
	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbRight.style.right = (100 - percent) + "%";
	range.style.right = (100 - percent) + "%";
	krugRight.style.right= (100 - percent) + "%";
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function() {
	thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function() {
	thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function() {
	thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function() {
	thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function() {
	thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function() {
	thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function() {
	thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function() {
	thumbRight.classList.remove("active");
});


document.querySelector('#opencatalog').addEventListener('click', function(){
	document.querySelector('#catalog_full').style.display = "block";
	document.querySelector('.closeit').style.display = "none";
	document.querySelector('.footer_close').style.display = "none";
	
});
document.querySelector('#close_catalogfull').addEventListener('click', function(){
	document.querySelector('#catalog_full').style.display = "none";
	document.querySelector('.closeit').style.display = "block";
	document.querySelector('.footer_close').style.display = "block";
});



document.querySelector('#openfilters').addEventListener('click', function(){
	document.querySelector('#filters_full').style.display = "block";
	document.querySelector('.closeit').style.display = "none";
	document.querySelector('.footer_close').style.display = "none";
});

document.querySelector('#close_filters_full').addEventListener('click', function(){
	document.querySelector('#filters_full').style.display = "none";
	document.querySelector('.closeit').style.display = "block";
	document.querySelector('.footer_close').style.display = "block";
});





document.querySelector('.listpick').addEventListener('click', function(){
	document.querySelector('.product_list_list').style.display = "block";
	document.querySelector('.product_list_grid').style.display = "none";
});

document.querySelector('.gridpick').addEventListener('click', function(){
	document.querySelector('.product_list_list').style.display = "none";
	document.querySelector('.product_list_grid').style.display = "block";
});

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



