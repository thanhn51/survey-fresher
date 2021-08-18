<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetController extends Controller
{
    public function getAllPet()
    {
        $pets = Pet::all();
        return view('pet')->with('pets', $pets);
    }

    public function selectPet($id)
    {
        Session::put('pet_id', $id);

        if (empty(User::where('email', Session::get('email'))->first())) {
            $user = new User();
            $user->email = Session::get('email');
            $user->save();
            $user_id = User::where('email', Session::get('email'))->first('id');
            $answer = new Answer();
            $answer->food_id = Session::get('food_id');
            $answer->pet_id = Session::get('pet_id');
            $answer->user_id = $user_id->id;
            $answer->save();
        } else {
            $user = User::where('email', Session::get('email'))->first('id');
            Answer::where('user_id', $user->id)->update([
                "food_id" => Session::get('food_id'),
                "pet_id" => Session::get('pet_id'),
            ]);
        }
        return redirect()->route('result');
    }
}
