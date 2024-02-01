<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $password = trim($_POST["password"]);
        $phone_number = $_POST["phone_number"];
    
        $servername = "localhost";
        $db = "autoubt";
        $username = "root";
        $db_password = "";
    
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            echo "Success";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    
        try {
            $stmt = $conn->prepare("INSERT INTO users (full_name, email, password, phone_number, role) VALUES (?, ?, ?, ?, 'user')");
            $stmt->execute([$full_name, $email, $password, $phone_number]);
        
            echo "Account created successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

?>