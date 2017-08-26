<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	



		// -----  리그통계 내 Tab 시작

		//리그승률/리그언더/리그홈런
		for(var i=1;i<8;i++){		
			(function (k){
				$(".firTab > li.r_tit1_" + k ).click(function(){ 
					$(".firTab li").removeClass("on");
					$(this).addClass("on");
					$(".gameMain_view > li").css("display","none");
					$(".gameMain_view > li").eq(k-1).css("display","block");
					return false;
				});
			}(i));
		};

		//승패/핸디캡/오버언더/팀별득점
		for(var i=1;i<8;i++){		
			(function (k){
				$(".TLS > li.ls0" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().parent().siblings().find("> li").removeClass("active");
					$(this).parent().parent().siblings().find("> li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};


		//이닝셀렉트
		for(var i=1;i<5;i++){		
			(function (k){
				$(".inning_select li.is0" + k + " a").click(function(){ 
					$(this).parent().parent().parent().siblings(".inning_view").find("li").removeClass("active");
					$(this).parent().parent().parent().siblings(".inning_view").find("li.iv0"+k).addClass("active");
					$(this).parent().parent().slideUp();
					$(this).parent().parent().siblings().addClass("off").removeClass("on");
					return false;
				});
			}(i));
		};

		// -----  리그통계 내 Tab 끝



		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
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
							<li class="on"><a href="stats.php">리그 통계</a></li>
							<li class=""><a href="team_record.php">팀 기록</a></li>
							<li class=""><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						
						<div class="relative">

							<ul class="firTab">
								<li class="on r_tit1_1"><a href="">리그 승률</a></li>
								<li class="r_tit1_2"><a href="">리그 안타</a></li>
								<li class="r_tit1_3"><a href="">리그 홈런</a></li>
							</ul>

							<ul class="tab_view01 gameMain_view">
								<li class="active" style="padding-top:40px;"><!-- 리그 승률 -->
									<div class="tab01_w">
										<ul class="tab01_2 TLS">
											<li class="on ls01"><a href="">승패</a></li>
											<li class="ls02"><a href="">핸디캡</a></li>
											<li class="ls03"><a href="">오버언더</a></li>
											<li class="ls04"><a href="">팀별득점</a></li>
										</ul>
									</div>
									<ul class="LS_view_w">
										<li class="active"><!-- 승률 _ 승패 -->
											<div class="pt15">
												<div class="select inning_select">
													<p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
													<ul>
														<li class="is01"><a href="">풀타임</a></li>
														<li class="is02"><a href="">5이닝</a></li>
														<li class="is03"><a href="">1이닝</a></li>
													</ul>
												</div>
												<ul class="inning_view">
													<li class="iv01 active"><!-- 풀타임 -->
														<div class="tab2_w tab2_w_2">
															<!--ul class="tab02 LS_tab">
																<li class=" "><a href="">1.0</a></li>
																<li class=""><a href="">1.5</a></li>
																<li class="on"><a href="">2.0</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul-->
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">KBO 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv02"><!-- 5이닝 -->
														<!--div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class="on "><a href="">1.0</a></li>
																<li class=""><a href="">1.5</a></li>
																<li class=""><a href="">2.0</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul>
														</div-->
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">5이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">5이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv03 "><!-- 1이닝 -->
														<!--div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class="on "><a href="">1.0</a></li>
																<li class=""><a href="">1.5</a></li>
																<li class=""><a href="">2.0</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul>
														</div-->
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">1이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승무패통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">무승부</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">원정</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체 득점</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 득점</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀 득점</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">0.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">1.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회초득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회말득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">1이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>승무패(무) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">무</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>승무패(승) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>0.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>초/말득점(노) 상위5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승무패(무) 최근 상위5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">무/승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li><!-- 승률 _ 핸디캡 -->
											<div class="pt15">
												<div class="select inning_select">
													<p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
													<ul>
														<li class="is01"><a href="">풀타임</a></li>
														<li class="is02"><a href="">5이닝</a></li>
													</ul>
												</div>
												<ul class="inning_view">
													<li class="iv01 active"><!-- 풀타임 -->
														<div class="tab2_w tab2_w_2">
															<!--ul class="tab02 LS_tab">
																<li class=" "><a href="">1.0</a></li>
																<li class="on"><a href="">1.5</a></li>
																<li class=""><a href="">2.0</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul-->
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>확률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>확률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>확률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
																<td>144</td>
																<td>65%</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">KBO 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv02"><!-- 5이닝 -->
														<div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class="on "><a href="">0.5</a></li>
																<li class=""><a href="">1.0</a></li>
																<li class=""><a href="">1.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>타이</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">5이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.0</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 3.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 4.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 5.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">5이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 승률 _ O/U -->
											<div class="pt15">
												<div class="select inning_select">
													<p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
													<ul>
														<li class="is01"><a href="">풀타임</a></li>
														<li class="is02"><a href="">5이닝</a></li>
														<li class="is03"><a href="">1이닝</a></li>
													</ul>
												</div>
												<ul class="inning_view">
													<li class="iv01 active"><!-- 풀타임 -->
														<div class="tab2_w tab2_w_2">
															<!--ul class="tab02 LS_tab">
																<li class=" "><a href="">8.5</a></li>
																<li class="on"><a href="">9.5</a></li>
																<li class=""><a href="">10.5</a></li>
															</ul-->
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">KBO 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv02"><!-- 5이닝 -->
														<div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class=" "><a href="">3.5</a></li>
																<li class="on"><a href="">4.5</a></li>
																<li class=""><a href="">5.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">5이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">5이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv03 "><!-- 1이닝 -->
														<div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class="on "><a href="">0.5</a></li>
																<li class=""><a href="">1.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">1이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승무패통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">무승부</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">0.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">1.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회초 득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회말 득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">1이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>승무패(무) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">무</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
															</ul></div>
															<div><h4>승무패(승) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
															</ul></div>
															<div><h4>0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>0.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>초/말득점(노) 상위5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승무패(무) 최근 상위5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">무/승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 승률 _ 팀별득점 -->
											<div class="pt15">
												<div class="select inning_select">
													<p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
													<ul>
														<li class="is01"><a href="">풀타임</a></li>
														<li class="is02"><a href="">5이닝</a></li>
														<li class="is03"><a href="">1이닝</a></li>
													</ul>
												</div>
												<ul class="inning_view">
													<li class="iv01 active"><!-- 풀타임 -->
														<div class="tab2_w tab2_w_2">
															<!--ul class="tab02 LS_tab">
																<li class=" "><a href="">3.5</a></li>
																<li class="on"><a href="">4.5</a></li>
																<li class=""><a href="">5.5</a></li>
															</ul-->
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">KBO 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>9.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv02"><!-- 5이닝 -->
														<div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class=" "><a href="">3.5</a></li>
																<li class="on"><a href="">4.5</a></li>
																<li class=""><a href="">5.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득점</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>155</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">5이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">5이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>홈승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>원정승률, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
																<li class="td"><p class="top_t4">LG 트윈스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">KIA 타이거즈</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">두산 베어스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">롯데 자이언트</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
																<li class="td"><p class="top_t4">SK 와이번스</p><p class="top_s4">21</p><p class="top_s4">10</p><p class="top_s4">5</p><p class="top_g4">0.755</p></li>
															</ul></div>
															<div><h4>리그득점, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>득점마진, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>9.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승패, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>승패, 최근 10경기 하위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>4.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
													<li class="iv03 "><!-- 1이닝 -->
														<div class="tab2_w tab2_w_2">
															<ul class="tab02 LS_tab">
																<li class="on "><a href="">0.5</a></li>
																<li class=""><a href="">1.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/><col width="50px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="41px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>O%</th>
																<th>오버</th>
																<th>언더</th>
																<th>득:실</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>65%</td>
																<td>85</td>
																<td>55</td>
																<td>95:75</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">1이닝 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">승무패통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">무승부</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">0.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
																	<li class="td"><p class="top_t3">1.5 오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5 언더</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회초 득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">1회말 득점</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">1이닝 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>승무패(무) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">무</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
															</ul></div>
															<div><h4>승무패(승) 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">50%</p></li>
															</ul></div>
															<div><h4>0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>0.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>초/말득점(노) 상위5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">노</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>승무패(무) 최근 상위5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">무/승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_dra.png" alt="무" title="두산 4:4 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5오버, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>0.5언더, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
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
								</li>
								<li class="" style="padding-top:40px;"><!-- 리그 안타 -->
									<div class="tab01_w">
										<ul class="tab01_2 TLS">
											<li class="on ls01"><a href="">핸디캡</a></li>
											<li class="ls02"><a href="">전체안타</a></li>
											<li class="ls03"><a href="">팀별안타</a></li>
											<li class="ls04"><a href="">안타마진</a></li>
										</ul>
									</div>
									<ul class="LS_view_w">
										<li class="active"><!-- 안타 _ 핸디캡 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="tab2_w tab2_w_2 tab2_w_2_">
															<ul class="tab02 LS_tab">
																<li class=" "><a href="">0.0</a></li>
																<li class=" on"><a href="">0.5</a></li>
																<li class=""><a href="">1.5</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>득:실</th>
																<th>경기당</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>																
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>95:75</td>
																<td>9.5</td>		
															</tr>
														</table>
														<h3 class="center noBorder pt50">안타 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 9.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 4.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">안타핸디캡</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">2.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 4.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 2.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 0.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">안타 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>리그안타, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>안타핸디캡0.5, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>전체안타 9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀안타 4.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>안타마진 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
															</ul></div>
															<div>
																<h4>안타핸디캡 0.5, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체안타 9.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀안타 4.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 안타 _ 전체안타 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<ul class="tab02 tab02_absolute">
															<li class="on ls_all"><a href="">전체</a></li>
															<li class="ls_home"><a href="">홈</a></li>
															<li class="ls_team"><a href="">원정</a></li>
														</ul>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" "><a href="">3.5</a></li>
																		<li class="on"><a href="">4.5</a></li>
																		<li class=" "><a href="">5.5</a></li>
																	</ul>
																</th>
																<th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" "><a href="">1.5</a></li>
																		<li class="on"><a href="">2.5</a></li>
																		<li class=" "><a href="">3.5</a></li>
																	</ul>
																</th>
																<th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" on"><a href="">0.5</a></li>
																		<li class=""><a href="">1.5</a></li>
																	</ul>
																</th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>																
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>																														
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
														</table>
														<h3 class="center noBorder pt50">안타 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 9.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 4.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">안타핸디캡</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">2.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 4.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 2.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 0.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">안타 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>리그안타, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>안타핸디캡0.5, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>전체안타 9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀안타 4.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>안타마진 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
															</ul></div>
															<div>
																<h4>안타핸디캡 0.5, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체안타 9.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀안타 4.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 안타 _ 팀별안타 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<ul class="tab02 tab02_absolute">
															<li class="on ls_all"><a href="">전체</a></li>
															<li class="ls_home"><a href="">홈</a></li>
															<li class="ls_team"><a href="">원정</a></li>
														</ul>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" "><a href="">3.5</a></li>
																		<li class="on"><a href="">4.5</a></li>
																		<li class=" "><a href="">5.5</a></li>
																	</ul>
																</th>
																<th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" "><a href="">1.5</a></li>
																		<li class="on"><a href="">2.5</a></li>
																		<li class=" "><a href="">3.5</a></li>
																	</ul>
																</th>
																<th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a>
																	<ul class="w_th_ul">
																		<li class=" on"><a href="">0.5</a></li>
																		<li class=""><a href="">1.5</a></li>
																	</ul>
																</th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>안타</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>안타</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>안타</th>
																<th>경기당</th>																
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>																														
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>75</td>
																<td>4.5</td>	
															</tr>
														</table>
														<h3 class="center noBorder pt50">안타 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 9.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 4.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀별안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 4.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 2.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 0.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">안타핸디캡</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">2.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">안타 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>리그안타, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>안타핸디캡0.5, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>전체안타 9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀안타 4.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>안타마진 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
															</ul></div>
															<div>
																<h4>안타핸디캡 0.5, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체안타 9.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀안타 4.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 안타 _ 안타마진 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<ul class="tab02 tab02_absolute">
															<li class="on ls_all"><a href="">전체</a></li>
															<li class="ls_home"><a href="">홈</a></li>
															<li class="ls_team"><a href="">원정</a></li>
														</ul>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="38px"/><col width="45px"/><col width="44px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="45px"/><col width="44px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="45px"/><col width="44px"/><col width="55px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>안타</th>
																<th>피안타</th>
																<th>마진</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>안타</th>
																<th>피안타</th>
																<th>마진</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>안타</th>
																<th>피안타</th>
																<th>마진</th>
																<th>경기당</th>																															
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65</td>
																<td>10</td>
																<td>4.5</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">안타 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 9.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 4.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀별안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">풀이닝</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">5이닝</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">1이닝</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">2.45</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">풀이닝 4.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">5이닝 2.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">1이닝 0.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">안타핸디캡</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">2.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">안타 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>리그안타, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>안타핸디캡0.5, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>전체안타 9.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀안타 4.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>안타마진 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">155:145</p><p class="top_s3">55</p><p class="top_g3">1.7</p></li>
															</ul></div>
															<div>
																<h4>안타핸디캡 0.5, 최근 10경기 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스 0.5</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체안타 9.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀안타 4.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
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
								</li>
								<li class="" style="padding-top:40px;"><!-- 리그 홈런 -->
									<div class="tab01_w">
										<ul class="tab01_2 TLS">
											<li class="on ls01"><a href="">첫홈런</a></li>
											<li class="ls02"><a href="">전체홈런</a></li>
											<li class="ls03"><a href="">팀당홈런</a></li>
											<li class="ls04"><a href="">양팀홈런</a></li>
											<li class="ls05"><a href="">홈런분포</a></li>
										</ul>
									</div>
									<ul class="LS_view_w">
										<li class="active"><!-- 혼런 _ 첫홈런 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>노</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>노</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>승률</th>
																<th>승</th>
																<th>패</th>
																<th>노</th>
																<th>득:실</th>
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
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
																<td>144</td>
																<td>0.678</td>
																<td>9</td>
																<td>3</td>
																<td>5</td>
																<td>95:75</td>
															</tr>
														</table>
														<h3 class="center noBorder pt50">홈런 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
																	<li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
																	<li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>첫홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>리그홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>첫홈런 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 혼런 _ 전체홈런 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="tab2_w tab2_w_2 tab2_w_2_">
															<ul class="tab02 LS_tab">
																<li class=" "><a href="">0.5</a></li>
																<li class="on"><a href="">1.5</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>																
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>																														
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
														</table>
														<h3 class="center noBorder pt50">홈런 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
																	<li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
																	<li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>첫홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>리그홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>첫홈런 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 혼런 _ 팀당홈런 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="tab2_w tab2_w_2 tab2_w_2_">
															<ul class="tab02 LS_tab">
																<li class=" on"><a href="">0.5</a></li>
																<li class=""><a href="">1.5</a></li>
																<li class=""><a href="">2.5</a></li>
															</ul>
														</div>
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>
																<th>경기수</th>
																<th>Over</th>
																<th>O%</th>
																<th>득:실</th>
																<th>경기당</th>																
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>																														
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>	
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>
																<td>144</td>
																<td>75</td>
																<td>65%</td>
																<td>95:75</td>
																<td>4.5</td>		
															</tr>
														</table>
														<h3 class="center noBorder pt50">홈런 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
																	<li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
																	<li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>첫홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>리그홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>첫홈런 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 혼런 _ 양팀홈런 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>예스</th>
																<th>노</th>
																<th>Y%</th>
																<th>N%</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>예스</th>
																<th>노</th>
																<th>Y%</th>
																<th>N%</th>
																<th>득:실</th>
																<th>경기수</th>
																<th>예스</th>
																<th>노</th>
																<th>Y%</th>
																<th>N%</th>
																<th>득:실</th>																
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>																
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>
																<td>144</td>
																<td>55</td>
																<td>45</td>
																<td>65%</td>
																<td>35%</td>
																<td>95:75</td>		
															</tr>
														</table>
														<h3 class="center noBorder pt50">홈런 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
																	<li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
																	<li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>첫홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>리그홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>첫홈런 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class=""><!-- 혼런 _ 홈런분포 -->
											<div class="pt15">
												<ul class="inning_view">
													<li class="iv01 active">
														<div class="select" style="top:-50px;">
															<p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
															<ul>
																<li class=""><a href="">최근 10경기</a></li>
																<li class=""><a href="">최근 15경기</a></li>
																<li class=""><a href="">최근 20경기</a></li>
																<li class=""><a href="">최근 30경기</a></li>
															</ul>
														</div>
														<table class="table_default table_2_left table_all_home_visit table_all_home_visit3" >
															<caption></caption>
															<colgroup>
																<col width="63px"/><col width="*"/>
																<col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/><col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/><col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/>
															</colgroup>
															<tr class="w_th">
																<th colspan="2">&nbsp;</th>
																<th colspan="7">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="7">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
																<th colspan="7">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
															</tr>
															<tr>
																<th>순위</th>
																<th>팀</th>
																<th>경기수</th>
																<th>0개</th>
																<th>1개</th>
																<th>2개</th>
																<th>3개</th>
																<th>4개+</th>																
																<th>득:실</th>
																<th>경기수</th>
																<th>0개</th>
																<th>1개</th>
																<th>2개</th>
																<th>3개</th>
																<th>4개+</th>																
																<th>득:실</th>
																<th>경기수</th>
																<th>0개</th>
																<th>1개</th>
																<th>2개</th>
																<th>3개</th>
																<th>4개+</th>																
																<th>득:실</th>																															
															</tr>
															<tr>
																<td><span class="rankdot01_color"><b>1</b></span></td>
																<td>두산 베어스</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>																																												
															</tr>
															<tr>
																<td><span class="rankdot02_color"><b>2</b></span></td>
																<td>NC 다이노스</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><span class="rankdot03_color"><b>3</b></span></td>
																<td>넥센 히어로즈</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>4</b></span></td>
																<td>LG 트윈스</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><span class="rankdot04_color"><b>5</b></span></td>
																<td>KIA 타이거즈</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><b>6</b></td>
																<td>SK 와이번스</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><b>7</b></td>
																<td>한화 이글스</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><b>8</b></td>
																<td>롯데 자이언트</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><b>9</b></td>
																<td>삼성 라이온즈</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
															<tr>
																<td><b>10</b></td>
																<td>KT 위즈</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>
																<td>144</td>
																<td>25</td>
																<td>50</td>
																<td>25</td>
																<td>10</td>
																<td>10</td>
																<td>95:75</td>			
															</tr>
														</table>
														<h3 class="center noBorder pt50">홈런 리그요약</h3>
														<div class="TOP5">
															<div>
																<ul>
																	<li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																	<li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																	<li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
																	<li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																	<li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																	<li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
																	<li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
																</ul>
															</div>
															<div>
																<ul>
																	<li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
																	<li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
																	<li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
																</ul>
															</div>
															<p class="clear"></p>
														</div>
														<h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
														<div class="TOP5">
															<div><h4>첫홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>리그홈런 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
															</ul></div>
															<div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
															<ul>
																<li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
																<li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
																<li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
															</ul></div>
															<div>
																<h4>첫홈런 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">리버플</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
																		</p>
																		<p class="top_g2">1/<span class="blue">9</span></p>
																	</li>
																</ul>
															</div>
															<div>
																<h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
																<ul>
																	<li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
																	<li class="td">
																		<p class="top_t2">LG 트윈스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">KIA 타이거즈</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">두산 베어스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">롯데 자이언트</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
																	</li>
																	<li class="td">
																		<p class="top_t2">SK 와이번스</p>
																		<p class="top_s2">
																			<span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
																		</p>
																		<p class="top_g2"><span class="red">9</span>/1</p>
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
											
								</li>

							</ul>

						</div>
					</div>
					
				</div>
							
			
<?php 
include("../footer.php");
?>


 </body>
 </html>