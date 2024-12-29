<?php
if (isset($_POST['resource_id'])) {
    $resource_id = $_POST['resource_id'];

    $file_path = "uploads/resource_$resource_id.pdf"; 

    if (file_exists($file_path)) {
        unlink($file_path); 
        echo "PDF deleted successfully.";
    } else {
        echo "File not found.";
    }
}
?>
