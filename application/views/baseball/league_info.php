<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
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
			<li class="on"><a href="/baseball/league_info/">리그정보</a></li>
			<li><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
			<li><a href="/baseball/stats/">리그 통계</a></li>
			<li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
			<li><a href="/baseball/player_record/">선수 기록</a></li>
			<li><a href="/baseball/score/">상대 전적</a></li>
		</ul>
		<ul class="tab_view01 gameMain_view">
			<li class="active s1">
				<div class="pb50">
					<?php for($i=0; $i<count($schedule['date']); $i++): ?>
						<table class="table_default ">
							<caption></caption>
							<colgroup>
								<col width="80px"/>
								<col width="*"/>
								<col width="90px"/>
								<col width="63px"/>
								<col width="55px"/>
								<col width="70px"/>
								<col width="75px"/>
								<col width="88px"/>
								<col width="168px"/>
							</colgroup>
							<tr>
								<th colspan="2" class="left pl20"><?=$schedule['date'][$i]->date?></th>
								<th>B’s</th>
								<th>승</th>							
								<th>패</th>
								<th>&nbsp;</th>
								<th>over</th>
								<th class="left pl5">under</th>
								<th>DATA</th>
							</tr>
							<?php foreach($schedule['schedule'] as $item): 
								if($i==count($schedule['date'])-1): $endnum=$item->no+1; else: $endnum=$schedule['date'][$i+1]->no; endif;
									if($schedule['date'][$i]->no <= $item->no && $endnum > $item->no):
							?>
								<tr>
									<td><?=$item->time;?></td>
									<td class="left pl20"><a href="team_info.php"><?=$item->away;?></a> vs <a href=""><?=$item->home;?></a></td>
									<td class="red">24</td>
									<td>1.24</td>
									<td>2.13</td>
									<td class="graybox"><span>6.5</span></td>
									<td>1.24</td>
									<td class="left pl10">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="match.php">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>			
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
										<!-- 블로그팝업 -->
										<div class="g_pop popup" style="display:none;">
											<h3>관련 블로그 보기</h3>
											<ul>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>블로그 제목<span>블로그별명</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
											</ul>
											<div class="num">
												<span class="on"><a href="">1</a></span>
												<span><a href="">2</a></span>
												<span><a href="">3</a></span>
												<span><a href="">4</a></span>
												<span><a href="">5</a></span>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
										<!-- 전문가팝업 -->
										<div class="r_pop popup" style="display:none;">
											<h3>전문가 의견 보기</h3>
											<ul>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
												<li>
													<b>설민석<span>실전배팅전문가</span></b>
													<p>박병호의 부담감으로 인한<br />예상경기가..</p>
												</li>
											</ul>
											<div class="num">
												<span class="on"><a href="">1</a></span>
												<span><a href="">2</a></span>
												<span><a href="">3</a></span>
												<span><a href="">4</a></span>
												<span><a href="">5</a></span>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
										<!-- 배당률팝업 -->
										<div class="y_pop popup" style="display:none;">							
											<h3>롯데 자이언트 vs 삼성 라이온즈</h3>	
											<div>
												<ul class="y_btn">
													<li><a href="">전체 회사 보기</a></li>
													<li><a href="">선택 회사 보기</a></li>
												</ul>
												<ul>
													<li class="on"><a href="">승패</a></li>
													<li><a href="">핸디캡</a></li>
													<li><a href="">오버언더</a></li>
												</ul>
												<div class="y_table_w">
													<table>
														<caption></caption>
														<colgroup>
															<col width="130px"/>
															<col width="109px"/>
															<col width="109px"/>
															<col width="109px"/>
														</colgroup>
														<tr>
															<th>배팅 회사</th>
															<th>홈팀 승</th>
															<th>무승부</th>
															<th>원정팀 승</th>
														</tr>
													</table>
													<div class="y_table">
														<table>
															<caption></caption>
															<colgroup>
																<col width="130px"/>
																<col width="109px"/>
																<col width="109px"/>
																<col width="109px"/>
															</colgroup>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><label for=""><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></label></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="down">1.14</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
																<td>
																	<div>
																		<span class="up">1.24</span>
																		<div class="y_view">
																			<ul>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="down">-0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																				<li>
																					<span class="day">11.28</span>
																					<span class="time">04:03</span>
																					<b>3.80</b>
																					<span class="up">+0.02</span>
																				</li>
																			</ul>
																			<div>
																				<p>Opening odds</p>
																				<span class="day">11.28</span>
																				<span class="time">04:03</span>
																				<b>3.80</b>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
														</table>
													</div>
												</div>
												<div class="">
													<table>
														<caption></caption>
														<colgroup>
															<col width="131px"/>
															<col width="109px"/>
															<col width="109px"/>
															<col width="109px"/>
														</colgroup>
														<tr>
															<th>최고 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최저 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>평균 초기 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최고 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>최저 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
														<tr>
															<th>평균 라이브 승률</th>
															<td>1.59</td>
															<td>1.59</td>
															<td>1.59</td>
														</tr>
		
													</table>
												</div>
											</div>
											<div class="close"><a href="">close</a></div>
										</div>
									</td>
								</tr>
							<?php endif;endforeach; ?>
							
						</table>
					<?php endfor; ?>
				</div>
				<div class="pb50 relative" style="margin-left:0;">
					<h3>2017 KBO 리그 순위</h3>
					<p class="more" style="left:auto;right:0;">"리그통계" 메뉴에서 더 많은 통계를 확인할 수 있습니다</p>
					<ul class="tab_view01 LastGame_view Team" style="margin-top:3px;">
						<li class="active ranking ss1">
							<div class="tab2_w">
								<ul class="tab02">
									<li class="on"><a href="">전체</a></li>
									<li><a href="">홈</a></li>
									<li><a href="">원정</a></li>
								</ul>
								<div class="select" style="top:-7px;">
									<p><span class="pp">시즌 전체</span><span class="pa"></span></p>
										<ul>
											<li><a href="">10경기</a></li>
											<li><a href="">20경기</a></li>
											<li><a href="">30경기</a></li>
										</ul>
									</div>
								</div>
								<div class="Ltable relative">
									<table class="table_default league_Ltable">
										<caption></caption>
										<colgroup>
											<col width="63px"/>
											<col width="*"/>
											<col width="56px"/>
											<col width="70px"/>
											<col width="60px"/>
											<col width="56px"/>
											<col width="65px"/>
											<col width="75px"/>
											<col width="61px"/>
											<col width="68px"/>
											<col width="270px"/>
										</colgroup>
										<tr>
											<th>순위</th>
											<th class="left">팀</th>
											<th>경기수</th>
											<th><span class="n1 rn">승률</span></th>
											<th><span class="n2 rn">승</span></th>
											<th><span class="n3 rn">패</span></th>
											<th><span class="n4 rn">타이</span></th>
											<th><span class="n5 rn">득:실</span></th>
											<th><span class="n6 rn">마진</span></th>
											<th><span class="n7 rn">게임차</span></th>
											<th>최근 10경기</th>
										</tr>
                                        <?php foreach($total as $entry): ?>
                                        	<tr>
                                            	<?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4): ?>
                                                	<td><span class="rankdot0<?=$entry->rank;?>_color"><b><?=$entry->rank;?></b></span></td>
                                            	<?php elseif($entry->rank==4): ?><td><span class="rankdot04_color"><b><?=$entry->rank;?></b></span></td>
                                                <?php else: ?><td><?=$entry->rank;?></td><?php endif; ?>
                                                <td><?=$entry->team;?></td>
                                                <td><?php foreach($offense as $entries): if($entry->team==$entries->team) echo $entries->g; endforeach;?></td>
                                                <td><?=number_format($entry->win_rate,3);?></td>
                                                <td><?=$entry->win;?></td>
                                                <td><?=$entry->lose;?></td>
                                                <td><?=$entry->tie;?></td>
                                                <td><?=$plus_minus[$entry->team]; ?>:<?=$plus_minus[$entry->team.'_lose'];?></td>
                                                <td><?=$plus_minus[$entry->team]-$plus_minus[$entry->team.'_lose'];?></td>
                                                <td><?=$entry->game_car;?></td>
                                                <td><?php $exp=explode(';', $entry->recent_game);
                                                		foreach($exp as $value) :
                                                			if($value=='승'): echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
															elseif($value=='패'): echo '<a href="/baseball/match" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
															else: echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
															endif;
														endforeach; ?>
												</td>
											</tr>
										<?php endforeach; ?>
								</table>
								<div class="redline n1">
									<span class="bt"></span>
									<span class="bl"></span>
									<span class="br"></span>
									<span class="bb"></span>
								</div>
							</div>
						</li>
					</ul>
					<p class="dot">
						<span class="rankdot01"></span> 한국시리즈
						<span class="rankdot02"></span> 플레이오프
						<span class="rankdot03"></span> 준플레이오프
						<span class="rankdot04"></span> 와일드카드
					</p>
					<div class="clear"></div>
				</div>
				<div class="pb50">
					<h3>2017 KBO 리그요약</h3>
					<div class="tableNtable pt10">
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>리그 승률통계</th>
								<th>경기수</th>
								<th>확률</th>
							</tr>
							<tr>
								<td>홈경기 승리</td>
								<td><?=$league_statistics['home_win'];?></td>
								<td><?=$home_win=number_format($league_statistics['home_win']/($league_statistics['home_win']+$league_statistics['away_win'])*100,0);?>%</td>
							</tr>
							<tr>
								<td>원정경기 승리</td>
								<td><?=$league_statistics['away_win'];?></td>
								<td><?=100-$home_win;?>%</td>
							</tr>
							<tr>
								<td>타이</td>
								<td>0</td>
								<td>0%</td>
							</tr>
						</table>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>리그 득점통계</th>
								<th>득점</th>
								<th>경기당</th>
							</tr>
							<tr>
								<td>전체경기 득점</td>
								<td><?=$league_statistics['home_total_score']+$league_statistics['away_total_score'];?></td>
								<td>-</td>
							</tr>
							<tr>
								<td>홈경기 득점</td>
								<td><?=$league_statistics['home_total_score'];?></td>
								<td><?php $home_score=number_format($league_statistics['home_total_score']/($league_statistics['home_total_score']+$league_statistics['away_total_score'])*100,0); echo $home_score;?>%</td>
							</tr>
							<tr>
								<td>원정경기 득점</td>
								<td><?=$league_statistics['away_total_score'];?></td>
								<td><?=100-$home_score?>%</td>
							</tr>
						</table>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>핸디캡 (1.5) 승률 통계</th>
								<th>경기수</th>
								<th>확률</th>
							</tr>
							<tr>
								<td>홈경기 승리</td>
								<td><?=$league_statistics['handicap_home_win'];?></td>
								<td><?php $handicap_home_score=number_format($league_statistics['handicap_home_win']/($league_statistics['handicap_home_win']+$league_statistics['handicap_away_win'])*100,0); echo $handicap_home_score;?>%</td>
							</tr>
							<tr>
								<td>원정경기 승리</td>
								<td><?=$league_statistics['handicap_away_win'];?></td>
								<td><?=100-$handicap_home_score;?>%</td>
							</tr>
						</table>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>오버/언더 확률통계</th>
								<th>경기수</th>
								<th>확률</th>
							</tr>
							<tr>
								<td>오버 (9.5)</td>
								<td>125</td>
								<td>57%</td>
							</tr>
							<tr>
								<td>언더 (9.5)</td>
								<td>60</td>
								<td>43%</td>
							</tr>
						</table>
					</div>
					<div class="clear"></div>
				</div>
				<div class="pb50 TOP5">
					<h3>2017 KBO 각 부분 상위 5팀</h3>
					<div>
						<h4>공격력 상위 5팀<span></span></h4>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="190px"/>
								<col width="85px"/>
								<col width="80px"/>
								<col width="80px"/>
								<col width="85px"/>
							</colgroup>
							<tr>
								<th>팀 명</th>
								<th>타율</th>
								<th>홈런</th>
								<th>득점</th>
								<th>경기당</th>
							</tr>
							<?php for($i=0; $i<5; $i++): ?>
								<tr>
									<td><?=$offense[$i]->team;?></td>
									<td><?=$offense[$i]->avg;?></td>
									<td><?=$offense[$i]->hr;?></td>
									<td><?=$offense[$i]->h;?></td>
									<td>6.45</td>
								</tr>
							<?php endfor; ?>
						</table>
					</div>
					<div>
						<h4>공격력 하위 5팀<span></span></h4>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="190px"/>
								<col width="85px"/>
								<col width="80px"/>
								<col width="80px"/>
								<col width="85px"/>
							</colgroup>
							<tr>
								<th>팀 명</th>
								<th>타율</th>
								<th>홈런</th>
								<th>득점</th>
								<th>경기당</th>
							</tr>
							<?php for($i=9; $i>4; $i--): ?>
								<tr>
									<td><?=$offense[$i]->team;?></td>
									<td><?=$offense[$i]->avg;?></td>
									<td><?=$offense[$i]->hr;?></td>
									<td><?=$offense[$i]->h;?></td>
									<td>6.45</td>
								</tr>
							<?php endfor; ?>
						</table>
					</div>
					<div>
						<h4>방어력 상위 5팀<span></span></h4>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="190px"/>
								<col width="85px"/>
								<col width="80px"/>
								<col width="80px"/>
								<col width="85px"/>
							</colgroup>
							<tr>
								<th>팀 명</th>
								<th>방어율</th>
								<th>피홈런</th>
								<th>실점</th>
								<th>경기당</th>
							</tr>
							<?php for($i=0; $i<5; $i++): ?>
								<tr>
									<td><?=$defence[$i]->team;?></td>
									<td><?=number_format($defence[$i]->era, 2);?></td>
									<td><?=$defence[$i]->hr;?></td>
									<td><?=$defence[$i]->h;?></td>
									<td>6.45</td>
								</tr>
							<?php endfor; ?>
						</table>
					</div>
					<div>
						<h4>방어력 하위 5팀<span></span></h4>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="190px"/>
								<col width="85px"/>
								<col width="80px"/>
								<col width="80px"/>
								<col width="85px"/>
							</colgroup>
							<tr>
								<th>팀 명</th>
								<th>방어율</th>
								<th>피홈런</th>
								<th>실점</th>
								<th>경기당</th>
							</tr>
							<?php for($i=9; $i>4; $i--): ?>
								<tr>
									<td><?=$defence[$i]->team;?></td>
									<td><?=number_format($defence[$i]->era, 2);?></td>
									<td><?=$defence[$i]->hr;?></td>
									<td><?=$defence[$i]->h;?></td>
									<td>6.45</td>
								</tr>
							<?php endfor; ?>
						</table>
					</div>	
					<span class="clear"></span>
				</div>
			</li>
		</ul>
	</div>
</div>
			
<script type="text/javascript">
$(document).ready(function(){ 
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
		}
	});

	//선수기록
	for(var i=1;i<21;i++){		
		(function (k){
			$(".table_w2 table th span.pr_" + k ).click(function(){ 
				$(this).parents(".table_default").siblings("div").removeClass();
				//$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k); 
				$(this).parents(".table_default").find("td").css("font-weight","normal");
				$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
				return false;
			});
		}(i));
	};

	//순위 확장테이블
	$(".table_w2_1 .nextTable a").click(function(){ 
		$(this).parent().siblings(".next_table").slideToggle(); 
		return false;
	});
	//순위 확장테이블_2
	$(".table_w2_2 .nextTable1 a").click(function(){ 
		$(this).parent().siblings(".next_table2").slideUp(); 
		$(this).parent().siblings(".next_table").slideDown(); 
		$(this).parent().css("display","none"); 
		$(".nextTable2").css("display","block"); 
		return false;
	});
	$(".table_w2_2 .nextTable2 a").click(function(){ 
		$(this).parent().siblings(".next_table2").slideDown(); 
		$(this).parent().css("display","none"); 
		$(".nextTable3").css("display","block"); 
		return false;
	});
	$(".table_w2_2 .nextTable3 a").click(function(){ 
		$(this).parent().siblings(".next_table").slideUp(); 
		$(this).parent().siblings(".next_table2").slideUp(); 
		$(this).parent().css("display","none"); 
		$(".nextTable1").css("display","block"); 
		return false;
	});
});
 </script>