<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Shore;

class ShoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0 ; $i < 20; $i++) {
            $newShore = new Shore;
            $newShore->name = $faker->company();
            $newShore->location = $faker->streetAddress(); 
            $newShore->beach_umbrella = $faker->numberBetween(30, 300);
            $newShore->beach_bed = $faker->numberBetween(60, 600);
            $newShore->daily_price = $faker->randomFloat(2, 10, 40);
            $newShore->opening_date = $faker->date();
            $newShore->closing_date = $faker->date('y-m-d', 'now');
            $newShore->has_volley_field = $faker->boolean();
            $newShore->has_soccer_field = $faker->boolean();
            $newShore->save();
        }
    }
}
