<?php 
include("../head_up.php");
include("../head.php");
?>


<script type="text/javascript">
	
	//textarea_box input
		$(document).ready(function(){ 
			$('#opinion_text').click(function(){ 
				var state = $('.opinion_text').css('display'); 
				if(state == 'none'){ 
					$('#opinion_text').removeClass('on');
				}else{
					$('#opinion_text').addClass('on');
				}
			});
		}); 





	
	$(document).ready(function(){ 



		//matchTab
		$(".title li:eq(0) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r1").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});
		$(".title li:eq(1) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r2").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});


		//live_onoff 라이브중계 열고닫기
		$(".live_onoff li:eq(0) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".livescore > .table").slideUp(); 
			$(".livescore > p.relay").slideUp(); 
			$(".livescore > .othergame").slideUp(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});
		$(".live_onoff li:eq(1) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".livescore > .table").slideDown(); 
			$(".livescore > p.relay").slideDown(); 
			$(".livescore > .othergame").slideDown(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});

		//line_pop 오픈
		$(".line_btn a").click(function(){ 
			$(this).parent().parent().siblings(".line_pop").slideDown(); 
			return false;
		});
		//line_pop 닫기
		$(".line_pop .close_btn a").click(function(){ 
			$(this).parent().parent(".line_pop").slideUp(); 
			return false;
		});


		$(".before_btn").click(function(){ 
			$(".opp01 .before").slideToggle(); 
			return false;
		});

		
		


	});	


	//Highchart 그래프소스
	$(document).ready(function(){ 
		Highcharts.chart('line_graph01', {
			chart: {
				height: 100,
				type: 'line'
			},
			 xAxis: {
				//type: 'minute',
				tickInterval: 1
			},
			yAxis: {
				type: 'logarithmic',
				minorTickInterval: 0
			},
			tooltip: {
				headerFormat: '<b>{}</b>',
				pointFormat: '{point.x}분, 배당률 = {point.y}'
			},

			series: [{
				data: [0.5,2,3,5,2,2,3,3,4,4,2,3,5,3,2,3,4,5,5.5],
				pointStart: 0
			}]

		});
	});

	  </script>


		<script src="../../js/highcharts/highcharts.js"></script>
		<script src="../../js/highcharts/modules/exporting.js"></script>


							
			<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>

							
			<div class="Match_w">		
				<div class="match KBO match_full">
					<div class="title_bar">
						<p>야구 - 대한민국 - <span>KBO</span></p>
						<ul>
							<li>
								<span><span class="y_BTN"><a href="">배당률</a></span></span>
								<!-- 배당률팝업 -->
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
							</li>
							<li><span class="btn_mark"><a href="">즐겨찾기</a></span></li><!-- 즐겨찾기 설정시 .on 추가  -->
						</ul>
					</div>
					<div class="score_bar">
						<div>
							<div class="team">
								<p class="st">1위</p>
								<p>LG 트윈스</p>
								<span>선발 : 데이비드 허프</span>
							</div>
							<div class="team_logo"><span class="LG_L"></span></div>
							<div class="num win">2</div>
							<p class="full"><span>경기종료</span>VS</p>
							<div class="num">1</div>
							<div class="team_logo"><span class="samsung_L"></span></div>
							<div class="team">
								<p class="st">2위</p>
								<p>삼성 라이온즈</p>
								<span>선발 : 윤성환</span>
							</div>
						</div>
						<ul>
							<li>2016.10.25</li>
							<li>잠실 경기장</li>
							<li>서울</li>
						</ul>					
					</div>			
				</div>
				<div class="match_full_table">
					<table class="table_default">
						<caption></caption>
						<colgroup>
							<col width="105px"/>
							<col width="148px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>
							<col width="30px"/>

							<col width="70px"/>
							<col width="*"/>
						</colgroup>
						<tr>
							<th colspan="2"><b>종료시간 : </b>11.28 22:16</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th><b>R</b></th>
							<th><b>H</b></th>
							<th><b>E</b></th>
							<th><b>B</b></th>
							<th>순위</th>
							<th>전적</th>
						</tr>
						<tr>
							<td class="left pl20"><span class="TL LGT"></span><b>LG</b></td>
							<td class="left">승리투수 : 허프</td>
							<td>2</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
							<td>3</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><b class="red">6</b></td>
							<td>6</td>
							<td>0</td>
							<td>1</td>
							<td><b>3위</b><span class="up"></span></td><!-- up/down/stay -->
							<td>21G 12W 9L</td>
						</tr>
						<tr>
							<td class="left pl20"><span class="TL eagles"></span><b>한화</b></td>
							<td class="left">승리투수 : 허프</td>
							<td>1</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>1</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><b class="red">2</b></td>
							<td>2</td>
							<td>0</td>
							<td>1</td>
							<td><b>3위</b><span class="stay"></span></td>
							<td>21G 12W 9L</td>
						</tr>
					</table>
				</div>
				<div class="opinion" style="padding-top:30px;">
					<div class="graph">
						<div class="total">
							<span class="left_g">55%</span>
							<div class="left_g">	
								<div><div style="width:55%"><p><span>415명</span></p></div></div>										
							</div>
							<p>일치된 의견</p>
							<div class="right_g">	
								<div><div style="width:45%"><p><span>375명</span></p></div></div>		
							</div>
							<span class="right_g">45%</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:86%"><span>9</span></div></div>										
							</div>
							<p>안타</p>
							<div class="right_g">	
								<div><div style="width:50%"><span>5</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:0%"></div><span>0</span></div>										
							</div>
							<p>홈런</p>
							<div class="right_g">	
								<div><div style="width:10%"><span>1</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:26%"><span>2</span></div></div>										
							</div>
							<p>도루</p>
							<div class="right_g">	
								<div><div style="width:25%"><span>2</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:65%"><span>7</span></div></div>										
							</div>
							<p>삼진</p>
							<div class="right_g">	
								<div><div style="width:55%"><span>6</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:86%"><span>9</span></div></div>										
							</div>
							<p>안타</p>
							<div class="right_g">	
								<div><div style="width:50%"><span>5</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:9%"><span>1</span></div></div>										
							</div>
							<p>병살</p>
							<div class="right_g">	
								<div><div style="width:7%"><span>3</span></div></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
						<div>
							<span class="left_g">&nbsp;</span>
							<div class="left_g">	
								<div><div style="width:2%"></div><span>1</span></div>										
							</div>
							<p>실책</p>
							<div class="right_g">	
								<div><div style="width:8%"></div><span>2</span></div>		
							</div>
							<span class="right_g">&nbsp;</span>
						</div>
					</div>
				</div>
				<div class="full_table_w">
					<table class="full_table01">
						<caption></caption>
						<colgroup><col width="118px"/><col width="*"/></colgroup>
						<tr>
							<th>홈런</th>
							<td>한동민7호(3회1점 김대현)  김동엽6호(4회1점 김대현)  최정10호(9회1점 고우석) </td>
						</tr>
						<tr>
							<th>3루타</th>
							<td>박승욱(3회)</td>
						</tr>
						<tr>
							<th>2루타</th>
							<td>정의윤(3회) 히메네스(8회)</td>
						</tr>
						<tr>
							<th>도루</th>
							<td>김동엽(3회)</td>
						</tr>
						<tr>
							<th>도루자</th>
							<td>히메네스(5회)</td>
						</tr>
						<tr>
							<th>병살타</th>
							<td>박용택(1회)  손주인(4회)  이형종(6회)  정상호(9회) </td>
						</tr>
						<tr>
							<th>폭투</th>
							<td>김대현2(1회)</td>
						</tr>
					</table>
				</div>
				<div class="full_table_w">
					<h3>LG 트윈스 타자 기록</h3>
					<table class="full_table02">
						<caption></caption>
						<colgroup>
							<col width="40px"/>
							<col width="85px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="*"/>
						</colgroup>
						<tr>
							<th>&nbsp;</th>
							<th>이름</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>타수</th>
							<th>안타</th>
							<th>타점</th>
							<th>득점</th>
							<th>타율</th>
						</tr>
						<tr>
							<td>좌</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>二</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>지</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>三</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>유</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>一</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>우</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>포</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>중</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td colspan="14"class="fs14"><b>합계</b></td>
							<td>39</td>
							<td>39</td>
							<td>39</td>
							<td>39</td>
							<td><b>0.389</b></td>
						</tr>
					</table>
					<h3>삼성 라이온즈 타자 기록</h3>
					<table class="full_table02">
						<caption></caption>
						<colgroup>
							<col width="40px"/>
							<col width="85px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="43px"/>
							<col width="*"/>
						</colgroup>
						<tr>
							<th>&nbsp;</th>
							<th>이름</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>6</th>
							<th>7</th>
							<th>8</th>
							<th>9</th>
							<th>10</th>
							<th>11</th>
							<th>12</th>
							<th>타수</th>
							<th>안타</th>
							<th>타점</th>
							<th>득점</th>
							<th>타율</th>
						</tr>
						<tr>
							<td>좌</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>二</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>지</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>三</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>유</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>一</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>우</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>포</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>교</td>
							<td class="fs14"><b>이형종</b></td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td>중</td>
							<td class="fs14"><b>이형종</b></td>
							<td>&nbsp;</td>
							<td>우중<br />안</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>4구</td>
							<td>&nbsp;</td>
							<td>유2병</td>
							<td>삼진</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td colspan="14"class="fs14"><b>합계</b></td>
							<td>39</td>
							<td>39</td>
							<td>39</td>
							<td>39</td>
							<td><b>0.389</b></td>
						</tr>
					</table>
					<h3>LG 트윈스 투수 기록</h3>
					<table class="full_table02">
						<caption></caption>
						<colgroup>
							<col width="85px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="*"/>
						</colgroup>
						<tr>
							<th>이름</th>
							<th>등판</th>
							<th>결과</th>
							<th>경기</th>
							<th>승</th>
							<th>패</th>
							<th>세</th>
							<th>이닝</th>
							<th>타자</th>
							<th>투구</th>
							<th>타수</th>
							<th>안타</th>
							<th>4사</th>
							<th>홈런</th>
							<th>삼진</th>
							<th>실점</th>
							<th>자책</th>
							<th>평균자책</th>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>선발</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>4.4</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>7.8</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>8.5</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
					</table>
					<h3>삼성 라이온즈 투수 기록</h3>
					<table class="full_table02">
						<caption></caption>
						<colgroup>
							<col width="85px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="50px"/>
							<col width="*"/>
						</colgroup>
						<tr>
							<th>이름</th>
							<th>등판</th>
							<th>결과</th>
							<th>경기</th>
							<th>승</th>
							<th>패</th>
							<th>세</th>
							<th>이닝</th>
							<th>타자</th>
							<th>투구</th>
							<th>타수</th>
							<th>안타</th>
							<th>4사</th>
							<th>홈런</th>
							<th>삼진</th>
							<th>실점</th>
							<th>자책</th>
							<th>평균자책</th>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>선발</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>4.4</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>7.8</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
						<tr>
							<td class="fs14"><b>이형종</b></td>
							<td>8.5</td>
							<td>승</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3 <span class="fs10"><sup>2</sup>&#47;<sub>3</sub></span></td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td>3</td>
							<td><b>0.389</b></td>
						</tr>
					</table>
				</div>
				
				
				<div class="cheer">
					<h3 class="noBorder">오늘의 승리팀 응원하기</h3>
					<div class="teams">
						<div class="left">
							<div class="box_w">
								<div class="c_logo"><span class="LG_L"></span></div>
								<div class="box">	
									<div>
										<h3>LG 트윈스</h3>
										<p>건전한 응원문화를 함께 만들어 갑시다.</p>				
									</div>
								</div>
								<a href="" class="cheer_btn">응원하기</a>
							</div>
							<div class="graph_w">
								<div class="graph">
									<div style="width:60%"><b>40115</b></div>
								</div>
								<span>60%</span>
							</div>
						</div>
						<div class="right">
							<div class="box_w">
								<div class="c_logo"><span class="samsung_L"></span></div>
								<div class="box">
									<div>
										<h3>삼성 라이온즈</h3>
										<p>건전한 응원문화를 함께 만들어 갑시다.</p>				
									</div>	
								</div>
								<a href="" class="cheer_btn">응원하기</a>
							</div>
							<div class="graph_w">
								<div class="graph">
									<div style="width:40%"><b>40115</b></div>
								</div>
								<span>40%</span>
							</div>
						</div>
						<div class="center"><span class="KBO_bb">KBO</span></div>
					</div>
					<p>응원하기는 경기마다 1인당 1번씩만 가능합니다. 여러분이 응원하시는 모든 팀이 승리하기를 기원합니다.</p>
					<div class="comment">
						<ul>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">0</a></p>
									<p class="bad"><a href="">0</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">123123123</a></p>
									<p class="bad"><a href="">555</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">22</a></p>
									<p class="bad"><a href="">23123</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">123</a></p>
									<p class="bad"><a href="">234234234</a></p>
								</div>
							</li>
						</ul>
					</div>
					<div class="page">
						<a class="on" href="">1</a>
						<a href="">2</a>
						<a href="">3</a>
						<a href="">4</a>
						<a href="">5</a>
					</div>
					<div class="textarea_box">
						<div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="">입력</a></div>
						<p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
					</div>
				</div>
			</div>	


			
<?php 
include("../footer.php");
?>


 </body>
</html>
