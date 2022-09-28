<div class="formContainer">
    <form action="" method="POST">

        <h1>Paramètres</h1>
        <legend>Mode d'affichage</legend>
        <div class="darkMode">
            <label for="">Light</label>
            <input type="radio" name="displayMode" id="" value="0">
            <input type="radio" name="displayMode" id="" value="1">
            <label for="">Dark</label>
            <div class="error"><?= $errors['displayModeError'] ?? '' ?></div>
        </div>

        <legend>Nombre de pages à afficher</legend>
        <div class="nbPages">
            <input type="radio" name="nbPages" id="" value="0">
            <label for="">6 pages</label>
            <input type="radio" name="nbPages" id="" value="1">
            <label for="">9 pages</label>
            <input type="radio" name="nbPages" id="" value="2">
            <label for="">12 pages</label>
            <div class="error"><?= $errors['nbPages'] ?? '' ?></div>
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
                <label for="">Galerie</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="3">
                <label for="">Populaires</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="4">
                <label for="">Les + lus</label>
            </div>
            <div class="error"><?= $errors['subjects'] ?? '' ?></div>
        </div>
        <button type="submit">ENVOYER</button>
    </form>
</div>