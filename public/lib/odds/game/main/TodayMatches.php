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
						<span>투데이매치</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
				</div>
				<div class="game_w game_main">
					<h3 class="tit02">투데이매치</h3>
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
							<div class="relative today_graybox">
								<div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;left:10px;">
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
									<span>.</span>
									<a href="" class="date_da date_num">08</a>
									<ul class="date_da_select date_ul">
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
								<div class="select" style="top:4px;right:10px;">
									<p class="off"><span class="pp">킥오프타임</span><span class="pa"></span></p>
									<ul>
										<li><a href="">킥오프타임</a></li>
										<li><a href="">-</a></li>
									</ul>
								</div>
							</div>
							<table class="table_default today_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="60px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // K-리그</th>
									<th>&nbsp;</th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td class="red_bg"><b>45'</b></td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td class="red_bg"><b class="score">0<span class="colon">:</span>2</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td class="red_bg"><b>HT</b></td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td class="red_bg"><b class="score">0<span class="colon">:</span>2</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td class="red_bg"><b>75'</b></td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td class="red_bg"><b class="score">0<span class="colon">:</span>2</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td class="red_bg"><b>88'</b></td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td class="red_bg"><b class="score">0<span class="colon">:</span>2</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // K-리그</th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // K-리그</th>
									<th>승</th>
									<th>무</th>
									<th>패</th>
									<th>B's</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>3.15</td>
									<td>49</td>
									<td class="data">
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
							</table>
							<table class="table_default game_main_table">
								<caption></caption>
								<colgroup>
									<col width="80px"/>
									<col width="*"/>
									<col width="60px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="95px"/>
									<col width="55px"/>
									<col width="60px"/>
								</colgroup>
								<tr>
									<th colspan="2" class="left pl20"><span class="country_173"></span>&nbsp;&nbsp;대한민국 // K-리그</th>
									<th>&nbsp;</th>
									<th>승</th>	
									<th>무</th>
									<th>패</th>
									<th>B’s</th>
									<th>DATA</th>
								</tr>
								<tr>
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td><b class="score red">8<span class="colon">:</span>7</b></td>
									<td><span class="graybox">1.93</span></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>51</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td><b class="score red">2<span class="colon">:</span>7</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td><span class="graybox">1.93</span></td>
									<td>51</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td><b class="score red">8<span class="colon">:</span>7</b></td>
									<td><span class="graybox">1.93</span></td>
									<td>3.15</td>
									<td>3.15</td>
									<td>51</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td><b class="score red">2<span class="colon">:</span>7</b></td>
									<td>3.15</td>
									<td>3.15</td>
									<td><span class="graybox">1.93</span></td>
									<td>51</td>
									<td class="data">
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
									<td>22:30</td>
									<td class="left pl20"><a href="/odds/game/main/dividend.php">아틸레티코 마드리드  vs  맨체스터 유나이티드</a></td>
									<td><b class="score red">2<span class="colon">:</span>7</b></td>
									<td>3.15</td>
									<td><span class="graybox">1.93</span></td>
									<td>3.15</td>
									<td>51</td>
									<td class="data">
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
							</table>
						</li>
						<li id="s2">야구테이블</li>
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