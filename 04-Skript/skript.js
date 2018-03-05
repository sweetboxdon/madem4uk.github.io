

/*ПОДСВЕТКА ГОРИЗОНТАЛЬНОГО И ВЕРТИКАЛЬНОГО МЕНЮ*/

onload = function ()
{
for (var lnk = document.links, j = 0; j < lnk.length; j++)
if (lnk [j].href == document.URL)if (lnk [j].className == "Menu-Gorizont")lnk [j].className = 'Menu-Gorizont2'; 

for (var lnk = document.links, j = 0; j < lnk.length; j++)
if (lnk [j].href == document.URL)if (lnk [j].className == "Menu-Vertikal-sleva")lnk [j].className = 'Menu-Vertikal-sleva2'; 

for (var lnk = document.links, j = 0; j < lnk.length; j++)
if (lnk [j].href == document.URL)if (lnk [j].className == "Menu-Vertikal-sprava")lnk [j].className = 'Menu-Vertikal-sprava2'; 

for (var lnk = document.links, j = 0; j < lnk.length; j++)
if (lnk [j].href == document.URL)if (lnk [j].className == "Blok-Ssylka")lnk [j].className = 'Blok-Ssylka2'; 

}


/*ПОДСВЕТКА ГОРИЗОНТАЛЬНОГО И ВЕРТИКАЛЬНОГО МЕНЮ КОНЕЦ*/



/*НОВОЕ МАЛЕНЬКОЕ ОКНО*/

function newMyWindow(e) {
  var h = 510,
      w = 810;
  window.open(e, '', 'scrollbars=1,height='+Math.min(h, screen.availHeight)+',width='+Math.min(w, screen.availWidth)+',left='+Math.max(0, (screen.availWidth - w)/2)+',top='+Math.max(0, (screen.availHeight - h)/2));
}

/*НОВОЕ МАЛЕНЬКОЕ ОКНО КОНЕЦ*/


/*ФИКСИРОВАННОЕ МЕНЮ*/

$(document).ready(function(){

        var $menu = $("#menu");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 89 && $menu.hasClass("default") ){
                $menu.removeClass("default").addClass("fixed");
            } else if($(this).scrollTop() <= 89 && $menu.hasClass("fixed")) {
                $menu.removeClass("fixed").addClass("default");
            }
        });//scroll
    });
    
    
    
    
 

/*ПЛАВНЫЙ СКРОЛЛИНГ К ЯКОРЮ*/

   
$(function(){
$('a[href^="#"]').click(function(){
var target = $(this).attr('href');
$('html, body').animate({scrollTop: $(target).offset().top}, 800);//800 - длительность скроллинга в мс
return false; 
}); 
});


/*АККОРДЕОН*/

$(document).ready(function(){
$('#accordion-js').find('h2').click(function(){
$(this).next().stop().slideToggle(500);
}).next().stop().hide();
});


/*КНОПКА НАВЕРХ*/

var limit     = $(window).height()/3,
		$backToTop = $('#back-to-top');

	$(window).scroll(function () {
		if ( $(this).scrollTop() > limit ) {
			$backToTop.fadeIn();
		} else {
			$backToTop.fadeOut();
		}
	});
	
	// scroll body to 0px on click
	$backToTop.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1500);
		return false;
	});