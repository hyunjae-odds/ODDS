<?php 
include("head_up.php");
include("head.php");
?>


<script type="text/javascript">

$(document).ready(function(){ 

	$('.other_btn').click(function(){ 
		var state = $('.other_view').css('display'); 
		if(state == 'none'){ 
			$('.other_view').slideDown(); 
			$('.other_btn').addClass('close');
			return false;
		}else{
			$('.other_view').slideUp(); 	
			$('.other_btn').removeClass('close');
			return false;
		}
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


		<script src="../js/highcharts/highcharts.js"></script>
		<script src="../js/highcharts/modules/exporting.js"></script>


							
			<div class="match">
				<div class="top">
					<ul>
						<li>2016.10.25</li>
						<li>Emirates Stadium</li>
						<li>London</li>
						<li>Att:59,962</li>
					</ul>
					<div class="other">
						<p><a href="" class="other_btn">해당리그 다른 경기보기</a></p>
						<ul class="other_view" style="display:none;">
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
							<li><a href="">19:55&nbsp;&nbsp;&nbsp;&nbsp;MCU&nbsp;&nbsp;&nbsp;vs&nbsp;&nbsp;&nbsp;MCU</a></li>
						</ul>
					</div>
				</div>
				<div class="score">
					<div>
						<div class="num full">2</div><!-- 게임이 끝나면 .full 추가 -->
						<span class="home_icon_b"></span>
						<span class="MU_bb"></span>
						<div><h3>맨체스터 Utd.</h3>
						<p>46전 28승 3무 15패</p></div>
					</div>
					<div>
						<div class="num full">1</div><!-- 게임이 끝나면 .full 추가 -->
						<span class="MU_bb"></span>
						<div><h3>맨체스터 Utd.</h3>
						<p>46전 28승 3무 15패</p></div>
					</div>
					<div class="league_pic">
						<div><span class="PL_bb">premier league</span></div>
						<span>46 ROUND</span>
					</div>
				</div>
				<div class="livescore">
					<div class="referee">
						<p>로버트 메들리</p>
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
							<li><span class="MU_s"></span></li>
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
							<div class="now" style="left:100%;">
								<img src="../image/livescore/icon_now.png" alt="" />
								<!--marquee behavior="alternate" width="32" scrollamount="50" scrolldelay="500"><span class="now"></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</marquee-->
							</div>
						</div>
						
					</div>
				</div>				
			</div>
			<div class="opinion">
				<h4>일치된 의견</h4>
				<div class="totalGraph">
					<span class="red">55%</span>
					<div>
						<div class="red over" style="width:55%;"><span>415명</span></div><!-- 50%넘어가면 .over / 50%보다 적으면 over빠짐 -->
						<span>375명</span>
					</div>
					<span class="blue">45%</span>
					<div class="Wline"></div>
				</div>
				<div class="graph">
					<div>
						<span class="left">1</span>
						<div class="left">	
							<div><div style="width:86%"></div></div>										
						</div>
						<p>골</p>
						<div class="right">	
							<div><div style="width:86%"></div></div>		
						</div>
						<span class="right">1</span>
					</div>
					<div>
						<span class="left">1</span>
						<div class="left">	
							<div><div style="width:82%"></div></div>										
						</div>
						<p>슈팅</p>
						<div class="right">	
							<div><div style="width:80%"></div></div>		
						</div>
						<span class="right">1</span>
					</div>
					<div>
						<span class="left">50</span>
						<div class="left">	
							<div><div style="width:52%"></div></div>										
						</div>
						<p>유효슈팅</p>
						<div class="right">	
							<div><div style="width:50%"></div></div>		
						</div>
						<span class="right">50</span>
					</div>
					<div>
						<span class="left">1</span>
						<div class="left">	
							<div><div style="width:82%"></div></div>										
						</div>
						<p>코너킥</p>
						<div class="right">	
							<div><div style="width:80%"></div></div>		
						</div>
						<span class="right">1</span>
					</div>
					<div>
						<span class="left">4</span>
						<div class="left">	
							<div><div style="width:50%"></div></div>										
						</div>
						<p>오프사이드</p>
						<div class="right">	
							<div><div style="width:50%"></div></div>		
						</div>
						<span class="right">5</span>
					</div>
					<div>
						<span class="left">122</span>
						<div class="left">	
							<div><div style="width:32%"></div></div>										
						</div>
						<p>파울</p>
						<div class="right">	
							<div><div style="width:30%"></div></div>		
						</div>
						<span class="right">12</span>
					</div>
					<div>
						<span class="left">0</span>
						<div class="left">	
							<div><div style="width:0%"></div></div>										
						</div>
						<p>경고</p>
						<div class="right">	
							<div><div style="width:0%"></div></div>		
						</div>
						<span class="right">0</span>
					</div>
					<div>
						<span class="left">1</span>
						<div class="left">	
							<div><div style="width:12%"></div></div>										
						</div>
						<p>퇴장</p>
						<div class="right">	
							<div><div style="width:0%"></div></div>		
						</div>
						<span class="right">0</span>
					</div>
					<div>
						<span class="left">53%</span>
						<div class="left">	
							<div><div style="width:53%"></div></div>										
						</div>
						<p>점유율</p>
						<div class="right">	
							<div><div style="width:33%"></div></div>		
						</div>
						<span class="right">33%</span>
					</div>									
				</div>
			</div>
			<div class="lineUP">
				<!--<h3>라인업</h3>-->
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
				<!--div class="ground">
					<ul class="left bg_MU">
						<li style="top:240px; left:54px;">데 헤아<span>Goalkeeper</span></li>
						<li style="top:30px; left:210px;">바일리<span>Defender</span></li>
						<li style="top:150px; left:200px;">존스<span>Defender</span></li>
						<li style="top:325px; left:200px;">로호<span>Defender</span></li>
						<li style="top:438px; left:210px;">포그바<span>Defender</span></li>
						<li style="top:70px; left:305px;">디페이<span>Midfielder</span></li>
						<li style="top:235px; left:240px;">마타<span>Midfielder</span></li>
						<li style="top:240px; left:343px;">마샬<span>Midfielder</span></li>
						<li style="top:400px; left:260px;">이브라히모비치<span>Midfielder</span></li>
						<li style="top:135px; left:405px;">루니<span>Forward</span></li>
						<li style="top:350px; left:405px;">에레라<span>Forward</span></li>
					</ul>
					<ul class="right bg_MC">
						<li style="top:240px; right:54px;">데 헤아<span>Goalkeeper</span></li>
						<li style="top:102px; right:167px;">바일리<span>Defender</span></li>
						<li style="top:242px; right:167px;">존스<span>Defender</span></li>
						<li style="top:382px; right:167px;">로호<span>Defender</span></li>
						<li style="top:155px; right:233px;">포그바<span>Defender</span></li>
						<li style="top:325px; right:233px;">디페이<span>Midfielder</span></li>
						<li style="top:75px; right:298px;">마타<span>Midfielder</span></li>
						<li style="top:243px; right:297px;">마샬<span>Midfielder</span></li>
						<li style="top:400px; right:269px;">이브라히모비치<span>Midfielder</span></li>
						<li style="top:135px; right:405px;">루니<span>Forward</span></li>
						<li style="top:350px; right:405px;">에레라<span>Forward</span></li>
					</ul>
				</div-->
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

			<div class="cheer">
				<h3>오늘의 승리팀 응원하기</h3>
				<div class="teams">
					<div class="left">
						<div class="box_w">
							<span class="MU_bb"></span>
							<div class="box">	
								<div>
									<h3>맨체스터 유나이티드</h3>
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
									<h3>맨체스터 유나이티드</h3>
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
								<p class="bed"><a href="">0</a></p>
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


			
<?php 
include("footer.php");
?>


 </body>
</html>
