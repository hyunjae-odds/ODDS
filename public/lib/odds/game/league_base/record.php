<?php 
include("../head_up.php");
include("../head.php");
?>

<script type="text/javascript">


	$(document).ready(function(){ 	


		// -----  리그통계 내 Tab 시작

		//2뎁스 승무패/핸디캡/O/U
		for(var i=1;i<4;i++){		
			(function (k){
				$(".TLS > li.ls0" + k ).click(function(){ 
					$(".TLS li").removeClass("on");
					$(this).addClass("on");
					$(".LS_view_w > li").removeClass("active");
					$(".LS_view_w > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		//3뎁스 전체/홈원정
		$(".LS_tab > li.ls_all").click(function(){ 
			$(this).siblings().removeClass("on");$(this).addClass("on");$(this).parent().parent().parent().find(".LS_view>li").removeClass("active");$(this).parent().parent().parent().find(".ls_all").addClass("active");
			return false; 
		});
		$(".LS_tab > li.ls_team").click(function(){ $(this).siblings().removeClass("on");$(this).addClass("on");$(this).parent().parent().parent().find(".LS_view>li").removeClass("active");$(this).parent().parent().parent().find(".ls_team").addClass("active");return false; });

		//4뎁스 게임탭
		for(var i=1;i<5;i++){		
			(function (k){
				$(".r_tit > li.ls01_tab_" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().removeClass("active");
					$(this).parent().siblings("div.ls01_"+k).addClass("active");
					return false;
				});
			}(i));
		};

		// -----  리그통계 내 Tab 끝
		
		//ranking
		for(var i=1;i<8;i++){		
			(function (k){
				$("th>span.n" + k ).click(function(){ 
					$(this).parents(".ranking").find(".Ltable").css("display","none"); 
					$(this).parents(".ranking").find(".Ltable"+k).css("display","block"); 
					return false;
				});
			}(i));
		};

		//선수기록
		for(var i=1;i<15;i++){		
			(function (k){
				$(".table_w table th span.pr_" + k ).click(function(){ 
					$(this).parents(".table_default").siblings("div").removeClass();
					$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k); 
					$(this).parents(".table_default").find("td").css("font-weight","normal");
					$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().next().css("font-weight","bold");
					return false;
				});
			}(i));
		};

		//선수기록 확장테이블
		$(".nextTable a").click(function(){ 
			$(this).parent().siblings(".next_table").slideToggle(); 
			return false;
		});

		//league
		$(".btn_arrow01").click(function(){ 
			$(this).parents().find(".leaguebox").slideToggle(); 
			return false;
		});


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


	});


 </script>


				<link href="/odds/css/baseball.css" rel="stylesheet" type="text/css"/>


				<div class="livescore game">
					<div class="topTitle">
						<p>
							<span>리그정보 - 야구 - 대한민국</span>
							<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
						</p>
						<h2 class="tit02">2017 KBO</h2>
					</div>
					<div class="game_w">
						<ul class="tab01 gameMain">
							<li class=" "><a href="league.php">리그정보</a></li>
							<li class=""><a href="result.php">경기 결과</a></li>
							<!--li class=""><a href="stats.php">리그 통계</a></li>
							<li class=""><a href="team_record.php">팀 기록</a></li-->
							<li class="on"><a href="record.php">선수 기록</a></li>
							<li class=""><a href="score.php">상대 전적</a></li>
						</ul>
						<ul class="tab_view01 gameMain_view">
							<li class="s5 active">
								<div class="date">
									<a href="" class="btn_prev" title="이전시즌">이전시즌</a>
									<a href="" class="date_yr date_num">2016<span class="date_t">시즌</span></a>
									<ul class="date_yr_select date_ul" style="display:none;width:103px;">
										<li><a href="">2013</a></li>
										<li><a href="">2014</a></li>
										<li><a href="">2015</a></li>
										<li><a href="">2016</a></li>
									</ul>
									<input value="이동" type="submit" class="btn_nv_mn">	
									<a href="" class="btn_next" title="다음시즌">다음시즌</a>
								</div>
								<div class="relative">
									<ul class="blackTab r_tit" style="top:-33px;">
										<li class="ls01_tab_1"><a href="">투수</a></li>
										<li class="on ls01_tab_2"><a href="">타자</a></li>
									</ul>
									<div class="PL_REC ls01_1">
										<ul class="player_rec">
											<li>
												<h3>평균자책점</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>승 리</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>세이브</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>승 률</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>홀 드</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>탈삼진</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
										</ul>
										<div class="gray_warp_w">
											<div class="gray_warp">
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">2016</span><span class="pa"></span></p>
													<ul>
														<li><a href="">2015</a></li>
														<li><a href="">2016</a></li>
														<li><a href="">2017</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">KBO 정규시즌</span><span class="pa"></span></p>
													<ul>
														<li><a href="">KBO 정규시즌</a></li>
														<li><a href="">KBO 시범시즌</a></li>
													</ul>
												</div>
												<div class="select">
													<p class="off"><span class="pp" style="padding:0 10px">팀 선택</span><span class="pa"></span></p>
													<ul>
														<li><a href="">두산 베어스</a></li>
														<li><a href="">NC 다이노스</a></li>
														<li><a href="">넥센 히어로즈</a></li>
														<li><a href="">LG 트윈스</a></li>
														<li><a href="">KIA 타이거즈</a></li>
														<li><a href="">SK 와이번스</a></li>
														<li><a href="">한화 이글스</a></li>
														<li><a href="">롯데 자이언트</a></li>
														<li><a href="">삼성 라이온즈</a></li>
														<li><a href="">KT 위즈</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">포지션</span><span class="pa"></span></p>
													<ul>
														<li><a href="">1루수</a></li>
														<li><a href="">2루수</a></li>
														<li><a href="">3루수</a></li>
														<li><a href="">유격수</a></li>
														<li><a href="">포수</a></li>
														<li><a href="">좌익수</a></li>
														<li><a href="">우익수</a></li>
														<li><a href="">중견수</a></li>
														<li><a href="">투수</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp">경기상황별1</span><span class="pa"></span></p>
													<ul>
														<li><a href="">월별</a></li>
														<li><a href="">요일별</a></li>
														<li><a href="">구장별</a></li>
														<li><a href="">홈/방문별</a></li>
														<li><a href="">상대팀별</a></li>
														<li><a href="">주야간별</a></li>
														<li><a href="">전/후반별</a></li>
														<li><a href="">투수유형별</a></li>
														<li><a href="">주자상황별</a></li>
														<li><a href="">볼카운트별</a></li>
														<li><a href="">아웃카운트별</a></li>
														<li><a href="">이닝별</a></li>
														<li><a href="">타순별</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp">경기상황별2</span><span class="pa"></span></p>
													<ul>
														<li><a href="">3~4월</a></li>
														<li><a href="">5월</a></li>
														<li><a href="">6월</a></li>
														<li><a href="">7월</a></li>
														<li><a href="">8월</a></li>
														<li><a href="">9월이후</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">기본기록</span><span class="pa"></span></p>
													<ul>
														<li><a href=""></a></li>
														<li><a href=""></a></li>
														<li><a href=""></a></li>
													</ul>
												</div>
												<a class="btn s6_btn" href="">결과보기<span></span></a>
											</div>	
										</div>
										<div class="table_w pitcher">
											<div>
												<table class="table_default">
													<caption></caption>
													<colgroup>
														<col width="40px"/>
														<col width="55px"/>
														<col width="119px"/>
														<col width="64px"/>
														<col width="51px"/>
														<col width="64px"/>
														<col width="59px"/>
														<col width="58px"/>
														<col width="57px"/>
														<col width="43px"/>
														<col width="61px"/>
														<col width="59px"/>
														<col width="59px"/>
														<col width="53px"/>
														<col width="51px"/>
														<col width="44px"/>
														<col width="65px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>이름</th>
														<th>팀</th>
														<th><span class="pr_1">평균자책</span></th>
														<th><span class="pr_2">경기</span></th>
														<th><span class="pr_3">이닝</span></th>
														<th><span class="pr_4">승</span></th>
														<th><span class="pr_5">패</span></th>
														<th><span class="pr_6">세이브</span></th>
														<th><span class="pr_7">홀드</span></th>
														<th><span class="pr_8">탈삼진</span></th>
														<th><span class="pr_9">피안타</span></th>
														<th><span class="pr_10">피홈런</span></th>
														<th><span class="pr_11">실점</span></th>
														<th><span class="pr_12">볼넷</span></th>
														<th><span class="pr_13">사구</span></th>
														<th><span class="pr_14">승률</span></th>
													</tr>
													<tr>
														<td>1</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>2</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>3</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>4</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>5</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>6</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>7</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>8</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>9</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>10</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>11</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>12</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>13</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>14</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>15</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>16</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>17</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>18</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>19</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
													<tr>
														<td>20</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>28</td>
														<td>167 2/3</td>
														<td>22</td>
														<td>3</td>
														<td>0</td>
														<td>0</td>
														<td>142</td>
														<td>151</td>
														<td>15</td>
														<td>61</td>
														<td>57</td>
														<td>9</td>
														<td>0.880</td>
													</tr>
												</table>
												<div class="redline  pr_1">
													<span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
												</div>
											</div>
											<div class="next_table" style="display:none;">
												<table class="table_default">
													<caption></caption>
													<colgroup>
														<col width="40px"/>
														<col width="55px"/>
														<col width="119px"/>			
														<col width="114px"/>	
														<col width="96px"/>	
														<col width="91px"/>	
														<col width="93px"/>	
														<col width="86px"/>	
														<col width="85px"/>	
														<col width="92px"/>	
														<col width="130px"/>	
													</colgroup>
													<tr>
														<th>순위</th>
														<th>이름</th>
														<th>팀</th>
														<th><span class="pr_1">WHIP</span></th>
														<th><span class="pr_2">K/9</span></th>
														<th><span class="pr_3">BB/9</span></th>
														<th><span class="pr_4">K/BB</span></th>
														<th><span class="pr_5">K%</span></th>
														<th><span class="pr_6">BB%</span></th>
														<th><span class="pr_7">WPA</span></th>
														<th><span class="pr_8">WAR</span></th>
													</tr>
													<tr>
														<td>1</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>2</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>3</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>4</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>5</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>6</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>7</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>8</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>9</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>10</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>11</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>12</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>13</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>14</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>15</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>16</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>17</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>18</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>19</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
													<tr>
														<td>20</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.18</td>
														<td>8.00</td>
														<td>2.70</td>
														<td>2.96</td>
														<td>21.6</td>
														<td>7.3</td>
														<td>1.61</td>
														<td>4.66</td>
													</tr>
												</table>
												<div class="redline  pr_1">
													<span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
												</div>
											</div>
											<p class="nextTable"><a href=""></a></p>
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
									</div>
									<div class="PL_REC ls01_2 active">
										<ul class="player_rec">
											<li>
												<h3>타 율</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>홈 런</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>타 점</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>안 타</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>도 루</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
											<li>
												<h3>OPS</h3>
												<div class="pic"><img src="../../image/game/pic04.jpg" alt="" /></div>
												<ul>
													<li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
													<li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
													<li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
													<li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
													<li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
												</ul>
											</li>
										</ul>
										<div class="gray_warp_w">
											<div class="gray_warp">
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">2016</span><span class="pa"></span></p>
													<ul>
														<li><a href="">2015</a></li>
														<li><a href="">2016</a></li>
														<li><a href="">2017</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">KBO 정규시즌</span><span class="pa"></span></p>
													<ul>
														<li><a href="">KBO 정규시즌</a></li>
														<li><a href="">KBO 시범시즌</a></li>
													</ul>
												</div>
												<div class="select">
													<p class="off"><span class="pp" style="padding:0 10px">팀 선택</span><span class="pa"></span></p>
													<ul>
														<li><a href="">두산 베어스</a></li>
														<li><a href="">NC 다이노스</a></li>
														<li><a href="">넥센 히어로즈</a></li>
														<li><a href="">LG 트윈스</a></li>
														<li><a href="">KIA 타이거즈</a></li>
														<li><a href="">SK 와이번스</a></li>
														<li><a href="">한화 이글스</a></li>
														<li><a href="">롯데 자이언트</a></li>
														<li><a href="">삼성 라이온즈</a></li>
														<li><a href="">KT 위즈</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">포지션</span><span class="pa"></span></p>
													<ul>
														<li><a href="">1루수</a></li>
														<li><a href="">2루수</a></li>
														<li><a href="">3루수</a></li>
														<li><a href="">유격수</a></li>
														<li><a href="">포수</a></li>
														<li><a href="">좌익수</a></li>
														<li><a href="">우익수</a></li>
														<li><a href="">중견수</a></li>
														<li><a href="">투수</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp">경기상황별1</span><span class="pa"></span></p>
													<ul>
														<li><a href="">월별</a></li>
														<li><a href="">요일별</a></li>
														<li><a href="">구장별</a></li>
														<li><a href="">홈/방문별</a></li>
														<li><a href="">상대팀별</a></li>
														<li><a href="">주야간별</a></li>
														<li><a href="">전/후반별</a></li>
														<li><a href="">투수유형별</a></li>
														<li><a href="">주자상황별</a></li>
														<li><a href="">볼카운트별</a></li>
														<li><a href="">아웃카운트별</a></li>
														<li><a href="">이닝별</a></li>
														<li><a href="">타순별</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp">경기상황별2</span><span class="pa"></span></p>
													<ul>
														<li><a href="">3~4월</a></li>
														<li><a href="">5월</a></li>
														<li><a href="">6월</a></li>
														<li><a href="">7월</a></li>
														<li><a href="">8월</a></li>
														<li><a href="">9월이후</a></li>
													</ul>
												</div>
												<div class="select ">
													<p class="off"><span class="pp" style="padding:0 10px">기본기록</span><span class="pa"></span></p>
													<ul>
														<li><a href=""></a></li>
														<li><a href=""></a></li>
														<li><a href=""></a></li>
													</ul>
												</div>
												<a class="btn s6_btn" href="">결과보기<span></span></a>
											</div>	
										</div>
										<div class="table_w hitter">
											<div class="relative">
												<table class="table_default">
													<caption></caption>
													<colgroup>
														<col width="48px"/>
														<col width="72px"/>
														<col width="*"/>
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
														<col width="70px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>이름</th>
														<th>팀</th>
														<th><span class="pr_1">타율</span></th>
														<th><span class="pr_2">경기</span></th>
														<th><span class="pr_3">타석</span></th>
														<th><span class="pr_4">타수</span></th>
														<th><span class="pr_5">안타</span></th>
														<th><span class="pr_6">2루타</span></th>
														<th><span class="pr_7">3루타</span></th>
														<th><span class="pr_8">홈런</span></th>
														<th><span class="pr_9">타점</span></th>
														<th><span class="pr_10">득점</span></th>
														<th><span class="pr_11">도루</span></th>
														<th><span class="pr_12">사사구</span></th>
														<th><span class="pr_13">삼진</span></th>
													</tr>
													<tr>
														<td>1</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>2</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>3</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>4</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>5</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>6</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>7</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>8</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>9</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>10</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>11</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>12</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>13</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>14</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>15</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>16</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>17</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>18</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>19</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
													<tr>
														<td>20</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>3.49</td>
														<td>144</td>
														<td>519</td>
														<td>498</td>
														<td>195</td>
														<td>48</td>
														<td>3</td>
														<td>31</td>
														<td>144</td>
														<td>114</td>
														<td>2</td>
														<td>83</td>
														<td>83</td>
													</tr>
												</table>
												<div class="redline pr_1">
													<span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
												</div>
											</div>
											<div class="next_table" style="display:none;">
												<table class="table_default">
													<caption></caption>
													<colgroup>
														<col width="48px"/>
														<col width="72px"/>
														<col width="170px"/>
														<col width="93px"/>
														<col width="93px"/>
														<col width="93px"/>
														<col width="93px"/>
														<col width="94px"/>
														<col width="94px"/>
														<col width="110px"/>
													</colgroup>
													<tr>
														<th>순위</th>
														<th>이름</th>
														<th>팀</th>
														<th><span class="pr_1">OPS</span></th>
														<th><span class="pr_2">lsoP</span></th>
														<th><span class="pr_3">BABIP</span></th>
														<th><span class="pr_4">wOBA</span></th>
														<th><span class="pr_5">wRC+</span></th>
														<th><span class="pr_6">WPA</span></th>
														<th><span class="pr_7">WAR</span></th>
													</tr>
													<tr>
														<td>1</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>2</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>3</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>4</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>5</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>6</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>7</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>8</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>9</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>10</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>11</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>12</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>13</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>14</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>15</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>16</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>17</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>18</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>19</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
													<tr>
														<td>20</td>
														<td>최형우</td>
														<td>KIA 타이거즈</td>
														<td>1.115</td>
														<td>0.275</td>
														<td>0.389</td>
														<td>0.471</td>
														<td>163.0</td>
														<td>5.07</td>
														<td>7.55</td>
													</tr>
												</table>
												<div class="redline pr_1">
													<span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
												</div>
											</div>
											<p class="nextTable"><a href=""></a></p>
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