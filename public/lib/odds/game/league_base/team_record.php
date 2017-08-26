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

		//선수기록
		for(var i=1;i<21;i++){		
			(function (k){
				$(".table_w2 table th span.pr_" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					//$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};

		//순위 확장테이블
		$(".table_w2_1 .nextTable a").click(function(){ 
			$(this).parent().siblings(".next_table").slideToggle(); 
			return false;
		});
		//순위 확장테이블_2
		$(".table_w2_2 .nextTable1 a").click(function(){ 
			$(this).parent().siblings(".next_table2").slideUp(); 
			$(this).parent().siblings(".next_table").slideDown(); 
			$(this).parent().css("display","none"); 
			$(".nextTable2").css("display","block"); 
			return false;
		});
		$(".table_w2_2 .nextTable2 a").click(function(){ 
			$(this).parent().siblings(".next_table2").slideDown(); 
			$(this).parent().css("display","none"); 
			$(".nextTable3").css("display","block"); 
			return false;
		});
		$(".table_w2_2 .nextTable3 a").click(function(){ 
			$(this).parent().siblings(".next_table").slideUp(); 
			$(this).parent().siblings(".next_table2").slideUp(); 
			$(this).parent().css("display","none"); 
			$(".nextTable1").css("display","block"); 
			return false;
		});

	});



 </script>

	
				<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>


				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 대한민국</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">2017 KBO</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=" "><a href="league.php">리그정보</a></li>
							<li class=""><a href="result.php">경기 결과</a></li>
							<li class=""><a href="stats.php">리그 통계</a></li>
							<li class="on"><a href="team_record.php">팀 기록</a></li>
							<li class=""><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active s1">
								<div class="pb50 relative">
									<h3 class="noBorder">팀 종합기록</h3>
									<!-- MLB에서만 출력 시작
									<div class="tab2_w right" style="right:110px;">
										<ul class="tab02 LS_tab">
											<li class="on"><a href="">내셔널리그</a></li>
											<li class=""><a href="">아메리칸리그</a></li>
										</ul>
									</div>
									<div class="select">
										<p class="off"><span class="pp">동부 지구</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">중부 지구</a></li>
											<li class=""><a href="">서부 지구</a></li>
										</ul>
									</div> -->
									<!-- MLB에서만 출력 끝 -->
									<table class="table_default table_2_left" >
										<caption></caption>
										<colgroup>
											<col width="63px"/>
											<col width="*"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="60px"/>
											<col width="270px"/>
										</colgroup>
										<tr>
											<th>순위</th>
											<th>팀</th>
											<th>경기수</th>
											<th>승률</th>
											<th>승</th>
											<th>패</th>
											<th>타이</th>
											<th>득:실</th>
											<th>마진</th>
											<th>게임차</th>
											<th>최근 10경기</th>
										</tr>
										<tr>
											<td><span class="rankdot01_color"><b>1</b></span></td>
											<td>두산 베어스</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><span class="rankdot02_color"><b>2</b></span></td>
											<td>NC 다이노스</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><span class="rankdot03_color"><b>3</b></span></td>
											<td>넥센 히어로즈</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><span class="rankdot04_color"><b>4</b></span></td>
											<td>LG 트윈스</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><span class="rankdot04_color"><b>5</b></span></td>
											<td>KIA 타이거즈</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><b>6</b></td>
											<td>SK 와이번스</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><b>7</b></td>
											<td>한화 이글스</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><b>8</b></td>
											<td>롯데 자이언트</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><b>9</b></td>
											<td>삼성 라이온즈</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
										<tr>
											<td><b>10</b></td>
											<td>KT 위즈</td>
											<td>11</td>
											<td>0.657</td>
											<td>11</td>
											<td>11</td>
											<td>11</td>
											<td>48:29</td>
											<td>+19</td>
											<td>0</td>
											<td>
												<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
											</td>
										</tr>
									</table>
								</div>
								<div class="pb50 relative">
									<h3>일자별 순위 그래프</h3>
									<!-- MLB에서만 출력 시작
									<div class="tab2_w right" style="right:110px;top:10px;">
										<ul class="tab02 LS_tab">
											<li class="on"><a href="">내셔널리그</a></li>
											<li class=""><a href="">아메리칸리그</a></li>
										</ul>
									</div>
									<div class="select" style="top:0;">
										<p class="off"><span class="pp">동부 지구</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">중부 지구</a></li>
											<li class=""><a href="">서부 지구</a></li>
										</ul>
									</div> -->
									<!-- MLB에서만 출력 끝 -->
									<div class="date">
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
									<ul class="radio_w">
										<li><input type="radio" id="rd01" name="change"/><label for="rd01">순위변화보기</label></li>
										<li><input type="radio" id="rd02" name="change"/><label for="rd02">승률변화보기</label></li>
									</ul>
									<div class="graybox2">
										<img src="../../image/game/record_graph.jpg" alt="" />
										<p><b>Tip.</b> 오른쪽 팀명을 선택하시면 팀별로 순위 그래프를 확인하실 수 있습니다.</p>
									</div>
								</div>
								<div class="pb50 relative">
									<h3 class="noBorder">KBO 공격력 순위</h3>
									<!-- MLB에서만 출력 시작
									<div class="tab2_w right" style="right:305px;top:10px;">
										<ul class="tab02 LS_tab">
											<li class="on"><a href="">내셔널리그</a></li>
											<li class=""><a href="">아메리칸리그</a></li>
										</ul>
									</div>
									<div class="select" style="top:0;right:193px;">
										<p class="off"><span class="pp">동부 지구</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">중부 지구</a></li>
											<li class=""><a href="">서부 지구</a></li>
										</ul>
									</div> -->
									<!-- MLB에서만 출력 끝 -->
									<div class="select" style="top:0;right:107px;">
										<p class="off"><span class="pp">2016</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">2015</a></li>
											<li class=""><a href="">2014</a></li>
										</ul>
									</div>
									<div class="select" style="top:0;right:0;">
										<p class="off"><span class="pp">정규시즌</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">-</a></li>
											<li class=""><a href="">-</a></li>
										</ul>
									</div>
									<div class="table_w2 table_w2_1 relative">
										<div class="relative">
											<table class="table_default table_2_left">
												<caption></caption>
												<colgroup>
													<col width="48px"/>
													<col width="200px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="53px"/>
													<col width="76px"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
											<table class="table_default table_2_left">
												<caption></caption>
												<colgroup>
													<col width="48px"/>
													<col width="200px"/>
													<col width="65px"/>
													<col width="65px"/>
													<col width="75px"/>
													<col width="68px"/>
													<col width="83px"/>
													<col width="68px"/>
													<col width="68px"/>
													<col width="68px"/>
													<col width="78px"/>
													<col width="74px"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
													<th><span class="pr_1">장타율</span></th>
													<th><span class="pr_2">출루율</span></th>
													<th><span class="pr_3">OPS</span></th>
													<th><span class="pr_4">멀티히트</span></th>
													<th><span class="pr_5">득점권타율</span></th>
													<th><span class="pr_6">대타타율</span></th>
													<th><span class="pr_7">도루시도</span></th>
													<th><span class="pr_8">도루실패</span></th>
													<th><span class="pr_9">도루성공률</span></th>
													<th><span class="pr_10">주루사</span></th>
												</tr>
												<tr>
													<td>1</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>2</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>3</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>4</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>5</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>6</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>7</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>8</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>9</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
												<tr>
													<td>10</td>
													<td>KIA 타이거즈</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
													<td>5.07</td>
													<td>7.55</td>
													<td>0.389</td>
													<td>0.471</td>
													<td>163.0</td>
												</tr>
											</table>
										</div>
										<p class="nextTable"><a href=""></a></p>
									</div>
								</div>
								<div class="pb50 relative">
									<h3 class="noBorder">KBO 수비력 순위</h3>
									<!-- MLB에서만 출력 시작
									<div class="tab2_w right" style="right:305px;top:10px;">
										<ul class="tab02 LS_tab">
											<li class="on"><a href="">내셔널리그</a></li>
											<li class=""><a href="">아메리칸리그</a></li>
										</ul>
									</div>
									<div class="select" style="top:0;right:193px;">
										<p class="off"><span class="pp">동부 지구</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">중부 지구</a></li>
											<li class=""><a href="">서부 지구</a></li>
										</ul>
									</div> -->
									<!-- MLB에서만 출력 끝 -->
									<div class="select" style="top:0;right:107px;">
										<p class="off"><span class="pp">2016</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">2015</a></li>
											<li class=""><a href="">2014</a></li>
										</ul>
									</div>
									<div class="select" style="top:0;right:0;">
										<p class="off"><span class="pp">정규시즌</span><span class="pa"></span></p>
										<ul>
											<li class=""><a href="">-</a></li>
											<li class=""><a href="">-</a></li>
										</ul>
									</div>
									<div class="table_w2 table_w2_2 relative">
										<div class="relative">
											<table class="table_default table_2_left">
												<caption></caption>
												<colgroup>
													<col width="54px"/>
													<col width="162px"/>
													<col width="63px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="*"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
													<th><span class="pr_1">평균자책</span></th>
													<th><span class="pr_2">경기</span></th>
													<th><span class="pr_3">승리</span></th>
													<th><span class="pr_4">패</span></th>
													<th><span class="pr_5">세이브</span></th>
													<th><span class="pr_6">홀드</span></th>
													<th><span class="pr_7">승률</span></th>
													<th><span class="pr_8">이닝</span></th>
													<th><span class="pr_9">피안타</span></th>
													<th><span class="pr_10">피홈런</span></th>
													<th><span class="pr_11">볼넷</span></th>
													<th><span class="pr_12">사구</span></th>
													<th><span class="pr_13">삼진</span></th>
												</tr>
												<tr>
													<td>1</td>
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
													<td>KIA 타이거즈</td>
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
											<table class="table_default table_2_left">
												<caption></caption>
												<colgroup>
													<col width="54px"/>
													<col width="162px"/>
													<col width="57px"/>
													<col width="56px"/>
													<col width="75px"/>
													<col width="50px"/>
													<col width="50px"/>
													<col width="50px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="*"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
													<th><span class="pr_1">실점</span></th>
													<th><span class="pr_2">자책점</span></th>
													<th><span class="pr_3"><span class="lh2">이닝당<br />출루허용률</span></span></th>
													<th><span class="pr_4">완투</span></th>
													<th><span class="pr_5">완봉</span></th>
													<th><span class="pr_6">QS</span></th>
													<th><span class="pr_7"><span class="lh2">블론<br />세이브</span></span></th>
													<th><span class="pr_8">타자수</span></th>
													<th><span class="pr_9">투구수</span></th>
													<th><span class="pr_10">피안타율</span></th>
													<th><span class="pr_11"><span class="lh2">2루타<br />허용</span></span></th>
													<th><span class="pr_12"><span class="lh2">3루타<br />허용</span></span></th>
													<th><span class="pr_13"><span class="lh2">희생번트<br />허용</span></span></th>
												</tr>
												<tr>
													<td>1</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>2</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>3</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>4</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>5</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>6</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>7</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>8</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>9</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
												<tr>
													<td>10</td>
													<td>KIA 타이거즈</td>
													<td>31</td>
													<td>144</td>
													<td>114</td>
													<td>2</td>
													<td>83</td>
													<td>2.95</td>
													<td>28</td>
													<td>167</td>
													<td>22</td>
													<td>3</td>
													<td>0</td>
													<td>0</td>
													<td>142</td>
												</tr>
											</table>
										</div>
										<p class="nextTable nextTable1"><a href=""></a></p>
										<div class="next_table2" style="display:none;">
											<table class="table_default table_2_left">
												<caption></caption>
												<colgroup>
													<col width="54px"/>
													<col width="162px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="56px"/>
													<col width="*"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
													<th><span class="pr_1"><span class="lh2">희생<br />플라이</span></span></th>
													<th><span class="pr_2">고의사구</span></th>
													<th><span class="pr_3">폭투</span></th>
													<th><span class="pr_4">보크</span></th>
													<th><span class="pr_5">실책</span></th>
													<th><span class="pr_6">견제사</span></th>
													<th><span class="pr_7">자살</span></th>
													<th><span class="pr_8">보살</span></th>
													<th><span class="pr_9">병살</span></th>
													<th><span class="pr_10">수비율</span></th>
													<th><span class="pr_11">포일</span></th>
													<th><span class="pr_12">도루허용</span></th>
													<th><span class="pr_13"><span class="lh2">도루<br />저지율</span></span></th>
												</tr>
												<tr>
													<td>1</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>2</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>3</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>4</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>5</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>6</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>7</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>8</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>9</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
												<tr>
													<td>10</td>
													<td>KIA 타이거즈</td>
													<td>151</td>
													<td>15</td>
													<td>61</td>
													<td>57</td>
													<td>9</td>
													<td>0.880</td>
													<td>19</td>
													<td>27</td>
													<td>0.40</td>
													<td>182</td>
													<td>1.115</td>
													<td>0.275</td>
													<td>0.389</td>
												</tr>
											</table>
										</div>
										<p class="nextTable nextTable2" style="display:none;"><a href=""></a></p>
										<p class="nextTable nextTable3" style="display:none;"><a href=""></a></p>
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