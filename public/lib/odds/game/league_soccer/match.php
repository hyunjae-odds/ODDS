<?php 
include("../head_up.php");
include("../head.php");
?>


<script type="text/javascript">
	
	//textarea_box input
		$(document).ready(function(){ 
			$('#opinion_text').click(function(){ 
				var state = $('.opinion_text').css('display'); 
				if(state == 'none'){ 
					$('#opinion_text').removeClass('on');
				}else{
					$('#opinion_text').addClass('on');
				}
			});
		}); 





	
	$(document).ready(function(){ 



		//matchTab
		$(".title li:eq(0) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r1").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".title li:eq(1) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r2").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});


		//game_league _ 상단리그종류메뉴
		$(".other_btn").click(function(){ 
			$(this).parents().find(".other_view").slideToggle(); //내용 클릭하면 이동
			return false;
		});

		//line_pop 오픈
		$(".line_btn a").click(function(){ 
			$(this).parent().parent().siblings(".line_pop").slideDown(); 
			return false;
		});
		//line_pop 닫기
		$(".line_pop .close_btn a").click(function(){ 
			$(this).parent().parent(".line_pop").slideUp(); 
			return false;
		});


		$(".before_btn").click(function(){ 
			$(".opp01 .before").slideToggle(); 
			return false;
		});

		
		
	});	


	

	  </script>




							
			<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>

							
			<div class="Match_w">		
				<div class="match KBO">
					<div class="title_bar">
						<p>축구 - 잉글랜드 - 프리미어리그 -</p>
						<div>
							<a href="" class="other_btn">래스터시티FC  vs  맨체스터 Utd<span></span></a>
							<ul class="other_view">
								<li><a href="">프리미어리그</a></li>
								<li><a href="">챔피언쉽</a></li>
								<li><a href="">리그 1</a></li>
								<li><a href="">리그 2</a></li>
								<li><a href="">바나라마 내셔널리그</a></li>
								<li><a href="">바나라마 내셔널리그 남부</a></li>
								<li><a href="">바나라마 내셔널리그 북부</a></li>
								<li><a href="">서던 프리미어 리그</a></li>
								<li><a href="">노던 프리미어 리그</a></li>
								<li><a href="">라이먼 리그</a></li>
								<li><a href="">프리미어 리그 2</a></li>
								<li><a href="">FA 컵</a></li>
								<li><a href="">EFL 컵</a></li>
								<li><a href="">프리미어 리그 컵</a></li>
							</ul>
						</div>
					</div>
					<div class="score_bar">
						<div>
							<div class="team">
								<p class="st">1위</p>
								<p>레알 마드리드</p>
							</div>
							<div class="team_logo"><span class="LG_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
							<p>VS</p>
							<div class="team_logo"><span class="SS_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
							<div class="team">
								<p class="st">2위</p>
								<p>바르셀로나</p>
							</div>
						</div>
						<ul>
							<li>2016.10.25</li>
							<li>잠실경기장</li>
						</ul>				
					</div>
				</div>
				<div class="matchTab">
					<ul class="result">
						<li id="r1" class="on">
							<div class="opinion">
								<div class="graph">
									<div class="total bb">
										<span class="left_g">55%</span>
										<div class="left_g">	
											<div><div style="width:55%"><p><span>415명</span></p></div></div>										
										</div>
										<p><b>승무패 의견일치</b></p>
										<div class="right_g">	
											<div><div style="width:45%"><p><span>375명</span></p></div></div>		
										</div>
										<span class="right_g">45%</span>
									</div>

									<h4>양팀 시즌데이터 비교</h4>
									<div class="result_btn_div">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">
											<b>6/4</b>
											<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a>
										</div>
										<p>최근 6경기</p>
										<div class="right_g">	
											<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a>
											<b>4/6</b>
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="mt15">
										<span class="left_g">1위</span>
										<div class="left_g">
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<p>리그 순위</p>
										<div class="right_g">	
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="mt15 bb">
										<span class="left_g">50%</span>
										<div class="left_g">
											<div><b class="aa">Over 21  /  Under 21</b></div>
										</div>
										<div class="select_p">
											<div class="select" style="">
												<p class="off"><span class="pp">2.5</span><span class="pa"></span></p>
												<ul>
													<li><a href="">1.5</a></li>
													<li><a href="">2.5</a></li>
													<li><a href="">3.5</a></li>
												</ul>
											</div>
										</div>
										<div class="right_g">	
											<div><b class="aa">Over 21  /  Under 21</b></div>
										</div>
										<span class="right_g">50%</span>
									</div>

									<div class="yellowG mt20">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>15승 2무 1패</span></div></div>										
										</div>
										<p>홈</p>
										<div class="right_g">	
											<div><div style="width:50%"><span>15승 2무 1패</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>15승 2무 1패</span></div></div>										
										</div>
										<p>원정</p>
										<div class="right_g">	
											<div><div style="width:50%"><span>15승 2무 1패</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>75</span></div></div>										
										</div>
										<p>득점</p>
										<div class="right_g">	
											<div><div style="width:76%"><span>55</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">5위</span>
										<div class="left_g">	
											<div><div style="width:48%"><span>35</span></div></div>										
										</div>
										<p>실점</p>
										<div class="right_g">	
											<div><div style="width:48%"><span>70</span></div></div>		
										</div>
										<span class="right_g">3위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:42%"><span>+40</span></div></div>										
										</div>
										<p>계차</p>
										<div class="right_g">	
											<div><div style="width:42%"><span>-15</span></div></div>			
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:65%"><span>65%</span></div></div>										
										</div>
										<p>점유율</p>
										<div class="right_g">	
											<div><div style="width:45%"><span>45%</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG bb">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>150</span></div></div>										
										</div>
										<p>유효슈팅</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>100</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>

									<h4>최근 상대전적</h4>
									<div class="blueG">
										<span class="left_g">33%</span>
										<div class="left_g">	
											<div><div style="width:60%"><span>2승</span></div></div>										
										</div>
										<p><span class="cc">2무</span></p>
										<div class="right_g">	
											<div><div style="width:60%"><span>2승</span></div></div>		
										</div>
										<span class="right_g">33%</span>
									</div>
									<div class="blueG">
										<span class="left_g">60%</span>
										<div class="left_g">	
											<div><div style="width:50%"><span>Over 4</span></div></div>										
										</div>
										<p>
											<span class="underline">2.5</span>
										</p>
										<div class="right_g">	
											<div><div style="width:50%"><span>Under 2</span></div></div>		
										</div>
										<span class="right_g">60%</span>
									</div>		
									<div class="blueG">
										<span class="left_g">5.65</span>
										<div class="left_g">	
											<div><div style="width:60%"><span>35</span></div></div>										
										</div>
										<p>득점/평균</p>
										<div class="right_g">	
											<div><div style="width:60%"><span>35</span></div></div>		
										</div>
										<span class="right_g">5.65</span>
									</div>		
									<div class="blueG">
										<span class="left_g">55%</span>
										<div class="left_g">	
											<div><div style="width:43%"><span>&nbsp;</span></div></div>										
										</div>
										<p>점유율</p>
										<div class="right_g">	
											<div><div style="width:43%"><span>&nbsp;</span></div></div>		
										</div>
										<span class="right_g">45%</span>
									</div>	
									<div class="blueG">
										<span class="left_g">35</span>
										<div class="left_g">	
											<div><div style="width:43%"><span>&nbsp;</span></div></div>										
										</div>
										<p>유효슈팅</p>
										<div class="right_g">	
											<div><div style="width:43%"><span>&nbsp;</span></div></div>		
										</div>
										<span class="right_g">25</span>
									</div>	
								</div>
							</div>
							
							<div class="match_w">
								<div class="relative">
									<h3 class="center">최근 상대전적</h3>
									<div class="select" style="right:108px;">
										<p class="off"><span class="pp">승무패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승무패</a></li>
											<li><a href="">O/U</a></li>
											<li><a href="">핸디캡</a></li>
										</ul>
									</div>
									<div class="select" style="width:101px">
										<p class="off"><span class="pp">6경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">6경기</a></li>
											<li><a href="">-</a></li>
										</ul>
									</div>
								</div>
								<table class="table_default league_table01 league_table01_1">
									<caption></caption>
									<colgroup>
										<col width="80px"/>
										<col width="*"/>
										<col width="85px"/>
										<col width="90px"/>
										<col width="85px"/>
										<col width="80px"/>
										<col width="55px"/>
										<col width="65px"/>
									</colgroup>
									<tr>
										<th>날짜</th>
										<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>
										<th>결과</th>					
										<th>승</th>	
										<th>무</th>	
										<th>패</th>
										<th>B’s</th>
										<th>DATA</th>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td>3.15</td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td>3.15</td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td>3.15</td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
								</table>
								<div class="relative">
									<h3 class="center">홈팀 - 최근경기결과</h3>
									<div class="select" style="right:108px;">
										<p class="off"><span class="pp">O/U</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승무패</a></li>
											<li><a href="">O/U</a></li>
											<li><a href="">핸디캡</a></li>
										</ul>
									</div>
									<div class="select" style="width:101px">
										<p class="off"><span class="pp">6경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">6경기</a></li>
											<li><a href="">-</a></li>
										</ul>
									</div>
								</div>
								<table class="table_default league_table01">
									<caption></caption>
									<colgroup>
										<col width="80px"/>
										<col width="*"/>
										<col width="85px"/>
										<col width="90px"/>
										<col width="85px"/>
										<col width="80px"/>
										<col width="55px"/>
										<col width="65px"/>
									</colgroup>
									<tr>
										<th>날짜</th>
										<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>
										<th>스코어</th>					
										<th>기준</th>	
										<th>오버</th>	
										<th>언더</th>
										<th>B’s</th>
										<th>DATA</th>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">2.5</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td colspan="8" class="result_td">
											<b>홈팀 최근기록
												<span class="pl15">
													<a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>5
													<a class="result_btn ml10 mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>5
													<span class="graybtn ml10 mr10">득</span>45
													<span class="graybtn ml10 mr10">실</span>40
													<span class="graybtn ml10 mr10">득/실</span>9.4
												</span>
											</b>
										</td>
									</tr>
								</table>
								<div class="relative">
									<h3 class="center">원정팀 - 최근경기결과</h3>
									<div class="select" style="right:108px;">
										<p class="off"><span class="pp">핸디캡</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승무패</a></li>
											<li><a href="">O/U</a></li>
											<li><a href="">핸디캡</a></li>
										</ul>
									</div>
									<div class="select" style="width:101px">
										<p class="off"><span class="pp">6경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">6경기</a></li>
											<li><a href="">-</a></li>
										</ul>
									</div>
								</div>
								<table class="table_default league_table01">
									<caption></caption>
									<colgroup>
										<col width="80px"/>
										<col width="*"/>
										<col width="85px"/>
										<col width="90px"/>
										<col width="85px"/>
										<col width="80px"/>
										<col width="55px"/>
										<col width="65px"/>
									</colgroup>
									<tr>
										<th>날짜</th>
										<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>
										<th>스코어</th>					
										<th>기준</th>	
										<th>승</th>	
										<th>패</th>
										<th>B’s</th>
										<th>DATA</th>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">-0.5</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">-0.75</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">-1</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">-1.25</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
										<td><b class="score red">8<span class="colon">:</span>7</b></td>
										<td><span class="underline">+1.5</span></td>
										<td><span class="graybox">1.93</span></td>
										<td>3.15</td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td>06.01</td>
										<td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" onfocus="this.blur();">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
										<td><b class="score red">2<span class="colon">:</span>7</b></td>
										<td><span class="underline">+0.75</span></td>
										<td>3.15</td>
										<td><span class="graybox">1.93</span></td>
										<td>51</td>
										<td><span class="b_BTN4"><a href="/odds/game/league_soccer/match_full.php">경기결과</a></span></td>
									</tr>
									<tr>
										<td colspan="8" class="result_td">
											<b>원정팀 최근기록
												<span class="pl15">
													<a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>5
													<a class="result_btn ml10 mr10" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>5
													<span class="graybtn ml10 mr10">득</span>45
													<span class="graybtn ml10 mr10">실</span>40
													<span class="graybtn ml10 mr10">득/실</span>9.4
												</span>
											</b>
										</td>
									</tr>
								</table>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="cheer">
					<h3 class="noBorder">오늘의 승리팀 응원하기</h3>
					<div class="teams">
						<div class="left">
							<div class="box_w">
								<div class="c_logo"><span class="LG_L"></span></div>
								<div class="box">	
									<div>
										<h3>LG 트윈스</h3>
										<p>건전한 응원문화를 함께 만들어 갑시다.</p>				
									</div>
								</div>
								<a href="" class="cheer_btn">응원하기</a>
							</div>
							<div class="graph_w">
								<div class="graph">
									<div style="width:60%"><b>40115</b></div>
								</div>
								<span>60%</span>
							</div>
						</div>
						<div class="right">
							<div class="box_w">
								<div class="c_logo"><span class="samsung_L"></span></div>
								<div class="box">
									<div>
										<h3>삼성 라이온즈</h3>
										<p>건전한 응원문화를 함께 만들어 갑시다.</p>				
									</div>	
								</div>
								<a href="" class="cheer_btn">응원하기</a>
							</div>
							<div class="graph_w">
								<div class="graph">
									<div style="width:40%"><b>40115</b></div>
								</div>
								<span>40%</span>
							</div>
						</div>
						<div class="center"><span class="KBO_bb">KBO</span></div>
					</div>
					<p>응원하기는 경기마다 1인당 1번씩만 가능합니다. 여러분이 응원하시는 모든 팀이 승리하기를 기원합니다.</p>
					<div class="comment">
						<ul>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">0</a></p>
									<p class="bad"><a href="">0</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">123123123</a></p>
									<p class="bad"><a href="">555</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">22</a></p>
									<p class="bad"><a href="">23123</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">123</a></p>
									<p class="bad"><a href="">234234234</a></p>
								</div>
							</li>
						</ul>
					</div>
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
					<div class="textarea_box">
						<div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="">입력</a></div>
						<p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
					</div>
				</div>
			</div>	


			
<?php 
include("../footer.php");
?>


 </body>
</html>
