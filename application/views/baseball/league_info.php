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
			<li><a href="/baseball/stats_win_rate/">리그 통계</a></li>
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
								<th colspan="2" class="left pl20"><?=$schedule['date'][$i]->date;?></th>
								<th>B’s</th>
								<th>승</th>
								<th>패</th>
								<th>&nbsp;</th>
								<th>over</th>
								<th class="left pl5">under</th>
								<th>DATA</th>
							</tr>
							<?php foreach($schedule['schedule'] as $item):
                                if($schedule['date'][$i]->date==$item->date):
							?>
								<tr>
									<td><?=$item->time;?></td>
									<td class="left pl20"><a href="/baseball/player?team=<?=$item->away;?>"><?=$item->away;?></a> vs <a href="/baseball/player?team=<?=$item->home;?>"><?=$item->home;?></a></td>
									<td class="red">24</td>
									<td>1.24</td>
									<td>2.13</td>
									<td class="graybox"><span>6.5</span></td>
									<td>1.24</td>
									<td class="left pl10">3.21</td>
									<td class="data">
										<span>
											<span class="b_BTN"><a href="javascript:location.replace('/baseball/match_information/<?=$item->no;?>/0')">매치정보</a></span>
											<span class="r_BTN"><a href="">전문가 의견</a></span>
											<span class="g_BTN"><a href="">블로그</a></span>
											<span class="y_BTN"><a href="">배당률</a></span>
										</span>
                                        <?php include('match_2_3.php'); ?>
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
                                    <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=all')">전체</a></li>
                                    <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=home')">홈</a></li>
                                    <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=away')">원정</a></li>
								</ul>
								<div class="select" style="top:-7px;">
									<p class="off"><span class="pp"><?php if($duration=='all') echo '시즌 전체'; else echo $duration.'경기';?></span><span class="pa"></span></p>
										<ul>
											<li><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=all&home_away=<?=$home_away;?>')">시즌 전체</a></li>
											<li><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=10&home_away=<?=$home_away;?>')">10경기</a></li>
											<li><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=20&home_away=<?=$home_away;?>')">20경기</a></li>
											<li><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=30&home_away=<?=$home_away;?>')">30경기</a></li>
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
											<th><span class="n1 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win_rate')">승률</a></span></th>
											<th><span class="n2 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win')">승</a></span></th>
											<th><span class="n3 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=lose')">패</a></span></th>
											<th><span class="n4 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=tie')">타이</a></span></th>
											<th><span class="n5 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=plus')">득:실</a></span></th>
											<th><span class="n6 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=margin')">마진</a></span></th>
											<th><span class="n7 rn"><a href="javascript:location.replace('/baseball/league_info?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=game_car')">게임차</a></span></th>
											<th>최근 10경기</th>
										</tr>
                                        <?php foreach($total as $entry): ?>
                                        	<tr>
                                            	<?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4): ?>
                                                	<td><span class="rankdot0<?=$entry->rank;?>_color"><b><?=$entry->rank;?></b></span></td>
                                            	<?php elseif($entry->rank==4): ?><td><span class="rankdot04_color"><b><?=$entry->rank;?></b></span></td>
                                                <?php else: ?><td><?=$entry->rank;?></td><?php endif; ?>
                                                <td><?=$entry->team;?></td>
                                                <td <?php if($sort=='g') echo 'style="font-weight:bold;"';?>><?php if($duration=='all' && $home_away=='all') echo $entry->win+$entry->lose+$entry->tie; else echo $entry->g;?></td>
                                                <td <?php if($sort=='win_rate') echo 'style="font-weight:bold;"'; else echo 'style="font-weight:normal;"';?>><?=number_format($entry->win_rate,3);?></td>
                                                <td <?php if($sort=='win') echo 'style="font-weight:bold;"';?>><?=$entry->win;?></td>
                                                <td <?php if($sort=='lose') echo 'style="font-weight:bold;"';?>><?=$entry->lose;?></td>
                                                <td <?php if($sort=='tie') echo 'style="font-weight:bold;"';?>><?=$entry->tie;?></td>
                                                <td <?php if($sort=='plus') echo 'style="font-weight:bold;"';?>><?=$entry->plus;?>:<?=$entry->minus;?></td>
                                                <td <?php if($sort=='margin') echo 'style="font-weight:bold;"';?>><?=$entry->margin;?></td>
                                                <td <?php if($sort=='game_car') echo 'style="font-weight:bold;"';?>><?=$entry->game_car;?></td>
                                                <td>
                                                    <?php
                                                        $exp=explode(';', $entry->recent_game);
                                                        foreach($exp as $value) :
                                                            if($value=='승'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
                                                            elseif($value=='패'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
                                                            else: echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
                                                            endif;
                                                        endforeach;
                                                    ?>
												</td>
											</tr>
										<?php endforeach; ?>
								</table>
                                <?php
                                    if($sort=='win_rate') $sort_num='1';
                                    else if($sort=='win') $sort_num='2';
                                    else if($sort=='lose') $sort_num='3';
                                    else if($sort=='tie') $sort_num='4';
                                    else if($sort=='plus') $sort_num='5';
                                    else if($sort=='margin') $sort_num='6';
                                    else if($sort=='game_car') $sort_num='7';
                                ?>
								<div class="redline n<?=$sort_num;?>">
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
								<td>홈팀 승리</td>
								<td><?=$league_statistics['home_win'];?></td>
								<td><?php $home_per=number_format($league_statistics['home_win']/($league_statistics['home_win']+$league_statistics['away_win']+$league_statistics['draw'])*100,0); echo $home_per;?>%</td>
							</tr>
							<tr>
								<td>원정팀 승리</td>
								<td><?=$league_statistics['away_win'];?></td>
								<td><?php $away_per=number_format($league_statistics['away_win']/($league_statistics['home_win']+$league_statistics['away_win']+$league_statistics['draw'])*100,0); echo $away_per;?>%</td>
							</tr>
							<tr>
								<td>타이</td>
								<td><?=$league_statistics['draw'];?></td>
								<td><?=100-($home_per+$away_per)?>%</td>
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
								<th>핸디캡 (<?=$handicap;?>) 승률 통계</th>
								<th>경기수</th>
								<th>확률</th>
							</tr>
							<tr>
								<td>홈팀 승리</td>
								<td><?=$league_statistics['handicap_home_win'];?></td>
								<td><?=$league_statistics['handicap_home_win_rate'];?>%</td>
							</tr>
							<tr>
								<td>원정팀 승리</td>
								<td><?=$league_statistics['handicap_away_win'];?></td>
								<td><?=$league_statistics['handicap_away_win_rate'];?>%</td>
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
								<td>오버 (<?=$over_under_reference_value;?>)</td>
								<td><?=$league_statistics['over'];?></td>
								<td><?=number_format($league_statistics['over']/$league_statistics['g']*100);?>%</td>
							</tr>
							<tr>
								<td>언더 (<?=$over_under_reference_value;?>)</td>
								<td><?=$league_statistics['g']-$league_statistics['over'];?></td>
								<td><?=number_format(($league_statistics['g']-$league_statistics['over'])/$league_statistics['g']*100);?>%</td>
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
									<td><?=number_format($offense[$i]->avg,3);?></td>
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
									<td><?=number_format($offense[$i]->avg,3);?></td>
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
    document.body.scrollTop=<?=$scroll_top;?>;

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
	for(var i=1; i<21; i++){
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