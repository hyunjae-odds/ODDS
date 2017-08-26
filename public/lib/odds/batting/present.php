<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">

		$(document).ready(function(){ 			
			
			//배팅 내역 자세히보기
			$(".detail_view").click(function(){ 
				var state = $(this).parents().next(".detail").css('display'); 
				if(state == 'none'){ 
					$(this).parents().find(".detail").slideUp();
					$(this).parents(".present_table_w").find(".detail").slideDown(); 
					return false;
				}else{
					$(this).parents(".present_table_w").find(".detail").slideUp();
					return false;
				}
			});
		});

	  </script>					
	  


			<link href="../css/batting.css" rel="stylesheet" type="text/css"/>


				<div class="batting_w">
					<div class="topTitle">
						<p>
							<span>배팅경연</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<img src="../image/batting/visual_main.jpg" alt="2017 SPONAVI BETTING EVENT!  누구나 1억원의 주인공이 될 수 있습니다.  이벤트 기간 : 2017년 5월 1일 ~ 2017년 12월 10일까지" />
					</div>
					<div class="batting">
						<div class="relative batting_top">
							<h2 class="tit01">배팅내역</h2>
							<div class="tab01_w">
								<ul class="tab01">
									<li class=""><a href="main.php">배팅경연</a></li>
									<li class=""><a href="ranking.php">순위정보</a></li>
									<li class=""><a href="rule.php">룰 안내</a></li>
									<li class="on"><a href="present.php">배팅내역</a></li>
								</ul>
							</div>
						</div>
						<div class="present_1">
							<!--div class="left_div">
								<img src="../image/game/pic04.jpg" alt="" />
								<a href="">블로그 보기</a>
							</div-->
							<div class="right_div">
								<table class="table_default">
									<caption></caption>
									<colgroup></colgroup>
									<tr>
										<th>순위</th>
										<th>아이디</th>
										<th>총전적</th>
										<th>수익률</th>
										<th>적중률</th>
										<th>보유포인트</th>
										<th>최근 10경기</th>
									</tr>
									<tr>
										<td>1414</td>
										<td><b><a href="/odds/blog/main.html" target="_blank">스포네비</a></b></td>
										<td>141G 70W 1D 70L</td>
										<td>50.00%</td>
										<td>50.00%</td>
										<td>21457 point</td>
										<td>4W 1D 2L</td>
									</tr>
								</table>
								<div class="tab01_w">
									<ul class="tab01_2">
										<li class="on"><a href="">종목별 전적</a></li>
										<li><a href="">옵션별 전적</a></li>
									</ul>
								</div>
								<table class="table_default">
									<caption></caption>
									<colgroup></colgroup>
									<tr>
										<th>종목</th>
										<th>전적</th>
										<th>수익률</th>
										<th>적중률</th>
										<th>획득포인트</th>
										<th>순위</th>
										<th>최근 10경기</th>
									</tr>
									<tr>
										<td>축구</td>
										<td>141G  70W  1D  70L</td>
										<td>50.00%</td>
										<td>50.00%</td>
										<td>21457 point</td>
										<td>1414</td>
										<td>4W  1D  2L</td>
									</tr>
									<tr>
										<td>야구</td>
										<td>141G  70W  1D  70L</td>
										<td>50.00%</td>
										<td>50.00%</td>
										<td>21457 point</td>
										<td>1414</td>
										<td>4W  1D  2L</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="present_2">
							<h3 class="noBorder">배팅 내역</h3>
							<table class="table_default">
								<caption></caption>
								<colgroup>
									<col width="117px"/>
									<col width="83px"/>
									<col width="63px"/>
									<col width="220px"/>
									<col width="187px"/>
									<col width="*"/>
									<col width="128px"/>
								</colgroup>
								<tr>
									<th>일시</th>
									<th>&nbsp;</th>
									<th>조합수</th>
									<th>배당률</th>
									<th>배팅포인트</th>
									<th>예상당첨포인트</th>
									<th>&nbsp;</th>
								</tr>
							</table>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="220px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><b>1.44</b></td>
										<td>500 point</td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="85px"/><col width="150px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정 승</span></td>
											<td><b>1.88</b></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="220px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><b>1.44</b></td>
										<td>500 point</td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="85px"/><col width="150px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정 승</span></td>
											<td><b>1.88</b></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="220px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><b>1.44</b></td>
										<td>500 point</td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="85px"/><col width="150px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정 승</span></td>
											<td><b>1.88</b></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="220px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><b>1.44</b></td>
										<td>500 point</td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="85px"/><col width="150px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정 승</span></td>
											<td><b>1.88</b></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="220px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><b>1.44</b></td>
										<td>500 point</td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="85px"/><col width="150px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정 승</span></td>
											<td><b>1.88</b></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="present_2 present_2_1">
							<h3 class="noBorder">배팅 결과</h3>
							<table class="table_default">
								<caption></caption>
								<colgroup>
									<col width="117px"/>
									<col width="83px"/>
									<col width="63px"/>
									<col width="85px"/>
									<col width="135px"/>
									<col width="187px"/>
									<col width="*"/>
									<col width="128px"/>
								</colgroup>
								<tr>
									<th>일시</th>
									<th>&nbsp;</th>
									<th>조합수</th>
									<th>결과</th>
									<th>배당률</th>
									<th>획득포인트</th>
									<th>예상당첨포인트</th>
									<th>&nbsp;</th>
								</tr>
							</table>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="g_box">미적중</span></td>
										<td><b>1.64</b></td>
										<td><b class="blue">-1500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="g_box">미적중</span></td>
										<td><b>1.64</b></td>
										<td><b class="blue">-1500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="g_box">미적중</span></td>
										<td><b>1.64</b></td>
										<td><b class="blue">-1500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>
							<div class="present_table_w">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="117px"/>
										<col width="83px"/>
										<col width="63px"/>
										<col width="85px"/>
										<col width="135px"/>
										<col width="187px"/>
										<col width="*"/>
										<col width="128px"/>
									</colgroup>
									<tr>
										<td>2017.11.26</td>
										<td><b>GAME 1</b></td>
										<td>3</td>
										<td><span class="r_box">적중</span></td>
										<td><b>1.44</b></td>
										<td><b class="red">+2500 point</b></td>
										<td>31557 point</td>
										<td><a href="" class="detail_view">자세히 보기<span></span></a></td>
									</tr>
								</table>
								<div class="detail">
									<table class="table_default">
										<caption></caption>
										<colgroup><col width="115px"/><col width="57px"/><col width="87px"/><col width="*"/><col width="105px"/><col width="67px"/><col width="82px"/><col width="100px"/></colgroup>
										<tr>
											<th>일시</th>
											<th>종목</th>
											<th>옵션</th>
											<th>매치명</th>
											<th>선택</th>
											<th>배당률</th>
											<th>스코어</th>
											<th>결과</th>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>승무패</td>
											<td>레알 마드리드 vs FC 바르셀로나</td>
											<td><span>홈 승</span></td>
											<td><b>1.88</b></td>
											<td>2&nbsp;:&nbsp;3</td>
											<td><span class="g_box">미적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>핸디캡</td>
											<td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
											<td><span>원정(-1) 승</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;3</td>
											<td><span class="r_box">적중</span></td>
										</tr>
										<tr>
											<td>11.26&nbsp;&nbsp;18:00</td>
											<td>축구</td>
											<td>O/U</td>
											<td>레알베티스 vs 데포르티보 라 코루냐</td>
											<td><span>2.5 O</span></td>
											<td><b>1.88</b></td>
											<td>1&nbsp;:&nbsp;2</td>
											<td><span class="r_box">적중</span></td>
										</tr>										
									</table>
								</div>
							</div>

						</div>

					</div>

				</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
