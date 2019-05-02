<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $name = array("Bánh nhân đỗ ","Bánh Thúy Đen","Bánh Ngọt","Bánh măn","Bánh mỳ ruốc", "Bánh trứng");
        $img = array("a7.jpg","banhmi1.jpg","31abanh_400x300.jpg","tải xuống.jpeg","jxs1307794611.jpg", "banhmyxiunb.jpg");
        for ($i = 0; $i<= 30; $i++) {



            DB::table('products')->insert([
//                'name' => 'Dat'.mt_rand(1, 100),
//                'img' => str_random(10).'.jpg',
//                'category_id' => mt_rand(1, 3),
//                'price' => mt_rand(100000, 999999),
//                'is_sale' => mt_rand(0, 1),
                'name' => $name[array_rand($name,1)] ,
                'img' => $img[ array_rand($img,1) ] ,
                'category_id' => rand(1, 4),
                'price' => rand(1, 4) * 10000,
                'is_sale' => 0,
                'is_feature' => 0,
                'created_by' => 1,
            ]);
        }
    }
}
