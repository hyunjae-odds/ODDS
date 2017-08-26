<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	

		//선수기록_테이블변경버전
		for(var i=1;i<9;i++){		
			(function (k){
				$(".Ltable table th span.n" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					$(this).parents(".table_default").siblings("div").addClass("redline p" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};

		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});

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
						<!--li class=" "><a href="stats.php">리그 통계</a></li>
						<li class=""><a href="team_record.php">팀 기록</a></li-->
						<li class="on"><a href="record.php">선수 기록</a></li>
						<li class=""><a href="score.php">상대 전적</a></li>
					</ul>
					<ul class="tab_view01 gameMain_view">
						<li class="s5 active pb50">
							<div class="relative">
								<div class="Ltable">
									<table class="table_default record_Ltable">
										<caption></caption>
										<colgroup>
											<col width="67px"/>
											<col width="*"/>
											<col width="90px"/>
											<col width="90px"/>
											<col width="90px"/>
											<col width="90px"/>
											<col width="90px"/>
											<col width="75px"/>
										</colgroup>
										<tr>
											<th>순위</th>
											<th class="left">선수명</th>
											<th><span class="n1 rn">경기</span></th>
											<th><span class="n2 rn">경기 시간</span></th>
											<th><span class="n3 rn">득점</span></th>
											<th><span class="n4 rn">옐로우카드</span></th>
											<th><span class="n5 rn">레드카드</span></th>
											<th><span class="n6 rn">패널티킥</span></th>
										</tr>
										<tr>
											<td><b>1</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>2</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>3</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>4</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>5</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>6</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>7</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>8</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>9</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>10</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>11</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>12</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>13</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>14</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>15</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>16</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>17</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>18</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>19</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
										<tr>
											<td><b>20</b></td>
											<td class="left"><b>해리케인</b> (토트넘)</td>
											<td>37</td>
											<td>25</td>
											<td>13</td>
											<td>6</td>
											<td>2</td>
											<td>0</td>
										</tr>
									</table>
									<div class="redline p1">
										<span class="bt"></span>
										<span class="bl"></span>
										<span class="br"></span>
										<span class="bb"></span>
									</div>
								</div>
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
						</li>
					</ul>
				</div>
				
			</div>


			
<?php 
include("../footer.php");
?>


 </body>
 </html>