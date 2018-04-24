<?php

if (!defined('__CONFIG__')) {
    exit ("You do not have CONFIG");
}

// our config is below

include_once "classes/DB.php";

$con = DB::getConnection();
?>