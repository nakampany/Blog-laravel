<?php
    // クラスの宣言
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo "bowbow!" . PHP_EOL;
        }
    }

    // インスタンスの生成
    $animal_1 = new Animal();
    // インスタンスの使用
    $animal_1->bow();
?>