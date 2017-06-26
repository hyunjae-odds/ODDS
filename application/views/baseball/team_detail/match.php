<?php
    function get_team_initial($team_name){
        if($team_name=='KIA') $initial='HT';
        else if($team_name=='kt') $initial='KT';
        else if($team_name=='삼성') $initial='SS';
        else if($team_name=='넥센') $initial='WO';
        else if($team_name=='두산') $initial='OB';
        else if($team_name=='롯데') $initial='LT';
        else if($team_name=='한화') $initial='HH';
        else $initial=$team_name;

        return $initial;
    }
    function get_game_location($stadium){
        if($stadium=='대구') $location='대구';
        else if($stadium=='고척') $location='서울';
        else if($stadium=='사직') $location='부산';
        else if($stadium=='광주') $location='광주';
        else if($stadium=='수원') $location='수원';
        else if($stadium=='잠실') $location='서울';
        else if($stadium=='문학') $location='인천';
        else if($stadium=='대전') $location='대전';
        else if($stadium=='마산') $location='창원';
        else $location='';

        return $location;
    }
    function get_stadium_name($stadium){
        if($stadium=='대구') $stadium_name='삼성 라이온즈 파크';
        else if($stadium=='고척') $stadium_name='고척 스카이돔';
        else if($stadium=='사직') $stadium_name='사직 야구장';
        else if($stadium=='광주') $stadium_name='기아 챔피언스 필드';
        else if($stadium=='수원') $stadium_name='kt 위즈 파크';
        else if($stadium=='잠실') $stadium_name='잠실 야구장';
        else if($stadium=='문학') $stadium_name='SK 행복드림구장';
        else if($stadium=='대전') $stadium_name='한화생명 이글스 파크';
        else if($stadium=='마산') $stadium_name='마산 야구장';
        else $stadium_name='';

        return $stadium_name;
    }
    $position_full_name=array('1'=>'1루수','2'=>'2루수','3'=>'3루수','유'=>'유격수','우'=>'우익수','좌'=>'좌익수','중'=>'중견수','포'=>'포수','지'=>'지명타자','대타자'=>'대타자','대주자'=>'대주자', ''=>'투');
    $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','삼성'=>'삼성 라이온즈');

    $game_date=$data->date;
    $game_stadium=get_stadium_name($data->stadium);
    $game_location=get_game_location($data->stadium);
    $away_team=$full_name_team[$data->away];
    $away_initial=get_team_initial($data->away);
    $away_cheer=($data->home_cheer+$data->away_cheer!=0) ? ($data->away_cheer/($data->home_cheer+$data->away_cheer))*100 : 0;
    $home_team=$full_name_team[$data->home];
    $home_initial=get_team_initial($data->home);
    $home_cheer=($away_cheer==0) ? 0 : 100-number_format($away_cheer,0);

    foreach($team_total as $item):
        if($away_team==$item['team']):
            $away_win=$item['win'];
            $away_lose=$item['lose'];
            $away_tie=$item['tie'];
            $away_win_rate=$item['win_rate'];
        endif;
        if($home_team==$item['team']):
            $home_win=$item['win'];
            $home_lose=$item['lose'];
            $home_tie=$item['tie'];
            $home_win_rate=$item['win_rate'];
        endif;
    endforeach;

    foreach($handicap_result as $item):
        if($data->away==$item->team):
            $handicap_away_win=$item->win;
            $handicap_away_lose=$item->lose;
            $handicap_away_tie=$item->tie;
            $handicap_away_win_rate=$item->win_rate;
        endif;
        if($data->home==$item->team):
            $handicap_home_win=$item->win;
            $handicap_home_lose=$item->lose;
            $handicap_home_tie=$item->tie;
            $handicap_home_win_rate=$item->win_rate;
        endif;
    endforeach;

    $inning=explode(';', $score_board['inning']);
    $game_end=(strpos($score_board['message'], '종료'))?TRUE : FALSE;
?>
<script src="/public/lib/js/highcharts/highcharts.js"></script>
<script src="/public/lib/js/highcharts/modules/exporting.js"></script>
<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>

<div class="Match_w">
    <div class="match KBO">
        <div class="title_bar">
            <p>야구 - 대한민국 - <span>KBO</span></p>
            <ul>
                <li>
                    <span><span class="y_BTN"><a href="">배당률</a></span></span>
                    <!-- 배당률팝업 -->
                    <div class="y_pop" style="display:none;">
                        <h3>레알마드리드 vs FC바르셀로나</h3>
                        <div>
                            <ul class="y_btn">
                                <li><a href="">전체 회사 보기</a></li>
                                <li><a href="">선택 회사 보기</a></li>
                            </ul>
                            <ul>
                                <li class="on"><a href="">승무패</a></li>
                                <li><a href="">핸디캡</a></li>
                                <li><a href="">오버언더</a></li>
                            </ul>
                            <div class="y_table_w">
                                <table>
                                    <caption></caption>
                                    <colgroup>
                                        <col width="130px"/>
                                        <col width="109px"/>
                                        <col width="109px"/>
                                        <col width="109px"/>
                                    </colgroup>
                                    <tr>
                                        <th>배팅 회사</th>
                                        <th>홈팀 승</th>
                                        <th>무승부</th>
                                        <th>원정팀 승</th>
                                    </tr>
                                </table>
                                <div class="y_table">
                                    <table>
                                        <caption></caption>
                                        <colgroup>
                                            <col width="130px"/>
                                            <col width="109px"/>
                                            <col width="109px"/>
                                            <col width="109px"/>
                                        </colgroup>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for=""><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></label></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_pinnacle">pinnacle</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_bet365">bet365</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><input type="checkbox" /><span class="com_tonybet">tonybet</span></th>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="down">1.14</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <span class="up">1.24</span>
                                                    <div class="y_view">
                                                        <ul>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="down">-0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                            <li>
                                                                <span class="day">11.28</span>
                                                                <span class="time">04:03</span>
                                                                <b>3.80</b>
                                                                <span class="up">+0.02</span>
                                                            </li>
                                                        </ul>
                                                        <div>
                                                            <p>Opening odds</p>
                                                            <span class="day">11.28</span>
                                                            <span class="time">04:03</span>
                                                            <b>3.80</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="">
                                <table>
                                    <caption></caption>
                                    <colgroup>
                                        <col width="131px"/>
                                        <col width="109px"/>
                                        <col width="109px"/>
                                        <col width="109px"/>
                                    </colgroup>
                                    <tr>
                                        <th>최고 초기 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>
                                    <tr>
                                        <th>최저 초기 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>
                                    <tr>
                                        <th>평균 초기 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>
                                    <tr>
                                        <th>최고 라이브 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>
                                    <tr>
                                        <th>최저 라이브 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>
                                    <tr>
                                        <th>평균 라이브 승률</th>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                        <td>1.59</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="close"><a href="">close</a></div>
                    </div>
                </li>
                <li><span class="btn_mark"><a href="">즐겨찾기</a></span></li><!-- 즐겨찾기 설정시 .on 추가  -->
            </ul>
        </div>
        <div class="score_bar">
            <div>
                <div class="team">
                    <p class="st"><?=$data->away_rank;?>위</p>
                    <p><?=$away_team;?></p>
                    <span>선발 : <?=$score_board['away_starter'];?></span>
                </div>
                <div class="team_logo"><span class="<?=$away_initial;?>_L"></span></div>
                <div class="num"></div>
                <p>VS</p>
                <div class="num"></div>
                <div class="team_logo"><span class="<?=$home_initial;?>_L"></span></div>
                <div class="team">
                    <p class="st"><?=$data->home_rank;?>위</p>
                    <p><?=$home_team;?></p>
                    <span>선발 : <?=$score_board['home_starter'];?></span>
                </div>
            </div>
            <ul>
                <li><?=CURRENT_YEAR;?>.<?=$game_date;?></li>
                <li><?=$game_stadium;?></li>
                <li><?=$game_location;?></li>
            </ul>
        </div>
        <div class="livescore">
            <div class="table">
                <table class="table_default">
                    <caption></caption>
                    <colgroup>
                        <col width="192px"/>
                        <col width="128px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                        <col width="37px"/>
                    </colgroup>
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th class="gray">10</th>
                        <th class="gray">11</th>
                        <th class="gray">12</th>
                        <th>R</th>
                        <th>H</th>
                        <th>E</th>
                        <th>B</th>
                    </tr>
                    <tr>
                        <td><?=$away_team;?><span>(p:<?=$score_board['away_pitcher'];?>)</span></td>
                        <td><span class="red">1.45</span><span class="gray">4.5 O</span><span class="red">1.45</span></td>
                        <?php foreach($score_board['away_score_board'] as $key=>$item): ?>
                            <?php if($inning[1]==0 && $key+1==$inning[0] && !$game_end): ?><td><span class="red"><b><?=$item;?></b></span></td></td>
                            <?php else: ?><td><?=$item;?></td><?php endif;?>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><?=$home_team;?><span>(p:<?=$score_board['home_pitcher'];?>)</span></td>
                        <td><span class="red">1.45</span><span class="gray">4.5 U</span><span class="red">1.45</span></td>
                        <?php foreach($score_board['home_score_board'] as $key=>$item): ?>
                            <?php if($inning[1]==1 && $key+1==$inning[0] && !$game_end): ?><td><span class="red"><b><?=$item;?></b></span></td></td>
                            <?php else: ?><td><?=$item;?></td><?php endif;?>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
            <p class="relay">
                <span class="relay02"></span><b>문자 중계</b>
                <span class="rive"><?=($score_board['message']=='')? '경기 시작 전입니다.' : strip_tags($score_board['message']); ?></span>
            </p>
            <ul class="othergame">
                <?php foreach($another_games as $item): ?>
                    <li>
                        <b class="team"><?=$item->away;?></b><span class="<?=get_team_initial($item->away);?>"></span><b class="score"><?=($item->away_score=='')? '0' : $item->away_score;?></b>vs</span><b class="score"><?=($item->home_score=='')? '0' : $item->home_score;?></b><span class="<?=get_team_initial($item->home);?>"></span><b class="team"><?=$item->home;?></b>
                        <div><a href="/baseball/match_information/<?=$item->no;?>/0">매치정보<span></span></a></div>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="clear"></div>
            <ul class="live_onoff">
                <li><a href="">라이브 중계 닫기<span class="arrow04_up"></span></a></li>
                <li class="active"><a href="">라이브 중계 열기<span class="arrow04_down"></span></a></li>
            </ul>
        </div>
    </div>

    <div class="matchTab">
        <ul class="title">
            <li class="on"><a href="#r1">팀간 비교</a></li>
            <li><a href="#r2">선발 비교</a></li>
        </ul>
        <ul class="result">
            <li id="r1" class="on"><!-- 팀간 비교 -->
                <div class="opinion">
                    <div class="graph">
                        <div class="total">
                            <span class="left_g">55%</span>
                            <div class="left_g">
                                <div><div style="width:55%"><p><span>415명</span></p></div></div>
                            </div>
                            <p>일치된 의견</p>
                            <div class="right_g">
                                <div><div style="width:45%"><p><span>375명</span></p></div></div>
                            </div>
                            <span class="right_g">45%</span>
                        </div>
                        <div>
                            <span class="left_g"><?=number_format($away_win_rate,3);?></span>
                            <div class="left_g">
                                <div><div style="width:<?=number_format($away_win_rate*100,0);?>%"><span><?=$away_win;?>승 <?=$away_tie;?>무 <?=$away_lose;?>패</span></div></div>
                            </div>
                            <p>승률</p>
                            <div class="right_g">
                                <div><div style="width:<?=number_format($home_win_rate*100,0);?>%"><span><?=$home_win;?>승 <?=$home_tie;?>무 <?=$home_lose;?>패</span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($home_win_rate,3);?></span>
                        </div>
                        <div>
                            <span class="left_g"><?=number_format($handicap_away_win_rate,3);?></span>
                            <div class="left_g">
                                <div><div style="width:<?=number_format($handicap_away_win_rate*100,0);?>%"><span><?=$handicap_away_win;?>승 <?=$handicap_away_tie;?>무 <?=$handicap_away_lose;?>패</span></div></div>
                            </div>
                            <p>핸디캡 1.5</p>
                            <div class="right_g">
                                <div><div style="width:<?=number_format($handicap_home_win_rate*100,0);?>%"><span><?=$handicap_home_win;?>승 <?=$handicap_home_tie;?>무 <?=$handicap_home_lose;?>패</span></div></div>
                            </div>
                            <span class="right_g"><?=number_format($handicap_home_win_rate,3);?></span>
                        </div>
                        <div>
                            <span class="left_g">50%</span>
                            <div class="left_g">
                                <div><div style="width:52%"><span>15/30</span></div></div>
                            </div>
                            <p>오버(<?=$over_under_reference_value;?>)</p>
                            <div class="right_g">
                                <div><div style="width:50%"><span>15/30</span></div></div>
                            </div>
                            <span class="right_g">50%</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$plus_away_rank[$data->away];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$plus_away_rank[$data->away];?>0%"><span><?=$plus_away_rank[$data->away.'_plus'];?></span></div></div>
                            </div>
                            <p>득점(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$plus_home_rank[$data->home];?>0%"><span><?=$plus_home_rank[$data->home.'_plus'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$plus_home_rank[$data->home];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$plus_away_rank[$data->away.'_lose'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$plus_away_rank[$data->away.'_lose'];?>0%"><span><?=$plus_away_rank[$data->away.'_lose_plus'];?></span></div></div>
                            </div>
                            <p>실점(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$plus_home_rank[$data->home.'_lose'];?>0%"><span><?=$plus_home_rank[$data->home.'_lose_plus'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$plus_home_rank[$data->home.'_lose'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_avg'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$team_total[0]['rank_avg'];?>0%"><span><?=$team_total[0]['avg'];?></span></div></div>
                            </div>
                            <p>팀타율</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$team_total[1]['rank_avg'];?>0%"><span><?=$team_total[1]['avg']?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_avg'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_era'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$team_total[0]['rank_era'];?>0%"><span><?=number_format($team_total[0]['era'],2);?></span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$team_total[1]['rank_era'];?>0%"><span><?=number_format($team_total[1]['era'],2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_era'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_h'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$team_total[0]['rank_h'];?>0%"><span><?=number_format($team_total[0]['h']/$team_total[0]['g'],2);?></span></div></div>
                            </div>
                            <p>안타(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$team_total[1]['rank_h'];?>0%"><span><?=number_format($team_total[1]['h']/$team_total[1]['g'],2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_h'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_hr'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=11-$team_total[0]['rank_hr'];?>0%"><span><?=$team_total[0]['hr'];?></span></div></div>
                            </div>
                            <p>팀홈런</p>
                            <div class="right_g">
                                <div><div style="width:<?=11-$team_total[1]['rank_hr'];?>0%"><span><?=$team_total[1]['hr'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_hr'];?>위</span>
                        </div>
                    </div>
                </div>
                <div class="opponent">
                    <h3 class="center">2017시즌 상대전적 결과</h3>
                    <div class="select" style="top:0;">
                        <p><span class="pp">최근 경기</span><span class="pa"></span></p>
                        <ul>
                            <li><a href="">10경기</a></li>
                            <li><a href="">5경기</a></li>
                            <li><a href="">3경기</a></li>
                        </ul>
                    </div>
                    <ul class="opp01">
                        <li>
                            <h4><?=$away_team;?></h4>
                            <table class="table_default">
                                <caption></caption>
                                <colgroup>
                                    <col width="34px"/>
                                    <col width="23px"/>
                                    <col width="46px"/>
                                    <col width="69px"/>
                                    <col width="46px"/>
                                    <col width="46px"/>
                                    <col width="46px"/>
                                    <col width="46px"/>
                                    <col width="55px"/>
                                </colgroup>
                                <tr>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>득점</th>
                                    <th>방어율</th>
                                    <th>안타</th>
                                    <th>홈런</th>
                                    <th>볼넷</th>
                                    <th>삼진</th>
                                    <th>타율</th>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>25</td>
                                    <td>3.55</td>
                                    <td>45</td>
                                    <td>5</td>
                                    <td>35</td>
                                    <td>25</td>
                                    <td>0.295</td>
                                </tr>
                            </table>
                            <div class="before">
                                <table class="table_default">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="34px"/>
                                        <col width="23px"/>
                                        <col width="46px"/>
                                        <col width="69px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="55px"/>
                                    </colgroup>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                </table>
                            </div>
                            <ul>
                                <li>
                                    <span><?=$relative_match_result['away_win_rate'];?>%</span>
                                    <div>
                                        <p style="width:<?=$relative_match_result['away_win_rate'];?>%">
                                            <span><?=$relative_match_result['away_win'];?>승 <?=$relative_match_result['away_lose'];?>패</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span><?=number_format($relative_match_result['ou_count']/$relative_match_result['g']*100);?>%</span>
                                    <div>
                                        <p style="width:<?=number_format($relative_match_result['ou_count']/$relative_match_result['g']*100);?>%"><span><?=$relative_match_result['ou_count'];?>/<?=$relative_match_result['g'];?> Over</span></p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div>
                                <img src="/public/lib/image/game/vs.jpg" alt="vs" />
                                <a href="" class="before_btn">통산 전적보기 <span></span></a>
                            </div>
                            <div class="before">
                                <ul>
                                    <li>2016 시즌</li>
                                    <li>2015 시즌</li>
                                    <li>2014 시즌</li>
                                    <li>2013 시즌</li>
                                    <li>합 계</li>
                                </ul>
                            </div>
                            <ul>
                                <li>승률</li>
                                <li>
                                    <div class="select OU">
                                        <p><span class="pp"><?=$over_under_reference_value;?></span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href=""><?=$over_under_reference_value+1;?></a></li>
                                            <li><a href=""><?=$over_under_reference_value;?></a></li>
                                            <li><a href=""><?=$over_under_reference_value-1;?></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4><?=$home_team;?></h4>
                            <table class="table_default">
                                <caption></caption>
                                <colgroup>
                                    <col width=""/>
                                </colgroup>
                                <tr>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>득점</th>
                                    <th>방어율</th>
                                    <th>안타</th>
                                    <th>홈런</th>
                                    <th>볼넷</th>
                                    <th>삼진</th>
                                    <th>타율</th>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>25</td>
                                    <td>3.55</td>
                                    <td>45</td>
                                    <td>5</td>
                                    <td>35</td>
                                    <td>25</td>
                                    <td>0.295</td>
                                </tr>
                            </table>
                            <div class="before">
                                <table class="table_default">
                                    <caption></caption>
                                    <colgroup>
                                        <col width="34px"/>
                                        <col width="23px"/>
                                        <col width="46px"/>
                                        <col width="69px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="46px"/>
                                        <col width="55px"/>
                                    </colgroup>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>25</td>
                                        <td>3.55</td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>35</td>
                                        <td>25</td>
                                        <td>0.295</td>
                                    </tr>
                                </table>
                            </div>
                            <ul>
                                <li>
                                    <div>
                                        <p style="width:<?=100-$relative_match_result['away_win_rate'];?>%">
                                            <span><?=$relative_match_result['away_lose'];?>승 <?=$relative_match_result['away_win'];?>패</span>
                                        </p>
                                    </div>
                                    <span><?=100-$relative_match_result['away_win_rate'];?>%</span>
                                </li>
                                <li>
                                    <div>
                                        <p style="width:<?=number_format(($relative_match_result['g']-$relative_match_result['ou_count'])/$relative_match_result['g']*100);?>%"><span><?=$relative_match_result['g']-$relative_match_result['ou_count'];?>/<?=$relative_match_result['g'];?> Under</span></p>
                                    </div>
                                    <span><?=number_format(($relative_match_result['g']-$relative_match_result['ou_count'])/$relative_match_result['g']*100);?>%</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="opp02">
                        <li>
                            <?php foreach($relative_match_result['away_win_lose_str'] as $key=>$item): ?><a href="/baseball/match_information/<?=$relative_match_result['away_game_no'][$key];?>/0" class="result_btn"><img src="/public/lib/image/base/btn_<?=$item;?>.png" alt="" title=""/></a><?php endforeach;?>
                        </li>
                        <li>
                            <?php foreach($relative_match_result['ou_str'] as $item): ?>
                                <span class="<?=$item;?>L"><?=$item;?></span>
                            <?php endforeach;?>
                        </li>
                        <li>
                            <?php foreach($relative_match_result['home_win_lose_str'] as $key=>$item): ?><a href="/baseball/match_information/<?=$relative_match_result['away_game_no'][$key];?>/0" class="result_btn"><img src="/public/lib/image/base/btn_<?=$item;?>.png" alt="" title=""/></a><?php endforeach;?>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <table class="table_default opp03">
                        <caption></caption>
                        <colgroup>
                            <col width="75px"/>
                            <col width="*"/>
                            <col width="90px"/>
                            <col width="53px"/>
                            <col width="47px"/>
                            <col width="72px"/>
                            <col width="67px"/>
                            <col width="45px"/>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th>날짜</th>
                            <th>매치명</th>
                            <th>결과</th>
                            <th>승</th>
                            <th>패</th>
                            <th>&nbsp;</th>
                            <th>Over</th>
                            <th>Under</th>
                            <th>DATA</th>
                        </tr>
                        <?php foreach($relative_match_result['data'] as $item): ?>
                            <tr>
                                <td><?=$item->date;?></td>
                                <td>
                                    <?php if($item->away_score > $item->home_score) echo '<span class="red">';?><?=$full_name_team[$item->away];?><?php if($item->away_score > $item->home_score) echo '</span>';?>
                                    vs
                                    <?php if($item->away_score < $item->home_score) echo '<span class="red">';?><?=$full_name_team[$item->home];?><?php if($item->away_score > $item->home_score) echo '</span>';?>
                                </td>
                                <td class="score"><?=$item->away_score;?>:<?=$item->home_score;?></td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="graybox"><span>8.5</span></td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="data">
                                  <span>
                                    <span class="b_BTN2"><a href="/baseball/match_information/<?=$item->no;?>/0">경기기록</a></span>
                                    <span class="r_BTN"><a href="">전문가 의견</a></span>
                                    <span class="g_BTN"><a href="">블로그</a></span>
                                    <span class="y_BTN"><a href="">배당률</a></span>
                                  </span>
                                  <?php include('match_2_3.php'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </li>
            <?php include('match_2_2.php'); ?>
        </ul>
    </div>

    <!--오늘의 승리팀 응원하기-->
    <div class="cheer">
        <h3 class="noBorder">오늘의 승리팀 응원하기</h3>
        <div class="teams">
            <div class="left">
                <div class="box_w">
                    <div class="c_logo"><span class="<?=$away_initial;?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=$away_team;?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add(<?=$schedule_no;?>, 'away')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <div style="width:<?=$away_cheer;?>%"><b><?=$data->away_cheer;?></b></div>
                    </div>
                    <span><?=number_format($away_cheer,0);?>%</span>
                </div>
            </div>
            <div class="right">
                <div class="box_w">
                    <div class="c_logo"><span class="<?=$home_initial;?>_L"></span></div>
                    <div class="box">
                        <div>
                            <h3><?=$home_team;?></h3>
                            <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                        </div>
                    </div>
                    <a href="javascript:add(<?=$schedule_no;?>, 'home')" class="cheer_btn">응원하기</a>
                </div>
                <div class="graph_w">
                    <div class="graph">
                        <div style="width:<?=$home_cheer;?>%"><b><?=$data->home_cheer;?></b></div>
                    </div>
                    <span><?=$home_cheer;?>%</span>
                </div>
            </div>
            <div class="center"><span class="KBO_bb">KBO</span></div>
        </div>
        <p>응원하기는 경기마다 1인당 1번씩만 가능합니다. 여러분이 응원하시는 모든 팀이 승리하기를 기원합니다.</p>
        <div class="comment">
            <ul>
                <?php foreach($comment_list as $item): ?>
                    <li>
                        <h5>스포네비***</h5>
                        <p><?=$item->content;?></p>
                        <div>
                            <span><?=$item->insert_dt;?></span>
                            <span><?=$item->ip;?></span>
                            <p class="like"><a href="javascript:add(<?=$item->no;?>, 'good')"><?=$item->good;?></a></p>
                            <p class="bed"><a href="javascript:add(<?=$item->no;?>, 'bad')"><?=$item->bad;?></a></p>
                        </div>
                    </li>
                <?php endforeach; if($comment_list==null):?><li><h5>등록된 댓글이 없습니다</emdfh></h5></li><?php endif; ?>
            </ul>
        </div>
        <div class="page">
            <?=$this->pagination->create_links();?>
        </div>
        <div class="textarea_box">
            <div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="javascript:insert_comment()">입력</a></div>
            <p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
        </div>
    </div>
</div>

<script type="text/javascript">
    //textarea_box input
    $(document).ready(function(){
        document.body.scrollTop=<?=$scroll_top;?>;

        $('#opinion_text').click(function(){
            var state = $('.opinion_text').css('display');
            if(state == 'none'){
                $('#opinion_text').removeClass('on');
            }else{
                $('#opinion_text').addClass('on');
            }
        });

        //matchTab
        $(".title li:eq(0) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r1").addClass("on");
        $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});
        $(".title li:eq(1) a").click(function(){ $(".result > li").removeClass("on"); $(".result li#r2").addClass("on");
        $(".title li").removeClass("on"); $(this).parent().addClass("on"); return false;});

        //live_onoff 라이브중계 열고닫기
        $(".live_onoff li:eq(0) a").click(function(){
            $(this).parent().removeClass("active");
            $(".livescore > .table").slideUp();
            $(".livescore > p.relay").slideUp();
            $(".livescore > .othergame").slideUp();
            $(this).parent().siblings("li").addClass("active");
            return false;
        });
        $(".live_onoff li:eq(1) a").click(function(){
            $(this).parent().removeClass("active");
            $(".livescore > .table").slideDown();
            $(".livescore > p.relay").slideDown();
            $(".livescore > .othergame").slideDown();
            $(this).parent().siblings("li").addClass("active");
            return false;
        });

        //line_pop 오픈
        $(".line_btn a").click(function(){
            $(this).parent().parent().siblings(".line_pop").slideDown();
            return false;
        });
        //line_pop 닫기
        $(".line_pop .close_btn a").click(function(){
            $(this).parent().parent(".line_pop").slideUp();
            return false;
        });


        $(".before_btn").click(function(){
            $(".opp01 .before").slideToggle();
            return false;
        });

        Highcharts.chart('line_graph01', {
            chart: {
                height: 100,
                type: 'line'
            },
            xAxis: {
                //type: 'minute',
                tickInterval: 1
            },
            yAxis: {
                type: 'logarithmic',
                minorTickInterval: 0
            },
            tooltip: {
                headerFormat: '<b>{}</b>',
                pointFormat: '{point.x}분, 배당률 = {point.y}'
            },

            series: [{
                data: [0.5,2,3,5,2,2,3,3,4,4,2,3,5,3,2,3,4,5,5.5],
                pointStart: 0
            }]

        });
    });

    function add(no, flag){
        $.ajax({
            url:"/baseball/add_ajax",
            type:"POST",
            data:{no:no, flag:flag},
            complete:function(){
                location.replace('/baseball/match_information/<?=$schedule_no;?>/'+document.body.scrollTop);
            }
        });
    }
    function insert_comment(){
        $.ajax({
            url:"/baseball/insert_comment_ajax",
            type:"POST",
            data:{schedule_no:<?=$schedule_no;?>, content:$('#opinion_text').val()},
            complete:function(){
                location.replace('/baseball/match_information/<?=$schedule_no;?>/'+document.body.scrollTop);
            }
        });
    }
</script>
