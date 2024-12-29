<?php
$dsn = "sqlsrv:Server=DESKTOP-R538H98\SQLEXPRESS;Database=career_counseling";
$username = "sa"; // SQL Server username
$password = "";   // SQL Server password

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>