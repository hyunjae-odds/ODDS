<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset-utf-8"/>
<title> ODDS CONNECT </title>
<link rel="stylesheet" href="/public/lib/js/lib/jquery.bxslider.css"/>
<link href="/public/lib/css/common.css" rel="stylesheet" type="text/css"/>
<script src="/public/lib/js/jquery/jquery-1.11.3.js"></script>
<script src="/public/lib/js/lib/jquery.bxslider.js"></script>
<script type="text/javascript" src="/public/lib/js/charts/loader.js"></script><!-- 팀정보 원형그래프 -->
<script type="text/javascript">
    $(function(){$("a").attr("onfocus","this.blur();")});
    $(document).click(function(){
        $(".select ul").slideUp();
        $(".date_ul").slideUp();
        $(".popup").slideUp();
        $(".choice").slideUp();
        $(".leaguebox").slideUp();
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

    //우측메뉴
      $( function() {
        var state = true;
        $( ".button" ).on( "click", function() {
          if ( state ) {
            $(this).css("background-image","url('/public/lib/image/base/right_close.jpg')");
            $( ".rightMenu_w" ).animate({right: 0}, 600 );
        } else {
            $(this).css("background-image","url('/public/lib/image/base/right_open.jpg')");
            $( ".rightMenu_w" ).animate({right: -288}, 600 );
          }
          state = !state;
        });
      } );

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
            $(".popup").not(this).slideUp();
            $(this).parents().find(".choice").slideUp();
            $(this).parent().parent().parent().find(".g_pop").slideDown();
            return false;
        });
        $(".r_BTN a").click(function(){
            $(".popup").not(this).slideUp();
            $(this).parents().find(".choice").slideUp();
            $(this).parent().parent().parent().find(".r_pop").slideDown();
            return false;
        });
        $(".leagueChoice > a").click(function(){
            $(".popup").not(this).slideUp();
            $(this).parents().find(".choice").slideUp();
            $(this).parent().find(".choice").slideDown();
            return false;
        });
        $(".y_BTN > a").click(function(){
            $(".popup").not(this).slideUp();
            $(this).parents().find(".choice").slideUp();
            $(this).parent().parent().parent().find(".y_pop").slideDown();
            return false;
        });
        //종합 부문
        $(".select p").click(function(){
            $(".select").find("ul").slideUp();
            $(this).parent().find("ul").slideToggle();
            return false;
        });
    });
</script>
 </head>