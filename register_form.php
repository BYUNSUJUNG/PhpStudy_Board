<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>집게리아 RegisterPage</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<style type="text/css">
			body {
					background-color:beige;
					/*background-image: url("image/sky.jpg");
					background-repeat:no-repeat;
					background-size: 100% 100%;*/
			}
			article {
				margin: 5em;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="jingeria.php" style="color:red;">게시판</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
								<a class="nav-link" href="register_form.php">회원가입<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
								<a class="nav-link" href="login_form.php">로그인<span class="sr-only">(current)</span></a>
						</li>
					</ul>
			</div>
		</nav>
		<article>
			<div class="container">
				<h1>회원 가입</h1>
				<form action="register.php" method="post">
					<div class="form-group">
						<label for="name">이름</label> <!-- name -->
						<input type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="id">폰 번호</label> <!-- fhoneNumber -->
						<input type="text" class="form-control" id="id" name="id">
					</div>

					<div class="form-group">
						<label for="id">아이디</label> <!-- id -->
						<input type="text" class="form-control" id="id" name="id">
					</div>
					<div class="form-group">
						<label for="pw">비밀번호</label> <!-- pw -->
						<input type="password" class="form-control" id="pw" name="pw">
					</div>

					<button type="submit" class="btn btn-default">회원가입</button> <!-- submit, 회원가입 -->
				</form>
			</div>
		</article>	
    <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <p class="navbar-brand">영진전문대 컴퓨터정보계열 WD-J </p>
        <P class="navbar-brand">1701140 변수정</p>
    </footer>	
	</body>
</html>
