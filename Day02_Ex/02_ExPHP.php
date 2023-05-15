<?php
    header('Content-Type:text/html; charset=utf-8');

    $cardType=  $_GET['rg'];
    $cardNum=   $_GET['cardNum'];
    $CRCNum=    $_GET['CRCNum'];
    $name=      $_GET['name'];

    echo "$cardType<br>";
    echo "$cardNum<br>";
    echo "$CRCNum<br>";
    echo "$name<br>";
?>