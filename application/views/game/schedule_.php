<script type="text/javascript">
	function view(league_no, view){
		var league_no = league_no;
		var view = view;

		$.ajax({
			url:'../../game/ranking/',
			dataType:'text',
			type:'POST',
			data:{league_no:league_no, view:view}
		}).done(function(data) {
// 			var aa="";
// 			 for(name as data){
// 				 aa=aa + " $$ " +data[i];
// 			 }

			 alert(data);
// 			 document.getElementById("ranking").innerHTML(aa);
// 			 document.getElementById("ranking").html();

		});
	}
</script>
			<div class="Bottom_gnb">	
				<div class="scoreBox">
					<div class="Topbox">
						<div class="dayBox"><!-- 해당 버튼 클릭시 scoreBox 내용 전체 바뀜 -->
							<p>2016.11.28&nbsp;(<span>수요일</span>)</p>
							<!--ul>
								<li class="yesterday"><a href="">전날</a></li>
								<li class="tomorrow"><a href="">다음날</a></li>
							</ul-->
						</div>	
						<ul class="daygame">
							<li class="on"><a href="">MLB</a></li>
							<li><a href="">KBO</a></li>
							<li><a href="">NBA</a></li>
							<li><a href="">EPL</a></li>
							<li><a href="">LFP</a></li>
							<li><a href="">NHL</a></li>
							<li><a href="">NFL</a></li>
							<li><a href="">e-Sprots</a></li>
						</ul>
					</div>
					<div class="Bottombox"><!--  -->
						<ul class="scoregnb">
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
							<li class="slide" onclick="">
								<div class="game">
									<p>MLB</p>
									<span>4st</span>
								</div>
								<div class="team">
									<p>피츠버그</p><span>2</span>
									<span>:</span>
									<span>1</span>
									<p class="team2">미네소타</p>
								</div>
							</li>
						</ul>
						<span class="">png넣기</span>
					</div>
					<div class="settingdiv"><!-- 열고닫기 토글 -->
						<!--div class="setting"></div-->
						<div class="toggleButton"></div>
					</div>
				</div>
			</div>

							
			<div class="livescore game league">
				<div class="live_visual">
					<div>
						<div class="searchbox">
							<p class="bg"></p>
							<div>
								<h3 style="width:auto; margin:0 10px 5px;">LEAGUE INFO</h3>
								<p><b>축구 - 잉글랜드 - </b></p>
								<div><b>잉글랜드 프리미어리그</b><span class="btn_arrow01"></span>
								<ul  id="leagueC" class="leaguebox" style="display:none;">
									<li><a href="">프리미어</a></li>
									<li><a href="">챔피언쉽</a></li>
									<li><a href="">리그원</a></li>
									<li><a href="">리그투</a></li>
									<li><a href="">바나라마 북부</a></li>
									<li><a href="">바나라마 남부</a></li>
									<li><a href="">북부 프리미어</a></li>
									<li><a href="">남부 프리미어</a></li>
								</ul></div>
								<span>GAMEGUIDE by ODDSCONNECT</span>
							</div>
							<div>
								<label for="search"><img src="/ODDS/public/lib/image/livescore/search_label.jpg" alt="search" /></label>
								<input type="text" id="search" onfocus="this.value=''; return true" value="리그나 팀명을 검색해 주세요."/>
								<input type="submit" value="전송"/>
							</div>
						</div>
						<div class="bestview">
							<ul>
								<li class="engL"><a href="">레알마드리드 vs FC바르셀로나</a></li>
								<li class="champiL"><a href="">데포리티보 vs 말리가CF</a></li>
								<li class="bundesligaL"><a href="">시카코 vs LA다져스</a></li>
								<li class="primeraL"><a href="">엔씨 vs 한화</a></li>
								<li class="leagueangL"><a href="">두산 vs 기아</a></li>
								<li class="MLB_L"><a href="">엔씨 vs 한화</a></li>
								<li class="majorL"><a href="">데포리티보 vs 말리가CF</a></li>
								<li class="KBO_L"><a href="">두산 vs 기아</a></li>
								<li class="KBL_L"><a href="">레알마드리드 vs FC바르셀로나</a></li>
								<li class="K_L"><a href="">시카코 vs LA다져스</a></li>
							</ul>
						</div>
						<div class="livemenu">
							<ul>
							<?php 
								$site_tab=current_url();
								if(strstr($site_tab, "game/schedule")){?>
								<li class="schedule on"><?php } else { ?><li class="schedule"><?php }?><a href="<?=site_url().'game/schedule/?league_id='.$league_id?>">리그 일정</a></li>
								<?php if(strstr($site_tab, "game/result")){?><li class="result on"><?php } else { ?><li class="result"><?php }?><a href="<?=site_url().'game/result/?league_id='.$league_id?>">리그 결과</a></li>
								<?php if(strstr($site_tab, "game/stats")){?><li class="stats on"><?php } else { ?><li class="stats"><?php }?><a href="<?=site_url().'game/stats/?league_id='.$league_id?>">리그 통계</a></li>		
							</ul>
						</div>
					</div>
				</div>
				<div class="liveTable">
					<div class="date">
						<a href="" class="btn_prev" title="이전달">이전달</a>
						<a href="" class="date_yr date_num">2016</a>
						<ul class="date_yr_select date_ul" style="display:none;">
							<li><a href="">2008</a></li>
							<li><a href="">2009</a></li>
							<li><a href="">2010</a></li>
							<li><a href="">2011</a></li>
							<li><a href="">2012</a></li>
							<li><a href="">2013</a></li>
							<li><a href="">2014</a></li>
							<li><a href="">2015</a></li>
							<li><a href="">2016</a></li>
						</ul>
						<span>.</span>
						<a href="" class="date_mn date_num">08</a>
						<ul class="date_mn_select date_ul" style="display:none;">
							<li><a href="">03</a></li>
							<li><a href="">04</a></li>
							<li><a href="">05</a></li>
							<li><a href="">06</a></li>
							<li><a href="">07</a></li>
							<li><a href="">08</a></li>
							<li><a href="">09</a></li>
							<li><a href="">10</a></li>
							<li><a href="">11</a></li>
						</ul>
						<span>.</span>
						<a href="" class="date_da date_num">01</a>
						<ul class="date_da_select date_ul" style="display:none;">
							<li><a href="">01</a></li>
							<li><a href="">02</a></li>
							<li><a href="">03</a></li>
							<li><a href="">04</a></li>
							<li><a href="">05</a></li>
							<li><a href="">06</a></li>
							<li><a href="">07</a></li>
							<li><a href="">08</a></li>
							<li><a href="">09</a></li>
							<li><a href="">10</a></li>
							<li><a href="">11</a></li>
							<li><a href="">12</a></li>
							<li><a href="">13</a></li>
							<li><a href="">14</a></li>
							<li><a href="">15</a></li>
							<li><a href="">16</a></li>
							<li><a href="">17</a></li>
							<li><a href="">18</a></li>
							<li><a href="">19</a></li>
							<li><a href="">20</a></li>
							<li><a href="">21</a></li>
							<li><a href="">22</a></li>
							<li><a href="">23</a></li>
							<li><a href="">24</a></li>
							<li><a href="">25</a></li>
							<li><a href="">26</a></li>
							<li><a href="">27</a></li>
							<li><a href="">28</a></li>
							<li><a href="">29</a></li>
							<li><a href="">30</a></li>
							<li><a href="">31</a></li>
						</ul>
						<input value="이동" type="submit" class="btn_nv_mn">	
						<a href="" class="btn_next" title="다음달">다음달</a>
					</div>
					<div class="liveTab">
						<div id="sc1" class="livetable game">
							<div>
								<table class="table_default">
									<caption></caption>
									<colgroup>
										<col width="110ppx"/>
										<col width="169px"/>
										<col width="95px"/>
										<col width="44px"/>
										<col width="73px"/>
										<col width="44px"/>
										<col width="73px"/>
										<col width="*"/>
										<col width="107px"/>
									</colgroup>
									<tr>
										<th>경기정보</th>
										<th>팀 명</th>
										<th>2/1</th>
										<th colspan="2">H</th>
										<th colspan="2">O/U</th>
										<th>BET Graph</th>
										<th>데이터</th>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="ranking">
						<h3><span>2016/17 시즌 </span>팀순위</h3>
						<p>
							<span class="rankdot01"></span> 챔피언스리그 직행
							<span class="rankdot02"></span> 챔피언스리그 예선
							<span class="rankdot03"></span> 유로파 리그
							<span class="rankdot04"></span> 리그 강등
						</p>
						<div id="ranking">
							<table class="table_default">
								<caption></caption>
								<colgroup>
									<col width="67px"/>
									<col width="210px"/>
									<col width="96px"/>
									<col width="56px"/>
									<col width="68px"/>
									<col width="61px"/>
									<col width="56px"/>
									<col width="77px"/>
									<col width="62px"/>
									<col width="89px"/>
									<col width="*"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th>경기수</th>
									<th><span class="n1"><a href="javascript:view('<?=$league_id?>', 'point');">승점</a></span></th>
									<th><span class="n2"><a href="javascript:view('<?=$league_id?>', 'win');">승</a></span></th>
									<th><span class="n3"><a href="javascript:view('<?=$league_id?>', 'draw');">무</a></span></th>
									<th><span class="n4"><a href="javascript:view('<?=$league_id?>', 'lose');">패</a></span></th>
									<th><span class="n5"><a href="javascript:view('<?=$league_id?>', 'goal');">득점</a></span></th>
									<th><span class="n6"><a href="javascript:view('<?=$league_id?>', 'loss');">실점</a></span></th>
									<th><span class="n7"><a href="javascript:view('<?=$league_id?>', 'gap');">득실차</a></span></th>
									<th>최근 5경기</th>
								</tr>
								<?php 
								$no=1;
								function wdl_view($aa){
									if($aa=='3') return "<span class='winL'>win</span>";
									else if($aa=='1') return "<span class='drawL'>draw</span>";
									else return "<span class='loseL'>lose</span>";
								}
								
								for($i=0;$i<sizeof($stats);$i++){ ?>
									
								
								
								<tr>
									<td>
									<?php 
										if($stats[$i][23]=='1') echo "<span class='rankdot01'></span>";
										else if($stats[$i][23]=='2') echo "<span class='rankdot02'></span>";
										else if($stats[$i][23]=='3') echo "<span class='rankdot03'></span>";
										else if($stats[$i][23]=='4') echo "<span class='rankdot04'></span>";
										else
									?>
									<b><?=$no;?></b></td>
									<td><span class="champiL"></span><?=$stats[$i][1]?></td>
									<td><?=(int)$stats[$i][4]+(int)$stats[$i][5]+(int)$stats[$i][6]?></td>
									<td><?=$stats[$i][21]?></td>
									<td><?=$stats[$i][4]?></td>
									<td><?=$stats[$i][5]?></td>
									<td><?=$stats[$i][6]?></td>
									<td><?=$stats[$i][2]?></td>
									<td><?=$stats[$i][3]?></td>
									<td><?=$stats[$i][22]?></td>
									<td>
									<?php 
											$b=$stats[$i][8];
											$aa="";
											$aa = wdl_view(substr($b, 0, 1));
											echo $aa;
											$aa = wdl_view(substr($b, 1, 1));
											echo $aa;
											$aa = wdl_view(substr($b, 2, 1));
											echo $aa;
											$aa = wdl_view(substr($b, 3, 1));
											echo $aa;
											$aa = wdl_view(substr($b, 4, 1));
											echo $aa;
									?>
									</td>
								</tr>
								<?php $no++; } ?>
							</table>
							<!-- point, win, draw, lose, goal, loss, gap -->  
							<?php 
								if($view=='point') echo "<div class='redline n1'>";
								else if($view=='win') echo "<div class='redline n2'>";
								else if($view=='draw') echo "<div class='redline n3'>";
								else if($view=='lose') echo "<div class='redline n4'>";
								else if($view=='goal') echo "<div class='redline n5'>";
								else if($view=='loss') echo "<div class='redline n6'>";
								else if($view=='gap') echo "<div class='redline n7'>";
								else{}
							?>
								<span class="bt"></span>
								<span class="bl"></span>
								<span class="br"></span>
								<span class="bb"></span>
							</div>
						</div>
						<p>스포네비에서 제공하는 일정, 결과, 기록등의 데이터는 ‘제공처’의 사정에 따라 지연되거나 잘못 표시될 수 있습니다.</p>
					</div>
					<div class="summary">
						<h3><span>프리미어리그 </span>요약정보</h3>
						<div>
							<div style="height:50%"></div>
							<span>홈승</span>
							<p><?=(int)((int)$hw/((int)$hw+(int)$dr+(int)$vw)*100)?>%</p>
							<span><?=(int)$hw+(int)$dr+(int)$vw?>전 <?=$hw?>승</span>						
						</div>
						<div>
							<div style="height:20%"></div>
							<span>무승부</span>
							<p><?=(int)((int)$dr/((int)$hw+(int)$dr+(int)$vw)*100)?>%</p>
							<span><?=(int)$hw+(int)$dr+(int)$vw?>전 <?=$dr?>무</span>					
						</div>
						<div>
							<div style="height:30%"></div>
							<span>원정승</span>
							<p><?=(int)((int)$vw/((int)$hw+(int)$dr+(int)$vw)*100)?>%</p>
							<span><?=(int)$hw+(int)$dr+(int)$vw?>전 <?=$vw?>승</span>						
						</div>
						<div>
							<div style="height:100%"></div>
							<span>전체득점</span>
							<p><?=(int)$hg+(int)$vg?></p>
							<span>&nbsp;</span>							
						</div>
						<div>
							<div style="height:56%"></div>
							<span>홈 득점</span>
							<p><?=(int)((int)$hg/((int)$hg+(int)$vg)*100)?>%</p>
							<span><?=(int)$hg+(int)$vg?>중 <?=$hg?></span>							
						</div>
						<div>
							<div style="height:44%"></div>
							<span>원정 득점</span>
							<p><?=(int)((int)$vg/((int)$hg+(int)$vg)*100)?>%</p>
							<span><?=(int)$hg+(int)$vg?>중 <?=$vg?></span>							
						</div>
					</div>
					<div class="TOP5">
						<div>
							<h3>공격력 최강팀 TOP5</h3>
							<?php for($i=0;$i<5;$i++){ ?>
							<div>
								<p><?=$stats1[$i][1]?></p>
								<div>
									<span><?=$stats1[0][2]?></span>
									<div style="width:<?=(int)((int)$stats1[$i][2]/(int)$stats1[0][2]*100)?>%"><span><?=$stats1[$i][2]?></span></div>
								</div>
							</div>
							<?php } ?>
						</div>
						
						<div>
							<h3>공격력 최약팀 TOP5</h3>
							
							<?php 
							
							for($i=sizeof($stats1)-1;$i>sizeof($stats1)-6;$i--){ ?>
							<div>
								<p><?=$stats1[$i][1]?></p>
								<div>
									<span><?=$stats1[0][2]?></span>
									<div style="width:<?=(int)((int)$stats1[$i][2]/(int)$stats1[0][2]*100)?>%"><span><?=$stats1[$i][2]?></span></div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div>
							<h3>수비력 최강팀 TOP5</h3>
							<?php for($i=0;$i<5;$i++){ ?>
							<div>
								<p><?=$stats2[$i][1]?></p>
								<div>
									<span><?=$stats2[sizeof($stats2)-1][3]?></span>
									<div style="width:<?=(int)((int)$stats2[$i][3]/(int)$stats2[sizeof($stats2)-1][3]*100)?>%"><span><?=$stats2[$i][3]?></span></div>
								</div>
							</div>
							<?php } ?>
						</div>
						<div>
							<h3>수비력 최약팀 TOP5</h3>
							<?php for($i=sizeof($stats2)-1;$i>sizeof($stats2)-6;$i--){ ?>
							<div>
								<p><?=$stats2[$i][1]?></p>
								<div>
									<span><?=$stats2[sizeof($stats2)-1][3]?></span>
									<div style="width:<?=(int)((int)$stats2[$i][3]/(int)$stats2[sizeof($stats2)-1][3]*100)?>%"><span><?=$stats2[$i][3]?></span></div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>