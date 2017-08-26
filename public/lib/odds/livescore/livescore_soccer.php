<?php 
include("head_up.php");
include("head.php");
?>

<script type="text/javascript">
    $(document).ready(function(){
		//리그선택하기 버튼
		$(".leagueChoice > a").click(function(){ 
			$(this).parent().find(".choice_w").slideToggle();
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

		//liveview
		$("a.scorebox").click(function(){ 
			var state = $(this).parents().next(".liveView").css("display"); 
			if(state == 'none'){ 
				$(this).parents().find(".liveView").slideUp();
				$(this).parents(".soccer_table").find(".redbox").addClass("open");
				$(".choice_w").slideUp();
				$(this).parents(".soccer_table_w").find(".liveView").slideDown(); 
			    return false;
			}else{
				$(this).parents(".soccer_table_w").find(".liveView").slideUp();
				$(this).parents().find(".redbox").removeClass("open");
				$(".choice_w").slideUp();
				return false;
			}
		});

		//문자중계<script type="text/javascript">
        $(document).ready(function(){
            //리그선택하기 버튼
            $(".leagueChoice > a").click(function(){
                $(this).parent().find(".choice_w").slideToggle();
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

            //liveview
            $("a.scorebox").click(function(){
                var state = $(this).parents().next(".liveView").css("display");
                if(state == 'none'){
                    $(this).parents().find(".liveView").slideUp();
                    $(this).parents(".soccer_table").find(".redbox").addClass("open");
                    $(".choice_w").slideUp();
                    $(this).parents(".soccer_table_w").find(".liveView").slideDown();
                    return false;
                }else{
                    $(this).parents(".soccer_table_w").find(".liveView").slideUp();
                    $(this).parents().find(".redbox").removeClass("open");
                    $(".choice_w").slideUp();
                    return false;
                }
            });

            //문자중계
            $(".dataview .text > .on").click(function(){
                $(this).parent().animate({ height:"90px"},400); //30px 이었다가 auto 였다가 토글되게 해주세요
                $(this).addClass("off").removeClass("on");
                return false;
            });

            //즐찾버튼토글
            $(".btn_mark").click(function(){
                $(this).toggleClass("on");
                return false;
            });


            //재야의분석/블로그보기 팝업
            for(var i=1;i<9;i++){
                (function (k){
                    $(".r_pop2 ul.r_pop_h li.r_pop_h0" + k ).click(function(){
                        $(this).siblings().removeClass("on");
                        $(this).addClass("on");
                        $(this).parent().siblings().find(">li").removeClass("active");
                        $(this).parent().siblings().find(">li").eq(k-1).addClass("active");
                        return false;
                    });
                }(i));
            };

        });




</script>



<link href="../css/livescore.css" rel="stylesheet" type="text/css"/>


<div class="livescore">
    <div class="topTitle">
        <p>
            <span>라이브 스코어</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02">라이브 스코어</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class="on"><a href="livescore_soccer.php">축구</a></li>
            <li><a href="livescore_base.php">야구</a></li>
            <li><a href="">농구</a></li>
            <li><a href="">배구</a></li>
            <li><a href="">하키</a></li>
        </ul>
        <div class="livetable_w">
            <div class="livetable_top">
                <div class="tab2_w">
                    <ul class="tab02">
                        <li class="on"><a href="">전체</a></li>
                        <li><a href="">진행중</a></li>
                        <li><a href="">경기결과</a></li>
                        <li><a href="">선택경기보기</a></li>
                    </ul>
                </div>
                <div class="date center">
                    <a href="" class="btn_prev" title="이전달">이전달</a>
                    <a href="" class="date_yr date_num">2016</a>
                    <ul class="date_yr_select date_ul" style="display:none;">
                        <li><a href="">2008</a></li>
                        <li><a href="">2009</a></li>
                        <li><a href="">2010</a></li>
                        <li><a href="">2011</a></li>
                        <li><a href="">2012</a></li>
                        <li><a href="">2013</a></li>
                        <li><a href="">2014</a></li>
                        <li><a href="">2015</a></li>
                        <li><a href="">2016</a></li>
                    </ul>
                    <span>.</span>
                    <a href="" class="date_mn date_num">08</a>
                    <ul class="date_mn_select date_ul" style="display:none;">
                        <li><a href="">03</a></li>
                        <li><a href="">04</a></li>
                        <li><a href="">05</a></li>
                        <li><a href="">06</a></li>
                        <li><a href="">07</a></li>
                        <li><a href="">08</a></li>
                        <li><a href="">09</a></li>
                        <li><a href="">10</a></li>
                        <li><a href="">11</a></li>
                    </ul>
                    <span>.</span>
                    <a href="" class="date_da date_num">01</a>
                    <ul class="date_da_select date_ul" style="display:none;">
                        <li><a href="">01</a></li>
                        <li><a href="">02</a></li>
                        <li><a href="">03</a></li>
                        <li><a href="">04</a></li>
                        <li><a href="">05</a></li>
                        <li><a href="">06</a></li>
                        <li><a href="">07</a></li>
                        <li><a href="">08</a></li>
                        <li><a href="">09</a></li>
                        <li><a href="">10</a></li>
                        <li><a href="">11</a></li>
                        <li><a href="">12</a></li>
                        <li><a href="">13</a></li>
                        <li><a href="">14</a></li>
                        <li><a href="">15</a></li>
                        <li><a href="">16</a></li>
                        <li><a href="">17</a></li>
                        <li><a href="">18</a></li>
                        <li><a href="">19</a></li>
                        <li><a href="">20</a></li>
                        <li><a href="">21</a></li>
                        <li><a href="">22</a></li>
                        <li><a href="">23</a></li>
                        <li><a href="">24</a></li>
                        <li><a href="">25</a></li>
                        <li><a href="">26</a></li>
                        <li><a href="">27</a></li>
                        <li><a href="">28</a></li>
                        <li><a href="">29</a></li>
                        <li><a href="">30</a></li>
                        <li><a href="">31</a></li>
                    </ul>
                    <input value="이동" type="submit" class="btn_nv_mn">
                    <a href="" class="btn_next" title="다음달">다음달</a>
                </div>
            </div>
            <div class="leagueChoice">
                <a href="">리그 선택하기</a>
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
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <th>&nbsp;</th><th>리그</th><th>시간</th><th class="right pr20">홈</th><th>스코어</th><th class="left pl20">원정</th><th>데이터</th>
                        </tr>
                    </table>
                </div>

                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
                            <td>17:00<b class="red">63'</b></td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
                            <td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>2</b></a></td><!-- 게임중 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color02"><a href="">FIFAWYC</a></span></td>
                            <td>17:15<b class="red">HT</b></td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
                            <td><a href="" class="scorebox redbox"><b class="red score">1<span class="colon">:</span>0</b></a></td><!-- 득점시 빨간박스 생기고(.redbox)    //깜빡임 3초//   -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
                            <td>18:00<b class="red">3'</b></td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
                            <td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>0</b></a></td><!-- 게임중 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
                            <td>18:30</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
                            <td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>0</b></a></td>
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
                            <td>17:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color02"><a href="">FIFAWYC</a></span></td>
                            <td>17:15</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
                            <td>18:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
                            <td>18:30</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
                            <td>17:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color02">FIFAWYC</span></td>
                            <td>17:15</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
                            <td>18:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
                            <td>18:30</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
                        <div class="dataview">
                            <div class="live">
                                <ul class="team">
                                    <li><span class="MU_s"></span></li>
                                    <li><span class="arsenal_s"></span></li>
                                </ul>
                                <div class="event_line1">
                                    <div class="event" style="left:5%;">
                                        <span class="yellow"></span>
                                        <span class="time">10'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:10%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">18'</span>
                                        <span class="goal"></span>
                                    </div>
                                    <div class="event" style="left:12%">
                                        <span class="goal"></span>
                                        <span class="time">29'</span>
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="event" style="left:26%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">32'</span>
                                        <span class="change"></span>
                                    </div>
                                    <div class="event" style="left:44%">
                                        <span class="">&nbsp;</span>
                                        <span class="time">41'</span>
                                        <span class="yellow"></span>
                                    </div>
                                    <div class="now" style="left:50%;"></div>
                                </div>
                            </div>
                            <div class="text">
                                <p>문자 중계</p>
                                <ul>
                                    <li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                    <li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
                                </ul>
                                <a href="" class="on">더보기</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="soccer_table_w">
                    <table class="table_default soccer_table">
                        <caption>전체</caption>
                        <colgroup>
                            <col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
                        </colgroup>
                        <tr>
                            <td class="league"><input type="checkbox" /></td>
                            <td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
                            <td>19:00</td>
                            <td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
                            <td>-<span class="colon">:</span>-</td><!-- 게임전 -->
                            <td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
                            <td class="data">
                                <div class="data">
                                    <span class="btn_mark"><a href=""></a></span>
                                    <span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>
                                    <span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>

                                    <span class="upicon"><a href="">up</a></span>
                                </div>
                                <!-- 재야의분석/블로그보기-->
                                <div class="r_pop_w popup">
                                    <div class="popup_w"></div>
                                    <div class="r_pop r_pop2">
                                        <ul class="r_pop_h">
                                            <li class="on r_pop_h01"><a href="">재야의 분석</a></li>
                                            <li class="r_pop_h02"><a href="">블로그 보기</a></li>
                                        </ul>
                                        <div class="clear"></div>
                                        <ul class="r_pop_v">
                                            <li class="active">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석22</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
                                                            <span class="hh">설민석</span>
                                                            <span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>
                                                    <span>1/12</span>
                                                    <button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
		$(".dataview .text > .on").click(function(){ 
			$(this).parent().animate({ height:"90px"},400); //30px 이었다가 auto 였다가 토글되게 해주세요
			$(this).addClass("off").removeClass("on");
			return false;
		});

		//즐찾버튼토글
		$(".btn_mark").click(function(){ 
			$(this).toggleClass("on");
			return false;
		});

		
		//재야의분석/블로그보기 팝업
		for(var i=1;i<9;i++){		
			(function (k){
				$(".r_pop2 ul.r_pop_h li.r_pop_h0" + k ).click(function(){ 
					$(this).siblings().removeClass("on");
					$(this).addClass("on");
					$(this).parent().siblings().find(">li").removeClass("active");
					$(this).parent().siblings().find(">li").eq(k-1).addClass("active");
					return false;
				});
			}(i));
		};

	});



		
	  </script>					
	  


			<link href="../css/livescore.css" rel="stylesheet" type="text/css"/>


			<div class="livescore">
				<div class="topTitle">
					<p>
						<span>라이브 스코어</span>
						<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
					</p>
					<h2 class="tit02">라이브 스코어</h2>
				</div>
				<div class="game_w">
					<ul class="tab01 gameMain">
						<li class="on"><a href="livescore_soccer.php">축구</a></li>
						<li><a href="livescore_base.php">야구</a></li>
						<li><a href="">농구</a></li>
						<li><a href="">배구</a></li>
						<li><a href="">하키</a></li>
					</ul>
					<div class="livetable_w">
						<div class="livetable_top">
							<div class="tab2_w">
								<ul class="tab02">
									<li class="on"><a href="">전체</a></li>
									<li><a href="">진행중</a></li>
									<li><a href="">경기결과</a></li>
									<li><a href="">선택경기보기</a></li>
								</ul>
							</div>
							<div class="date center">
								<a href="" class="btn_prev" title="이전달">이전달</a>
								<a href="" class="date_yr date_num">2016</a>
								<ul class="date_yr_select date_ul" style="display:none;">
									<li><a href="">2008</a></li>
									<li><a href="">2009</a></li>
									<li><a href="">2010</a></li>
									<li><a href="">2011</a></li>
									<li><a href="">2012</a></li>
									<li><a href="">2013</a></li>
									<li><a href="">2014</a></li>
									<li><a href="">2015</a></li>
									<li><a href="">2016</a></li>
								</ul>
								<span>.</span>
								<a href="" class="date_mn date_num">08</a>
								<ul class="date_mn_select date_ul" style="display:none;">
									<li><a href="">03</a></li>
									<li><a href="">04</a></li>
									<li><a href="">05</a></li>
									<li><a href="">06</a></li>
									<li><a href="">07</a></li>
									<li><a href="">08</a></li>
									<li><a href="">09</a></li>
									<li><a href="">10</a></li>
									<li><a href="">11</a></li>
								</ul>
								<span>.</span>
								<a href="" class="date_da date_num">01</a>
								<ul class="date_da_select date_ul" style="display:none;">
									<li><a href="">01</a></li>
									<li><a href="">02</a></li>
									<li><a href="">03</a></li>
									<li><a href="">04</a></li>
									<li><a href="">05</a></li>
									<li><a href="">06</a></li>
									<li><a href="">07</a></li>
									<li><a href="">08</a></li>
									<li><a href="">09</a></li>
									<li><a href="">10</a></li>
									<li><a href="">11</a></li>
									<li><a href="">12</a></li>
									<li><a href="">13</a></li>
									<li><a href="">14</a></li>
									<li><a href="">15</a></li>
									<li><a href="">16</a></li>
									<li><a href="">17</a></li>
									<li><a href="">18</a></li>
									<li><a href="">19</a></li>
									<li><a href="">20</a></li>
									<li><a href="">21</a></li>
									<li><a href="">22</a></li>
									<li><a href="">23</a></li>
									<li><a href="">24</a></li>
									<li><a href="">25</a></li>
									<li><a href="">26</a></li>
									<li><a href="">27</a></li>
									<li><a href="">28</a></li>
									<li><a href="">29</a></li>
									<li><a href="">30</a></li>
									<li><a href="">31</a></li>
								</ul>
								<input value="이동" type="submit" class="btn_nv_mn">	
								<a href="" class="btn_next" title="다음달">다음달</a>
							</div>
						</div>
						<div class="leagueChoice">
							<a href="">리그 선택하기</a>
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
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<th>&nbsp;</th><th>리그</th><th>시간</th><th class="right pr20">홈</th><th>스코어</th><th class="left pl20">원정</th><th>데이터</th>
									</tr>
								</table>
							</div>

							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
										<td>17:00<b class="red">63'</b></td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
										<td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>2</b></a></td><!-- 게임중 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color02"><a href="">FIFAWYC</a></span></td>
										<td>17:15<b class="red">HT</b></td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
										<td><a href="" class="scorebox redbox"><b class="red score">1<span class="colon">:</span>0</b></a></td><!-- 득점시 빨간박스 생기고(.redbox)    //깜빡임 3초//   -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
										<td>18:00<b class="red">3'</b></td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
										<td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>0</b></a></td><!-- 게임중 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
										<td>18:30</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
										<td><a href="" class="scorebox"><b class="red score">0<span class="colon">:</span>0</b></a></td>
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
										<td>17:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color02"><a href="">FIFAWYC</a></span></td>
										<td>17:15</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
										<td>18:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
										<td>18:30</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color01"><a href="">AFC CUP</a></span></td>
										<td>17:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Kigwancha Sports Club</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Erchim(N)</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color02">FIFAWYC</span></td>
										<td>17:15</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">우루과이 (U20)(N)</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Saudi Arabia U20</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color03"><a href="">A FFA Cup</a></span></td>
										<td>18:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Ilocos United FC</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w) </a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color04"><a href="">SWE U21ASN</a></span></td>
										<td>18:30</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Stallions FC</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CSKA Moscow Beach</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="liveView" style="display:none;"><!-- a.ing_BTN 클릭시 열리는 부분 -->
									<div class="dataview">			
										<div class="live">
											<ul class="team">
												<li><span class="MU_s"></span></li>
												<li><span class="arsenal_s"></span></li>
											</ul>
											<div class="event_line1">
												<div class="event" style="left:5%;">
													<span class="yellow"></span>
													<span class="time">10'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:10%">
													<span class="">&nbsp;</span>
													<span class="time">18'</span>
													<span class="goal"></span>
												</div>
												<div class="event" style="left:12%">
													<span class="goal"></span>
													<span class="time">29'</span>
													<span>&nbsp;</span>
												</div>
												<div class="event" style="left:26%">
													<span class="">&nbsp;</span>
													<span class="time">32'</span>
													<span class="change"></span>
												</div>
												<div class="event" style="left:44%">
													<span class="">&nbsp;</span>
													<span class="time">41'</span>
													<span class="yellow"></span>
												</div>
												<div class="now" style="left:50%;"></div>
											</div>
										</div>
										<div class="text">
											<p>문자 중계</p>
											<ul>
												<li><span>63분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>62분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
												<li><span>61분</span>스캇 아필드 [번리] 페널티박스 중앙에서 왼발슛~(유효슛팅) 골키퍼에 막힙니다.</li>
											</ul>
											<a href="" class="on">더보기</a>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color05"><a href="">SAPL D1off</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">CS Navobi Iasi Women</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">FCM Targu Mures (w)</a> </td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
							<div class="soccer_table_w">
								<table class="table_default soccer_table">
									<caption>전체</caption>
									<colgroup>
										<col width="30px" /><col width="95px" /><col width="85px" /><col width="245px" /><col width="60px" /><col width="245px" /><col width="*" />
									</colgroup>
									<tr>
										<td class="league"><input type="checkbox" /></td>
										<td><span class="league_bg color06"><a href="">Indian U19</a></span></td>
										<td>19:00</td>
										<td class="right pr20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Brisbane Olympic United FC U20</a></td>
										<td>-<span class="colon">:</span>-</td><!-- 게임전 -->
										<td class="left pl20"><a href="/odds/game/main/pop_dividend.php" onClick="window.open(this.href, '', 'width=1060, height=900 , scrollbars=yes'); return false;">Defensores de Belgrano Reserves</a></td>
										<td class="data">
											<div class="data">
												<span class="btn_mark"><a href=""></a></span>	
												<span class="b_BTN5"><a href="/odds/game/league_soccer/match.php"></a></span>	
												<span class="r_BTN r_BTN2"><a href="">전문가 의견</a></span>
												
												<span class="upicon"><a href="">up</a></span>
											</div>
											<!-- 재야의분석/블로그보기-->
											<div class="r_pop_w popup">
												<div class="popup_w"></div>
												<div class="r_pop r_pop2">
													<ul class="r_pop_h">
														<li class="on r_pop_h01"><a href="">재야의 분석</a></li>
														<li class="r_pop_h02"><a href="">블로그 보기</a></li>
													</ul>
													<div class="clear"></div>
													<ul class="r_pop_v">
														<li class="active">
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
														<li>
															<ul>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석22</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
																<li>
																	<a href="">
																		<span class="img"><img src="/odds/image/blog/img_follow01.jpg" alt="" /></span>
																		<span class="hh">설민석</span>
																		<span class="pp">박병호의 부담감으로 인한 예상경기가..</span>
																	</a>
																</li>
															</ul>
															<p>
																<span>1/12</span>
																<button class="btn_prev"><span></span>prev</button><button class="btn_next"><span></span>next</button>
															</p>
														</li>
													</ul>

												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>

						</div>
				</div>
			</div>


			
<?php 
include("footer.php");
?>

 </body>
</html>
