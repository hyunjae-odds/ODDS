<div class="modal">
	<div class="modal-header">
		<h3>Login</h3>
	</div>
	<form class="form-horizontal" action="./authentication" method="post">

		<div class="modal-body">
			<div class="control-group">
				<label class="control-label" for="inputEmail">아이디</label>
				<div class="controls">
					<input type="text" id="email" name="email" placeholder="email">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">비밀번호</label>
				<div class="controls">
					<input type="password" id="password" name="password" placeholder="password">
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<input type="submit" value="로그인" class="btn btn-primary"/>
		</div>
	</form>
</div>
