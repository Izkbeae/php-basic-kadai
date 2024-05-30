<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        // ここにコードを書いていく
        function sort_2way($array, $order) {
            if ($order) {
                sort($array);
            } else {
                rsort($array);
            }
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }
        $nums = [15, 4, 18, 23, 10];
        echo "昇順ソート:<br>";
        sort_2way($nums, true);
        echo "降順ソート:<br>";
        sort_2way($nums, false);

        ?>
    </p>
</body>
</html>
