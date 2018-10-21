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
/* 여기까지 기본*/
            h5 {
                position: absolute;
                top: 5%;
                left: 75%;
            }
            /*위에꺼는 어디꺼인지 모르겠음 나중에 찾아보기*/




            /*여기서 부터는 customer꺼임*/
            .container {
                background-color: white;
                border-radius: 20px;
                margin-top: 15%;
                margin-left: 30%;
                padding: 5%;
                box-shadow: 10px 10px 10px gray;
            }

            .submit {
                margin-left: 70%;

            }

            .list-group {
                margin-top: 12%;
                margin-left: 12%;
                float:left;
            }

            button[type=button] {
                width: 250px;
            }

            table {
                margin-top: 3%;
                margin-bottom: 2%;
            }

            .pagination {
                margin-left: 35%;
            }

            hr {
                border:3px solid #2478FF;
            }
        </style>