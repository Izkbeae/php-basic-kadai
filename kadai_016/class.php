<?php
// Foodクラスの定義
class Food {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function show_price() {
        echo $this->price . "\n";
    }
}

// Animalクラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getName() {
        return $this->name;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function show_height() {
        echo $this->height . "\n";
    }
}

// Foodクラスのインスタンス作成
$potato = new Food("potato", 250);
print_r($potato);

// Animalクラスのインスタンス作成
$dog = new Animal("dog", 60, 5000);
print_r($dog);

// メソッドの実行
$potato->show_price();
$dog->show_height();
?>
