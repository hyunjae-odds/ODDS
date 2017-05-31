<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
    <div class="topTitle">
        <p>
            <span>리그정보 - 야구 - 대한민국</span>
            <span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
        </p>
        <h2 class="tit02"><?=CURRENT_YEAR;?> KBO</h2>
    </div>
    <div class="game_w">
        <ul class="tab01 gameMain">
            <li><a href="/baseball/league_info/">리그정보</a></li>
            <li><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
            <li class="on"><a href="/baseball/stats_win_rate/">리그 통계</a></li>
            <li><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
            <li><a href="/baseball/player_record/">선수 기록</a></li>
            <li><a href="/baseball/score/">상대 전적</a></li>
        </ul>
        <div class="relative">
            <ul class="firTab">
                <li><a href="/baseball/stats_win_rate">리그 승률</a></li>
                <li class="on"><a href="/baseball/stats_h?handicap=1.5">리그 안타</a></li>
                <li><a href="/baseball/stats_hr">리그 홈런</a></li>
            </ul>
            <ul class="tab_view01 gameMain_view">
              <li class="active" style="padding-top:40px;">
                  <div class="tab01_w">
                      <ul class="tab01_2 TLS">
                          <li class="<?php if($over_under==0 && $h=='off' && $h_margin=='off') echo 'on';?> ls01"><a href="/baseball/stats_h?handicap=0.5">핸디캡</a></li>
                          <li class="<?php if($over_under!=0 && $h=='off' && $h_margin=='off') echo 'on';?> ls02"><a href="/baseball/stats_h?over_under=4.5&sort_select=full">전체안타</a></li>
                          <li class="<?php if($h=='on') echo 'on';?> ls03"><a href="/baseball/stats_h?h=on&over_under=4.5&sort_select=full">팀별안타</a></li>
                          <li class="<?php if($h_margin=='on') echo 'on';?> ls04"><a href="/baseball/stats_h?h_margin=on&sort_select=full_margin">안타마진</a></li>
                      </ul>
                  </div>
                  <ul class="LS_view_w">
                      <li class="active">
                          <div class="pt15">
                              <ul class="inning_view">
                                  <li class="iv01 active">
                                      <?php if($over_under!=0 || $h=='on' || $h_margin=='on'): ?>
                                          <ul class="tab02 tab02_absolute">
                                              <li class="<?php if($home_away=='all') echo 'on';?> ls_all"><a href="/baseball/stats_h?home_away=all&duration=<?=$duration;?>&over_under=<?=($over_under==0)? 99 : $over_under;?>&sort_select=<?=$sort_select;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?>" onfocus="this.blur();">전체</a></li>
                                              <li class="<?php if($home_away=='home') echo 'on';?> ls_home"><a href="/baseball/stats_h?home_away=home&duration=<?=$duration;?>&over_under=<?=($over_under==0)? 99 : $over_under;?>&sort_select=<?=$sort_select;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?>" onfocus="this.blur();">홈</a></li>
                                              <li class="<?php if($home_away=='away') echo 'on';?> ls_team"><a href="/baseball/stats_h?home_away=away&duration=<?=$duration;?>&over_under=<?=($over_under==0)? 99 : $over_under;?>&sort_select=<?=$sort_select;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?>" onfocus="this.blur();">원정</a></li>
                                          </ul>
                                      <?php else: ?>
                                          <div class="tab2_w tab2_w_2 tab2_w_2_">
                                              <ul class="tab02 LS_tab">
                                                  <li class="<?php if($handicap==99) echo 'on';?>"><a href="/baseball/stats_h?handicap=99">0.0</a></li>
                                                  <li class="<?php if($handicap==0.5) echo 'on';?>"><a href="/baseball/stats_h?handicap=0.5">0.5</a></li>
                                                  <li class="<?php if($handicap==1.5) echo 'on';?>"><a href="/baseball/stats_h?handicap=1.5">1.5</a></li>
                                                  <li class="<?php if($handicap==2.5) echo 'on';?>"><a href="/baseball/stats_h?handicap=2.5">2.5</a></li>
                                              </ul>
                                          </div>
                                      <?php endif;?>
                                      <div class="select" style="top:-50px;">
                                          <p class="off"><span class="pp"><?php if($duration==null || $duration=='all') echo '시즌 전체'; else echo '최근 '.$duration.' 경기';?></span><span class="pa"></span></p>
                                          <ul>
                                              <li class=""><a href="/baseball/stats_h?inning=<?=$inning;?>&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&home_away=<?=$home_away;?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&sort_select=<?=$sort_select;?>">시즌 전체</a></li>
                                              <li class=""><a href="/baseball/stats_h?inning=<?=$inning;?>&duration=10&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&home_away=<?=$home_away;?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&sort_select=<?=$sort_select;?>">최근 10경기</a></li>
                                              <li class=""><a href="/baseball/stats_h?inning=<?=$inning;?>&duration=15&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&home_away=<?=$home_away;?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&sort_select=<?=$sort_select;?>">최근 15경기</a></li>
                                              <li class=""><a href="/baseball/stats_h?inning=<?=$inning;?>&duration=20&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&home_away=<?=$home_away;?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&sort_select=<?=$sort_select;?>">최근 20경기</a></li>
                                              <li class=""><a href="/baseball/stats_h?inning=<?=$inning;?>&duration=30&handicap=<?=$handicap;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&home_away=<?=$home_away;?>&half_over_under=<?=$half_over_under;?>&first_over_under=<?=$first_over_under;?><?php if($h=='on') echo '&h=on';?><?php if($h_margin=='on') echo '&h_margin=on';?>&sort_select=<?=$sort_select;?>">최근 30경기</a></li>
                                          </ul>
                                      </div>
                                      <table class="table_default table_2_left table_all_home_visit <?php if($over_under!=0 || $h=='on' || $h_margin=='on') echo 'table_all_home_visit2';?>">
                                          <caption></caption>
                                          <colgroup>
                                              <col width="63px"/><col width="*"/>
                                              <?php if($over_under!=0 || $h=='on' || $h_margin=='on'): ?>
                                                  <col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px"><col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px"><col width="55px"><col width="38px"><col width="40px"><col width="49px"><col width="55px">
                                              <?php else: ?>
                                                  <col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/><col width="55px"/><col width="36px"/><col width="25px"/><col width="25px"/><col width="46px"/><col width="50px"/>
                                              <?php endif;?>
                                          </colgroup>
                                          <tr class="w_th">
                                              <?php if($h_margin=='on'): ?>
                                                  <th colspan="2">&nbsp;</th>
                                                  <th colspan="5" <?php if($sort_select=='full_margin') echo 'style="color:black;"';?>>풀타임<a class="up_down up" href="/baseball/stats_h?&duration=<?=$duration;?>&sort_home_away=<?=$sort_home_away;?>&sort_select=full_margin&h_margin=on&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                  <th colspan="5" <?php if($sort_select=='half_margin') echo 'style="color:black;"';?>>5이닝<a class="up_down up" href="/baseball/stats_h?&duration=<?=$duration;?>&sort_home_away=<?=$sort_home_away;?>&sort_select=half_margin&h_margin=on&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                  <th colspan="5" <?php if($sort_select=='first_margin') echo 'style="color:black;"';?>>1이닝<a class="up_down up" href="/baseball/stats_h?&duration=<?=$duration;?>&sort_home_away=<?=$sort_home_away;?>&sort_select=first_margin&h_margin=on&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                              <?php elseif($over_under!=0 || $h=='on'): ?>
                                                  <th colspan="2">&nbsp;</th>
                                                  <th colspan="5" <?php if($sort_select=='full') echo 'style="color:black;"';?>>풀타임<a class="up_down up" href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=full<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a>
                                                      <ul class="w_th_ul">
                                                          <li class="<?php if($over_under==3.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=3.5&sort_select=full<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">3.5</a></li>
                                                          <li class="<?php if($over_under==4.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=4.5&sort_select=full<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">4.5</a></li>
                                                          <li class="<?php if($over_under==5.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=5.5&sort_select=full<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">5.5</a></li>
                                                      </ul>
                                                  </th>
                                                  <th colspan="5"<?php if($sort_select=='half') echo 'style="color:black;"';?>>5이닝<a class="up_down up" href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=half<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a>
                                                      <ul class="w_th_ul">
                                                          <li class="<?php if($half_over_under==1.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=1.5&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=half<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">1.5</a></li>
                                                          <li class="<?php if($half_over_under==2.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=2.5&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=half<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">2.5</a></li>
                                                          <li class="<?php if($half_over_under==3.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=3.5&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=half<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">3.5</a></li>
                                                      </ul>
                                                  </th>
                                                  <th colspan="5"<?php if($sort_select=='first') echo 'style="color:black;"';?>>1이닝<a class="up_down up" href="/baseball/stats_h?first_over_under=<?=$first_over_under;?>&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=first<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">내림차/오름차변경</a>
                                                      <ul class="w_th_ul">
                                                          <li class="<?php if($first_over_under==0.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=0.5&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=first<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">0.5</a></li>
                                                          <li class="<?php if($first_over_under==1.5) echo 'on';?>"><a href="/baseball/stats_h?first_over_under=1.5&half_over_under=<?=$half_over_under;?>&duration=<?=$duration;?>&team=<?=$team;?>&sort_home_away=<?=$sort_home_away;?>&over_under=<?=$over_under;?>&sort_select=first<?php if($h=='on') echo '&h=on';?>&home_away=<?=$home_away;?>" onfocus="this.blur();">1.5</a></li>
                                                      </ul>
                                                  </th>

                                              <?php else: ?>
                                                  <th colspan="2">&nbsp;</th>
                                                  <th colspan="6" <?php if($sort_home_away=='all') echo 'style="color:black;"';?>>전체 기록<a class="up_down up" href="/baseball/stats_h?sort_home_away=all&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                  <th colspan="6" <?php if($sort_home_away=='home') echo 'style="color:black;"';?>>홈 기록<a class="up_down up" href="/baseball/stats_h?sort_home_away=home&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                                  <th colspan="6" <?php if($sort_home_away=='away') echo 'style="color:black;"';?>>원정 기록<a class="up_down up" href="/baseball/stats_h?sort_home_away=away&handicap=<?=$handicap;?>&inning=<?=$inning;?>&duration=<?=$duration;?>&team=<?=$team;?>&over_under=<?=$over_under;?>" onfocus="this.blur();">내림차/오름차변경</a></th>
                                              <?php endif;?>
                                          </tr>
                                          <tr>
                                              <th>순위</th>
                                              <th>팀</th>
                                              <?php if($over_under!=0 || $h=='on' || $h_margin=='on'): ?>
                                                  <th>경기수</th>
                                                  <th><?=($h_margin=='on')? '안타' : 'Over';?></th>
                                                  <th><?=($h_margin=='on')? '피안타' : 'O%';?></th>
                                                  <th><?php if($h=='on') echo '안타'; else if($h_margin=='on') echo '마진'; else echo '득:실';?></th>
                                                  <th>경기당</th>
                                                  <th>경기수</th>
                                                  <th><?=($h_margin=='on')? '안타' : 'Over';?></th>
                                                  <th><?=($h_margin=='on')? '피안타' : 'O%';?></th>
                                                  <th><?php if($h=='on') echo '안타'; else if($h_margin=='on') echo '마진'; else echo '득:실';?></th>
                                                  <th>경기당</th>
                                                  <th>경기수</th>
                                                  <th><?=($h_margin=='on')? '안타' : 'Over';?></th>
                                                  <th><?=($h_margin=='on')? '피안타' : 'O%';?></th>
                                                  <th><?php if($h=='on') echo '안타'; else if($h_margin=='on') echo '마진'; else echo '득:실';?></th>
                                                  <th>경기당</th>
                                              <?php else: ?>
                                                  <th>경기수</th>
                                                  <th>승률</th>
                                                  <th>승</th>
                                                  <th>패</th>
                                                  <th>득:실</th>
                                                  <th>경기당</th>
                                                  <th>경기수</th>
                                                  <th>승률</th>
                                                  <th>승</th>
                                                  <th>패</th>
                                                  <th>득:실</th>
                                                  <th>경기당</th>
                                                  <th>경기수</th>
                                                  <th>승률</th>
                                                  <th>승</th>
                                                  <th>패</th>
                                                  <th>득:실</th>
                                                  <th>경기당</th>
                                              <?php endif;?>
                                          </tr>
                                          <?php foreach($rank_board as $item): ?>
                                              <tr>
                                                  <td><span class="rankdot0<?=$item['rank'];?>_color"><b><?=$item['rank'];?></b></span></td>
                                                  <td><?=$item['team'];?></td>
                                                  <?php if($over_under!=0 || $h=='on'|| $h_margin=='on'): ?>
                                                      <td><?=$item['total_g'];?></td>
                                                      <td><?=($h_margin=='on')? $item['full'] : $item['over'];?></td>
                                                      <td><?=($h_margin=='on')? $item['full_lost'] : $item['over_p'].'%';?></td>
                                                      <td><?php if($h=='on') echo $item['full']; else if($h_margin=='on') echo $item['full']-$item['full_lost']; else echo $item['plus'].':'.$item['minus'];?></td>
                                                      <td><?=number_format($item['full']/$item['total_g'],1);?></td>
                                                      <td><?=$item['total_g'];?></td>
                                                      <td><?=($h_margin=='on')? $item['half'] : $item['over_inning_5'];?></td>
                                                      <td><?=($h_margin=='on')? $item['half_lost'] : $item['over_inning_5_p'].'%';?></td>
                                                      <td><?php if($h=='on') echo $item['half']; else if($h_margin=='on') echo $item['half']-$item['half_lost']; else echo $item['plus_inning_5'].':'.$item['minus_inning_5'];?></td>
                                                      <td><?=number_format($item['half']/$item['total_g'],1);?></td>
                                                      <td><?=$item['total_g'];?></td>
                                                      <td><?=($h_margin=='on')? $item['first'] : $item['over_inning_1'];?></td>
                                                      <td><?=($h_margin=='on')? $item['first_lost'] : $item['over_inning_1_p'].'%';?></td>
                                                      <td><?php if($h=='on') echo $item['first']; else if($h_margin=='on') echo $item['first']-$item['first_lost']; else echo $item['plus_inning_1'].':'.$item['minus_inning_1'];?></td>
                                                      <td><?=number_format($item['first']/$item['total_g'],1);?></td>
                                                  <?php else: ?>
                                                      <td><?=$item['total_g'];?></td>
                                                      <td><?=$item['total_win_rate'];?></td>
                                                      <td><?=$item['total_win'];?></td>
                                                      <td><?=$item['total_lose'];?></td>
                                                      <td><?=$item['plus'];?>:<?=$item['minus'];?></td>
                                                      <td><?=number_format($item['plus']/$item['total_g'],1);?></td>
                                                      <td><?=$item['home_g'];?></td>
                                                      <td><?=$item['home_win_rate'];?></td>
                                                      <td><?=$item['home_win'];?></td>
                                                      <td><?=$item['home_lose'];?></td>
                                                      <td><?=$item['plus_home'];?>:<?=$item['minus_home'];?></td>
                                                      <td><?=number_format($item['plus_home']/$item['home_g'],1);?></td>
                                                      <td><?=$item['away_g'];?></td>
                                                      <td><?=$item['away_win_rate'];?></td>
                                                      <td><?=$item['away_win'];?></td>
                                                      <td><?=$item['away_lose'];?></td>
                                                      <td><?=$item['plus_away'];?>:<?=$item['minus_away'];?></td>
                                                      <td><?=number_format($item['plus_away']/$item['away_g'],1);?></td>
                                                  <?php endif;?>
                                              </tr>
                                          <?php endforeach; ?>
                                      </table>
                                      <h3 class="center noBorder pt50">안타 리그요약</h3>
                                      <div class="TOP5">
                                          <div>
                                              <ul>
                                                  <li class="th"><p class="top_t3">리그안타</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
                                                  <li class="td"><p class="top_t3">풀이닝</p><p class="top_s3"><?=$league_stat['total_game_num'];?></p><p class="top_s3"><?=$league_stat['league_stat_full_h'];?></p><p class="top_g3"><?=number_format($league_stat['league_stat_full_h']/$league_stat['total_game_num'],3);?></p></li>
                                                  <li class="td"><p class="top_t3">5이닝</p><p class="top_s3"><?=$league_stat['total_game_num'];?></p><p class="top_s3"><?=$league_stat['league_stat_half_h'];?></p><p class="top_g3"><?=number_format($league_stat['league_stat_half_h']/$league_stat['total_game_num'],3);?></p></li>
                                                  <li class="td"><p class="top_t3">1이닝</p><p class="top_s3"><?=$league_stat['total_game_num'];?></p><p class="top_s3"><?=$league_stat['league_stat_first_h'];?></p><p class="top_g3"><?=number_format($league_stat['league_stat_first_h']/$league_stat['total_game_num'],3);?></p></li>
                                              </ul>
                                          </div>
                                          <div>
                                              <ul>
                                                  <li class="th"><p class="top_t3">전체안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">풀이닝 9.5오버</p><p class="top_s3">100</p><p class="top_s3">100</p><p class="top_g3">100%</p></li>
                                                  <li class="td"><p class="top_t3">5이닝 4.5오버</p><p class="top_s3">100</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                  <li class="td"><p class="top_t3">1이닝 1.5오버</p><p class="top_s3">100</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                              </ul>
                                          </div>
                                          <div>
                                              <ul>
                                                  <li class="th"><p class="top_t3">안타핸디캡</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">0.5</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                  <li class="td"><p class="top_t3">1.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                  <li class="td"><p class="top_t3">2.5</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                              </ul>
                                          </div>
                                          <div>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀안타</p><p class="top_s3">경기수</p><p class="top_s3">오버</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">풀이닝 4.5오버</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">60%</p></li>
                                                  <li class="td"><p class="top_t3">5이닝 2.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                                  <li class="td"><p class="top_t3">1이닝 0.5오버</p><p class="top_s3">65</p><p class="top_s3">75</p><p class="top_g3">40%</p></li>
                                              </ul>
                                          </div>
                                          <p class="clear"></p>
                                      </div>
                                      <h3 class="center noBorder">안타 부분별 상위 5팀</h3>
                                      <div class="TOP5">
                                          <div><h4>리그안타, 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">안타</p><p class="top_g3">경기당</p></li>
                                                  <?php foreach($margin_arr as $item): ?>
                                                      <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['g'];?></p><p class="top_s3"><?=$item['league_stat_h'];?></p><p class="top_g3"><?=number_format($item['league_stat_h']/$item['g'],2);?></p></li>
                                                  <?php endforeach;?>
                                              </ul></div>
                                          <div><h4>안타핸디캡0.5, 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">승</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                              </ul></div>
                                          <div><h4>전체안타 9.5언더, 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                              </ul></div>
                                          <div><h4>팀안타 4.5오버, 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">경기수</p><p class="top_s3">언더</p><p class="top_g3">확률</p></li>
                                                  <li class="td"><p class="top_t3">LG 트윈스</p><p class="top_s3">144</p><p class="top_s3">85</p><p class="top_g3">75.0%</p></li>
                                              </ul></div>
                                          <div><h4>안타마진 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t3">팀 명</p><p class="top_s3">득:실</p><p class="top_s3">마진</p><p class="top_g3">경기당</p></li>
                                                  <?php foreach($margin_arr as $item): ?>
                                                      <li class="td"><p class="top_t3"><?=$item['team'];?></p><p class="top_s3"><?=$item['league_stat_h'];?>:<?=$item['league_stat_h_lost'];?></p><p class="top_s3"><?=$item['league_stat_h_margin'];?></p><p class="top_g3"><?=number_format($item['league_stat_h']/$item['g'],2);?></p></li>
                                                  <?php endforeach;?>
                                              </ul></div>
                                          <div>
                                              <h4>안타핸디캡 0.5, 최근 10경기 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">승/패</p></li>
                                                  <li class="td">
                                                      <p class="top_t2">LG 트윈스</p>
                                                      <p class="top_s2">
                                                          <a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a><a href="match.php" class="result_btn"><img src="../../image/base/btn_win.png" alt="승" title="두산 4:1 넥센"/></a>
                                                      </p>
                                                      <p class="top_g2"><span class="red">9</span>/1</p>
                                                  </li>
                                              </ul>
                                          </div>
                                          <div>
                                              <h4>전체안타 9.5오버, 최근 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                  <li class="td">
                                                      <p class="top_t2">LG 트윈스</p>
                                                      <p class="top_s2">
                                                          <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                      </p>
                                                      <p class="top_g2"><span class="red">9</span>/1</p>
                                                  </li>
                                              </ul>
                                          </div>
                                          <div>
                                              <h4>팀안타 4.5오버, 최근 상위 5팀<span></span></h4>
                                              <ul>
                                                  <li class="th"><p class="top_t2">팀 명</p><p class="top_s2">&nbsp;</p><p class="top_g2">O/U</p></li>
                                                  <li class="td">
                                                      <p class="top_t2">LG 트윈스</p>
                                                      <p class="top_s2">
                                                          <span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span><span class="plusL">plus</span>
                                                      </p>
                                                      <p class="top_g2"><span class="red">9</span>/1</p>
                                                  </li>
                                              </ul>
                                          </div>
                                          <p class="clear"></p>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </li>
            </ul>
        </div>
    </div>
</div>
