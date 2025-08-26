<html>
<head>
    <title>CRUD operations
    </title>
</head>
    <body>
    <?php
    // Create connection
    $conn = new mysqli("localhost", "root", "P6@b!nP6@b!n", "testdb");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";
    // Create database
    $sql = "USE testdb";
    if ($conn->query($sql) === TRUE) 
        {
        echo "Database used successfully<br>";
        $sql1 = "Create table MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL)";
        if($conn->query($sql1) === TRUE)
        {
            echo "Table MyGuests created successfully<br>";
        } 
        else
         {
        echo "Error creating table: " . $conn->error;
        }
    }
    else {
          echo "Error creating database: " . $conn->error;
    }
    $conn->close();
    ?>
    </body>
</html>