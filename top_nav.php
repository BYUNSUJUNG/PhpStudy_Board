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
<a href="jingeria.php"><img class="mark" src="images/mark.png" alt="피자" /></a>