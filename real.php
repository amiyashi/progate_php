<?php
for ($i = 0; $i <= 100; $i += 10) {
    echo "<option value='{$i}'>{$i}</option>";
  }
  
echo $_POST['age'];

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo '{$i}は、3と5の両方の倍数です。';
  } elseif ($i % 3 == 0) {
    echo '{$i}は3の倍数です。';
  } elseif ($i % 5 == 0) {
    echo '{$i}は5の倍数です。';
  } else {
    echo '{$i}は3の倍数でも5の倍数でもありません。';
  }
}

for ($i = 1; $i <= 9; $i++) {
    for ($x = 1; $x <= 9; $x++) {
        $result = $i * $x;
        echo "{$i}.'×'.{$x}.'は'.{$result}.'です'";
    }
}

?>