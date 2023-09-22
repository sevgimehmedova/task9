<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'newdb';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image_url = $_POST['image_url'];

$sql = "INSERT INTO products (id, name, description, price, image_url) 
        VALUES ('$id', '$name', '$description', '$price', '$image_url')";

if ($conn->query($sql) === TRUE) {
    $response = array(
        'status' => 'success',
        'message' => 'Продуктът е добавен успешно!'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Грешка при добавяне на продукт: ' . $conn->error
    );
}

echo json_encode($response);


$conn->close();
// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=mydb", $username, $password);

// Use a prepared statement
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
echo htmlspecialchars($userGeneratedContent, ENT_QUOTES, 'UTF-8');

?>
