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
        </style>
</head>
<body>
    <?php require("top_nav.php") ?>
    <?php require("nav.php") ?>
    <?php require("customerSidebar.php") ?>
    <div class="container">		
        <h2>1:1문의</h2>
        <hr>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                동의합니다.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                동의하지 않습니다.
            </label>
        </div>
        <form class="was-validated">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                <div class="invalid-feedback">Example invalid feedback text</div>
            </div>
        </form>
       
        <form>
            <!-- 아이디 -->
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <!-- 비밀번호 -->
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <!-- 전화번호 -->
            <div class="form-row align-items-center">
                <label for="inputEmail3" class="col-sm-2 col-form-label">home phone</label>
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
            </div>
            <!-- 핸드폰 -->
            <div class="form-row align-items-center">
                <label for="inputEmail3" class="col-sm-2 col-form-label">phone</label>
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
            </div>

            <!-- 이메일 -->

            <div class="form-row align-items-center">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">Name</label>
                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                    </div>
                </div>
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label" for="inlineFormCheck">
                문의사항에 대한 답변은 이메일로 보내드립니다.<br>
                답변을 받으실 이메일 주소를 정확히 기재해주시기 바랍니다.
                </label>
            </div>
            <!-- 제목 -->
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <!-- 내용 -->

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

            <!-- 첨부파일 -->
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label" for="inlineFormCheck">
                최대 4MB까지 첨부할 수 있으며, 이미지 파일만 등록 하실 수 있습니다.
                </label>
            </div>
            <!-- 자동등록방지 -->

            <div class="form-row align-items-center">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">Name</label>
                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                </div>
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">Name</label>
                    <input class="form-control" type="text" id="inlineFormInputName" placeholder="963852" readonly>
                </div>
            </div>
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label" for="inlineFormCheck">
                왼쪽의 글자를 입력하세요.
                </label>
            </div>
            
            <input class="btn btn-primary" type="button" value="확인" onclick="go('writer')">
            <button class="btn btn-secondary" onclick="location.href='register_form.php'">취소</button>
        </form>
    </div>
</body>
</html>
