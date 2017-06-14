<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline">LG트윈스</span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">LG 트윈스</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/player?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active result02">
                <div class="team_record p_info">
                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player_id;?>.jpg" alt="<?=$player_basic['name'];?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                    <div>
                        <h3 class="noBorder"><?=$player_basic['name'];?><span>No. <?=$player_basic['back_num'];?></span></h3>
                        <ul>
                            <li>포지션 : <?=$player_basic['position'];?></li>
                            <li>출생 : <?=$player_basic['birth'];?></li>
                            <li>신체/체중 : <?=$player_basic['hw'];?></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <ul>
                        <?php if($pitcher_or_batter=='batter'): ?>
                            <li>타율<span><?=$player_basic['avg'];?></span>(<?=$player_basic['avg_rank'];?>위)</li>
                            <li>홈런<span><?=$player_basic['hr'];?></span></li>
                            <li>타점<span><?=$player_basic['rbi'];?></span></li>
                        <?php else: ?>
                            <li>다승<span><?=$player_basic['w'];?></span>(<?=$player_basic['w_rank'];?>위)</li>
                            <li>평균자책<span><?=$player_basic['era'];?></span></li>
                            <li>탈삼진<span><?=$player_basic['so'];?></span></li>
                        <?php endif;?>
                    </ul>
                    <p>소속리그 : KBO</p>
                </div>
                <div class="pb50 relative">
                    <h3 class="noBorder">시즌성적</h3>
                    <div class="date right" style="top:5px;">
                        <a href="javascript:void(0);" class="btn_prev" title="이전시즌">이전시즌</a>
                        <a href="" class="date_yr date_num">2017 <span class="f20">시즌</span></a>
                        <ul class="date_yr_select date_ul" style="width:107px;">
                            <li><a href="">2017 시즌</a></li>
                        </ul>
<!--                        <input value="이동" type="submit" class="btn_nv_mn">-->
                        <a href="javascript:void(0);" class="btn_next" title="다음달">다음달</a>
                        <div class="clear"></div>
                    </div>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <?php if($pitcher_or_batter=='batter'): ?>
                            <tr>
                                <th>소속팀</th>
                                <th>AVG</th>
                                <th>G</th>
                                <th>PA</th>
                                <th>AB</th>
                                <th>R</th>
                                <th>H</th>
                                <th>2B</th>
                                <th>3B</th>
                                <th>HR</th>
                                <th>TB</th>
                                <th>RBI</th>
                                <th>SB</th>
                                <th>CS</th>
                                <th>SAC</th>
                                <th>SF</th>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th>소속팀</th>
                                <th>ERA</th>
                                <th>G</th>
                                <th>CG</th>
                                <th>SHO</th>
                                <th>W</th>
                                <th>L</th>
                                <th>SV</th>
                                <th>HLD</th>
                                <th>WPCT</th>
                                <th>TBF</th>
                                <th>NP</th>
                                <th>IP</th>
                                <th>H</th>
                                <th>2B</th>
                                <th>3B</th>
                                <th>HR</th>
                            </tr>
                        <?php endif;?>
                        <?=$data01;?>
                    </table>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <?php if($pitcher_or_batter=='batter'): ?>
                            <tr>
                                <th>BB</th>
                                <th>IBB</th>
                                <th>HBP</th>
                                <th>SO</th>
                                <th>GDP</th>
                                <th>SLG</th>
                                <th>OBP</th>
                                <th>E</th>
                                <th>SB%</th>
                                <th>MH</th>
                                <th>OPS</th>
                                <th>RISP</th>
                                <th>PH-BA</th>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th>SAC</th>
                                <th>SF</th>
                                <th>BB</th>
                                <th>IBB</th>
                                <th>SO</th>
                                <th>WP</th>
                                <th>BK</th>
                                <th>R</th>
                                <th>ER</th>
                                <th>BSV</th>
                                <th>WHIP</th>
                                <th>AVG</th>
                                <th>QS</th>
                            </tr>
                        <?php endif; ?>
                        <?=$data02;?>
                    </table>
                </div>
                <div class="pb50 relative">
                    <h3 class="noBorder">최근 10경기 성적</h3>
                    <p class="teammore"><a href="javascript:void(0);">더보기</a></p>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <?php if($pitcher_or_batter=='batter'): ?>
                            <tr>
                                <th>일자</th>
                                <th>상대</th>
                                <th>AVG</th>
                                <th>AB</th>
                                <th>R</th>
                                <th>H</th>
                                <th>2B</th>
                                <th>3B</th>
                                <th>HR</th>
                                <th>RBI</th>
                                <th>SB</th>
                                <th>CS</th>
                                <th>BB</th>
                                <th>HBP</th>
                                <th>SO</th>
                                <th>GDP</th>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <th>일자</th>
                                <th>상대</th>
                                <th>결과</th>
                                <th>ERA</th>
                                <th>TBF</th>
                                <th>IP</th>
                                <th>H</th>
                                <th>HR</th>
                                <th>BB</th>
                                <th>HBP</th>
                                <th>SO</th>
                                <th>R</th>
                                <th>ER</th>
                                <th>AVG</th>
                            </tr>
                        <?php endif; ?>
                        <?=$data1;?>
                    </table>
                </div>
                <div class="relative">
                    <div class="pb30">
                        <h3 class="noBorder">상대팀별 성적</h3>
                        <div class="date right" style="top:5px;">
                            <a href="" class="btn_prev" title="이전시즌">이전시즌</a>
                            <a href="" class="date_yr date_num">2017 <span class="f20">시즌</span></a>
                            <ul class="date_yr_select date_ul" style="width:107px;">
                                <li><a href="">2017 시즌</a></li>
                            </ul>
<!--                            <input value="이동" type="submit" class="btn_nv_mn">-->
                            <a href="" class="btn_next" title="다음달">다음달</a>
                            <div class="clear"></div>
                        </div>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data2;?>
                        </table>
                    </div>
                    <div class="pb30">
                        <h3 class="noBorder">구장별 성적</h3>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data3;?>
                        </table>
                    </div>
                    <div class="pb30">
                        <h3 class="noBorder">월별 성적</h3>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data4;?>
                        </table>
                    </div>
                    <div class="pb30">
                        <h3 class="noBorder">요일별 성적</h3>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data5;?>
                        </table>
                    </div>
                    <div class="pb30">
                        <h3 class="noBorder">홈/원정별 성적</h3>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data6;?>
                        </table>
                    </div>
                    <div class="pb50">
                        <h3 class="noBorder">주/야간별 성적</h3>
                        <table class="table_default">
                            <caption></caption>
                            <colgroup>
                                <col width="200px"/>
                            </colgroup>
                            <?php if($pitcher_or_batter=='batter'): ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>AVG</th>
                                    <th>AB</th>
                                    <th>R</th>
                                    <th>H</th>
                                    <th>2B</th>
                                    <th>3B</th>
                                    <th>HR</th>
                                    <th>RBI</th>
                                    <th>SB</th>
                                    <th>CS</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>GDP</th>
                                </tr>
                            <?php else: ?>
                                <tr>
                                    <th>구분</th>
                                    <th>G</th>
                                    <th>ERA</th>
                                    <th>W</th>
                                    <th>L</th>
                                    <th>SV</th>
                                    <th>HLD</th>
                                    <th>WPCT</th>
                                    <th>TBF</th>
                                    <th>IP</th>
                                    <th>H</th>
                                    <th>HR</th>
                                    <th>BB</th>
                                    <th>HBP</th>
                                    <th>SO</th>
                                    <th>R</th>
                                    <th>ER</th>
                                    <th>AVG</th>
                                </tr>
                            <?php endif; ?>
                            <?=$data7;?>
                        </table>
                    </div>
                </div>
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
    });
</script>