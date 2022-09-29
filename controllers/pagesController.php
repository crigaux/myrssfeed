<?php
    require_once(__DIR__ . '/../config/config.php');

    $content = file_get_contents($_POST['url']);
    $category = new SimpleXMLElement($content);
    $tabTitle = $_POST['title'];
    $pageTitle = $_POST['title'];
    
    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/templates/navbar.php');
    include(__DIR__ . '/../views/pages.php');
    include(__DIR__.'/../views/templates/footer.php');
?>