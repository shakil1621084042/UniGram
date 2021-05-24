<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {

        $user= (User::findOrFail($user));
       // dd($user); //echoes out the variable and stops al operations
        return view('profiles.index', [
            'user' => $user
        ] );
    }
}
