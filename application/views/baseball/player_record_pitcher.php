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
            <li><a href="/baseball/league_info/<?=($league=='KBO')? 'KBO' : 'MLB';?>">리그정보</a></li>
            <li><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB';?>/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/player_record_pitcher/<?=($league=='KBO')? 'KBO' : 'MLB';?>">선수 기록</a></li>
            <li><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB';?>">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s5 active">
                <div class="date">
                    <a href="" class="btn_prev" title="이전시즌">이전시즌</a>
                    <a href="" class="date_yr date_num">2017<span class="date_t">시즌</span></a>
                    <ul class="date_yr_select date_ul" style="display:none;">
<!--                        <li><a href="">2013</a></li>-->
<!--                        <li><a href="">2014</a></li>-->
<!--                        <li><a href="">2015</a></li>-->
                        <li><a href="">2017</a></li>
                    </ul>
<!--                <input value="이동" type="submit" class="btn_nv_mn">-->
                    <a href="" class="btn_next" title="다음시즌">다음시즌</a>
                </div>
                <div class="relative">
                    <ul class="blackTab r_tit" style="top:-33px;">
                        <li class="on ls01_tab_1"><a href="/baseball/player_record_pitcher">투수</a></li>
                        <li class="ls01_tab_2"><a href="/baseball/player_record_hitter">타자</a></li>
                    </ul>
                    <div class="PL_REC ls01_1 active">
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
                                    <p class="off"><span class="pp"><?=($team=='')? '팀 선택' : $team;?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">전체</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=두산&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">두산</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=NC&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">NC</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=넥센&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">넥센</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=LG&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">LG</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=KIA&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">KIA</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=SK&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">SK</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=한화&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">한화</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=롯데&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">롯데</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=삼성&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">삼성</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_pitcher?team=KT&pitcher_sort=<?=$pitcher_sort;?>&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=<?=$bold_num;?>')">KT</a></li>
                                    </ul>
                                </div>
                                <!--<div class="select ">
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
                                </div>-->
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
                                        <th><span class="pr_1" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=1&team=<?=$team;?>')">평균자책</span></th>
                                        <th><span class="pr_2" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=g&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=2&team=<?=$team;?>')">경기</span></th>
                                        <th><span class="pr_3" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=w&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=3&team=<?=$team;?>')">승</span></th>
                                        <th><span class="pr_4" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=l&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=4&team=<?=$team;?>')">패</span></th>
                                        <th><span class="pr_5" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=sv&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=5&team=<?=$team;?>')">세이브</span></th>
                                        <th><span class="pr_6" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=hld&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=6&team=<?=$team;?>')">홀드</span></th>
                                        <th><span class="pr_7" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=wpct&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=7&team=<?=$team;?>')">승률</span></th>
                                        <th><span class="pr_8" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=ip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=8&team=<?=$team;?>')">이닝</span></th>
                                        <th><span class="pr_9" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=h&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=9&team=<?=$team;?>')">피안타</span></th>
                                        <th><span class="pr_10" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=hr&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=10&team=<?=$team;?>')">홈</span></th>
                                        <th><span class="pr_11" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=bb&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=11&team=<?=$team;?>')">볼넷</span></th>
                                        <th><span class="pr_13" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=so&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=13&team=<?=$team;?>')">삼진</span></th>
                                        <th><span class="pr_14" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=r&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=14&team=<?=$team;?>')">실점</span></th>
                                        <th><span class="pr_15" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=er&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=15&team=<?=$team;?>')">자책</span></th>
                                        <th><span class="pr_16" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=whip&scroll_top='+document.body.scrollTop+'&focus=1&bold_num=16&team=<?=$team;?>')">WHIP</span></th>
                                    </tr>
                                    <?php foreach($pitcher as $key=>$item): ?>
                                        <tr>
                                            <td><?=$offset+$key+1;?></td>
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
                                        <th><span class="pr_17" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=era&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=17&team=<?=$team;?>')">평균자책</span></th>
                                        <th><span class="pr_18" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=cg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=18&team=<?=$team;?>')">완투</span></th>
                                        <th><span class="pr_19" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=sho&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=19&team=<?=$team;?>')">완봉</span></th>
                                        <th><span class="pr_20" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=qs&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=20&team=<?=$team;?>')">QS</span></th>
                                        <th><span class="pr_21" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=bsv&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=21&team=<?=$team;?>')">BSV</span></th>
                                        <th><span class="pr_22" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=tbf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=22&team=<?=$team;?>')">타자수</span></th>
                                        <th><span class="pr_23" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=np&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=23&team=<?=$team;?>')">투구수</span></th>
                                        <th><span class="pr_24" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=avg&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=24&team=<?=$team;?>')">피안타율</span></th>
                                        <th><span class="pr_25" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=25&team=<?=$team;?>')">2루타</span></th>
                                        <th><span class="pr_26" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=26&team=<?=$team;?>')">3루타</span></th>
                                        <th><span class="pr_27" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=sac&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=27&team=<?=$team;?>')">SAC</span></th>
                                        <th><span class="pr_28" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=sf&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=28&team=<?=$team;?>')">SF</span></th>
                                        <th><span class="pr_29" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=29&team=<?=$team;?>')">고의</span></th>
                                        <th><span class="pr_30" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=wp&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=30&team=<?=$team;?>')">폭투</span></th>
                                        <th><span class="pr_31" onclick="javascript:location.replace('/baseball/player_record_pitcher?pitcher_sort=bk&scroll_top='+document.body.scrollTop+'&focus=2&bold_num=31&team=<?=$team;?>')">보크</span></th>
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
                        <div class="page_w">
                            <div class="page">
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
        }else if('<?=$focus;?>'=='2'){
            selector_name = '.pr_';
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