<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
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
            <li class=""><a href="/baseball/team_info?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class=""><a href="/baseball/player_hitter?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class="on"><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active result02">
                <div class="team pb50">
                    <div><?=$team_introduce->detail;?></div>
                    <div class="graybox">
                        <ul>
                            <li><span><b>감독 : </b><?=$team_introduce->manager;?></span> <span><b>소속 국가 : </b>대한민국</span> <b>창단 년도 : </b><?=$team_introduce->begin_year;?>년</li>
                            <li><b>연고지 : </b><?=$team_introduce->locate;?></li>
                            <li><b>홈구장 : </b><?=$team_introduce->stadium;?> / <?=$team_introduce->stadium_size;?></li>
                            <li><b>홈페이지 : </b><a href="<?=$team_introduce->site;?>" target="_blank"><?=$team_introduce->site;?></a>  </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>