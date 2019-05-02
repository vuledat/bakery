<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

    $name = array("Bánh nhân đỗ ","Bánh Thúy Đen","Bánh Ngọt","Bánh măn","Bánh mỳ ruốc", "Bánh trứng");
    $img = array("a7.jpg","banhmi1","31abanh_400x300.jpg","tải xuống.jpeg","jxs1307794611.jpg", "banhmyxiunb.jpg");

    return [
        'name' => array_rand($name,1),
        'img' => array_rand($img,1),
        'category_id' => rand(1, 4),
        'price' => rand(1, 4) * 10000,
        'is_sale' => 0,
        'is_feature' => 0,
        'created_by' => 1,
    ];
});
