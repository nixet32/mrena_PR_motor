<?php

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_GET['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}

if(isset($_POST['addCat'])) {
    $insert = $db->addCategory($_POST['name']);
            header("Location: ../products.php");
}

$catogries = $db->getCategories();
?>
<?php
foreach($catogries as $category){

    echo '<form action="updateCategory.php" method="post">
        <input type="text" name="name" value="'.$category['name'].'"><br>
        <input type="hidden" name="id" value="'.$category['id'].'">
        <input type="submit" name="submit" value="Update">
    </form>
    <form action="deleteCategory.php" method="post">
        <input type="submit" name="delete" value="Delete">
        <input type="hidden" name="id" value="'.$category['id'].'">
    </form>';
}
?>

        <form method="post" action="">
            Category name:<br>
            <input type="text" name="name" value="" placeholder="Page Name" required><br>
            <input type="submit" name="addCat" value="Add">
        </form>
