<body>
<form method="post" action="Basic1.aspx" id="mainForm">
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


    <script src="/WebResource.axd?d=RWShhjPLMnEToK7WDLoGPQZ6SRjMM39oZreKdqO26ZH2asRIjWiBgl_vUd9MJ0g_6k06JnusGhL1Y-hNzrUJZ7Wg8hTPqonYMEWQsgkPWUo1&amp;t=635332341015596117" type="text/javascript"></script>


    <script src="/ScriptResource.axd?d=isNyppBzt7VYJoTCK9vcbN-mMRn0vd3TRvVEtzYT1LlUmrbFUIrVRykPXq6lp5TCya7gxaTgiFHhZxwAafcv0mR4lraK43wVr7AvHFvzsN2mfJ5w3-eMhu3mCgCmYNu_6Mm7jpY3__jzcLCzgpnLURGM07uVy1iHFUXj1Ee6yuZA2SP7Q2NfaTHbvycGANrW0&amp;t=42a7acab" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 클라이언트 쪽 프레임워크를 로드하지 못했습니다.');
        //]]>
    </script>

    <script src="/ScriptResource.axd?d=IA_lPOpqU56C71zrqLemwiq7COnB3c7BO0HsUpmMKqWwKNWUI_ddZbPkwY7_oJvgVOrblxCllLYChTgKMKdBGrf7pJdRbLNHpI71m_Fho5kpzckZL4wKUO47qVJfHwE7ZkspCU1a3axR-3d4LUGPVSroSPXgP8flv5JymbqHEdg70BlPS42Co6YvWmbtWSx30&amp;t=42a7acab" type="text/javascript"></script>
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
                                    <li><a href="/Futures/CardNews/List.aspx?bdSc=18">퓨처스샷</a></li>
                                    <li><a href="/Futures/CardNews/List.aspx?bdSc=19">퓨처스타그램</a></li>
                                    <li><a href="/Futures/Webtoon/List.aspx">웹툰</a></li>
                                    <li><a href="/Futures/GameSketch/List.aspx">경기스케치</a></li>
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
                                                <li><a href="/Futures/CardNews/List.aspx?bdSc=18">퓨처스샷</a></li>
                                                <li><a href="/Futures/CardNews/List.aspx?bdSc=19">퓨처스타그램</a></li>
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
                    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$smData', 'mainForm', ['tctl00$ctl00$ctl00$cphContents$cphContents$cphContents$udpContent','cphContents_cphContents_cphContents_udpContent'], ['ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$lbtnOrderBy','cphContents_cphContents_cphContents_lbtnOrderBy','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeason','cphContents_cphContents_cphContents_ddlSeason','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSeries','cphContents_cphContents_cphContents_ddlSeries','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlTeam','cphContents_cphContents_cphContents_ddlTeam','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation','cphContents_cphContents_cphContents_ddlSituation','ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail','cphContents_cphContents_cphContents_ddlSituationDetail'], [], 90, 'ctl00$ctl00$ctl00');
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
                                <li> <a href="/Record/Player/Defense/Basic.aspx">수비</a></li>
                                <li class="last"> <a href="/Record/Player/Runner/Basic.aspx">주루</a></li>
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

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation$ddlSituation" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituation$ddlSituation\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSituation_ddlSituation" class="select02">
                                        <option selected="selected" value="">경기상황별1</option>
                                        <option value="MONTH_SC">월별</option>
                                        <option value="WEEK_SC">요일별</option>
                                        <option value="STADIUM_SC">구장별</option>
                                        <option value="HOMEAYAY_SC">홈/방문별</option>
                                        <option value="OPPTEAM_SC">상대팀별</option>
                                        <option value="DAYNIGHT_SC">주/야간별</option>
                                        <option value="HALF_SC">전/후반기별</option>
                                        <option value="42">타자유형별</option>
                                        <option value="43">주자상황별</option>
                                        <option value="44">볼카운트별</option>
                                        <option value="45">아웃카운트별</option>
                                        <option value="46">이닝별</option>
                                        <option value="47">타순별</option>

                                    </select>
                                </div>

                                <div class="styled-select03 mt5">
                                    <select name="ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail$ddlSituationDetail" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ctl00$ctl00$cphContents$cphContents$cphContents$ddlSituationDetail$ddlSituationDetail\',\'\')', 0)" id="cphContents_cphContents_cphContents_ddlSituationDetail_ddlSituationDetail" class="select02">
                                        <option selected="selected" value="">경기상황별2</option>

                                    </select>
                                </div>
                            </div>
                            <h4 class="bul_history"> 투수기록</h4>
                            <div class="row">
                                <div class="tab-depth3">
                                    <ul class="tab">
                                        <li class="on"><a href="/Record/Player/PitcherBasic/Basic1.aspx">기본기록</a>|</li>
                                        <li><a href="/Record/Player/PitcherBasic/Detail1.aspx">세부기록</a></li>
                                    </ul>
                                </div>
                                <div class="more_record">
                                    <a href="/Record/Player/PitcherBasic/Basic1.aspx" class="prev">이전</a>
                                    <span>기록보기</span>
                                    <a href="/Record/Player/PitcherBasic/Basic2.aspx" class="next">다음</a>
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
                                        <td data-id="ERA_RT">1.91</td>
                                        <td data-id="GAME_CN">27</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">19</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">28 1/3</td>
                                        <td data-id="HIT_CN">21</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">30</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">6</td>
                                        <td data-id="WHIP_RT">0.99</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=65062">김재윤</a></td>
                                        <td>kt</td>
                                        <td data-id="ERA_RT">0.00</td>
                                        <td data-id="GAME_CN">18</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">12</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">15 2/3</td>
                                        <td data-id="HIT_CN">8</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="R_CN">1</td>
                                        <td data-id="ER_CN">0</td>
                                        <td data-id="WHIP_RT">0.70</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=75321">손승락</a></td>
                                        <td>롯데</td>
                                        <td data-id="ERA_RT">2.65</td>
                                        <td data-id="GAME_CN">18</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">10</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">17</td>
                                        <td data-id="HIT_CN">25</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">3</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">15</td>
                                        <td data-id="R_CN">5</td>
                                        <td data-id="ER_CN">5</td>
                                        <td data-id="WHIP_RT">1.65</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76350">김세현</a></td>
                                        <td>넥센</td>
                                        <td data-id="ERA_RT">5.02</td>
                                        <td data-id="GAME_CN">13</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">8</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">14 1/3</td>
                                        <td data-id="HIT_CN">16</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">10</td>
                                        <td data-id="R_CN">8</td>
                                        <td data-id="ER_CN">8</td>
                                        <td data-id="WHIP_RT">1.47</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60140">신정락</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">3.47</td>
                                        <td data-id="GAME_CN">26</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">8</td>
                                        <td data-id="HOLD_CN">6</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">23 1/3</td>
                                        <td data-id="HIT_CN">23</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">13</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">23</td>
                                        <td data-id="R_CN">13</td>
                                        <td data-id="ER_CN">9</td>
                                        <td data-id="WHIP_RT">1.54</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=74857">정우람</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">2.66</td>
                                        <td data-id="GAME_CN">24</td>
                                        <td data-id="W_CN">3</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">8</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.750</td>
                                        <td data-id="INN2_CN">23 2/3</td>
                                        <td data-id="HIT_CN">15</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">31</td>
                                        <td data-id="R_CN">7</td>
                                        <td data-id="ER_CN">7</td>
                                        <td data-id="WHIP_RT">0.93</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77211">이용찬</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">3.58</td>
                                        <td data-id="GAME_CN">25</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">6</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.250</td>
                                        <td data-id="INN2_CN">27 2/3</td>
                                        <td data-id="HIT_CN">27</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">11</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">24</td>
                                        <td data-id="R_CN">14</td>
                                        <td data-id="ER_CN">11</td>
                                        <td data-id="WHIP_RT">1.37</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=95657">임창용</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">3.86</td>
                                        <td data-id="GAME_CN">24</td>
                                        <td data-id="W_CN">4</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">6</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.571</td>
                                        <td data-id="INN2_CN">21</td>
                                        <td data-id="HIT_CN">21</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">13</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">29</td>
                                        <td data-id="R_CN">9</td>
                                        <td data-id="ER_CN">9</td>
                                        <td data-id="WHIP_RT">1.62</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76329">이현승</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">3.14</td>
                                        <td data-id="GAME_CN">25</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">5</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">28 2/3</td>
                                        <td data-id="HIT_CN">32</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">10</td>
                                        <td data-id="HP_CN">4</td>
                                        <td data-id="KK_CN">22</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.47</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=75342">이보근</a></td>
                                        <td>넥센</td>
                                        <td data-id="ERA_RT">4.91</td>
                                        <td data-id="GAME_CN">22</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">5</td>
                                        <td data-id="HOLD_CN">9</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">22</td>
                                        <td data-id="HIT_CN">30</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">23</td>
                                        <td data-id="R_CN">12</td>
                                        <td data-id="ER_CN">12</td>
                                        <td data-id="WHIP_RT">1.59</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=62648">김윤동</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">3.63</td>
                                        <td data-id="GAME_CN">25</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">5</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">34 2/3</td>
                                        <td data-id="HIT_CN">31</td>
                                        <td data-id="HR_CN">6</td>
                                        <td data-id="BB_CN">16</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">29</td>
                                        <td data-id="R_CN">14</td>
                                        <td data-id="ER_CN">14</td>
                                        <td data-id="WHIP_RT">1.36</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76858">박희수</a></td>
                                        <td>SK</td>
                                        <td data-id="ERA_RT">4.22</td>
                                        <td data-id="GAME_CN">24</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">2</td>
                                        <td data-id="SV_CN" class="asc">5</td>
                                        <td data-id="HOLD_CN">6</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">21 1/3</td>
                                        <td data-id="HIT_CN">25</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">9</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">15</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.59</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61411">심창민</a></td>
                                        <td>삼성</td>
                                        <td data-id="ERA_RT">6.07</td>
                                        <td data-id="GAME_CN">26</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">5</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.400</td>
                                        <td data-id="INN2_CN">29 2/3</td>
                                        <td data-id="HIT_CN">27</td>
                                        <td data-id="HR_CN">6</td>
                                        <td data-id="BB_CN">12</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">44</td>
                                        <td data-id="R_CN">20</td>
                                        <td data-id="ER_CN">20</td>
                                        <td data-id="WHIP_RT">1.31</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76430">김상수</a></td>
                                        <td>넥센</td>
                                        <td data-id="ERA_RT">2.59</td>
                                        <td data-id="GAME_CN">23</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">3</td>
                                        <td data-id="HOLD_CN">5</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">24 1/3</td>
                                        <td data-id="HIT_CN">18</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">20</td>
                                        <td data-id="R_CN">8</td>
                                        <td data-id="ER_CN">7</td>
                                        <td data-id="WHIP_RT">1.07</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=78148">정찬헌</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">5.91</td>
                                        <td data-id="GAME_CN">22</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">3</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.250</td>
                                        <td data-id="INN2_CN">21 1/3</td>
                                        <td data-id="HIT_CN">23</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">12</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="R_CN">16</td>
                                        <td data-id="ER_CN">14</td>
                                        <td data-id="WHIP_RT">1.64</td>
                                    </tr>

                                    <tr>
                                        <td>14</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61895">서진용</a></td>
                                        <td>SK</td>
                                        <td data-id="ERA_RT">4.87</td>
                                        <td data-id="GAME_CN">19</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">3</td>
                                        <td data-id="SV_CN" class="asc">3</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.250</td>
                                        <td data-id="INN2_CN">20 1/3</td>
                                        <td data-id="HIT_CN">24</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">9</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">26</td>
                                        <td data-id="R_CN">11</td>
                                        <td data-id="ER_CN">11</td>
                                        <td data-id="WHIP_RT">1.62</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60181">김지용</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">1.42</td>
                                        <td data-id="GAME_CN">25</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">4</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">25 1/3</td>
                                        <td data-id="HIT_CN">22</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">2</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">4</td>
                                        <td data-id="WHIP_RT">1.14</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60636">심동섭</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">5.19</td>
                                        <td data-id="GAME_CN">21</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">5</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">17 1/3</td>
                                        <td data-id="HIT_CN">23</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">20</td>
                                        <td data-id="R_CN">11</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.62</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77927">장필준</a></td>
                                        <td>삼성</td>
                                        <td data-id="ERA_RT">5.13</td>
                                        <td data-id="GAME_CN">19</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">5</td>
                                        <td data-id="SV_CN" class="asc">2</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.286</td>
                                        <td data-id="INN2_CN">26 1/3</td>
                                        <td data-id="HIT_CN">34</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">10</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">25</td>
                                        <td data-id="R_CN">15</td>
                                        <td data-id="ER_CN">15</td>
                                        <td data-id="WHIP_RT">1.67</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=73226">김성배</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">3.91</td>
                                        <td data-id="GAME_CN">21</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">23</td>
                                        <td data-id="HIT_CN">22</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">17</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.17</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=62929">이민호</a></td>
                                        <td>NC</td>
                                        <td data-id="ERA_RT">4.02</td>
                                        <td data-id="GAME_CN">18</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.667</td>
                                        <td data-id="INN2_CN">31 1/3</td>
                                        <td data-id="HIT_CN">32</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">14</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">34</td>
                                        <td data-id="R_CN">18</td>
                                        <td data-id="ER_CN">14</td>
                                        <td data-id="WHIP_RT">1.47</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61329">윤지웅</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">4.21</td>
                                        <td data-id="GAME_CN">23</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">25 2/3</td>
                                        <td data-id="HIT_CN">27</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">9</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">14</td>
                                        <td data-id="R_CN">14</td>
                                        <td data-id="ER_CN">12</td>
                                        <td data-id="WHIP_RT">1.40</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=76650">진해수</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">2.08</td>
                                        <td data-id="GAME_CN">29</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">13</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">17 1/3</td>
                                        <td data-id="HIT_CN">14</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">4</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">18</td>
                                        <td data-id="R_CN">4</td>
                                        <td data-id="ER_CN">4</td>
                                        <td data-id="WHIP_RT">1.04</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=79140">최동환</a></td>
                                        <td>LG</td>
                                        <td data-id="ERA_RT">4.03</td>
                                        <td data-id="GAME_CN">21</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">4</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">22 1/3</td>
                                        <td data-id="HIT_CN">20</td>
                                        <td data-id="HR_CN">4</td>
                                        <td data-id="BB_CN">7</td>
                                        <td data-id="HP_CN">4</td>
                                        <td data-id="KK_CN">20</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">10</td>
                                        <td data-id="WHIP_RT">1.21</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=61666">한승혁</a></td>
                                        <td>KIA</td>
                                        <td data-id="ERA_RT">7.08</td>
                                        <td data-id="GAME_CN">20</td>
                                        <td data-id="W_CN">1</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">2</td>
                                        <td data-id="WRA_RT">0.500</td>
                                        <td data-id="INN2_CN">20 1/3</td>
                                        <td data-id="HIT_CN">28</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">11</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">20</td>
                                        <td data-id="R_CN">17</td>
                                        <td data-id="ER_CN">16</td>
                                        <td data-id="WHIP_RT">1.92</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=60845">문광은</a></td>
                                        <td>SK</td>
                                        <td data-id="ERA_RT">5.17</td>
                                        <td data-id="GAME_CN">15</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">1</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">15 2/3</td>
                                        <td data-id="HIT_CN">14</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">8</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">16</td>
                                        <td data-id="R_CN">10</td>
                                        <td data-id="ER_CN">9</td>
                                        <td data-id="WHIP_RT">1.40</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=73801">송은범</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">7.11</td>
                                        <td data-id="GAME_CN">10</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">4</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">0.000</td>
                                        <td data-id="INN2_CN">31 2/3</td>
                                        <td data-id="HIT_CN">37</td>
                                        <td data-id="HR_CN">3</td>
                                        <td data-id="BB_CN">23</td>
                                        <td data-id="HP_CN">3</td>
                                        <td data-id="KK_CN">11</td>
                                        <td data-id="R_CN">26</td>
                                        <td data-id="ER_CN">25</td>
                                        <td data-id="WHIP_RT">1.89</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77452">이동걸</a></td>
                                        <td>한화</td>
                                        <td data-id="ERA_RT">3.77</td>
                                        <td data-id="GAME_CN">9</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">14 1/3</td>
                                        <td data-id="HIT_CN">12</td>
                                        <td data-id="HR_CN">2</td>
                                        <td data-id="BB_CN">2</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">9</td>
                                        <td data-id="R_CN">6</td>
                                        <td data-id="ER_CN">6</td>
                                        <td data-id="WHIP_RT">0.98</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=77563">이상화</a></td>
                                        <td>kt</td>
                                        <td data-id="ERA_RT">4.50</td>
                                        <td data-id="GAME_CN">25</td>
                                        <td data-id="W_CN">2</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">1</td>
                                        <td data-id="HOLD_CN">3</td>
                                        <td data-id="WRA_RT">1.000</td>
                                        <td data-id="INN2_CN">24</td>
                                        <td data-id="HIT_CN">30</td>
                                        <td data-id="HR_CN">1</td>
                                        <td data-id="BB_CN">5</td>
                                        <td data-id="HP_CN">1</td>
                                        <td data-id="KK_CN">18</td>
                                        <td data-id="R_CN">15</td>
                                        <td data-id="ER_CN">12</td>
                                        <td data-id="WHIP_RT">1.46</td>
                                    </tr>

                                    <tr>
                                        <td>30</td>
                                        <td><a href="/Record/Player/PitcherDetail/Basic.aspx?playerId=66201">고봉재</a></td>
                                        <td>두산</td>
                                        <td data-id="ERA_RT">0.00</td>
                                        <td data-id="GAME_CN">1</td>
                                        <td data-id="W_CN">0</td>
                                        <td data-id="L_CN">0</td>
                                        <td data-id="SV_CN" class="asc">0</td>
                                        <td data-id="HOLD_CN">0</td>
                                        <td data-id="WRA_RT">-</td>
                                        <td data-id="INN2_CN">1</td>
                                        <td data-id="HIT_CN">2</td>
                                        <td data-id="HR_CN">0</td>
                                        <td data-id="BB_CN">1</td>
                                        <td data-id="HP_CN">0</td>
                                        <td data-id="KK_CN">0</td>
                                        <td data-id="R_CN">0</td>
                                        <td data-id="ER_CN">0</td>
                                        <td data-id="WHIP_RT">3.00</td>
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
    <span style="display: none !important;"><input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""></span><span style="display: none !important;"><input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""></span><span style="display: none !important;"><input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value=""></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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"></span><span style="display: none !important;"><input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E5E09F00"></span><span style="display: none !important;"><input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAFQAK4hB2NVP3leobn+bouZ8Mzj2o/Kl3exwtkWJg3O5wUXPArnrpnBEHgYewENEHAHN0KWRtFnUB520854STIKEF5H2d3ilWP1wNV0aXdjy0vtzQsR+QRc0xVJHti5+cOFyE1/cwJtk7pXwOpF/aAt2Z9zuKHrloXfA/yQr8D2Ucrrt9yxA54GObgPZf99RTyjTKnVrlhwsRCE+lowuR7r0bf2pla371+2DOYtPosfhtmyozayEWKkG2Z+gM3Qk1x4/Y5L9N0WTBZCeC5SLVRvBUnDfXDZ6VjcflzHQHbrIShj/U/uqvJYmwAXVt8pp8y7DNtdq70Ie9QlBLUvZdOLYXtWczA60sUIuI3W7v7mxOkbTa2oa77ETfy7ZEV08USxZA91lnQOJsTJ+xNBTbPtjON+ipKcUHaNaBlWXPkOacsmf4QkjtnqhqNi9c4HCG4rg1o0ToOFLs7Hm3BlM4RUSFTV56aEQCnu0p0WZNFmJK++U1++ulUMRSBtH0tKELRcz/45AdAtlOLzaqSrdORpPagFmZb7WMq0ob0u5jY9vRw+oX9baQPl2b3ydxTtWcku6QQYX82nKf7eh+ZLKhA0A1FGC+DJZsSmb0JTnezgKfibuCmdrfh/c4c1cSncDtBZ4Dm6yPaag+gdonM6+L18lZmbefxecbg3k640ix0tpJkliQCd7D8Upo2sF3CAj6M0trgHX1rtHRDG0wPytwjIpe9CWUD+HEZjDxFyN9UyrJ/OyXRqTZrmK4PtxOFathuW24yqZeC8B8R43azSgcKguOXeAeMuYLmxIgdUODE8fjEcZ7MXNsXHNVSvJCzNuzVJt+1RaSWeP5wW4+ssNHBvd5if0UrG/fr3rb85q2NXNReuTVCNu0QpgyBDsMbWwHnZ+3E8QgnA5L9ln82SQITXxOvwJOtLSS9ehfAKfe8hKlBZOnecS+MQB3blP4nXht/jrC6YM4udi1VxfozHCyTG2p/74UTTGRLYPSqtfwlbAQ6rBbPyHj3lKTX76zzcBHnWZnrwnlHnDl9Liy1p9AttOsnd0UuM78/oxSrkg4Wk3RITArCNvA91Ndck79b+bDdsWhcOykAkRJXzW0B70EUeiOvd3eJu3lxP+d7EDS7ti9Cstp9k4GTS1vtpEN6Wq+CjK9A9r2vSCab6p1U4/OO6VkuhkApDnJz2QYJ4+WtiVI/BX9FcIhpzUjf6aWSg0Kxa07tJ6WHmW5+WCqa6HHWNECvd/jRMnB2eJtbUcn5WlspCcyMQvaZqo8lhI7Nn5rAKT8L70GjlFiTeP2Whe+DEfOCAHmGLNIy7a8BGe4Ha/0/MKNcKI2O3f/vPUtfMhXa2oEsMAQRLHLX31IS0Pj0uE7W5dQ3Day8+yY8MsrzSS011z2YPjL4HChVQqHKKPVM6MuDCuvOEUM3+BmUihKRqZY9ZwE+J2nhautF1vIUZ82hT5TfLN5t8mEqdQn0XsNETTPGW93NFcXh/KsLmUvxf4F1FTKZJXgDRTF5mNfU5UUSI5Y+GKthh5EX2PppFFiWcuu53sWI2rQvwGQJ7MyhCKIgSynfy/m1AkZNqRiApT0bRIk4bmbyiw2ok8LwAfCGAcjZuvsereTIFDmD27mIG6MrOYBwefx6I8P23YohTFmAlQIV1JU8C5OSHackSM/y0tlUHljUYw8T6aAU/ucTdPdJZD6dJppL8i5D2fQRoVAalCuvpkbHcYZzQgPlhttdq2O7zjuwnvixFYHJG7bT/PNAwKMgzpZ1p+YZVq5mUASU4PBdGSDK7UxaYcQc23SDnP1hmOnEGhwdWTv7juhwJ7R4hBT30ROA/7qayJWKT5MQ=="></span></form>






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

                    container.hide();

                    if (data.now.length > 0 || data.retire.length > 0) {
                        // 2017-05-22 yeeun, 홍지희 사원 요청, 결과가 1명일 경우 바로 페이지 연결
                        if (data.now.length + data.retire.length == 1) {
                            var link = "";

                            if (data.now.length == 1) {
                                link = data.now[0]["P_LINK"];
                            } else {
                                link = data.retire[0]["P_LINK"];
                            }

                            location.href = link;
                        } else {
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
                            container.show();
                        }
                    } else {
                        container.append($("<p class='null'>검색 결과가 없습니다.</p>"));
                        container.show();
                    }
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