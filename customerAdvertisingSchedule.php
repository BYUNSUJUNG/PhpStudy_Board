<?php //1701140_변수정 ?>
<!DOCTYPE html>
<html>
<head>
    <?php require("html_head.php") ?>
</head>
<body>
    <?php require("top_nav.php") ?>
    <?php require("nav.php") ?>
    <?php require("customerSidebar.php") ?>
    <div class="container">		
        <h2>광고일정</h2>
        <hr>
        <form class="form-inline my-2 my-lg-0 submit">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
        <?php 
            require_once("customerAdvertisingScheduleDao.php"); // java inport와 유사함, once를 하면 한번만 읽어옴
            require_once("tools.php");
            $dao = new customerAdvertisingScheduleDao(); 

            $currentPage=requestValues("page");                                                  
            // http://Localhost/advertisingSchedule/advertisingSchedule.php?page=-3
            if($currentPage <1 ) 
                $currentPage = 1;

            /*
                currentPage는 주어짐
                startPage, endPage, prevLink, nextLink는 계산함
            */

            // 집단함수, aggregate function
            // select count(*) from advertisingSchedule;
            $totalCount = $dao->getCountMsgs(); // 게시글 수 세는
        ?>
        <h1><?$totalCount?></h1>
        <?php
            /*
            if($totalCount==0) { // 게시글의 개수가 0보다 클 경우: 게시글 존재
                echo "<h1>등록된 게시글이 없습니다.</h1>";
                exit();
            }*/

            $startPage = floor(($currentPage-1)/NUM_PAGE_LINKS)*(NUM_PAGE_LINKS)+1;  //floor: 내림 함수
            $endPage = $startPage + NUM_PAGE_LINKS - 1;

            // $totalPage = ceil(totalCount(전체 게시글 수) / NUM_LINES(한페이지 보여줄 게시글 수)); // ceil: 오름 함수
            $totalPage = ceil($totalCount/NUM_LINES); // ceil: 오름 함수 // 총페이지 수

            if($endPage > $totalPage) 
                $endPage = $totalPage;


            /* select * from advertisingSchedule order by regtime limit start_record, count
            currentPage 1 : start = 0, count = NUM_LINES
            currentPage 2 : start = NUM_LINES, count = NUM_LINES
            currentPage 3 : start = NUM_LINES*2, count = NUM_LINES
            currentPage 4 : start = NUM_LINES*3, count = NUM_LINES */

            $startRecord = ($currentPage-1)*NUM_LINES;

            $msgs=$dao->getManyMsgs($startRecord);																	 // 교수님이랑 다른 부분

            //$msgs=$dao->getManyMsgs(); //advertisingScheduleDao의 getManyMsgs()를 $msgs에 담음

        ?>
        <?php if($totalCount>0) : ?> 
            <table class="table table-hover">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성일</th>
                    <th>조회수</th>
                </tr>
                <?php foreach($msgs as $row) :  // $record 와 $row 는 같은 의미로 사용된다. ?>   
                    <tr>
                        <td> <?= $row["Num"] ?></td>
                        <td> 
                            <a href="view.php?num=<?= $row["Num"] ?>&writer=<?= $row["Writer"]?>">
                                <? 
                                    /* row는 서버에서 실행되어 값만 가져오는 것이기에 ""안에 ""가 가능한 것이다.
                                        하이퍼링크를 클릭할 때 view.php로 $row["Num"] 값과 $row["Writer"] 값을 넘겨준다. */
                                ?> 
                                <?= $row["Title"] ?>
                            </a>
                        </td>
                        <td> <?= $row["Writer"] ?></td>
                        <td> <?= $row["Regtime"] ?></td>
                        <td> <?= $row["Hits"] ?></td>
                    </tr>
                <?php endforeach ?>	
            </table>
            
            <?php if($startPage>1) : ?>
                <a href='<?=combineUrl("advertisingSchedule.php",0,$currentPage-NUM_PAGE_LINKS)?>' ><</a>&nbsp;
            <?php endif?>

            <?php for($i=$startPage;$i<=$endPage-1;$i++) : ?>
                <?php if($i==$currentPage) : ?>
                    <a href="<?=combineUrl('advertisingSchedule.php',0,$i)?>"><b><?= $i?></b></a>&nbsp;
                <?php else : ?>
                    <a href="<?=combineUrl('advertisingSchedule.php',0,$i)?>"><?= $i ?></a>&nbsp;
                <?php endif ?>
            <?php endfor ?>

            <?php if($endPage<$totalPage) : ?>
                <a href="<?=combineUrl('advertisingSchedule.php',0,$startPage+NUM_PAGE_LINKS)?>">></a>
            <?php endif ?>

        <?php endif ?>
        <input class="btn btn-primary" type="button" value="글쓰기" onclick="location.href='write_form.php?customerWrite=1'">
    </div>
</body>
</html>
