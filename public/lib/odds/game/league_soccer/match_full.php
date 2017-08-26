<?php 
include("../head_up.php");
include("../head.php");
?>


<script type="text/javascript">

$(document).ready(function(){ 

	$('.other_btn').click(function(){ 
		var state = $(this).siblings('.other_view').css('display'); 
		if(state == 'none'){ 
			$(this).siblings('.other_view').slideDown(); 
			$(this).siblings('.other_view').addClass('active');
			$(this).addClass('close');
			return false;
		}else{
			$(this).siblings('.other_view').slideUp(); 	
			$(this).siblings('.other_view').removeClass('active');
			$(this).removeClass('close');
			return false;
		}
	});

	//live_onoff 라이브중계 열고닫기
		$(".live_onoff li:eq(0) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".livescore > .referee").slideUp(); 
			$(".livescore > .goal_line_w").slideUp(); 
			$(".livescore > .live").slideUp(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});
		$(".live_onoff li:eq(1) a").click(function(){ 
			$(this).parent().removeClass("active"); 
			$(".livescore > .referee").slideDown(); 
			$(".livescore > .goal_line_w").slideDown(); 
			$(".livescore > .live").slideDown(); 
			$(this).parent().siblings("li").addClass("active"); 
			return false;
		});



});	


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


							
			<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>

			<div class="Match_w">
				<div class="match">
					<div class="title_bar">
						<div class="title_p">
							축구 - 잉글랜드 - 프리미어리그 - 
							<div>
								<a href="" class="other_btn">래스터시티FC  vs  맨체스터 Utd<span></span></a>
								<ul class="other_view popup">
									<li><a href="">프리미어리그</a></li>
									<li><a href="">챔피언쉽</a></li>
									<li><a href="">리그 1</a></li>
									<li><a href="">리그 2</a></li>
									<li><a href="">바나라마 내셔널리그</a></li>
									<li><a href="">바나라마 내셔널리그 남부</a></li>
									<li><a href="">바나라마 내셔널리그 북부</a></li>
									<li><a href="">서던 프리미어 리그</a></li>
									<li><a href="">노던 프리미어 리그</a></li>
									<li><a href="">라이먼 리그</a></li>
									<li><a href="">프리미어 리그 2</a></li>
									<li><a href="">FA 컵</a></li>
									<li><a href="">EFL 컵</a></li>
									<li><a href="">프리미어 리그 컵</a></li>
								</ul>
							</div>
						</div>
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
								<p>맨체스터 utd</p>
								<span>선발 : 데이비드 허프</span>
							</div>
							<div class="team_logo"><span class="manU_L"></span></div>
							<div class="num win">2</div>
							<p>VS</p>
							<div class="num">1</div>
							<div class="team_logo"><span class="arsenal_L"></span></div>
							<div class="team">
								<p class="st">2위</p>
								<p>아스널</p>
								<span>선발 : 윤성환</span>
							</div>
						</div>
						<ul>
							<li>2016.10.25</li>
							<li>잠실 경기장</li>
							<li>서울</li>
						</ul>					
					</div>
					<div class="livescore">
						<div class="referee">
							<b>Kick Off : 22:35</b>
						</div>	
						<div class="goal_line_w">
							<div class="goal_line">		
								<div>
									<p>리오넬 메시 (pen)</p>
									<span>29'</span>
									<span class="goal_w"></span>
								</div>
								<div>
									<p>리오넬 메시 (pen)</p>
									<span>29'</span>
									<span class="goal_w"></span>
								</div>
								<div>
									<p>리오넬 메시 (pen)</p>
									<span>29'</span>
									<span class="goal_w"></span>
								</div>

								<div>
									<span class="gray">(AS.라이언 베르트란드)</span>
									<p>산티에고 카졸라 </p>
									<span>45&nbsp;+4'</span>
									<span class="goal_w"></span>
								</div>
							</div>
							<div class="goal_line">		
								<div>
									<span class="goal_w"></span>
									<span>19'</span>
									<p>리오넬 메시</p>
									<span class="gray">(AS.이니에스타)</span>			
								</div>
							</div>
							<div class="end"></div>
						</div>
						<div class="live">
							<ul class="team">
								<li><span class="arsenal_s"></span></li>
								<li><span class="arsenal_s"></span></li>
							</ul>
							<div class="event_line1">
								<div class="event team1" style="left:100px;"><!-- 1분 = 10px-->
									<span class="yellow"></span>
									<span class="time">10'</span>
									<span>&nbsp;</span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="yellow"></span>
										<span class="red">10'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team2" style="left:180px;">
									<span class="">&nbsp;</span>
									<span class="time">18'</span>
									<span class="goal_w"></span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="goal"></span>
										<span class="red">18'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team1" style="left:290px;">
									<span class="goal_w"></span>
									<span class="time">29'</span>
									<span>&nbsp;</span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="goal"></span>
										<span class="red">29'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team2" style="left:320px;">
									<span class="">&nbsp;</span>
									<span class="time">32'</span>
									<span class="change_w"></span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="change"></span>
										<span class="red">32'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team2" style="left:410px;">
									<span class="">&nbsp;</span>
									<span class="time">41'</span>
									<span class="yellow"></span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="yellow"></span>
										<span class="red">41'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team1" style="left:455px;">
									<span class="goal_w"></span>
									<span class="time">45'+</span>
									<span>&nbsp;</span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="goal"></span>
										<span class="red">45'+</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>
								<div class="event team1" style="left:510px;">
									<span class="yellow"></span>
									<span class="time">51'</span>
									<span>&nbsp;</span>
									<div class="tooltip"><span class="arrow"></span>
										<span class="yellow"></span>
										<span class="red">51'</span>
										<p>즐라탄 이브라..</p>
									</div>
								</div>	
							</div>
							<div class="now" style="left:61%;">
								<img src="../../image/livescore/icon_now.png" alt="" />
									<!--marquee behavior="alternate" width="32" scrollamount="50" scrolldelay="500"><span class="now"></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</marquee-->
							</div>
						</div>					
						<ul class="live_onoff">
							<li><a href="">라이브 중계 닫기<span class="arrow04_up"></span></a></li>
							<li class="active"><a href="">라이브 중계 열기<span class="arrow04_down"></span></a></li>
						</ul>
					</div>
					<div class="bottombg"></div>
				</div>
				<div class="opinion_w">
					<!--h3>스포네비 일치된 의견</h3-->
					<p>
						<span class="red_ball"></span>홈팀 승리
						<span class="gray_ball"></span>무승부
						<span class="blue_ball"></span>원정팀 승리
					</p>
					<div class="opinion">
						<div class="totalGraph">
							<p class="red">55%</p>
							<ul>
								<li class="red"><p style="width:55%;"><span><span>415명</span></span></p></li>
								<li class="gray"><span>415명</span><span class="r_b"></span></li>
								<li class="blue"><p style="width:35%;"><span><span>415명</span></span></p></li>
							</ul><!-- 합이 100% -->
							<p class="blue">35%</p>
						</div>
						<span class="clear"></span>
						<div class="graph">
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:86%"><span>25승 5무 2패</span></div></div>										
								</div>
								<p>순위</p>
								<div class="right">	
									<div><div style="width:86%"><span>25승 5무 2패</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">50%</span>
								<div class="left">	
									<div><div style="width:52%"><span>15/30</span></div></div>										
								</div>
								<p>오버(2.5)</p>
								<div class="right">	
									<div><div style="width:50%"><span>15/30</span></div></div>		
								</div>
								<span class="right">50%</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:82%"><span>78골(1.25)</span></div></div>										
								</div>
								<p>득점(경기당)</p>
								<div class="right">	
									<div><div style="width:80%"><span>78골(1.25)</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:50%"><span>25골(1.25)</span></div></div>										
								</div>
								<p>실점(경기당)</p>
								<div class="right">	
									<div><div style="width:50%"><span>25골(1.25)</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:32%"><span>+0.92</span></div></div>										
								</div>
								<p>득점마진</p>
								<div class="right">	
									<div><div style="width:30%"><span>+0.92</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:72%"><span>150</span></div></div>										
								</div>
								<p>유효슈팅</p>
								<div class="right">	
									<div><div style="width:70%"><span>150</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:82%"><span>65%</span></div></div>										
								</div>
								<p>볼점유율</p>
								<div class="right">	
									<div><div style="width:80%"><span>65%</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>
							<div>
								<span class="left">1위</span>
								<div class="left">	
									<div><div style="width:32%"><span>8</span></div></div>										
								</div>
								<p>퇴장</p>
								<div class="right">	
									<div><div style="width:30%"><span>8</span></div></div>		
								</div>
								<span class="right">1위</span>
							</div>									
						</div>
					</div>
				</div>
				<div class="lineUP">
					<h3>LINE UP</h3>
					<div class="team">
						<div>
							<h4>맨체스터 유나이티드</h4>
							<p>조세 무리뉴<span>감독</span></p>
							<p><b>4-4-2</b></p>
						</div>
						<span class="MU_bbb"></span>
						<span><b>VS</b></span>
						<span class="MC_bbb"></span>
						<div>
							<div>
								<h4>맨체스터 시티</h4>
								<p><span>감독</span>조세 무리뉴</p>
								<p><b>3-5-2</b></p>
							</div>
						</div>
					</div>
					<div class="ground_full">
						<div class="leftG">
							<div class="arrow"><div></div><div><div class="ar" style="width:10%"></div><div class="tri"></div></div>	<span>10%</span></div>
							<div class="arrow"><div></div><div><div class="ar" style="width:20%"></div><div class="tri"></div></div>	<span>20%</span></div>
							<div class="arrow"><div></div><div><div class="ar" style="width:75%"></div><div class="tri"></div></div>	<span>75%</span></div>
						</div>
						<div class="rightG">
							<div class="arrow"><div></div><div><div class="ar" style="width:30%"></div><div class="tri"></div></div>	<span>30%</span></div>
							<div class="arrow"><div></div><div><div class="ar" style="width:15%"></div><div class="tri"></div></div>	<span>15%</span></div>
							<div class="arrow"><div></div><div><div class="ar" style="width:55%"></div><div class="tri"></div></div>	<span>55%</span></div>
						</div>
					</div>
					<div class="full_table">
						<div class="left">
							<table class="table_default">
								<caption></caption>
								<colgroup>
									<col width="138px"/>
									<col width="50px"/>
									<col width="44px"/>
									<col width="38px"/>
									<col width="70px"/>
									<col width="40px"/>
									<col width="41px"/>
									<col width="40px"/>
								</colgroup>
								<tr>
									<th>이름</th>
									<th>포지션</th>
									<th>득점</th>
									<th>도움</th>
									<th>슈팅(유효)</th>
									<th>파울</th>
									<th>경고</th>
									<th>퇴장</th>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>호니</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>카르바할</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</table>
						</div>
						<div class="left">
							<table class="table_default">
								<caption></caption>
								<colgroup>
									<col width="138px"/>
									<col width="50px"/>
									<col width="44px"/>
									<col width="38px"/>
									<col width="70px"/>
									<col width="40px"/>
									<col width="41px"/>
									<col width="40px"/>
								</colgroup>
								<tr>
									<th>이름</th>
									<th>포지션</th>
									<th>득점</th>
									<th>도움</th>
									<th>슈팅(유효)</th>
									<th>파울</th>
									<th>경고</th>
									<th>퇴장</th>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>호니</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>루이스 수아레즈</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="up_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>카르바할</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span></span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<td><span class="down_arr01">up</span>리오넬 메시</td>
									<td>FW</td>
									<td>1</td>
									<td>2</td>
									<td>6(4)</td>
									<td>2</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</table>
						</div>
						<span class="clear"></span>
					</div>
				</div>
				<div class="betGraph_w">
					<div class="betGraph">
						<h3 class="noBorder">ODDSCONNECT BET GRAPH</h3>
						<p>BET 정보는 5분단위로 갱신됩니다.</p>
						<div class="OU">
							<ul class="blackTab r_tit">
								<li><a href="#r02">승무패</a></li>
								<li class="on"><a href="#r01">O/U</a></li>
							</ul>
							<p class="yellow"><a href=""><span class="MU_s"></span>1.14</a></p>
							<p class="blue"><a href=""><span class="arsenal_s"></span>1.14</a></p>
						</div>
						<div class="lineGraph">
							<div class="line_graph_w"><div id="line_graph01" class="line_graph"></div></div>
						</div>
						<p class="Re"><a href=""><span class="re"></span>새로고침</a></p>
					</div>
				</div>
				<div class="cheer">
					<h3 class="noBorder">오늘의 승리팀 응원하기</h3>
					<div class="teams">
						<div class="left">
							<div class="box_w">
								<span class="MU_bb"></span>
								<div class="box">	
									<div>
										<h3 class="noBorder">맨체스터 유나이티드</h3>
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
								<span class="MU_bb"></span>
								<div class="box">
									<div>
										<h3 class="noBorder">맨체스터 유나이티드</h3>
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
						<div class="center"><span class="PL_bb">premier league</span></div>
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
									<p class="bed"><a href="">555</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">22</a></p>
									<p class="bed"><a href="">23123</a></p>
								</div>
							</li>
							<li>
								<h5>스포네비***</h5>
								<p>어린왕자 생각나네요. <br />네가 네시에 온다면 난 세시부터 행복할거야.</p>
								<div>
									<span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
									<span>210.198.**.**</span>
									<p class="like"><a href="">123</a></p>
									<p class="bed"><a href="">234234234</a></p>
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
