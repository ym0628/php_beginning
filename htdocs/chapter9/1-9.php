<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $player = [ "仁志", "清水", "高橋", "松井", "清原",];
        var_dump($player);
        echo '<br>';
        array_push($player, '江藤', '二岡', '阿部', '上原');
        var_dump($player);
        echo '<br>';
        echo '<hr>';

        $giants = [ "仁志", "清水", "高橋", "松井", "清原",];
        $japan = [ "ヌートバー", "近藤", "大谷", "村上" ];
        echo '<br>';
        $all_star = array_merge($giants, $japan);
        var_dump($all_star);
        echo '<br>';
        echo '<hr>';
        var_dump($giants);
        echo '<br>';
        echo '<hr>';
    ?>
</body>
</html>
