<?php
// Menuクラスを定義しましょう
class Menu {
}  


// Menuクラスのインスタンスを作り、変数$curryに代入してください
$curry = new Menu();

// Menuクラスのインスタンスを作り、変数$pastaに代入してください
$pasta = new Menu();


class Menu {
  // $nameというプロパティを定義してください
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入してください
$curry->name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入してください
$pasta->name = 'PASTA';

// $curryのnameプロパティをechoしてください
echo $curry->name;

echo '<br>';
// $pastaのnameプロパティをechoしてください
echo $pasta->name;


// helloメソッドを定義してください
public function hello() {
  echo '私はMenuクラスのインスタンスです';
}

// $curryに対してhelloメソッドを呼び出してください
$curry -> hello();

?>