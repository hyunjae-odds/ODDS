<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="content-type" content="text/html; charset-utf-8"/>	
  <title> ODDS CONNECT </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet"><!-- 메인비주얼에만 사용되는 구글웹폰트 -->
	<link rel="stylesheet" href="js/lib/jquery.bxslider.css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />	
	<script src="js/jquery/jquery-1.11.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/lib/jquery.bxslider.js"></script>

	<!-- news -->
	<link rel="stylesheet" type="text/css" href="css/animate.min.css" />

<script type="text/javascript">

/* ------------------------------------common------------------------------------- */


		$(function(){
			$("a").attr("onfocus","this.blur();")
		});
	/*	$(document).click(function(){
			$(".select ul").slideUp();
			$(".date_ul").slideUp();
			$(".popup").slideUp();
			$(".choice").slideUp();
		});*/

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



		  $(document).ready(function(){ 	
			//우측메뉴	
			 $( function() {
				var state = true;
				$( ".menu_btn li .button" ).on( "click", function() {
				  if ( state ) {
					$(this).parent().removeClass("open").addClass("close");
					$( ".rightMenu" ).animate({right: 0}, 600 );
				} else {
					$(this).parent().removeClass("close").addClass("open");
					$( ".rightMenu" ).animate({right: -288}, 600 );
				  }
				  state = !state;
				});
			  } );


			$(".rightMenu .menu_btn .live a").click(function(){ 
				$( ".rightMenu" ).animate({right: 0}, 600 );
				$(this).parent().siblings(".on").removeClass("on");
				$(this).parent().addClass("on");
				$(".menu_view > li").css("display","none");
				$(".menu_view .live_view").css("display","block");
				return false;
			});
			$(".rightMenu .menu_btn .game a").click(function(){ 
				$( ".rightMenu" ).animate({right: 0}, 600 );
				$(this).parent().siblings(".on").removeClass("on");
				$(this).parent().addClass("on");
				$(".menu_view > li").css("display","none");
				$(".menu_view .game_view").css("display","block");
				return false;
			});
			
			//우측메뉴_GAME
			$(".game_num h4>a").click(function(){ 
				var state = $(this).parent().siblings("ul.list").css("display"); 
				if(state == "none"){ 
					$(".game_num").children().children("ul.list").slideUp(); 
					$(".game_num").children().children().children("a").children(".up").addClass("down").removeClass("up");
					$(this).find("span.arro").addClass("up").removeClass("down");
					$(this).parent().siblings("ul.list").slideDown(); 
					$(this).parent().siblings("ul.list").addClass("active");
					$(this).parent().addClass("on");
					return false;
				}else{
					$(this).find("span.arro").addClass("down").removeClass("up");
					$(this).parent().siblings("ul.list").slideUp(); 	
					$(this).parent().siblings("ul.list").removeClass("active");
					$(this).parent().removeClass("on");
					return false;
				}
			});
			$("ul.list li a.close").click(function(){ 
				$(this).parent().slideUp();
				return false;
			});
		});

	


		//popup
		$(document).ready(function(){ 			
			$(".close").click(function(){ 
				$(this).parent().slideUp();
				$(this).parent().parent().delay(350).slideUp();
				return false;
			});
			$(".popup_w").click(function(){ 
				$(this).siblings().slideUp();
				$(this).parent().delay(350).slideUp();
				return false;
			});
			$(".close_cho").click(function(){ 
				$(this).parents().find(".choice_w").slideUp();
				return false;
			});
			$(".g_BTN a").click(function(){ 
				$(this).parent().parent().parent().find(".g_pop_w").css("display","block");
				$(this).parent().parent().parent().find(".g_pop").slideDown();
				return false;
			});
			$(".r_BTN a").click(function(){ 
				$(this).parent().parent().parent().find(".r_pop_w").css("display","block");
				$(this).parent().parent().parent().find(".r_pop").slideDown();
				return false;
			});
			$(".y_BTN > a").click(function(){ 			
				$(this).parent().parent().parent().find(".y_pop_w").css("display","block");
				$(this).parent().parent().parent().find(".y_pop").slideDown();
				return false;
			});
			//재야의분석/블로그보기 팝업
			for(var i=1;i<3;i++){		
				(function (k){
					$(".r_pop2 ul.r_pop_h li.r_pop_h0" + k ).click(function(){ 
						$(this).siblings().removeClass("on");
						$(this).addClass("on");
						$(this).parent().siblings().find(">li").removeClass("active");
						$(this).parent().siblings().find(">li").eq(k-1).addClass("active");
						return false;
					});
				}(i));
			};
			//셀렉박스
			$(".select p").click(function(){
				if($(this).attr("class")=="on"){
					$(this).removeClass("on").addClass("off");
					$(".select").find("ul").slideUp(); 
				}else if($(this).attr("class")=="off"){
					$(".select p").removeClass("on").addClass("off");
					$(this).removeClass("off").addClass("on");
					$(".select").find("ul").slideUp(); 
					$(this).parent().find("ul").slideDown(); 
				}
				return false;
			});
			$("body").click(function(){ 
				var state = $(".select>ul").css("display"); 
				if(state == "block"){ 
					$(".select>ul").slideUp(); 
					$(".select>p").removeClass("on").addClass("off");
				}
			});

			

			//로그인 팝업열기
			$(".login > a ").click(function(){ 
				$(".loginWrap").show();
				$(".loginWrap .bg_b").fadeIn();
				$(".loginWrap .loginBox").slideDown();
				return false;
			});
			$(".bloglist .img_box ").click(function(){ 
				$(".loginWrap").show();
				$(".loginWrap .bg_b").fadeIn();
				$(".loginWrap .loginBox").slideDown();
				return false;
			});
			//아이디찾기 창 열기
			$(".logbox02_btn.id_s ").click(function(){ 
				$(".logbox02").fadeIn();
				$(".logbox01").hide();
				$(".logbox02 .tab01 li.log01").addClass("on");
				$(".logbox02").find(".logbox02_v li.logbox02_v_01").css("display","block");
				return false;
			});
			//비밀번호찾기 창 열기
			$(".logbox02_btn.pw_s ").click(function(){ 
				$(".logbox02").fadeIn();
				$(".logbox01").hide();
				$(".logbox02 .tab01 li.log02").addClass("on");
				$(".logbox02").find(".logbox02_v li.logbox02_v_02").css("display","block");
				return false;
			});
			//창 내에서 아이디찾기 탭 열기
			$(".logbox02 .tab01 .log01 a ").click(function(){ 
				$(this).parents(".logbox02").find(".tab01 > li").removeClass("on");
				$(this).parent().addClass("on");
				$(this).parents(".logbox02").find(".logbox02_v > li").css("display","none");
				$(this).parents(".logbox02").find(".logbox02_v li.logbox02_v_01").css("display","block");
				return false;
			});
			//창 내에서 비밀번호찾기 탭 열기
			$(".logbox02 .tab01 .log02 a ").click(function(){ 
				$(this).parents(".logbox02").find(".tab01 > li").removeClass("on");
				$(this).parent().addClass("on");
				$(this).parents(".logbox02").find(".logbox02_v > li").css("display","none");
				$(this).parents(".logbox02").find(".logbox02_v li.logbox02_v_02").css("display","block");
				return false;
			});
			//회원가입 열기
			$(".logbox03_btn ").click(function(){ 
				$(".logbox03").slideDown();
				$(".logbox01").hide();
				$(".login>a").hide();//임의작성 추후삭제요망
				$(".logon").show();//임의작성 추후삭제요망
				return false;
			});
			//회원가입 남/여
			$(".input_textbox2 > li > p > span ").click(function(){ 
				$(".input_textbox2 > li > p > span ").removeClass("on");
				$(this).addClass("on");
				return false;
			});
			$("a.close_btn").click(function(){ 
				$(".loginWrap").slideUp();
				$(".loginWrap .bg_b").slideUp();
				$(".loginWrap .loginBox").slideUp();
				return false;
			});
			//input bg지우기 - 내용이 있을때는 body클릭해도 나오지않게 수정해주세요
			$(".loginWrap input ").click(function(){ 
				$(this).addClass("onmouse");
				return false;
			});
			$("body").click(function(){ 
				var state = $(".loginWrap input").hasClass("onmouse"); 
				if(state = true){ 
					$(".loginWrap input").removeClass("onmouse");
				}
			});
			//---회원가입 선택 시작
			$(".logbox03 > .log_b > div p.cho_p").click(function(){ 
				if($(this).parent().find("span.check").hasClass("on")){
					$(this).parent().find("span.check").removeClass("on");
				}else{
					$(this).parent().find("span.check").addClass("on");
				};
			});
			$(".logbox03 > .log_b > div span.check").click(function(){ 
				if($(this).hasClass("on")){
					$(this).removeClass("on");
				}else{
					$(this).addClass("on");
				};
			});
			$(".logbox03 > .log_b > div .all").click(function(){ 
				if($(".logbox03 > .log_b > div .check.all").hasClass("on")){
					$(this).parents(".logbox03").find("span.check").addClass("on");
					return false;
				}else{
					$(this).parents(".logbox03").find("span.check").removeClass("on");
					return false;
				};
			});
			//---회원가입 선택 끝


		});


/* ------------------------------------common 끝------------------------------------- */

</script>

 </head>