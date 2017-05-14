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
?>
<script src="/public/lib/js/highcharts/highcharts.js"></script>
<script src="/public/lib/js/highcharts/modules/exporting.js"></script>
<link href="/public/lib/css/baseball.css" rel="stylesheet" type="text/css"/>

<div class="Match_w">
    <?php include('match_1.php'); ?>

    <div class="matchTab">
        <ul class="title">
            <li class="on"><a href="#r1">팀간 비교</a></li>
            <li><a href="#r2">선발 비교</a></li>
        </ul>
        <ul class="result">
            <?php include('match_2_1.php'); ?>
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
