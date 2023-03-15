<!DOCTYPE html>
<html>
  <head>
    <title>IpadMini Table</title>
    <style>
      body{
        background-color: #2196f3;
      }
      table {
        font-family: Arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 1px solid #ddd;
        text-align: left;
        padding: 8px;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      th {
        background-color: #2196f3;
        color: white;
      }

      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
        font-family: Arial, sans-serif;
            }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        }

    input[type="text"] {
            padding: 5px;
            margin-bottom: 20px;
            border-radius: 3px;
            border: 1px solid #ccc;
            font-size: 14px;
            width: 250px;
          }
    input[type="submit"]:hover {
            background-color: #0062cc;
          }

    input[type="submit"] {
          padding: 10px 20px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 3px;
          cursor: pointer;
          font-size: 16px;
          }
    </style>
  </head>
  <body>
    <h1>IpadMini Table</h1>
    <table>
      <tr>
        <th>iPadMiniId </th>
        <th>Brand_OS</th>
        <th>Model</th>
        <th>SerialNumber</th>
        <th>Usable</th>
        <th>Passwd</th>
        <th>AbleToConnectToWifi</th>
        <th>CapacityToRunZoom</th>
        <th>AbleToBeCharged</th>
        <th>FactoryReseted</th>
        <th>SpeakerAndMicFunctionality</th>
        <th>SystemUpdated</th>
        <th>Notes</th>
        <th>DateChecked</th>

        <h2> To Create Enter below, Or Just scroll down to view the information currently in the database</h2>
        <form method="post" action="mainForIpadmini.php">
        <label for="iPadMiniId">IpadMini:</label>
      <input type="text" name="iPadMiniId" id="iPadMiniId" required>
      <br>
      <label for="Brand_OS">Brand_OS:</label>
      <input type="text" name="Brand_OS" id="Brand_OS" required>
      <br>
      <label for="Model">Model:</label>
      <input type="text" name="Model" id="Model" required>
      <br>
      <label for="SerialNumber">SerialNumber:</label>
      <input type="text" name="SerialNumber" id="SerialNumber" required>
      <br>
      <label for="Usable">Usable:</label>
      <input type="text" name="Usable" id="Usable" required>
      <br>
    
      <label for="Passwd">Passwd:</label>
      <input type="text" name="Passwd" id="Passwd" required>
    <br>
    <label for="AbleToConnectToWifi">AbleToConnectToWifi:</label>
      <input type="text" name="AbleToConnectToWifi" id="AbleToConnectToWifi" required>
    <br>
    <label for="CapacityToRunZoom">CapacityToRunZoom:</label>
      <input type="text" name="CapacityToRunZoom" id="CapacityToRunZoom" required>
    <br>
    <label for="AbleToBeCharged">AbleToBeCharged:</label>
      <input type="text" name="AbleToBeCharged" id="AbleToBeCharged" required>
    <br>
    <label for="FactoryReseted">FactoryReseted:</label>
      <input type="text" name="FactoryReseted" id="FactoryReseted" required>
    <br>
    <label for="SpeakerAndMicFunctionality">SpeakerAndMicFunctionality:</label>
      <input type="text" name="SpeakerAndMicFunctionality" id="SpeakerAndMicFunctionality" required>
    <br>
    <label for="SystemUpdated">SystemUpdated:</label>
      <input type="text" name="SystemUpdated" id="SystemUpdated" required>
    <br>
    <label for="Notes">Notes:</label>
      <input type="text" name="Notes" id="Notes" required>
    <br>
    <label for="DateChecked">DateChecked:</label>
      <input type="text" name="DateChecked" id="DateChecked" required>
    <br>
      <input type="submit" value="Add iPadMini">
    </form>
      </tr>
      <?php include 'mainForIpadmini.php'; ?>
      <?php
        $query = "SELECT * FROM Ipadmini";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['iPadMiniId '] . "</td>";
          echo "<td>" . $row['Brand_OS'] . "</td>";
          echo "<td>" . $row['Model'] . "</td>";
          echo "<td>" . $row['SerialNumber'] . "</td>";
          echo "<td>" . $row['Usable'] . "</td>";
          echo "<td>" . $row['Passwd'] . "</td>";
          echo "<td>" . $row['AbleToConnectToWifi'] . "</td>";
          echo "<td>" . $row['CapacityToRunZoom'] . "</td>";
          echo "<td>" . $row['AbleToBeCharged'] . "</td>";
          echo "<td>" . $row['FactoryReseted'] . "</td>";
          echo "<td>" . $row['SpeakerAndMicFunctionality'] . "</td>";
          echo "<td>" . $row['SystemUpdated'] . "</td>";
          echo "<td>" . $row['Notes'] . "</td>";
          echo "<td>" . $row['DateChecked'] . "</td>";
          echo "</tr>";
        }
        mysqli_close($conn);
      ?>
    </table>
  </body>
</html>
