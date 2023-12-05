<!--$xの値に10を足し、$xを上書き➝$xをecho-->
<?php
  $x += 10;
  echo $x;
?>

<?php

  // 変数$numを定義し、好きな数字を代入してください
  $num = 24;
  
  // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
  $remainder = $num % 3;
  
  // switch文を用いてください
  switch($remainder) {
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
  }
  
  ?>
  
<?php

  // この下に連想配列を作ってください
  $scores = array('数学' => 70, '英語' => 90, '国語' => 80);
  
  $scores['国語'] += 5;
  
  echo $scores['国語'];
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
    if ($i > 500) {
      break;
    }
    echo $i;
    echo '<br>';
  }
   
?>