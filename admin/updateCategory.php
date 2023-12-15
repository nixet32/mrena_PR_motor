<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_POST['delete'])) {
    $id = intval($_GET['id']);
    $delete = $db->deleteMenuItem($id);

}

if(isset($_POST['submit'])) {
    $udpate = $db->updateCategory($_POST['id'], $_POST['name']);

    if($udpate) {
        header("Location: ../products.php?status=5");
    } else {
        header("Location: ../products.php?status=6");
    }
} else {
    header("Location: products.php");
}