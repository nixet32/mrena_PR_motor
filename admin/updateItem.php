<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_POST['submit'])) {
    $udpate = $db->updateMenuItem($_POST['id'], $_POST['name'], $_POST['url']);

    if($udpate) {
        header("Location: ../index.php?status=5");
    } else {
        header("Location: ../index.php?status=6");
    }
} else {
    header("Location: index.php");
}