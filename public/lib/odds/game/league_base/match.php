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


		//game_league _ 상단리그종류메뉴
		$(".other_btn").click(function(){ 
			$(this).parents().find(".other_view").slideToggle(); //내용 클릭하면 이동
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


	

	  </script>




							
			<link href="../../css/baseball.css" rel="stylesheet" type="text/css"/>

							
			<div class="Match_w">		
				<div class="match KBO">
					<div class="title_bar">
						<p>야구 - 대한민국 -</p>
						<div>
							<a href="" class="other_btn">KBO<span></span></a>
							<ul class="other_view">
								<li><a href="">LG vs 삼성</a></li>
								<li><a href="">KIA vs 넥센</a></li>
								<li><a href="">KT vs 한화</a></li>
							</ul>
						</div>
					</div>
					<div class="score_bar">
						<div>
							<div class="team">
								<p class="st">1위</p>
								<p>LG 트윈스</p>
								<span>선발 : 데이비드 허프</span>
							</div>
							<div class="team_logo"><span class="LG_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
							<p>VS</p>
							<div class="team_logo"><span class="SS_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
							<div class="team">
								<p class="st">2위</p>
								<p>삼성 라이온즈</p>
								<span>선발 : 윤성환</span>
							</div>
						</div>
						<ul>
							<li>2016.10.25</li>
							<li>잠실경기장</li>
						</ul>				
					</div>
				</div>
				<div class="matchTab">
					<ul class="title">
						<li class="on"><a href="#r1">팀간 비교</a></li>
						<li><a href="#r2">선발 비교</a></li>
					</ul>
					<ul class="result">
						<li id="r1" class="on"><!-- 팀간 비교 -->
							<div class="opinion">
								<div class="graph">
									<div class="total ">
										<span class="left_g">55%</span>
										<div class="left_g">	
											<div><div style="width:55%"><p><span>415명</span></p></div></div>										
										</div>
										<p><b>승패 의견일치</b></p>
										<div class="right_g">	
											<div><div style="width:45%"><p><span>375명</span></p></div></div>		
										</div>
										<span class="right_g">45%</span>
									</div>
									<div class="result_btn_div">
										<span class="left_g">6/4</span>
										<div class="left_g">
											<a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
										</div>
										<p>최근 10경기</p>
										<div class="right_g">	
											<a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
										</div>
										<span class="right_g">4/6</span>
									</div>
									<div class="mt15">
										<span class="left_g">1위</span>
										<div class="left_g">
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<p>리그 순위</p>
										<div class="right_g">	
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="mt15">
										<span class="left_g">1위</span>
										<div class="left_g">
											<div><b class="aa">Over 21  /  Under 21</b></div>
										</div>
										<p><span class="underline">9.5</span></p>
										<div class="right_g">	
											<div><b class="aa">Over 21  /  Under 21</b></div>
										</div>
										<span class="right_g">1위</span>
									</div>

									<div class="yellowG mt35">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>10승 3패</span></div></div>										
										</div>
										<p>홈</p>
										<div class="right_g">	
											<div><div style="width:86%"><span>10승 3패</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>			
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>10승 3패</span></div></div>										
										</div>
										<p>원정</p>
										<div class="right_g">	
											<div><div style="width:86%"><span>10승 3패</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:48%"><span>5.75</span></div></div>										
										</div>
										<p>득점</p>
										<div class="right_g">	
											<div><div style="width:48%"><span>5.75</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:42%"><span>4.25</span></div></div>										
										</div>
										<p>실점</p>
										<div class="right_g">	
											<div><div style="width:42%"><span>4.25</span></div></div>			
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:49%"><span>0.325</span></div></div>										
										</div>
										<p>타율</p>
										<div class="right_g">	
											<div><div style="width:49%"><span>0.325</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG bb">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>85</span></div></div>										
										</div>
										<p>홈런</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>85</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>

									<h4>시즌 상대전적</h4>
									<div class="result_btn_div">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">
											<b>3/3</b>
											<a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a>
										</div>
										<p>최근 6경기</p>
										<div class="right_g">	
											<a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_dra.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" ><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a>
											<b>3/3</b>
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="mt15">
										<span class="left_g">50%</span>
										<div class="left_g">
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<p>승패</p>
										<div class="right_g">	
											<div><b class="aa">45승 25패 1무</b></div>
										</div>
										<span class="right_g">50%</span>
									</div>
									<div class="mt15">
										<span class="left_g">50%</span>
										<div class="left_g">
											<div><b class="aa">Over 7</b></div>
										</div>
										<p>O/U</p>
										<div class="right_g">	
											<div><b class="aa">Under 7</b></div>
										</div>
										<span class="right_g">50%</span>
									</div>	
									<div class="blueG">
										<span class="left_g">5.65</span>
										<div class="left_g">	
											<div><div style="width:60%"><span>35</span></div></div>										
										</div>
										<p>득점/평균</p>
										<div class="right_g">	
											<div><div style="width:60%"><span>35</span></div></div>		
										</div>
										<span class="right_g">5.65</span>
									</div>		
									<div class="blueG">
										<span class="left_g">0.355</span>
										<div class="left_g">	
											<div><div style="width:43%"><span>45</span></div></div>										
										</div>
										<p>안타/타율</p>
										<div class="right_g">	
											<div><div style="width:43%"><span>35</span></div></div>		
										</div>
										<span class="right_g">0.285</span>
									</div>	
									<div class="blueG bb">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">	
											<div><div style="width:41%"><span>85</span></div></div>										
										</div>
										<p>홈런</p>
										<div class="right_g">	
											<div><div style="width:41%"><span>85</span></div></div>		
										</div>
										<span class="right_g">&nbsp;</span>
									</div>	
								</div>
							</div>
							
							<div class="match_w">
								<div class="relative">
									<h3 class="center">2017시즌 상대전적 결과</h3>
									<div class="select" style="">
										<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<table class="table_default league_table01 league_table01_1">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>승</th>	
											<th>패</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<h3 class="center">홈팀 승패 최근결과</h3>
									<div class="select" style="right:115px;">
										<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<div class="select" style="width:108px;">
										<p class="off"><span class="pp">10경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">5경기</a></li>
											<li><a href="">10경기</a></li>
											<li><a href="">20경기</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>승</th>	
											<th>패</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td colspan="7"  class="result_td">
												<b>홈팀 최근기록
													<span class="pl15">
														<a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a>5
														<a class="result_btn ml10 mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a>5
														<span class="graybtn ml10 mr10">득</span>45
														<span class="graybtn ml10 mr10">실</span>40
														<span class="graybtn ml10 mr10">득/실</span>9.4
													</span>
												</b>
											</td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<h3 class="center">원정팀 O/U 최근결과</h3>
									<div class="select" style="right:115px;">
										<p class="off"><span class="pp">O/U</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<div class="select" style="width:108px;">
										<p class="off"><span class="pp">10경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">5경기</a></li>
											<li><a href="">10경기</a></li>
											<li><a href="">20경기</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>기준</th>	
											<th>오버</th>
											<th>언더</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td colspan="8" class="result_td">
												<b>원정팀 최근기록
													<span class="pl15">
														<span class="plusL2 ml10 mr10"></span>5
														<span class="minusL2 ml10 mr10"></span>5
														<span class="graybtn ml10 mr10">득</span>45
														<span class="graybtn ml10 mr10">실</span>40
														<span class="graybtn ml10 mr10">득/실</span>9.4
													</span>
												</b>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</li>
						<li id="r2" class=""><!-- 선발 비교 -->
							<div class="opinion">
								<div class="graph">
									<div class="total ">
										<span class="left_g">55%</span>
										<div class="left_g">	
											<div><div style="width:55%"><p><span>415명</span></p></div></div>										
										</div>
										<p><b>승패 의견일치</b></p>
										<div class="right_g">	
											<div><div style="width:45%"><p><span>375명</span></p></div></div>		
										</div>
										<span class="right_g">45%</span>
									</div>
									<div class="mt15 bb">
										<span class="left_g">1위</span>
										<div class="left_g">
											<b>45승 25패 1무</b>
										</div>
										<p>승패</p>
										<div class="right_g">	
											<b>45승 25패 1무</b>
										</div>
										<span class="right_g">5위</span>
									</div>

									<div class="yellowG mt20">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:86%"><span>0.655</span></div></div>										
										</div>
										<p>승률</p>
										<div class="right_g">	
											<div><div style="width:86%"><span>0.655</span></div></div>		
										</div>
										<span class="right_g">1위</span>
									</div>			
									<div class="yellowG">
										<span class="left_g">55%</span>
										<div class="left_g">	
											<div><div style="width:56%"><span>3.65</span></div></div>										
										</div>
										<p>방어율</p>
										<div class="right_g">	
											<div><div style="width:56%"><span>3.65</span></div></div>		
										</div>
										<span class="right_g">55%</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">6&frac13;</span>
										<div class="left_g">	
											<div><div style="width:48%"><span>5.75</span></div></div>										
										</div>
										<p>이닝/평균</p>
										<div class="right_g">	
											<div><div style="width:48%"><span>5.75</span></div></div>		
										</div>
										<span class="right_g">6&frac13;</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:42%"><span>9</span></div></div>										
										</div>
										<p>QS</p>
										<div class="right_g">	
											<div><div style="width:42%"><span>4</span></div></div>			
										</div>
										<span class="right_g">1위</span>
									</div>	
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:49%"><span>55</span></div></div>										
										</div>
										<p>삼진</p>
										<div class="right_g">	
											<div><div style="width:49%"><span>45</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>85</span></div></div>										
										</div>
										<p>피안타/평균</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>85</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>85</span></div></div>										
										</div>
										<p>피홈런</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>85</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>85</span></div></div>										
										</div>
										<p>피안타율</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>85</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>
									<div class="yellowG bb">
										<span class="left_g">1위</span>
										<div class="left_g">	
											<div><div style="width:40%"><span>85</span></div></div>										
										</div>
										<p>WHIP</p>
										<div class="right_g">	
											<div><div style="width:40%"><span>85</span></div></div>					
										</div>
										<span class="right_g">1위</span>
									</div>

									<div class="DblueG mt35">
										<span class="left_g">&nbsp;</span>
										<div class="left_g" style="text-align:center;">					
											<b>데이비드 허프 vs 삼성</b>
										</div>
										<p>&nbsp;</p>
										<div class="right_g" style="text-align:center;">					
											<b>윤성환 vs LG</b>
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="DblueG fff">
										<span class="left_g">60%</span>
										<div class="left_g">					
											<div><div><span>10경기 7승 2패</span></div></div>		
										</div>
										<p>승패</p>
										<div class="right_g">					
											<div><div><span>10경기 7승 2패</span></div></div>		
										</div>
										<span class="right_g">60%</span>
									</div>
									<div class="DblueG">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">					
											<div><div><span>3.55</span></div></div>		
										</div>
										<p>방어율</p>
										<div class="right_g">					
											<div><div><span>3.55</span></div></div>		
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="DblueG">
										<span class="left_g">6&frac13;</span>
										<div class="left_g">					
											<div><div><span>25</span></div></div>		
										</div>
										<p>이닝/평균</p>
										<div class="right_g">					
											<div><div><span>25</span></div></div>		
										</div>
										<span class="right_g">5&frac13;</span>
									</div>
									<div class="DblueG">
										<span class="left_g">4.5</span>
										<div class="left_g">					
											<div><div><span>25</span></div></div>		
										</div>
										<p>안타/평균</p>
										<div class="right_g">					
											<div><div><span>25</span></div></div>		
										</div>
										<span class="right_g">4.2</span>
									</div>
									<div class="DblueG">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">					
											<div><div><span>5</span></div></div>		
										</div>
										<p>피홈런</p>
										<div class="right_g">					
											<div><div><span>5</span></div></div>		
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="DblueG">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">					
											<div><div><span>0.333</span></div></div>		
										</div>
										<p>피안타율</p>
										<div class="right_g">					
											<div><div><span>0.333</span></div></div>		
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
									<div class="DblueG bb">
										<span class="left_g">&nbsp;</span>
										<div class="left_g">					
											<div><div><span>1.65</span></div></div>		
										</div>
										<p>WHIP</p>
										<div class="right_g">					
											<div><div><span>1.65</span></div></div>		
										</div>
										<span class="right_g">&nbsp;</span>
									</div>
								</div>
							</div>

							<div class="match_w">
								<div class="relative">
									<h3 class="center">류제국 vs 삼성라이온즈 결과</h3>
									<div class="select">
										<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>승</th>	
											<th>패</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<h3 class="center">윤성환 vs LG트윈스 결과</h3>
									<div class="select">
										<p class="off"><span class="pp">O/U</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>기준</th>	
											<th>오버</th>
											<th>언더</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (고우석)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td><span class="underline">10.5</span></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (고우석)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="underline">9.5</span></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<h3 class="center">류제국 최근결과</h3>
									<div class="select" style="right:115px;">
										<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<div class="select" style="width:108px;">
										<p class="off"><span class="pp">5경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">5경기</a></li>
											<li><a href="">10경기</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>승</th>	
											<th>패</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
									</table>
								</div>
								<div class="relative">
									<h3 class="center">윤성환 최근결과</h3>
									<div class="select" style="right:115px;">
										<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
										<ul>
											<li><a href="">승패</a></li>
											<li><a href="">O/U</a></li>
										</ul>
									</div>
									<div class="select" style="width:108px;">
										<p class="off"><span class="pp">5경기</span><span class="pa"></span></p>
										<ul>
											<li><a href="">5경기</a></li>
											<li><a href="">10경기</a></li>
										</ul>
									</div>
									<table class="table_default league_table01">
										<caption></caption>
										<colgroup>
											<col width="80px"/>
											<col width="*"/>
											<col width="85px"/>
											<col width="90px"/>
											<col width="80px"/>
											<col width="55px"/>
											<col width="65px"/>
										</colgroup>
										<tr>
											<th>날짜</th>
											<th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
											<th>스코어</th>					
											<th>승</th>	
											<th>패</th>
											<th>B’s</th>
											<th>DATA</th>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" >LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
											<td><b class="score red">2<span class="colon">:</span>7</b></td>
											<td>3.15</td>
											<td><span class="graybox">1.93</span></td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
										<tr>
											<td>08.01</td>
											<td class="left pl20"><a class="result_btn mr10" href="match.php" ><img src="../../image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="/odds/game/main/pop_dividend.php" onclick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;" ><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
											<td><b class="score red">8<span class="colon">:</span>7</b></td>
											<td><span class="graybox">1.93</span></td>
											<td>3.15</td>
											<td>51</td>
											<td><span class="b_BTN4"><a href="/odds/game/league_base/match_full.php">경기결과</a></span></td>
										</tr>
									</table>
								</div>
							</div>
							
						</li>
					</ul>
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
