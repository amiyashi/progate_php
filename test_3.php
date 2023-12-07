<?php

  // この下に配列を作ってください
  $colors = array('赤', '青', '黄');
  echo $colors[0];
  $colors [] = '白';
  echo $colors[3];
  
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
  
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

  // この下にforeach文を書いてください
  foreach ($scores as $key => $value) {
    echo $key.'は'.$value.'点です。';
  }
  
?>