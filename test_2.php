<?php

  // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
  $remainder = $num % 3;
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
  // この下にfor文を書いてください
  for ($i = 1; $i <= 1000; $i++) {
    if ($i > 500) {
      break;
    }
    echo $i;
    echo '<br>';
  }
  // この下にfor文を書いてください
  for ($i = 1; $i <= 1000; $i++) {
    if ($i % 3 == 0) {
      continue;
    }
    echo $i;
    echo '<br>';
  }
  
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

  // この下にforeach文を書いてください
  foreach ($scores as $key => $value) {
    echo $key.'は'.$value.'点です。';
  }
  
  // 関数helloを定義してください
  function hello() {
    echo 'Hello, world!';
  }
  
  // 関数helloを呼び出してください
  hello();
  
  // 関数getCircleAreaを定義してください
  function getCircleArea($radius) {
    return $radius * $radius * 3;
  }
  
  // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
  $circleArea = getCircleArea(5);
  // $circleAreaをechoしてください
  echo $circleArea;
  
  // for文を用いて6歳から100歳までをoptionで選べるようにしましょう
  for ($i = 6; $i <= 100; $i++) {
    echo "<option value='{$i}'>{$i}</option>";
  }
  
  $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
  // この下にselectタグを書いていきましょう
  <select name="category">
  <option value="未選択">選択してください</option>
  foreach ($types as $type) {
    echo "<option value='{$type}'>{$type}</option>";
  }
  
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
  
  for ($i = 6; $i <= 100; $i++) {
    echo "<option value='{$i}'>{$i}</option>";
  }
  
?>