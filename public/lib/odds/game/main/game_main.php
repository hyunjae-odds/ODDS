<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	


		//matchTab
		$(".gameMain li:eq(0) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s1").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(1) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s2").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(2) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s3").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(3) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s4").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(4) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s5").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".gameMain li:eq(5) a").click(function(){ $(".r_view > li").removeClass("active"); $("#s6").addClass("active"); $(".gameMain li").removeClass("on"); $(this).parent().addClass("on"); return false;});


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

		
			<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>

			<div class="livescore game">
				<div class="topTitle">
					<p>
						<span>ODDS</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<a href=""><img src="/odds/image/batting/visual_main.jpg" alt="2017 SPONAVI BETTING EVENT! 누구나 1억원의 주인공이 될 수 있습니다. 이벤트 기간 : 2017년 5월 1일 ~ 2017년 12월 10일까지"></a>
				</div>
				<div class="game_w game_main">
					<h3 class="tit02">스포 365 핫매치</h3>
					<ul class="tab01 gameMain" style="top:-7px;">
						<li class="on"><a href="#s1">축 구</a></li>
						<li><a href="#s2">야 구</a></li>
						<li><a href="#s3">농 구</a></li>
						<li><a href="#s4">배 구</a></li>
						<li><a href="#s5">하 키</a></li>
						<li><a href="#s6">e-스포츠</a></li>
					</ul>
					<ul class="tab_view01 r_view pb50">
						<li class="active" id="s1">
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_soccer/league.php">K-리그</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
						</li>
						<li id="s2">
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">핸디캡 -0.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>&nbsp;</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>&nbsp;</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">오버언더 2.5</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">&nbsp;</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // <a href="/odds/game/league_base/league.php">KBO</a></th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td rowspan="2">2017.08.01<br />22.30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">LG vs 삼성</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td rowspan="2">49</td>
									<td rowspan="2" class="data">
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
									<td class="left pl20"><span class="red">승무패</span></td>
									<td><span class="gray">65%</span></td>
									<td><span class="gray">25%</span></td>
									<td><span class="gray">10%</span></td>
								</tr>
							</table>
						</li>
						<li id="s3">농구테이블</li>
						<li id="s4">배구테이블</li>
						<li id="s5">하키테이블</li>
						<li id="s6">e-스포츠테이블</li>
					</ul>
				</div>
			</div>


			
<?php 
include("../footer.php");
?>


 </body>
 </html>