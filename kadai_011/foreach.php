<?php
// Step 2: 連想配列を作成する
$vegetable = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// Step 3: foreach文を使って連想配列の値とキーを出力する
foreach ($vegetable as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
