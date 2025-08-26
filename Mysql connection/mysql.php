<html>

<head>
    <title>MYSQL Connection
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
echo "Connected successfully";
?>

</body>

</html>