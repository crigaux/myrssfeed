<?php

    if(empty($_COOKIE['nbPages'])){
        include(__DIR__.'/controllers/homeController.php');
    } else {
        include(__DIR__.'/controllers/parametersController.php');
    }