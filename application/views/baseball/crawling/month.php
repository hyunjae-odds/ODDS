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

    for($i=3; $i<10; $i++):
        $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/main?rows=20&order=TPCT&orderType=DESC&teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$i.'&split02_2='.$i, 'GET');
        $response=$client->getMessageFactory()->createResponse();
        $data=$client->send($request, $response);

        $exp=explode('<tbody>', $data->content);
        $exp2=explode('</tr>', $exp[1]);

        $result=array();
        if(sizeof($exp2)==13):
            foreach($exp2 as $key=>$item):
                if($key!=0 && $key!=11 && $key!=12):
                    $arr=array();
                    $exp3=explode('</td>', $item);
                    $arr['team']=preg_replace("/\s+/", "", strip_tags($exp3[1]));
                    $arr['g']=preg_replace("/\s+/", "", strip_tags($exp3[2]));
                    $arr['r']=preg_replace("/\s+/", "", strip_tags($exp3[9]));
                    $arr['hr']=preg_replace("/\s+/", "", strip_tags($exp3[10]));
                    $arr['avg']=preg_replace("/\s+/", "", strip_tags($exp3[15]));
                    $arr['month']=$i;

                    array_push($result, $arr);
                endif;
            endforeach;

            $request=$client->getMessageFactory()->createRequest('http://www.kbreport.com/teams/standard?teamId=&defense_no=&year_from=2017&year_to=2017&split01=month&split02_1='.$i.'&split02_2='.$i, 'GET');
            $response=$client->getMessageFactory()->createResponse();
            $data2=$client->send($request, $response);

            $exp=explode('<tbody>', $data2->content);
            $exp2=explode('</tr>', $exp[1]);
            $result2=array();
            foreach($exp2 as $key=>$item):
                if($key!=0 && $key!=11 && $key!=12):
                    $arr2=array();
                    $exp3=explode('</td>', $item);
                    $arr2['team']=preg_replace("/\s+/", "", strip_tags($exp3[1]));
                    $arr2['h']=preg_replace("/\s+/", "", strip_tags($exp3[5]));

                    array_push($result2, $arr2);
                endif;
            endforeach;
            foreach($result as $key=>$item) foreach($result2 as $items) if($item['team']==$items['team']) $result[$key]['h']=$items['h'];

            foreach($result as $item) if($item['team']!='') $this->baseball_model->insert_update_before('KBO_team_month', $item, array('month'=>$item['month'], 'team'=>$item['team']));
        endif;
    endfor;
?>
