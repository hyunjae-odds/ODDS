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
			<li class=""><a href="/baseball/stats_win_rate/">리그 통계</a></li>
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
                            <th><a <?php if($sort=='g') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=g')">경기수</a></th>
							<th><a <?php if($sort=='win_rate') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=win_rate')">승률</a></th>
							<th><a <?php if($sort=='win') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=win')">승</a></th>
							<th><a <?php if($sort=='lose') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=lose')">패</a></th>
							<th><a <?php if($sort=='tie') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=tie')">타이</a></th>
							<th><a <?php if($sort=='plus') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=plus')">득:실</a></th>
							<th><a <?php if($sort=='margin') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=margin')">마진</a></th>
							<th><a <?php if($sort=='game_car') echo 'style="color:black;"';?> href="javascript:location.replace('/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all?sort=game_car')">게임차</a></th>
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
                                <td><?=$entry->plus;?>:<?=$entry->minus;?></td>
                                <td><?=$entry->margin;?></td>
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
					<h3 class="noBorder">KBO 공격력 순위</h3>
					<div class="select" style="top:0;right:107px;">
						<p><span class="pp"><?=date('Y');?></span><span class="pa"></span></p>
						<ul>
							<li class=""><a href=""><?=date('Y');?></a></li>
						</ul>
					</div>
					<div class="select" style="top:0;right:0;">
						<p class="off"><span class="pp">정규시즌</span><span class="pa"></span></p>
						<ul>
							<li class=""><a href="">정규시즌</a></li>
						</ul>
					</div>
					<div class="table_w2 table_w2_1 relative">
						<div class="relative">
							<table class="table_default table_2_left">
								<caption></caption>
                                <colgroup>
                                    <col width="48px">
                                    <col width="200px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="53px">
                                    <col width="76px">
                                </colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="of_1" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/avg/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=1')">타율</span></th>
									<th><span class="of_2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/g/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=2')">경기</span></th>
									<th><span class="of_3" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/pa/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=3')">타석</span></th>
									<th><span class="of_4" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/ab/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=4')">타수</span></th>
									<th><span class="of_5" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/h/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=5')">안타</span></th>
									<th><span class="of_6" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/second_b/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=6')">2루타</span></th>
									<th><span class="of_7" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/third_b/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=7')">3루타</span></th>
									<th><span class="of_8" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/hr/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=8')">홈런</span></th>
									<th><span class="of_9" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/rbi/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=9')">타점</span></th>
                                    <th><span class="of_10" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/r/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=10')">득점</span></th>
									<th><span class="of_11" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sb/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=11')">도루</span></th>
									<th><span class="of_12" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/bb/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=12')">사사구</span></th>
									<th><span class="of_13" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/so/all?scroll_top='+document.body.scrollTop+'&focus=offense1&bold_num=13')">삼진</span></th>
								</tr>
								<?php foreach($offense as $key=>$entry): ?>
									<tr>
										<td><?=$key+1?></td>
										<td><?=$entry->team?></td>
										<td class="of_1"><?=number_format($entry->avg,3)?></td>
										<td class="of_2"><?=$entry->g?></td>
										<td class="of_3"><?=$entry->pa?></td>
										<td class="of_4"><?=$entry->ab?></td>
										<td class="of_5"><?=$entry->h?></td>
										<td class="of_6"><?=$entry->second_b?></td>
										<td class="of_7"><?=$entry->third_b?></td>
										<td class="of_8"><?=$entry->hr?></td>
										<td class="of_9"><?=$entry->rbi?></td>
										<td class="of_10"><?=$entry->r?></td>
										<td class="of_11"><?=$entry->sb?></td>
										<td class="of_12"><?=$entry->bb+$entry->ibb+$entry->hbp?></td>
										<td class="of_13"><?=$entry->so?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="next_table" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
                                <colgroup>
                                    <col width="48px">
                                    <col width="200px">
                                    <col width="65px">
                                    <col width="65px">
                                    <col width="75px">
                                    <col width="68px">
                                    <col width="83px">
                                    <col width="68px">
                                    <col width="68px">
                                    <col width="68px">
                                    <col width="78px">
                                    <col width="74px">
                                </colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
                                    <th><span class="of_14" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/obp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=14')">장타율</span></th>
                                    <th><span class="of_15" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/slg/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=15')">출루율</span></th>
                                    <th><span class="of_16" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/ops/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=16')">OPS</span></th>
                                    <th><span class="of_17" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/mh/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=17')">멀티히트</span></th>
									<th><span class="of_18" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/risp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=18')">득점권타율</span></th>
									<th><span class="of_19" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/phba/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=19')">대타타율</span></th>
									<th><span class="of_20" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sba/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=20')">도루시도</span></th>
									<th><span class="of_21" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/cs/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=21')">도루실패</span></th>
									<th><span class="of_22" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/sbp/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=22')">도루성공률</span></th>
									<th><span class="of_23" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/oob/all?scroll_top='+document.body.scrollTop+'&focus=offense2&bold_num=23')">주루사</span></th>
								</tr>
								<?php foreach($offense as $key=>$entry): ?>
									<tr>
										<td ><?=$key+1?></td>
										<td><?=$entry->team?></td>
                                        <td class="of_14"><?=number_format($entry->obp,3)?></td>
                                        <td class="of_15"><?=number_format($entry->slg,3)?></td>
                                        <td class="of_16"><?=number_format($entry->ops,3)?></td>
										<td class="of_17"><?=$entry->mh?></td>
										<td class="of_18"><?=number_format($entry->risp,3)?></td>
										<td class="of_19"><?=number_format($entry->phba,3)?></td>
										<td class="of_20"><?=$entry->sba?></td>
										<td class="of_21"><?=$entry->cs?></td>
										<td class="of_22"><?=number_format($entry->sbp,1)?>%</td>
										<td class="of_23"><?=$entry->oob?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable"><a href="javascript:void(0)"></a></p>
					</div>
				</div>

                <div class="pb50 relative">
                    <h3 class="noBorder">KBO 수비력 순위</h3>
                    <div class="select" style="top:0;right:107px;">
                        <p class="off"><span class="pp">2017</span><span class="pa"></span></p>
                        <ul>
                            <li class=""><a href="" onfocus="this.blur();">2017</a></li>
                        </ul>
                    </div>
                    <div class="select" style="top:0;right:0;">
                        <p class="off"><span class="pp">정규시즌</span><span class="pa"></span></p>
                        <ul>
                            <li class=""><a href="" onfocus="this.blur();">정규시즌</a></li>
                        </ul>
                    </div>
                    <div class="table_w2 table_w2_2 relative">
                        <div class="relative">
                            <table class="table_default table_2_left">
                                <caption></caption>
                                <colgroup>
                                    <col width="54px">
                                    <col width="162px">
                                    <col width="63px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="*">
                                </colgroup>
                                <tbody>
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
                                    </tr>
                                    <?php foreach($defence as $key=>$entry): ?>
                                        <tr>
                                            <td><?=$key+1?></td>
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
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="next_table" style="display: none;">
                            <table class="table_default table_2_left">
                                <caption></caption>
                                <colgroup>
                                    <col width="54px">
                                    <col width="162px">
                                    <col width="57px">
                                    <col width="56px">
                                    <col width="75px">
                                    <col width="50px">
                                    <col width="50px">
                                    <col width="50px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>순위</th>
                                        <th>팀</th>
                                        <th><span class="pr_14" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/r?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=14')">실점</span></th>
                                        <th><span class="pr_15" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/er?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=15')">자책점</span></th>
                                        <th><span class="pr_16"><span class="lh2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/whip?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=16')">이닝당<br>출루허용률</span></span></th>
                                        <th><span class="pr_17" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/cg?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=17')">완투</span></th>
                                        <th><span class="pr_18" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sho?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=18')">완봉</span></th>
                                        <th><span class="pr_19" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/qs?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=19')">QS</span></th>
                                        <th><span class="pr_20"><span class="lh2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/bsv?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=20')">블론<br>세이브</span></span></th>
                                        <th><span class="pr_21" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/tbf?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=21')">타자수</span></th>
                                        <th><span class="pr_22" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/np?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=22')">투구수</span></th>
                                        <th><span class="pr_23" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/avg?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=23')">피안타율</span></th>
                                        <th><span class="pr_24"><span class="lh2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/second_b?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=24')">2루타<br>허용</span></span></th>
                                        <th><span class="pr_25"><span class="lh2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/third_b?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=25')">3루타<br>허용</span></span></th>
                                        <th><span class="pr_26"><span class="lh2" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sac?scroll_top='+document.body.scrollTop+'&focus=defence2&bold_num=26')">희생번트<br>허용</span></span></th>
                                    </tr>
                                    <?php foreach($defence as $key=>$entry): ?>
                                        <tr>
                                            <td><?=$key+1?></td>
                                            <td><?=$entry->team;?></td>
                                            <td class="pr_14"><?=$entry->r;?></td>
                                            <td class="pr_15"><?=$entry->er;?></td>
                                            <td class="pr_16"><?=number_format($entry->whip,2);?></td>
                                            <td class="pr_17"><?=$entry->cg;?></td>
                                            <td class="pr_18"><?=$entry->sho;?></td>
                                            <td class="pr_19"><?=$entry->qs;?></td>
                                            <td class="pr_20"><?=$entry->bsv;?></td>
                                            <td class="pr_21"><?=$entry->tbf;?></td>
                                            <td class="pr_22"><?=$entry->np;?></td>
                                            <td class="pr_23"><?=number_format($entry->avg,3);?></td>
                                            <td class="pr_24"><?=$entry->second_b;?></td>
                                            <td class="pr_25"><?=$entry->third_b;?></td>
                                            <td class="pr_26"><?=$entry->sac;?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="next_table2" style="display: none;">
                            <table class="table_default table_2_left">
                                <caption></caption>
                                <colgroup>
                                    <col width="54px">
                                    <col width="162px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="56px">
                                    <col width="*">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th>순위</th>
                                        <th>팀</th>
                                        <th><span class="pr_27" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sf?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=27')"><span class="lh2">희생<br>플라이</span></span></th>
                                        <th><span class="pr_28" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/ibb?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=28')">고의사구</span></th>
                                        <th><span class="pr_29" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/wp?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=29')">폭투</span></th>
                                        <th><span class="pr_30" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/bk?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=30')">보크</span></th>
                                        <th><span class="pr_31" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/e?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=31')">실책</span></th>
                                        <th><span class="pr_32" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/pko?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=32')">견제사</span></th>
                                        <th><span class="pr_33" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/po?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=33')">자살</span></th>
                                        <th><span class="pr_34" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/a?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=34')">보살</span></th>
                                        <th><span class="pr_35" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/dp?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=35')">병살</span></th>
                                        <th><span class="pr_36" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/fpct?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=36')">수비율</span></th>
                                        <th><span class="pr_37" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/pb?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=37')">포일</span></th>
                                        <th><span class="pr_38" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/sb?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=38')">도루허용</span></th>
                                        <th><span class="pr_39" onclick="javascript:location.replace('/baseball/team_record/<?=$select_year;?>/<?=$select_month;?>/all/csp?scroll_top='+document.body.scrollTop+'&focus=defence3&bold_num=39')"><span class="lh2">도루<br>저지율</span></span></th>
                                    </tr>
                                    <?php foreach($defence as $key=>$entry): ?>
                                        <tr>
                                            <td><?=$key+1?></td>
                                            <td><?=$entry->team;?></td>
                                            <td class="pr_27"><?=$entry->sf;?></td>
                                            <td class="pr_28"><?=$entry->ibb;?></td>
                                            <td class="pr_29"><?=$entry->wp;?></td>
                                            <td class="pr_30"><?=$entry->bk;?></td>
                                            <td class="pr_31"><?=$entry->e;?></td>
                                            <td class="pr_32"><?=$entry->pko;?></td>
                                            <td class="pr_33"><?=$entry->po;?></td>
                                            <td class="pr_34"><?=$entry->a;?></td>
                                            <td class="pr_35"><?=$entry->dp;?></td>
                                            <td class="pr_36"><?=$entry->fpct;?></td>
                                            <td class="pr_37"><?=$entry->pb;?></td>
                                            <td class="pr_38"><?=$entry->sb;?></td>
                                            <td class="pr_39"><?=$entry->csp;?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="nextTable nextTable1" style="display: none;"><a href="" onfocus="this.blur();"></a></p>
                        <p class="nextTable nextTable2" style="display: block;"><a href="" onfocus="this.blur();"></a></p>
                        <p class="nextTable nextTable3" style="display: none;"><a href="" onfocus="this.blur();"></a></p>
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
        $(".table_w2_2 .nextTable1 .next_table").slideDown();
    }else if('<?=$focus;?>'=='defence3'){
        selector_name = '.pr_';
        $(".next_table2").slideDown();
        $(".nextTable3").css("display","block");
    }

    if('<?=$bold_num;?>'!=0){
        selector_name = selector_name + '<?=$bold_num;?>';
        $(selector_name).css("font-weight", "bold");
        $(selector_name).css("color", "black");
    }

//	KBO 공격력. 순위력 순위
    $(".table_w2_1 .nextTable a").click(function(){
        $(this).parent().siblings(".next_table").slideToggle();
        return false;
    });
    $(".table_w2_2 .nextTable1 a").click(function(){
        $(this).parent().siblings(".next_table").slideUp();
        $(this).parent().siblings(".next_table2").slideUp();
        $(".nextTable1").css("display","none");
        $(".nextTable3").css("display","none");
        $(".nextTable2").css("display","block");
        return false;
    });
    $(".table_w2_2 .nextTable2 a").click(function(){
        $(this).parent().siblings(".next_table").slideDown();
        $(".nextTable2").css("display","none");
        $(".nextTable1").css("display","none");
        $(".nextTable3").css("display","block");
        return false;
    });
    $(".table_w2_2 .nextTable3 a").click(function(){
        $(this).parent().siblings(".next_table").slideUp();
        $(this).parent().siblings(".next_table2").slideDown();
        $(".nextTable3").css("display","none");
        $(".nextTable2").css("display","none");
        $(".nextTable1").css("display","block");
        return false;
    });
});
</script>
