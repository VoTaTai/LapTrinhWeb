<?php
 $product_description = filter_input(INPUT_POST, 'product_description');
 $list_price = filter_input(INPUT_POST, 'list_price');
 $discount_percent = filter_input(INPUT_POST, 'discount_percent');
 
 $discount_amount = $list_price * $discount_percent * 0.01;
 $discount_price = $list_price - $discount_amount;

 $list_Price = '$' . number_format($list_price, 2);
 $discount_Percent = number_format($discount_percent, 2) . '%';
 $discount_Amount = '$' . number_format($discount_amount, 2);
 $discount_Price = '$' . number_format($discount_price, 2);
 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>
        <!-- ten -->
        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span><br>
        <!-- gia -->
        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_Price); ?></span><br>
        <!-- % -->
        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_Percent); ?></span><br>
        <!-- tien giam -->
        <label>Discount Amount:</label>
        <span><?php echo htmlspecialchars($discount_Amount); ?></span><br>
        <!-- tien thanh toan -->
        <label>Discount Price:</label>
        <span><?php echo htmlspecialchars($discount_Price); ?></span><br>
    </main>
</body>
</html>