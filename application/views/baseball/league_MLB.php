<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토'); ?>
<?php $MLB_team_initial=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels of Anaheim'=>'LAA','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 미국</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 MLB</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class="on"><a href="/baseball/league/MLB_N">리그정보</a></li>
            <li><a href="/baseball/result/MLB/all/<?=date('m');?>">경기 결과</a></li>
            <li><a href="/baseball/player_record_hitter/MLB_N">선수 기록</a></li>
            <li><a href="/baseball/score/MLB_N">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active s1">
                <div class="tab01_w">
                    <ul class="tab01_2 expert_menu">
                        <li class="ls01 <?php if($selector=='win_lose') echo 'on';?>" ><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&selector=win_lose')">승패</a></li>
                        <li class="ls02 <?php if($selector=='handicap') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&selector=handicap')">핸디캡</a></li>
                        <li class="ls03 <?php if($selector=='over_under') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&selector=over_under')">O/U</a></li>
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
                                        <th>
                                            <?php setlocale(LC_ALL, "ko_KR.utf-8"); $exp=explode('-', $schedule['date'][$i]->date);
                                            echo $exp[1].'.'.$exp[2].'('.strftime('%a', strtotime($schedule['date'][$i]->date)).')'; ?>
                                        </th>
                                        <th class="left pl20"><span class="country_173"></span> 미국 // MLB</th>
                                        <?php if($selector=='handicap'): ?><th><span class="underline">핸디캡</span></th>
                                        <?php elseif($selector=='over_under'): ?><th><span class="underline">O/U</span></th><?php endif;?>
                                        <th>승</th>
                                        <th>패</th>
                                        <th>B’s</th>
                                        <th>DATA</th>
                                    </tr>
                                    <?php foreach($schedule['schedule'] as $item): if($schedule['date'][$i]->date==$item->date): ?>
                                        <tr>
                                            <td><?php $exp=explode(':', $item->time); echo $exp[0].':'.$exp[1]; ?></td>
                                            <?php if($item->away=='Los Angeles Angels of Anaheim'): $item->away='Los Angeles Angels'; ?>
                                            <?php elseif($item->home=='Los Angeles Angels of Anaheim'): $item->home='Los Angeles Angels'; endif; ?>
                                            <td class="left pl20"><a href="/baseball/bet"><?=$MLB_team_kor[$item->away];?> vs <?=$MLB_team_kor[$item->home];?></a></td>
                                            <?php if($item->away=='Los Angeles Angels'): $item->away='Los Angeles Angels of Anaheim'; ?>
                                            <?php elseif($item->home=='Los Angeles Angels'): $item->home='Los Angeles Angels of Anaheim'; endif; ?>
                                            <?php if($selector=='handicap'): ?><td><span class="underline">-1.5</span></td>
                                            <?php elseif($selector=='over_under'): ?><td><span class="underline"><?=number_format(($over_under_reference[$item->away]+$over_under_reference[$item->home])/2).'.5';?></span></td><?php endif;?>
                                            <td><span class="">1.93</span></td>
                                            <td>3.15</td>
                                            <td>51</td>
                                            <td><span class="b_BTN5" style="margin-top: 9px;"><a href="javascript:location.replace('/baseball/match/<?=$league;?>/<?=$item->no;?>/0')">매치정보</a></span></td>
                                        </tr>
                                    <?php endif; endforeach; ?>
                                </table>
                            <?php endfor; ?>
                        </div>
                    </li>
                </ul>

                <div class="MLB_league_table" style="margin-left:0;">
                    <div class="pb50 MLB_league_table01">
                        <div class="tab01_w">
                            <h3 class="center gc01_v" style="margin:0;">2016 MLB 리그 통계</h3>
                            <h3 class="center gc02_v" style="margin:0;display:none;">2016 MLB 아메리칸리그 통계</h3>
                            <ul class="tab02">
                                <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=all&selector=<?=$selector;?>&mlb_selector=<?=$mlb_selector;?>')">전체</a></li>
                                <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=home&selector=<?=$selector;?>&mlb_selector=<?=$mlb_selector;?>')">홈</a></li>
                                <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=away&selector=<?=$selector;?>&mlb_selector=<?=$mlb_selector;?>')">원정</a></li>
                            </ul>
                            <ul class="g_check_tab" style="bottom:-6px;">
                                <li class="gc01 <?php if($league=='MLB_N') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/MLB_N?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&selector=<?=$selector;?>&mlb_selector=<?=$mlb_selector;?>')">내셔널리그</a></li>
                                <li class="gc02 <?php if($league=='MLB_A') echo 'on';?>"><a href="javascript:location.replace('/baseball/league/MLB_A?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=<?=$home_away;?>&selector=<?=$selector;?>&mlb_selector=<?=$mlb_selector;?>')">아메리칸리그</a></li>
                            </ul>
                        </div>
                        <div class="LastGame_view">
                            <ul class="LastGame_view_ul">
                                <li class="active">
                                    <div class="Ltable relative">
                                        <?php $MLB_local=array('동부', '서부', '중부'); ?>
                                        <?php foreach($total as $key=>$item): ?>
                                            <table class="table_default league_Ltable" <?php if($key!=0) echo 'style="margin-top:35px;"';?>>
                                                <caption></caption>
                                                <colgroup>
                                                    <col width="55px"/>
                                                    <col width="190px"/>
                                                    <col width="45px"/><col width="40px"/><col width="40px"/><col width="30px"/><col width="40px"/><col width="40px"/><col width="40px"/><col width="45px"/><col width="55px"/><col width="40px"/><col width="260px"/><col width="40px"/>
                                                </colgroup>
                                                <tr>
                                                    <th><?=$MLB_local[$key];?></th>
                                                    <th class="left">팀명</th>
                                                    <th>경기</th>
                                                    <th>승</th>
                                                    <th>패</th>
                                                    <th>무</th>
                                                    <th>득</th>
                                                    <th>실</th>
                                                    <th>마진</th>
                                                    <th>득/실</th>
                                                    <th>승률%</th>
                                                    <th>승차</th>
                                                    <th colspan="2">최근 10경기</th>
                                                </tr>
                                                <?php foreach($item as $entry): ?>
                                                    <tr>
                                                        <td><?=$entry->rank;?></td>
                                                        <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels'; ?>
                                                        <td class="left"><a href="/baseball/team_info/<?=$league;?>?team=<?=$entry->team;?>"><span class=""></span> <?=$MLB_team_kor[$entry->team];?></a></td>
                                                        <?php if($entry->team=='Los Angeles Angels') $entry->team='Los Angeles Angels of Anaheim'; ?>
                                                        <td><?=$entry->g;?></td>
                                                        <td><?=$entry->win;?></td>
                                                        <td><?=$entry->lose;?></td>
                                                        <td><?=$entry->tie;?></td>
                                                        <td><?=$entry->plus;?></td>
                                                        <td><?=$entry->minus;?></td>
                                                        <td><?php if($entry->plus-$entry->minus>0) echo '+';?><?=$entry->plus-$entry->minus;?></td>
                                                        <td><?=number_format(($entry->plus+$entry->minus)/$entry->g, 1);?></td>
                                                        <td><?=number_format($entry->win_rate,3);?></td>
                                                        <td><?=$entry->game_car;?></td>
                                                        <?php $win=0; $lose=0; $word=''; ?><?php $exp=explode(';', $entry->recent_game); ?>
                                                        <td><?php foreach($exp as $key=>$item): ?><?php if($item=='승'): $word='win'; $win++; elseif($item=='무'): $word='dra'; else: $word='lose'; $lose++; ?><?php endif; ?><a class="result_btn" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$word;?>.png" title="<?=$entry->recent_detail[9-$key]['away'].' '.$entry->recent_detail[9-$key]['away_score'].':'.$entry->recent_detail[9-$key]['home_score'].' '.$entry->recent_detail[9-$key]['home'];?>"></a><?php endforeach; ?></td>
                                                        <td><?=$win;?>/<?=$lose;?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative MLB_league_table02">
                        <div class="tab01_w">
                            <h3 class="noBorder gc01_v" style="margin:0;">2017 MLB 리그요약</h3>
                            <h3 class="noBorder gc02_v" style="margin:0;display:none;">2017 MLB 아메리칸 리그요약</h3>
                            <ul class="g_check_tab" style="bottom:5px;">
                                <li class="<?php if($mlb_selector=='MLB_N') echo 'on';?> gc01"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?mlb_selector=MLB_N&scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$selector;?>')">내셔널리그</a></li>
                                <li class="<?php if($mlb_selector=='MLB_A') echo 'on';?> gc02"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?mlb_selector=MLB_A&scroll_top='+document.body.scrollTop+'&home_away=<?=$home_away;?>&selector=<?=$selector;?>')">아메리칸리그</a></li>
                            </ul>
                        </div>
                        <div class="LastGame_view tableNtable">
                            <ul class="LastGame_view_ul">
                                <li class="active">
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
                                                <td><?=number_format(round(100-$home_per-$away_per, 2),1);?>%</td>
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
                                                <th>핸디캡 <span class="underline"><?=$handicap;?></span></th>
                                                <th>경기</th>
                                                <th>확률</th>
                                            </tr>
                                            <tr>
                                                <td>홈팀 <?=$handicap;?>승</td>
                                                <td><?=$league_statistics['handicap_home_win'];?></td>
                                                <td><?php $handicap_per=number_format($league_statistics['handicap_home_win']/($league_statistics['handicap_away_win']+$league_statistics['handicap_home_win'])*100, 1); echo $handicap_per;?>%</td>
                                            </tr>
                                            <tr>
                                                <td>원정팀 <?=$handicap;?>승</td>
                                                <td><?=$league_statistics['handicap_away_win'];?></td>
                                                <td><?=100-$handicap_per;?>%</td>
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
                                                <col width="150px"/><col width="20%"/>
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
                                                    <td class="left"><span class="<?=$MLB_team_initial[$item->team];?>_L"></span> <?=$MLB_team_kor[$item->team];?></td>
                                                    <td>
                                                        <?php foreach($total_selector as $items): ?>
                                                            <?php foreach($items as $entry): ?>
                                                                <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';?>
                                                                <?php if($item->team==$entry->team) echo $entry->plus;?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td>
                                                        <?php foreach($total_selector as $items): ?>
                                                            <?php foreach($items as $entry): ?>
                                                                <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';?>
                                                                <?php if($item->team==$entry->team) echo number_format($entry->plus/$entry->g, 1);?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td><?=$item->hr;?></td>
                                                    <td><?=number_format($item->avg,3);?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <table class="table_default gametable02">
                                            <caption></caption>
                                            <colgroup>
                                                <col width="150px"/><col width="20%"/>
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
                                                    <td class="left"><span class="<?=$MLB_team_initial[$item->team];?>_L"></span> <?=$MLB_team_kor[$item->team];?></td>
                                                    <td>
                                                        <?php foreach($total_selector as $items): ?>
                                                            <?php foreach($items as $entry): ?>
                                                                <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';?>
                                                                <?php if($item->team==$entry->team) echo $entry->minus;?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td>
                                                        <?php foreach($total_selector as $items): ?>
                                                            <?php foreach($items as $entry): ?>
                                                                <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';?>
                                                                <?php if($item->team==$entry->team) echo number_format($entry->plus/$entry->g, 1);?>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </td>
                                                    <td><?=$item->hr;?></td>
                                                    <td><?=number_format($item->era,3);?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){document.body.scrollTop=<?=$scroll_top;?>;});
</script>