<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // データ型：NULL型とキャスト演算について学ぶ
    // $x = NULL;
    // booleanなどの真偽値やNULLなどは大文字で書くのが慣例となっている。
    // NULLとは「無」を表すためのデータ型である。
    // 変数名には日本語も使えるものの、実用上、ほぼ英語しか使用しないので注意。
    // $Saturday_job = TRUE;
    // $Saturday_job_yes_or_no = TRUE or FALSE;
    // $Saturday_job_yes_or_no = "そもそも仕事してない"; = NULL;
    // このような真偽値ではない第三の選択肢を表すことなどに使う。
    // LINE ID教えて = いいよ=TRUE, いやだ=FALSE, ID持ってない=NULL;
    // PHPのデータ型は全部で10個ある。そのうちここまで5個覚えたましたね。
    // キャスト演算は単項演算
    // キャストとは型変換のことを指す。
    // ドル => 円, グラム => キロ, など

    // 重要な構文 var_dump;（正確には関数）
    var_dump(1);
    echo '<br>';
    // => int(1)
    // この構文はecho同様、出力するメソッドである。
    // 値と値のデータ型をセットで出力するというメソッドである。
    // htmlで表現する時には使わないが、上記の通り詳細な情報を教えてくれるので、デバッグの時によく使うらしい。
    var_dump(1);
    echo '<br>';
    var_dump('1');
    echo '<br>';
    // また、`var_dump`は変数に対しても使うことができる。
    $x = TRUE;
    var_dump($x);
    echo '<br>';
    // => bool(true)
    // 用途としては、コードが肥大化した時、変数が何に対して付けられているか分からなくなることがあるので、そんな時にvar_dumpをよく使用する。

    // 続いてはキャスト演算について
    $to_s = (string) 10;
    var_dump($to_s);
    echo '<br>';

    $to_i = (int) '10';
    var_dump($to_i);
    echo '<br>';

    // このように、()の中のデータ型に変換するというvar_dumpの使い方の応用。
    // すべての変換規則を覚える必要はない。複雑すぎるので。

    // phpの暗黙の型変換
    $xx =  '10' + '10';
    echo $xx;
    echo '<br>';
    var_dump($xx);
    echo '<br>';
    // => 20と表示される。
    // => var_dumpの結果もint(20)と表示される。
    // 無理やりcastキャストしてくれる。
    // 弱い型付けの言語と呼ぶ。
    // JavaScriptも暗黙の型変換してくれる。
    // 優しい反面、バグの温床にもなっているので注意。
    // 確か、Rubyは勝手に型変換してくれなかった気がする、、、
    // 何よりも正しいデータ型でプログラミングすることが重要である。
    // 本来は、'' で囲っているので、Stringであるため、'1010'となるはずだが、phpは暗黙的に数値として判断してくれ、よしなに取り計らってくれるようだ。
  ?>
</body>
</html>
