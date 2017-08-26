<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">

		$(document).ready(function(){ 
		 //하단 배팅경연 대상 경기들 
			for(var i=1;i<10;i++){		
				(function (k){
					$(".batting_list > li").eq(k-1).click(function(){ 
						$(this).siblings().removeClass("on");
						$(this).addClass("on");
						$(".batting_view > li").removeClass("active");
						$(".batting_view > li").eq(k-1).addClass("active");
						return false;
					});
				}(i));
			};
			$("span.redline").click(function(){ 
				$(this).parent().parent().parent().find("span.redline").removeClass("on");
				$(this).addClass("on");
				return false;
			});

			//재야의분석/블로그보기 팝업
			for(var i=1;i<9;i++){		
				(function (k){
					$(".r_pop2 ul.r_pop_h li.r_pop_h0" + k ).click(function(){ 
						$(this).siblings().removeClass("on");
						$(this).addClass("on");
						$(this).parent().siblings().find(">li").removeClass("active");
						$(this).parent().siblings().find(">li").eq(k-1).addClass("active");
						return false;
					});
				}(i));
			};
		});


	  </script>					
	  


			<link href="../css/batting.css" rel="stylesheet" type="text/css"/>


				<div class="batting_w">
					<div class="topTitle">
						<p>
							<span>배팅경연</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<img src="../image/batting/visual_main.jpg" alt="2017 SPONAVI BETTING EVENT!  누구나 1억원의 주인공이 될 수 있습니다.  이벤트 기간 : 2017년 5월 1일 ~ 2017년 12월 10일까지" />
					</div>
					<div class="batting">
						<div class="relative batting_top">
							<h2 class="tit01">배팅경연</h2>
							<div class="tab01_w">
								<ul class="tab01">
									<li class="on"><a href="main.php">배팅경연</a></li>
									<li class=""><a href="ranking.php">순위정보</a></li>
									<li class=""><a href="rule.php">룰 안내</a></li>
									<li class=""><a href="present.php">배팅내역</a></li>
								</ul>
							</div>
						</div>
						<div class="pb50">
							<ul class="main_st">
								<li>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup><col width="40px"/></colgroup>
										<tr>
											<th colspan="4">년간 수익률 TOP5</th>
										</tr>
										<tr>
											<td><span class="st1">1</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st2">2</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st3">3</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st4">4</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st5">5</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
									</table>
								</li>
								<li>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup><col width="40px"/></colgroup>
										<tr>
											<th colspan="4">월간 수익률 TOP5</th>
										</tr>
										<tr>
											<td><span class="st1">1</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st2">2</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st3">3</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st4">4</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st5">5</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
									</table>
								</li>
								<li>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup><col width="40px"/></colgroup>
										<tr>
											<th colspan="4">주간 수익률 TOP5</th>
										</tr>
										<tr>
											<td><span class="st1">1</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st2">2</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st3">3</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st4">4</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
										<tr>
											<td><span class="st5">5</span></td>
											<td><b><a href="/odds/blog/main.html" target="_blank">pkaaaa8875</a></b></td>
											<td><span class="gray">75승 5무 70패</span></td>
											<td><b>25.4%</b></td>
										</tr>
									</table>
								</li>
							</ul>
							<span class="clear"></span>
						</div>
						<div class="relative batting_top">
							<h2 class="tit01">배팅경연 대상경기들</h2>
							<div class="tab01_w ">
								<ul class="tab01 batting_list">
									<li class=""><a href="">전체 (182)</a></li>
									<li class="on"><a href="">축구 (100)</a></li>
									<li class=""><a href="">야구 (35)</a></li>
									<li class=""><a href="">농구 (35)</a></li>
									<li class=""><a href="">배구 (35)</a></li>
									<li class=""><a href="">하키 (35)</a></li>
									<li class=""><a href="">e-스포츠 (35)</a></li>
								</ul>
							</div>
						</div>				
						<div class="">
							<ul class="batting_view">
								<li>
									1111
								</li>
								<li class="active">
									<p class="graybox">배팅경연 대상경기는 킥오프타임 1시간 전에 참여 마감됩니다.</p>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup>
											<col width="80px"/><col width="*"/><col width="125px"/><col width="125px"/><col width="125px"/><col width="60px"/>
										</colgroup>
										<tr>
											<th colspan="2" class="left pl20"><span class="soccer_icon"></span> 축구&nbsp;&nbsp;&nbsp;<span class="country_173"></span> 대한민국 // K-리그 // 수원삼성 vs 전북현대</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td rowspan="3" class="lh">2017.08.01<br />22:30</td>
											<td class="left pl30">승무패</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td rowspan="3" class="data">
												<div class="data">
													<span class="b_BTN3"><a href="/odds/game/league_soccer/match.php"></a></span><span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												</div>
												<!-- 재야의분석/블로그보기-->
												<div class="r_pop_w popup">
													<div class="popup_w"></div>
													<div class="r_pop r_pop2">
														<ul class="r_pop_h">
															<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
															<li class="r_pop_h02"><a href="">블로그 보기</a></li>
														</ul>
														<div class="clear"></div>
														<ul class="r_pop_v">
															<li class="active">
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
															<li>
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석22</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
														</ul>

													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="left pl30">핸디캡 (-1.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
										<tr>
											<td class="left pl30">오버/언더 (9.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
									</table>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup>
											<col width="80px"/><col width="*"/><col width="125px"/><col width="125px"/><col width="125px"/><col width="60px"/>
										</colgroup>
										<tr>
											<th colspan="2" class="left pl20"><span class="soccer_icon"></span> 축구&nbsp;&nbsp;&nbsp;<span class="country_173"></span> 대한민국 // K-리그 // 수원삼성 vs 전북현대</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td rowspan="3" class="lh">2017.08.01<br />22:30</td>
											<td class="left pl30">승무패</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td rowspan="3" class="data">
												<div class="data">
													<span class="b_BTN3"><a href="/odds/game/league_soccer/match.php"></a></span><span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												</div>
												<!-- 재야의분석/블로그보기-->
												<div class="r_pop_w popup">
													<div class="popup_w"></div>
													<div class="r_pop r_pop2">
														<ul class="r_pop_h">
															<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
															<li class="r_pop_h02"><a href="">블로그 보기</a></li>
														</ul>
														<div class="clear"></div>
														<ul class="r_pop_v">
															<li class="active">
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
															<li>
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석22</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
														</ul>

													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="left pl30">핸디캡 (-1.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
										<tr>
											<td class="left pl30">오버/언더 (9.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
									</table>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup>
											<col width="80px"/><col width="*"/><col width="125px"/><col width="125px"/><col width="125px"/><col width="60px"/>
										</colgroup>
										<tr>
											<th colspan="2" class="left pl20"><span class="soccer_icon"></span> 축구&nbsp;&nbsp;&nbsp;<span class="country_173"></span> 대한민국 // K-리그 // 수원삼성 vs 전북현대</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td rowspan="3" class="lh">2017.08.01<br />22:30</td>
											<td class="left pl30">승무패</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td rowspan="3" class="data">
												<div class="data">
													<span class="b_BTN3"><a href="/odds/game/league_soccer/match.php"></a></span><span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												</div>
												<!-- 재야의분석/블로그보기-->
												<div class="r_pop_w popup">
													<div class="popup_w"></div>
													<div class="r_pop r_pop2">
														<ul class="r_pop_h">
															<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
															<li class="r_pop_h02"><a href="">블로그 보기</a></li>
														</ul>
														<div class="clear"></div>
														<ul class="r_pop_v">
															<li class="active">
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
															<li>
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석22</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
														</ul>

													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="left pl30">핸디캡 (-1.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
										<tr>
											<td class="left pl30">오버/언더 (9.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
									</table>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup>
											<col width="80px"/><col width="*"/><col width="125px"/><col width="125px"/><col width="125px"/><col width="60px"/>
										</colgroup>
										<tr>
											<th colspan="2" class="left pl20"><span class="soccer_icon"></span> 축구&nbsp;&nbsp;&nbsp;<span class="country_173"></span> 대한민국 // K-리그 // 수원삼성 vs 전북현대</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td rowspan="3" class="lh">2017.08.01<br />22:30</td>
											<td class="left pl30">승무패</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td rowspan="3" class="data">
												<div class="data">
													<span class="b_BTN3"><a href="/odds/game/league_soccer/match.php"></a></span><span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												</div>
												<!-- 재야의분석/블로그보기-->
												<div class="r_pop_w popup">
													<div class="popup_w"></div>
													<div class="r_pop r_pop2">
														<ul class="r_pop_h">
															<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
															<li class="r_pop_h02"><a href="">블로그 보기</a></li>
														</ul>
														<div class="clear"></div>
														<ul class="r_pop_v">
															<li class="active">
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
															<li>
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석22</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
														</ul>

													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="left pl30">핸디캡 (-1.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
										<tr>
											<td class="left pl30">오버/언더 (9.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
									</table>
									<table class="table_default bat_bg_table">
										<caption></caption>
										<colgroup>
											<col width="80px"/><col width="*"/><col width="125px"/><col width="125px"/><col width="125px"/><col width="60px"/>
										</colgroup>
										<tr>
											<th colspan="2" class="left pl20"><span class="soccer_icon"></span> 축구&nbsp;&nbsp;&nbsp;<span class="country_173"></span> 대한민국 // K-리그 // 수원삼성 vs 전북현대</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td rowspan="3" class="lh">2017.08.01<br />22:30</td>
											<td class="left pl30">승무패</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td rowspan="3" class="data">
												<div class="data">
													<span class="b_BTN3"><a href="/odds/game/league_soccer/match.php"></a></span><span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												</div>
												<!-- 재야의분석/블로그보기-->
												<div class="r_pop_w popup">
													<div class="popup_w"></div>
													<div class="r_pop r_pop2">
														<ul class="r_pop_h">
															<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
															<li class="r_pop_h02"><a href="">블로그 보기</a></li>
														</ul>
														<div class="clear"></div>
														<ul class="r_pop_v">
															<li class="active">
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
															<li>
																<ul>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석22</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																	<li>
																		<a href="">
																			<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																			<span class="hh">설민석</span>
																			<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																		</a>
																	</li>
																</ul>
																<p>
																	<span>1/12</span>
																	<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
																</p>
															</li>
														</ul>

													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="left pl30">핸디캡 (-1.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
										<tr>
											<td class="left pl30">오버/언더 (9.5)</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
											<td>&nbsp;</td>
											<td><span class="redline"><b>3.15</b> <span class="gray">(35%)</span></span></td>
										</tr>
									</table>
								</li>
								<li>3333</li>
								<li>444</li>
								<li>555</li>
								<li>666</li>
								<li>777</li>
							</ul>
						</div>

					</div>

				</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
