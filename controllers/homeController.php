<?php
    require_once(__DIR__ . '/../config/config.php');

    if(!isset($_COOKIE['subjects'], $_COOKIE['nbPages'], $_COOKIE['subjects'])) {
        setcookie(
            'displayMode',
            $_POST['displayMode'],
            120
        );
        setcookie(
            'nbPages',
            $_POST['nbPages'],
            120
        );
        setcookie(
            'subjects',
            serialize($_POST['subjects']),
            120
        );
    }

    if(isset($_COOKIE['subjects'])) {
        $linkValue = unserialize($_COOKIE['subjects']);
    } else {
        $linkValue = unserialize($_POST['subjects']);
    }

    $url1 = $links[$linkValue[0]];
    $url2 = $links[$linkValue[1]];
    $url3 = $links[$linkValue[2]];

    $content1 = file_get_contents("$url1");
    $content2 = file_get_contents("$url2");
    $content3 = file_get_contents("$url3");

    $category1 = new SimpleXMLElement($content1);
    $category2 = new SimpleXMLElement($content2);
    $category3 = new SimpleXMLElement($content3);

    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/templates/navbar.php');
    include(__DIR__.'/../views/home.php');
    include(__DIR__.'/../views/templates/footer.php');