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

	
				<link href="../../css/soccer.css" rel="stylesheet" type="text/css"/>


				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 축구 - 잉글랜드</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">프리미어리그</h2>
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
													<col width="80px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 23일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>				
													<th>승</th>	
													<th>무</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="80px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 24일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>				
													<th>승</th>	
													<th>무</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
									<li class="ls02_w" style="display:none;">
										<div class="pb50">
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="80px"/>
													<col width="*"/>
													<col width="80px"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 23일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>	
													<th><span class="underline">핸디캡</span></th>	
													<th>승</th>	
													<th>무</th>
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="80px"/>
													<col width="*"/>
													<col width="80px"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 24일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>	
													<th><span class="underline">핸디캡</span></th>	
													<th>승</th>	
													<th>무</th>
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">-1.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">-1.5</span></td>	
													<td>3.15</td>
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
									<li class="ls03_w" style="display:none;">
										<div class="pb50">
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="80px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 23일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>	
													<th><span class="underline">O/U</span></th>	
													<th>OVER</th>	
													<th>UNDER</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">9.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">10.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
											<table class="table_default league_table01">
												<caption></caption>
												<colgroup>
													<col width="80px"/>
													<col width="*"/>
													<col width="90px"/>
													<col width="90px"/>
													<col width="80px"/>
													<col width="55px"/>
													<col width="65px"/>
												</colgroup>
												<tr>
													<th>05월 24일</th>
													<th class="left pl20"><span class="country_169"></span> Australia // Brisbane Premier League</th>	
													<th><span class="underline">O/U</span></th>	
													<th>승</th>	
													<th>패</th>
													<th>B’s</th>
													<th>DATA</th>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">9.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php"><b>맨체스터 유나이티드</b>  vs  맨체스터 시티</a></td>
													<td><span class="underline">10.5</span></td>	
													<td><span class="">1.93</span></td>
													<td>3.15</td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
												<tr>
													<td>14:30</td>
													<td class="left pl20"><a href="/odds/game/main/dividend.php">맨체스터 유나이티드  vs  <b>맨체스터 시티</b></a></td>
													<td><span class="underline">8.5</span></td>	
													<td>3.15</td>
													<td><span class="">1.93</span></td>
													<td>51</td>
													<td><span class="b_BTN5"><a href="/odds/game/league_soccer/match.php">매치정보</a></span></td>
												</tr>
											</table>
										</div>
									</li>
								</ul>
								
								<div class="pb50 relative" style="margin-left:0;">
									<div class="relative">
										<h3 class="" style="margin:0;">2016/17 프리미어리그 테이블</h3>
										<div class="select" style="top:-2px;">
											<p class="off"><span class="pp"><span class="underline">2.5</span></span><span class="pa"></span></p>
											<ul>
												<li><a href=""><span class="underline">1.5</span></a></li>
												<li><a href=""><span class="underline">2.5</span></a></li>
												<li><a href=""><span class="underline">3.5</span></a></li>
											</ul>
										</div>
									</div>
									<div class="LastGame_view">
										<ul class="tab02">
											<li class="on"><a href="">전체</a></li>
											<li><a href="">홈</a></li>
											<li><a href="">원정</a></li>
										</ul>
										<div class="Ltable relative">
											<table class="table_default league_Ltable">
												<caption></caption>
												<colgroup>
													<col width="63px"/>
													<col width="*"/>
													<col width="55px"/><col width="45px"/><col width="45px"/><col width="45px"/><col width="50px"/><col width="55px"/>
													<col width="55px"/><col width="50px"/><col width="50px"/><col width="50px"/><col width="55px"/>
												</colgroup>
												<tr class="th02">
													<th colspan="2" class="br" style="text-decoration:none;">&nbsp;</th>
													<th colspan="9" class="br"><b>승무패</b></th>
													<th colspan="5"><b>오버/언더</b></th>
												</tr>
												<tr>
													<th>순위</th>
													<th class="left">팀명</th>
													<th>경기</th>
													<th><span>승<span class="down"></span></span></th>
													<th><span>무<span class="down"></span></span></th>
													<th><span>패<span class="down"></span></span></th>
													<th>득</th>
													<th>실</th>
													<th>계차</th>
													<th>승률</th>
													<th>승점</th>
													<th>득/실</th>
													<th><span>O<span class="down"></span></span></th>
													<th><span>U<span class="down"></span></span></th>
													<th><span>O%<span class="down"></span></span></th>
													<th><span>U%<span class="down"></span></span></th>
												</tr>
												<tr>
													<td>1</td>
													<td class="left"><span class="NC_L"></span> <a href="/odds/game/league_soccer/team_info.php">첼시</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>			
												<tr>
													<td>2</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">아스날</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>3</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">리버플</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>4</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">맨체스터 시티</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>5</td>
													<td class="left"><span class="NC_L"></span> <a href="/odds/game/league_soccer/team_info.php">첼시</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>			
												<tr>
													<td>6</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">아스날</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>7</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">리버플</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>8</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">맨체스터 시티</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>9</td>
													<td class="left"><span class="NC_L"></span> <a href="/odds/game/league_soccer/team_info.php">첼시</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>			
												<tr>
													<td>10</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">아스날</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>11</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">리버플</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>12</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">맨체스터 시티</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>13</td>
													<td class="left"><span class="NC_L"></span> <a href="/odds/game/league_soccer/team_info.php">첼시</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>			
												<tr>
													<td>14</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">아스날</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>15</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">리버플</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>16</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">맨체스터 시티</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>17</td>
													<td class="left"><span class="NC_L"></span> <a href="/odds/game/league_soccer/team_info.php">첼시</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>			
												<tr>
													<td>18</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">아스날</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>19</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">리버플</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
												<tr>
													<td>20</td>
													<td class="left"><span class="HT_L"></span> <a href="/odds/game/league_soccer/team_info.php">맨체스터 시티</a></td>
													<td>38</td>
													<td>25</td>
													<td>8</td>
													<td>5</td>
													<td>75</td>
													<td>35</td>
													<td>+35</td>
													<td>0.725</td>
													<td>85</td>
													<td>3.6</td>
													<td>65</td>
													<td>45</td>
													<td>65%</td>
													<td>35%</td>
												</tr>		
											</table>
											<div class="pt50">
												<h3 class="center noBorder">2017/18 프리미어리그 요약</h3>
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
															<td>홈팀 승</td>
															<td>85</td>
															<td>40%</td>
														</tr>
														<tr>
															<td>무승부</td>
															<td>35</td>
															<td>25%</td>
														</tr>
														<tr>
															<td>원정팀 승</td>
															<td>144</td>
															<td>35%</td>
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
															<td>2.8골</td>
														</tr>
														<tr>
															<td>홈팀</td>
															<td>656</td>
															<td>1.5골</td>
														</tr>
														<tr>
															<td>원정팀</td>
															<td>645</td>
															<td>1.3골</td>
														</tr>
													</table>
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th><span>O/U 2.5 <span class="down"></span></span></th>
															<th>경기</th>
															<th>확률</th>
														</tr>
														<tr>
															<td>오버 <span class="underline">2.5</span></td>
															<td>85</td>
															<td>60%</td>
														</tr>
														<tr>
															<td>언더 <span class="underline">2.5</span></td>
															<td>75</td>
															<td>50%</td>
														</tr>
													</table>
													<table class="table_default">
														<caption></caption>
														<colgroup>
															<col width="*"/><col width="22%"/><col width="23%"/>
														</colgroup>
														<tr>
															<th><span>전반O/U 0.5 <span class="down"></span></span></th>
															<th>경기</th>
															<th>확률</th>
														</tr>
														<tr>
															<td>오버 <span class="underline">0.5</span></td>
															<td>85</td>
															<td>60%</td>
														</tr>
														<tr>
															<td>언더 <span class="underline">0.5</span></td>
															<td>75</td>
															<td>50%</td>
														</tr>
													</table>
													<table class="table_default gametable02">
														<caption></caption>
														<colgroup>
															<col width="195px"/><col width="*"/><col width="75px"/>
														</colgroup>
														<tr>
															<th class="left" colspan="2">승무패 최근 6경기</th>
															<th>승점</th>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 본머스</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 첼시</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 토트넘</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 맨시티</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 리버플</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 아스널</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 맨유</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 에버턴</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 사우스햄튼</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 본머스</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> W.브로미치</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 웨드트햄</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 레스터시티</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 스토크시티</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 리버풀</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 아스널</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 맨유</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 에버턴</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 사우스햄튼</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> 스토크시티</td>
															<td>
																<a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_lose.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="../../image/base/btn_win.png" alt="" title="두산 4:1 넥센"></a>
															</td>
															<td><b>18</b></td>
														</tr>
													</table>
													<table class="table_default gametable02">
														<caption></caption>
														<colgroup>
															<col width="195px"/><col width="*"/><col width="75px"/>
														</colgroup>
														<tr>
															<th class="left">O/U 최근 6경기	</th>
															<th>
																<div class="select_w">
																	<div class="select" style="right:50px;">
																		<p class="off"><span class="pp">2.5</span><span class="pa"></span></p>
																		<ul>
																			<li><a href="">1.5</a></li>
																			<li><a href="">2.5</a></li>
																			<li><a href="">3.5</a></li>
																		</ul>
																	</div>
																</div>
															</th>
															<th>O/U</th>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> NC</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="HT_L"></span> KIA</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="SK_L"></span> SK</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="OB_L"></span> 두산</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">7</span>/3</td>
														</tr>
														<tr>
															<td class="left"><span class="LG_L"></span> LG</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">6</span>/4</td>
														</tr>
														<tr>
															<td class="left"><span class="WO_L"></span> 넥센</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="LT_L"></span> 롯데</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="HH_L"></span> 한화</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="SS_L"></span> 삼성</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="KT_L"></span> KT</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="NC_L"></span> NC</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="HT_L"></span> KIA</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="SK_L"></span> SK</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">8</span>/2</td>
														</tr>
														<tr>
															<td class="left"><span class="OB_L"></span> 두산</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">7</span>/3</td>
														</tr>
														<tr>
															<td class="left"><span class="LG_L"></span> LG</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">6</span>/4</td>
														</tr>
														<tr>
															<td class="left"><span class="WO_L"></span> 넥센</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="LT_L"></span> 롯데</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="HH_L"></span> 한화</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="SS_L"></span> 삼성</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
														<tr>
															<td class="left"><span class="KT_L"></span> KT</td>
															<td>
																<span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span><span class="plusL2">plus</span><span class="plusL2">plus</span><span class="minusL2">minus</span>
															</td>
															<td><span class="red">5</span>/5</td>
														</tr>
													</table>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>


									<div class="clear"></div>

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
