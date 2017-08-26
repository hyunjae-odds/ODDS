<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">
		$(document).ready(function(){
			$(".batting_view").click(function(){ 
				var state = $(this).siblings(".batting_pop").css("display"); 
				if(state == "none"){ 
					$(".batting_pop").slideUp(); 
					$(this).siblings(".batting_pop").slideDown(); 
					return false;
				}else{
					return false;
				}
			});

			$(".close_batting_pop").click(function(){ 
				$(this).parent().slideUp();
				return false;
			});

			// 전체 실전배팅 챠트분석 일반패널  탭메뉴
			for(var i=1;i<5;i++){		
			(function (k){
				$(".expert_menu > li.ls0" + k ).click(function(){ 
					$(".expert_menu li").removeClass("on");
					$(this).addClass("on");
					$(".expert_menu_view > li").removeClass("active");
					$(".expert_menu_view > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};


			//user - user_popup
			$("td.user a").click(function(){ 
				$(".user_popup_w").show();
				$(".user_popup").slideDown();
				$(".user_popup_bg").slideDown();
				return false;
			});
			//user - user_popup닫기
			$(".user_popup a.close").click(function(){ 
				$(".user_popup_w").slideUp();
				$(".user_popup").slideUp();
				$(".user_popup_bg").slideUp();
				return false;
			});

		});
	  </script>					
	  


			<link href="../css/expert.css" rel="stylesheet" type="text/css"/>


				<div class="expert_w">
				<div class="topTitle">
					<p>
						<span>재야의 분석</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">재야의 분석</h2>
				</div>
				<div class="expert">
					<div class="tab01_w">
						<ul class="tab01_2 expert_menu">
							<li class="ls01 on" ><a href="">전체</a></li>
							<li class="ls02"><a href="">실전배팅</a></li>
							<li class="ls03"><a href="">챠트분석</a></li>
							<li class="ls04"><a href="">일반패널</a></li>
						</ul>
					</div>
					<ul class="expert_menu_view">
						<li class="ls01_w active relative">
							<div class="select" style="top:-60px;">
								<p class="off"><span class="pp">종목 전체</span><span class="pa"></span></p>
								<ul>
									<li><a href="">종목 전체</a></li>
									<li><a href="">야구</a></li>
								</ul>
							</div>
							<table class="table_default">
								<caption></caption>
								<colgroup><col width="45px"/><col width="70px"/><col width="72px"/><col width="60px"/><col width="*"/><col width="100px"/><col width="110px"/><col width="62px"/><col width="90px"/></colgroup>
								<tr>
									<th>&nbsp;</th>
									<th>일자</th>
									<th>종목</th>
									<th>리그</th>
									<th>제목</th>
									<th>열람포인트</th>
									<th>작성자</th>
									<th>조회수</th>
									<th>추천수</th>
								</tr>
								<tr>
									<td><span class="st n01">1</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n02">2</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="gray2">무료</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n03">3</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n04">4</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n05">5</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="gray2">무료</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n06">6</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n07">7</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n08">8</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n09">9</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="gray2">무료</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td><span class="st n10">10</span></td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>-</td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>-</td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>-</td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>-</td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="gray2">무료</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>-</td>
									<td>17.04.18</td>
									<td>야구</td>
									<td>KBO</td>
									<td class="title"><a href="">[LG vs 삼성] 국야 일반승 주력 공략</a></td>
									<td><span class="red">1000 Point</span></td>
									<td class="user"><a href=""><b>마루치0412</b></a></td>
									<td>259</td>
									<td>31</td>
								</tr>
							</table>
							<div class="page_w">
								<div class="page">
									<a href="" class="prev2"><span>prev2</span></a>
									<a href="" class="prev"><span>prev</span></a>
									<a class="on" href="" >1</a>
									<a href="" >2</a>
									<a href="" >3</a>
									<a href="" >4</a>
									<a href="" >5</a>
									<a href="" class="next"><span>next</span></a>
									<a href="" class="next2"><span>next2</span></a>
								</div>
							</div>
							<div class="search_bar">
								<div class="select">
									<p class="off"><span class="pp">제목</span><span class="pa"></span></p>
									<ul>
										<li><a href="">제목</a></li>
										<li><a href="">아이디</a></li>
										<li><a href="">댓글</a></li>
									</ul>
								</div>
								<input type="text" /><input value="검색" type="submit">
							</div>
						</li>
						<li class="ls02_w">1222</li>
						<li class="ls03_w">1333</li>
						<li class="ls04_w">1444</li>
					</ul>
					<div class="user_popup_w">
						<div class="user_popup">
							<h3><b>마루치0412</b>님의 지난 분석내용</h3>
							<span class="title">[LG vs 삼성] 국야 일반승 주력 공략</span>
							<div class="list">
								<table class="table_default">
									<caption></caption>
									<colgroup><col width="75px"/><col width="48px"/><col width="95px"/><col width="*"/><col width="60px"/><col width="60px"/><col width="60px"/><col width="65px"/></colgroup>
									<tr>
										<th>날짜</th>
										<th>종목</th>
										<th>리그</th>
										<th>매치</th>
										<th>게임</th>
										<th>선택</th>
										<th>배당률</th>
										<th>결과</th>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>야구</td>
										<td>KBO</td>
										<td>LG  vs  KIA</td>
										<td>승무패</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="red">적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>축구</td>
										<td>Aus VPL U21</td>
										<td>Brisbane Olympic ..  vs   Port Melbourne Sharks SC..</td>
										<td>핸디캡</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="">미적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>야구</td>
										<td>KBO</td>
										<td>LG  vs  KIA</td>
										<td>승무패</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="red">적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>축구</td>
										<td>Aus VPL U21</td>
										<td>Brisbane Olympic ..  vs   Port Melbourne Sharks SC..</td>
										<td>핸디캡</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="">미적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>야구</td>
										<td>KBO</td>
										<td>LG  vs  KIA</td>
										<td>승무패</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="red">적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>축구</td>
										<td>Aus VPL U21</td>
										<td>Brisbane Olympic ..  vs   Port Melbourne Sharks SC..</td>
										<td>핸디캡</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="">미적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>야구</td>
										<td>KBO</td>
										<td>LG  vs  KIA</td>
										<td>승무패</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="red">적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>축구</td>
										<td>Aus VPL U21</td>
										<td>Brisbane Olympic ..  vs   Port Melbourne Sharks SC..</td>
										<td>핸디캡</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="">미적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>야구</td>
										<td>KBO</td>
										<td>LG  vs  KIA</td>
										<td>승무패</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="red">적중</span></td>
									</tr>
									<tr>
										<td>17.04.18</td>
										<td>축구</td>
										<td>Aus VPL U21</td>
										<td>Brisbane Olympic ..  vs   Port Melbourne Sharks SC..</td>
										<td>핸디캡</td>
										<td>홈승</td>
										<td>3.15</td>
										<td><span class="">미적중</span></td>
									</tr>
								</table>
							</div>
							<div class="relative">
								<h4>통산전적</h4>
								<p>재야의 분석 : <b>51G 29W 1D 21L</b><span>(승률 61%)</span>&nbsp;&nbsp;/&nbsp;&nbsp;서바이벌 : <b>51G 29W 1D 21L</b><span>(승률 61%)</span></p>
								<a class="blog_btn" href="/odds/blog/main.html" target="_blank"><span></span>블로그 바로가기</a>
								<!-- <p class="btn_w"><a href="" class="gray_btn">취소하기</a><a href="/odds/blog/main.html" target="_blank" class="red_btn">글 읽기<span>(글읽기 선택시 포인트가 소모됩니다.)</span></a></p>
								<span class="not">※ 글 읽기에 <b>소모된 포인트</b>는 결제후 재화의 가치하락으로 인하여 <b>환불이 불가</b>합니다.</span> -->
							</div>
							<a href="" class="close">닫기</a>
						</div>
						<div class="user_popup_bg">
						</div>
					</div>
				</div>
			</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
