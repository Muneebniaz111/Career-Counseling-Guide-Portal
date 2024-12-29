<?php 

$conn = new mysqli("DESKTOP-R538H98\SQLEXPRESS", "", "", "career_counseling");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email); 

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                
                header("Location: admin_dashboard.php");
                exit;
            } else {
               
                echo "Invalid email or password.";
            }
        } else {

            echo "Invalid email or password.";
        }


        $stmt->close();
    } else {

        echo "SQL statement preparation failed.";
    }


    $conn->close();
}
?>
