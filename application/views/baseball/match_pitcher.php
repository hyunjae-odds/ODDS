<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
<?php $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS'); ?>
<?php $MLB_team_initial=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels of Anaheim'=>'LAA','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');?>
<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','Los Angeles Angels of Anaheim'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이고','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토'); ?>
<?php $per_arr=($league=='KBO')? array(1=>100,2=>93,3=>86,4=>79,5=>72,6=>65,7=>58,8=>51,9=>44,10=>37) : array(1=>100,2=>97,3=>94,4=>91,5=>88,6=>85,7=>82,8=>79,9=>76,10=>73,11=>70,12=>67,13=>64,14=>61,15=>58,16=>55,17=>52,18=>49,19=>46,20=>45,21=>40,22=>37,23=>34,24=>31,25=>28,26=>25,27=>22,28=>19,29=>16,30=>13);?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="Match_w">
    <div class="match KBO">
        <div class="title_bar">
            <p>야구 - <?=($league=='KBO')? '대한민국' : '미국';?> -</p>
            <div>
                <a href="" class="other_btn"><?=($league=='KBO')? 'KBO' : 'MLB';?><span></span></a>
                <ul class="other_view">
                    <?php foreach($same_date_another_game_arr as $item): ?>
                        <li><a href="/baseball/match_pitcher/<?=$league;?>/<?=$item->no;?>/0"><?=$item->away;?> vs <?=$item->home;?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="score_bar">
            <div>
                <div class="team">
                    <p class="st"><?=$schedule->away_rank;?>위</p>
                    <p><?=($league=='KBO')? $full_name_team[$schedule->away] : $MLB_team_kor[$schedule->away];?></p>
                    <span>선발 : <?=($league=='KBO')? $schedule->away_pitcher : $schedule->away_pitcher_kor;?></span>
                </div>
                <div class="team_logo"><span class="<?=($league=='KBO')? $team_initial[$schedule->away] : $MLB_team_initial[$schedule->away];?>_L"></span></div>
                <p>VS</p>
                <div class="team_logo"><span class="<?=($league=='KBO')? $team_initial[$schedule->home] : $MLB_team_initial[$schedule->home];?>_L"></span></div>
                <div class="team">
                    <p class="st"><?=$schedule->home_rank;?>위</p>
                    <p><?=($league=='KBO')?$full_name_team[$schedule->home] : $MLB_team_kor[$schedule->home];?></p>
                    <span>선발 : <?=($league=='KBO')? $schedule->home_pitcher : $schedule->home_pitcher_kor;?></span>
                </div>
            </div>
            <ul>
                <li><?=str_replace('-', '.', $schedule->date);?></li>
                <li><?=($league=='KBO')? $schedule->stadium.'경기장' : $schedule->stadium;?></li>
            </ul>
        </div>
    </div>
    <div class="matchTab">
        <ul class="title">
            <li><a href="/baseball/match_team/<?=$league;?>/<?=$schedule->no;?>/0">팀간 비교</a></li>
            <li class="on"><a href="/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/0">선발 비교</a></li>
        </ul>
        <ul class="result">
            <li id="r2" class="on">
                <div class="opinion">
                    <div class="graph">
                        <div class="total ">
                            <span class="left_g">55%</span>
                            <div class="left_g">
                                <div><div style="width:55%"><p><span>415명</span></p></div></div>
                            </div>
                            <p><b>승패 의견일치</b></p>
                            <div class="right_g">
                                <div><div style="width:45%"><p><span>375명</span></p></div></div>
                            </div>
                            <span class="right_g">45%</span>
                        </div>
                        <div class="mt15 bb">
                            <span class="left_g"><?=$rank['away_w'];?>위</span>
                            <div class="left_g">
                                <b><?=$pitchers['away']->w;?>승 <?=$pitchers['away']->l;?>패</b>
                            </div>
                            <p>승패</p>
                            <div class="right_g">
                                <b><?=$pitchers['home']->w;?>승 <?=$pitchers['home']->l;?>패</b>
                            </div>
                            <span class="right_g"><?=$rank['home_w'];?>위</span>
                        </div>

                        <div class="yellowG mt20">
                            <span class="left_g"><?=$rank['away_wpct'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:86%"><span><?=number_format($pitchers['away']->wpct,3);?></span></div></div>
                            </div>
                            <p>승률</p>
                            <div class="right_g">
                                <div><div style="width:86%"><span><?=number_format($pitchers['home']->wpct,3);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_wpct'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">55%</span>
                            <div class="left_g">
                                <div><div style="width:56%"><span><?=number_format($pitchers['away']->era,2);?></span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div style="width:56%"><span><?=number_format($pitchers['home']->era,2);?></span></div></div>
                            </div>
                            <span class="right_g">55%</span>
                        </div>
                        <div class="yellowG">
                            <?php $value=(strlen($pitchers['away']->ip)>3)? explode(' ', $pitchers['away']->ip) : $pitchers['away']->ip;?>
                            <span class="left_g"><?=number_format($value[0]/$pitchers['away']->g, 1);?></span>
                            <div class="left_g">
                                <div><div style="width:48%"><span><?=$pitchers['away']->ip;?></span></div></div>
                            </div>
                            <p>이닝/평균</p>
                            <?php $value=(strlen($pitchers['home']->ip)>3)? explode(' ', $pitchers['home']->ip) : $pitchers['home']->ip;?>
                            <div class="right_g">
                                <div><div style="width:48%"><span><?=$pitchers['home']->ip;?></span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($value[0]/$pitchers['home']->g, 1);?></span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_qs'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:42%"><span><?=$pitchers['away']->qs;?></span></div></div>
                            </div>
                            <p>QS</p>
                            <div class="right_g">
                                <div><div style="width:42%"><span><?=$pitchers['home']->qs;?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_qs'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_qs'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:49%"><span><?=$pitchers['away']->so;?></span></div></div>
                            </div>
                            <p>삼진</p>
                            <div class="right_g">
                                <div><div style="width:49%"><span><?=$pitchers['home']->so;?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_qs'];?>위</span>
                        </div><br>
                        <div class="yellowG">
                            <span class="left_g"><?=number_format($pitchers['away']->h/$pitchers['away']->g,1);?></span>
                            <div class="left_g">
                                <div><div style="width:40%"><span><?=$pitchers['away']->h;?></span></div></div>
                            </div>
                            <p>피안타/평균</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span><?=$pitchers['home']->h;?></span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($pitchers['home']->h/$pitchers['home']->g,1);?></span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_hr'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span><?=$pitchers['away']->hr;?></span></div></div>
                            </div>
                            <p>피홈런</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span><?=$pitchers['home']->hr;?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_hr'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_avg'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span><?=number_format($pitchers['away']->avg,3);?></span></div></div>
                            </div>
                            <p>피안타율</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span><?=number_format($pitchers['home']->avg,3);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_avg'];?>위</span>
                        </div>
                        <div class="yellowG bb">
                            <span class="left_g"><?=$rank['away_whip'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span><?=number_format($pitchers['away']->whip,2);?></span></div></div>
                            </div>
                            <p>WHIP</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span><?=number_format($pitchers['home']->whip,2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_whip'];?>위</span>
                        </div>

                        <div class="DblueG mt35">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g" style="text-align:center;">
                                <b><?=($league=='KBO')? $schedule->away_pitcher : $schedule->away_pitcher_kor;?> vs <?=($league=='KBO')? $schedule->home : $MLB_team_kor[$schedule->home];?></b>
                            </div>
                            <p>&nbsp;</p>
                            <div class="right_g" style="text-align:center;">
                                <b><?=($league=='KBO')? $schedule->home_pitcher : $schedule->home_pitcher_kor;?> vs <?=($league=='KBO')? $schedule->away : $MLB_team_kor[$schedule->home];?></b>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG fff">
                            <span class="left_g"><?=number_format($away_pitcher_vs_teams->w/$away_pitcher_vs_teams->g*100);?>%</span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->g;?>경기 <?=$away_pitcher_vs_teams->w;?>승 <?=$away_pitcher_vs_teams->l;?>패</span></div></div>
                            </div>
                            <p>승패</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->g;?>경기 <?=$home_pitcher_vs_teams->w;?>승 <?=$home_pitcher_vs_teams->l;?>패</span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($home_pitcher_vs_teams->w/$home_pitcher_vs_teams->g*100);?>%</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span><?=number_format($away_pitcher_vs_teams->era,2);?></span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div><span><?=number_format($home_pitcher_vs_teams->era,2);?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g"><?php if(strlen($away_pitcher_vs_teams->ip)>2): $exp=explode(' ', $away_pitcher_vs_teams->ip); echo number_format($exp[0]/$away_pitcher_vs_teams->g, 1); else: echo number_format($away_pitcher_vs_teams->ip/$away_pitcher_vs_teams->g, 1); endif; ?></span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->ip;?></span></div></div>
                            </div>
                            <p>이닝/평균</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->ip;?></span></div></div>
                            </div>
                            <span class="right_g"><?php if(strlen($home_pitcher_vs_teams->ip)>2): $exp=explode(' ', $home_pitcher_vs_teams->ip); echo number_format($exp[0]/$home_pitcher_vs_teams->g, 1); else: echo number_format($home_pitcher_vs_teams->ip/$home_pitcher_vs_teams->g, 1); endif; ?></span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g"><?=number_format($away_pitcher_vs_teams->h/$away_pitcher_vs_teams->g, 1);?></span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->h;?></span></div></div>
                            </div>
                            <p>안타/평균</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->h;?></span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($home_pitcher_vs_teams->h/$home_pitcher_vs_teams->g, 1);?></span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->hr;?></span></div></div>
                            </div>
                            <p>피홈런</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->hr;?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->avg;?></span></div></div>
                            </div>
                            <p>피안타율</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->avg;?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG bb">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span><?=$away_pitcher_vs_teams->bb;?></span></div></div>
                            </div>
                            <p>볼넷</p>
                            <div class="right_g">
                                <div><div><span><?=$home_pitcher_vs_teams->bb;?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class="match_w">
                    <div class="relative">
                        <h3 class="center"><?=($league=='KBO')? $schedule->home_pitcher : $schedule->home_pitcher_kor;?> vs <?=($league=='KBO')? $full_name_team[$schedule->away] : $MLB_team_kor[$schedule->away];?> 결과</h3>
                        <div class="select">
                            <p class="off"><span class="pp"><?=($home_selector=='win_lose')? '승패' : 'O/U';?></span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=win_lose&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>&away_duration=<?=$away_duration;?>')">승패</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=over_under&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>&away_duration=<?=$away_duration;?>')">O/U</a></li>
                            </ul>
                        </div>
                        <table class="table_default league_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <?php if($home_selector=='win_lose'): ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($home_pitcher_with_home_team as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <?php $win_lose=''; if($item->away==$schedule->home): if($item->away_score>$item->home_score) $win_lose='win'; elseif($item->away_score<$item->home_score) $win_lose='lose'; else $win_lose='dra'; elseif($schedule->home==$item->home): if($item->away_score<$item->home_score) $win_lose='win'; elseif($item->away_score>$item->home_score) $win_lose='lose'; else $win_lose='dra'; endif;?>
                                        <td class="left pl20"><a class="result_btn mr10" href="/baseball/bet" ><img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=($league=='KBO')? $item->away.' '.$item->away_score.':'.$item->home_score.' '.$item->home : $MLB_team_kor[$item->away].' '.$item->away_score.':'.$item->home_score.' '.$MLB_team_kor[$item->home];?>"></a><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')';?></b> vs <?=($league=='KBO')? $item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>기준</th>
                                    <th>오버</th>
                                    <th>언더</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($home_pitcher_with_home_team as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <td class="left pl20"><span class="<?=($item->away_score+$item->home_score > 9.5)? 'plus' : 'minus';?>L2"></span><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')';?></b> vs <?=($league=='KBO')? $item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="underline">9.5</span></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                    </div>

                    <div class="relative">
                        <h3 class="center"><?=($league=='KBO')? $schedule->away_pitcher : $schedule->away_pitcher_kor;?> vs <?=($league=='KBO')? $full_name_team[$schedule->home] : $MLB_team_kor[$schedule->home];?> 결과</h3>
                        <div class="select">
                            <p class="off"><span class="pp"><?=($away_selector=='win_lose')? '승패' : 'O/U';?></span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?away_selector=win_lose&home_selector=<?=$home_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&away_duration=<?=$away_duration;?>&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>')">승패</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?away_selector=over_under&home_selector=<?=$home_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&away_duration=<?=$away_duration;?>&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>')">O/U</a></li>
                            </ul>
                        </div>
                        <table class="table_default league_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <?php if($away_selector=='win_lose'): ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($away_pitcher_with_home_team as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <?php $win_lose=''; if($item->away==$schedule->away): if($item->away_score>$item->home_score) $win_lose='win'; elseif($item->away_score<$item->home_score) $win_lose='lose'; else $win_lose='dra'; elseif($schedule->away==$item->home): if($item->away_score<$item->home_score) $win_lose='win'; elseif($item->away_score>$item->home_score) $win_lose='lose'; else $win_lose='dra'; endif;?>
                                        <td class="left pl20"><a class="result_btn mr10" href="/baseball/bet" ><img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=($league=='KBO')? $item->away.' '.$item->away_score.':'.$item->home_score.' '.$item->home : $MLB_team_kor[$item->away].' '.$item->away_score.':'.$item->home_score.' '.$MLB_team_kor[$item->home];?>"></a><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')';?></b> vs <?=($league=='KBO')? $item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>기준</th>
                                    <th>오버</th>
                                    <th>언더</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($away_pitcher_with_home_team as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <td class="left pl20"><span class="<?=($item->away_score+$item->home_score > 9.5)? 'plus' : 'minus';?>L2"></span><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')';?></b> vs <?=($league=='KBO')? $item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="underline">9.5</span></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                    </div>

                    <div class="relative">
                        <h3 class="center"><?=($league=='KBO')? $schedule->home_pitcher : $schedule->home_pitcher_kor;?> 최근결과</h3>
                        <div class="select" style="right:115px;">
                            <p class="off"><span class="pp"><?=($home_recent_selector=='win_lose')? '승패' : 'O/U';?></span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&home_recent_selector=win_lose&away_duration=<?=$away_duration;?>&away_recent_selector=<?=$away_recent_selector;?>&home_duration=<?=$home_duration;?>')">승패</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&home_recent_selector=over_under&away_duration=<?=$away_duration;?>&away_recent_selector=<?=$away_recent_selector;?>&home_duration=<?=$home_duration;?>')">O/U</a></li>
                            </ul>
                        </div>
                        <div class="select" style="width:108px;">
                            <p class="off"><span class="pp"><?=$home_duration;?>경기</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&home_duration=5&home_recent_selector=<?=$home_recent_selector;?>&away_duration=<?=$away_duration;?>')">5경기</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&home_duration=10&home_recent_selector=<?=$home_recent_selector;?>&away_duration=<?=$away_duration;?>')">10경기</a></li>
                            </ul>
                        </div>
                        <table class="table_default league_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <?php if($home_recent_selector=='win_lose'): ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($home_pitcher_recent as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <?php $win_lose=''; if($item->away==$schedule->home): if($item->away_score>$item->home_score) $win_lose='win'; elseif($item->away_score<$item->home_score) $win_lose='lose'; else $win_lose='dra'; elseif($schedule->home==$item->home): if($item->away_score<$item->home_score) $win_lose='win'; elseif($item->away_score>$item->home_score) $win_lose='lose'; else $win_lose='dra'; endif;?>
                                        <td class="left pl20"><a class="result_btn mr10" href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0" ><img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=($league=='KBO')? $item->away.' '.$item->away_score.':'.$item->home_score.' '.$item->home : $MLB_team_kor[$item->away].' '.$item->away_score.':'.$item->home_score.' '.$MLB_team_kor[$item->home];?>"></a><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.') vs '.$item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')'.' vs '.$MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>기준</th>
                                    <th>오버</th>
                                    <th>언더</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($home_pitcher_recent as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <td class="left pl20"><span class="<?=($item->away_score+$item->home_score > 9.5)? 'plus' : 'minus';?>L2"></span><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.') vs '.$item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')'.' vs '.$MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="underline">9.5</span></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </table>
                    </div>
                    <div class="relative">
                        <h3 class="center"><?=($league=='KBO')? $schedule->away_pitcher : $schedule->away_pitcher_kor;?> 최근결과</h3>
                        <div class="select" style="right:115px;">
                            <p class="off"><span class="pp"><?=($away_recent_selector=='win_lose')? '승패' : 'O/U';?></span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=win_lose&home_duration=<?=$home_duration;?>&home_recent_selector=<?=$home_recent_selector;?>&away_duration=<?=$away_duration;?>')">승패</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=over_under&home_duration=<?=$home_duration;?>&home_recent_selector=<?=$home_recent_selector;?>&away_duration=<?=$away_duration;?>')">O/U</a></li>
                            </ul>
                        </div>
                        <div class="select" style="width:108px;">
                            <p class="off"><span class="pp"><?=$away_duration;?>경기</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&away_duration=5&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>')">5경기</a></li>
                                <li><a href="javascript:location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop+'?home_selector=<?=$home_selector;?>&away_selector=<?=$away_selector;?>&away_recent_selector=<?=$away_recent_selector;?>&away_duration=10&home_recent_selector=<?=$home_recent_selector;?>&home_duration=<?=$home_duration;?>')">10경기</a></li>
                            </ul>
                        </div>
                        <table class="table_default league_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <?php if($away_recent_selector=='win_lose'): ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($away_pitcher_recent as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <?php $win_lose=''; if($item->away==$schedule->away): if($item->away_score>$item->home_score) $win_lose='win'; elseif($item->away_score<$item->home_score) $win_lose='lose'; else $win_lose='dra'; elseif($schedule->away==$item->home): if($item->away_score<$item->home_score) $win_lose='win'; elseif($item->away_score>$item->home_score) $win_lose='lose'; else $win_lose='dra'; endif;?>
                                        <td class="left pl20"><a class="result_btn mr10" href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0" ><img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=($league=='KBO')? $item->away.' '.$item->away_score.':'.$item->home_score.' '.$item->home : $MLB_team_kor[$item->away].' '.$item->away_score.':'.$item->home_score.' '.$MLB_team_kor[$item->home];?>"></a><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.') vs '.$item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')'.' vs '.$MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><span class="country_173"></span> 대한민국 // <?=$league;?></th>
                                    <th>스코어</th>
                                    <th>기준</th>
                                    <th>오버</th>
                                    <th>언더</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($away_pitcher_recent as $item): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                        <td class="left pl20"><span class="<?=($item->away_score+$item->home_score > 9.5)? 'plus' : 'minus';?>L2"></span><a href="/baseball/bet"><b><?=($league=='KBO')? $item->away.' ('.$item->away_pitcher.') vs '.$item->home.' ('.$item->home_pitcher.')' : $MLB_team_kor[$item->away].' ('.$item->away_pitcher_kor.')'.' vs '.$MLB_team_kor[$item->home].' ('.$item->home_pitcher_kor.')';?></a></td>
                                        <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                        <td><span class="underline">9.5</span></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5"><a href="/baseball/match_team/<?=$league;?>/<?=$item->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif;?>
                        </table>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="cheer">
        <h3 class="noBorder">오늘의 승리팀 응원하기</h3>
        <div class="teams">
            <div class="left">
                <div class="box_w">
                    <div class="c_logo"><span class="<?=($league=='KBO')? $team_initial[$schedule->away] : $MLB_team_initial[$schedule->away];?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=($league=='KBO')? $schedule->away : $MLB_team_kor[$schedule->away];?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add('<?=$league;?>', '<?=$schedule->no;?>', 'away')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <?php $away_cheer=($schedule->away_cheer+$schedule->home_cheer==0)? 0 : number_format($schedule->away_cheer/($schedule->away_cheer+$schedule->home_cheer)*100); ?>
                        <div style="width:<?=($away_cheer==0)? 10 : $away_cheer;?>%"><b><?=$schedule->away_cheer;?></b></div>
                    </div>
                    <span><?=$away_cheer;?>%</span>
                </div>
            </div>
            <div class="right">
                <div class="box_w">
                    <div class="c_logo"><span class="<?=($league=='KBO')? $team_initial[$schedule->home] : $MLB_team_initial[$schedule->home];?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=($league=='KBO')? $schedule->home : $MLB_team_kor[$schedule->home];?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add('<?=$league;?>', <?=$schedule->no;?>, 'home')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <?php $home_cheer=($schedule->away_cheer+$schedule->home_cheer==0)? 0 : number_format($schedule->home_cheer/($schedule->away_cheer+$schedule->home_cheer)*100); ?>
                        <div style="width:<?=($home_cheer==0)? 10 : $home_cheer?>%"><b><?=$schedule->home_cheer;?></b></div>
                    </div>
                    <span><?=($home_cheer==0)? 0 : $home_cheer?>%</span>
                </div>
            </div>
            <div class="center"><span class="<?=($league=='KBO')? 'KBO_bb' : 'MLB_L_B';?>"><?=$league;?></span></div>
        </div>
        <p>응원하기는 경기마다 1인당 1번씩만 가능합니다. 여러분이 응원하시는 모든 팀이 승리하기를 기원합니다.</p>
        <div class="comment">
            <ul>
                <?php foreach($comment_list as $item): ?>
                    <li>
                        <h5>스포네비***</h5>
                        <p><?=$item->content;?></p>
                        <div>
                            <span><?=$item->insert_dt;?></span>
                            <span><?=$item->ip;?></span>
                            <p class="like"><a href="javascript:add('<?=$league;?>', <?=$item->no;?>, 'good')"><?=$item->good;?></a></p>
                            <p class="bed"><a href="javascript:add('<?=$league;?>', <?=$item->no;?>, 'bad')"><?=$item->bad;?></a></p>
                        </div>
                    </li>
                <?php endforeach; if($comment_list==null):?><li><h5>등록된 댓글이 없습니다</emdfh></h5></li><?php endif; ?>
            </ul>
        </div>
        <div class="page_w">
            <div class="page">
                <?=$this->pagination->create_links();?>
            </div>
        </div>
        <div class="textarea_box">
            <div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="javascript:insert_comment()">입력</a></div>
            <p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    //textarea_box input
    $(document).ready(function(){
        document.body.scrollTop=<?=$scroll_top;?>;

        $('#opinion_text').click(function(){
            var state = $('.opinion_text').css('display');
            if(state == 'none'){
                $('#opinion_text').removeClass('on');
            }else{
                $('#opinion_text').addClass('on');
            }
        });

        //game_league _ 상단리그종류메뉴
        $(".other_btn").click(function(){
            $(this).parents().find(".other_view").slideToggle(); //내용 클릭하면 이동
            return false;
        });

        //line_pop 오픈
        $(".line_btn a").click(function(){
            $(this).parent().parent().siblings(".line_pop").slideDown();
            return false;
        });
        //line_pop 닫기
        $(".line_pop .close_btn a").click(function(){
            $(this).parent().parent(".line_pop").slideUp();
            return false;
        });


        $(".before_btn").click(function(){
            $(".opp01 .before").slideToggle();
            return false;
        });
    });

    function add(league, no, flag){
        $.ajax({
            url:"/baseball/add_ajax",
            type:"POST",
            data:{no:no, flag:flag, league:league},
            complete:function(){
                location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop);
            }
        });
    }

    function insert_comment(league){
        $.ajax({
            url:"/baseball/insert_comment_ajax",
            type:"POST",
            data:{schedule_no:<?=$schedule->no;?>, content:$('#opinion_text').val(), league:league},
            complete:function(){
                location.replace('/baseball/match_pitcher/<?=$league;?>/<?=$schedule->no;?>/'+document.body.scrollTop);
            }
        });
    }
</script>