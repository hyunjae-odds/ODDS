<link href="/public/lib/css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

		//bxSlider_slider _ 메인
		$(document).ready(function(){		
			//visual
			$('.visual_bxslider .bxslider').bxSlider({
				auto: true,
				//autoControls: true,
				speed:1500
			}); 
			//livescore
		  $('.scoregnb').bxSlider({
			slideWidth: 250,
			minSlides: 2,
			maxSlides: 4,
			slideMargin: 4    
		  });
			//expert 전문가의견
		  $('.expert_bxslider').bxSlider({
				auto: true,
				speed:500
			}); 

			//livescore
		  $('.bestview ul').bxSlider({
			slideWidth: 235,
			minSlides: 4,
			maxSlides: 4,
			slideMargin: 0    
		  });
		});


		
		$(document).ready(function(){ 

			//HOT MATCH
			$(".hotmatch a.all").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(0)").addClass("active"); return false;});
			$(".hotmatch a.soccer").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(1)").addClass("active"); return false;});
			$(".hotmatch a.base").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(2)").addClass("active"); return false;});
			$(".hotmatch a.basket").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(3)").addClass("active"); return false;});
			$(".hotmatch a.volley").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(4)").addClass("active"); return false;});
			$(".hotmatch a.hockey").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(5)").addClass("active"); return false;});
			$(".hotmatch a.e").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(6)").addClass("active"); return false;});
			$(".hotmatch a.live").click(function(){ $(".hot_menu a").removeClass("active");  $(".match_bxslider li").removeClass("active"); $(this).addClass("active"); $(".match_bxslider > li:eq(7)").addClass("active"); return false;});

		});

</script>
 
 <body>
	<div id="wrapper">
		<div class="topmenu_w">
			<div class="topmenu">
				<div class="logo">
					<h1><a href="main.html"><img src="/public/lib/image/base/logo.jpg" alt="DDS CONNECT" /></a></h1>
				</div>
				<div class="gnb_w">
					<div class="gnb">
						<div class="gnbMenu">
							<ul>
								<li><a href="game/main/game_main.php">경기정보</a><span></span></li>
								<li class=""><a href="livescore/livescore_soccer.php">라이브 스코어</a><span></span></li>
								<li><a href="">전문가존</a><span></span></li>
								<li><a href="">배팅경연</a><span></span></li>
								<li><a href="">서바이벌게임</a><span></span></li>
								<li><a href="">커넥트뉴스</a><span></span></li>
								<li><a href="">커뮤니티</a><span></span></li>
							</ul>
						</div>
						<div class="login">
							<a href="">Log in</a><!-- 클릭시 .loginWrap 오픈 -->
							<!-- div class="loginWrap"> <-- 완료된 디자인 미수급
								<div class="loginBox">
									<p class="ddslogo">DDS CONNECT</p>
									<form action="" method="">
										<fieldset>
											<legend>로그인</legend>
											<ul>
												<li><input type="text" id="userID"/></li>
												<li><input type="password" id="userPW"/></li>
											</ul>
											<p><a href=""><img src="image/base/login.jpg" alt="login" /></a></p>
										</fieldset>
									</form>
									<div>
										<p class="Never"><a href="">네이버<br />아이디로 로그인</a></p><p class="Face"><a href="">페이스북<br />아이디로 로그인</a></p><p class="Google"><a href="">구글플러스<br />아이디로 로그인</a></p>
									</div>
									<div>
										<span><a href="">아이디 찾기</a></span><span><a href="">비밀번호 찾기</a></span><span class="memberGO"><a href="">회원가입</a></span>
									</div>
									<div class="logFoot">
										<ul>
											<li><a href="">이용약관</a></li>
											<li><a href=""><b>개인정보취급방침</b></a></li>
											<li><a href="">책임의 한계와 법적고지</a></li>
											<li><a href="">고객센터</a></li>
										</ul>
										<p><img src="" alt="DDS CONNECT" /> Copyright &copy; ODDSCONNECT Corp. All Rights Reserved.</p>
									</div>
								</div>
							</div -->
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- 메인 비주얼 슬라이드 -->
		<div class="visual_bxslider_w">
			<div class="visual_bxslider">
				<ul class="bxslider">
					<li>
						<img src="/public/lib/image/main/visual01.jpg" alt="" />
						<div class="bbox_w">
							<div class="bbox">
								<p class="b01">UEFA CHAMPIONS LEAGUE</p>
								<h3>Realmadrid<br /><span>VS</span>FC Barcelona</h3>
								<p class="b02">2016.07.22&nbsp;&nbsp;&nbsp;18:35</p>
								<p class="b03">Santiago Bernabéu Stadium</p>
								<div class="bg_graph">		
									<span class="graph_g">
										<span class="bar_g" style="width:35.0%;"><span class="percent">35%</span>
										</span>    
										<span class="percent">65%</span>
									</span>
								</div>
								<a href="game/league_soccer/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="/public/lib/image/main/visual02.jpg" alt="" />
						<div class="bbox_w">
							<div class="bbox">
								<p class="b01">2017 KBO LEAGUE</p>
								<h3>LG Twins<br /><span>VS</span>NC Dinos</h3>
								<p class="b02">2016.07.22&nbsp;&nbsp;&nbsp;18:35</p>
								<p class="b03">Santiago Bernabéu Stadium</p>
								<div class="bg_graph">		
									<span class="graph_g">
										<span class="bar_g" style="width:35.0%;"><span class="percent">35%</span>
										</span>    
										<span class="percent">65%</span>
									</span>
								</div>
								<a href="game/league_base/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="/public/lib/image/main/visual01.jpg" alt="" />
						<div class="bbox_w">
							<div class="bbox">
								<p class="b01">UEFA CHAMPIONS LEAGUE</p>
								<h3>Realmadrid<br /><span>VS</span>FC Barcelona</h3>
								<p class="b02">2016.07.22&nbsp;&nbsp;&nbsp;18:35</p>
								<p class="b03">Santiago Bernabéu Stadium</p>
								<div class="bg_graph">		
									<span class="graph_g">
										<span class="bar_g" style="width:35.0%;"><span class="percent">35%</span>
										</span>    
										<span class="percent">65%</span>
									</span>
								</div>
								<a href="game/league_soccer/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="/public/lib/image/main/visual02.jpg" alt="" />
						<div class="bbox_w">
							<div class="bbox">
								<p class="b01">2017 KBO LEAGUE</p>
								<h3>LG Twins<br /><span>VS</span>NC Dinos</h3>
								<p class="b02">2016.07.22&nbsp;&nbsp;&nbsp;18:35</p>
								<p class="b03">Santiago Bernabéu Stadium</p>
								<div class="bg_graph">		
									<span class="graph_g">
										<span class="bar_g" style="width:35.0%;"><span class="percent">35%</span>
										</span>    
										<span class="percent">65%</span>
									</span>
								</div>
								<a href="game/league_base/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="/public/lib/image/main/visual01.jpg" alt="" />
						<div class="bbox_w">
							<div class="bbox">
								<p class="b01">UEFA CHAMPIONS LEAGUE</p>
								<h3>Realmadrid<br /><span>VS</span>FC Barcelona</h3>
								<p class="b02">2016.07.22&nbsp;&nbsp;&nbsp;18:35</p>
								<p class="b03">Santiago Bernabéu Stadium</p>
								<div class="bg_graph">		
									<span class="graph_g">
										<span class="bar_g" style="width:35.0%;"><span class="percent">35%</span>
										</span>    
										<span class="percent">65%</span>
									</span>
								</div>
								<a href="game/league_soccer/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>



		<div class="container_w">
			<div id="leftMenu">
				<div class="LNB">
					<div class="search">
						<input id="search" onfocus="this.value=''; return true" value="리그나 팀명을 검색해 주세요." type="text">
						<input value="전송" type="submit">
					</div>
					<ul>
						<li class="best tb"><a href="">즐겨찾는 리그</a>
							<ul class="bestleague" style="display:none;">
								<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙</a></li>
								<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가</a></li>
								<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그</a></li>
								<li><a href="game/league_soccer/league.php"><span class="majorL"></span>메이져리그</a></li>
							</ul>
						</li>
					</ul>
					<p>SPORTS</p>
					<ul>
						<li class="best soccer"><a href="" class="bold">축구</a>
							<ul class="bestleague" style="">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">7</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">2</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">5</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">5</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AfricaL"></span>아프리카</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="NorthAmericaL"></span>북중미</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="SouthAmericaL"></span>남미</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best baseball"><a href="" >야구</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/baseball/league_info/"><span class="KBO_L"></span>KBO 리그</a></li>
										<li><a href="game/league_base/league.php"><span class="majorL"></span>메이져리그</a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/baseball/league_info/"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/baseball/league_info/"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/baseball/league_info/"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best basket"><a href="" >농구</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">3</span></a></li>
										<li><a href="game/league_base/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">2</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best volley"><a href="" >배구</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그</a></li>
										<li><a href="game/league_base/league.php"><span class="majorL"></span>메이져리그</a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best e_sport"><a href="" >e-스포츠</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그</a></li>
										<li><a href="game/league_base/league.php"><span class="majorL"></span>메이져리그</a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					
				</div>	

				<div class="banner"><a href=""><img src="/public/lib/image/main/banner02.jpg" alt="" /></a></div>
			</div><!-- leftMenu -->

			<div id="container">

				<div class="content_w">