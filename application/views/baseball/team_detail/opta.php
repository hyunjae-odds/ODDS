<?php
/**
 * Created by PhpStorm.
 * User: hyunjae
 * Date: 2017. 6. 26.
 * Time: PM 5:58
 */


?>


hello world

<script type="text/javascript">
    $.ajax({
//    {domain}/baseballdata/{feedName}/{outletAuthToken}?{parameters}
//    GET {protocol}://{domain}/baseballdata/{feedName}/{outletAuthToken}/{resourceId}?{parameters}
        url:'/baseball/get_score_result_ajax',
        type:'GET',
        data:{away:away_select,home:home_select}
    });
</script>
