<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
            $servername = "Zamzams-MacBook-Air.local";
            $username = "mo206";
            $password = "Mustafa123!";
            $dbname = "PBS";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
            }
            
            
            $id = $_POST['ChargerTypes'];
            
            
            // Delete row 
            $sql = "DELETE FROM Charger WHERE ChargerTypes = '$id'";
            if ($conn->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $conn->error;
            }
            
            //// Close  connection
            $conn->close();


            }

            ?>