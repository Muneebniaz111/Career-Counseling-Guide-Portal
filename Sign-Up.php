<?php

$conn = new mysqli("DESKTOP-R538H98\SQLEXPRESS", "", "", "career_counseling");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $contact = $_POST['contact'];
    $city = $_POST['city'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, gender = ?, email = ?, username = ?, password = ?, contact = ?, city = ? WHERE id = ?");
    $stmt->bind_param("sssssssi", $name, $gender, $email, $username, $password, $contact, $city, $id);

    if ($stmt->execute()) {
        echo "User details updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
