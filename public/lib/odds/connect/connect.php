<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">
		$(document).ready(function(){

		// 뉴스홈 야구 해외야구 ...  탭메뉴
			for(var i=1;i<9;i++){		
			(function (k){
				$(".connect_menu > li.ls0" + k ).click(function(){ 
					$(".connect_menu li").removeClass("on");
					$(this).addClass("on");
					$(".connect_menu_view > li").removeClass("active");
					$(".connect_menu_view > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		// 뉴스홈 news_view 
			for(var i=1;i<6;i++){		
			(function (k){
				$(".news_n > li.n0" + k ).click(function(){ 
					$(this).parent(".news_n").find("li").removeClass("on");
					$(this).addClass("on");
					$(this).parent().parent(".news_view_w").find(".news_v li").hide();
					$(this).parent().parent(".news_view_w").find(".news_v li").eq(k-1).fadeIn();
					return false;
				});
			}(i));
		};


		// 공통 뉴스탭 
			for(var i=1;i<3;i++){		
			(function (k){
				$(".news_tab_w .tab01_w .tab01 > li.n0" + k ).click(function(){ 
					$(this).parent(".tab01").find("li").removeClass("on");
					$(this).addClass("on");
					$(this).parent().parent().parent().find(".news_view ul").removeClass("active");
					$(this).parent().parent().parent().find(".news_view ul").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		});
	  </script>					
	  


			<link href="../css/connect.css" rel="stylesheet" type="text/css"/>


				<div class="connect_w">
				<div class="topTitle">
					<p>
						<span>커넥트뉴스</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">커넥트뉴스</h2>
				</div>
				<div class="connect">
					<div class="tab01_w">
						<ul class="tab01_2 connect_menu">
							<li class="ls01 on" ><a href="">뉴스 홈</a></li>
							<li class="ls02"><a href="">야구</a></li>
							<li class="ls03"><a href="">해외야구</a></li>
							<li class="ls04"><a href="">축구</a></li>
							<li class="ls05"><a href="">해외축구</a></li>
							<li class="ls06"><a href="">농구</a></li>
							<li class="ls07"><a href="">배구</a></li>
							<li class="ls08"><a href="">e스포츠</a></li>
						</ul>
					</div>
					<ul class="connect_menu_view">
						<li class="ls01_w active relative">
							<div class="left_w">
								<div class="news_view_w">
									<ul class="news_n">
										<li class="n01 on"><a href=""><span></span><img src="../image/sample/connect_s_01.jpg" alt="" /></a></li>
										<li class="n02"><a href=""><span></span><img src="../image/sample/connect_s_02.jpg" alt="" /></a></li>
										<li class="n03"><a href=""><span></span><img src="../image/sample/connect_s_03.jpg" alt="" /></a></li>
										<li class="n04"><a href=""><span></span><img src="../image/sample/connect_s_04.jpg" alt="" /></a></li>
									</ul>
									<ul class="news_v">
										<li style="display:block;">
											<a href="">
												<img src="../image/sample/connect_s_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">KIA 타선의 '무A서운' 두 얼굴.. 화끈하거나 끈적하거나</span>
													<span class="div_p">KIA 타이거즈가 한화 이글스와의 3연전을 모두 쓸어담았다. 가라앉았던 분위기를 확실하게 끌어올렸다. 타선이 이를 이끌었다. 때로는 화끈하게 터졌고, 때로는 끈끈하게 달라붙었다...</span>
												</span>
											</a>
										</li>
										<li>
											<a href="">
												<img src="../image/sample/connect_b_02.jpg" alt="" />
												<span class="div">
													<span class="div_h5">KIA 타선의 '무A서운' 두 얼굴.. 화끈하거나 끈적하거나</span>
													<span class="div_p">KIA 타이거즈가 한화 이글스와의 3연전을 모두 쓸어담았다. 가라앉았던 분위기를 확실하게 끌어올렸다. 타선이 이를 이끌었다. 때로는 화끈하게 터졌고, 때로는 끈끈하게 달라붙었다...</span>
												</span>
											</a>
										</li>
										<li>
											<a href="">
												<img src="../image/sample/connect_s_03.jpg" alt="" />
												<span class="div">
													<span class="div_h5">KIA 타선의 '무A서운' 두 얼굴.. 화끈하거나 끈적하거나</span>
													<span class="div_p">KIA 타이거즈가 한화 이글스와의 3연전을 모두 쓸어담았다. 가라앉았던 분위기를 확실하게 끌어올렸다. 타선이 이를 이끌었다. 때로는 화끈하게 터졌고, 때로는 끈끈하게 달라붙었다...</span>
												</span>
											</a>
										</li>
										<li>
											<a href="">
												<img src="../image/sample/connect_s_04.jpg" alt="" />
												<span class="div">
													<span class="div_h5">KIA 타선의 '무A서운' 두 얼굴.. 화끈하거나 끈적하거나</span>
													<span class="div_p">KIA 타이거즈가 한화 이글스와의 3연전을 모두 쓸어담았다. 가라앉았던 분위기를 확실하게 끌어올렸다. 타선이 이를 이끌었다. 때로는 화끈하게 터졌고, 때로는 끈끈하게 달라붙었다...</span>
												</span>
											</a>
										</li>					
									</ul>
								</div>
								<div class="clear"></div>
								<div class="mainnews_w">
									<h3>주요뉴스</h3>
									<a href="" class="btn">날짜별 기사보기</a>
									<ul class="mainnews">
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
									</ul>
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
									<div class="search_bar">
										<div class="select">
											<p class="off"><span class="pp">제목</span><span class="pa"></span></p>
											<ul>
												<li><a href="">제목</a></li>
												<li><a href="">아이디</a></li>
												<li><a href="">댓글</a></li>
											</ul>
										</div>
										<input type="text" /><input value="검색" type="submit">
									</div>
								</div>
							</div>
							<div class="right_w">
								<div class="news_tab_w">
									<div class="tab01_w">
										<ul class="tab01">
											<li class="on n01"><a href="">댓글 많은 뉴스</a></li>
											<li class="n02"><a href="">많이 본 뉴스</a></li>
										</ul>
									</div>
									<div class="news_view">
										<ul class="active">
											<li><span>1</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>2</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>3</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>4</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>5</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>6</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>7</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
										</ul>
										<ul>
											<li><span>1</span><a href="">[카스포인트]'부활' 우규민, 삼성22...</a></li>
											<li><span>2</span><a href="">[카스포인트]'부활' 우규민, 삼성22...</a></li>
											<li><span>3</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>4</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>5</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>6</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>7</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
										</ul>
									</div>
								</div>
								<div class="ad_w"><div class="ad"><a href=""><img src="../image/sample/ad_connect.jpg" alt="" /></a></div></div>
								<div class="poll">
									<h4>POLL</h4>
									<p><span class="red">Q</span>여러분이 예상하는 AL 동부지구 우승팀은?</p>
									<p class="btn_w"><a href="" class="blue_btn">투표하기</a><a href="" class="gray_btn">결과보기</a></p>
								</div>
								<ul class="newslist">
									<li>
										<a href="">
											<img src="../image/sample/connect_n_01.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_02.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_03.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_04.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_05.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_06.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="clear"></div>
						</li>
						<li class="ls02_w">
							<div class="left_w">
								<div class="news_view_w news_view_w2">
									<ul class="news_n">
										<li class="n01 on"><a href="">2017 타이어뱅크 KBO<br />올스타전 ‘베스트12’</a></li>
										<li class="n02"><a href="">2017 타이어뱅크 KBO<br />올스타전 ‘베스트12’</a></li>
										<li class="n03"><a href="">2017 타이어뱅크 KBO<br />올스타전 ‘베스트12’</a></li>
										<li class="n04"><a href="">2017 타이어뱅크 KBO<br />올스타전 ‘베스트12’</a></li>
										<li class="n05"><a href="">2017 타이어뱅크 KBO<br />올스타전 ‘베스트12’</a></li>
									</ul>
									<ul class="news_v">
										<li style="display:block;">
											<a href="">
												<img src="../image/sample/connect_sub_b_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">2017 타이어뱅크 KBO 올스타전 ‘베스트12’ 후보 확정</span>
													<span class="div_p">KBO는 오늘(30일) 2017 타이어뱅크 KBO 올스타전에 출전하는 ‘베스트12’를 선정하기 위해 구단별 12명씩 총 120명의 후보를 확정했다.</span>
												</span>
											</a>
										</li>			
										<li>
											<a href="">
												<img src="../image/sample/connect_sub_b_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">2017 타이어뱅크 KBO 올스타전 ‘베스트12’ 후보 확정2</span>
													<span class="div_p">KBO는 오늘(30일) 2017 타이어뱅크 KBO 올스타전에 출전하는 ‘베스트12’를 선정하기 위해 구단별 12명씩 총 120명의 후보를 확정했다.</span>
												</span>
											</a>
										</li>		
										<li>
											<a href="">
												<img src="../image/sample/connect_sub_b_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">2017 타이어뱅크 KBO 올스타전 ‘베스트12’ 후보 확정3</span>
													<span class="div_p">KBO는 오늘(30일) 2017 타이어뱅크 KBO 올스타전에 출전하는 ‘베스트12’를 선정하기 위해 구단별 12명씩 총 120명의 후보를 확정했다.</span>
												</span>
											</a>
										</li>		
										<li>
											<a href="">
												<img src="../image/sample/connect_sub_b_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">2017 타이어뱅크 KBO 올스타전 ‘베스트12’ 후보 확정4</span>
													<span class="div_p">KBO는 오늘(30일) 2017 타이어뱅크 KBO 올스타전에 출전하는 ‘베스트12’를 선정하기 위해 구단별 12명씩 총 120명의 후보를 확정했다.</span>
												</span>
											</a>
										</li>		
										<li>
											<a href="">
												<img src="../image/sample/connect_sub_b_01.jpg" alt="" />
												<span class="div">
													<span class="div_h5">2017 타이어뱅크 KBO 올스타전 ‘베스트12’ 후보 확정5</span>
													<span class="div_p">KBO는 오늘(30일) 2017 타이어뱅크 KBO 올스타전에 출전하는 ‘베스트12’를 선정하기 위해 구단별 12명씩 총 120명의 후보를 확정했다.</span>
												</span>
											</a>
										</li>		
									</ul>
								</div>
								<div class="clear"></div>
								<div class="mainnews_w">
									<h3>주요뉴스</h3>
									<a href="" class="btn">날짜별 기사보기</a>
									<ul class="mainnews">
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
										<li><a href="">[프로야구]'스크럭스 2홈런 6타점' NC, 넥센전 스윕…두산 6연승 질주</a></li>
										<li><a href="">에이스도 못 끊은 ‘한화 연패’</a></li>
										<li><a href="">두산 거포 vs LG 불펜…두산 거포의 완승</a></li>
										<li><a href="">김인식 "이승엽에게 은퇴 부담주면 안돼!" </a></li>
										<li><a href="">'상승세' NC, 이재학이라는 마지막 퍼즐 </a></li>
									</ul>
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
									<div class="search_bar">
										<div class="select">
											<p class="off"><span class="pp">제목</span><span class="pa"></span></p>
											<ul>
												<li><a href="">제목</a></li>
												<li><a href="">아이디</a></li>
												<li><a href="">댓글</a></li>
											</ul>
										</div>
										<input type="text" /><input value="검색" type="submit">
									</div>
								</div>
							</div>
							<div class="right_w">
								<div class="news_tab_w">
									<div class="tab01_w">
										<ul class="tab01">
											<li class="on n01"><a href="">댓글 많은 뉴스</a></li>
											<li class="n02"><a href="">많이 본 뉴스</a></li>
										</ul>
									</div>
									<div class="news_view">
										<ul class="active">
											<li><span>1</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>2</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>3</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>4</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>5</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>6</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>7</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
										</ul>
										<ul>
											<li><span>1</span><a href="">[카스포인트]'부활' 우규민, 삼성22...</a></li>
											<li><span>2</span><a href="">[카스포인트]'부활' 우규민, 삼성22...</a></li>
											<li><span>3</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>4</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>5</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>6</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
											<li><span>7</span><a href="">[카스포인트]'부활' 우규민, 삼성...</a></li>
										</ul>
									</div>
								</div>
								<div class="ad_w"><div class="ad"><a href=""><img src="../image/sample/ad_connect.jpg" alt="" /></a></div></div>
								<div class="poll">
									<h4>POLL</h4>
									<p><span class="red">Q</span>여러분이 예상하는 AL 동부지구 우승팀은?</p>
									<p class="btn_w"><a href="" class="blue_btn">투표하기</a><a href="" class="gray_btn">결과보기</a></p>
								</div>
								<ul class="newslist">
									<li>
										<a href="">
											<img src="../image/sample/connect_n_01.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_02.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_03.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_04.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_05.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
									<li>
										<a href="">
											<img src="../image/sample/connect_n_06.jpg" alt="" />
											<span class="hh">[누드토크]&lt;61&gt;</span>
											<span class="pp">심찬구 스포티즌대표 ‘축구는..</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="clear"></div>
						</li>
						<li class="ls03_w">1333</li>
						<li class="ls04_w">1444</li>
						<li class="ls05_w">1555</li>
						<li class="ls06_w">1666</li>
						<li class="ls07_w">1777</li>
						<li class="ls08_w">1888</li>
					</ul>
				</div>
			</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
