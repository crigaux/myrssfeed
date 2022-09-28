<?php

    require_once(__DIR__ . '/../config/config.php');
    require_once(__DIR__ . '/../helpers/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        testDisplayMode($errors);
        testNbPages($errors);
        testSubjects($errors);
    }

    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/parameters.php');
    include(__DIR__.'/../views/templates/footer.php');