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
			<li class="on"><a href="/baseball/result/<?=date('Y');?>/<?=date('m');?>">경기 결과</a></li>
			<li class=""><a href="/baseball/stats_win_rate/">리그 통계</a></li>
			<li class=""><a href="/baseball/team_record/<?=date('Y');?>/<?=date('m');?>/all/all">팀 기록</a></li>
			<li class=""><a href="/baseball/player_record/">선수 기록</a></li>
			<li class=""><a href="/baseball/score/">상대 전적</a></li>
		</ul>
		<ul class="tab_view01 gameMain_view">
			<li class="result02 s2 active pb50">
				<div class="date">
					<a href="/baseball/result/<?=$select_year;?>/<?php if($select_month!=3) echo '0';?><?php $minus_one=($select_month==3)?$select_month:$select_month-1; echo $minus_one;?>" class="btn_prev" title="이전달">이전달</a>
					<a href="javascript:void(0)" class="date_yr date_num"><?=$select_year;?></a>
					<ul class="date_yr_select date_ul">
						<li><a href="/baseball/result/2017/<?=$select_month;?>">2017</a></li>
					</ul>
					<span>.</span>
					<a href="" class="date_mn date_num"><?=$select_month;?></a>
					<ul class="date_mn_select date_ul">
						<li><a href="/baseball/result/<?=$select_year;?>/03">03</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/04">04</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/05">05</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/06">06</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/07">07</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/08">08</a></li>
						<li><a href="/baseball/result/<?=$select_year;?>/09">09</a></li>
					</ul>
					<!-- <input value="이동" type="submit" class="btn_nv_mn"> -->
					<a href="/baseball/result/<?=$select_year;?>/<?php if($select_month!=9) echo '0';?><?php $plus_one=($select_month==9)?$select_month:$select_month+1; echo $plus_one;?>" class="btn_next" title="다음달">다음달</a>
					<div class="clear"></div>
				</div>
				
				<table class="table_default">
					<caption></caption>
					<colgroup>
						<col width="100px" />
						<col width="76px" />
						<col width="154px" />
						<col width="96px" />
						<col width="189px" />
						<col width="69px" />
						<col width="71px" />
						<col width="71px" />
						<col width="175px" />
					</colgroup>								
					<tr>
						<th><span class="up_down01 down">날짜</span></th>
						<th>시간</th>
						<th class="right pr20">원정</th>
						<th>스코어</th>
						<th class="left pl20">홈</th>
						<th>승</th>
						<th>무</th>
						<th>패</th>
						<th>데이터</th>
					</tr>
					<?php foreach($result as $key=>$entry): ?>
						<tr>
							<?php if($key%5==0) echo '<td rowspan="5"><b>'.$entry->date.'</b></td>';?>
							<td class="l_b"><?=$entry->time;?></td>
							<td class="right"><?=$entry->away;?></td>
							<td><b class="score"><span class="<?=($entry->away_score > $entry->home_score) ? 'red' : 'lose';?>"><?=$entry->away_score;?></span>:<span class="<?=($entry->away_score < $entry->home_score) ? 'red' : 'lose';?>"><?=$entry->home_score;?></span></b></td>
							<td class="left"><?=$entry->home;?></td>
							<td><span class="black">1.31</span></td>
							<td>2.44</td>
							<td>1.78</td>
							<td class="data">
								<span>
									<span class="b_BTN2"><a href="javascript:location.replace('/baseball/match_information/<?=$entry->no;?>/0')">경기기록</a></span>
									<span class="r_BTN"><a href="">전문가 의견</a></span>
									<span class="g_BTN"><a href="">블로그</a></span>	
								</span>
								<!-- 블로그팝업 -->
								<div class="g_pop" style="display:none;">
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
								<div class="r_pop" style="display:none;">
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
							</td>
						</tr>
					<?php endforeach; ?>
				</table>						
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
	});
</script>