<script type="text/javascript">

	$(document).ready(function(){
		var selectObj = document.getElementById("sub");
		 for(var i=0; i<selectObj.options.length;i++ ){
			 if( selectObj.options[i].value == "<?=$board->sub_code?>"){
				 selectObj.options[i].selected = "selected"; 
			 } 
		 }
	});
</script>

<form action="./<?= $id ?>" method="post" class="span10">
	<input type="text" id="user_id" name="user_id" value="System" class="span6">
	<input type="text" id="id" name="id" value="<?=$board->id?>" class="span6">

	<input type="hidden" name="write_id" value="System"/>
	<select name="sub" ID="sub">
		<option value="">구분</option>
		<?php
			foreach ($board_code as $entry){
		?>
			<option value="<?=$entry->code_value?>"><?=$entry->name_value?></option>
		<?php } ?>
	</select>
    <input type="text" name="title" placeholder="제목" class="span9" value="<?=$board->title?>"/>

    <textarea name="description"><?=$board->description?></textarea>
    <div class="form_control">
    	<input class="btn" type="submit"/><a href="../" class="btn">메뉴</a>
    </div>
</form>
<script src="/ODDS/public/lib/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace( 'description', {
		'filebrowserUploadUrl': '/ODDS/board/upload_receive_from_ck'
	});
</script>
