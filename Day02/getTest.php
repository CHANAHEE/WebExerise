<?php
    header("Content-Type:text/html; charset=utf-8");

    // 사용자로부터(form요소) GET 방식으로 전달된 데이터를 받아보자.
    $title = $_GET['title'];
    $message = $_GET['message'];

    // 잘받아졌는지 확인해보자. 사용자에게 응답(Response) 해주자.
    echo "제목 : $title <br>";
    echo "메시지 : $message";
?>