<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">
		$(document).ready(function(){
		// 인기글 댓글순 추천순  탭메뉴
			for(var i=1;i<4;i++){		
			(function (k){
				$(".tab01 > li.ls0" + k ).click(function(){ 
					$(".tab01 li").removeClass("on");
					$(this).addClass("on");
					$(".comm > li").removeClass("active");
					$(".comm > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		// 최신글 재야의 분석 ...  탭메뉴
			for(var i=1;i<6;i++){		
			(function (k){
				$(".comm_menu > li.ls0" + k ).click(function(){ 
					$(".comm_menu li").removeClass("on");
					$(this).addClass("on");
					$(".comm_menu_view > li").removeClass("active");
					$(".comm_menu_view > li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

		});
	  </script>					
	  


			<link href="../css/community.css" rel="stylesheet" type="text/css"/>


				<div class="community_w">
				<div class="topTitle">
					<p>
						<span>커뮤니티</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">커뮤니티</h2>
				</div>
				<div class="community">
					<div class="community_top">
						<ul class="tab01">
							<li class="on ls01"><a href="">인기글</a></li>
							<li class="ls02"><a href="">댓글순</a></li>
							<li class="ls03"><a href="">추천순</a></li>
						</ul>
						<ul class="comm">
							<li class="active">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="90px"/><col width="*"/><col width="100px"/><col width="80px"/>
									</colgroup>
									<tr>
										<th>분류</th>
										<th>제목</th>
										<th>글쓴이</th>
										<th>조회수</th>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
								</table>
							</li>
							<li class="">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="90px"/><col width="*"/><col width="100px"/><col width="80px"/>
									</colgroup>
									<tr>
										<th>분류</th>
										<th>제목</th>
										<th>글쓴이</th>
										<th>조회수</th>
									</tr>
									<tr>
										<td>자유게시판22</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
								</table>
							</li>
							<li class="">
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="90px"/><col width="*"/><col width="100px"/><col width="80px"/>
									</colgroup>
									<tr>
										<th>분류</th>
										<th>제목</th>
										<th>글쓴이</th>
										<th>조회수</th>
									</tr>
									<tr>
										<td>자유게시판33</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
									<tr>
										<td>자유게시판</td>
										<td><a href="/odds/blog/main.html" target="_blank">야구팬 51.2% 예상 “두산, 넥센에 승리”</a></td>
										<td>마루치2020</td>
										<td>1515</td>
									</tr>
								</table>
							</li>
						</ul>
						<div class="ad"><a href=""><img src="../image/sample/ad_comm.jpg" alt="" /></a></div>
						<div class="clear"></div>
					</div>
					<div class="graybar">
						<h4>내 블로그 정보</h4>
						<div>
							<span>오늘 방문수 : 132</span>
							<span> 댓글 : 132</span>
							<span>이웃추가신청 : 132</span>
							<a href="" class="post_btn"><span></span>포스트 쓰기</a>
							<a href="/odds/blog/main.html" class="blog_btn" target="_blank"><span></span>블로그 바로가기</a>
						</div>
					</div>
					<div class="tab01_w">
						<ul class="tab01_2 comm_menu">
							<li class="ls01 on" ><a href="">최신글</a></li>
							<li class="ls02"><a href="">재야의분석</a></li>
							<li class="ls03"><a href="">자유게시판</a></li>
							<li class="ls04"><a href="">사진게시판</a></li>
							<li class="ls05"><a href="">자랑게시판</a></li>
						</ul>
					</div>
					<ul class="comm_menu_view">
						<li class="ls01_w active relative">
							<div class="select" style="top:-60px;">
								<p class="off"><span class="pp">2017/18</span><span class="pa"></span></p>
								<ul>
									<li><a href="">2017/18</a></li>
									<li><a href="">2016/17</a></li>
								</ul>
							</div>
							<table class="table_default">
								<caption></caption>
								<colgroup></colgroup>
								<tr>
									<th>분류</th>
									<th>제목</th>
									<th>글쓴이</th>
									<th>등록일</th>
									<th>조회수</th>
									<th>추천수</th>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								<tr>
									<td>자유게시판</td>
									<td class="left"><a href="/odds/blog/main.html" target="_blank">이대호는 시애틀매리너스에 계속 남아있어야 하는가?</a></td>
									<td>마루치2020</td>
									<td>16:32</td>
									<td>259</td>
									<td>31</td>
								</tr>
								
							</table>
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
						</li>
						<li class="ls02_w">1222</li>
						<li class="ls03_w">1333</li>
						<li class="ls04_w">1444</li>
						<li class="ls05_w">1555</li>
					</ul>
				</div>
			</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
