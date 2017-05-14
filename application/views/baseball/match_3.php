<div class="cheer">
    <h3 class="noBorder">오늘의 승리팀 응원하기</h3>
    <div class="teams">
        <div class="left">
            <div class="box_w">
                <div class="c_logo"><span class="<?=$away_initial;?>_L"></span></div>
                <div class="box">
                    <div>
                        <h3><?=$away_team;?></h3>
                        <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                    </div>
                </div>
                <a href="javascript:add(<?=$schedule_no;?>, 'away')" class="cheer_btn">응원하기</a>
            </div>
            <div class="graph_w">
                <div class="graph">
                    <div style="width:<?=$away_cheer;?>%"><b><?=$data->away_cheer;?></b></div>
                </div>
                <span><?=number_format($away_cheer,0);?>%</span>
            </div>
        </div>
        <div class="right">
            <div class="box_w">
                <div class="c_logo"><span class="<?=$home_initial;?>_L"></span></div>
                <div class="box">
                    <div>
                        <h3><?=$home_team;?></h3>
                        <p>건전한 응원문화를 함께 만들어 갑시다.</p>
                    </div>
                </div>
                <a href="javascript:add(<?=$schedule_no;?>, 'home')" class="cheer_btn">응원하기</a>
            </div>
            <div class="graph_w">
                <div class="graph">
                    <div style="width:<?=$home_cheer;?>%"><b><?=$data->home_cheer;?></b></div>
                </div>
                <span><?=$home_cheer;?>%</span>
            </div>
        </div>
        <div class="center"><span class="KBO_bb">KBO</span></div>
    </div>
    <p>응원하기는 경기마다 1인당 1번씩만 가능합니다. 여러분이 응원하시는 모든 팀이 승리하기를 기원합니다.</p>
    <div class="comment">
        <ul>
            <?php foreach($comment_list as $item): ?>
                <li>
                    <h5>스포네비***</h5>
                    <p><?=$item->content;?></p>
                    <div>
                        <span><?=$item->insert_dt;?></span>
                        <span><?=$item->ip;?></span>
                        <p class="like"><a href="javascript:add(<?=$item->no;?>, 'good')"><?=$item->good;?></a></p>
                        <p class="bed"><a href="javascript:add(<?=$item->no;?>, 'bad')"><?=$item->bad;?></a></p>
                    </div>
                </li>
            <?php endforeach; if($comment_list==null):?><li><h5>등록된 댓글이 없습니다</emdfh></h5></li><?php endif; ?>
        </ul>
    </div>
    <div class="page">
        <?=$this->pagination->create_links();?>
    </div>
    <div class="textarea_box">
        <div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="javascript:insert_comment()">입력</a></div>
        <p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
    </div>
</div>

<script type="text/javascript">
    function add(no, flag){
        $.ajax({
            url:"/baseball/add_ajax",
            type:"POST",
            data:{no:no, flag:flag},
            complete:function(){
                location.replace('/baseball/match_information/<?=$schedule_no;?>/'+document.body.scrollTop);
            }
        });
    }
    function insert_comment(){
        $.ajax({
            url:"/baseball/insert_comment_ajax",
            type:"POST",
            data:{schedule_no:<?=$schedule_no;?>, content:$('#opinion_text').val()},
            complete:function(){
                location.replace('/baseball/match_information/<?=$schedule_no;?>/'+document.body.scrollTop);
            }
        });
    }
</script>