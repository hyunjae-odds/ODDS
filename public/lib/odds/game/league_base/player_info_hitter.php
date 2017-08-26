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
							<li class=""><a href="schedule.php">경기 결과</a></li>
							<li class="on"><a href="player.php">선수 기록</a></li>
							<li class=""><a href="situation.php">선수 현황</a></li>
							<li class=""><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active result02">
								<div class="team_record p_info">
									<div class="pic"><img src="../../image/game/pic03.jpg" alt="" /></div>
									<div>
										<h3 class="noBorder">최재원<span>No. 14</span></h3>
										<ul>
											<li>포지션 : 내야수</li>
											<li>출생 : 1994.07.30</li>
											<li>신체 : 183cm / 체중 : 78kg</li>
										</ul>
									</div>
									<div class="clear"></div>
									<ul>
										<li>타율<span>3.29</span>(42위)</li>
										<li>홈런<span>24</span>(42위)</li>
										<li>타점<span>143</span>(42위)</li>
									</ul>
									<p>소속리그 : KBO</p>
								</div>
								<div class="pb50 relative">
									<h3 class="noBorder">시즌성적</h3>
									<div class="date right" style="top:5px;">
										<a href="" class="btn_prev" title="이전시즌">이전시즌</a>
										<a href="" class="date_yr date_num">2016 <span class="f20">시즌</span></a>
										<ul class="date_yr_select date_ul" style="width:107px;">
											<li><a href="">2008 시즌</a></li>
											<li><a href="">2009 시즌</a></li>
											<li><a href="">2010 시즌</a></li>
											<li><a href="">2011 시즌</a></li>
											<li><a href="">2012 시즌</a></li>
											<li><a href="">2013 시즌</a></li>
											<li><a href="">2014 시즌</a></li>
											<li><a href="">2015 시즌</a></li>
											<li><a href="">2016 시즌</a></li>
										</ul>
										<input value="이동" type="submit" class="btn_nv_mn">	
										<a href="" class="btn_next" title="다음달">다음달</a>
										<div class="clear"></div>
									</div>
									<table class="table_default">
										<caption></caption>
										<colgroup>
											<col width=""/>
										</colgroup>
										<tr>
											<th>소속팀</th>
											<th>AVG</th>
											<th>G</th>
											<th>PA</th>
											<th>AB</th>
											<th>R</th>
											<th>H</th>
											<th>2B</th>
											<th>3B</th>
											<th>HR</th>
											<th>TB</th>
											<th>RBI</th>
											<th>SB</th>
											<th>CS</th>
											<th>SAC</th>
											<th>SF</th>
										</tr>
										<tr>
											<td>LG</td>
											<td><b class="red">0.349</b></td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
										</tr>
									</table>
									<table class="table_default">
										<caption></caption>
										<colgroup>
											<col width=""/>
										</colgroup>
										<tr>
											<th>BB</th>
											<th>IBB</th>
											<th>HBP</th>
											<th>SO</th>
											<th>GDP</th>
											<th>SLG</th>
											<th>OBP</th>
											<th>E</th>
											<th>SB%</th>
											<th>MH</th>
											<th>OPS</th>
											<th>RISP</th>
											<th>PH-BA</th>
										</tr>
										<tr>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>138</td>
											<td>0.651</td>
											<td>0.464</td>
											<td>138</td>
											<td>50.0%</td>
											<td>138</td>
											<td>1.115</td>
											<td>0.380</td>
											<td>0.000</td>
										</tr>
									</table>
								</div>
								<div class="pb50 relative">
									<h3 class="noBorder">최근 10경기 성적</h3>
									<p class="teammore"><a href="">더보기</a></p>
									<table class="table_default">
										<caption></caption>
										<colgroup>
											<col width=""/>
										</colgroup>
										<tr>
											<th>일자</th>
											<th>상대</th>
											<th>AVG</th>
											<th>AB</th>
											<th>R</th>
											<th>H</th>
											<th>2B</th>
											<th>3B</th>
											<th>HR</th>
											<th>RBI</th>
											<th>SB</th>
											<th>CS</th>
											<th>BB</th>
											<th>HBP</th>
											<th>SO</th>
											<th>GDP</th>
										</tr>
										<tr>
											<td>10.08</td>
											<td>SK 와이번스</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>KT 위즈</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>삼성 라이온즈</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>롯데 자이언트</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>한화 이글스</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>KIA 타이거즈</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>넥센 히어로즈</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>NC 다이노스</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr>
											<td>10.08</td>
											<td>두산 베어스</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
										<tr class="bold">
											<td colspan="2">합계</td>
											<td>0.500</td>
											<td>4</td>
											<td>0</td>
											<td>2</td>
											<td>1</td>
											<td>0</td>
											<td>0</td>
											<td>2</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>0</td>
											<td>1</td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<div class="pb30">
										<h3 class="noBorder">상대팀별 성적</h3>
										<div class="date right" style="top:5px;">
											<a href="" class="btn_prev" title="이전시즌">이전시즌</a>
											<a href="" class="date_yr date_num">2016 <span class="f20">시즌</span></a>
											<ul class="date_yr_select date_ul" style="width:107px;">
												<li><a href="">2008 시즌</a></li>
												<li><a href="">2009 시즌</a></li>
												<li><a href="">2010 시즌</a></li>
												<li><a href="">2011 시즌</a></li>
												<li><a href="">2012 시즌</a></li>
												<li><a href="">2013 시즌</a></li>
												<li><a href="">2014 시즌</a></li>
												<li><a href="">2015 시즌</a></li>
												<li><a href="">2016 시즌</a></li>
											</ul>
											<input value="이동" type="submit" class="btn_nv_mn">	
											<a href="" class="btn_next" title="다음달">다음달</a>
											<div class="clear"></div>
										</div>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">삼성 라이온즈</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">KT 위즈</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">롯데 자이언트</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">한화 이글스</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">SK 와이번스</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">KIA 타이거즈</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">넥센 히어로즈</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">NC 다이노스</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">두산 베어스</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="pb30">
										<h3 class="noBorder">구장별 성적</h3>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">고척</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">광주</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">대구</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">대전</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">마산</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">문학</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">사직</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">수원</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">잠실</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">포항</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="pb30">
										<h3 class="noBorder">월별 성적</h3>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">3~4월</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">5월</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">6월</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="pb30">
										<h3 class="noBorder">요일별 성적</h3>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">월</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">화</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">수</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">목</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">금</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">토</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">일</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="pb30">
										<h3 class="noBorder">홈/원정별 성적</h3>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">홈</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">방문</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
									</div>
									<div class="pb50">
										<h3 class="noBorder">주/야간별 성적</h3>
										<table class="table_default">
											<caption></caption>
											<colgroup>
												<col width="200px"/>
											</colgroup>
											<tr>
												<th class="left pl20">구분</th>
												<th>G</th>
												<th>AVG</th>
												<th>AB</th>
												<th>R</th>
												<th>H</th>
												<th>2B</th>
												<th>3B</th>
												<th>HR</th>
												<th>RBI</th>
												<th>SB</th>
												<th>CS</th>
												<th>BB</th>
												<th>HBP</th>
												<th>SO</th>
												<th>GDP</th>
											</tr>
											<tr>
												<td class="left pl20">주간</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
											<tr>
												<td class="left pl20">야간</td>
												<td>16</td>
												<td>0.390</td>
												<td>59</td>
												<td>6</td>
												<td>23</td>
												<td>9</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>0</td>
												<td>0</td>
												<td>11</td>
												<td>1</td>
												<td>9</td>
												<td>0</td>
											</tr>
										</table>
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