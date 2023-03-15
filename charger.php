<!DOCTYPE html>
<html>
  <head>
    <title>Charger Table</title>
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
    <h1>Charger Table</h1>
    <table>
      <tr>
        <th>ChargerTypes</th>
        <th>Quantity</th>
        <th>DateChecked</th>

        <h2> To Create Enter below, Or Just scroll down to view the information currently in the database</h2>
        <form method="post" action="mainForcharger.php">
        <label for="ChargerTypes">ChargerTypes:</label>
      <input type="text" name="ChargerTypes" id="ChargerTypes" required>
      <br>
      <label for="Quantity">Quantity:</label>
      <input type="text" name="Quantity" id="Quantity" required>

    <label for="DateChecked">DateChecked:</label>
      <input type="text" name="DateChecked" id="DateChecked" required>
    <br>
      <input type="submit" value="Add Charger">
    </form>
        
      </tr>
      <?php include 'mainForcharger.php'; ?>
      <?php
        $query = "SELECT * FROM Charger";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['ChargerTypes'] . "</td>";
          echo "<td>" . $row['Quantity'] . "</td>";
          echo "<td>" . $row['DateChecked'] . "</td>";
         
          echo "</tr>";
          echo "</tr>";
        }
        mysqli_close($conn);
      ?>

    </table>

    
  
</script>
  </body>
</html>
