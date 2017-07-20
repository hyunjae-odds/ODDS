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

    $request=$client->getMessageFactory()->createRequest('http://boston.redsox.mlb.com/stats/sortable.jsp#elem=%5Bobject+Object%5D&tab_level=child&click_text=Sortable+Team+hitting&game_type=R&season=2017&season_type=ANY&league_code=MLB&sectionType=st&statType=hitting&page=1&ts=1500535197398', 'GET');
    $response=$client->getMessageFactory()->createResponse();
    $client->send($request, $response);

    $exp=explode('<tbody tabindex="-1">', $response->getContent());
    $exp1=explode('</tbody>', $exp[1]);
    $exp2=explode('</tr>', $exp1[0]);
    array_pop($exp2);

    foreach($exp2 as $item):
        $exp3=explode('</td>', $item);
        $arr=array(
                'rank'=>strip_tags($exp3[0]),
                'team'=>strip_tags($exp3[1]),
                'lg'=>strip_tags($exp3[3]),
                'g'=>strip_tags($exp3[4]),
                'ab'=>strip_tags($exp3[5]),
                'r'=>strip_tags($exp3[6]),
                'h'=>strip_tags($exp3[7]),
                'second_b'=>strip_tags($exp3[8]),
                'third_b'=>strip_tags($exp3[9]),
                'hr'=>strip_tags($exp3[10]),
                'rbi'=>strip_tags($exp3[11]),
                'bb'=>strip_tags($exp3[12]),
                'so'=>strip_tags($exp3[13]),
                'sb'=>strip_tags($exp3[14]),
                'cs'=>strip_tags($exp3[15]),
                'avg'=>strip_tags($exp3[16]),
                'obp'=>strip_tags($exp3[17]),
                'slg'=>strip_tags($exp3[18]),
                'ops'=>strip_tags($exp3[19]),
                'ibb'=>strip_tags($exp3[20]),
                'hbp'=>strip_tags($exp3[21]),
                'sac'=>strip_tags($exp3[22]),
                'sf'=>strip_tags($exp3[23]),
                'tb'=>strip_tags($exp3[24]),
                'xbh'=>strip_tags($exp3[25]),
                'gdp'=>strip_tags($exp3[26]),
                'go'=>strip_tags($exp3[27]),
                'ao'=>strip_tags($exp3[28]),
                'go_ao'=>strip_tags($exp3[29]),
                'np'=>strip_tags($exp3[30]),
                'pa'=>strip_tags($exp3[31])
             );
        $this->baseball_model->insert_update_before('MLB_team_offense', $arr, array('team'=>$arr['team']));
    endforeach;

    $request=$client->getMessageFactory()->createRequest('http://boston.redsox.mlb.com/stats/sortable.jsp#elem=%5Bobject+Object%5D&tab_level=child&click_text=Sortable+Team+pitching&game_type=R&season=2017&season_type=ANY&league_code=MLB&sectionType=st&statType=pitching&page=1&ts=1500540346868', 'GET');
    $response=$client->getMessageFactory()->createResponse();
    $client->send($request, $response);

    $exp=explode('<tbody tabindex="-1">', $response->getContent());
    $exp1=explode('</tbody>', $exp[1]);
    $exp2=explode('</tr>', $exp1[0]);
    array_pop($exp2);

    foreach($exp2 as $item):
        $exp3=explode('</td>', $item);
        array_pop($exp3);
        $arr=array(
            'rank'=>strip_tags($exp3[0]),
            'team'=>strip_tags($exp3[1]),
            'lg'=>strip_tags($exp3[3]),
            'w'=>strip_tags($exp3[4]),
            'l'=>strip_tags($exp3[5]),
            'era'=>strip_tags($exp3[6]),
            'g'=>strip_tags($exp3[7]),
            'gs'=>strip_tags($exp3[8]),
            'sv'=>strip_tags($exp3[9]),
            'svo'=>strip_tags($exp3[10]),
            'ip'=>strip_tags($exp3[11]),
            'h'=>strip_tags($exp3[12]),
            'r'=>strip_tags($exp3[13]),
            'er'=>strip_tags($exp3[14]),
            'hr'=>strip_tags($exp3[15]),
            'bb'=>strip_tags($exp3[16]),
            'so'=>strip_tags($exp3[17]),
            'avg'=>strip_tags($exp3[18]),
            'whip'=>strip_tags($exp3[19]),
            'cg'=>strip_tags($exp3[20]),
            'sho'=>strip_tags($exp3[21]),
            'hb'=>strip_tags($exp3[22]),
            'ibb'=>strip_tags($exp3[23]),
            'gf'=>strip_tags($exp3[24]),
            'hld'=>strip_tags($exp3[25]),
            'gidp'=>strip_tags($exp3[26]),
            'go'=>strip_tags($exp3[27]),
            'ao'=>strip_tags($exp3[28]),
            'wp'=>strip_tags($exp3[29]),
            'bk'=>strip_tags($exp3[30]),
            'sb'=>strip_tags($exp3[31]),
            'cs'=>strip_tags($exp3[32]),
            'pk'=>strip_tags($exp3[33]),
            'tbf'=>strip_tags($exp3[34]),
            'np'=>strip_tags($exp3[35]),
            'wpct'=>strip_tags($exp3[36]),
            'go_ao'=>strip_tags($exp3[37]),
            'obp'=>strip_tags($exp3[38]),
            'slg'=>strip_tags($exp3[39]),
            'ops'=>strip_tags($exp3[40])
        );

        $this->baseball_model->insert_update_before('MLB_team_defence', $arr, array('team'=>$arr['team']));
    endforeach;
?>