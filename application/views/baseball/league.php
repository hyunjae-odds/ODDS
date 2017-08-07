<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
<?php $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS'); ?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 KBO 리그</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class="on"><a href="/baseball/league/KBO">리그정보</a></li>
            <li><a href="/baseball/result/KBO/all/<?=date('m');?>">경기 결과</a></li>
            <li><a href="/baseball/player_record_hitter/KBO">선수 기록</a></li>
            <li><a href="/baseball/score/KBO">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active s1">
                <div class="tab01_w">
                    <ul class="tab01_2 expert_menu">
                        <li class="ls01 <?php if($top_selector=='win_lose') echo 'on';?>" ><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=win_lose')">승패</a></li>
                        <li class="ls02 <?php if($top_selector=='handicap') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=handicap')">핸디캡</a></li>
                        <li class="ls03 <?php if($top_selector=='over_under') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=over_under')">O/U</a></li>
                    </ul>
                </div>
                <ul class="expert_menu_view">
                    <li class="ls01_w">
                        <div class="pb50">
                            <?php for($i=0; $i<count($schedule['date']); $i++): ?>
                                <table class="table_default league_table01">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="80px"/>
                                        <col width="*"/>
                                        <col width="90px"/>
                                        <col width="80px"/>
                                        <col width="55px"/>
                                        <col width="65px"/>
                                    </colgroup>
                                    <tr>
                                        <th><?php setlocale(LC_ALL, "ko_KR.utf-8"); echo $schedule['date'][$i]->date; ?></th>
                                        <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                                        <?php if($top_selector=='handicap'): ?><th><span class="underline">핸디캡</span></th>
                                        <?php elseif($top_selector=='over_under'): ?><th><span class="underline">O/U</span></th><?php endif;?>
                                        <th>승</th>
                                        <th>패</th>
                                        <th>B’s</th>
                                        <th>DATA</th>
                                    </tr>
                                    <?php foreach($schedule['schedule'] as $item): if($schedule['date'][$i]->date==$item->date): ?>
                                        <tr>
                                            <td><?=$item->time; ?></td>
                                            <?php if($item->away=='Los Angeles Angels of Anaheim') $item->away='Los Angeles Angels'; elseif($item->home=='Los Angeles Angels of Anaheim') $item->home='Los Angeles Angels';?>
                                            <td class="left pl20"><a href="/baseball/bet"><?=$full_name_team[$item->away]?> vs <?=$full_name_team[$item->home];?></a></td>
                                            <?php if($item->away=='Los Angeles Angels') $item->away='Los Angeles Angels of Anaheim'; elseif($item->home=='Los Angeles Angels') $item->home='Los Angeles Angels of Anaheim';?>
                                            <?php if($top_selector=='handicap'): ?><td><span class="underline">-1.5</span></td>
                                            <?php elseif($top_selector=='over_under'): ?><td><span class="underline"><?=number_format(($over_under_reference[$item->away]+$over_under_reference[$item->home])/2).'.5';?></span></td><?php endif;?>
                                            <td><span class="">1.93</span></td>
                                            <td>3.15</td>
                                            <td>51</td>
                                            <td><span class="b_BTN5" style="margin-top: 9px;"><a href="javascript:location.replace('/baseball/match/KBO/<?=$item->no;?>/0')">매치정보</a></span></td>
                                        </tr>
                                    <?php endif; endforeach; ?>
                                </table>
                            <?php endfor; ?>
                        </div>
                    </li>
                </ul>
                
                <div class="pb50 relative" style="margin-left:0;">
                    <h3 class="center">2016 KBO리그 통계</h3>
                    <div class="">
                        <div class="relative">
                            <ul class="tab02" style="margin-bottom:10px;">
                                <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=all&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>')">전체</a></li>
                                <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=home&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>')">홈</a></li>
                                <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=away&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>')">원정</a></li>
                            </ul>
                            <div class="select" style="top:-8px;">
                                <p class="off"><span class="pp"><?php if($board_selector=='win_lose') echo '승패'; elseif($board_selector=='handicap') echo '핸디캡'; elseif($board_selector=='ou') echo 'O/U';?></span><span class="pa"></span></p>
                                <ul>
                                    <li><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=win_lose')">승패</a></li>
                                    <li><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=handicap&handicap=-1.5')">핸디캡</a></li>
                                    <li><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=ou&sort=over')">O/U</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="Ltable relative">
                            <?php if($board_selector=='win_lose'): ?>
                                <table class="table_default league_Ltable">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="55px"/>
                                        <col width="190px"/>
                                        <col width="45px"/><col width="40px"/><col width="40px"/><col width="30px"/><col width="40px"/><col width="40px"/><col width="40px"/><col width="45px"/><col width="55px"/><col width="40px"/><col width="260px"/><col width="40px"/>
                                    </colgroup>
                                    <tr>
                                        <th>순위</th>
                                        <th class="left">팀명</th>
                                        <th>경기</th>
                                        <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=win')"><span>승<span class="down"></span></span></a></th>
                                        <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=lose')"><span>패<span class="down"></span></span></a></th>
                                        <th>무</th>
                                        <th>득</th>
                                        <th>실</th>
                                        <th>마진</th>
                                        <th>득/실</th>
                                        <th>승률</th>
                                        <th>승차</th>
                                        <th colspan="2">최근 10경기</th>
                                    </tr>
                                    <?php foreach($total as $entry): ?>
                                        <tr>
                                            <td><?=$entry->rank;?></td>
                                            <td class="left"><span class="<?=$team_initial[$entry->team];?>_L"></span><a href="/baseball/team_info/KBO?team=<?=$entry->team;?>"> <?=$full_name_team[$entry->team];?></td>
                                            <td><?=$entry->g;?></td>
                                            <td><?=$entry->win;?></td>
                                            <td><?=$entry->lose;?></td>
                                            <td><?=$entry->tie;?></td>
                                            <td><?=$entry->plus;?></td>
                                            <td><?=$entry->minus;?></td>
                                            <td><?php if($entry->margin>0) echo '+';?><?=$entry->margin;?></td>
                                            <td><?=number_format(($entry->plus+$entry->minus)/$entry->g, 1);?></td>
                                            <td><?=number_format($entry->win_rate,3);?></td>
                                            <td><?=($entry->game_car==0)? '-' : $entry->game_car;?></td>
                                            <td><?php foreach($entry->recent_game as $key=>$item): ?><a class="result_btn" href="/baseball/match/KBO/<?=$entry->recent_detail[9-$key]['no'];?>/0" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$item;?>.png" title="<?=$entry->recent_detail[9-$key]['away'].' '.$entry->recent_detail[9-$key]['away_score'].':'.$entry->recent_detail[9-$key]['home_score'].' '.$entry->recent_detail[9-$key]['home'];?>"></a><?php endforeach; ?></td>
                                            <td><?=$entry->recent_win;?>/<?=$entry->recent_lose;?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php elseif($board_selector=='handicap'): ?>
                                <table class="table_default league_Ltable">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="55px"/>
                                        <col width="190px"/>
                                        <col width=""/><col width="66px"/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="260px"/><col width="40px"/>
                                    </colgroup>
                                    <tr>
                                        <th>순위</th>
                                        <th class="left">팀명</th>
                                        <th>경기</th>
                                        <th>
                                            <div class="select_w">
                                                <div class="select" style="right:0px;">
                                                    <p class="off"><span class="pp"><?=$handicap;?></span><span class="pa"></span></p>
                                                    <ul>
                                                        <li><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=-1.5')">-1.5</a></li>
                                                        <li><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=1.5')">+1.5</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </th>
                                        <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=win')"><span>승<span class="down"></span></span></a></th>
                                        <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=lose')"><span>패<span class="down"></span></span></a></th>
                                        <th>득</th>
                                        <th>실</th>
                                        <th>계차</th>
                                        <th>승률</th>
                                        <th colspan="2">핸디캡 최근 10경기</th>
                                    </tr>
                                    <?php foreach($total as $entry): ?>
                                        <tr>
                                            <td><?=$entry->rank;?></td>
                                            <td class="left"><span class="<?=$team_initial[$entry->team];?>_L"></span><a href="/baseball/team_info/KBO?team=<?=$entry->team;?>"> <?=$full_name_team[$entry->team];?></td>
                                            <td><?=$entry->g;?></td>
                                            <td><span class="underline"><?php if($handicap>0) echo '+';?><?=$handicap;?></span></td>
                                            <td><?=$entry->win;?></td>
                                            <td><?=$entry->lose;?></td>
                                            <td><?=$entry->plus;?></td>
                                            <td><?=$entry->minus;?></td>
                                            <td><?php if($entry->margin>0) echo '+';?><?=$entry->margin;?></td>
                                            <td><?=number_format($entry->win_rate,3);?></td>
                                            <td><?php foreach($entry->recent_game as $key=>$item): ?><a class="result_btn" href="/baseball/match/KBO/<?=$entry->recent_detail[9-$key]['no'];?>/0" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$item;?>.png" title="<?=$entry->recent_detail[9-$key]['away'].' '.$entry->recent_detail[9-$key]['away_score'].':'.$entry->recent_detail[9-$key]['home_score'].' '.$entry->recent_detail[9-$key]['home'];?>"></a><?php endforeach; ?></td>
                                            <td><?=$entry->recent_win;?>/<?=$entry->recent_lose;?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php elseif($board_selector=='ou'): ?>
                            <table class="table_default league_Ltable league_Ltable_OU">
                                <caption></caption>
                                <colgroup>
                                    <col width="55px"/>
                                    <col width="190px"/>
                                    <col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="260px"/><col width="40px"/>
                                </colgroup>
                                <tr>
                                    <th>순위</th>
                                    <th class="left">팀명</th>
                                    <th>경기</th>
                                    <th>기준점</th>
                                    <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=over')"><span>오버<span class="down"></span></span></a></th>
                                    <th><a href="javascript:location.replace('/baseball/league/KBO?scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$top_selector;?>&board_selector=<?=$board_selector;?>&handicap=<?=$handicap;?>&sort=under')"><span>언더<span class="down"></span></span></a></th>
                                    <th>득/실</th>
                                    <th>오버%</th>
                                    <th colspan="2">O/U 최근 10경기</th>
                                </tr>
                                <?php foreach($total as $entry): ?>
                                    <tr>
                                        <td><?=$entry->rank;?></td>
                                        <td class="left"><span class="<?=$team_initial[$entry->team];?>_L"></span><a href="/baseball/team_info/KBO?team=<?=$entry->team;?>"> <?=$full_name_team[$entry->team];?></td>
                                        <td><?=$entry->g;?></td>
                                        <td><span class="underline"><?=$over_under_reference[$entry->team];?></span></td>
                                        <td><?=$entry->over;?></td>
                                        <td><?=$entry->g-$entry->over;?></td>
                                        <td><?=number_format(($entry->plus+$entry->minus)/$entry->g, 1);?></td>
                                        <td><?=number_format($entry->over/$entry->g*100, 1);?>%</td>
                                        <td><?php foreach($entry->recent_ou as $item): ?><span class="<?=$item;?>L"><?=$item;?></span><?php endforeach; ?></td>
                                        <td><?=$entry->recent_over;?>/<?=10-$entry->recent_over;?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                            <?php endif; ?>

                            <div class="pt50">
                                <h3 class="center noBorder">2017 KBO 리그요약</h3>
                                <div class="tableNtable pt10">
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>리그승률</th>
                                            <th>경기</th>
                                            <th>확률</th>
                                        </tr>
                                        <tr>
                                            <td>홈팀승</td>
                                            <td><?=$league_statistics['home_win'];?></td>
                                            <td><?php $home_per=number_format($league_statistics['home_win']/$league_statistics['g']*100, 1); echo $home_per;?>%</td>
                                        </tr>
                                        <tr>
                                            <td>원정팀승</td>
                                            <td><?=$league_statistics['away_win'];?></td>
                                            <td><?php $away_per=number_format($league_statistics['away_win']/$league_statistics['g']*100, 1); echo $away_per;?>%</td>
                                        </tr>
                                        <tr>
                                            <td>타이</td>
                                            <td><?=$league_statistics['draw'];?></td>
                                            <td><?=100-$home_per-$away_per;?>%</td>
                                        </tr>
                                    </table>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>리그득점</th>
                                            <th>득점</th>
                                            <th>평균</th>
                                        </tr>
                                        <tr>
                                            <td>전체</td>
                                            <td><?=$league_statistics['home_total_score']+$league_statistics['away_total_score'];?></td>
                                            <td><?=number_format(($league_statistics['home_total_score']+$league_statistics['away_total_score'])/($league_statistics['g']),1);?></td>
                                        </tr>
                                        <tr>
                                            <td>홈팀</td>
                                            <td><?=$league_statistics['home_total_score'];?></td>
                                            <td><?=number_format($league_statistics['home_total_score']/($league_statistics['g']),1);?></td>
                                        </tr>
                                        <tr>
                                            <td>원정팀</td>
                                            <td><?=$league_statistics['away_total_score'];?></td>
                                            <td><?=number_format($league_statistics['away_total_score']/($league_statistics['g']),1);?></td>
                                        </tr>
                                    </table>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>핸디캡 <span class="underline">-1.5</span></th>
                                            <th>경기</th>
                                            <th>확률</th>
                                        </tr>
                                        <tr>
                                            <td>홈팀 -1.5승</td>
                                            <td><?=$league_statistics['handicap_home_win'];?></td>
                                            <td><?=number_format($league_statistics['handicap_home_win']/$league_statistics['g']*100, 1);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>원정팀 -1.5승</td>
                                            <td><?=$league_statistics['handicap_away_win'];?></td>
                                            <td><?=number_format($league_statistics['handicap_away_win']/$league_statistics['g']*100, 1);?>%</td>
                                        </tr>
                                    </table>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>오버/언더</th>
                                            <th>경기</th>
                                            <th>확률</th>
                                        </tr>
                                        <tr>
                                            <td>오버 <span class="underline"><?=$over_under_reference_value;?></span></td>
                                            <td><?=$league_statistics['over'];?></td>
                                            <td><?=number_format($league_statistics['over']/$league_statistics['g']*100, 1);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>언더 <span class="underline"><?=$over_under_reference_value;?></span></td>
                                            <td><?=$league_statistics['g']-$league_statistics['over'];?></td>
                                            <td><?=number_format(($league_statistics['g']-$league_statistics['over'])/$league_statistics['g']*100, 1);?>%</td>
                                        </tr>
                                    </table>
                                    <table class="table_default gametable02">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="135px"/><col width="20%"/>
                                        </colgroup>
                                        <tr>
                                            <th class="left">공격력</th>
                                            <th>득점</th>
                                            <th>평균</th>
                                            <th>홈런</th>
                                            <th>타율</th>
                                        </tr>
                                        <?php foreach($offense as $item): ?>
                                            <tr>
                                                <td class="left"><span class="<?=$team_initial[$item->team];?>_L"></span> <?=$item->team;?></td>
                                                <td><?php
                                                    $plus=0;
                                                    foreach($total as $items):
                                                        if($items->team=='KT'): $items->team='kt'; endif;
                                                        if($items->team==$item->team) $plus=$items->plus;
                                                    endforeach;
                                                    echo $plus;
                                                    ?>
                                                </td>
                                                <td><?=number_format($plus/$item->g,2);?></td>
                                                <td><?=$item->hr;?></td>
                                                <td><?=number_format($item->avg,3);?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <table class="table_default gametable02">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="135px"/><col width="20%"/>
                                        </colgroup>
                                        <tr>
                                            <th class="left">수비력</th>
                                            <th>실점</th>
                                            <th>평균</th>
                                            <th>피홈런</th>
                                            <th>피안타율</th>
                                        </tr>
                                        <?php foreach($defence as $item): ?>
                                            <tr>
                                                <td class="left"><span class="<?=$team_initial[$item->team];?>_L"></span> <?=$item->team;?></td>
                                                <td><?php
                                                    $minus=0;
                                                    foreach($total as $items):
                                                        if($items->team=='KT'): $items->team='kt'; endif;
                                                        if($items->team==$item->team) $minus=$items->minus;
                                                    endforeach;
                                                    echo $minus;
                                                    ?>
                                                </td>
                                                <td><?=number_format($minus/$item->g,2);?></td>
                                                <td><?=$item->hr;?></td>
                                                <td><?=number_format($item->era,3);?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){document.body.scrollTop=<?=$scroll_top;?>;});
</script>