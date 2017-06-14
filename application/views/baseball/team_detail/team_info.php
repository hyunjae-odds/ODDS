<?php
$full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');

function get_team_initial($team_name){
    if($team_name=='KIA') $initial='KI';
    else if($team_name=='kt') $initial='KT';
    else if($team_name=='삼성') $initial='SS';
    else if($team_name=='넥센') $initial='NS';
    else if($team_name=='두산') $initial='DS';
    else if($team_name=='롯데') $initial='LT';
    else if($team_name=='한화') $initial='HH';
    else $initial=$team_name;

    return $initial;
}
?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline"><?=$full_name_team[$team];?></span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=$full_name_team[$team];?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class="on"><a href="/baseball/team_info?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active">
                <div class="team_top" style="margin-bottom:40px;">
                    <div class="team_logo">
                        <img src="/public/lib/image/base/<?=get_team_initial($team);?>_120120.png" alt="" />
                        <p><b class="red"><?=$first_statistics['w'];?></b>승&nbsp;&nbsp;&nbsp;<b class="blue"><?=$first_statistics['l'];?></b>패&nbsp;&nbsp;&nbsp;<b class="gray"><?=$first_statistics['tie'];?></b>타이</p>
                    </div>
                    <ul class="graph_ul"><!-- 순위 .st_01~11 -->
                        <li>
                            <div class="st_<?=(strlen($first_statistics['win_rate_rank'])==1)?'0'.$first_statistics['win_rate_rank'] : $first_statistics['win_rate_rank'];?>"><span class="st"><?=$first_statistics['win_rate_rank'];?>위</span><b><?=$first_statistics['win_rate'];?></b></div>
                            <p>승률</p>
                        </li>
                        <li>
                            <div class="st_<?=(strlen($first_statistics['defence_rank'])==1)?'0'.$first_statistics['defence_rank'] : $first_statistics['defence_rank'];?>"><span class="st"><?=$first_statistics['defence_rank'];?>위</span><b><?=$first_statistics['defence'];?></b></div>
                            <p>방어율</p>
                        </li>
                        <li>
                            <div class="st_<?=(strlen($first_statistics['offense_rank'])==1)?'0'.$first_statistics['offense_rank'] : $first_statistics['offense_rank'];?>"><span class="st"><?=$first_statistics['offense_rank'];?>위</span><b><?=$first_statistics['offense'];?></b></div>
                            <p>타율</p>
                        </li>
                        <li>
                            <div class="st_<?=(strlen($first_statistics['h_rank'])==1)?'0'.$first_statistics['h_rank'] : $first_statistics['h_rank'];?>"><span class="st"><?=$first_statistics['h_rank'];?>위</span><b><?=$first_statistics['h'];?></b></div>
                            <p>안타</p>
                        </li>
                        <li>
                            <div class="st_<?=(strlen($first_statistics['hr_rank'])==1)?'0'.$first_statistics['hr_rank'] : $first_statistics['hr_rank'];?>"><span class="st"><?=$first_statistics['hr_rank'];?>위</span><b><?=$first_statistics['hr'];?></b></div>
                            <p>홈런</p>
                        </li>
                        <li>
                            <div class="st_<?=(strlen($first_statistics['so_rank'])==1)?'0'.$first_statistics['so_rank'] : $first_statistics['so_rank'];?>"><span class="st"><?=$first_statistics['so_rank'];?>위</span><b><?=$first_statistics['so'];?></b></div>
                            <p>탈삼진</p>
                        </li>
                    </ul>
                    <ul class="gray_ul">
                        <li><span class="g_1">득점 (평균)</span><span class="g_2"><?=$first_statistics['get_score'];?> (<?=number_format($first_statistics['get_score_avg'],1);?>점)</span><span class="g_3"><?=$first_statistics['get_score_rank'];?>위</span></li>
                        <li><span class="g_1">오버 (<?=$over_under_reference_value;?>)</span><span class="g_2"><?=$first_statistics['over'];?>회</span><span class="g_3"><?=number_format($first_statistics['over']/$first_statistics['g']*100);?>%</span></li>
                        <li><span class="g_1">핸디캡(<?=$handicap;?>)승</span><span class="g_2"><?=$first_statistics['handicap_win'];?>회</span><span class="g_3"><?=number_format($first_statistics['handicap_win']/$first_statistics['g']*100);?>%</span></li>
                        <li><span class="g_1">실점 (평균)</span><span class="g_2"><?=$first_statistics['lose_score'];?> (<?=number_format($first_statistics['lose_score_avg'],1);?>점)</span><span class="g_3"><?=$first_statistics['lose_score_rank'];?>위</span></li>
                        <li><span class="g_1">언더 (<?=$over_under_reference_value;?>)</span><span class="g_2"><?=$first_statistics['g']-$first_statistics['over'];?>회</span><span class="g_3"><?=number_format(($first_statistics['g']-$first_statistics['over'])/$first_statistics['g']*100);?>%</span></li>
                        <li><span class="g_1">핸디캡(<?=$handicap;?>)패</span><span class="g_2"><?=$first_statistics['g']-$first_statistics['handicap_win'];?>회</span><span class="g_3"><?=number_format(($first_statistics['g']-$first_statistics['handicap_win'])/$first_statistics['g']*100);?>%</span></li>
                    </ul>
                    <div class="record_10">
                        <p>
                            <?php foreach($first_statistics['win_lose'] as $item) :
                                if($item=='win'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
                                elseif($item=='lose'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
                                else: echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
                                endif;
                            endforeach; ?>
                        </p>
                        <span>최근 10경기 기록</span>
                        <p>
                            <?php foreach ($first_statistics['over_under'] as $item): ?>
                                <span class="<?=$item;?>L">$item</span>
                            <?php endforeach; ?>
                        </p>
                    </div>
                    <span class="clear"></span>
                    <!--ul class="live_onoff">
                        <li class="active"><a href="">상세기록 닫기<span class="arrow04_up"></span></a></li>
                        <li><a href="">상세기록 열기<span class="arrow04_down"></span></a></li>
                    </ul-->
                </div>
                <div class="pb50 relative">
                    <h3 class="noBorder center">2017시즌 기록</h3>
                    <div class="tab2_w absolute" style="top:10px;">
                        <ul class="tab02 LS_tab">
                            <li class="<?php if($home_away=='all') echo 'on';?> ls_all"><a href="/baseball/team_info?team=<?=$team;?>">전체</a></li>
                            <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="/baseball/team_info?team=<?=$team;?>&home_away=home">홈</a></li>
                            <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="/baseball/team_info?team=<?=$team;?>&home_away=away">원정</a></li>
                        </ul>
                    </div>
                    <table class="table_default table_2_left">
                        <caption></caption>
                        <colgroup>
                            <col width="63px">
                            <col width="*">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="270px">
                        </colgroup>
                        <tr>
                            <th>순위</th>
                            <th>팀</th>
                            <th>경기</th>
                            <th>승</th>
                            <th>패</th>
                            <th>타이</th>
                            <th>득:실</th>
                            <th>마진</th>
                            <th>최근 10경기</th>
                        </tr>
                        <?php foreach($rank_board as $item): ?>
                            <?php if($item->team==$team): ?>
                            <tr>
                                <td><?=$item->rank;?></td>
                                <td><?=$full_name_team[$item->team];?></td>
                                <td><?=$item->g;?></td>
                                <td><?=$item->win;?></td>
                                <td><?=$item->lose;?></td>
                                <td><?=$item->tie;?></td>
                                <td><?=$plus_minus[$team];?>:<?=$plus_minus[$team.'_lose'];?></td>
                                <td><?php if($plus_minus[$team]-$plus_minus[$team.'_lose']>0): echo '+'; endif;?><?=$plus_minus[$team]-$plus_minus[$team.'_lose'];?></td>
                                <td>
                                    <?php $exp=explode(';', $item->recent_game);
                                    foreach($exp as $value) :
                                        if($value=='승'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
                                        elseif($value=='패'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
                                        else: echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
                                        endif;
                                    endforeach; ?>
                                </td>
                            </tr>
                        <?php endif; endforeach; ?>
                    </table>
                </div>
                <div class="pb50">
                    <h3 class="noBorder center">팀 상세기록</h3>
                    <table class="table_default record_table01">
                        <caption></caption>
                        <colgroup><col width="130px"/><col width="*"/><col width="50px"/></colgroup>
                        <tr>
                            <th>공격 상세기록</th>
                            <th colspan="2">
                                <div class="select_w">
                                    <div class="select" style="">
                                        <p class="off"><span class="pp">2017</span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="">2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>타율</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->avg;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['avg'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['avg'];?>위</td>
                        </tr>
                        <tr>
                            <td>득점</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->r;?>점</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['r'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['r'];?>위</td>
                        </tr>
                        <tr>
                            <td>안타</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->h;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['h'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['h'];?>위</td>
                        </tr>
                        <tr>
                            <td>홈런</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->hr;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['hr'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['hr'];?>위</td>
                        </tr>
                        <tr>
                            <td>장타율</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->slg;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['slg'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['slg'];?>위</td>
                        </tr>
                        <tr>
                            <td>출루율</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->obp;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['obp'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['obp'];?>위</td>
                        </tr>
                        <tr>
                            <td>득점권타율</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->risp;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['risp'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['risp'];?>위</td>
                        </tr>
                        <tr>
                            <td>볼넷</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->bb;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['bb'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['bb'];?>위</td>
                        </tr>
                        <tr>
                            <td>삼진</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->so;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['so'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['so'];?>위</td>
                        </tr>
                        <tr>
                            <td>병살타</td>
                            <td><span class="graph"><?=$team_detail_record['offense_data']->gdp;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['offense']['gdp'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['offense']['gdp'];?>위</td>
                        </tr>
                    </table>
                    <table class="table_default record_table01">
                        <caption></caption>
                        <colgroup><col width="130px"/><col width="*"/><col width="50px"/></colgroup>
                        <tr>
                            <th>수비 상세기록</th>
                            <th colspan="2">
                                <div class="select_w">
                                    <div class="select" style="">
                                        <p class="off"><span class="pp">2017</span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="">2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>방어율</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->era;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['era'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['era'];?>위</td>
                        </tr>
                        <tr>
                            <td>실점</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->r;?>점</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['r'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['r'];?>위</td>
                        </tr>
                        <tr>
                            <td>피안타</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->h;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['h'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['h'];?>위</td>
                        </tr>
                        <tr>
                            <td>피안타율</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->avg;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['avg'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['avg'];?>위</td>
                        </tr>
                        <tr>
                            <td>피홈런</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->hr;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['hr'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['hr'];?>위</td>
                        </tr>
                        <tr>
                            <td>QS</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->qs;?>회</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['qs'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['qs'];?>위</td>
                        </tr>
                        <tr>
                            <td>볼넷</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->bb;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['bb'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['bb'];?>위</td>
                        </tr>
                        <tr>
                            <td>삼진</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->so;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['so'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['so'];?>위</td>
                        </tr>
                        <tr>
                            <td>실책</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->er;?>개</span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['er'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['er'];?>위</td>
                        </tr>
                        <tr>
                            <td>WHIP</td>
                            <td><span class="graph"><?=$team_detail_record['defence_data']->whip;?></span><p class="graph"><span style="width:<?=10-$team_detail_record['defence']['whip'];?>0%"></span></p></td>
                            <td><?=$team_detail_record['defence']['whip'];?>위</td>
                        </tr>
                    </table>
                    <span class="clear"></span>
                </div>
                <div class="pb50">
                    <h3 class="noBorder center">공격 기록 분석</h3>
                    <table class="table_default record_table02">
                        <caption></caption>
                        <colgroup><col width="33.3%"/><col width="33.3%"/><col width="33.4%"/></colgroup>
                        <tr>
                            <th>강함</th>
                            <th>보통</th>
                            <th>약함</th>
                        </tr>
                        <?php for($i=0; $i<$offense_anal['max_size']; $i++): ?>
                            <tr>
                                <td>
                                    <?php if(isset($offense_anal['strong'][$i])): ?>
                                        <?=$offense_anal['strong'][$i]['title'];?> (<?=$offense_anal['strong'][$i]['value'];?>) <?=$offense_anal['strong'][$i]['rank'];?>위<span class="reco_icon rc_<?=$offense_anal['strong'][$i]['strong_num'];?>"><?=$offense_anal['strong'][$i]['str'];?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($offense_anal['normal'][$i])): ?>
                                        <?=$offense_anal['normal'][$i]['title'];?> (<?=$offense_anal['normal'][$i]['value'];?>) <?=$offense_anal['normal'][$i]['rank'];?>위
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($offense_anal['weak'][$i])): ?>
                                        <?=$offense_anal['weak'][$i]['title'];?> (<?=$offense_anal['weak'][$i]['value'];?>) <?=$offense_anal['weak'][$i]['rank'];?>위<span class="reco_icon rc_<?=$offense_anal['weak'][$i]['strong_num'];?>"><?=$offense_anal['weak'][$i]['str'];?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
                <div class="pb50">
                    <h3 class="noBorder center">수비 기록 분석</h3>
                    <table class="table_default record_table02">
                        <caption></caption>
                        <colgroup><col width="33.3%"/><col width="33.3%"/><col width="33.4%"/></colgroup>
                        <tr>
                            <th>강함</th>
                            <th>보통</th>
                            <th>약함</th>
                        </tr>
                        <?php for($i=0; $i<$defence_anal['max_size']; $i++): ?>
                            <tr>
                                <td>
                                    <?php if(isset($defence_anal['strong'][$i])): ?>
                                        <?=$defence_anal['strong'][$i]['title'];?> (<?=$defence_anal['strong'][$i]['value'];?>) <?=$defence_anal['strong'][$i]['rank'];?>위<span class="reco_icon rc_<?=$defence_anal['strong'][$i]['strong_num'];?>"><?=$defence_anal['strong'][$i]['str'];?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($defence_anal['normal'][$i])): ?>
                                        <?=$defence_anal['normal'][$i]['title'];?> (<?=$defence_anal['normal'][$i]['value'];?>) <?=$defence_anal['normal'][$i]['rank'];?>위
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(isset($defence_anal['weak'][$i])): ?>
                                        <?=$defence_anal['weak'][$i]['title'];?> (<?=$defence_anal['weak'][$i]['value'];?>) <?=$defence_anal['weak'][$i]['rank'];?>위<span class="reco_icon rc_<?=$defence_anal['weak'][$i]['strong_num'];?>"><?=$defence_anal['weak'][$i]['str'];?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>