<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
<?php $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','KT'=>'KT','삼성'=>'SS'); ?>
<?php $per_arr=array(1=>100,2=>93,3=>86,4=>79,5=>72,6=>65,7=>58,8=>51,9=>44,10=>37); ?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="Match_w">
    <div class="match KBO">
        <div class="title_bar">
            <p>야구 - <?=($league=='KBO')? '대한민국' : '미국';?> - <span><?=($league=='KBO')? 'KBO' : 'MLB';?></span></p>
        </div>
        <div class="score_bar">
            <div>
                <div class="team">
                    <p class="st"><?=$schedule->away_rank;?>위</p>
                    <p><?=$full_name_team[$schedule->away];?></p>
                    <span>선발 : <?=$schedule->away_pitcher;?></span>
                </div>
                <div class="team_logo"><span class="<?=$team_initial[$schedule->away];?>_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
                <p>VS</p>
                <div class="team_logo"><span class="<?=$team_initial[$schedule->home];?>_L"></span></div><!-- 선발비교 선택시 선수사진으로 변경됨 -->
                <div class="team">
                    <p class="st"><?=$schedule->home_rank;?>위</p>
                    <p><?=$full_name_team[$schedule->home];?></p>
                    <span>선발 : <?=$schedule->home_pitcher;?></span>
                </div>
            </div>
            <ul>
                <li><?=str_replace('-', '.', $schedule->date);?></li>
                <li><?=$schedule->stadium;?>경기장</li>
            </ul>
        </div>
    </div>
    <div class="matchTab">
        <ul class="title">
            <li class="on"><a href="#r1">팀간 비교</a></li>
            <li><a href="#r2">선발 비교</a></li>
        </ul>
        <ul class="result">
            <li id="r1" class="on"><!-- 팀간 비교 -->
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
                        <div class="result_btn_div">
                            <span class="left_g"><?=$schedule->away_recent_win_lose;?></span>
                            <div class="left_g">
                                <?php foreach($schedule->away_recent as $key=>$item): ?><a class="result_btn" href="javascript:javascript:location.replace('/baseball/match/KBO/<?=$schedule->away_recent_ten_game[9-$key]['no'];?>/0');" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$item;?>.png" alt="" title="<?=$schedule->away_recent_ten_game[9-$key]['away'];?> <?=$schedule->away_recent_ten_game[9-$key]['score'];?> <?=$schedule->away_recent_ten_game[9-$key]['home'];?>"></a><?php endforeach; ?>
                            </div>
                            <p>최근 10경기</p>
                            <div class="right_g">
                                <?php foreach($schedule->home_recent as $key=>$item): ?><a class="result_btn" href="javascript:javascript:location.replace('/baseball/match/KBO/<?=$schedule->away_recent_ten_game[9-$key]['no'];?>/0');" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$item;?>.png" alt="" title="<?=$schedule->home_recent_ten_game[9-$key]['away'];?> <?=$schedule->home_recent_ten_game[9-$key]['score'];?> <?=$schedule->home_recent_ten_game[9-$key]['home'];?>"></a><?php endforeach; ?>
                            </div>
                            <span class="right_g"><?=$schedule->home_recent_win_lose;?></span>
                        </div>
                        <div class="mt15">
                            <span class="left_g"><?=$schedule->away_rank;?>위</span>
                            <div class="left_g">
                                <div><b class="aa"><?=$schedule->away_win;?>승 <?=$schedule->away_lose;?>패 <?=$schedule->away_tie;?>무</b></div>
                            </div>
                            <p>리그 순위</p>
                            <div class="right_g">
                                <div><b class="aa"><?=$schedule->home_win;?>승 <?=$schedule->home_lose;?>패 <?=$schedule->home_tie;?>무</b></div>
                            </div>
                            <span class="right_g"><?=$schedule->home_rank;?>위</span>
                        </div>
                        <div class="mt15">
                            <span class="left_g"><?=$schedule->away_over_rank;?>위</span>
                            <div class="left_g">
                                <div><b class="aa">Over <?=$schedule->away_over;?>  /  Under <?=$schedule->away_under;?></b></div>
                            </div>
                            <p><span class="underline"><?=$over_under_reference_value;?></span></p>
                            <div class="right_g">
                                <div><b class="aa">Over <?=$schedule->home_over;?>  /  Under <?=$schedule->home_under;?></b></div>
                            </div>
                            <span class="right_g"><?=$schedule->home_over_rank;?>위</span>
                        </div>
                        <div class="yellowG mt35">
                            <span class="left_g"><?=$rank['away_homegame_win'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_homegame_win']];?>%"><span><?=$schedule->away_homegame_win;?>승 <?=$schedule->away_homegame_lose;?>패</span></div></div>
                            </div>
                            <p>홈</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_homegame_win']];?>%"><span><?=$schedule->home_homegame_win;?>승 <?=$schedule->home_homegame_lose;?>패</span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_homegame_win'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_awaygame_win'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_awaygame_win']];?>%"><span><?=$schedule->away_awaygame_win;?>승 <?=$schedule->away_awaygame_lose;?>패</span></div></div>
                            </div>
                            <p>원정</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_awaygame_win']];?>%"><span><?=$schedule->home_awaygame_win;?>승 <?=$schedule->home_awaygame_lose;?>패</span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_awaygame_win'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_plus'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_plus']];?>%"><span><?=number_format($schedule->away_plus/$schedule->away_g,2);?></span></div></div>
                            </div>
                            <p>득점</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_plus']];?>%"><span><?=number_format($schedule->home_plus/$schedule->home_g,2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_plus'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_minus'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_minus']];?>%"><span><?=number_format($schedule->away_minus/$schedule->away_g,2);?></span></div></div>
                            </div>
                            <p>실점</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_minus']];?>%"><span><?=number_format($schedule->home_minus/$schedule->home_g,2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_minus'];?>위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g"><?=$rank['away_avg'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_avg']];?>%"><span><?=number_format($schedule->away_avg,3);?></span></div></div>
                            </div>
                            <p>타율</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_avg']];?>%"><span><?=number_format($schedule->home_avg,3);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_avg'];?>위</span>
                        </div>
                        <div class="yellowG bb">
                            <span class="left_g"><?=$rank['away_hr'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=$per_arr[$rank['away_hr']];?>%"><span><?=$schedule->away_hr;?></span></div></div>
                            </div>
                            <p>홈런</p>
                            <div class="right_g">
                                <div><div style="width:<?=$per_arr[$rank['home_hr']];?>%"><span><?=$schedule->home_hr;?></span></div></div>
                            </div>
                            <span class="right_g"><?=$rank['home_hr'];?>위</span>
                        </div>

                        <h4>시즌 상대전적</h4>
                        <div class="result_btn_div">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <b><?=$h2h['away_win'];?>/<?=$h2h['home_win'];?></b>
                                <?php foreach($h2h['away_recent'] as $key=>$item): ?>
                                    <a class="result_btn" href="/baseball/match/KBO/<?=$h2h['away_win_lose']['data'][5-$key]->no;?>/0" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?=$item;?>.png" title="<?=$h2h['away_win_lose']['data'][5-$key]->away.' '.$h2h['away_win_lose']['data'][5-$key]->away_score.' : '.$h2h['away_win_lose']['data'][5-$key]->home_score.' '.$h2h['away_win_lose']['data'][5-$key]->home;?>"></a>
                                <?php endforeach; ?>
                            </div>
                            <p>최근 6경기</p>
                            <div class="right_g">
                                <?php foreach($h2h['away_recent'] as $key=>$item): ?>
                                    <a class="result_btn" href="/baseball/match/KBO/<?=$h2h['away_win_lose']['data'][5-$key]->no;?>/0" onfocus="this.blur();"><img src="/public/lib/image/base/btn_<?php if($item=='win') echo 'lose'; elseif($item=='lose') echo 'win'; else echo $item;?>.png" title="<?=$h2h['away_win_lose']['data'][5-$key]->away.' '.$h2h['away_win_lose']['data'][5-$key]->away_score.' : '.$h2h['away_win_lose']['data'][5-$key]->home_score.' '.$h2h['away_win_lose']['data'][5-$key]->home;?>"></a>
                                <?php endforeach; ?>
                                <b><?=$h2h['home_win'];?>/<?=$h2h['away_win'];?></b>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="mt15">
                            <span class="left_g">50%</span>
                            <div class="left_g">
                                <div><b class="aa"><?=$h2h['away_win_lose']['away_win'];?>승 <?=$h2h['away_win_lose']['away_lose'];?>패 <?=$h2h['away_win_lose']['dra'];?>무</b></div>
                            </div>
                            <p>승패</p>
                            <div class="right_g">
                                <div><b class="aa"><?=$h2h['away_win_lose']['away_lose'];?>승 <?=$h2h['away_win_lose']['away_win'];?>패 <?=$h2h['away_win_lose']['dra'];?>무</b></div>
                            </div>
                            <span class="right_g">50%</span>
                        </div>
                        <div class="mt15">
                            <span class="left_g"><?=$over_under['over_per'];?>%</span>
                            <div class="left_g">
                                <div><b class="aa">Over <?=$over_under['over'];?></b></div>
                            </div>
                            <p>O/U</p>
                            <div class="right_g">
                                <div><b class="aa">Under <?=$over_under['under'];?></b></div>
                            </div>
                            <span class="right_g"><?=$over_under['under_per'];?>%</span>
                        </div>
                        <div class="blueG">
                            <span class="left_g"><?=$over_under['away_r_per'];?></span>
                            <div class="left_g">
                                <div><div style="width:<?=$over_under['away_r_per']*10;?>%"><span><?=$over_under['away_r'];?></span></div></div>
                            </div>
                            <p>득점/평균</p>
                            <div class="right_g">
                                <div><div style="width:<?=$over_under['home_r_per']*10;?>%"><span><?=$over_under['home_r'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$over_under['home_r_per'];?></span>
                        </div>
                        <div class="blueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div style="width:<?=$h2h['away_avg']*300;?>%"><span><?=$h2h['away_avg'];?></span></div></div>
                            </div>
                            <p>타율</p>
                            <div class="right_g">
                                <div><div style="width:<?=$h2h['home_avg']*300;?>%"><span><?=$h2h['home_avg'];?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="blueG bb">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div style="width:<?=$h2h['away_hr']*5;?>%"><span><?=$h2h['away_hr'];?></span></div></div>
                            </div>
                            <p>홈런</p>
                            <div class="right_g">
                                <div><div style="width:<?=$h2h['home_hr']*5;?>%"><span><?=$h2h['home_hr'];?></span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                    </div>
                </div>

                <div class="match_w">
                    <h3 class="center">2017시즌 상대전적 결과</h3>
                    <table class="table_default league_table01 league_table01_1">
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
                        <tr>
                            <th>날짜</th>
                            <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>B’s</th>
                            <th>DATA</th>
                        </tr>
                        <?php foreach($h2h_last_six_game as $item): ?>
                            <tr>
                                <td><?=$item->date;?></td>
                                <td class="left pl20"><a href="javascript:void(0);"><?php if($item->away_score > $item->home_score) echo '<b>';?><?=$item->away.'('.$item->away_pitcher.')';?><?php if($item->away_score > $item->home_score) echo '</b>';?>  vs  <?php if($item->away_score < $item->home_score) echo '<b>';?><?=$item->home.'('.$item->home_pitcher.')';?><?php if($item->away_score < $item->home_score) echo '</b>';?></a></td>
                                <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5" style="margin-top: 9px;"><a href="/baseball/match/KBO/<?=$item->no;?>/0">매치정보</a></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <h3 class="center">홈팀 최근 10경기 결과</h3>
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
                        <tr>
                            <th>날짜</th>
                            <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>B’s</th>
                            <th>DATA</th>
                        </tr>
                        <?php $total_win=0; $total_lose=0; $plus=0; $minus=0;?>
                        <?php foreach($recent_ten_game['home_recent_ten_game'] as $item): ?>
                            <tr>
                                <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                <td class="left pl20">
                                    <a class="result_btn mr10" href="/baseball/KBO/<?=$item->no;?>/0" onfocus="this.blur();">
                                        <?php if($schedule->home==$item->away): $plus+=$item->away_score; $minus+=$item->home_score; ?>
                                        <?php elseif($schedule->home==$item->home): $plus+=$item->home_score; $minus+=$item->away_score; endif; ?>
                                        <?php if($schedule->home==$item->away && $item->away_score > $item->home_score): $win_lose='win'; $total_win++; elseif($schedule->home==$item->away && $item->away_score < $item->home_score): $win_lose='lose'; $total_lose++; elseif($schedule->home==$item->away && $item->away_score == $item->home_score): $win_lose='dra'; ?>
                                        <?php elseif($schedule->home==$item->home && $item->away_score < $item->home_score): $win_lose='win'; $total_win++; elseif($schedule->home==$item->home && $item->away_score > $item->home_score): $win_lose='lose'; $total_lose++; elseif($schedule->home==$item->home && $item->away_score == $item->home_score): $win_lose='dra'; endif;?>
                                        <img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=$item->away;?> <?=$item->away_score;?>:<?=$item->home_score;?> <?=$item->home;?>">
                                    </a>
                                    <a href="team_info.php"><b><?=$item->away.'('.$item->away_pitcher.')';?></b>  vs  <?=$item->home.'('.$item->home_pitcher.')';?></a></td>
                                <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5" style="margin-top: 9px;"><a href="/baseball/match/KBO/<?=$item->no;?>/0">매치정보</a></span></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="7">
                                <b>최근 10경기 종합기록
                                    <span class="pl15">
                                        <a class="result_btn mr10" href="javascript:void(0);" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png"></a><?=$total_win;?>
                                        <a class="result_btn ml10 mr10" href="javascript:void(0);" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png"></a><?=$total_lose;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">득</a><?=$plus;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">실</a><?=$minus;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">득/실</a><?=number_format(($plus+$minus)/10,1);?>
                                    </span>
                                </b>
                            </td>
                        </tr>
                    </table>
                    <h3 class="center">원정팀 최근 10경기 결과</h3>
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
                        <tr>
                            <th>날짜</th>
                            <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>B’s</th>
                            <th>DATA</th>
                        </tr>
                        <?php $total_win=0; $total_lose=0; $plus=0; $minus=0;?>
                        <?php foreach($recent_ten_game['away_recent_ten_game'] as $item): ?>
                            <tr>
                                <td><?php $exp=explode('-', $item->date); echo $exp[1].'.'.$exp[2];?></td>
                                <td class="left pl20">
                                    <a class="result_btn mr10" href="/baseball/KBO/<?=$item->no;?>/0" onfocus="this.blur();">
                                        <?php if($schedule->away==$item->away): $plus+=$item->away_score; $minus+=$item->home_score; ?>
                                        <?php elseif($schedule->away==$item->home): $plus+=$item->home_score; $minus+=$item->away_score; endif; ?>
                                        <?php if($schedule->away==$item->away && $item->away_score > $item->home_score): $win_lose='win'; $total_win++; elseif($schedule->away==$item->away && $item->away_score < $item->home_score): $win_lose='lose'; $total_lose++; elseif($schedule->away==$item->away && $item->away_score == $item->home_score): $win_lose='dra'; ?>
                                        <?php elseif($schedule->away==$item->home && $item->away_score < $item->home_score): $win_lose='win'; $total_win++; elseif($schedule->away==$item->home && $item->away_score > $item->home_score): $win_lose='lose'; $total_lose++; elseif($schedule->away==$item->home && $item->away_score == $item->home_score): $win_lose='dra'; endif;?>
                                        <img src="/public/lib/image/base/btn_<?=$win_lose;?>2.png" title="<?=$item->away;?> <?=$item->away_score;?>:<?=$item->home_score;?> <?=$item->home;?>">
                                    </a>
                                    <a href="team_info.php"><b><?=$item->away.'('.$item->away_pitcher.')';?></b>  vs  <?=$item->home.'('.$item->home_pitcher.')';?></a></td>
                                <td><b class="score red"><?=$item->away_score;?><span class="colon">:</span><?=$item->home_score;?></b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5" style="margin-top: 9px;"><a href="/baseball/match/KBO/<?=$item->no;?>/0">매치정보</a></span></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="7">
                                <b>최근 10경기 종합기록
                                    <span class="pl15">
                                        <a class="result_btn mr10" href="javascript:void(0);" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png"></a><?=$total_win;?>
                                        <a class="result_btn ml10 mr10" href="javascript:void(0);" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png"></a><?=$total_lose;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">득</a><?=$plus;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">실</a><?=$minus;?>
                                        <a href="javascript:void(0);" class="graybtn ml10 mr10">득/실</a><?=number_format(($plus+$minus)/10,1);?>
                                    </span>
                                </b>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li id="r2" class=""><!-- 선발 비교 -->
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
                        <div class="mt15">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <b>45승 25패 1무</b>
                            </div>
                            <p>승패</p>
                            <div class="right_g">
                                <b>45승 25패 1무</b>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>

                        <div class="yellowG mt35">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:86%"><span>0.655</span></div></div>
                            </div>
                            <p>승률</p>
                            <div class="right_g">
                                <div><div style="width:86%"><span>0.655</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">55%</span>
                            <div class="left_g">
                                <div><div style="width:56%"><span>144G / O 75</span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div style="width:56%"><span>144G / O 75</span></div></div>
                            </div>
                            <span class="right_g">55%</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">6&frac13;</span>
                            <div class="left_g">
                                <div><div style="width:48%"><span>5.75</span></div></div>
                            </div>
                            <p>이닝/평균</p>
                            <div class="right_g">
                                <div><div style="width:48%"><span>5.75</span></div></div>
                            </div>
                            <span class="right_g">6&frac13;</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:42%"><span>4.25</span></div></div>
                            </div>
                            <p>QS</p>
                            <div class="right_g">
                                <div><div style="width:42%"><span>4.25</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:49%"><span>0.325</span></div></div>
                            </div>
                            <p>삼진</p>
                            <div class="right_g">
                                <div><div style="width:49%"><span>0.325</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <p>피안타/평균</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <p>피홈런</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <p>피안타율</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>
                        <div class="yellowG bb">
                            <span class="left_g">1위</span>
                            <div class="left_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <p>WHIP</p>
                            <div class="right_g">
                                <div><div style="width:40%"><span>85</span></div></div>
                            </div>
                            <span class="right_g">1위</span>
                        </div>

                        <div class="DblueG mt35">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g" style="text-align:center;">
                                <b>데이비드 허프 vs 삼성</b>
                            </div>
                            <p>&nbsp;</p>
                            <div class="right_g" style="text-align:center;">
                                <b>윤성환 vs LG</b>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG fff">
                            <span class="left_g">60%</span>
                            <div class="left_g">
                                <div><div><span>10경기 7승 2패</span></div></div>
                            </div>
                            <p>&nbsp;</p>
                            <div class="right_g">
                                <div><div><span>10경기 7승 2패</span></div></div>
                            </div>
                            <span class="right_g">60%</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>3.55</span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div><span>3.55</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <p>이닝/평균</p>
                            <div class="right_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <p>삼진/평균</p>
                            <div class="right_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <p>안타/평균</p>
                            <div class="right_g">
                                <div><div><span>25</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>5</span></div></div>
                            </div>
                            <p>피홈런</p>
                            <div class="right_g">
                                <div><div><span>5</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>0.333</span></div></div>
                            </div>
                            <p>피안타율</p>
                            <div class="right_g">
                                <div><div><span>0.333</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                        <div class="DblueG bb">
                            <span class="left_g">&nbsp;</span>
                            <div class="left_g">
                                <div><div><span>1.65</span></div></div>
                            </div>
                            <p>WHIP</p>
                            <div class="right_g">
                                <div><div><span>1.65</span></div></div>
                            </div>
                            <span class="right_g">&nbsp;</span>
                        </div>
                    </div>
                </div>
                <div class="match_w">
                    <h3 class="center">류제국 vs 삼성라이온즈 결과</h3>
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
                        <tr>
                            <th>날짜</th>
                            <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>B’s</th>
                            <th>DATA</th>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                            <td><b class="score red">2<span class="colon">:</span>7</b></td>
                            <td>3.15</td>
                            <td><span class="graybox">1.93</span></td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                            <td><b class="score red">2<span class="colon">:</span>7</b></td>
                            <td>3.15</td>
                            <td><span class="graybox">1.93</span></td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                    </table>
                    <h3 class="center">윤성환 vs LG트윈스 결과</h3>
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
                        <tr>
                            <th>날짜</th>
                            <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>B’s</th>
                            <th>DATA</th>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                            <td><b class="score red">2<span class="colon">:</span>7</b></td>
                            <td>3.15</td>
                            <td><span class="graybox">1.93</span></td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                            <td><b class="score red">2<span class="colon">:</span>7</b></td>
                            <td>3.15</td>
                            <td><span class="graybox">1.93</span></td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                        <tr>
                            <td>08.01</td>
                            <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                            <td><b class="score red">8<span class="colon">:</span>7</b></td>
                            <td><span class="graybox">1.93</span></td>
                            <td>3.15</td>
                            <td>51</td>
                            <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                        </tr>
                    </table>
                    <div class="relative">
                        <h3 class="center">류제국 최근 선발경기</h3>
                        <div class="select">
                            <p class="off"><span class="pp">5경기</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="">5경기</a></li>
                                <li><a href="">10경기</a></li>
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
                            <tr>
                                <th>날짜</th>
                                <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                                <th>스코어</th>
                                <th>승</th>
                                <th>패</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="relative">
                        <h3 class="center">윤성환 최근 선발경기</h3>
                        <div class="select">
                            <p class="off"><span class="pp">5경기</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="">5경기</a></li>
                                <li><a href="">10경기</a></li>
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
                            <tr>
                                <th>날짜</th>
                                <th class="left pl20"><span class="country_173"></span> 대한민국 // KBO</th>
                                <th>스코어</th>
                                <th>승</th>
                                <th>패</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_lose2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php">LG (류제국)  vs  <b>삼성 (윤성환)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>08.01</td>
                                <td class="left pl20"><a class="result_btn mr10" href="match.php" onfocus="this.blur();"><img src="/public/lib/image/base/btn_win2.png" alt="" title="두산 4:1 넥센"></a><a href="team_info.php"><b>LG (류제국)</b>  vs  삼성 (윤성환)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
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
                    <div class="c_logo"><span class="<?=$team_initial[$schedule->away];?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=$schedule->away;?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add(<?=$schedule->no;?>, 'away')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <?php $away_cheer=($schedule->away_cheer+$schedule->home_cheer==0)? 0 : number_format($schedule->away_cheer/($schedule->away_cheer+$schedule->home_cheer)*100);?>
                        <div style="width:<?=($away_cheer==0)? 10 : $away_cheer;?>%"><b><?=$schedule->away_cheer;?></b></div>
                    </div>
                    <span><?=$away_cheer;?>%</span>
                </div>
            </div>
            <div class="right">
                <div class="box_w">
                    <div class="c_logo"><span class="<?=$team_initial[$schedule->home];?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=$schedule->home;?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add(<?=$schedule->no;?>, 'home')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <div style="width:<?=($away_cheer==0)? 10 : 100-$away_cheer?>%"><b><?=$schedule->home_cheer;?></b></div>
                    </div>
                    <span><?=($away_cheer==0)? 0 : 100-$away_cheer?>%</span>
                </div>
            </div>
            <div class="center"><span class="KBO_bb">KBO</span></div>
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
                            <p class="like"><a href="javascript:add(<?=$item->no;?>, 'good')"><?=$item->good;?></a></p>
                            <p class="bed"><a href="javascript:add(<?=$item->no;?>, 'bad')"><?=$item->bad;?></a></p>
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

        //matchTab
        $(".title li:eq(0) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r1").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});
        $(".title li:eq(1) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r2").addClass("on"); $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});

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

    function add(no, flag){
        $.ajax({
            url:"/baseball/add_ajax",
            type:"POST",
            data:{no:no, flag:flag},
            complete:function(){
                location.replace('/baseball/match/KBO/<?=$schedule->no;?>/'+document.body.scrollTop);
            }
        });
    }
    function insert_comment(){
        $.ajax({
            url:"/baseball/insert_comment_ajax",
            type:"POST",
            data:{schedule_no:<?=$schedule->no;?>, content:$('#opinion_text').val()},
            complete:function(){
                location.replace('/baseball/match/KBO/<?=$schedule->no;?>/'+document.body.scrollTop);
            }
        });
    }
</script>