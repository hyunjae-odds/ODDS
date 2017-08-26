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
						<h2 class="tit02">레스터시티 FC <a href="" class="btn_arrow01"></a></h2>
						<ul class="leaguebox" style="display:none;">
							<li><a href="">-</a></li>
							<li><a href="">-</a></li>
						</ul>
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
								<div class="team_p_w">
									<h3 class="noBorder center">부분별 1위 선수</h3>
									<div class="date">
										<a href="" class="btn_prev" title="이전시즌">이전시즌</a>
										<a href="" class="date_yr date_num">16/17<span class="date_t">시즌</span></a>
										<ul class="date_yr_select date_ul" style="width:112px;display:none;">
											<li><a href="">16/17 시즌</a></li>
											<li><a href="">15/16 시즌</a></li>
										</ul>
										<input value="이동" type="submit" class="btn_nv_mn">	
										<a href="" class="btn_next" title="다음시즌">다음시즌</a>
									</div>
									<div class="relative">
										<div class="team_p active">
											<ul class="player_list">
												<li>
													<p class="th">득 점</p>
													<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt=""></div>
													<p class="td"><a href="player_info.php">앨런스미스</a></p>
													<b class="red">4</b>
												</li>
												<li>
													<p class="th">도 움</p>
													<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt=""></div>
													<p class="td"><a href="player_info.php">앨런스미스</a></p>
													<b class="red">3.49</b>
												</li>
												<li>
													<p class="th">유효슈팅</p>
													<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt=""></div>
													<p class="td"><a href="player_info.php">앨런스미스</a></p>
													<b class="red">100%</b>
												</li>
												<li>
													<p class="th">피파울</p>
													<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt=""></div>
													<p class="td"><a href="player_info.php">앨런스미스</a></p>
													<b class="red">100%</b>
												</li>
												<li>
													<p class="th">출장시간</p>
													<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt=""></div>
													<p class="td"><a href="player_info.php">앨런스미스</a></p>
													<b class="red">900분</b>
												</li>
											</ul>
											<div class="pb50">
												<h3 class="noBorder">전체종합기록</h3>
												<table class="table_default table_2_left">
													<caption></caption>
													<colgroup>
														<col width="60px"/>
														<col width="*"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>선수명</th>
														<th>경기수</th>
														<th>선발</th>
														<th>교체</th>
														<th>경기시간</th>
														<th>득점</th>
														<th>옐로카드</th>
														<th>레드카드</th>
													</tr>
													<tr>
														<td>1</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>2</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>3</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>4</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>5</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>6</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>7</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>8</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>9</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>10</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
												</table>
												<p class="more_p"><a href="">더 보기</a></p>
											</div>
											<div class="pb50">
												<h3 class="noBorder">공격수 기록</h3>
												<table class="table_default table_2_left">
													<caption></caption>
													<colgroup>
														<col width="60px"/>
														<col width="*"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>선수명</th>
														<th>경기수</th>
														<th>득점</th>
														<th>유효슈팅</th>
														<th>오프사이드</th>
														<th>코너킥</th>
														<th>파울얻음</th>
													</tr>
													<tr>
														<td>1</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>2</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>3</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
													<tr>
														<td>4</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>5</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>6</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>7</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
													<tr>
														<td>8</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>9</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>10</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
												</table>
												<p class="more_p"><a href="">더 보기</a></p>
											</div>
											<div class="pb50">
												<h3 class="noBorder">수비수 기록</h3>
												<table class="table_default table_2_left">
													<caption></caption>
													<colgroup>
														<col width="60px"/>
														<col width="*"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
														<col width="75px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>선수명</th>
														<th>경기수</th>
														<th>실점</th>
														<th>경기당파울</th>
														<th>파울</th>
														<th>옐로카드</th>
														<th>레드카드</th>
													</tr>
													<tr>
														<td>1</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>2</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>3</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
													<tr>
														<td>4</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>5</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>6</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
														<td>0</td>
													</tr>
													<tr>
														<td>7</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
													<tr>
														<td>8</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>9</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>1</td>
													</tr>
													<tr>
														<td>10</td>
														<td><a href="player_info.php">앨런스미스</a></td>
														<td>20</td>
														<td>6</td>
														<td>5</td>
														<td>70</td>
														<td>3</td>
														<td>0</td>
													</tr>
												</table>
												<p class="more_p"><a href="">더 보기</a></p>
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