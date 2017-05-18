<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 KBO</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li><a href="/baseball/league_info/">리그정보</a></li>
            <li><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/stats/">리그 통계</a></li>
            <li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
            <li><a href="/baseball/player_record/">선수 기록</a></li>
            <li><a href="/baseball/score/">상대 전적</a></li>
        </ul>
        <div class="relative">
            <ul class="firTab">
                <li class="on r_tit1_1"><a href="">리그 승률</a></li>
                <li class="r_tit1_2"><a href="">리그 안타</a></li>
                <li class="r_tit1_3"><a href="">리그 홈런</a></li>
            </ul>
            <ul class="tab_view01 gameMain_view">
                <li class="active" style="padding-top:40px;"><!-- 리그 승률 -->
                    <div class="tab01_w">
                        <ul class="tab01_2 TLS">
                            <li class="on ls01"><a href="">승패</a></li>
                            <li class="ls02"><a href="">핸디캡</a></li>
                            <li class="ls03"><a href="">오버언더</a></li>
                            <li class="ls04"><a href="">팀별득점</a></li>
                        </ul>
                    </div>
                    <ul class="LS_view_w">
                        <li class="active"><!-- 승률 _ 승패 -->
                            <div class="pt15">
                                <div class="select inning_select">
                                    <p class="off"><span class="pp">풀타임</span><span class="pa"></span></p>
                                    <ul>
                                        <li class="is01"><a href="">풀타임</a></li>
                                        <li class="is02"><a href="">5이닝</a></li>
                                        <li class="is03"><a href="">1이닝</a></li>
                                    </ul>
                                </div>
                                <ul class="inning_view">
                                    <li class="iv01 active"><!-- 풀타임 -->
                                        <div class="tab2_w tab2_w_2">
                                            <!--ul class="tab02 LS_tab">
                                                <li class=" "><a href="">1.0</a></li>
                                                <li class=""><a href="">1.5</a></li>
                                                <li class="on"><a href="">2.0</a></li>
                                                <li class=""><a href="">2.5</a></li>
                                            </ul-->
                                        </div>
                                        <div class="select" style="top:-50px;">
                                            <p class="off"><span class="pp">시즌 전체</span><span class="pa"></span></p>
                                            <ul>
                                                <li class=""><a href="">최근 10경기</a></li>
                                                <li class=""><a href="">최근 15경기</a></li>
                                                <li class=""><a href="">최근 20경기</a></li>
                                                <li class=""><a href="">최근 30경기</a></li>
                                            </ul>
                                        </div>
                                        <table class="table_default table_2_left table_all_home_visit" >
                                            <caption></caption>
                                            <colgroup>
                                                <col width="63px"/><col width="*"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="30px"/><col width="30px"/><col width="36px"/><col width="50px"/>
                                            </colgroup>
                                            <tr class="w_th">
                                                <th colspan="2">&nbsp;</th>
                                                <th colspan="6">전체 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6">홈 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                <th colspan="6">원정 기록<a class="up_down up" href="" onfocus="this.blur();">내림차/오름차변경</a></th>
                                            </tr>
                                            <tr>
                                                <th>순위</th>
                                                <th>팀</th>
                                                <th>경기수</th>
                                                <th>승률</th>
                                                <th>승</th>
                                                <th>패</th>
                                                <th>타이</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>승률</th>
                                                <th>승</th>
                                                <th>패</th>
                                                <th>타이</th>
                                                <th>득:실</th>
                                                <th>경기수</th>
                                                <th>승률</th>
                                                <th>승</th>
                                                <th>패</th>
                                                <th>타이</th>
                                                <th>득:실</th>
                                            </tr>
                                            <tr>
                                                <td><span class="rankdot01_color"><b>1</b></span></td>
                                                <td>두산 베어스</td>
                                                <td>144</td>
                                                <td>0.678</td>
                                                <td>9</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>0.678</td>
                                                <td>9</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>95:75</td>
                                                <td>144</td>
                                                <td>0.678</td>
                                                <td>9</td>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>95:75</td>
                                            </tr>
                                        </table>
                                        <h3 class="center noBorder pt50">KBO 리그요약</h3>
                                        <div class="TOP5">
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">승률통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
                                                    <li class="td"><p class="top_t3">홈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">타이</p><p class="top_s3">144</p><p class="top_s3">30</p><p class="top_g3">5%</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">득점통계</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
                                                    <li class="td"><p class="top_t3">전체경기</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                    <li class="td"><p class="top_t3">원정팀</p><p class="top_s3">144</p><p class="top_s3">75</p><p class="top_g3">0.745</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">핸디캡통계</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">승률</p></li>
                                                    <li class="td"><p class="top_t3">전체경기 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">홈팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                    <li class="td"><p class="top_t3">원정팀 1.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">0.755</p></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul>
                                                    <li class="th"><p class="top_t3">O/U통계</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">오버 8.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                    <li class="td"><p class="top_t3">오버 9.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                    <li class="td"><p class="top_t3">오버 10.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                        <h3 class="center noBorder">부분별 상위 5팀</h3>
                                        <div class="TOP5">
                                            <div>
                                                <h4>홈승률 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
                                                    <?php foreach ($home_away_win_5['home_win_5'] as $key=>$item): ?>
                                                        <li class="td"><p class="top_t4"><?=$key;?></p><p class="top_s4"><?=$item['win'];?></p><p class="top_s4"><?=$item['lose'];?></p><p class="top_s4"><?=$item['tie'];?></p><p class="top_g4"><?=$item['win_rate'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>원정승률 상위 5팀<?php if($handicap!=0) echo '('.$handicap.')';?><span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t4">팀 명</p><p class="top_s4">승</p><p class="top_s4">패</p><p class="top_s4">타이</p><p class="top_g4">승률</p></li>
                                                    <?php foreach ($home_away_win_5['away_win_5'] as $keys=>$item): ?>
                                                        <li class="td"><p class="top_t4"><?=$keys;?></p><p class="top_s4"><?=$item['win'];?></p><p class="top_s4"><?=$item['lose'];?></p><p class="top_s4"><?=$item['tie'];?></p><p class="top_g4"><?=$item['win_rate'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4>리그득점, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">득점</p><p class="top_g3">경기당</p></li>
                                                    <?php foreach($get_score_5 as $item): ?>
                                                        <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['g'];?></p><p class="top_s3"><?=$item['get_score'];?></p><p class="top_g3"><?=$item['get_score_by_game'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4>득점마진, 상위 5팀<span></span></h4>
                                            <ul>
                                                <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
                                                    <?php foreach($score_margin_5 as $item): ?>
                                                        <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['get_score'];?>:<?=$item['lose_score'];?></p><p class="top_s3"><?=$item['score_margin'];?></p><p class="top_g3"><?=$item['get_score_by_game'];?></p></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div><h4>9.5오버, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div><h4>9.5언더, 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                    <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">KIA 타이거즈</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">두산 베어스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">롯데 자이언트</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                    <li class="td"><p class="top_t3">SK 와이번스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                                </ul></div>
                                            <div>
                                                <h4>승패, 최근 10경기 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <?php foreach($recent_10_game_over_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item->team;?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item->recent_game);
                                                                foreach($exp as $items): ?>
                                                                    <a href="javascript:void(0);" class="result_btn"><img src="/public/lib/image/base/btn_<?php if($items=='승') echo 'win'; else if($items=='패') echo 'lose'; else echo 'dra';?>.png" alt="" title=""></a>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item->win;?></span>/<?=$item->lose;?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>승패, 최근 10경기 하위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                    <?php foreach($recent_10_game_under_5 as $item): ?>
                                                        <li class="td">
                                                            <p class="top_t2"><?=$item->team;?></p>
                                                            <p class="top_s2">
                                                                <?php $exp=explode(';', $item->recent_game);
                                                                foreach($exp as $items): ?>
                                                                    <a href="javascript:void(0);" class="result_btn"><img src="/public/lib/image/base/btn_<?php if($items=='승') echo 'win'; else if($items=='패') echo 'lose'; else echo 'dra';?>.png" alt="" title=""></a>
                                                                <?php endforeach; ?>
                                                            </p>
                                                            <p class="top_g2"><span class="red"><?=$item->win;?></span>/<?=$item->lose;?></p>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>9.5오버, 최근 10경기 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2"><span class="red">9</span>/1</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h4>9.5언더, 최근 10경기 상위 5팀<span></span></h4>
                                                <ul>
                                                    <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                    <li class="td">
                                                        <p class="top_t2">LG 트윈스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">KIA 타이거즈</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">두산 베어스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">롯데 자이언트</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                    <li class="td">
                                                        <p class="top_t2">SK 와이번스</p>
                                                        <p class="top_s2">
                                                            <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span>
                                                        </p>
                                                        <p class="top_g2">1/<span class="blue">9</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="clear"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        // -----  리그통계 내 Tab 시작
        //리그승률/리그언더/리그홈런
        for(var i=1;i<8;i++){
            (function (k){
                $(".firTab > li.r_tit1_" + k ).click(function(){
                    $(".firTab li").removeClass("on");
                    $(this).addClass("on");
                    $(".gameMain_view > li").css("display","none");
                    $(".gameMain_view > li").eq(k-1).css("display","block");
                    return false;
                });
            }(i));
        };

        //승패/핸디캡/오버언더/팀별득점
        for(var i=1;i<8;i++){
            (function (k){
                $(".TLS > li.ls0" + k ).click(function(){
                    $(this).siblings().removeClass("on");
                    $(this).addClass("on");
                    $(this).parent().parent().siblings().find("> li").removeClass("active");
                    $(this).parent().parent().siblings().find("> li").eq(k-1).addClass("active");
                    return false;
                });
            }(i));
        };

        //이닝셀렉트
        for(var i=1;i<5;i++){
            (function (k){
                $(".inning_select li.is0" + k + " a").click(function(){
                    $(this).parent().parent().parent().siblings(".inning_view").find("li").removeClass("active");
                    $(this).parent().parent().parent().siblings(".inning_view").find("li.iv0"+k).addClass("active");
                    $(this).parent().parent().slideUp();
                    $(this).parent().parent().siblings().addClass("off").removeClass("on");
                    return false;
                });
            }(i));
        };
        // -----  리그통계 내 Tab 끝
        //league
        $(".btn_arrow01").click(function(){
            $(this).parents().find(".leaguebox").slideToggle();
            return false;
        });
    });
</script>