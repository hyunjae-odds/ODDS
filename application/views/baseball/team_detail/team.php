<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline"><?=$team_introduce->team_full_name;?></span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=$team_introduce->team_full_name;?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule">경기 결과</a></li>
            <li class=""><a href="/baseball/player">선수 기록</a></li>
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