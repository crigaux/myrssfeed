<?php

if(isset($_COOKIE['displayMode']) && isset($_COOKIE['nbPages']) && isset($_COOKIE['subjects'])){
    header('Location: /home');
    exit();
} else {
    header('Location: /parameters');
    exit();
}