<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	

		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});


		//live_onoff 라이브중계 열고닫기
		$(".live_onoff li:eq(0) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".team_top > .gray_ul").slideUp(); 
			$(".team_top > .record_10").slideUp(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});
		$(".live_onoff li:eq(1) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".team_top > .gray_ul").slideDown(); 
			$(".team_top > .record_10").slideDown(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});


		//date
		$(".date_num").click(function(){ 
			var state = $(this).next().css('display'); 
			if(state == 'none'){ 
				$(this).addClass("on");			
				$(this).siblings().removeClass("on");
				$(this).parent().find(".date_ul").slideUp();
				$(this).next().slideDown();
				return false;
			}else{
				$(this).next().slideUp();
				return false;
			}

		});

	});	


 </script>


	
				<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>



				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 축구 - 잉글랜드 - 프리미어리그 - <span class="underline">래스터 시티 FC</span></span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">래스터 시티 FC</h2>
					</div>
					<div class="game_w">
						<ul class="tab_view01 gameMain_view">
							<li class="active result02">
								<div class="player_info">
									<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt="" /></div>
									<div>
										<h3 class="noBorder">기예르모 바렐라<span>Guillermo Varela Olivera</span></h3>
										<ul>
											<li><span>생년월일 : </span>1974년 10월 25일</li>
											<li><span>등번호 : </span>No.30</li>
											<li><span>신장/체중 : </span>185cm / 85Kg</li>
											<li><span>포지션 : </span>수비수</li>
											<li><span>국적 : </span>우르과이</li>
											<li><span>상세포지션 : </span>풀백</li>
											<li><span>소속팀 : </span>레스터시티 FC</li>
											<li><span>위치 : </span>오른쪽</li>
											<li><span>데뷔 : </span>1999년도 / 맨체스터유나이티드</li>
											<li><span>입단날짜 : </span>1999년도 / 맨체스터유나이티드</li>
										</ul>										
									</div>
									<span class="clear"></span>
								</div>
								<div class="player_info2">
									<h3 class="noBorder">출전 경기 기록</h3>
									<div class="date right" style="">
										<a href="" class="btn_prev" title="이전달">이전달</a>
										<a href="" class="date_yr date_num">2016</a>
										<ul class="date_yr_select date_ul">
											<li><a href="">2008</a></li>
											<li><a href="">2009</a></li>
											<li><a href="">2010</a></li>
											<li><a href="">2011</a></li>
											<li><a href="">2012</a></li>
											<li><a href="">2013</a></li>
											<li><a href="">2014</a></li>
											<li><a href="">2015</a></li>
											<li><a href="">2016</a></li>
										</ul>
										<span>.</span>
										<a href="" class="date_mn date_num">08</a>
										<ul class="date_mn_select date_ul" style="width:34px;">
											<li><a href="">03</a></li>
											<li><a href="">04</a></li>
											<li><a href="">05</a></li>
											<li><a href="">06</a></li>
											<li><a href="">07</a></li>
											<li><a href="">08</a></li>
											<li><a href="">09</a></li>
											<li><a href="">10</a></li>
											<li><a href="">11</a></li>
										</ul>
										<input value="이동" type="submit" class="btn_nv_mn">	
										<a href="" class="btn_next" title="다음달">다음달</a>
										<div class="clear"></div>
									</div>
									<table class="table_default">
										<caption></caption>
										<colgroup>
											<col width="153px"/>
											<col width="106px"/>
											<col width="*"/>
											<col width="67px"/>
											<col width="*"/>
											<col width="56px"/>
											<col width="83px"/>
											<col width="76px"/>
											<col width="63px"/>
											<col width="73px"/>
										</colgroup>
										<tr>
											<th>리그</th>
											<th>경기 날짜</th>
											<th>홈팀</th>
											<th>&nbsp;</th>
											<th>원정팀</th>
											<th>득점</th>
											<th>어시스트</th>
											<th>자살골</th>
											<th>경고</th>
											<th>퇴장</th>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
										<tr>
											<td>잉글랜드 프리미어</td>
											<td>2016.08.24</td>
											<td>아틀레티코 마드리드</td>
											<td class="score">2:1</td>
											<td>아틀레티코 마드리드</td>
											<td>1</td>
											<td>1</td>
											<td>2</td>
											<td>2</td>
											<td>1</td>
										</tr>
									</table>
								</div>
								<div class="player_info2">
									<h3 class="noBorder">선수 소개</h3>
									<div class="cont">기예르모 바렐라(Guillermo Varela, 1993년 3월 24일 ~ )는 우루과이의 축구 선수로, 페냐롤에서 2013년 잉글랜드 프리미어리그의 맨체스터 유나이티드로 <br />
									이적하였다.<br /><br />

									이후 2014년 레알 마드리드 카스티야로 임대되었으며, 2015년 복귀해 웨스트햄 유나이티드 와의 경기에서 데뷔전을 가졌다.<br /><br />

									그 후, 바렐라는 2016 시즌을 앞두고 아인트라흐트 프랑크푸르트로 1년 임대를 떠났다.</div>
								</div>
								<div class="player_info_list_w">
									<div class="player_info_list">
										<ul>
											<li><a href=""><img src="../../image/game/img_player01.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player02.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player03.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player04.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player05.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player06.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player07.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player08.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player03.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player07.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player06.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player02.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player03.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player06.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player04.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player05.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player03.jpg" alt="" /></a></li>
											<li><a href=""><img src="../../image/game/img_player07.jpg" alt="" /></a></li>
										</ul>
										<span class="clear"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>

					
				</div>
							
			
<?php 
include("../footer.php");
?>


 </body>
 </html>