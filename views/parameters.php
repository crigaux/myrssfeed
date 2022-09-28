<div class="formContainer">
    <form action="" method="POST">
        <h1>Paramètres</h1>
        <legend>Mode d'affichage</legend>
        <div class="darkMode">
            <label for="">Light</label>
            <input type="radio" name="displayMode" id="" value="0" <?= ($displayMode == 0) ? 'checked' : '' ;?>>
            <input type="radio" name="displayMode" id="" value="1" <?= ($displayMode == 1) ? 'checked' : '' ;?>>
            <label for="">Dark</label>
        </div>
        <div class="error"><?= $errors['displayModeError'] ?? '' ?></div>

        <legend>Nombre de pages à afficher</legend>
        <div class="nbPages">
            <input type="radio" name="nbPages" id="" value="6" <?= ($nbPages == 6) ? 'checked' : '' ;?>>
            <label for="">6 pages</label>
            <input type="radio" name="nbPages" id="" value="9" <?= ($nbPages == 9) ? 'checked' : '' ;?>>
            <label for="">9 pages</label>
            <input type="radio" name="nbPages" id="" value="12" <?= ($nbPages == 12) ? 'checked' : '' ;?>>
            <label for="">12 pages</label>
        </div>
        <div class="error"><?= $errors['nbPagesError']?></div>

        <legend>Choisissez trois thèmes favoris</legend>
        <div class="subjectsChoice">
            <div>
                <input type="checkbox" name="subjects[]" id="" value="0" <?= (in_array('0',$subjects)) ? 'checked' : '' ;?>>
                <label for="">A la une</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="1" <?= (in_array('1',$subjects)) ? 'checked' : '' ;?>>
                <label for="">En continu</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="2" <?= (in_array('2',$subjects)) ? 'checked' : '' ;?>>
                <label for="">Galerie</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="3" <?= (in_array('3',$subjects)) ? 'checked' : '' ;?>>
                <label for="">Populaires</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="" value="4" <?= (in_array('4',$subjects)) ? 'checked' : '' ;?>>
                <label for="">Les + lus</label>
            </div>
        </div>
        <div class="error"><?= $errors['subjectsError'] ?? '' ?></div>
        <button type="submit">ENVOYER</button>
    </form>
</div>