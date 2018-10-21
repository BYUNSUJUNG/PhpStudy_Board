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
            button {
                border: 0;
                background: none;
            }

            .slide {
                width: 1000px;
                overflow: hidden;
                margin: 0 auto;
                position: relative;
            }

            .slide ul {
                width: 3000px;
                list-style:none;
                font-size:0;
            }
            .slide ul li {
                display: inline-block;
            }

            .slide button .button_left  {
                width: 100px;
                height: 100px;
                position: absolute;
                left:0;
                top: 200px;
            }

            .slide button .button_right {
                width: 100px;
                height: 100px;
                position: absolute;
                right:0;
                top: 200px;
            }


            .card {
                float:left;
                margin-left: 7%;
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
                position: absolute;
                top: 0%;
                left: 10%;
            }
            
            footer {
                margin-top: 40%;
            }

            h5 {
                position: absolute;
                top: 5%;
                left: 75%;
            }
        </style>
    </head> 

	<body>

        <?php 
            session_start(); 	
        ?>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary top_nav">
            <div class="collapse navbar-collapse top_nav_content" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    
                    <?php
                        $id = isset($_SESSION["id"])?$_SESSION["id"]:"";
                        if(!$id) { // start of if
                            // if(!로그인 사용자) {  //로그인X 
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login_form.php">로그인</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register_form.php">회원가입</a>
                            </li>
                    <?php
                        } // end of if
                        else { // start of else // 로그인
                    ?>
                            <h5><b><?php echo $_SESSION["name"] ?></b>님 환영합니다.</h5>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">로그아웃</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update_form.php">정보수정</a>
                            </li>
                    <?php
                        } // end of else
                    ?>

                </ul>
            </div>
            <button type="button" class="btn btn-primary">
                알림<span class="badge badge-light">4</span>
            </button>
        </nav>
        <img class="mark" src="images/mark.png" alt="피자" />
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
		<div class="container">
            <div class="slide">
                <button class="prev" type="button"><img class="button_left" src="images/button_left.png" alt="피자" /></button>
                <ul>
                    <li><img src="images/slide01.jpg" alt="피자"/></li>
                    <li><img src="images/slide02.jpg" alt="피자"/></li>           
                    <li><img src="images/slide03.jpg" alt="피자"/></li>
                </ul>
                <button class="next" type="button"><img class="button_right" src="images/button_right.png" alt="피자" /></button>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/burger.jpg" alt="pizza">
                <div class="card-body">
                    <h5 class="card-title">집게 버거</h5>
                    <p class="card-text">집게사장이 운영하는 집게리아에 가장 맛있는 음식, 집게버거!</p>
                    <a href="#" class="btn btn-danger">더 자세히</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/pizza.jpg" alt="pizza">
                <div class="card-body">
                    <h5 class="card-title">집게 피자</h5>
                    <p class="card-text">집게사장이 운영하는 집게리아에 집게버거만 파는 것이 아닙니다. 집게 피자 새로 나왔습니다.
                        신 메뉴 집게 피자, 한번 주문해 보세요!
                    </p>
                    <a href="#" class="btn btn-danger">더 자세히</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/salade.jpg" alt="pizza">
                <div class="card-body">
                    <h5 class="card-title">집게 샐러드</h5>
                    <p class="card-text">집게사장이 운영하는 집게리아에 집게버거만 파는 것이 아닙니다. 집게 샐러드 새로 나왔습니다.
                        신 메뉴 집게 샐러드, 한번 주문해 보세요!
                    </p>
                    <a href="#" class="btn btn-danger">더 자세히</a>
                </div>
            </div>
        </div> 
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
