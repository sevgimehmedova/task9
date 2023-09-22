<?php
session_start();

// Check if the Add to Cart button is clicked
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Initialize the shopping cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    if (array_key_exists($product_id, $_SESSION['cart'])) {
        // If it is, increment the quantity
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {
        // If it's not, add it to the cart
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => 1,
        ];
    }

    // Display a notification that the product was added to the cart
    $notification = "Product '{$product_name}' has been added to the cart.";
}
?>

<!-- Display the notification, product listing, and Add to Cart buttons -->
<div id="notification"><?php echo isset($notification) ? $notification : ''; ?></div>

<!-- Product listing -->
<div class="product-card-container" id="product-container">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
            </div>
            <div class="product-details">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p><?php echo $product['price']; ?></p>

                <!-- Add to Cart button -->
                <form method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                    <input type="submit" name="add_to_cart" value="Add to Cart">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
