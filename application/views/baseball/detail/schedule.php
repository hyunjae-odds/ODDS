<?php
$get_rank_per=array(1=>100,2=>93,3=>86,4=>79,5=>72,6=>65,7=>58,8=>52,9=>45,10=>38,11=>32,12=>25,13=>18,14=>12,15=>0);
$first_statistics_arr=($league=='KBO')?array(1=>'01',2=>'02',3=>'03',4=>'04',5=>'05',6=>'06',7=>'07',8=>'08',9=>'09',10=>'10') : array(1=>'01',2=>'02',3=>'02',4=>'03',5=>'03',6=>'03',7=>'04',8=>'04',9=>'04',10=>'05',11=>'05',12=>'05',13=>'06',14=>'06',15=>'06',16=>'07',17=>'07',18=>'07',19=>'08',20=>'08',21=>'08',22=>'09',23=>'09',24=>'09',25=>'10',26=>'10',27=>'10',28=>'11',29=>'11',30=>'11');
$MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토');
$full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈');
$abb_MLB_team=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels of Anaheim'=>'LAA','San Francisco Giants'=>'SF','Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT','Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');

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
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline"><?=($league=='KBO')? $full_name_team[$team] : $MLB_team_kor[$team];?></span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=($league=='KBO')? $full_name_team[$team] : $MLB_team_kor[$team];?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info/<?=$league;?>?team=<?=$team;?>">시즌 기록</a></li>
            <li class="on"><a href="/baseball/schedule/<?=$league;?>/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation/<?=$league;?>?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team/<?=$league;?>?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active">
                <div class="team_top" style="margin-bottom:40px;">
                    <div class="team_logo">
                        <img src="<?=($league=='KBO')? '/public/lib/image/base/'.get_team_initial($team).'_120120.png' : '/public/lib/image/base/mlb/'.$abb_MLB_team[$team].'.png';?>" alt=""/>
                        <p><b class="red"><?=$first_statistics['w'];?></b>승&nbsp;&nbsp;&nbsp;<b class="blue"><?=$first_statistics['l'];?></b>패&nbsp;&nbsp;&nbsp;<b class="gray"><?=$first_statistics['tie'];?></b>타이</p>
                    </div>
                    <ul class="graph_ul"><!-- 순위 .st_01~11 -->
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['win_rate_rank']];?>"><span class="st"><?=$first_statistics['win_rate_rank'];?>위</span><b><?=$first_statistics['win_rate'];?></b></div>
                            <p>승률</p>
                        </li>
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['defence_rank']];?>"><span class="st"><?=$first_statistics['defence_rank'];?>위</span><b><?=$first_statistics['defence'];?></b></div>
                            <p>방어율</p>
                        </li>
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['offense_rank']];?>"><span class="st"><?=$first_statistics['offense_rank'];?>위</span><b><?=$first_statistics['offense'];?></b></div>
                            <p>타율</p>
                        </li>
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['h_rank']];?>"><span class="st"><?=$first_statistics['h_rank'];?>위</span><b><?=$first_statistics['h'];?></b></div>
                            <p>안타</p>
                        </li>
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['hr_rank']];?>"><span class="st"><?=$first_statistics['hr_rank'];?>위</span><b><?=$first_statistics['hr'];?></b></div>
                            <p>홈런</p>
                        </li>
                        <li>
                            <div class="st_<?=$first_statistics_arr[$first_statistics['so_rank']];?>"><span class="st"><?=$first_statistics['so_rank'];?>위</span><b><?=$first_statistics['so'];?></b></div>
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
                            <?php foreach($first_statistics['win_lose'] as $item):
                                if($item=='win'): echo '<img src="/public/lib/image/base/btn_win.png" alt="" title=""/> ';
                                elseif($item=='lose'): echo '<img src="/public/lib/image/base/btn_lose.png" alt="" title=""/> ';
                                else: echo '<img src="/public/lib/image/base/btn_dra.png" alt="" title=""/> ';
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
                </div>
                <div class="pb50">
                    <div class="date">
                        <a href="/baseball/schedule/<?=$league;?>/<?=$select_year;?>/<?php if($select_month!=3) echo '0';?><?php $minus_one=($select_month==3)?$select_month:$select_month-1; echo $minus_one.'?team='.$team;?>" class="btn_prev" title="이전달">이전달</a>
                        <a href="" class="date_yr date_num"><?=$select_year;?></a>
                        <ul class="date_yr_select date_ul">
                            <li><a href="/baseball/schedule/2017/<?=$select_month;?>?team=<?=$team;?>">2017</a></li>
                        </ul>
                        <span>.</span>
                        <a href="" class="date_mn date_num"><?=$select_month;?></a>
                        <ul class="date_mn_select date_ul">
                            <li><a href="/baseball/schedule/<?=$select_year;?>/03?team=<?=$team;?>">03</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/04?team=<?=$team;?>">04</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/05?team=<?=$team;?>">05</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/06?team=<?=$team;?>">06</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/07?team=<?=$team;?>">07</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/08?team=<?=$team;?>">08</a></li>
                            <li><a href="/baseball/schedule/<?=$select_year;?>/09?team=<?=$team;?>">09</a></li>
                        </ul>
                        <a href="/baseball/schedule/<?=$league;?>/<?=$select_year;?>/<?php if($select_month!=9) echo '0';?><?php $plus_one=($select_month==9)?$select_month:$select_month+1; echo $plus_one.'?team='.$team;?>" class="btn_next" title="다음달">다음달</a>
                        <div class="clear"></div>
                    </div>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="80px" />
                            <col width="90px" />
                            <col width="50px" />
                            <col width="*" />
                            <col width="96px" />
                            <col width="169px" />
                            <col width="50px" />
                            <col width="50px" />
                            <col width="40px" />
                            <col width="175px" />
                        </colgroup>
                        <tr>
                            <th><span class="up_down01 down">날짜</span><a href="" class="up_down up">내림차/오름차변경</a></th>
                            <th>구장</th>
                            <th>결과</th>
                            <th class="right pr20">원정</th>
                            <th>스코어</th>
                            <th class="left p120">홈</th>
                            <th>1</th>
                            <th>X</th>
                            <th>2</th>
                            <th>데이터</th>
                        </tr>
                        <?php foreach($result as $key=>$entry): ?>
                            <tr>
                                <td><b><?=$entry->date;?></b></td>
                                <td class="l_b"><?=$entry->stadium;?></td>
                                <td class="pr80">
                                    <a href="/baseball/match_information/<?=$entry->no;?>/0" class="result_btn">
                                        <?php if($entry->away_score==null): echo '-'; else: ?>
                                            <?php if($entry->date < date('Y-m-d')): ?>
                                                <img src="/public/lib/image/base/btn_<?php
                                                if($entry->away==$team):
                                                    if($entry->away_score > $entry->home_score): echo 'win';
                                                    elseif($entry->away_score < $entry->home_score): echo 'lose';
                                                    else: echo 'dra'; endif;
                                                elseif($entry->home==$team):
                                                    if($entry->away_score < $entry->home_score): echo 'win';
                                                    elseif($entry->away_score > $entry->home_score): echo 'lose';
                                                    else: echo 'dra'; endif; endif;
                                                ?>.png" alt="" title=""/>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                </td>
                                <td><span class="<?php if($entry->away_score > $entry->home_score) echo 'red';?>"><a href="/baseball/team_info?team=<?=$entry->away;?>"><?=$entry->away;?></a><?php if($entry->away_score > $entry->home_score) echo '</span>';?></td>
                                <td><b class="score"><?=$entry->away_score;?><span class="colon">:</span><?=$entry->home_score;?></b></td>
                                <td class="pr80"><span class="<?php if($entry->away_score < $entry->home_score) echo 'red';?>"><a href="/baseball/team_info?team=<?=$entry->home;?>"><?=$entry->home;?></a><?php if($entry->away_score < $entry->home_score) echo '</span>';?></td>
                                <td><span class="black">1.31</span></td>
                                <td>2.44</td>
                                <td>1.78</td>
                                <td class="data">
                                    <span>
                                        <span class="b_BTN2"><a href="/baseball/match_information/<?=$entry->no;?>/0">경기기록</a></span>
                                        <span class="r_BTN"><a href="">전문가 의견</a></span>
                                        <span class="g_BTN"><a href="">블로그</a></span>
                                    </span>
                                    <!-- 블로그팝업 -->
                                    <div class="g_pop" style="display:none;">
                                        <h3>관련 블로그 보기</h3>
                                        <ul>
                                            <li>
                                                <b>블로그 제목<span>블로그별명</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                            <li>
                                                <b>블로그 제목<span>블로그별명</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                            <li>
                                                <b>블로그 제목<span>블로그별명</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                        </ul>
                                        <div class="num">
                                            <span class="on"><a href="">1</a></span>
                                            <span><a href="">2</a></span>
                                            <span><a href="">3</a></span>
                                            <span><a href="">4</a></span>
                                            <span><a href="">5</a></span>
                                        </div>
                                        <div class="close"><a href="">close</a></div>
                                    </div>
                                    <!-- 전문가팝업 -->
                                    <div class="r_pop" style="display:none;">
                                        <h3>전문가 의견 보기</h3>
                                        <ul>
                                            <li>
                                                <b>설민석<span>실전배팅전문가</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                            <li>
                                                <b>설민석<span>실전배팅전문가</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                            <li>
                                                <b>설민석<span>실전배팅전문가</span></b>
                                                <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                            </li>
                                        </ul>
                                        <div class="num">
                                            <span class="on"><a href="">1</a></span>
                                            <span><a href="">2</a></span>
                                            <span><a href="">3</a></span>
                                            <span><a href="">4</a></span>
                                            <span><a href="">5</a></span>
                                        </div>
                                        <div class="close"><a href="">close</a></div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
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