<?php
//В массиве хранятся следующие данные о товарах интернет магазина:
//наименование, цена, наличие на складе, скидка в процентах.
//Вывести на экран сводную информацию о товарах в виде массива с данными: количество наименований товара,
//самый дешевый и самый дорогой товар, общее количество всех товаров на складе и общая стоимость всех товаров.
//Напишите функцию sortFullPrice($arr), принимающую параметром массив и
//возращающую новый массив, после удаления из исходного товаров, которых нет на складе и сортировки его по возрастанию цены после применения скидки.
//Входной массив создайте по образцу.
/* пример входного массива
$goods = [
  [
    'title' => 'Compans',
    'price' => 13000,
    'quantity' => 5,
    'discount' =>5
  ],
  [
    'title' => 'Altair',
    'price' => 15000,
    'quantity' => 15,
    'discount' => 20
  ],
  [
    'title' => 'Zevs',
    'price' => 25000,
    'quantity' => 0,
    'discount' => 11
  ],
  [
    'title' => 'Oven',
    'price' => 18000,
    'quantity' => 3,
    'discount' => 0
  ],
];
Результ работы функции:
[
  [
    'title' => 'Altair',
    'price' => 15000,
    'quantity' => 15,
    'discount' => 20
  ],
  [
    'title' => 'Compans',
    'price' => 13000,
    'quantity' => 5,
    'discount' =>5
  ],
  [
    'title' => 'Oven',
    'price' => 18000,
    'quantity' => 3,
    'discount' => 0
  ],

]
*/

function sortFullPrice($arr) {
  $filtered = array_filter($arr, function($item) {
    return $item['quantity'] > 0;
  });
  usort($filtered, function($a,$b) {
    $priceA = $a['price'] * (1 - $a ['discount'] / 100);
    $priceB = $b['price'] * (1 - $b ['discount'] / 100);
    return $priceA <=> $priceB;
  });
  return $filtered;
}

$goods = [
  ['title' => 'Ноутбук',
  'price' => 5000,
  'quantity' => 5,
  'discount' =>10],
['title' => 'Мышь',
'price' => 1500,
'quantity' => 0,
'discount' => 5],
['title' => 'Клавиатура',
'price' => 3000,
'quantity' => 8,
'discount' => 15],
['title' => 'Монитор',
'price' => 25000,
'quantity' => 3,
'discount' => 0],
];

$totalItems = count($goods);
$totalQuantity = array_sum(array_column($goods, 'quantity'));
$totalValue = 0;

$prices = [];
foreach ($goods as $item) {
  $finalPrice = $item['price'] * (1 - $item['discount'] / 100);
  $totalValue += $finalPrice * $item['quantity'];
  $prices[] = $finalPrice;
}

$cheapest = min($prices);
$mostExpensive = max($prices);

$sortedGoods = sortFullPrice($goods);
?>

<h3>Сводная информация:</h3>
<p>Количество наименований: <?= $totalItems ?></p>
<P>Самый дешёвый товар: <?= $cheapest ?> руб</P>
<P>Самый дорогой товар: <?= $mostExpensive ?> руб</P>
<P>Общее количетсов на складе: <?= $totalQuantity ?></P>
<P>Общая стоимость: <?= round($totalValue, 2) ?> руб</P>

<h3>Остсортированный массив (в наличии, по цене со скидкой):</h3>
<pre><?php print_r($sortedGoods); ?></pre>