<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       Product::insert([
            [
            'product_name' => 'Product 1',
            'product_description' => 'Description for Product 1',
            'product_price' => 100.00,
            'product_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/PrateikBabbar.jpg/220px-PrateikBabbar.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 2',
            'product_description' => 'Description for Product 2',
            'product_price' => 200.00,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjDNi_e2AICXF_eDe2tNNy4L6jeKmh06ccPw&s',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 3',
            'product_description' => 'Description for Product 3',
            'product_price' => 300.00,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7NByVj1y3JDzZhomou1guyYHgFAn5hd08lg&s',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 4',
            'product_description' => 'Description for Product 4',
            'product_price' => 400.00,
            'product_image' => 'https://images-eu.ssl-images-amazon.com/images/I/71mX4WATh-L._AC_UL330_SR330,330_.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 5',
            'product_description' => 'Description for Product 5',
            'product_price' => 500.00,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ7wXFA2a5CfyMEJeABYTF27pA1AURFiCffw&s',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 6',
            'product_description' => 'Description for Product 6',
            'product_price' => 600.00,
            'product_image' => 'https://www.lashkaraa.com/cdn/shop/products/laksharaa20-090228059.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 7',
            'product_description' => 'Description for Product 7',
            'product_price' => 700.00,
            'product_image' => 'https://cdn.shopify.com/s/files/1/1762/5129/files/indian-clothes-for-summer.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 8',
            'product_description' => 'Description for Product 8',
            'product_price' => 800.00,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiJGWYUe0UlIXLSG7MM6_ORRrT3E9JtcXOsmgeJ_S6p8I2bV53mC89DrAArGXnT-LuDNA&usqp=CAU',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 9',
            'product_description' => 'Description for Product 9',
            'product_price' => 900.00,
            'product_image' => 'https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/2024/DECEMBER/24/T3PmDWGb_ecba0cf5b37f4acf98266be20bae3a25.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'product_name' => 'Product 10',
            'product_description' => 'Description for Product 10',
            'product_price' => 1000.00,
            'product_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5yFyiCbJaiBRVIhyqCs5pVzaoq-nMUzmhi000d5HeJAHONI_IuXoIXq8dpnWK1dFT7QI&usqp=CAU',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
