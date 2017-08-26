<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">

	$(document).ready(function(){ 
		//ranking_리그_리그통계_테이블변경버전
		for(var i=1;i<9;i++){		
			(function (k){
				$(".Ltable table th span.n" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					$(this).parents(".table_default").siblings("div").addClass("redline n" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};

		// 승패 핸디캡 O/U  노랑탭메뉴
		for(var i=1;i<4;i++){		
			(function (k){
				$(".expert_menu > li.ls0" + k ).click(function(){ 
					$(".expert_menu li").removeClass("on");
					$(this).addClass("on");
					$(".expert_menu_view > li").css("display","none");
					$(".expert_menu_view > li").eq(k-1).css("display","block");
					return false;
				});
			}(i));
		};
	
		//game_league _ 상단리그종류메뉴
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});

		//즐찾버튼토글
		$(".btn_mark").click(function(){ 
			$(this).toggleClass("on");
			return false;
		});

		//O/U패턴 ! 클릭
		$(".excl_mark").click(function(){ 
			$(this).siblings().slideToggle("fast");
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
						<h2 class="tit02">2017 KBO 리그</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class="on "><a href="league.php">리그정보</a></li>
							<li class=""><a href="result.php">경기 결과</a></li>
							<li class=""><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="active s1">
								<div class="tab01_w">
									<ul class="tab01_2 expert_menu">
										<li class="ls01 on" ><a href="">승패</a></li>
										<li class="ls02"><a href="">핸디캡</a></li>
										<li class="ls03"><a href="">O/U</a></li>
									</ul>
								</div>
								<ul class="expert_menu_view">
									<li class="ls01_w">
										<div class="pb50">
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>				
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>				
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
									<li class="ls02_w" style="display:none;">
										<div class="pb50">
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>	
													<th><span class="underline">핸디캡</span></th>	
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>	
													<th><span class="underline">핸디캡</span></th>	
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
									<li class="ls03_w" style="display:none;">
										<div class="pb50">
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>	
													<th><span class="underline">O/U</span></th>	
													<th>OVER</th>	
													<th>UNDER</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">9.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">10.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="150px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th class="left pl20" colspan="2"><span class="country_173"></span> 대한민국 // KBO</th>	
													<th><span class="underline">O/U</span></th>	
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">9.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LG 트윈스</b>  vs  삼성 라이온즈</a></td>
													<td><span class="underline">10.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>2017.05.31&nbsp;&nbsp;|&nbsp;&nbsp;14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">LG 트윈스  vs  <b>삼성 라이온즈</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
								</ul>
								
								<div class="pb50 relative" style="margin-left:0;">
									<h3 class="center">2016 KBO리그 통계</h3>
									<div class="">
										<div class="relative">
											<ul class="tab02" style="margin-bottom:10px;">
												<li class="on"><a href="">전체</a></li>
												<li><a href="">홈</a></li>
												<li><a href="">원정</a></li>
											</ul>
											<div class="select" style="top:-8px;">
												<p class="off"><span class="pp">승패</span><span class="pa"></span></p>
												<ul>
													<li><a href="">승패</a></li>
													<li><a href="">핸디캡</a></li>
													<li><a href="">O/U</a></li>
												</ul>
											</div>
										</div>
										<div class="Ltable relative">
											<!-- 승패 선택시 -->
											<table class="table_default league_Ltable">
												<caption></caption>
												<colgroup>
													<col width="55px"/>
													<col width="190px"/>
													<col width="45px"/><col width="40px"/><col width="40px"/><col width="30px"/><col width="40px"/><col width="40px"/><col width="40px"/><col width="45px"/><col width="55px"/><col width="40px"/><col width="260px"/><col width="40px"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th class="left">팀명</th>
													<th>경기</th>
													<th><span>승<span class="down"></span></span></th>
													<th><span>패<span class="down"></span></span></th>
													<th>무</th>
													<th>득</th>
													<th>실</th>
													<th>마진</th>
													<th>득/실</th>
													<th>승률</th>
													<th>승차</th>
													<th colspan="2">최근 10경기</th>
												</tr>
												<tr>
													<td>1</td>
													<td class="left"><span class="NC_L"></span><a href="/odds/game/league_base/team_info.php"> NC 다이노스</a></td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>			
												<tr>
													<td>2</td>
													<td class="left"><span class="HT_L"></span> KIA 타이거즈</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>3</td>
													<td class="left"><span class="SK_L"></span> SK 와이번즈</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>	
												<tr>
													<td>4</td>
													<td class="left"><span class="OB_L"></span> 두산 베어스</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>5</td>
													<td class="left"><span class="LG_L"></span> LG 트윈스</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>6</td>
													<td class="left"><span class="WO_L"></span> 넥센 히어로즈</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>7</td>
													<td class="left"><span class="LT_L"></span> 롯데 자이언츠</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>8</td>
													<td class="left"><span class="HH_L"></span> 한화 이글스</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>9</td>
													<td class="left"><span class="SS_L"></span> 삼성 라이온즈</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>10</td>
													<td class="left"><span class="KT_L"></span> KT 위즈</td>
													<td>144</td>
													<td>80</td>
													<td>55</td>
													<td>3</td>
													<td>85</td>
													<td>70</td>
													<td>+35</td>
													<td>9.7</td>
													<td>0.655</td>
													<td>0.0</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
											</table>
											<!-- 핸디캡 선택시 -->
											<table class="table_default league_Ltable">
												<caption></caption>
												<colgroup>
													<col width="55px"/>
													<col width="190px"/>
													<col width=""/><col width="66px"/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="260px"/><col width="40px"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th class="left">팀명</th>
													<th>경기</th>
													<th>
														<div class="select_w">
															<div class="select" style="right:0px;">
																<p class="off"><span class="pp">-1.5</span><span class="pa"></span></p>
																<ul>
																	<li><a href="">-1.5</a></li>
																	<li><a href="">+1.5</a></li>
																</ul>
															</div>
														</div>
													</th>
													<th><span>승<span class="down"></span></span></th>
													<th><span>패<span class="down"></span></span></th>
													<th>득</th>
													<th>실</th>
													<th>계차</th>
													<th>승률</th>
													<th colspan="2">핸디캡 최근 10경기</th>
												</tr>
												<tr>
													<td>1</td>
													<td class="left"><span class="NC_L"></span><a href="/odds/game/league_base/team_info.php"> NC 다이노스</a></td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>			
												<tr>
													<td>2</td>
													<td class="left"><span class="HT_L"></span> KIA 타이거즈</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>3</td>
													<td class="left"><span class="SK_L"></span> SK 와이번즈</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>	
												<tr>
													<td>4</td>
													<td class="left"><span class="OB_L"></span> 두산 베어스</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>5</td>
													<td class="left"><span class="LG_L"></span> LG 트윈스</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>6</td>
													<td class="left"><span class="WO_L"></span> 넥센 히어로즈</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>7</td>
													<td class="left"><span class="LT_L"></span> 롯데 자이언츠</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>8</td>
													<td class="left"><span class="HH_L"></span> 한화 이글스</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>9</td>
													<td class="left"><span class="SS_L"></span> 삼성 라이온즈</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
												<tr>
													<td>10</td>
													<td class="left"><span class="KT_L"></span> KT 위즈</td>
													<td>54</td>
													<td><span class="underline">-1.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>6.5</td>
													<td>5.5</td>
													<td>+1.7</td>
													<td>0.655</td>
													<td>
														<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
													</td>
													<td>7/3</td>
												</tr>		
											</table>
											<!-- O/U 선택시 -->
											<table class="table_default league_Ltable league_Ltable_OU">
												<caption></caption>
												<colgroup>
													<col width="55px"/>
													<col width="190px"/>
													<col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="260px"/><col width="40px"/>
												</colgroup>
												<tr>
													<th>순위</th>
													<th class="left">팀명</th>
													<th>경기</th>
													<th>기준점</th>
													<th><span>오버<span class="down"></span></span></th>
													<th><span>언더<span class="down"></span></span></th>
													<th>득/실</th>
													<th>오버%</th>
													<th colspan="2">O/U 최근 10경기</th>
												</tr>
												<tr>
													<td>1</td>
													<td class="left"><span class="NC_L"></span><a href="/odds/game/league_base/team_info.php"> NC 다이노스</a></td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>			
												<tr>
													<td>2</td>
													<td class="left"><span class="HT_L"></span> KIA 타이거즈</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>3</td>
													<td class="left"><span class="SK_L"></span> SK 와이번즈</td>
													<td>54</td>
													<td><span class="underline">9.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>	
												<tr>
													<td>4</td>
													<td class="left"><span class="OB_L"></span> 두산 베어스</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>5</td>
													<td class="left"><span class="LG_L"></span> LG 트윈스</td>
													<td>54</td>
													<td><span class="underline">10</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>6</td>
													<td class="left"><span class="WO_L"></span> 넥센 히어로즈</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>7</td>
													<td class="left"><span class="LT_L"></span> 롯데 자이언츠</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>8</td>
													<td class="left"><span class="HH_L"></span> 한화 이글스</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>9</td>
													<td class="left"><span class="SS_L"></span> 삼성 라이온즈</td>
													<td>54</td>
													<td><span class="underline">8.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
												<tr>
													<td>10</td>
													<td class="left"><span class="KT_L"></span> KT 위즈</td>
													<td>54</td>
													<td><span class="underline">10.5</span></td>
													<td>25</td>
													<td>15</td>
													<td>11.5</td>
													<td>53.5%</td>
													<td>
														<span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span>
													</td>
													<td>6/4</td>
												</tr>		
											</table>
											<div class="pt50">
												<h3 class="center noBorder">2017 KBO 리그요약</h3>
												<div class="tableNtable pt10">
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th>리그승률</th>
															<th>경기</th>
															<th>확률</th>
														</tr>
														<tr>
															<td>홈팀승</td>
															<td>85</td>
															<td>55%</td>
														</tr>
														<tr>
															<td>원정팀승</td>
															<td>75</td>
															<td>45%</td>
														</tr>
														<tr>
															<td>타이</td>
															<td>10</td>
															<td>&nbsp;</td>
														</tr>
													</table>
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th>리그득점</th>
															<th>득점</th>
															<th>평균</th>
														</tr>
														<tr>
															<td>전체</td>
															<td>1585</td>
															<td>9.7</td>
														</tr>
														<tr>
															<td>홈팀</td>
															<td>685</td>
															<td>4.8</td>
														</tr>
														<tr>
															<td>원정팀</td>
															<td>645</td>
															<td>4.9</td>
														</tr>
													</table>
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th>핸디캡 <span class="underline">1.5</span></th>
															<th>경기</th>
															<th>확률</th>
														</tr>
														<tr>
															<td>홈팀 1.5승</td>
															<td>85</td>
															<td>55%</td>
														</tr>
														<tr>
															<td>원정팀 1.5승</td>
															<td>75</td>
															<td>45%</td>
														</tr>
													</table>
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th>오버/언더</th>
															<th>경기</th>
															<th>확률</th>
														</tr>
														<tr>
															<td>오버 <span class="underline">9.5</span></td>
															<td>85</td>
															<td>60%</td>
														</tr>
														<tr>
															<td>언더 <span class="underline">9.5</span></td>
															<td>75</td>
															<td>50%</td>
														</tr>
													</table>
													<table class="table_default gametable02">
														<caption></caption>
														<colgroup>
															<col width="135px"/><col width="20%"/>
														</colgroup>
														<tr>
															<th class="left">공격력</th>
															<th>득점</th>
															<th>평균</th>
															<th>홈런</th>
															<th>타율</th>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> NC</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="HT_L"></span> KIA</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="SK_L"></span> SK</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="OB_L"></span> 두산</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="LG_L"></span> LG</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="WO_L"></span> 넥센</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="LT_L"></span> 롯데</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="HH_L"></span> 한화</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="SS_L"></span> 삼성</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="KT_L"></span> KT</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
													</table>
													<table class="table_default gametable02">
														<caption></caption>
														<colgroup>
															<col width="135px"/><col width="20%"/>
														</colgroup>
														<tr>
															<th class="left">수비력</th>
															<th>실점</th>
															<th>평균</th>
															<th>피홈런</th>
															<th>피안타율</th>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> NC</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="HT_L"></span> KIA</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="SK_L"></span> SK</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="OB_L"></span> 두산</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="LG_L"></span> LG</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="WO_L"></span> 넥센</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="LT_L"></span> 롯데</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="HH_L"></span> 한화</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="SS_L"></span> 삼성</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
														<tr>
															<td class="left"><span class="KT_L"></span> KT</td>
															<td>525</td>
															<td>4.85</td>
															<td>85</td>
															<td>0.285</td>
														</tr>
													</table>
												</div>
												<div class="clear"></div>
											</div>
										</div>
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