<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function selectFood($id)
    {
        Session::put('food_id', $id);
        return redirect()->route('pet');
    }

    public function getAllFood()
    {
        $foods = Food::all();
        return view('food')->with('foods', $foods);
    }
}
