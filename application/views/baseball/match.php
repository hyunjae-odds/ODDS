<?php
    function get_team_full_name($team_name){
        $full_name='';
        if($team_name=='LG') $full_name='LG 트윈스';
        else if($team_name=='NC') $full_name='NC 다이노스';
        else if($team_name=='KIA') $full_name='KIA 타이거즈';
        else if($team_name=='SK') $full_name='SK 와이번즈';
        else if($team_name=='kt') $full_name='kt 위즈';
        else if($team_name=='삼성') $full_name='삼성 라이온즈';
        else if($team_name=='넥센') $full_name='넥센 히어로즈';
        else if($team_name=='두산') $full_name='두산 베어스';
        else if($team_name=='롯데') $full_name='롯데 자이언츠';
        else if($team_name=='한화') $full_name='한화 이글스';

        return $full_name;
    }
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
        else $location='기타';

        return $location;
    }

    $game_date=$data->date;
    $game_stadium=$data->stadium;
    $game_location=get_game_location($game_stadium);
    $away_team=get_team_full_name($data->away);
    $away_initial=get_team_initial($data->away);
    $away_cheer=($data->home_cheer+$data->away_cheer!=0) ? ($data->away_cheer/($data->home_cheer+$data->away_cheer))*100 : 0;
    $home_team=get_team_full_name($data->home);
    $home_initial=get_team_initial($data->home);
    $home_cheer=($away_cheer==0) ? 0 : 100-number_format($away_cheer,0);

    foreach($team_total as $item):
        if($data->away==$item['team']):
            $away_win=$item['win'];
            $away_lose=$item['lose'];
            $away_tie=$item['tie'];
            $away_win_rate=$item['win_rate'];
        endif;
        if($data->home==$item['team']):
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
                    <span>선발 : 데이비드 허프</span>
                </div>
                <div class="team_logo"><span class="<?=$away_initial;?>_L"></span></div>
                <div class="num"><?=$data->away_score;?></div>
                <p>VS</p>
                <div class="num"><?=$data->home_score;?></div>
                <div class="team_logo"><span class="<?=$home_initial;?>_L"></span></div>
                <div class="team">
                    <p class="st"><?=$data->home_rank;?>위</p>
                    <p><?=$home_team;?></p>
                    <span>선발 : 윤성환</span>
                </div>
            </div>
            <ul>
                <li><?=CURRENT_YEAR;?>.<?=$game_date;?></li>
                <li><?=$game_stadium;?> 경기장</li>
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
                        <td><?=$away_team;?><span>(p:소사)</span></td>
                        <td><span class="red">1.45</span><span class="gray">4.5 O</span><span class="red">1.45</span></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td><span class="red"><b>2</b></span></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>2</td>
                        <td>6</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><?=$home_team;?><span>(p:소사소사)</span></td>
                        <td><span class="red">1.45</span><span class="gray">4.5 U</span><span class="red">1.45</span></td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>1</td>
                        <td>2</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
            <p class="relay">
                <span class="relay02"></span><b>문자 중계</b>
                <span class="rive">1루주자 류지혁 : 아웃 (유격수->1루수 1루 터치아웃)</span>
            </p>
            <ul class="othergame">
                <li>
                    <b class="team">NC</b><span class="eagles"></span><b class="score">1</b>vs</span><b class="score">3</b><span class="eagles"></span><b class="team">한화</b>
                    <div><a href="match.php">매치정보<span></span></a></div>
                </li>
                <li>
                    <b class="team">NC</b><span class="eagles"></span><b class="score">1</b>vs</span><b class="score">3</b><span class="eagles"></span><b class="team">한화</b>
                    <div><a href="match.php">매치정보<span></span></a></div>
                </li>
                <li>
                    <b class="team">NC</b><span class="eagles"></span><b class="score">1</b>vs</span><b class="score">3</b><span class="eagles"></span><b class="team">한화</b>
                    <div><a href="match.php">매치정보<span></span></a></div>
                </li>
                <li>
                    <b class="team">NC</b><span class="eagles"></span><b class="score">1</b>vs</span><b class="score">3</b><span class="eagles"></span><b class="team">한화</b>
                    <div><a href="match.php">매치정보<span></span></a></div>
                </li>
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
                            <p>오버(9.5)</p>
                            <div class="right_g">
                                <div><div style="width:50%"><span>15/30</span></div></div>
                            </div>
                            <span class="right_g">50%</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$plus_away_rank[$data->away];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=10-$plus_away_rank[$data->away];?>0%"><span><?=$plus_away_rank[$data->away.'_plus'];?></span></div></div>
                            </div>
                            <p>득점(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:<?=10-$plus_home_rank[$data->home];?>0%"><span><?=$plus_home_rank[$data->home.'_plus'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$plus_home_rank[$data->home];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$plus_away_rank[$data->away.'_lose'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:<?=10-$plus_away_rank[$data->away.'_lose'];?>0%"><span><?=$plus_away_rank[$data->away.'_lose_plus'];?></span></div></div>
                            </div>
                            <p>실점(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:<?=10-$plus_home_rank[$data->home.'_lose'];?>0%"><span><?=$plus_home_rank[$data->home.'_lose_plus'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$plus_home_rank[$data->home.'_lose'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_avg'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:32%"><span><?=$team_total[0]['avg'];?></span></div></div>
                            </div>
                            <p>팀타율</p>
                            <div class="right_g">
                                <div><div style="width:30%"><span><?=$team_total[1]['avg']?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_avg'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_era'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:72%"><span><?=number_format($team_total[0]['era'],2);?></span></div></div>
                            </div>
                            <p>방어율</p>
                            <div class="right_g">
                                <div><div style="width:70%"><span><?=number_format($team_total[1]['era'],2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_era'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_h'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:82%"><span><?=number_format($team_total[0]['h']/$team_total[0]['g'],2);?></span></div></div>
                            </div>
                            <p>안타(경기당)</p>
                            <div class="right_g">
                                <div><div style="width:80%"><span><?=number_format($team_total[1]['h']/$team_total[1]['g'],2);?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_h'];?>위</span>
                        </div>
                        <div>
                            <span class="left_g"><?=$team_total[0]['rank_hr'];?>위</span>
                            <div class="left_g">
                                <div><div style="width:32%"><span><?=$team_total[0]['hr'];?></span></div></div>
                            </div>
                            <p>팀홈런</p>
                            <div class="right_g">
                                <div><div style="width:30%"><span><?=$team_total[1]['hr'];?></span></div></div>
                            </div>
                            <span class="right_g"><?=$team_total[1]['rank_hr'];?>위</span>
                        </div>
                    </div>
                </div>
                <div class="lineUP KBO">
                    <h3>LINE UP</h3>
                    <div class="KBO_lineup_t">
                        <div class="left">
                            <div class="lineup_bar">
                                <div>
                                    <h4>신정락</h4>
                                    <span>No. 48</span>
                                    <b class="red">vs 삼성</b>
                                </div>
                                <p><b>3</b>승 <b>1</b>패 평균자책 <b>1.81</b></p>
                                <p class="line_btn"><a href="">전체 라인업보기<span></span></a></p>
                            </div>
                            <div class="line_pop">
                                <h3><?=$away_team;?> 라인업</h3>
                                <div>
                                    <h4>투수 라인업</h4>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                        </colgroup>
                                        <tr>
                                            <th>이름</th>
                                            <th>이닝</th>
                                            <th>투구수</th>
                                            <th>피안타</th>
                                            <th>홈런</th>
                                            <th>볼넷</th>
                                            <th>삼진</th>
                                            <th>실책</th>
                                            <th>자책</th>
                                            <th>평균<br />자책</th>
                                            <th>vs<br />자책</th>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                    </table>
                                    <h4>타자 라인업</h4>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                        </colgroup>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>타순</th>
                                            <th>이름</th>
                                            <th>포지션</th>
                                            <th>타수</th>
                                            <th>득점</th>
                                            <th>안타</th>
                                            <th>타점</th>
                                            <th>홈런</th>
                                            <th>볼넷</th>
                                            <th>삼진</th>
                                            <th>사구</th>
                                            <th>평균<br />타율</th>
                                            <th>vs<br />타율</th>
                                        </tr>
                                        <tr>
                                            <td><span class="up_arr01"></span></td>
                                            <td>1</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>2</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>3</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>4</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>5</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>6</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>7</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>8</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>9</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="down_arr01"></span></td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="close_btn"><a href=""></a></p>
                            </div>
                            <div class="pic_line"><img src="/public/lib/image/game/pic05.jpg" alt="" /></div>
                            <table class="table_default">
                                <caption></caption>
                                <colgroup>
                                </colgroup>
                                <tr>
                                    <th>성적</th>
                                    <th>경기</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>세</th>
                                    <th>이닝</th>
                                    <th>삼진</th>
                                    <th>볼넷</th>
                                    <th>평균자책</th>
                                </tr>
                                <tr>
                                    <td>4월</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                                <tr>
                                    <td>시즌</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                                <tr>
                                    <td>통산</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="right">
                            <div class="lineup_bar">
                                <div>
                                    <h4>신정락</h4>
                                    <span>No. 48</span>
                                    <b class="red">vs 삼성</b>
                                </div>
                                <p><b>3</b>승 <b>1</b>패 평균자책 <b>1.81</b></p>
                                <p class="line_btn"><a href="">전체 라인업보기<span></span></a></p>
                            </div>
                            <div class="line_pop">
                                <h3><?=$home_team;?> 라인업</h3>
                                <div>
                                    <h4>투수 라인업</h4>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                        </colgroup>
                                        <tr>
                                            <th>이름</th>
                                            <th>이닝</th>
                                            <th>투구수</th>
                                            <th>피안타</th>
                                            <th>홈런</th>
                                            <th>볼넷</th>
                                            <th>삼진</th>
                                            <th>실책</th>
                                            <th>자책</th>
                                            <th>평균<br />자책</th>
                                            <th>vs<br />자책</th>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>신정락</span></td>
                                            <td>4.1</td>
                                            <td>88</td>
                                            <td>5</td>
                                            <td>0</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><span>3.40</span></td>
                                            <td><span>2.14</span></td>
                                        </tr>
                                    </table>
                                    <h4>타자 라인업</h4>
                                    <table class="table_default">
                                        <caption></caption>
                                        <colgroup>
                                        </colgroup>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>타순</th>
                                            <th>이름</th>
                                            <th>포지션</th>
                                            <th>타수</th>
                                            <th>득점</th>
                                            <th>안타</th>
                                            <th>타점</th>
                                            <th>홈런</th>
                                            <th>볼넷</th>
                                            <th>삼진</th>
                                            <th>사구</th>
                                            <th>평균<br />타율</th>
                                            <th>vs<br />타율</th>
                                        </tr>
                                        <tr>
                                            <td><span class="up_arr01"></span></td>
                                            <td>1</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>2</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>3</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>4</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>5</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>6</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>7</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>8</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>9</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="down_arr01"></span></td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>벤치</td>
                                            <td><span>신정락</span></td>
                                            <td>유격수</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td><span>0.361</span></td>
                                            <td><span>0.361</span></td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="close_btn"><a href=""></a></p>
                            </div>
                            <div class="pic_line"><img src="/public/lib/image/game/pic05.jpg" alt="" /></div>
                            <table class="table_default">
                                <caption></caption>
                                <colgroup>
                                </colgroup>
                                <tr>
                                    <th>성적</th>
                                    <th>경기</th>
                                    <th>승</th>
                                    <th>패</th>
                                    <th>세</th>
                                    <th>이닝</th>
                                    <th>삼진</th>
                                    <th>볼넷</th>
                                    <th>평균자책</th>
                                </tr>
                                <tr>
                                    <td>4월</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                                <tr>
                                    <td>시즌</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                                <tr>
                                    <td>통산</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>29.2</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td><span>2.35</span></td>
                                </tr>
                            </table>
                        </div>
                        <span class="clear"></span>
                    </div>
                </div>
                <div class="betGraph_w KBO">
                    <div class="betGraph">
                        <h3>ODDSCONNECT BET GRAPH</h3>
                        <p>BET 정보는 5분단위로 갱신됩니다.</p>
                        <div class="OU">
                            <ul class="blackTab r_tit">
                                <li><a href="#r02">승무패</a></li>
                                <li class="on"><a href="#r01">O/U</a></li>
                            </ul>
                            <p class="yellow"><a href=""><span class="MU_s"></span>1.14</a></p>
                            <p class="blue"><a href=""><span class="arsenal_s"></span>1.14</a></p>
                        </div>
                        <div class="lineGraph">
                            <div class="line_graph_w"><div id="line_graph01" class="line_graph"></div></div>
                        </div>
                        <p class="Re"><a href=""><span class="re"></span>새로고침</a></p>
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
                            <h4>LG 트윈스</h4>
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
                                    <span>80%</span>
                                    <div>
                                        <p style="width:80%"><span>5승 5패</span></p>
                                    </div>
                                </li>
                                <li>
                                    <span>67%</span>
                                    <div>
                                        <p style="width:67%"><span>5/5 Over</span></p>
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
                                        <p><span class="pp">10.5</span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="">10.5</a></li>
                                            <li><a href="">9.5</a></li>
                                            <li><a href="">8.5</a></li>
                                            <li><a href="">7.5</a></li>
                                            <li><a href="">6.5</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>삼성 라이온즈</h4>
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
                                        <p style="width:80%"><span>5승 5패</span></p>
                                    </div>
                                    <span>80%</span>
                                </li>
                                <li>
                                    <div>
                                        <p style="width:67%"><span>5/5 Under</span></p>
                                    </div>
                                    <span>67%</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="opp02">
                        <li><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></li>
                        <li><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="minusL">minus</span><span class="minusL">minus</span><span class="plusL">plus</span></li>
                        <li><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="두산 4:1 넥센"/></a></li>
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
                        <tr>
                            <td>17.04.23</td>
                            <td><span class="red">LG 트윈스</span>  vs  삼성 라이온즈</td>
                            <td class="score">4:1</td>
                            <td><span class="black">1.24</span></td>
                            <td>2.13</td>
                            <td class="graybox"><span>8.5</span></td>
                            <td><span class="black">1.24</span></td>
                            <td>2.13</td>
                            <td class="data">
                  <span>
                    <span class="b_BTN2"><a href="match_full.php">경기기록</a></span>
                    <span class="r_BTN"><a href="">전문가 의견</a></span>
                    <span class="g_BTN"><a href="">블로그</a></span>
                    <span class="y_BTN"><a href="">배당률</a></span>
                  </span>
                                <!-- 블로그팝업 -->
                                <div class="g_pop popup" style="display:none;">
                                    <h3>관련 블로그 보기</h3>
                                    <ul>
                                        <li>
                                            <b>블로그 제목<span>블로그별명</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                        <li>
                                            <b>블로그 제목<span>블로그별명</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                        <li>
                                            <b>블로그 제목<span>블로그별명</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                    </ul>
                                    <div class="num">
                                        <span class="on"><a href="">1</a></span>
                                        <span><a href="">2</a></span>
                                        <span><a href="">3</a></span>
                                        <span><a href="">4</a></span>
                                        <span><a href="">5</a></span>
                                    </div>
                                    <div class="close"><a href="">close</a></div>
                                </div>
                                <!-- 전문가팝업 -->
                                <div class="r_pop popup" style="display:none;">
                                    <h3>전문가 의견 보기</h3>
                                    <ul>
                                        <li>
                                            <b>설민석<span>실전배팅전문가</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                        <li>
                                            <b>설민석<span>실전배팅전문가</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                        <li>
                                            <b>설민석<span>실전배팅전문가</span></b>
                                            <p>박병호의 부담감으로 인한<br />예상경기가..</p>
                                        </li>
                                    </ul>
                                    <div class="num">
                                        <span class="on"><a href="">1</a></span>
                                        <span><a href="">2</a></span>
                                        <span><a href="">3</a></span>
                                        <span><a href="">4</a></span>
                                        <span><a href="">5</a></span>
                                    </div>
                                    <div class="close"><a href="">close</a></div>
                                </div>
                                <!-- 배당률팝업 -->
                                <div class="y_pop popup" style="display:none;">
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
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="match_w">
                    <h3 class="center">최근 경기 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="60px"/>
                            <col width="*"/>
                            <col width="55px"/>
                            <col width="40px"/>
                            <col width="45px"/>
                            <col width="65px"/>
                            <col width="60px"/>
                            <col width="53px"/>
                            <col width="60px"/>
                            <col width="63px"/>
                            <col width="80px"/>
                            <col width="270px"/>
                        </colgroup>
                        <tr>
                            <th>순위</th>
                            <th class="left">팀</th>
                            <th>경기</th>
                            <th>승</th>
                            <th>패</th>
                            <th>득:실</th>
                            <th>방어율</th>
                            <th>안타</th>
                            <th>홈런</th>
                            <th>타율</th>
                            <th>O/U</th>
                            <th>최근 10경기</th>
                        </tr>
                        <?php foreach($team_total as $item): ?>
                            <tr>
                                <td><?=$item['rank'];?></td>
                                <td class="left"><?=$item['team'];?></td>
                                <td><?=$item['g'];?></td>
                                <td><?=$item['win'];?></td>
                                <td><?=$item['lose'];?></td>
                                <td><?=$item['plus'];?>:<?=$item['minus'];?></td>
                                <td><?=number_format($item['era'],2);?></td>
                                <td><?=$item['h'];?></td>
                                <td><?=$item['hr'];?></td>
                                <td><?=$item['avg'];?></td>
                                <td><span class="gray">(8.5)</span> 5/5</td>
                                <td><?php $exp=explode(';', $item['recent']);
                                    foreach($exp as $value) :
                                        if($value=='승'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title="'.$item['team'].'"/>';
                                        elseif($value=='패'): echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title="'.$item['team'].'"/></a>';
                                        else: echo '<a href="javascript:void(0)" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title="'.$item['team'].'"/></a>';
                                        endif;
                                    endforeach; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <h4 class="h4_02">원정팀 최근 경기 결과<span></span></h4>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="50px"/>
                            <col width="60px"/>
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
                            <th>결과</th>
                            <th>날짜</th>
                            <th class="left pl20">매치명</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>&nbsp;</th>
                            <th>Over</th>
                            <th>Under</th>
                            <th>DATA</th>
                        </tr>
                        <?php foreach($away_result as $item): ?>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="result_btn">
                                        <?php if($item['win_lose']=='승'):?><img src="/public/lib/image/base/btn_win.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/>
                                        <?php elseif($item['win_lose']=='패'):?><img src="/public/lib/image/base/btn_lose.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/>
                                        <?php else:?><img src="/public/lib/image/base/btn_dra.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/><?php endif; ?>
                                    </a>
                                </td>
                                <td><?=$item['date'];?></td>
                                <td class="left pl20"><span <?php if($item['away']==$data->away) echo 'class="red"';?>><?=$item['away'];?></span> vs <span <?php if($item['home']==$data->away) echo 'class="red"';?>><?=$item['home'];?></td>
                                <td class="score"><?=$item['score'];?></td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="right gray">8.5</td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="data">
                                    <span>
                                        <span class="b_BTN2"><a href="/baseball/match_information/<?=$item['no'];?>/0">경기기록</a></span>
                                        <span class="r_BTN"><a href="javascript:void(0)">전문가 의견</a></span>
                                        <span class="g_BTN"><a href="javascript:void(0)">블로그</a></span>
                                        <span class="y_BTN"><a href="javascript:void(0)">배당률</a></span>
                                    </span>
                                    <?php include('match_2_3.php'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <h4 class="h4_02">홈팀 최근 경기 결과<span></span></h4>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="50px"/>
                            <col width="60px"/>
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
                            <th>결과</th>
                            <th>날짜</th>
                            <th class="left pl20">매치명</th>
                            <th>스코어</th>
                            <th>승</th>
                            <th>패</th>
                            <th>&nbsp;</th>
                            <th>Over</th>
                            <th>Under</th>
                            <th>DATA</th>
                        </tr>
                        <?php foreach($home_result as $item): ?>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="result_btn">
                                        <?php if($item['win_lose']=='승'):?><img src="/public/lib/image/base/btn_win.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/>
                                        <?php elseif($item['win_lose']=='패'):?><img src="/public/lib/image/base/btn_lose.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/>
                                        <?php else:?><img src="/public/lib/image/base/btn_dra.png" alt="" title="<?=$item['away'].' '.$item['score'].' '.$item['home'];?>"/><?php endif; ?>
                                    </a>
                                </td>
                                <td><?=$item['date'];?></td>
                                <td class="left pl20"><span <?php if($item['away']==$data->home) echo 'class="red"';?>><?=$item['away'];?></span> vs <span <?php if($item['home']==$data->home) echo 'class="red"';?>><?=$item['home'];?></td>
                                <td class="score"><?=$item['score'];?></td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="right gray">8.5</td>
                                <td><span class="black">1.24</span></td>
                                <td>2.13</td>
                                <td class="data">
                                    <span>
                                        <span class="b_BTN2"><a href="/baseball/match_information/<?=$item['no'];?>/0">경기기록</a></span>
                                        <span class="r_BTN"><a href="javascript:void(0)">전문가 의견</a></span>
                                        <span class="g_BTN"><a href="javascript:void(0)">블로그</a></span>
                                        <span class="y_BTN"><a href="javascript:void(0)">배당률</a></span>
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

    <?php include('match_3.php'); ?>
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
</script>
