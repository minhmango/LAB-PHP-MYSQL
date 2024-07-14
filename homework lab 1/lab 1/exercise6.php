<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony Camera Display</title>
    <style>
        .product-container {
            text-align: center;
            font-family: Arial, sans-serif;
            width: 300px;
            margin: 0 auto;
        }
        .product-container img {
            max-width: 100%;
            height: auto;
        }
        .product-name {
            font-size: 20px;
            margin: 10px 0;
        }
        .price {
            font-size: 24px;
            font-weight: bold;
            color: red;
        }
        .old-price {
            font-size: 20px;
            text-decoration: line-through;
            color: gray;
        }
        .discount {
            font-size: 18px;
            color: red;
        }
        .source {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <?php
            $productName = "Máy Ảnh Sony RX100 IV (Chính Hãng)";
            $currentPrice = "19.090.000 ₫";
            $oldPrice = "22.990.000 ₫";
            $discount = "-17%";
        ?>
        <img src="sony-rx100-mark-iv-chinh-hang-4.jpg" alt="Sony Camera">
        <div class="product-name"><?php echo $productName; ?></div>
        <div class="price"><?php echo $currentPrice; ?></div>
        <div>
            <span class="old-price"><?php echo $oldPrice; ?></span>
            <span class="discount"><?php echo $discount; ?></span>
        </div>
        <div class="source">Source: Product of Sony</div>
    </div>
</body>
</html>