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
                                        <p><a href="../player_info_hitter.php"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                        <h4><a href="../player_info_hitter.php"><?=$player->name;?></a></h4>
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
                                            <p><a href="../player_info_hitter.php"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="../player_info_hitter.php"><?=$player->name;?></a></h4>
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
                                            <p><a href="../player_info_hitter.php"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player->player_id;?>.jpg" alt="<?=$player->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></a></p>
                                            <h4><a href="../player_info_hitter.php"><?=$player->name;?></a></h4>
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