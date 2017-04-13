<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("/game/game_model");
	}
	
	function index(){
		$this->load->view("/game/head_up");
		$this->load->view("head");
		$this->load->view('/game/index');
		$this->load->view("footer");
		$this->load->view("/game/footer_down");
	}
	
	function match(){
		$this->load->view("/game/head_up1");
		$this->load->view("head");
		$this->load->view('/game/match');
		$this->load->view("footer");
		$this->load->view("/game/footer_down");
	}
	
	function league_info(){
		$this->load->view("/game/head_up");
		$this->load->view("/head");
		$sports="";
		$sports=$this->input->get('sports');
		if($sports=='soccer'){
			if($this->input->get('league_id')!=""){
				
				$league_id = $this->input->get('league_id');
				$league_info=$this->game_model->get_league_info($league_id);
				$view = $this->input->get('view');

				$ex=$this->game_model->get_last_game_num($league_id);
				
				$league_game_num=(int)$ex->run_game;
				$game2=$this->game_model->get_game2($league_id, $league_game_num);
				
				$ex=$this->game_model->get_last_game_num1($league_id);
				$league_game_num1=(int)$ex->run_game;
				$game21=$this->game_model->get_game21($league_id, $league_game_num1, $league_game_num1+1);
				
				

//				echo "<script>alert(".$ex[0]->run_game.");</script>";  16

				

				
				
				$game_schedule=$this->game_model->get_schedule($league_id);
				
				$game_handicap=array();
				$game_overunder=array();
				$game_winlose=array();
				
				
				$i=0;
				foreach($game_schedule as $entry){
					$handicap=$this->game_model->get_handicap($entry->game_no);
					$overunder=$this->game_model->get_overunder($entry->game_no);
					$winlose=$this->game_model->get_winlose($entry->game_no);

					$game_handicap[$i]=$handicap;
					$game_overunder[$i]=$overunder;
					$game_winlose[$i]=$winlose;
					$i++;
				}
				
				$game_schedule=$this->game_model->get_schedule($league_id);
				
				$game_stat=$this->game_model->get_stat($league_id);
				$a=array("","","","","","","","","","","","","","","","","","","","","","",0,0);
				$b=array("","","","","","","","","","","","","","","","","","","","","","",0,0);
				//홈번호, 홈팀 이름, 득점, 실점, 승, 무, 패,레드,5게임
				$f=0;
				$stats = array();
				$hw=0;
				$dr=0;
				$vw=0;
				$hg=0;
				$vg=0;
				$over25=0;
				$under25=0;
				$clean=0;
				$noclean=0;
				$goal=0;
				$nogoal=0;
					
				foreach($game_stat as $entry){
					$d=null;
					$e=null;
					$c;
					//over2.5/under2.5
					if((int)$entry->home_score+(int)$entry->visit_score>=3) $over25++;
					else $under25++;
					//clean
					if((int)$entry->home_score+(int)$entry->visit_score==0) $clean++;
					else $noclean++;
					//양팅 득점
					if($entry->home_score!='0'&&$entry->visit_score!='0') $goal++;
					else $nogoal++;
					
					for($i=0;$i<sizeof($stats);$i++){
						$c=$stats[$i];
						if($c[0]==trim($entry->home_team) && $d==null) $d=$i+1;
						if($c[0]==trim($entry->visit_team)&& $e==null) $e=$i+1;
						
						//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->home_team)." : ".$d."<br/>";
						//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->visit_team)." : ".$e."<br/>";
					}
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
					if($d!=null){
						$c=$stats[$d-1];
						//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
						$a[0]=trim($entry->home_team);
						$a[1]=trim($entry->home_name);
						$a[2]=(int)$c[2] + (int)$entry->home_score+"";
//						$a[9]=(int)$c[9] + (int)$entry->home_score+"";
						$hg+=(int)$entry->home_score;
						$a[3]=(int)$c[3] + (int)$entry->visit_score+"";
						$vg+=(int)$entry->visit_score;
//						$a[10]=(int)$c[10] + (int)$entry->visit_score+"";
						$a[7]=(int)$c[7] + (int)$entry->home_red+"";
//						$a[14]=(int)$c[14] + (int)$entry->home_red+"";
						if((int)$a[2]+(int)$a[3]>=3) $a[10]=$c[10]+1;
						if((int)$a[2]+(int)$a[3]==0) $a[11]=$c[11]+1;
						if($a[2]!='0'&&$a[3]!='0') $a[12]=$c[12]+1;
						
						
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$a[4]=(int)$c[4]+1;
							$a[5]=$c[5];
							$a[6]=$c[6];
							$a[8]=$c[8]."3";
//							$a[11]=(int)$c[11]+1;
//							$a[12]=$c[12];
//							$a[13]=$c[13];
							$hw++;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$a[4]=$c[4];
							$a[5]=(int)$c[5]+1;
							$a[6]=$c[6];
							$a[8]=$c[8]."1";
//							$a[11]=$c[11];
//							$a[12]=(int)$c[12]+1;
//							$a[13]=$c[13];
							$dr++;
						}else{
							$a[4]=$c[4];
							$a[5]=$c[5];
							$a[6]=(int)$c[6]+1;
							$a[8]=$a[8]."0";
// 							$a[11]=$c[11];
// 							$a[12]=$c[12];
// 							$a[13]=(int)$c[13]+1;
							$vw++;
						}
// 						$a[15]=$c[15];
// 						$a[16]=$c[16];
// 						$a[17]=$c[17];
// 						$a[18]=$c[18];
// 						$a[19]=$c[19];
// 						$a[20]=$c[20];
						$stats[$d-1]=$a;
						//					echo "a+=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
//						$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
					}else{
						//득:9	실:10	승:11	무:12	페:13	레:14
						//득:15	실:16	승:17	무:18	패:19	레:20
						$a[0]=trim($entry->home_team);
						$a[1]=trim($entry->home_name);
						$a[2]=$entry->home_score;
//						$a[9]=$entry->home_score;
						$hg+=(int)$entry->home_score;
						$a[3]=$entry->visit_score;
//						$a[10]=$entry->visit_score;
						$vg+=(int)$entry->visit_score;
						$a[7]=$entry->home_red;
//						$a[14]=$entry->home_red;
						if((int)$a[2]+(int)$a[3]>=3) $a[10]=1;
						else $a[10]=0;
						if((int)$a[2]+(int)$a[3]==0) $a[11]=1;
						else $a[11]=0;
						if($a[2]!='0'&&$a[3]!='0') $a[12]=1;
						else $a[12]=0;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$a[4]="1";
							$a[5]="0";
							$a[6]="0";
							$a[8]="3";
// 							$a[11]="1";
// 							$a[12]="0";
// 							$a[13]="0";
							$hw++;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$a[4]="0";
							$a[5]="1";
							$a[6]="0";
							$a[8]="1";
// 							$a[11]="0";
// 							$a[12]="1";
// 							$a[13]="0";
							$dr++;
						}else{
							$a[4]="0";
							$a[5]="0";
							$a[6]="1";
							$a[8]="0";
// 							$a[11]="0";
// 							$a[12]="0";
// 							$a[13]="1";
							$vw++;
						}
// 						$a[15]="0";
// 						$a[16]="0";
// 						$a[17]="0";
// 						$a[18]="0";
// 						$a[19]="0";
// 						$a[20]="0";
				
						$stats[sizeof($stats)]=$a;
						//					echo "a=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
						//							$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
					}
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
				
					if($e!=null){
						$c=$stats[$e-1];
						//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
						$b[0]=trim($entry->visit_team);
						$b[1]=trim($entry->visit_name);
						$b[2]=(int)$c[2] + (int)$entry->visit_score;
//						$b[15]=(int)$c[15] + (int)$entry->visit_score;
						$b[3]=(int)$c[3] + (int)$entry->home_score;
//						$b[16]=(int)$c[16] + (int)$entry->home_score;
						$b[7]=(int)$c[7] + (int)$entry->visit_red;
//						$b[20]=(int)$c[20] + (int)$entry->visit_red;
						if((int)$b[2]+(int)$b[3]>=3) $b[10]=$c[10]+1;
						if((int)$b[2]+(int)$b[3]==0) $b[11]=$c[11]+1;
						if($b[2]!='0'&&$b[3]!='0') $b[12]=$c[12]+1;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$b[4]=$c[4];
							$b[5]=$c[5];
							$b[6]=(int)$c[6]+1;
							$b[8]=$c[8]."0";
// 							$b[17]=$c[17];
// 							$b[18]=$c[18];
// 							$b[19]=(int)$c[19]+1;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$b[4]=$c[4];
							$b[5]=(int)$c[5]+1;
							$b[6]=$c[6];
							$b[8]=$c[8]."1";
// 							$b[17]=$c[17];
// 							$b[18]=(int)$c[18]+1;
// 							$b[19]=$c[19];
						}else{
							$b[4]=(int)$c[4]+1;
							$b[5]=$c[5];
							$b[6]=$c[6];
							$b[8]=$c[8]."3";
// 							$b[17]=(int)$c[17]+1;
// 							$b[18]=$c[18];
// 							$b[19]=$c[19];
						}
// 						$b[9]=$c[9];
// 						$b[10]=$c[10];
// 						$b[11]=$c[11];
// 						$b[12]=$c[12];
// 						$b[13]=$c[13];
// 						$b[14]=$c[14];
						$stats[$e-1]=$b;
						//					echo "b+=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
				
					}else{
						//득:9	실:10	승:11	무:12	페:13	레:14
						//득:15	실:16	승:17	무:18	패:19	레:20
				
						$b[0]=trim($entry->visit_team);
						$b[1]=trim($entry->visit_name);
						$b[2]=$entry->visit_score;
//						$b[15]=$entry->visit_score;
						$b[3]=$entry->home_score;
//						$b[16]=$entry->home_score;
						$b[7]=$entry->visit_red;
//						$b[20]=$entry->visit_red;
						if((int)$b[2]+(int)$b[3]>=3) $b[10]=1;
						else $b[10]=0;
						if((int)$b[2]+(int)$b[3]==0) $b[11]=1;
						else $b[11]=0;
						if($b[2]!='0'&&$b[3]!='0') $b[12]=1;
						else $b[12]=0;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$b[4]="0";
							$b[5]="0";
							$b[6]="1";
// 							$b[17]="0";
// 							$b[18]="0";
// 							$b[19]="1";
							$b[8]="0";
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$b[4]="0";
							$b[5]="1";
							$b[6]="0";
// 							$b[17]="0";
// 							$b[18]="1";
// 							$b[19]="0";
							$b[8]="1";
						}else{
							$b[4]="1";
							$b[5]="0";
							$b[6]="0";
// 							$b[17]="1";
// 							$b[18]="0";
// 							$b[19]="0";
							$b[8]="3";
						}
// 						$b[9]="0";
// 						$b[10]="0";
// 						$b[11]="0";
// 						$b[12]="0";
// 						$b[13]="0";
// 						$b[14]="0";
						$stats[sizeof($stats)]=$b;
						//					echo "b=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
					}
				
				}
				$b="";
				for($i=0;$i<sizeof($stats);$i++){
					$c=$stats[$i];
					$c[21]=(int)$c[4]*3+(int)$c[5];  //승점
					$c[22]=(int)$c[2]-(int)$c[3];    //골득실
					$stats[$i] = $c;
				}
				
				//승점 순으로 정렬
				for($i=0;$i<sizeof($stats);$i++){
					$temp = $stats[$i];
					for($j=$i+1;$j<sizeof($stats);$j++){
						$c=$stats[$j];
						if($c[21]>$temp[21]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//챔피언스리그 직행  챔피언스리그 예선  유로파 리그  리그 강등
				for($i=0;$i<sizeof($stats);$i++){
					if($i<3)$stats[$i][23]='1';
					else if($i==3)$stats[$i][23]='2';
					else if($i>3&&$i<6)$stats[$i][23]='3';
					else if($i>16)$stats[$i][23]='4';
				}
					
				
// 				for($i=0;$i<sizeof($stats);$i++){
// 					$temp = $stats[$i];
// 					for($j=$i+1;$j<sizeof($stats);$j++){
// 						$c=$stats[$j];
// 						if($view=='win'){
// 							if($c[4]>$temp[4]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else if($view=='draw'){
// 							if($c[5]>$temp[5]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else if($view=='lose'){
// 							if($c[6]<$temp[6]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else if($view=='goal'){
// 							if($c[2]>$temp[2]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else if($view=='loss'){
// 							if($c[3]<$temp[3]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else if($view=='gap'){
// 							$temp[22]=(int)$temp[2]-(int)$temp[3];
// 							$c[22]=(int)$c[2]-(int)$c[3];
// 							if($c[22]>$temp[22]){
// 								$stats[$i]=$c;
// 								$stats[$j]=$temp;
// 								$temp=$c;
// 							}
// 						}else{}
// 					}
// 				}


				//공격력 정렬
				$stats1=$stats;
				for($i=0;$i<sizeof($stats1);$i++){
					$temp = $stats1[$i];
					for($j=$i+1;$j<sizeof($stats1);$j++){
						$c=$stats1[$j];
						if($c[2]>$temp[2]){
							$stats1[$i]=$c;
							$stats1[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//수비력 정렬
				$stats2=$stats;
				for($i=0;$i<sizeof($stats2);$i++){
					$temp = $stats2[$i];
					for($j=$i+1;$j<sizeof($stats2);$j++){
						$c=$stats2[$j];
						if($c[3]<$temp[3]){
							$stats2[$i]=$c;
							$stats2[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//득점마진
				$stats3 = $stats;
				for($i=0;$i<sizeof($stats3);$i++){
					$temp = $stats3[$i];
					$temp[9]=(int)$temp[2]-$temp[3];
					for($j=$i+1;$j<sizeof($stats3);$j++){
						$c=$stats3[$j];
						$c[9]=(int)$c[2]-(int)$c[3];
						if($c[9]>$temp[9]){
							$stats3[$i]=$c;
							$stats3[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//2.5오버
				$stats4 = $stats;
				for($i=0;$i<sizeof($stats4);$i++){
					for($j=$i+1;$j<sizeof($stats4);$j++){
						$c=$stats4[$j];
						if($c[10]>$temp[10]){
							$stats4[$i]=$c;
							$stats4[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//클린
				$stats5 = $stats;
				for($i=0;$i<sizeof($stats5);$i++){
					$temp = $stats5[$i];
					for($j=$i+1;$j<sizeof($stats5);$j++){
						$c=$stats5[$j];
						if($c[11]>$temp[11]){
							$stats5[$i]=$c;
							$stats5[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				//양팀 득점
				$stats6 = $stats;
				for($i=0;$i<sizeof($stats6);$i++){
					$temp = $stats6[$i];
					for($j=$i+1;$j<sizeof($stats6);$j++){
						$c=$stats6[$j];
						if($c[11]>$temp[11]){
							$stats6[$i]=$c;
							$stats6[$j]=$temp;
							$temp=$c;
						}
					}
				}
				
				
				$ex=(int)$hw+(int)$dr+(int)$vw;
				
				$hw2 = round((int)$hw/$ex*100,2);
				$dr2 = round((int)$dr/$ex*100,2);
				$vw2 = round((int)$vw/$ex*100,2);
				
				$hw1 = $hw-floor($hw2);
				$dr1 = $dr-floor($dr2);
				$vw1 = $vw-floor($vw2);
				
						
				//0.37	:	0	:	0.63
				
				if(floor($hw2)+floor($dr2)+floor($vw2)==99){
					if($hw1>$dr1){
						if($hw1>$vw1){
							$hw2=floor($hw2)+1;
							$dr2=floor($dr2);
							$vw2=floor($vw2);
						}else{
							//3
							$hw2=floor($hw2);
							$dr2=floor($dr2);
							$vw2=floor($vw2)+1;
						}						
					}else{
						if($dr1>$vw1){
							//2
							$hw2=floor($hw2);
							$dr2=floor($dr2)+1;
							$vw2=floor($vw2);
						}else{
							//3
							$hw2=floor($hw2);
							$dr2=floor($dr2);
							$vw2=floor($vw2)+1;
						}						
					}
				}else if(floor($hw2)+floor($dr2)+floor($vw2)==98){
					if($hw1>$dr1){
						if($hw1>$vw1){
							//1
							$hw2=floor($hw2)+1;
							if($dr1>$vw1){
								//2
								$dr2=floor($dr2)+1;
								$vw2=floor($vw2);
							}else{
								//3
								$dr2=floor($dr2);
								$vw2=floor($vw2)+1;
							}
						}else{
							//3
							$vw2=floor($vw2)+1;
							if($hw1>$dr1){
								//1
								$hw2=floor($hw2)+1;
								$dr2=floor($dr2);
							}else{
								//2
								$hw2=floor($hw2);
								$dr2=floor($dr2)+1;
							}
						}
					}else{
						if($dr1>$vw1){
							//2
							$dr=floor($dr2)+1;
							if($hw1>$vw1){
								//1
								$hw2=floor($hw2)+1;
								$vw2=floor($vw2);
							}else{
								//3
								$vw2=floor($vw2)+1;
								$hw2=floor($hw2);
							}
						}else{
							//3
							$vw2=floor($vw2)+1;
							if($hw1>$dr1){
								//1
								$hw2=floor($hw2)+1;
								$dr2=floor($dr2);
							}else{
								//2
								$hw2=floor($hw2);
								$dr2=floor($dr2)+1;
							}
						}
					}
				}
				
				$this->load->view('/game/league_info', array('league_id'=>$league_id, 'league_info'=>$league_info, 'league_game_num'=> $league_game_num, 'game2'=>$game2, 'league_game_num1'=> $league_game_num1, 'game21'=>$game21, 'stats'=>$stats, 'stats1'=>$stats1, 'stats2'=>$stats2, 'hw'=>$hw, 'dr'=>$dr, 'vw'=>$vw, 'hw2'=>$hw2, 'dr2'=>$dr2, 'vw2'=>$vw2, 'hg'=>$hg, 'vg'=>$vg, 'view'=>$view, 'game_schedule'=>$game_schedule, 'over25'=>$over25, 'under25'=>$under25, 'clean'=>$clean, 'noclean'=>$noclean, 'goal'=>$goal, 'nogoal'=>$nogoal, 'stats3'=>$stats3, 'stats4'=>$stats4, 'stats5'=>$stats5, 'stats6'=>$stats6));
				

			}
		}
		$this->load->view("/game/footer");
	}
	
	function schedule02(){
		$this->load->view("/game/head_up2");
		$this->load->view("head");
		$this->load->view('/game/schedule02');
		$this->load->view("footer");
		$this->load->view("/game/footer_down");
	}
	
	function result(){
		if($this->input->get('league_id')!=""){
			
			$league_id = $this->input->get('league_id');
			$this->load->view("/game/head_up3");
			$this->load->view("head");
			$this->load->view('/game/result', array('league_id'=>$league_id));
			$this->load->view("footer");
			$this->load->view("/game/footer_down");
		}
	}
	
	function stats(){
		if($this->input->get('league_id')!=""){
			$league_id = $this->input->get('league_id');
			$this->load->view("/game/head_up2");
			$this->load->view("head");
			$game_stat=$this->game_model->get_stat($league_id);
			$a=array("","","","","","","","","","","","","","","","","","","","","","",0,0,0,0,"","");
			$b=array("","","","","","","","","","","","","","","","","","","","","","",0,0,0,0,"","");
			//홈번호, 홈팀 이름, 득점, 실점, 승, 무, 패,레드,5게임
			$f=0;
			$stats = array();
			
			foreach($game_stat as $entry){
				$d=null;
				$e=null;
				$c;
				for($i=0;$i<sizeof($stats);$i++){
					$c=$stats[$i];
					if($c[0]==trim($entry->home_team) && $d==null) $d=$i+1;
					if($c[0]==trim($entry->visit_team)&& $e==null) $e=$i+1;
//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->home_team)." : ".$d."<br/>";
//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->visit_team)." : ".$e."<br/>";
				}
				//득:9	실:10	승:11	무:12	페:13	레:14
				//득:15	실:16	승:17	무:18	패:19	레:20
				if($d!=null){
					$c=$stats[$d-1];
//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
					$a[0]=trim($entry->home_team);
					$a[1]=trim($entry->home_name);
					$a[2]=(int)$c[2] + (int)$entry->home_score+"";
					$a[9]=(int)$c[9] + (int)$entry->home_score+"";
					$a[3]=(int)$c[3] + (int)$entry->visit_score+"";
					$a[10]=(int)$c[10] + (int)$entry->visit_score+"";
					$a[7]=(int)$c[7] + (int)$entry->home_red+"";
					$a[14]=(int)$c[14] + (int)$entry->home_red+"";
					if((int)$entry->home_score-(int)$entry->visit_score>0){
						$a[4]=(int)$c[4]+1;
						$a[5]=$c[5];
						$a[6]=$c[6];
						$a[8]=$c[8]."3";
						$a[24]=$c[24]."3";
						$a[11]=(int)$c[11]+1;
						$a[12]=$c[12];
						$a[13]=$c[13];
					}else if((int)$entry->home_score-(int)$entry->visit_score==0){
						$a[4]=$c[4];
						$a[5]=(int)$c[5]+1;
						$a[6]=$c[6];
						$a[8]=$c[8]."1";
						$a[24]=$c[24]."1";
						$a[11]=$c[11];
						$a[12]=(int)$c[12]+1;
						$a[13]=$c[13];
					}else{
						$a[4]=$c[4];
						$a[5]=$c[5];
						$a[6]=(int)$c[6]+1;
						$a[8]=$a[8]."0";
						$a[24]=$a[24]."0";
						$a[11]=$c[11];
						$a[12]=$c[12];
						$a[13]=(int)$c[13]+1;
					}
					$a[15]=$c[15];
					$a[16]=$c[16];
					$a[17]=$c[17];
					$a[18]=$c[18];
					$a[19]=$c[19];
					$a[20]=$c[20];
					$stats[$d-1]=$a;
//					echo "a+=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
							$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
				}else{
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
					$a[0]=trim($entry->home_team);
					$a[1]=trim($entry->home_name);
					$a[2]=$entry->home_score;
					$a[9]=$entry->home_score;
					$a[3]=$entry->visit_score;
					$a[10]=$entry->visit_score;
					$a[7]=$entry->home_red;
					$a[14]=$entry->home_red;
					if((int)$entry->home_score-(int)$entry->visit_score>0){
						$a[4]="1";
						$a[5]="0";
						$a[6]="0";
						$a[8]="3";
						$a[11]="1";
						$a[12]="0";
						$a[13]="0";
						$a[24]="3";
					}else if((int)$entry->home_score-(int)$entry->visit_score==0){
						$a[4]="0";
						$a[5]="1";
						$a[6]="0";
						$a[8]="1";
						$a[11]="0";
						$a[12]="1";
						$a[13]="0";
						$a[24]="1";
					}else{
						$a[4]="0";
						$a[5]="0";
						$a[6]="1";
						$a[8]="0";
						$a[11]="0";
						$a[12]="0";
						$a[13]="1";
						$a[24]="0";
					}
					$a[15]="0";
					$a[16]="0";
					$a[17]="0";
					$a[18]="0";
					$a[19]="0";
					$a[20]="0";
					$a[25]="";
						
					$stats[sizeof($stats)]=$a;
//					echo "a=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
//							$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
				}
				//득:9	실:10	승:11	무:12	페:13	레:14  최근 : 24
				//득:15	실:16	승:17	무:18	패:19	레:20 최근 : 25
				
				if($e!=null){
					$c=$stats[$e-1];
//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
					$b[0]=trim($entry->visit_team);
					$b[1]=trim($entry->visit_name);
					$b[2]=(int)$c[2] + (int)$entry->visit_score;
					$b[15]=(int)$c[15] + (int)$entry->visit_score;
					$b[3]=(int)$c[3] + (int)$entry->home_score;
					$b[16]=(int)$c[16] + (int)$entry->home_score;
					$b[7]=(int)$c[7] + (int)$entry->visit_red;
					$b[20]=(int)$c[20] + (int)$entry->visit_red;
					if((int)$entry->home_score-(int)$entry->visit_score>0){
						$b[4]=$c[4];
						$b[5]=$c[5];
						$b[6]=(int)$c[6]+1;
						$b[8]=$c[8]."0";
						$b[25]=$c[25]."0";
						$b[17]=$c[17];
						$b[18]=$c[18];
						$b[19]=(int)$c[19]+1;
					}else if((int)$entry->home_score-(int)$entry->visit_score==0){
						$b[4]=$c[4];
						$b[5]=(int)$c[5]+1;
						$b[6]=$c[6];
						$b[8]=$c[8]."1";
						$b[25]=$c[25]."1";
						$b[17]=$c[17];
						$b[18]=(int)$c[18]+1;
						$b[19]=$c[19];
					}else{
						$b[4]=(int)$c[4]+1;
						$b[5]=$c[5];
						$b[6]=$c[6];
						$b[8]=$c[8]."3";
						$b[25]=$c[25]."3";
						$b[17]=(int)$c[17]+1;
						$b[18]=$c[18];
						$b[19]=$c[19];						
					}
					$b[9]=$c[9];
					$b[10]=$c[10];
					$b[11]=$c[11];
					$b[12]=$c[12];
					$b[13]=$c[13];
					$b[14]=$c[14];
					$stats[$e-1]=$b;
//					echo "b+=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
				
				}else{
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
								
					$b[0]=trim($entry->visit_team);
					$b[1]=trim($entry->visit_name);
					$b[2]=$entry->visit_score;
					$b[15]=$entry->visit_score;
					$b[3]=$entry->home_score;
					$b[16]=$entry->home_score;
					$b[7]=$entry->visit_red;
					$b[20]=$entry->visit_red;
					if((int)$entry->home_score-(int)$entry->visit_score>0){
						$b[4]="0";
						$b[5]="0";
						$b[6]="1";
						$b[17]="0";
						$b[18]="0";
						$b[19]="1";
						$b[8]="0";
						$b[25]="0";
					}else if((int)$entry->home_score-(int)$entry->visit_score==0){
						$b[4]="0";
						$b[5]="1";
						$b[6]="0";
						$b[17]="0";
						$b[18]="1";
						$b[19]="0";
						$b[8]="1";
						$b[25]="1";
					}else{
						$b[4]="1";
						$b[5]="0";
						$b[6]="0";
						$b[17]="1";
						$b[18]="0";
						$b[19]="0";
						$b[8]="3";
						$b[25]="3";
					}
					$b[9]="0";
					$b[10]="0";
					$b[11]="0";
					$b[12]="0";
					$b[13]="0";
					$b[14]="0";
					$b[24]="";
					$stats[sizeof($stats)]=$b;
//					echo "b=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
				}

			}
			$b="";
			for($i=0;$i<sizeof($stats);$i++){
				$c=$stats[$i];
				$c[21]=(int)$c[4]*3+(int)$c[5];
				$c[22]=(int)$c[2]-(int)$c[3];
				$stats[$i] = $c;
			}
			//point, win, draw, lose, goal, loss, gap  
			
			for($i=0;$i<sizeof($stats);$i++){
				$temp = $stats[$i];
				for($j=$i+1;$j<sizeof($stats);$j++){
					$c=$stats[$j];
					if($c[21]>$temp[21]){
						$stats[$i]=$c;
						$stats[$j]=$temp;
						$temp=$c;
					}
				}
			}
			for($i=0;$i<sizeof($stats);$i++){
				if($i<3)$stats[$i][23]='1';
				else if($i==3)$stats[$i][23]='2';
				else if($i>3&&$i<6)$stats[$i][23]='3';
				else if($i>16)$stats[$i][23]='4';
			}
			
			for($i=0;$i<sizeof($stats);$i++){
				$temp = $stats[$i];
				for($j=$i+1;$j<sizeof($stats);$j++){
					$c=$stats[$j];
					if($view=='win'){
						if($c[5]>$temp[5]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else if($view=='draw'){
						if($c[6]>$temp[6]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else if($view=='lose'){
						if($c[7]<$temp[7]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else if($view=='goal'){
						if($c[2]>$temp[2]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else if($view=='loss'){
						if($c[3]<$temp[3]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else if($view=='gap'){
						$temp[22]=(int)$temp[2]-(int)$temp[3];
						$c[22]=(int)$c[2]-(int)$c[3];						
						if($c[22]>$temp[22]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}else{}
				}
			}
			
			$stats1=$stats;
			for($i=0;$i<sizeof($stats1);$i++){
				$temp = $stats1[$i];
				for($j=$i+1;$j<sizeof($stats1);$j++){
					$c=$stats1[$j];
					if($c[2]>$temp[2]){
						$stats1[$i]=$c;
						$stats1[$j]=$temp;
						$temp=$c;
					}
				}
			}
			
			$stats2=$stats;
			for($i=0;$i<sizeof($stats2);$i++){
				$temp = $stats2[$i];
				for($j=$i+1;$j<sizeof($stats2);$j++){
					$c=$stats2[$j];
					if($c[3]<$temp[3]){
						$stats2[$i]=$c;
						$stats2[$j]=$temp;
						$temp=$c;
					}
				}
			}
		

			$this->load->view('/game/stats', array('league_id'=>$league_id, 'stats'=>$stats, 'stats1'=>$stats1, 'stats2'=>$stats2));
			$this->load->view("footer");
			$this->load->view("/game/footer_down");
		}
	}
	
	function ranking(){
		$league_id = $this->input->post("league_id", TRUE);
		$view = $this->input->post("view", TRUE);
		$aa = array($league_id, $view);
		return $aa;
		
	}
	
	function league_info1(){
		$this->load->view("/game/head_up");
		$this->load->view("/head");
		$sports="";
		$sports=$this->input->get('sports');
		if($sports=='soccer'){
			if($this->input->get('league_id')!=""){
	
				$league_id = $this->input->get('league_id');
				$league_info=$this->game_model->get_league_info($league_id);
				$view = $this->input->get('view');
	
				$ex=$this->game_model->get_last_game_num($league_id);
	
				$league_game_num=(int)$ex->run_game;
				$game2=$this->game_model->get_game2($league_id, $league_game_num-1, $league_game_num);
	
				$ex=$this->game_model->get_last_game_num1($league_id);
				$league_game_num1=(int)$ex->run_game;
				$game21=$this->game_model->get_game21($league_id, $league_game_num1, $league_game_num1+1);
	
	
	
				//				echo "<script>alert(".$ex[0]->run_game.");</script>";  16
	
	
	
	
	
				$game_schedule=$this->game_model->get_schedule($league_id);
	
				$game_handicap=array();
				$game_overunder=array();
				$game_winlose=array();
	
	
				$i=0;
				foreach($game_schedule as $entry){
					$handicap=$this->game_model->get_handicap($entry->game_no);
					$overunder=$this->game_model->get_overunder($entry->game_no);
					$winlose=$this->game_model->get_winlose($entry->game_no);
	
					$game_handicap[$i]=$handicap;
					$game_overunder[$i]=$overunder;
					$game_winlose[$i]=$winlose;
					$i++;
				}
	
				$game_schedule=$this->game_model->get_schedule($league_id);
	
				$game_stat=$this->game_model->get_stat($league_id);
				$a=array("","","","","","","","","","","","","","","","","","","","","","",0,0);
				$b=array("","","","","","","","","","","","","","","","","","","","","","",0,0);
				//홈번호, 홈팀 이름, 득점, 실점, 승, 무, 패,레드,5게임
				$f=0;
				$stats = array();
				$hw=0;
				$dr=0;
				$vw=0;
				$hg=0;
				$vg=0;
					
				foreach($game_stat as $entry){
					$d=null;
					$e=null;
					$c;
					for($i=0;$i<sizeof($stats);$i++){
						$c=$stats[$i];
						if($c[0]==trim($entry->home_team) && $d==null) $d=$i+1;
						if($c[0]==trim($entry->visit_team)&& $e==null) $e=$i+1;
						//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->home_team)." : ".$d."<br/>";
						//					echo sizeof($stats)." : " .$i." : ".$c[0]." : ".trim($entry->visit_team)." : ".$e."<br/>";
					}
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
					if($d!=null){
						$c=$stats[$d-1];
						//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
						$a[0]=trim($entry->home_team);
						$a[1]=trim($entry->home_name);
						$a[2]=(int)$c[2] + (int)$entry->home_score+"";
						$a[9]=(int)$c[9] + (int)$entry->home_score+"";
						$hg+=(int)$entry->home_score;
						$a[3]=(int)$c[3] + (int)$entry->visit_score+"";
						$vg+=(int)$entry->visit_score;
						$a[10]=(int)$c[10] + (int)$entry->visit_score+"";
						$a[7]=(int)$c[7] + (int)$entry->home_red+"";
						$a[14]=(int)$c[14] + (int)$entry->home_red+"";
	
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$a[4]=(int)$c[4]+1;
							$a[5]=$c[5];
							$a[6]=$c[6];
							$a[8]=$c[8]."3";
							$a[11]=(int)$c[11]+1;
							$a[12]=$c[12];
							$a[13]=$c[13];
							$hw++;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$a[4]=$c[4];
							$a[5]=(int)$c[5]+1;
							$a[6]=$c[6];
							$a[8]=$c[8]."1";
							$a[11]=$c[11];
							$a[12]=(int)$c[12]+1;
							$a[13]=$c[13];
							$dr++;
						}else{
							$a[4]=$c[4];
							$a[5]=$c[5];
							$a[6]=(int)$c[6]+1;
							$a[8]=$a[8]."0";
							$a[11]=$c[11];
							$a[12]=$c[12];
							$a[13]=(int)$c[13]+1;
							$vw++;
						}
						$a[15]=$c[15];
						$a[16]=$c[16];
						$a[17]=$c[17];
						$a[18]=$c[18];
						$a[19]=$c[19];
						$a[20]=$c[20];
						$stats[$d-1]=$a;
						//					echo "a+=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
						$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
					}else{
						//득:9	실:10	승:11	무:12	페:13	레:14
						//득:15	실:16	승:17	무:18	패:19	레:20
						$a[0]=trim($entry->home_team);
						$a[1]=trim($entry->home_name);
						$a[2]=$entry->home_score;
						$a[9]=$entry->home_score;
						$hg+=(int)$entry->home_score;
						$a[3]=$entry->visit_score;
						$a[10]=$entry->visit_score;
						$vg+=(int)$entry->visit_score;
						$a[7]=$entry->home_red;
						$a[14]=$entry->home_red;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$a[4]="1";
							$a[5]="0";
							$a[6]="0";
							$a[8]="3";
							$a[11]="1";
							$a[12]="0";
							$a[13]="0";
							$hw++;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$a[4]="0";
							$a[5]="1";
							$a[6]="0";
							$a[8]="1";
							$a[11]="0";
							$a[12]="1";
							$a[13]="0";
							$dr++;
						}else{
							$a[4]="0";
							$a[5]="0";
							$a[6]="1";
							$a[8]="0";
							$a[11]="0";
							$a[12]="0";
							$a[13]="1";
							$vw++;
						}
						$a[15]="0";
						$a[16]="0";
						$a[17]="0";
						$a[18]="0";
						$a[19]="0";
						$a[20]="0";
	
						$stats[sizeof($stats)]=$a;
						//					echo "a=".$a[0].":".$a[1].":".$a[2].":".$a[3].":".$a[4].":".$a[5].":".$a[6].":".$a[7].":".$a[8].":".$a[9]."<br/>".
						//							$a[10].":".$a[11].":".$a[12].":".$a[13].":".$a[14].":".$a[15].":".$a[16].":".$a[17].":".$a[18].":".$a[19].":".$a[20]."<br/>";
					}
					//득:9	실:10	승:11	무:12	페:13	레:14
					//득:15	실:16	승:17	무:18	패:19	레:20
	
					if($e!=null){
						$c=$stats[$e-1];
						//					echo "c=".$c[0].":".$c[1].":".$c[2].":".$c[3].":".$c[4].":".$c[5].":".$c[6].":".$c[7].":".$c[8].":".$c[9]."<br/>".$c[10].":".$c[11].":".$c[12].":".$c[13].":".$c[14].":".$c[15].":".$c[16].":".$c[17].":".$c[18].":".$c[19].":".$c[20]."<br/>";
						$b[0]=trim($entry->visit_team);
						$b[1]=trim($entry->visit_name);
						$b[2]=(int)$c[2] + (int)$entry->visit_score;
						$b[15]=(int)$c[15] + (int)$entry->visit_score;
						$b[3]=(int)$c[3] + (int)$entry->home_score;
						$b[16]=(int)$c[16] + (int)$entry->home_score;
						$b[7]=(int)$c[7] + (int)$entry->visit_red;
						$b[20]=(int)$c[20] + (int)$entry->visit_red;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$b[4]=$c[4];
							$b[5]=$c[5];
							$b[6]=(int)$c[6]+1;
							$b[8]=$c[8]."0";
							$b[17]=$c[17];
							$b[18]=$c[18];
							$b[19]=(int)$c[19]+1;
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$b[4]=$c[4];
							$b[5]=(int)$c[5]+1;
							$b[6]=$c[6];
							$b[8]=$c[8]."1";
							$b[17]=$c[17];
							$b[18]=(int)$c[18]+1;
							$b[19]=$c[19];
						}else{
							$b[4]=(int)$c[4]+1;
							$b[5]=$c[5];
							$b[6]=$c[6];
							$b[8]=$c[8]."3";
							$b[17]=(int)$c[17]+1;
							$b[18]=$c[18];
							$b[19]=$c[19];
						}
						$b[9]=$c[9];
						$b[10]=$c[10];
						$b[11]=$c[11];
						$b[12]=$c[12];
						$b[13]=$c[13];
						$b[14]=$c[14];
						$stats[$e-1]=$b;
						//					echo "b+=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
	
					}else{
						//득:9	실:10	승:11	무:12	페:13	레:14
						//득:15	실:16	승:17	무:18	패:19	레:20
	
						$b[0]=trim($entry->visit_team);
						$b[1]=trim($entry->visit_name);
						$b[2]=$entry->visit_score;
						$b[15]=$entry->visit_score;
						$b[3]=$entry->home_score;
						$b[16]=$entry->home_score;
						$b[7]=$entry->visit_red;
						$b[20]=$entry->visit_red;
						if((int)$entry->home_score-(int)$entry->visit_score>0){
							$b[4]="0";
							$b[5]="0";
							$b[6]="1";
							$b[17]="0";
							$b[18]="0";
							$b[19]="1";
							$b[8]="0";
						}else if((int)$entry->home_score-(int)$entry->visit_score==0){
							$b[4]="0";
							$b[5]="1";
							$b[6]="0";
							$b[17]="0";
							$b[18]="1";
							$b[19]="0";
							$b[8]="1";
						}else{
							$b[4]="1";
							$b[5]="0";
							$b[6]="0";
							$b[17]="1";
							$b[18]="0";
							$b[19]="0";
							$b[8]="3";
						}
						$b[9]="0";
						$b[10]="0";
						$b[11]="0";
						$b[12]="0";
						$b[13]="0";
						$b[14]="0";
						$stats[sizeof($stats)]=$b;
						//					echo "b=".$b[0].":".$b[1].":".$b[2].":".$b[3].":".$b[4].":".$b[5].":".$b[6].":".$b[7].":".$b[8].":".$b[9]."<br/>".$b[10].":".$b[11].":".$b[12].":".$b[13].":".$b[14].":".$b[15].":".$b[16].":".$b[17].":".$b[18].":".$b[19].":".$b[20]."<br/>";
					}
	
				}
				$b="";
				for($i=0;$i<sizeof($stats);$i++){
					$c=$stats[$i];
					$c[21]=(int)$c[4]*3+(int)$c[5];
					$c[22]=(int)$c[2]-(int)$c[3];
					$stats[$i] = $c;
				}
				for($i=0;$i<sizeof($stats);$i++){
					$temp = $stats[$i];
					for($j=$i+1;$j<sizeof($stats);$j++){
						$c=$stats[$j];
						if($c[21]>$temp[21]){
							$stats[$i]=$c;
							$stats[$j]=$temp;
							$temp=$c;
						}
					}
				}
	
				for($i=0;$i<sizeof($stats);$i++){
					if($i<3)$stats[$i][23]='1';
					else if($i==3)$stats[$i][23]='2';
					else if($i>3&&$i<6)$stats[$i][23]='3';
					else if($i>16)$stats[$i][23]='4';
				}
					
				for($i=0;$i<sizeof($stats);$i++){
					$temp = $stats[$i];
					for($j=$i+1;$j<sizeof($stats);$j++){
						$c=$stats[$j];
						if($view=='win'){
							if($c[4]>$temp[4]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else if($view=='draw'){
							if($c[5]>$temp[5]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else if($view=='lose'){
							if($c[6]<$temp[6]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else if($view=='goal'){
							if($c[2]>$temp[2]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else if($view=='loss'){
							if($c[3]<$temp[3]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else if($view=='gap'){
							$temp[22]=(int)$temp[2]-(int)$temp[3];
							$c[22]=(int)$c[2]-(int)$c[3];
							if($c[22]>$temp[22]){
								$stats[$i]=$c;
								$stats[$j]=$temp;
								$temp=$c;
							}
						}else{}
					}
				}
	
				$stats1=$stats;
				for($i=0;$i<sizeof($stats1);$i++){
					$temp = $stats1[$i];
					for($j=$i+1;$j<sizeof($stats1);$j++){
						$c=$stats1[$j];
						if($c[2]>$temp[2]){
							$stats1[$i]=$c;
							$stats1[$j]=$temp;
							$temp=$c;
						}
					}
				}
					
				$stats2=$stats;
				for($i=0;$i<sizeof($stats2);$i++){
					$temp = $stats2[$i];
					for($j=$i+1;$j<sizeof($stats2);$j++){
						$c=$stats2[$j];
						if($c[3]<$temp[3]){
							$stats2[$i]=$c;
							$stats2[$j]=$temp;
							$temp=$c;
						}
					}
				}
	
				$ex=(int)$hw+(int)$dr+(int)$vw;
	
				$hw2 = round((int)$hw/$ex*100,2);
				$dr2 = round((int)$dr/$ex*100,2);
				$vw2 = round((int)$vw/$ex*100,2);
	
				$hw1 = $hw-floor($hw2);
				$dr1 = $dr-floor($dr2);
				$vw1 = $vw-floor($vw2);
	
	
				//0.37	:	0	:	0.63
				if(floor($hw)+floor($dr)+floor($vw)==99){
					if($hw1>$dr1){
						if($hw1>$vw1){
							$hw2=floor($hw2)+1;
							$dr2=floor($dr2);
							$vw2=floor($vw2);
						}else{
							//3
							$hw2=floor($hw2);
							$dr2=floor($dr2);
							$vw2=floor($vw2)+1;
						}
					}else{
						if($dr1>$vw1){
							//2
							$hw2=floor($hw2);
							$dr2=floor($dr2)+1;
							$vw2=floor($vw2);
						}else{
							//3
							$hw2=floor($hw2);
							$dr2=floor($dr2);
							$vw2=floor($vw2)+1;
						}
					}
				}else if(floor($hw)+floor($dr)+floor($vw)==98){
					if($hw1>$dr1){
						if($hw1>$vw1){
							//1
							$hw2=floor($hw2)+1;
							if($dr1>$vw1){
								//2
								$dr2=floor($dr2)+1;
								$vw2=floor($vw2);
							}else{
								//3
								$dr2=floor($dr2);
								$vw2=floor($vw2)+1;
							}
						}else{
							//3
							$vw2=floor($vw2)+1;
							if($hw1>$dr1){
								//1
								$hw2=floor($hw2)+1;
								$dr2=floor($dr2);
							}else{
								//2
								$hw2=floor($hw2);
								$dr2=floor($dr2)+1;
							}
						}
					}else{
						if($dr1>$vw1){
							//2
							$dr=floor($dr2)+1;
							if($hw1>$vw1){
								//1
								$hw2=floor($hw2)+1;
								$vw2=floor($vw2);
							}else{
								//3
								$vw2=floor($vw2)+1;
								$hw2=floor($hw2);
							}
						}else{
							//3
							$vw2=floor($vw2)+1;
							if($hw1>$dr1){
								//1
								$hw2=floor($hw2)+1;
								$dr2=floor($dr2);
							}else{
								//2
								$hw2=floor($hw2);
								$dr2=floor($dr2)+1;
							}
						}
					}
				}
	
				$this->load->view('/game/league_info', array('league_id'=>$league_id, 'league_info'=>$league_info, 'league_game_num'=> $league_game_num, 'game2'=>$game2, 'league_game_num1'=> $league_game_num1, 'game21'=>$game21, 'stats'=>$stats, 'stats1'=>$stats1, 'stats2'=>$stats2, 'hw'=>$hw, 'dr'=>$dr, 'vw'=>$vw, 'hw2'=>$hw2, 'dr2'=>$dr2, 'vw2'=>$vw2, 'hg'=>$hg, 'vg'=>$vg, 'view'=>$view, 'game_schedule'=>$game_schedule));
	
	
			}
		}
		$this->load->view("/game/footer");
	}
	

}