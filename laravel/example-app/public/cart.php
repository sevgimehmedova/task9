<?php
session_start();

// Check if the cart is empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $cart_empty = true;
} else {
    $cart_empty = false;
}
?>

<!-- Display the shopping cart contents -->
<div id="cart-content">
    <?php if ($cart_empty): ?>
        <p>Your shopping cart is empty.</p>
    <?php else: ?>
        <h2>Shopping Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_price = 0;
                foreach ($_SESSION['cart'] as $product_id => $product_info):
                    $product_name = $product_info['name'];
                    $product_price = $product_info['price'];
                    $quantity = $product_info['quantity'];
                    $total = $product_price * $quantity;
                    $total_price += $total;
                ?>
                    <tr>
                        <td><?php echo $product_name; ?></td>
                        <td><?php echo $product_price; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $total; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total: $<?php echo $total_price; ?></p>
        <a href="checkout.php">Proceed to Checkout</a>
    <?php endif; ?>
</div>
