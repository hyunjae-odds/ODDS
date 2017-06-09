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
            <li class="on"><a href="/baseball/team_info">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule">경기 결과</a></li>
            <li class=""><a href="/baseball/player">선수 기록</a></li>
            <li class=""><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active">
                <div class="team_top" style="margin-bottom:40px;">
                    <div class="team_logo">
                        <img src="/public/lib/image/logo/LG_team.jpg" alt="" />
                        <p><b class="red">64</b>승&nbsp;&nbsp;&nbsp;<b class="blue">51</b>패&nbsp;&nbsp;&nbsp;<b class="gray">3</b>타이</p>
                    </div>
                    <ul class="graph_ul"><!-- 순위 .st_01~11 -->
                        <li>
                            <div class="st_01"><span class="st">1위</span><b>0.755</b></div>
                            <p>승률</p>
                        </li>
                        <li>
                            <div class="st_03"><span class="st">3위</span><b>4.55</b></div>
                            <p>방어율</p>
                        </li>
                        <li>
                            <div class="st_01"><span class="st">1위</span><b>0.755</b></div>
                            <p>타율</p>
                        </li>
                        <li>
                            <div class="st_04"><span class="st">4위</span><b>1504</b></div>
                            <p>안타</p>
                        </li>
                        <li>
                            <div class="st_05"><span class="st">5위</span><b>182</b></div>
                            <p>홈런</p>
                        </li>
                        <li>
                            <div class="st_09"><span class="st">9위</span><b>915</b></div>
                            <p>탈삼진</p>
                        </li>
                    </ul>
                    <ul class="gray_ul">
                        <li><span class="g_1">득점 (평균)</span><span class="g_2">455 (4.5점)</span><span class="g_3">5위</span></li>
                        <li><span class="g_1">오버 (6.5)</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
                        <li><span class="g_1">핸디캡(1.5)승</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
                        <li><span class="g_1">실점 (평균)</span><span class="g_2">455 (4.5점)</span><span class="g_3">3위</span></li>
                        <li><span class="g_1">언더 (6.5)</span><span class="g_2">24회</span><span class="g_3">45%</span></li>
                        <li><span class="g_1">핸디캡(1.5)패</span><span class="g_2">24회</span><span class="g_3">55%</span></li>
                    </ul>
                    <div class="record_10">
                        <p><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></p>									<span>최근 10경기 기록</span>
                        <p><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="minusL">minus</span></p>
                    </div>
                    <span class="clear"></span>
                    <!--ul class="live_onoff">
                        <li class="active"><a href="">상세기록 닫기<span class="arrow04_up"></span></a></li>
                        <li><a href="">상세기록 열기<span class="arrow04_down"></span></a></li>
                    </ul-->
                </div>
                <div class="pb50 relative">
                    <h3 class="noBorder center">2017시즌 기록</h3>
                    <div class="tab2_w absolute" style="top:10px;">
                        <ul class="tab02 LS_tab">
                            <li class="on ls_all"><a href="">전체</a></li>
                            <li class="ls_home"><a href="">홈</a></li>
                            <li class="ls_team"><a href="">원정</a></li>
                        </ul>
                    </div>
                    <table class="table_default table_2_left">
                        <caption></caption>
                        <colgroup>
                            <col width="63px">
                            <col width="*">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="66px">
                            <col width="270px">
                        </colgroup>
                        <tr>
                            <th>순위</th>
                            <th>팀</th>
                            <th>경기</th>
                            <th>승</th>
                            <th>패</th>
                            <th>타이</th>
                            <th>득:실</th>
                            <th>마진</th>
                            <th>최근 10경기</th>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>LG 트윈스</td>
                            <td>142</td>
                            <td>81</td>
                            <td>55</td>
                            <td>3</td>
                            <td>135:121</td>
                            <td>+45</td>
                            <td><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="두산 4:1 넥센"/></a><a href="../match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></td>
                        </tr>
                    </table>
                </div>
                <div class="pb50">
                    <h3 class="noBorder center">팀 상세기록</h3>
                    <table class="table_default record_table01">
                        <caption></caption>
                        <colgroup><col width="130px"/><col width="*"/><col width="50px"/></colgroup>
                        <tr>
                            <th>공격 상세기록</th>
                            <th colspan="2">
                                <div class="select_w">
                                    <div class="select" style="">
                                        <p class="off"><span class="pp">2016</span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="">2016</a></li>
                                            <li><a href="">2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>타율</td>
                            <td><span class="graph">0.295</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>득점</td>
                            <td><span class="graph">140점</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>안타</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>홈런</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>장타율</td>
                            <td><span class="graph">0.758</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>출루율</td>
                            <td><span class="graph">0.356</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>득점권타율</td>
                            <td><span class="graph">0.413</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>볼넷</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>삼진</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>병살타</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                    </table>
                    <table class="table_default record_table01">
                        <caption></caption>
                        <colgroup><col width="130px"/><col width="*"/><col width="50px"/></colgroup>
                        <tr>
                            <th>수비 상세기록</th>
                            <th colspan="2">
                                <div class="select_w">
                                    <div class="select" style="">
                                        <p class="off"><span class="pp">2016</span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="">2016</a></li>
                                            <li><a href="">2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>방어율</td>
                            <td><span class="graph">3.45</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>실점</td>
                            <td><span class="graph">140점</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>피안타</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>피안타율</td>
                            <td><span class="graph">0.275</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>피홈런</td>
                            <td><span class="graph">55개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>QS</td>
                            <td><span class="graph">75회</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>볼넷</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>삼진</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>실책</td>
                            <td><span class="graph">140개</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                        <tr>
                            <td>WHIP</td>
                            <td><span class="graph">1.45</span><p class="graph"><span style="width:40%"></span></p></td>
                            <td>5위</td>
                        </tr>
                    </table>
                    <span class="clear"></span>
                </div>
                <div class="pb50">
                    <h3 class="noBorder center">기록 분석</h3>
                    <table class="table_default record_table02">
                        <caption></caption>
                        <colgroup><col width="33.3%"/><col width="33.3%"/><col width="33.4%"/></colgroup>
                        <tr>
                            <th>강함</th>
                            <th>보통</th>
                            <th>약함</th>
                        </tr>
                        <tr>
                            <td>장타율 (0.474) 1위<span class="reco_icon rc_1">매우 강함</span></td>
                            <td>2루타 (0.474) 1위</td>
                            <td>2루타 (0.474) 1위<span class="reco_icon rc_3">매우 약함</span></td>
                        </tr>
                        <tr>
                            <td>득점권 타율 (0.474) 1위<span class="reco_icon rc_2">강 함</span></td>
                            <td>3루타 (0.474) 1위</td>
                            <td>3루타 (0.474) 1위<span class="reco_icon rc_4">약 함</span></td>
                        </tr>
                        <tr>
                            <td>홈런 (0.474) 1위</td>
                            <td>볼넷 (0.474) 1위</td>
                            <td>볼넷 (0.474) 1위</td>
                        </tr>
                        <tr>
                            <td>멀티히트 (0.474) 1위</td>
                            <td>삼진 (0.474) 1위</td>
                            <td>삼진 (0.474) 1위</td>
                        </tr>
                        <tr>
                            <td>도루 (0.474) 1위</td>
                            <td>피안타율 (0.474) 1위</td>
                            <td>피안타율 (0.474) 1위</td>
                        </tr>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>