<style>
	#flashWrap {
	     width: 100%;
	     height: auto;
	     text-align: center;
	}
	
	#flashWrap #flashContent {
	      width: 600px;
	      height: 500px;
	      text-align: left; /* 글씨 썻을씨 왼쪽 정렬 */
	}
</style>
<script type="text/javascript">
	function good_bad(choice){
		var board_id = $('input[name=board_id]').val();
		var choice = choice;

		$.ajax({
			url:'../../good_bad',
			dataType:'text',
			type:'POST',
			data:{choice:choice, board_id:board_id}
		}).done(function(data) {
			alert(data);
			reload();
		});
	}
	
	

	function re_good_bad(choice, re_id){
		var board_id = $('input[name=board_id]').val();
		var choice = choice;
		var re_id = re_id;
		$.ajax({
			url:'../../re_good_bad',
			dataType:'text',
			type:'POST',
	        data:{choice:choice, board_id:board_id, re_id:re_id},
		}).done(function(data) {
			alert(data);
			reload();
		});
	}

	function re_add(){
		var board_id = $('input[name=board_id]').val();
		var description = $('textarea[name=description]').val();
		$.ajax({
			url:'../../re_add',
			dataType:'text',
			type:'POST',
	        data:{board_id:board_id, description:description},
		}).done(function(data) {
			alert(data);
			reload();
		});
	}
	
	function re_edit(re_id, description){
		document.getElementById("re_edit").style.display="block";
		var selectObj = document.getElementById("re_board_id");
		selectObj.value=re_id;
 		var selectObj1 = document.getElementById("re_description");
 		selectObj1.value=description;
	}

	function re_edit_save(){
		var board_id = $('input[name=re_board_id]').val();
		var user_id = $('input[name=user_id]').val();
		var description = $('textarea[name=re_description]').val();
		$.ajax({
			url:'../../re_edit',
			dataType:'text',
			type:'POST',
	        data:{user_id:user_id, board_id:board_id, description:description},
		}).done(function(data) {
			alert(data);
			reload();
		});
	}

	function re_delete(id){
		var id = id;
		var user_id = $('input[name=user_id]').val();
		$.ajax({
			url:'../../re_delete',
			dataType:'text',
			type:'POST',
	        data:{user_id:user_id, id:id},
		}).done(function(data) {
			alert(data);
			reload();
		});
	}

	function reload(){
		 location.reload();
	}
</script>
<div id="flashWrap">
<form name="read_form">
	<input type="hidden" id="user_id" name="user_id" value="<?=$board->write_id?>">
	<input type="hidden" id="board_id" name="board_id" value="<?=$board->id?>">
	<input type="hidden" value="<?=$this->session->userdata('board_read')?>"/>

<table>
	<tr>
		<th style="width:40px;">번호</th>
		<th style="width:400px;">제목</th>
		<th style="width:100px;">작성자</th>
		<th style="width:150px;">작성시간</th>
	</tr>
	<tr>
		<td><?=$board->id?></td>
		<td><?=$board->sub?><?=$board->title?>&nbsp;<font style="color:blue;"><?=$board->good?></font>/<font style="color:red;"><?=$board->bad?></font>/<font style="color:black;"><?=$board->read_num?></font>(<?=$board->count_r?>)</td>
		<td><?=$board->nickname?></td>
		<td><?=$board->created?></td>
	</tr>
	<tr>
		<th colspan="4">본문</th>
	</tr>
	<tr>
		<td colspan="4"><?=$board->description?></td>
	</tr>
	<?php
	if($this->session->userdata('is_login')&&$this->session->userdata('email')!=$board->write_id){
	?>
	<tr>
		<th colspan="4"><a href="javascript:good_bad('good')" class="btn">찬성</a><a href="javascript:good_bad('bad')" class="btn">반대</a></th>
	</tr>
	<?php } ?>
	<tr>
		<th colspan="4">RE</th>
	</tr>
	<?php 
		foreach($board_re as $entry){
	?>
	<tr>
		<th colspan="3"><?=$entry->description?><br/>
		<?php
			if($this->session->userdata('is_login')){
		?>
		<?php if($this->session->userdata('email')!=$entry->write_id){?>
		<a href="javascript:re_good_bad('good', <?=$entry->id?>)" class="btn">찬성</a><a href="javascript:re_good_bad('bad', <?=$entry->id?>)" class="btn">반대</a>
		<?php } else { ?>
		<a href="javascript:re_edit('<?=$entry->id?>','<?=$entry->description?>')" class="btn">수정</a><a href="javascript:re_delete(<?=$entry->id?>)" class="btn">삭제</a>
		<?php } ?>
		<?php } ?>
		</th>
		<td><?=$entry->nickname?><br/>
			<?=$entry->created?><br/>
			<font style="color:blue;"><?=$entry->good?></font>/<font style="color:red;"><?=$entry->bad?></font>
		</td>
	</tr>
	<?php } ?>
	<?php
	if($this->session->userdata('is_login')){
	?>
	<tr>
		<th colspan="4"><textarea name="description" style="width:600px;height:50px;"></textarea>&nbsp;<a href="javascript:re_add();" class="btn">작성</a></th>
	</tr>
	<?php } ?>
</table>
<?php
	if($this->session->userdata('is_login')){
?>
<div id="re_edit" style="display:none">
	<table>
		<tr>
			<th>
				<input type="hidden" name="re_board_id" id="re_board_id"/>
				<textarea name="re_description" id="re_description" style="width:600px;height:50px;"></textarea>&nbsp;<a href="javascript:re_edit_save()" class="btn">수정</a>
			</th>
		</tr>
	</table>
</div>

<?php } ?>
</form>
<?php if($sub=="00"){ ?>
		<a href="./../../" class="btn">메뉴</a>
<?php }else{?>
		<a href="./../../?sub=<?=$sub?>" class="btn">메뉴</a>
<?php } ?>		
		<?php
			if($this->session->userdata('is_login')){
		?>
		<?php if($board->write_id==$this->session->userdata('email')){?>
		<a href="../../edit/<?=$board->id?>" class="btn">수정</a>
		<a href="../delete/<?=$board->id?>" class="btn">삭제</a>
		<?php } ?>
		<?php } ?>
</div>