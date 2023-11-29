<?php
  // 'Hello, world!'をechoしてください
  echo "Hello, world!";
 ?>

<?php
  // 7 * 2をechoしてください
  echo 7 * 2;
 ?>
  
<?php
  // 8 % 3をechoしてください
  echo 8 % 3;
 ?>
<?php
  // この下で5 + 7を出力しましょう
  echo 5 + 7
?>

<?php
  // この下で'5 + 7'を出力しましょう
  echo "5 + 7";
?>

<?php
  //この下に変数$fruitを書いていきましょう
  $fruit = "りんご";
  echo $fruit;
?>

<?php
  //この下に変数$sumを書いていきましょう
  $sum = 8 + 9;
  echo $sum;
?>

<?php
  $x = 5;
  $y = 2;
  $a = 8;
  $b = 4;
?>

<?php
  //$xの値に10を足し、$xを上書き➝echo
  $x += 10;
  echo $x;
?>

<?php
  //$yに5をかけて、$yを上書き➝echoを用いて$yを出力
  $y *= 5;
  echo $y;
?>

<?php
  //$aに1を足し、$aを上書き➝echo
  $a++;
  echo $a;
?>

<?php
  //$bから1を引き、$bを上書き➝echoを用いて$bを出力
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

  // if文を用いて、$xが9800より大きい場合に'変数xは9800より大きいです。'とechoさせる
  if ($x > 9800) {
    echo '変数xは9800より大きいです。';
  }
  //if文を用いて、$yが6000より大きい場合に'変数yは6000より大きいです。'とechoさせる
  if ($y > 6000) {
    echo '変数yは6000より大きいです。';
  }
?>

<?php
  // $ageという変数に自分の年齢を代入してください
  $age = 24;
  //if-else文を用いて、$ageが30以上の場合は,'あなたは30歳以上です。'それ以外は、'あなたは30歳未満です。'とechoさせる
  if ($age >= 30) {
    echo "あなたは30歳以上です。";
  } else {
    echo "あなたは30歳未満です。";
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
  $num = 7;

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