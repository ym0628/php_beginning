<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    var_dump((bool) '文字列'); // => bool(true)
    echo '<br>';

    // 続いてelse構文について
    $x = -5;
    if ($x > 0) {
      echo 'プラスだよ';
    } else {
      echo 'マイナスだよ';
    }
    echo '<br>';
    // elseが2つ付いて、合計3つの条件式になったとしても、それが余事象の関係性ならば使える。
    $y = 0;
    if ($y > 0) {
        echo 'プラスだよ';
    } else if ($y < 0) {
        echo 'マイナスだよ';
    } else {
        echo 'ゼロだよ';
    }
    echo '<br>';

    // また、if文は二重に書くこともできる。
    $z = -4;
    if ($z > 0) {
      if ($z % 2 === 0) {
        echo '正の偶数だよ';
      } else {
        echo '正の奇数だよ';
      }
    } elseif ($z < 0) {
      if ($z % 2 === 0) {
        echo '負の偶数だよ';
      } else {
        echo '負の奇数だよ';
      }
    } else {
      echo 'ゼロだよ';
    }
    // （$z = -4 の場合）出力は、、、=> `負の偶数だよ` となる。
  ?>
</body>
</html>
