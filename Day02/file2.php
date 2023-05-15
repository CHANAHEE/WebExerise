<?php
    $file = $_FILES['bbb'];

    // 전송된 파일의 개수
    $fileNum = count($file['name']);

    for($i = 0 ; $i < $fileNum ; $i++){
        $srcName = $file['name'][$i];
        $size = $file['size'][$i];
        $tmpName = $file['tmp_name'][$i];

        echo "$srcName<br>";
        echo "$size<br>";
        echo "$tmpName<br>";


        // 임시 저장소 파일 이동
        $dstName = "./image/" . date("YmdHis") . $srcName;
        $result = move_uploaded_file($tmpName,$dstName);
        if($result) echo "업로드 성공";
        else echo "업로드 실패";

        echo "======================<br>";
    }
?>