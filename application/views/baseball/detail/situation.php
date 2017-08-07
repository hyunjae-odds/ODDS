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
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info/<?=$league;?>?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=$league;?>/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">선수 기록</a></li>
            <li class="on"><a href="/baseball/situation/<?=$league;?>?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team/<?=$league;?>?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active result02">
                <div class="situation">
                    <div class="coach">
                        <div class="pic"><img src="<?=($league=='KBO')? $team_introduce->manager_pic : '';?>" alt="" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                        <div>
                            <h3 class="noBorder">감독</h3>
                            <?php if($league!='KBO') foreach($players as $player) if($player->type=='coach') $coach_name=$player->match_name; ?>
                            <p><?=($league=='KBO')? $team_introduce->manager : $coach_name;?></p>
                            <span><?=($league=='KBO')? $team_introduce->manager_birth : '';?>, <?=($league=='KBO')? '대한민국' : '미국';?></span>
                            <div>
                                <p>경력</p>
                                <ul><?=($league=='KBO')? $team_introduce->manager_career : '';?></ul>
                            </div>
                        </div>
                        <span class="clear"></span>
                    </div>
                    <div class="situation_list">
                        <ul class="blackTab r_tit">
                            <li class="ls01_tab_1"><a href="">투수</a></li>
                            <li class="on ls01_tab_2"><a href="">내야수</a></li>
                            <li class=" ls01_tab_3"><a href="">외야수</a></li>
                        </ul>
                        <div class="PL_REC ls01_1">
                            <ul>
                                <?php foreach($players as $player): ?>
                                    <?php if($league=='KBO' && $player->position=='투수'): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/pitcher/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/pitcher/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                            <p>1990년 7월 30일</p>
                                            <span>No.<?=$player->back_num;?></span>
                                        </li>
                                    <?php elseif($league!='KBO' && ($player->position=='Starting pitcher' || $player->position=='Relief pitcher')): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><img src="" alt="<?=$player->id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><?=$player->match_name;?></a></h4>
                                            <p><?=$player->date_of_birth;?></p>
                                            <span><?=$player->position;?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="PL_REC ls01_2 active">
                            <ul>
                                <?php foreach($players as $player): ?>
                                    <?php if($league=='KBO' && $player->position=='내야수' || $player->position=='포수'): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                            <p>1990년 7월 30일</p>
                                            <span>No.<?=$player->back_num;?></span>
                                        </li>
                                    <?php elseif($league!='KBO' && ($player->position=='Catcher' || $player->position=='First baseman' || $player->position=='Second baseman' || $player->position=='Third baseman' || $player->position=='Shortstop' || $player->position=='Infielder')): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><img src="" alt="<?=$player->id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><?=$player->match_name;?></a></h4>
                                            <p><?=$player->date_of_birth;?></p>
                                            <span><?=$player->position;?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="PL_REC ls01_3">
                            <ul>
                                <?php foreach($players as $player): ?>
                                    <?php if($player->position=='외야수'): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                            <p>1990년 7월 30일</p>
                                            <span>No.<?=$player->back_num;?></span>
                                        </li>
                                    <?php elseif($league!='KBO' && ($player->position=='Right fielder' || $player->position=='Left fielder' || $player->position=='Center fielder')): ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><img src="" alt="<?=$player->id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/pitcher/<?=$player->id;?>?team=<?=$team;?>"><?=$player->match_name;?></a></h4>
                                            <p><?=$player->date_of_birth;?></p>
                                            <span><?=$player->position;?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        for(var i=1;i<5;i++){
            (function (k){
                $(".r_tit > li.ls01_tab_" + k ).click(function(){
                    $(this).siblings().removeClass("on");
                    $(this).addClass("on");
                    $(this).parent().siblings().removeClass("active");
                    $(this).parent().siblings("div.ls01_"+k).addClass("active");
                    return false;
                });
            }(i));
        };
    });
</script>