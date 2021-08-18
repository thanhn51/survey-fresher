<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Chocolate', 'Banana', 'Fried Chicken'];
        foreach ($names as $name) {
            $food = new Food();
            $food->name = $name;
            $food->description = $name . " Description";
            $food->image = $name . ".png";
            $food->save();
        }
    }
}
