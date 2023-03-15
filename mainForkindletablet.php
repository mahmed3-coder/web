
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
				$sql = "SELECT * FROM KindleTablet";
				$result = $conn->query($sql);

				
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["KindleId"] . "</td>";
						echo "<td>" . $row["Brand_OS"] . "</td>";
						echo "<td>" . $row["Model"] . "</td>";
						echo "<td>" . $row["SerialNumber"] . "</td>";
						echo "<td>" . $row["Usable"] . "</td>";
						echo "<td>" . $row["Passwd"] . "</td>";
						echo "<td>" . $row["AbleToConnectToWifi"] . "</td>";
						echo "<td>" . $row["CapacityToRunZoom"] . "</td>";
						echo "<td>" . $row["AbleToBeCharged"] . "</td>";
						echo "<td>" . $row["FactoryReseted"] . "</td>";
						echo "<td>" . $row["SpeakerAndMicFunctionality"] . "</td>";
						echo "<td>" . $row["SystemUpdated"] . "</td>";
						echo "<td>" . $row["Notes"] . "</td>";
						echo "<td>" . $row["DateChecked"] . "</td>";
						echo "<td>";
						echo "<form method='post' action='deletekindle.php'>";
						echo "<input type='hidden' name='KindleId' value='" . $row['KindleId'] . "'>";
						echo "<input type='submit' value='Delete'>";
						echo "</form>";
						echo "<td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='14'>No found.</td></tr>";
				}


				

			

				
				// Close connection
				$conn->close();

				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					// Establish connection
					$servername = "Zamzams-MacBook-Air.local";
					$username = "mo206";
					$password = "Mustafa123!";
					$dbname = "PBS";
					$conn = new mysqli($servername, $username, $password, $dbname);
				  
					$IdKindle = $_POST['KindleId'];
				  $brand_os = $_POST['Brand_OS'];
				  $model = $_POST['Model'];
				  $serial_number = $_POST['SerialNumber'];
				  $usable = $_POST['Usable'];
				  $passwd = $_POST['Passwd'];
				  $abletoconnectwifi = $_POST['AbleToConnectToWifi'];
				  $runZoom = $_POST['CapacityToRunZoom'];
				  $abletocharge = $_POST['AbleToBeCharged'];
				  $factoryreset = $_POST['FactoryReseted'];
				  $SpeakerAndMicFunctionality = $_POST['SpeakerAndMicFunctionality'];
				  $systemUpdate = $_POST['SystemUpdated'];
				  $notes = $_POST['Notes'];
				  $datechecked = $_POST['DateChecked'];
				
				  $sql = "INSERT INTO KindleTablet (KindleId, Brand_OS, Model, SerialNumber, Usable, Passwd, AbleToConnectToWifi, CapacityToRunZoom, AbleToBeCharged, FactoryReseted, SpeakerAndMicFunctionality,
				   SystemUpdated, Notes, DateChecked ) 
						  VALUES ('$IdKindle','$brand_os', '$model', '$serial_number', '$usable', '$passwd', '$abletoconnectwifi', '$runZoom', '$abletocharge','$factoryreset', '$SpeakerAndMicFunctionality',
						 '$systemUpdate', '$notes', '$datechecked')";
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

