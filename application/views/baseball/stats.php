<script type="text/javascript">


	$(document).ready(function(){ 	



		// -----  리그통계 내 Tab 시작

		//2뎁스 승무패/핸디캡/O/U
		for(var i=1;i<4;i++){		
			(function (k){
				$(".TLS > li.ls0" + k ).click(function(){ 
					$(".TLS li").removeClass("on");
					$(this).addClass("on");
					$(".LS_view_w > li").removeClass("active");
					$(".LS_view_w > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		//이닝탭
		for(var i=1;i<5;i++){		
			(function (k){
				$(".firTab > li.r_tit1_" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().find("ul li").removeClass("active");
					$(this).parent().siblings().find("ul li.ls01_"+k).addClass("active");
					return false;
				});
			}(i));
		};

		// -----  리그통계 내 Tab 끝



		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});


	});


 </script>

	
				<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>

				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 대한민국</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">2017 KBO</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=""><a href="/baseball/league_info/">리그정보</a></li>
							<li class=""><a href="/baseball/result/">경기 결과</a></li>
							<li class="on "><a href="/baseball/stats/">리그 통계</a></li>
							<li class=""><a href="/baseball/team_record/">팀 기록</a></li>
							<li class=""><a href="/baseball/player_record/">선수 기록</a></li>
							<li class=""><a href="/baseball/score/">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="s4 active" style="padding-top:40px;">
								<div class="tab01_w">
									<ul class="tab01_2 TLS">
										<li class="on ls01"><a href="">승패</a></li>
										<li class="ls02"><a href="">핸디캡</a></li>
										<li class="ls03"><a href="">O/U</a></li>
									</ul>
								</div>
								<ul class="LS_view_w">
									<li class="active ls01_w"><!--  승패  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">전체 결과</a></li>
														<li class="r_tit1_2"><a href="">5이닝 결과</a></li>
														<li class="r_tit1_3"><a href="">1이닝 결과</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 전체 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>패</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>마진</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>두산 베어스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>2</b></span></td>
																		<td>NC 다이노스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>3</b></span></td>
																		<td>넥센 히어로즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>4</b></span></td>
																		<td>LG 트윈스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>5</b></span></td>
																		<td>KIA 타이거즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">2017 KBO 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup></colgroup>
																	<tr>
																		<th class="left pl20">리그 승률</th>
																		<th>경기수</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 승리</td>
																		<td>125</td>
																		<td>57%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 승리</td>
																		<td>60</td>
																		<td>35%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">타이</td>
																		<td>65</td>
																		<td>25%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>원정승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>득점마진 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>득점마진 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>최근연승 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연승</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>최근연패 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연패</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
															<li class="ls01_2 "><!-- 5이닝 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>패</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>마진</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>두산 베어스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>2</b></span></td>
																		<td>NC 다이노스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>3</b></span></td>
																		<td>넥센 히어로즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>4</b></span></td>
																		<td>LG 트윈스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>5</b></span></td>
																		<td>KIA 타이거즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">5이닝 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup></colgroup>
																	<tr>
																		<th class="left pl20">리그 승률통계</th>
																		<th>경기수</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 승리</td>
																		<td>125</td>
																		<td>57%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 승리</td>
																		<td>60</td>
																		<td>35%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">타이</td>
																		<td>65</td>
																		<td>25%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>원정승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>득점마진 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>득점마진 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>최근연승 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연승</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>최근연패 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연패</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
															<li class="ls01_3 "><!-- 1이닝 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>패</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>마진</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>두산 베어스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>2</b></span></td>
																		<td>NC 다이노스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>3</b></span></td>
																		<td>넥센 히어로즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>4</b></span></td>
																		<td>LG 트윈스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>5</b></span></td>
																		<td>KIA 타이거즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">1이닝 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup></colgroup>
																	<tr>
																		<th class="left pl20">리그 승률통계</th>
																		<th>경기수</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 승리</td>
																		<td>125</td>
																		<td>57%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 승리</td>
																		<td>60</td>
																		<td>35%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">타이</td>
																		<td>65</td>
																		<td>25%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>무승부 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승무패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>최근 무승부 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연승</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
														</ul>
													</div>
												</li>
											</ul>		
										</div>
									</li>
									<li class="ls02_w"><!--  핸디캡  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">전체 결과</a></li>
														<li class="r_tit1_2"><a href="">5이닝 결과</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 전체 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1"><a href="">1</a></li>
																	<li class="ls01_tab_2 on"><a href="">1.5</a></li>
																	<li class="ls01_tab_3"><a href="">2.0</a></li>
																	<li class="ls01_tab_3"><a href="">2.5</a></li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>패</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>마진</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>두산 베어스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>2</b></span></td>
																		<td>NC 다이노스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>3</b></span></td>
																		<td>넥센 히어로즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>4</b></span></td>
																		<td>LG 트윈스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>5</b></span></td>
																		<td>KIA 타이거즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">2017 KBO 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup></colgroup>
																	<tr>
																		<th class="left pl20">핸디캡 승률통계</th>
																		<th>경기수</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20"> 홈경기 (1.5)승리</td>
																		<td>125</td>
																		<td>57%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 (1.5)승리</td>
																		<td>60</td>
																		<td>35%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">타이</td>
																		<td>65</td>
																		<td>25%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>핸디캡 (1) 홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>핸디캡 (1) 원정승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div><h4>핸디캡 (1.5) 홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>핸디캡 (1.5) 원정승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>핸디캡 (1.5) 최근연승 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연승</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>핸디캡 (1.5) 최근연패 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연패</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
															<li class="ls01_2 "><!-- 5이닝 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1 on"><a href="">0.5</a></li>
																	<li class="ls01_tab_2 "><a href="">1.0</a></li>
																	<li class="ls01_tab_3"><a href="">1.5</a></li>
																	<li class="ls01_tab_3"><a href="">0.5</a></li>
																	<li class="ls01_tab_3"><a href="">1.5</a></li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>패</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>마진</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>두산 베어스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>2</b></span></td>
																		<td>NC 다이노스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>3</b></span></td>
																		<td>넥센 히어로즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>4</b></span></td>
																		<td>LG 트윈스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>5</b></span></td>
																		<td>KIA 타이거즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>11</td>
																		<td>0.657</td>
																		<td>11</td>
																		<td>11</td>
																		<td>11</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">5이닝 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup></colgroup>
																	<tr>
																		<th class="left pl20">핸디캡 0.5 리그통계</th>
																		<th>경기수</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 승리</td>
																		<td>125</td>
																		<td>57%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 승리</td>
																		<td>60</td>
																		<td>35%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">타이</td>
																		<td>65</td>
																		<td>25%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>핸디캡 (0.5) 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>핸디캡 (1.5) 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
																		<li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
																	</ul></div>
																	<div>
																		<h4>핸디캡 (0.5) 최근연승 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연승</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연승</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>핸디캡 (0.5) 최근연패 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">14연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">12연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">7연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">6연패</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">4연패</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
														</ul>
													</div>
												</li>
											</ul>		
										</div>
									</li>
									<li class="ls03_w"><!--  O/U  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">전체 결과</a></li>
														<li class="r_tit1_2"><a href="">5이닝 결과</a></li>
														<li class="r_tit1_3"><a href="">1이닝 결과</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 전체 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1"><a href="">8.5</a></li>
																	<li class="ls01_tab_2 on"><a href="">9.5</a></li>
																	<li class="ls01_tab_3"><a href="">10.5</a></li>
																</ul>
																<ul class="r_tit3">
																	<li><span class="plusL">plus</span> Over</li>
																	<li><span class="minusL">minus</span> Under</li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>오버</th>
																		<th>언더</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>경기당</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><b>1</b></td>
																		<td>두산 베어스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>2</b></td>
																		<td>NC 다이노스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>3</b></td>
																		<td>넥센 히어로즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>4</b></td>
																		<td>LG 트윈스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>5</b></td>
																		<td>KIA 타이거즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">2017 KBO 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">득점 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">전체경기 득점</td>
																		<td>125</td>
																		<td>2.71</td>
																		<td>100%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 득점</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55.0%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 득점</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45.0%</td>
																	</tr>
																</table>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">오버/언더 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">오버 9.5</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">언더 9.5</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>9.5오버 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div><h4>9.5언더 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div>
																		<h4>9.5오버 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">ING..</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">14Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">12Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">7Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">6Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">4Over</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>9.5언더 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연속</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">14연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">12연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">7연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">6연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">4연속</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
															<li class="ls01_2 "><!-- 5이닝 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1 "><a href="">5.0</a></li>
																	<li class="ls01_tab_2 on"><a href="">5.5</a></li>
																	<li class="ls01_tab_3"><a href="">6.0</a></li>
																</ul>
																<ul class="r_tit3">
																	<li><span class="plusL">plus</span> Over</li>
																	<li><span class="minusL">minus</span> Under</li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>오버</th>
																		<th>언더</th>
																		<th>타이</th>
																		<th>득:실</th>
																		<th>경기당</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><b>1</b></td>
																		<td>두산 베어스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>2</b></td>
																		<td>NC 다이노스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>3</b></td>
																		<td>넥센 히어로즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>4</b></td>
																		<td>LG 트윈스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>5</b></td>
																		<td>KIA 타이거즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>5</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">5이닝 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">득점 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">5이닝 득점</td>
																		<td>125</td>
																		<td>2.71</td>
																		<td>100%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">홈경기 득점</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55.0%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">원정경기 득점</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45.0%</td>
																	</tr>
																</table>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">오버/언더 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">오버 5.5</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">언더 5.5</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>5.5오버 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div><h4>5.5언더 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div>
																		<h4>5.5오버 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">ING..</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">14Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">12Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">7Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">6Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">4Over</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>5.5언더 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연속</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">14연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">12연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">7연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">6연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">4연속</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
															<li class="ls01_3 "><!-- 1이닝 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1 on"><a href="">0.5</a></li>
																	<li class="ls01_tab_2 "><a href="">1.5</a></li>
																</ul>
																<ul class="r_tit3">
																	<li><span class="plusL">plus</span> Over</li>
																	<li><span class="minusL">minus</span> Under</li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 15경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																		<li class=""><a href="">최근 30경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="66px"/>
																		<col width="270px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>오버</th>
																		<th>언더</th>
																		<th>득:실</th>
																		<th>경기당</th>
																		<th>최근 10경기</th>
																	</tr>
																	<tr>
																		<td><b>1</b></td>
																		<td>두산 베어스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>2</b></td>
																		<td>NC 다이노스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>3</b></td>
																		<td>넥센 히어로즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>4</b></td>
																		<td>LG 트윈스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>5</b></td>
																		<td>KIA 타이거즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>SK 와이번스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>한화 이글스</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>롯데 자이언트</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>삼성 라이온즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>KT 위즈</td>
																		<td>26</td>
																		<td>13/50%</td>
																		<td>13/50%</td>
																		<td>48:29</td>
																		<td>0.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">1이닝 리그요약</h3>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">득점 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">1이닝 득점</td>
																		<td>125</td>
																		<td>2.71</td>
																		<td>100%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">1회말 득점</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55.0%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">1회초 득점</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45.0%</td>
																	</tr>
																</table>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">오버/언더 0.5 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">오버 0.5</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">언더 0.5</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45%</td>
																	</tr>
																</table>
																<table class="table_default mb10">
																	<caption></caption>
																	<colgroup>
																		<col width="*"/><col width="175px"/><col width="175px"/><col width="155px"/>
																	</colgroup>
																	<tr>
																		<th class="left pl20">오버/언더 1.5 통계</th>
																		<th>경기수</th>
																		<th>경기당</th>
																		<th>확률</th>
																	</tr>
																	<tr>
																		<td class="left pl20">오버 1.5</td>
																		<td>65</td>
																		<td>2.95</td>
																		<td>55%</td>
																	</tr>
																	<tr>
																		<td class="left pl20">언더 1.5</td>
																		<td>59</td>
																		<td>2.45</td>
																		<td>45%</td>
																	</tr>
																</table>
																<div class="TOP5">
																	<div><h4>0.5오버 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div><h4>0.5언더 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">경기당</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">124</p><p class="top_s3">2.71</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">59</p><p class="top_s3">2.45</p><p class="top_g3">65.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">55</p><p class="top_s3">2.35</p><p class="top_g3">55.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">43</p><p class="top_s3">2.25</p><p class="top_g3">53.0%</p></li>
																		<li class="td"><p class="top_t3">롯데 자이언츠</p><p class="top_s3">34</p><p class="top_s3">2.11</p><p class="top_g3">50.0%</p></li>
																	</ul></div>
																	<div>
																		<h4>0.5오버 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">ING..</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">14Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">12Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">7Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">6Over</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2">4Over</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>0.5언더 연속 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연속</p></li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">14연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">12연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">7연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">6연속</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">롯데 자이언츠</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">4연속</p>
																			</li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
															</li>
														</ul>
													</div>
												</li>
											</ul>		
										</div>
									</li>
								</ul>
										
							</li>

						</ul>
					</div>
					
				</div>