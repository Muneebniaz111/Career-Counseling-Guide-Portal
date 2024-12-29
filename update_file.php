<?php
if (isset($_POST['resource_id']) && isset($_FILES['new_pdf'])) {
    $resource_id = $_POST['resource_id'];
    $new_pdf = $_FILES['new_pdf'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($new_pdf["name"]);

    if (move_uploaded_file($new_pdf["tmp_name"], $target_file)) {

        echo "The file " . basename($new_pdf["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
