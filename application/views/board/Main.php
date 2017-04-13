<table >
	<tr>
		<th style="width:40px;">번호</th>
		<th style="width:400px;">제목</th>
		<th style="width:100px;">작성자</th>
		<th style="width:150px;">작성 시간</th>

	</tr>

	<?php
	foreach($board as $entry){
	?>
	<tr>
		<td style="text-align:center"><?=$entry->id?></td>
		<td><a href="./?sub=<?=$entry->sub_code?>">
			<?=$entry->sub?>
			</a>
			<a href="./read/<?=$entry->id?>/<?=$sub?>">
			<?=$entry->title?>&nbsp;
			<font style="color:blue;"><?=$entry->good?></font>
			/
			<font style="color:red;"><?=$entry->bad?></font>
			/
			<font style="color:black;"><?=$entry->read_num?></font>
			(<?=$entry->count_r?>)</a>
		</td>
		<td style="text-align:center"><?=$entry->nickname?></td>
		<td style="text-align:center"><?=$entry->created?></td>
	</tr>
	<?php
	}
	?>
	
</table>
<?php
	if($this->session->userdata('is_login')){
?>
		<a href="./add/<?=$sub?>" class="btn">추가</a>
<?php } ?>

