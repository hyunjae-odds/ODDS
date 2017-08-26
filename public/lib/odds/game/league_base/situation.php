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
							<li class=""><a href="player.php">선수 기록</a></li>
							<li class="on"><a href="situation.php">선수 현황</a></li>
							<li class=""><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active result02">
								<div class="situation">
									<div class="coach">
										<div class="pic"><img src="../../image/game/img_coach.jpg" alt="" /></div>
										<div>
											<h3 class="noBorder">감독</h3>
											<p>양상문</p>
											<span>1961년 3월 24일, 대한민국</span>
											<div>
												<p>경력</p>
												<ul>
													<li>MBC ESPN 야구 해설가</li>
													<li>롯데 자이언츠 코치</li>
													<li>도하 아시안 게임 국가대표팀 코치</li>
													<li>2009년·2013년 월드 베이스볼 클래식 국가대표팀 코치</li>
												</ul>
											</div>
										</div>
										<span class="clear"></span>
									</div>
									<div class="situation_list">
										<ul class="blackTab r_tit">
											<li class="ls01_tab_1"><a href="">투수</a></li>
											<li class="on ls01_tab_2"><a href="">내야수</a></li>
											<li class=" ls01_tab_3"><a href="">외야수</a></li>
										</ul>
										<div class="PL_REC ls01_1">
											<ul>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
										</div>
										<div class="PL_REC ls01_2 active">
											<ul>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
										</div>
										<div class="PL_REC ls01_3">
											<ul>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
												<li>
													<p><a href="player_info_hitter.php"><img src="../../image/game/pic07.jpg" alt="" /></a></p>
													<h4><a href="player_info_hitter.php">최재원</a></h4>
													<p>1990년 7월 30일</p>
													<span>No.6</span>
												</li>
											</ul>
										</div>
										<span class="clear"></span>
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