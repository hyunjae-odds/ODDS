<?php
$get_rank_per=array(1=>100,2=>93,3=>86,4=>79,5=>72,6=>65,7=>58,8=>52,9=>45,10=>38,11=>32,12=>25,13=>18,14=>12,15=>0);
$first_statistics_arr=($league=='KBO')?array(1=>'01',2=>'02',3=>'03',4=>'04',5=>'05',6=>'06',7=>'07',8=>'08',9=>'09',10=>'10') : array(1=>'01',2=>'02',3=>'02',4=>'03',5=>'03',6=>'03',7=>'04',8=>'04',9=>'04',10=>'05',11=>'05',12=>'05',13=>'06',14=>'06',15=>'06',16=>'07',17=>'07',18=>'07',19=>'08',20=>'08',21=>'08',22=>'09',23=>'09',24=>'09',25=>'10',26=>'10',27=>'10',28=>'11',29=>'11',30=>'11');
$MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토');
$full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');
$abb_MLB_team=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels of Anaheim'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');
?>
<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline"><?=($league=='KBO')? $full_name_team[$team] : $MLB_team_kor[$team];?></span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=($league=='KBO')? $full_name_team[$team] : $MLB_team_kor[$team];?></h2>
    </div>
    <div class="game_w pb50">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info/<?=$league;?>?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=$league;?>/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation/<?=$league;?>?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team/<?=$league;?>?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s5 active">
                <div class="team_p_w">
                    <h3 class="noBorder center">부분별 선수 순위</h3>
                    <div class="date">
                        <a href="javascript:void(0)" class="btn_prev" title="이전시즌">이전시즌</a>
                        <a href="" class="date_yr date_num">2017<span class="date_t">시즌</span></a>
                        <ul class="date_yr_select date_ul" style="width:103px;display:none;">
                            <li><a href="javascript:void(0)";>2017 시즌</a></li>
                        </ul>
                        <a href="" class="btn_next" title="다음시즌">다음시즌</a>
                    </div>
                    <div class="relative">
                        <ul class="blackTab r_tit" style="top:-33px;">
                            <li class="ls01_tab_1"><a href="/baseball/player_pitcher/<?=$league;?>?team=<?=$team;?>">투수</a></li>
                            <li class="on ls01_tab_2"><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">타자</a></li>
                        </ul>
                        <div class="team_p ls01_2 active">
                            <ul class="player_list">
                                <li>
                                    <p class="th">타 율</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter_result['avg']->player_id;?>.jpg" alt="<?=$batter_result['avg']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/batter/<?=$batter_result['avg']->player_id;?>?team=<?=$team;?>"><?=$batter_result['avg']->name;?></a></p>
                                    <b class="red"><?=number_format($batter_result['avg']->avg,3);?></b>
                                    <b class="gray">리그전체 <?=$batter_result['avg']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">홈 런</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter_result['hr']->player_id;?>.jpg" alt="<?=$batter_result['hr']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/batter/<?=$batter_result['hr']->player_id;?>?team=<?=$team;?>"><?=$batter_result['hr']->name;?></a></p>
                                    <b class="red"><?=$batter_result['hr']->hr;?></b>
                                    <b class="gray">리그전체 <?=$batter_result['hr']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">타 점</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter_result['rbi']->player_id;?>.jpg" alt="<?=$batter_result['rbi']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/batter/<?=$batter_result['rbi']->player_id;?>?team=<?=$team;?>"><?=$batter_result['rbi']->name;?></a></p>
                                    <b class="red"><?=$batter_result['rbi']->rbi;?></b>
                                    <b class="gray">리그전체 <?=$batter_result['rbi']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">안 타</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter_result['h']->player_id;?>.jpg" alt="<?=$batter_result['h']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/batter/<?=$batter_result['h']->player_id;?>?team=<?=$team;?>"><?=$batter_result['h']->name;?></a></p>
                                    <b class="red"><?=$batter_result['h']->h;?></b>
                                    <b class="gray">리그전체 <?=$batter_result['h']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">도 루</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter_result['sb']->player_id;?>.jpg" alt="<?=$batter_result['sb']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/batter/<?=$batter_result['sb']->player_id;?>?team=<?=$team;?>"><?=$batter_result['sb']->name;?></a></p>
                                    <b class="red"><?=$batter_result['sb']->sb;?></b>
                                    <b class="gray">리그전체 <?=$batter_result['sb']->rank;?>위</b>
                                </li>
                            </ul>
                            <div class="table_w hitter">
                                <div class="relative">
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="60px">
                                            <col width="75px">
                                        </colgroup>
                                        <?php if($league=='KBO'): ?>
                                            <tr>
                                                <th>순위</th>
                                                <th>선수</th>
                                                <th>팀</th>
                                                <th><span class="bt_1" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=1')">타율</span></th>
                                                <th><span class="bt_2" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=g&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=2')">경기</span></th>
                                                <th><span class="bt_3" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=pa&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=3')">타석</span></th>
                                                <th><span class="bt_4" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ab&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=4')">타수</span></th>
                                                <th><span class="bt_5" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=r&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=5')">득점</span></th>
                                                <th><span class="bt_6" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=h&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=6')">안타</span></th>
                                                <th><span class="bt_7" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=7')">2루타</span></th>
                                                <th><span class="bt_8" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=8')">3루타</span></th>
                                                <th><span class="bt_9" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=hr&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=9')">홈런</span></th>
                                                <th><span class="bt_10" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=tb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=10')">루타</span></th>
                                                <th><span class="bt_11" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=rbi&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=11')">타점</span></th>
                                                <th><span class="bt_12" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=sac&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=12')">희생번트</span></th>
                                                <th><span class="bt_13" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=sf&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=13')">희생플라이</span></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th>순위</th>
                                                <th>선수</th>
                                                <th>팀</th>
                                                <th><span class="bt_1" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=1')">타율</span></th>
                                                <th><span class="bt_2" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=g&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=2')">경기</span></th>
                                                <th><span class="bt_3" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ab&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=3')">타수</span></th>
                                                <th><span class="bt_4" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=r&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=4')">득점</span></th>
                                                <th><span class="bt_5" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=h&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=5')">안타</span></th>
                                                <th><span class="bt_6" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=tb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=6')">루타</span></th>
                                                <th><span class="bt_7" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=7')">2루타</span></th>
                                                <th><span class="bt_8" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=8')">3루타</span></th>
                                                <th><span class="bt_9" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=hr&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=9')">홈런</span></th>
                                                <th><span class="bt_10" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=rbi&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=10')">타점</span></th>
                                                <th><span class="bt_11" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=bb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=11')">사구</span></th>
                                                <th><span class="bt_12" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=12')">고의사구</span></th>
                                                <th><span class="bt_13" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=so&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=13')">삼진</span></th>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach($batter as $keys=>$item): ?>
                                            <?php if($league=='KBO'): ?>
                                                <tr>
                                                    <td><?=$offset+$keys+1;?></td>
                                                    <td><a href="/baseball/player_detail/batter/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->name;?></a></td>
                                                    <td><?=$item->team;?></td>
                                                    <td class="bt_1"><?=number_format($item->avg,3);?></td>
                                                    <td class="bt_2"><?=$item->g;?></td>
                                                    <td class="bt_3"><?=$item->pa;?></td>
                                                    <td class="bt_4"><?=$item->ab;?></td>
                                                    <td class="bt_5"><?=$item->r;?></td>
                                                    <td class="bt_6"><?=$item->h;?></td>
                                                    <td class="bt_7"><?=$item->second_b;?></td>
                                                    <td class="bt_8"><?=$item->third_b;?></td>
                                                    <td class="bt_9"><?=$item->hr;?></td>
                                                    <td class="bt_10"><?=$item->tb;?></td>
                                                    <td class="bt_11"><?=$item->rbi;?></td>
                                                    <td class="bt_12"><?=$item->sac;?></td>
                                                    <td class="bt_13"><?=$item->sf;?></td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td><?=$offset+$keys+1;?></td>
                                                    <td><a href="/baseball/player_detail/batter/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->name;?></a></td>
                                                    <td><?=$item->team;?></td>
                                                    <td class="bt_1"><?=number_format($item->avg,3);?></td>
                                                    <td class="bt_2"><?=$item->g;?></td>
                                                    <td class="bt_3"><?=$item->ab;?></td>
                                                    <td class="bt_4"><?=$item->r;?></td>
                                                    <td class="bt_5"><?=$item->h;?></td>
                                                    <td class="bt_6"><?=$item->tb;?></td>
                                                    <td class="bt_7"><?=$item->second_b;?></td>
                                                    <td class="bt_8"><?=$item->third_b;?></td>
                                                    <td class="bt_9"><?=$item->hr;?></td>
                                                    <td class="bt_10"><?=$item->rbi;?></td>
                                                    <td class="bt_11"><?=$item->bb;?></td>
                                                    <td class="bt_12"><?=$item->ibb;?></td>
                                                    <td class="bt_13"><?=$item->so;?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline pr_1">
                                        <span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
                                    </div>
                                </div>
                                <div class="next_table" style="display:none;">
                                    <table class="table_default" style="width:960px;">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="60px">
                                            <col width="75px">
                                        </colgroup>
                                        <?php if($league=='KBO'): ?>
                                            <tr>
                                                <th>순위</th>
                                                <th>선수</th>
                                                <th>팀</th>
                                                <th><span class="bt_14" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=14')">타율</span></th>
                                                <th><span class="bt_15" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=bb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=15')">볼넷</span></th>
                                                <th><span class="bt_16" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=16')">고의4구</span></th>
                                                <th><span class="bt_17" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=17')">사구</span></th>
                                                <th><span class="bt_18" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=so&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=18')">삼진</span></th>
                                                <th><span class="bt_19" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=gdp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=19')">병살타</span></th>
                                                <th><span class="bt_20" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=slg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=20')">장타율</span></th>
                                                <th><span class="bt_21" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=obp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=21')">출루</span></th>
                                                <th><span class="bt_22" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ops&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=22')">OPS</span></th>
                                                <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=mh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23')">멀티히트</span></th>
                                                <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=risp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24')">득점권타율</span></th>
                                                <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=phba&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25')">대타타율</span></th>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th>순위</th>
                                                <th>선수</th>
                                                <th>팀</th>
                                                <th><span class="bt_14" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=sb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=14')">도루</span></th>
                                                <th><span class="bt_15" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=cs&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=15')">도루실패</span></th>
                                                <th><span class="bt_16" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=obp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=16')">출루율</span></th>
                                                <th><span class="bt_17" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=slg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=17')">장타율</span></th>
                                                <th><span class="bt_18" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=ops&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=18')">OPS</span></th>
                                                <th><span class="bt_19" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=goao&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=19')">땅볼/뜬공</span></th>
                                                <th><span class="bt_20" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=pa&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=20')">타석</span></th>
                                                <th><span class="bt_21" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=xbh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=21')">2루타이상안타</span></th>
                                                <th><span class="bt_22" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=22')">몸맞는공</span></th>
                                                <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=sac&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23')">희생번트</span></th>
                                                <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=sf&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24')">희생플라이</span></th>
                                                <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>&batter_sort=babip&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25')">인플레이타구</span></th>
                                            </tr>
                                        <?php endif; ?>
                                        <?php foreach($batter as $keys=>$item): ?>
                                            <?php if($league=='KBO'): ?>
                                                <tr>
                                                    <td><?=$offset+$keys+1;?></td>
                                                    <td><?=$item->name;?></td>
                                                    <td><a href="/baseball/player_detail/batter/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->team;?></a></td>
                                                    <td class="bt_14"><?=number_format($item->avg,3);?></td>
                                                    <td class="bt_15"><?=$item->bb;?></td>
                                                    <td class="bt_16"><?=$item->ibb;?></td>
                                                    <td class="bt_17"><?=$item->hbp;?></td>
                                                    <td class="bt_18"><?=$item->so;?></td>
                                                    <td class="bt_19"><?=$item->gdp;?></td>
                                                    <td class="bt_20"><?=number_format($item->slg,3);?></td>
                                                    <td class="bt_21"><?=number_format($item->obp,3);?></td>
                                                    <td class="bt_22"><?=number_format($item->ops,3);?></td>
                                                    <td class="bt_23"><?=$item->mh;?></td>
                                                    <td class="bt_24"><?=number_format($item->risp,3);?></td>
                                                    <td class="bt_25"><?=number_format($item->phba,3);?></td>
                                                </tr>
                                            <?php else: ?>
                                                <tr>
                                                    <td><?=$offset+$keys+1;?></td>
                                                    <td><?=$item->name;?></td>
                                                    <td><a href="/baseball/player_detail/batter/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->team;?></a></td>
                                                    <td class="bt_14"><?=$item->sb;?></td>
                                                    <td class="bt_15"><?=$item->cs;?></td>
                                                    <td class="bt_16"><?=$item->obp;?></td>
                                                    <td class="bt_17"><?=$item->slg;?></td>
                                                    <td class="bt_18"><?=$item->ops;?></td>
                                                    <td class="bt_19"><?=$item->goao;?></td>
                                                    <td class="bt_20"><?=$item->pa;?></td>
                                                    <td class="bt_21"><?=$item->xbh;?></td>
                                                    <td class="bt_22"><?=$item->hbp;?></td>
                                                    <td class="bt_23"><?=$item->sac;?></td>
                                                    <td class="bt_24"><?=$item->sf;?></td>
                                                    <td class="bt_25"><?=$item->babip;?></td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline pr_1">
                                        <span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
                                    </div>
                                </div>
                                <p class="nextTable"><a href=""></a></p>
                            </div>
                            <div class="page_w">
                                <div class="page">
                                    <?=$this->pagination->create_links();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        document.body.scrollTop=<?=$mouseTop;?>;

        var selector_name='';
        if('<?=$focus;?>'=='1'){
            selector_name = '.pr_';
        }else if('<?=$focus;?>'=='2'){
            selector_name = '.pr_';
            $(".next_table").slideDown();
        }else if('<?=$focus;?>'=='3'){
            selector_name = '.bt_';
        }else if('<?=$focus;?>'=='4'){
            $(".next_table").slideDown();
            selector_name = '.bt_';
        }
        if('<?=$bold_num;?>'!=0) selector_name=selector_name+'<?=$bold_num;?>';
        $(selector_name).css("font-weight","bold");
        $(selector_name).css("color","black");

        //선수기록
        for(var i=1;i<21;i++){
            (function (k){
                $(".table_w table th span.pr_" + k ).click(function(){
                    $(this).parents(".table_default").siblings("div").removeClass();
                    //$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k);
                    $(this).parents(".table_default").find("td").css("font-weight","normal");
                    $(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
                    return false;
                });
            }(i));
        };
        //선수기록 확장테이블
        $(".nextTable a").click(function(){
            $(this).parent().siblings(".next_table").slideToggle();
            return false;
        });
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
                return false;
            }
        });
    });
</script>