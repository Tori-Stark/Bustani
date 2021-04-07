<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
    [
        'name'=>'Banana fruit',
            "description"=>"Fresh bananas",
            "price"=>"10",
            "product_image"=>"C:\Users\laure\Desktop\school\imagesIAP\banan"
    ],
    [
        'name'=>'Watermelon fruit',
            "description"=>"Big,juicy watermelon",
            "price"=>"100",
            "product_image"=>"C:\Users\laure\Desktop\school\imagesIAP\watermelon"
    ],
    [
        'name'=>'Strawberry fruit',
            "description"=>"Fresh strawberries",
            "price"=>"150",
            "product_image"=>"C:\Users\laure\Desktop\school\imagesIAP\strawberry"
    ],
    [
        'name'=>'Fruit platter',
            "description"=>"Fresh fruits",
            "price"=>"100",
            "product_image"=>"C:\Users\laure\Desktop\school\imagesIAP\fruits"
    ]]);
    }
}
