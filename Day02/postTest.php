<?php
    header("Content-Type:text/html; charset=utf-8");

    //POST 방식으로 전달된 값들 받기
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['rg'];
    $message = $_POST['message'];
    $brand = $_POST['brand'];
    $id = $_POST['id'];

    $message = nl2br($message);
    // 메시지의 경우 여러줄일 수 있음. 이때, 줄바꿈 문자 \n 을 브라우저에서는 <br> 태그로 변경하여 보여줘야 함.
    // 실무에서는 이 데이터들을 DB 에 저장하는 작업을 할것. 오늘은 테스트용이므로 데이터가 잘 받아졌는지 확인만하자.
    echo "<h2>$name</h2>";
    echo "<p>$password</p>";
    echo "<p>$gender</p>";
    echo "<p>$message</p>";
    echo "<p>$brand</p>";
    echo "<p>$id</p>";

    // 멀티 초이스 
    $fruits = $_POST['fruits'];
    $num = count($fruits);
    for($i = 0; $i < $num ; $i++){
        echo "$fruits[$i], ";
    }
?>