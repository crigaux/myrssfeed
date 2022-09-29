<?php

    if(isset($_COOKIE['displayMode']) && isset($_COOKIE['nbPages']) && isset($_COOKIE['subjects'])){
        include(__DIR__.'/controllers/homeController.php');
    } else {
        include(__DIR__.'/controllers/parametersController.php');
    }