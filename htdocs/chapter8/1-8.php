<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // - コンピュータは2進数でしか理解できない。
        // - それを理解できるようにするために`型`が存在する。
        // - phpではデータ型は`基本型`、`スカラ型`、`複合型`の3種類で呼ばれる。
        // - `基本型`はそれ以上、分割できない型を指す。
        // - `複合型`は、基本型を使った料理みたいなもの。
        // - `スカラ型`は、、特に説明はないが、前回までに学んだ4つのやつ。
        // - 連想配列は、`key`と`value`のセットで表す。
        // - arrayの(1)は、配列の中身の数。
        // - string(5)は、appleの文字数。
        // - 複数の値も代入できる。その際は、`,`カンマで区切って改行する。
        $array = [
            'fruit' => 'apple',
            'fruit' => 'orange',
            'drink' => 'coffee',
            'fruit' => 'banana',
            'drink' => 'green tea',
        ];
        echo $array;
        echo '<br>';
        var_dump($array);
        echo '<br>';
        echo $array['drink'];
        echo '<br>';
        // array(2) { ["fruits"]=> string(6) "banana" ["drink"]=> string(9) "green tea" }
        // - この場合、出力は、上記のようになった。
        // - array(2)の`2`は、キーの数を指している。
        // - 出力されるのは対応するキーの最後尾のレコードの`value`
        // - この連想配列では、`fruits`キーのレコードの最終である`banana`というvalueが出力された。
        // - また、`drink`キーでは、最終である`green tea`というvalueが出力された。
        // - 変数に対してキーを指定してあげると、その中身のvalueのレコードを取得できる。
        $array['food'] = 'yakitori';
        echo $array['food'];
        echo '<br>';
        var_dump($array);
        echo '<br>';
        // - 上記のように、keyとvalueは追加することもできる。
    ?>
</body>
</html>
