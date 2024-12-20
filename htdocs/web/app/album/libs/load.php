<?php

include_once 'includes/mic.class.php';
include_once 'includes/database.class.php';
include_once 'includes/user.class.php';

// ini_set('display_errors', 1);
// error_reporting(E_ALL); 

function load_tempulate($name)
{
    // printf("include $name.php");
    include $_SERVER['DOCUMENT_ROOT'] . "/web/app/album/__templates/$name.php";
    // include __DIR__."/../__templates/$name.php"; // not consistent
    // $_SERVER is used here for global path handling
}

function validate_credentials($username, $password)
{
    printf("validation ");
    if ($username == "vignesh@ex.io" && $password == "vip123") {
        return true;
    } else {
        return false;
    }
}

?>
