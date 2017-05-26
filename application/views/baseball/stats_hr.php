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
                <li><a href="/baseball/stats_win_rate">리그 승률</a></li>
                <li><a href="/baseball/stats_h?over_under=1.5">리그 안타</a></li>
                <li class="on"><a href="/baseball/stats_hr">리그 홈런</a></li>
            </ul>
            <ul class="tab_view01 gameMain_view">
                <li class="active" style="padding-top:40px;"><!-- 리그 홈런 -->
                    <div class="tab01_w">
                        <ul class="tab01_2 TLS">
                            <li class="<?php if($tab_selector==1) echo 'on';?> ls01"><a href="/baseball/stats_hr?tab_selector=1">첫홈런</a></li>
                            <li class="<?php if($tab_selector==2) echo 'on';?> ls02"><a href="/baseball/stats_hr?tab_selector=2&over_under=1.5">전체홈런</a></li>
                            <li class="<?php if($tab_selector==3) echo 'on';?> ls03"><a href="/baseball/stats_hr?tab_selector=3&over_under=1.5">팀당홈런</a></li>
                            <li class="<?php if($tab_selector==4) echo 'on';?> ls04"><a href="/baseball/stats_hr?tab_selector=4">양팀홈런</a></li>
                            <li class="<?php if($tab_selector==5) echo 'on';?> ls05"><a href="/baseball/stats_hr?tab_selector=5">홈런분포</a></li>
                        </ul>
                    </div>
                    <ul class="LS_view_w">
                        <li class="active"><!-- 홈런_첫홈런 -->
                            <div class="pt15">
                                <ul class="inning_view">
                                    <li class="iv01 active">
                                        <?php if($tab_selector==2 || $tab_selector==3): ?>
                                        <div class="tab2_w tab2_w_2 tab2_w_2_">
                                            <ul class="tab02 LS_tab">
                                                <li class="<?php if($over_under==0.5) echo 'on';?>"><a href="/baseball/stats_hr?over_under=0.5&tab_selector=<?=$tab_selector;?>">0.5</a></li>
                                                <li class="<?php if($over_under==1.5) echo 'on';?>"><a href="/baseball/stats_hr?over_under=1.5&tab_selector=<?=$tab_selector;?>">1.5</a></li>
                                                <li class="<?php if($over_under==2.5) echo 'on';?>"><a href="/baseball/stats_hr?over_under=2.5&tab_selector=<?=$tab_selector;?>">2.5</a></li>
                                            </ul>
                                        </div>
                                        <?php endif;?>
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp"><?php if($duration==null || $duration=='all') echo '시즌 전체'; else echo '최근 '.$duration.' 경기';?></span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="/baseball/stats_hr?&sort_home_away=<?=$sort_home_away;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>">시즌 전체</a></li>
                                                <li class=""><a href="/baseball/stats_hr?duration=10&&sort_home_away=<?=$sort_home_away;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>">최근 10경기</a></li>
                                                <li class=""><a href="/baseball/stats_hr?duration=15&&sort_home_away=<?=$sort_home_away;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>">최근 15경기</a></li>
                                                <li class=""><a href="/baseball/stats_hr?duration=20&&sort_home_away=<?=$sort_home_away;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>">최근 20경기</a></li>
                                                <li class=""><a href="/baseball/stats_hr?duration=30&&sort_home_away=<?=$sort_home_away;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit <?php if($tab_selector==2 || $tab_selector==3) echo 'table_all_home_visit2'; else if($tab_selector==5) echo 'table_all_home_visit3';?>" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/>
                                                <?php if($tab_selector==1 || $tab_selector==4): ?>
                                                    <col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
                                                <?php elseif($tab_selector==5): ?>
                                                    <col width="50px"><col width="27px"><col width="27px"><col width="27px"><col width="27px"><col width="34px"><col width="45px"><col width="50px"><col width="27px"><col width="27px"><col width="27px"><col width="27px"><col width="34px"><col width="45px"><col width="50px"><col width="27px"><col width="27px"><col width="27px"><col width="27px"><col width="34px"><col width="45px">
                                                <?php else: ?>
                                                    <col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px"><col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px"><col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px">
                                                <?php endif; ?>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <?php if($tab_selector==1 || $tab_selector==4): ?>
                                                    <th colspan="6" <?php if($sort_home_away=='all') echo 'style="color:black;"';?>>전체 기록<a class="up_down up" href="/baseball/stats_hr?sort_home_away=all&duration=<?=$duration;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                    <th colspan="6" <?php if($sort_home_away=='home') echo 'style="color:black;"';?>>홈 기록<a class="up_down up" href="/baseball/stats_hr?sort_home_away=home&duration=<?=$duration;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                    <th colspan="6" <?php if($sort_home_away=='away') echo 'style="color:black;"';?>>원정 기록<a class="up_down up" href="/baseball/stats_hr?sort_home_away=away&duration=<?=$duration;?>&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <?php else: ?>
                                                    <th colspan="<?=($tab_selector==5)? 7 : 5; ?>" <?php if($sort_inning=='full') echo 'style="color:black;"';?>>풀타임<a class="up_down up" href="/baseball/stats_hr?&duration=<?=$duration;?>&sort_inning=full&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                    <th colspan="<?=($tab_selector==5)? 7 : 5; ?>" <?php if($sort_inning=='half') echo 'style="color:black;"';?>>5이닝<a class="up_down up" href="/baseball/stats_hr?&duration=<?=$duration;?>&sort_inning=half&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                    <th colspan="<?=($tab_selector==5)? 7 : 5; ?>" <?php if($sort_inning=='first') echo 'style="color:black;"';?>>1이닝<a class="up_down up" href="/baseball/stats_hr?&duration=<?=$duration;?>&sort_inning=first&tab_selector=<?=$tab_selector;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <?php endif; ?>
                                            </tr>
                                            <tr>
                                                <th>순위</th><th>팀</th>
                                                <?php if($tab_selector==1): ?>
                                                    <th>경기수</th><th>승률</th><th>승</th><th>패</th><th>노</th><th>득:실</th>
                                                    <th>경기수</th><th>승률</th><th>승</th><th>패</th><th>노</th><th>득:실</th>
                                                    <th>경기수</th><th>승률</th><th>승</th><th>패</th><th>노</th><th>득:실</th>
                                                <?php elseif($tab_selector==2 || $tab_selector==3): ?>
                                                    <th>경기수</th><th>Over</th><th>O%</th><th>득:실</th><th>경기당</th>
                                                    <th>경기수</th><th>Over</th><th>O%</th><th>득:실</th><th>경기당</th>
                                                    <th>경기수</th><th>Over</th><th>O%</th><th>득:실</th><th>경기당</th>
                                                <?php elseif($tab_selector==4): ?>
                                                    <th>경기수</th><th>예스</th><th>노</th><th>Y%</th><th>N%</th><th>득:실</th>
                                                    <th>경기수</th><th>예스</th><th>노</th><th>Y%</th><th>N%</th><th>득:실</th>
                                                    <th>경기수</th><th>예스</th><th>노</th><th>Y%</th><th>N%</th><th>득:실</th>
                                                <?php else: ?>
                                                    <th>경기수</th><th>0개</th><th>1개</th><th>2개</th><th>3개</th><th>4개+</th><th>득:실</th>
                                                    <th>경기수</th><th>0개</th><th>1개</th><th>2개</th><th>3개</th><th>4개+</th><th>득:실</th>
                                                    <th>경기수</th><th>0개</th><th>1개</th><th>2개</th><th>3개</th><th>4개+</th><th>득:실</th>
                                                <?php endif; ?>
                                            </tr>
                                            <?php foreach($rank_board as $item): ?>
                                                <tr>
                                                    <td><span class="rankdot0<?=$item['rank'];?>_color"><b><?=$item['rank'];?></b></span></td>
                                                    <td><?=$item['team'];?></td>
                                                    <?php if($tab_selector==1): ?>
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
                                                    <?php elseif($tab_selector==2 || $tab_selector==3): ?>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['over'];?></td>
                                                        <td><?=$item['over_p'].'%';?></td>
                                                        <td><?=$item['plus'].':'.$item['minus'];?></td>
                                                        <td><?=number_format($item['plus']/$item['total_g'],1);?></td>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['over_inning_5'];?></td>
                                                        <td><?=$item['over_inning_5_p'].'%';?></td>
                                                        <td><?=$item['plus_inning_5'].':'.$item['minus_inning_5'];?></td>
                                                        <td><?=number_format($item['plus_inning_5']/$item['total_g'],1);?></td>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['over_inning_1'];?></td>
                                                        <td><?=$item['over_inning_1_p'].'%';?></td>
                                                        <td><?=$item['plus_inning_1'].':'.$item['minus_inning_1'];?></td>
                                                        <td><?=number_format($item['plus_inning_1']/$item['total_g'],1);?></td>
                                                    <?php elseif($tab_selector==4): ?>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['all_hr'];?></td>
                                                        <td><?=$item['total_g']-$item['all_hr'];?></td>
                                                        <td><?=$item['all_hr_p'];?>%</td>
                                                        <td><?=number_format(($item['total_g']-$item['all_hr'])/$item['total_g']*100);?>%</td>
                                                        <td><?=$item['plus'].':'.$item['minus'];?></td>
                                                        <td><?=$item['home_g'];?></td>
                                                        <td><?=$item['home_hr'];?></td>
                                                        <td><?=$item['home_g']-$item['home_hr'];?></td>
                                                        <td><?=$item['home_hr_p'];?>%</td>
                                                        <td><?=number_format(($item['home_g']-$item['home_hr'])/$item['home_g']*100);?>%</td>
                                                        <td><?=$item['plus_home'].':'.$item['minus_home'];?></td>
                                                        <td><?=$item['away_g'];?></td>
                                                        <td><?=$item['away_hr'];?></td>
                                                        <td><?=$item['away_hr']-$item['away_hr'];?></td>
                                                        <td><?=$item['away_hr_p'];?>%</td>
                                                        <td><?=number_format(($item['away_g']-$item['away_hr'])/$item['away_g']*100);?>%</td>
                                                        <td><?=$item['plus_away'].':'.$item['minus_away'];?></td>
                                                    <?php elseif($tab_selector==5): ?>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['full_hr_0'];?></td>
                                                        <td><?=$item['full_hr_1'];?></td>
                                                        <td><?=$item['full_hr_2'];?></td>
                                                        <td><?=$item['full_hr_3'];?></td>
                                                        <td><?=$item['full_hr_4'];?></td>
                                                        <td><?=$item['plus'].':'.$item['minus'];?></td>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['half_hr_0'];?></td>
                                                        <td><?=$item['half_hr_1'];?></td>
                                                        <td><?=$item['half_hr_2'];?></td>
                                                        <td><?=$item['half_hr_3'];?></td>
                                                        <td><?=$item['half_hr_4'];?></td>
                                                        <td><?=$item['plus_home'].':'.$item['minus_home'];?></td>
                                                        <td><?=$item['total_g'];?></td>
                                                        <td><?=$item['half_hr_0'];?></td>
                                                        <td><?=$item['half_hr_1'];?></td>
                                                        <td><?=$item['half_hr_2'];?></td>
                                                        <td><?=$item['half_hr_3'];?></td>
                                                        <td><?=$item['half_hr_4'];?></td>
                                                        <td><?=$item['plus_away'].':'.$item['minus_away'];?></td>
                                                    <?php endif;?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                        <h3 class="center noBorder pt50">홈런 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
                                                    <li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
                                                    <li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div><h4>첫홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>리그홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                </ul></div>
                                            <div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>첫홈런 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">리버플</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=""><!-- 혼런 _ 전체홈런 -->
                            <div class="pt15">
                                <ul class="inning_view">
                                    <li class="iv01 active">
                                        <div class="tab2_w tab2_w_2 tab2_w_2_">
                                            <ul class="tab02 LS_tab">
                                                <li class=" "><a href="">0.5</a></li>
                                                <li class="on"><a href="">1.5</a></li>
                                                <li class=""><a href="">2.5</a></li>
                                            </ul>
                                        </div>
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="">최근 10경기</a></li>
                                                <li class=""><a href="">최근 15경기</a></li>
                                                <li class=""><a href="">최근 20경기</a></li>
                                                <li class=""><a href="">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/>
                                                <col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th>
                                                <th>팀</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot01_color"><b>1</b></span></td>
                                                <td>두산 베어스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot02_color"><b>2</b></span></td>
                                                <td>NC 다이노스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot03_color"><b>3</b></span></td>
                                                <td>넥센 히어로즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>4</b></span></td>
                                                <td>LG 트윈스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>5</b></span></td>
                                                <td>KIA 타이거즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>6</b></td>
                                                <td>SK 와이번스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>7</b></td>
                                                <td>한화 이글스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>8</b></td>
                                                <td>롯데 자이언트</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>9</b></td>
                                                <td>삼성 라이온즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>10</b></td>
                                                <td>KT 위즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                        </table>
                                        <h3 class="center noBorder pt50">홈런 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
                                                    <li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
                                                    <li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div><h4>첫홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>리그홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                </ul></div>
                                            <div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>첫홈런 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">리버플</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=""><!-- 혼런 _ 팀당홈런 -->
                            <div class="pt15">
                                <ul class="inning_view">
                                    <li class="iv01 active">
                                        <div class="tab2_w tab2_w_2 tab2_w_2_">
                                            <ul class="tab02 LS_tab">
                                                <li class=" on"><a href="">0.5</a></li>
                                                <li class=""><a href="">1.5</a></li>
                                                <li class=""><a href="">2.5</a></li>
                                            </ul>
                                        </div>
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="">최근 10경기</a></li>
                                                <li class=""><a href="">최근 15경기</a></li>
                                                <li class=""><a href="">최근 20경기</a></li>
                                                <li class=""><a href="">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit table_all_home_visit2" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/>
                                                <col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/><col width="55px"/><col width="38px"/><col width="40px"/><col width="49px"/><col width="55px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="5">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="5">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="5">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th>
                                                <th>팀</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                                <th>경기수</th>
                                                <th>Over</th>
                                                <th>O%</th>
                                                <th>득:실</th>
                                                <th>경기당</th>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot01_color"><b>1</b></span></td>
                                                <td>두산 베어스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot02_color"><b>2</b></span></td>
                                                <td>NC 다이노스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot03_color"><b>3</b></span></td>
                                                <td>넥센 히어로즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>4</b></span></td>
                                                <td>LG 트윈스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>5</b></span></td>
                                                <td>KIA 타이거즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>6</b></td>
                                                <td>SK 와이번스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>7</b></td>
                                                <td>한화 이글스</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>8</b></td>
                                                <td>롯데 자이언트</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>9</b></td>
                                                <td>삼성 라이온즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                            <tr>
                                                <td><b>10</b></td>
                                                <td>KT 위즈</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                                <td>144</td>
                                                <td>75</td>
                                                <td>65%</td>
                                                <td>95:75</td>
                                                <td>4.5</td>
                                            </tr>
                                        </table>
                                        <h3 class="center noBorder pt50">홈런 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
                                                    <li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
                                                    <li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div><h4>첫홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>리그홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                </ul></div>
                                            <div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>첫홈런 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">리버플</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=""><!-- 혼런 _ 양팀홈런 -->
                            <div class="pt15">
                                <ul class="inning_view">
                                    <li class="iv01 active">
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="">최근 10경기</a></li>
                                                <li class=""><a href="">최근 15경기</a></li>
                                                <li class=""><a href="">최근 20경기</a></li>
                                                <li class=""><a href="">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th>
                                                <th>팀</th>
                                                <th>경기수</th>
                                                <th>예스</th>
                                                <th>노</th>
                                                <th>Y%</th>
                                                <th>N%</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>예스</th>
                                                <th>노</th>
                                                <th>Y%</th>
                                                <th>N%</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>예스</th>
                                                <th>노</th>
                                                <th>Y%</th>
                                                <th>N%</th>
                                                <th>득:실</th>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot01_color"><b>1</b></span></td>
                                                <td>두산 베어스</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot02_color"><b>2</b></span></td>
                                                <td>NC 다이노스</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot03_color"><b>3</b></span></td>
                                                <td>넥센 히어로즈</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>4</b></span></td>
                                                <td>LG 트윈스</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>5</b></span></td>
                                                <td>KIA 타이거즈</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>6</b></td>
                                                <td>SK 와이번스</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>7</b></td>
                                                <td>한화 이글스</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>8</b></td>
                                                <td>롯데 자이언트</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>9</b></td>
                                                <td>삼성 라이온즈</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>10</b></td>
                                                <td>KT 위즈</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>55</td>
                                                <td>45</td>
                                                <td>65%</td>
                                                <td>35%</td>
                                                <td>95:75</td>
                                            </tr>
                                        </table>
                                        <h3 class="center noBorder pt50">홈런 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
                                                    <li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
                                                    <li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div><h4>첫홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>리그홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                </ul></div>
                                            <div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>첫홈런 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">리버플</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=""><!-- 혼런 _ 홈런분포 -->
                            <div class="pt15">
                                <ul class="inning_view">
                                    <li class="iv01 active">
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="">최근 10경기</a></li>
                                                <li class=""><a href="">최근 15경기</a></li>
                                                <li class=""><a href="">최근 20경기</a></li>
                                                <li class=""><a href="">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit table_all_home_visit3" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/>
                                                <col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/><col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/><col width="50px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="27px"/><col width="34px"/><col width="45px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="7">풀타임<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="7">5이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="7">1이닝<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th>
                                                <th>팀</th>
                                                <th>경기수</th>
                                                <th>0개</th>
                                                <th>1개</th>
                                                <th>2개</th>
                                                <th>3개</th>
                                                <th>4개+</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>0개</th>
                                                <th>1개</th>
                                                <th>2개</th>
                                                <th>3개</th>
                                                <th>4개+</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>0개</th>
                                                <th>1개</th>
                                                <th>2개</th>
                                                <th>3개</th>
                                                <th>4개+</th>
                                                <th>득:실</th>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot01_color"><b>1</b></span></td>
                                                <td>두산 베어스</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot02_color"><b>2</b></span></td>
                                                <td>NC 다이노스</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot03_color"><b>3</b></span></td>
                                                <td>넥센 히어로즈</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>4</b></span></td>
                                                <td>LG 트윈스</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot04_color"><b>5</b></span></td>
                                                <td>KIA 타이거즈</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>6</b></td>
                                                <td>SK 와이번스</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>7</b></td>
                                                <td>한화 이글스</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>8</b></td>
                                                <td>롯데 자이언트</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>9</b></td>
                                                <td>삼성 라이온즈</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                            <tr>
                                                <td><b>10</b></td>
                                                <td>KT 위즈</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>25</td>
                                                <td>50</td>
                                                <td>25</td>
                                                <td>10</td>
                                                <td>10</td>
                                                <td>95:75</td>
                                            </tr>
                                        </table>
                                        <h3 class="center noBorder pt50">홈런 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">첫홈런</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">노홈런</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">리그홈런</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">전체홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀당홈런</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">0.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">1.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">양팀홈런</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">예스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">노</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">홈런분포</p><p class="top_s5">0개</p><p class="top_s5">1개</p><p class="top_s5">2개</p><p class="top_s5">3개</p><p class="top_g5">확률</p></li>
                                                    <li class="td"><p class="top_t3">경기당</p><p class="top_s5">50</p><p class="top_s5">255</p><p class="top_s5">155</p><p class="top_s5">95</p><p class="top_g5">25</p></li>
                                                    <li class="td"><p class="top_t3">확률</p><p class="top_s5">5%</p><p class="top_s5">50%</p><p class="top_s5">25%</p><p class="top_s5">10%</p><p class="top_g5">5%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">홈런 부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div><h4>첫홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>리그홈런 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">홈런</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">59</p><p class="top_s3">275</p><p class="top_g3">2.71</p></li>
                                                </ul></div>
                                            <div><h4>전체홈런 -1.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>팀당홈런-0.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>양팀홈런-예스, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">예스</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>첫홈런 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>전체홈런-1.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">리버플</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_lose.png" alt="패" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>팀당홈런-0.5오버, 최근 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
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
                </li>
            </ul>
        </div>
    </div>
</div>