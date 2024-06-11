<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\categories;
use App\Models\products;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<10;$i++){
            products::create(
                [
                    'name'=>$faker->word,
                    'img'=>'post-item'.$i.'.jpg',
                    'description'=>$faker->sentence,
                    'price'=>$faker->randomFloat(2,10,10000),
                    'quantity'=>$faker->numberBetween(1,100),
                    'sold'=>$faker->numberBetween(1,100),
                    'category_id'=>$faker->numberBetween(1,10)

                ]
                );
        }
    }
}
