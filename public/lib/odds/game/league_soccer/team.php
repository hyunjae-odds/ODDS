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

		//live_onoff 라이브중계 열고닫기
/*		$(".live_onoff li:eq(0) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".team_top > .full_ul").slideUp(); 
			$(".team_top > h3").slideUp(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});
		$(".live_onoff li:eq(1) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".team_top > .full_ul").slideDown(); 
			$(".team_top > h3").slideDown(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});*/

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
							<li class=""><a href="situation.php">선수 현황</a></li>
							<li class="on"><a href="team.php">팀 소개</a></li>
						</ul>
						<ul class="tab_view01">
							<li class="active pb50">
								<div class="team">
									<div>영국 프로축구클럽으로, 1884년 봄에 엠마뉴엘교회의 성서공부 회원들을 중심으로 레스터 포스 축구클럽(Leicester Fosse Football Club)으로 창단하였다. <br /><br />

										오랜 역사를 지닌 클럽으로, 정식명칭은 레스터시티 축구클럽(Leicester City Football Club)이고 클럽 애칭은 여우들(Foxes)이다.<br /><br />

										1890년 축구협회에 가입하였으며, 1908년 1부 리그에 처음으로 올랐다. 제1차 세계대전 전후로 재정난을 겪다가 1919년 7월 클럽을 재정비하면서 지금의 
										클럽명으로 바꾸었다. 잉글랜드 프리미어리그(EPL) 설립 전인 1928~1929 시즌 1부 리그에서 준우승했다. 1964년 FA컵(Football Association Cup:축구협회컵) 
										우승을 차지하고 1965년에는 준우승을 하는 등 전성기를 맞았다. <br /><br />

										이후 별다른 전적을 올리지 못하다가 1994년 1부 리그에 올랐다. 다음 시즌에 2부 리그로 떨어졌다가 1996∼97년 시즌에 다시 1부 리그에 오르며 중위권을 
										유지하였지만 2002년에 다시 강등되었다. 1999∼2000년 시즌에는 16승 7무 15패를 기록하여 8위를 차지하였다. 이후 2013~14년 시즌 2부 리그에서 우승하여 
										1부 리그로 승격된 후, 2015~2016 잉글랜드 프리미어리그(EPL)에서 우승을 차지했다.
										</div>
									<div class="graybox">
										<ul>
											<li><span><b>감독 : </b>클라우디오 라니에리</span> <span><b>소속 국가 : </b>잉글랜드</span> <b>창단 년도 : </b>1884년</li>
											<li><b>연고지 : </b>영국 레스터셔주 레스터 / Leicester City Football Club, King Power Stadium, Filbert Way, Leicester, LE2 7FL</li>
											<li><b>홈구장 : </b>킹 파워 스타디움(King Power Stadium) / 수용인원 3만 2262명</li>
											<li><b>홈페이지 : </b><a href="http://www.lcfc.com/" target="_blank">http://www.lcfc.com</a> / <a href="mailTo:lcfchelp@lcfc.co.uk">lcfchelp@lcfc.co.uk</a>  </li>
										</ul>
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