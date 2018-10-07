<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>집게리아 LoginPage</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<style>
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
			<h1>로그인</h1>
				<form action="login.php" method="post"> <!--post방식으로 값 전달-->
				<div class="form-group"> <!-- id -->
					<label for="id">Id:</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group"> <!-- password -->
					<label for="pw">Password:</label>
					<input type="password" class="form-control" id="pw" name="pw">
				</div>
				<button type="submit" class="btn btn-success">로그인</button> <!-- submit, 로그인 -->
			</div>
		</article>	
    <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <p class="navbar-brand">영진전문대 컴퓨터정보계열 WD-J </p>
        <P class="navbar-brand">1701140 변수정</p>
    </footer>	
	</body>
</html>
