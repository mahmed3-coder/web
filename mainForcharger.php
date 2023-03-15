<!-- PHP code to retrieve data from MySQL database and display in table -->
<?php
				// Establish connection
				$servername = "Zamzams-MacBook-Air.local";
				$username = "mo206";
				$password = "Mustafa123!";
				$dbname = "PBS";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// Retrieve data
				$sql = "SELECT * FROM Charger";
				$result = $conn->query($sql);

				// Display data 
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
                        echo "<td>" . $row['ChargerTypes'] . "</td>";
                        echo "<td>" . $row['Quantity'] . "</td>";
                        echo "<td>" . $row['DateChecked'] . "</td>";
						echo "<td>";
						echo "<form method='post' action='deletecharger.php'>";
						echo "<input type='hidden' name='ChargerTypes' value='" . $row['ChargerTypes'] . "'>";
						echo "<input type='submit' value='Delete'>";
						echo "</form>";
						echo "<td>";

                        echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='14'>No laptops found.</td></tr>";
				}


				////

			 

				
				// Close connection
				$conn->close();





                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					
					$servername = "Zamzams-MacBook-Air.local";
					$username = "mo206";
					$password = "Mustafa123!";
					$dbname = "PBS";
					$conn = new mysqli($servername, $username, $password, $dbname);
				  
					$chargerTypes = $_POST['ChargerTypes'];
				  $quantity_ = $_POST['Quantity'];
				  $datechecked = $_POST['DateChecked'];
				
                  
				  $sql = "INSERT INTO Charger (ChargerTypes, Quantity, DateChecked) 
						  VALUES ('$chargerTypes','$quantity_', '$datechecked')";
				  if ($conn->query($sql) === TRUE) {
					echo "added successfully";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
				
				  // Close  connection
				  $conn->close();
				  }


				  



				  
			?>
		</tbody>

