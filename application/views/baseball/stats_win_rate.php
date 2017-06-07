<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=CURRENT_YEAR;?> KBO</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li><a href="/baseball/league_info/">리그정보</a></li>
            <li><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/stats_win_rate/">리그 통계</a></li>
            <li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
            <li><a href="/baseball/player_record/">선수 기록</a></li>
            <li><a href="/baseball/score/">상대 전적</a></li>
        </ul>
        <div class="relative">
            <ul class="firTab">
                <li class="on"><a href="/baseball/stats_win_rate">리그 승률</a></li>
<!--                <li><a href="/baseball/stats_h?handicap=1.5">리그 안타</a></li>-->
<!--                <li><a href="/baseball/stats_hr">리그 홈런</a></li>-->
            </ul>
            <ul class="tab_view01 gameMain_view">
                <li class="active" style="padding-top:40px;"><!-- 리그 승률 -->
                    <div class="tab01_w">
                        <ul class="tab01_2 TLS">
                            <li class="<?php if($tab_selector==1) echo 'on';?>"><a href="/baseball/stats_win_rate?tab_selector=1">승패</a></li>
                            <li class="<?php if($tab_selector==2) echo 'on';?>"><a href="/baseball/stats_win_rate?handicap=1.5&tab_selector=2">핸디캡</a></li>
                            <li class="<?php if($tab_selector==3) echo 'on';?>"><a href="/baseball/stats_win_rate?tab_selector=3&over_under=<?=$over_under;?>">오버언더</a></li>
                            <li class="<?php if($tab_selector==4) echo 'on';?>"><a href="/baseball/stats_win_rate?tab_selector=4&over_under=<?=$over_under;?>">팀별득점</a></li>
                        </ul>
                    </div>
                    <ul class="LS_view_w">
                        <li class="active"><!-- 승률 _ 승패 -->
                            <div class="pt15">
                                <div class="select inning_select">
                                    <p class="off"><span class="pp is_target"><?php if($inning=='half') echo '5이닝'; else if($inning=='first') echo '1이닝'; else echo '풀타임'; ?></span><span class="pa"></span></p>
                                    <ul>
                                        <li class="is01"><a href="/baseball/stats_win_rate?inning=all&duration=<?=$duration;?>&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">풀타임</a></li>
                                        <li class="is02"><a href="/baseball/stats_win_rate?inning=half&duration=<?=$duration;?>&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">5이닝</a></li>
                                        <li class="is03"><a href="/baseball/stats_win_rate?inning=first&duration=<?=$duration;?>&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">1이닝</a></li>
                                    </ul>
                                </div>
                                <ul class="inning_view">
                                    <li class="iv01 active"><!-- 풀타임 -->
                                        <div class="tab2_w tab2_w_2">
                                            <!--ul class="tab02 LS_tab">
                                                <li class=" "><a href="">1.0</a></li>
                                                <li class=""><a href="">1.5</a></li>
                                                <li class="on"><a href="">2.0</a></li>
                                                <li class=""><a href="">2.5</a></li>
                                            </ul-->
                                        </div>
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp"><?php if($duration==null || $duration=='all') echo '시즌 전체'; else echo '최근 '.$duration.' 경기';?></span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="/baseball/stats_win_rate?inning=<?=$inning;?>&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">시즌 전체</a></li>
                                                <li class=""><a href="/baseball/stats_win_rate?inning=<?=$inning;?>&duration=10&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">최근 10경기</a></li>
                                                <li class=""><a href="/baseball/stats_win_rate?inning=<?=$inning;?>&duration=15&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">최근 15경기</a></li>
                                                <li class=""><a href="/baseball/stats_win_rate?inning=<?=$inning;?>&duration=20&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">최근 20경기</a></li>
                                                <li class=""><a href="/baseball/stats_win_rate?inning=<?=$inning;?>&duration=30&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="6" <?php if($sort_home_away=='all') echo 'style="color:black;"';?>>전체 기록<a class="up_down up" href="/baseball/stats_win_rate?sort_home_away=all&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6" <?php if($sort_home_away=='home') echo 'style="color:black;"';?>>홈 기록<a class="up_down up" href="/baseball/stats_win_rate?sort_home_away=home&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6" <?php if($sort_home_away=='away') echo 'style="color:black;"';?>>원정 기록<a class="up_down up" href="/baseball/stats_win_rate?sort_home_away=away&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>&tab_selector=<?=$tab_selector;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th><th>팀</th>
                                                <?php if($tab_selector==1 || $tab_selector==2): ?>
                                                    <th>경기수</th><th><?=($tab_selector==1)?'승률':'확률';?></th><th>승</th><th>패</th><th>타이</th><th>득:실</th>
                                                    <th>경기수</th><th><?=($tab_selector==1)?'승률':'확률';?></th><th>승</th><th>패</th><th>타이</th><th>득:실</th>
                                                    <th>경기수</th><th><?=($tab_selector==1)?'승률':'확률';?></th><th>승</th><th>패</th><th>타이</th><th>득:실</th>
                                                <?php else: ?>
                                                    <th>경기수</th><th>O%</th><th>오버</th><th>언더</th><th><?=($tab_selector==4)?'득점':'득:실';?></th><th>경기당</th>
                                                    <th>경기수</th><th>O%</th><th>오버</th><th>언더</th><th><?=($tab_selector==4)?'득점':'득:실';?></th><th>경기당</th>
                                                    <th>경기수</th><th>O%</th><th>오버</th><th>언더</th><th><?=($tab_selector==4)?'득점':'득:실';?></th><th>경기당</th>
                                                <?php endif;?>
                                            </tr>
                                            <?php foreach($rank_board as $item): ?>
                                                <tr>
                                                    <td><span class="rankdot0<?=$item['rank'];?>_color"><b><?=$item['rank'];?></b></span></td>
                                                    <td><?=$item['team'];?></td>
                                                    <?php if($tab_selector==1 || $tab_selector==2): ?>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['total_win_rate'];?></td>
                                                        <td><?=$item['total_win'];?></td>
                                                        <td><?=$item['total_lose'];?></td>
                                                        <td><?=$item['total_tie'];?></td>
                                                        <td><?=$item['plus'];?>:<?=$item['minus'];?></td>
                                                        <td><?=$item['home_g'];?></td>
                                                        <td><?=$item['home_win_rate'];?></td>
                                                        <td><?=$item['home_win'];?></td>
                                                        <td><?=$item['home_lose'];?></td>
                                                        <td><?=$item['home_tie'];?></td>
                                                        <td><?=$item['plus_home'];?>:<?=$item['minus_home'];?></td>
                                                        <td><?=$item['away_g'];?></td>
                                                        <td><?=$item['away_win_rate'];?></td>
                                                        <td><?=$item['away_win'];?></td>
                                                        <td><?=$item['away_lose'];?></td>
                                                        <td><?=$item['away_tie'];?></td>
                                                        <td><?=$item['plus_away'];?>:<?=$item['minus_away'];?></td>
                                                    <?php else: ?>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['over_p'];?>%</td>
                                                        <td><?=$item['over'];?></td>
                                                        <td><?=$item['total_g']-$item['over'];?></td>
                                                        <td><?=($tab_selector==4) ? $item['plus'] : $item['plus'].':'.$item['minus'];?></td>
                                                        <td><?=number_format($item['plus']/$item['total_g'],1);?></td>
                                                        <td><?=$item['home_g'];?></td>
                                                        <td><?=$item['home_over_p'];?>%</td>
                                                        <td><?=$item['home_over'];?></td>
                                                        <td><?=$item['home_g']-$item['home_over'];?></td>
                                                        <td><?=($tab_selector==4) ? $item['plus_home'] : $item['plus_home'].':'.$item['minus_home'];?></td>
                                                        <td><?=number_format($item['plus_home']/$item['home_g'],1);?></td>
                                                        <td><?=$item['away_g'];?></td>
                                                        <td><?=$item['away_over_p'];?>%</td>
                                                        <td><?=$item['away_over'];?></td>
                                                        <td><?=$item['away_g']-$item['away_over'];?></td>
                                                        <td><?=($tab_selector==4) ? $item['plus_away'] : $item['plus_away'].':'.$item['minus_away'];?></td>
                                                        <td><?=number_format($item['plus_away']/$item['away_g'],1);?></td>
                                                    <?php endif;?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <h3 class="center noBorder pt50">KBO 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['home_win'];?></p><p class="top_g3"><?=number_format($league_statistics['home_win']/$league_statistics['g'],3);?></p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['away_win'];?></p><p class="top_g3"><?=number_format($league_statistics['away_win']/$league_statistics['g'],3);?></p></li>
                                                    <li class="td"><p class="top_t3">타이</p><p class="top_s3"><?=$league_statistics['tie'];?></p><p class="top_s3">-</p><p class="top_g3"><?=number_format($league_statistics['tie']/$league_statistics['g']*100);?>%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['home_score']+$league_statistics['away_score'];?></p><p class="top_g3"><?=number_format(($league_statistics['home_score']+$league_statistics['away_score'])/$league_statistics['g'],2);?></p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['home_score'];?></p><p class="top_g3"><?=number_format($league_statistics['home_score']/$league_statistics['g'],2);?></p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['away_score'];?></p><p class="top_g3"><?=number_format($league_statistics['away_score']/$league_statistics['g'],2);?></p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
                                                    <li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['handicap_home_win']+$league_statistics['handicap_away_win'];?></p><p class="top_g3"><?=number_format(($league_statistics['handicap_home_win']+$league_statistics['handicap_away_win'])/$league_statistics['g'],3);?></p></li>
                                                    <li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['handicap_home_win'];?></p><p class="top_g3"><?=number_format($league_statistics['handicap_home_win']/$league_statistics['g'],3);?></p></li>
                                                    <li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['handicap_away_win'];?></p><p class="top_g3"><?=number_format($league_statistics['handicap_away_win']/$league_statistics['g'],3);?></p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">오버 <?=$over_under_reference_value-1;?></p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['over'];?></p><p class="top_g3"><?=number_format($league_statistics['over']/$league_statistics['g']*100);?>%</p></li>
                                                    <li class="td"><p class="top_t3">오버 <?=$over_under_reference_value+1;?></p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['over_minus1'];?></p><p class="top_g3"><?=number_format($league_statistics['over_minus1']/$league_statistics['g']*100);?>%</p></li>
                                                    <li class="td"><p class="top_t3">오버 <?=$over_under_reference_value;?></p><p class="top_s3"><?=$league_statistics['g'];?></p><p class="top_s3"><?=$league_statistics['over_plus1'];?></p><p class="top_g3"><?=number_format($league_statistics['over_plus1']/$league_statistics['g']*100);?>%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div>
                                                <h4>홈승률, 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
                                                    <?php foreach ($home_away_win_5['home_win_5'] as $key=>$item): ?>
                                                        <li class="td"><p class="top_t4"><?=$key;?></p><p class="top_s4"><?=$item['win'];?></p><p class="top_s4"><?=$item['lose'];?></p><p class="top_s4"><?=$item['tie'];?></p><p class="top_g4"><?=$item['win_rate'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>원정승률, 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
                                                    <?php foreach ($home_away_win_5['away_win_5'] as $keys=>$item): ?>
                                                        <li class="td"><p class="top_t4"><?=$keys;?></p><p class="top_s4"><?=$item['win'];?></p><p class="top_s4"><?=$item['lose'];?></p><p class="top_s4"><?=$item['tie'];?></p><p class="top_g4"><?=$item['win_rate'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4>리그득점, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
                                                    <?php foreach($get_score_5 as $item): ?>
                                                        <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['g'];?></p><p class="top_s3"><?=$item['get_score'];?></p><p class="top_g3"><?=$item['get_score_by_game'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4>득점마진, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
                                                    <?php foreach($score_margin_5 as $item): ?>
                                                        <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['get_score'];?>:<?=$item['lose_score'];?></p><p class="top_s3"><?=$item['score_margin'];?></p><p class="top_g3"><?=$item['get_score_by_game'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4><?=$over_under_reference_value;?>오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <?php foreach($over_under_statistics as $entries): ?>
                                                        <li class="td"><p class="top_t3"><?=$entries['team'];?></p><p class="top_s3"><?=$entries['g'];?></p><p class="top_s3"><?=$entries['over_under_all_game'];?></p><p class="top_g3"><?=number_format($entries['over_under_all_game']/$entries['g']*100,1);?>%</p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4><?=$over_under_reference_value;?>언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <ul>
                                                        <?php foreach($over_under_statistics_under5 as $entries): ?>
                                                            <li class="td"><p class="top_t3"><?=$entries['team'];?></p><p class="top_s3"><?=$entries['g'];?></p><p class="top_s3"><?=$entries['g']-$entries['over_under_all_game'];?></p><p class="top_g3"><?=number_format(100-($entries['over_under_all_game']/$entries['g']*100),1);?>%</p></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>승패, 최근 10경기 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <?php foreach($recent_10_game_over_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item->team;?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item->recent_game);
                                                                foreach($exp as $items): ?>
                                                                    <a href="javascript:void(0);" class="result_btn"><img src="/public/lib/image/base/btn_<?php if($items=='승') echo 'win'; else if($items=='패') echo 'lose'; else echo 'dra';?>.png" alt="" title=""></a>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item->win;?></span>/<?=$item->lose;?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>승패, 최근 10경기 하위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <?php foreach($recent_10_game_under_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item->team;?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item->recent_game);
                                                                foreach($exp as $items): ?>
                                                                    <a href="javascript:void(0);" class="result_btn"><img src="/public/lib/image/base/btn_<?php if($items=='승') echo 'win'; else if($items=='패') echo 'lose'; else echo 'dra';?>.png" alt="" title=""></a>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item->win;?></span>/<?=$item->lose;?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4><?=$over_under_reference_value;?>오버, 최근 10경기 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <?php foreach($recent_over_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item['team'];?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item['over_under']); foreach($exp as $items): ?>
                                                                    <span class="<?=($items=='o')? 'plus' : 'minus'; ?>L"><?=($items=='o')? 'plus' : 'minus'; ?></span>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item['count'];?></span>/<?=10-$item['count'];?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4><?=$over_under_reference_value;?>언더, 최근 10경기 하위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <?php foreach($recent_under_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item['team'];?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item['over_under']); foreach($exp as $items): ?>
                                                                    <span class="<?=($items=='o')? 'plus' : 'minus'; ?>L"><?=($items=='o')? 'plus' : 'minus'; ?></span>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item['count'];?></span>/<?=10-$item['count'];?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>