<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">

$(document).ready(function(){ 	


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

		// 팀별 기록 보기
		for(var i=1;i<22;i++){		
			(function (k){
				$(".team_list > li").eq(k-1).click(function(){ 
					$(".team_list li").removeClass("on");
					$(this).addClass("on");
					$(".result_veiw > li").removeClass("active");
					$(".result_veiw > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};
		$("span.pageBtn").click(function(){ 
			$(".team_list02").toggle();
			return false;
		});
		

		
		// 시즌기록 열고닫기
		$(".result_table01_1_onoff li a.up").click(function(){ 
			$(this).parent().parent().siblings().slideUp();
			$(this).parent().siblings().addClass("active");
			$(this).parent().removeClass("active");
			return false;
		});
		$(".result_table01_1_onoff li a.down").click(function(){ 
			$(this).parent().parent().siblings().slideDown();
			$(this).parent().siblings().addClass("active");
			$(this).parent().removeClass("active");
			return false;
		});

	});



 </script>

	
				<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>

				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 축구 - 잉글랜드</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">프리미어리그</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=" "><a href="league.php">리그정보</a></li>
							<li class="on"><a href="result.php">경기 결과</a></li>
							<!--li class=""><a href="stats.php">리그 통계</a></li>
							<li class=""><a href="team_record.php">팀 기록</a></li-->
							<li class=""><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="result02 s2 active pb50 relative">
								<ul class="team_list team_list01">
									<li class="on" class="tl001"><div>
										<span class="PL_L"></span>
										<p>전체구단</p></div>
									</li>
									<li class="tl002"><div>
										<span class="OB_L"></span>
										<p>첼시</p></div>
									</li>
									<li class="tl003"><div>
										<span class="NC_L"></span>
										<p>토트넘</p></div>
									</li>
									<li class="tl004"><div>
										<span class="WO_L"></span>
										<p>맨시티</p></div>
									</li>
									<li class="tl005"><div>
										<span class="LG_L"></span>
										<p>리버풀</p></div>
									</li>
									<li class="tl006"><div>
										<span class="HT_L"></span>
										<p>아스널</p></div>
									</li>
									<li class="tl007"><div>
										<span class="SK_L"></span>
										<p>맨유</p></div>
									</li>
									<li class="tl008"><div>
										<span class="HH_L"></span>
										<p>에버턴</p></div>
									</li>
									<li class="tl009"><div>
										<span class="LT_L"></span>
										<p>사우스햄튼</p></div>
									</li>
									<li class="tl010"><div>
										<span class="SS_L"></span>
										<p>본머스</p></div>
									</li>
									<li class="tl011"><div>
										<span class="KT_L"></span>
										<p>W. 브로미치</p></div>
									</li>
								</ul>
								<ul class="team_list team_list02">
									<li class="tl012"><div>
										<span class="OB_L"></span>
										<p>웨스트햄</p></div>
									</li>
									<li class="tl013"><div>
										<span class="NC_L"></span>
										<p>레스터시티</p></div>
									</li>
									<li class="tl014"><div>
										<span class="WO_L"></span>
										<p>스토크시티</p></div>
									</li>
									<li class="tl015"><div>
										<span class="LG_L"></span>
										<p>C. 팰리스</p></div>
									</li>
									<li class="tl016"><div>
										<span class="HT_L"></span>
										<p>스완지시티</p></div>
									</li>
									<li class="tl017"><div>
										<span class="SK_L"></span>
										<p>번리</p></div>
									</li>
									<li class="tl018"><div>
										<span class="HH_L"></span>
										<p>왓포드</p></div>
									</li>
									<li class="tl019"><div>
										<span class="LT_L"></span>
										<p>헐시티</p></div>
									</li>
									<li class="tl020"><div>
										<span class="SS_L"></span>
										<p>미들즈브러</p></div>
									</li>
									<li class="tl021"><div>
										<span class="KT_L"></span>
										<p>선덜랜드</p></div>
									</li>
								</ul>
								<span class="pageBtn"></span>
								<div class="clear"></div>

								<ul class="result_veiw mt35">
									<li class="active">
										<div class="relative">
											<h3 class="noBorder">2016-17 시즌기록</h3>
											<div class="select" style="">
												<p class="off"><span class="pp">O/U 2.5</span><span class="pa"></span></p>
												<ul>
													<li><a href="">O/U 1.5</a></li>
													<li><a href="">O/U 2.5</a></li>
													<li><a href="">O/U 3.5</a></li>
												</ul>
											</div>
										</div>
										<table class="table_default result_table01">
											<caption></caption>
											<colgroup>
												<col width="*"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/>
											</colgroup>
											<tr>
												<th class="pl20 left">팀명</th>
												<th>경기</th>
												<th>홈승</th>
												<th>무승부</th>
												<th>원정승</th>
												<th>득점</th>
												<th>H/A</th>
												<th>오버</th>
												<th>언더</th>
											</tr>
											<tr>
												<td class="pl20 left">프리미어리그 통계 (평균수치)</td>
												<td><b>144</b></td>
												<td><b>65</b>(45%)</td>
												<td><b>65</b>(45%)</td>
												<td><b>65</b>(45%)</td>
												<td><b>144</b></td>
												<td>2.9/2.7</td>
												<td><b>65</b>(45%)</td>
												<td><b>65</b>(45%)</td>
											</tr>
										</table>
										<div class="relative">
											<div>
												<table class="table_default result_table01 result_table01_1">
													<caption></caption>
													<colgroup>
														<col width="80px"/><col width="*"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/><col width="75px"/>
													</colgroup>
													<tr>
														<td class=""><b>6R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
													<tr>
														<td class=""><b>5R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
													<tr>
														<td class=""><b>4R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
													<tr>
														<td class=""><b>3R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
													<tr>
														<td class=""><b>2R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
													<tr>
														<td class=""><b>1R</b></td>
														<td>&nbsp;</td>
														<td>144</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
														<td>144</td>
														<td>2.9/2.7</td>
														<td>65(45%)</td>
														<td>65(45%)</td>
													</tr>
												</table>
											</div>
											<ul class="result_table01_1_onoff">
												<li class="active"><a href="" class="up">기록 닫기 <span class="up"></span></a></li>
												<li><a href="" class="down">기록 열기 <span class="down"></span></a></li>
											</ul>
										</div>
										<div class="relative">
											<h3 class="noBorder center" style="margin-top:60px;">2017-18 프리미어리그 경기결과</h3>
											<div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
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
											<div class="select" style="">
												<p class="off"><span class="pp">승무패</span><span class="pa"></span></p>
												<ul>
													<li><a href="">승무패</a></li>
													<li><a href="">O/U</a></li>
												</ul>
											</div>
										</div>
										<table class="table_default league_table01 league_table01_1">
											<caption></caption>
											<colgroup>
												<col width="85px"/>
												<col width="*"/>
												<col width="85px"/>
												<col width="90px"/>
												<col width="85px"/>
												<col width="80px"/>
												<col width="55px"/>
												<col width="65px"/>
											</colgroup>
											<tr>
												<th>05/25</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>결과</th>					
												<th>승</th>	
												<th>무</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
										</table>
										<table class="table_default league_table01 league_table01_1">
											<caption></caption>
											<colgroup>
												<col width="85px"/>
												<col width="*"/>
												<col width="85px"/>
												<col width="90px"/>
												<col width="85px"/>
												<col width="80px"/>
												<col width="55px"/>
												<col width="65px"/>
											</colgroup>
											<tr>
												<th>05/24</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>결과</th>					
												<th>승</th>	
												<th>무</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
										</table>
									</li>
									<li>
										<h3 class="noBorder center">2017시즌 맨체스터 시티 기록</h3>
										<table class="table_default result_table01">
											<caption></caption>
											<colgroup>
												<col width="*"/><col width="50px"/><col width="45px"/><col width="45px"/><col width="45px"/><col width="50px"/><col width="50px"/><col width="50px"/><col width="65px"/><col width="65px"/><col width="55px"/><col width="175px"/>
											</colgroup>
											<tr>
												<th class="pl20 left">팀명</th>
												<th>경기</th>
												<th>승</th>
												<th>무</th>
												<th>패</th>
												<th>득</th>
												<th>실</th>
												<th>계차</th>
												<th>오버%</th>
												<th>언더%</th>
												<th>
													<div class="select_w">
														<div class="select" style="right:0px;">
															<p class="off"><span class="pp">2.5</span><span class="pa"></span></p>
															<ul>
																<li><a href="">1.5</a></li>
																<li><a href="">2.5</a></li>
																<li><a href="">3.5</a></li>
															</ul>
														</div>
													</div>
												</th>
												<th>최근 6경기</th>
											</tr>
											<tr>
												<td class="pl20 left">맨체스터 시티 통계 (평균수치)</td>
												<td><b>38</b></td>
												<td><b>25</b></td>
												<td><b>7</b></td>
												<td><b>5</b></td>
												<td><b>2.8</b></td>
												<td><b>1.25</b></td>
												<td><b>+1</b></td>
												<td><b>20</b>(53%)</td>
												<td><b>18</b>(47%)</td>
												<td>&nbsp;</td>
												<td><b><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a>
												</b></td>												
											</tr>
										</table>
										<div class="relative">
											<h3 class="noBorder center" style="margin-top:60px;">2017-18 맨체스터 시티 경기결과</h3>
											<div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
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
											<div class="select" style="">
												<p class="off"><span class="pp">승무패</span><span class="pa"></span></p>
												<ul>
													<li><a href="">승무패</a></li>
													<li><a href="">O/U</a></li>
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
												<th class="left pl20"><b>매치명</b></th>
												<th>결과</th>					
												<th>승</th>	
												<th>무</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_dra2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php"><b>맨체스터 시티</b>  vs  레스터시티 FC</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>05/25</td>
												<td class="left pl20">
													<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>
													<a href="/odds/game/main/dividend.php">맨체스터 시티  vs  <b>레스터시티 FC</b></a>
												</td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
											</tr>
										</table>
									</li>
									<li>002</li>
									<li>003</li>
									<li>004</li>
									<li>005</li>
									<li>006</li>
									<li>007</li>
									<li>008</li>
									<li>009</li>
									<li>010</li>
									<li>011</li>
									<li>012</li>
									<li>013</li>
									<li>014</li>
									<li>015</li>
									<li>016</li>
									<li>017</li>
									<li>018</li>
									<li>019</li>
									<li>020</li>
								</ul>
							</li>		
						</ul>
					</div>
					
				</div>
							
			
<?php 
include("../footer.php");
?>


 </body>
 </html>