<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	

		// -----  리그통계 내 Tab 시작

		//4뎁스 게임탭
		for(var i=1;i<5;i++){		
			(function (k){
				$(".r_tit > li.ls01_tab_" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().removeClass("active");
					$(this).parent().siblings("div.ls01_"+k).addClass("active");
					return false;
				});
			}(i));
		};

		// -----  리그통계 내 Tab 끝


		//선수기록
		for(var i=1;i<21;i++){		
			(function (k){
				$(".table_w table th span.pr_" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					//$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};

		//선수기록 확장테이블
		$(".nextTable a").click(function(){ 
			$(this).parent().siblings(".next_table").slideToggle(); 
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


	
				<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>


				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline">LG트윈스</span></span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">LG 트윈스</h2>
					</div>
					<div class="game_w pb50">
						<ul class="tab01 gameMain">
							<li class=""><a href="team_info.php">시즌 기록</a></li>
							<li class=""><a href="schedule.php">경기 결과</a></li>
							<li class="on"><a href="player.php">선수 기록</a></li>
							<li class=""><a href="situation.php">선수 현황</a></li>
							<li class=""><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="s5 active">
								<div class="team_p_w">
									<h3 class="noBorder center">부분별 선수 순위</h3>
									<div class="date">
										<a href="" class="btn_prev" title="이전시즌">이전시즌</a>
										<a href="" class="date_yr date_num">2016<span class="date_t">시즌</span></a>
										<ul class="date_yr_select date_ul" style="width:103px;display:none;">
											<li><a href="">2013 시즌</a></li>
											<li><a href="">2014 시즌</a></li>
											<li><a href="">2015 시즌</a></li>
											<li><a href="">2016 시즌</a></li>
										</ul>
										<input value="이동" type="submit" class="btn_nv_mn">	
										<a href="" class="btn_next" title="다음시즌">다음시즌</a>
									</div>
									<div class="relative">
										<ul class="blackTab r_tit" style="top:-33px;">
											<li class="ls01_tab_1"><a href="">투수</a></li>
											<li class="on ls01_tab_2"><a href="">타자</a></li>
										</ul>
										<div class="team_p ls01_1">
											<ul class="player_list">
												<li>
													<p class="th">평균자책점</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">승 리</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">세이브</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">승 률</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">홀 드</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
											</ul>
											<div class="table_w pitcher">
												<div class="relative">
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="60px"/>
															<col width="75px"/>
														</colgroup>
														<tr>
															<th>순위</th>
															<th>이름</th>
															<th><span class="pr_1">평균자책</span></th>
															<th><span class="pr_2">경기</span></th>
															<th><span class="pr_3">이닝</span></th>
															<th><span class="pr_4">승</span></th>
															<th><span class="pr_5">패</span></th>
															<th><span class="pr_6">세이브</span></th>
															<th><span class="pr_7">홀드</span></th>
															<th><span class="pr_8">탈삼진</span></th>
															<th><span class="pr_9">피안타</span></th>
															<th><span class="pr_10">피홈런</span></th>
															<th><span class="pr_11">실점</span></th>
															<th><span class="pr_12">볼넷</span></th>
															<th><span class="pr_13">사구</span></th>
															<th><span class="pr_14">승률</span></th>
														</tr>
														<tr>
															<td>1</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>2</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>3</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>4</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>5</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>6</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>7</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>8</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>9</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>10</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>11</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>12</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>13</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>14</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>15</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>16</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>17</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>18</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>19</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
														<tr>
															<td>20</td>
															<td>최형우</td>
															<td>3.49</td>
															<td>28</td>
															<td>167 2/3</td>
															<td>22</td>
															<td>3</td>
															<td>0</td>
															<td>0</td>
															<td>142</td>
															<td>151</td>
															<td>15</td>
															<td>61</td>
															<td>57</td>
															<td>9</td>
															<td>0.880</td>
														</tr>
													</table>
												</div>
												<div class="next_table" style="display:none;">
													<table class="table_default" style="width:960px;">
														<caption></caption>
														<colgroup>
															<col width="60px"/>
															<col width="75px"/>
														</colgroup>
														<tr>
															<th>순위</th>
															<th>이름</th>
															<th><span class="pr_1">WHIP</span></th>
															<th><span class="pr_2">K/9</span></th>
															<th><span class="pr_3">BB/9</span></th>
															<th><span class="pr_4">K/BB</span></th>
															<th><span class="pr_5">K%</span></th>
															<th><span class="pr_6">BB%</span></th>
															<th><span class="pr_7">WPA</span></th>
															<th><span class="pr_8">WAR</span></th>
														</tr>
														<tr>
															<td>1</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>2</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>3</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>4</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>5</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>6</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>7</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>8</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>9</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>10</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>11</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>12</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>13</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>14</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>15</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>16</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>17</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>18</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>19</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
														<tr>
															<td>20</td>
															<td>최형우</td>
															<td>1.18</td>
															<td>8.00</td>
															<td>2.70</td>
															<td>2.96</td>
															<td>21.6</td>
															<td>7.3</td>
															<td>1.61</td>
															<td>4.66</td>
														</tr>
													</table>
												</div>
												<p class="nextTable"><a href=""></a></p>
											</div>
											<div class="page page02">
												<a href="" class="on">1</a>
												<a href="">2</a>
												<a href="">3</a>
												<a href="">4</a>
												<a href="">5</a>
											</div>
										</div>
										<div class="team_p ls01_2 active">
											<ul class="player_list">
												<li>
													<p class="th">타 율</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">홈 런</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">타 점</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">안 타</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
												<li>
													<p class="th">도 루</p>
													<div class="pic"><img src="../../image/game/pic04.jpg" alt=""></div>
													<p class="td">최형우</p>
													<b class="red">3.49</b>
													<b class="gray">리그전체 2위</b>
												</li>
											</ul>
											<div class="table_w hitter">
												<div class="relative">
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="60px"/>
															<col width="75px"/>
														</colgroup>
														<tr>
															<th>순위</th>
															<th>이름</th>
															<th><span class="pr_1">타율</span></th>
															<th><span class="pr_2">경기</span></th>
															<th><span class="pr_3">타석</span></th>
															<th><span class="pr_4">타수</span></th>
															<th><span class="pr_5">안타</span></th>
															<th><span class="pr_6">2루타</span></th>
															<th><span class="pr_7">3루타</span></th>
															<th><span class="pr_8">홈런</span></th>
															<th><span class="pr_9">타점</span></th>
															<th><span class="pr_10">득점</span></th>
															<th><span class="pr_11">도루</span></th>
															<th><span class="pr_12">사사구</span></th>
															<th><span class="pr_13">삼진</span></th>
														</tr>
														<tr>
															<td>1</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>2</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>3</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>4</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>5</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>6</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>7</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>8</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>9</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>10</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>11</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>12</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>13</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>14</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>15</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>16</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>17</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>18</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>19</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
														<tr>
															<td>20</td>
															<td>최형우</td>

															<td>3.49</td>
															<td>144</td>
															<td>519</td>
															<td>498</td>
															<td>195</td>
															<td>48</td>
															<td>3</td>
															<td>31</td>
															<td>144</td>
															<td>114</td>
															<td>2</td>
															<td>83</td>
															<td>83</td>
														</tr>
													</table>
												</div>
												<div class="next_table" style="display:none;">
													<table class="table_default" style="width:960px;">
														<caption></caption>
														<colgroup>
															<col width="60px"/>
															<col width="75px"/>
														</colgroup>
														<tr>
															<th>순위</th>
															<th>이름</th>
															<th><span class="pr_1">OPS</span></th>
															<th><span class="pr_2">lsoP</span></th>
															<th><span class="pr_3">BABIP</span></th>
															<th><span class="pr_4">wOBA</span></th>
															<th><span class="pr_5">wRC+</span></th>
															<th><span class="pr_6">WPA</span></th>
															<th><span class="pr_7">WAR</span></th>
														</tr>
														<tr>
															<td>1</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>2</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>3</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>4</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>5</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>6</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>7</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>8</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>9</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>10</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>11</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>12</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>13</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>14</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>15</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>16</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>17</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>18</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>19</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
														<tr>
															<td>20</td>
															<td>최형우</td>
															<td>1.115</td>
															<td>0.275</td>
															<td>0.389</td>
															<td>0.471</td>
															<td>163.0</td>
															<td>5.07</td>
															<td>7.55</td>
														</tr>
													</table>
												</div>
												<p class="nextTable"><a href=""></a></p>
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
										</div>
										
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