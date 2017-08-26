<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<meta http-equiv="content-type" content="text/html; charset-utf-8"/>	
  <title> ODDS CONNECT </title>
	<link rel="stylesheet" href="js/lib/jquery.bxslider.css" />
	<link href="/odds/css/common.css" rel="stylesheet" type="text/css" />	
	<script src="/odds/js/jquery/jquery-1.11.3.js"></script>
	<script src="/odds/js/lib/jquery.bxslider.js"></script>
	<!-- news -->
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css" />

<script type="text/javascript">

/* ------------------------------------common------------------------------------- */


		$(function(){
			$("a").attr("onfocus","this.blur();")
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
		});


/* ------------------------------------common 끝------------------------------------- */



</script>

 </head>

<script type="text/javascript">

	$(document).ready(function(){ 
		//ranking_리그_리그통계_테이블변경버전
		for(var i=1;i<9;i++){		
			(function (k){
				$(".Ltable table th span.n" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					$(this).parents(".table_default").siblings("div").addClass("redline n" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};
	
		//game_league _ 상단리그종류메뉴
		$(".other_btn").click(function(){ 
			$(this).parents().find(".other_view").slideToggle(); //내용 클릭하면 이동
			return false;
		});

		//즐찾버튼토글
		$(".btn_mark").click(function(){ 
			$(this).toggleClass("on");
			return false;
		});

	});	  



 </script>

	
				<link href="/odds/css/baseball.css" rel="stylesheet" type="text/css"/>

<body>
				<div class="Match_w">		
				<div class="match KBO">
					<div class="title_bar">
						<p>야구 - 대한민국 - KBO - 2017.07.12 - </p>
						<div>
							<a href="" class="other_btn">LG vs 삼성<span></span></a>
							<ul class="other_view">
								<li><a href="">LG vs 삼성</a></li>
								<li><a href="">KIA vs 넥센</a></li>
								<li><a href="">KT vs 한화</a></li>
							</ul>
						</div>
					</div>
					<div class="score_bar">
						<div>
							<div class="team">
								<p class="st">1위</p>
								<p>LG 트윈스</p>
								<span>선발 : 데이비드 허프</span>
							</div>
							<div class="team_logo"><span class="LG_L"></span></div>
							<p>VS</p>
							<div class="team_logo"><span class="SS_L"></span></div>
							<div class="team">
								<p class="st">2위</p>
								<p>삼성 라이온즈</p>
								<span>선발 : 윤성환</span>
							</div>
						</div>
						<ul>
							<li>2016.10.25</li>
							<li>잠실경기장</li>
						</ul>				
					</div>
				</div>
				
				<div class="dividend_w relative">
					<div class="tab01_w">
						<ul class="tab01 left">
							<li class="on"><a href="">승패</a></li>
							<li><a href="">핸디캡</a></li>
							<li><a href="">오버언더</a></li>
						</ul>
						<div class="select" style="top:0px;">
							<p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
							<ul>
								<li><a href="">풀타임</a></li>
								<li><a href="">5이닝</a></li>
								<li><a href="">1이닝</a></li>
							</ul>
						</div>
					</div>
					<table class="table_default">
						<caption></caption>
						<colgroup><col width="140px"/><col width="*"/><col width="120px"/><col width="120px"/><col width="120px"/></colgroup>
						<tr>
							<th colspan="2" class="left pl20"><span class="pl20">배당률 회사</span></th>
							<th>승</th>
							<th>패</th>
							<th>환급율</th>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_01.png" alt="" /></td>
							<td class="left"><a href="">1XBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_02.png" alt="" /></td>
							<td class="left"><a href="">188BET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_03.jpg" alt="" /></td>
							<td class="left"><a href="">32Red</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_04.jpg" alt="" /></td>
							<td class="left"><a href="">PINNACLE</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_05.jpg" alt="" /></td>
							<td class="left"><a href="">SBOBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_01.png" alt="" /></td>
							<td class="left"><a href="">1XBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_02.png" alt="" /></td>
							<td class="left"><a href="">188BET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_03.jpg" alt="" /></td>
							<td class="left"><a href="">32Red</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_04.jpg" alt="" /></td>
							<td class="left"><a href="">PINNACLE</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_05.jpg" alt="" /></td>
							<td class="left"><a href="">SBOBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_01.png" alt="" /></td>
							<td class="left"><a href="">1XBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_02.png" alt="" /></td>
							<td class="left"><a href="">188BET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_03.jpg" alt="" /></td>
							<td class="left"><a href="">32Red</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_04.jpg" alt="" /></td>
							<td class="left"><a href="">PINNACLE</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_05.jpg" alt="" /></td>
							<td class="left"><a href="">SBOBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_01.png" alt="" /></td>
							<td class="left"><a href="">1XBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_02.png" alt="" /></td>
							<td class="left"><a href="">188BET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_03.jpg" alt="" /></td>
							<td class="left"><a href="">32Red</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_04.jpg" alt="" /></td>
							<td class="left"><a href="">PINNACLE</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
						<tr>
							<td class="left pl20"><img src="/odds/image/sample/spon_05.jpg" alt="" /></td>
							<td class="left"><a href="">SBOBET</a></td>
							<td><span class="down">2.10</span></td>
							<td><span class="up">1.80</span></td>
							<td>94.7%</td>
						</tr>
					</table>
				</div>
			</div>	


 </body>
 </html>
