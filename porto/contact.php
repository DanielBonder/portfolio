<?php
// Connection details
$host = 'localhost'; // שרת מסד הנתונים
$username = 'root'; // שם המשתמש של MySQL
$password = ''; // הסיסמה של MySQL
$database = 'portfolio_db'; // שם מסד הנתונים

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM projects"; // שנה את שם הטבלה בהתאם לטבלה שלך
$result = $conn->query($sql);

// Initialize data array
$projects = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}

// Close the connection
$conn->close();

// Convert data to JSON and return it
header('Content-Type: application/json');
echo json_encode($projects);
?>
