<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="content-type" content="text/html; charset-utf-8"/>	
  <title> ODDS CONNECT </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"><!-- 메인비주얼에만 사용되는 구글웹폰트 -->
	<link rel="stylesheet" href="/public/lib/js/lib/jquery.bxslider.css" />
	<link href="/public/lib/css/common.css" rel="stylesheet" type="text/css" />	
	<script src="/public/lib/js/jquery/jquery-1.11.3.js"></script>
	<script src="/public/lib/js/jquery.bxslider.min.js"></script>
	<script src="/public/lib/js/lib/jquery.bxslider.js"></script>
	<!-- news -->
	<link rel="stylesheet" type="text/css" href="/public/lib/css/animate.min.css" />

<script type="text/javascript">

/* ------------------------------------common------------------------------------- */


		$(function(){
			$("a").attr("onfocus","this.blur();")
		});
		$(document).click(function(){
			$(".select ul").slideUp();
			$(".date_ul").slideUp();
			$(".popup").slideUp();
			$(".choice").slideUp();
		});

		// bestleague toggle _ 왼쪽메뉴
		$(document).ready(function(){ 
			$(".best > a").click(function(){ 
				var state = $(this).siblings(".bestleague").css("display"); 
				if(state == "none"){ 
					$(".best > a.bold").removeClass("bold");
					$(".bestleague").slideUp(); 
					$(".best a").removeClass("close");
					$(this).siblings(".bestleague").slideDown(); 
					$(this).addClass("close");
					$(this).parent().addClass("on");
					return false;
				}else{
					$(".best > a.bold").removeClass("bold");
					$(this).siblings(".bestleague").slideUp(); 	
					$(this).removeClass("close");
					return false;
				}
			});

			$(".best2 > a").click(function(){ 
				var state = $(this).siblings(".bestleague2").css("display"); 
				if(state == "none"){ 
					$(".bestleague2").slideUp(); 
					$(".best2 a").removeClass("close");
					$(this).siblings(".bestleague2").slideDown(); 
					$(this).parent().addClass("on");
					$(this).addClass("close");
					return false;
				}else{
					$(this).siblings(".bestleague2").slideUp(); 	
					$(this).removeClass("close");
					return false;
				}
			});
		});

		
		//우측메뉴	
		  $( function() {
			var state = true;
			$( ".button" ).on( "click", function() {
			  if ( state ) {
				$(this).css("background-image","url('/public/lib/image/base/right_close.jpg')");
				$( ".rightMenu_w" ).animate({right: 0}, 600 );
			} else {
				$(this).css("background-image","url('/public/lib/image/base/right_open.jpg')");
				$( ".rightMenu_w" ).animate({right: -288}, 600 );
			  }
			  state = !state;
			});
		  } );

	
		//popup
		$(document).ready(function(){ 			
			$(".close").click(function(){ 
				$(this).parent().slideUp();
				return false;
			});
			$(".close_cho").click(function(){ 
				$(this).parents().find(".choice").slideUp();
				return false;
			});
			$(".g_BTN a").click(function(){ 
				$(this).parents().find(".popup").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".g_pop").slideDown();
				return false;
			});
			$(".r_BTN a").click(function(){ 
				$(this).parents().find(".popup").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".r_pop").slideDown();
				return false;
			});
			$(".leagueChoice > a").click(function(){ 
				$(this).parents().find(".popup").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().find(".choice").slideDown();
				return false;
			});
			$(".y_BTN > a").click(function(){ 			
				$(this).parents().find(".popup").slideUp();
				$(this).parents().find(".choice").slideUp();
				$(this).parent().parent().parent().find(".y_pop").slideDown();
				return false;
			});
			//종합 부문
			$(".select p").click(function(){ 
				$(".select").find("ul").slideUp(); 
				$(this).parent().find("ul").slideToggle(); 
				return false;
			});
		});


/* ------------------------------------common 끝------------------------------------- */

</script>

 </head>