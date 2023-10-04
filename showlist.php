<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>Employee Registration List</Form></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 0 auto; /* Center the table horizontally */
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <body>
    <div class="menu-bar">
      <h1 class="logo">Light<span>Spark</span></h1>
  <nav>
    
      <ul>
        <li><a href="registartion.php">Home</a></li>
        <li><a href="showlist.php">See List</a></li>
                   
                  
        </li>
        <li><a href="#">Blog</a>
        </li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

    <div class="hero">
      &nbsp;

      <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email Id</th>
                <th>Department Id</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "employee_registration";

        $conn = new mysqli($host, $username, $password, $database);

    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * FROM employees";

        $result = $conn->query($sql);

        
        if ($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["full_name"] . "</td>";
                echo "<td>" . $row["email_id"] . "</td>";
                echo "<td>" . $row["department"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No data available</td></tr>";
        }

        $conn->close();
        ?>
    </tbody>
    <footer>
        &copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.
    </footer>
</body>
</html>