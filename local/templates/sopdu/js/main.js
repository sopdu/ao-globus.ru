
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

// function setLeftValue() {
// 	var _this = inputLeft,
// 	min = parseInt(_this.min),
// 	max = parseInt(_this.max);
// 	console.log('1:',_this.value);

// 	_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

// 	$('.min_value').text(_this.value)

// 	var percent = ((_this.value - min) / (max - min)) * 100;

// 	thumbLeft.style.left = percent + "%";
// 	range.style.left = percent + "%";
// 	krugLeft.style.left= percent + "%";
// }
// setLeftValue();

// function setRightValue() {
// 	var _this = inputRight,
// 	min = parseInt(_this.min),
// 	max = parseInt(_this.max);
// 	console.log('2:',_this.value);

// 	_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

// 	$('.max_value').text(_this.value)
	
// 	var percent = ((_this.value - min) / (max - min)) * 100;

// 	thumbRight.style.right = (100 - percent) + "%";
// 	range.style.right = (100 - percent) + "%";
// 	krugRight.style.right= (100 - percent) + "%";
// }
// setRightValue();

// inputLeft.addEventListener("input", setLeftValue);
// inputRight.addEventListener("input", setRightValue);

// inputLeft.addEventListener("mouseover", function() {
// 	thumbLeft.classList.add("hover");
// });
// inputLeft.addEventListener("mouseout", function() {
// 	thumbLeft.classList.remove("hover");
// });
// inputLeft.addEventListener("mousedown", function() {
// 	thumbLeft.classList.add("active");
// });
// inputLeft.addEventListener("mouseup", function() {
// 	thumbLeft.classList.remove("active");
// });

// inputRight.addEventListener("mouseover", function() {
// 	thumbRight.classList.add("hover");
// });
// inputRight.addEventListener("mouseout", function() {
// 	thumbRight.classList.remove("hover");
// });
// inputRight.addEventListener("mousedown", function() {
// 	thumbRight.classList.add("active");
// });
// inputRight.addEventListener("mouseup", function() {
// 	thumbRight.classList.remove("active");
// });


// document.querySelector('#opencatalog').addEventListener('click', function(){
// 	document.querySelector('#catalog_full').style.display = "block";
// 	document.querySelector('.closeit').style.display = "none";
// 	document.querySelector('.footer_close').style.display = "none";
	
// });
// document.querySelector('#close_catalogfull').addEventListener('click', function(){
// 	document.querySelector('#catalog_full').style.display = "none";
// 	document.querySelector('.closeit').style.display = "block";
// 	document.querySelector('.footer_close').style.display = "block";
// });



// document.querySelector('#openfilters').addEventListener('click', function(){
// 	document.querySelector('#filters_full').style.display = "block";
// 	document.querySelector('.closeit').style.display = "none";
// 	document.querySelector('.footer_close').style.display = "none";
// });

// document.querySelector('#close_filters_full').addEventListener('click', function(){
// 	document.querySelector('#filters_full').style.display = "none";
// 	document.querySelector('.closeit').style.display = "block";
// 	document.querySelector('.footer_close').style.display = "block";
// });





// document.querySelector('.listpick').addEventListener('click', function(){
// 	document.querySelector('.product_list_list').style.display = "block";
// 	document.querySelector('.product_list_grid').style.display = "none";
// });

// document.querySelector('.gridpick').addEventListener('click', function(){
// 	document.querySelector('.product_list_list').style.display = "none";
// 	document.querySelector('.product_list_grid').style.display = "block";
// });

// document.querySelector('#openbmenu').addEventListener('click', function(){
// 	document.querySelector('#openbmenu').style.display = "none";
// 	document.querySelector('#phoneheader').style.display = "none";
// 	document.querySelector('#closebmenu').style.display = "block";
// 	document.querySelector('#headerlangs').style.display = "block";
// 	document.querySelector('#adaptview').style.display = "block";

// 	document.querySelector('#adapt_none_head').style.display = "none";
// 	document.querySelector('#adapt_none_header_news').style.display = "none";

// });
// document.querySelector('#closebmenu').addEventListener('click', function(){
// 	document.querySelector('#closebmenu').style.display = "none";
// 	document.querySelector('#headerlangs').style.display = "none";
// 	document.querySelector('#openbmenu').style.display = "block";
// 	document.querySelector('#phoneheader').style.display = "block";
// 	document.querySelector('#adaptview').style.display = "none";

// 	document.querySelector('#adapt_none_head').style.display = "block";
// 	document.querySelector('#adapt_none_header_news').style.display = "block";
// });



function ajaxpostshow(urlres, datares, wherecontent ){
       $.ajax({
           type: "POST",
           url: urlres,
           data: datares,
           dataType: "html",
           success: function(fillter){
                $(wherecontent).html(fillter);
           }
      });
}

function cartGrabber(elem) {
  $.ajax({
    type: 'GET',
    url: '/',
    dataType: 'html',
    success: function(data){
        
        var cart = $(data).find('#bx_basketFKauiI').html();
        $('#bx_basketFKauiI').html(cart);
        elem.parent().addClass('changing-btn');
        $('.changing-btn .to-cart').toggleClass('shown');

    }
})
}

function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

function cartUpdate() {
	var totalPrice = 0;
	var totalWeight = 0;
	var totalVol = 0;
	$('.basket_item').each(function () {
		$(this).addClass('updating');
		var price = parseFloat($('.updating .basket_item_price').html().replace(/&nbsp;/g, "")) * $('.updating input').val();
		var weight = $('.updating').attr('data-weight') * $('.updating input').val();
		var vol = $('.updating').attr('data-vol') * $('.updating input').val();
		totalPrice = Number(totalPrice) + Number(price);
		totalWeight = Number(totalWeight) + Number(weight);
		totalVol = Number(totalVol) + Number(vol);
		$(this).removeClass('updating');
	})
	$('.basket_order_price, .price_col, .basket_num .bal').html(number_format(totalPrice, 2, ',', ' ') + '₽');
	$('.total-weight').html(totalWeight.toFixed(2) + ' г');
	$('.total-vol').html(totalVol.toFixed(2) + ' см2');
}



  $(".basket_item_cart input").change(function(){
         var countbasketid = $(this).attr('id');
         var countbasketcount = $(this).val();
         var ajaxcount = countbasketid + '&ajaxbasketcount=' + countbasketcount;
         ajaxpostshow("/include/basket.php", ajaxcount, ".basket" );
         cartUpdate();      
         return false;
   });

$('.amount').change(function () {
  a = Math.round($(this).val()/$(this).attr('step'));
  $(this).val($(this).attr('step')*a);
})

$('.add').click(function () {
	$(this).parent().addClass('calculating');
	$('.calculating input').val(Number($('.calculating input').val())+Number($('.calculating input').attr('step')));
	if ($('.calculating').hasClass('basket_item_cart')) {
		var countbasketid = $('.calculating input').attr('id');
        var countbasketcount = $('.calculating input').val();
        var ajaxcount = countbasketid + '&ajaxbasketcount=' + countbasketcount;
        ajaxpostshow("/include/basket.php", ajaxcount, ".basket" );
        cartUpdate(); 
	}
	$(this).parent().removeClass('calculating');
});

$('.subtract').click(function () {
	$(this).parent().addClass('calculating');
	if ($('.calculating input').val() > 1) {
		$('.calculating input').val($('.calculating input').val()-Number($('.calculating input').attr('step')));
	}
	if ($('.calculating').hasClass('basket_item_cart')) {
		var countbasketid = $('.calculating input').attr('id');
        var countbasketcount = $('.calculating input').val();
        var ajaxcount = countbasketid + '&ajaxbasketcount=' + countbasketcount;
        ajaxpostshow("/include/basket.php", ajaxcount, ".basket" );
        cartUpdate(); 
	}
	$(this).parent().removeClass('calculating');
});


$(".to-cart").click(function(){
  var elem = $(this);
	$(this).parent().addClass('adding');
  if ($(this).attr('data-value')) {
    url = $(this).attr('data-value')+"&quantity="+$('.adding input').val();
  }

  else{
    url = $(this).attr('data-del');
  }
    $.ajax({
        type: "GET",
        url: url,
        dataType: "html",
        success: function(out){
          cartGrabber(elem);
        }
    });
    $(this).parent().removeClass('adding');
});


$('.basket_item_delete').click(function(){
    var deletebasketid = $(this).attr('id');
    ajaxpostshow("/include/basket.php", deletebasketid, ".basket" );             
    $(this).parent().parent().parent().addClass('item-checker');
    $(this).parent().parent().addClass('deleting');
    if ($('.item-checker .basket_item').length > 1) {
    	$('.deleting').remove();
    	$('.item-checker').removeClass('item-checker');
    }

    else{
    	$('.item-checker').prev().remove();
    	$('.item-checker').remove();
    }
    cartUpdate(); 
 });


if (window.innerWidth > 991) {
  $('.product_photo').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      dots: false,
      centerMode: false,
      focusOnSelect: false,
      infinite:false,
      mobileFirst: true
  });
}

else if (window.innerWidth > 575 && window.innerWidth <= 991){
  $('.product_photo').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      dots: false,
      centerMode: false,
      focusOnSelect: false,
      infinite:false,
      mobileFirst: true
  });
}

else{
  $('.product_photo').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: false,
      centerMode: false,
      focusOnSelect: false,
      infinite:false,
      mobileFirst: true
  });
}

$('.product_photo img').click(function () {
    $('.img_p_page').css('background-image', 'url("'+$(this).attr('data-big-img')+'")')
});


$('.mobile-filter-bg').click(function () {
  $('.product_filters').removeClass('shown');
});

$('#openfilters').click(function () {
  $('.product_filters').addClass('shown');
});

$('#opencatalog').click(function () {
  $('.catalog_mobile').addClass('shown');
});

$('.catalog-close').click(function () {
  $('.catalog_mobile').removeClass('shown');
})