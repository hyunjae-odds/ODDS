<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="content-type" content="text/html; charset-utf-8"/>	
  <title> ODDS CONNECT </title>
	<link rel="stylesheet" href="http://bxslider.com/lib/jquery.bxslider.css">
	<link href="/ODDS/public/lib/css/common.css" rel="stylesheet" type="text/css">	
	<link href="/ODDS/public/lib/css/livescore.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
	<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>


	 <script>

/* ------------------------------------common------------------------------------- */

	  $(function(){
		$("a").attr("onfocus","this.blur();")
	  });

	  	/*login input
		$(document).ready(function(){ 
			$('#userID').click(function(){ 
				var state = $('.loginBox').css('display'); 
				if(state == 'none'){ 
					$('#userID').removeClass('on');
				}else{
					$('#userID').addClass('on');
				}
			});
			$('#userPW').click(function(){ 
				var state = $('.loginBox').css('display'); 
				if(state == 'none'){ 
					$('#userPW').removeClass('on');
				}else{
					$('#userPW').addClass('on');
				}
			});
		});   */

		// bestleague toggle
		$(document).ready(function(){ 
			$('.best a').click(function(){ 
				var state = $('.bestleague').css('display'); 
				if(state == 'none'){ 
					$('.bestleague').slideDown(); 
					$('.best a').removeClass('close');
				}else{
					$('.bestleague').slideUp(); 	
					$('.best a').addClass('close');
				}
			});
		
			$(".LNB>ul>li.best>a").click(function(){ 
				$(this).parent().addClass("on");
				$(".Bottombox").slideUp(); 
				$('body').css("background-image","url('/ODDS/public/lib/image/base/bg_top.jpg')"); 
			    return false;
			});/**/

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
			slideWidth: 118,
			minSlides: 8,
			maxSlides: 8,
			slideMargin: 0    
		  });
		});

		// livescore toggle
		$(document).ready(function(){ 
			$('.toggleButton').click(function(){ 
				var state = $('.Bottombox').css('display'); 
				if(state == 'none'){ 
					$('.Bottombox').slideDown(); 
					$('.toggleButton').removeClass('close');
					$('body').css("background-image","url('/ODDS/public/lib/image/base/bg_top_open.jpg')"); 
				}else{
					$('.Bottombox').slideUp(); 	
					$('.toggleButton').addClass('close');
					$('body').css("background-image","url('/ODDS/public/lib/image/base/bg_top.jpg')"); 
				}
			});
		});



/* ------------------------------------livescore------------------------------------- */
	
	$(document).ready(function(){ 

		//date
		$(".date_num").click(function(){ 
			var state = $(this).next().css('display'); 
			if(state == 'none'){ 
				$(this).addClass("on");			
				$(this).siblings().removeClass("on");
				$(this).parent().find(".date_ul").css("display","none");
				$(this).next().css("display","block");
				return false;
			}else{
				$(this).next().css("display","none");
			}

		});
		
		//liveview
		$(".ing_BTN a").click(function(){ 
			var state = $(this).parents().next("tr.liveView").css('display'); 
			if(state == 'none'){ 
				$(this).parents().find("tr.liveView").css("display","none");
				$(this).parents().find(".r_pop").css("display","none");
				$(this).parents().find(".g_pop").css("display","none");
				$(this).parents().find(".y_pop").css("display","none");
				$(this).parents().find(".choice").css("display","none");
				$(this).parents().next("tr.liveView").css("display","table-row"); 
			    return false;
			}else{
				$(this).parents().next("tr.liveView").css("display","none");	
				return false;
			}
		});

		//popup
		$(".close").click(function(){ 
			$(this).parent().css("display","none");
			return false;
		});
		$(".close_cho").click(function(){ 
			$(this).parents().find(".choice").css("display","none");
			return false;
		});
		$(".g_BTN a").click(function(){ 
			$(this).parents().find(".r_pop").css("display","none");
			$(this).parents().find(".g_pop").css("display","none");
			$(this).parents().find(".y_pop").css("display","none");
			$(this).parents().find(".choice").css("display","none");
			$(this).parent().parent().parent().find(".g_pop").css("display","block");
			return false;
		});
		$(".r_BTN a").click(function(){ 
			$(this).parents().find(".r_pop").css("display","none");
			$(this).parents().find(".g_pop").css("display","none");
			$(this).parents().find(".y_pop").css("display","none");
			$(this).parents().find(".choice").css("display","none");
			$(this).parent().parent().parent().find(".r_pop").css("display","block");
			return false;
		});
		$(".all_open").click(function(){ 
			$(this).parents().find(".allview").slideDown(); 
			return false;
		});
		$(".leagueChoice > a").click(function(){ 
			$(this).parents().find(".r_pop").css("display","none");
			$(this).parents().find(".g_pop").css("display","none");
			$(this).parents().find(".y_pop").css("display","none");
			$(this).parents().find(".choice").css("display","none");
			$(this).parent().find(".choice").css("display","block");
			return false;
		});
		$(".y_BTN > a").click(function(){ 			
			$(this).parents().find(".r_pop").css("display","none");
			$(this).parents().find(".g_pop").css("display","none");
			$(this).parents().find(".y_pop").css("display","none");
			$(this).parents().find(".choice").css("display","none");
			$(this).parent().parent().parent().find(".y_pop").css("display","block");
			return false;
		});

	});


		
	  </script>

 </head>