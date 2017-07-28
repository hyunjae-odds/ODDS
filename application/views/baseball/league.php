<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
<?php $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS'); ?>
<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토'); ?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - <?=($league=='KBO')? '대한민국' : 'USA';?></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?> 리그</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class="on"><a href="/baseball/league/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">리그정보</a></li>
            <li><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>/all/<?=date('m');?>">경기 결과</a></li>
            <li><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">선수 기록</a></li>
            <li><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">상대 전적</a></li>
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
                                            <?php
                                            setlocale(LC_ALL, "ko_KR.utf-8");
                                            if($league=='KBO'): echo $schedule['date'][$i]->date;
                                            else:
                                                $exp=explode('-', $schedule['date'][$i]->date);
                                                echo $exp[1].'.'.$exp[2].'('.strftime('%a', strtotime($schedule['date'][$i]->date)).')';
                                            endif;
                                            ?>
                                        </th>
                                        <th class="left pl20"><span class="country_173"></span> <?=($league=='KBO')? '대한민국 // KBO' : 'USA // MLB';?></th>
                                        <?php if($selector=='handicap'): ?><th><span class="underline">핸디캡</span></th>
                                        <?php elseif($selector=='over_under'): ?><th><span class="underline">O/U</span></th><?php endif;?>
                                        <th>승</th>
                                        <th>패</th>
                                        <th>B’s</th>
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
                                            <?php if($item->away=='Los Angeles Angels of Anaheim'): $item->away='Los Angeles Angels'; ?>
                                            <?php elseif($item->home=='Los Angeles Angels of Anaheim'): $item->home='Los Angeles Angels'; endif; ?>
                                            <td class="left pl20"><a href="/baseball/player_hitter?team=<?=$item->away;?>"><?=($league=='KBO')? $full_name_team[$item->away] : $MLB_team_kor[$item->away];?></a> vs <a href="/baseball/player_hitter?team=<?=$item->home;?>"><?=($league=='KBO')? $full_name_team[$item->home] : $MLB_team_kor[$item->home];?></a></td>
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
                
                <div class="pb50 relative" style="margin-left:0;">
                    <h3 class="center" style="margin:0;">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?> 리그 테이블</h3>
                    <div class="LastGame_view">
                        <ul class="tab02">
                            <li class="<?php if($home_away=='all' || $home_away==null) echo 'on';?> ls_all"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=all&selector=<?=$selector;?>')">전체</a></li>
                            <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=home&selector=<?=$selector;?>')">홈</a></li>
                            <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="javascript:location.replace('/baseball/league/<?=$league;?>?scroll_top='+document.body.scrollTop+'&duration=<?=$duration;?>&home_away=away&selector=<?=$selector;?>')">원정</a></li>
                        </ul>
                        <div class="Ltable relative">
                            <table class="table_default league_Ltable">
                                <caption></caption>
                                <colgroup>
                                    <col width="63px"/>
                                    <col width="*"/>
                                    <col width="45px"/><col width="40px"/><col width="40px"/><col width="40px"/>
                                </colgroup>
                                <tr class="th02">
                                    <th colspan="2" class="br" style="text-decoration:none;">&nbsp;</th>
                                    <th colspan="8" class="br"><b>승패</b></th>
                                    <th colspan="6"><b>O/U</b></th>
                                </tr>
                                <?php $title=array('동부', '서부', '중부'); ?>
                                <?php if($league=='MLB_A' || $league=='MLB_N'): ?>
                                    <?php foreach($total as $key=>$item): ?>
                                        <tr>
                                            <th><?=$title[$key];?></th>
                                            <th class="left">팀명</th>
                                            <th>경기</th>
                                            <th>승</th>
                                            <th>패</th>
                                            <th>무</th>
                                            <th>득점</th>
                                            <th>실점</th>
                                            <th>승률%</th>
                                            <th>승차</th>
                                            <th>득/실</th>
                                            <th>기준</th>
                                            <th>오버%</th>
                                            <th>언더%</th>
                                        </tr>
                                        <?php foreach($item as $entry): ?>
                                            <tr>
                                                <td><?=$entry->rank;?></td>
                                                <?php if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels'; ?>
                                                <td class="left"><span class=""></span> <?=$MLB_team_kor[$entry->team];?></td>
                                                <?php if($entry->team=='Los Angeles Angels') $entry->team='Los Angeles Angels of Anaheim'; ?>
                                                <td><?php if($duration=='all' && $home_away=='all') echo $entry->win+$entry->lose+$entry->tie; else echo $entry->g;?></td>
                                                <td><?=$entry->win;?></td>
                                                <td><?=$entry->lose;?></td>
                                                <td><?=$entry->tie;?></td>
                                                <td><?=$entry->plus;?></td>
                                                <td><?=$entry->minus;?></td>
                                                <td><?=number_format($entry->win_rate,3);?></td>
                                                <td><?=$entry->game_car;?></td>
                                                <td><?=number_format(($entry->plus+$entry->minus)/$entry->g,1);?></td>
                                                <td><?=$over_under_reference[$entry->team];?></td>
                                                <td><?=$over_under_reference[$entry->team.'_over'];?></td>
                                                <td><?=$over_under_reference[$entry->team.'_under'];?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <th>순위</th>
                                        <th class="left">팀명</th>
                                        <th>경기</th>
                                        <th>승</th>
                                        <th>패</th>
                                        <th>무</th>
                                        <th>득점</th>
                                        <th>실점</th>
                                        <th>승률%</th>
                                        <th>승차</th>
                                        <th>득/실</th>
                                        <th>기준</th>
                                        <th>오버%</th>
                                        <th>언더%</th>
                                    </tr>
                                    <?php foreach($total as $entry): ?>
                                        <tr>
                                            <td><?=$entry->rank;?></td>
                                            <td class="left"><span class="<?=$team_initial[$entry->team];?>_L"></span> <?=$full_name_team[$entry->team];?></td>
                                            <td><?php if($duration=='all' && $home_away=='all') echo $entry->win+$entry->lose+$entry->tie; else echo $entry->g;?></td>
                                            <td><?=$entry->win;?></td>
                                            <td><?=$entry->lose;?></td>
                                            <td><?=$entry->tie;?></td>
                                            <td><?=$entry->plus;?></td>
                                            <td><?=$entry->minus;?></td>
                                            <td><?=number_format($entry->win_rate,3);?></td>
                                            <td><?=$entry->game_car;?></td>
                                            <td><?=number_format(($entry->plus+$entry->minus)/$entry->g,1);?></td>
                                            <td><?=$over_under_reference[$entry->team];?></td>
                                            <td><?=$over_under_reference[$entry->team.'_over'];?></td>
                                            <td><?=$over_under_reference[$entry->team.'_under'];?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                            <div class="pt50">
                                <h3 class="center noBorder">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?> 리그요약</h3>
                                <div class="tableNtable pt10">
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>리그승률</th>
                                            <th>경기수</th>
                                            <th>승률</th>
                                        </tr>
                                        <tr>
                                            <td>홈팀 승</td>
                                            <td><?=$league_statistics['home_win'];?></td>
                                            <td><?php $home_per=number_format($league_statistics['home_win']/$league_statistics['g'],3); echo $home_per;?></td>
                                        </tr>
                                        <tr>
                                            <td>원정팀 승</td>
                                            <td><?=$league_statistics['away_win'];?></td>
                                            <td><?php $away_per=number_format($league_statistics['away_win']/$league_statistics['g'],3); echo $away_per;?></td>
                                        </tr>
                                        <tr>
                                            <td>타이</td>
                                            <td><?=$league_statistics['draw'];?></td>
                                            <td><?=number_format(100-($home_per*100+$away_per*100),0);?>%</td>
                                        </tr>
                                    </table>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>핸디캡 <span class="underline">1.5</span></th>
                                            <th>경기수</th>
                                            <th>승률</th>
                                        </tr>
                                        <tr>
                                            <td>홈팀 승</td>
                                            <td><?=$league_statistics['handicap_home_win'];?></td>
                                            <td><?=number_format($league_statistics['handicap_home_win']/$league_statistics['g'], 3);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>원정팀 승</td>
                                            <td><?=$league_statistics['handicap_away_win'];?></td>
                                            <td><?=number_format($league_statistics['handicap_away_win']/$league_statistics['g'], 3);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
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
                                            <td>전체 득점</td>
                                            <td><?=$league_statistics['home_total_score']+$league_statistics['away_total_score'];?></td>
                                            <td><?=number_format(($league_statistics['home_total_score']+$league_statistics['away_total_score'])/($league_statistics['g']),2);?></td>
                                        </tr>
                                        <tr>
                                            <td>홈 득점</td>
                                            <td><?=$league_statistics['home_total_score'];?></td>
                                            <td><?=number_format($league_statistics['home_total_score']/($league_statistics['g']),2);?></td>
                                        </tr>
                                        <tr>
                                            <td>원정 득점</td>
                                            <td><?=$league_statistics['away_total_score'];?></td>
                                            <td><?=number_format($league_statistics['away_total_score']/($league_statistics['g']),2);?></td>
                                        </tr>
                                    </table>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="*"/><col width="22%"/><col width="23%"/>
                                        </colgroup>
                                        <tr>
                                            <th>리그 O/U</th>
                                            <th>경기수</th>
                                            <th>확률</th>
                                        </tr>
                                        <tr>
                                            <td>오버 <span class="underline"><?=$over_under_reference_value-1;?></span></td>
                                            <td><?=$league_statistics['over_minus_one'];?></td>
                                            <td><?=number_format($league_statistics['over_minus_one']/$league_statistics['g']*100);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>오버 <span class="underline"><?=$over_under_reference_value;?></span></td>
                                            <td><?=$league_statistics['over'];?></td>
                                            <td><?=number_format($league_statistics['over']/$league_statistics['g']*100);?>%</td>
                                        </tr>
                                        <tr>
                                            <td>오버 <span class="underline"><?=$over_under_reference_value+1;?></span></td>
                                            <td><?=$league_statistics['over_plus_one'];?></td>
                                            <td><?=number_format($league_statistics['over_plus_one']/$league_statistics['g']*100);?>%</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    <div class="tableNtable">
                        <table class="table_default gametable02">
                            <caption></caption>
                            <colgroup>
                                <col width="135px"/><col width="*"/><col width="75px"/>
                            </colgroup>
                            <tr>
                                <th class="left">팀별 최근경기</th>
                                <th colspan="2">승패 패턴</th>
                            </tr>
                            <?php foreach($recent as $items): ?>
                                <tr>
                                    <?php if($items['team']=='Los Angeles Angels of Anaheim') $items['team']='Los Angeles Angels'; ?>
                                    <td class="left"><span class="<?=($league=='KBO')? $team_initial[$items['team']] : '';?>_L"></span> <?=($league=='KBO')? $items['team'] : $MLB_team_kor[$items['team']];?></td>
                                    <td>
                                        <?php foreach($items['recent_game'] as $key=>$value):
                                            if($value=='win') echo '<a href="/baseball/match_information/'.$items['recent_detail'][9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_win.png" title="'.$items['recent_detail'][9-$key]["away"].' '.$items['recent_detail'][9-$key]["away_score"].":".$items['recent_detail'][9-$key]["home_score"].' '.$items['recent_detail'][9-$key]["home"].'"/></a>';
                                            elseif($value=='lose') echo '<a href="/baseball/match_information/'.$items['recent_detail'][9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" title="'.$items['recent_detail'][9-$key]["away"].' '.$items['recent_detail'][9-$key]["away_score"].":".$items['recent_detail'][9-$key]["home_score"].' '.$items['recent_detail'][9-$key]["home"].'"/></a>';
                                            else echo '<a href="/baseball/match_information/'.$items['recent_detail'][9-$key]["no"].'/0" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" title="'.$items['recent_detail'][9-$key]["away"].' '.$items['recent_detail'][9-$key]["away_score"].":".$items['recent_detail'][9-$key]["home_score"].' '.$items['recent_detail'][9-$key]["home"].'"/></a>';
                                        endforeach;
                                        ?>
                                    </td>
                                    <td><span class="red"><?=$items['win'];?></span>/<?=$items['lose'];?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <table class="table_default gametable02">
                            <caption></caption>
                            <colgroup>
                                <col width="135px"/><col width="*"/><col width="75px"/>
                            </colgroup>
                            <tr>
                                <th class="left">팀별 최근흐름</th>
                                <th colspan="2">O/U 패턴</th>
                            </tr>
                            <?php foreach($recent_over_under as $item): ?>
                                <tr>
                                    <td class="left"><span class="<?=($league=='KBO')? $team_initial[$item['team']] : '';?>_L"></span> <?=($league=='KBO')? $item['team'] : $MLB_team_kor[$item['team']];?></td>
                                    <td><?php foreach($item['str'] as $items): ?><span class="<?=$items;?>L"><?=$items;?></span><?php endforeach; ?></td>
                                    <td><span class="red"><?=$item['over'];?></span>/<?=$item['under'];?></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <table class="table_default gametable02">
                            <caption></caption>
                            <colgroup>
                                <col width="*"/><col width="65px"/><col width="65px"/><col width="65px"/><col width="65px"/>
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
                                    <td class="left"><span class="<?=($league=='KBO')? $team_initial[$item->team] : '';?>_L"></span> <?=($league=='KBO')? $item->team : $MLB_team_kor[$item->team];?></td>
                                    <td><?php
                                        $plus=0;
                                        if($league=='KBO'):
                                            foreach($total as $items):
                                                if($items->team=='KT'): $items->team='kt'; endif;
                                                if($items->team==$item->team) $plus=$items->plus;
                                            endforeach;
                                        else:
                                            foreach($total as $items):
                                                foreach($items as $entry):
                                                    if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';
                                                    if($entry->team==$item->team) $plus=$entry->plus;
                                                endforeach;
                                            endforeach;
                                        endif;
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
                                <col width="*"/><col width="65px"/><col width="65px"/><col width="65px"/><col width="65px"/>
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
                                    <td class="left"><span class="<?=($league=='KBO')? $team_initial[$item->team] : '';?>_L"></span> <?=($league=='KBO')? $item->team : $MLB_team_kor[$item->team];?></td>
                                    <td><?php
                                        $minus=0;
                                        if($league=='KBO'):
                                            foreach($total as $items):
                                                if($items->team=='KT'): $items->team='kt'; endif;
                                                if($items->team==$item->team) $minus=$items->minus;
                                            endforeach;
                                        else:
                                            foreach($total as $items):
                                                foreach($items as $entry):
                                                    if($entry->team=='Los Angeles Angels of Anaheim') $entry->team='Los Angeles Angels';
                                                    if($entry->team==$item->team) $minus=$entry->minus;
                                                endforeach;
                                            endforeach;
                                        endif;
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
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){document.body.scrollTop=<?=$scroll_top;?>;});
</script>