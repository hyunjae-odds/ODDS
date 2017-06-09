<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset-utf-8"/>
    <title> ODDS CONNECT </title>
    <link rel="stylesheet" href="/public/lib/js/lib/jquery.bxslider.css" />
    <link href="/public/lib/css/common.css" rel="stylesheet" type="text/css" />
    <script src="/public/lib/js/jquery/jquery-1.11.3.js"></script>
    <script src="/public/lib/js/lib/jquery.bxslider.js"></script>
    <script type="text/javascript" src="/public/lib/js/charts/loader.js"></script><!-- 팀정보 원형그래프 -->

    <script type="text/javascript">
        /* ------------------------------------common------------------------------------- */
        $(function(){
            $("a").attr("onfocus","this.blur();")
        });
        $(document).click(function(){
            //	$(".select ul").slideUp();
            //	$(".date_ul").slideUp();
            $(".popup").slideUp();
            $(".choice").slideUp();
        });
        // bestleague toggle _ 왼쪽메뉴
        $(document).ready(function(){
            $(".best > a").click(function(){
                var state = $(this).siblings(".bestleague").css("display");
                if(state == "none"){
                    $(".best > a.bold").removeClass("bold");
                    $(".bestleague").slideUp();
                    $(".best a").removeClass("close");
                    $(this).siblings(".bestleague").slideDown();
                    $(this).addClass("close");
                    $(this).parent().addClass("on");
                    return false;
                }else{
                    $(".best > a.bold").removeClass("bold");
                    $(this).siblings(".bestleague").slideUp();
                    $(this).removeClass("close");
                    return false;
                }
            });
            $(".best2 > a").click(function(){
                var state = $(this).siblings(".bestleague2").css("display");
                if(state == "none"){
                    $(".bestleague2").slideUp();
                    $(".best2 a").removeClass("close");
                    $(this).siblings(".bestleague2").slideDown();
                    $(this).parent().addClass("on");
                    $(this).addClass("close");
                    return false;
                }else{
                    $(this).siblings(".bestleague2").slideUp();
                    $(this).removeClass("close");
                    return false;
                }
            });
        });
        $(document).ready(function(){
            //우측메뉴
            $( function() {
                var state = true;
                $( ".menu_btn li .button" ).on( "click", function() {
                    if ( state ) {
                        $(this).parent().removeClass("open").addClass("close");
                        $( ".rightMenu" ).animate({right: 0}, 600 );
                    } else {
                        $(this).parent().removeClass("close").addClass("open");
                        $( ".rightMenu" ).animate({right: -288}, 600 );
                    }
                    state = !state;
                });
            } );
            $(".rightMenu .menu_btn .live a").click(function(){
                $( ".rightMenu" ).animate({right: 0}, 600 );
                $(this).parent().siblings(".on").removeClass("on");
                $(this).parent().addClass("on");
                $(".menu_view > li").css("display","none");
                $(".menu_view .live_view").css("display","block");
                return false;
            });
            $(".rightMenu .menu_btn .game a").click(function(){
                $( ".rightMenu" ).animate({right: 0}, 600 );
                $(this).parent().siblings(".on").removeClass("on");
                $(this).parent().addClass("on");
                $(".menu_view > li").css("display","none");
                $(".menu_view .game_view").css("display","block");
                return false;
            });

            //우측메뉴_GAME
            $(".game_num h4>a").click(function(){
                var state = $(this).parent().siblings("ul.list").css("display");
                if(state == "none"){
                    $(".game_num").children().children("ul.list").slideUp();
                    $(".game_num").children().children().children("a").children(".up").addClass("down").removeClass("up");
                    $(this).find("span.arro").addClass("up").removeClass("down");
                    $(this).parent().siblings("ul.list").slideDown();
                    $(this).parent().siblings("ul.list").addClass("active");
                    $(this).parent().addClass("on");
                    return false;
                }else{
                    $(this).find("span.arro").addClass("down").removeClass("up");
                    $(this).parent().siblings("ul.list").slideUp();
                    $(this).parent().siblings("ul.list").removeClass("active");
                    $(this).parent().removeClass("on");
                    return false;
                }
            });
            $("ul.list li a.close").click(function(){
                $(this).parent().slideUp();
                return false;
            });
        });

        //popup
        $(document).ready(function(){
            $(".close").click(function(){
                $(this).parent().slideUp();
                return false;
            });
            $(".close_cho").click(function(){
                $(this).parents().find(".choice").slideUp();
                return false;
            });
            $(".g_BTN a").click(function(){
                $(this).parents().find(".popup").slideUp();
                $(this).parents().find(".choice").slideUp();
                $(this).parent().parent().parent().find(".g_pop").slideDown();
                return false;
            });
            $(".r_BTN a").click(function(){
                $(this).parents().find(".popup").slideUp();
                $(this).parents().find(".choice").slideUp();
                $(this).parent().parent().parent().find(".r_pop").slideDown();
                return false;
            });
            $(".leagueChoice > a").click(function(){
                $(this).parents().find(".popup").slideUp();
                $(this).parents().find(".choice").slideUp();
                $(this).parent().find(".choice").slideDown();
                return false;
            });
            $(".y_BTN > a").click(function(){
                $(this).parents().find(".popup").slideUp();
                $(this).parents().find(".choice").slideUp();
                $(this).parent().parent().parent().find(".y_pop").slideDown();
                return false;
            });
            //셀렉박스
            $(".select p").click(function(){
                if($(this).attr("class")=="on"){
                    $(this).removeClass("on").addClass("off");
                    $(".select").find("ul").slideUp();
                }else if($(this).attr("class")=="off"){
                    $(".select p").removeClass("on").addClass("off");
                    $(this).removeClass("off").addClass("on");
                    $(".select").find("ul").slideUp();
                    $(this).parent().find("ul").slideDown();
                }
                return false;
            });
        });
        /* ------------------------------------common 끝------------------------------------- */
    </script>

</head>