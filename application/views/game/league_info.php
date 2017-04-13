<script type="text/javascript">


	$(document).ready(function(){ 	


		//matchTab
		$(".gameMain li:eq(0) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s1").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(1) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s2").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(2) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s3").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(3) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s6").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(4) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s4").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(5) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s5").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(6) a").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s6").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$("#s1 .btn01").click(function(){ $(".gameMain_view > li").removeClass("active"); $("#s2").addClass("active"); $(".gameMain li").removeClass("on"); $(".gameMain li:eq(1)").addClass("on"); return false;});


		//경기결과 내 Tab
		$(".r_tit li:eq(1) a").click(function(){ $(".r_view1 > li").removeClass("active"); $("#r01").addClass("active"); $(".r_tit li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".r_tit li:eq(0) a").click(function(){ $(".r_view1 > li").removeClass("active"); $("#r02").addClass("active"); $(".r_tit li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".r_tit2 li:eq(1) a").click(function(){ $(".r_view2 > li").removeClass("active"); $("#rr01").addClass("active"); $(".r_tit2 li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".r_tit2 li:eq(0) a").click(function(){ $(".r_view2 > li").removeClass("active"); $("#rr02").addClass("active"); $(".r_tit2 li").removeClass("on"); $(this).parent().addClass("on"); return false;});



		//matchTab2
		$(".LastGame li:eq(0) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss1").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(1) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss2").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(2) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss3").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(3) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss4").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(4) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss5").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(5) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss6").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(6) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss7").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".LastGame li:eq(7) a").click(function(){ $(".LastGame_view > li").removeClass("active"); $("#ss8").addClass("active"); $(".LastGame li").removeClass("on"); $(this).parent().addClass("on"); return false;});


		//ranking
		$("th>span.n1").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable1").css("display","block"); return false;	});
		$("th>span.n2").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable2").css("display","block"); return false;	});
		$("th>span.n3").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable3").css("display","block"); return false;	});
		$("th>span.n4").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable4").css("display","block"); return false;	});
		$("th>span.n5").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable5").css("display","block"); return false;	});
		$("th>span.n6").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable6").css("display","block"); return false;	});
		$("th>span.n7").click(function(){ $(this).parents(".ranking").find(".Ltable").css("display","none"); $(this).parents(".ranking").find(".Ltable7").css("display","block"); return false;	});


		

		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});

		

	});


 </script>
	

							
			<div class="livescore game">
				<div class="topTitle">
					<span>리그정보 - 축구 - <?=$league_info->country_name?></span>
					<h2 class="tit02"><?=$league_info->league_name?> <a href="" class="btn_arrow01"></a></h2>
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
					<p class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></p>
					<ul class="tab01 gameMain">
						<li class="on"><a href="#s1">리그정보</a></li>
						<li><a href="#s2">경기 결과</a></li>
						<li><a href="#s3">경기 일정</a></li>
						<li><a href="#s6">리그 통계</a></li>
						<li><a href="#s4">선수 기록</a></li>
						<li><a href="#s5">상대 전적</a></li>
					</ul>
					<ul class="tab_view01 gameMain_view">
						<li class="active" id="s1">
							<table class="table_default gametable">
								<caption></caption>
								<colgroup>
									<col width="118px"/>
									<col width="345px"/>
									<col width="45px"/>
									<col width="45px"/>
									<col width="50px"/>
									<col width="50px"/>
									<col width="50px"/>
									<col width="51px"/>
									<col width="78px"/>
									<col width="167px"/>
								</colgroup>
								<tr>
									<th colspan="2"><?=$league_game_num1?> ROUND</th>
									<th>B’s</th>
									<th>1</th>
									<th>x</th>
									<th>2</th>
									<th>&nbsp;</th>
									<th>over</th>
									<th>under</th>
									<th>DATA</th>
								</tr>

<!--
								<tr>
									<td>12.13 | 14:30</td>
									<td>아틸레티코 마드리드  vs  맨체스터 유나이티드</td>
									<td>24</td>
									<td class="red">1.24</td>
									<td class="red">4.29</td>
									<td class="red">2.13</td>
									<td class="graybox"><span>2.5</span></td>
									<td class="red">1.24</td>
									<td class="red">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="match.php">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>			
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
										<!-- 블로그팝업 --
										<div class="g_pop" style="display:none;">
											<h3>관련 블로그 보기</h3>
											<ul>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
											</ul>
											<div class="num">
												<span class="on"><a href="">1</a></span>
												<span><a href="">2</a></span>
												<span><a href="">3</a></span>
												<span><a href="">4</a></span>
												<span><a href="">5</a></span>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
										<!-- 전문가팝업 --
										<div class="r_pop" style="display:none;">
											<h3>전문가 의견 보기</h3>
											<ul>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
											</ul>
											<div class="num">
												<span class="on"><a href="">1</a></span>
												<span><a href="">2</a></span>
												<span><a href="">3</a></span>
												<span><a href="">4</a></span>
												<span><a href="">5</a></span>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
										<!-- 배당률팝업 --
										<div class="y_pop" style="display:none;">							
											<h3>레알마드리드 vs FC바르셀로나</h3>	
											<div>
												<ul class="y_btn">
													<li><a href="">전체 회사 보기</a></li>
													<li><a href="">선택 회사 보기</a></li>
												</ul>
												<ul>
													<li class="on"><a href="">승무패</a></li>
													<li><a href="">핸디캡</a></li>
													<li><a href="">오버언더</a></li>
												</ul>
												<div class="y_table_w">
													<table>
														<caption></caption>
														<colgroup>
															<col width="130px"/>
															<col width="109px"/>
															<col width="109px"/>
															<col width="109px"/>
														</colgroup>
														<tr>
															<th>배팅 회사</th>
															<th>홈팀 승</th>
															<th>무승부</th>
															<th>원정팀 승</th>
														</tr>
													</table>
													<div class="y_table">
														<table>
															<caption></caption>
															<colgroup>
																<col width="130px"/>
																<col width="109px"/>
																<col width="109px"/>
																<col width="109px"/>
															</colgroup>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>

															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><label for=""><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></label></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
												<div class="">
													<table>
														<caption></caption>
														<colgroup>
															<col width="131px"/>
															<col width="109px"/>
															<col width="109px"/>
															<col width="109px"/>
														</colgroup>
														<tr>
															<th>최고 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최저 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>평균 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최고 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최저 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>평균 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>

													</table>
												</div>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
									</td>
								</tr>-->
								<?php
									for($i=0;$i<count($game21);$i++){
										if($game21[$i]->run_game==$league_game_num1){
								?>
								<tr>
									<td><?=$game21[$i]->date?></td>
									<td><?=$game21[$i]->home_name?>  vs  <?=$game21[$i]->visit_name?></td>
									<td>24</td>
									<td class="red">1.24</td>
									<td class="red">4.29</td>
									<td class="red">2.13</td>
									<td class="graybox"><span>2.5</span></td>
									<td class="red">1.24</td>
									<td class="red">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="match.php">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>			
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
									</td>
								</tr>
								<?php }} ?>
							</table>
							<table class="table_default gametable">
								<caption></caption>
								<colgroup>
									<col width="118px"/>
									<col width="345px"/>
									<col width="45px"/>
									<col width="45px"/>
									<col width="50px"/>
									<col width="50px"/>
									<col width="50px"/>
									<col width="51px"/>
									<col width="78px"/>
									<col width="167px"/>
								</colgroup>
								<tr>
									<th colspan="2" style="color:#444;"><?=(int)$league_game_num1+1?> ROUND</th><!-- 현재 라운드? -->
									<th>B’s</th>
									<th>1</th>
									<th>x</th>
									<th>2</th>
									<th>&nbsp;</th>
									<th>over</th>
									<th>under</th>
									<th>DATA</th>
								</tr>
								<?php
									for($i=0;$i<count($game21);$i++){
										if((int)($game21[$i]->run_game)==(int)$league_game_num1+1){
								?>
								<tr>
									<td><?=$game21[$i]->date?></td>
									<td><?=$game21[$i]->home_name?>  vs  <?=$game21[$i]->visit_name?></td>
									<td>24</td>
									<td class="red">1.24</td>
									<td class="red">4.29</td>
									<td class="red">2.13</td>
									<td class="graybox"><span>2.5</span></td>
									<td class="red">1.24</td>
									<td class="red">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="match.php">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>			
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
									</td>
								</tr>
								<?php }} ?>
							</table>
							<h4>지난 경기 결과 <a href="#s2" class="btn01">전체 보기</a></h4>
							<table class="table_default gametable">
								<caption></caption>
								<colgroup>
									<col width="118px"/>
									<col width="383px"/>
									<col width="50px"/>
									<col width="56px"/>
									<col width="53px"/>
									<col width="45px"/>
									<col width="51px"/>
									<col width="78px"/>
									<col width="167px"/>
								</colgroup>
								<tr>
									<th colspan="2"><?=$league_game_num?> ROUND</th>
									<th>1</th>
									<th>x</th>
									<th>2</th>
									<th>&nbsp;</th>
									<th>over</th>
									<th>under</th>
									<th>DATA</th>
								</tr>
								<?php
									for($i=0;$i<count($game2);$i++){
										
								?>
								<tr>
									<td><?=$game2[$i]->date?></td>
									<td><?=$game2[$i]->home_name?>
									<?php if((int)$game2[$i]->home_score>(int)$game2[$i]->visit_score){ ?>
										<b class="score"><span class="red"><?=$game2[$i]->home_score?></span>:<?=$game2[$i]->visit_score?></b>
									<?php } else if((int)$game2[$i]->home_score<(int)$game2[$i]->visit_score) { ?>
										<b class="score"><?=$game2[$i]->home_score?>:<span class="red"><?=$game2[$i]->visit_score?></span></b>
									<?php } else { ?>
										<b class="score"><?=$game2[$i]->home_score?>:<?=$game2[$i]->visit_score?></b>
									<?php } ?>
									<?=$game2[$i]->visit_name?></td>
									<td>1.24</td>
									<td>4.29</td>
									<td class="red bold">2.13</td>
									<td class="graybox"><span>2.5</span></td>
									<td>1.24</td>
									<td class="red bold">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="match.php">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>			
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
									</td>
								</tr>
								<?php } ?>
							</table>
							<div class="game_w" style="margin-left:0;">
								<h3>2016/17 프리미어리그 통계</h3>
								<ul class="tab01 LastGame" style="top:-5px;">
									<li class="on"><a href="#ss1">시즌통계</a></li>
									<li><a href="#ss2">전반 통계</a></li>
									<li><a href="#ss3">홈/원정</a></li>
									<li><a href="#ss4">최근 기록</a></li>
									<li><a href="#ss5">O/U</a></li>
									<li><a href="#ss6">전반 O/U</a></li>
									<li><a href="#ss7">클린시트</a></li>
									<li><a href="#ss8">양팀 득점</a></li>
								</ul>
								<ul class="tab_view01 LastGame_view Team">
									<li class="active ranking" id="ss1">
										<div class="tab2_w">
											<ul class="tab02">
												<li class="on"><a href="">전체</a></li>
												<li><a href="">홈</a></li>
												<li><a href="">원정</a></li>
											</ul>
											<div class="select">
												<p>전체</p>
												<ul>
													<li><a href="">5경기</a></li>
													<li><a href="">10경기</a></li>
													<li><a href="">15경기</a></li>
													<li><a href="">20경기</a></li>
												</ul>
											</div>
										</div>
										<div class="Ltable Ltable1">
											<table class="table_default gametable">
												<caption></caption>
												<colgroup>
													<col width="67px"/>
													<col width="210px"/>
													<col width="96px"/>
													<col width="56px"/>
													<col width="68px"/>
													<col width="61px"/>
													<col width="56px"/>
													<col width="77px"/>
													<col width="62px"/>
													<col width="89px"/>
													<col width="*"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th>팀</th>
													<th>경기수</th>
													<th><span class="n1 rn">승</span></th>
													<th><span class="n2 rn">무</span></th>
													<th><span class="n3 rn">패</span></th>
													<th><span class="n4 rn">득점</span></th>
													<th><span class="n5 rn">실점</span></th>
													<th><span class="n6 rn">득실차</span></th>
													<th><span class="n7 rn">승점</span></th>
													<th>최근 5경기</th>
												</tr>

												<?php 
													$no=1;
													function wdl_view($aa){
														if($aa=='3') return "<span class='winL'>win</span>";
														else if($aa=='1') return "<span class='drawL'>draw</span>";
														else return "<span class='loseL'>lose</span>";
													}
													
													for($i=0;$i<sizeof($stats);$i++){ ?>

												<tr>
													<td>
													<?php 
														if($stats[$i][23]=='1') echo "<span class='rankdot01'></span>";
														else if($stats[$i][23]=='2') echo "<span class='rankdot02'></span>";
														else if($stats[$i][23]=='3') echo "<span class='rankdot03'></span>";
														else if($stats[$i][23]=='4') echo "<span class='rankdot04'></span>";
														else
													?>
													<b><?=$no;?></b></td>
													<td><span class="champiL"></span><?=$stats[$i][1]?></td>
													<td><?=(int)$stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]?></td>
													<td><?=$stats[$i][4]?></td>
													<td><?=$stats[$i][5]?></td>
													<td><?=$stats[$i][6]?></td>
													<td><?=$stats[$i][2]?></td>
													<td><?=$stats[$i][3]?></td>
													<td><?=(int)$stats[$i][2]-(int)$stats[$i][3]?></td>
													<td><?=$stats[$i][21]?></td>
													<td>
														<?php 
															$b=$stats[$i][8];
															$aa="";
															$aa = wdl_view(substr($b, 0, 1));
															echo $aa;
															$aa = wdl_view(substr($b, 1, 1));
															echo $aa;
															$aa = wdl_view(substr($b, 2, 1));
															echo $aa;
															$aa = wdl_view(substr($b, 3, 1));
															echo $aa;
															$aa = wdl_view(substr($b, 4, 1));
															echo $aa;
														?>
													</td>
												</tr>
												<?php $no++; } ?>
											</table>
											<div class="redline n1">
												<span class="bt"></span>
												<span class="bl"></span>
												<span class="br"></span>
												<span class="bb"></span>
											</div>
										</div>
										<p class="dot">
											<span class="rankdot01"></span> 챔피언스리그 직행
											<span class="rankdot02"></span> 챔피언스리그 예선
											<span class="rankdot03"></span> 유로파 리그
											<span class="rankdot04"></span> 리그 강등
										</p>
									</li>
								</ul>
								<div class="clear"></div>
							</div>
							<div class="game_w" style="margin-left:0;">
								<h3>리그 요약정보</h3>
								<div class="barGraph01_W">
									<div>
										<h4>홈/원정 승률</h4>
										<div class="grayBG">
											<ul>
												<li>
													
													<div class="red" style="height:<?=$hw2?>%"><?=$hw?><span><?=$hw2?>%</span></div>
													<p>홈승</p>
												</li>
												<li>
													<div class="gray" style="height:<?=$dr2?>%"><?=$dr?><span><?=$dr2?>%</span></div>
													<p>무승부</p>
												</li>
												<li>
													<div class="blue" style="height:<?=$vw2?>%"><?=$vw?><span><?=$vw2?>%</span></div>
													<p>원정승</p>
												</li>
											</ul>
										</div>
									</div>
									<div>
										<h4>홈/원정 득점</h4>
										<div class="grayBG">
											<ul>
												<li>
													<div class="red" style="height:<?=round($hg/($hg+$vg)*100,0)?>%"><?=$hg?><span><?=round($hg/($hg+$vg)*100,0)?>%</span></div>
													<p>홈 득점</p>
												</li>
												<li>
													<div class="blue" style="height:<?=round($vg/($hg+$vg)*100,0)?>%"><?=$vg?><span><?=round($vg/($hg+$vg)*100,0)?>%</span></div>
													<p>원정 득점</p>
												</li>
											</ul>
										</div>
									</div>
									<div>
										<h4>2.5 over/under</h4>
										<div class="grayBG">
											<ul>
												<li>
													<div class="red" style="height:<?=round($over25/($over25+$under25)*100,0)?>%"><?=$over25?><span><?=round($over25/($over25+$under25)*100,0)?>%</span></div>
													<p>over</p>
												</li>
												<li>
													<div class="blue" style="height:<?=round($under25/($over25+$under25)*100,0)?>%"><?=$under25?><span><?=round($under25/($over25+$under25)*100,0)?>%</span></div>
													<p>under</p>
												</li>
											</ul>
										</div>
									</div>
									<div>
										<h4>클린 시트</h4>
										<div class="grayBG">
											<ul>
												<li>
													<div class="red" style="height:<?=round($clean/($clean+$noclean)*100,0)?>%"><span><?=$clean?></span></div>
													<p>YES</p>
												</li>
												<li>
													<div class="blue" style="height:<?=round($noclean/($clean+$noclean)*100,0)?>%"><span><?=$noclean?></span></div>
													<p>NO</p>
												</li>
											</ul>
										</div>
									</div>
									<div>
										<h4>양팀 득점 성공</h4>
										<div class="grayBG">
											<ul>
												<li>
													<div class="red" style="height:<?=round($goal/($goal+$nogoal)*100,0)?>%"><?=$goal?><span><?=round($goal/($goal+$nogoal)*100,0)?>%</span></div>
													<p>YES</p>
												</li>
												<li>
													<div class="blue" style="height:<?=round($nogoal/($goal+$nogoal)*100,0)?>%"><?=$nogoal?><span><?=round($nogoal/($goal+$nogoal)*100,0)?>%</span></div>
													<p>NO</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="TOP5" style="margin-left:0;">
								<h3 class="toph3">각부분 상위 5팀</h3>
								<div>
									<h4>공격력 최강팀 TOP5</h4>
									<?php for($i=0;$i<5;$i++){ ?>
									<div>
										<p><?=$stats1[$i][1]?></p>
										<div>
											<div style="width:<?=(int)((int)$stats1[$i][2]/(int)$stats1[0][2]*100)?>%" class="red"></div>
											<span class="left"><?=$stats1[$i][2]?>골 <span class="small">(<?=round((int)$stats1[$i][2]/(int)($stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]), 2)?>골)</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>공격력 최약팀 TOP5</h4>
									<?php for($i=sizeof($stats1)-1;$i>sizeof($stats1)-6;$i--){ ?>
									<div>
										<p><?=$stats1[$i][1]?></p>
										<div>
											<div style="width:<?=(int)((int)$stats1[$i][2]/(int)$stats1[0][2]*100)?>%" class="blue"></div>
											<span class="right"><?=$stats1[$i][2]?>골 <span class="small">(<?=round((int)$stats1[$i][2]/(int)($stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]), 2)?>골)</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>수비력 최강팀 TOP5</h4>
									<?php for($i=0;$i<5;$i++){ ?>
									<div>
										<p><?=$stats1[$i][1]?></p>
										<div>
											<div style="width:<?=(int)((int)$stats2[$i][3]/(int)$stats2[sizeof($stats2)-1][3]*100)?>%" class="red"></div>
											<span class="right"><?=$stats2[$i][3]?>실점 <span class="small">(<?=round((int)$stats1[$i][3]/(int)($stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]), 2)?>골)</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>수비력 최약팀 TOP5</h4>
									<?php for($i=sizeof($stats2)-1;$i>sizeof($stats2)-6;$i--){ ?>
									<div>
										<p><?=$stats1[$i][1]?></p>
										<div>
											<div style="width:<?=(int)((int)$stats2[$i][3]/(int)$stats2[sizeof($stats2)-1][3]*100)?>%" class="blue"></div>
											<span class="left"><?=$stats2[$i][3]?>실점 <span class="small">(<?=round((int)$stats1[$i][3]/(int)($stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]), 2)?>골)</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div class="together">
									<h4>득점마진 최강팀 TOP5</h4>
									<?php for($i=0;$i<5;$i++){ ?>
									<div>
										<p><?=$stats3[$i][1]?></p>
										<div>
											<div style="width:<?=round(($stats3[$i][2]-$stats3[$i][3])/($stats3[$i][4]+$stats3[$i][5]+$stats3[$i][6]),2)/round(($stats3[0][2]-$stats3[0][3])/($stats3[0][4]+$stats3[0][5]+$stats3[0][6]),2)*100?>%" class="red"></div>
											<span class="left"><?=round(($stats3[$i][2]-$stats3[$i][3])/($stats3[$i][4]+$stats3[$i][5]+$stats3[$i][6]),2)?>골</span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div class="together">
									<h4>득점마진 최약팀 TOP5</h4>
									<?php for($i=sizeof($stats3)-1;$i>sizeof($stats3)-6;$i--){ ?>
									<div>
										<p><?=$stats3[$i][1]?></p>
										<div>
											<div style="width:<?=round(($stats3[$i][2]-$stats3[$i][3])/($stats3[$i][4]+$stats3[$i][5]+$stats3[$i][6]),2)/round(($stats3[sizeof($stats3)-1][2]-$stats3[sizeof($stats3)-1][3])/($stats3[sizeof($stats3)-1][4]+$stats3[sizeof($stats3)-1][5]+$stats3[sizeof($stats3)-1][6]),2)*100?>%" class="red"></div>
											<span class="left"><?=round(($stats3[$i][2]-$stats3[$i][3])/($stats3[$i][4]+$stats3[$i][5]+$stats3[$i][6]),2)?>골</span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>2.5오버 최고팀 TOP5 <span>총 <?=$league_game_num?>경기</span></h4>
									<?php for($i=0;$i<5;$i++){ ?>
									<div>
										<p><?=$stats4[$i][1]?></p>
										<div>
											<div style="width:10%" class="red"></div>
											<span class="left"><?=$stats4[$i][10]?> over</span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>2.5언더 최고팀 TOP5<span>총 <?=$league_game_num?>경기</span></h4>
									<?php for($i=sizeof($stats4)-1;$i>sizeof($stats4)-6;$i--){ ?>
									<div>
										<p><?=$stats4[$i][1]?></p>
										<div>
											<div style="width:86%" class="red"></div>
											<span class="left"><?=$stats4[$i][10]?> under</span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>클린시트 최고팀 TOP5 <span>총 <?=$league_game_num?>경기</span></h4>
									<div>
										<p>레알 마드리드</p>
										<div>
											<div style="width:86%" class="red"></div>
											<span class="left">15 YES</span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<div>
										<p>FC 바르셀로나</p>
										<div>
											<div style="width:82%" class="red"></div>
											<span class="left">15 YES</span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<div>
										<p>아틀레티코 마드리드</p>
										<div>
											<div style="width:79%" class="red"></div>
											<span class="left">15 YES</span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<div>
										<p>비야레알 CF</p>
										<div>
											<div style="width:77%" class="red"></div>
											<span class="left">15 YES</span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<div>
										<p>레알 소시에다드</p>
										<div>
											<div style="width:73%" class="red"></div>
											<span class="left">15 YES</span>
											<span class="right">70%</span></span>
										</div>
									</div>
								</div>
								<div>
									<h4>클린시트 최약팀 TOP5<span>총 <?=$league_game_num?>경기</span></h4>
									<div>
										<p>레알 마드리드</p>
										<div>
											<div style="width:26%" class="blue"></div>
											<span class="left">15 YES</span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<div>
										<p>FC 바르셀로나</p>
										<div>
											<div style="width:28%" class="blue"></div>
											<span class="left">15 YES</span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<div>
										<p>아틀레티코 마드리드</p>
										<div>
											<div style="width:32%" class="blue"></div>
											<span class="left">15 YES</span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<div>
										<p>비야레알 CF</p>
										<div>
											<div style="width:37%" class="blue"></div>
											<span class="left">15 YES</span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<div>
										<p>레알 소시에다드</p>
										<div>
											<div style="width:40%" class="blue"></div>
											<span class="left">15 YES</span>
											<span class="right">10%</span></span>
										</div>
									</div>
								</div>
								<div>
									<h4>양팀득점 최고팀 TOP5<span>총 <?=$league_game_num?>경기</span></h4>
									<?php for($i=0;$i<5;$i++){ ?>
									<div>
										<p><?=$stats6[$i][1]?></p>
										<div>
											<div style="width:86%" class="red"></div>
											<span class="left"><?=$stats6[$i][12]?> </span>
											<span class="right">70%</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<div>
									<h4>양팀득점 최약팀 TOP5<span>총 <?=$league_game_num?>경기</span></h4>
									<?php for($i=sizeof($stats3)-1;$i>sizeof($stats3)-6;$i--){ ?>
									<div>
										<p><?=$stats6[$i][1]?></p>
										<div>
											<div style="width:26%" class="blue"></div>
											<span class="left"><?=$stats6[$i][12]?> </span>
											<span class="right">10%</span></span>
										</div>
									</div>
									<?php } ?>
								</div>
								<p class="clear"></p>
							</div>
						</li>
					</ul>
				</div>				
			</div>