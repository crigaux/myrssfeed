<?php

if(isset($_COOKIE['displayMode']) && isset($_COOKIE['nbPages']) && isset($_COOKIE['subjects'])){
    header('Location: /accueil');
    exit();
} else {
    header('Location: /parameters');
    exit();
}