<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadgeticity Catalog</title>
    <style>
        @keyframes blackWhiteAnimation {
            0% { background-color: white; }
            50% { background-color: black; }
            100% { background-color: white; }
        }
        
        @keyframes textColorAnimation {
            0% { color: black; }
            50% { color: white; }
            100% { color: black; }
        }
        
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            animation: blackWhiteAnimation 10s infinite;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.5s ease;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #f5f5f5;
            border: 2px solid black;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            overflow: hidden;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .header {
            background: black;
            text-align: center;
            padding: 30px;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .header h1, .header p {
            margin: 0;
            font-size: 2.5em;
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .header p {
            font-size: 1.2em;
            margin-top: 10px;
        }
        .task-section {
            padding: 30px;
            border-bottom: 3px dashed black;
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .task-title {
            background: black;
            color: white;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.5em;
            font-weight: bold;
            border: 2px solid white;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .product-list {
            background: white;
            padding: 20px;
            border-radius: 15px;
            border: 3px solid black;
            margin: 15px 0;
        }
        .price-box {
            display: inline-block;
            background: black;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 10px;
            font-weight: bold;
            font-size: 1.2em;
            border: 2px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
        }
        .product-card {
            background: #f5f5f5;
            border: 2px solid black;
            padding: 25px;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        .catalog-item {
            background: white;
            border: 2px solid black;
            color: black;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
            transform: translateY(0);
            transition: all 0.3s ease;
        }
        .catalog-item:hover {
            transform: translateY(-5px);
            background: black;
            color: white;
            border: 2px solid white;
        }
        .emoji {
            font-size: 2em;
            margin-bottom: 10px;
            display: block;
        }
        .footer {
            background: black;
            text-align: center;
            padding: 20px;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .footer h3, .footer p {
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🛍️ Gadgeticity Catalog 🛍️</h1>
        </div>

<?php
echo '<div class="task-section">';
echo '<div class="task-title">📋 Task 1: Basic Product List</div>';

$productNames = ["Wireless Mouse", "Mechanical Keyboard", "USB-C Hub", "Portable Speaker"];
$productPrices = [25.99, 79.99, 34.50, 49.99];

echo '<div class="product-list">';
echo '<h3>🎮 Our Amazing Products:</h3>';
echo '<p style="font-size: 1.3em; color: #333;"><strong>' . implode(" • ", $productNames) . '</strong></p>';
echo '</div>';

echo '<div style="text-align: center; margin: 20px 0;">';
echo '<span class="price-box">💰 First Product: ₱' . number_format($productPrices[0], 2) . '</span>';
echo '<span class="price-box">💎 Last Product: ₱' . number_format($productPrices[count($productPrices)-1], 2) . '</span>';
echo '</div>';
echo '</div>';

echo '<div class="task-section">';
echo '<div class="task-title">🔍 Task 2: Featured Product Spotlight</div>';

$featuredProduct = [
    "name" => "Mechanical Keyboard",
    "price" => 79.99,
    "brand" => "KeyTech",
    "inStock" => true,
    "description" => "High-quality mechanical keyboard with RGB lighting and tactile switches"
];

echo '<div class="product-card">';
echo '<span class="emoji">⌨️</span>';
echo '<h2 style="margin: 10px 0; font-size: 2em;">' . $featuredProduct["name"] . '</h2>';
echo '<p style="font-size: 1.2em; margin: 10px 0;"><strong>🏷️ Brand:</strong> ' . $featuredProduct["brand"] . '</p>';
echo '<p style="font-size: 1.5em; margin: 10px 0;"><strong>💰 Price:</strong> ₱' . number_format($featuredProduct["price"], 2) . '</p>';
echo '<p style="font-size: 1.2em; margin: 10px 0;"><strong>📦 In Stock:</strong> ' . ($featuredProduct["inStock"] ? "✅ Yes" : "❌ No") . '</p>';
echo '<p style="font-size: 1.1em; margin: 15px 0; font-style: italic;">' . $featuredProduct["description"] . '</p>';

$featuredProduct["warranty"] = "2 years";
echo '<p style="font-size: 1.2em; margin: 10px 0;"><strong>🛡️ Warranty:</strong> ' . $featuredProduct["warranty"] . '</p>';
echo '</div>';
echo '</div>';

echo '<div class="task-section">';
echo '<div class="task-title">🏪 Task 3: Complete Catalog Collection</div>';

$catalog = [
    [
        "id" => 1,
        "name" => "Wireless Mouse",
        "price" => 25.99,
        "inStock" => true,
        "emoji" => "🖱️"
    ],
    [
        "id" => 2,
        "name" => "Mechanical Keyboard",
        "price" => 79.99,
        "inStock" => true,
        "emoji" => "⌨️"
    ],
    [
        "id" => 3,
        "name" => "USB-C Hub",
        "price" => 34.50,
        "inStock" => true,
        "emoji" => "🔌"
    ],
    [
        "id" => 4,
        "name" => "Portable Speaker",
        "price" => 49.99,
        "inStock" => false,
        "emoji" => "🔊"
    ]
];

echo '<div class="catalog-grid">';
foreach ($catalog as $product) {
    if ($product["inStock"]) {
        echo '<div class="catalog-item">';
        echo '<span class="emoji">' . $product["emoji"] . '</span>';
        echo '<h3 style="margin: 10px 0; font-size: 1.3em;">' . $product["name"] . '</h3>';
        echo '<p style="font-size: 1.5em; font-weight: bold; margin: 10px 0;">₱' . number_format($product["price"], 2) . '</p>';
        echo '<p style="font-size: 1em; margin: 5px 0;">✅ Available Now!</p>';
        echo '</div>';
    }
}
echo '</div>';
echo '</div>';

echo '<div class="footer">';
echo '<h3> Thank you for visiting Gadgeticity! </h3>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>