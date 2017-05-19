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
            <li><a href="/baseball/stats/">리그 통계</a></li>
            <li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
            <li class="on"><a href="/baseball/player_record/">선수 기록</a></li>
            <li><a href="/baseball/score/">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s5 active">
                <div class="date">
                    <a href="" class="btn_prev" title="이전시즌">이전시즌</a>
                    <a href="" class="date_yr date_num">2017<span class="date_t">시즌</span></a>
                    <ul class="date_yr_select date_ul" style="display:none;">
                        <li><a href="">2013</a></li>
                        <li><a href="">2014</a></li>
                        <li><a href="">2015</a></li>
                        <li><a href="">2016</a></li>
                    </ul>
<!--                <input value="이동" type="submit" class="btn_nv_mn">-->
                    <a href="" class="btn_next" title="다음시즌">다음시즌</a>
                </div>
                <div class="relative">
                    <ul class="blackTab r_tit" style="top:-33px;">
                        <li class="ls01_tab_1"><a href="">투수</a></li>
                        <li class="on ls01_tab_2"><a href="">타자</a></li>
                    </ul>
                    <div class="PL_REC ls01_1">
                        <ul class="player_rec">
                            <li>
                                <h3>평균자책점</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['era'][0]->player_id;?>.jpg" alt="<?=$pitcher5['era'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['era'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->era,2);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>승 리</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['w'][0]->player_id;?>.jpg" alt="<?=$pitcher5['w'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['w'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->w;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>세이브</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['sv'][0]->player_id;?>.jpg" alt="<?=$pitcher5['sv'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['sv'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->sv;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>승 률</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['wpct'][0]->player_id;?>.jpg" alt="<?=$pitcher5['wpct'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['wpct'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->wpct,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>홀 드</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['hld'][0]->player_id;?>.jpg" alt="<?=$pitcher5['hld'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['hld'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->hld;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>탈삼진</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$pitcher5['so'][0]->player_id;?>.jpg" alt="<?=$pitcher5['so'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($pitcher5['so'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->so;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="gray_warp_w">
                            <div class="gray_warp">
                                <div class="select ">
                                    <p><span class="pp">2017</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">2017</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">KBO 정규시즌</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">KBO 정규시즌</a></li>
                                    </ul>
                                </div>
                                <div class="select">
                                    <p><span class="pp"><?php if($this->input->get('team')!=null): echo $this->input->get('team'); else: echo '팀 선택'; endif; ?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="/baseball/player_record?team=두산">두산</a></li>
                                        <li><a href="/baseball/player_record?team=NC">NC</a></li>
                                        <li><a href="/baseball/player_record?team=넥센">넥센</a></li>
                                        <li><a href="/baseball/player_record?team=LG">LG</a></li>
                                        <li><a href="/baseball/player_record?team=KIA">KIA</a></li>
                                        <li><a href="/baseball/player_record?team=SK">SK</a></li>
                                        <li><a href="/baseball/player_record?team=한화">한화</a></li>
                                        <li><a href="/baseball/player_record?team=롯데">롯데</a></li>
                                        <li><a href="/baseball/player_record?team=삼성">삼성</a></li>
                                        <li><a href="/baseball/player_record?team=kt">KT</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">포지션</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">1루수</a></li>
                                        <li><a href="">2루수</a></li>
                                        <li><a href="">3루수</a></li>
                                        <li><a href="">유격수</a></li>
                                        <li><a href="">포수</a></li>
                                        <li><a href="">좌익수</a></li>
                                        <li><a href="">우익수</a></li>
                                        <li><a href="">중견수</a></li>
                                        <li><a href="">투수</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">경기상황별1</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">월별</a></li>
                                        <li><a href="">요일별</a></li>
                                        <li><a href="">구장별</a></li>
                                        <li><a href="">홈/방문별</a></li>
                                        <li><a href="">상대팀별</a></li>
                                        <li><a href="">주야간별</a></li>
                                        <li><a href="">전/후반별</a></li>
                                        <li><a href="">투수유형별</a></li>
                                        <li><a href="">주자상황별</a></li>
                                        <li><a href="">볼카운트별</a></li>
                                        <li><a href="">아웃카운트별</a></li>
                                        <li><a href="">이닝별</a></li>
                                        <li><a href="">타순별</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">경기상황별2</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">3~4월</a></li>
                                        <li><a href="">5월</a></li>
                                        <li><a href="">6월</a></li>
                                        <li><a href="">7월</a></li>
                                        <li><a href="">8월</a></li>
                                        <li><a href="">9월이후</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">기본기록</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                    </ul>
                                </div>
                                <a class="btn s6_btn" href="">결과보기<span></span></a>
                            </div>
                        </div>
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
                                        <th><span class="pr_1" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=1')">평균자책</span></th>
                                        <th><span class="pr_2" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=g&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=2')">경기</span></th>
                                        <th><span class="pr_3" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=w&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=3')">승</span></th>
                                        <th><span class="pr_4" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=l&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=4')">패</span></th>
                                        <th><span class="pr_5" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=sv&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=5')">세이브</span></th>
                                        <th><span class="pr_6" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=hld&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=6')">홀드</span></th>
                                        <th><span class="pr_7" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=wpct&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=7')">승률</span></th>
                                        <th><span class="pr_8" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=ip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=8')">이닝</span></th>
                                        <th><span class="pr_9" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=h&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=9')">피안타</span></th>
                                        <th><span class="pr_10" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=hr&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=10')">홈</span></th>
                                        <th><span class="pr_11" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=bb&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=11')">볼넷</span></th>
                                        <th><span class="pr_12" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=12')">사구</span></th>
                                        <th><span class="pr_13" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=so&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=13')">삼진</span></th>
                                        <th><span class="pr_14" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=r&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=14')">실점</span></th>
                                        <th><span class="pr_15" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=er&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=15')">자책</span></th>
                                        <th><span class="pr_16" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=whip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=16')">이닝당출루허용</span></th>
                                    </tr>
                                    <?php foreach($pitcher as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
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
                                        <col width="80px"/>
                                        <col width="80px"/>
                                        <col width="80px"/>
                                        <col width="96px"/>
                                        <col width="91px"/>
                                        <col width="93px"/>
                                        <col width="86px"/>
                                        <col width="85px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                        <col width="81px"/>
                                    </colgroup>
                                    <tr>
                                        <th>순위</th>
                                        <th>이름</th>
                                        <th>팀</th>
                                        <th><span class="pr_17" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=17')">평균자책</span></th>
                                        <th><span class="pr_18" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=cg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=18')">완투</span></th>
                                        <th><span class="pr_19" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=sho&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=19')">완봉</span></th>
                                        <th><span class="pr_20" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=qs&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=20')">QS</span></th>
                                        <th><span class="pr_21" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=bsv&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=21')">블론세이</span></th>
                                        <th><span class="pr_22" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=tbf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=22')">타자수</span></th>
                                        <th><span class="pr_23" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=np&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=23')">투구수</span></th>
                                        <th><span class="pr_24" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=avg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=24')">피안타</span></th>
                                        <th><span class="pr_25" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=25')">2루타</span></th>
                                        <th><span class="pr_26" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=26')">3루타</span></th>
                                        <th><span class="pr_27" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=sac&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=27')">희생번</span></th>
                                        <th><span class="pr_28" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=sf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=28')">희생플라이</span></th>
                                        <th><span class="pr_29" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=29')">고의</span></th>
                                        <th><span class="pr_30" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=wp&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=30')">폭투</span></th>
                                        <th><span class="pr_31" onclick="javascript:location.replace('/baseball/player_record?pitcher_sort=bk&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=31')">보크</span></th>
                                    </tr>
                                    <?php foreach($pitcher as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
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
                    <div class="PL_REC ls01_2 active">
                        <ul class="player_rec">
                            <li>
                                <h3>타 율</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['avg'][0]->player_id;?>.jpg" alt="<?=$batter5['avg'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($batter5['avg'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->avg,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>홈 런</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['hr'][0]->player_id;?>.jpg" alt="<?=$batter5['hr'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($batter5['hr'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->hr;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>타 점</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['rbi'][0]->player_id;?>.jpg" alt="<?=$batter5['rbi'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($batter5['rbi'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->rbi;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>안 타</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['h'][0]->player_id;?>.jpg" alt="<?=$batter5['h'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($batter5['h'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->h;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>도 루</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$runner5[0]->player_id;?>.jpg" alt="<?=$runner5[0]->player_id;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($runner5 as $item): ?>
                                        <li><b><?=$item->rank;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->sb;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>OPS</h3>
                                <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['ops'][0]->player_id;?>.jpg" alt="<?=$batter5['ops'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                                <ul>
                                    <?php foreach($batter5['ops'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->ops,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="gray_warp_w">
                            <div class="gray_warp">
                                <div class="select ">
                                    <p class="off"><span class="pp">2017</span><span class="pa"></span></p>
                                    <ul><li><a href="">2017</a></li></ul>
                                </div>
                                <div class="select ">
                                    <p class="off"><span class="pp">KBO 정규시즌</span><span class="pa"></span></p>
                                    <ul><li><a href="">KBO 정규시즌</a></li></ul>
                                </div>
                                <div class="select">
                                    <p class="off"><span class="pp"><?php if($this->input->get('team')!=null): echo $this->input->get('team'); else: echo '팀 선택'; endif; ?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="/baseball/player_record?team=두산">두산</a></li>
                                        <li><a href="/baseball/player_record?team=NC">NC</a></li>
                                        <li><a href="/baseball/player_record?team=넥센">넥센</a></li>
                                        <li><a href="/baseball/player_record?team=LG">LG</li>
                                        <li><a href="/baseball/player_record?team=KIA">KIA</a></li>
                                        <li><a href="/baseball/player_record?team=SK">SK</a></li>
                                        <li><a href="/baseball/player_record?team=한화">한화</a></li>
                                        <li><a href="/baseball/player_record?team=롯데">롯데</a></li>
                                        <li><a href="/baseball/player_record?team=삼성">삼성</a></li>
                                        <li><a href="/baseball/player_record?team=kt">KT</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p class="off"><span class="pp">포지션</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">1루수</a></li>
                                        <li><a href="">2루수</a></li>
                                        <li><a href="">3루수</a></li>
                                        <li><a href="">유격수</a></li>
                                        <li><a href="">포수</a></li>
                                        <li><a href="">좌익수</a></li>
                                        <li><a href="">우익수</a></li>
                                        <li><a href="">중견수</a></li>
                                        <li><a href="">투수</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p class="off"><span class="pp">경기상황별1</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">월별</a></li>
                                        <li><a href="">요일별</a></li>
                                        <li><a href="">구장별</a></li>
                                        <li><a href="">홈/방문별</a></li>
                                        <li><a href="">상대팀별</a></li>
                                        <li><a href="">주야간별</a></li>
                                        <li><a href="">전/후반별</a></li>
                                        <li><a href="">투수유형별</a></li>
                                        <li><a href="">주자상황별</a></li>
                                        <li><a href="">볼카운트별</a></li>
                                        <li><a href="">아웃카운트별</a></li>
                                        <li><a href="">이닝별</a></li>
                                        <li><a href="">타순별</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p class="off"><span class="pp">경기상황별2</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="">3~4월</a></li>
                                        <li><a href="">5월</a></li>
                                        <li><a href="">6월</a></li>
                                        <li><a href="">7월</a></li>
                                        <li><a href="">8월</a></li>
                                        <li><a href="">9월이후</a></li>
                                    </ul>
                                </div>
                                <div class="select ">
                                    <p class="off"><span class="pp">기본기록</span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                        <li><a href=""></a></li>
                                    </ul>
                                </div>
                                <a class="btn s6_btn" href="">결과보기<span></span></a>
                            </div>
                        </div>
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
                                        <th><span class="bt_1" onclick="javascript:location.replace('/baseball/player_record?batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=1')">타율</span></th>
                                        <th><span class="bt_2" onclick="javascript:location.replace('/baseball/player_record?batter_sort=g&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=2')">경기</span></th>
                                        <th><span class="bt_3" onclick="javascript:location.replace('/baseball/player_record?batter_sort=pa&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=3')">타석</span></th>
                                        <th><span class="bt_4" onclick="javascript:location.replace('/baseball/player_record?batter_sort=ab&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=4')">타수</span></th>
                                        <th><span class="bt_5" onclick="javascript:location.replace('/baseball/player_record?batter_sort=r&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=5')">득점</span></th>
                                        <th><span class="bt_6" onclick="javascript:location.replace('/baseball/player_record?batter_sort=h&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=6')">안타</span></th>
                                        <th><span class="bt_7" onclick="javascript:location.replace('/baseball/player_record?batter_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=7')">2루타</span></th>
                                        <th><span class="bt_8" onclick="javascript:location.replace('/baseball/player_record?batter_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=8')">3루타</span></th>
                                        <th><span class="bt_9" onclick="javascript:location.replace('/baseball/player_record?batter_sort=hr&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=9')">홈런</span></th>
                                        <th><span class="bt_10" onclick="javascript:location.replace('/baseball/player_record?batter_sort=tb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=10')">루타</span></th>
                                        <th><span class="bt_11" onclick="javascript:location.replace('/baseball/player_record?batter_sort=rbi&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=11')">타점</span></th>
                                        <th><span class="bt_12" onclick="javascript:location.replace('/baseball/player_record?batter_sort=sac&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=12')">희생번트</span></th>
                                        <th><span class="bt_13" onclick="javascript:location.replace('/baseball/player_record?batter_sort=sf&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=13')">희생플라이</span></th>
                                    </tr>
                                    <?php foreach($batter as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
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
                                        <th><span class="bt_14" onclick="javascript:location.replace('/baseball/player_record?batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=14')">타율</span></th>
                                        <th><span class="bt_15" onclick="javascript:location.replace('/baseball/player_record?batter_sort=bb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=15')">볼</span></th>
                                        <th><span class="bt_16" onclick="javascript:location.replace('/baseball/player_record?batter_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=16')">고의4구</span></th>
                                        <th><span class="bt_17" onclick="javascript:location.replace('/baseball/player_record?batter_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=17')">사구</span></th>
                                        <th><span class="bt_18" onclick="javascript:location.replace('/baseball/player_record?batter_sort=so&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=18')">삼진</span></th>
                                        <th><span class="bt_19" onclick="javascript:location.replace('/baseball/player_record?batter_sort=gdp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=19')">병살타</span></th>
                                        <th><span class="bt_20" onclick="javascript:location.replace('/baseball/player_record?batter_sort=slg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=20')">장타율</span></th>
                                        <th><span class="bt_21" onclick="javascript:location.replace('/baseball/player_record?batter_sort=obp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=21')">출루</span></th>
                                        <th><span class="bt_22" onclick="javascript:location.replace('/baseball/player_record?batter_sort=ops&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=22')">OPS</span></th>
                                        <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player_record?batter_sort=mh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23')">멀티히트</span></th>
                                        <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player_record?batter_sort=risp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24')">득점권타율</span></th>
                                        <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player_record?batter_sort=phba&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25')">대타타율</span></th>
                                    </tr>
                                    <?php foreach($batter as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
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
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
//      SORTING
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

        // -----  리그통계 내 Tab 시작
        //2뎁스 승무패/핸디캡/O/U
        for(var i=1;i<4;i++){
            (function (k){
                $(".TLS > li.ls0" + k ).click(function(){
                    $(".TLS li").removeClass("on");
                    $(this).addClass("on");
                    $(".LS_view_w > li").removeClass("active");
                    $(".LS_view_w > li").eq(k-1).addClass("active");
                    return false;
                });
            }(i));
        };

        //3뎁스 전체/홈원정
        $(".LS_tab > li.ls_all").click(function(){
            $(this).siblings().removeClass("on");$(this).addClass("on");$(this).parent().parent().parent().find(".LS_view>li").removeClass("active");$(this).parent().parent().parent().find(".ls_all").addClass("active");
            return false;
        });
        $(".LS_tab > li.ls_team").click(function(){ $(this).siblings().removeClass("on");$(this).addClass("on");$(this).parent().parent().parent().find(".LS_view>li").removeClass("active");$(this).parent().parent().parent().find(".ls_team").addClass("active");return false; });

        //4뎁스 게임탭
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

        // -----  리그통계 내 Tab 끝
        //ranking
        for(var i=1;i<8;i++){
            (function (k){
                $("th>span.n" + k ).click(function(){
                    $(this).parents(".ranking").find(".Ltable").css("display","none");
                    $(this).parents(".ranking").find(".Ltable"+k).css("display","block");
                    return false;
                });
            }(i));
        };

        //선수기록
        for(var i=1;i<15;i++){
            (function (k){
                $(".table_w table th span.pr_" + k ).click(function(){
                    $(this).parents(".table_default").siblings("div").removeClass();
                    $(this).parents(".table_default").siblings("div").addClass("redline pr_" + k);
                    $(this).parents(".table_default").find("td").css("font-weight","normal");
                    $(this).parents(".table_default").find("td:nth-child("+k+")").next().next().next().css("font-weight","bold");
                    return false;
                });
            }(i));
        };

        //선수기록 확장테이블
        $(".nextTable a").click(function(){
            $(this).parent().siblings(".next_table").slideToggle();
            return false;
        });

        //league
        $(".btn_arrow01").click(function(){
            $(this).parents().find(".leaguebox").slideToggle();
            return false;
        });
    });
</script>