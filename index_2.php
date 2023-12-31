<?php
  // 'Hello, world!'をechoしてください
  echo 'Hello, world!';
?>

<?php
  // 7 * 2をechoしてください
  echo 7 * 2;
?>

<?php
  // 8 % 3をechoしてください
  echo 8 % 3;
?>

<!-- この下で5 + 7を出力しましょう -->
<?php
  echo 5 + 7;
?>

<!-- この下で'5 + 7'を出力しましょう -->
<?php
  echo '5 + 7';
?>

<!-- この下に変数$fruitを書いていきましょう！ -->
<?php
  $fruit = 'りんご';
  echo $fruit;
?>

<!-- この下に変数$sumを書いていきましょう！ -->
<?php
  $sum = 8 + 9;
  echo $sum;
?>

<?php

  $x = 5;
  $y = 2;
  $a = 8;
  $b = 4;

?>

<!-- この下で$xの計算をしていきましょう -->
<?php
  $x += 10;
  echo $x;
?>

<!-- この下で$yの計算をしていきましょう -->
<?php
  $y *= 5;
  echo $y;
?>

<!-- この下で$aの計算をしていきましょう -->
<?php
  $a++;
  echo $a;
?>

<!-- この下で$bの計算をしていきましょう -->
<?php
  $b--;
  echo $b;
?>

<?php
  $name = 'にんじゃわんこ';
  // 'こんにちは！'という文字列と$nameを連結してechoしてください
  echo 'こんにちは！'.$name;
?>

<?php
  $x = 99 * 99;
  $y = 77 * 77;

  // ここにif文を書いていきましょう
  if ($x > 9800) {
    echo '変数xは9800より大きいです。';
  }
  if ($y > 6000) {
    echo '変数yは6000より大きいです。';
  }
?>

<?php
  // $ageという変数に自分の年齢を代入してください
  $age = 24;
  if ($age >= 30) {
    echo 'あなたは30歳以上です。';
  } else {
    echo 'あなたは30歳未満です。';
  }
?>

<?php
  $x = 1071;
  // 以下にif-elseif-else文を書いてください
  if ($x % 3 == 0 && $x % 7 == 0) {
    echo 'xは3の倍数かつ7の倍数です。';
  } elseif ($x % 3 == 0) {
    echo 'xは3の倍数ですが7の倍数ではありません。';
  } elseif ($x % 7 == 0) {
    echo 'xは7の倍数ですが3の倍数ではありません。';
  } else {
    echo 'xは7の倍数でも3の倍数でもありません。';
  }
?>

<?php
  // 変数$numを定義し、好きな数字を代入してください
  $num = 50;

  // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
  $remainder = $num % 3;

  // switch文を用いてください
  switch ($remainder) {
    case 0:
      echo '大吉です。';
      break;
    case 1:
      echo '中吉です。';
      break;
    case 2:
      echo '小吉です。';
      break;
    default:
      echo '凶です。';
      break;
  }
?>

<?php
  // この下に配列を作ってください
  $colors = array('赤', '青', '黄');
  echo $colors[0];
  $colors [] = '白';
  echo $colors[3];
?>

<?php

  // この下に連想配列を作ってください
  $scores = array (
    '数学' => 70,
    '英語' => 90,
    '国語' => 80
    );
  $scores['国語'] += 5;
  echo $scores['国語'];

?>

<?php
  // この下にfor文を書いてください
  for ($i = 51; $i <= 100; $i++) {
    echo $i;
    echo '<br>';
  }
?>

<?php
  // 変数$iを定義してください
  $i = 2;
  // while文を書いてください
  while ($i <= 100) {
    if ($i % 2 == 0) {
      echo $i;
      echo '<br>';
    }
    $i++;
  }
?>

<?php
  // この下にfor文を書いてください
  for ($i = 1; $i <= 1000; $i++) {
    if ($i >= 501) {
      break;
    }
    echo $i;
    echo '<br>';
  }
?>

<?php
  // この下にfor文を書いてください
  for ($i = 1; $i <= 1000; $i++) {
    if ($i % 3 == 0) {
      continue;
    }
    echo $i;
    echo '<br>';
  }
?>

<?php
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);
  // この下にforeach文を書いてください
  foreach ($scores as $key => $value) {
    echo $key.'は'.$value.'点です。';
  }
?>

<?php
  $str = 'progate';
  // strlenを用いて$strの長さをechoしてください
  echo strlen($str);

  echo '<br>';

  $array = array('HTML', 'CSS', 'PHP');

  // countを用いて$arrayの要素数をechoしてください
  echo count($array);

  echo '<br>';

  // randを用いて10から15までのランダムな数字をechoしてください
  echo rand(10, 15);
?>

<?php
  // 関数helloを定義してください
  function hello() {
    echo 'Hello, world!';
  }

  // 関数helloを呼び出してください
  hello();

  echo '<br>';
  // 関数printRectangleAreaを定義してください
  function printRectangleArea($height, $width) {
    echo $height * $width;
  }

  // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
  printRectangleArea(5, 10);
?>

<?php
  // 関数getCircleAreaを定義してください
  function getCircleArea($radius) {
    return $radius * $radius * 3;
  }

  // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
  $circleArea = getCircleArea(5);
  // $circleAreaをechoしてください
  echo $circleArea;
?>

<!-- この下にformタグを書いていきましょう -->
<form action="sent.php" method="post"></form>

<!-- この下にinputタグを書いていきましょう -->
<input type="text" name="name">
<div class="form-item">内容</div>
<!-- この下にtextareaタグを書いていきましょう -->
<textarea name="body"></textarea>

<!-- この下に送信ボタンを作りましょう -->
<input type="submit" value="送信">

<!-- この下にselectタグを書いていきましょう -->
<select name="age">
  <option value="未選択">選択してください</option>
  <option value="20代">20代</option>
  <option value="30代">30代</option>
</select>

<!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
<?php 
  for($i = 6; $i <= 100; $i++) {
    echo "<option value='{$i}'>{$i}</option>";
  }
?>

<!-- この下にselectタグを書いていきましょう -->
<select name="category">
  <option value ="未選択">選択してください</option>
  <?php
    foreach ($types as $type) {
      echo "<option value='{$type}'>{$type}</option>";
    }
  ?>
</select>