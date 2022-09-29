<?php
    require_once(__DIR__ . '/../config/config.php');

    $linkValue = unserialize($_COOKIE['subjects']);
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
    include(__DIR__.'/../views/home.php');
    include(__DIR__.'/../views/templates/footer.php');