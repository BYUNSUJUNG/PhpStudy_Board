<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
<head>
    <?php /*require("html_head.php")*/ ?>
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
<?php require("top_nav.php") ?>
    <?php require("nav.php") ?>
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
    <?php require("footer.php") ?>
</body>
</html>
