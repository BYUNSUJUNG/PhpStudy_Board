<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <title>집게리아 MainPage</title>
        <link rel="stylesheet" href="css/bootstrap.css">

        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    
        <script src="controller.js"></script>

        <style type="text/css">
            body {
                background-color:beige;
                /*background-image: url("images/sky.jpg");
                background-repeat:no-repeat;
                background-size: 100% 100%;*/
            }

            .container {
				margin-top: 4%;
            }
			

			label {
				float:left;
				font-weight: 600;

			}

            input[type=text], input[type=password] {
				width: 25%;
                padding: 10px 10px;
                border: 2px solid skyblue;
                border-radius: 4px;
				box-sizing: border-box;
				margin-left:10%;
			}
			
			button[type=submit]{
                width: 120px;
                height: 80px;
                /*
                position:absolute;
				top: 70%;
				left: 60%;
                */
            }
            
			
            .top_nav {
                z-index: 2;
                position:absolute;
                width: 100%;
                height: 30px;
                top: 0;
            }

            .nav {
                z-index: 1;
                position:absolute;
                width: 100%;
                height: 70px;
                top:  30px;
            }

            .top_nav_content {
                margin-left: 85%;
            }

            .nav_content {
                margin-left: 45%;
            }

            .mark {
                width: 250px;
                height: 200px;
				z-index: 3;
				border: 0;
                position: absolute;
                top: 0%;
                left: 10%;
            }
			.top_article {
				margin-top: 10%;
				margin-left: 30%;
			}
			
			article {
				background-color: white;
				width: 800px;
				height: 400px;
				margin-top: 2%;
				margin-left: 30%;
                border-radius: 10px;
                padding: 3%;
			}

            footer {
                margin-top: 10%;
            }

        </style>
    </head> 

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary top_nav">
            <div class="collapse navbar-collapse top_nav_content" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="login_form.php">로그인</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register_form.php">회원가입</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-primary">
                알림<span class="badge badge-light">4</span>
            </button>
        </nav>
        <a href="jingeria.php"><img class="mark" src="images/jingeria.png" alt="피자" /></a>
        <nav class="navbar navbar-expand-lg nav" style="background-color: white;">
            <div class="collapse navbar-collapse nav_content" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a href="menu.php"><img src="images/menu.jpg" alt="피자"/></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><img src="images/store.jpg" alt="피자"/></a>
                    </li>         
                    <li class="nav-item">
                        <a href="#"><img src="images/customer.jpg" alt="피자"/></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><img src="images/company.jpg" alt="피자"/></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">집게리아 사람들</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">고객센터</a>
                    </li>
                </ul>
                
            </div>
		</nav>
		<div class="top_article">
		<h1>회원 가입</h1>
		<div>좋은 세상을 만드는 집게리아 홈페이지에 오신 것을 환영합니다.</div>
		</div>
		<article>	
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name">이름</label> <!-- name -->
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="phone">폰 번호</label> <!-- fhoneNumber -->
					<input type="text" class="form-control" id="phone" name="phone">
				</div>
				<div class="form-group">
					<label for="id">아이디</label> <!-- id -->
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="pw">비밀번호</label> <!-- pw -->
					<input type="password" class="form-control" id="pw" name="pw">
				</div>
				<button type="submit" class="btn btn-primary btn-lg">회원가입</button> <!-- submit, 회원가입 -->
			</form>
		</article>
        <footer class="navbar navbar-expand-lg"  style="background-color: white;">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">회사소개</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">홍보센터</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">채용정보</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">제휴카드</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">이동약관</a>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link" href="#">개인정보취급방침</a></b>
                </li>
            </ul>
        </footer>
	</body>
</html>
