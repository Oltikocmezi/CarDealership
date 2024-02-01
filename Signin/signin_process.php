<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {
        $email = $_POST["email"];
        $enteredPassword = $_POST["password"];

        $servername = "localhost";
        $db = "autoubt";
        $username = "root";
        $db_password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $storedPassword = $row['password'];
                $userRole = $row['role'];

                if ($enteredPassword === $storedPassword) {
                    echo "Login successful!";

                
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $userRole;

                    
                    header("Location: ../index.php");
                    exit();
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "User not found!";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
?>