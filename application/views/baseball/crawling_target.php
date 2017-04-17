<body>
<form method="post" action="./TeamRank.aspx" id="mainForm">
    <div class="aspNetHidden">




    </div>

    <script type="text/javascript">
        //<![CDATA[
        var theForm = document.forms['mainForm'];
        if (!theForm) {
            theForm = document.mainForm;
        }
        function __doPostBack(eventTarget, eventArgument) {
            if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                theForm.__EVENTTARGET.value = eventTarget;
                theForm.__EVENTARGUMENT.value = eventArgument;
                theForm.submit();
            }
        }
        //]]>
    </script>


    <script src="/WebResource.axd?d=oxHRNNk5kZiP0dh3Vm2N0xqj8RPWpdJom62rJh6Az7sFxG4KJTTv-mPTmtm6itqJLpP2oT2z3vW8S2mZ_6jo4Oke3JPjI75BS6aUTtNVTGs1&amp;t=636161582620000000" type="text/javascript"></script>


    <script src="/ScriptResource.axd?d=TudnsgX3sPFYN-F6k3iGg_FEWgnj26n4FWyqf9_ExWhoJCJpzz9mKfd72vMOFbtP4i7kt51NbbHhTOtGcPtwtQC3O1bwmrkfDnu-5A-QN21fRnbUGgGlqO7lW8KTju_jrOUCg4744n_Szgn-rCqQIejsR0B-n2NI40zOA-EoV7-ZQNelV8unnfUWYYc_Hl8a0&amp;t=ffffffff977ec8ef" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 클라이언트 쪽 프레임워크를 로드하지 못했습니다.');
        //]]>
    </script>

    <script src="/ScriptResource.axd?d=saRxMya7Jyl_BzpHj7qcKTRNrnyT4oeoMYqjeVB31jckRu9bavYTCJ17iwUWAwpoj1fPXGC-j6QK8F3rQ14OKLXwmM5Xo9En3xJqWL-MEl_15aLeWlTzj8RPI-y1EbTj_XU904iGB_kZHQ1tSBiE_PKO09466hPqXP14lelRSl28lK_9QSnoIWb5ddl_BnH20&amp;t=ffffffff977ec8ef" type="text/javascript"></script>
    <div class="aspNetHidden">



    </div>
    <!-- wrap -->
    <div id="wrap">
        <!-- header -->
        <header>
            <div id="gnb" class="bgf3">
                <div class="gnb-wrap">
                    <ul class="menu">

                        <li><a href="/Member/Login.aspx">로그인</a></li>
                        <li><a href="/Member/Join/Accessterms.aspx">회원가입</a></li>

                        <li><a href="http://eng.koreabaseball.com/">ENGLISH</a></li>
                    </ul>
                    <div class="search-area">
                        <div class="search-box">
                            <input class="ipt-search" type="text" id="txtTopPlayerWord" placeholder="선수 검색하기">
                            <a href="#none;" id="btnTopPlayerSearch" class="btn-search"><img src="//image.koreabaseball.com/resources/images/common/btn_search.png" alt="검색"></a>
                        </div>
                        <div id="player_search_area" class="search-result">
                            <!-- <p class="null">검색 결과가 없습니다.</p> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapping lnb-wrap">
                <h1 class="logo"><a href="/Default.aspx"><img src="//image.koreabaseball.com/resources/images/common/h1_logo.png" alt=""></a></h1>
                <nav>
                    <ul id="lnb">
                        <li>
                            <a href="/Schedule/GameCenter/Main.aspx">일정/결과</a>
                            <div class="lnb-sub">
                                <ul class="lnb01">
                                    <li><a href="/Schedule/GameCenter/Main.aspx">게임센터</a></li>
                                    <li><a href="/Schedule/ScoreBoard.aspx">스코어보드</a></li>
                                    <li><a href="/Schedule/Schedule.aspx">경기일정/결과</a></li>
                                    <li><a href="/Schedule/CalendarSchedule.aspx">월별일정/결과</a></li>
                                    <li><a href="/Schedule/International/Wbc/Main2017.aspx">국제대회</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/TeamRank/TeamRank.aspx">순위</a>
                            <div class="lnb-sub">
                                <ul class="lnb02">
                                    <li><a href="/TeamRank/TeamRank.aspx">팀순위</a></li>
                                    <li><a href="/TeamRank/GraphDaily.aspx">팀별 순위변동 그래프</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/Record/Main.aspx">기록</a>
                            <div class="lnb-sub">
                                <ul class="lnb03">
                                    <li><a href="/Record/Main.aspx">TOP5</a></li>
                                    <li><a href="/Record/Player/HitterBasic/Basic1.aspx">기록실</a></li>
                                    <li><a href="/Record/Etc/HitVsPit.aspx">투수 vs 타자</a></li>
                                    <li><a href="/Record/History/Top/Hitter.aspx">역대기록실</a></li>
                                    <li><a href="/Record/Expectation/WeekList.aspx">주간/일간 예상 달성기록</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="/Player/Search.aspx">선수</a>
                            <div class="lnb-sub">
                                <ul class="lnb04">
                                    <li><a href="/Player/Search.aspx">선수조회</a></li>
                                    <li><a href="/Player/Register.aspx">선수등록현황</a></li>
                                    <li><a href="/Player/RegisterAll.aspx">전체등록현황</a></li>
                                    <li><a href="/Player/CareerCertificate.aspx">경력증명서 신청</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="/Futures/Schedule/GameList.aspx">퓨처스리그</a>
                            <div class="lnb-sub">
                                <ul class="lnb05">
                                    <li><a href="/Futures/Schedule/GameList.aspx">경기일정/결과</a></li>
                                    <li><a href="/Futures/TeamRank/North.aspx">팀순위</a></li>
                                    <li><a href="/Futures/Main/Main.aspx">TOP5</a></li>
                                    <li><a href="/Futures/Player/Hitter.aspx">기록실</a></li>
                                    <li><a href="/Futures/InfoGraphic/List.aspx">인포그래픽</a></li>
                                    <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                    <li><a href="/Futures/GameSketch/List.aspx">경기스케치	</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="">
                            <a href="/News/Preview/List.aspx">NEWS</a>
                            <div class="lnb-sub">
                                <ul class="lnb06">
                                    <li><a href="/News/Preview/List.aspx">NEWS</a></li>
                                    <li><a href="/News/Notice/List.aspx">KBO 보도자료</a></li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:;">KBO</a>
                            <div class="lnb-sub lnb-style-all">
                                <div class="wrapping lnb-all-wrap">
                                    <h3>KBO</h3>
                                    <div class="lnb-all kbo01">
                                        <h4>HISTORY</h4>
                                        <ul>
                                            <li><a href="/History/Crowd/GraphTeam.aspx">관중현황</a></li>
                                            <li><a href="/History/Etc/PlayerPrize.aspx">역대 개인수상</a></li>
                                            <li><a href="/History/Etc/GoldenGlove.aspx">역대 골든글러브</a></li>
                                            <li><a href="/History/Etc/GameManage.aspx">경기운영제도</a></li>
                                            <li><a href="/History/Etc/TeamHistory.aspx">각 구단 변천사</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo02">
                                        <h4>KBO TV</h4>
                                        <ul>
                                            <li><a href="/KboTv/Highlight/List.aspx">하이라이트</a></li>
                                            <li><a href="/KboTv/MonthMvp/List.aspx">월간MVP</a></li>
                                            <li><a href="/KboTv/Legend/List.aspx">레전드 올스타 동영상</a></li>
                                            <li><a href="/KboTv/Event/List.aspx">KBO 영상</a></li>
                                            <li><a href="/KboTv/VeteranInterview/List.aspx">야구 원로 인터뷰</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo03">
                                        <h4>게시판</h4>
                                        <ul>
                                            <li><a href="/Board/Notice/List.aspx">NOTICE</a></li>
                                            <li><a href="/Board/Faq/List.aspx">자주하는질문</a></li>
                                            <li><a href="/Board/Qna/List.aspx">Q&amp;A게시판</a></li>
                                            <li><a href="/Board/Free/List.aspx">자유게시판</a></li>
                                            <li><a href="/Board/Committee/List.aspx">기록위원회 Q&amp;A게시판</a></li>
                                            <li><a href="/Board/Committee/RecordBook.aspx">기록교재 신청하기</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo04">
                                        <h4>자료실</h4>
                                        <ul>
                                            <li><a href="/Reference/Etc/Amazing.aspx">진기록 명기록</a></li>
                                            <li><a href="/Reference/Ebook/Ebook2017.aspx">E-BOOK</a></li>
                                            <li><a href="/Reference/OnlineLecture/List.aspx">초급자용 사이버야구교실</a></li>
                                            <li><a href="/Reference/Etc/GameRule.aspx">경기규칙</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo05">
                                        <h4>ABOUT KBO</h4>
                                        <ul>
                                            <li><a href="/About/Etc/TeamInfo.aspx">구단 소개</a></li>
                                            <li><a href="/About/Group/Activity.aspx">조직 및 활동</a></li>
                                            <li><a href="/Event/Etc/OfficialChannel.aspx">KBO 공식 채널</a></li>
                                            <li><a href="/About/Etc/KboCi.aspx">KBO CI / 캐치프레이즈</a></li>
                                            <li><a href="/About/Etc/Map.aspx">약도 / 관람료</a></li>
                                            <li><a href="/About/Committee/OrganizationChart.aspx">기록위원회</a></li>
                                            <li><a href="/About/Etc/CleanCenter1.aspx">클린베이스볼센터</a></li>
                                        </ul>
                                    </div>
                                    <div class="lnb-all kbo06">
                                        <h4>주요 사업/행사</h4>
                                        <ul>
                                            <li><a href="/Event/Etc/TimeLine.aspx">2017 타임라인</a></li>
                                            <li><a href="/Event/RecordClass/Professional.aspx">기록강습회</a></li>
                                            <li><a href="/Event/Etc/WinterMeeting.aspx">KBO 윈터미팅</a></li>
                                            <li><a href="/Event/Etc/Safe.aspx">SAFE 캠페인</a></li>
                                            <li><a href="/Event/Contribution/Service2016.aspx">KBO 사회공헌 사업</a></li>
                                            <li><a href="/Event/DreamSave/2017/List.aspx">Dream Save</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li id="market"><a href="https://www.kbomarket.com/" target="_blank">KBO 마켓</a></li>
                        <li id="lnbAll">
                            <a href="javascript:;">전체 메뉴</a>
                            <div class="lnb-sub lnb-style-all">
                                <div class="wrapping lnb-all-wrap">
                                    <div class="line line01">
                                        <h3>전체 메뉴</h3>
                                        <div class="lnb-all menu01">
                                            <h4>일정/결과</h4>
                                            <ul>
                                                <li><a href="/Schedule/GameCenter/Main.aspx">게임센터</a></li>
                                                <li><a href="/Schedule/ScoreBoard.aspx">스코어보드</a></li>
                                                <li><a href="/Schedule/Schedule.aspx">경기일정/결과</a></li>
                                                <li><a href="/Shceudle/CalendarSchedule.aspx">월별일정/결과</a></li>
                                                <li><a href="/Schedule/International/Wbc/Main2017.aspx">국제대회</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu02">
                                            <h4>순위</h4>
                                            <ul>
                                                <li><a href="/TeamRank/TeamRank.aspx">팀순위</a></li>
                                                <li><a href="/TeamRank/GraphDaily.aspx">팀별 순위변동 그래프</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu03">
                                            <h4>기록</h4>
                                            <ul>
                                                <li><a href="/Record/Main.aspx">TOP5</a></li>
                                                <li><a href="/Record/Player/HitterBasic/Basic1.aspx">기록실</a></li>
                                                <li><a href="/Record/Etc/HitVsPit.aspx">투수 vs 타자</a></li>
                                                <li><a href="/Record/History/Top/Hitter.aspx">역대기록실</a></li>
                                                <li class="menu0305"><a href="/Record/Expectation/WeekList.aspx">주간/일간 예상 달성기록</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu04">
                                            <h4>선수</h4>
                                            <ul>
                                                <li><a href="/Player/Search.aspx">선수조회</a></li>
                                                <li><a href="/Player/Register.aspx">선수등록현황</a></li>
                                                <li><a href="/Player/RegisterAll.aspx">전체등록현황</a></li>
                                                <li><a href="/Player/CareerCertificate.aspx">경력증명서 신청</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu05">
                                            <h4>퓨처스리그</h4>
                                            <ul>
                                                <li><a href="/Futures/Schedule/GameList.aspx">경기일정/결과</a></li>
                                                <li><a href="/Futures/TeamRank/North.aspx">팀순위</a></li>
                                                <li><a href="/Futures/Main/Main.aspx">TOP5</a></li>
                                                <li><a href="/Futures/Player/Hitter.aspx">기록실</a></li>
                                                <li><a href="/Futures/InfoGraphic/List.aspx">인포그래픽</a></li>
                                                <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                                <li><a href="/Futures/GameSketch/List.aspx">경기스케치</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu06">
                                            <h4>NEWS</h4>
                                            <ul>
                                                <li><a href="/News/Preview/List.aspx">NEWS</a></li>
                                                <li><a href="/News/Notice/List.aspx">KBO 보도자료</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="line line02">
                                        <h3>KBO</h3>
                                        <div class="lnb-all menu07">
                                            <h4>HISTORY</h4>
                                            <ul>
                                                <li><a href="/History/Crowd/GraphTeam.aspx">관중현황</a></li>
                                                <li><a href="/History/Etc/PlayerPrize.aspx">역대 개인수상</a></li>
                                                <li><a href="/History/Etc/GoldenGlove.aspx">역대 골든글러브</a></li>
                                                <li><a href="/History/Etc/GameManage.aspx">경기운영제도</a></li>
                                                <li><a href="/History/Etc/TeamHistory.aspx">각 구단 변천사</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu08">
                                            <h4>KBO TV</h4>
                                            <ul>
                                                <li><a href="/KboTv/Highlight/List.aspx">하이라이트</a></li>
                                                <li><a href="/KboTv/MonthMvp/List.aspx">월간MVP</a></li>
                                                <li><a href="/KboTv/Legend/List.aspx">레전드 올스타 동영상</a></li>
                                                <li><a href="/KboTv/Event/List.aspx">KBO 영상</a></li>
                                                <li><a href="/KboTv/VeteranInterview/List.aspx">야구 원로 인터뷰</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu09">
                                            <h4>게시판</h4>
                                            <ul>
                                                <li><a href="/Board/Notice/List.aspx">NOTICE</a></li>
                                                <li><a href="/Board/Faq/List.aspx">자주하는질문</a></li>
                                                <li><a href="/Board/Qna/List.aspx">Q&amp;A게시판</a></li>
                                                <li><a href="/Board/Free/List.aspx">자유게시판</a></li>
                                                <li><a href="/Board/Committee/List.aspx">기록위원회 Q&amp;A게시판</a></li>
                                                <li><a href="/Board/Committee/RecordBook.aspx">기록교재 신청하기</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu10 ">
                                            <h4>자료실</h4>
                                            <ul>
                                                <li><a href="/Reference/Etc/Amazing.aspx">진기록 명기록</a></li>
                                                <li><a href="/Reference/Ebook/Ebook2017.aspx">E-BOOK</a></li>
                                                <li><a href="/Reference/OnlineLecture/List.aspx">초급자용 사이버야구교실</a></li>
                                                <li><a href="/Reference/Etc/GameRule.aspx">경기규칙</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu11">
                                            <h4>ABOUT KBO</h4>
                                            <ul>
                                                <li><a href="/About/Etc/TeamInfo.aspx">구단 소개</a></li>
                                                <li><a href="/About/Group/Activity.aspx">조직 및 활동</a></li>
                                                <li><a href="/Event/Etc/OfficialChannel.aspx">KBO 공식 채널</a></li>
                                                <li><a href="/About/Etc/KboCi.aspx">KBO CI / 캐치프레이즈</a></li>
                                                <li><a href="/About/Etc/Map.aspx">약도 / 관람료</a></li>
                                                <li><a href="/About/Committee/OrganizationChart.aspx">기록위원회</a></li>
                                                <li><a href="/About/Etc/CleanCenter1.aspx">클린베이스볼센터</a></li>
                                            </ul>
                                        </div>
                                        <div class="lnb-all menu12">
                                            <h4>주요 사업/행사</h4>
                                            <ul>
                                                <li><a href="/Event/Etc/TimeLine.aspx">2017 타임라인</a></li>
                                                <li><a href="/Event/RecordClass/Professional.aspx">기록강습회</a></li>
                                                <li><a href="/Event/Etc/WinterMeeting.aspx">KBO 윈터미팅</a></li>
                                                <li><a href="/Event/Etc/Safe.aspx">SAFE 캠페인</a></li>
                                                <li><a href="/Event/Contribution/Service2016.aspx">KBO 사회공헌 사업</a></li>
                                                <li><a href="/Event/DreamSave/2017/List.aspx">Dream Save</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-close">
                                    <a href="javascript:;">
                                        <img src="//image.koreabaseball.com/resources/images/common/btn_close_fff.png" alt="">
                                        <span>닫기</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- // header -->
        <hr>
        <!-- container -->


        <section id="container">
            <div class="wrapping container-wrap">
                <aside>
                    <h3>순위</h3>
                    <ul id="snb">
                        <li class="on"><a href="/TeamRank/TeamRank.aspx" id="lnb01">팀순위</a></li>
                        <li><a href="/TeamRank/GraphDaily.aspx" id="lnb02">팀별 순위변동 그래프</a></li>
                    </ul>

                </aside>

                <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ScriptManager', 'mainForm', ['tctl00$ctl00$ctl00$cphContents$cphContents$cphContents$udpRecord','cphContents_cphContents_cphContents_udpRecord'], ['ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnCalendarSelect','cphContents_cphContents_cphContents_btnCalendarSelect','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnPreDate','cphContents_cphContents_cphContents_btnPreDate','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnNextDate','cphContents_cphContents_cphContents_btnNextDate','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlYear','cphContents_cphContents_cphContents_ddlYear'], [], 90, 'ctl00$ctl00$ctl00');
                    //]]>
                </script>


                <div id="contents">
                    <div class="location">
                        <span class="home"><a href="/Default.aspx"><img src="/resources/images/common/ico_home.gif" alt="홈으로"></a></span> &gt;
                        <span class="depth1"><a href="/TeamRank/TeamRank.aspx">순위</a></span> &gt;
                        <span class="depth2">팀순위</span>
                    </div>
                    <h4 class="tit-page">팀순위</h4>

                    <!-- 서브컨텐츠 영역 -->
                    <div id="cphContents_cphContents_cphContents_udpRecord">
                        <div class="yeardate">
                            <span class="date_prev"><input type="image" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnPreDate" id="cphContents_cphContents_cphContents_btnPreDate" src="http://image.koreabaseball.com/client/images/common/date_prev.jpg" alt="이전날짜"></span>
                            <span class="date"><span id="cphContents_cphContents_cphContents_lblSearchDateTitle">2017.04.16(일)</span></span>
                            <span><input name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$txtCanlendar" type="text" id="cphContents_cphContents_cphContents_txtCanlendar" class="calendar blind02 hasDatepicker"><img class="ui-datepicker-trigger" src="http://image.koreabaseball.com/client/images/common/calendar.jpg" alt="Select date" title="Select date"></span>
                            <span class="date_next"><input type="image" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnNextDate" id="cphContents_cphContents_cphContents_btnNextDate" src="http://image.koreabaseball.com/client/images/common/date_next.jpg" alt="다음날짜"></span>
                        </div>

                        <div class="compare mb25">
                            <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlYear" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlYear\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlYear" class="select01">
                                <option selected="selected" value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>

                            </select>
                            <span class="exp2"><strong>&nbsp;년&nbsp;<span class="color_01">04</span>월<span class="color_01">16</span>일</strong> (2017년 04월16일 기준)</span>
                        </div>


                        <table summary="순위, 팀명,승,패,무,승률,승차,최근10경기,연속,홈,방문" class="tData">
                            <colgroup>
                                <col width="76">
                                <col width="100">
                                <col width="40">
                                <col width="40">
                                <col width="40">
                                <col width="60">
                                <col width="60">
                                <col width="100">
                                <col width="50">
                                <col width="60">
                                <col width="60">
                            </colgroup>
                            <thead>
                            <tr>
                                <th style="border-left-width: 0px;">순위</th>
                                <th>팀명</th>
                                <th>승</th>
                                <th>패</th>
                                <th>무</th>
                                <th>승률</th>
                                <th>게임차</th>
                                <th>최근10경기</th>
                                <th>연속</th>
                                <th>홈</th>
                                <th style="border-right-width: 0px;">방문</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td style="border-left-width: 0px;">1</td>
                                <td>KIA</td>
                                <td>11</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0.786</td>
                                <td>0</td>
                                <td>8승0무2패</td>
                                <td>5승</td>
                                <td>7-0-1</td>
                                <td style="border-right-width: 0px;">4-0-2</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">2</td>
                                <td>롯데</td>
                                <td>9</td>
                                <td>5</td>
                                <td>0</td>
                                <td>0.643</td>
                                <td>2</td>
                                <td>6승0무4패</td>
                                <td>1패</td>
                                <td>6-0-2</td>
                                <td style="border-right-width: 0px;">3-0-3</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">2</td>
                                <td>kt</td>
                                <td>9</td>
                                <td>5</td>
                                <td>0</td>
                                <td>0.643</td>
                                <td>2</td>
                                <td>6승0무4패</td>
                                <td>1패</td>
                                <td>4-0-1</td>
                                <td style="border-right-width: 0px;">5-0-4</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">4</td>
                                <td>LG</td>
                                <td>8</td>
                                <td>6</td>
                                <td>0</td>
                                <td>0.571</td>
                                <td>3</td>
                                <td>4승0무6패</td>
                                <td>1승</td>
                                <td>4-0-1</td>
                                <td style="border-right-width: 0px;">4-0-5</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">5</td>
                                <td>NC</td>
                                <td>7</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0.500</td>
                                <td>4</td>
                                <td>6승0무4패</td>
                                <td>1승</td>
                                <td>5-0-4</td>
                                <td style="border-right-width: 0px;">2-0-3</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">5</td>
                                <td>SK</td>
                                <td>7</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0.500</td>
                                <td>4</td>
                                <td>7승0무3패</td>
                                <td>5승</td>
                                <td>4-0-5</td>
                                <td style="border-right-width: 0px;">3-0-2</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">7</td>
                                <td>두산</td>
                                <td>6</td>
                                <td>8</td>
                                <td>0</td>
                                <td>0.429</td>
                                <td>5</td>
                                <td>3승0무7패</td>
                                <td>1패</td>
                                <td>3-0-6</td>
                                <td style="border-right-width: 0px;">3-0-2</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">8</td>
                                <td>넥센</td>
                                <td>5</td>
                                <td>9</td>
                                <td>0</td>
                                <td>0.357</td>
                                <td>6</td>
                                <td>5승0무5패</td>
                                <td>4패</td>
                                <td>2-0-4</td>
                                <td style="border-right-width: 0px;">3-0-5</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">8</td>
                                <td>한화</td>
                                <td>5</td>
                                <td>9</td>
                                <td>0</td>
                                <td>0.357</td>
                                <td>6</td>
                                <td>3승0무7패</td>
                                <td>4패</td>
                                <td>1-0-4</td>
                                <td style="border-right-width: 0px;">4-0-5</td>
                            </tr>

                            <tr>
                                <td style="border-left-width: 0px;">10</td>
                                <td>삼성</td>
                                <td>3</td>
                                <td>11</td>
                                <td>0</td>
                                <td>0.214</td>
                                <td>8</td>
                                <td>2승0무8패</td>
                                <td>1승</td>
                                <td>2-0-4</td>
                                <td style="border-right-width: 0px;">1-0-7</td>
                            </tr>

                            </tbody>
                        </table>



                        <div class="winalose mb20"><span class="bul_history">팀간 승패표</span><span class="stand"><span id="cphContents_cphContents_cphContents_lblSearchDate">2017년 04월 16일 기준</span></span></div>
                        <table summary="팀간승패표" class="tData">
                            <colgroup>
                                <col width="auto;">
                            </colgroup>
                            <thead>
                            <tr><th scope="col" style="width: 35px; border-left-width: 0px;">팀명</th><th scope="col">두산<br>(승-패-무)</th><th scope="col">NC<br>(승-패-무)</th><th scope="col">넥센<br>(승-패-무)</th><th scope="col">LG<br>(승-패-무)</th><th scope="col">KIA<br>(승-패-무)</th><th scope="col">SK<br>(승-패-무)</th><th scope="col">한화<br>(승-패-무)</th><th scope="col">롯데<br>(승-패-무)</th><th scope="col">삼성<br>(승-패-무)</th><th scope="col">kt<br>(승-패-무)</th><th scope="col" style="border-right-width: 0px;">합계</th></tr>
                            </thead>
                            <tbody>
                            <tr><td title="팀명" style="border-left-width: 0px;">두산</td><td>■</td><td>2-1-0</td><td>0-3-0</td><td>0-0-0</td><td>1-2-0</td><td>0-0-0</td><td>2-1-0</td><td>0-0-0</td><td>0-0-0</td><td>1-1-0</td><td title="합계" style="border-right-width: 0px;">6-8-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">NC</td><td>1-2-0</td><td>■</td><td>0-0-0</td><td>3-0-0</td><td>0-0-0</td><td>1-2-0</td><td>1-1-0</td><td>1-2-0</td><td>0-0-0</td><td>0-0-0</td><td title="합계" style="border-right-width: 0px;">7-7-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">넥센</td><td>3-0-0</td><td>0-0-0</td><td>■</td><td>0-3-0</td><td>0-3-0</td><td>0-0-0</td><td>0-0-0</td><td>0-2-0</td><td>0-0-0</td><td>2-1-0</td><td title="합계" style="border-right-width: 0px;">5-9-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">LG</td><td>0-0-0</td><td>0-3-0</td><td>3-0-0</td><td>■</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>1-2-0</td><td>2-0-0</td><td>2-1-0</td><td title="합계" style="border-right-width: 0px;">8-6-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">KIA</td><td>2-1-0</td><td>0-0-0</td><td>3-0-0</td><td>0-0-0</td><td>■</td><td>2-0-0</td><td>2-1-0</td><td>0-0-0</td><td>2-1-0</td><td>0-0-0</td><td title="합계" style="border-right-width: 0px;">11-3-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">SK</td><td>0-0-0</td><td>2-1-0</td><td>0-0-0</td><td>0-0-0</td><td>0-2-0</td><td>■</td><td>3-0-0</td><td>2-1-0</td><td>0-0-0</td><td>0-3-0</td><td title="합계" style="border-right-width: 0px;">7-7-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">한화</td><td>1-2-0</td><td>1-1-0</td><td>0-0-0</td><td>0-0-0</td><td>1-2-0</td><td>0-3-0</td><td>■</td><td>0-0-0</td><td>2-1-0</td><td>0-0-0</td><td title="합계" style="border-right-width: 0px;">5-9-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">롯데</td><td>0-0-0</td><td>2-1-0</td><td>2-0-0</td><td>2-1-0</td><td>0-0-0</td><td>1-2-0</td><td>0-0-0</td><td>■</td><td>2-1-0</td><td>0-0-0</td><td title="합계" style="border-right-width: 0px;">9-5-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">삼성</td><td>0-0-0</td><td>0-0-0</td><td>0-0-0</td><td>0-2-0</td><td>1-2-0</td><td>0-0-0</td><td>1-2-0</td><td>1-2-0</td><td>■</td><td>0-3-0</td><td title="합계" style="border-right-width: 0px;">3-11-0</td></tr><tr><td title="팀명" style="border-left-width: 0px;">kt</td><td>1-1-0</td><td>0-0-0</td><td>1-2-0</td><td>1-2-0</td><td>0-0-0</td><td>3-0-0</td><td>0-0-0</td><td>0-0-0</td><td>3-0-0</td><td>■</td><td title="합계" style="border-right-width: 0px;">9-5-0</td></tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfSearchYear" id="cphContents_cphContents_cphContents_hfSearchYear" value="2017">
                        <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfSearchDate" id="cphContents_cphContents_cphContents_hfSearchDate" value="20170416">
                        <input type="submit" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnCalendarSelect" value="" id="cphContents_cphContents_cphContents_btnCalendarSelect" style="display:none;">
                    </div>
                </div>

            </div>
        </section>


        <!-- // container -->
        <hr>
        <!-- footer -->
        <footer>
            <div id="fnb">
                <div class="wrapping fnb-wrap">
                    <ul class="fnb-list">
                        <li class="privacy"><a href="/Etc/Privacy.aspx">개인정보보호정책</a></li>
                        <li><a href="/Schedule/ScoreBoard.aspx">문자중계</a></li>
                        <li><a href="/Board/Faq/List.aspx">고객질문</a></li>
                        <li><a href="/Etc/SiteMap.aspx">사이트맵</a></li>

                    </ul>
                    <div class="btn-kbo"><a href="/About/Etc/TeamInfo.aspx">KBO 리그 구단소개</a></div>
                </div>
            </div>
            <div id="kboInfo" class="wrapping">
                <h2><a href="/Etc/PressRelease.aspx"><img src="//image.koreabaseball.com/resources/images/common/h2_logo.png" alt="KBO"></a></h2>
                <address class="kbo-info">
                    <div class="address01">
                        <p>(사)한국야구위원회</p>
                        <p>02) 3460-4600</p>
                        <p>서울시 강남구 강남대로 278</p>
                    </div>

                </address>
                <div class="copyright">
                    <span>본 사이트는 스포츠투아이㈜가 KBO 리그 팬을 위해 운영하는 KBO 공식 사이트입니다. </span><br>
                    <span>Copyrightⓒ KBO, All Rights Reserved.</span>
                </div>
                <div class="certification">
                    <img src="//image.koreabaseball.com/resources/images/main/img_certification.png" alt="w3c xhtml 3.0, Verisign">
                </div>
            </div>
        </footer>
        <!-- // footer -->
    </div>
    <!-- // wrap -->
    <span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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ciAvPijsirkt7YyoLeustCk8L3RoPjx0aCBzY29wZT0iY29sIj5rdDxiciAvPijsirkt7YyoLeustCk8L3RoPjx0aCBzY29wZT0iY29sIj7tlanqs4Q8L3RoPjwvdHI+ZAIXDxYCHwAF+w88dHI+PHRkIHRpdGxlPSLtjIDrqoUiPuuRkOyCsDwvdGQ+PHRkPuKWoDwvdGQ+PHRkPjItMS0wPC90ZD48dGQ+MC0zLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjEtMi0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4yLTEtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4xLTEtMDwvdGQ+PHRkIHRpdGxlPSLtlanqs4QiPjYtOC0wPC90ZD48L3RyPjx0cj48dGQgdGl0bGU9Iu2MgOuqhSI+TkM8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPuKWoDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+My0wLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjEtMi0wPC90ZD48dGQ+MS0xLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZCB0aXRsZT0i7ZWp6rOEIj43LTctMDwvdGQ+PC90cj48dHI+PHRkIHRpdGxlPSLtjIDrqoUiPuuEpeyEvDwvdGQ+PHRkPjMtMC0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD7ilqA8L3RkPjx0ZD4wLTMtMDwvdGQ+PHRkPjAtMy0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMi0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4yLTEtMDwvdGQ+PHRkIHRpdGxlPSLtlanqs4QiPjUtOS0wPC90ZD48L3RyPjx0cj48dGQgdGl0bGU9Iu2MgOuqhSI+TEc8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMy0wPC90ZD48dGQ+My0wLTA8L3RkPjx0ZD7ilqA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjItMC0wPC90ZD48dGQ+Mi0xLTA8L3RkPjx0ZCB0aXRsZT0i7ZWp6rOEIj44LTYtMDwvdGQ+PC90cj48dHI+PHRkIHRpdGxlPSLtjIDrqoUiPktJQTwvdGQ+PHRkPjItMS0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4zLTAtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+4pagPC90ZD48dGQ+Mi0wLTA8L3RkPjx0ZD4yLTEtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+Mi0xLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkIHRpdGxlPSLtlanqs4QiPjExLTMtMDwvdGQ+PC90cj48dHI+PHRkIHRpdGxlPSLtjIDrqoUiPlNLPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4yLTEtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4wLTItMDwvdGQ+PHRkPuKWoDwvdGQ+PHRkPjMtMC0wPC90ZD48dGQ+Mi0xLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMy0wPC90ZD48dGQgdGl0bGU9Iu2VqeqzhCI+Ny03LTA8L3RkPjwvdHI+PHRyPjx0ZCB0aXRsZT0i7YyA66qFIj7tlZztmZQ8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjEtMS0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjEtMi0wPC90ZD48dGQ+MC0zLTA8L3RkPjx0ZD7ilqA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjItMS0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZCB0aXRsZT0i7ZWp6rOEIj41LTktMDwvdGQ+PC90cj48dHI+PHRkIHRpdGxlPSLtjIDrqoUiPuuhr+uNsDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+Mi0xLTA8L3RkPjx0ZD4yLTAtMDwvdGQ+PHRkPjItMS0wPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+4pagPC90ZD48dGQ+Mi0xLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkIHRpdGxlPSLtlanqs4QiPjktNS0wPC90ZD48L3RyPjx0cj48dGQgdGl0bGU9Iu2MgOuqhSI+7IK87ISxPC90ZD48dGQ+MC0wLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MC0yLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MS0yLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPuKWoDwvdGQ+PHRkPjAtMy0wPC90ZD48dGQgdGl0bGU9Iu2VqeqzhCI+My0xMS0wPC90ZD48L3RyPjx0cj48dGQgdGl0bGU9Iu2MgOuqhSI+a3Q8L3RkPjx0ZD4xLTEtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+MS0yLTA8L3RkPjx0ZD4xLTItMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+My0wLTA8L3RkPjx0ZD4wLTAtMDwvdGQ+PHRkPjAtMC0wPC90ZD48dGQ+My0wLTA8L3RkPjx0ZD7ilqA8L3RkPjx0ZCB0aXRsZT0i7ZWp6rOEIj45LTUtMDwvdGQ+PC90cj5kGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYCBUBjdGwwMCRjdGwwMCRjdGwwMCRjcGhDb250ZW50cyRjcGhDb250ZW50cyRjcGhDb250ZW50cyRidG5QcmVEYXRlBUFjdGwwMCRjdGwwMCRjdGwwMCRjcGhDb250ZW50cyRjcGhDb250ZW50cyRjcGhDb250ZW50cyRidG5OZXh0RGF0ZaAakOwcxm5E1FJ1+yoVNoFINNfv2+Wv+449wxFEszEJ"></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="93092036"></span><span style="display: none !important;"><input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdACwsRDGpTVC3WbeoMU7f01uVlEwcu7CwxNIMjgoCNV+DoBAiipVFK+fCGA3mzDvEl0/sjxNag5fxtp9v/XJH+KxyFp7a/Svk45RiYA1mxXjsDBJeSK4t87D8ElDy52WQ4q5/+l7TuhQZMGKb70J7xdLSIpcF2qQZfhKUTgdHxcOjwPhv8mNfKy0Mo6WSFvZiNUaed/oAPVECaJ/WNCpISEMBkRyHYmVvJcdI/+E3+IS+0GgGF7bFVQPCqErkemcSjpYqPoz/qMQZZMBZybo6qTvlFEsxRj0CyNcnNz2ZlCm8G2tWHy/7v6MH/OXtwjNHTrKgiwFp55vGqHE3W5mFsIFPxYHM16BLxM+iSOFYgmINa5Ua/BvHqc0QmdKs5cyRsKXDAZwGml3N5rvi4VW7QqgvwSQh+1TUoB4OtNEpraO9nzKcmVGf3irAve0vKMdIyhiKRL8EQsgTIg0du8Tv9QP8SbqB3S24yZR/rP2wgMHlQYJA7UUV/9oCONOZ+B8IEKw00cQk2yzTgR0bCJGPJdgIYagQFDJgkcyKyJ5AFR7CuoecCfNjXWYl+SA+f5zwpZT7UepHOGUqA4KOaxM1sBqVpvik/niWlo+8mML/0QaYSV30EfLjHaMWbyA6SkPyQ1bK86ZOezzn2RMs7IXQaYXkXMQwy0n8c924FwSNSPGcsrQzJbx3g9XmIEmJiklH5P6Q6hBhwaVczKCxuQJ/ofZCUn+zWv2OFEf0Z3NywbGck75xk3B22YMgM21ASyTvrud20TZRRkOAw27jHRXDylONTSO5rQq9K87+Ld1CxRSRBVf6opj/rbZjs1f8SVEjVYkJHLntrNoANtnl/f+KX0/8MuebeyxSN0y5FRoeQZc765g1LVqjPJ/YcXQaadyvtN0e0OpQfhxR5FmU2jfEHnpq0+3SNFh3Hpdaa49BEvunoDqIJsdFJx4XEls5RUp4NeAbmxW/fNyki5xkCGjd1g5l"></span></form>






<script type="text/javascript">
    currentLnb("01");
    var request = Sys.WebForms.PageRequestManager.getInstance();
    request.add_pageLoaded(PageLoadedHandler);

    function PageLoadedHandler(sender, args) {
        $(".tData th:first-child, .tData td:first-child").css("border-left", "0");
        $(".tData th:last-child,.tData td:last-child").css("border-right", "0");

        $(function () {
            $(".calendar").datepicker({
                showOn: "button",
                buttonImage: "http://image.koreabaseball.com/client/images/common/calendar.jpg",
                buttonImageOnly: true,
                buttonText: "Select date",
                dateFormat: 'yymmdd',
                defaultDate: $("#cphContents_cphContents_cphContents_hfSearchDate").val(),
                maxDate: 'today',
                beforeShow: function (textbox, instance) {
                    instance.dpDiv.css({
                        marginTop: '23px',
                        marginLeft: '-163px'
                    });
                    setTimeout(function () {
                        $('#ui-datepicker-div').css({ 'z-index': 9999 });
                    })
                },
                onSelect: function (selectedDate) {
                    $("#cphContents_cphContents_cphContents_hfSearchDate").val(selectedDate);
                    __doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnCalendarSelect','')
                }
            });
        });
    }
</script>



<script type="text/javascript">
    $(document).ready(function () {
        // 선수 검색
        $(document).on("click", "#btnTopPlayerSearch", function (e) {
            getPlayerSearch();
            e.preventDefault();
        });

        // 선수 검색 엔터
        $(document).on("keypress", "#txtTopPlayerWord", function (e) {
            if (event.keyCode == 13) {
                getPlayerSearch();
                e.preventDefault();
            }
        });

        //// 선수 검색 마우스 아웃
        //$("body").click(function (e) {
        //    var container = $("#player_search_area");

        //    if (container.css("display") == "block") {
        //        if (!container.has(e.target).length) {
        //            container.hide();
        //        }
        //    }
        //});
    });

    // 선수 검색
    function getPlayerSearch() {
        if ($("#txtTopPlayerWord").val() == "") {
            alert("선수명은 필수 입니다.");
            $("#txtTopPlayerWord").focus();
            return false;
        } else {
            //var searchWord = encodeURI($("#txtTopPlayerWord").val());

            //if (searchWord != "") {
            //    location.href = "/Player/Search.aspx?searchWord=" + searchWord;
            //}
            var request = $.ajax({
                type: "post"
                , url: "/ws/Controls.asmx/GetSearchPlayer"
                , dataType: "json"
                , data: {
                    name: $("#txtTopPlayerWord").val()
                }
                , error: ajaxFailed
                , async: true
            });

            request.done(function (data) {
                if (data.code == "100") {
                    var container = $(".search-result");
                    container.children().remove();

                    if (data.now.length > 0 || data.retire.length > 0) {
                        if (data.now.length > 0) {
                            container.append($("<h4>등록 선수</h4>"));

                            var div = $("<div class='active' />");
                            div.children().remove();

                            setPlayerDiv(data.now, div, true);

                            container.append(div);
                        }

                        if (data.retire.length > 0) {
                            container.append($("<h4>역대 선수</h4>"));

                            var div = $("<div class='retire'/>");
                            div.children().remove();

                            setPlayerDiv(data.retire, div, false);

                            container.append(div);
                        }

                        //container.append($(String.format("<p><a href='/Player/Search.aspx?searchWord={0}''>'{0}' 검색결과 모두 보기</a></p>", $("#txtTopPlayerWord").val())));
                        container.append($("<p><a href='/Player/Search.aspx?searchWord=" + $("#txtTopPlayerWord").val() + "''>'" + $("#txtTopPlayerWord").val() + "' 검색결과 모두 보기</a></p>"));
                    } else {
                        container.append($("<p class='null'>검색 결과가 없습니다.</p>"));
                    }

                    container.show();
                }
            });
        }
    }

    // 선수 검색 div
    function setPlayerDiv(list, div, isActive) {
        $.each(list, function (index, player) {
            var aLink = $("<a />");
            aLink.attr("href", player["P_LINK"]);

            var dl = $("<dl />");
            var dt = $("<dt />");
            var backNo = "";

            if (isActive) {
                //backNo = String.format("No.{0}", player["BACK_NO"]);
                backNo = "No." + player["BACK_NO"];
            }

            //dt.text(String.format("{0} {1}", player["P_NM"], backNo));
            dt.text(player["P_NM"] + " " + backNo);
            dl.append(dt);

            var dd = $("<dd />");
            //dd.text(String.format("{0} {1}({2})", player["T_NM"], player["POS_NO"], player["P_TYPE"]));
            dd.text(player["T_NM"] + " " + player["POS_NO"] + "(" + player["P_TYPE"] + ")");
            dl.append(dd);

            var ddImg = $("<dd class='btn-arrow'><img src='//image.koreabaseball.com/resources/images/common/btn_arrow_search.png' alt='' /></dd>");
            dl.append(ddImg);

            aLink.append(dl);
            div.append(aLink);
        });
    }
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body>