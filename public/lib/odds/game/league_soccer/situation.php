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


		//선수포지션탭
		for(var i=1;i<5;i++){		
			(function (k){
				$(".r_tit3 > li.ls01_tab_" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().removeClass("active");
					$(this).parent().siblings("div.ls01_"+k).addClass("active");
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
							<li class=""><a href="player.php">선수 기록</a></li>
							<li class="on"><a href="situation.php">선수 현황</a></li>
							<li class=""><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active result02">
								<div class="situation">
									<div class="coach">
										<div class="pic"><img src="../../image/game/img_roster_player.jpg" alt="" /></div>
										<div>
											<h3 class="noBorder">감독</h3>
											<p>클라우디오 라니에리 <span>Claudio Ranieri</span></p>
											<span>1951년 10월 20일, 이탈리아</span>
											<div>
												<p>경력</p>
												<ul>
													<li>2015.07~ 레스터 시티 FC (잉글랜드) 감독</li>
													<li>2014.07~2014.11 그리스 축구 국가대표팀 감독</li>
												</ul>
											</div>
										</div>
										<span class="clear"></span>
									</div>
									<div class="situation_list pb50">
										<ul class="blackTab r_tit3">
											<li class="on ls01_tab_1"><a href="">FW</a></li>
											<li class=" ls01_tab_2"><a href="">MF</a></li>
											<li class=" ls01_tab_3"><a href="">DF</a></li>
											<li class=" ls01_tab_4"><a href="">GK</a></li>
										</ul>
										<div class="PL_REC ls01_1 active">
											<p class="tp">(총 17명)</p>
											<ul>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
											<span class="clear"></span>
										</div>
										<div class="PL_REC ls01_2">
											<p class="tp">(총 15명)</p>
											<ul>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
											<span class="clear"></span>
										</div>
										<div class="PL_REC ls01_3">
											<p class="tp">(총 12명)</p>
											<ul>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
											<span class="clear"></span>
										</div>
										<div class="PL_REC ls01_4">
											<p class="tp">(총 3명)</p>
											<ul>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info.php"><img src="../../image/game/img_roster_player.jpg" alt="" /></a></p>
													<h4><a href="player_info.php">안드레 고메스</a></h4>
													<b>Andre Filipe Tavares Gomes</b>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
											<span class="clear"></span>
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