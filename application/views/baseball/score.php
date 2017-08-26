<?php $MLB_team_kor=array('Chicago Cubs'=>'시카고C','St. Louis Cardinals'=>'세인트루이스','Kansas City Royals'=>'캔자스시티','Colorado Rockies'=>'콜로라도','Minnesota Twins'=>'미네소타','Cleveland Indians'=>'클리브랜드','Tampa Bay Rays'=>'템파베이','Miami Marlins'=>'마이애미','Los Angeles Angels'=>'LAA','San Francisco Giants'=>'샌프란시스코','Philadelphia Phillies'=>'필라델피아','Boston Red Sox'=>'보스톤','New York Yankees'=>'뉴욕Y','Washington Nationals'=>'워싱턴','Texas Rangers'=>'텍사스','Milwaukee Brewers'=>'밀워키','Chicago White Sox'=>'시카고W','Los Angeles Dodgers'=>'LAD','New York Mets'=>'뉴욕M','Pittsburgh Pirates'=>'피츠버그','Arizona Diamondbacks'=>'에리조나','Oakland Athletics'=>'오클랜드','San Diego Padres'=>'샌디에이','Seattle Mariners'=>'시애틀','Houston Astros'=>'휴스턴','Baltimore Orioles'=>'볼티모어','Atlanta Braves'=>'애틀랜타','Detroit Tigers'=>'디트로이','Cincinnati Reds'=>'신시내티','Toronto Blue Jays'=>'토론토','American League'=>'아메리칸 리그','National League'=>'네셔날 리그'); ?>

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
            <li><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">선수 기록</a></li>
            <li class="on"><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s6 active pb50">
                <div class="gray_warp_w">
                    <div class="gray_warp">
                        <div class="select" style="width:160px;">
                            <p class="off"><span class="pp away" style="width:90px;">팀선택</span><span class="pa"></span></p>
                            <ul>
                                <?php if($league=='KBO'): ?>
                                    <li><a href="javascript:select_team('away', '두산');">두산</a></li>
                                    <li><a href="javascript:select_team('away', 'NC');">NC</a></li>
                                    <li><a href="javascript:select_team('away', '넥센');">넥센</a></li>
                                    <li><a href="javascript:select_team('away', 'LG');">LG</a></li>
                                    <li><a href="javascript:select_team('away', 'KIA');">KIA</a></li>
                                    <li><a href="javascript:select_team('away', 'SK');">SK</a></li>
                                    <li><a href="javascript:select_team('away', '한화');">한화</a></li>
                                    <li><a href="javascript:select_team('away', '롯데');">롯데</a></li>
                                    <li><a href="javascript:select_team('away', '삼성');">삼성</a></li>
                                    <li><a href="javascript:select_team('away', 'KT');">KT</a></li>
                                <?php else: ?>
                                    <?php $count=0; foreach($MLB_team_kor as $key=>$item): ?>
                                        <?php if($count<30): $count++; ?>
                                            <?php if($league=='KBO'): ?><li><a href="javascript:select_team('away', '<?=$key;?>');"><?=$item;?></a></li>
                                            <?php else: ?><li><a href="javascript:select_mlb_team('away', '<?=$item;?>');"><?=$item;?></a></li><?php endif;?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                        </div>
                        <p>VS</p>
                        <div class="select" style="width:160px;">
                            <p class="off"><span class="pp home" style="width:90px;">팀선택</span><span class="pa"></span></p>
                            <ul>
                                <?php if($league=='KBO'): ?>
                                    <li><a href="javascript:select_team('home', '두산');">두산</a></li>
                                    <li><a href="javascript:select_team('home', 'NC');">NC</a></li>
                                    <li><a href="javascript:select_team('home', '넥센');">넥센</a></li>
                                    <li><a href="javascript:select_team('home', 'LG');">LG</a></li>
                                    <li><a href="javascript:select_team('home', 'KIA');">KIA</a></li>
                                    <li><a href="javascript:select_team('home', 'SK');">SK</a></li>
                                    <li><a href="javascript:select_team('home', '한화');">한화</a></li>
                                    <li><a href="javascript:select_team('home', '롯데');">롯데</a></li>
                                    <li><a href="javascript:select_team('home', '삼성');">삼성</a></li>
                                    <li><a href="javascript:select_team('home', 'KT');">KT</a></li>
                                <?php else: ?>
                                    <?php $count=0; foreach($MLB_team_kor as $key=>$item): ?>
                                        <?php if($count<30): $count++; ?>
                                            <?php if($league=='KBO'): ?><li><a href="javascript:select_team('home', '<?=$key;?>');"><?=$item;?></a></li>
                                            <?php else: ?><li><a href="javascript:select_mlb_team('home', '<?=$item;?>');"><?=$item;?></a></li><?php endif;?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                        </div>
                        <div class="select" style="margin-left:55px;">
                            <!--<p class="off"><span class="pp">전체</span><span class="pa"></span></p>
                            <ul>
                                <li><a href="">홈</a></li>
                                <li><a href="">원정</a></li>
                            </ul>-->
                        </div>
                        <a href="javascript:get_result();" class="btn s6_btn">결과보기<span class=""></span></a>
                    </div>
                </div>
                <div class="s6_result">
                    <!--<div class="select" style="">
                        <p><span class="pp">전체</span><span class="pa"></span></p>
                        <ul>
                            <li><a href="javascript:get_result();">10경기</a></li>
                            <li><a href="javascript:get_result();">20경기</a></li>
                            <li><a href="javascript:get_result();">30경기</a></li>
                        </ul>
                    </div>-->
                    <div class="pb50">
                        <h3 class="noBorder">상대 전적</h3>
                        <table class="table_default relation_result">
                            <caption></caption>
                            <colgroup>
                                <col width="*"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="90px"/>
                                <col width="100px"/>
                            </colgroup>
                            <tr>
                                <th class="">팀</th>
                                <th>경기</th>
                                <th>승</th>
                                <th>무</th>
                                <th>패</th>
                                <th>득점</th>
                                <th>실점</th>
                                <th>경기당 득점</th>
                                <th>경기당 실점</th>
                            </tr>
                        </table>
                    </div>
                    <h3 class="noBorder">매치 결과</h3>
                    <table class="table_default match_result">
                        <caption></caption>
                        <colgroup>
                            <col width="80px"/>
                            <col width="97px"/>
                            <col width="*"/>
                            <col width="80px"/>
                            <col width="70px"/>
                            <col width="34px"/>
                            <col width="75px"/>
                            <col width="175px"/>
                        </colgroup>
                        <tr>
                            <th>리그</th>
                            <th>날짜</th>
                            <th>&nbsp;</th>
                            <th>결과</th>
                            <th>1</th>
                            <th>x</th>
                            <th>2</th>
                            <th>&nbsp;</th>
                        </tr>
                    </table>
                </div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".btn_arrow01").click(function(){
            $(this).parents().find(".leaguebox").slideToggle();
            return false;
        });

        //상대전적 결과보기
        $(".s6_btn").click(function(){
            $(this).parents().find(".s6_result").slideDown();
        });
    });

    var away_select='';
    var home_select='';
    function select_team(home_or_away, team_name){
        $('.'+home_or_away).text(team_name);
        if(home_or_away=='away') away_select=team_name;
        else home_select=team_name;
    }
    function select_mlb_team(home_or_away, team_name){
        $('.'+home_or_away).text(team_name);
        if(home_or_away=='away') away_select=team_name;
        else home_select=team_name;
    }

    function get_result(){
        var MLB_team_kor={'시카고C':'Chicago Cubs','세인트루이스':'St. Louis Cardinals','캔자스시티':'Kansas City Royals','콜로라도':'Colorado Rockies','미네소타':'Minnesota Twins','클리브랜드':'Cleveland Indians','템파베이':'Tampa Bay Rays','마이애미':'Miami Marlins','LAA':'Los Angeles Angels','샌프란시스코':'San Francisco Giants','필라델피아':'Philadelphia Phillies','보스톤':'Boston Red Sox','뉴욕Y':'New York Yankees','워싱턴':'Washington Nationals','텍사스':'Texas Rangers','밀워키':'Milwaukee Brewers','시카고W':'Chicago White Sox','LAD':'Los Angeles Dodgers','뉴욕M':'New York Mets','피츠버그':'Pittsburgh Pirates','에리조나':'Arizona Diamondbacks','오클랜드':'Oakland Athletics','샌디에이':'San Diego Padres','시애틀':'Seattle Mariners','휴스턴':'Houston Astros','볼티모어':'Baltimore Orioles','애틀랜타':'Atlanta Braves','디트로이':'Detroit Tigers','신시내티':'Cincinnati Reds','토론토':'Toronto Blue Jays'};
        if(away_select=='' && home_select==''){
            alert('팀을 선택하세요.');
        }else if(away_select==home_select){
            alert('선택한 두 팀이 같습니다.');
        }else if(away_select!=''&&home_select!=''){
            var result_str='';
            if('<?=$league;?>'!='KBO'){
                away_select=MLB_team_kor[away_select];
                home_select=MLB_team_kor[home_select];
            }

            $.ajax({
                url:'/baseball/get_score_result_ajax',
                type:'POST',
                data:{away:away_select,home:home_select,league:'<?=$league;?>'},
                beforeSend:function(){
                    $('.result_contents').remove();
                },success:function(data){
                    result_str=data;
                },complete:function(){
                    $('.relation_result tbody').append(result_str);
                }
            });
        }else{
            alert('팀을 선택하세요.');
        }

        $.ajax({
            url:'/baseball/get_match_result_ajax',
            type:'POST',
            data:{away:away_select,home:home_select,league:'<?=$league;?>'},
            beforeSend:function(){
                $('.match_contents').remove();
            },success:function(data2){
                result_str2=data2;
            },complete:function(){
                $('.match_result tbody').append(result_str2);
                $.ajax({
                    url:"/baseball/match_include",
                    success:function(result){
                        $(".match_ajax").append(result);
                    }
                });
            }
        });
    }
</script>