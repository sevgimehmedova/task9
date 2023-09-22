<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'newdb';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Извличане на информацията за продукта по ID
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        // Извеждане на информацията за продукта
        echo "<h1>{$product['name']}</h1>";
        echo "<p>{$product['description']}</p>";
        echo "<p>Цена: {$product['price']}</p>";
        echo "<img src='{$product['image_url']}' alt='{$product['name']}' />";
    } else {
        echo "Продуктът не беше намерен.";
    }
    
    $conn->close();
} else {
    echo "Информация за продукта не е предоставена.";
}
?>
