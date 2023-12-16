<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo 'こんにちは';
            echo '<br>';
        }
        echo $i;
        echo '<br>';
        echo '<hr>';

        for ($x = 0; $x < 10; $x++) {
            $count = (string) $x; // 暗黙の型変換を行わず自らのコードでinteger型からstring型にcast（変換）している。
            echo $count . '回目の繰り返しです。';
            echo "{$count}ダブルクォーテーションで変数を埋め込むこともできるよ";
            echo '<br>';
        }
        echo '<hr>';

        // 掛け算のfor文
        for ($i = 1; $i < 10; $i++) {
            for ($j = 1; $j < 10; $j++) {
                $x = $i * $j;
                echo "{$i}x{$j}={$x}";
                echo '<br>';
            }
        }
        echo '<hr>';
    ?>
</body>
</html>
