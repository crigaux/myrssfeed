<?php
    $url1 = 'https://www.lemonde.fr/rss/une.xml';
    $url2 = 'https://www.lemonde.fr/rss/en_continu.xml';
    $url3 = 'https://www.lemonde.fr/rss/plus-lus.xml';

    $content1 = file_get_contents("$url1");
    $content2 = file_get_contents("$url2");
    $content3 = file_get_contents("$url3");

    $category1 = new SimpleXMLElement($content1);
    $category2 = new SimpleXMLElement($content2);
    $category3 = new SimpleXMLElement($content3);

    if($_COOKIE['nbPages'] == 0) {
        $nbPages = 6;
    } else if($_COOKIE['nbPages'] == 1) {
        $nbPages = 9;
    } else if($_COOKIE['nbPages'] == 2) {
        $nbPages = 12;
    }

    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/home.php');
    include(__DIR__.'/../views/templates/footer.php');