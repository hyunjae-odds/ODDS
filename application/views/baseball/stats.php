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
            <li><a href="/baseball/league_info/">리그정보</a></li>
            <li><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/stats/">리그 통계</a></li>
            <li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
            <li><a href="/baseball/player_record/">선수 기록</a></li>
            <li><a href="/baseball/score/">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s4 active" style="padding-top:40px;">
                <div class="tab01_w">
                    <ul class="tab01_2 TLS">
                        <li class="on ls01"><a href="/baseball/stats?inning=<?=$inning;?>&duration=<?=$duration;?>&home_away=<?=$home_away;?>&handicap=0">승패</a></li>
                        <li class="ls02"><a href="/baseball/stats?inning=<?=$inning;?>&duration=<?=$duration;?>&home_away=<?=$home_away;?>&handicap=1.5">핸디캡</a></li>
                        <li class="ls03"><a href="javascript:void(0);">O/U</a></li>
                    </ul>
                </div>
                <ul class="LS_view_w">
                    <li class="active ls01_w"><!--  승패  -->
                        <div style="position:relative;">
                            <ul class="LS_view">
                                <li class="active ls_all">
                                    <ul class="firTab">
                                        <li class="<?php if($inning=='all') echo 'on';?> r_tit1_1"><a href="/baseball/stats?inning=all&duration=<?=$duration;?>&home_away=<?=$home_away;?>&handicap=<?=$handicap;?>">전체 결과</a></li>
                                        <li class="<?php if($inning=='half') echo 'on';?> r_tit1_2"><a href="/baseball/stats?inning=half&duration=<?=$duration;?>&home_away=<?=$home_away;?>&handicap=<?=$handicap;?>">5이닝 결과</a></li>
                                        <li class="<?php if($inning=='first') echo 'on';?> r_tit1_3"><a href="/baseball/stats?inning=first&duration=<?=$duration;?>&home_away=<?=$home_away;?>&handicap=<?=$handicap;?>">1이닝 결과</a></li>
                                    </ul>
                                    <div>
                                        <ul class="r_tit1_view">
                                            <li class="ls01_1 active"><!-- 전체 -->
                                                <div class="tab2_w">
                                                    <ul class="tab02 LS_tab">
                                                        <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="/baseball/stats?inning=<?=$inning;?>&duration=<?=$duration;?>&home_away=all&handicap=<?=$handicap;?>">전체</a></li>
                                                        <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="/baseball/stats?inning=<?=$inning;?>&duration=<?=$duration;?>&home_away=home&handicap=<?=$handicap;?>">홈</a></li>
                                                        <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="/baseball/stats?inning=<?=$inning;?>&duration=<?=$duration;?>&home_away=away&handicap=<?=$handicap;?>">원정</a></li>
                                                    </ul>
                                                </div>
                                                <?php
                                                    $on1='';
                                                    $on15='';
                                                    $on2='';
                                                    $on25='';
                                                    if($handicap==1) $on1='on';
                                                    else if($handicap==1.5) $on15='on';
                                                    else if($handicap==2) $on2='on';
                                                    else if($handicap==2.5) $on25='on';
                                                    if($handicap!=0): echo '<ul class="r_tit2"><li class="ls01_tab_1 '.$on1.'"><a href="/baseball/stats?inning='.$inning.'&duration='.$duration.'&home_away='.$home_away.'&handicap=1">1</a></li><li class="ls01_tab_2 '.$on15.'"><a href="/baseball/stats?inning='.$inning.'&duration='.$duration.'&home_away='.$home_away.'&handicap=1.5">1.5</a></li><li class="ls01_tab_3 '.$on2.'"><a href="/baseball/stats?inning='.$inning.'&duration='.$duration.'&home_away='.$home_away.'&handicap=2">2.0</a></li><li class="ls01_tab_3 '.$on25.'"><a href="/baseball/stats?inning='.$inning.'&duration='.$duration.'&home_away='.$home_away.'&handicap=2.5">2.5</a></li></ul>';
                                                endif; ?>
                                                <div class="select" style="top:-7px;">
                                                    <p><span class="pp"><?php if($duration=='all') echo '시즌 전체'; else echo $duration.'경기';?></span><span class="pa"></span></p>
                                                    <ul>
                                                        <li><a href="javascript:location.replace('/baseball/stats?inning=<?=$inning;?>&home_away=<?=$home_away;?>&duration=all&handicap=<?=$handicap;?>')">시즌 전체</a></li>
                                                        <li><a href="javascript:location.replace('/baseball/stats?inning=<?=$inning;?>&home_away=<?=$home_away;?>&duration=10&handicap=<?=$handicap;?>')">10경기</a></li>
                                                        <li><a href="javascript:location.replace('/baseball/stats?inning=<?=$inning;?>&home_away=<?=$home_away;?>&duration=20&handicap=<?=$handicap;?>')">20경기</a></li>
                                                        <li><a href="javascript:location.replace('/baseball/stats?inning=<?=$inning;?>&home_away=<?=$home_away;?>&duration=30&handicap=<?=$handicap;?>')">30경기</a></li>
                                                    </ul>
                                                </div>
                                                <table class="table_default table_2_left" >
                                                    <caption></caption>
                                                    <colgroup>
                                                        <col width="63px"/>
                                                        <col width="*"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
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
                                                        <th>최근 10경기</th>
                                                    </tr>
                                                    <?php foreach($total as $entry): ?>
                                                        <tr>
                                                            <?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4): ?>
                                                                <td><span class="rankdot0<?=$entry->rank;?>_color"><b><?=$entry->rank;?></b></span></td>
                                                            <?php elseif($entry->rank==4): ?><td><span class="rankdot04_color"><b><?=$entry->rank;?></b></span></td>
                                                            <?php else: ?><td><?=$entry->rank;?></td><?php endif; ?>
                                                            <td><?=$entry->team;?></td>
                                                            <td><?php if($duration=='all' && $home_away=='all') echo $entry->win+$entry->lose+$entry->tie; else echo $entry->g;?></td>
                                                            <td><?=number_format($entry->win_rate,3);?></td>
                                                            <td><?=$entry->win;?></td>
                                                            <td><?=$entry->lose;?></td>
                                                            <td><?=$entry->tie;?></td>
                                                            <td><?=$plus_minus[$entry->team]; ?>:<?=$plus_minus[$entry->team.'_lose'];?></td>
                                                            <td><?=$plus_minus[$entry->team]-$plus_minus[$entry->team.'_lose'];?></td>
                                                            <td><?php $exp=explode(';', $entry->recent_game);
                                                                foreach($exp as $value):
                                                                    if($value=='승') echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
                                                                    elseif($value=='패') echo '<a href="/baseball/match" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
                                                                    else echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
                                                                endforeach; ?>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                </table>
                                                <h3 class="center noBorder pt50">2017 KBO 리그요약<?php if($handicap!=0) echo '(핸디캡)';?></h3>
                                                <table class="table_default mb10">
                                                    <caption></caption>
                                                    <colgroup></colgroup>
                                                    <tr>
                                                        <th class="left pl20">리그 승률</th>
                                                        <th>경기수</th>
                                                        <th>확률</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">홈경기 승리</td>
                                                        <td><?=$league_statistics['home_win'];?></td>
                                                        <td><?php $home_per=number_format($league_statistics['home_win']/($league_statistics['home_win']+$league_statistics['away_win']+$league_statistics['draw'])*100,0); echo $home_per;?>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">원정경기 승리</td>
                                                        <td><?=$league_statistics['away_win'];?></td>
                                                        <td><?php $away_per=number_format($league_statistics['away_win']/($league_statistics['home_win']+$league_statistics['away_win']+$league_statistics['draw'])*100,0); echo $away_per;?>%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">타이</td>
                                                        <td><?=$league_statistics['draw'];?></td>
                                                        <td><?=100-($home_per+$away_per)?>%</td>
                                                    </tr>
                                                </table>
                                                <div class="TOP5">
                                                    <div>
                                                        <h4>홈승률 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
                                                            <?php foreach ($home_win as $key=>$item): if($key<5): ?>
                                                                <li class="td"><p class="top_t"><?=$key;?></p><p class="top_s"><?=$item['home'];?></p><p class="top_g"><?=number_format($item['win_rate'],3);?></p></li>
                                                            <?php endif;endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>원정승률 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
                                                            <?php foreach ($away_win as $key=>$item): if($key<5): ?>
                                                                <li class="td"><p class="top_t"><?=$key;?></p><p class="top_s"><?=$item['away'];?></p><p class="top_g"><?=number_format($item['win_rate'],3);?></p></li>
                                                            <?php endif;endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>득점마진 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
                                                            <?php $count=0; foreach($rank_plus_minus as $key=>$entry): if($entry>4): ?>
                                                                <li class="td"><p class="top_t"><?=$key;?></p><p class="top_s"><?=$plus_minus[$key]; ?>:<?=$plus_minus[$key.'_lose'];?></p><p class="top_g"><?php foreach($total as $item): if($item->team==$key): echo number_format($item->win_rate, 3); endif; endforeach;?></p></li>
                                                            <?php endif;endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>득점마진 하위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
                                                            <?php $count=0; foreach(array_reverse($rank_plus_minus) as $key=>$entry): if($entry<5): ?>
                                                                <li class="td"><p class="top_t"><?=$key;?></p><p class="top_s"><?=$plus_minus[$key]; ?>:<?=$plus_minus[$key.'_lose'];?></p><p class="top_g"><?php foreach($total as $item): if($item->team==$key): echo number_format($item->win_rate, 3); endif; endforeach;?></p></li>
                                                            <?php endif;endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>최근연승 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
                                                            <?php foreach($recent_win as $item): ?>
                                                                <li class="td">
                                                                    <p class="top_t2"><?=$item['team'];?></p>
                                                                    <p class="top_s2">
                                                                        <?php
                                                                        $exp=explode(';', $item['recent']);
                                                                        foreach($exp as $items):
                                                                        ?>
                                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_<?php echo ($items=='승')? 'win.png' : 'dra.png';?>"; alt="" title=""/></a>
                                                                        <?php endforeach; ?>
                                                                    </p>
                                                                    <p class="top_g2"><?=$item['win'];?>연승</p>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>최근연패 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
                                                            <?php foreach($recent_lose as $item): ?>
                                                                <li class="td">
                                                                    <p class="top_t2"><?=$item['team'];?></p>
                                                                    <p class="top_s2">
                                                                        <?php
                                                                        $exp=explode(';', $item['recent']);
                                                                        foreach($exp as $items):
                                                                            ?>
                                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_<?php echo ($items=='패')? 'lose.png' : 'dra.png';?>"; alt="" title=""/></a>
                                                                        <?php endforeach; ?>
                                                                    </p>
                                                                    <p class="top_g2"><?=$item['lose'];?>연패</p>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <p class="clear"></p>
                                                </div>
                                            </li>
                                            <li class="ls01_2 "><!-- 5이닝 -->
                                                <div class="tab2_w">
                                                    <ul class="tab02 LS_tab">
                                                        <li class="on ls_all"><a href="">전체</a></li>
                                                        <li class="ls_home"><a href="">홈</a></li>
                                                        <li class="ls_team"><a href="">원정</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select" style="top:-7px;">
                                                    <p><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                                    <ul>
                                                        <li class=""><a href="">최근 10경기</a></li>
                                                        <li class=""><a href="">최근 15경기</a></li>
                                                        <li class=""><a href="">최근 20경기</a></li>
                                                        <li class=""><a href="">최근 30경기</a></li>
                                                    </ul>
                                                </div>
                                                <table class="table_default table_2_left" >
                                                    <caption></caption>
                                                    <colgroup>
                                                        <col width="63px"/>
                                                        <col width="*"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
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
                                                        <th>최근 10경기</th>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot01_color"><b>1</b></span></td>
                                                        <td>두산 베어스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot02_color"><b>2</b></span></td>
                                                        <td>NC 다이노스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot03_color"><b>3</b></span></td>
                                                        <td>넥센 히어로즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot04_color"><b>4</b></span></td>
                                                        <td>LG 트윈스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot04_color"><b>5</b></span></td>
                                                        <td>KIA 타이거즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>6</b></td>
                                                        <td>SK 와이번스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>7</b></td>
                                                        <td>한화 이글스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>8</b></td>
                                                        <td>롯데 자이언트</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>9</b></td>
                                                        <td>삼성 라이온즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>10</b></td>
                                                        <td>KT 위즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <h3 class="center noBorder pt50">5이닝 리그요약</h3>
                                                <table class="table_default mb10">
                                                    <caption></caption>
                                                    <colgroup></colgroup>
                                                    <tr>
                                                        <th class="left pl20">리그 승률통계</th>
                                                        <th>경기수</th>
                                                        <th>확률</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">홈경기 승리</td>
                                                        <td>125</td>
                                                        <td>57%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">원정경기 승리</td>
                                                        <td>60</td>
                                                        <td>35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">타이</td>
                                                        <td>65</td>
                                                        <td>25%</td>
                                                    </tr>
                                                </table>
                                                <div class="TOP5">
                                                    <div><h4>홈승률 상위 5팀<span></span></h4>
                                                    <ul>
                                                        <li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
                                                    </ul></div>
                                                    <div>
                                                        <h4>원정승률 상위 5팀<span></span></h4>
                                                    <ul>
                                                        <li class="th"><p class="top_t">팀 명</p><p class="top_s">승패</p><p class="top_g">승률</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
                                                    </ul></div>
                                                    <div>
                                                        <h4>득점마진 상위 5팀<span></span></h4>
                                                    <ul>
                                                        <li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
                                                    </ul></div>
                                                    <div>
                                                        <h4>득점마진 하위 5팀<span></span></h4>
                                                    <ul>
                                                        <li class="th"><p class="top_t">팀 명</p><p class="top_s">득 : 실</p><p class="top_g">승률</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.755</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.691</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.667</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.591</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">181 : 110</p><p class="top_g">0.554</p></li>
                                                    </ul></div>
                                                    <div>
                                                        <h4>최근연승 상위 5팀<span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연승</p></li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">14연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">12연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">7연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">6연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">4연승</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <h4>최근연패 상위 5팀<span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">14연패</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">12연패</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">7연패</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">6연패</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">4연패</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p class="clear"></p>
                                                </div>
                                            </li>
                                            <li class="ls01_3 "><!-- 1이닝 -->
                                                <div class="tab2_w">
                                                    <ul class="tab02 LS_tab">
                                                        <li class="on ls_all"><a href="">전체</a></li>
                                                        <li class="ls_home"><a href="">홈</a></li>
                                                        <li class="ls_team"><a href="">원정</a></li>
                                                    </ul>
                                                </div>
                                                <div class="select" style="top:-7px;">
                                                    <p><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                                    <ul>
                                                        <li class=""><a href="">최근 10경기</a></li>
                                                        <li class=""><a href="">최근 15경기</a></li>
                                                        <li class=""><a href="">최근 20경기</a></li>
                                                        <li class=""><a href="">최근 30경기</a></li>
                                                    </ul>
                                                </div>
                                                <table class="table_default table_2_left" >
                                                    <caption></caption>
                                                    <colgroup>
                                                        <col width="63px"/>
                                                        <col width="*"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
                                                        <col width="66px"/>
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
                                                        <th>최근 10경기</th>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot01_color"><b>1</b></span></td>
                                                        <td>두산 베어스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot02_color"><b>2</b></span></td>
                                                        <td>NC 다이노스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot03_color"><b>3</b></span></td>
                                                        <td>넥센 히어로즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot04_color"><b>4</b></span></td>
                                                        <td>LG 트윈스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="rankdot04_color"><b>5</b></span></td>
                                                        <td>KIA 타이거즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>6</b></td>
                                                        <td>SK 와이번스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>7</b></td>
                                                        <td>한화 이글스</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>8</b></td>
                                                        <td>롯데 자이언트</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>9</b></td>
                                                        <td>삼성 라이온즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>10</b></td>
                                                        <td>KT 위즈</td>
                                                        <td>11</td>
                                                        <td>0.657</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>11</td>
                                                        <td>48:29</td>
                                                        <td>+19</td>
                                                        <td>
                                                            <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <h3 class="center noBorder pt50">1이닝 리그요약</h3>
                                                <table class="table_default mb10">
                                                    <caption></caption>
                                                    <colgroup></colgroup>
                                                    <tr>
                                                        <th class="left pl20">리그 승률통계</th>
                                                        <th>경기수</th>
                                                        <th>확률</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">홈경기 승리</td>
                                                        <td>125</td>
                                                        <td>57%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">원정경기 승리</td>
                                                        <td>60</td>
                                                        <td>35%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="left pl20">타이</td>
                                                        <td>65</td>
                                                        <td>25%</td>
                                                    </tr>
                                                </table>
                                                <div class="TOP5">
                                                    <div><h4>무승부 상위 5팀<span></span></h4>
                                                    <ul>
                                                        <li class="th"><p class="top_t">팀 명</p><p class="top_s">승무패</p><p class="top_g">승률</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.755</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.691</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.667</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.591</p></li>
                                                        <li class="td"><p class="top_t">롯데 자이언츠</p><p class="top_s">21승 2무 11패</p><p class="top_g">0.554</p></li>
                                                    </ul></div>
                                                    <div>
                                                        <h4>최근 무승부 상위 5팀<span></span></h4>
                                                        <ul>
                                                            <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">최근 10경기</p><p class="top_g2">연패</p></li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">14연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">12연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">7연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">6연승</p>
                                                            </li>
                                                            <li class="td">
                                                                <p class="top_t2">롯데 자이언츠</p>
                                                                <p class="top_s2">
                                                                    <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a>
                                                                </p>
                                                                <p class="top_g2">4연승</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p class="clear"></p>
                                                </div>
                                            </li>
                                        </ul>
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

<script type="text/javascript">
    $(document).ready(function(){
        if('<?=$handicap;?>'!='0'){
            $(".TLS li").removeClass("on");
            $(".TLS > li.ls02").addClass("on");
        }
    });
</script>