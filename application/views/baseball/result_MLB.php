<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','Los Angeles Angels of Anaheim'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이고','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토','American League'=>'아메리칸 리그','National League'=>'네셔날 리그'); ?>
<?php $MLB_team_initial1=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'SF');?>
<?php $MLB_team_initial2=array('Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT');?>
<?php $MLB_team_initial3=array('Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');?>
<?php $MLB_team_initial=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR'); ?>

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
            <li class=""><a href="/baseball/league/MLB_N">리그정보</a></li>
            <li class="on"><a href="/baseball/result/MLB/all/<?=date('m');?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player_record_hitter/MLB_N">선수 기록</a></li>
            <li class=""><a href="/baseball/score/MLB_N">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="result02 s2 active pb50">
                <ul class="team_list_MLB team_list01">
                    <li class="<?php if($team=='all') echo 'on';?>" class="tl001"><div>
                        <a href="/baseball/result/MLB/all/<?=$month;?>">
                            <span class="MLB_L_B"></span>
                            <p>전체구단</p></div>
                        </a>
                    </li>
                    <?php foreach($MLB_team_initial1 as $key=>$item): ?>
                        <li class="tl002 <?php if($team==$key) echo 'on';?>">
                            <div>
                                <a href="/baseball/result/MLB/<?=$key;?>/<?=$month;?>?select=1">
                                    <span class="<?=$item?>_L"></span>
                                    <p><?=$MLB_team_kor[$key];?></p>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="team_list_MLB team_list02">
                    <?php foreach($MLB_team_initial2 as $key=>$item): ?>
                        <li class="tl002 <?php if($team==$key) echo 'on';?>">
                            <div>
                                <a href="/baseball/result/MLB/<?=$key;?>/<?=$month;?>?select=2">
                                    <span class="<?=$item?>_L"></span>
                                    <p><?=$MLB_team_kor[$key];?></p>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="team_list_MLB team_list03">
                    <?php foreach($MLB_team_initial3 as $key=>$item): ?>
                        <li class="tl002 <?php if($team==$key) echo 'on';?>">
                            <div>
                                <a href="/baseball/result/MLB/<?=$key;?>/<?=$month;?>?select=3">
                                    <span class="<?=$item?>_L"></span>
                                    <p><?=$MLB_team_kor[$key];?></p>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <span class="pageBtn pageBtn01"></span>
                <span class="pageBtn pageBtn02"></span>
                <span class="pageBtn pageBtn03"></span>
                <div class="clear"></div>

                <ul class="result_veiw mt35">
                    <li class="active">
                        <h3 class="noBorder center">2017시즌 <?php if($team!='all') echo $MLB_team_kor[$team];?> 기록</h3>
                        <table class="table_default result_table01">
                            <caption></caption>
                            <colgroup>
                                <col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
                            </colgroup>
                            <tr>
                                <th class="pl20 left">팀명</th>
                                <th>경기</th>
                                <th>타율</th>
                                <th>득점</th>
                                <th>안타</th>
                                <th>홈런</th>
                                <th>볼넷</th>
                                <th>삼진</th>
                                <th>WHIP</th>
                            </tr>
                            <tr>
                                <?php if($team=='all'): ?><td class="pl20 left">리그기록(평균기록)</td>
                                <?php else: ?><td class="pl20 left"><span class="<?=$MLB_team_initial[$team];?>_L"></span><b><?=$MLB_team_kor[$team];?></b> (평균수치)</td><?php endif; ?>
                                <td><?=number_format($league_result->g);?></td>
                                <td><?=number_format($league_result->avg,3);?></td>
                                <td><?=number_format($league_result->r/$league_result->g,1);?></td>
                                <td><?=number_format($league_result->h/$league_result->g,1);?></td>
                                <td><?=number_format($league_result->hr/$league_result->g,1);?></td>
                                <td><?=number_format($league_result->bb/$league_result->g,1);?></td>
                                <td><?=number_format($league_result->so/$league_result->g,1);?></td>
                                <td><?=number_format($league_result->whip,2);?></td>
                            </tr>
                        </table>
                        <div class="relative">
                            <div>
                                <table class="table_default result_table01 result_table01_1">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
                                    </colgroup>
                                    <?php foreach($team_month as $item): ?>
                                        <tr>
                                            <td class="pl20"><b><?=$item->month;?>월</b></td>
                                            <td><?=$item->g;?></td>
                                            <td><?=($team=='all')? number_format($item->avg/30,3) : number_format($item->avg,3);?></td>
                                            <td><?=number_format($item->r/$item->g, 1);?></td>
                                            <td><?=number_format($item->h/$item->g, 1);?></td>
                                            <td><?=number_format($item->hr/$item->g, 1);?></td>
                                            <td><?=number_format($item->bb/$item->g,1);?></td>
                                            <td><?=number_format($item->so/$item->g,1);?></td>
                                            <td><?=number_format($item->whip,2);?></td>
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
                            <h3 class="noBorder center" style="margin-top:60px;">2017시즌 <?=($team!='all')? $MLB_team_kor[$team].' 월별 기록' : '경기결과';?> </h3>
                            <div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
                                <a href="javascript:location.replace('/baseball/result/MLB/<?=$team;?>/0<?php if($month>3) echo $month-1; else echo '3';?>?scroll_top='+document.body.scrollTop)" class="btn_prev" title="이전달">이전달</a>
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
                                <a href="javascript:location.replace('/baseball/result/MLB/<?=$team;?>/0<?php if($month<date('n')) echo $month+1; else echo date('n');?>?scroll_top='+document.body.scrollTop)" class="btn_next" title="다음달">다음달</a>
                                <div class="clear"></div>
                            </div>
                            <div class="select" style="">
                                <p class="off"><span class="pp">승패</span><span class="pa"></span></p>
                                <ul>
                                    <li><a href="">승패</a></li>
                                    <li><a href="">O/U</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php if($team=='all'): ?>
                            <?php foreach($result['day'] as $item): ?>
                                <?php $exp=explode('-', $item->date);?>
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
                                    <tr>
                                        <th><?=$exp[1].'/'.$exp[2];?></th>
                                        <th class="left pl20"><b>매치명</b></th>
                                        <th>스코어</th>
                                        <th>승</th>
                                        <th>패</th>
                                        <th>B’s</th>
                                        <th>DATA</th>
                                    </tr>
                                    <?php foreach($result['result'] as $items): ?>
                                        <?php if($items->date==$item->date): ?>
                                            <tr>
                                                <td><?php $exp=explode(':', $items->time); echo $exp[0].':'.$exp[1]?></td>
                                                <td class="left pl20">
                                                    <a href="javascript:void(0);">
                                                        <?php if($items->away_score!='' && $items->away_score>$items->home_score): ?><b><?php endif; ?><?=$MLB_team_kor[$items->away].'('.$items->away_pitcher.')';?><?php if($items->away_score!='' && $items->away_score>$items->home_score): ?></b><?php endif; ?>
                                                        vs
                                                        <?php if($items->away_score!='' && $items->away_score<$items->home_score): ?><b><?php endif; ?><?=$MLB_team_kor[$items->home].'('.$items->home_pitcher.')';?><?php if($items->away_score!='' && $items->away_score<$items->home_score): ?></b><?php endif; ?>
                                                    </a>
                                                </td>
                                                <td><b class="score red"><?=$items->away_score;?><span class="colon">:</span><?=$items->home_score;?></b></td>
                                                <td><span class="graybox">1.93</span></td>
                                                <td>3.15</td>
                                                <td>51</td>
                                                <td><span class="b_BTN5" style="margin-top:9px;"><a href="/baseball/match_team/<?=$league;?>/<?=$items->no;?>/0">매치정보</a></span></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </table>
                        <?php elseif($result==null): ?><tr><td>완료 된 경기가 없습니다.</td></tr>
                        <?php else: ?>
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
                                <tr>
                                    <th>날짜</th>
                                    <th class="left pl20"><b>매치명</b></th>
                                    <th>스코어</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>B’s</th>
                                    <th>DATA</th>
                                </tr>
                                <?php foreach($result['result'] as $items): ?>
                                    <tr>
                                        <td><?php $exp=explode('-', $items->date); echo $exp[1].'.'.$exp[2]?> | <?php $exp=explode(':', $items->time); echo $exp[0].':'.$exp[1]?></td>
                                        <td class="left pl20">
                                            <a href="javascript:location.replace('/baseball/result/MLB/<?=$team;?>/0<?php if($month>3) echo $month-1; else echo '3';?>?scroll_top='+document.body.scrollTop)">
                                                <?php if($items->away_score!='' && $items->away_score>$items->home_score): ?><b><?php endif; ?><?=$MLB_team_kor[$items->away].'('.$items->away_pitcher.')';?><?php if($items->away_score!='' && $items->away_score>$items->home_score): ?></b><?php endif; ?>
                                                vs
                                                <?php if($items->away_score!='' && $items->away_score<$items->home_score): ?><b><?php endif; ?><?=$MLB_team_kor[$items->home].'('.$items->home_pitcher.')';?><?php if($items->away_score!='' && $items->away_score<$items->home_score): ?></b><?php endif; ?>
                                            </a>
                                        </td>
                                        <td><b class="score red"><?=$items->away_score;?><span class="colon">:</span><?=$items->home_score;?></b></td>
                                        <td><span class="graybox">1.93</span></td>
                                        <td>3.15</td>
                                        <td>51</td>
                                        <td><span class="b_BTN5" style="margin-top:9px;"><a href="/baseball/match_team/<?=$league;?>/<?=$items->no;?>/0">매치정보</a></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </li>
                </ul>
            </li>		
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        document.body.scrollTop=<?=$scroll_top;?>;

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

        // 팀별 기록 보기
        $("span.pageBtn01").click(function(){
            $(".team_list02").show();
            $(this).hide();
            $("span.pageBtn02").show();
            return false;
        });
        $("span.pageBtn02").click(function(){
            $(".team_list03").show();
            $(".team_list02").hide();
            $(this).hide();
            $("span.pageBtn03").show();
            return false;
        });
        $("span.pageBtn03").click(function(){
            $(".team_list03").hide();
            $(this).hide();
            $("span.pageBtn01").show();
            return false;
        });

        if(<?=$select;?>==1){
            $(".team_list01").show();
            $("span.pageBtn01").show();
        }else if(<?=$select;?>==2){
            $(".team_list02").show();
            $("span.pageBtn02").show();
        }else{
            $(".team_list03").show();
            $("span.pageBtn03").show();
        }
    });
</script>

