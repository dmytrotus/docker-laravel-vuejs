<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::table('products')->truncate();

        $faker = Faker::create(Product::class);

        for($i = 1; $i <= 500; $i++ ){

        	$name = $faker->company;

                DB::table('products')->insert([
                'title' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
