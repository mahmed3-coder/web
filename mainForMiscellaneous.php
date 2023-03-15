
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
				$sql = "SELECT * FROM Miscellaneous";
				$result = $conn->query($sql);

				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Name_'] . "</td>";
                        echo "<td>" . $row['Quantity'] . "</td>";
                        echo "<td>" . $row['DateChecked'] . "</td>";
						echo "<td>";
						echo "<form method='post' action='deletemiscellaneous.php'>";
						echo "<input type='hidden' name='Name_' value='" . $row['Name_'] . "'>";
						echo "<input type='submit' value='Delete'>";
						echo "</form>";
						echo "<td>";
                        echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='14'>No laptops found.</td></tr>";
				}


				

			

				
				// Close  connection
				$conn->close();



				

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Establish connection
					$servername = "Zamzams-MacBook-Air.local";
					$username = "mo206";
					$password = "Mustafa123!";
					$dbname = "PBS";
					$conn = new mysqli($servername, $username, $password, $dbname);
				  
					$name = $_POST['Name_'];
				  $quantity_ = $_POST['Quantity'];
				  $datechecked = $_POST['DateChecked'];
				
                  
				  $sql = "INSERT INTO Miscellaneous (Name_, Quantity, DateChecked) 
						  VALUES ('$name','$quantity_', '$datechecked')";
				  if ($conn->query($sql) === TRUE) {
					echo "added successfully";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
				
				  // Close connection
				  $conn->close();
				  }
			?>
		</tbody>

