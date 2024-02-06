<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: ../index.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h1>Admin Dashboard</h1>

    <!-- Form for adding/updating car details -->
        <form id="carForm">
            <input class="DashInput" type="hidden" id="carId" name="carId">
        <label class="DashLabel" for="carName">Car Name:</label>
        <input class="DashInput" type="text" id="carName" name="carName" required>

        <label class="DashLabel" for="carDescription">Car Model:</label>
        <input class="DashInput" id="carDescription" name="carDescription" required></input>

        <label class="DashLabel" for="carImage">Car Image URL:</label>
        <input class="DashInput" type="text" id="carImage" name="carImage" required>

        <label class="DashLabel" for="carPrice">Car Price:</label>
        <input class="DashInput" type="text" id="carPrice" name="carPrice" required>

        <label class="DashLabel" for="carSpeed">Car Speed:</label>
        <input class="DashInput" type="text" id="carSpeed" name="carSpeed" required>

        <label class="DashLabel" for="carOwners">Number of Owners:</label>
        <input class="DashInput" type="text" id="carOwners" name="carOwners" required>

        <button class="DashButton" type="button" onclick="updateCarDetails()">Add Car</button>
        <div id="messageContainer"></div>
</form>

    <script>
        function updateCarDetails() {
            // Fetch form values
            var carId = document.getElementById("carId").value;
            var carName = document.getElementById("carName").value;
            var carDescription = document.getElementById("carDescription").value;
            var carImage = document.getElementById("carImage").value;
            var carPrice = document.getElementById("carPrice").value;
            var carSpeed = document.getElementById("carSpeed").value;
            var carOwners = document.getElementById("carOwners").value;

            // You can use AJAX to send the form data to the server for processing
            // Example using Fetch API:
            fetch('update_car.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    'carId': carId,
                    'carName': carName,
                    'carDescription': carDescription,
                    'carImage': carImage,
                    'carPrice': carPrice,
                    'carSpeed': carSpeed,
                    'carOwners': carOwners,
                }),
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response from the server
                alert(data.message);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        
    </script>
</body>
</html>