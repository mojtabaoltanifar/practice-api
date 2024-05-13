<?php
// اتصال به API
$api_url = 'https://fakestoreapi.com/products/1';
$response = file_get_contents($api_url);
$products = json_decode($response, true);

// نمایش محصولات
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محصولات</title>
    <link rel="stylesheet" href="style.css">

  <style>
        .product {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            display: inline-block;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>محصولات</h1>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
           
            <p>قیمت: <?php echo $product['price']; ?> تومان</p>
            <p><?php echo $product['description']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>


