<?php

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_GET['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}

if(isset($_POST['add'])) {
    $insert = $db->insertMenuRecord($_POST['pageName'], $_POST['url']);
            header("Location: ../index.php");
}

$menuItems = $db->getMenu();
?>
<?php
foreach($menuItems as $menuItem){
    ?>
    <form action="updateItem.php" method="post">
        <input type="text" name="name" value="<?php echo $menuItem['page_name']; ?>" placeholder="Page name"><br>
        <input type="text" name="url" value="<?php echo $menuItem['url']; ?>" placeholder="Page url"><br>
        <input type="hidden" name="id" value="<?php echo $menuItem['id']; ?>">
        <input type="submit" name="submit" value="Update">
    </form>
        <form action="deleteMenuItem.php" method="post">
            <input type="submit" name="delete" value="Delete">
            <input type="hidden" name="id" value="<?php echo $menuItem['id']; ?>">
        </form>
    <?php
}
?>

        <form method="post" action="">
            Page Name:<br>
            <input type="text" name="pageName" value="" placeholder="Page Name" required><br>
            URL:<br>
            <input type="text" name="url" value="" placeholder="Url" required><br>
            <input type="submit" name="add" value="Add">
        </form>
