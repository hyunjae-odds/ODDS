<link href="css/main.css" rel="stylesheet" type="text/css" />
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
					<h1><a href="main.php"><img src="image/base/logo.jpg" alt="DDS CONNECT" /></a></h1>
				</div>
				<div class="gnb_w">
					<div class="gnb">
						<div class="gnbMenu">
							<ul>
								<li><a href="/odds/game/main/game_main.php">ODDS</a><span></span></li>
								<li class=""><a href="/odds/livescore/livescore_soccer.php">라이브 스코어</a><span></span></li>
								<li><a href="/odds/expert/expert.php">재야의분석</a><span></span></li>
								<li><a href="/odds/batting/main.php">배팅경연</a><span></span></li>
								<li><a href="">서바이벌게임</a><span></span></li>
								<li><a href="/odds/connect/connect.php">커넥트뉴스</a><span></span></li>
								<li><a href="/odds/community/community.php">커뮤니티</a><span></span></li>
							</ul>
						</div>
						<div class="login">
							<a href="">Log in</a><!-- 클릭시 .loginWrap 오픈 -->
							<div class="logon">
								<p class="id">ODDSNAVI0419<a href="" class="setting"></a></p>
								<p class="point">P : 21502&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;P : 21502</p>
								<span>최근 10경기 : 8W  2L</span>
							</div>
							<div class="loginWrap"> 
								<div class="bg_b"></div>
								<div class="loginBox">
									<div class="logbox01" style="display:block;"><!-- 기본 로그인 -->
										<h4>회원 로그인</h4>
										<div class="log_b">
											<p class="pb30">사이트를 원활히 이용하기 위해서는 로그인이 필요합니다. 아이디가 없으실 경우 회원가입 후 이용해 주시기바랍니다.</p>
											<ul class="input_textbox">
												<li><input class="idid"  type="text" /></li>
												<li><input class="pwpw" type="text"  /><span class="pw2"></span></li><!-- 확인되면? pw2 -> pw2r -->
											</ul>
											<p class="pb30 pt5"><span><input type="checkbox" id="log_01" /><label for="log_01">자동 로그인</label></span><span><input type="checkbox" id="log_02" /><label for="log_02">보안 로그인</label></span></p>
											<a href="" class="red_btn">로그인</a>
											<div class="log_no">
												<p><b>아이디</b> 혹은 <b>비밀번호</b>가 맞지 않습니다. <br />확인 후에 다시 시도해 주세요.</p>
												<a href="" class="btn">재 시도 하기</a>
												<p class="border_top">
													<a href="" class="btn id_s logbox02_btn">아이디 찾기</a>
													<a href="" class="btn pw_s logbox02_btn">비밀번호 찾기</a>
												</p>
												<p class="gray">10회 이상 로그인 실패시 해당계정은 <b>보호조치</b> 됩니다.</p>
											</div>
											<ul class="log_c_box">
												<li class="log_c1"><a href="">네이버 아이디로 로그인</a></li>
												<li class="log_c2"><a href="">다음 아이디로 로그인</a></li>
												<li class="log_c3"><a href="">Log in with Facebook</a></li>
											</ul>
											<p class="center"><a href="" class="id_s logbox02_btn">아이디 찾기</a><a href="" class="pw_s logbox02_btn">비밀번호 찾기</a><a href="" class="mem_s logbox03_btn">회원가입</a></p>
										</div>
										<a href="" class="close_btn"></a>
									</div>
									<div class="logbox02"><!-- 아이디/비번찾기 -->
										<h4>아이디/비밀번호 찾기</h4>
										<div class="log_b">
											<div class="relative">
												<div class="tab01_w">
													<ul class="tab01">
														<li class="log01"><a href="">아이디 찾기</a></li>
														<li class="log02"><a href="">비밀번호 찾기</a></li>
													</ul>
												</div>
											</div>
											<ul class="logbox02_v">
												<li class="logbox02_v_01"><!-- 아이디 찾기 선택시 -->
													<p class="logbox02_v_p">가입하신 방법에 따라 아이디 찾기가 가능합니다.</p>
													<p class="cho_p2">
														<span>가입방법 선택</span>
														<input type="radio" name="cho" id="c1" checked />
														<label for="c1">이메일</label>
														<input type="radio" name="cho" id="c2"/>
														<label for="c2">휴대폰</label>										
													</p>
													<ul class="cho_p2_v">
														<li><!-- 이메일 선택시 -->
															<ul class="input_textbox">
																<li><input class="name" type="text" /></li>
																<li><input class="email2" type="text" /><span class="pw2"></span></li>
															</ul>
														</li>
														<li style="display:none;"><!-- 휴대폰 선택시 -->
															<ul class="input_textbox">
																<li><input class="name" value="이름" type="text" /></li>
																<li><input class="phone2" type="text" /><span class="pw2"></span></li>
															</ul>
														</li>
													</ul>
													<a href="" class="red_btn mt20" >확인</a>
												</li>
												<li class="logbox02_v_02"><!-- 비밀번호 찾기 선택시 -->
													<p class="logbox02_v_p">가입하신 방법에 따라 비밀번호 찾기가 가능합니다.</p>
													<p class="cho_p2">
														<span>가입방법 선택</span>
														<input type="radio" name="cho2" id="c3" checked />
														<label for="c3">이메일</label>
														<input type="radio" name="cho2" id="c4"/>
														<label for="c4">휴대폰</label>										
													</p>
													<ul class="cho_p2_v">
														<li><!-- 이메일 선택시 -->
															<ul class="input_textbox">
																<li><input class="idid" type="text" /></li>
																<li><input class="name" type="text" /></li>
																<li><input class="email2" type="text" /><span class="pw2"></span></li>
															</ul>
														</li>
														<li style="display:none;"><!-- 휴대폰 선택시 -->
															<ul class="input_textbox">
																<li><input class="" type="text" /></li>
																<li><input class="" type="text" /></li>
																<li><input class="phone2" type="text" /><span class="pw2"></span></li>
															</ul>
														</li>
													</ul>
													<a href="" class="red_btn mt20" >확인</a>
												</li>
											</ul>
										</div>
										<a href="" class="close_btn"></a>
									</div>
									<div class="logbox03"><!-- 회원가입 -->
										<h4>회원가입</h4>
										<div class="log_b">
											<div class="border_bottom">
												<span class="check all"></span>
												<p class="cho_p all">이용약관, 개인정보 수집 및 이용, 위치정보 이용약관(선택), 프로모션 안내 메일 수신(선택)에 <span class="red">모두 동의</span>합니다.</p>
												<div class="clear"></div>
											</div>
											<div>
												<span class="check cp"></span>
												<p class="cho_p cp">이용약관 동의<span class="red small">(필수)</span></p>
												<div class="clear"></div>
												<div class="infobox">
													<br />
													<b>제 1 조 (목적)</b><br />
													이 약관은 오즈커넥트 ("회사" 또는 "오즈커넥트")가 제공하는 오즈커넥트 및 오즈커넥트 관련 제반 서비스의 이용과 관련하여 회사와 <br />
													회원과의 권리, 의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.<br /><br />

													<b>제 2 조 (정의)</b><br />
													이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br />
													①"서비스"라 함은 구현되는 단말기(PC, TV, 휴대형단말기 등의 각종 유무선 장치를 포함)와 상관없이 "회원"이 이용할 수 있는 오즈커넥트
												</div>
											</div>
											<div>
												<span class="check cp"></span>
												<p class="cho_p cp">개인정보 수집 및 이용에 대한 안내<span class="red small">(필수)</span></p>
												<div class="clear"></div>
												<div class="infobox">
													<br />
													<b>제 1 조 (목적)</b><br />
													이 약관은 오즈커넥트 ("회사" 또는 "오즈커넥트")가 제공하는 오즈커넥트 및 오즈커넥트 관련 제반 서비스의 이용과 관련하여 회사와 <br />
													회원과의 권리, 의무 및 책임사항, 기타 필요한 사항을 규정함을 목적으로 합니다.<br /><br />

													<b>제 2 조 (정의)</b><br />
													이 약관에서 사용하는 용어의 정의는 다음과 같습니다.<br />
													①"서비스"라 함은 구현되는 단말기(PC, TV, 휴대형단말기 등의 각종 유무선 장치를 포함)와 상관없이 "회원"이 이용할 수 있는 오즈커넥트
												</div>
											</div>
											<div class="border_bottom">
												<span class="check cp"></span>
												<p class="cho_p cp">이벤트 등 프로모션 알림 메일 수신<span class="red small">(선택)</span></p>
												<div class="clear"></div>
											</div>
											<div>
												<div class="bg_gray" style="padding-bottom:0;">
													<ul class="input_textbox">
														<li><input class="idid" type="text" /><a href="" class="btn">중복 확인</a></li>
														<li><input class="pwpw" type="password" style="width:338px;"/><span class="pw1"></span></li>
														<li><input class="pwpw2" type="password"  style="width:338px;margin-left:-1px;"/><span class="pw2"></span></li>
													</ul>
													<div class="clear"></div>
												</div>
												<div class="bg_gray">
													<ul class="input_textbox input_textbox2">
														<li><input class="name" type="text" style="width:367px;"/>
															<p><span class="on">남자</span><span>여자</span></p>
														</li>
														<li><label for="birth">생일</label><input class="border_right center birth_y" type="text" id="birth" style="width:105px;line-height:25px;" />
															<div class="relative border_right">
																<div class="select select02 birth_m_slt">
																	<p class="off"><span class="pp">월</span><span class="pa"></span></p>
																	<ul>
																		<li><a href="">1월</a></li>
																		<li><a href="">2월</a></li>
																		<li><a href="">3월</a></li>
																		<li><a href="">4월</a></li>
																		<li><a href="">5월</a></li>
																		<li><a href="">6월</a></li>
																		<li><a href="">7월</a></li>
																		<li><a href="">8월</a></li>
																		<li><a href="">9월</a></li>
																		<li><a href="">10월</a></li>
																		<li><a href="">11월</a></li>
																		<li><a href="">12월</a></li>
																	</ul>
																</div>
															</div>
															<input class="center birth_d" type="text"  style="width:85px;" /><input class="email" type="text"  style="width:175px;" /><span>@</span><input class="" type="text"  style="width:100px;" />
														</li>
														<li>
															<div class="relative border_right">
																<div class="select select02">
																	<p class="off"><span class="pp">+82</span><span class="pa"></span></p>
																	<ul>
																		<li><a href="">+82</a></li>
																		<li><a href="">-</a></li>
																	</ul>
																</div>
															</div>
															<input class="infor phone" type="text" style="width:155px;"/><a href="" class="btn" style="float:left;margin-top:10px;">인증번호 받기</a><input class="certify infor"  type="text"  style="width:303px;"/><a href="" class="btn" style="float:left;margin-top:10px;">확인</a>
														</li>
													</ul>
													<div class="clear"></div>
												</div>
											</div>
											<a href="" class="red_btn mt20 mb20 ml10" style="width:820px;">가입하기</a>
										</div>
										<a href="" class="close_btn"></a>
									</div>
								</div>
							</div>
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
						<img src="image/main/visual01.jpg" alt="" />
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
								<a href="/odds/game/league_soccer/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="image/main/visual02.jpg" alt="" />
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
								<a href="/odds/game/league_base/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="image/main/visual01.jpg" alt="" />
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
								<a href="/odds/game/league_soccer/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="image/main/visual02.jpg" alt="" />
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
								<a href="/odds/game/league_base/match.php" class="">매치정보보기</a>
							</div>
						</div>
					</li>
					<li>
						<img src="image/main/visual01.jpg" alt="" />
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
								<a href="/odds/game/league_soccer/match.php" class="">매치정보보기</a>
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
						<input id="search" value="리그나 팀명을 검색해 주세요." type="text">
						<input value="전송" type="submit">
					</div>
					<ul>
						<li class="best tb"><a href="">즐겨찾는 리그</a>
							<ul class="bestleague" style="display:none;">
								<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙</a></li>
								<li><a href="/odds/game/league_base/league_MLB.php"><span class="majorL"></span>MLB</a></li>
								<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그</a></li>
								<li><a href="/odds/game/league_soccer/league.php"><span class="majorL"></span>메이져리그</a></li>
							</ul>
						</li>
					</ul>
					<p>SPORTS</p>
					<ul>
						<li class="best soccer"><a href="" class="bold">축구</a>
							<ul class="bestleague" style="">
								<li class=""><a href="/odds/game/main/TodayMatches.php" style="background:none;"><span class="scheduleL"></span>Today’s Matches</a>
									<!--ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">7</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">2</span></a></li>
									</ul-->
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">5</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">5</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AfricaL"></span>아프리카</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="NorthAmericaL"></span>북중미</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="SouthAmericaL"></span>남미</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="leagueangL"></span>리그앙<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best baseball"><a href="" >야구</a>
							<ul class="bestleague" style="display:none;">
								<li class=""><a href="/odds/game/main/TodayMatches.php" style="background:none;"><span class="scheduleL"></span>Today’s Matches</a>
									<!--ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_soccer/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">7</span></a></li>
										<li><a href="/odds/game/league_soccer/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">2</span></a></li>
									</ul-->
								</li>
								<li class=""><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO</a></li>
								<li class=""><a href="/odds/game/league_base/league_MLB.php"><span class="majorL"></span>MLB</a></li>
								<li class=""><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>NPB</a></li>
							</ul>
						</li>
						<li class="best basket"><a href="" >농구</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">3</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="majorL"></span>메이져리그<span class="grayNm">2</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best volley"><a href="" >배구</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그</a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="majorL"></span>메이져리그</a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="best e_sport"><a href="" >e-스포츠</a>
							<ul class="bestleague" style="display:none;">
								<li class="best2"><a href=""><span class="scheduleL"></span>Today’s Matches</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그</a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="majorL"></span>메이져리그</a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="popularityL"></span>인기 리그</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="AsiaL"></span>아시아</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
								<li class="best2"><a href=""><span class="EuropeL"></span>유럽</a>
									<ul class="bestleague2 " style="display:none;">
										<li><a href="/odds/game/league_base/league.php"><span class="KBO_L"></span>KBO 리그<span class="grayNm">6</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="bundesligaL"></span>분데스리가<span class="grayNm">2</span></a></li>
										<li><a href="/odds/game/league_base/league.php"><span class="serieL"></span>세리에 리그<span class="grayNm">4</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					
				</div>	

				<div class="banner"><a href=""><img src="image/main/banner02.jpg" alt="" /></a></div>
			</div><!-- leftMenu -->

			<div id="container">

				<div class="content_w">