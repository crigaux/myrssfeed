<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $displayMode = (string) filter_input(INPUT_POST, 'displayMode', FILTER_SANITIZE_NUMBER_INT);
        $nbPages = (string) filter_input(INPUT_POST, 'nbPages', FILTER_SANITIZE_NUMBER_INT);
        $subjects = filter_input(INPUT_POST, 'subjects', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

        if()
        setcookie(
            'displayMode',
            $displayMode,
            0
        );
        setcookie(
            'nbPages',
            $nbPages,
            0
        );
        setcookie(
            'subjects',
            serialize($subjects),
            0
        );
    }
    var_dump($_COOKIE['displayMode']);
    var_dump($_COOKIE['nbPages']);
    var_dump(unserialize($_COOKIE['subjects']));
?>

<form action="" method="POST">
    <legend>Mode d'affichage</legend>
    <div class="darkMode">
        <label for="">Light</label>
        <input type="radio" name="displayMode" id="" value="0">
        <input type="radio" name="displayMode" id="" value="1">
        <label for="">Dark</label>
    </div>
    <legend>Nombre de pages à afficher</legend>
    <div class="nbPages">
        <input type="radio" name="nbPages" id="" value="0">
        <label for="">6 pages</label>
        <input type="radio" name="nbPages" id="" value="1">
        <label for="">9 pages</label>
        <input type="radio" name="nbPages" id="" value="2">
        <label for="">12 pages</label>
    </div>
    <legend>Choisissez trois thèmes favoris</legend>
    <div class="subjectsChoice">
        <div>
            <input type="checkbox" name="subjects[]" id="" value="0">
            <label for="">A la une</label>
        </div>
        <div>
            <input type="checkbox" name="subjects[]" id="" value="1">
            <label for="">En continu</label>
        </div>
        <div>
            <input type="checkbox" name="subjects[]" id="" value="2">
            <label for="">Vidéos</label>
        </div>
        <div>
            <input type="checkbox" name="subjects[]" id="" value="3">
            <label for="">Les plus lus</label>
        </div>
        <div>
            <input type="checkbox" name="subjects[]" id="" value="4">
            <label for="">Galerie</label>
        </div>
    </div>
    <button type="submit">ENVOYER</button>
</form>