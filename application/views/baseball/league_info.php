<?php $days_in_korean=array("일", "월", "화", "수", "목", "금", "토"); ?>
<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
	<div class="topTitle">
		<p>
			<span>리그정보 - 야구 - <?=($league=='KBO')? '대한민국' : 'USA';?></span>
			<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
		</p>
		<h2 class="tit02">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?></h2>
	</div>
	<div class="game_w">
		<ul class="tab01 gameMain">
			<li class="on"><a href="/baseball/league_info/<?=($league=='KBO')? 'KBO' : 'MLB';?>">리그정보</a></li>
			<li><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB';?>/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
			<li><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB';?>">선수 기록</a></li>
			<li><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB';?>">상대 전적</a></li>
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
								<th colspan="2" class="left pl20">
                                    <?php
                                        if($league=='KBO'): echo $schedule['date'][$i]->date;
                                        else:
                                            $exp=explode('-', $schedule['date'][$i]->date);
                                            echo $exp[1].'.'.$exp[2].'('.$days_in_korean[date("w")].')';
                                        endif;
                                    ?>
                                </th>
								<th>B’s</th>
								<th>승</th>
								<th>패</th>
								<th>&nbsp;</th>
								<th>over</th>
								<th class="left pl5">under</th>
								<th>DATA</th>
							</tr>
							<?php foreach($schedule['schedule'] as $item): if($schedule['date'][$i]->date==$item->date): ?>
								<tr>
									<td>
                                        <?php
                                            if($league=='KBO'): echo $item->time;
                                            else:
                                                $exp=explode(':', $item->time);
                                                echo $exp[0].':'.$exp[1];
                                            endif;
                                        ?>
                                    </td>
									<td class="left pl20"><a href="/baseball/player_hitter?team=<?=$item->away;?>"><?=$item->away;?></a> vs <a href="/baseball/player_hitter?team=<?=$item->home;?>"><?=$item->home;?></a></td>
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
                                        <?php include('team_detail/match_2_3.php'); ?>
									</td>
								</tr>
							<?php endif; endforeach; ?>
						</table>
					<?php endfor; ?>
				</div>
				<div class="pb50 relative" style="margin-left:0;">
					<h3>2017 <?=($league=='KBO')? 'KBO' : 'MLB';?> 리그 테이블</h3>
<!--				<p class="more" style="left:auto;right:0;">"리그통계" 메뉴에서 더 많은 통계를 확인할 수 있습니다</p>-->
                    <?php if($league=='KBO'): ?>
                        <ul class="tab_view01 LastGame_view Team" style="margin-top:3px;">
                            <li class="active ranking ss1">
                                <div class="tab2_w">
                                    <ul class="tab02">
                                        <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&sort=<?=$sort;?>&duration=<?=$duration;?>&home_away=all')">전체</a></li>
                                        <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&sort=<?=$sort;?>&home_away=home')">홈</a></li>
                                        <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&sort=<?=$sort;?>&home_away=away')">원정</a></li>
                                    </ul>
                                    <div class="select" style="top:-7px;">
                                        <p class="off"><span class="pp"><?php if($duration=='all') echo '시즌 전체'; else echo $duration.'경기';?></span><span class="pa"></span></p>
                                            <ul>
                                                <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=all&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">시즌 전체</a></li>
                                                <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=10&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">10경기</a></li>
                                                <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=20&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">20경기</a></li>
                                                <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=30&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">30경기</a></li>
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
                                                <?php if($league=='KBO'): ?><col width="65px"/><?php endif; ?>
                                                <col width="75px"/>
                                                <col width="61px"/>
                                                <col width="68px"/>
                                                <col width="270px"/>
                                            </colgroup>
                                            <tr>
                                                <th>순위</th>
                                                <th class="left">팀</th>
                                                <th>경기수</th>
                                                <th><span class="n1 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win_rate')">승률</a></span></th>
                                                <th><span class="n2 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win')">승</a></span></th>
                                                <th><span class="n3 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=lose')">패</a></span></th>
                                                <?php if($league=='KBO'): ?><th><span class="n4 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=tie')">타이</a></span></th><?php endif; ?>
                                                <th><span class="n5 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=plus')">득:실</a></span></th>
                                                <th><span class="n6 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=margin')">마진</a></span></th>
                                                <th><span class="n7 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=game_car')">게임차</a></span></th>
                                                <th>최근 10경기</th>
                                            </tr>
                                            <?php foreach($total as $entry): ?>
                                                <tr>
                                                    <?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4| $entry->rank==5): if($entry->rank==5) $rank_color=4; else $rank_color=$entry->rank; ?>
                                                        <td><span class="rankdot0<?=$rank_color;?>_color"><b><?=$entry->rank;?></b></span></td>
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
                                                            foreach($exp as $key=>$value):
                                                                if($value=='승') echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_win.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
                                                                elseif($value=='패') echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
                                                                else echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
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
                    <?php else: ?>
                        <ul class="tab_view01 LastGame_view Team" style="margin-top:3px;">
                            <li class="active ranking ss1">
                                <div class="tab2_w">
                                    <ul class="tab02">
                                        <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&sort=<?=$sort;?>&duration=<?=$duration;?>&home_away=all')">전체</a></li>
                                        <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&sort=<?=$sort;?>&home_away=home')">홈</a></li>
                                        <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&sort=<?=$sort;?>&home_away=away')">원정</a></li>
                                    </ul>
                                    <div class="select" style="top:-7px;">
                                        <p class="off"><span class="pp"><?php if($duration=='all') echo '시즌 전체'; else echo $duration.'경기';?></span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=all&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">시즌 전체</a></li>
                                            <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=10&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">10경기</a></li>
                                            <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=20&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">20경기</a></li>
                                            <li><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=30&home_away=<?=$home_away;?>&sort=<?=$sort;?>')">30경기</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <?php foreach($total as $key=>$items): ?>
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
                                                <?php if($league=='KBO'): ?><col width="65px"/><?php endif; ?>
                                                <col width="75px"/>
                                                <col width="61px"/>
                                                <col width="68px"/>
                                                <col width="270px"/>
                                            </colgroup>
                                            <tr>
                                                <th>순위</th>
                                                <th class="left">팀</th>
                                                <th>경기수</th>
                                                <th><span class="n1 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win_rate')">승률</a></span></th>
                                                <th><span class="n2 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=win')">승</a></span></th>
                                                <th><span class="n3 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=lose')">패</a></span></th>
                                                <?php if($league=='KBO'): ?><th><span class="n4 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=tie')">타이</a></span></th><?php endif; ?>
                                                <th><span class="n5 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=plus')">득:실</a></span></th>
                                                <th><span class="n6 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=margin')">마진</a></span></th>
                                                <th><span class="n7 rn"><a href="javascript:location.replace('/baseball/league_info/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&sort=game_car')">게임차</a></span></th>
                                                <th>최근 10경기</th>
                                            </tr>
                                            <?php foreach($items as $entry): ?>
                                                <tr>
                                                    <?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4| $entry->rank==5): if($entry->rank==5) $rank_color=4; else $rank_color=$entry->rank; ?>
                                                        <td><span class="rankdot0<?=$rank_color;?>_color"><b><?=$entry->rank;?></b></span></td>
                                                    <?php elseif($entry->rank==4): ?><td><span class="rankdot04_color"><b><?=$entry->rank;?></b></span></td>
                                                    <?php else: ?><td><?=$entry->rank;?></td><?php endif; ?>
                                                    <td><?=$entry->team;?></td>
                                                    <td <?php if($sort=='g') echo 'style="font-weight:bold;"';?>><?php if($duration=='all' && $home_away=='all') echo $entry->win+$entry->lose+$entry->tie; else echo $entry->g;?></td>
                                                    <td <?php if($sort=='win_rate') echo 'style="font-weight:bold;"'; else echo 'style="font-weight:normal;"';?>><?=number_format($entry->win_rate,3);?></td>
                                                    <td <?php if($sort=='win') echo 'style="font-weight:bold;"';?>><?=$entry->win;?></td>
                                                    <td <?php if($sort=='lose') echo 'style="font-weight:bold;"';?>><?=$entry->lose;?></td>
                                                    <td <?php if($sort=='plus') echo 'style="font-weight:bold;"';?>><?=$entry->plus;?>:<?=$entry->minus;?></td>
                                                    <td <?php if($sort=='margin') echo 'style="font-weight:bold;"';?>><?=$entry->margin;?></td>
                                                    <td <?php if($sort=='game_car') echo 'style="font-weight:bold;"';?>><?=$entry->game_car;?></td>
                                                    <td>
                                                        <?php
                                                        $exp=explode(';', $entry->recent_game);
                                                        foreach($exp as $key=>$value):
                                                            if($value=='승') echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_win.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
                                                            elseif($value=='패') echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
                                                            else echo '<a href="/baseball/match_information/'.$entry->recent_detail[9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" title="'.$entry->recent_detail[9-$key]["away"].' '.$entry->recent_detail[9-$key]["away_score"].":".$entry->recent_detail[9-$key]["home_score"].' '.$entry->recent_detail[9-$key]["home"].'"/></a>';
                                                        endforeach;
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <?php
                                            if($sort=='win_rate'): $sort_num='2';
                                            elseif($sort=='win'): $sort_num='3';
                                            elseif($sort=='lose'): $sort_num='4';
                                            elseif($sort=='plus'): $sort_num='5';
                                            elseif($sort=='margin'): $sort_num='6';
                                            elseif($sort=='game_car'): $sort_num='7'; endif;
                                        ?>
                                        <div class="redline n<?=$sort_num;?>">
                                            <span class="bt"></span>
                                            <span class="bl"></span>
                                            <span class="br"></span>
                                            <span class="bb"></span>
                                        </div>
                                    </div><br>
                                    <?php endforeach; ?>
                                </li>
                            </ul>
                    <?php endif; ?>
				</div>
				<div class="pb50">
					<h3>2017 <?=($league=='KBO')? 'KBO' : 'MLB';?> 리그요약</h3>
					<div class="tableNtable pt10">
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>승률 통계</th>
								<th>경기</th>
								<th>승</th>
								<th>승률</th>
							</tr>
							<tr>
								<td>홈팀 승</td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['home_win'];?></td>
								<td><?php $home_per=number_format($league_statistics['home_win']/$league_statistics['g'],3); echo $home_per;?></td>
							</tr>
							<tr>
								<td>원정팀 승</td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['away_win'];?></td>
								<td><?php $away_per=number_format($league_statistics['away_win']/$league_statistics['g'],3); echo $away_per;?></td>
							</tr>
							<tr>
								<td>타이</td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['draw'];?></td>
								<td><?=number_format(100-($home_per*100+$away_per*100),0);?>%</td>
							</tr>
						</table>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
                            <tr>
                                <th><?=$handicap;?> 핸디캡 승률</th>
                                <th>경기</th>
                                <th>승</th>
                                <th>승률</th>
                            </tr>
							<tr>
								<td>홈팀 승</td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['handicap_home_win'];?></td>
								<td><?=number_format($league_statistics['handicap_home_win']/$league_statistics['g'], 3);?>%</td>
							</tr>
							<tr>
								<td>원정팀 승</td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['handicap_away_win'];?></td>
								<td><?=number_format($league_statistics['handicap_home_win']/$league_statistics['g'], 3);?>%</td>
							</tr>
                            <tr>
                                <td>타이</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
						</table>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="*"/><col width="25%"/><col width="25%"/>
                            </colgroup>
                            <tr>
                                <th>득점 통계</th>
                                <th>경기</th>
                                <th>득점</th>
                                <th>경기당</th>
                            </tr>
                            <tr>
                                <td>전체 득점</td>
                                <td><?=$league_statistics['g'];?></td>
                                <td><?=$league_statistics['home_total_score']+$league_statistics['away_total_score'];?></td>
                                <td><?=number_format(($league_statistics['home_total_score']+$league_statistics['away_total_score'])/($league_statistics['g']),2);?></td>
                            </tr>
                            <tr>
                                <td>홈 득점</td>
                                <td><?=$league_statistics['g'];?></td>
                                <td><?=$league_statistics['home_total_score'];?></td>
                                <td><?=number_format($league_statistics['home_total_score']/($league_statistics['g']),2);?></td>
                            </tr>
                            <tr>
                                <td>원정 득점</td>
                                <td><?=$league_statistics['g'];?></td>
                                <td><?=$league_statistics['away_total_score'];?></td>
                                <td><?=number_format($league_statistics['away_total_score']/($league_statistics['g']),2);?></td>
                            </tr>
                        </table>
						<table class="table_default">
							<caption></caption>
							<colgroup>
								<col width="*"/><col width="25%"/><col width="25%"/>
							</colgroup>
							<tr>
								<th>O/U 통계</th>
								<th>경기</th>
								<th>오버</th>
								<th>확률</th>
							</tr>
							<tr>
								<td>오버 <?=$over_under_reference_value-1;?></td>
								<td><?=$league_statistics['g'];?></td>
								<td><?=$league_statistics['over_minus_one'];?></td>
								<td><?=number_format($league_statistics['over_minus_one']/$league_statistics['g']*100);?>%</td>
							</tr>
							<tr>
								<td>오버 <?=$over_under_reference_value;?></td>
                                <td><?=$league_statistics['g'];?></td>
                                <td><?=$league_statistics['over'];?></td>
                                <td><?=number_format($league_statistics['over']/$league_statistics['g']*100);?>%</td>
							</tr>
                            <tr>
								<td>오버 <?=$over_under_reference_value+1;?></td>
                                <td><?=$league_statistics['g'];?></td>
                                <td><?=$league_statistics['over_plus_one'];?></td>
                                <td><?=number_format($league_statistics['over_plus_one']/$league_statistics['g']*100);?>%</td>
							</tr>
						</table>
					</div>
					<div class="clear"></div>
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