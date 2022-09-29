<div class="formContainer">
    <form action="" method="POST" class="parametersForm">
        <h1>Paramètres</h1>
        <legend>Mode d'affichage</legend>
        <div class="darkMode">
            <label for="light">Light</label>
            <input type="radio" name="displayMode" id="light" value="0" <?= ($displayMode == 0) ? 'checked' : '' ;?>>
            <input type="radio" name="displayMode" id="dark" value="1" <?= ($displayMode == 1) ? 'checked' : '' ;?>>
            <label for="dark">Dark</label>
        </div>
        <div class="error"><?= $errors['displayModeError'] ?? '' ?></div>

        <legend>Nombre de pages à afficher</legend>
        <div class="nbPages">
            <input type="radio" name="nbPages" id="6" value="6" <?= ($nbPages == 6) ? 'checked' : '' ;?>>
            <label for="6">6 pages</label>
            <input type="radio" name="nbPages" id="9" value="9" <?= ($nbPages == 9) ? 'checked' : '' ;?>>
            <label for="9">9 pages</label>
            <input type="radio" name="nbPages" id="12" value="12" <?= ($nbPages == 12) ? 'checked' : '' ;?>>
            <label for="12">12 pages</label>
        </div>
        <div class="error"><?= $errors['nbPagesError']?></div>

        <legend>Choisissez trois thèmes favoris</legend>
        <div class="subjectsChoice">
            <div>
                <input type="checkbox" name="subjects[]" id="subject0" value="0" <?= (in_array('0',$subjects)) ? 'checked' : '' ;?>>
                <label for="subject0">A la une</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="subject1" value="1" <?= (in_array('1',$subjects)) ? 'checked' : '' ;?>>
                <label for="subject1">En continu</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="subject2" value="2" <?= (in_array('2',$subjects)) ? 'checked' : '' ;?>>
                <label for="subject2">Galerie</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="subject3" value="3" <?= (in_array('3',$subjects)) ? 'checked' : '' ;?>>
                <label for="subject3">Populaires</label>
            </div>
            <div>
                <input type="checkbox" name="subjects[]" id="subject4" value="4" <?= (in_array('4',$subjects)) ? 'checked' : '' ;?>>
                <label for="subject4">Les + lus</label>
            </div>
        </div>
        <div class="error"><?= $errors['subjectsError'] ?? '' ?></div>
        <button type="submit">ENVOYER</button>
    </form>
</div>