<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // ビルトイン関数の例1
        $array = [1, 2, 3];
        $x = count($array);
        echo $x;
        // => 3 (配列の要素の数をカウントしてくれる関数count)

        // ビルトイン関数の例2
        $z = -10;
        $absolute_number = abs($z);
        echo $absolute_number;
        echo '<br>';
        echo '<hr>';
        // => 10 (値の絶対値を返してくれる関数abs -10の絶対値は10である => absolute numberの略称)
        
        // ユーザー定義関数の例
        function add_01($x, $y) {
            $z = $x + $y;
            return $z;
            }
            
            $sum_01 = add_01(15, 6);
            echo $sum_01;
            echo '<br>';
            echo '<hr>';
            // => 21と表示される。
        // プログラムは通常、上から順番に実行されるが、関数の場合はその限りではない。phpの場合は、関数の呼び出しは後でも大丈夫。
        // プログラミング言語の種類によっては上から順番に記述しないとエラーになる場合があるので注意。

        function add_02($xx, $yy) {
            $zz = $xx + $yy;
            return $zz;
            }
            
            $a = 15;
            $b = 6;
            $sum_02 = add_02($a, $b);
            echo $sum_02;
            echo '<br>';
            echo '<hr>';
    ?>
</body>
</html>
