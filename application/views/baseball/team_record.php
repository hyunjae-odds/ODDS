<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>
<div class="livescore game">
	<div class="topTitle">
		<p>
			<span>리그정보 - 야구 - 대한민국</span>
			<span class="sentence">SPORTS COMMUNITY POTAL <span>ODDSNAVI</span></span>
		</p>
		<h2 class="tit02"><?=date('Y');?> KBO</h2>
	</div>
	<div class="game_w">
		<ul class="tab01 gameMain">
			<li class=""><a href="/baseball/league_info/">리그정보</a></li>
			<li class=""><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
			<li class=""><a href="/baseball/stats/">리그 통계</a></li>
			<li class="on"><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>">팀 기록</a></li>
			<li class=""><a href="/baseball/player_record/">선수 기록</a></li>
			<li class=""><a href="/baseball/score/">상대 전적</a></li>
		</ul>
		<ul class="tab_view01 gameMain_view">
			<li class="active s1">
				<div class="pb50 relative">
					<h3 class="noBorder">팀 종합기록</h3>
					<table class="table_default table_2_left" >
						<caption></caption>
						<colgroup>
							<col width="63px"/>
							<col width="*"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="60px"/>
							<col width="270px"/>
						</colgroup>
						<tr>
							<th>순위</th>
							<th>팀</th>
							<th>경기수</th>
							<th>승률</th>
							<th>승</th>
							<th>패</th>
							<th>타이</th>
							<th>득:실</th>
							<th>마진</th>
							<th>게임차</th>
							<th>최근 10경기</th>
						</tr>
						<?php foreach($total as $entry): ?>
							<tr>
								<?php if($entry->rank==1 || $entry->rank==2 || $entry->rank==3 || $entry->rank==4): ?>
									<td><span class="rankdot0<?=$entry->rank;?>_color"><b><?=$entry->rank;?></b></span></td>
								<?php elseif($entry->rank==4): ?>
									<td><span class="rankdot04_color"><b><?=$entry->rank;?></b></span></td>
								<?php else: ?>
									<td><?=$entry->rank;?></td>
								<?php endif; ?>

								<td><?=$entry->team;?></td>
								<td><?php foreach($offense as $entries): if($entry->team==$entries->team) echo $entries->g; endforeach;?></td>
								<td><?=number_format($entry->win_rate,3);?></td>
								<td><?=$entry->win;?></td>
								<td><?=$entry->lose;?></td>
								<td><?=$entry->tie;?></td>
								<td>48:29</td>
								<td>+19</td>
								<td><?=$entry->game_car;?></td>
								<td>
								<?php
									$exp=explode(';', $entry->recent_game);
									foreach($exp as $value) :
										if($value=='승'): echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_win.png" alt="" title=""/>';
										elseif($value=='패'): echo '<a href="/baseball/match" class="result_btn"><img src="/public/lib/image/base/btn_lose.png" alt="" title=""/></a>';
										else: echo '<a href="match.php" class="result_btn"><img src="/public/lib/image/base/btn_dra.png" alt="" title=""/></a>';
										endif;
									endforeach;
								?>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>

				<div class="pb50 relative">
					<div class="date">
						<a href="/baseball/team_record/<?=$select_year;?>/0<?=$select_month-1;?>" class="btn_prev" title="이전달">이전달</a>
						<a href="" class="date_yr date_num"><?=$select_year;?></a>
						<ul class="date_yr_select date_ul">
							<li><a href=""><?=$select_year;?></a></li>
						</ul>
						<span>.</span>
						<a href="" class="date_mn date_num"><?=$select_month;?></a>
						<ul class="date_mn_select date_ul">
							<li><a href="/baseball/team_record/<?=$select_year;?>/03">03</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/04">04</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/05">05</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/06">06</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/07">07</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/08">08</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/09">09</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/10">10</a></li>
							<li><a href="/baseball/team_record/<?=$select_year;?>/11">11</a></li>
						</ul>
						<!-- <input value="이동" type="submit" class="btn_nv_mn"> -->
						<a href="/baseball/team_record/<?=$select_year;?>/0<?=$select_month+1?>" class="btn_next" title="다음달">다음달</a>
						<div class="clear"></div>
					</div>
					<ul class="radio_w">
						<!-- <li><input type="radio" id="rd01" name="change"/><label for="rd01">순위변화보기</label></li>
						<li><input type="radio" id="rd02" name="change"/><label for="rd02">승률변화보기</label></li> -->
					</ul>
					<div class="graybox2">
						<?php $team_array=array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화'); ?>
						<canvas id="myChart" width="400" height="150"></canvas>
						<script src="/public/lib/js/Chart.min.js"></script>
						<script src="/public/lib/js/moment.js"></script>
						<script>
							var makeDaysInMonth=<?php echo json_encode($schedule);?>;
							var schedule=new Array();
							for (var i=0; i<makeDaysInMonth.length; i++){
								var splitted=makeDaysInMonth[i]['date'].split('-');
								schedule.push(parseInt(splitted[2])+'일');
							}

							var team_array=new Array('삼성','롯데','LG','SK','kt','두산','넥센','KIA','NC','한화');
							var rank_month=<?php echo json_encode($rank_month);?>;
							var data=[rank_month['삼성'].split(';'), rank_month['롯데'].split(';'), rank_month['LG'].split(';'), rank_month['SK'].split(';'),rank_month['kt'].split(';'),
												rank_month['두산'].split(';'), rank_month['넥센'].split(';'), rank_month['KIA'].split(';'), rank_month['NC'].split(';'), rank_month['한화'].split(';')];
							var color=["#ff6384","#f15f5f","#f29661","#f2cb61","#bce55c","#5cd1e5","#6b66ff","#a366ff","#f261df","#a6a6a6"];
							var ctx=document.getElementById("myChart");
							var myChart=new Chart(ctx, {
								    type: 'line',
								    data: {
								        labels: schedule,
								        datasets: [
												<?php foreach($team_array as $key=>$team): ?>
													{
															label: team_array[<?=$key;?>],
															data: data[<?=$key;?>],
															fill: false,
															borderWidth: 1,
															borderColor: color[<?=$key;?>],
															backgroundColor: color[<?=$key;?>],
															lineTension: 0
												<?php if($key==9): echo '}'; else: echo '},'; endif;
												endforeach; ?>]
								    },
								    options: {
								        scales: {
								            yAxes: [{
								                ticks: {
																		max:10,
																		min:1,
																		reverse:true
								                }
								            }]
								        },
												legend: {
								            display:true,
														position:'right'
								        }
								    }
									});
						</script>
					</div>
				</div>

				<div class="pb50 relative">
					<h3 class="noBorder">KBO 공격력 순위</h3>
					<div class="select" style="top:0;right:107px;">
						<p><span class="pp"><?=date('Y');?></span><span class="pa"></span></p>
						<ul>
							<li class=""><a href=""><?=date('Y');?></a></li>
						</ul>
					</div>
					<div class="select" style="top:0;right:0;">
						<p><span class="pp">정규시즌</span><span class="pa"></span></p>
						<ul>
							<li class=""><a href="">정규시즌</a></li>
						</ul>
					</div>
					<div class="table_w2 table_w2_1 relative">
						<div class="relative">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="48px"/>
									<col width="110px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="80px"/>
									<col width="100px"/>
									<col width="53px"/>
									<col width="80px"/>
									<col width="53px"/>
									<col width="53px"/>
									<col width="70px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1">타율</span></th>
									<th><span class="pr_2">경기</span></th>
									<th><span class="pr_3">타석</span></th>
									<th><span class="pr_4">타수</span></th>
									<th><span class="pr_5">득점</span></th>
									<th><span class="pr_6">안타</span></th>
									<th><span class="pr_7">2루타</span></th>
									<th><span class="pr_8">3루타</span></th>
									<th><span class="pr_9">홈런</span></th>
									<th><span class="pr_10">루타</span></th>
									<th><span class="pr_11">타점</span></th>
									<th><span class="pr_12">희생번트</span></th>
									<th><span class="pr_13">희생플라이</span></th>
									<th><span class="pr_14">볼넷</span></th>
									<th><span class="pr_15">고의4구</span></th>
									<th><span class="pr_16">사구</span></th>
									<th><span class="pr_17">삼진</span></th>
									<th><span class="pr_1">병살타</span></th>
								</tr>
								<?php foreach($offense as $entry): ?>
									<tr>
										<td><?=$entry->rank?></td>
										<td><?=$entry->team?></td>
										<td><?=number_format($entry->avg,3)?></td>
										<td><?=$entry->g?></td>
										<td><?=$entry->pa?></td>
										<td><?=$entry->ab?></td>
										<td><?=$entry->r?></td>
										<td><?=$entry->h?></td>
										<td><?=$entry->second_b?></td>
										<td><?=$entry->third_b?></td>
										<td><?=$entry->hr?></td>
										<td><?=$entry->tb?></td>
										<td><?=$entry->rbi?></td>
										<td><?=$entry->sac?></td>
										<td><?=$entry->sf?></td>
										<td><?=$entry->bb?></td>
										<td><?=$entry->ibb?></td>
										<td><?=$entry->hbp?></td>
										<td><?=$entry->so?></td>
										<td><?=$entry->gdp?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="next_table" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="50px"/>
									<col width="100px"/>
									<col width="130px"/>
									<col width="60px"/>
									<col width="60px"/>
									<col width="83px"/>
									<col width="100px"/>
									<col width="68px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="100px"/>
									<col width="70px"/>
									<col width="70px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1">출루율+장타율</span></th>
									<th><span class="pr_2">출루율</span></th>
									<th><span class="pr_3">장타율</span></th>
									<th><span class="pr_4">멀티히트</span></th>
									<th><span class="pr_5">득점권타율</span></th>
									<th><span class="pr_6">대타타율</span></th>
									<th><span class="pr_7">도루시도</span></th>
									<th><span class="pr_8">도루허용</span></th>
									<th><span class="pr_9">도루실패</span></th>
									<th><span class="pr_10">도루성공률</span></th>
									<th><span class="pr_11">주루사</span></th>
									<th><span class="pr_12">견제사</span></th>
								</tr>
								<?php foreach($offense as $entry): ?>
									<tr>
										<td><?=$entry->rank?></td>
										<td><?=$entry->team?></td>
										<td><?=number_format($entry->ops,3)?></td>
										<td><?=number_format($entry->slg,3)?></td>
										<td><?=number_format($entry->obp,3)?></td>
										<td><?=$entry->mh?></td>
										<td><?=number_format($entry->risp,3)?></td>
										<td><?=number_format($entry->phba,3)?></td>
										<td><?=$entry->sba?></td>
										<td><?=$entry->sb?></td>
										<td><?=$entry->cs?></td>
										<td><?=number_format($entry->sbp,1)?>%</td>
										<td><?=$entry->oob?></td>
										<td><?=$entry->pko?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable"><a href=""></a></p>
					</div>
				</div>

				<div class="pb50 relative">
					<h3 class="noBorder">KBO 수비력 순위</h3>
					<div class="select" style="top:0;right:107px;">
						<p><span class="pp"><?=date('Y');?></span><span class="pa"></span></p>
						<ul>
							<li class=""><a href=""><?=date('Y');?></a></li>
						</ul>
					</div>
					<div class="select" style="top:0;right:0;">
						<p><span class="pp">정규시즌</span><span class="pa"></span></p>
						<ul>
							<li class=""><a href="">정규시즌</a></li>
						</ul>
					</div>
					<div class="table_w2 table_w2_2 relative">
						<div class="relative">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="100px"/>
									<col width="68px"/>
									<col width="48px"/>
									<col width="48px"/>
									<col width="48px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="160px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1">평균자책</span></th>
									<th><span class="pr_2">경기</span></th>
									<th><span class="pr_3">승리</span></th>
									<th><span class="pr_4">패</span></th>
									<th><span class="pr_5">세이브</span></th>
									<th><span class="pr_6">홀드</span></th>
									<th><span class="pr_7">승률</span></th>
									<th><span class="pr_8">이닝</span></th>
									<th><span class="pr_9">피안타</span></th>
									<th><span class="pr_10">피홈런</span></th>
									<th><span class="pr_11">볼넷</span></th>
									<th><span class="pr_12">사구</span></th>
									<th><span class="pr_13">삼진</span></th>
									<th><span class="pr_14">실점</span></th>
									<th><span class="pr_15">자책점</span></th>
									<th><span class="pr_16">출루허용률(이닝)</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td><?=number_format($entry->era,2);?></td>
										<td><?=$entry->g;?></td>
										<td><?=$entry->w;?></td>
										<td><?=$entry->l;?></td>
										<td><?=$entry->sv;?></td>
										<td><?=$entry->hld;?></td>
										<td><?=number_format($entry->wpct,3);?></td>
										<td><?=$entry->ip;?></td>
										<td><?=$entry->h;?></td>
										<td><?=$entry->hr;?></td>
										<td><?=$entry->bb;?></td>
										<td><?=$entry->hbp;?></td>
										<td><?=$entry->so;?></td>
										<td><?=$entry->r;?></td>
										<td><?=$entry->er;?></td>
										<td><?=number_format($entry->whip,2);?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<div class="next_table" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="130px"/>
									<col width="78px"/>
									<col width="57px"/>
									<col width="75px"/>
									<col width="57px"/>
									<col width="90px"/>
									<col width="60px"/>
									<col width="50px"/>
									<col width="78px"/>
									<col width="56px"/>
									<col width="90px"/>
									<col width="90px"/>
									<col width="75px"/>
									<col width="56px"/>
									<col width="56px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1">피안타율</span></th>
									<th><span class="pr_2">완투</span></th>
									<th><span class="pr_3">완봉</span></th>
									<th><span class="pr_4">QS</span></th>
									<th><span class="pr_5">블론세이브</span></th>
									<th><span class="pr_6">타자수</span></th>
									<th><span class="pr_7">투구수</span></th>
									<th><span class="pr_8">2루타</span></th>
									<th><span class="pr_9">3루타</span></th>
									<th><span class="pr_10">희생번트</span></th>
									<th><span class="pr_11">희생플라이</span></th>
									<th><span class="pr_12">고의4구</span></th>
									<th><span class="pr_13">폭투</span></th>
									<th><span class="pr_14">보크</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td><?=number_format($entry->avg,3);?></td>
										<td><?=$entry->cg;?></td>
										<td><?=$entry->sho;?></td>
										<td><?=$entry->qs;?></td>
										<td><?=$entry->bsv;?></td>
										<td><?=$entry->tbf;?></td>
										<td><?=$entry->np;?></td>
										<td><?=$entry->second_b;?></td>
										<td><?=$entry->third_b;?></td>
										<td><?=$entry->sac;?></td>
										<td><?=$entry->sf;?></td>
										<td><?=$entry->ibb;?></td>
										<td><?=$entry->wp;?></td>
										<td><?=$entry->bk;?></td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable nextTable1"><a href=""></a></p>
						<div class="next_table2" style="display:none;">
							<table class="table_default table_2_left">
								<caption></caption>
								<colgroup>
									<col width="54px"/>
									<col width="130px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="56px"/>
									<col width="106px"/>
								</colgroup>
								<tr>
									<th>순위</th>
									<th>팀</th>
									<th><span class="pr_1">실책</span></th>
									<th><span class="pr_2">견제사</span></th>
									<th><span class="pr_3">자살</span></th>
									<th><span class="pr_4">보살</span></th>
									<th><span class="pr_5">병살</span></th>
									<th><span class="pr_6">수비율</span></th>
									<th><span class="pr_7">포일</span></th>
									<th><span class="pr_8">도루허용</span></th>
									<th><span class="pr_9">도루실패</span></th>
									<th><span class="pr_10">도루저지율</span></th>
								</tr>
								<?php foreach($defence as $entry): ?>
									<tr>
										<td><?=$entry->rank;?></td>
										<td><?=$entry->team;?></td>
										<td><?=$entry->e;?></td>
										<td><?=$entry->pko;?></td>
										<td><?=$entry->po;?></td>
										<td><?=$entry->a;?></td>
										<td><?=$entry->dp;?></td>
										<td><?=number_format($entry->fpct,3);?></td>
										<td><?=$entry->pb;?></td>
										<td><?=$entry->sb;?></td>
										<td><?=$entry->cs;?></td>
										<td><?=number_format($entry->csp,1);?>%</td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
						<p class="nextTable nextTable2" style="display:none;"><a href=""></a></p>
						<p class="nextTable nextTable3" style="display:none;"><a href=""></a></p>
					</div>
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
		}
	});
	//선수기록
	for(var i=1;i<21;i++){
		(function (k){
			$(".table_w2 table th span.pr_" + k ).click(function(){
				$(this).parents(".table_default").siblings("div").removeClass();
				//$(this).parents(".table_default").siblings("div").addClass("redline pr_" + k);
				$(this).parents(".table_default").find("td").css("font-weight","normal");
				$(this).parents(".table_default").find("td:nth-child("+k+")").next().next().css("font-weight","bold");
				return false;
			});
		}(i));
	};
	//순위 확장테이블
	$(".table_w2_1 .nextTable a").click(function(){
		$(this).parent().siblings(".next_table").slideToggle();
		return false;
	});
	//순위 확장테이블_2
	$(".table_w2_2 .nextTable1 a").click(function(){
		$(this).parent().siblings(".next_table2").slideUp();
		$(this).parent().siblings(".next_table").slideDown();
		$(this).parent().css("display","none");
		$(".nextTable2").css("display","block");
		return false;
	});
	$(".table_w2_2 .nextTable2 a").click(function(){
		$(this).parent().siblings(".next_table2").slideDown();
		$(this).parent().css("display","none");
		$(".nextTable3").css("display","block");
		return false;
	});
	$(".table_w2_2 .nextTable3 a").click(function(){
		$(this).parent().siblings(".next_table").slideUp();
		$(this).parent().siblings(".next_table2").slideUp();
		$(this).parent().css("display","none");
		$(".nextTable1").css("display","block");
		return false;
	});
});
</script>
