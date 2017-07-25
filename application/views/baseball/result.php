﻿<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈','드림'=>'드림 올스타','나눔'=>'나눔 올스타'); ?>
<?php $team_initial=array('SK'=>'SK','넥센'=>'WO','두산'=>'OB','롯데'=>'LT','KIA'=>'HT','한화'=>'HH','LG'=>'LG','NC'=>'NC','kt'=>'KT','삼성'=>'SS'); ?>

<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - <?=($league=='KBO')? '대한민국' : 'USA';?></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/league/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">리그정보</a></li>
            <li class="on"><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB';?>/all/<?=date('m');?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">선수 기록</a></li>
            <li class=""><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="result02 s2 active pb50">
                <ul class="team_list">
                    <li class="tl001 <?php if($team=='all') echo 'on';?>">
                        <div>
                            <a href="/baseball/result/KBO/all/<?=$month;?>">
                                <span class="LG_L"></span>
                                <p>전체구단</p>
                            </a>
                        </div>
                    </li>
                    <?php foreach($team_initial as $key=>$item): ?>
                        <li class="tl002 <?php if($team==$key) echo 'on';?>">
                            <div>
                                <a href="/baseball/result/KBO/<?=$key;?>/<?=$month;?>">
                                    <span class="<?=$item;?>_L"></span>
                                    <p><?=$key;?></p>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="clear"></div>

                <ul class="result_veiw mt35">
                    <li class="active">
                        <h3 class="noBorder center">2017시즌 <?php if($team!='all') echo $full_name_team[$team];?> 기록</h3>
                        <table class="table_default result_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="260px"/><col width="73px"/><col width="72px"/><col width="80px"/><col width="85px"/><col width="*"/><col width="133px"/><col width="133px"/>
                            </colgroup>
                            <tr>
                                <th class="pl20 left">팀명</th>
                                <th>경기</th>
                                <th>득점</th>
                                <th>홈런</th>
                                <th>안타</th>
                                <th class="pr40">타율</th>
                                <th colspan="2">오버/언더</th>
                            </tr>
                            <tr>
                                <td class="pl20 left">리그기록(평균기록)</td>
                                <td><?=number_format($league_result->g/2);?></td>
                                <td><?=number_format($league_result->r,1);?></td>
                                <td><?=number_format($league_result->hr,1);?></td>
                                <td><?=number_format($league_result->h,1);?></td>
                                <td class="pr40"><?=number_format($league_result->avg,3);?></td>
                                <td class="left"><span class="orangeBox"><?=$over_under_reference_value;?> O</span><b><?=$league_result->over;?> / <?php $over_percent=number_format($league_result->over/($league_result->g/2)*100); echo $over_percent;?>%</b></td>
                                <td class="left"><span class="skyBox"><?=$over_under_reference_value;?> U</span><b><?=$league_result->under;?> / <?=100-$over_percent;?>%</b></td>
                            </tr>
                        </table>
                        <div class="relative">
                            <div>
                                <table class="table_default result_table01 result_table01_1">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="175px"/><col width="110px"/><col width="70px"/><col width="77px"/><col width="105px"/><col width="*"/><col width="133px"/><col width="133px"/>
                                    </colgroup>
                                    <?php foreach($team_month as $item): ?>
                                        <tr>
                                            <td class="pl20"><b><?=$item->month;?>월</b></td>
                                            <td><span class="grayBox">경기</span><b><?=$item->g;?></b></td>
                                            <td><span class="DL">득</span><?=number_format($item->r/$item->g, 1);?></td>
                                            <td><span class="AL">안</span><?=number_format($item->h/$item->g, 1);?></td>
                                            <td><span class="grayBox">홈런</span><b><?=number_format($item->hr/$item->g, 1);?></b></td>
                                            <td><span class="grayBox">타율</span><b><?=($team=='all')? number_format($item->avg/10,3) : number_format($item->avg,3);?></b></td>
                                            <td><span class="orangeBox"><?=($team=='all')?$over_under_reference_value : $over_under_reference[$team];?> O</span><b><?=$item->over;?> / <?php $over_percent=number_format($item->over/$item->g*100); echo $over_percent;?>%</b></td>
                                            <td><span class="skyBox"><?=($team=='all')?$over_under_reference_value : $over_under_reference[$team];?> U</span><b><?=$item->under;?> / <?=100-$over_percent;?>%</b></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <ul class="result_table01_1_onoff">
                                <li class="active"><a href="" class="up">월별 기록 닫기 <span class="up"></span></a></li>
                                <li><a href="" class="down">월별 기록 열기 <span class="down"></span></a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <h3 class="noBorder center" style="margin-top:60px;">2017시즌 <?php if($team!='all') echo $full_name_team[$team];?> 경기결과</h3>
                            <div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
                                <a href="/baseball/result/KBO/<?=$team;?>/0<?php if($month>3) echo $month-1; else echo '3';?>" class="btn_prev" title="이전달">이전달</a>
                                <a href="" class="date_yr date_num">2017</a>
                                <ul class="date_yr_select date_ul">
                                    <li><a href="">2008</a></li>
                                    <li><a href="">2009</a></li>
                                    <li><a href="">2010</a></li>
                                    <li><a href="">2011</a></li>
                                    <li><a href="">2012</a></li>
                                    <li><a href="">2013</a></li>
                                    <li><a href="">2014</a></li>
                                    <li><a href="">2015</a></li>
                                    <li><a href="">2016</a></li>
                                    <li><a href="">2017</a></li>
                                </ul>
                                <span>.</span>
                                <a href="" class="date_mn date_num"><?=$month;?></a>
                                <ul class="date_mn_select date_ul">
                                    <li><a href="">03</a></li>
                                    <li><a href="">04</a></li>
                                    <li><a href="">05</a></li>
                                    <li><a href="">06</a></li>
                                    <li><a href="">07</a></li>
                                    <li><a href="">08</a></li>
                                    <li><a href="">09</a></li>
                                    <li><a href="">10</a></li>
                                </ul>
                                <a href="/baseball/result/KBO/<?=$team;?>/0<?php if($month<date('n')) echo $month+1; else echo date('n');?>" class="btn_next" title="다음달">다음달</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <table class="table_default league_table01 league_table01_1">
                            <caption></caption>
                            <colgroup>
                                <col width="115px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <?php foreach($result as $item): ?>
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><b>매치명</b></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($item as $items): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $items->date); echo $exp[1].'.'.$exp[2]?> | <?=$items->time;?></td>
                                        <td class="left pl20">
                                            <a href="javascript:void(0);">
                                                <?php if($items->away_score!='' && $items->away_score>$items->home_score): ?><b><?php endif; ?><?=$full_name_team[$items->away];?><?php if($items->away_score!='' && $items->away_score>$items->home_score): ?></b><?php endif; ?>
                                                vs
                                                <?php if($items->away_score!='' && $items->away_score<$items->home_score): ?><b><?php endif; ?><?=$full_name_team[$items->home];?><?php if($items->away_score!='' && $items->away_score<$items->home_score): ?></b><?php endif; ?>
                                            </a>
                                        </td>
                                        <td><b class="score red"><?=$items->away_score;?><span class="colon">:</span><?=$items->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5" style="margin-top:9px;"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </table>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
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

        // 시즌기록 열고닫기
        $(".result_table01_1_onoff li a.up").click(function(){
            $(this).parent().parent().siblings().slideUp();
            $(this).parent().siblings().addClass("active");
            $(this).parent().removeClass("active");
            return false;
        });
        $(".result_table01_1_onoff li a.down").click(function(){
            $(this).parent().parent().siblings().slideDown();
            $(this).parent().siblings().addClass("active");
            $(this).parent().removeClass("active");
            return false;
        });
    });
</script>