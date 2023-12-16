<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // while文で「マイナスの数があるか判定する」プログラム
        $arr = [12, 45, 22, 67, 36, 5, 56, 13];

        // 配列の要素数を取得
        $num = count($arr);
        $message = '含まれていません';
        // 初期化式
        $i = 0;
        while ( $i < $num) {
            $value = $arr[$i];
            if ($value < 0) {
                $message = '含まれています';
                break;
            }
            // 更新式
            $i++;
        }
        echo $message;
        echo '<br>';
        echo '<hr>';

        // foreach文
        $array = [1, 2, 3, 4, 5];

        foreach($array as $value) {
            echo $value;
            echo '<br>';
        }
        echo '<br>';
        echo '<hr>';

        // foreachで「マイナスの数があるか判定する」プログラム
        $num_array = [12, 45, 22, 67, 36, 5, 56, 13];
        $message = 'マイナスの数は含まれていません';
            foreach($num_array as $number) {
                if($number < 0) {
                    $message = 'マイナスの数が含まれています';
                    break;
                }
            }
        echo $message;
        echo '<br>';
        echo '<hr>';

        // foreachで「マイナスの数があるか判定する」プログラム
        $fruits = [
            'apple' => 3,
            'orange' => 5,
            'grape' => 2
        ];

        foreach($fruits as $key => $value) {
            echo "{$key}の数は{$value}個です。";
            echo '<br>';
        }
        echo '<br>';
        echo '<hr>';
    ?>
</body>
</html>
