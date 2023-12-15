<?php

include_once "../lib/DB.php";

use PO\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "motor");

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

    $filetitle = $_POST['filetitle'] ?? '';

    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $upload = $db->addGallery($filetitle, $new_img_name);
                
                header("Location: ../gallery.php");

                if ($upload) {
                    echo 'File details inserted into the database successfully.';
                } else {
                    $em = "Error inserting file details into the database.";
                    header("Location: ../gallery.php?error=$em");
                }
            } else {
                $em = "You can't upload files of this type";
                header("Location: ../gallery.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: ../gallery.php?error=$em");
    }

} else {
    header("Location: ../gallery.php");
}
?>
