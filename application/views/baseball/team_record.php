<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
	<div class="topTitle">
		<p>
			<span>리그정보 - 야구 - 대한민국</span>
			<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
		</p>
		<h2 class="tit02"><?=date('Y');?> KBO</h2>
	</div>
	<div class="game_w">
		<ul class="tab01 gameMain">
			<li class=""><a href="/baseball/league_info/">리그정보</a></li>
			<li class=""><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
			<li class=""><a href="/baseball/stats/">리그 통계</a></li>
			<li class="on"><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
			<li class=""><a href="/baseball/player_record/">선수 기록</a></li>
			<li class=""><a href="/baseball/score/">상대 전적</a></li>
		</ul>
		<ul class="tab_view01 gameMain_view">
			<li class="active s1">
				<div class="pb50 relative">
					<h3 class="noBorder">팀 종합기록</h3>
					<table class="table_default table_2_left" >
						<caption></caption>
						<colgroup>
							<col width="63px"/>
							<col width="*"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="270px"/>
						</colgroup>
						<tr>
							<th>순위</th>
							<th>팀</th>
							<th>경기수</th>
							<th>승률</th>
							<th>승</th>
							<th>패</th>
							<th>타이</th>
							<th>득:실</th>
							<th>마진</th>
							<th>게임차</th>
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
				</div>

				<div class="pb50 relative">
					<div class="date">
						<a href="/baseball/team_record/<?=$select_year;?>/0<?=$select_month-1;?>/avg/all/all" class="btn_prev" title="이전달">이전달</a>
						<a href="" class="date_yr date_num"><?=$select_year;?></a>
						<ul class="date_yr_select date_ul">
							<li><a href=""><?=$select_year;?></a></li>
						</ul>
						<span>.</span>
						<a href="" class="date_mn date_num"><?=$select_month;?></a>
						<ul class="date_mn_select date_ul">
							<li><a href="/baseball/team_record/<?=$select_year;?>/03/avg/all/all">03</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/04/avg/all/all">04</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/05/avg/all/all">05</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/06/avg/all/all">06</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/07/avg/all/all">07</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/08/avg/all/all">08</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/09/avg/all/all">09</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/10/avg/all/all">10</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/11/avg/all/all">11</a></li>
						</ul>
						<!-- <input value="이동" type="submit" class="btn_nv_mn"> -->
						<a href="/baseball/team_record/<?=$select_year;?>/0<?=$select_month+1?>/avg/all/all" class="btn_next" title="다음달">다음달</a>
						<div class="clear"></div>
					</div>
					<ul class="radio_w">
						<!-- <li><input type="radio" id="rd01" name="change"/><label for="rd01">순위변화보기</label></li>
						<li><input type="radio" id="rd02" name="change"/><label for="rd02">승률변화보기</label></li> -->
					</ul>
					<div class="graybox2">
						<?php $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화'); ?>
						<canvas id="myChart" width="400" height="150"></canvas>
						<script src="/public/lib/js/Chart.min.js"></script>
						<script src="/public/lib/js/moment.js"></script>
						<script>
							var makeDaysInMonth=<?php echo json_encode($schedule);?>;
							var schedule=new Array();
							for (var i=0; i<makeDaysInMonth.length; i++){
								var splitted=makeDaysInMonth[i]['date'].split('-');
								schedule.push(parseInt(splitted[2])+'일');
							}

							var team_array=new Array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
							var rank_month=<?php echo json_encode($rank_month);?>;
							var data=[rank_month['삼성'].split(';'), rank_month['롯데'].split(';'), rank_month['LG'].split(';'), rank_month['SK'].split(';'),rank_month['kt'].split(';'),
									  rank_month['두산'].split(';'), rank_month['넥센'].split(';'), rank_month['KIA'].split(';'), rank_month['NC'].split(';'), rank_month['한화'].split(';')];
							var color=["#0030DB","#FFA648","#D5D5D5","#C90000","#242424","#000093","#A50400","#FF3636","#6798FD","#FF5E00"];
							var ctx=document.getElementById("myChart");
							var myChart=new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: schedule,
                                    datasets: [
                                        <?php foreach($team_array as $key=>$team): ?>
                                            {
                                                label: team_array[<?=$key;?>],
                                                data: data[<?=$key;?>],
                                                fill: false,
                                                borderWidth: 2,
                                                borderColor: color[<?=$key;?>],
                                                backgroundColor: color[<?=$key;?>],
                                                lineTension: 0
                                            <?php if($key==9): echo '}'; else: echo '},'; endif;
                                        endforeach; ?>
                                    ]},
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    max:10,
                                                    min:1,
                                                    reverse:true
                                                }
                                            }]
                                        },
                                        legend: {
                                            display:true,
                                            position:'right'
                                        }
                                    }
                                });
						</script>
					</div>
				</div>

				<div class="pb50 relative">
					<h3 class="noBorder">KBO 공격력 순위</h3>
					<div class="select" style="top:0;right:107px;">
						<p><span class="pp"><?=date('Y');?></span><span class="pa"></span></p>
						<ul>
							<li class=""><a href=""><?=date('Y');?></a></li>
						</ul>
					</div>
					<div class="select" style="top:0;right:0;">
						<p><span class="pp">정규시즌</span><span class="pa"></span></p>
						<ul>
							<li class=""><a href="">정규시즌</a></li>
						</ul>
					</div>
					<div class="table_w2 table_w2_1 relative">
						<div class="relative">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="48px"/>
									<col width="110px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="80px"/>
									<col width="100px"/>
									<col width="53px"/>
									<col width="80px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="70px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="of_1" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/avg/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=1')">타율</span></th>
									<th><span class="of_2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/g/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=2')">경기</span></th>
									<th><span class="of_3" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/pa/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=3')">타석</span></th>
									<th><span class="of_4" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/ab/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=4')">타수</span></th>
									<th><span class="of_5" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/r/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=5')">득점</span></th>
									<th><span class="of_6" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/h/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=6')">안타</span></th>
									<th><span class="of_7" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/second_b/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=7')">2루타</span></th>
									<th><span class="of_8" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/third_b/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=8')">3루타</span></th>
									<th><span class="of_9" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/hr/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=9')">홈런</span></th>
									<th><span class="of_10" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/tb/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=10')">루타</span></th>
									<th><span class="of_11" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/rbi/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=11')">타점</span></th>
									<th><span class="of_12" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sac/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=12')">희생번트</span></th>
									<th><span class="of_13" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sf/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=13')">희생플라이</span></th>
									<th><span class="of_14" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/bb/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=14')">볼넷</span></th>
									<th><span class="of_15" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/ibb/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=15')">고의4구</span></th>
									<th><span class="of_16" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/hbp/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=16')">사구</span></th>
									<th><span class="of_17" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/so/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=17')">삼진</span></th>
									<th><span class="of_18" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/gdp/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=18')">병살타</span></th>
								</tr>
								<?php foreach($offense as $entry): ?>
									<tr>
										<td><?=$entry->rank?></td>
										<td><?=$entry->team?></td>
										<td class="of_1"><?=number_format($entry->avg,3)?></td>
										<td class="of_2"><?=$entry->g?></td>
										<td class="of_3"><?=$entry->pa?></td>
										<td class="of_4"><?=$entry->ab?></td>
										<td class="of_5"><?=$entry->r?></td>
										<td class="of_6"><?=$entry->h?></td>
										<td class="of_7"><?=$entry->second_b?></td>
										<td class="of_8"><?=$entry->third_b?></td>
										<td class="of_9"><?=$entry->hr?></td>
										<td class="of_10"><?=$entry->tb?></td>
										<td class="of_11"><?=$entry->rbi?></td>
										<td class="of_12"><?=$entry->sac?></td>
										<td class="of_13"><?=$entry->sf?></td>
										<td class="of_14"><?=$entry->bb?></td>
										<td class="of_15"><?=$entry->ibb?></td>
										<td class="of_16"><?=$entry->hbp?></td>
										<td class="of_17"><?=$entry->so?></td>
										<td class="of_18"><?=$entry->gdp?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="next_table" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="50px"/>
									<col width="100px"/>
									<col width="130px"/>
									<col width="60px"/>
									<col width="60px"/>
									<col width="83px"/>
									<col width="100px"/>
									<col width="68px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="100px"/>
									<col width="70px"/>
									<col width="70px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="of_19" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/ops/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=19')">출루율+장타율</span></th>
									<th><span class="of_20" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/slg/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=20')">출루율</span></th>
									<th><span class="of_21" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/obp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=21')">장타율</span></th>
									<th><span class="of_22" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/mh/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=22')">멀티히트</span></th>
									<th><span class="of_23" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/risp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=23')">득점권타율</span></th>
									<th><span class="of_24" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/phba/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=24')">대타타율</span></th>
									<th><span class="of_25" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sba/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=25')">도루시도</span></th>
									<th><span class="of_26" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sb/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=26')">도루허용</span></th>
									<th><span class="of_27" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/cs/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=27')">도루실패</span></th>
									<th><span class="of_28" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sbp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=28')">도루성공률</span></th>
									<th><span class="of_29" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/oob/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=29')">주루사</span></th>
									<th><span class="of_30" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/pko/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=30')">견제사</span></th>
								</tr>
								<?php foreach($offense as $entry): ?>
									<tr>
										<td><?=$entry->rank?></td>
										<td><?=$entry->team?></td>
										<td class="of_19"><?=number_format($entry->ops,3)?></td>
										<td class="of_20"><?=number_format($entry->slg,3)?></td>
										<td class="of_21"><?=number_format($entry->obp,3)?></td>
										<td class="of_22"><?=$entry->mh?></td>
										<td class="of_23"><?=number_format($entry->risp,3)?></td>
										<td class="of_24"><?=number_format($entry->phba,3)?></td>
										<td class="of_25"><?=$entry->sba?></td>
										<td class="of_26"><?=$entry->sb?></td>
										<td class="of_27"><?=$entry->cs?></td>
										<td class="of_28"><?=number_format($entry->sbp,1)?>%</td>
										<td class="of_29"><?=$entry->oob?></td>
										<td class="of_30"><?=$entry->pko?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable"><a href=""></a></p>
					</div>
				</div>

				<div class="pb50 relative">
					<h3 class="noBorder">KBO 수비력 순위</h3>
					<div class="select" style="top:0;right:107px;">
						<p><span class="pp"><?=date('Y');?></span><span class="pa"></span></p>
						<ul>
							<li class=""><a href=""><?=date('Y');?></a></li>
						</ul>
					</div>
					<div class="select" style="top:0;right:0;">
						<p><span class="pp">정규시즌</span><span class="pa"></span></p>
						<ul>
							<li class=""><a href="">정규시즌</a></li>
						</ul>
					</div>
					<div class="table_w2 table_w2_2 relative">
						<div class="relative">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="100px"/>
									<col width="68px"/>
									<col width="48px"/>
									<col width="48px"/>
									<col width="48px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="160px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/era?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=1')">평균자책</span></th>
									<th><span class="pr_2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/g?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=2')">경기</span></th>
									<th><span class="pr_3" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/w?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=3')">승리</span></th>
									<th><span class="pr_4" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/l?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=4')">패</span></th>
									<th><span class="pr_5" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sv?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=5')">세이브</span></th>
									<th><span class="pr_6" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/hld?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=6')">홀드</span></th>
									<th><span class="pr_7" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/wpct?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=7')">승률</span></th>
									<th><span class="pr_8" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/ip?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=8')">이닝</span></th>
									<th><span class="pr_9" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/h?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=9')">피안타</span></th>
									<th><span class="pr_10" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/hr?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=10')">피홈런</span></th>
									<th><span class="pr_11" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/bb?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=11')">볼넷</span></th>
									<th><span class="pr_12" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/hbp?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=12')">사구</span></th>
									<th><span class="pr_13" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/so?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=13')">삼진</span></th>
									<th><span class="pr_14" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/r?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=14')">실점</span></th>
									<th><span class="pr_15" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/er?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=15')">자책점</span></th>
									<th><span class="pr_16" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/whip?scroll_top='+document.body.scrollTop+'&focus=defence1&bold_num=16')">출루허용률(이닝)</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td class="pr_1"><?=number_format($entry->era,2);?></td>
										<td class="pr_2"><?=$entry->g;?></td>
										<td class="pr_3"><?=$entry->w;?></td>
										<td class="pr_4"><?=$entry->l;?></td>
										<td class="pr_5"><?=$entry->sv;?></td>
										<td class="pr_6"><?=$entry->hld;?></td>
										<td class="pr_7"><?=number_format($entry->wpct,3);?></td>
										<td class="pr_8"><?=$entry->ip;?></td>
										<td class="pr_9"><?=$entry->h;?></td>
										<td class="pr_10"><?=$entry->hr;?></td>
										<td class="pr_11"><?=$entry->bb;?></td>
										<td class="pr_12"><?=$entry->hbp;?></td>
										<td class="pr_13"><?=$entry->so;?></td>
										<td class="pr_14"><?=$entry->r;?></td>
										<td class="pr_15"><?=$entry->er;?></td>
										<td class="pr_16"><?=number_format($entry->whip,2);?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="next_table" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="130px"/>
									<col width="78px"/>
									<col width="57px"/>
									<col width="75px"/>
									<col width="57px"/>
									<col width="90px"/>
									<col width="60px"/>
									<col width="50px"/>
									<col width="78px"/>
									<col width="56px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="75px"/>
									<col width="56px"/>
									<col width="56px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_17" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/avg?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=17')">피안타율</span></th>
									<th><span class="pr_18" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/cg?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=18')">완투</span></th>
									<th><span class="pr_19" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sho?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=19')">완봉</span></th>
									<th><span class="pr_20" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/qs?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=20')">QS</span></th>
									<th><span class="pr_21" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/bsv?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=21')">블론세이브</span></th>
									<th><span class="pr_22" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/tbf?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=22')">타자수</span></th>
									<th><span class="pr_23" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/np?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=23')">투구수</span></th>
									<th><span class="pr_24" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/second_b?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=24')">2루타</span></th>
									<th><span class="pr_25" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/third_b?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=25')">3루타</span></th>
									<th><span class="pr_26" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sac?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=26')">희생번트</span></th>
									<th><span class="pr_27" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sf?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=27')">희생플라이</span></th>
									<th><span class="pr_28" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/ibb?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=28')">고의4구</span></th>
									<th><span class="pr_29" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/wp?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=29')">폭투</span></th>
									<th><span class="pr_30" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/bk?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=30')">보크</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td class="pr_17"><?=number_format($entry->avg,3);?></td>
										<td class="pr_18"><?=$entry->cg;?></td>
										<td class="pr_19"><?=$entry->sho;?></td>
										<td class="pr_20"><?=$entry->qs;?></td>
										<td class="pr_21"><?=$entry->bsv;?></td>
										<td class="pr_22"><?=$entry->tbf;?></td>
										<td class="pr_23"><?=$entry->np;?></td>
										<td class="pr_24"><?=$entry->second_b;?></td>
										<td class="pr_25"><?=$entry->third_b;?></td>
										<td class="pr_26"><?=$entry->sac;?></td>
										<td class="pr_27"><?=$entry->sf;?></td>
										<td class="pr_28"><?=$entry->ibb;?></td>
										<td class="pr_29"><?=$entry->wp;?></td>
										<td class="pr_30"><?=$entry->bk;?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable nextTable1"><a href=""></a></p>
						<div class="next_table2" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="130px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="106px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_31" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/e?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=31')">실책</span></th>
									<th><span class="pr_32" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/pko?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=32')">견제사</span></th>
									<th><span class="pr_33" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/po?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=33')">자살</span></th>
									<th><span class="pr_34" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/a?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=34')">보살</span></th>
									<th><span class="pr_35" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/dp?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=35')">병살</span></th>
									<th><span class="pr_36" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/fpct?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=36')">수비율</span></th>
									<th><span class="pr_37" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/pb?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=37')">포일</span></th>
									<th><span class="pr_38" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sb?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=38')">도루허용</span></th>
									<th><span class="pr_39" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/cs?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=39')">도루실패</span></th>
									<th><span class="pr_40" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/csp?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=40')">도루저지율</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td class="pr_31"><?=$entry->e;?></td>
										<td class="pr_32"><?=$entry->pko;?></td>
										<td class="pr_33"><?=$entry->po;?></td>
										<td class="pr_34"><?=$entry->a;?></td>
										<td class="pr_35"><?=$entry->dp;?></td>
										<td class="pr_36"><?=number_format($entry->fpct,3);?></td>
										<td class="pr_37"><?=$entry->pb;?></td>
										<td class="pr_38"><?=$entry->sb;?></td>
										<td class="pr_39"><?=$entry->cs;?></td>
										<td class="pr_40"><?=number_format($entry->csp,1);?>%</td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable nextTable2" style="display:none;"><a href=""></a></p>
						<p class="nextTable nextTable3" style="display:none;"><a href=""></a></p>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    if('<?=$mouseTop;?>'!='') document.body.scrollTop=<?=$mouseTop;?>;

    var selector_name='';
    if('<?=$focus;?>'=='offense1'){
        selector_name = '.of_';
    }else if('<?=$focus;?>'=='offense2'){
        selector_name = '.of_';
        $(".next_table").slideDown();
    }else if('<?=$focus;?>'=='defence1'){
        selector_name = '.pr_';
    }else if('<?=$focus;?>'=='defence2'){
        selector_name = '.pr_';
        $(".next_table").slideDown();
    }else if('<?=$focus;?>'=='defence3'){
        selector_name = '.pr_';
        $(".next_table2").slideDown();
        $(".nextTable3").css("display","block");
    }

    if('<?=$bold_num;?>'!=0) selector_name=selector_name+'<?=$bold_num;?>';
    $(selector_name).css("font-weight","bold");
    $(selector_name).css("color","black");

	//date
	$(".date_num").click(function(){
		var state = $(this).next().css('display');
		if(state=='none'){
			$(this).addClass("on");
			$(this).siblings().removeClass("on");
			$(this).parent().find(".date_ul").slideUp();
			$(this).next().slideDown();
			return false;
		}else{
		    $(this).next().slideUp();
        }
	});
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
