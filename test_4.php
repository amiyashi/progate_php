<?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 7;
  
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
      default :
        echo '凶です。';
        break;
    }
    
    // この下に配列を作ってください
    $colors = array('赤', '青', '黄');
    echo $colors[0];
    $colors[] = '白';
    echo $colors[3];
    
    // この下に連想配列を作ってください
    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);
    $scores['国語'] += 5;
    echo $scores['国語'];
    
    // 変数$iを定義してください
    $i = 2;
    
    // while文を書いてください
    while($i <= 100) {
      if ($i % 2 == 0) {
        echo $i;
        echo '<br>';
      }
      $i++;
    }
    
    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書いてください
    foreach($scores as $key => $value) {
      echo $key.'は'.$value.'点です。';
    } 
    
    // 関数helloを定義してください
    function hello() {
      echo 'Hello, world!';
    }
    
    // 関数helloを呼び出してください
    hello();
    
    echo '<br>';
    // 関数printRectangleAreaを定義してください
    function printRectangleArea($height,$width) {
      echo $height * $width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5, 10);
    
  
  ?>
  
  <select name="category">
    <option value="未選択">選択してください</option>
    <?php
      foreach($types as $type) {
        echo "<option value='{$type}'>{$type}</option>";
      }
    ?>
  </select>