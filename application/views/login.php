<div class="container">

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="search-box">
				<div class="caption">
					<h3>우리회사 정보시스템</h3>
					<p>Step by step goes a long way.</p>
				</div>
				<form action="/Portfolio_server/framework/index.php/company/login" class="loginForm" method="post">
					<div class="input-group">
						<input type="text" id="name"  name="username" class="form-control" placeholder="아이디를 입력하세요">
						<input type="password" id="paw" name="password" class="form-control" placeholder="비밀번호를 입력하세요">
						<input type="submit" id="submit" class="form-control" value="Submit">
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="aro-pswd_info">
				<div id="pswd_info">
					<h4>Password must be requirements</h4>
					<ul>
						<li id="letter" class="invalid"> <strong>최소 1개</strong>의 문자</li>
						<li id="capital" class="invalid"><strong>최소 1개</strong>의 대문자</li>
						<li id="number" class="invalid"><strong>최소 1개</strong>의 숫자</li>
						<li id="length" class="invalid"><strong>8글자 이상</strong></li>
						<li id="space" class="invalid"><strong> [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong>보기 특수문자 중 최소 한개 이상 사용</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


