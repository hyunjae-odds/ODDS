<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토'); ?>
<?php $MLB_team_initial1=array('Chicago Cubs'=>'CUB','St. Louis Cardinals'=>'STL','Kansas City Royals'=>'KC','Colorado Rockies'=>'COL','Minnesota Twins'=>'MIN','Cleveland Indians'=>'CLE','Tampa Bay Rays'=>'TB','Miami Marlins'=>'MIA','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'SF');?>
<?php $MLB_team_initial2=array('Philadelphia Phillies'=>'PHI','Boston Red Sox'=>'BOS','New York Yankees'=>'NYY','Washington Nationals'=>'WSH','Texas Rangers'=>'TEX','Milwaukee Brewers'=>'MIL','Chicago White Sox'=>'CWS','Los Angeles Dodgers'=>'LAD','New York Mets'=>'NYM','Pittsburgh Pirates'=>'PIT');?>
<?php $MLB_team_initial3=array('Arizona Diamondbacks'=>'ARI','Oakland Athletics'=>'OAK','San Diego Padres'=>'SD','Seattle Mariners'=>'SEA','Houston Astros'=>'HOU','Baltimore Orioles'=>'BAL','Atlanta Braves'=>'ATL','Detroit Tigers'=>'DET','Cincinnati Reds'=>'CIN','Toronto Blue Jays'=>'TOR');?>

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
                    <li class="on" class="tl001"><div>
                        <span class="MLB_L_B"></span>
                        <p>전체구단</p></div>
                    </li>
                    <?php foreach($MLB_team_initial1 as $key=>$item): ?>
                        <li class="tl002"><div>
                            <span class="<?=$item?>_L"></span>
                            <p><?=$MLB_team_kor[$key];?></p></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="team_list_MLB team_list02">
                    <?php foreach($MLB_team_initial2 as $key=>$item): ?>
                        <li class="tl002"><div>
                            <span class="<?=$item?>_L"></span>
                            <p><?=$MLB_team_kor[$key];?></p></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <ul class="team_list_MLB team_list03">
                    <?php foreach($MLB_team_initial3 as $key=>$item): ?>
                        <li class="tl002"><div>
                            <span class="<?=$item?>_L"></span>
                            <p><?=$MLB_team_kor[$key];?></p></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <span class="pageBtn pageBtn01"></span>
                <span class="pageBtn pageBtn02"></span>
                <span class="pageBtn pageBtn03"></span>
                <div class="clear"></div>

                <ul class="result_veiw mt35">
                    <li class="active">
                        <h3 class="noBorder center">2017시즌 기록</h3>
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
                                <td class="pl20 left">리그기록(평균기록)</td>
                                <td>144</td>
                                <td>0.295</td>
                                <td>9.5</td>
                                <td>7.5</td>
                                <td>1.5</td>
                                <td>6.5</td>
                                <td>8.5</td>
                                <td>1.48</td>
                            </tr>
                        </table>
                        <div class="relative">
                            <div>
                                <table class="table_default result_table01 result_table01_1">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
                                    </colgroup>
                                    <tr>
                                        <td class="pl20"><b>P/O</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>8월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>7월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>6월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>5월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>4월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                </table>
                            </div>
                            <ul class="result_table01_1_onoff">
                                <li class="active"><a href="" class="up">월별 기록 닫기 <span class="up"></span></a></li>
                                <li><a href="" class="down">월별 기록 열기 <span class="down"></span></a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <h3 class="noBorder center" style="margin-top:60px;">2017시즌 경기결과</h3>
                            <div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
                                <a href="" class="btn_prev" title="이전달">이전달</a>
                                <a href="" class="date_yr date_num">2016</a>
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
                                </ul>
                                <span>.</span>
                                <a href="" class="date_mn date_num">08</a>
                                <ul class="date_mn_select date_ul">
                                    <li><a href="">03</a></li>
                                    <li><a href="">04</a></li>
                                    <li><a href="">05</a></li>
                                    <li><a href="">06</a></li>
                                    <li><a href="">07</a></li>
                                    <li><a href="">08</a></li>
                                    <li><a href="">09</a></li>
                                    <li><a href="">10</a></li>
                                    <li><a href="">11</a></li>
                                </ul>
                                <input value="이동" type="submit" class="btn_nv_mn">	
                                <a href="" class="btn_next" title="다음달">다음달</a>
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
                        <table class="table_default league_table01 league_table01_1">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <tr>
                                <th>05/25</th>
                                <th class="left pl20"><b>매치명</b></th>
                                <th>스코어</th>					
                                <th>승</th>	
                                <th>패</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                        </table>
                        <table class="table_default league_table01 league_table01_1">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <tr>
                                <th>05/24</th>
                                <th class="left pl20"><b>매치명</b></th>
                                <th>스코어</th>					
                                <th>승</th>	
                                <th>패</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                        </table>
                        <table class="table_default league_table01 league_table01_1">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="85px"/>
                                <col width="90px"/>
                                <col width="80px"/>
                                <col width="55px"/>
                                <col width="65px"/>
                            </colgroup>
                            <tr>
                                <th>05/23</th>
                                <th class="left pl20"><b>매치명</b></th>
                                <th>스코어</th>					
                                <th>승</th>	
                                <th>패</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php"><b>LA다져스</b>  vs  밀워키 브루어스</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>3.15</td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>18:30</td>
                                <td class="left pl20"><a href="/odds/game/main/dividend.php">LA다져스  vs  <b>밀워키 브루어스</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td>3.15</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>51</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                        </table>
                    </li>
                    <li>
                        <h3 class="noBorder center">2017시즌 LA다져스 기록</h3>
                        <!--div class="select" style="">
                            <p class="off"><span class="pp">월별</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="">월별</a></li>
                                <li><a href="">-</a></li>
                            </ul>
                        </div-->
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
                                <td class="pl20 left"><span class="LAD_L"></span><b>LA다져스</b> (평균기록)</td>
                                <td>144</td>
                                <td>0.295</td>
                                <td>9.5</td>
                                <td>7.5</td>
                                <td>1.5</td>
                                <td>6.5</td>
                                <td>8.5</td>
                                <td>1.48</td>
                            </tr>
                        </table>
                        <div class="relative">
                            <div>
                                <table class="table_default result_table01 result_table01_1">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="*"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/><col width="80px"/>
                                    </colgroup>
                                    <tr>
                                        <td class="pl20"><b>P/O</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>8월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>7월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>6월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>5월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                    <tr>
                                        <td class="pl20"><b>4월</b></td>
                                        <td>144</td>
                                        <td>0.295</td>
                                        <td>9.5</td>
                                        <td>7.5</td>
                                        <td>1.5</td>
                                        <td>6.5</td>
                                        <td>8.5</td>
                                        <td>1.48</td>
                                    </tr>
                                </table>
                            </div>
                            <ul class="result_table01_1_onoff">
                                <li class="active"><a href="" class="up">월별 기록 닫기 <span class="up"></span></a></li>
                                <li><a href="" class="down">월별 기록 열기 <span class="down"></span></a></li>
                            </ul>
                        </div>
                        <div class="relative">
                            <h3 class="noBorder center" style="margin-top:60px;">2017시즌 LA다져스 월별 기록</h3>
                            <div class="date" style="display:inline-block;position:absolute;top:5px;margin:0;">
                                <a href="" class="btn_prev" title="이전달">이전달</a>
                                <a href="" class="date_yr date_num">2016</a>
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
                                </ul>
                                <span>.</span>
                                <a href="" class="date_mn date_num">08</a>
                                <ul class="date_mn_select date_ul">
                                    <li><a href="">03</a></li>
                                    <li><a href="">04</a></li>
                                    <li><a href="">05</a></li>
                                    <li><a href="">06</a></li>
                                    <li><a href="">07</a></li>
                                    <li><a href="">08</a></li>
                                    <li><a href="">09</a></li>
                                    <li><a href="">10</a></li>
                                    <li><a href="">11</a></li>
                                </ul>
                                <input value="이동" type="submit" class="btn_nv_mn">	
                                <a href="" class="btn_next" title="다음달">다음달</a>
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
                        <table class="table_default league_table01 league_table01_1">
                            <caption></caption>
                            <colgroup>
                                <col width="80px"/>
                                <col width="*"/>
                                <col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/><col width="90px"/>
                            </colgroup>
                            <tr>
                                <th>날짜</th>
                                <th class="left pl20"><b>매치명</b></th>
                                <th>스코어</th>					
                                <th>기준</th>	
                                <th>오버</th>
                                <th>언더</th>
                                <th>B’s</th>
                                <th>DATA</th>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="underline">9.5</span></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>1.85</td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td><span class="underline">10.5</span></td>
                                <td>1.85</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="underline">9.5</span></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>1.85</td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td><span class="underline">10.5</span></td>
                                <td>1.85</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr><tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="underline">9.5</span></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>1.85</td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td><span class="underline">10.5</span></td>
                                <td>1.85</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr><tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="underline">9.5</span></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>1.85</td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td><span class="underline">10.5</span></td>
                                <td>1.85</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr><tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="plusL2"></span><a href="/odds/game/main/dividend.php"><b>롯데(송승준)</b>  vs  삼성(머피)</a></td>
                                <td><b class="score red">8<span class="colon">:</span>7</b></td>
                                <td><span class="underline">9.5</span></td>
                                <td><span class="graybox">1.93</span></td>
                                <td>1.85</td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                            <tr>
                                <td>12/22</td>
                                <td class="left pl20"><span class="minusL2"></span><a href="/odds/game/main/dividend.php">롯데(송승준)  vs  <b>삼성(머피)</b></a></td>
                                <td><b class="score red">2<span class="colon">:</span>7</b></td>
                                <td><span class="underline">10.5</span></td>
                                <td>1.85</td>
                                <td><span class="graybox">1.93</span></td>
                                <td>55</td>
                                <td><span class="b_BTN5"><a href="/odds/game/league_base/match.php">매치정보</a></span></td>
                            </tr>
                        </table>
                    </li>
                    <li>002</li>
                    <li>003</li>
                    <li>004</li>
                    <li>005</li>
                    <li>006</li>
                    <li>007</li>
                    <li>008</li>
                    <li>009</li>
                    <li>010</li>
                    <li>011</li>
                    <li>012</li>
                    <li>013</li>
                    <li>014</li>
                    <li>015</li>
                    <li>016</li>
                    <li>017</li>
                    <li>018</li>
                    <li>019</li>
                    <li>020</li>
                    <li>021</li>
                    <li>022</li>
                    <li>023</li>
                    <li>024</li>
                    <li>025</li>
                    <li>026</li>
                    <li>027</li>
                    <li>028</li>
                    <li>029</li>
                    <li>030</li>
                    <li>031</li>
                    <li>032</li>
                    <li>033</li>
                    <li>034</li>
                    <li>035</li>
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

        // 팀별 기록 보기
        for(var i=1;i<32;i++){
            (function (k){
                $(".team_list_MLB > li").eq(k-1).click(function(){
                    $(".team_list_MLB li").removeClass("on");
                    $(this).addClass("on");
                    $(".result_veiw > li").removeClass("active");
                    $(".result_veiw > li").eq(k-1).addClass("active");
                    return false;
                });
            }(i));
        };
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