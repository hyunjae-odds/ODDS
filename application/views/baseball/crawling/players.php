<?php
    /**
     * Created by PhpStorm.
     * User: hyunjae
     * Date: 2017. 7. 10.
     * Time: PM 1:53
     */

    use JonnyW\PhantomJs\Client;
    $client=Client::getInstance();
    $client->getEngine()->setPath('/Users/hyunjae/Sites/ODDS/public/lib/js/phantomjs');

    foreach($players as $player):
        $request=$client->getMessageFactory()->createRequest('http://m.mlb.com/player/'.$player->player_id, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $client->send($request, $response);

        $result=array();
        $result2=array();
        $exp=explode('<td class="col-0 row-0 td--highlighted" data-col="0" data-row="0">', $response->getContent());

        if(sizeof($exp)==3):
            $exp1=explode('</tbody>', $exp[1]);
            $exp2=explode('</tr>', $exp1[0]);
            for($i=0; $i<sizeof($exp2)-1; $i++):
                $arr=array();
                $column_set1=array('year','team','lg','g','ab','r','h','tb','second_b','third_b','hr','rbi','bb','ibb','so','sb','cs','avg','obp','slg','ops','goao');
                $exp3=explode('</span>', $exp2[$i]);
                foreach($exp3 as $item):
                    $exp4=explode('<span>', $item);
                    if(isset($exp4[1])) array_push($arr, $exp4[1]);
                endforeach;
                if(sizeof($column_set1)==sizeof($arr)) array_push($result, array_combine($column_set1, $arr));
            endfor;
            $exp5=explode('</tbody>', $exp[2]);
            $exp6=explode('</tr>', $exp5[0]);
            for($j=0; $j<sizeof($exp6)-1; $j++):
                $arr2=array();
                $column_set2=array('pa','xbh','hbp','sac','sf','babip','gdp','gidpo');
                $exp7=explode('</span>', $exp6[$j]);
                foreach($exp7 as $key=>$items):
                    if($key==3 || $key==5 || $key==6 || $key==7 || $key==8 || $key==9 || $key==10 || $key==11):
                        $exp8=explode('<span>', $items);
                        if(isset($exp8[1])) array_push($arr2, $exp8[1]);
                    endif;
                endforeach;
                if(sizeof($column_set2)==sizeof($arr2)) array_push($result2, array_combine($column_set2, $arr2));
            endfor;
            foreach($result as $key=>$entry) $this->baseball_model->insertUpdateBefore('MLB_record_hitter', $entry+$result2[$key]+array('player_id'=>$player->player_id,'crawling_date'=>date('Y-m-d')), array('year'=>$entry['year'],'player_id'=>$player->player_id));

            echo $players[0]->player_id.' is updated.<br>';
        elseif(sizeof($exp)==4):
            $exp1=explode('</tbody>', $exp[1]);
            $exp2=explode('</tr>', $exp1[0]);
            for($i=0; $i<sizeof($exp2)-1; $i++):
                $arr=array();
                $column_set1=array('year','team','lg','w','l','era','g','gs','cg','sho','sv','ip','h','r','er','hr','bb','ibb','so','avg','whip','goao');
                $exp3=explode('</span>', $exp2[$i]);
                foreach($exp3 as $key=>$item):
                    if($key!=11 && $key!=17):
                        $exp4=explode('<span>', $item);
                        if(isset($exp4[1])) array_push($arr, $exp4[1]);
                    endif;
                endforeach;
                if(sizeof($column_set1)==sizeof($arr)) array_push($result, array_combine($column_set1, $arr));
            endfor;
            $exp5=explode('</tbody>', $exp[2]);
            $exp6=explode('</tr>', $exp5[0]);
            for($j=0; $j<sizeof($exp6)-1; $j++):
                $arr2=array();
                $column_set2=array('qs','gf','hld','second_b','third_b','gidp','gidpo','wp','bk','sb','cs','pk','np','sp','pip','ppa');
                $exp7=explode('</span>', $exp6[$j]);
                foreach($exp7 as $key=>$items):
                    if($key!=0 && $key!=1 && $key!=2):
                        $exp8=explode('<span>', $items);
                        if(isset($exp8[1])) array_push($arr2, $exp8[1]);
                    endif;
                endforeach;
                if(sizeof($column_set2)==sizeof($arr2)) array_push($result2, array_combine($column_set2, $arr2));
            endfor;
            foreach($result as $key=>$entry) $this->baseball_model->insertUpdateBefore('MLB_record_pitcher', $entry+$result2[$key]+array('player_id'=>$player->player_id,'crawling_date'=>date('Y-m-d')), array('year'=>$entry['year'],'player_id'=>$player->player_id));

            echo $player->player_id.' is updated.<br>';
        else: echo $player->player_id.' is passed2.<br>'; endif;
    endforeach;
?>