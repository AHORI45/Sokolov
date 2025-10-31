<?php
// Массив товаров для интернет-магазина сувениров
echo '<h1>Тема:Интернет  магазин</h1>';
echo '<h2>Задача 3</h2>';
$products = [
    [
        'name' => 'Кружка с логотипом города',
        'category' => 'Кружки',
        'price' => 350,
        'brand' => 'GiftCity',
        'imageUrl' => 'img/mug1.jpg',
        'stock' => true,
        'offer' => 'Скидка 10%'
    ],
    [
        'name' => 'Кружка-хамелеон "С добрым утром!"',
        'category' => 'Кружки',
        'price' => 490,
        'brand' => 'SouvenirPro',
        'imageUrl' => 'img/mug2.jpg',
        'stock' => false,
        'offer' => ''
    ],
    [
        'name' => 'Брелок металлический "Москва"',
        'category' => 'Брелоки',
        'price' => 150,
        'brand' => 'CitySouvenir',
        'imageUrl' => 'img/keychain1.jpg',
        'stock' => true,
        'offer' => 'Скидка 20%'
    ],
    [
        'name' => 'Брелок из дерева "Медведь"',
        'category' => 'Брелоки',
        'price' => 120,
        'brand' => 'EcoGift',
        'imageUrl' => 'img/keychain2.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Магнит на холодильник "Санкт-Петербург"',
        'category' => 'Магниты',
        'price' => 180,
        'brand' => 'GiftPoint',
        'imageUrl' => 'img/magnet1.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Магнит из полимера "Кремль"',
        'category' => 'Магниты',
        'price' => 200,
        'brand' => 'SouvenirArt',
        'imageUrl' => 'img/magnet2.jpg',
        'stock' => false,
        'offer' => 'Новинка!'
    ],
    [
        'name' => 'Футболка "I ❤️ Moscow"',
        'category' => 'Футболки',
        'price' => 890,
        'brand' => 'SouvenirStyle',
        'imageUrl' => 'img/tshirt1.jpg',
        'stock' => true,
        'offer' => 'Скидка 15%'
    ],
    [
        'name' => 'Футболка с принтом "Россия"',
        'category' => 'Футболки',
        'price' => 850,
        'brand' => 'GiftWear',
        'imageUrl' => 'img/tshirt2.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Кепка сувенирная с гербом',
        'category' => 'Головные уборы',
        'price' => 750,
        'brand' => 'SouvenirCap',
        'imageUrl' => 'img/cap1.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Кепка "Russia Team"',
        'category' => 'Головные уборы',
        'price' => 720,
        'brand' => 'SportGift',
        'imageUrl' => 'img/cap2.jpg',
        'stock' => false,
        'offer' => 'Распродажа!'
    ]
];


echo '<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; text-align:center;">';
echo '<tr style="background-color:#f2f2f2;">
        <th>Наименование</th>
        <th>Категория</th>
        <th>Бренд</th>
        <th>Цена (руб.)</th>
      </tr>';

foreach ($products as $product) {
    echo "<tr>
            <td>{$product['name']}</td>
            <td>{$product['category']}</td>
            <td>{$product['brand']}</td>
            <td>{$product['price']}</td>
          </tr>";
}

echo '</table>';

echo '<h2>Задача 4</h2>';
echo '<form method="get">
        <label>Введите категорию: </label>
        <input type="text" name="category" placeholder="например, Кружки">
        <button type="submit">Показать</button>
      </form>';

if (isset($_GET['category'])) {
    $category = trim($_GET['category']);
    $found = [];

    foreach ($products as $product) {
        if (mb_strtolower($product['category']) === mb_strtolower($category)) {
            $found[] = $product;
        }
    }

    if (empty($found)) {
        echo "<p>В категории <b>$category</b> пока нет товаров.</p>";
    } else {
        foreach ($found as $p) {
            echo "{$p['name']} — {$p['brand']} — {$p['price']} руб.<br>";
        }
    }
}


echo '<h2>Задача 5</h2>';
echo '<form method="get">
        <label>Введите наименование товара: </label>
        <input type="text" name="name" placeholder="например, Кружка с логотипом города">
        <button type="submit">Найти</button>
      </form>';

if (isset($_GET['name'])) {
    $name = trim($_GET['name']);
    $found = [];

    foreach ($products as $product) {
        if (mb_strtolower($product['name']) === mb_strtolower($name)) {
            $found[] = $product;
        }
    }

    if (empty($found)) {
        echo "<p>Ничего не найдено.</p>";
    } else {
        $item = $found[0]; 
        echo "<div style='border:1px solid #ccc; padding:10px; width:250px; border-radius:8px;'>";
        echo "<h3>{$item['name']}</h3>";
        echo "<img src='{$item['imageUrl']}' width='100' height='100' style='object-fit:cover;'><br>";
        if ($item['offer']) echo "<p><b>Акция:</b> {$item['offer']}</p>";
        if (!$item['stock']) echo "<p style='color:red;'>Нет на складе</p>";
        echo "<p><b>Цена:</b> {$item['price']} руб.</p>";
        echo "</div>";
    }
}


usort($products, function ($a, $b) {
    return $a['price'] <=> $b['price'];
});

echo '<h2>Задача 6</h2>';
echo '<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; text-align:center;">';
echo '<tr style="background-color:#f2f2f2;">
        <th>Наименование</th>
        <th>Категория</th>
        <th>Бренд</th>
        <th>Цена (руб.)</th>
      </tr>';

foreach ($products as $product) {
    echo "<tr>
            <td>{$product['name']}</td>
            <td>{$product['category']}</td>
            <td>{$product['brand']}</td>
            <td>{$product['price']}</td>
          </tr>";
}
echo '</table>';



