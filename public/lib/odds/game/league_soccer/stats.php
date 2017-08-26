<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">
	$(document).ready(function(){ 	

		// -----  리그통계 내 Tab 시작

		//2뎁스 승패/핸디캡/O/U
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
	/*	for(var i=1;i<5;i++){		
			(function (k){
				$(".firTab > li.r_tit1_" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().find("ul li").removeClass("active");
					$(this).parent().siblings().find("ul li.ls01_"+k).addClass("active");
					return false;
				});
			}(i));
		};*/

		// -----  리그통계 내 Tab 끝

		//리그정보-통계탭
		for(var i=1;i<9;i++){		
			(function (k){
				$(".LastGame li.ss"+k).click(function(){ 
					$(".LastGame_view > li").removeClass("active"); 
					$(".ss"+k).addClass("active"); 
					$(".LastGame li").removeClass("on"); 
					$(this).addClass("on");
					return false;
				});
			}(i));
		};

	});



 </script>
	

			<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>

							
			<div class="livescore game">
				<div class="topTitle">
					<p>
						<span>리그정보 - 축구 - 잉글랜드</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">프리미어리그 <a href="" class="btn_arrow01"></a></h2>
					<ul class="leaguebox" style="display:none;">
						<li><a href="">프리미어</a></li>
						<li><a href="">챔피언쉽</a></li>
						<li><a href="">리그원</a></li>
						<li><a href="">리그투</a></li>
						<li><a href="">바나라마 북부</a></li>
						<li><a href="">바나라마 남부</a></li>
						<li><a href="">북부 프리미어</a></li>
						<li><a href="">남부 프리미어</a></li>
					</ul>
				</div>
				<div class="game_w">
					<ul class="tab01 gameMain">
						<li class=" "><a href="league.php">리그정보</a></li>
						<li class=" "><a href="result.php">경기 결과</a></li>
						<li class="on "><a href="stats.php">리그 통계</a></li>
						<li class=""><a href="team_record.php">팀 기록</a></li>
						<li class=""><a href="record.php">선수 기록</a></li>
						<li class=""><a href="score.php">상대 전적</a></li>
					</ul>
					<ul class="tab_view01 gameMain_view">
						<li class="s4 active" style="padding-top:40px;">
								<div class="tab01_w">
									<ul class="tab01_2 TLS">
										<li class="on ls01"><a href="">리그순위</a></li>
										<li class="ls02"><a href="">승무패</a></li>
										<li class="ls03"><a href="">O/U</a></li>
									</ul>
								</div>
								<ul class="LS_view_w">
									<li class="active ls01_w"><!--  리그순위  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">풀타임</a></li>
														<li class="r_tit1_2"><a href="">하프타임</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 풀타임 -->
																<div class="select" style="top:-50px;">
																	<p class="off"><span class="pp">2017/18</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">2017/18</a></li>
																		<li class=""><a href="">2016/17</a></li>
																		<li class=""><a href="">2015/16</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left table_all_home_visit" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="26px"/><col width="26px"/><col width="26px"/><col width="50px"/><col width="45px"/><col width="55px"/><col width="36px"/><col width="26px"/><col width="26px"/><col width="26px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="26px"/><col width="26px"/><col width="26px"/><col width="50px"/>
																	</colgroup>
																	<tr class="w_th">
																		<th colspan="2">&nbsp;</th>
																		<th colspan="7">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																	</tr>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>무</th>
																		<th>패</th>
																		<th>득:실</th>
																		<th><span class="blue">승점</span></th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>무</th>
																		<th>패</th>
																		<th>득:실</th>
																		<th>경기수</th>
																		<th>승률</th>
																		<th>승</th>
																		<th>무</th>
																		<th>패</th>
																		<th>득:실</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>2</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>3</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>4</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>5</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>11</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>12</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>13</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>14</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>15</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>16</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><b>17</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>18</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>19</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>20</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td><span class="blue">35</span></td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																		<td>144</td>
																		<td>0.678</td>
																		<td>9</td>
																		<td>3</td>
																		<td>5</td>
																		<td>95:75</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">리그요약</h3>
																<div class="TOP5">
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">풀타임 승률</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																			<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">55%</p></li>
																			<li class="td"><p class="top_t3">무승부</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">25%</p></li>
																			<li class="td"><p class="top_t3">원정</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">20%</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">하프타임 승률</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																			<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">55%</p></li>
																			<li class="td"><p class="top_t3">무승부</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">25%</p></li>
																			<li class="td"><p class="top_t3">원정</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">20%</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">풀타임 득점</p><p class="top_s3">경기수</p><p class="top_s3">총득점</p><p class="top_g3">경기당</p></li>
																			<li class="td"><p class="top_t3">전체 득점</p><p class="top_s3">144</p><p class="top_s3">1585</p><p class="top_g3">4.71</p></li>
																			<li class="td"><p class="top_t3">홈팀 득점</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">2.95</p></li>
																			<li class="td"><p class="top_t3">원정팀 득점</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">2.45</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">하프타임 득점</p><p class="top_s3">경기수</p><p class="top_s3">총득점</p><p class="top_g3">경기당</p></li>
																			<li class="td"><p class="top_t3">전체 득점</p><p class="top_s3">144</p><p class="top_s3">1585</p><p class="top_g3">4.71</p></li>
																			<li class="td"><p class="top_t3">홈팀 득점</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">2.95</p></li>
																			<li class="td"><p class="top_t3">원정팀 득점</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">2.45</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">풀타임 오버</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																			<li class="td"><p class="top_t3">오버 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																			<li class="td"><p class="top_t3">오버 2.5</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">40%</p></li>
																			<li class="td"><p class="top_t3">오버 3.5</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">40%</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">하프타임 오버</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																			<li class="td"><p class="top_t3">오버 0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																			<li class="td"><p class="top_t3">오버 1.5</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">40%</p></li>
																			<li class="td"><p class="top_t3">오버 2.5</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">40%</p></li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
																<h3 class="center noBorder">부분별 상위 5팀</h3>
																<div class="TOP5">
																	<div><h4>홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div><h4>원정승률 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div>
																		<h4>2.5오버 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																	</ul></div>
																	<div>
																		<h4>2.5언더 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g33">확률</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																	</ul></div>
																	<div>
																		<h4>최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승무패</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버풀</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>최근 10경기 하위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승무패</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버플</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>2.5오버 최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버풀</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>2.5언더 최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버플</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
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
									<li class="ls02_w"><!--  승무패  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">풀타임</a></li>
														<li class="r_tit1_2"><a href="">하프타임</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 풀타임 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<div class="select" style="top:-7px;">
																	<p class="off"><span class="pp">2017/18</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">2017/18</a></li>
																		<li class=""><a href="">2016/17</a></li>
																		<li class=""><a href="">2015/16</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left table_2_left_2st" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="62px"/>
																		<col width="61px"/>
																		<col width="60px"/>
																		<col width="60px"/>
																		<col width="62px"/>
																		<col width="62px"/>
																		<col width="62px"/>
																		<col width="62px"/>
																		<col width="62px"/>
																		<col width="150px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>승</th>
																		<th>무</th>
																		<th>패</th>
																		<th>1<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th>X<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th>2<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th>득:실</th>
																		<th>골마진</th>
																		<th>최근 5경기</th>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>1</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>2</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot01_color"><b>3</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot02_color"><b>4</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot03_color"><b>5</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>11</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>12</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>13</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>14</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>15</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>16</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><b>17</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>18</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>19</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																	<tr>
																		<td><span class="rankdot04_color"><b>20</b></span></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>15</td>
																		<td>8</td>
																		<td>3</td>
																		<td>65%</td>
																		<td>25%</td>
																		<td>10%</td>
																		<td>48:29</td>
																		<td>+19</td>
																		<td>
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
																		</td>
																	</tr>
																</table>
																<h3 class="center noBorder pt50">리그요약</h3>
																<div class="TOP5">
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">풀타임 승률</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																			<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">55%</p></li>
																			<li class="td"><p class="top_t3">무승부</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">25%</p></li>
																			<li class="td"><p class="top_t3">원정</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">20%</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">풀타임 득점</p><p class="top_s3">경기수</p><p class="top_s3">총득점</p><p class="top_g3">경기당</p></li>
																			<li class="td"><p class="top_t3">전체 득점</p><p class="top_s3">144</p><p class="top_s3">1585</p><p class="top_g3">4.71</p></li>
																			<li class="td"><p class="top_t3">홈팀 득점</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">2.95</p></li>
																			<li class="td"><p class="top_t3">원정팀 득점</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">2.45</p></li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
																<h3 class="center noBorder">부분별 상위 5팀</h3>
																<div class="TOP5">
																	<div><h4>홈승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div><h4>원정승률 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div><h4>홈승률 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div><h4>원정승률 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">무</p><p class="top_s4">패</p><p class="top_g4">승률</p></li>
																		<li class="td"><p class="top_t4">첼시</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">아스날</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">리버풀</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">토튼햄 핫스퍼</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																		<li class="td"><p class="top_t4">맨체스터 시티</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																	</ul></div>
																	<div><h4>득점마진 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">풀타임 승률</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																	</ul></div>
																	<div><h4>득점마진 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">풀타임 승률</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.5</p></li>
																	</ul></div>
																	<div>
																		<h4>최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승무패</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버풀</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1/1</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>최근 10경기 하위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승무패</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버플</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
																				</p>
																				<p class="top_g2">1/1/<span class="blue">8</span></p>
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
									<li class="ls03_w"><!--  오버언더  -->
										<div style="position:relative;">				
											<ul class="LS_view">
												<li class="active ls_all">
													<ul class="firTab">
														<li class="on r_tit1_1"><a href="">풀타임</a></li>
														<li class="r_tit1_2"><a href="">하프타임</a></li>
													</ul>
													<div>
														<ul class="r_tit1_view">
															<li class="ls01_1 active"><!-- 종료 -->
																<div class="tab2_w">
																	<ul class="tab02 LS_tab">
																		<li class="on ls_all"><a href="">전체</a></li>
																		<li class="ls_home"><a href="">홈</a></li>
																		<li class="ls_team"><a href="">원정</a></li>
																	</ul>
																</div>
																<ul class="r_tit2">
																	<li class="ls01_tab_1"><a href="">1.5</a></li>
																	<li class="ls01_tab_2 on"><a href="">2.5</a></li>
																	<li class="ls01_tab_3"><a href="">3.5</a></li>
																</ul>
																<ul class="r_tit4">
																	<li><span class="plusL">plus</span> Over</li>
																	<li><span class="minusL">minus</span> Under</li>
																</ul>
																<div class="select" style="top:-7px;">
																	<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
																	<ul>
																		<li class=""><a href="">최근 5경기</a></li>
																		<li class=""><a href="">최근 10경기</a></li>
																		<li class=""><a href="">최근 20경기</a></li>
																	</ul>
																</div>
																<table class="table_default table_2_left table_2_left_2st" >
																	<caption></caption>
																	<colgroup>
																		<col width="63px"/>
																		<col width="*"/>
																		<col width="80px"/>
																		<col width="80px"/>
																		<col width="80px"/>
																		<col width="80px"/>
																		<col width="80px"/>
																		<col width="81px"/>
																		<col width="81px"/>
																		<col width="150px"/>
																	</colgroup>
																	<tr>
																		<th>순위</th>
																		<th>팀</th>
																		<th>경기수</th>
																		<th>Over</th>
																		<th>Under</th>
																		<th>O%<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th>U%<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																		<th>득:실</th>
																		<th>경기당</th>
																		<th>최근 5경기</th>
																	</tr>
																	<tr>
																		<td><b>1</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>2</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>3</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>4</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>5</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>6</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>7</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>8</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>9</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>10</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>11</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>12</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>13</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>14</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>15</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>16</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>17</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>18</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>19</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>
																	<tr>
																		<td><b>20</b></td>
																		<td>맨체스터 유나이티드</td>
																		<td>26</td>
																		<td>13</td>
																		<td>13</td>
																		<td>50%</td>
																		<td>50%</td>
																		<td>48:29</td>
																		<td>2.75</td>
																		<td>
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																		</td>
																	</tr>

																</table>
																<h3 class="center noBorder pt50">리그요약</h3>
																<div class="TOP5">
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">오버 확률</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																			<li class="td"><p class="top_t3">1.5 Over</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">55%</p></li>
																			<li class="td"><p class="top_t3">2.5 Over</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">25%</p></li>
																			<li class="td"><p class="top_t3">3.5 Over</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">20%</p></li>
																		</ul>
																	</div>
																	<div>
																		<ul>
																			<li class="th"><p class="top_t3">리그 득점</p><p class="top_s3">경기수</p><p class="top_s3">총득점</p><p class="top_g3">경기당</p></li>
																			<li class="td"><p class="top_t3">전체 득점</p><p class="top_s3">144</p><p class="top_s3">1585</p><p class="top_g3">4.71</p></li>
																			<li class="td"><p class="top_t3">홈팀 득점</p><p class="top_s3">144</p><p class="top_s3">675</p><p class="top_g3">2.95</p></li>
																			<li class="td"><p class="top_t3">원정팀 득점</p><p class="top_s3">144</p><p class="top_s3">645</p><p class="top_g3">2.45</p></li>
																		</ul>
																	</div>
																	<p class="clear"></p>
																</div>
																<h3 class="center noBorder">부분별 상위 5팀</h3>
																<div class="TOP5">
																	<div><h4>2.5오버 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																	</ul></div>
																	<div><h4>2.5언더 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																	</ul></div>
																	<div><h4>리그득점 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																	</ul></div>
																	<div><h4>리그득점 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																	</ul></div>
																	<div><h4>리그실점 상위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																	</ul></div>
																	<div><h4>리그실점 하위 5팀<span></span></h4>
																	<ul>
																		<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																		<li class="td"><p class="top_t3">첼시</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">아스날</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">리버풀</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">토튼햄 핫스퍼</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																		<li class="td"><p class="top_t3">맨체스터 시티</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																	</ul></div>
																	<div>
																		<h4>2.5오버 최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버풀</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																				</p>
																				<p class="top_g2"><span class="red">8</span>/1</p>
																			</li>
																		</ul>
																	</div>
																	<div>
																		<h4>2.5언더 최근 10경기 상위 5팀<span></span></h4>
																		<ul>
																			<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																			<li class="td">
																				<p class="top_t2">첼시</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">아스날</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">리버플</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">토튼햄 핫스퍼</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
																			</li>
																			<li class="td">
																				<p class="top_t2">맨체스터 시티</p>
																				<p class="top_s2">
																					<span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																				</p>
																				<p class="top_g2">1/<span class="blue">8</span></p>
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


			
<?php 
include("../footer.php");
?>


 </body>
 </html>