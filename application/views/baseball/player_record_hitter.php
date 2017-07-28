<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - <?=($league=='KBO')? '대한민국' : 'USA';?></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">2017 <?=($league=='KBO')? 'KBO' : 'MLB';?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li><a href="/baseball/league/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">리그정보</a></li>
            <li><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>/all/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">선수 기록</a></li>
            <li><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">상대 전적</a></li>
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
                        <li><a href="">2017</a></li>
                    </ul>
                    <a href="" class="btn_next" title="다음시즌">다음시즌</a>
                </div>
                <div class="relative">
                    <ul class="blackTab r_tit" style="top:-33px;">
                        <li class="ls01_tab_1"><a href="/baseball/player_record_pitcher/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">투수</a></li>
                        <li class="on ls01_tab_2"><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">타자</a></li>
                    </ul>
                    <div class="PL_REC ls01_2 active">
                        <ul class="player_rec">
                            <li>
                                <h3>타 율</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['avg'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['avg'][0]->player_id;?>.jpg" alt="<?=$batter5['avg'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
                                <ul>
                                    <?php foreach($batter5['avg'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=number_format($item->avg,3);?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>홈 런</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['hr'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['hr'][0]->player_id;?>.jpg" alt="<?=$batter5['hr'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
                                <ul>
                                    <?php foreach($batter5['hr'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->hr;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>타 점</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['rbi'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['rbi'][0]->player_id;?>.jpg" alt="<?=$batter5['rbi'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
                                <ul>
                                    <?php foreach($batter5['rbi'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->rbi;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>안 타</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['h'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['h'][0]->player_id;?>.jpg" alt="<?=$batter5['h'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
                                <ul>
                                    <?php foreach($batter5['h'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->h;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>도 루</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['sb'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['sb'][0]->player_id;?>.jpg" alt="<?=$batter5['sb'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
                                <ul>
                                    <?php foreach($batter5['sb'] as $key=>$item): ?>
                                        <li><b><?=$key+1;?>. <?=$item->name;?></b><?=$item->team;?><b class="red"><?=$item->sb;?></b></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <h3>OPS</h3>
                                <div class="pic">
                                    <?php if($league=='KBO'): ?><img src="http://www.koreabaseball.com/file/person/middle/<?=$batter5['ops'][0]->player_id;?>.jpg" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php else: ?><img src="http://mlb.mlb.com/mlb/images/players/head_shot/<?=$batter5['ops'][0]->player_id;?>.jpg" alt="<?=$batter5['ops'][0]->name;?>" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/>
                                    <?php endif;?>
                                </div>
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
                                    <p class="off"><span class="pp"><span class="pp"><?=($team=='')? '팀 선택' : $team;?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">전체</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=두산&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">두산</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=NC&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">NC</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=넥센&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">넥센</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=LG&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">LG</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=KIA&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">KIA</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=SK&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">SK</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=한화&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">한화</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=롯데&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">롯데</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=삼성&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">삼성</a></li>
                                        <li><a href="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?team=KT&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=<?=$bold_num;?>')">KT</a></li>
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
                                        <th><span class="bt_1" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=1&team=<?=$team;?>')">타율</span></th>
                                        <th><span class="bt_2" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=g&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=2&team=<?=$team;?>')">경기</span></th>
                                        <th><span class="bt_3" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=pa&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=3&team=<?=$team;?>')">타석</span></th>
                                        <th><span class="bt_4" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=ab&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=4&team=<?=$team;?>')">타수</span></th>
                                        <th><span class="bt_5" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=r&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=5&team=<?=$team;?>')">득점</span></th>
                                        <th><span class="bt_6" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=h&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=6&team=<?=$team;?>')">안타</span></th>
                                        <th><span class="bt_7" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=second_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=7&team=<?=$team;?>')">2루타</span></th>
                                        <th><span class="bt_8" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=third_b&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=8&team=<?=$team;?>')">3루타</span></th>
                                        <th><span class="bt_9" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=hr&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=9&team=<?=$team;?>')">홈런</span></th>
                                        <th><span class="bt_10" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=tb&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=10&team=<?=$team;?>')">루타</span></th>
                                        <th><span class="bt_11" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=rbi&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=11&team=<?=$team;?>')">타점</span></th>
                                        <th><span class="bt_12" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=sac&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=12&team=<?=$team;?>')">희생번트</span></th>
                                        <th><span class="bt_13" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=sf&scroll_top='+document.body.scrollTop+'&focus=3&bold_num=13&team=<?=$team;?>')">희생플라이</span></th>
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
                                        <th><span class="bt_14" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=avg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=14&team=<?=$team;?>')">타율</span></th>
                                        <th><span class="bt_15" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=bb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=15&team=<?=$team;?>')">볼넷</span></th>
                                        <th><span class="bt_16" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=ibb&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=16&team=<?=$team;?>')">고의4구</span></th>
                                        <th><span class="bt_17" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=hbp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=17&team=<?=$team;?>')">사구</span></th>
                                        <th><span class="bt_18" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=so&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=18&team=<?=$team;?>')">삼진</span></th>
                                        <th><span class="bt_19" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=gdp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=19&team=<?=$team;?>')">병살타</span></th>
                                        <th><span class="bt_20" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=slg&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=20&team=<?=$team;?>')">장타율</span></th>
                                        <th><span class="bt_21" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=obp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=21&team=<?=$team;?>')">출루</span></th>
                                        <th><span class="bt_22" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=ops&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=22&team=<?=$team;?>')">OPS</span></th>
                                        <?php if($league=='KBO'): ?>
                                            <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=mh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23&team=<?=$team;?>')">멀티히트</span></th>
                                            <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=risp&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24&team=<?=$team;?>')">득점권타율</span></th>
                                            <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=phba&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25&team=<?=$team;?>')">대타타율</span></th>
                                        <?php else: ?>
                                            <th><span class="bt_23" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=goao&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=23&team=<?=$team;?>')">땅볼/뜬공</span></th>
                                            <th><span class="bt_24" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=xbh&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=24&team=<?=$team;?>')">2루타이상안타</span></th>
                                            <th><span class="bt_25" onclick="javascript:location.replace('/baseball/player_record_hitter/<?=$league;?>?batter_sort=babip&scroll_top='+document.body.scrollTop+'&focus=4&bold_num=25&team=<?=$team;?>')">인플레이타율</span></th>
                                        <?php endif;?>
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
                                            <?php if($league=='KBO'): ?>
                                                <td class="bt_23"><?=$item->mh;?></td>
                                                <td class="bt_24"><?=number_format($item->risp,3);?></td>
                                                <td class="bt_25"><?=number_format($item->phba,3);?></td>
                                            <?php else: ?>
                                                <td class="bt_23"><?=$item->goao;?></td>
                                                <td class="bt_24"><?=$item->xbh;?></td>
                                                <td class="bt_25"><?=$item->babip;?></td>
                                            <?php endif;?>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                                <div class="redline pr_1">
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
//      SORTING
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