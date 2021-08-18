<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Dog', 'Cat', 'Hamster'];
        foreach ($names as $name) {
            $food = new Pet();
            $food->name = $name;
            $food->description = $name . " Description";
            $food->image = $name . ".png";
            $food->save();
        }
    }
}
