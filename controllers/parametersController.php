<?php
    require_once(__DIR__ . '/../config/config.php');
    require_once(__DIR__ . '/../helpers/functions.php');

    $displayMode = (string) filter_input(INPUT_POST, 'displayMode', FILTER_SANITIZE_NUMBER_INT);
    $nbPages = (string) filter_input(INPUT_POST, 'nbPages', FILTER_SANITIZE_NUMBER_INT);
    $subjects = filter_input(INPUT_POST, 'subjects', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = testDisplayMode($errors, $displayMode);
        $errors = testNbPages($errors, $nbPages);
        $errors = testSubjects($errors, $subjects);
    }

    include(__DIR__.'/../views/templates/header.php');
    include(__DIR__.'/../views/parameters.php');
    include(__DIR__.'/../views/templates/footer.php');