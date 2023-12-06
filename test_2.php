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
    
?>