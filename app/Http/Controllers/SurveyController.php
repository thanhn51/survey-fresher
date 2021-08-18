<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailValidate;
use App\Models\Answer;
use App\Models\Food;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SurveyController extends Controller
{
    public function getAll()
    {

    }

    public function getAllResult()
    {
        $arr = [];
        $pet = Pet::all('name');
        $food = Food::all('name');
        for ($i = 0; $i <= count($pet); $i++) {
            for ($j = 0; $j <= count($food); $j++) {
                if ($i == 0 && $j == 0) {
                    $arr[$i][$j] = '';
                }
                if ($i == 0 && $j != 0) {
                    $arr[$i][$j] = $pet[$j - 1]->name;
                }
                if ($i != 0 && $j == 0) {
                    $arr[$i][$j] = $food[$i - 1]->name;
                }
                if ($i != 0 && $j != 0) {
                    $survey = Answer::where('pet_id', $j)
                        ->where('food_id', $i)
                        ->count();
                    $arr[$i][$j] = $survey;
                }
            }
        }
        $food_id = \session()->get('food_id');
        $pet_id = \session()->get('pet_id');
        $selectedId = $pet_id.$food_id;
        return view('results', compact('arr','selectedId'));
    }




    public function getEmail(EmailValidate $request)
    {
        $email = $request->email;
        $isExisted = User::where('email', $email);
        session()->put('email', $email);
        if ($isExisted) {
            return redirect()->route('food');
        } else {
            return redirect()->route('food');
        }
    }

    public function createEmail()
    {
        session()->forget('email');
        session()->forget('food_id');
        session()->forget('pet_id');
        return view('welcome');
    }

}
