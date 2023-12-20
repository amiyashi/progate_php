<?php
  echo 'Hello, PHP';
  echo '<br>';
  echo '10 + 7';
  
  echo 'My name is '.$name;
  
  $taxIncludedPrice = $price + $price * $taxRate;
  echo '税込価格は'.$taxIncludedPrice.'円です';
  
  // FizzBuzz
  for ($i= 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo 'FizzBuzz';
  } elseif ($i % 3 == 0) {
    echo 'Fizz';
  } elseif ($i % 5 == 0) {
    echo 'Buzz';
  } else {
    echo $i;
  }
  echo '<br>';
}

// この下にコードを書いてください
$totaPrice = 0;
foreach ($prices as $price) {
  $totaPrice += $price;
}
echo '合計金額は'.$totaPrice.'円です';

$totalPrice = 0;
$maxPrice = 0;
foreach ($prices as $price) {
  if ($price > $maxPrice) {
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '最高価格は'.$maxPrice.'円です';

// 連想配列
echo $menu['name'].'は'.$menu['price'].'円です';

foreach ($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
}

$totalPrice = 0;
foreach ($menus as $menu) {
  $price = $menu['price'];
  echo $menu['name'].'は'.$price.'円です';
  echo '<br>';
  $totalPrice += $price;
}
echo '合計金額は'.$totalPrice.'円です';

$totalPrice = 0;
$maxPrice = 0;
$maxPriceMenuName = '';
foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.'は'.$price.'円です';
  echo '<br>';
  $totalPrice += $price;
  if ($price > $maxPrice) {
    $maxPrice = $price;
    $maxPriceMenuName = $name;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo $maxPriceMenuName.'が最高価格で'.$maxPrice.'円です';

$taxIncludedPrice = $price + $price * $taxRate;
if ($money > $taxIncludedPrice) {
  echo '商品を買うことができます';
} elseif ($money == $taxIncludedPrice) {
  echo '商品を買うことができますが、所持金がなくなります';
} else {
  echo '商品を買うことができません';
}

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo 'FizzBuzz';
  } elseif ($i % 3 == 0) {
    echo 'Fizz';
  } elseif ($i % 5 == 0) {
    echo 'Buzz';
  } else {
    echo $i;
  }
  echo '<br>';
}

$totalPrice = 0;
$maxPrice = 0;
foreach($prices as $price) {
  $totalPrice += $price;
  if ($price > $maxPrice) {
    $maxPrice = $price;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo '最高価格は'.$maxPrice.'円です';

// 連想配列の値を取り出すには、配列名[キー] 
echo $menu['name'].'は'.$menu['price'].'円です';

foreach ($menus as $menu) {
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
}

?>