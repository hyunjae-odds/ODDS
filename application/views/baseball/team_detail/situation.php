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
            <li class=""><a href="/baseball/player?team=<?=$team;?>">선수 기록</a></li>
            <li class="on"><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active result02">
                <div class="situation">
                    <div class="coach">
                        <div class="pic"><img src="<?=$team_introduce->manager_pic;?>" alt="<?=$team_introduce->manager_pic;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                        <div>
                            <h3 class="noBorder">감독</h3>
                            <p><?=$team_introduce->manager;?></p>
                            <span><?=$team_introduce->manager_birth;?>, 대한민국</span>
                            <div>
                                <p>경력</p>
                                <ul><?=$team_introduce->manager_career;?></ul>
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
                                <?php foreach($players as $player):
                                    if($player->position=='투수'):
                                ?>
                                    <li>
                                        <p><a href="/baseball/player_detail/pitcher/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                        <h4><a href="/baseball/player_detail/pitcher/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                        <p>1990년 7월 30일</p>
                                        <span>No.<?=$player->back_num;?></span>
                                    </li>
                                <?php endif; endforeach; ?>
                            </ul>
                        </div>
                        <div class="PL_REC ls01_2 active">
                            <ul>
                                <?php foreach($players as $player):
                                    if($player->position=='내야수' || $player->position=='포수'):
                                        ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                            <p>1990년 7월 30일</p>
                                            <span>No.<?=$player->back_num;?></span>
                                        </li>
                                    <?php endif; endforeach; ?>
                            </ul>
                        </div>
                        <div class="PL_REC ls01_3">
                            <ul>
                                <?php foreach($players as $player):
                                    if($player->position=='외야수'):
                                        ?>
                                        <li>
                                            <p><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="/baseball/player_detail/batter/<?=$player->player_id;?>?team=<?=$team;?>"><?=$player->name;?></a></h4>
                                            <p>1990년 7월 30일</p>
                                            <span>No.<?=$player->back_num;?></span>
                                        </li>
                                    <?php endif; endforeach; ?>
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