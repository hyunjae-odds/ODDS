<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 

		//game_league _ 상단리그종류메뉴
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});

		//선수기록
		for(var i=1;i<21;i++){		
			(function (k){
				$(".table_w3 table th span.pr_" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					//$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().next().css("font-weight","bold");
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
						<li class=""><a href="result.php">경기 결과</a></li>
						<li class=""><a href="stats.php">리그 통계</a></li>
						<li class="on"><a href="record.php">팀 기록</a></li>
						<li class=""><a href="record.php">선수 기록</a></li>
						<li class=""><a href="score.php">상대 전적</a></li>
					</ul>
					<ul class="tab_view01 gameMain_view">
						<li class="active ">
							<div class="table_w3 pb50">
								<h3 class="noBorder">팀 공격력 순위</h3>
								<table class="table_default table_2_left">
									<caption></caption>
									<colgroup></colgroup>
									<tr>
										<th>순위</th>
										<th>팀명</th>
										<th>경기수</th>
										<th><span class="pr_1">득점</span></th>
										<th><span class="pr_2">점유율</span></th>
										<th><span class="pr_3">슈팅(유효)</span></th>
										<th><span class="pr_4">오프사이드</span></th>
										<th><span class="pr_5">코너킥</span></th>
										<th><span class="pr_6">패널티킥</span></th>
										<th><span class="pr_7">파울</span></th>
										<th><span class="pr_8">피파울</span></th>
									</tr>
									<tr>
										<td>1</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>2</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>3</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>4</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>5</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>6</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>7</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>8</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>9</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
									<tr>
										<td>10</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
										<td>71</td>
										<td>5</td>
									</tr>
								</table>
							</div>
							<div class="table_w3 pb50">
								<h3 class="noBorder">팀 수비력 순위</h3>
								<table class="table_default table_2_left">
									<caption></caption>
									<colgroup></colgroup>
									<tr>
										<th>순위</th>
										<th>팀명</th>
										<th>경기수</th>
										<th><span class="pr_1">슈팅허용</span></th>
										<th><span class="pr_2">유효슈팅허용</span></th>
										<th><span class="pr_3">파울</span></th>
										<th><span class="pr_4">옐로카드</span></th>
										<th><span class="pr_5">레드카드</span></th>
										<th><span class="pr_6">자살골</span></th>
									</tr>
									<tr>
										<td>1</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>2</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>3</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>4</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>5</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>6</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>7</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>8</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>9</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
									<tr>
										<td>10</td>
										<td><a href="team_info.php">맨체스터유나이티드</a></td>
										<td>26</td>
										<td>12</td>
										<td>2</td>
										<td>12</td>
										<td>21</td>
										<td>16</td>
										<td>16</td>
									</tr>
								</table>
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