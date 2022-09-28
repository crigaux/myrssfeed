<?php
    require_once(__DIR__ . '/../config/config.php');

    $content = file_get_contents($links[0]);
    $category = new SimpleXMLElement($content);
    $pageTitle = $title[0];
    
    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__ . '/../views/pages.php');
    include(__DIR__.'/../views/templates/footer.php');
?>
