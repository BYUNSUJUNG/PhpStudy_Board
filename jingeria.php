<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
<head>
    <?php require("html_head.php") ?>
</head> 
<body>
    <?php require("top_nav.php") ?>
    <?php require("nav.php") ?>
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
    <?php require("footer.php") ?>
</body>
</html>
