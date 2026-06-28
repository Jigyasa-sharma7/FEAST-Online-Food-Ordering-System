<?php
// Database connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "feast";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

// Get search query
if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Prevent SQL injection by escaping the query string
    $query = $conn->real_escape_string($query);

    // Search the food_items table
    $sql = "SELECT * FROM food_items WHERE name LIKE ? OR description LIKE ?";
    $stmt = $conn->prepare($sql);
    // $sql = "SELECT id, name, description, price, image_url FROM food_items";

    $searchTerm = "%$query%";
    $stmt->bind_param("ss",$searchTerm,$searchTerm);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Return results as JSON
        $foods = [];
        while ($row = $result->fetch_assoc()) {
            $foods[] = $row;
        }
        echo json_encode($foods);
    } else {
        echo json_encode([]);
    }

    $stmt->close();
} else {
    echo json_encode([]);
}

$conn->close();
?>


