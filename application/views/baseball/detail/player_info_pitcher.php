<?php $full_name_team=array('SK'=>'SK 와이번즈','넥센'=>'넥센 히어로즈','두산'=>'두산 베어스','롯데'=>'롯데 자이언츠','KIA'=>'KIA 타이거즈','한화'=>'한화 이글스','LG'=>'LG 트윈스','NC'=>'NC 다이노스','kt'=>'kt 위즈','KT'=>'kt 위즈','삼성'=>'삼성 라이온즈'); ?>
<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css" />
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국 - KBO - <span class="underline"><?=$full_name_team[$team];?></span></span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=$full_name_team[$team];?></h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li class=""><a href="/baseball/team_info/<?=$league;?>?team=<?=$team;?>">시즌 기록</a></li>
            <li class=""><a href="/baseball/schedule/<?=$league;?>/<?=date('Y');?>/<?=date('m');?>?team=<?=$team;?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/player_hitter/<?=$league;?>?team=<?=$team;?>">선수 기록</a></li>
            <li class=""><a href="/baseball/situation/<?=$league;?>?team=<?=$team;?>">선수 현황</a></li>
            <li class=""><a href="/baseball/team/<?=$league;?>?team=<?=$team;?>">팀 소개</a></li>
        </ul>
        <ul class="tab_view01 gameMain_view">
            <li class="active result02">
                <div class="team_record p_info">
                    <div class="pic"><img src="http://www.koreabaseball.com/file/person/middle/<?=$player_id;?>.jpg" alt="" onerror="this.src='http://www.koreabaseball.com/file/person/middle/noimg.jpg';"/></div>
                    <div>
                        <h3 class="noBorder">니퍼트<span>No. 14</span></h3>
                        <ul>
                            <li>포지션 : 투수</li>
                            <li>출생 : 1994.07.30</li>
                            <li>신체 : 183cm / 체중 : 78kg</li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <ul>
                        <li>다승<span>15</span>(10위)</li>
                        <li>평균자책<span>2.5</span>(19위)</li>
                        <li>탈삼진<span>143</span>(25위)</li>
                    </ul>
                    <p>소속리그 : KBO</p>
                </div>
                <div class="pb50 relative">
                    <h3 class="noBorder">시즌성적</h3>
                    <div class="date right" style="top:5px;">
                        <a href="" class="btn_prev" title="이전시즌">이전시즌</a>
                        <a href="" class="date_yr date_num">2016 <span class="f20">시즌</span></a>
                        <ul class="date_yr_select date_ul" style="width:107px;">
                            <li><a href="">2008 시즌</a></li>
                            <li><a href="">2009 시즌</a></li>
                            <li><a href="">2010 시즌</a></li>
                            <li><a href="">2011 시즌</a></li>
                            <li><a href="">2012 시즌</a></li>
                            <li><a href="">2013 시즌</a></li>
                            <li><a href="">2014 시즌</a></li>
                            <li><a href="">2015 시즌</a></li>
                            <li><a href="">2016 시즌</a></li>
                        </ul>
                        <input value="이동" type="submit" class="btn_nv_mn">
                        <a href="" class="btn_next" title="다음달">다음달</a>
                        <div class="clear"></div>
                    </div>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <tr>
                            <th>소속팀</th>
                            <th>ERA</th>
                            <th>G</th>
                            <th>CG</th>
                            <th>SHO</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>NP</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>2B</th>
                            <th>3B</th>
                            <th>HR</th>
                        </tr>
                        <tr>
                            <td>LG</td>
                            <td><b class="red">0.349</b></td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>15</td>
                        </tr>
                    </table>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <tr>
                            <th>SAC</th>
                            <th>SF</th>
                            <th>BB</th>
                            <th>IBB</th>
                            <th>SO</th>
                            <th>WP</th>
                            <th>BK</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>BSV</th>
                            <th>WHIP</th>
                            <th>AVG</th>
                            <th>QS</th>
                        </tr>
                        <tr>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>138</td>
                            <td>0.651</td>
                            <td>0.464</td>
                            <td>138</td>
                            <td>50.0%</td>
                            <td>138</td>
                            <td>1.115</td>
                            <td>0.380</td>
                            <td>0.000</td>
                        </tr>
                    </table>
                </div>
                <div class="pb50">
                    <h3 class="noBorder">최근 10경기 성적</h3>
                    <p class="more"><a href="">더보기</a></p>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width=""/>
                        </colgroup>
                        <tr>
                            <th>일자</th>
                            <th>상대</th>
                            <th>결과</th>
                            <th>ERA</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>SK 와이번스</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>2 1/3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>KT 위즈</td>
                            <td>&nbsp;</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>2 1/3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>삼성 라이온즈</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>롯데 자이언트</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>한화 이글스</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>KIA 타이거즈</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>넥센 히어로즈</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>NC 다이노스</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr>
                            <td>10.08</td>
                            <td>두산 베어스</td>
                            <td>승</td>
                            <td>0.00</td>
                            <td>0</td>
                            <td>5</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                        <tr class="bold">
                            <td colspan="3">합계</td>
                            <td>2.54</td>
                            <td>250</td>
                            <td>60 1/3</td>
                            <td>1</td>
                            <td>0</td>
                            <td>0</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0.235</td>
                        </tr>
                    </table>
                </div>
                <div class="pb30 relative">
                    <h3 class="noBorder">상대팀별 성적</h3>
                    <div class="date right" style="top:5px;">
                        <a href="" class="btn_prev" title="이전시즌">이전시즌</a>
                        <a href="" class="date_yr date_num">2016 <span class="f20">시즌</span></a>
                        <ul class="date_yr_select date_ul" style="width:107px;">
                            <li><a href="">2008 시즌</a></li>
                            <li><a href="">2009 시즌</a></li>
                            <li><a href="">2010 시즌</a></li>
                            <li><a href="">2011 시즌</a></li>
                            <li><a href="">2012 시즌</a></li>
                            <li><a href="">2013 시즌</a></li>
                            <li><a href="">2014 시즌</a></li>
                            <li><a href="">2015 시즌</a></li>
                            <li><a href="">2016 시즌</a></li>
                        </ul>
                        <input value="이동" type="submit" class="btn_nv_mn">
                        <a href="" class="btn_next" title="다음달">다음달</a>
                        <div class="clear"></div>
                    </div>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">삼성 라이온즈</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">KT 위즈</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">롯데 자이언트</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">한화 이글스</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">SK 와이번스</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">KIA 타이거즈</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">넥센 히어로즈</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">NC 다이노스</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">두산 베어스</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
                <div class="pb30">
                    <h3 class="noBorder">구장별 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">고척</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">광주</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">대구</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">대전</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">마산</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">문학</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">사직</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">수원</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">잠실</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">포항</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
                <div class="pb30">
                    <h3 class="noBorder">월별 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">3~4월</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">5월</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">6월</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
                <div class="pb30">
                    <h3 class="noBorder">요일별 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">월</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">화</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">수</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">목</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">금</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">토</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">일</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
                <div class="pb30">
                    <h3 class="noBorder">홈/원정별 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">홈</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">방문</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
                <div class="pb50">
                    <h3 class="noBorder">주/야간별 성적</h3>
                    <table class="table_default">
                        <caption></caption>
                        <colgroup>
                            <col width="200px"/>
                        </colgroup>
                        <tr>
                            <th class="left pl20">구분</th>
                            <th>G</th>
                            <th>ERA</th>
                            <th>W</th>
                            <th>L</th>
                            <th>SV</th>
                            <th>HLD</th>
                            <th>WPCT</th>
                            <th>TBF</th>
                            <th>IP</th>
                            <th>H</th>
                            <th>HR</th>
                            <th>BB</th>
                            <th>HBP</th>
                            <th>SO</th>
                            <th>R</th>
                            <th>ER</th>
                            <th>AVG</th>
                        </tr>
                        <tr>
                            <td class="left pl20">주간</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                        <tr>
                            <td class="left pl20">야간</td>
                            <td>16</td>
                            <td>1.93</td>
                            <td>3</td>
                            <td>6</td>
                            <td>0</td>
                            <td>9</td>
                            <td>1.000</td>
                            <td>75</td>
                            <td>18 2/3</td>
                            <td>15</td>
                            <td>0</td>
                            <td>11</td>
                            <td>1</td>
                            <td>9</td>
                            <td>0</td>
                            <td>4</td>
                            <td>0.221</td>
                        </tr>
                    </table>
                </div>
            </li>
        </ul>
    </div>


</div>

<script type="text/javascript">
    $(document).ready(function(){
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
                return false;
            }
        });
    });
</script>