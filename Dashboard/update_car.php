<?php

    $servername = "localhost";
    $db = "autoubt";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$db", $username, $password, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));

        echo "Suksese";
    }catch(PDDException $e){
        echo "Lidhja Deshtoi: " . $e->getMessage();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $carId = $_POST['carId'];
        $carName = $_POST['carName'];
        $carDescription = $_POST['carDescription'];
        $carImage = $_POST['carImage'];
        $carPrice = $_POST['carPrice'];
        $carSpeed = $_POST['carSpeed'];
        $carOwners = $_POST['carOwners'];

        try {
            if (empty($carId)) {
                // Insert new car
                $stmt = $conn->prepare("INSERT INTO cars (car_name, description, image_path, price, speed, owners) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->execute([$carName, $carDescription, $carImage, $carPrice, $carSpeed, $carOwners]);
                $message = 'Car added successfully!';
            } else {
                // Update existing car
                $stmt = $conn->prepare("UPDATE cars SET car_name=?, description=?, image_path=?, price=?, speed=?, owners=? WHERE car_id=?");
                $stmt->execute([$carName, $carDescription, $carImage, $carPrice, $carSpeed, $carOwners, $carId]);
                $message = 'Car updated successfully!';
            }

            $response = ['status' => 'success', 'message' => $message];
        } catch (PDOException $e) {
            $response = ['status' => 'error', 'message' => 'Error updating car: ' . $e->getMessage()];
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header('Location: dashboard.php'); // Redirect if accessed directly
        exit();
    }
?>