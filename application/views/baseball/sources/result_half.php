<body>
<form method="post" action="./ScoreBoard.aspx" id="mainForm">
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
                                    <li><a href="/Record/Ranking/Week.aspx">주간/월간 랭킹</a></li>
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
                        <li>
                            <a href="/Futures/Schedule/GameList.aspx">퓨처스리그</a>
                            <div class="lnb-sub">
                                <ul class="lnb05">
                                    <li><a href="/Futures/Schedule/GameList.aspx">경기일정/결과</a></li>
                                    <li><a href="/Futures/TeamRank/North.aspx">팀순위</a></li>
                                    <li><a href="/Futures/Main/Main.aspx">TOP5</a></li>
                                    <li><a href="/Futures/Player/Hitter.aspx">기록실</a></li>
                                    <li><a href="/Futures/InfoGraphic/List.aspx">인포그래픽</a></li>
                                    <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                    <li><a href="/Futures/GameSketch/List.aspx">경기스케치</a></li>
                                    <li><a href="/Futures/CardNews/List.aspx">카드뉴스</a></li>
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
                                                <li><a href="/Record/Ranking/Week.aspx">주간/월간 랭킹</a></li>
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
                                                <li><a href="/Futures/CardNews/List.aspx">카드뉴스</a></li>
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
                    <h3>일정/결과</h3>
                    <ul id="snb">
                        <li><a href="/Schedule/GameCenter/Main.aspx" id="lnb01">게임센터</a></li>
                        <li class="on"><a href="/Schedule/ScoreBoard.aspx" id="lnb02">스코어보드</a></li>
                        <li><a href="/Schedule/Schedule.aspx" id="lnb03">경기일정/결과</a></li>
                        <li><a href="/Schedule/CalendarSchedule.aspx" id="lnb04">월별일정/결과</a></li>
                        <li><a href="/Schedule/International/Wbc/Main2017.aspx" id="lnb05">국제대회</a></li>
                    </ul>

                </aside>

                <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$scriptmanager1', 'mainForm', ['tctl00$ctl00$ctl00$cphContents$cphContents$cphContents$udpRecord','cphContents_cphContents_cphContents_udpRecord'], ['ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnPreDate','cphContents_cphContents_cphContents_btnPreDate','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnNextDate','cphContents_cphContents_cphContents_btnNextDate','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnCalendarSelect','cphContents_cphContents_cphContents_btnCalendarSelect'], [], 90, 'ctl00$ctl00$ctl00');
                    //]]>
                </script>


                <div id="contents">
                    <div class="location">
                        <span class="home"><a href="/Default.aspx"><img src="/resources/images/common/ico_home.gif" alt="홈으로"></a></span> &gt;
                        <span class="depth1"><a href="/Schedule/GameCenter/Main.aspx">일정/결과</a></span> &gt;
                        <span class="depth2">스코어보드</span>
                    </div>
                    <h4 class="tit-page">스코어보드</h4>

                    <!-- 서브컨텐츠 영역 -->
                    <div id="cphContents_cphContents_cphContents_udpRecord">
                        <div class="date-select">
                            <ul class="date">
                                <li class="prev"><a id="cphContents_cphContents_cphContents_btnPreDate" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnPreDate','')"><img src="/resources/images/common/btn_date_prev.png" alt="이전날짜"></a></li>
                                <li class="today"><span id="cphContents_cphContents_cphContents_lblGameDate" class="date-txt">2017.03.31(금)</span><input type="text" id="txtGameDate" style="display:none;" class="hasDatepicker"><img class="ui-datepicker-trigger" src="/resources/images/common/btn_ico_calendar.png" alt="..." title="..."></li>
                                <li class="next"><a id="cphContents_cphContents_cphContents_btnNextDate" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$btnNextDate','')"><img src="/resources/images/common/btn_date_next.png" alt="다음날짜"></a></li>
                            </ul>
                        </div>


                        <!-- smsScore -->

                        <div class="smsScore">
                            <div class="score_wrap">
                                <!-- leftTeam -->
                                <p class="leftTeam">
                                    <span class="team"><img src="http://image.koreabaseball.com/client//images/common/emblem/emblem_LG.png" alt=""></span>
                                    <strong class="teamT">LG</strong>
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblAwayTeamScore_0">2</span></em>
                                </p>
                                <strong class="flag"><span id="cphContents_cphContents_cphContents_rptGameList_lblGameState_0">경기종료</span></strong>
                                <!-- //leftTeam -->
                                <!-- rightTeam -->
                                <p class="rightTeam">
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblHomeTeamScore_0">1</span></em>
                                    <strong class="teamT">넥센</strong>
                                    <span class="team"><img src="http://image.koreabaseball.com/client/images/common/emblem/emblem_WO.png" alt=""></span>
                                </p>
                                <!-- //rightTeam -->
                                <!-- base -->

                                <!-- //base -->
                                <!-- win -->
                                <p class="win"><span>승: 소사</span><span>세: 정찬헌</span><span>패: 밴헤켄</span></p>
                                <!-- //win -->
                            </div>
                            <!-- btn -->
                            <div class="btnSms">
                                <a href="#" onclick="javascript:alert('로그인을 하셔야 문자중계를 보실 수 있습니다')"><img src="http://image.koreabaseball.com/client/images/sms/btn_cast.jpg" alt="문자중계보기"></a>
                                <a href="/Schedule/GameCenter/Main.aspx?gameDate=20170331&amp;gameId=20170331LGWO0&amp;section=REVIEW"><img src="http://image.koreabaseball.com/client/images/sms/btn_boxscore.jpg" alt="리뷰"></a>
                            </div>
                            <!-- //btn -->

                            <!-- place -->
                            <p class="place">고척 <span>19:00</span></p>
                            <!-- //place -->

                            <!-- score -->
                            <table class="tScore">
                                <caption>경기현황</caption>
                                <colgroup>
                                    <col width="90">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">TEAM</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>

                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>

                                    <th scope="col">11</th>
                                    <th scope="col">12</th>



                                    <th scope="col">R</th>
                                    <th scope="col">H</th>
                                    <th scope="col">E</th>
                                    <th scope="col">B</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">LG</th>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">2</td>
                                    <td class="hit">4</td>
                                    <td class="hit">1</td>
                                    <td class="hit">3</td>
                                </tr>

                                <tr>
                                    <th scope="row">넥센</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">1</td>
                                    <td class="hit">5</td>
                                    <td class="hit">1</td>
                                    <td class="hit">4</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="smsScore">
                            <div class="score_wrap">
                                <!-- leftTeam -->
                                <p class="leftTeam">
                                    <span class="team"><img src="http://image.koreabaseball.com/client//images/common/emblem/emblem_HH.png" alt=""></span>
                                    <strong class="teamT">한화</strong>
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblAwayTeamScore_1">0</span></em>
                                </p>
                                <strong class="flag"><span id="cphContents_cphContents_cphContents_rptGameList_lblGameState_1">경기종료</span></strong>
                                <!-- //leftTeam -->
                                <!-- rightTeam -->
                                <p class="rightTeam">
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblHomeTeamScore_1">3</span></em>
                                    <strong class="teamT">두산</strong>
                                    <span class="team"><img src="http://image.koreabaseball.com/client/images/common/emblem/emblem_OB.png" alt=""></span>
                                </p>
                                <!-- //rightTeam -->
                                <!-- base -->

                                <!-- //base -->
                                <!-- win -->
                                <p class="win"><span>승: 니퍼트</span><span>세: 김성배</span><span>패: 비야누에바</span></p>
                                <!-- //win -->
                            </div>
                            <!-- btn -->
                            <div class="btnSms">
                                <a href="#" onclick="javascript:alert('로그인을 하셔야 문자중계를 보실 수 있습니다')"><img src="http://image.koreabaseball.com/client/images/sms/btn_cast.jpg" alt="문자중계보기"></a>
                                <a href="/Schedule/GameCenter/Main.aspx?gameDate=20170331&amp;gameId=20170331HHOB0&amp;section=REVIEW"><img src="http://image.koreabaseball.com/client/images/sms/btn_boxscore.jpg" alt="리뷰"></a>
                            </div>
                            <!-- //btn -->

                            <!-- place -->
                            <p class="place">잠실 <span>19:00</span></p>
                            <!-- //place -->

                            <!-- score -->
                            <table class="tScore">
                                <caption>경기현황</caption>
                                <colgroup>
                                    <col width="90">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">TEAM</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>

                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>

                                    <th scope="col">11</th>
                                    <th scope="col">12</th>



                                    <th scope="col">R</th>
                                    <th scope="col">H</th>
                                    <th scope="col">E</th>
                                    <th scope="col">B</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">한화</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">0</td>
                                    <td class="hit">4</td>
                                    <td class="hit">4</td>
                                    <td class="hit">3</td>
                                </tr>

                                <tr>
                                    <th scope="row">두산</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">3</td>
                                    <td class="hit">4</td>
                                    <td class="hit">1</td>
                                    <td class="hit">4</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="smsScore">
                            <div class="score_wrap">
                                <!-- leftTeam -->
                                <p class="leftTeam">
                                    <span class="team"><img src="http://image.koreabaseball.com/client//images/common/emblem/emblem_KT.png" alt=""></span>
                                    <strong class="teamT">kt</strong>
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblAwayTeamScore_2">3</span></em>
                                </p>
                                <strong class="flag"><span id="cphContents_cphContents_cphContents_rptGameList_lblGameState_2">경기종료</span></strong>
                                <!-- //leftTeam -->
                                <!-- rightTeam -->
                                <p class="rightTeam">
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblHomeTeamScore_2">2</span></em>
                                    <strong class="teamT">SK</strong>
                                    <span class="team"><img src="http://image.koreabaseball.com/client/images/common/emblem/emblem_SK.png" alt=""></span>
                                </p>
                                <!-- //rightTeam -->
                                <!-- base -->

                                <!-- //base -->
                                <!-- win -->
                                <p class="win"><span>승: 로치</span><span>세: 김재윤</span><span>패: 켈리</span></p>
                                <!-- //win -->
                            </div>
                            <!-- btn -->
                            <div class="btnSms">
                                <a href="#" onclick="javascript:alert('로그인을 하셔야 문자중계를 보실 수 있습니다')"><img src="http://image.koreabaseball.com/client/images/sms/btn_cast.jpg" alt="문자중계보기"></a>
                                <a href="/Schedule/GameCenter/Main.aspx?gameDate=20170331&amp;gameId=20170331KTSK0&amp;section=REVIEW"><img src="http://image.koreabaseball.com/client/images/sms/btn_boxscore.jpg" alt="리뷰"></a>
                            </div>
                            <!-- //btn -->

                            <!-- place -->
                            <p class="place">문학 <span>19:00</span></p>
                            <!-- //place -->

                            <!-- score -->
                            <table class="tScore">
                                <caption>경기현황</caption>
                                <colgroup>
                                    <col width="90">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">TEAM</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>

                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>

                                    <th scope="col">11</th>
                                    <th scope="col">12</th>



                                    <th scope="col">R</th>
                                    <th scope="col">H</th>
                                    <th scope="col">E</th>
                                    <th scope="col">B</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">kt</th>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">3</td>
                                    <td class="hit">9</td>
                                    <td class="hit">1</td>
                                    <td class="hit">2</td>
                                </tr>

                                <tr>
                                    <th scope="row">SK</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>1</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">2</td>
                                    <td class="hit">8</td>
                                    <td class="hit">2</td>
                                    <td class="hit">1</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="smsScore">
                            <div class="score_wrap">
                                <!-- leftTeam -->
                                <p class="leftTeam">
                                    <span class="team"><img src="http://image.koreabaseball.com/client//images/common/emblem/emblem_HT.png" alt=""></span>
                                    <strong class="teamT">KIA</strong>
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblAwayTeamScore_3">7</span></em>
                                </p>
                                <strong class="flag"><span id="cphContents_cphContents_cphContents_rptGameList_lblGameState_3">경기종료</span></strong>
                                <!-- //leftTeam -->
                                <!-- rightTeam -->
                                <p class="rightTeam">
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblHomeTeamScore_3">2</span></em>
                                    <strong class="teamT">삼성</strong>
                                    <span class="team"><img src="http://image.koreabaseball.com/client/images/common/emblem/emblem_SS.png" alt=""></span>
                                </p>
                                <!-- //rightTeam -->
                                <!-- base -->

                                <!-- //base -->
                                <!-- win -->
                                <p class="win"><span>승: 헥터</span><span>패: 페트릭</span></p>
                                <!-- //win -->
                            </div>
                            <!-- btn -->
                            <div class="btnSms">
                                <a href="#" onclick="javascript:alert('로그인을 하셔야 문자중계를 보실 수 있습니다')"><img src="http://image.koreabaseball.com/client/images/sms/btn_cast.jpg" alt="문자중계보기"></a>
                                <a href="/Schedule/GameCenter/Main.aspx?gameDate=20170331&amp;gameId=20170331HTSS0&amp;section=REVIEW"><img src="http://image.koreabaseball.com/client/images/sms/btn_boxscore.jpg" alt="리뷰"></a>
                            </div>
                            <!-- //btn -->

                            <!-- place -->
                            <p class="place">대구 <span>19:00</span></p>
                            <!-- //place -->

                            <!-- score -->
                            <table class="tScore">
                                <caption>경기현황</caption>
                                <colgroup>
                                    <col width="90">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">TEAM</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>

                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>

                                    <th scope="col">11</th>
                                    <th scope="col">12</th>



                                    <th scope="col">R</th>
                                    <th scope="col">H</th>
                                    <th scope="col">E</th>
                                    <th scope="col">B</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">KIA</th>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>1</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">7</td>
                                    <td class="hit">7</td>
                                    <td class="hit">1</td>
                                    <td class="hit">8</td>
                                </tr>

                                <tr>
                                    <th scope="row">삼성</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">2</td>
                                    <td class="hit">7</td>
                                    <td class="hit">1</td>
                                    <td class="hit">1</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="smsScore">
                            <div class="score_wrap">
                                <!-- leftTeam -->
                                <p class="leftTeam">
                                    <span class="team"><img src="http://image.koreabaseball.com/client//images/common/emblem/emblem_LT.png" alt=""></span>
                                    <strong class="teamT">롯데</strong>
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblAwayTeamScore_4">5</span></em>
                                </p>
                                <strong class="flag"><span id="cphContents_cphContents_cphContents_rptGameList_lblGameState_4">경기종료</span></strong>
                                <!-- //leftTeam -->
                                <!-- rightTeam -->
                                <p class="rightTeam">
                                    <em class="score"><span id="cphContents_cphContents_cphContents_rptGameList_lblHomeTeamScore_4">6</span></em>
                                    <strong class="teamT">NC</strong>
                                    <span class="team"><img src="http://image.koreabaseball.com/client/images/common/emblem/emblem_NC.png" alt=""></span>
                                </p>
                                <!-- //rightTeam -->
                                <!-- base -->

                                <!-- //base -->
                                <!-- win -->
                                <p class="win"><span>승: 맨쉽</span><span>세: 임창민</span><span>패: 레일리</span></p>
                                <!-- //win -->
                            </div>
                            <!-- btn -->
                            <div class="btnSms">
                                <a href="#" onclick="javascript:alert('로그인을 하셔야 문자중계를 보실 수 있습니다')"><img src="http://image.koreabaseball.com/client/images/sms/btn_cast.jpg" alt="문자중계보기"></a>
                                <a href="/Schedule/GameCenter/Main.aspx?gameDate=20170331&amp;gameId=20170331LTNC0&amp;section=REVIEW"><img src="http://image.koreabaseball.com/client/images/sms/btn_boxscore.jpg" alt="리뷰"></a>
                            </div>
                            <!-- //btn -->

                            <!-- place -->
                            <p class="place">마산 <span>19:00</span></p>
                            <!-- //place -->

                            <!-- score -->
                            <table class="tScore">
                                <caption>경기현황</caption>
                                <colgroup>
                                    <col width="90">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="35">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                    <col width="40">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th scope="col">TEAM</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col">3</th>
                                    <th scope="col">4</th>
                                    <th scope="col">5</th>

                                    <th scope="col">6</th>
                                    <th scope="col">7</th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>

                                    <th scope="col">11</th>
                                    <th scope="col">12</th>



                                    <th scope="col">R</th>
                                    <th scope="col">H</th>
                                    <th scope="col">E</th>
                                    <th scope="col">B</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th scope="row">롯데</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>

                                    <td>0</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">5</td>
                                    <td class="hit">7</td>
                                    <td class="hit">2</td>
                                    <td class="hit">1</td>
                                </tr>

                                <tr>
                                    <th scope="row">NC</th>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>

                                    <td>3</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>-</td>
                                    <td>-</td>

                                    <td>-</td>
                                    <td>-</td>


                                    <td class="point">6</td>
                                    <td class="hit">11</td>
                                    <td class="hit">2</td>
                                    <td class="hit">6</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- //smsscore -->


                        <!-- score none -->

                        <!-- //score none -->

                        <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfSearchDate" id="cphContents_cphContents_cphContents_hfSearchDate" value="20170331">
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
    <span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="169B9AF4"></span><span style="display: none !important;"><input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAXT20c9CXWykppezaQyfQk9lEwcu7CwxNIMjgoCNV+DoOyPE1qDl/G2n2/9ckf4rHIe0OpQfhxR5FmU2jfEHnpq0+3SNFh3Hpdaa49BEvunoOIx1871qaLLK+rklyu1OsGQJTKjT0JkA5MZ0cRTx6Ig"></span></form>






<script type="text/javascript">
    currentLnb("02");
    var request = Sys.WebForms.PageRequestManager.getInstance();
    request.add_pageLoaded(PageLoadedHandler);

    function PageLoadedHandler(sender, args) {
        $(function () {
            $('#txtGameDate').datepicker({
                dateFormat: 'yymmdd'
                , minDate: '20100306'
                , showOn: "button"
                , buttonImage: "/resources/images/common/btn_ico_calendar.png"
                , buttonImageOnly: true
                , defaultDate: $("#cphContents_cphContents_cphContents_hfSearchDate").val()
                , beforeShow: function (textbox, instance) {
                    instance.dpDiv.css({
                        marginTop: '23px',
                        marginLeft: '-163px'
                    });
                }, onSelect: function (selectedDate) {
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

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="margin-top: 23px; margin-left: -163px; position: absolute; top: 238px; left: 839.8125px; z-index: 1; display: none;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="이전달"><span class="ui-icon ui-icon-circle-triangle-w">이전달</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="다음달"><span class="ui-icon ui-icon-circle-triangle-e">다음달</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">3월(MAR)</span>&nbsp;<span class="ui-datepicker-year">2017</span>년</div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="일">일</span></th><th scope="col"><span title="월">월</span></th><th scope="col"><span title="화">화</span></th><th scope="col"><span title="수">수</span></th><th scope="col"><span title="목">목</span></th><th scope="col"><span title="금">금</span></th><th scope="col" class="ui-datepicker-week-end"><span title="토">토</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">4</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">10</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">11</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">17</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">18</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">25</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></body>