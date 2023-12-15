<?php

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_GET['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}

$serviceD = $db->getServiceDetails();
?>
<?php
foreach($serviceD as $details){

    if (isset($_POST['id']) && $_POST['id'] == $details['id']) {
    echo '<form action="updateServiceDetail.php" method="post">
        <input type="text" name="title" value="'.$details['title'].'"><br>
        <input type="text" name="description" value="'.$details['description'].'" size="250"><br>
        <input type="hidden" name="id" value="'.$details['id'].'">
        <input type="submit" name="submit" value="Update">
    </form>';
}
}

?>