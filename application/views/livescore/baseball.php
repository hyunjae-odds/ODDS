<link href="/public/lib/css/livescore.css" rel="stylesheet" type="text/css"/>

<div class="livescore">
    <div class="topTitle">
        <p>
            <span>라이브 스코어</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">라이브 스코어</h2>
    </div>
    <div class="game_w" >
        <ul class="tab01 gameMain">
            <li><a href="/livescore/soccer">축구</a></li>
            <li class="on"><a href="/livescore/baseball">야구</a></li>
            <li><a href="javascript:void(0);">농구</a></li>
            <li><a href="javascript:void(0);">배구</a></li>
            <li><a href="javascript:void(0);">하키</a></li>
        </ul>
        <div class="livetable_w">
            <div class="livetable_top">
                <div class="tab2_w">
                    <ul class="tab02">
                        <li class="<?php if($selector=='all') echo 'on';?>"><a href="/livescore/baseball?date=<?=$date;?>&selector=all">전체</a></li>
                        <li class="<?php if($selector=='live') echo 'on';?>"><a href="/livescore/baseball?date=<?=$date;?>&selector=live">진행중</a></li>
                        <li class="<?php if($selector=='set') echo 'on';?>"><a href="/livescore/baseball?date=<?=$date;?>&selector=set">경기결과</a></li>
                        <li class="<?php if($selector=='check') echo 'on';?>"><a href="javascript:selectGame();">선택경기보기</a></li>
                    </ul>
                </div>
                <div class="date center">
                    <a href="/livescore/baseball?date=<?=date('Y-m-d', strtotime($date.'-1day'));?>&selector=all" class="btn_prev" title="이전달">이전달</a>
                    <a href="javascript:void(0);" class="date_yr date_num year">2017</a>
                    <ul class="date_yr_select date_ul" style="display:none;">
                        <li><a href="javascript:void(0);"><?=date('Y', strtotime($date));?></a></li>
                    </ul>
                    <span>.</span>
                    <a href="javascript:void(0);" class="date_mn date_num month"><?=date('m', strtotime($date));?></a>
                    <ul class="date_mn_select date_ul" style="display:none;">
                        <?php for($i=3; $i<12; $i++): ?>
                            <li>
                                <?php if($i<10): ?><a href="javascript:selectMonth('0<?=$i;?>');"><?='0'.$i;?></a>
                                <?php else: ?><a href="javascript:selectMonth('<?=$i;?>');"><?=$i;?></a><?php endif;?>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <span>.</span>
                    <a href="javascript:void(0);" class="date_da date_num day"><?=date('d', strtotime($date));?></a>
                    <ul class="date_da_select date_ul" style="display:none;">
                        <?php for($i=1; $i<=date('t', strtotime($date)); $i++): ?>
                            <li>
                                <?php if($i<10): ?><a href="javascript:selectDay('0<?=$i;?>');"><?='0'.$i;?></a>
                                <?php else: ?><a href="javascript:selectDay('<?=$i;?>');"><?=$i;?></a><?php endif;?>
                            </li>
                        <?php endfor; ?>
                    </ul>
                    <a href="javascript:getScheduleByDate();"><input value="이동" type="submit" class="btn_nv_mn"></a>
                    <a href="/livescore/baseball?date=<?=date('Y-m-d', strtotime($date.'+1day'));?>&selector=all" class="btn_next" title="다음달">다음달</a>
                </div>
            </div>
            <div class="leagueChoice">
                <a href="">리그 선택하기 <span></span></a>
                <div class="choice_w">
                    <div class="choice">
                        <div class="cho1">
                            <h4>지역</h4>
                            <div>
                                <ul class="list">
                                    <li><span class="popularityL"></span>전체<span class="Nm">1234</span></li>
                                    <li><span class="AsiaL"></span>아시아<span class="Nm">6</span></li>
                                    <li><span class="EuropeL"></span>유럽<span class="Nm">7</span></li>
                                    <li><span class="NorthAmericaL"></span>북중미<span class="Nm">6</span></li>
                                    <li><span class="SouthAmericaL"></span>남미<span class="Nm">7</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cho2">
                            <h4>국가</h4>
                            <div>
                                <ul class="list">
                                    <li><input type="checkbox" id="c001"/><label for="c001"><span class="country_32"></span>스페인</label></li>
                                    <li><input type="checkbox" id="c002"/><label for="c002"><span class="country_18"></span>잉글랜드</label></li>
                                    <li><input type="checkbox" id="c003"/><label for="c003"><span class="country_20"></span>프랑스</label></li>
                                    <li><input type="checkbox" id="c004"/><label for="c004"><span class="country_32"></span>스페인</label></li>
                                    <li><input type="checkbox" id="c005"/><label for="c005"><span class="country_18"></span>잉글랜드</label></li>
                                    <li><input type="checkbox" id="c006"/><label for="c006"><span class="country_20"></span>프랑스</label></li>
                                </ul>
                                <div class="btn_div">
                                    <a href="" class="cancel">취소</a><a href="" class="apply">적용 하기</a>
                                </div>
                            </div>
                        </div>
                        <div class="cho3">
                            <h4>리그</h4>
                            <div>
                                <ul class="list">
                                    <li><input type="checkbox" id="c101"/><label for="c101"><b>라리가</b></label></li>
                                    <li><input type="checkbox" id="c102"/><label for="c102"><b>프리미어 리그</b></label></li>
                                    <li><input type="checkbox" id="c103"/><label for="c103"><b>리그앙</b></label></li>
                                </ul>
                                <div class="btn_div">
                                    <a href="" class="cancel">취소</a><a href="" class="apply">적용 하기</a>
                                </div>
                            </div>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
            </div>
            <div class="pb50">
                <div class="livetable base">
                    <div>
                        <table class="table_default" style="margin-bottom:0;">
                            <caption></caption>
                            <colgroup>
                                <col width="210px" />
                                <col width="*" />
                                <col width="270px" />
                            </colgroup>
                            <tr>
                                <th>경기정보</th>
                                <th>스코어보드</th>
                                <th>데이터</th>
                            </tr>
                        </table>

                        <?php if(isset($schedule)): ?>
                            <?php foreach($schedule as $key=>$item): ?>
                                <table class="table_default base_table">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="35px" />
                                        <col width="*" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="30px" />
                                        <col width="150px" />
                                        <col width="120px" />
                                    </colgroup>
                                    <tr>
                                        <td class="first"><input type="checkbox" id="KBO_0<?=$key;?>" value="<?=$item->no;?>"/></td>
                                        <td class="left"><label for="KBO_0<?=$key;?>"><b>KBO</b></label><span><?=date('m.d', strtotime($date));?> | <?=date('g.i', strtotime($date));?></span></td>
                                        <td class="bg_gray">1</td>
                                        <td class="bg_gray">2</td>
                                        <td class="bg_gray">3</td>
                                        <td class="bg_gray">4</td>
                                        <td class="bg_gray">5</td>
                                        <td class="bg_gray">6</td>
                                        <td class="bg_gray">7</td>
                                        <td class="bg_gray">8</td>
                                        <td class="bg_gray">9</td>
                                        <td class="bg_gray">10</td>
                                        <td class="bg_gray">11</td>
                                        <td class="bg_gray">12</td>
                                        <td class="bg_gray"><b>R</b></td>
                                        <td class="bg_gray"><b>H</b></td>
                                        <td class="bg_gray"><b>E</b></td>
                                        <td class="bg_gray"><b>B</b></td>
                                        <td rowspan="2" class="bn">
                                            <ul class="BSO">
                                                <li><b>B</b><span class="n<?=$score_board[$key]['b'];?>" id="<?=$item->no;?>_bso_b"></span></li>
                                                <li><b>S</b><span class="n<?=$score_board[$key]['s'];?>" id="<?=$item->no;?>_bso_s"></span></li>
                                                <li><b>O</b><span class="n<?=$score_board[$key]['o'];?>" id="<?=$item->no;?>_bso_o"></span></li>
                                            </ul>
                                            <?php $exp_inning=explode(';', $score_board[$key]['inning']); ?>
                                            <div class="ground b1_<?=$score_board[$key]['t'];?>_b2_<?=$score_board[$key]['d'];?>_b3_<?=$score_board[$key]['f'];?>" id="<?=$item->no;?>_base"><span id="<?=$item->no;?>_inning"><?=$exp_inning[0];?>st</span></div>
                                        </td>
                                        <td rowspan="2" class="data last">
                                            <div class="data">
                                                <span class="b_BTN"><a href="javascript:void(0);">매치정보</a></span>
                                                <span class="btn_mark on"><a href="javascript:void(0);" onfocus="this.blur();">즐겨찾기</a></span>
                                                <span class="g_BTN"><a href="javascript:void(0);">블로그</a></span>
                                                <span class="r_BTN"><a href="javascript:void(0);">전문가 의견</a></span>
                                                <span class="y_BTN"><a href="javascript:void(0);">그래프</a></span>
                                                <span class="upicon"><a href="/livescore/baseball?date=<?=$date;?>&selector=<?=$selector;?>&top=<?=$item->no;?>&checked=<?=$checked;?>">up</a></span>
                                            </div>
                                            <?php include 'pop.php';?>
                                        </td>
                                    </tr>
                                    <tr id="<?=$item->no;?>_away_score">
                                        <td class="first"><span class="LGT"></span></td>
                                        <td class="left"><b><?=$item->away_name;?></b>[<?=$item->away_starter;?>]<span class="red">[1.24]</span></td>
                                        <?php foreach($score_board[$key]['away_score_board'] as $items): ?><td><?=$items;?></td><?php endforeach; ?>
                                    </tr>
                                    <tr>
                                        <td class="first"><span class="eagles"></span></td>
                                        <td class="left"><b><?=$item->home_name;?></b>&nbsp;[<?=$item->home_starter;?>]<span class="home_icon"></span><span class="blue">[1.14]</span></td>
                                        <?php foreach($score_board[$key]['home_score_board'] as $keys=>$items): ?><td id="<?=$item->no;?>_home_score_<?=$keys;?>"><?=$items;?></td><?php endforeach; ?>
                                        <td class="last left" colspan="2">
                                            <div class="relay">
                                                <span id="<?=$item->no;?>_pitcher">p : <?=$score_board[$key]['last_pitcher'];?></span>
                                                <span><span class="base_icon"></span>: <span id="<?=$item->no;?>_p"><?=$score_board[$key]['p'];?></span></span>
                                                <span class="line" id="<?=$item->no;?>_hitter">B : <?=$score_board[$key]['last_hitter'];?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            <?php endforeach; ?>
                        <?php else: ?>
                            해당 경기가 없습니다.
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--RATCHET START-->
<script type="text/javascript">
    var conn=new WebSocket('ws://210.179.67.38:8080');
    conn.onmessage = function (e){
        var data=JSON.parse(e.data);
        var score=data['score'].split(';');
        var away_score='';
        var home_score=[];

        for(var i=0; i<score.length; i++){
            if(i%2==0) away_score+='<td>'+score[i]+'</td>';
            else home_score.push(score[i]);
        }
        var away_rheb='<td>'+data['away_r']+'</td>'+'<td>'+data['away_h']+'</td>'+'<td>'+data['away_e']+'</td>'+'<td>'+data['away_b']+'</td>';
        $('#'+data['id']+'_away_score > td').next().nextAll().remove();
        $('#'+data['id']+'_away_score').append(away_score+away_rheb);
        for(var i=0; i<17; i++){
            $('#'+data['id']+'_home_score_'+i).text(home_score[i]);
            if(i==13) $('#'+data['id']+'_home_score_'+i).text(data['home_r']);
            else if(i==14) $('#'+data['id']+'_home_score_'+i).text(data['home_h']);
            else if(i==15) $('#'+data['id']+'_home_score_'+i).text(data['home_e']);
            else if(i==16) $('#'+data['id']+'_home_score_'+i).text(data['home_b']);
        }

        var fb=(data['fb']==0)? 'x':'o';
        var sb=(data['sb']==0)? 'x':'o';
        var tb=(data['tb']==0)? 'x':'o';
        $('#'+data['id']+'_base').attr('class','ground b1_'+tb+'_b2_'+sb+'_b3_'+fb);
        $('#'+data['id']+'_inning').text(data['inning']+'st');

        $('#'+data['id']+'_bso_b').attr('class','n'+data['bso_b']);
        $('#'+data['id']+'_bso_s').attr('class','n'+data['bso_s']);
        $('#'+data['id']+'_bso_o').attr('class','n'+data['bso_o']);

        $('#'+data['id']+'_pitcher').text('p : '+data['pitcher']);
        $('#'+data['id']+'_p').text('p : '+data['p']);
        $('#'+data['id']+'_hitter').text('B : '+data['hitter']);
    };
</script>
<!--RATCHET END-->

<script type="text/javascript">
    $(document).ready(function(){
        //리그선택하기 버튼
        $(".leagueChoice > a").click(function(){
            $(this).parent().find(".choice_w").slideDown();
            $(this).parent().find(".choice").slideDown();
            return false;
        });
        $(".popup_w2").click(function(){
            $(this).parent().slideUp();
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
            }
        });

        //leagueChoice_메뉴
        $(".leagueC1 > a").click(function(){
            var state = $(this).siblings(".leagueC1_v").css("display");
            if(state == "none"){
                $(".leagueC1_v").slideUp();
                $(this).siblings(".leagueC1_v").slideDown();
                $(this).addClass("close");
                return false;
            }else{
                $(this).siblings(".leagueC1_v").slideUp();
                $(this).removeClass("close");
                return false;
            }
        });
        $(".leagueC2 > a").click(function(){
            var state = $(this).siblings(".leagueC2_v").css("display");
            if(state == "none"){
                $(".leagueC2_v").slideUp();
                $(this).siblings(".leagueC2_v").slideDown();
                $(this).addClass("close");
                return false;
            }else{
                $(this).siblings(".leagueC2_v").slideUp();
                $(this).removeClass("close");
                return false;
            }
        });
        $(".list_close").click(function(){
            $(this).parent().slideUp();
            return false;
        });
    });

    function selectGame(){
        var checked_game='';
        for(var i=0; i<$('.first > input:checked').size(); i++){
            checked_game=checked_game+$('.first > input:checked')[i].value;
            if(i!=$('.first > input:checked').size()-1) checked_game=checked_game+' '
        }

        if(checked_game==''){
            alert('경기를 선택하세요.');
        }else{
            $(location).attr('href','/livescore/baseball?date=<?=$date;?>&selector=check&checked='+checked_game);
        }
    }

    function selectMonth(month){
        $('.month').text(month);
        $('.date_mn_select').slideUp();

        $('.date_da_select > li').remove();
        $str='';
        var day_by_month={'01':31,'02':28,'03':31,'04':30,'05':31,'06':30,'07':31,'08':31,'09':30,'10':31,'11':30,'12':31};
        for(var i=1; i<=day_by_month[month]; i++){
            day=(i.length==1)? "'0"+i+"'" : "'"+i+"'";
            $str=$str+'<li><a href="javascript:selectDay('+day+');">'+i+'</a></li>';
        }
        $('.date_da_select').append($str);
    }

    function selectDay(day){
        $('.day').text(day);
        $('.date_da_select').slideUp();
    }

    function getScheduleByDate(){
        var day=($('.day').text().length>2)? $('.day').text().slice(0, 2) : $('.day').text();
        var date='2017-'+$('.month').text()+'-'+day;
        $(location).attr('href','/livescore/baseball?date='+date+'&selector=all');
    }
</script>