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
<!--                        <input value="이동" type="submit" class="btn_nv_mn">-->
                        <a href="" class="btn_next" title="다음시즌">다음시즌</a>
                    </div>
                    <div class="relative">
                        <ul class="blackTab r_tit" style="top:-33px;">
                            <li class="on ls01_tab_1"><a href="/baseball/player_pitcher/<?=$league;?>?team=<?=$team;?>">투수</a></li>
                            <li class="ls01_tab_2"><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">타자</a></li>
                        </ul>
                        <div class="team_p ls01_1 active">
                            <ul class="player_list">
                                <li>
                                    <p class="th">평균자책점</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher_result['era']->player_id;?>.jpg" alt="<?=$pitcher_result['era']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/pitcher/<?=$pitcher_result['era']->player_id;?>?team=<?=$team;?>"><?=$pitcher_result['era']->name;?></a></p>
                                    <b class="red"><?=$pitcher_result['era']->era;?></b>
                                    <b class="gray">리그전체 <?=$pitcher_result['era']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">승 리</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher_result['w']->player_id;?>.jpg" alt="<?=$pitcher_result['w']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/pitcher/<?=$pitcher_result['w']->player_id;?>?team=<?=$team;?>"><?=$pitcher_result['w']->name;?></a></p>
                                    <b class="red"><?=$pitcher_result['w']->w;?></b>
                                    <b class="gray">리그전체 <?=$pitcher_result['w']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">세이브</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher_result['sv']->player_id;?>.jpg" alt="<?=$pitcher_result['sv']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/pitcher/<?=$pitcher_result['sv']->player_id;?>?team=<?=$team;?>"><?=$pitcher_result['sv']->name;?></a></p>
                                    <b class="red"><?=$pitcher_result['sv']->sv;?></b>
                                    <b class="gray">리그전체 <?=$pitcher_result['sv']->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th"><?=($league=='KBO')? '승 률' : '이 닝';?></p>
                                    <?php $subject=($league=='KBO')? 'wpct' : 'ip'; ?>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher_result[$subject]->player_id;?>.jpg" alt="<?=$pitcher_result[$subject]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/pitcher/<?=$pitcher_result[$subject]->player_id;?>?team=<?=$team;?>"><?=$pitcher_result[$subject]->name;?></a></p>
                                    <b class="red"><?=$pitcher_result[$subject]->$subject;?></b>
                                    <b class="gray">리그전체 <?=$pitcher_result[$subject]->rank;?>위</b>
                                </li>
                                <li>
                                    <p class="th">홀 드</p>
                                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher_result['hld']->player_id;?>.jpg" alt="<?=$pitcher_result['hld']->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                    <p class="td"><a href="/baseball/player_detail/pitcher/<?=$pitcher_result['hld']->player_id;?>?team=<?=$team;?>"><?=$pitcher_result['hld']->name;?></a></p>
                                    <b class="red"><?=$pitcher_result['hld']->hld;?></b>
                                    <b class="gray">리그전체 <?=$pitcher_result['hld']->rank;?>위</b>
                                </li>
                            </ul>
                            <div class="table_w pitcher">
                                <div>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="60px">
                                            <col width="75px">
                                        </colgroup>
                                        <tr>
                                            <th>순위</th>
                                            <th>선수</th>
                                            <th>팀</th>
                                            <th><span class="pr_1" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=1')">평균자책</span></th>
                                            <th><span class="pr_2" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=g&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=2')">경기</span></th>
                                            <th><span class="pr_3" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=w&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=3')">승</span></th>
                                            <th><span class="pr_4" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=l&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=4')">패</span></th>
                                            <th><span class="pr_5" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=sv&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=5')">세이브</span></th>
                                            <th><span class="pr_6" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=hld&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=6')">홀드</span></th>
                                            <?php if($league=='KBO'): ?><th><span class="pr_7" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=wpct&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=7')">승률</span></th>
                                            <?php else: ?><th><span class="pr_7" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=7')">고의사구</span></th><?php endif; ?>
                                            <th><span class="pr_8" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=ip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=8')">이닝</span></th>
                                            <th><span class="pr_9" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=h&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=9')">피안타</span></th>
                                            <th><span class="pr_10" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=hr&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=10')">홈</span></th>
                                            <th><span class="pr_11" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=bb&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=11')">볼넷</span></th>
                                            <th><span class="pr_13" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=so&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=13')">삼진</span></th>
                                            <th><span class="pr_14" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=r&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=14')">실점</span></th>
                                            <th><span class="pr_15" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=er&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=15')">자책</span></th>
                                            <th><span class="pr_16" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=whip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=16')">WHIP</span></th>
                                        </tr>
                                        <?php foreach($pitcher as $key=>$item): ?>
                                            <tr>
                                                <td><?=$key+1;?></td>
                                                <td><a href="/baseball/player_detail/pitcher/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->name;?></a></td>
                                                <td><?=$item->team;?></td>
                                                <td class="pr_1"><?=number_format($item->era,3);?></td>
                                                <td class="pr_2"><?=$item->g;?></td>
                                                <td class="pr_3"><?=$item->w;?></td>
                                                <td class="pr_4"><?=$item->l;?></td>
                                                <td class="pr_5"><?=$item->sv;?></td>
                                                <td class="pr_6"><?=$item->hld;?></td>
                                                <?php if($league=='KBO'): ?><td class="pr_7"><?php if($item->wpct=='-') echo '-'; else echo number_format($item->wpct,3);?></td>
                                                <?php else: ?><td class="pr_7"><?=$item->ibb;?></td><?php endif; ?>
                                                <td class="pr_8"><?=$item->ip;?></td>
                                                <td class="pr_9"><?=$item->h;?></td>
                                                <td class="pr_10"><?=$item->hr;?></td>
                                                <td class="pr_11"><?=$item->bb;?></td>
                                                <td class="pr_13"><?=$item->so;?></td>
                                                <td class="pr_14"><?=$item->r;?></td>
                                                <td class="pr_15"><?=$item->er;?></td>
                                                <td class="pr_16"><?=number_format($item->whip,2);?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline  pr_1">
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
                                        <tr>
                                            <th>순위</th>
                                            <th>이름</th>
                                            <th>팀</th>
                                            <th><span class="pr_17" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=17')">평균자책</span></th>
                                            <th><span class="pr_18" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=cg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=18')">완투</span></th>
                                            <th><span class="pr_19" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=sho&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=19')">완봉</span></th>
                                            <th><span class="pr_20" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=qs&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=20')">QS</span></th>
                                            <?php if($league=='KBO'): ?>
                                                <th><span class="pr_21" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=bsv&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=21')">BSV</span></th>
                                                <th><span class="pr_22" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=tbf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=22')">타자수</span></th>
                                            <?php else: ?>
                                                <th><span class="pr_21" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=goao&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=21')">땅볼/뜬공</span></th>
                                                <th><span class="pr_22" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=gf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=22')">경기종료</span></th>
                                            <?php endif;?>
                                            <th><span class="pr_23" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=np&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=23')">투구수</span></th>
                                            <th><span class="pr_24" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=avg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=24')">피안타</span></th>
                                            <th><span class="pr_25" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=25')">2루타</span></th>
                                            <th><span class="pr_26" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=26')">3루타</span></th>
                                            <?php if($league=='KBO'): ?>
                                                <th><span class="pr_27" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=sac&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=27')">SAC</span></th>
                                                <th><span class="pr_28" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=sf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=28')">SF</span></th>
                                            <?php else: ?>
                                                <th><span class="pr_27" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=np&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=27')">총투구수</span></th>
                                                <th><span class="pr_28" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=sp&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=28')">삼진율</span></th>
                                            <?php endif;?>
                                            <th><span class="pr_29" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=29')">고의</span></th>
                                            <th><span class="pr_30" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=wp&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=30')">폭투</span></th>
                                            <th><span class="pr_31" onclick="javascript:location.replace('/baseball/player_pitcher/<?$league;?>?team=<?=$team;?>&pitcher_sort=bk&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=31')">보크</span></th>
                                        </tr>
                                        <?php foreach($pitcher as $key=>$item): ?>
                                            <tr>
                                                <td><?=$key+1;?></td>
                                                <td><a href="/baseball/player_detail/pitcher/<?=$item->player_id;?>?team=<?=$item->team;?>"><?=$item->name;?></a></td>
                                                <td><?=$item->team;?></td>
                                                <td class="pr_17"><?=number_format($item->era,3);?></td>
                                                <td class="pr_18"><?=$item->cg;?></td>
                                                <td class="pr_19"><?=$item->sho;?></td>
                                                <td class="pr_20"><?=$item->qs;?></td>
                                                <?php if($league=='KBO'): ?>
                                                    <td class="pr_21"><?=$item->bsv;?></td>
                                                    <td class="pr_22"><?=$item->tbf;?></td>
                                                <?php else: ?>
                                                    <td class="pr_21"><?=$item->goao;?></td>
                                                    <td class="pr_22"><?=$item->gf;?></td>
                                                <?php endif;?>
                                                <td class="pr_23"><?=$item->np;?></td>
                                                <td class="pr_24"><?=number_format($item->avg,3);?></td>
                                                <td class="pr_25"><?=$item->second_b;?></td>
                                                <td class="pr_26"><?=$item->third_b;?></td>
                                                <?php if($league=='KBO'): ?>
                                                    <td class="pr_27"><?=$item->sac;?></td>
                                                    <td class="pr_28"><?=$item->sf;?></td>
                                                <?php else: ?>
                                                    <td class="pr_27"><?=$item->np;?></td>
                                                    <td class="pr_28"><?=$item->sp;?></td>
                                                <?php endif;?>
                                                <td class="pr_29"><?=$item->ibb;?></td>
                                                <td class="pr_30"><?=$item->wp;?></td>
                                                <td class="pr_31"><?=$item->bk;?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline  pr_1">
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