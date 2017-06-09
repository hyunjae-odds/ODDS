<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline">LG트윈스</span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">LG 트윈스</h2>
    </div>
    <div class="game_w pb50">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule">경기 결과</a></li>
            <li class="on"><a href="/baseball/player">선수 기록</a></li>
            <li class=""><a href="/baseball/situation?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team?team=<?=$team;?>">팀 소개</a></li>
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
                            <li class="ls01_tab_1"><a href="">투수</a></li>
                            <li class="on ls01_tab_2"><a href="">타자</a></li>
                        </ul>
                        <div class="team_p ls01_1">
                            <ul class="player_list">
                                <li>
                                    <p class="th">평균자책점</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">승 리</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">세이브</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">승 률</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">홀 드</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                            </ul>
                            <div class="table_w pitcher">
                                <div>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="40px"/>
                                            <col width="100px"/>
                                            <col width="64px"/>
                                            <col width="70px"/>
                                            <col width="51px"/>
                                            <col width="64px"/>
                                            <col width="59px"/>
                                            <col width="58px"/>
                                            <col width="57px"/>
                                            <col width="43px"/>
                                            <col width="61px"/>
                                            <col width="59px"/>
                                            <col width="59px"/>
                                            <col width="53px"/>
                                            <col width="51px"/>
                                            <col width="44px"/>
                                            <col width="65px"/>
                                            <col width="65px"/>
                                            <col width="65px"/>
                                            <col width="65px"/>
                                        </colgroup>
                                        <tr>
                                            <th>순위</th>
                                            <th>선수</th>
                                            <th>팀</th>
                                            <th><span class="pr_1" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=1')">평균자책</span></th>
                                            <th><span class="pr_2" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=g&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=2')">경기</span></th>
                                            <th><span class="pr_3" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=w&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=3')">승</span></th>
                                            <th><span class="pr_4" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=l&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=4')">패</span></th>
                                            <th><span class="pr_5" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=sv&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=5')">세이브</span></th>
                                            <th><span class="pr_6" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=hld&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=6')">홀드</span></th>
                                            <th><span class="pr_7" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=wpct&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=7')">승률</span></th>
                                            <th><span class="pr_8" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=ip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=8')">이닝</span></th>
                                            <th><span class="pr_9" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=h&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=9')">피안타</span></th>
                                            <th><span class="pr_10" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=hr&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=10')">홈</span></th>
                                            <th><span class="pr_11" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=bb&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=11')">볼넷</span></th>
                                            <th><span class="pr_12" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=12')">사구</span></th>
                                            <th><span class="pr_13" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=so&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=13')">삼진</span></th>
                                            <th><span class="pr_14" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=r&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=14')">실점</span></th>
                                            <th><span class="pr_15" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=er&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=15')">자책</span></th>
                                            <th><span class="pr_16" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=whip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=16')">WHIP</span></th>
                                        </tr>
                                        <?php foreach($pitcher as $key=>$item): ?>
                                            <tr>
                                                <td><?=$key+1;?></td>
                                                <td><?=$item->name;?></td>
                                                <td><?=$item->team;?></td>
                                                <td class="pr_1"><?=number_format($item->era,3);?></td>
                                                <td class="pr_2"><?=$item->g;?></td>
                                                <td class="pr_3"><?=$item->w;?></td>
                                                <td class="pr_4"><?=$item->l;?></td>
                                                <td class="pr_5"><?=$item->sv;?></td>
                                                <td class="pr_6"><?=$item->hld;?></td>
                                                <td class="pr_7"><?php if($item->wpct=='-') echo '-'; else echo number_format($item->wpct,3);?></td>
                                                <td class="pr_8"><?=$item->ip;?></td>
                                                <td class="pr_9"><?=$item->h;?></td>
                                                <td class="pr_10"><?=$item->hr;?></td>
                                                <td class="pr_11"><?=$item->bb;?></td>
                                                <td class="pr_12"><?=$item->hbp;?></td>
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
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="55px"/>
                                            <col width="100px"/>
                                            <col width="80px"/>
                                            <col width="80px"/>
                                            <col width="96px"/>
                                            <col width="91px"/>
                                            <col width="93px"/>
                                            <col width="86px"/>
                                            <col width="85px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                            <col width="78px"/>
                                        </colgroup>
                                        <tr>
                                            <th>순위</th>
                                            <th>이름</th>
                                            <th>팀</th>
                                            <th><span class="pr_17" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=17')">평균자책</span></th>
                                            <th><span class="pr_18" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=cg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=18')">완투</span></th>
                                            <th><span class="pr_19" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=sho&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=19')">완봉</span></th>
                                            <th><span class="pr_20" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=qs&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=20')">QS</span></th>
                                            <th><span class="pr_21" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=bsv&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=21')">BSV</span></th>
                                            <th><span class="pr_22" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=tbf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=22')">타자수</span></th>
                                            <th><span class="pr_23" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=np&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=23')">투구수</span></th>
                                            <th><span class="pr_24" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=avg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=24')">피안타</span></th>
                                            <th><span class="pr_25" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=25')">2루타</span></th>
                                            <th><span class="pr_26" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=26')">3루타</span></th>
                                            <th><span class="pr_27" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=sac&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=27')">SAC</span></th>
                                            <th><span class="pr_28" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=sf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=28')">SF</span></th>
                                            <th><span class="pr_29" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=29')">고의</span></th>
                                            <th><span class="pr_30" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=wp&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=30')">폭투</span></th>
                                            <th><span class="pr_31" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&pitcher_sort=bk&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=31')">보크</span></th>
                                        </tr>
                                        <?php foreach($pitcher as $key=>$item): ?>
                                            <tr>
                                                <td><?=$key+1;?></td>
                                                <td><?=$item->name;?></td>
                                                <td><?=$item->team;?></td>
                                                <td class="pr_17"><?=number_format($item->era,3);?></td>
                                                <td class="pr_18"><?=$item->cg;?></td>
                                                <td class="pr_19"><?=$item->sho;?></td>
                                                <td class="pr_20"><?=$item->qs;?></td>
                                                <td class="pr_21"><?=$item->bsv;?></td>
                                                <td class="pr_22"><?=$item->tbf;?></td>
                                                <td class="pr_23"><?=$item->np;?></td>
                                                <td class="pr_24"><?=number_format($item->avg,3);?></td>
                                                <td class="pr_25"><?=$item->second_b;?></td>
                                                <td class="pr_26"><?=$item->third_b;?></td>
                                                <td class="pr_27"><?=$item->sac;?></td>
                                                <td class="pr_28"><?=$item->sf;?></td>
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
                            <div class="page page02">
                            </div>
                        </div>
                        <div class="team_p ls01_2 active">
                            <ul class="player_list">
                                <li>
                                    <p class="th">타 율</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">홈 런</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">타 점</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">안 타</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                                <li>
                                    <p class="th">도 루</p>
                                    <div class="pic"><img src="/public/lib/image/game/pic04.jpg" alt=""></div>
                                    <p class="td">최형우</p>
                                    <b class="red">3.49</b>
                                    <b class="gray">리그전체 2위</b>
                                </li>
                            </ul>
                            <div class="table_w hitter">
                                <div class="relative">
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="48px"/>
                                            <col width="72px"/>
                                            <col width="*"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="50px"/>
                                            <col width="90px"/>
                                            <col width="90px"/>
                                        </colgroup>
                                        <tr>
                                            <th>순위</th>
                                            <th>선수</th>
                                            <th>팀</th>
                                            <th><span class="bt_1" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=1')">타율</span></th>
                                            <th><span class="bt_2" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=g&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=2')">경기</span></th>
                                            <th><span class="bt_3" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=pa&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=3')">타석</span></th>
                                            <th><span class="bt_4" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=ab&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=4')">타수</span></th>
                                            <th><span class="bt_5" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=r&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=5')">득점</span></th>
                                            <th><span class="bt_6" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=h&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=6')">안타</span></th>
                                            <th><span class="bt_7" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=7')">2루타</span></th>
                                            <th><span class="bt_8" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=8')">3루타</span></th>
                                            <th><span class="bt_9" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=hr&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=9')">홈런</span></th>
                                            <th><span class="bt_10" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=tb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=10')">루타</span></th>
                                            <th><span class="bt_11" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=rbi&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=11')">타점</span></th>
                                            <th><span class="bt_12" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=sac&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=12')">희생번트</span></th>
                                            <th><span class="bt_13" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=sf&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=13')">희생플라이</span></th>
                                        </tr>
                                        <?php foreach($batter as $keys=>$item): ?>
                                            <tr>
                                                <td><?=$offset+$keys+1;?></td>
                                                <td><?=$item->name;?></td>
                                                <td><?=$item->team;?></td>
                                                <td class="bt_1"><?=number_format($item->avg,3);?></td>
                                                <td class="bt_2"><?=$item->g;?></td>
                                                <td class="bt_3"><?=$item->pa;?></td>
                                                <td class="bt_4"><?=$item->ab;?></td>
                                                <td class="bt_5"><?=$item->r;?></td>
                                                <td class="bt_6"><?=$item->h;?></td>
                                                <td class="bt_7"><?=$item->second_b;?></td>
                                                <td class="bt_8"><?=$item->third_b;?></td>
                                                <td class="bt_9"><?=$item->hr;?></td>
                                                <td class="bt_10"><?=$item->tb;?></td>
                                                <td class="bt_11"><?=$item->rbi;?></td>
                                                <td class="bt_12"><?=$item->sac;?></td>
                                                <td class="bt_13"><?=$item->sf;?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline pr_1">
                                        <span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
                                    </div>
                                </div>
                                <div class="next_table" style="display:none;">
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                            <col width="48px"/>
                                            <col width="100px"/>
                                            <col width="100px"/>
                                            <col width="93px"/>
                                            <col width="93px"/>
                                            <col width="93px"/>
                                            <col width="93px"/>
                                            <col width="94px"/>
                                            <col width="94px"/>
                                            <col width="110px"/>
                                            <col width="110px"/>
                                            <col width="110px"/>
                                            <col width="110px"/>
                                            <col width="110px"/>
                                            <col width="110px"/>
                                        </colgroup>
                                        <tr>
                                            <th>순위</th>
                                            <th>선수</th>
                                            <th>팀</th>
                                            <th><span class="bt_14" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=14')">타율</span></th>
                                            <th><span class="bt_15" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=bb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=15')">볼넷</span></th>
                                            <th><span class="bt_16" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=16')">고의4구</span></th>
                                            <th><span class="bt_17" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=17')">사구</span></th>
                                            <th><span class="bt_18" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=so&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=18')">삼진</span></th>
                                            <th><span class="bt_19" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=gdp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=19')">병살타</span></th>
                                            <th><span class="bt_20" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=slg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=20')">장타율</span></th>
                                            <th><span class="bt_21" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=obp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=21')">출루</span></th>
                                            <th><span class="bt_22" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=ops&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=22')">OPS</span></th>
                                            <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=mh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23')">멀티히트</span></th>
                                            <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=risp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24')">득점권타율</span></th>
                                            <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player?team=<?=$team;?>&batter_sort=phba&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25')">대타타율</span></th>
                                        </tr>
                                        <?php foreach($batter as $keys=>$item): ?>
                                            <tr>
                                                <td><?=$offset+$keys+1;?></td>
                                                <td><?=$item->name;?></td>
                                                <td><?=$item->team;?></td>
                                                <td class="bt_14"><?=number_format($item->avg,3);?></td>
                                                <td class="bt_15"><?=$item->bb;?></td>
                                                <td class="bt_16"><?=$item->ibb;?></td>
                                                <td class="bt_17"><?=$item->hbp;?></td>
                                                <td class="bt_18"><?=$item->so;?></td>
                                                <td class="bt_19"><?=$item->gdp;?></td>
                                                <td class="bt_20"><?=number_format($item->slg,3);?></td>
                                                <td class="bt_21"><?=number_format($item->obp,3);?></td>
                                                <td class="bt_22"><?=number_format($item->ops,3);?></td>
                                                <td class="bt_23"><?=$item->mh;?></td>
                                                <td class="bt_24"><?=number_format($item->risp,3);?></td>
                                                <td class="bt_25"><?=number_format($item->phba,3);?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                    <div class="redline pr_1">
                                        <span class="bt"></span><span class="bl"></span><span class="br"></span><span class="bb"></span>
                                    </div>
                                </div>
                                <p class="nextTable"><a href=""></a></p>
                            </div>
                            <div class="page page02">
                                <?=$this->pagination->create_links();?>
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
            $('.ls01_tab_1').siblings().removeClass("on");
            $('.ls01_tab_1').addClass("on");
            $('.ls01_tab_1').parent().siblings().removeClass("active");
            $('.ls01_tab_1').parent().siblings("div.ls01_1").addClass("active");
        }else if('<?=$focus;?>'=='2'){
            selector_name = '.pr_';
            $('.ls01_tab_1').siblings().removeClass("on");
            $('.ls01_tab_1').addClass("on");
            $('.ls01_tab_1').parent().siblings().removeClass("active");
            $('.ls01_tab_1').parent().siblings("div.ls01_1").addClass("active");
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