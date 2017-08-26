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
		for(var i=1;i<32;i++){		
			(function (k){
				$(".team_list_MLB > li").eq(k-1).click(function(){ 
					$(".team_list_MLB li").removeClass("on");
					$(this).addClass("on");
					$(".result_veiw > li").removeClass("active");
					$(".result_veiw > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};
		$("span.pageBtn01").click(function(){ 
			$(".team_list02").show();
			$(this).hide();
			$("span.pageBtn02").show();
			return false;
		});
		$("span.pageBtn02").click(function(){ 
			$(".team_list03").show();
			$(".team_list02").hide();
			$(this).hide();
			$("span.pageBtn03").show();
			return false;
		});
		$("span.pageBtn03").click(function(){ 
			$(".team_list03").hide();
			$(this).hide();
			$("span.pageBtn01").show();
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

	
				<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>

				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 미국</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">2017 MLB</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=" "><a href="league_MLB.php">리그정보</a></li>
							<li class="on"><a href="result_MLB.php">경기 결과</a></li>
							<li class=""><a href="record_MLB.php">선수 기록</a></li>
							<li class=""><a href="score_MLB.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="result02 s2 active pb50">
								<ul class="team_list_MLB team_list01">
									<li class="on" class="tl001"><div>
										<span class="MLB_L_B"></span>
										<p>전체구단</p></div>
									</li>
									<li class="tl002"><div>
										<span class="LAD_L"></span>
										<p>LA다져스</p></div>
									</li>
									<li class="tl003"><div>
										<span class="LAA_L"></span>
										<p>LA에인절스</p></div>
									</li>
									<li class="tl004"><div>
										<span class="NYM_L"></span>
										<p>뉴욕 메츠</p></div>
									</li>
									<li class="tl005"><div>
										<span class="NYY_L"></span>
										<p>뉴욕 양키스</p></div>
									</li>
									<li class="tl006"><div>
										<span class="DET_L"></span>
										<p>디트로이트</p></div>
									</li>
									<li class="tl007"><div>
										<span class="MIA_L"></span>
										<p>마이애미</p></div>
									</li>
									<li class="tl008"><div>
										<span class="MIN_L"></span>
										<p>미네소타</p></div>
									</li>
									<li class="tl009"><div>
										<span class="MIL_L"></span>
										<p>밀워키</p></div>
									</li>
									<li class="tl010"><div>
										<span class="BOS_L"></span>
										<p>보스턴</p></div>
									</li>
									<li class="tl011"><div>
										<span class="BAL_L"></span>
										<p>볼티모어</p></div>
									</li>
								</ul>
								<ul class="team_list_MLB team_list02">
									<li class="tl012"><div>
										<span class="SD_L"></span>
										<p>샌디에이고</p></div>
									</li>
									<li class="tl013"><div>
										<span class="SF_L"></span>
										<p>샌프란시스코</p></div>
									</li>
									<li class="tl014"><div>
										<span class="STL_L"></span>
										<p>세인트루이스</p></div>
									</li>
									<li class="tl015"><div>
										<span class="SEA_L"></span>
										<p>시애틀</p></div>
									</li>
									<li class="tl016"><div>
										<span class="CUB_L"></span>
										<p>시카고 컵스</p></div>
									</li>
									<li class="tl017"><div>
										<span class="CWS_L"></span>
										<p>시카고</p></div>
									</li>
									<li class="tl018"><div>
										<span class="CIN_L"></span>
										<p>신시내티</p></div>
									</li>
									<li class="tl019"><div>
										<span class="ARI_L"></span>
										<p>애리조나</p></div>
									</li>
									<li class="tl020"><div>
										<span class="ATL_L"></span>
										<p>애틀랜타</p></div>
									</li>
									<li class="tl021"><div>
										<span class="OAK_L"></span>
										<p>오클랜드</p></div>
									</li>
								</ul>
								<ul class="team_list_MLB team_list03">
									<li class="tl012"><div>
										<span class="WSH_L"></span>
										<p>워싱턴</p></div>
									</li>
									<li class="tl013"><div>
										<span class="KC_L"></span>
										<p>캔자스시티</p></div>
									</li>
									<li class="tl014"><div>
										<span class="COL_L"></span>
										<p>콜로라도</p></div>
									</li>
									<li class="tl015"><div>
										<span class="CLE_L"></span>
										<p>클리블랜드</p></div>
									</li>
									<li class="tl016"><div>
										<span class="TB_L"></span>
										<p>탬파베이</p></div>
									</li>
									<li class="tl017"><div>
										<span class="TEX_L"></span>
										<p>텍사스</p></div>
									</li>
									<li class="tl018"><div>
										<span class="TOR_L"></span>
										<p>토론토</p></div>
									</li>
									<li class="tl019"><div>
										<span class="PIT_L"></span>
										<p>피츠버그</p></div>
									</li>
									<li class="tl020"><div>
										<span class="PHI_L"></span>
										<p>필라델피아</p></div>
									</li>
									<li class="tl021"><div>
										<span class="HOU_L"></span>
										<p>휴스턴</p></div>
									</li>
								</ul>
								<span class="pageBtn pageBtn01"></span>
								<span class="pageBtn pageBtn02"></span>
								<span class="pageBtn pageBtn03"></span>
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
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
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
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
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
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
												<td><b class="score red">8<span class="colon">:</span>7</b></td>
												<td><span class="graybox">1.93</span></td>
												<td>3.15</td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
											<tr>
												<td>18:30</td>
												<td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
												<td><b class="score red">2<span class="colon">:</span>7</b></td>
												<td>3.15</td>
												<td><span class="graybox">1.93</span></td>
												<td>51</td>
												<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
											</tr>
										</table>
									</li>
									<li>
										<h3 class="noBorder center">2017시즌 LA다져스 기록</h3>
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
												<td class="pl20 left"><span class="LAD_L"></span><b>LA다져스</b> (평균기록)</td>
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
											<h3 class="noBorder center" style="margin-top:60px;">2017시즌 LA다져스 월별 기록</h3>
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
									<li>021</li>
									<li>022</li>
									<li>023</li>
									<li>024</li>
									<li>025</li>
									<li>026</li>
									<li>027</li>
									<li>028</li>
									<li>029</li>
									<li>030</li>
									<li>031</li>
									<li>032</li>
									<li>033</li>
									<li>034</li>
									<li>035</li>
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