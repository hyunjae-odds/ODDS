<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	

		//live_onoff 라이브중계 열고닫기
/*		$(".live_onoff li:eq(0) a").click(function(){ 
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
		});*/

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


	
				<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>


				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline">LG트윈스</span></span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">LG 트윈스</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=""><a href="team_info.php">시즌 기록</a></li>
							<li class="on"><a href="schedule.php">경기 결과</a></li>
							<li class=""><a href="player.php">선수 기록</a></li>
							<li class=""><a href="situation.php">선수 현황</a></li>
							<li class=""><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active">
								<div class="team_top">
									<div class="team_logo">
										<img src="../../image/logo/LG_team.jpg" alt="" />
										<p><b class="red">64</b>승&nbsp;&nbsp;&nbsp;<b class="blue">51</b>패&nbsp;&nbsp;&nbsp;<b class="gray">3</b>타이</p>
									</div>
									<ul class="graph_ul"><!-- 순위 .st_01~11 -->
										<li>
											<div class="st_01"><span class="st">1위</span><b>0.755</b></div>
											<p>승률</p>
										</li>
										<li>
											<div class="st_03"><span class="st">3위</span><b>4.55</b></div>
											<p>방어율</p>
										</li>
										<li>
											<div class="st_01"><span class="st">1위</span><b>0.755</b></div>
											<p>타율</p>
										</li>
										<li>
											<div class="st_04"><span class="st">4위</span><b>1504</b></div>
											<p>안타</p>
										</li>
										<li>
											<div class="st_05"><span class="st">5위</span><b>182</b></div>
											<p>홈런</p>
										</li>
										<li>
											<div class="st_09"><span class="st">9위</span><b>915</b></div>
											<p>탈삼진</p>
										</li>
									</ul>
									<ul class="gray_ul">
										<li><span class="g_1">득점 (평균)</span><span class="g_2">455 (4.5점)</span><span class="g_3">5위</span></li>
										<li><span class="g_1">오버 (6.5)</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
										<li><span class="g_1">핸디캡(1.5)승</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
										<li><span class="g_1">실점 (평균)</span><span class="g_2">455 (4.5점)</span><span class="g_3">3위</span></li>
										<li><span class="g_1">언더 (6.5)</span><span class="g_2">24회</span><span class="g_3">45%</span></li>
										<li><span class="g_1">핸디캡(1.5)패</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
									</ul>
									<div class="record_10">
										<p><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></p>									<span>최근 10경기 기록</span>
										<p><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span></p>
									</div>
									<span class="clear"></span>
									<!--ul class="live_onoff">
										<li><a href="">상세기록 닫기<span class="arrow04_up"></span></a></li>
										<li class="active"><a href="">상세기록 열기<span class="arrow04_down"></span></a></li>
									</ul-->
								</div>
								<div class="pb50">
									<div class="date">
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
										<ul class="date_mn_select date_ul">
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
											<col width="80px" />
											<col width="90px" />
											<col width="50px" />
											<col width="*" />
											<col width="96px" />
											<col width="169px" />
											<col width="50px" />
											<col width="50px" />
											<col width="40px" />
											<col width="175px" />
										</colgroup>								
										<tr>
											<th><span class="up_down01 down">날짜</span><a href="" class="up_down up">내림차/오름차변경</a></th>
											<th>구장</th>
											<th>결과</th>
											<th class="right pr20">원정</th>
											<th>스코어</th>
											<th class="left pl20">홈</th>
											<th>1</th>
											<th>X</th>
											<th>2</th>
											<th>데이터</th>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class="red"><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">3:1</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td><span class="black">1.31</span></td>
											<td>2.44</td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class="red"><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">3:1</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td><span class="black">1.31</span></td>
											<td>2.44</td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>		
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class=""><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">0:0</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td>1.31</td>
											<td><span class="black">2.44</span></td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class="red"><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">3:1</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td><span class="black">1.31</span></td>
											<td>2.44</td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>		
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><a href="">LG 트윈스</a></td>
											<td><b class="score">1:3</b></td>
											<td class="left"><span class="red"><a href="team.php">NC 다이노스</a></span></td>
											<td>1.31</td>
											<td>2.44</td>
											<td><span class="black">1.78</span></td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class="red"><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">3:1</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td><span class="black">1.31</span></td>
											<td>2.44</td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>		
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.4 (수)</b></td>
											<td colspan="8" class="l_b"><span class="gray">해당 날짜에는 경기가 없습니다.</span></td>
										</tr>
										<tr>
											<td><b>10.4 (수)</b></td>
											<td colspan="8" class="l_b"><span class="gray">해당 날짜에는 경기가 없습니다.</span></td>
										</tr>
										<tr>
											<td><b>10.1 (일)</b></td>
											<td class="l_b">잠실</td>
											<td><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a></td>
											<td class="right"><span class="red"><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">3:1</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td>1.31</td>
											<td><span class="black">2.44</span></td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN2"><a href="match_full.php">경기기록</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.25 (일)</b></td>
											<td class="l_b">잠실</td>
											<td>-</td>
											<td class="right"><span class=""><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">-</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td>1.31</td>
											<td><span class="">2.44</span></td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN"><a href="match.php">매치정보</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.25 (일)</b></td>
											<td class="l_b">잠실</td>
											<td>-</td>
											<td class="right"><span class=""><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">-</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td>1.31</td>
											<td><span class="">2.44</span></td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN"><a href="match.php">매치정보</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
										<tr>
											<td><b>10.25 (일)</b></td>
											<td class="l_b">잠실</td>
											<td>-</td>
											<td class="right"><span class=""><a href="team.php">LG 트윈스</a></td>
											<td><b class="score">-</b></td>
											<td class="left"><a href="team.php">NC 다이노스</a></td>
											<td>1.31</td>
											<td><span class="">2.44</span></td>
											<td>1.78</td>
											<td class="data">
												<span>
													<span class="b_BTN"><a href="match.php">매치정보</a></span>							
													<span class="r_BTN"><a href="">전문가 의견</a></span>
													<span class="g_BTN"><a href="">블로그</a></span>	
												</span>
												<!-- 블로그팝업 -->
												<div class="g_pop" style="display:none;">
													<h3>관련 블로그 보기</h3>
													<ul>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>블로그 제목<span>블로그별명</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
												<!-- 전문가팝업 -->
												<div class="r_pop" style="display:none;">
													<h3>전문가 의견 보기</h3>
													<ul>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
														<li>
															<b>설민석<span>실전배팅전문가</span></b>
															<p>박병호의 부담감으로 인한<br />예상경기가..</p>
														</li>
													</ul>
													<div class="num">
														<span class="on"><a href="">1</a></span>
														<span><a href="">2</a></span>
														<span><a href="">3</a></span>
														<span><a href="">4</a></span>
														<span><a href="">5</a></span>
													</div>
													<div class="close"><a href="">close</a></div>
												</div>
											</td>
										</tr>
									</table>		
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