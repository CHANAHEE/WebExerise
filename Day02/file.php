<?php
    header('Content-Type:text/html; charset=utf-8');
    // 사용자로부터 전달받은 파일의 실제 데이터는 임시저장소에 배치되고 
    // 이 php 에는 파일 정보만 전달되어 옴. [ 5개의 정보 ]
    // 파일 정보 배열 받아보자.
    $file = $_FILES['aaa'];

    $srcName = $file['name']; // 원본 파일명
    $type = $file['type']; // 파일 타입
    $size = $file['size']; // 파일 크기
    $tmpName = $file['tmp_name']; // 임시저장소 위치
    $error = $file['error']; // 에러정보

    // 5개의 정보를 잘 받았는지 응답
    echo $srcName."<br>";
    echo $type."<br>";
    echo $size."<br>";
    echo $tmpName."<br>";
    echo $error."<br>";

    
    // 임시 저장소에 있는 파일을 영구히 저장하기 위해 이동시키자.
    $dstName = "./image/" . date('YmdHis') . $srcName;
    move_uploaded_file($tmpName,$dstName);
?>