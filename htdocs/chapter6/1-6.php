<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $br_hr = '<br><hr><br>';

    // if文
    // 条件い合致するものに対して、処理を実行する。
    // if (bool型の値) {
    //   命令
    // }
    // TRUEの場合は実行される。FALSEの場合は実行されない。
    if (TRUE) {
      echo '真偽値はTRUEです';
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';

    // FALSEの場合

    if (FALSE) {
      echo '真偽値はTRUEです';
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';

    // 出力 => if関数の外側の出力だよ
    // if関数内の処理は実行されず、関数の外側のechoだけ出力される。

    // ()の中身には変数を入れることもできる。
    echo $br_hr;

    $bool = TRUE;
    if ($bool) {
      $x = 5 + 3;
      echo $x;
      echo '<br>';
    }
    echo 'if関数の外側の出力だよ';
    echo '<br>';

    echo $br_hr;

    // 前回のおさらい論理和 OR　と、論理積 ANDだ。
    // (TRUE || FALSE) = TRUEとなる。 
    // (TRUE $$ FALSE) = FALSEとなる。 
    // これに加えて、今回は比較演算を覚えよう。
    var_dump(1 < 2); // => bool(true)
    echo '<br>';
    var_dump(1 > 2); // => bool(false)
    echo '<br>';

    echo $br_hr;

    // `!`（エクスクラメーションマーク）がつくと、逆の意味になる点には注意しておこう！
    // `!`は、たしかメソッドにつけると、破壊的になるはず？？Rubyではそうだったけど、PHPではまだ分からない。
    var_dump(1 != 2); // bool(true) 逆の真偽値を返すので、等しくない場合にTRUEを返す
    echo '<br>';
    var_dump(1 != 1); // bool(false) 逆の真偽値を返すので、等しい場合にFALSEを返す
    echo '<br>';

    echo $br_hr;

    // 比較演算に対して変数をつけることもできる。
    // なお、比較演算においても暗黙の型変換が行われてしまうので要注意。
    // 親切機能と思いきや、これが開発におけるバグの温床になっているらしい。
    var_dump(1 < 'a');
    // => bool(false)と表示されてしまう。
    // => これ、Rubyだと例外になるんじゃなかったっけ？
    echo $br_hr;

    // phpだとこのような演算式が成立してしまう💦
    echo 'int型とstring型の比較演算の例1';
    echo '<br>';
    var_dump( 1 == '1');
    echo '<br>';
    echo 'int型とstring型の比較演算の例2';
    echo '<br>';
    var_dump( 1 == '2');
    echo '<br>';

    echo $br_hr;
    // phpだとこのような演算式が成立してしまう💦
    // そんな時は、暗黙の型変換を行わない事を指定する比較演算子を使用する
    // それが、`===`である!
    // これの場合、`値の比較に加え、データ型の一致も条件となって真偽値を返してくれるのだ！`
    var_dump( 1 === '1'); // => bool(false)
    echo '<br>';
    var_dump( 1 === '2'); // => bool(false)
    echo $br_hr;
  ?>
</body>
</html>