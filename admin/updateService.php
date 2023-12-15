<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if (isset($_POST['submit'])) {
    $update = $db->updateService($_POST['id'], $_POST['title'], $_POST['description']);

    if ($update) {
        header("Location: ../services.php?status=5");
    } else {
        header("Location: ../services.php?status=6");
    }
} else {
    header("Location: ../services.php");
}
