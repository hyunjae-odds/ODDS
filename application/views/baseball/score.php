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
            <li><a href="/baseball/result/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li><a href="/baseball/player_record_hitter/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">선수 기록</a></li>
            <li class="on"><a href="/baseball/score/<?=($league=='KBO')? 'KBO' : 'MLB_A';?>">상대 전적</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="s6 active pb50">
                <div class="gray_warp_w">
                    <div class="gray_warp">
                        <div class="select" style="width:160px;">
                            <p class="off"><span class="pp away" style="width:108px;">팀선택</span><span class="pa"></span></p>
                            <ul>
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
                            </ul>
                        </div>
                        <p>VS</p>
                        <div class="select" style="width:160px;">
                            <p class="off"><span class="pp home" style="width:108px;">팀선택</span><span class="pa"></span></p>
                            <ul>
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
                    <div class="select" style="">
                        <!--<p><span class="pp">전체</span><span class="pa"></span></p>
                        <ul>
                            <li><a href="">10경기</a></li>
                            <li><a href="">20경기</a></li>
                            <li><a href="">30경기</a></li>
                        </ul>-->
                    </div>
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

    function get_result(){
        if(away_select=='' && home_select==''){
            alert('팀을 선택하세요.');
        }else if(away_select==home_select){
            alert('선택한 두 팀이 같습니다.');
        }else if(away_select!=''&&home_select!=''){
            var result_str='';
            $.ajax({
                url:'/baseball/get_score_result_ajax',
                type:'POST',
                data:{away:away_select,home:home_select},
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

        var result_str2='';
        $.ajax({
            url:'/baseball/get_match_result_ajax',
            type:'POST',
            data:{away:away_select,home:home_select},
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