<body>
<form method="post" action="./Basic1.aspx" id="mainForm">
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
                    <h3>기록</h3>
                    <ul id="snb">
                        <li><a href="/Record/Main.aspx" id="lnb01">TOP5</a></li>
                        <li><a href="/Record/Ranking/Week.aspx" id="lnb06">주간/월간 랭킹</a></li>
                        <li class="on"><a href="/Record/Player/HitterBasic/Basic1.aspx" id="lnb02">기록실</a></li>
                        <li><a href="/Record/Etc/HitVsPit.aspx" id="lnb03">투수 vs 타자</a></li>
                        <li><a href="/Record/History/Top/Hitter.aspx" id="lnb04">역대기록실</a></li>
                        <li><a href="/Record/Expectation/WeekList.aspx" id="lnb05">주간/일간 예상 달성기록</a></li>
                    </ul>

                </aside>

                <script type="text/javascript">
                    //<![CDATA[
                    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$smData', 'mainForm', ['tctl00$ctl00$ctl00$cphContents$cphContents$cphContents$udpContent','cphContents_cphContents_cphContents_udpContent'], ['ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','cphContents_cphContents_cphContents_lbtnOrderBy','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason','cphContents_cphContents_cphContents_ddlSeason','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries','cphContents_cphContents_cphContents_ddlSeries','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam','cphContents_cphContents_cphContents_ddlTeam'], [], 90, 'ctl00$ctl00$ctl00');
                    //]]>
                </script>

                <div id="contents" class="content01">
                    <!--sub title & location -->
                    <div class="location">
                        <span class="home"><a href="/Default.aspx"><img src="//image.koreabaseball.com/resources/images/common/ico_home.gif" alt="홈으로"></a></span> &gt;
                        <span class="depth1"><a href="#none">기록</a></span> &gt;
                        <span class="depth2"><a href="#none">기록실</a></span>
                    </div>
                    <h4 class="tit-page">기록실</h4>
                    <!-- // sub title & location -->

                    <div class="sub-content">
                        <div class="tab-depth1">
                            <ul class="tab">
                                <li class="on"><a href="/Record/Player/HitterBasic/Basic1.aspx">선수기록</a></li>
                                <li><a href="/Record/Team/Hitter/Basic1.aspx">팀기록</a></li>
                            </ul>
                            <span class="record_words"><a href="#"><img src="http://image.koreabaseball.com/client/images/record/btn_record_words.png" alt="기록용어"></a></span>
                            <div class="words" id="words">
                            </div>
                        </div>
                        <div class="tab-depth2">
                            <ul class="tab">
                                <li> <a href="/Record/Player/HitterBasic/Basic1.aspx">타자</a></li>
                                <li class="on"> <a href="/Record/Player/PitcherBasic/Basic1.aspx">투수</a></li>

                            </ul>
                        </div>

                        <div id="cphContents_cphContents_cphContents_udpContent">
                            <div class="compare">

                                <div class="styled-select02 mt5 bar01">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason$ddlSeason" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason$ddlSeason\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSeason_ddlSeason" class="select03">
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option selected="selected" value="2017">2017</option>
                                        <option value="9999">전체</option>

                                    </select>
                                </div>
                                <span class="bar">|</span>

                                <div class="styled-select03 mt5" style="width:130px">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries$ddlSeries" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries$ddlSeries\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSeries_ddlSeries" class="select02" style="width:150px;">
                                        <option selected="selected" value="0">KBO 정규시즌</option>
                                        <option value="1">KBO 시범경기</option>
                                        <option value="4">KBO 와일드카드</option>
                                        <option value="3">KBO 준플레이오프</option>
                                        <option value="5">KBO 플레이오프</option>
                                        <option value="7">KBO 한국시리즈</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam$ddlTeam" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam$ddlTeam\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlTeam_ddlTeam" class="select02">
                                        <option selected="selected" value="">팀 선택</option>
                                        <option value="WO">넥센</option>
                                        <option value="OB">두산</option>
                                        <option value="LT">롯데</option>
                                        <option value="SS">삼성</option>
                                        <option value="HH">한화</option>
                                        <option value="HT">KIA</option>
                                        <option value="KT">kt</option>
                                        <option value="LG">LG</option>
                                        <option value="NC">NC</option>
                                        <option value="SK">SK</option>

                                    </select>
                                </div>


                            </div>
                            <h4 class="bul_history"> 투수기록</h4>
                            <div class="row">
                                <div class="tab-depth3">
                                    <ul class="tab">
                                        <li class="on"><a href="/Record/Player/PitcherBasic/Basic1.aspx">기본기록</a></li>

                                    </ul>
                                </div>

                            </div>
                            <div class="record_result">
                                <table class="tData01 tt" cellspacing="0" cellpadding="0" summary="선수 기본기록으로 경기,타석,타수,득점,안타,2루타, 3루타 등을 표시합니다">
                                    <colgroup>
                                        <col width="50">
                                        <col width="80">
                                        <col width="50">
                                        <col width="60">
                                        <col width="40">
                                        <col width="40">
                                        <col width="40">
                                        <col width="40">
                                        <col width="40">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                        <col width="60">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>순위</th>
                                        <th>선수명</th>
                                        <th>팀명</th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('ERA_RT');" title="평균자책점">ERA</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('GAME_CN');" title="경기">G</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('W_CN');" title="승리">W</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('L_CN');" title="패배">L</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('SV_CN');" title="세이브">SV</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HOLD_CN');" title="홀드">HLD</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('WRA_RT');" title="승률">WPCT</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('INN2_CN');" title="이닝">IP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HIT_CN');" title="피안타">H</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HR_CN');" title="홈런">HR</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('BB_CN');" title="볼넷">BB</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('HP_CN');" title="사구">HBP</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('KK_CN');" title="삼진">SO</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('R_CN');" title="실점">R</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('ER_CN');" title="자책점">ER</a></th>
                                        <th><a onmouseenter="tooltip(this)" onmouseout="hideTip()" href="javascript:sort('WHIP_RT');" title="이닝당 출루허용률">WHIP</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=78352">임창민</a></td>
                                        <td>NC</td>
                                        <td data-id="ERA_RT">1.02</td>
                                        <td data-id="GAME_CN">16</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">11</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">17 2/3</td>
                                        <td data-id="HIT_CN">10</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">19</td>
                                        <td data-id="R_CN">2</td>
                                        <td data-id="ER_CN">2</td>
                                        <td data-id="WHIP_RT">0.74</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76350">김세현</a></td>
                                        <td>넥센</td>
                                        <td data-id="ERA_RT">5.84</td>
                                        <td data-id="GAME_CN">11</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">8</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">12 1/3</td>
                                        <td data-id="HIT_CN">15</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="R_CN">8</td>
                                        <td data-id="ER_CN">8</td>
                                        <td data-id="WHIP_RT">1.62</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=65062">김재윤</a></td>
                                        <td>kt</td>
                                        <td data-id="ERA_RT">0.00</td>
                                        <td data-id="GAME_CN">12</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">8</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">10 1/3</td>
                                        <td data-id="HIT_CN">4</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">1</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="R_CN">0</td>
                                        <td data-id="ER_CN">0</td>
                                        <td data-id="WHIP_RT">0.48</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60140">신정락</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">2.08</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">7</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">13</td>
                                        <td data-id="HIT_CN">11</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">3</td>
                                        <td data-id="WHIP_RT">1.31</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=75321">손승락</a></td>
                                        <td>롯데</td>
                                        <td data-id="ERA_RT">2.70</td>
                                        <td data-id="GAME_CN">10</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">7</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">10</td>
                                        <td data-id="HIT_CN">17</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">1</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="R_CN">3</td>
                                        <td data-id="ER_CN">3</td>
                                        <td data-id="WHIP_RT">1.80</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=62648">김윤동</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">2.45</td>
                                        <td data-id="GAME_CN">14</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">4</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">22</td>
                                        <td data-id="HIT_CN">19</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">6</td>
                                        <td data-id="WHIP_RT">1.23</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=95657">임창용</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">2.25</td>
                                        <td data-id="GAME_CN">14</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">4</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.667</td>
                                        <td data-id="INN2_CN">12</td>
                                        <td data-id="HIT_CN">14</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">16</td>
                                        <td data-id="R_CN">3</td>
                                        <td data-id="ER_CN">3</td>
                                        <td data-id="WHIP_RT">1.83</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=74857">정우람</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">1.98</td>
                                        <td data-id="GAME_CN">13</td>
                                        <td data-id="W_CN">3</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">4</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">13 2/3</td>
                                        <td data-id="HIT_CN">7</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">3</td>
                                        <td data-id="ER_CN">3</td>
                                        <td data-id="WHIP_RT">0.95</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76329">이현승</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">2.60</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">3</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.333</td>
                                        <td data-id="INN2_CN">17 1/3</td>
                                        <td data-id="HIT_CN">18</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">16</td>
                                        <td data-id="R_CN">5</td>
                                        <td data-id="ER_CN">5</td>
                                        <td data-id="WHIP_RT">1.50</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61895">서진용</a></td>
                                        <td>SK</td>
                                        <td data-id="ERA_RT">4.70</td>
                                        <td data-id="GAME_CN">14</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">3</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.333</td>
                                        <td data-id="INN2_CN">15 1/3</td>
                                        <td data-id="HIT_CN">15</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">6</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">19</td>
                                        <td data-id="R_CN">8</td>
                                        <td data-id="ER_CN">8</td>
                                        <td data-id="WHIP_RT">1.37</td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=78148">정찬헌</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">4.63</td>
                                        <td data-id="GAME_CN">13</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">1</td>
                                        <td data-id="WRA_RT">0.333</td>
                                        <td data-id="INN2_CN">11 2/3</td>
                                        <td data-id="HIT_CN">11</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="R_CN">7</td>
                                        <td data-id="ER_CN">6</td>
                                        <td data-id="WHIP_RT">1.63</td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60636">심동섭</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">5.27</td>
                                        <td data-id="GAME_CN">17</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">5</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">13 2/3</td>
                                        <td data-id="HIT_CN">17</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">9</td>
                                        <td data-id="ER_CN">8</td>
                                        <td data-id="WHIP_RT">1.54</td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61411">심창민</a></td>
                                        <td>삼성</td>
                                        <td data-id="ERA_RT">6.75</td>
                                        <td data-id="GAME_CN">14</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.333</td>
                                        <td data-id="INN2_CN">16</td>
                                        <td data-id="HIT_CN">15</td>
                                        <td data-id="HR_CN">4</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">19</td>
                                        <td data-id="R_CN">12</td>
                                        <td data-id="ER_CN">12</td>
                                        <td data-id="WHIP_RT">1.38</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=73226">김성배</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">5.51</td>
                                        <td data-id="GAME_CN">14</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">16 1/3</td>
                                        <td data-id="HIT_CN">16</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">12</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.16</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77211">이용찬</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">4.50</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">14</td>
                                        <td data-id="HIT_CN">16</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">13</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">7</td>
                                        <td data-id="WHIP_RT">1.64</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61329">윤지웅</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">3.72</td>
                                        <td data-id="GAME_CN">12</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">19 1/3</td>
                                        <td data-id="HIT_CN">19</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="R_CN">9</td>
                                        <td data-id="ER_CN">8</td>
                                        <td data-id="WHIP_RT">1.09</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=79140">최동환</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">1.62</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">16 2/3</td>
                                        <td data-id="HIT_CN">15</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">3</td>
                                        <td data-id="ER_CN">3</td>
                                        <td data-id="WHIP_RT">1.14</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61666">한승혁</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">9.00</td>
                                        <td data-id="GAME_CN">13</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">12</td>
                                        <td data-id="HIT_CN">17</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">9</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="R_CN">12</td>
                                        <td data-id="ER_CN">12</td>
                                        <td data-id="WHIP_RT">2.17</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76858">박희수</a></td>
                                        <td>SK</td>
                                        <td data-id="ERA_RT">3.38</td>
                                        <td data-id="GAME_CN">16</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">5</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">13 1/3</td>
                                        <td data-id="HIT_CN">18</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">5</td>
                                        <td data-id="R_CN">5</td>
                                        <td data-id="ER_CN">5</td>
                                        <td data-id="WHIP_RT">1.65</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=73801">송은범</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">6.04</td>
                                        <td data-id="GAME_CN">7</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">28 1/3</td>
                                        <td data-id="HIT_CN">27</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">18</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">10</td>
                                        <td data-id="R_CN">19</td>
                                        <td data-id="ER_CN">19</td>
                                        <td data-id="WHIP_RT">1.59</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77452">이동걸</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">3.00</td>
                                        <td data-id="GAME_CN">4</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">6</td>
                                        <td data-id="HIT_CN">5</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">0</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">5</td>
                                        <td data-id="R_CN">2</td>
                                        <td data-id="ER_CN">2</td>
                                        <td data-id="WHIP_RT">0.83</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=79349">고원준</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">11.81</td>
                                        <td data-id="GAME_CN">2</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">5 1/3</td>
                                        <td data-id="HIT_CN">8</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">4</td>
                                        <td data-id="R_CN">7</td>
                                        <td data-id="ER_CN">7</td>
                                        <td data-id="WHIP_RT">2.81</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77263">김강률</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">5.65</td>
                                        <td data-id="GAME_CN">13</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">1</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">14 1/3</td>
                                        <td data-id="HIT_CN">14</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">16</td>
                                        <td data-id="R_CN">11</td>
                                        <td data-id="ER_CN">9</td>
                                        <td data-id="WHIP_RT">1.53</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=67246">김명신</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">7.02</td>
                                        <td data-id="GAME_CN">8</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">16 2/3</td>
                                        <td data-id="HIT_CN">25</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">4</td>
                                        <td data-id="KK_CN">10</td>
                                        <td data-id="R_CN">13</td>
                                        <td data-id="ER_CN">13</td>
                                        <td data-id="WHIP_RT">1.68</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=73248">김승회</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">4.34</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">18 2/3</td>
                                        <td data-id="HIT_CN">19</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">7</td>
                                        <td data-id="R_CN">9</td>
                                        <td data-id="ER_CN">9</td>
                                        <td data-id="WHIP_RT">1.39</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61240">니퍼트</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">2.01</td>
                                        <td data-id="GAME_CN">7</td>
                                        <td data-id="W_CN">4</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.667</td>
                                        <td data-id="INN2_CN">44 2/3</td>
                                        <td data-id="HIT_CN">35</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">15</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">39</td>
                                        <td data-id="R_CN">11</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.12</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=67266">박치국</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">5.40</td>
                                        <td data-id="GAME_CN">4</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">6 2/3</td>
                                        <td data-id="HIT_CN">4</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">6</td>
                                        <td data-id="R_CN">4</td>
                                        <td data-id="ER_CN">4</td>
                                        <td data-id="WHIP_RT">1.20</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=66226">보우덴</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">7.11</td>
                                        <td data-id="GAME_CN">2</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">6 1/3</td>
                                        <td data-id="HIT_CN">8</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">5</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">5</td>
                                        <td data-id="WHIP_RT">1.74</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61215">안규영</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">0.00</td>
                                        <td data-id="GAME_CN">1</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">1/3</td>
                                        <td data-id="HIT_CN">1</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">1</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">0</td>
                                        <td data-id="R_CN">0</td>
                                        <td data-id="ER_CN">0</td>
                                        <td data-id="WHIP_RT">6.00</td>
                                    </tr>

                                    <tr>
                                        <td>22</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=79229">유희관</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">4.34</td>
                                        <td data-id="GAME_CN">7</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.667</td>
                                        <td data-id="INN2_CN">47 2/3</td>
                                        <td data-id="HIT_CN">47</td>
                                        <td data-id="HR_CN">4</td>
                                        <td data-id="BB_CN">10</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">31</td>
                                        <td data-id="R_CN">24</td>
                                        <td data-id="ER_CN">23</td>
                                        <td data-id="WHIP_RT">1.20</td>
                                    </tr>

                                    </tbody>
                                </table>

                                <div class="paging">
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnFirst" title="첫 페이지로 이동" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnFirst','')"><img src="/resources/images/common/btn_paging_first.gif" alt="처음으로"></a>

                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo1" class="on" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo1','')">1</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo2" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo2','')">2</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo3" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo3','')">3</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo4" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo4','')">4</a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNo5" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNo5','')">5</a>





                                    <a id="cphContents_cphContents_cphContents_ucPager_btnNext" title="다음 페이지로 이동" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnNext','')"><img src="/resources/images/common/btn_paging_next.gif" alt="다음"></a>
                                    <a id="cphContents_cphContents_cphContents_ucPager_btnLast" title="마지막 페이지로 이동" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ucPager$btnLast','')"><img src="/resources/images/common/btn_paging_last.gif" alt="맨끝으로"></a>
                                </div>
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfPage" id="cphContents_cphContents_cphContents_hfPage" value="1">
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfOrderByCol" id="cphContents_cphContents_cphContents_hfOrderByCol" value="SV_CN">
                                <input type="hidden" name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$hfOrderBy" id="cphContents_cphContents_cphContents_hfOrderBy" value="DESC">
                                <a id="cphContents_cphContents_cphContents_lbtnOrderBy" href="javascript:__doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','')" style="display:none"></a>
                            </div>
                        </div>
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


    <script type="text/javascript">
        //<![CDATA[
        jQuery(function ($) {$('[data-id=ERA_RT]').addClass('asc');$('[data-id=ERA_RT]').siblings().removeClass('asc');});//]]>
    </script>
    <span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="AED6D585"></span><span style="display: none !important;"><input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAEUgOrzORm/8ph83qY0ES6aPMzj2o/Kl3exwtkWJg3O5wUXPArnrpnBEHgYewENEHAHN0KWRtFnUB520854STIKEF5H2d3ilWP1wNV0aXdjy0vtzQsR+QRc0xVJHti5+cOFyE1/cwJtk7pXwOpF/aAt2Z9zuKHrloXfA/yQr8D2Ucrrt9yxA54GObgPZf99RTyjTKnVrlhwsRCE+lowuR7r0bf2pla371+2DOYtPosfhtmyozayEWKkG2Z+gM3Qk1x4/Y5L9N0WTBZCeC5SLVRvBUnDfXDZ6VjcflzHQHbrIShj/U/uqvJYmwAXVt8pp8y7DNtdq70Ie9QlBLUvZdOLYXtWczA60sUIuI3W7v7mxOkbTa2oa77ETfy7ZEV08USxZA91lnQOJsTJ+xNBTbPtjON+ipKcUHaNaBlWXPkOacsmf4QkjtnqhqNi9c4HCG4rg1o0ToOFLs7Hm3BlM4RUSFTV56aEQCnu0p0WZNFmJK++U1++ulUMRSBtH0tKELRcz/45AdAtlOLzaqSrdORpPagFmZb7WMq0ob0u5jY9vRw+oX9baQPl2b3ydxTtWcku6QQYX82nKf7eh+ZLKhA0A1FGC+DJZsSmb0JTnezgKfibuCmdrfh/c4c1cSncDtBZ4Dm6yPaag+gdonM6+L18lZmbefxecbg3k640ix0tpJkliQCd7D8Upo2sF3CAj6M0trgHX1rtHRDG0wPytwjIpe9CWUD+HEZjDxFyN9UyrJ/OyXRqTZrmK4PtxOFathuW24yqZeC8B8R43azSgcKguOXeAeMuYLmxIgdUODE8fjEcZ7MXNsXHNVSvJCzNuzVJt+1RaSWeP5wW4+ssNHBvd5if0UrG/fr3rb85q2NXNReuTVCNu0QpgyBDsMbWwHnZ+3E8QgnA5L9ln82SQITXxOvwJOtLSS9ehfAKfe8hKlBZOnecS+MQB3blP4nXht/jrC6YM4udi1VxfozHCyTG2p/74UTTGRLYPSqtfwlbAQ6rBbPyHj3lKTX76zzcBHnWZnrwnlHnDl9Liy1p9AttOsnd0UuM78/oxSrkg4Wk3RITArCNvA91Ndck79b+bDdsWhcOykAkRJXzW0B70EUeiOvd3eJu3lxP+d7EDS7ti9Cstp9k4GTS1vtpEN6Wq+CjK9A9r2vSCab6p1U4/OO6VkuhkApDnJz2QYJ4+WtiVI/BX9FcIhpzUjf6aWSg0KxYuu53sWI2rQvwGQJ7MyhCKIgSynfy/m1AkZNqRiApT0bRIk4bmbyiw2ok8LwAfCGAcjZuvsereTIFDmD27mIG6MrOYBwefx6I8P23YohTFmAlQIV1JU8C5OSHackSM/y0tlUHljUYw8T6aAU/ucTdPdJZD6dJppL8i5D2fQRoVAalCuvpkbHcYZzQgPlhttdq2O7zjuwnvixFYHJG7bT/PNAwKMgzpZ1p+YZVq5mUASU4PBdGSDK7UxaYcQc23SDlDM8P5Z9qovdvlFT8Nai27sD31L9EmO3QtwFUzoatCWQ=="></span></form>






<script type="text/javascript">
    currentLnb("02");

    function tooltip(x) {
        var title = $(x).attr("title");
        $(x).append("<div class='tooltip'></div>");
        $(".tooltip").html(title);
        var cnt = $(".tooltip").text().length;
        $(".tooltip").css("width", cnt * 12);
        return false;
    }

    function hideTip() {
        $(".tooltip").remove();
    }

    $(".record_words a").on("click", function (e) {
        e.preventDefault();
        Words();
        $(".words").show();
    });

    function sort(colName) {
        var order = $("#cphContents_cphContents_cphContents_hfOrderBy").val();           //정렬조건

        if($("#cphContents_cphContents_cphContents_hfOrderByCol").val() == colName) {
            if (order.indexOf("DESC") > -1) {
                order = "ASC";
            } else {
                order = "DESC";
            }
        } else {
            if(colName == "ERA_RT" || colName == "WHIP_RT" || colName == "OAVG_RT") {
                order = "ASC";
            } else {
                order = "DESC";
            }
        }

        $("#cphContents_cphContents_cphContents_hfOrderByCol").val(colName);
        $("#cphContents_cphContents_cphContents_hfOrderBy").val(order);
        __doPostBack('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','')
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

</body>