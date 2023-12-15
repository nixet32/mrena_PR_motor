<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_POST['delete'])) {
    $delete = $db->deleteCategory($_POST['id']);

    if($delete) {
        header("Location: ../products.php?status=3");
    } else {
        header("Location: ../products.php?status=4");
    }
} else {
    header("Location: ../products.php");
}