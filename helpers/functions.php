<?php
    // Nettoie et test si la valeur renvoyé par l'input 'displayMode' vaut 0 ou 1
    function testDisplayMode($errors, $displayMode) {
        if($displayMode == '') {
            $errors['displayModeError'] = 'Champ obligatoire';
        } else if($displayMode < 0 || $displayMode > 1) {
            $errors['displayModeError'] = 'Valeur Incorrecte';
        } else {
            // Si il n'y a pas d'erreur, stocke la valeur dans un cookie
            setcookie(
                'displayMode',
                $displayMode,
                time() + 60*60*24*30
            );
        }
        return $errors;
    }

    // Nettoie et test si la valeur renvoyé par l'input 'nbPages' vaut 0, 1 ou 2
    function testNbPages($errors, $nbPages) {
        
        if($nbPages == '') {
            $errors['nbPagesError'] = 'Champ obligatoire';
        } else if($nbPages != 6 && $nbPages != 9 && $nbPages != 12) {
            $errors['nbPagesError'] = 'Valeur Incorrecte';
        } else {
            // Si il n'y a pas d'erreur, stocke la valeur dans un cookie
            setcookie(
                'nbPages',
                $nbPages,
                time() + 60*60*24*30
            );
        }
        return $errors;
    }

    // Nettoie et test si la valeur renvoyé par l'input 'displayMode' vaut 0, 1, 2 ou 3
    // et si le tableau ne contient pas plus de 3 entrées
    function testSubjects($errors, $subjects) {
        if(empty($subjects)) {
            $errors['subjectsError'] .= 'Champ obligatoire';
        } else {
            foreach ($subjects as $key => $subject) {
                if($subject < 0 || $subject > 4) {
                    $errors['subjectsError'] = 'Valeur incorrecte';
                } else if (count($subjects) != 3) {
                    $errors['subjectsError'] = 'Veuillez choisir 3 champs';
                }
            }
        }
        // Si il n'y a pas d'erreur, stocke la valeur dans un cookie grâce à la fonction
        // serialize() pour pouvoir stocker un tableau
        if($errors['subjectsError'] == '') {
            setcookie(
                'subjects',
                serialize($subjects),
                time() + 60*60*24*30
            );
        }
        return $errors;
    }