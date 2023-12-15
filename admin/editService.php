<?php
include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if(isset($_POST['error'])) {
    echo "<p style='color: red'>Nespravne meno alebo heslo</p><br>";
}

$services = $db->getCustomerService();

foreach($services as $service){
    // Check if the 'id' parameter is set in the URL and matches the current service's id
    if (isset($_POST['id']) && $_POST['id'] == $service['id']) {
        echo '<form action="updateService.php" method="post">
            <input type="text" name="title" value="'.$service['title'].'"><br>
            <input type="text" name="description" value="'.$service['description'].'" size="250"><br>
            <input type="hidden" name="id" value="'.$service['id'].'">
            <input type="submit" name="submit" value="Update">
        </form>';
    }
}
?>
