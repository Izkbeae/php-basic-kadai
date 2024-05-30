<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        function sort_2way(&$array, $order) {
            if ($order) {
                sort($array);  // 昇順ソート
            } else {
                rsort($array);  // 降順ソート
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソート
        sort_2way($nums, TRUE);
        echo "昇順ソート:<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }

        // 配列を元に戻す
        $nums = [15, 4, 18, 23, 10];

        // 降順ソート
        sort_2way($nums, FALSE);
        echo "降順ソート:<br>";
        foreach ($nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>
</html>
