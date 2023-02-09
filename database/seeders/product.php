<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('product')->insert([
            'product_name' => 'Quạt điện thông dụng',
            'category_id' => '1',
            'order_id' => '25',
            'product_code' => '255',
            'product_weight' => '30',
            'quantity' => '20'
         ]);
    }
}
