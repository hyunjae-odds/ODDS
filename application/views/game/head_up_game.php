<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="content-type" content="text/html; charset-utf-8"/>	
  <title> ODDS CONNECT </title>
	<link rel="stylesheet" href="js/lib/jquery.bxslider.css" />
	<link href="../css/common.css" rel="stylesheet" type="text/css" />	
	<link href="../css/livescore.css" rel="stylesheet" type="text/css" />
	<script src="../js/jquery/jquery-1.11.3.js"></script>
	<script src="../js/lib/jquery.bxslider.js"></script>
	<!-- news -->
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css" />

<script type="text/javascript">

/* ------------------------------------common------------------------------------- */

	  $(function(){
		$("a").attr("onfocus","this.blur();")
	  });

	  

		// bestleague toggle
		$(document).ready(function(){ 
			$(".best a").click(function(){ 
				var state = $(this).parent().find(".bestleague").css("display"); 
				if(state == "none"){ 
					$(".bestleague").slideUp(); 
					$(".best a").removeClass("close");
					$(this).parent().find(".bestleague").slideDown(); 
					$(this).addClass("close");
				}else{
					$(this).parent().find(".bestleague").slideUp(); 	
					$(this).removeClass("close");
				}
			});
			$(".etc a").click(function(){ 
				var state = $(".etcL").css("display"); 
				if(state == "none"){ 
					$(".etcL").slideDown(); 
					$(".etc a").removeClass("close");
				}else{
					$(".etcL").slideUp(); 	
					$(".etc a").addClass("close");
				}
			});
		
			$(".LNB>ul>li.best>a").click(function(){ 
				$(this).parent().addClass("on");
				$(".Bottombox").slideUp(); 
			    return false;
			});

		});


		$(function(){
			$(document).mouseup(function(e) {
				if ($(e.target).parents('.zeta-menu').length == 0) {
					$('.zeta-menu li').removeClass('on');
					$('.zeta-menu ul').hide();
				}
			});
			$(".zeta-menu>li:has(ul)>a").each( function() {
			//	$(this).html( $(this).html()+' &or;' );
			});
			$(".zeta-menu ul li:has(ul)")
				.find("a:first")

			$(".zeta-menu li>a").click(function(){
				$(".bestleague").slideUp(); 
				var li = $(this).parent();
				var ul = li.parent()
				ul.find('li').removeClass('on');
				ul.find('ul').not(li.find('ul')).hide();
				li.children('ul').toggle();
				if( li.children('ul').is(':visible') || li.has('ul')) {
					li.addClass('on');
				}
			});
		});

	

		//bxSlider_slider
		$(document).ready(function(){		
			//visual
			$('.visual_bxslider .bxslider').bxSlider({
				auto: true,
				//autoControls: true,
				speed:1500
			}); 
			//livescore
		  $('.scoregnb').bxSlider({
			slideWidth: 250,
			minSlides: 2,
			maxSlides: 4,
			slideMargin: 4    
		  });
			//expert 전문가의견
		  $('.expert_bxslider').bxSlider({
				auto: true,
				speed:500
			}); 

			//livescore
		  $('.bestview ul').bxSlider({
			slideWidth: 235,
			minSlides: 4,
			maxSlides: 4,
			slideMargin: 0    
		  });
		});


		$(window).scroll( function(){
		var nowScroll=$(window).scrollTop();
		if(nowScroll >= 68){
			$(".rightMenu").css("position","fixed").css("top","0px");
		}else{
			$(".rightMenu").css("position","absolute").css("top","68px");
		}
		});
		
		  $( function() {
			var state = true;
			$( ".button" ).on( "click", function() {
			  if ( state ) {
				$(this).css("background-image","url('image/base/right_close.jpg')");
				$( ".rightMenu" ).animate({right: 0}, 600 );
			} else {
				$(this).css("background-image","url('image/base/right_open.jpg')");
				$( ".rightMenu" ).animate({right: -323}, 600 );
			  }
			  state = !state;
			});
		  } );




/* ------------------------------------common 끝------------------------------------- */

		

		
		$(document).ready(function(){ 

			//popup
			$(".close").click(function(){ 
				$(this).parent().slideUp();
				return false;
			});
			$(".close_cho").click(function(){ 
				$(this).parents().find(".choice").slideUp();
				return false;
			});
			$(".g_BTN a").click(function(){ 
				$(this).parents().find(".r_pop").slideUp();
				$(this).parents().find(".g_pop").slideUp();
				$(this).parents().find(".y_pop").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".g_pop").slideDown();
				return false;
			});
			$(".r_BTN a").click(function(){ 
				$(this).parents().find(".r_pop").slideUp();
				$(this).parents().find(".g_pop").slideUp();
				$(this).parents().find(".y_pop").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".r_pop").slideDown();
				return false;
			});
			$(".all_open").click(function(){ 
				$(this).parents().find(".allview").slideDown(); 
				return false;
			});
			$(".leagueChoice > a").click(function(){ 
				$(this).parents().find(".r_pop").slideUp();
				$(this).parents().find(".g_pop").slideUp();
				$(this).parents().find(".y_pop").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().find(".choice").slideDown();
				return false;
			});
			$(".y_BTN > a").click(function(){ 			
				$(this).parents().find(".r_pop").slideUp();
				$(this).parents().find(".g_pop").slideUp();
				$(this).parents().find(".y_pop").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".y_pop").slideDown();
				return false;
			});
		});

</script>

 </head>