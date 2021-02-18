<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Iphone 11',
                'price'=>'$250.00',
                'category'=>'Phones',
                'description'=>'New, black, 64GB ',
                'gallery'=>'https://i.insider.com/https://i2.wp.com/burnpedia.com/wp-content/uploads/2020/09/Things-You-Dont-Know-About-a-Smart-TV-1.jpg?w=753&ssl=1',
            ],
            [
                'name'=>'Iphone XR',
                'price'=>'$200.00',
                'category'=>'Phones',
                'description'=>'New, Silver, 64GB ',
                'gallery'=>'https://cdn.shopify.com/s/files/1/0347/8496/8840/products/cmi_iphone_xr_toughneon_pink_1.jpg?v=1605202813',
            ],
            [
                'name'=>'Iphone 7',
                'price'=>'$160.00',
                'category'=>'Phones',
                'description'=>'New, black, 64GB ',
                'gallery'=>'https://www.cellularcountry.com/cache/scaled/Apple_iPhone_7_32GB_Smartphone_-_Verizon_-_Rose_Gold_96571_w425_h380.jpg',
            ],
            [
                'name'=>'Iphone 8',
                'price'=>'$180.00',
                'category'=>'Phones',
                'description'=>'New, black, 64GB ',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-8-new-1.jpg',

            ]
        ]);
    }
}
