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
		for(var i=1;i<12;i++){		
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

	
				<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>

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
							<li class=" "><a href="league.php">리그정보</a></li>
							<li class="on"><a href="result.php">경기 결과</a></li>
							<!--li class=""><a href="stats.php">리그 통계</a></li>
							<li class=""><a href="team_record.php">팀 기록</a></li-->
							<li class=""><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="result02 s2 active pb50">
								<ul class="team_list">
									<li class="on" class="tl001"><div>
										<span class="KBO_L_B"></span>
										<p>전체구단</p></div>
									</li>
									<li class="tl002"><div>
										<span class="OB_L"></span>
										<p>두산</p></div>
									</li>
									<li class="tl003"><div>
										<span class="NC_L"></span>
										<p>NC</p></div>
									</li>
									<li class="tl004"><div>
										<span class="WO_L"></span>
										<p>넥센</p></div>
									</li>
									<li class="tl005"><div>
										<span class="LG_L"></span>
										<p>LG</p></div>
									</li>
									<li class="tl006"><div>
										<span class="HT_L"></span>
										<p>KIA</p></div>
									</li>
									<li class="tl007"><div>
										<span class="SK_L"></span>
										<p>SK</p></div>
									</li>
									<li class="tl008"><div>
										<span class="HH_L"></span>
										<p>한화</p></div>
									</li>
									<li class="tl009"><div>
										<span class="LT_L"></span>
										<p>롯데</p></div>
									</li>
									<li class="tl010"><div>
										<span class="SS_L"></span>
										<p>삼성</p></div>
									</li>
									<li class="tl011"><div>
										<span class="KT_L"></span>
										<p>KT</p></div>
									</li>
								</ul>
								<div class="clear"></div>

								<ul class="result_veiw mt35">
									<li class="active">
										<h3 class="noBorder center">2017시즌 기록</h3>
										<!--div class="select" style="">
											<p class="off"><span class="pp">월별</span><span class="pa"></span></p>
											<ul>
												<li><a href="">월별</a></li>
												<li><a href="">-</a></li>
											</ul>
										</div-->
										<table class="table_default result_table01">
											<caption></caption>
											<colgroup>
												<col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
											</colgroup>
											<tr>
												<th class="pl20 left">팀명</th>
												<th>경기</th>
												<th>타율</th>
												<th>득점</th>
												<th>안타</th>
												<th>홈런</th>
												<th>볼넷</th>
												<th>삼진</th>
												<th>WHIP</th>
											</tr>
											<tr>
												<td class="pl20 left">리그기록(평균기록)</td>
												<td>144</td>
												<td>0.295</td>
												<td>9.5</td>
												<td>7.5</td>
												<td>1.5</td>
												<td>6.5</td>
												<td>8.5</td>
												<td>1.48</td>
											</tr>
										</table>
										<div class="relative">
											<div>
												<table class="table_default result_table01 result_table01_1">
													<caption></caption>
													<colgroup>
														<col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
													</colgroup>
													<tr>
														<td class="pl20"><b>P/O</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>8월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>7월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>6월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>5월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>4월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
												</table>
											</div>
											<ul class="result_table01_1_onoff">
												<li class="active"><a href="" class="up">기록 닫기 <span class="up"></span></a></li>
												<li><a href="" class="down">기록 열기 <span class="down"></span></a></li>
											</ul>
										</div>
										<div class="relative">
											<h3 class="noBorder center" style="margin-top:60px;">2017시즌 경기결과</h3>
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
												<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
												<ul>
													<li><a href="">승패</a></li>
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
												<col width="80px"/>
												<col width="55px"/>
												<col width="65px"/>
											</colgroup>
											<tr>
												<th>05/25</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>스코어</th>					
												<th>승</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
										</table>
										<table class="table_default league_table01 league_table01_1">
											<caption></caption>
											<colgroup>
												<col width="80px"/>
												<col width="*"/>
												<col width="85px"/>
												<col width="90px"/>
												<col width="80px"/>
												<col width="55px"/>
												<col width="65px"/>
											</colgroup>
											<tr>
												<th>05/24</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>스코어</th>					
												<th>승</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
										</table>
										<table class="table_default league_table01 league_table01_1">
											<caption></caption>
											<colgroup>
												<col width="80px"/>
												<col width="*"/>
												<col width="85px"/>
												<col width="90px"/>
												<col width="80px"/>
												<col width="55px"/>
												<col width="65px"/>
											</colgroup>
											<tr>
												<th>05/23</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>스코어</th>					
												<th>승</th>	
												<th>패</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
										</table>
									</li>
									<li>
										<h3 class="noBorder center">2017시즌 두산 베어스 기록</h3>
										<!--div class="select" style="">
											<p class="off"><span class="pp">월별</span><span class="pa"></span></p>
											<ul>
												<li><a href="">월별</a></li>
												<li><a href="">-</a></li>
											</ul>
										</div-->
										<table class="table_default result_table01">
											<caption></caption>
											<colgroup>
												<col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
											</colgroup>
											<tr>
												<th class="pl20 left">팀명</th>
												<th>경기</th>
												<th>타율</th>
												<th>득점</th>
												<th>안타</th>
												<th>홈런</th>
												<th>볼넷</th>
												<th>삼진</th>
												<th>WHIP</th>
											</tr>
											<tr>
												<td class="pl20 left"><span class="OB_L"></span><b>두산 베어스</b> (평균수치)</td>
												<td>144</td>
												<td>0.295</td>
												<td>9.5</td>
												<td>7.5</td>
												<td>1.5</td>
												<td>6.5</td>
												<td>8.5</td>
												<td>1.48</td>
											</tr>
										</table>
										<div class="relative">
											<div>
												<table class="table_default result_table01 result_table01_1">
													<caption></caption>
													<colgroup>
														<col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
													</colgroup>
													<tr>
														<td class="pl20"><b>P/O</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>8월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>7월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>6월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>5월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
													<tr>
														<td class="pl20"><b>4월</b></td>
														<td>144</td>
														<td>0.295</td>
														<td>9.5</td>
														<td>7.5</td>
														<td>1.5</td>
														<td>6.5</td>
														<td>8.5</td>
														<td>1.48</td>
													</tr>
												</table>
											</div>
											<ul class="result_table01_1_onoff">
												<li class="active"><a href="" class="up">기록 닫기 <span class="up"></span></a></li>
												<li><a href="" class="down">기록 열기 <span class="down"></span></a></li>
											</ul>
										</div>
										<div class="relative">
											<h3 class="noBorder center" style="margin-top:60px;">2017시즌 두산 베어스 월별 기록</h3>
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
												<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
												<ul>
													<li><a href="">승패</a></li>
													<li><a href="">O/U</a></li>
												</ul>
											</div>
										</div>
										<table class="table_default league_table01 league_table01_1">
											<caption></caption>
											<colgroup>
												<col width="80px"/>
												<col width="*"/>
												<col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/>
											</colgroup>
											<tr>
												<th>날짜</th>
												<th class="left pl20"><b>매치명</b></th>
												<th>스코어</th>					
												<th>기준</th>	
												<th>오버</th>
												<th>언더</th>
												<th>B’s</th>
												<th>DATA</th>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="underline">9.5</span></td>
												<td><span class="graybox">1.93</span></td>
												<td>1.85</td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td><span class="underline">10.5</span></td>
												<td>1.85</td>
												<td><span class="graybox">1.93</span></td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr><tr>
												<td>12/22</td>
												<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="underline">9.5</span></td>
												<td><span class="graybox">1.93</span></td>
												<td>1.85</td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td><span class="underline">10.5</span></td>
												<td>1.85</td>
												<td><span class="graybox">1.93</span></td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr><tr>
												<td>12/22</td>
												<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="underline">9.5</span></td>
												<td><span class="graybox">1.93</span></td>
												<td>1.85</td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td><span class="underline">10.5</span></td>
												<td>1.85</td>
												<td><span class="graybox">1.93</span></td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr><tr>
												<td>12/22</td>
												<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="underline">9.5</span></td>
												<td><span class="graybox">1.93</span></td>
												<td>1.85</td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td><span class="underline">10.5</span></td>
												<td>1.85</td>
												<td><span class="graybox">1.93</span></td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr><tr>
												<td>12/22</td>
												<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="underline">9.5</span></td>
												<td><span class="graybox">1.93</span></td>
												<td>1.85</td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>12/22</td>
												<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td><span class="underline">10.5</span></td>
												<td>1.85</td>
												<td><span class="graybox">1.93</span></td>
												<td>55</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
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