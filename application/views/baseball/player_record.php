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
            <li class=""><a href="/baseball/league_info/">리그정보</a></li>
            <li class=""><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class=""><a href="/baseball/stats/">리그 통계</a></li>
            <li class=""><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>">팀 기록</a></li>
            <li class="on"><a href="/baseball/player_record/">선수 기록</a></li>
            <li class=""><a href="/baseball/score/">상대 전적</a></li>
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
<!--                    <input value="이동" type="submit" class="btn_nv_mn">-->
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
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($pitcher5['era'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->era,2);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>승 리</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($pitcher5['w'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->w;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>세이브</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($pitcher5['sv'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->sv;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>승 률</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($pitcher5['wpct'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->wpct,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>홀 드</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($pitcher5['hld'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->hld;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>탈삼진</h3>
                                <div class="pic"><img src="" alt="" /></div>
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
                                        <th><span class="pr_1">평균자책</span></th>
                                        <th><span class="pr_2">경기</span></th>
                                        <th><span class="pr_3">이닝</span></th>
                                        <th><span class="pr_4">승</span></th>
                                        <th><span class="pr_5">패</span></th>
                                        <th><span class="pr_6">세이브</span></th>
                                        <th><span class="pr_7">홀드</span></th>
                                        <th><span class="pr_8">승률</span></th>
                                        <th><span class="pr_9">이</span></th>
                                        <th><span class="pr_10">피안타</span></th>
                                        <th><span class="pr_11">홈</span></th>
                                        <th><span class="pr_12">볼넷</span></th>
                                        <th><span class="pr_13">사구</span></th>
                                        <th><span class="pr_14">삼진</span></th>
                                        <th><span class="pr_15">실점</span></th>
                                        <th><span class="pr_16">자책</span></th>
                                        <th><span class="pr_17">이닝당출루허용</span></th>
                                    </tr>
                                    <?php foreach($pitcher as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
                                            <td><?=$item->name;?></td>
                                            <td><?=$item->team;?></td>
                                            <td><?=number_format($item->era,3);?></td>
                                            <td><?=$item->g;?></td>
                                            <td><?=$item->w;?></td>
                                            <td><?=$item->l;?></td>
                                            <td><?=$item->sv;?></td>
                                            <td><?=$item->hld;?></td>
                                            <td><?=$item->rank;?></td>
                                            <td><?php if($item->wpct=='-') echo '-'; else echo number_format($item->wpct,3);?></td>
                                            <td><?=$item->ip;?></td>
                                            <td><?=$item->h;?></td>
                                            <td><?=$item->hr;?></td>
                                            <td><?=$item->bb;?></td>
                                            <td><?=$item->hbp;?></td>
                                            <td><?=$item->so;?></td>
                                            <td><?=$item->r;?></td>
                                            <td><?=$item->er;?></td>
                                            <td><?=number_format($item->whip,2);?></td>
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
                                        <th><span class="pr_1">평균자책</span></th>
                                        <th><span class="pr_2">완투</span></th>
                                        <th><span class="pr_3">완봉</span></th>
                                        <th><span class="pr_4">QS</span></th>
                                        <th><span class="pr_5">블론세이</span></th>
                                        <th><span class="pr_6">타자수</span></th>
                                        <th><span class="pr_7">투구수</span></th>
                                        <th><span class="pr_8">피안타</span></th>
                                        <th><span class="pr_9">2루타</span></th>
                                        <th><span class="pr_10">3루타</span></th>
                                        <th><span class="pr_11">희생번</span></th>
                                        <th><span class="pr_12">희생플라이</span></th>
                                        <th><span class="pr_13">고의</span></th>
                                        <th><span class="pr_14">폭투</span></th>
                                        <th><span class="pr_15">보크</span></th>
                                    </tr>
                                    <?php foreach($pitcher as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
                                            <td><?=$item->name;?></td>
                                            <td><?=$item->team;?></td>
                                            <td><?=number_format($item->era,3);?></td>
                                            <td><?=$item->cg;?></td>
                                            <td><?=$item->sho;?></td>
                                            <td><?=$item->qs;?></td>
                                            <td><?=$item->bsv;?></td>
                                            <td><?=$item->tbf;?></td>
                                            <td><?=$item->np;?></td>
                                            <td><?=number_format($item->avg,3);?></td>
                                            <td><?=$item->second_b;?></td>
                                            <td><?=$item->third_b;?></td>
                                            <td><?=$item->sac;?></td>
                                            <td><?=$item->sf;?></td>
                                            <td><?=$item->ibb;?></td>
                                            <td><?=$item->wp;?></td>
                                            <td><?=$item->bk;?></td>
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
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($batter5['avg'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->avg,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>홈 런</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($batter5['hr'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->hr;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>타 점</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($batter5['rbi'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->rbi;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>안 타</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <?php foreach($batter5['h'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->h;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>도 루</h3>
                                <div class="pic"><img src="" alt="" /></div>
                                <ul>
                                    <li><b>1. 최형우</b>KIA<b class="red">3.49</b></li>
                                    <li><b>2. 김태균</b>한화<b class="red">3.49</b></li>
                                    <li><b>3. 이용규</b>한화<b class="red">3.49</b></li>
                                    <li><b>4. 김주찬</b>KIA<b class="red">3.49</b></li>
                                    <li><b>5. 박용택</b>LG<b class="red">3.49</b></li>
                                </ul>
                            </li>
                            <li>
                                <h3>OPS</h3>
                                <div class="pic"><img src="" alt="" /></div>
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
                                    <p><span class="pp">2017</span><span class="pa"></span></p>
                                    <ul><li><a href="">2017</a></li></ul>
                                </div>
                                <div class="select ">
                                    <p><span class="pp">KBO 정규시즌</span><span class="pa"></span></p>
                                    <ul><li><a href="">KBO 정규시즌</a></li></ul>
                                </div>
                                <div class="select">
                                    <p><span class="pp"><?php if($this->input->get('team')!=null): echo $this->input->get('team'); else: echo '팀 선택'; endif; ?></span><span class="pa"></span></p>
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
                                        <th><span class="pr_1">타율</span></th>
                                        <th><span class="pr_2">경기</span></th>
                                        <th><span class="pr_3">타석</span></th>
                                        <th><span class="pr_4">타수</span></th>
                                        <th><span class="pr_5">득점</span></th>
                                        <th><span class="pr_6">안타</span></th>
                                        <th><span class="pr_7">2루타</span></th>
                                        <th><span class="pr_8">3루타</span></th>
                                        <th><span class="pr_9">홈런</span></th>
                                        <th><span class="pr_10">루타</span></th>
                                        <th><span class="pr_11">타점</span></th>
                                        <th><span class="pr_12">희생번트</span></th>
                                        <th><span class="pr_13">희생플라이</span></th>
                                    </tr>
                                    <?php foreach($batter as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
                                            <td><?=$item->name;?></td>
                                            <td><?=$item->team;?></td>
                                            <td><?=number_format($item->avg,3);?></td>
                                            <td><?=$item->g;?></td>
                                            <td><?=$item->pa;?></td>
                                            <td><?=$item->ab;?></td>
                                            <td><?=$item->r;?></td>
                                            <td><?=$item->h;?></td>
                                            <td><?=$item->second_b;?></td>
                                            <td><?=$item->third_b;?></td>
                                            <td><?=$item->hr;?></td>
                                            <td><?=$item->tb;?></td>
                                            <td><?=$item->rbi;?></td>
                                            <td><?=$item->sac;?></td>
                                            <td><?=$item->sf;?></td>
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
                                        <col width="72px"/>
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
                                        <th><span class="pr_1">타율</span></th>
                                        <th><span class="pr_2">볼</span></th>
                                        <th><span class="pr_3">고의4구</span></th>
                                        <th><span class="pr_4">사구</span></th>
                                        <th><span class="pr_5">삼진</span></th>
                                        <th><span class="pr_6">병살타</span></th>
                                        <th><span class="pr_7">장타율</span></th>
                                        <th><span class="pr_8">출루</span></th>
                                        <th><span class="pr_9">출루율+장타율</span></th>
                                        <th><span class="pr_10">멀티히트</span></th>
                                        <th><span class="pr_11">득점권타율</span></th>
                                        <th><span class="pr_12">대타타율</span></th>
                                    </tr>
                                    <?php foreach($batter as $key=>$item): ?>
                                        <tr>
                                            <td><?php if($this->input->get('team')!=null): echo $key+1; else: echo $item->rank; endif; ?></td>
                                            <td><?=$item->name;?></td>
                                            <td><?=$item->team;?></td>
                                            <td><?=number_format($item->avg,3);?></td>
                                            <td><?=$item->bb;?></td>
                                            <td><?=$item->ibb;?></td>
                                            <td><?=$item->hbp;?></td>
                                            <td><?=$item->so;?></td>
                                            <td><?=$item->gdp;?></td>
                                            <td><?=number_format($item->slg,3);?></td>
                                            <td><?=number_format($item->obp,3);?></td>
                                            <td><?=number_format($item->ops,3);?></td>
                                            <td><?=$item->mh;?></td>
                                            <td><?=number_format($item->risp,3);?></td>
                                            <td><?=number_format($item->phba,3);?></td>
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