<?php //1701140_변수정 ?>
<?php
	require_once("tools.php"); // java inport와 유사함, require_once를 하면 한번만 읽어옴
	require_once("customerNoticesDao.php");
	require_once("customerAdvertisingScheduleDao.php");
	/* 
		1. writer, title, content 값을 request에 추출
		2.그 값이 모두 존재하면 db삽입
			$dao = new BoardDao();
			$dao->insertMsg(값...);
			글 목록 페이지로 이동
			2.1  하나라도 없을 경우 errorBack("빈칸존재");
	*/
	// 1. writer, title, content 값을 request에 추출

	$customerWrite = requestValues("customerWrite");

 	$writer = requestValues("writer"); // tools.php의 함수, $writer = isset($_REQUEST["writer"])?$_REQUEST["writer"]:"";
	$title = requestValues("title");
	$content = requestValues("content");
	

	if(isset($_post['write'])) {
		$file_name = $files['file']['name'];
		$file_type = $files['file']['type'];
		$file_size = $files['file']['size'];
		$file_tem_Loc = $files['file']['tmp_name'];
		$file_store = "upload/".$file_name;
		
		move_upload_file($file_tem_Loc,$file_store);
	}


	/*
	$filename="";
	$filesize=0;
	if(isset($_FILES["userfile"])) {
		$upload_dir = "/uploads/";
		$filename = $_FILES["userfile"]["name"];
		// 파일 이름 중복 방지
		$filename = mktime()."_".$filename;
		// 파일 확장자
		$ext = explode(".",strtolower($filename));
		$cnt = count($ext)-1;
		if(@eregi("php|inc|html|exe|sh|bat", $ext[$cnt])) {
			echo "<script>
					alert('업로드할 수 없는 파일입니다.');
				</script>";
			exit();
			$filesize = $_FILES["userfile"][size];
			// basename(path) 디렉토리를 제외한 파일 이름
			$uploadfile = $upload_dir.basename($filename);
			if($filesize > 0) {
				move_upload_file($_FILES["userfile"]["tmp_name"],$uploadfile);
			}

		}
	}*/
	if($writer && $title && $content) { // 2. 그 값이 모두 존재하면 db삽입
		if($customerWrite==0){
			$bdao = new customerNoticesDao(); // 생성자 실행 -> db연결됨
			$bdao->insertBoard($writer, $title, $content); // 삽입할 값을 넘겨줌
			okGo("글 등록 완료", NOTICES_PAGE);
			/*
				tools.php의 함수, 메세지 창을 띄우고 BOARD_PAGE로 이동함
				alert('<?= $msg ?>')
				location.href='<?= $url ?>' 
			*/
		} else if($customerWrite==1) {
			$bdao = new customerAdvertisingScheduleDao(); // 생성자 실행 -> db연결됨
			$bdao->insertBoard($writer, $title, $content); // 삽입할 값을 넘겨줌
			okGo("글 등록 완료", SCHEDULE_PAGE);
		}
	} else {//2.1  하나라도 없을 경우
		errorBack("빈칸존재");
	}
	/* 
		tools.php의 함수, 메세지 창을 띄우고 전 페이지로 이동함
		alert('<?= $msg ?>'); // 창 띄움
		history.back(); 
	*/
?>