<?php 
include("head_up.php");
include("head.php");
?>

	 <script type="text/javascript">
		$(document).ready(function(){ 
			$(".pw").click(function(){ 
				$(".pw_pop").slideDown();
				return false;
			});
			$(".closebtn").click(function(){ 
				$(this).parent().slideUp();
				return false;
			});
		});
	  </script>					
	  


			<link href="../css/mypage.css" rel="stylesheet" type="text/css"/>


			<div class="mypage_w">
				<div class="topTitle">
					<p>
						<span>내 정보</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">내 정보</h2>
				</div>
				<div class="mypage relative">
					<ul class="tab01">
						<li class="on"><a href="/odds/mypage/home.php">마이홈</a></li>
						<li><a href="/odds/mypage/payment.php">결제관리</a></li>
						<li><a href="/odds/mypage/join.php">참여내역</a></li>
						<li><a href="/odds/mypage/blog.php">블로그관리</a></li>
						<li><a href="/odds/mypage/league.php">마이리그관리</a></li>
						<li><a href="/odds/mypage/message.php">쪽지관리</a></li>
						<li><a href="/odds/mypage/login.php">로그인관리</a></li>
					</ul>
					<div class="relative">
						<h4>기본 정보</h4>
						<table class="table_default home_table">
							<caption></caption>
							<colgroup><col width="100px"/></colgroup>
							<tr>
								<th>이메일</th>
								<td>
									<div class="relative">
										<div class="left">
											<span class="id">sdfsdfsdfsdf</span><span class="gray">@</span><span class="mail">naver.com</span><span class="red">(미인증 상태입니다.)</span><br />
											<span class="gray">임시비밀번호, 공지 및 결제내역의 안내메일이 발송 될 수 있으므로 정확히 입력해 주십시오.</span>
										</div>
										<div class="right"><a href="" class="redbtn">인증하기</a></div>
									</div>
								</td>
							</tr>
							<tr>
								<th>닉네임</th>
								<td>
									<div class="relative">
										<div class="left">
											<span class="b14">닉네임을 설정해주세요</span><br />
											<span class="gray">한번 설정한 닉네임은 변경할 수 없으니 신중히 결정해 주세요</span>
										</div>
										<div class="right"><a href="" class="redbtn">설정하기</a></div>
									</div>
								</td>
							</tr>
							<tr>
								<th>본인인증</th>
								<td>
									<div class="relative">
										<div class="left">
											<span class="b14">인증정보 없음</span><br />
											<span class="gray">인증을 받으면 더욱 비밀번호 찾기등 다양한 서비스를 이용하실 수 있습니다. </span>
										</div>
										<div class="right"><a href="" class="redbtn">아이핀인증</a><a href="" class="redbtn">휴대폰인증</a></div>
									</div>
								</td>
							</tr>
							<tr>
								<th>비밀번호</th>
								<td>
									<div class="relative">
										<div class="left">
											<span class="b14">2015.11.11&nbsp;&nbsp;11:11:11&nbsp;에 설정됨</span><br />
											<span class="gray">비밀번호는 주기적으로 변경해주시는게 안전합니다. </span>
										</div>
										<div class="right"><a href="" class="redbtn pw">변경하기</a></div>
										<div class="my_pop pw_pop">
											<h3>비밀번호 변경</h3>
											<ul>
												<li><label for="Pw01">현재 비밀번호</label><input type="password" id="Pw01" /></li>
												<li><label for="Pw02">새 비밀번호</label><input type="password" id="Pw02" /></li>
												<li><label for="Pw03">새 비밀번호 확인</label><input type="password" id="Pw03" /></li>
												<li><span class="gray">영문과 숫자로 이루어진 8자리 이상의 조합</span></li>
											</ul>
											<div class="btn_w">
												<a href="" class="gbtn01">취소</a><a href="" class="gbtn02">변경하기</a>
											</div>
											<a href="" class="closebtn"></a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>프로필</th>
								<td>
									<div class="relative profile">
										<div class="phoView"><img src="../image/base/bg_prof.jpg" alt="" /></div>
										<div class="right_w">
											<span class="b14">이미지 사이즈는 150x150 이상 / 최대 용량 1MB 입니다.</span><br />
											<span class="gray">선정적인 이미지, 사회적으로 이슈가 되거나 논란의 여지가 있는 이미지는 삭제 될 수 있습니다.</span>
											<div class="fileDiv_w">
												<input type="text" id="fakeFileTxt" class="fakeFileTxt" readonly="readonly">
												<div class="fileDiv">
													<input type="button" class="buttonImg" value="찾아보기"/>
													<input type="file" class="realFile" onchange="javascript:document.getElementById('fakeFileTxt').value = this.value" />
												</div>
												<a href="" class="redbtn mt5">변경하기</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</table>
						<h4 class="pt30">부가 정보</h4>
						<table class="table_default home_table">
							<caption></caption>
							<colgroup><col width="100px"/></colgroup>
							<tr>
								<th>수신동의</th>
								<td>
									<div class="relative">
										<span><input type="checkbox" id="email"/><label for="email">이메일 수신동의</label></span>
										<span><input type="checkbox" id="sms"/><label for="sms">SMS 수신동의</label></span>
									</div>
								</td>
							</tr>
							<tr>
								<th>즐겨찾는 리그</th>
								<td>
									<div class="relative">
										<div class="left">
											<span class="b14">즐겨찾는 리그를 설정해 주세요.</span><br />
											<span class="gray">즐겨찾는 리그는 최대 5개 까지 설정이 가능합니다.</span>
										</div>
										<div class="right"><a href="" class="redbtn">설정하기</a></div>
									</div>
								</td>
							</tr>
							<tr>
								<th>로그인 관리</th>
								<td>
									<div class="relative">
										<a href="/odds/mypage/login.php" class="graybtn">로그인기록 바로가기</a><a href="/odds/mypage/exit.php" class="graybtn">회원탈퇴 바로가기</a>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
